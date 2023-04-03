<?php 
  ob_start();

  session_start(); 
  
  if(isset($_SESSION['id'])) {
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "datadive";

    // $servername = "localhost";
    // $username = "daggrega_datadive";
    // $password = "?Ztqp9!NVzW,";
    // $db = "daggrega_datadive";
  
    
    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $db);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['upload'])){

      $image = $_FILES['image']['name'];
      $tmp_name = $_FILES["image"]["tmp_name"];
      $body = $_POST['body'];
      $header = $_POST['header'];

      $tmp_name = trim($tmp_name);
      $body = trim($body);
      $body = strip_tags($body);
      $header = trim($header);
  

      if(!empty($image)) {

        $upload_folder = "img/";
        $upload_with_time = time().$image;
        $file_location = $upload_folder . basename($upload_with_time);
        move_uploaded_file($tmp_name, $file_location);
      
        $name = "img/".$upload_with_time;
        
        $insert_slide="INSERT INTO slider (images,body,header) VALUES('$name','$body','$header')";
      $var=mysqli_query($conn,$insert_slide);
      if(!$var)
      {
          echo "Error";
      }else{
        header('Location:all_slider.php');
      }
          
        }

      }



  } else {

  header("location: ../login/index.php");


  }


?>


<?php include_once "header.php" ?>
  <main class="main-content">
    <?php include_once "sidebar.php" ?>
    <div class="contents">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="shop-breadcrumb">
              <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Add Slider</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="product-add global-shadow px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
              <div class="row justify-content-center">
                <div class="col-xxl-7 col-lg-10">
                  <div class="mx-sm-30 mx-20 ">

                    <div class="card add-product p-sm-30 p-20 mb-30">
                      <div class="card-body p-0">
                        <div class="card-header">
                          <h6 class="fw-500">Slider Form</h6>
                        </div>

                        <div class="add-product__body px-sm-40 px-20">

                          <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                              <label for="name1">Header</label>
                              <input type="text" class="form-control" name="header" required>
                            </div>

                            <div class="form-group">
                              <label for="name2">Image Upload</label>
                              <input type="file" class="form-control" name="image" required>
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Body</label>
                              <textarea name="body"></textarea>

                              <script>
                          
                                CKEDITOR.replace( 'body', {
                                    
                                });
                              </script>
                            </div>

                            <div class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                     
                              <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize" name="upload">Save
                              </button>
                            </div>

                          
                          </form>

                        </div>

                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    

    <?php include_once "footer.php" ?>
<?php 
 session_start(); 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "datadive";

 // Create connection

 $conn = mysqli_connect($servername, $username, $password, $db);
 // Check connection
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }


  
    $fname = $_POST['fname'];
	  $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phoneno'];
    $plan = $_POST['plan'];
    $price = $_POST['price'];
    $password = $_POST['password'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    
    $fname = trim($fname);
    $lname = trim($lname);
    $email = trim($email);
    $phone = trim($phone);
    $password = trim($password);
    
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $password = mysqli_real_escape_string($conn, $password);

     //File Upload
     if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

        $extensions= array("pdf","doc","docx","xls","xlsx","ppt","txt");

        if(in_array($file_ext,$extensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if($file_size > 2097152) {
            $errors[]='File size must be excately 2 MB';
        }

        if(empty($errors)==true) {
            move_uploaded_file($file_tmp,"request_doc/".$file_name);
            echo "Success";
        }else{
            print_r($errors);
        }
    }
    
    
    $the_pass = md5($password);
    
    $expire_date = date('Y-m-d', strtotime("+30 days"));
    
    
    $whsql = "INSERT INTO users (fname, lname, email, phoneno, password,plan,price,status,expired_at,doc) VALUES ('$fname','$lname','$email','$phone','$the_pass','$plan','$price','1','$expire_date', '$file_name')";
      $re = mysqli_query($conn,$whsql);
      
      if($re) {
       
        $last_id = mysqli_insert_id($conn);
        $check =  "SELECT * FROM users WHERE id = '$last_id'";
        $result1 = mysqli_query($conn,$check);
        $result = mysqli_fetch_array($result1);
        $_SESSION['id'] = $result["id"];

        echo $_SESSION['id'];
  
        
      } else {
        
        echo "Registration failed";
      }
    
?>
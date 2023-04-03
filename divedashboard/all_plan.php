<?php
  ob_start();

  session_start(); 
  
  if(isset($_SESSION['id'])) {
  
  
  
  } else {
  
  header("location: ../divelogin/index.php");
  
  
  }
?>
<?php include_once "header.php" ?>
<main class="main-content">
  <?php include_once "sidebar.php" ?>
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 mb-30">
          <div>
            <a href="plan.php" class="btn btn-sm btn-primary mt-3">Add Plan</a>
          </div>
          <div class="card mt-30">
            <div class="card-header">
              <h2>All Plans</h2>
            </div>
            <div class="card-body">
              <div class="table4 p-25 mb-30">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr class="userDatatable-header">
                        <th>
                          <span class="userDatatable-title">S/N</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Plan Name</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Price</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Packages</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Body</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Action</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Action</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php

                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $db = "datadive";

                          // $servername = "localhost";
                          // $username = "daggrega_datadive";
                          // $password = "?Ztqp9!NVzW,";
                          // $db = "daggrega_datadive";
                        


                                  // Create connection
                          $conn = mysqli_connect($servername, $username, $password,$db);


                          $sql ="SELECT * FROM plans";

                          $result3 = mysqli_query($conn,$sql);

                          $sn = 0;
                          while($row = mysqli_fetch_assoc($result3)){

                        ?>

                        
                            <tr>
                              <td><?php echo $sn+=1; ?></td>
                              <td><?php echo $row['plan_name'] ?></td>
                              <td><?php echo $row['price'] ?></td>
                              <td><?php echo $row['package'] ?></td>
                              <td><?php echo $row['body'] ?>...</td>
                              <td><a href="edit_plan.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a></td>&nbsp;&nbsp;
                              <td>
                              <a onClick="javascript: return confirm('Are you sure you want to delete');" href="delete_plan.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                              </td>
                            </tr>

                          <?php

                            }
                          ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once "footer.php" ?>
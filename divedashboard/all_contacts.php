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
         
          <div class="card mt-30">
            <div class="card-header">
              <h2>All Requests</h2>
            </div>
            <div class="card-body">
              <div class="table4 p-25 mb-30">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr class="userDatatable-header">
                        
                        <th>
                          <span class="userDatatable-title">First Name</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Last Name</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Email</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Phone Number</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Message</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Sent On</span>
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

                          include_once "../class/db.php";

                          if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                          }else{
                            $page = 1;
                          }
    
                          $number_per_page = 05;
                          $start_from = ($page - 1)*$number_per_page;

                          $sql ="SELECT * FROM contactus ORDER BY id DESC LIMIT $start_from, $number_per_page";

                          $result3 = mysqli_query($conn,$sql);

                          $sn = 0;
                          while($row = mysqli_fetch_assoc($result3)){

                        ?>

                        
                            <tr>
                             
                              <td><?php echo $row['fname'] ?></td>
                              <td><?php echo $row['lname'] ?></td>
                              <td><?php echo $row['email'] ?></td>
                              <td><?php echo $row['phoneno'] ?>...</td>
                              <td><?php echo $row['message'] ?></td>
                              <td><?php echo date( "d F Y", strtotime($row['created_at'])); ?> </td>

                              <td>
                                <a id="contactrequest" href="#" data-bs-toggle="modal" data-bs-target="#contactModal"
                                  data-myfname="<?php echo $row['fname']; ?>" 
                                  data-mylname="<?php echo $row['lname']; ?>" 
                                  data-c_myemail="<?php echo $row['email']; ?>" 
                                  data-c_myphoneno="<?php echo $row['phoneno']; ?>" 
                                  data-c_mymessage="<?php echo $row['message']; ?>" 
                                  data-c_mydate="<?php echo date('M j, Y', strtotime($row['created_at'])) ?>" title="View Details">
                                  <i style="color:green;" class="fas fa-fw fa-eye"></i></a>
                              </td>
                            
                              <td>
                              <a onClick="javascript: return confirm('Are you sure you want to delete');" href="delete_contact.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
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

      <div class="row">
        <div class="col-12">
          <div class="user-pagination">
            <div class="d-flex justify-content-md-end justify-content-end mt-1 mb-50">
              <nav class="dm-page ">
                <ul class="dm-pagination d-flex">
                  <li class="dm-pagination__item">

                    <?php 
                      $pr_query = "SELECT * FROM vip_data_buyer";
                      $pr_result = mysqli_query($conn, $pr_query);
                      $total_record = mysqli_num_rows($pr_result);

                      $total_page = ceil($total_record/$number_per_page);

                      if ($page > 1) {
                        echo " <a href='all_contacts.php?page=".($page-1)."' class='dm-pagination__link pagination-control'><span class='la la-angle-left'></span></a>";
                       
                      }

                      for ($i=1; $i < $total_page; $i++) { 
                        echo "<a href='all_contacts.php?page=".$i."' class='dm-pagination__link'><span class='page-number'>$i</span></a>";
                        
                      }

                      if ($i > $page) {
                        echo "<a href='all_contacts.php?page=".($page+1)."' class='dm-pagination__link pagination-control'><span class='la la-angle-right'></span></a>";
                        
                      }
                    ?>
                    <!-- <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                    <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                    <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                    <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                    <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                    <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                    <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                    <a href="#" class="dm-pagination__option">
                    </a> -->
                  </li>
                  <!-- <li class="dm-pagination__item">
                    <div class="paging-option">
                      <select name="page-number" class="page-selection">
                        <option value="20">20/page</option>
                        <option value="40">40/page</option>
                        <option value="60">60/page</option>
                      </select>
                    </div>
                  </li> -->
                </ul>
              </nav>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
  <?php include_once "footer.php" ?>
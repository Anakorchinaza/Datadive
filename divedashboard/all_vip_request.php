<?php
  ob_start();

  session_start();

  if (isset($_SESSION['id'])) {
  } else {

    header("location: ../retail_login/index.php");
  }

  if (isset($_GET['budget'])) {

    $budget = $_GET['budget'];
    
  } else {

    header('Location: index.php');
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
              <h2>All Vip Request For Data Expert</h2>
            </div>
            <div class="card-body">
              <div class="table4 p-25 mb-30">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr class="userDatatable-header">
                       
                        <th>
                          <span class="userDatatable-title">Fullname</span>
                        </th>

                        <th>
                          <span class="userDatatable-title">Company Name</span>
                        </th>

                        <th>
                          <span class="userDatatable-title">Work Email</span>
                        </th>

                        <th>
                          <span class="userDatatable-title">Phone Number</span>
                        </th>

                        <th>
                          <span class="userDatatable-title">Budget</span>
                        </th>

                        <th>
                          <span class="userDatatable-title">Urgency</span>
                        </th>

                        <th>
                          <span class="userDatatable-title">Message</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">Sent On</span>
                        </th>
                        <th>
                          <span class="userDatatable-title">View</span>
                        </th>

                        <th>
                          <span class="userDatatable-title">Action</span>
                        </th>
                        

                      </tr>
                    </thead>

                    <tbody>
                        <?php
                          if ($budget == 'specialist') {

                            include_once "../class/db.php";

                            if (isset($_GET['page'])) {
                              $page = $_GET['page'];
                            }else{
                              $page = 1;
                            }

                            $number_per_page = 05;
                            $start_from = ($page - 1)*$number_per_page;

                            $sql = "SELECT * FROM vip_data_buyer WHERE budget BETWEEN 50000 AND 1000000 ORDER BY id DESC LIMIT $start_from, $number_per_page";

                            $result3 = mysqli_query($conn, $sql);

                            $sn = 0;
                            while ($row = mysqli_fetch_assoc($result3)) {

                            ?>


                              <tr>
                              
                                
                                <td><?php echo $row['fullname'] ?></td>
                                <td><?php echo $row['company_name'] ?></td>
                                <td><?php echo $row['work_email'] ?></td>
                                <td><?php echo $row['phone_number'] ?></td>
                                <td><span>$</span><?php echo isset($row['budget']) ? number_format($row['budget']) : '' ?></td>
                                <td><?php echo $row['urgency'] ?></td>

                                <td><?php echo isset($row['message']) ? substr($row['message'], 0, 30) : '' ?></td>
                                <td><?php echo date("d F Y", strtotime($row['created_at'])); ?> </td>

                                <td>
                                  <a id="request" href="#" data-bs-toggle="modal" data-bs-target="#contentModal" 
                                    data-myname="<?php echo $row['fullname']; ?>" 
                                    data-mycname="<?php echo $row['company_name']; ?>" 
                                    data-myemail="<?php echo $row['work_email']; ?>" 
                                    data-myphoneno="<?php echo $row['phone_number']; ?>" 
                                    data-mybudget="<span>$</span><?php echo isset($row['budget']) ? number_format($row['budget']) : '' ?>" 
                                    data-myurgency="<?php echo $row['urgency']; ?>" 
                                    data-mymessage="<?php echo $row['message']; ?>" 
                                    data-mydate="<?php echo date('M j, Y', strtotime($row['created_at'])) ?>" title="View Details">
                                    <i style="color:green;" class="fas fa-fw fa-eye"></i></a>
                                </td>

                                <td>
                                  <a onClick="javascript: return confirm('Are you sure you want to delete');" href="deleteviprequest.php?id=<?php echo $row['id']; ?>" title="Delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                              </tr>

                            <?php

                            }

                          }elseif ($budget == 'offers') {
                           
                            include_once "../class/db.php";

                            if (isset($_GET['page'])) {
                              $page = $_GET['page'];
                            }else{
                              $page = 1;
                            }

                            $number_per_page = 05;
                            $start_from = ($page - 1)*$number_per_page;

                            $sql = "SELECT * FROM vip_data_buyer WHERE budget BETWEEN 1000 AND 49000 ORDER BY id DESC LIMIT $start_from, $number_per_page";

                            $result3 = mysqli_query($conn, $sql);

                            $sn = 0;
                            while ($row = mysqli_fetch_assoc($result3)) {

                            ?>


                              <tr>
                              
                                
                                <td><?php echo $row['fullname'] ?></td>
                                <td><?php echo $row['company_name'] ?></td>
                                <td><?php echo $row['work_email'] ?></td>
                                <td><?php echo $row['phone_number'] ?></td>
                                <td><span>$</span><?php echo isset($row['budget']) ? number_format($row['budget']) : '' ?></td>
                                <td><?php echo $row['urgency'] ?></td>

                                <td><?php echo isset($row['message']) ? substr($row['message'], 0, 30) : '' ?></td>
                                <td><?php echo date("d F Y", strtotime($row['created_at'])); ?> </td>

                                <td>
                                  <a id="request" href="#" data-bs-toggle="modal" data-bs-target="#contentModal" 
                                    data-myname="<?php echo $row['fullname']; ?>" 
                                    data-mycname="<?php echo $row['company_name']; ?>" 
                                    data-myemail="<?php echo $row['work_email']; ?>" 
                                    data-myphoneno="<?php echo $row['phone_number']; ?>" 
                                    data-mybudget="<span>$</span><?php echo isset($row['budget']) ? number_format($row['budget']) : '' ?>" 
                                    data-myurgency="<?php echo $row['urgency']; ?>" 
                                    data-mymessage="<?php echo $row['message']; ?>" 
                                    data-mydate="<?php echo date('M j, Y', strtotime($row['created_at'])) ?>" title="View Details">
                                    <i style="color:green;" class="fas fa-fw fa-eye"></i></a>
                                </td>

                                <td>
                                  <a onClick="javascript: return confirm('Are you sure you want to delete');" href="deleteviprequest.php?id=<?php echo $row['id']; ?>" title="Delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                              </tr>

                            <?php

                            }

                          }elseif ($budget == 'dataset') {
                            
                            include_once "../class/db.php";

                            if (isset($_GET['page'])) {
                              $page = $_GET['page'];
                            }else{
                              $page = 1;
                            }

                            $number_per_page = 05;
                            $start_from = ($page - 1)*$number_per_page;

                            $sql = "SELECT * FROM vip_data_buyer WHERE budget BETWEEN 50 AND 999 ORDER BY id DESC LIMIT $start_from, $number_per_page";

                            $result3 = mysqli_query($conn, $sql);

                            $sn = 0;
                            while ($row = mysqli_fetch_assoc($result3)) {

                            ?>


                              <tr>
                              
                                
                                <td><?php echo $row['fullname'] ?></td>
                                <td><?php echo $row['company_name'] ?></td>
                                <td><?php echo $row['work_email'] ?></td>
                                <td><?php echo $row['phone_number'] ?></td>
                                <td><span>$</span><?php echo isset($row['budget']) ? number_format($row['budget']) : '' ?></td>
                                <td><?php echo $row['urgency'] ?></td>

                                <td><?php echo isset($row['message']) ? substr($row['message'], 0, 30) : '' ?></td>
                                <td><?php echo date("d F Y", strtotime($row['created_at'])); ?> </td>

                                <td>
                                  <a id="request" href="#" data-bs-toggle="modal" data-bs-target="#contentModal" 
                                    data-myname="<?php echo $row['fullname']; ?>" 
                                    data-mycname="<?php echo $row['company_name']; ?>" 
                                    data-myemail="<?php echo $row['work_email']; ?>" 
                                    data-myphoneno="<?php echo $row['phone_number']; ?>" 
                                    data-mybudget="<span>$</span><?php echo isset($row['budget']) ? number_format($row['budget']) : '' ?>" 
                                    data-myurgency="<?php echo $row['urgency']; ?>" 
                                    data-mymessage="<?php echo $row['message']; ?>" 
                                    data-mydate="<?php echo date('M j, Y', strtotime($row['created_at'])) ?>" title="View Details">
                                    <i style="color:green;" class="fas fa-fw fa-eye"></i></a>
                                </td>

                                <td>
                                  <a onClick="javascript: return confirm('Are you sure you want to delete');" href="deleteviprequest.php?id=<?php echo $row['id']; ?>" title="Delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                              </tr>

                            <?php

                            }

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
                        echo " <a href='all_vip_request.php?page=".($page-1)."' class='dm-pagination__link pagination-control'><span class='la la-angle-left'></span></a>";
                       
                      }

                      for ($i=1; $i < $total_page; $i++) { 
                        echo "<a href='all_vip_request.php?page=".$i."' class='dm-pagination__link'><span class='page-number'>$i</span></a>";
                        
                      }

                      if ($i > $page) {
                        echo "<a href='all_vip_request.php?page=".($page+1)."' class='dm-pagination__link pagination-control'><span class='la la-angle-right'></span></a>";
                        
                      }
                    ?>
                   
                    </a>
                  </li>
                 
                </ul>
              </nav>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
  <?php include_once "footer.php" ?>
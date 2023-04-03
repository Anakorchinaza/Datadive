<?php include_once "header.php"; ?>

<!--hero section-->

<section class="page-title position-relative overflow-hidden shape-1 right">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="bg-white p-md-5 p-3 d-inline-block">
          <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5">Pricing</span></h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php"><i class="las la-home me-1"></i>Home</a>
              </li>

              <li class="breadcrumb-item"><a href="signin.php">SignIn</a></li>
             
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <canvas id="canvas-1" width="400" height="256"></canvas>
</section>



<!--hero section-->



<!--price table start-->

<section id="pricing" class="shape-1 right position-relative">
  <div class="container mb-5">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10 col-12">
        <div class="mb-6">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
                  <span>Pricing</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Choose the best</span> plan we offer</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- <div class="col-lg-4 col-md-6">
        <div class="price-table rounded bg-white box-shadow">
          <div class="price-title ps-5">Basic</div>
          <div class="price-value my-5 ps-5 d-flex justify-content-between align-items-center">
            <h2 class="mb-0 me-3 text-primary">$22</h2>  <span class="bg-dark px-3 py-2 rounded-start text-white">Monthly package</span> 
          </div>
          <div class="price-list ps-5">
            <ul class="list-unstyled">
              <li class="mb-3">Unlimited Site licenses</li>
              <li class="mb-3">1 Database</li>
              <li class="mb-3">10 Free Optimization</li>
              <li class="mb-3">Html5 + Css3</li>
              <li>24/7 Customer Support</li>
            </ul>
          </div>
          <a class="btn btn-dark mt-5 ms-5" href="#"> <span>Get Started</span> 
          </a>
        </div>
      </div> -->

      
      <!-- <div class="col-lg-4 col-md-6 mt-5">
        <div class="price-table rounded bg-dark">
          <div class="price-title ps-5 text-white">Pro</div>
          <div class="price-value my-5 ps-5 d-flex justify-content-between align-items-center">
            <h2 class="mb-0 me-3 text-white">$77</h2>  <span class="bg-primary px-3 py-2 rounded-start text-white">Monthly package</span> 
          </div>
          <div class="price-list ps-5">
            <ul class="list-unstyled text-white">
              <li class="mb-3">Unlimited Site licenses</li>
              <li class="mb-3">1 Database</li>
              <li class="mb-3">10 Free Optimization</li>
              <li class="mb-3">Html5 + Css3</li>
              <li>24/7 Customer Support</li>
            </ul>
          </div>
          <a class="btn btn-dark mt-5 ms-5" href="#"> <span>Get Started</span> 
          </a>
        </div>
      </div> -->

      <?php
         $query = "SELECT * FROM plans";
         $plan = mysqli_query($conn, $query);
         
         while ($row = mysqli_fetch_assoc($plan)) {
                
                $myplan = $row['plan_name'];

                if($myplan == 'pro' ||  $myplan == 'licence'){

                   ?>

                          <div class="col-lg-3 col-md-3 mt-5">
                            <div class="price-table rounded bg-dark">
                              <div class="price-title ps-5 text-white"><?php echo isset($row['plan_name']) ? ucfirst($row['plan_name']) : '' ?></div>
                              <div class="price-value my-5 ps-5 d-flex justify-content-between align-items-center">
                                <h2 class="mb-0 me-3 text-primary"  style="font-size:30px;"><span>$</span>
                                  <span><b><?php echo isset($row['price']) ? number_format($row['price']) : '' ?></b></b></span>
                                </h2>  
                                <span class="bg-secondary px-3 py-2 rounded-start text-white">
                                    <?php echo isset($row['package']) ? ucfirst($row['package']) : '' ?>
                                </span> 
                              </div>
                              <div class="ps-5 text-white">

                                <?php echo isset($row['body']) ? substr($row['body'],0) : '' ?>
                            
                              </div>
                              <a class="btn btn-dark mt-5 ms-5 thesignup" id="thesignup" href="#" data-bs-toggle="modal" 
                                data-bs-target="#exampleModal" 
                                data-planname="<?php echo isset($row['plan_name']) ? $row['plan_name'] : "" ?>"  
                                data-planbody="<?php echo isset($row['body']) ? $row['body'] : "" ?>"  
                                data-planprice="<?php echo isset($row['price']) ? $row['price'] : "" ?>"> 
                                
                                <span>Signup</span> 
                              </a>
                            </div>
                          </div>

                   <?php


                }else{

                  ?>
                      <div class="col-lg-3 col-md-3 mt-5 mt-lg-0">
                        <div class="price-table rounded bg-white box-shadow">
                          <div class="price-title ps-5"><?php echo isset($row['plan_name']) ? ucfirst($row['plan_name']) : '' ?></div>
                          <div class="price-value my-5 ps-5 d-flex justify-content-between align-items-center">
                            <h2 class="mb-0 me-3 text-primary" style="font-size:30px;"><span>$</span>
                                <span><b><?php echo isset($row['price']) ? number_format($row['price']) : '' ?></b></b></span>
                            </h2>  
                            <span class="bg-dark px-3 py-2 rounded-start text-white">
                                <?php echo isset($row['package']) ? ucfirst($row['package']) : '' ?>
                            </span> 
                          </div>
                          <div class=" ps-5">

                            <?php echo isset($row['body']) ? substr($row['body'],0) : '' ?>
                            
                          </div>
                          <a class="btn btn-dark mt-5 ms-5 thesignup" id="thesignup" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" 
                            data-planname="<?php echo isset($row['plan_name']) ? $row['plan_name'] : "" ?>"  
                            data-planbody="<?php echo isset($row['body']) ? $row['body'] : "" ?>" 
                            data-planprice="<?php echo isset($row['price']) ? $row['price'] : "" ?>"> <span>Signup</span> 
                          </a>
                        </div>
                      </div>
           <?php


                }
          
          }

        ?>
     
    </div>
  </div>
</section>

<!--price table end-->



<?php include_once "footer.php"; ?>
<?php 

    ob_start();

    include_once "header.php"; 
    include_once "class/db.php";
    include_once "class/common.php";

    if (isset($_REQUEST['btnsubmit'])) {
        $fname1 = $_POST['fname'];
        $cname1 = $_POST['cname'];
        $email1 = $_POST['email'];
        $phone_number1 = $_POST['phone_number'];
        $budget1 = $_POST['budget'];
        $urgency1 = $_POST['urgency'];
        $message1 = $_POST['message'];
        
       
 
        include_once "class/common.php";
        $obj = new Common();
 
        $fname = $obj->sanitizeInput($fname1);
        $cname = $obj->sanitizeInput($cname1);
        $email = $obj->sanitizeInput($email1);
        $phone_number = $obj->sanitizeInput($phone_number1);
        $message = $obj->sanitizeInput($message1);
        $urgency =  $obj->sanitizeInput($urgency1);
        $budget =  $obj->sanitizeInput($budget1);
        
        $error = array();
 
        if ($fname == "") {
             $error['fname'] = 'Fullname Field is Required';
        }
        if ($cname == "") {
         $error['cname'] = 'Company Name Field is Required';
        }
        if ($email == "") {
         $error['email'] = 'Email Address Field is Required';
        }
        if ($phone_number == "") {
         $error['phone_number'] = 'Phone Number Field is Required';
        }
        if ($budget == "") {
         $error['budget'] = 'Budget Estimate Field is Required';
        }
        if ($message == "") {
         $error['message'] = 'Message Field is Required';
        }
        
 
 
       if (empty($error)) {
         $the_password = md5($password);
         $insert_vip = "INSERT INTO vip_data_buyer (fullname,company_name,work_email,phone_number,budget,urgency,message) 
             VALUE ('$fname',' $cname', '$email', '$phone_number', '$budget', '$urgency', '$message')";
         $insert_query = mysqli_query($conn, $insert_vip);
 
         if ($insert_query) {
             # redirect
 
             // $lastid = mysqli_insert_id()
             header("Location: vip_buyers.php");
         }else{
             //echo error
             echo "Oops!, Something went wrong";
         }
       }
 
     }
 

?>

<!-- hero section -->
<section class="page-title position-relative overflow-hidden shape-1 right">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="bg-white p-md-5 p-3 d-inline-block">
                    <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5">Data </span>Request</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="data.php"><i class="las la-home me-1"></i>Overview</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <canvas id="canvas-1" width="1366" height="433"></canvas>
</section>


<!-- hero section -->


<!-- consult expert-->

<section>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <img src="images/man.png" alt=".." width="70" height="70" class="mb-3">&nbsp;&nbsp;&nbsp;
                <span class="mb-4" style="font-size: 50px; font-weight:700">Get expert data sourcing advice</span>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-10">
                <p style="font-size: 17px;">
                    Are you starting a larger data sourcing project? Schedule a call with one of our global data sourcing experts.
                    We help you find the right data provider for your use case - free of charge.
                </p>
            </div>
        </div>
    </div>


    <div class="container mb-5">
        <div class="row justify-content-center mb-8">
            <div class="col-lg-8 col-md-12">
                <div class="checkout-form box-shadow p-4 rounded">
                    <h2 class="mb-5" style="font-size: 30px;"><span class="font-w-5">Talk to your </span>personal Data Expert</h2>
                    <form action="" method="post">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <label class="mb-2 ms-5">FullName</label>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 me-5">
                                <input type="text" id="fname" name="fname" class="form-control" value="<?php echo isset($fname) ? $fname : '' ?>">
                                <span style="color:red"><?php echo isset($error['fname']) ? $error['fname'] : '' ?></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="mb-2 ms-5">Company Name</label>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 me-5">
                                <input type="text" id="cname" name="cname" class="form-control" value="<?php echo isset($cname) ? $cname : '' ?>">
                                <span style="color:red"><?php echo isset($error['cname']) ? $error['cname'] : '' ?></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="mb-2 ms-5">Work Email</label>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 me-5">
                                <input type="email" id="email" name="email" class="form-control" value="<?php echo isset($email) ? $email : '' ?>">
                                <span style="color:red"><?php echo isset($error['email']) ? $error['email'] : '' ?></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="mb-2 ms-5">Phone Number</label>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 me-5">
                                <input type="text" id="phone_number" name="phone_number" class="form-control" value="<?php echo isset($phone_number) ? $phone_number : '' ?>">
                                <span style="color:red"><?php echo isset($error['phone_number']) ? $error['phone_number'] : '' ?></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="mb-2 ms-5">Budget Estimate</label>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 me-5">
                                <select class="form-control form-select" name="budget" id="budget">
                                    <option value="">Select from dropdown</option>
                                    <option value="$10,000">$10,000</option>
                                    <option value="$25,000">$25,000</option>
                                    <option value="$50,000">$50,000</option>
                                    <option value="$100,000">$100,000</option>
                                    <option value="$1,000,000">$1,000,000</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="mb-2 ms-5">Sourcing Urgency</label>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 me-5">
                                <select class="form-control form-select" name="urgency" id="urgency">
                                    <option value="">Select Urgency</option>
                                    <option value="Yesterday">Yesterday</option>
                                    <option value="Next week">Next week</option>
                                    <option value="Next month">Next month</option>
                                    <option value="Next quarter">Next quarter</option>
                                
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="mb-2 ms-5">Your Message (optional)</label>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 me-5">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control"><?php echo isset($message) ? $message : '' ?></textarea>
                                <span style="color:red"><?php echo isset($error['message']) ? $error['message'] : '' ?></span>
                            </div>
                        </div>
                </div>
                <div class="row d-grid gap-2 col-6 mx-auto">
                    <div class="col-md-12 d-grid gap-2">
                        <button class="btn btn-primary btn-lg btn-col-8" name="btnsubmit">Submit</button>
                    </div>
                </div>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div>

</section>


<!-- consult expert -->



<?php include_once "footer.php"; ?>
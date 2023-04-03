<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/stacht/ltr/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 09:02:15 GMT -->
<head>


<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="Datadive, consumer intelligence, social intelligence, consumer insights, consumer data, consumer behavior, 
consumer demographics, campaign evaluation, hashtag tracking, target ads, consumer engagement, consumer survey, 
consumer information,  data intelligence,  consumer preferences,  social media engagement, industry trends, marketing campaign evaluation,
brand health, competition tracking, real-time insights, consumer engagement, data-driven insights, marketing ROI, digital campaign analysis,
brand performance,  consumer engagement" />
<meta name="description" content="Datadive - Unlock valuable insights into consumer behavior and preferences with DataDive, a powerful suite of consumer intelligence and social intelligence tools. Track brand performance, analyze digital campaigns, and understand industry trends to 
drive sales and improve marketing ROI. Get a comprehensive understanding of consumer demographics, purchase patterns, and social media engagement with our data-driven solutions" />
<meta name="author" content="Datadive" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title -->
<title>Consumer Insights Signin Page</title>

<!-- Favicon Icon -->
<!-- <link rel="shortcut icon" href="images/favicon.ico" /> -->

<!-- inject css start -->

<!--== bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--== font -->
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<!--== animate -->
<link href="css/animate.css" rel="stylesheet" type="text/css" />

<!--== line-awesome -->
<link href="css/line-awesome.min.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl.carousel -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="css/base.css" rel="stylesheet" type="text/css" />

<!--== shortcodes -->
<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

<!--== spacing -->
<link href="css/spacing.css" rel="stylesheet" type="text/css" />

<!--== style -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--== responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- inject css end -->
<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="./divedashboard/fontawesome/css/all.css">




</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">
  
<!-- preloader start -->

<!-- <div id="ht-preloader">
  <div class="clear-loader d-flex align-items-center justify-content-center">
    <div class="loader"> <span>Stacht</span>
    </div>
  </div>
</div> -->

<!-- preloader end -->
<?php 
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "datadive";

    // $servername = "localhost";
    // $username = "daggrega_datadive";
    // $password = "?Ztqp9!NVzW,";
    // $db = "daggrega_datadive";
  

    $conn = mysqli_connect($servername, $username, $password,$db);

    // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  
  if(isset($_POST['btnsignin'])){
  
      $email = $_POST['email'];
      $password = $_POST['password'];
  
       $email = trim($email);
       $password = trim($password);
  
       $email = mysqli_real_escape_string($conn, $email);
       $password = mysqli_real_escape_string($conn, $password);
  
       $error = [];
  
       if($email ==''){
  
          $error['email'] = 'Email cannot be empty';
  
  
      }
  
  
      if($password == '') {
  
  
          $error['password'] = 'Password cannot be empty';
  
      }
  
  
      if(empty($error)){
  
          $the_pass = md5($password);
          $sql = "SELECT * FROM users WHERE email = '$email'";
          $result = mysqli_query($conn, $sql);
  
          if (mysqli_num_rows($result) > 0) {
  
  
              while($row = mysqli_fetch_assoc($result)) {
                  $id = $row["id"];
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $email = $row['email'];
                  $user_password = $row['password'];

  
                  if($the_pass == $user_password){
                    
                    $_SESSION['id'] = $row["id"];
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    header('Location: insight_dashboard/index.php');
                    exit;
                     
                  }else{
  
                    header('Location: signin.php');
                    exit;
                  }
                }
          }
  
      }
  
  
  }
  
  
  
  
  mysqli_close($conn);
  
  
  ?>


<!--header start-->

<header id="site-header" class="header">
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo mb-0" href="index.php">
              <img class="img-fluid" src="images/data_dive_logo.png" alt="" style="width: 130px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <!-- Home -->

                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Solutions</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="dropdown-item " href="insight.php">Consumer Intelligence Insights  </a>
                    
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item " href="social-intelligence.php">Social Intelligence Insights</a>
                    
                      
                    </li>
                    
                  </ul>
                </li>

                <li>
                  <a  class="nav-link" href="data.php"><i class="fa-sharp fa-solid fa-phone me-2"></i>Consult with data expert</a>
                </li>

                <li>
                  <a  class="nav-link  " href="contact-us.php">Contact Us</a>
                </li>
                <!-- <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                  <ul class="dropdown-menu">
                    <li><a href="index.html">Homepage One</a>
                    </li>
                    <li><a href="index-2.html">Homepage Two</a>
                    </li>
                    <li><a href="index-3.html">Homepage Three</a>
                    </li>
                  </ul>
                </li> -->
                
               
                
                
               
              </ul>
            </div>
            <div class="right-nav align-items-center d-flex justify-content-end">
              <div class="cart">
                <!-- <a href="#" id="header-cart-btn" data-bs-toggle="modal" data-bs-target="#cartModal"> <span class="bg-white rounded px-2 py-1 shadow-sm" data-cart-items="2">
                  <i class="las la-shopping-cart"></i>
                </span>
                </a> -->
              </div> 
              
              <!-- <a class="btn btn-white ms-md-4 d-xl-inline-block d-none" href="login.html">Login</a> -->

              <!-- <a class="btn btn-white ms-md-4 d-xl-inline-block d-none" href="contact-us.html">Contact Us</a> -->
              <a href="#" class="ht-nav-toggle ms-md-4 ms-3"><span></span></a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<nav id="ht-main-nav"> <a href="#" class="ht-nav-toggle active"><span></span></a>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img class="img-fluid  mb-3" src="images/data_dive_logo.png" alt="data-dive" style="width: 130px;">
        <p class="mb-5">Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.</p>
        <div class="form-info">
          <h4 class="title">Contact info</h4>
          <ul class="media-icon list-unstyled font-w-5">
            <li> <i class="las la-map-pin"></i>
              <p class="mb-0">50, Awolowo Road,Ikoyi, Lagos Nigeria.</p>
            </li>
            <li><i class="las la-envelope-open-text"></i>  <a href="mailto:themeht23@gmail.com">info@d-aggregate.com</a>
            </li>
            <li><i class="las la-phone-volume"></i>  <a href="#">+234 (0)8178 32 9565 | +234 (0)8032 67 9331</a>
            </li>
          </ul>
        </div>
        <div class="social-icons social-colored mt-5">
          <ul class="list-inline">
            <li class="mb-2 social-facebook"><a href="#"><i class="lab la-facebook-f"></i></a>
            </li>
            <li class="mb-2 social-twitter"><a href="#"><i class="lab la-twitter"></i></a>
            </li>
            <li class="mb-2 social-linkedin"><a href="#"><i class="lab la-linkedin-in"></i></a>
            </li>
            <li class="mb-2 social-gplus"><a href="#"><i class="lab la-google-plus-g"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<!--header end-->

<!--hero section start-->

<section class="page-title position-relative overflow-hidden shape-1 right">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="bg-white p-md-5 p-3 d-inline-block">
          <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5">Sign</span> In</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php"><i class="las la-home me-1"></i>Home</a>
              </li>
              
              <li class="breadcrumb-item active" aria-current="page"><a href="signup.php">Sign Up</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <canvas id="canvas-1"></canvas>
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">

<!--sign up start-->

<section class="register">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        <div class="mb-5">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block">
            <span>SignIn</span>
        </h6>
          <h2 class="mb-0"><span class="font-w-5">Continue</span> your access to unlimited services</h2>
          <?php  
            if (isset($_REQUEST['msg'])) {
                $msg = $_REQUEST['msg'];
                echo "<div class='text-danger'>$msg</div>";
            }
          ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-10 ms-auto me-auto">
        <div class="register-form text-center">
          <form method="post" action="">
            <div class="messages"></div>
            <div class="row justify-content-center !important">
              
              <div class="col-md-6">
                <div class="mb-3">
                  <input id="form_lastname" type="text" name="email" class="form-control" placeholder="Email Address" value="<?php echo isset($email) ? $email : '' ?>">
                  <span style="color:red"><?php echo isset($error['email']) ? $error['email'] : '' ?></span>
                </div>
              </div>
            </div>
           
            <div class="row justify-content-center !important">
             
              <div class="col-md-6">
                <div class="mb-3">
                  <input id="form_password1" type="password" name="password" class="form-control" placeholder="Password" value="<?php echo isset($password) ? $password : '' ?>">
                  <span style="color:red"><?php echo isset($error['password']) ? $error['password'] : '' ?></span>
                </div>
              </div>
            </div>
           
           
            <div class="row mt-3 mb-5">
              <div class="col"> 
                    <button type="submit" name="btnsignin" class="btn btn-primary">Sign In</button>
                <span class="mt-4 d-block">Have An Account ? <a href="pricing.php"><i>Sign Up!</i></a></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!--sign up end-->
<!-- <section>
  <div class="container mb-5">
    <div class="row justify-content-center mb-8 text-center">
      <div class="col-lg-7 col-md-12">
        <div class="p-3 p-lg-5 box-shadow bg-white rounded">
          <h3 style="font-weight: 700;">Login</h3>
          <label class="text-black mb-3"></label>
          <div class="input-group">
            <input class="form-control h-auto" id="c-code" placeholder="Enter Pin" aria-label="Coupon Code" aria-describedby="button-addon2" type="text">
          </div>
          <button class="btn btn-primary mt-5" type="button" id="button-addon2"><span>Login</span>
            </button>
        </div>
      </div>
    </div>
    
  </div>
</section> -->

<!--new sign start-->



<!--new sign end-->

</div>

<!--body content end--> 


<!--footer start-->


<footer class="bg-dark custom-pt-2 pb-5 position-relative mt-n8">
  <div class="footer-shape">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#181a27" fill-opacity="1" d="M0,224L20,224C40,224,80,224,120,208C160,192,200,160,240,165.3C280,171,320,213,360,213.3C400,213,440,171,480,154.7C520,139,560,149,600,176C640,203,680,245,720,234.7C760,224,800,160,840,149.3C880,139,920,181,960,170.7C1000,160,1040,96,1080,90.7C1120,85,1160,139,1200,181.3C1240,224,1280,256,1320,245.3C1360,235,1400,181,1420,154.7L1440,128L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path>
    </svg>
  </div>
  <div class="primary-footer z-index-1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 col-xl-4">
          <a class="footer-logo" href="index.html">
            <img class="img-fluid" src="images/White Datadive.png" alt="" style="width: 130px;">
          </a>
          <p class="my-4 text-rgba">Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.</p>
          <div class="social-icons social-colored footer-social">
            <ul class="list-inline">
              <li><a href="#"><i class="lab la-facebook-f"></i></a>
              </li>
              <li><a href="#"><i class="lab la-twitter"></i></a>
              </li>
              <li><a href="#"><i class="lab la-instagram"></i></a>
              </li>
              <li><a href="#"><i class="lab la-dribbble"></i></a>
              </li>
              <li><a href="#"><i class="lab la-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 mt-6 mt-lg-0 footer-list">
          <h5 class="mb-4 text-white">Quick Link</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-3"><a class="list-group-item-action" href="#">Consumer Intelligence</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="https://datadive-d-aggregate-pi7mv.ondigitalocean.app/">Social Intelligence</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="#about">About Us</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="#pricing">Pricing</a>
            </li>
            <!-- <li class="mb-3"><a class="list-group-item-action" href="faq.html">Faq</a>
            </li> -->
            <!-- <li class="mb-3"><a class="list-group-item-action" href="#contact">Contact Us</a>
            </li> -->
            <!-- <li class="mb-3"> <a class="list-group-item-action" href="terms-and-conditions.html">
                  Term Of Service
                </a>
            </li> -->
            <!-- <li> <a class="list-group-item-action" href="privacy-policy.html">
                  Privacy Policy
                </a>
            </li> -->
          </ul>
        </div>
        <!-- <div class="col-12 col-sm-6 col-lg-3 col-xl-2 mt-6 mt-lg-0 footer-list">
          <h5 class="mb-4 text-white">Our Services</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-3"><a class="list-group-item-action" href="data-science.html">Data Science</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="data-visualization.html">Data Visualization</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="computer-vision.html">Computer Vision</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="machine-learning.html">Machine Learning</a>
            </li>
            <li><a class="list-group-item-action" href="data-analytics.html">Data Analytics</a>
            </li>
          </ul>
        </div> -->
        <div class="col-12 col-lg-6 col-xl-4 mt-6 mt-xl-0">
          <h5 class="mb-4 text-white">Get In Touch</h5>
          <ul class="media-icon list-unstyled font-w-5">
              <li> <i class="las la-map-pin"></i>
                <p class="mb-0 text-rgba">50, Awolowo Road,Ikoyi, Lagos Nigeria.</p>
              </li>
              <li><i class="las la-envelope-open-text"></i>  <a href="mailto:info@d-aggregate.com">info@d-aggregate.com</a>
              </li>
              <li><i class="las la-phone-volume"></i>  <a href="tel:+912345678900">+234 (0)8178 32 9565 | +234 (0)8032 67 9331</a>
              </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer mt-8 border-top border-dark pt-5">
    <div class="container">
      <div class="row text-center">
        <div class="col text-white">Copyright ©2022 All rights reserved
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->

</div>

<!-- page wrapper end -->


<!-- Cart Modal -->
<div class="modal fade cart-modal" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Your Cart (2)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <div class="row align-items-center">
            <div class="col-5 d-flex align-items-center">
              <div class="me-4">
                <button type="submit" class="btn btn-primary btn-sm"><i class="las la-times"></i>
                </button>
              </div>
              <!-- Image -->
              <a href="product-single.html">
                <img class="img-fluid rounded" src="images/product/01.jpg" alt="...">
              </a>
            </div>
            <div class="col-7">
              <!-- Title -->
              <h6><a href="product-single.html">Product Name One</a></h6>
              <div class="product-meta"><span class="me-2 text-primary">$46.00</span><span class="text-muted">x 1</span>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-4">
        <div>
          <div class="row align-items-center">
            <div class="col-5 d-flex align-items-center">
              <div class="me-4">
                <button type="submit" class="btn btn-primary btn-sm"><i class="las la-times"></i>
                </button>
              </div>
              <!-- Image -->
              <a href="product-single.html">
                <img class="img-fluid rounded" src="images/product/02.jpg" alt="...">
              </a>
            </div>
            <div class="col-7">
              <!-- Title -->
              <h6><a href="product-single.html">Product Name One</a></h6>
              <div class="product-meta"><span class="me-2 text-primary">$65.00</span><span class="text-muted">x 1</span>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5">
        <div class="d-flex justify-content-between align-items-center mb-6"> <span class="text-muted">Subtotal:</span>  <span class="text-dark">$111.00</span> 
        </div> <a href="product-cart.html" class="btn btn-primary me-2">View Cart</a>
        <a href="product-checkout.html" class="btn btn-dark">Continue To Checkout</a>
      </div>
    </div>
  </div>
</div>

 
<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><img class="img-fluid" src="images/top-arrow.png" alt=""></a></div>

<!--back-to-top end-->


<!-- inject js start -->

<!--== jquery -->
<script src="js/jquery.min.js"></script>

<!--== bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>

<!--== modernizr -->
<script src="js/modernizr.min.js"></script>

<!--== owl-carousel -->
<script src="js/owl.carousel.min.js"></script> 

<!--== magnific-popup --> 
<script src="js/jquery.magnific-popup.min.js"></script>

<!--== counter -->
<script src="js/counter.js"></script> 

<!--== countdown -->
<script src="js/jquery.countdown.min.js"></script>

<!--== skill bars -->
<script src="js/skill.bars.jquery.js"></script> 

<!--== canvas -->
<script src="js/canvas-js.js"></script>

<!--== theme-script -->
<script src="js/theme-script.js"></script>

<!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/stacht/ltr/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 09:02:15 GMT -->
</html>

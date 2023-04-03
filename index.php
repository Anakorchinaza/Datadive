<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "datadive";

  // $servername = "localhost";
  // $username = "daggrega_datadive";
  // $password = "?Ztqp9!NVzW,";
  // $db = "daggrega_datadive";


  $conn = mysqli_connect($servername, $username, $password,$db);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/stacht/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 08:55:06 GMT -->
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


<!-- Title -->
<title>Datadive - Combining The Power of Consumer & Social Intelligence to Help Companies Scale</title>

<!-- Favicon Icon -->

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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
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

                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Industry</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="dropdown-item " href="fmcg.php">FMCG</a>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item " href="telcos.php">Telcos</a>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item " href="financialInstitution.php">Financial Institution</a>
                      
                    </li>
                    
                  </ul>
                </li>

                <!-- <li> <a class="nav-link active" href="signup.php">Consumer Intelligence Insights</a>
                 
                </li>

                <li> <a class="nav-link" href="https://datadive-d-aggregate-pi7mv.ondigitalocean.app/">Social Intelligence Insights</a>
                 
                </li> -->

                <li>
                  <a  class="nav-link  " href="data.php"><i class="fa-sharp fa-solid fa-phone me-2"></i>Consult a data expert</a>
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

<section class="hero-banner z-index-1 overflow-hidden " data-bg-img="images/bg/04.png">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 mb-5 mb-lg-0 position-relative text-center">
        <!-- Image -->
        <img class="img-fluid topBottom" src="images/hero/01.png" alt="" style="margin-top: -60px;">
      </div>
      <div class="col-12 col-lg-6">
        <h1 class="mb-" style="font-size:50px">
          
            Get Data Insights with <span class="font-w-6 px-2 text-primary text-uppercase d-inline-block" data-bg-color="rgba(0,73,208,0.05)">DATA<span style="color:black">DIVE</span></span> 
                       
            </h1>
        <h6 class="tbtn-dark fw-bolder">Consumer, Social Intelligence and Recommendation AI for Businesses and Multinationals.</h6>
        <ul style="list-style: none;">
          <li style="margin-bottom: 10px;">Grow your business by winning the trust of your consumers, engaging them as they purchase your products.</li>
          <li style="margin-bottom: 10px;">Access abundant data of your product consumers.</li>
          <li style="margin-bottom: 10px;">Get the feedback of consumers on your products through our surveys. This will enable research, product sampling and much more.</li>
        </ul>
        <!-- Buttons --> <a href="pricing.php" class="btn btn-dark me-2">
                Get Started
              </a>
        <!-- <a href="#" class="btn btn-white ">
                Learn More
              </a> -->
      </div>
    </div>
  </div>
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">

<!-- survey start-->

<section class="hero-banner banner-2 position-relative overflow-hidden bg-dark custom-py-1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 order-lg-1 mb-8 mb-lg-0 z-index-1 text-end">
        <div class="banner-morph "></div>
        <!-- Image -->
        <img class="img-fluid topBottom" src="images/hero/02.png" alt="">
      </div>
      <div class="col-12 col-lg-6">
        
        <h1 class="mb-4 text-white">
          <span style="font-size:44px;">Complete Surveys,</span>  
             <span style="font-size:70px; font-weight:bold">Provide Vital Information</span>
             <p style="font-size:32px;">by Sharing Your Consumer Insights. <br> <br>
              <span style="font-size:25px;">DataDive App: Your Solution for Earning airtime through Consumer Surveys.</span>
            </p>          
            </h1>
        
        <!-- Buttons --> <a href="app.php" target="_blank" class="btn btn-primary me-2">
                JOIN NOW
              </a>

      </div>
    </div>
  </div>
</section>


<!-- survey ends -->


<!--services start-->

<section class="overflow-hidden position-relative pb-5">
  <div class="container-fluid px-lg-10">
    <div class="row justify-content-center text-center">
      <div class="col-12 col-lg-8">
        <div class="mb-5">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
            <span>Services</span>
              </h6>
          <!-- <h2 class="mb-0"><span class="font-w-5 d-block">checkout we provide</span> awesome and creative services</h2> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="owl-carousel" data-items="4" data-xxl-items="3" data-xl-items="2" data-lg-items="2" data-md-items="2" data-sm-items="1" data-autoplay="true">
          <?php 
            
            $query = "SELECT * FROM slider";
            $slider = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($slider)) {
                  
          ?>
        
          <div class="item">
            <div class="featured-item mx-4 text-center overflow-hidden p-5 bg-white rounded">

              <div class="featured-icon w-auto h-auto">
                <img style="width: 373px; height:210px" class="img-fluid" src="./divedashboard/<?php echo $row['images'] ?>" alt="image">
              </div>

              <div class="featured-desc mt-4">
                <h5 class="mb-3"><?php echo isset($row['header']) ? $row['header'] : '' ?></h5>
                <p class="mb-0"><?php echo isset($row['body']) ? substr($row['body'],0,250) : '' ?></p> 
                <!-- <a class="btn-link mt-4" href="article/<?php echo $row['body'] ?>/"><i class="las la-long-arrow-alt-right"></i></a> -->
              </div>

            </div>
          </div>
            <?php
              }
            ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!--services end-->


<!--who we are start-->

<section id="about" class="bg-dark custom-pt-1 pb-10 z-index-1 shape-sec">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-lg-6 mb-6 mb-lg-0">
        <img class="img-fluid topBottom" src="images/about/02.png" alt="">
      </div>
      <div class="col-12 col-lg-6">
        <div class="mb-3">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-white rounded subtitle-effect box-shadow bg-primary d-inline-block">
            <span>About Us</span>
              </h6>
          <h2 class="mb-0 text-white"><span class="font-w-5">Explore data</span>Insights with Data Dive</h2>
        </div>
        <p class="lead mb-4 text-light">
            DataDive is a product of D-Aggregate. D-Aggregate Techonologies is a data intelligence
            comapany that focus on aggregate data, building datacentric/AI technologies to help business scale. 
        </p>
        <a href="about-us.php" class="btn btn-dark me-2">More</a>
      </div>
    </div>
  </div>
  <div class="curve-shape top-0 overflow-hidden" style="height: 200px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="w-100 h-100"><path fill="#fff" fill-opacity="1" d="M0,192L24,202.7C48,213,96,235,144,224C192,213,240,171,288,144C336,117,384,107,432,133.3C480,160,528,224,576,218.7C624,213,672,139,720,122.7C768,107,816,149,864,144C912,139,960,85,1008,80C1056,75,1104,117,1152,160C1200,203,1248,245,1296,224C1344,203,1392,117,1416,74.7L1440,32L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
  </div>
</section>

<!--who we are end-->


<!--counter start-->

<!-- <section class="pt-0 pb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xxl-10 col-xl-12">
        <div class="box-shadow p-5 bg-white rounded mt-n7 z-index-1">
          <div class="row">
      <div class="col-12 col-lg-3 col-sm-6">
        <div class="counter d-flex align-items-center style-2">
          <div class="me-3 flex-shrink-0">
            <img class="img-fluid" src="images/icon/counter/01.png" alt="">
          </div>
          <div class="counter-desc flex-grow-1 text-dark"> <span class="count-number h2" data-to="15" data-speed="1000">15</span>
            <span class="h2">+</span> 
            <h6 class="text-grey mb-0 font-w-5">Projects Executed</h6>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-sm-6 mt-5 mt-sm-0">
        <div class="counter d-flex align-items-center style-2">
          <div class="me-3 flex-shrink-0">
            <img class="img-fluid" src="images/icon/counter/02.png" alt="">
          </div>
          <div class="counter-desc flex-grow-1 text-dark"> <span class="count-number h2" data-to="73" data-speed="1000">73</span>
            <span class="h2">+</span> 
            <h6 class="text-grey mb-0 font-w-5">Data Analytics</h6>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-sm-6 mt-5 mt-lg-0">
        <div class="counter d-flex align-items-center style-2">
          <div class="me-3 flex-shrink-0">
            <img class="img-fluid" src="images/icon/counter/03.png" alt="">
          </div>
          <div class="counter-desc flex-grow-1 text-dark"> <span class="count-number h2" data-to="88" data-speed="1000">88</span>
            <span class="h2">+</span> 
            <h6 class="text-grey mb-0 font-w-5">People Loved</h6>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-sm-6 mt-5 mt-lg-0">
        <div class="counter d-flex align-items-center style-2">
          <div class="me-3 flex-shrink-0">
            <img class="img-fluid" src="images/icon/counter/04.png" alt="">
          </div>
          <div class="counter-desc flex-grow-1 text-dark"> <span class="count-number h2" data-to="104" data-speed="1000">104</span>
            <span class="h2">+</span> 
            <h6 class="text-grey mb-0 font-w-5">Happy Customers</h6>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--counter end-->


<!--testimonial start-->

<!-- <section class="z-index-1">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-7 col-md-12">
        <div class="z-index-1 mb-5">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
                  <span>Testimonial</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Take a look our clients</span>
            feedback what you say?</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="testimonial-sec position-relative pb-lg-8 pt-lg-5 px-lg-6 p-3 bg-pos-rt" data-bg-img="images/bg/01.png">
          <div class="owl-carousel mt-xl-n10 mt-lg-n5 no-pb" data-dots="false" data-nav="true" data-items="1" data-autoplay="false">
            <div class="item">
              <div class="testimonial text-center">
                <div class="row align-items-end">
                  <div class="col-lg-7 px-lg-6">
                    <div class="testimonial-content py-5 px-4 rounded">
                      <div class="testimonial-caption mb-3">
                        <h5 class="text-white z-index-1 d-inline-block font-w-6">Mark Beele <label class="fst-italic text-light">- Ceo</label></h5>
                      </div>
                      <p class="mb-0 fst-italic text-light">Stacht Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="testimonial-img">
                      <img class="img-fluid rounded w-100" src="images/testimonial/01.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial text-center">
                <div class="row align-items-end">
                  <div class="col-lg-7 px-lg-6">
                    <div class="testimonial-content py-5 px-4 rounded">
                      <div class="testimonial-caption mb-3">
                        <h5 class="text-white z-index-1 d-inline-block font-w-6">Renow Karlo <label class="fst-italic text-light">- Manager</label></h5>
                      </div>
                      <p class="mb-0 fst-italic text-light">Stacht Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="testimonial-img">
                      <img class="img-fluid rounded w-100" src="images/testimonial/02.jpg" alt="">
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
</section> -->

<!--testimonial end-->


<!--portfolio start-->

<section class="position-relative shape-both overflow-hidden">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10">
        <div class="mb-5">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
            <span>Portfolio</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Combining The Power of Consumer & Social Intelligence</span>
          to Help Companies Scale</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col">
        <div class="owl-carousel center popup-gallery" data-center="true" data-items="4" data-lg-items="3" data-md-items="2" data-sm-items="2" data-xs-items="1" data-autoplay="true">
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded active">
              <img class="img-fluid w-100" src="images/project/06.jpg" alt="">
              <a class="popup-img" href="images/project/large/01.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Social</span>
                <h5><a href="portfolio-single.html">Social Intelligence</a></h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded">
              <img class="img-fluid w-100" src="images/project/07.jpg" alt="">
              <a class="popup-img" href="images/project/large/02.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Data</span>
                <h5><a href="portfolio-single.html">Data Optimization</a></h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded">
              <img class="img-fluid w-100" src="images/project/08.jpg" alt="">
              <a class="popup-img" href="images/project/large/03.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Data</span>
                <h5><a href="portfolio-single.html">Data Monetization</a></h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded">
              <img class="img-fluid w-100" src="images/project/09.jpg" alt="">
              <a class="popup-img" href="images/project/large/04.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Insight</span>
                <h5><a href="portfolio-single.html">Consumer Insight</a></h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded">
              <img class="img-fluid w-100" src="images/project/10.jpg" alt="">
              <a class="popup-img" href="images/project/large/05.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Data</span>
                <h5><a href="portfolio-single.html">Consumer Data</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--portfolio end-->


<!--tab start-->

<section>
  <div class="container-fluid z-index-1">
    <div class="row">
      <div class="col">
        <div class="tab bg-white box-shadow">
          
          <div class="tab-content px-5 py-8" id="nav-tabContent">
              <h2 class="text-center fw-bold mb-5">
                Why You Should Use DataDive
              </h2>
            <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">

              <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                  <img class="img-fluid" src="images/tab/01.jpg" alt="">
                </div>

                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                  <h4 class="mb-4" style="font-size:25px;">Brand Health Check & Competition Tracking</h4>
                  <!-- <p class="mb-4">We use the latest technologies To provide with best Consumer and Social Intelligence</p> -->
                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Real-time brand performance versus competition.</p>
                    </div>
                  </div>
          
                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Why consumer patronize competition</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Consumer next purchase point for competition product</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Understand consumer perception about new or existing brands</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Expand you cosumer database to drive sales and target ads</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                  <h4 class="mb-4" style="font-size:25px;">Marketing Campaigns Evaluation and Trends</h4>
                  <!-- <p class="mb-4">We use the latest technologies To provide with best Consumer and Social Intelligence</p> -->
                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Pre/Post social media campaign evaluation and measures(#Tags economic and market values($))</p>
                    </div>
                  </div>
          
                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Explore Industry Trends</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Identify consumers influencing your brands and competition</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Location recommendation for target ads</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Historical analysis of your social media campaign</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- <div role="tabpanel" class="tab-pane fade" id="tab1-2">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <img class="img-fluid" src="images/tab/02.html" alt="">
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                  <h4 class="mb-4">Powerful & Awesome Marketing</h4>
                  <p class="mb-4">We use the latest technologies it voluptatem accusantium doloremque laudantium. This article is intended to help</p>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Import Data For Real-Time</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Operating Modern Design</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Provide Realtime Data Solutions</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div role="tabpanel" class="tab-pane fade" id="tab1-3">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <img class="img-fluid" src="images/tab/03.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                  <h4 class="mb-4">Powerful & Awesome Insights</h4>
                  <p class="mb-4">We use the latest technologies To provide with best Consumer and Social Intelligence</p>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Import Data For Real-Time</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Operating Modern Design</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Provide Realtime Data Solutions</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div role="tabpanel" class="tab-pane fade" id="tab1-4">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <img class="img-fluid" src="images/tab/02.html" alt="">
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                  <h4 class="mb-4">Powerful & Awesome Marketing</h4>
                  <p class="mb-4">We use the latest technologies it voluptatem accusantium doloremque laudantium. This article is intended to help</p>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Import Data For Real-Time</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Operating Modern Design</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Provide Realtime Data Solutions</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          
          <!-- <nav>
            <div class="nav nav-tabs border-0 text-center box-shadow" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-tab1" data-bs-toggle="tab" href="#tab1-1" role="tab" aria-selected="true"><div class="tab-icon">
                <img class="img-fluid" src="images/tab/icon/01.png" alt="">
              </div>
                <h5>Management</h5>
              </a> <a class="nav-item nav-link" id="nav-tab2" data-bs-toggle="tab" href="#tab1-2" role="tab" aria-selected="false"><div class="tab-icon">
                <img class="img-fluid" src="images/tab/icon/02.png" alt="">
              </div><h5>Marketing</h5></a>
              <a class="nav-item nav-link" id="nav-tab3" data-bs-toggle="tab" href="#tab1-3" role="tab" aria-selected="false"><div class="tab-icon">
                <img class="img-fluid" src="images/tab/icon/03.png" alt="">
              </div><h5>Analysis</h5></a>
              <a class="nav-item nav-link" id="nav-tab4" data-bs-toggle="tab" href="#tab1-4" role="tab" aria-selected="false"><div class="tab-icon">
                <img class="img-fluid" src="images/tab/icon/04.png" alt="">
              </div><h5>Strategy</h5></a>
            </div>
          </nav> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!--tab end-->


<!--step start-->

<!-- <section class="text-center bg-dark z-index-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="mb-6">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-white rounded subtitle-effect box-shadow bg-primary d-inline-block">
            <span>How It Work</span>
              </h6>
          <h2 class="mb-0 text-white"><span class="font-w-5">Three easy step and</span> get your best solutions</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-lg-3 col-12">
        <div class="work-process position-relative rounded bg-white overflow-hidden">
          <span class="step-num">01</span>
          <div class="step-icon"><img class="img-fluid" src="images/icon/10.png" alt="">
            </div>
          <div class="step-desc">
            <h5>Research Planing</h5>
            <p class="mb-0">Premier ideas rather than bricks-and-click distributedfor stand web-readiness.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12 mt-5 mt-lg-0">
        <div class="work-process position-relative rounded bg-white overflow-hidden">
          <span class="step-num">02</span>
          <div class="step-icon"><img class="img-fluid" src="images/icon/11.png" alt="">
            </div>
          <div class="step-desc">
            <h5>Publishing and Execution</h5>
            <p class="mb-0">Premier ideas rather than bricks-and-click distributedfor stand web-readiness.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12 mt-5 mt-lg-0">
        <div class="work-process position-relative rounded bg-white overflow-hidden">
          <span class="step-num">03</span>
          <div class="step-icon"><img class="img-fluid" src="images/icon/12.png" alt="">
            </div>
          <div class="step-desc">
            <h5>Deliver the Final Data</h5>
            <p class="mb-0">Premier ideas rather than bricks-and-click distributedfor stand web-readiness.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="curve-shape overflow-hidden" style="height: 400px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="w-100 h-100"><path fill="#fff" fill-opacity="1" d="M0,192L24,202.7C48,213,96,235,144,224C192,213,240,171,288,144C336,117,384,107,432,133.3C480,160,528,224,576,218.7C624,213,672,139,720,122.7C768,107,816,149,864,144C912,139,960,85,1008,80C1056,75,1104,117,1152,160C1200,203,1248,245,1296,224C1344,203,1392,117,1416,74.7L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
  </div>
</section> -->

<!--step end-->


<!--client start-->

<!-- <section class="py-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="owl-carousel no-pb" data-dots="false" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-autoplay="true">
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid d-inline" src="images/client/01.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid d-inline" src="images/client/02.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid d-inline" src="images/client/03.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid d-inline" src="images/client/04.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid d-inline" src="images/client/05.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid d-inline" src="images/client/06.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid d-inline" src="images/client/07.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid d-inline" src="images/client/08.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--client end-->


<!--price table start-->

<section id="pricing" class="shape-1 right position-relative">
  <div class="container">
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
     
      <?php
         $query = "SELECT * FROM plans";
         $plan = mysqli_query($conn, $query);
         
         while ($row = mysqli_fetch_assoc($plan)) {
                
                $myplan = $row['plan_name'];

                if($myplan == 'pro' || $myplan == 'license'){

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
                              <a class="btn btn-dark mt-5 ms-5" href="signup.php"> <span>Get Started</span> 
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
                          <a class="btn btn-dark mt-5 ms-5" href="signup.php"> <span>Get Started</span> 
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


<!--team start-->

<!-- <section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="mb-6">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
                  <span>What We Do</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Watch about creating your</span> success with Stacht.</h2>
        </div>
        <div class="position-relative overflow-hidden">
          <img class="img-fluid w-100 rounded" src="images/about/01.jpg" alt="">
          <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube mr-3" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><i class="las la-play"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ps-lg-8 mt-5 mt-lg-0">
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/01.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Nathan Davi</a></h5>
                <span>Manager</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5 mt-sm-0">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/02.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Cherie White</a></h5>
                <span>Ceo</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/03.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Layna Paul</a></h5>
                <span>Co-Founder</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/04.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">John Riad</a></h5>
                <span>Developer</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--team end-->


<!--blog start-->

<!-- <section class="position-relative skew-shape overflow-hidden">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10 col-12">
        <div class="mb-6">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
                  <span>Blogs</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Our blog</span> Latest feed</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
       
        <div class="card post-card rounded border-0">
          <img class="rounded img-fluid" src="images/blog/01.jpg" alt="Image">
          <div class="card-body p-4">
            <ul class="list-inline">
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="las la-eye me-1"></i> 05 Jan, 2022</a>
              </li>
            </ul>
            <h2 class="h4 my-3">Grow your business insights with inspiring news
              </h2>
            <a class="post-btn float-end" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
          </div>
        </div>
       
      </div>
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        
        <div class="card post-card rounded border-0">
          <img class="rounded img-fluid" src="images/blog/02.jpg" alt="Image">
          <div class="card-body p-4">
            <ul class="list-inline">
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="las la-eye me-1"></i> 05 Jan, 2022</a>
              </li>
            </ul>
            <h2 class="h4 my-3">Stacht is a big milestone for your business success
              </h2>
            <a class="post-btn float-end" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-lg-4">
        
        <div class="card post-card rounded border-0">
          <img class="rounded img-fluid" src="images/blog/03.jpg" alt="Image">
          <div class="card-body p-4">
            <ul class="list-inline">
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="las la-eye me-1"></i> 05 Jan, 2022</a>
              </li>
            </ul>
            <h2 class="h4 my-3">New ideas for a lowest cost Design Service better
              </h2>
            <a class="post-btn float-end" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section> -->




<!--newsletter start-->

<section class="pb-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="bg-primary box-shadow py-4 px-4 px-lg-8 py-lg-8 text-center rounded z-index-1" data-bg-img="images/bg/02.png">
          <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-10 col-lg-12">
              <div class="mb-5">
                <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary bg-white rounded subtitle-effect box-shadow d-inline-block">
            <span>JOIN NOW</span>
              </h6>
                <h2 class="mb-0 text-white"><span class="font-w-5">Earn Credits and Airtime</span>
                  <p style="font-size:30px;">Unlock credits and airtime by Sharing your Consumer Insights with the DataDive App</p>
              </h2>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-9">
                 
                    <a href="app.php" target="_blank" class="btn btn-primary me-2">
                      JOIN NOW
                    </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--newsletter end-->

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
              <li><a href="https://twitter.com/Unique_DataDive?t=GBU8qQYeGtolM66yoCfo3Q&s=09"><i class="lab la-twitter"></i></a>
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
            <li class="mb-3"><a class="list-group-item-action" target="_blank" href="policy.php">Privacy policy</a>
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



</html>

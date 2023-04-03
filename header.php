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

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css"> -->
<link rel="stylesheet" href="./divedashboard/fontawesome/css/all.css">

<style>
   #heroing{
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    align-items: center;
    background-size: cover;
   height: 100vh;
   width: 100%;
    background-repeat: no-repeat;
    /* background-image: url('customers.svg'), 
                      -moz-linear-gradient(top, #ADB2B6 0%, #ABAEB3 100%);
    background-image: url('customers.svg'), 
                      -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ADB2B6), color-stop(100%, #ABAEB3)); */
    background-image: linear-gradient(to right, #0d8744a4 20%,
    #0d87444d), url('pictures/social.jpeg');
  }
</style>


<style> 
  a:is(:link, :active, :visited).active{
    color: White;
    background-color: #0d8744;
  }
  .grey{
    border:1px solid #D3D3D3;
  }
  @media only screen and (max-width: 768px){
    #linechart_material{
      width:685px;
      height:600px;
    }
  }
  @media only screen and (max-width: 700px){
    #linechart_material{
      width:90%;
      height:45%;
    }
  }
  @media only screen and (max-width: 400px){
    #linechart_material{
      width:300px;
      height:300px;
    }
  }
  @media only screen and (max-width: 300px){
    #linechart_material{
      width:200px;
      height:200px;
     
    }
  }
  
</style>

<style>
   #heroing{
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    align-items: center;
    background-size: cover;
   height: 100vh;
   width: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(to right, #0d8744a4 20%,
    #0d87444d), url('pictures/social.jpeg');
  }
  #fmcgHero{
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    align-items: center;
    background-size: cover;
   height: 100vh;
   width: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(to right, #0d8744a4 20%,
    #0d87444d), url('pictures/fmcg-stocks.jpg');
  }
  #finHero{
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    align-items: center;
    background-size: cover;
   height: 100vh;
   width: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(to right, #0d8744a4 20%,
    #0d87444d), url('pictures/Financial_Institution.jpg');
  }
  #telHero{
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    align-items: center;
    background-size: cover;
   height: 100vh;
   width: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(to right, #0d8744a4 20%,
    #0d87444d), url('pictures/telcos.jpg');
  }
</style>

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

                <li>
                  <a  class="nav-link" href="data.php"><i class="fa-sharp fa-solid fa-phone me-2"></i>Consult with data expert</a>
                </li>


                <li>
                  <a  class="nav-link  " href="contact-us.php">Contact Us</a>
                </li>
   
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
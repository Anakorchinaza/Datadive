<?php session_start(); 
  // if (isset( $_SESSION['id'])) {
  //   //sign in
    
  // }else{
  //   $msg = "You need to login to access this page!";
  //   //redirect
  //   header("Location: signin.php");
  //   exit;
  // }


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
<!-- Title -->
<title>Consumer Insights Page</title>

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
  #heroing{
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    align-items: center;
    background-size: cover;
   height: 90vh;
   width: 100%;
    background-repeat: no-repeat;
    /* background-image: url('customers.svg'), 
                      -moz-linear-gradient(top, #ADB2B6 0%, #ABAEB3 100%);
    background-image: url('customers.svg'), 
                      -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ADB2B6), color-stop(100%, #ABAEB3)); */
    background-image: linear-gradient(to right, #0d8744a4 20%,
    #0d87444d), url('pictures/customers.jpeg');
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


<!--hero section start-->

<!-- <section class="page-title position-relative overflow-hidden shape-1 right">

  <div class="container">
    <div class="row">
      <div class="col-lg-12" id="heroing">
        <div class="bg-white p-md-5 p-3 d-inline-block">
          <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5">Consumer</span> Intelligence Insights</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php"><i class="las la-home me-1"></i>Home</a>
              </li>
              
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <canvas id="canvas-1"></canvas>
</section> -->

  <div class="container-fluid" id="heroing">
    <div>
      <div class="row">
        <div class="col-lg-8">
        <h3 style="color: #5dda95;">Consumer Intelligence with real-time consumer engagement</h3>
        </div>
        <div class="col-lg-4" >
       
        </div>
      </div>
      <div class="row">
          <div class="col-8">
          <p>Get a better understanding of your customers beyond your business and understand your position in the market.</p>
          </div>
          <div class="col-4" style="text-align: end;">
          <a href="pricing.php" class="btn btn-white me-2" style="color: #5dda95;">
                Get Started
              </a>
          </div>
        
        </div>
      
    </div>
  </div>

<!--hero section end--> 

<section class="hero-banner z-index-1 overflow-hidden py-8" data-bg-img="images/bg/04.png">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6">
        <h3 class="my-3">Datadive Consumer Intelligence Solution</h3>
        <p class="lead mb-5 text-grey">Develop a new product that caters to
          the needs of a specific target audience in different countries. By using consumer intelligence,
          they can gather data on the preferences, behaviors, and buying habits of the target audience in
          different regions. This information can then be used to develop a product that is tailored to the
          specific needs of each market, increasing the chances of success.
          .</p>
      </div>
      <div class="col-12 col-lg-6 mb-5 mb-lg-0 position-relative text-center">
        <!-- Image -->
        <img class="img-fluid topBottom" src="pictures/Customer.webp" alt="">
      </div>
    </div>
  </div>
</section>

<!--body content start-->
<section>
  <div class="container z-index-1">
    <div class="row">
      <div class="col">
        <div class="tab bg-white box-shadow">
          <!-- Tab panes -->
          <div class="tab-content px-5 py-8" id="nav-tabContent">
            <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <img class="img-fluid" src="pictures/shopper.svg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                  <h4 class="mb-4">Get Better Understanding of your Consumers</h4>
                  <p class="mb-4">Get customer records with data sets to draw new insights on preferences, lifestyle and behavior beyond your business, as well as the greater market and your position in the market.</p>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Targetting Brands</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Targetting Demographics</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Surveys push to Datadive Audience</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Real-time intelligence Report</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    </div>
                    <div>
                      <p class="mb-0">Export datasets from reports for further use</p>
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
</section>

<div class="page-content">

<!--sign up start-->

<section class="register">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        <div class="mb-5">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block">
            <span>Consumer Intelligence Insights</span>
        </h6>
          <h2 class="mb-0" style="font-size:32px !important"><span class="font-w-5">Real-Time Data</span> on Consumer Intelligent within the D-Aggregate Audience</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-10 ms-auto me-auto">
        <div class="register-form text-center">
          <form id="contact-form" method="post" action="">
            <div class="messages"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="mb-3">
                    <select class="form-select" name="industry" id="industry">
                        <option value="">--select Industry--</option>
                        <?php 
                          $industry = "SELECT * FROM industry";
                          $industry1 = mysqli_query($conn, $industry);
                          
                          while ($row = mysqli_fetch_assoc($industry1)) {
                        ?>
                           <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                        <?php
                          }
                        ?>
                       
                    </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="mb-3">
                <select class="form-select" name="category" id="category">
                   <!-- <option value="">--Select Category --</option> -->
                </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="mb-3">
                <select class="form-select" name="brands" id="brands">
                   
                </select>
                </div>
              </div>
            </div>

            <div class="row justify-content-center !important">
              <div class="col-md-4">
                <div class="mb-3">
                    <select class="form-select" name="country" id="country">
                        <option value="">--Select Country--</option>
                        <?php
                          
                          $country = "SELECT * FROM countries";
                          $country1 = mysqli_query($conn, $country);

                          while ($row1 = mysqli_fetch_assoc($country1)) {
                        ?>
                            <option value="<?php echo $row1['id'] ?>"><?php echo $row1['name'] ?></option>
                        <?php
                          }
                        ?>
                       
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                <select class="form-select" name="gender" id="gender">
                    <option value="gender">--Select Gender--</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
                </div>
              </div>
            </div>
           
            <div class="row mt-3">
              <div class="col"> <button type="submit" name="getresult" class="btn btn-primary">Get Results Now</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!--sign up end-->


<!--analysis start-->

<div class="container shadow rounded mb-5 grey">
  <div class="row justify-content-center text-center">
    <div class="col-12 col">
      <div>
        <div class="" style="margin-top:40px;">
          <h6 class="font-w-5 py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
            <span>D-Aggregate Audience Performance</span>
              </h6>
        </div>
      </div>
        <h2 class="" style="font-size:19px;">The target audience include, <strong>8,315,287</strong> unique users and the 
            the average campaign performance on
        </h2>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-2 mb-4">
      <div class="rounded text-center" style="border: 1px solid #D3D3D3">
         <h3 class="mt-3">11.79%</h3>
          <p>Awareness</p>
      </div>
    </div>
    <div class="col-md-2 mb-4">
      <div class="rounded text-center" style="border: 1px solid #D3D3D3">
         <h3 class="mt-3">11.79%</h3>
          <p>Awareness</p>
      </div>
    </div>
    <div class="col-md-2 mb-4">
      <div class="rounded text-center" style="border: 1px solid #D3D3D3">
         <h3 class="mt-3">11.79%</h3>
          <p>Awareness</p>
      </div>
    </div>
    <div class="col-md-2 mb-4">
      <div class="rounded text-center" style="border: 1px solid #D3D3D3">
         <h3 class="mt-3">11.79%</h3>
          <p>Awareness</p>
      </div>
    </div>
    <div class="col-md-2 mb-4">
      <div class="rounded text-center" style="border: 1px solid #D3D3D3">
         <h3 class="mt-3">11.79%</h3>
          <p>Awareness</p>
      </div>
    </div>
  </div>
</div>


<div class="container shadow rounded mb-5 grey">
  <div class="row">
    <div class="col-md-6 py-3">
      
         <table class="table table-striped grey table-responsive">
            <thead>
              <tr>
                <th>FASTEST GROWING</th>
                <th>Last 30 DAYS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jet</td>
                <td>+7%</td>
              </tr>

              <tr>
                <td>Lana</td>
                <td>+6%</td>
              </tr>

              <tr>
                <td>Zap</td>
                <td>+5%</td>
              </tr>

              <tr>
                <td>Tarmal</td>
                <td>+4%</td>
              </tr>

              <tr>
                <td>Astra</td>
                <td>+3%</td>
              </tr>

              <tr>
                <td>Sunlight</td>
                <td>+2%</td>
              </tr>
            </tbody>
         </table>
      
    </div>

    <div class="col-md-6 py-3">
      
         <table class="table table-striped table-responsive grey">
            <thead>
              <tr>
                <th>FASTEST DECLINING</th>
                <th>Last 30 DAYS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jet</td>
                <td>-7%</td>
              </tr>

              <tr>
                <td>Lana</td>
                <td>-6%</td>
              </tr>

              <tr>
                <td>Zap</td>
                <td>-5%</td>
              </tr>

              <tr>
                <td>Tarmal</td>
                <td>-4%</td>
              </tr>

              <tr>
                <td>Astra</td>
                <td>-3%</td>
              </tr>

              <tr>
                <td>Sunlight</td>
                <td>-2%</td>
              </tr>
            </tbody>
         </table>
    </div>
    
  </div>
</div>


<div class="container shadow rounded mb-5 grey">
  <div class="row">
    <div class="col-md-6 py-3">
      
         <table class="table table-striped grey table-responsive">
            <thead>
              <tr>
                <th>HIGHEST RANKING</th>
                <th>CURRENT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jet</td>
                <td>+7%</td>
              </tr>

              <tr>
                <td>Lana</td>
                <td>+6%</td>
              </tr>

              <tr>
                <td>Zap</td>
                <td>+5%</td>
              </tr>

              <tr>
                <td>Tarmal</td>
                <td>+4%</td>
              </tr>

              <tr>
                <td>Astra</td>
                <td>+3%</td>
              </tr>

              <tr>
                <td>Sunlight</td>
                <td>+2%</td>
              </tr>
            </tbody>
         </table>
      
    </div>

    <div class="col-md-6 py-3">
      
         <table class="table table-striped table-responsive grey">
            <thead>
              <tr>
                <th>LOWEST RANKING</th>
                <th>CURRENT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jet</td>
                <td>-7%</td>
              </tr>

              <tr>
                <td>Lana</td>
                <td>-6%</td>
              </tr>

              <tr>
                <td>Zap</td>
                <td>-5%</td>
              </tr>

              <tr>
                <td>Tarmal</td>
                <td>-4%</td>
              </tr>

              <tr>
                <td>Astra</td>
                <td>-3%</td>
              </tr>

              <tr>
                <td>Sunlight</td>
                <td>-2%</td>
              </tr>
            </tbody>
         </table>
    </div>
    
  </div>
</div>



<div class="container shadow rounded mb-5 grey px-3 py-3">
  <div class="text-center rounded grey">
    <h3 style="font-size: 18px;">GRAPHICAL REPRESENTATION</h3>
  </div>
  <div id="linechart_material" class="grey rounded mt-3 px-4 py-4"></div>
</div>


<div class="container shadow rounded mb-5 grey px-3 py-3">
  <div class="text-center rounded grey">
    <h3 style="font-size: 18px;">AUDIENCE DEMOGRAPHICS</h3>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div id="piechart" class="grey rounded mt-3 px-4 py-4"></div>
    </div>
    <div class="col-md-4 mb-4">
      <div id="piechart2" class="grey rounded mt-3 px-4 py-4"></div>
    </div>
    <div class="col-md-4 mb-4">
      <div id="piechart3" class="grey rounded mt-3 px-4 py-4"></div>
    </div>
  </div>
</div>

<div class="container shadow rounded mb-5 grey">
  <div class="row">
    <div class="col-md-6 py-3">
      
         <table class="table table-striped grey table-responsive">
            <thead>
              <tr>
                <th>HIGHEST RANKING</th>
                <th>CURRENT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jet</td>
                <td>+7%</td>
              </tr>

              <tr>
                <td>Lana</td>
                <td>+6%</td>
              </tr>

              <tr>
                <td>Zap</td>
                <td>+5%</td>
              </tr>

              <tr>
                <td>Tarmal</td>
                <td>+4%</td>
              </tr>

              <tr>
                <td>Astra</td>
                <td>+3%</td>
              </tr>

              <tr>
                <td>Sunlight</td>
                <td>+2%</td>
              </tr>
            </tbody>
         </table>
      
    </div>

    <div class="col-md-6 py-3">
      
         <table class="table table-striped table-responsive grey">
            <thead>
              <tr>
                <th>LOWEST RANKING</th>
                <th>CURRENT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jet</td>
                <td>-7%</td>
              </tr>

              <tr>
                <td>Lana</td>
                <td>-6%</td>
              </tr>

              <tr>
                <td>Zap</td>
                <td>-5%</td>
              </tr>

              <tr>
                <td>Tarmal</td>
                <td>-4%</td>
              </tr>

              <tr>
                <td>Astra</td>
                <td>-3%</td>
              </tr>

              <tr>
                <td>Sunlight</td>
                <td>-2%</td>
              </tr>
            </tbody>
         </table>
    </div>
    
  </div>
</div>


<div class="container shadow rounded mb-5 grey">
  <div class="row">
    <div class="col-md-6 py-3">
      
         <table class="table table-striped grey table-responsive">
            <thead>
              <tr>
                <th>HIGHEST RANKING</th>
                <th>CURRENT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jet</td>
                <td>+7%</td>
              </tr>

              <tr>
                <td>Lana</td>
                <td>+6%</td>
              </tr>

              <tr>
                <td>Zap</td>
                <td>+5%</td>
              </tr>

              <tr>
                <td>Tarmal</td>
                <td>+4%</td>
              </tr>

              <tr>
                <td>Astra</td>
                <td>+3%</td>
              </tr>

              <tr>
                <td>Sunlight</td>
                <td>+2%</td>
              </tr>
            </tbody>
         </table>
      
    </div>

    <div class="col-md-6 py-3">
      
         <table class="table table-striped table-responsive grey">
            <thead>
              <tr>
                <th>LOWEST RANKING</th>
                <th>CURRENT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jet</td>
                <td>-7%</td>
              </tr>

              <tr>
                <td>Lana</td>
                <td>-6%</td>
              </tr>

              <tr>
                <td>Zap</td>
                <td>-5%</td>
              </tr>

              <tr>
                <td>Tarmal</td>
                <td>-4%</td>
              </tr>

              <tr>
                <td>Astra</td>
                <td>-3%</td>
              </tr>

              <tr>
                <td>Sunlight</td>
                <td>-2%</td>
              </tr>
            </tbody>
         </table>
    </div>
    
  </div>
</div>




<!--analysis end-->



</div>

<!--body content end--> 


<!--footer start-->


<footer class="bg-dark custom-pt-2 pb-5 position-relative">
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
            <img class="img-fluid" src="images/images/White Datadive.png" alt="" style="width: 130px;">
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
<script src="js/jquery.min.js"></script>


<script type="text/javascript" language="javascript">

    $(document).ready(function () {
            $('#industry').on('change', function () {
                var industryId = this.value;

              $('#category').html('');
              

              $.ajax({
                    url: 'getcategory.php',
                    type: 'post',
                    data: {industryId:industryId},
                    success: function (res) {
                      $('#category').html('<option value="">Select Category</option>');
                        // $.each(res, function (key, value) {
                        //     $('#category').append('<option value="' + value
                        //         .id + '">' + value.name + '</option>');
                        // });
                        $('#category').html(res);

                        
                    }
                });
               
            });
            
    });


  //       $(document).ready(function () {
  //           $('#bus_country').on('change', function () {
  //               var countryId = this.value;

  //             $('#bus_state').html('');

  //             $.ajax({
  //                   url: '{{ route('getState') }}?country_id='+countryId,
  //                   type: 'get',
  //                   success: function (res) {
  //                       $('#bus_state').html('<option value="">Select State</option>');
  //                       $.each(res, function (key, value) {
  //                           $('#bus_state').append('<option value="' + value
  //                               .id + '">' + value.name + '</option>');
  //                       });
  //                       $('#bus_city').html('<option value="">Select City</option>');
  //                   }
  //               });
               
  //           });


   $('#category').on('change', function () {
                var categoryId = this.value;

    $('#brands').html('');

    $.ajax({
                    url: 'getbrand.php',
                    type: 'post',
                    data: {categoryId:categoryId},
                    success: function (res) {
                        $('#brands').html('<option value="">Select Brands</option>');
                        // $.each(res, function (key, value) {
                        //     $('#bus_city').append('<option value="' + value
                        //         .id + '">' + value.name + '</option>');
                        // });

                      $('#brands').html(res);
                    }
                });
               
            });

            
        




</script>



<script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day1');
      data.addColumn('number', 'Guardians of the Galaxy');
      data.addColumn('number', 'The Avengers');
      data.addColumn('number', 'Transformers: Age of Extinction');
      //data.addColumn('number', 'Transformers');

      data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 69.5, 32.4],
        [3,  25.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  11.9, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
        [13,  4.8,  6.3,  3.6],
        [14,  4.2,  6.2,  3.4]
      ]);

      var options = {
        chart: {
          title: 'Box Office Earnings in First Two Weeks of Opening',
          subtitle: 'in millions of dollars (USD)'
        },
        width: 600,
        height: 500,
        
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }

    $(window).resize(function(){
      drawChart();
    })

    // function resizeCharts () {
    // // redraw charts, dashboards, etc here
    // chart.draw(data, options);
    // }
    // $(window).resize(resizeCharts);
</script>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['18-24',     11],
          ['25-34',      2],
          ['35-44',  2],
          ['Over 45', 2],
          ['others',    7]
        ]);

        var options = {
          title: 'AGE'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>



</body>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['18-24',     11],
          ['25-34',      2],
          ['35-44',  2],
          ['Over 45', 2],
          ['others',    7]
        ]);

        var options = {
          title: 'AGE'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>



</body>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['18-24',     11],
          ['25-34',      2],
          ['35-44',  2],
          ['Over 45', 2],
          ['others',    7]
        ]);

        var options = {
          title: 'AGE'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>



</body>


<!-- Mirrored from themeht.com/stacht/ltr/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 09:02:15 GMT -->
</html>

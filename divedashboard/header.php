<?php 
    include_once "db.php";
?>

<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 08:50:39 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataDive DashBoard</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/plugin.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    

    <link rel="icon" type="image/png" sizes="16x16" href="img/d-aggregate.png">

    
    

    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="//cdn.ckeditor.com/4.16.0/basic/ckeditor.js"></script>
</head>

<body class="layout-light side-menu">

    <div class="mobile-search">
        <form action="https://demo.dashboardmarket.com/" class="search-form">
            <img src="img/svg/search.svg" alt="search" class="svg">
            <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                aria-label="Search">
        </form>
    </div>

    <div class="mobile-author-actions"></div>

    <!--header-->
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <div class="logo-area">
                    <a href="index.php">
                        <img class="img-fluid" src="img/data_dive_logo.png" alt="logo" style="width:130px">
                    </a>
                    <a href="#" class="sidebar-toggle">
                        <img class="svg" src="img/svg/align-center-alt.svg" alt="img"></a>
                </div>
                
            </div>

            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <li class="nav-search">
                        <a href="#" class="search-toggle">
                            <i class="uil uil-search"></i>
                            <i class="uil uil-times"></i>
                        </a>
                        <form action="https://demo.dashboardmarket.com/" class="search-form-topMenu">
                            <span class="search-icon uil uil-search"></span>
                            <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                                aria-label="Search">
                        </form>
                    </li>
                  

                    
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img src="img/avatar.png" alt=""
                                    class="rounded-circle">
                                <span class="nav-item__title">Super Admin<i
                                        class="las la-angle-down nav-item__arrow"></i></span>
                            </a>
                            <div class="dropdown-parent-wrapper">
                                <div class="dropdown-wrapper">
                                   
                                    <div class="nav-author__options">
                                        <a href="../logout.php" class="nav-author__signout">
                                        <i class="fa-solid fa-right-from-bracket"></i> Sign Out</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>

                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <img src="img/svg/search.svg" alt="search" class="svg feather-search">
                        <img src="img/svg/x.svg" alt="x" class="svg feather-x"></a>
                    <a href="#" class="btn-author-action">
                        <img class="svg" src="img/svg/more-vertical.svg" alt="more-vertical"></a>
                </div>
            </div>

        </nav>
    </header>
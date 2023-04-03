
<?php 
    ob_start();

    session_start(); 
    
    if(isset($_SESSION['id'])) {
    
    
    
    } else {
    
     header("location: ../divelogin/index.php");
    }

    include_once "header.php" 

?>
    <!--end header-->
    <main class="main-content">
       <?php include_once "sidebar.php" ?>

        <div class="contents">
            <div class="crm mb-25">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="row">
                                <div class="col-xxl-3 col-sm-3 mb-25">

                                    <div
                                        class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                                        <div class="overview-content w-100">
                                            <div
                                                class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                                <div class="ap-po-details__titlebar">
                                                    <h1>
                                                        <?php 
                                                           
                                                            $query = "SELECT * FROM users";   
                                                            $resultusers = mysqli_query($conn, $query);
                                                            $userscount = mysqli_num_rows($resultusers);
                                                            echo $userscount;
                                                        ?>
                                                    </h1>
                                                    <p>Users</p>
                                                </div>
                                                <div class="ap-po-details__icon-area">
                                                    <div class="svg-icon order-bg-opacity-primary color-primary">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xxl-3 col-sm-3 mb-25">

                                    <div
                                        class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                                        <div class="overview-content w-100">
                                            <div
                                                class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                                <div class="ap-po-details__titlebar">
                                                    <h1>
                                                        <?php 
                                                           
                                                           $query = "SELECT * FROM plans";   
                                                           $resultplans = mysqli_query($conn, $query);
                                                           $planscount = mysqli_num_rows($resultplans);
                                                           echo $planscount;
                                                       ?>
                                                    </h1>
                                                    <p>Plans</p>
                                                </div>
                                                <div class="ap-po-details__icon-area">
                                                    <div class="svg-icon order-bg-opacity-info color-info">
                                                        <i class="fa-solid fa-book"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xxl-3 col-sm-3 mb-25">

                                    <div
                                        class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                                        <div class="overview-content w-100">
                                            <div
                                                class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                                <div class="ap-po-details__titlebar">
                                                    <h1>
                                                        <?php 
                                                            $query = "SELECT * FROM slider";
                                                            $resultslider = mysqli_query($conn, $query);
                                                            $slidercount = mysqli_num_rows($resultslider);
                                                            echo $slidercount;
                                                        ?>
                                                    </h1>
                                                    <p>Slides</p>
                                                </div>
                                                <div class="ap-po-details__icon-area">
                                                    <div class="svg-icon order-bg-opacity-secondary color-secondary">
                                                        <i class="fa-solid fa-clipboard"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xxl-3 col-sm-3 mb-25">

                                    <div
                                        class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                                        <div class="overview-content w-100">
                                            <div
                                                class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                                <div class="ap-po-details__titlebar">
                                                    <h1>12</h1>
                                                    <p>Subscribers</p>
                                                </div>
                                                <div class="ap-po-details__icon-area">
                                                    <div class="svg-icon order-bg-opacity-warning color-warning">
                                                        <i class="fa-solid fa-users"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 mb-25">
                            <div class="card border-0 h-100">
                                <div class="card-header border-0 pb-md-0 pb-20">
                                    <h4>Reports</h4>
                                </div>
                                <div class="card-body pt-0 pb-25 mt-n10">
                                    <div id="top_x_div" style="width: 800px; height: 600px;"></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-xxl-12 col-lg-12 mb-25">
                            <div class="card border-0 px-25">
                                <div class="card-header px-0 border-0">
                                    <h6>Top Selling Products</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                                            <li>
                                                <a class="active" href="#t_selling-today" data-bs-toggle="tab"
                                                    id="t_selling-today-tab" role="tab" aria-selected="true">Today</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-week" data-bs-toggle="tab" id="t_selling-week-tab"
                                                    role="tab" aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-month" data-bs-toggle="tab" id="t_selling-month-tab"
                                                    role="tab" aria-selected="true">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel"
                                            aria-labelledby="t_selling-today-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>PRDUCTS NAME</th>
                                                                <th>Price</th>
                                                                <th>Sold</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="img/premium-clock.png" alt="img">
                                                                        <span>Premium Clock</span>
                                                                    </div>
                                                                </td>
                                                                <td>$280</td>
                                                                <td>339</td>
                                                                <td>$38,536</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="img/t-shirt.png" alt="img">
                                                                        <span>Boys T-Shirt</span>
                                                                    </div>
                                                                </td>
                                                                <td>$25</td>
                                                                <td>80</td>
                                                                <td>$20,573</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="img/nike.png" alt="img">
                                                                        <span>Nike Shoes</span>
                                                                    </div>
                                                                </td>
                                                                <td>$32</td>
                                                                <td>58</td>
                                                                <td>$17,457</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="img/cup-glass.png" alt="img">
                                                                        <span>Smart Glass</span>
                                                                    </div>
                                                                </td>
                                                                <td>$9,50</td>
                                                                <td>36</td>
                                                                <td>$15,354</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="img/women-bag.png" alt="img">
                                                                        <span>Women Bag</span>
                                                                    </div>
                                                                </td>
                                                                <td>$32</td>
                                                                <td>40</td>
                                                                <td>$12,354</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-week" role="tabpanel"
                                            aria-labelledby="t_selling-week-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>PRDUCTS NAME</th>
                                                                <th>Price</th>
                                                                <th>Sold</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="img/287.png" alt="img">
                                                                        <span>Samsung Galaxy S8 256GB</span>
                                                                    </div>
                                                                </td>
                                                                <td>$289</td>
                                                                <td>339</td>
                                                                <td>$60,258</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid"
                                                                            src="img/165.png" alt="img">
                                                                        <span>Half Sleeve Shirt</span>
                                                                    </div>
                                                                </td>
                                                                <td>$29</td>
                                                                <td>136</td>
                                                                <td>$2,483</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="img/166.png" alt="img">
                                                                        <span>Marco Shoes</span>
                                                                    </div>
                                                                </td>
                                                                <td>$59</td>
                                                                <td>448</td>
                                                                <td>$19,758</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="img/315.png" alt="img">
                                                                        <span>15" Mackbook Pro</span>
                                                                    </div>
                                                                </td>
                                                                <td>$1,299</td>
                                                                <td>159</td>
                                                                <td>$197,458</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="img/506.png" alt="img">
                                                                        <span>Apple iPhone X</span>
                                                                    </div>
                                                                </td>
                                                                <td>$899</td>
                                                                <td>146</td>
                                                                <td>115,254</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-month" role="tabpanel"
                                            aria-labelledby="t_selling-month-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>PRDUCTS NAME</th>
                                                                <th>Price</th>
                                                                <th>Sold</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="img/287.png" alt="img">
                                                                        <span>Samsung Galaxy S8 256GB</span>
                                                                    </div>
                                                                </td>
                                                                <td>$149</td>
                                                                <td>389</td>
                                                                <td>$60,278</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid"
                                                                            src="img/165.png" alt="img">
                                                                        <span>Half Sleeve Shirt</span>
                                                                    </div>
                                                                </td>
                                                                <td>$59</td>
                                                                <td>136</td>
                                                                <td>$2,483</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="img/166.png" alt="img">
                                                                        <span>Marco Shoes</span>
                                                                    </div>
                                                                </td>
                                                                <td>$89</td>
                                                                <td>448</td>
                                                                <td>$19,758</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="img/315.png" alt="img">
                                                                        <span>15" Mackbook Pro</span>
                                                                    </div>
                                                                </td>
                                                                <td>$1,29</td>
                                                                <td>15</td>
                                                                <td>$197,8</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="img/506.png" alt="img">
                                                                        <span>Apple iPhone X</span>
                                                                    </div>
                                                                </td>
                                                                <td>$99</td>
                                                                <td>16</td>
                                                                <td>1154</td>
                                                            </tr>
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

                </div>
            </div>
        </div>
    
        <?php include_once "footer.php" ?>
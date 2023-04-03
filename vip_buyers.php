<?php 

    ob_start();

    include_once "header.php";  

?>

<!-- hero section -->
<section class="page-title position-relative overflow-hidden shape-1 right">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="bg-white p-md-5 p-3 d-inline-block">
                    <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5">Message</span></h1>
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

    <div class="container-fluid">
        <div class="row justify-content-center mb-8">
        <div class="col-lg-7 col-md-12">
            <div class="p-3 p-lg-5 box-shadow bg-white rounded">
                <img src="images/check.png" alt=".." width="45" height="45" class="mb-2">
                <span style="font-size: 25px; font-weight:400">We've received your message.</span>
                <p>Thanks for reaching out to us. Our customer team is going to reach out to you asap.</p>
                <p>
                    In the meantime, feel free to:
                    <ul class="ms-5">
                        <li> <a href="#"> Post your data request</a> and get offers within 24h</li>
                        <li><a href="#">Search for datasets</a> and preview data samples</li>
                        <li>Explore data by <a href="#">category </a> or <a href="#">use cases</a> </li>
                    </ul>
                </p>
                <p>Cheers,</p>
                <p>Team DataDive</p>
            </div>
        </div>
        </div>
    
    </div>

</section>



<!-- consult expert -->



<?php include_once "footer.php"; ?>
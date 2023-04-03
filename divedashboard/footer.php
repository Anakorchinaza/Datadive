<footer class="footer-wrapper">
            <div class="footer-wrapper__inside">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <p><span>© 2023</span><a href="#">Datadive</a>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
    </main>


    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
    <div class="customizer-wrapper">
        <div class="customizer">
            <div class="customizer__head">
                <h4 class="customizer__title">Customizer</h4>
                <span class="customizer__sub-title">Customize your overview page layout</span>
                <a href="#" class="customizer-close">
                    <img class="svg" src="img/svg/x2.svg" alt="">
                </a>
            </div>
            <div class="customizer__body">
                <div class="customizer__single">
                    <h4>Layout Type</h4>
                    <ul class="customizer-list d-flex layout">
                        <li class="customizer-list__item">
                            <a href="https://demo.dashboardmarket.com/hexadash-html/ltr" class="active">
                                <img src="img/ltr.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="https://demo.dashboardmarket.com/hexadash-html/rtl">
                                <img src="img/rtl.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="customizer__single">
                    <h4>Sidebar Type</h4>
                    <ul class="customizer-list d-flex l_sidebar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="light" class="dark-mode-toggle active">
                                <img src="img/light.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="#" data-layout="dark" class="dark-mode-toggle">
                                <img src="img/dark.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="customizer__single">
                    <h4>Navbar Type</h4>
                    <ul class="customizer-list d-flex l_navbar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="side" class="active">
                                <img src="img/side.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item top">
                            <a href="#" data-layout="top">
                                <img src="img/top.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="colors"></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    
 <!-- Modal -->
    <div class="modal fade" id="contentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">VIP DATA EXPERT REQUEST</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size: 18px;"><strong>FullName:</strong> <span id="thename"></span></p>
                        <p style="font-size: 18px;"><strong>Company Name:</strong> <span id="thecname"></span></p>
                        <p style="font-size: 18px;"><strong>Work Email:</strong> <span id="theemail"></span></p>
                        <p style="font-size: 18px;"><strong>Phone Number:</strong> <span id="thephoneno"></span></p>
                        <p style="font-size: 18px;"><strong>Budget Estimate:</strong> <span id="thebudget"></span></p>
                        <p style="font-size: 18px;"><strong>Sourcing Urgency:</strong> <span id="theurgency"></span></p>
                        <p style="font-size: 18px;"><strong>Message:</strong> <span id="themessage"></span></p>
                        <p style="font-size: 18px;"><strong>Date:</strong> <span id="thedate"></span></p>
                    </div>

                   
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">DATADIVE CONTACT-US REQUEST</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size: 18px;"><strong>FirstName:</strong> <span id="thefname"></span></p>
                        <p style="font-size: 18px;"><strong>LastName:</strong> <span id="thelname"></span></p>
                        <p style="font-size: 18px;"><strong>Email:</strong> <span id="c_theemail"></span></p>
                        <p style="font-size: 18px;"><strong>Phone Number:</strong> <span id="c_thephoneno"></span></p>
                        <p style="font-size: 18px;"><strong>Message:</strong> <span id="c_themessage"></span></p>
                        <p style="font-size: 18px;"><strong>Date:</strong> <span id="c_thedate"></span></p>
                    </div>

                   
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

   

    <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

    <script src="js/plugins.min.js"></script>
    <script src="js/script.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);
  
        function drawStuff() {
          var data = new google.visualization.arrayToDataTable([
            ['Move', 'Percentage'],
            // ["Users (e4)", 44],
            // ["Queen's pawn (d4)", 31],
            // ["Knight to King 3 (Nf3)", 12],
            // ["Queen's bishop pawn (c4)", 10],
            <?php
                $anyname = [$userscount, $slidercount, $planscount ];
                $anyname2 = ['Users', 'Sliders', 'plans'];

                for ($i=0; $i < count($anyname); $i++) { 
                    echo "['$anyname2[$i]'" . "," . " $anyname[$i]],";
                }
                
            ?>
          ]);
  
          var options = {
            width: 800,
            legend: { position: 'none' },
            chart: {
              title: 'Chess opening moves',
              subtitle: 'popularity by percentage' },
            axes: {
              x: {
                0: { side: 'bottom', label: 'White to move'} // Top x-axis.
              }
            },
            bar: { groupWidth: "50%" }
          };
  
          var chart = new google.charts.Bar(document.getElementById('top_x_div'));
          // Convert the Classic options to Material options.
          chart.draw(data, google.charts.Bar.convertOptions(options));
        };

        $(window).resize(function(){
            drawStuff();
        })
    </script>

    <script>
        $(document).on("click", "#request", function () {
                    
            var thename = $(this).data('myname');
            var thecname = $(this).data('mycname');
            var theemail = $(this).data('myemail');
            var thephoneno = $(this).data('myphoneno');
            var thebudget = $(this).data('mybudget');
            var theurgency = $(this).data('myurgency');
            var themessage = $(this).data('mymessage');
            var thedate = $(this).data('mydate');
            
            // document.getElementById("theimage").innerHTML = './dashboard/'.theimage;
            document.getElementById("thename").innerHTML = thename;
            document.getElementById("thecname").innerHTML = thecname;
            document.getElementById("theemail").innerHTML = theemail;
            document.getElementById("thephoneno").innerHTML = thephoneno;
            document.getElementById("thebudget").innerHTML = thebudget;
            document.getElementById("theurgency").innerHTML = theurgency;
            document.getElementById("themessage").innerHTML = themessage;
            document.getElementById("thedate").innerHTML = thedate;
            document.getElementById("holla").innerHTML = n;

            

        });
  </script>

<script>
        $(document).on("click", "#contactrequest", function () {
                    
            var thefname = $(this).data('myfname');
            var thelname = $(this).data('mylname');
            var c_theemail = $(this).data('c_myemail');
            var c_thephoneno = $(this).data('c_myphoneno');
            var c_themessage = $(this).data('c_mymessage');
            var c_thedate = $(this).data('c_mydate');
            
            // document.getElementById("theimage").innerHTML = './dashboard/'.theimage;
            document.getElementById("thefname").innerHTML = thefname;
            document.getElementById("thelname").innerHTML = thelname;
            document.getElementById("c_theemail").innerHTML = c_theemail;
            document.getElementById("c_thephoneno").innerHTML = c_thephoneno;
            document.getElementById("c_themessage").innerHTML = c_themessage;
            document.getElementById("c_thedate").innerHTML = c_thedate;
            document.getElementById("holla").innerHTML = n;

            

        });
  </script>

</body>

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 08:52:19 GMT -->

</html>
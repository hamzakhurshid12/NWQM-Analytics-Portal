<?php
include "php/amcharts.php";
?>
<!doctype html>
<html class="fixed">
<head>
<?php
getamChartsScripts();
?>
    <!-- Uniocde -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <![endif]-->
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Pgae Description -->
    <meta name="description" content="Akroot portfolio Template">
    <!-- Page Kewords -->
    <meta name="keywords" content="Akroot">
    <!-- Site Author -->
    <meta name="author" content="Akroot">
    <!-- Title -->
    <title>IoT MAP | NWQM</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

    <script src="assets/js/WqiScript.js"></script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NWQM - IoT Map</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="map_assets\css\style.css">


    <script>
    var nodeID="101";
    </script>

    <script src="map_assets/js/WQI-conc.js"></script>
    <script src="map_assets/js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Section Preloader -->
    <div id="section-preloader">
        <div class="blobs">
            <div class="blob-center"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
        </div>
    </div>
    <!-- /.Section Preloader -->
    <!-- Section Navbar -->
    <div id="section-navbar1">
        <div>
            <nav>
               
                <ul class="nav navbar-nav navbar1">
                    
                        <button type="button" id="sidebarCollapse" class="navbar-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="section-search" class="close-search">
        <div class="container">
            <div class="navigation-search">
                <div class="row">
                    <div class="col ns-logo">
                        <a href="#"><img src="assets/images/logo.png" alt="Akroot"></a>
                    </div>
                    <div class="col ns-close">
                        <span class="close"></span>
                    </div>
                </div>
            </div>
            <div class="col search-content">
                <form action="#" method="post">
                    <input type="text" name="search" placeholder="Type here give it to enter">
                    <input type="submit" name="search" value="">
                    <i class="flaticon-search"></i>
                </form>
            </div>
        </div>
    </div>
    <!-- /.Section Navbar -->
    <div class="main-wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <ul class="list-unstyled components">
                <li>
                    <a href="NWQM - Home Page.php" class="list-menu">Home</a>
                </li>
                <li>
                    <a href="Historic Readings.php" class="list-menu">Historic Readings</a>
                </li>
                 <li>
                    <a href="Realtime Readings.php" class="list-menu">Realtime Readings</a>
                </li>
                <li>
                    <a href="Data Analysis.php" class="list-menu">Data Analysis</a>
                </li>
                <li>
                    <a href="Realtime Data Analysis.php" class="list-menu">Realtime Data Analysis</a>
                </li>
                </li>
                <li>
                    <a href="IoT Map.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-menu">IoT Map</a>
                </li>
                <li>
                    <a href="Bacterial Classification.php" class="list-menu">Bacterial Classification</a>
                </li>
            </ul>
        </nav>
        <!-- /.Sidebar  -->
    <div class="main-wrapper">

            <!-- Section Breadcrumb 1 -->
            <div id="section-breadcrumb1" class="bg1">
                <div class="container">
                    <div class="row">
                        <div class="content col-12">
                            <h1>WQI Map</h1>
                            <ul>
                                <li><a href="NWQM - Home Page.php">Home</a></li>
                                <li class="current"><a href="#">WQI Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        



 

        

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <form id="map-form" class="form-horizontal" action="update.php" name="map-select" style="padding-bottom: 0px">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Enter the Parameter</label></div>
                                    <div class="col-12 col-md-9">
                                        <select class="form-control" name="Parameter" value="Choose Parameter">
                                                            <option value="Turbidity" class="dropdown-header"><a href="#"><i>Turbidity</i></a></option>
                                                            <option value="Temperature" class="dropdown-header"><a href="#"><i>Temperature</i></a></option>
                                                            <option value="DO" class="dropdown-header"><a href="#"><i>DO</i></a></option>
                                                            <option value="pH" class="dropdown-header"><a href="#"><i>pH</i></a></option>
                                                            <option value="Conductivity" class="dropdown-header"><a href="#"><i>Conductivity</i></a></option>
                                                            </select>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Enter the Date</label></div>
                                    <div class="col-12 col-md-9">
                                        <input class="form-control" type="date" name="date" required="">
                                    </div>
                                </div>

                            </form>
                        </div>
                        
                        <div class="card-footer" style="align-content: center;">
                            <center>
                            <button type="submit" class="btn btn-primary" onclick="updateMap()" form="" style="background-color: black; align-content: center;">
                                     Enter
                                </button>
                                </center>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <style>
table, th, td {
  border: 0.5px solid black;
  text-align:center;
}
</style>


<center>
                <table style="width: 98%">
                    <tr><h3 style="color:#293d3d">WQI Legend</h3></tr>
  <tr>
    <th style="background-color: black; color: white; font-weight: normal;">Index Range</th>
    <th style="background-color: black; color: white; font-weight: normal;text-align: center">100-95</th>
    <th style="background-color: black; color: white; font-weight: normal;">94-90</th>
    <th style="background-color: black; color: white; font-weight: normal;">89-80</th>    
    <th style="background-color: black; color: white; font-weight: normal;">79-65</th>
    <th style="background-color: black; color: white; font-weight: normal;">65-45</th>
    <th style="background-color: black; color: white; font-weight: normal;">44-0</th>   
  </tr>
  <tr>
    <td>Quality Class</td>
    <td style="background-color: #009933">Class 1</td>
    <td style="background-color: #33ff77">Class 2</td>    
    <td style="background-color: #a6ff4d">Class 3</td>
    <td style="background-color: #ffb3b3">Class 4</td>
    <td style="background-color: #ff8566">Class 5</td>    
    <td style="background-color: #e62e00">Class 6</td>
  </tr>
</table>
</center>
<br><br>               
                            <div id="map" class="map"></div>
                        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIwcKb9GpuoAN3Nvj6OGkKJOqnxrLCLbI&callback=initMap&libraries=visualization">
                        </script>
                        <script src="map_assets\js\functions.js"></script>

    <script>
        /*(function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.5,
                selectedColor: '#33ff77',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#009933', '#33ff77'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);*/
    </script>

    <!-- Vendor -->
        <script src="assets/vendor/jquery/jquery.js"></script>
        <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        
        <!-- Specific Page Vendor -->
        <script src="assets/vendor/select2/select2.js"></script>
        <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
        <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="assets/javascripts/theme.custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="assets/javascripts/theme.init.js"></script>


        <!-- Examples -->
        <script src="assets/javascripts/tables/examples.datatables.ajax.js"></script>

                    </div>
                </div>
            </div>
            <!-- /.Section CTA 3 -->
            <!-- Section Footer -->
            <div id="section-footer">
                <div class="container">
                    <div class="footer2 row">
                        <div class="ft-copyright col-md-6">
                            <p>Copyright © 2020 NWQM SEECS. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Section Footer -->
        </div>
    </div>

    <!-- Javascript Files -->
    <script src="assets/js/jquery2.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Waypoint -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- Easy Waypoint -->
    <script src="assets/js/easy-waypoint-animate.js"></script>
    <!-- Counter -->
    <script src="assets/js/jquery.countup.js"></script>
    <script src="assets/js/cmz-count.js"></script>
    <!-- Scripts -->
    <script src="assets/js/scripts.js"></script>

</body>
</html>
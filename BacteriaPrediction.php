
<!doctype html>
<html class="fixed">
<head>

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
    <title>Bacterial Classification | NWQM</title>
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
    <script src="assets/js/MLPRegressor.js"></script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NWQM - Bacterial Classification</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="map_assets\css\style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style>
#myProgress {
  width: 100%;
  background-color: grey;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: green;
}
</style>
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
                    <a href="index.php" class="list-menu">Home</a>
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
                <li>
                    <a href="IoT Map.php" class="list-menu">IoT Map</a>
                </li>
                <li>
                    <a href="BacteriaPrediction.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-menu">Bacterial Classification</a>
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
                            <h1>Bacteria Prediction</h1>
                            <ul>
                                <li><a href="NWQM - Home Page.php">Home</a></li>
                                <li class="current"><a href="#">Bacteria Prediction</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
<section role="main" style="width: 100%">
            <section style="width: 100%" align="center">
                                <div align="center">
                                <br>
                                	<h2>Water Quality Parameters Input</h2>
                                <br>
                                </div>
                                </section>

                                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <form id="#" class="form-horizontal" style="padding-bottom: 0px">
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Temperature</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="temperature" class="form-control" type="text" name="temperature" required="">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Turbidity</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="turbidity" class="form-control" type="number" name="turbidity" required="">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">pH</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="pH" class="form-control" type="number" name="pH" required="">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Conductivity</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="conductivity" class="form-control" type="number" name="conductivity" required="">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Dissolved Oxygen</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input id="dissolvedOxygen" class="form-control" type="number" name="dissolvedOxygen" required="">
                                    </div>
                                </div>

                            </form>
                        </div>
                        
                        <div class="card-footer" style="align-content: center;">
                            <center>
                            <button type="submit" class="btn btn-primary" onclick="predictButton()" form="" style="background-color: black; align-content: center;">
                                     Run Prediction Model
                                </button>
                                </center>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                    <div id="resultsDiv">
                        
                        </div>
                    </div>
                </div>
            </div>
            <div>

 
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
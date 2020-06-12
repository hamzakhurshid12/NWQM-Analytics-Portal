<!DOCTYPE html>
<html lang="en">
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
    <title>ML Models | NWQM</title>
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
	<div id="section-navbar1" style="height: 10%">
		<div class="container" style="height: 10%">
			<nav class="navbar navbar-expand-lg" style="height: 10%">
				<div class="header-logo mr-auto">
					<a href="#"><img src="assets/images/logo.png" style="height: 70% ; width: 70%; margin-top: 15%" alt="NWQM"></a>
				</div>
				<ul class="nav navbar-nav navbar1">
					<li class="nav-item">
		                <div class="header-contact">The Public Portal for Water Quality Monitoring</div>
		            </li>
		            
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
                    <a href="ML Models.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-menu">ML Models</a>
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
                    <a href="IoT Map.php" class="list-menu">IoT Map</a>
                </li>
                <li>
                    <a href="Bacterial Classification.php" class="list-menu">Bacterial Classification</a>
                </li>
            </ul>
        </nav>
        <!-- /.Sidebar  -->
	<div class="main-wrapper">
		<div id="main-content" class="active">
			<!-- Section Breadcrumb 1 -->
		    <div id="section-breadcrumb1" class="bg1">
		    	<div class="container">
		    		<div class="row">
		    			<div class="content col-12">
		    				<h1>ML Models</h1>
		    				<ul>
		    					<li><a href="NWQM - Home Page.php">Home</a></li>
		    					<li class="current"><a href="#">ML Models</a></li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>
			<!-- /.Section Breadcrumb 1 -->
			
			<!-- /.Section miscellaneous 1 -->
			<!-- Section CTA 3 -->
			<div style="background-color:#F3F3F9; padding-top: 20px;padding-bottom: 20px;" id="section-cta3">
				<style>
</style>



				<div class="container">
					<div class="row ez-animate" data-animation="fadeInUp">
	<section class="body">

    <?php 
    //Creating the header
    include "php/header.php";

    ?>
      
    <?php
    include "php/sidebar.php";

    ?>

    <!-- <div class="portfolioContainer">
							<div class="row">
								<div class="item webDesign">
									
										<div class="img-container">
											<img class="img-fluid" src="assets/images/nn.png" alt="Akroot">
											
												
													<h3 style="color:black">3-Layered Neural Network</h3>
													<p style="color: #d0bb79; font-size: 15px;font-weight: bold">MSE: 0.77845, R2: 0.50493</p>
													<i></i>
												
											
										</div>
								</div>-->
    </section>
    <!-- Section Our Portfolio 3 -->
    
			<div id="section-ourportfolio3" style="background-color: #F3F3F9">
				<h1 align="center" style="margin-top: -100px">Trained Models Results</h1>
						<div class="portfolioContainer">
							<div class="row">
								<div class="item webDesign">
									
										<div class="img-container">
											<img class="img-fluid" src="assets/images/nn.png" alt="Akroot">
											<div class="overlay">
												<div class="overlay-content">
													<h3>3-Layered Neural Network</h3>
													<p style="color: #d0bb79; font-size: 15px;font-weight: bold">MSE: 0.77845, R2: 0.50493</p>
													<i></i>
												</div>
											</div>
										</div>
								</div>
								<div class="item marketing">
										<div class="img-container">
											<img class="img-fluid" src="assets/images/svm.png" alt="Akroot">
											<div class="overlay">
												<div class="overlay-content">
													<h3>Support Vector Machines</h3>
													<p style="color: #d0bb79; font-size: 15px;font-weight: bold">MSE: 0.35575, R2: -0.40588</p>
													<i></i>
												</div>
											</div>
										</div>
								</div>
								<div class="item webDesign illustrations">
										<div class="img-container">
											<img class="img-fluid" src="assets/images/ridge.png" alt="Akroot">
											<div class="overlay">
												<div class="overlay-content">
													<h3>Ridge Regression</h3>
													<p style="color: #d0bb79; font-size: 15px;font-weight: bold">MSE: 1.94575, R2: -6.68937</p>
													<i></i>
												</div>
											</div>
										</div>
								</div>
								<div class="item illustrations marketing photography">
										<div class="img-container">
											<img class="img-fluid" src="assets/images/dec tree.png" alt="Akroot">
											<div class="overlay">
												<div class="overlay-content">
													<h3>Decision Trees Regression</h3>
													<p style="color: #d0bb79; font-size: 15px;font-weight: bold">MSE: 1.06162, R2: -3.19540</p>
													<i></i>
												</div>
											</div>
										</div>
								</div>
								<div class="item webDesign">
									<a href="#">
										<div class="img-container">
											<img class="img-fluid" src="assets/images/bayesian.png" alt="Akroot">
											<div class="overlay">
												<div class="overlay-content">
													<h3>Bayesian Regression</h3>
													<p style="color: #d0bb79; font-size: 15px;font-weight: bold">MSE: 0.39566, R2: -0.56363</p>
													<i></i>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						<!-- /.Content Portfolio --> 
						<!-- /.Load More Button -->
					
			</div>
			<!-- /.Section Our Portfolio 3 -->

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
	
	<script>
	//Code for hiding unwanted items
	$(".select2-focusser").css("visibility","hidden");
	$(".select2-input").css("visibility","hidden");
	
	</script>

</body>
</html>


<?php
include "php/amcharts.php";
?>
<?php
include "php/amcharts - realtime.php";
?>
<?php
if(isset($_GET["kitID"])){
	$kitID=$_GET["kitID"];
}
else{
	$kitID=-1;
}
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
    <title>Realtime Data Analysis | NWQM</title>
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
		<script src="assets/js/MLPRegressor.js"></script>

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
                    <a href="index.php" class="list-menu">Home</a>
                </li>
                <li>
                    <a href="Realtime Readings.php" class="list-menu">Water Quality Data - Tabular</a>
                </li>
				<li>
                    <a href="Realtime Data Analysis.php" class="list-menu">Water Quality Data - Graphical</a>
                </li>
                 <li>
                    <a href="IoT Map.php" class="list-menu">Classification Map</a>
                </li>
				<li>
                    <a href="ml-models.php" class="list-menu">ML Models Analysis</a>
                </li>
				<li>
                    <a href="dataPredictGraphical.php" class="list-menu">Bacteria Prediction on IoT Nodes Data</a>
                </li>
				<li>
                    <a href="BacteriaPrediction.php" class="list-menu">Bacteria Calculator</a>
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
		    				<h1>Realtime Prediction Results</h1>
		    				<ul>
		    					<li><a href="NWQM - Home Page.php">Home</a></li>
		    					<li class="current"><a href="#">Realtime Prediction Results</a></li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>
			<!-- /.Section Breadcrumb 1 -->
			
			<!-- /.Section miscellaneous 1 -->
			<!-- Section CTA 3 -->
			<div style="background-color:#F3F3F9; padding-top: 20px;padding-bottom: 20px;max-width:100%;align-content: center" id="section-cta3">
				<div class="container" style="background-color:#F3F3F9; padding-top: 20px;padding-bottom: 20px;width:100%;align-content: right">
					<div class="row ez-animate" data-animation="fadeInUp">
    <section class="body" style="width: 100%">

    <?php 
    //Creating the header
    include "php/header.php";
    ?>
        <div>
    <?php
    include "php/sidebar.php";
    ?>
            <section role="main" class="content-body">
            <section class="panel">
									<header class="panel-heading">
									</header>
									<div class="panel-body">
									
									</div>
                                

				<br>
				<br>

<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="//www.amcharts.com/lib/4/themes/patterns.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<script type="text/javascript">

am4core.useTheme(am4themes_myTheme);
am4core.useTheme(am4themes_myTheme1);
am4core.useTheme(am4themes_patterns);
am4core.useTheme(am4themes_animated);

</script>
				<div style="width:100%">
					<div id="dataChartTemperature">
					</div>
					<div id="dataChartPH">
					</div>
					<div id="dataChartTurbidity">
					</div>
					<div id="dataChartDissolvedOxygen">
					</div>
					<div id="dataChartConductivity">
					</div>
				</div>
				</section>
	</section>
</div>
    </section>

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
        <script>
		var source=0;
		$.ajax({url: "php/amchartsPredict.php?valType=temperature&kit="+source, success: function(result){
					$("#dataChartTemperature").html(result+"<br>");
		}});

		//The Triggers to load the graph for checkbox of each parameter
		$("#cbTemperature").change(function(){
			if($("#cbTemperature").prop('checked')){
				var source=$("#sourceDropdown option:selected").val();
				
			}
			else{
				$("#dataChartTemperature").html("");
			}
		});
		$("#cbTurbidity").change(function(){
			if($("#cbTurbidity").prop('checked')){
				var source=$("#sourceDropdown option:selected").val();
				$.ajax({url: "php/amcharts - realtime.php?valType=turbidity&kit="+source, success: function(result){
					$("#dataChartTurbidity").html(result+"<br>");
				}});
			}
			else{
				$("#dataChartTurbidity").html("");
			}
		});
		$("#cbPH").change(function(){
			if($("#cbPH").prop('checked')){
				var source=$("#sourceDropdown option:selected").val();
				$.ajax({url: "php/amcharts - realtime.php?valType=pH&kit="+source, success: function(result){
					$("#dataChartPH").html(result+"<br>");
				}});
			}
			else{
				$("#dataChartPH").html("");
			}
		});
		$("#cbDissolvedOxygen").change(function(){
			if($("#cbDissolvedOxygen").prop('checked')){
				var source=$("#sourceDropdown option:selected").val();
				$.ajax({url: "php/amcharts - realtime.php?valType=dissolvedOxygen&kit="+source, success: function(result){
					$("#dataChartDissolvedOxygen").html(result+"<br>");
				}});
			}
			else{
				$("#dataChartDissolvedOxygen").html("");
			}
		});
		$("#cbConductivity").change(function(){
			if($("#cbConductivity").prop('checked')){
				var source=$("#sourceDropdown option:selected").val();
				$.ajax({url: "php/amcharts - realtime.php?valType=conductivity&kit="+source, success: function(result){
					$("#dataChartConductivity").html(result+"<br>");
				}});
			}
			else{
				$("#dataChartConductivity").html("");
			}
		});


		//For Changing the Kit
		$("#sourceDropdown").change(function(){
			window.location.replace("Data Charts - Realtime.php?kitID="+$("#sourceDropdown").val());
		})
        </script>
    </div>
</div>
</div>

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

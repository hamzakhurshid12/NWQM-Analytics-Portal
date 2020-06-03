<?php
include "php/amcharts.php";
?>
<!doctype html>
<html class="fixed">
<head>
	<?php
getamChartsScripts1();
?>
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
    <title>Data Analysis | NWQM</title>
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
                    <a href="Historic Readings.php" class="list-menu">Historic Readings</a>
                </li>
                <li>
                    <a href="Realtime Readings.php" class="list-menu">Realtime Readings</a>
                </li>
                <li>
                    <a href="Data Analysis.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-menu">Data Analysis</a>
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
		    				<h1>Data Analysis</h1>
		    				<ul>
		    					<li><a href="NWQM - Home Page.php">Home</a></li>
		    					<li class="current"><a href="#">Data Analysis</a></li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>
			<!-- /.Section Breadcrumb 1 -->
			
			<!-- /.Section miscellaneous 1 -->
			<!-- Section CTA 3 -->
			<div style="background-color:#F3F3F9; padding-top: 20px;padding-bottom: 20px;">
				<div class="container">
					<div class="row ez-animate" data-animation="fadeInUp" style="width: 100%">
	<section class="body" style="width: 100%">
		  <?php 
    //Creating the header
    include "php/header.php";
    ?>
        <div>
    <?php
    include "php/sidebar.php";
    ?>
            <section role="main" style="width: 100%">
            <section style="width: 100%">
									<header class="panel-heading">
						
										<h2 class="panel-title">First Parameter Inputs</h2>
									</header>
									<div>
										<form class="form-horizontal" method="get" style="width: 100%">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Data Source</label>
												<div class="col-md-6" style="width: 100%">
													<select class="form-control input-sm mb-md" id="sourceDropdown">
														<option value="S1">Source 1</option>
														<option value="S2">Source 2</option>
                                                        <option value="S3">Source 3</option>
                                                        <option value="S4">Source 4</option>
														<option value="S5">Source 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="width: 100%;">
                                            <label class="col-md-3 control-label" for="inputSuccess">Data Type</label>
												<div class="col-md-6" style="width: 100%;">
                                                <select class="form-control input-sm mb-md" id="typeDropdown">
														<option value="3">Temperature</option>
														<option value="4">Turbidity</option>
                                                        <option value="5">pH</option>
                                                        <option value="6">Alkilinity</option>
														<option value="7">Hardness (CaCO3)</option>
                                                        <option value="8">Conductance</option>
                                                        <option value="9">Calcium</option>
														<option value="10">Total Dissolved Solids</option>
                                                        <option value="11">Chlorides</option>
                                                        <option value="12">Nitrate (NO2)</option>
														<option value="13">Fecal Chloriform Count</option>
													</select>
                                                </div>
											</div>
										</form>
									</div>
                                </section>
                                <br>
                                <br>
                                <br>
                                

<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>



<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="//www.amcharts.com/lib/4/themes/patterns.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<script type="text/javascript">
	function am4themes_myTheme(dataChart) {
  if (dataChart instanceof am4charts.XYChart) {
    dataChart.background.fill = am4core.color("#EAEDED");   
    dataChart.fillOpacity = 0.5;
    dataChart.strokeWidth = 4;
   // dataChart.background.stroke = am4core.color("#AEB6BF");
    // dataChart.filters.push(new am4core.DropShadowFilter);

 
    //dataChart.contents.fill = dataChart.contents.stroke;


  }
}
function am4themes_myTheme1(dataChart) {
  if (dataChart instanceof am4core.ColorSet) {
    dataChart.list = [
      am4core.color("#1BA68D"),
      am4core.color("#E7DA4F"),
      am4core.color("#E77624"),
      am4core.color("#DF3520"),
      am4core.color("#64297B"),
      am4core.color("#232555")
    ];
  }
}


am4core.useTheme(am4themes_myTheme);
am4core.useTheme(am4themes_myTheme1);
am4core.useTheme(am4themes_animated);

</script>

<script type="text/javascript">
	function am4themes_myTheme(dataChart1) {
  if (dataChart1 instanceof am4charts.XYChart) {
    dataChart1.background.fill = am4core.color("#EAEDED");   
    dataChart1.fillOpacity = 0.5;
    dataChart1.strokeWidth = 4;
   // dataChart.background.stroke = am4core.color("#AEB6BF");
    // dataChart.filters.push(new am4core.DropShadowFilter);

 
    //dataChart.contents.fill = dataChart.contents.stroke;


  }
}
function am4themes_myTheme1(dataChart1) {
  if (dataChart1 instanceof am4core.ColorSet) {
    dataChart1.list = [
      am4core.color("#1BA68D"),
      am4core.color("#E7DA4F"),
      am4core.color("#E77624"),
      am4core.color("#DF3520"),
      am4core.color("#64297B"),
      am4core.color("#232555")
    ];
  }
}


am4core.useTheme(am4themes_myTheme);
am4core.useTheme(am4themes_myTheme1);
am4core.useTheme(am4themes_animated);

</script>

<!-- Chart code -->

                <div id="dataChart" style="width: 100%; ">
                    <?php 
                    
                    getamChartsDiv(3, 'S2');
                    ?>
                </div>

                <br><br><br>
                <section role="main" style="width: 100%">
            <section style="width: 100%">
									<header class="panel-heading">
						
										<h2 class="panel-title">Second Parameter Inputs</h2>
									</header>
									<div>
										<form class="form-horizontal" method="get" style="width: 100%">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Data Source</label>
												<div class="col-md-6" style="width: 100%">
													<select class="form-control input-sm mb-md" id="sourceDropdown1">
														<option value="S1">Source 1</option>
														<option value="S2">Source 2</option>
                                                        <option value="S3">Source 3</option>
                                                        <option value="S4">Source 4</option>
														<option value="S5">Source 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="width: 100%;">
                                            <label class="col-md-3 control-label" for="inputSuccess">Data Type</label>
												<div class="col-md-6" style="width: 100%;">
                                                <select class="form-control input-sm mb-md" id="typeDropdown1">
														<option value="3">Temperature</option>
														<option value="4">Turbidity</option>
                                                        <option value="5">pH</option>
                                                        <option value="6">Alkilinity</option>
														<option value="7">Hardness (CaCO3)</option>
                                                        <option value="8">Conductance</option>
                                                        <option value="9">Calcium</option>
														<option value="10">Total Dissolved Solids</option>
                                                        <option value="11">Chlorides</option>
                                                        <option value="12">Nitrate (NO2)</option>
														<option value="13">Fecal Chloriform Count</option>
													</select>
                                                </div>
											</div>
										</form>
									</div>
                                </section>
                                <br>
                                <br>
                                <br>

                <div id="dataChart1" style="width: 100%; ">
                    <?php 
                    		getamChartsDiv1(3, 'S2');
                    ?>
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
        $("#sourceDropdown, #typeDropdown").change(function(){
            var source=$("#sourceDropdown option:selected").val();
            var type=$("#typeDropdown option:selected").val();
            $.ajax({url: "php/amcharts.php?index="+type+"&reservoir="+source+"&chart=1", success: function(result){
                $("#dataChart").html(result);
                console.log(result);
            }});


        });
        </script>

                <script>
        $("#sourceDropdown1, #typeDropdown1").change(function(){
            var source=$("#sourceDropdown1 option:selected").val();
            var type=$("#typeDropdown1 option:selected").val();
            $.ajax({url: "php/amcharts.php?index="+type+"&reservoir="+source+"&chart=1", success: function(result){
                $("#dataChart1").html(result);
                console.log(result);
            }});


        });
        </script>



					</div>
				</div>

			<!-- /.Section CTA 3 -->
			<!-- Section Footer -->
			<div style="margin-top: 1400px" id="section-footer">
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

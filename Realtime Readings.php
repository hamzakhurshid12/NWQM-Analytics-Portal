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
    <title>Realtime Readings | NWQM</title>
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
		<script>
		function readHistoricalData()
		{
				var data;
				var rawFile = new XMLHttpRequest();
				rawFile.open("GET", "6_parameters.csv", false);
				rawFile.onreadystatechange = function ()
				{
					if(rawFile.readyState === 4)
					{
						if(rawFile.status === 200 || rawFile.status == 0)
						{
							var allText = rawFile.responseText;
							data = $.csv.toObjects(allText);
						}
					}
				}
				rawFile.send(null);
				return data;
			}
		</script>
		
		<script src="assets/js/WqiScript.js"></script>
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
                    <a href="Realtime Readings.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-menu">Water Quality Data - Tabular</a>
                </li>
				<li>
                    <a href="Realtime Data Analysis.php" >Water Quality Data - Graphical</a>
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
                    <a href="BacteriaPrediction.php" >Bacteria Calculator</a>
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
		    				<h1>Water Quality Data - Tabular</h1>
		    				<ul>
		    					<li><a href="NWQM - Home Page.php">Home</a></li>
		    					<li class="current"><a href="#">Water Quality Data - Tabular</a></li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>
			<!-- /.Section Breadcrumb 1 -->          
			
			<!-- /.Section miscellaneous 1 -->
			<!-- Section CTA 3 -->
			<div style="background-color:#F3F3F9; padding-top: 20px;padding-bottom: 20px;width:100%;align-content: center" id="section-cta3">
							  <style>
table, th, td {
  border: 0.5px solid black;
  text-align:center;
}
</style>


<center>
                <table style="width: 98%">
               
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
    <td>WQI Class</td>
    <td style="background-color: #009933">Class 1</td>
    <td style="background-color: #33ff77">Class 2</td>    
    <td style="background-color: #a6ff4d">Class 3</td>
    <td style="background-color: #ffb3b3">Class 4</td>
    <td style="background-color: #ff8566">Class 5</td>    
    <td style="background-color: #e62e00">Class 6</td>
  </tr>
</table>
</center>
				<div class="container" style="background-color:#F3F3F9; padding-top: 20px;padding-bottom: 20px;width:100%;align-content: right">
					<div class="row ez-animate" data-animation="fadeInUp">
    <section class="body" style="width:100%">

    <?php
    function getJSON(){
        $json_text = file_get_contents("http://naqm.seecs.nust.edu.pk/wqm/retrieve_val.php");

        $data_json=json_decode($json_text,TRUE); //converting json string object to json object
        $resultString='{"aaData":';
        //print_r($data_json["rows"]);
        for($x=0;$x<count($data_json["rows"]);$x++){
            $resultString.='['.($data_json["rows"][$x]["timestamp"]).','.($data_json["rows"][$x]["turbidity"]).','.($data_json["rows"][$x]["pH"]).','.($data_json["rows"][$x]["dissolvedOxygen"]).','.($data_json["rows"][$x]["conductivity"]).','.($data_json["rows"][$x]["temperature"]).']';
            if ($x<(count($data_json["rows"])-1)){
                $resultString.=',';
            }
        }
        $resultString.=']}';
        return $resultString;
    }
    ?> 

    <?php 
    //Creating the header
    include "php/header.php";
    //echo getJSON();
    $json_text = file_get_contents("http://naqm.seecs.nust.edu.pk/wqm/retrieve_val.php");
    $data_json=json_decode($json_text,TRUE); //converting json string object to json object
    ?>
        
    <?php
    include "php/sidebar.php";
    ?>

            <section role="main" class="content-body" style="width: 100%">
                <section class="panel" style="width:100%; float: left;padding-left: 0px">
         
                    <div class="panel-body" style="width: 100%">
                        <table class="table table-striped table-dark" id="datatable-default">
                        <thead class="thead-dark">
										<tr>
											<th>Time/Date</th>
											<th>Turbidity</th>
											<th>pH</th>
											<th>Disolved Oxygen</th>
                                            <th>Conductivity</th>
                                            <th>Temperature</th>
                                            <th>WQI</th>
										</tr>
									</thead>
									<tbody>
                                        <?php
                                        $prevTemp=40;
                                        for($x=count($data_json["rows"])-1;$x>=0;$x--){
                                            $tempDiff=abs($prevTemp-floatval($data_json['rows'][$x]['temperature']));
                                            $prevTemp=floatval($data_json['rows'][$x]['temperature']);
                                            $wqi=$tempDiff;
                                            //$fecalColiform=predict(floatval($data_json['rows'][$x]['temperature']),floatval($data_json['rows'][$x]['turbidity']),floatval($data_json['rows'][$x]['pH']),floatval($data_json['rows'][$x]['conductivity']),floatval($data_json['rows'][$x]['disolvedOxygen']));
                                            //console.log($fecalColiform);
                                            echo '<tr>';
                                            echo '<td>'.$data_json['rows'][$x]['timestamp'].'</td>'
                                            .'<td>'.$data_json['rows'][$x]['turbidity'].'</td>'
                                            .'<td>'.$data_json['rows'][$x]['pH'].'</td>'
                                            .'<td>'.$data_json['rows'][$x]['dissolvedOxygen'].'</td>'
                                            .'<td>'.$data_json['rows'][$x]['conductivity'].'</td>'
                                            .'<td>'.$data_json['rows'][$x]['temperature'].'</td>'
                                            .'<td>'.$wqi.'</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                            </tbody>
                        </table>
                    </div>

                </section>
                
   <section class="panel" style="width:100%">
                    <br><br>
                    <header class="panel-heading">

                        <h6 class="panel-title" style="color: grey; font-size: 30px" align="center">Safe Values Range</h6>
                    </header>
                 <div class="panel-body" style="width: 100%">
                        <table class="table table-striped table-dark" style="align-content: center" id="datatable-default">
                        <thead class="thead-dark">
								<tr style="width: 100%;font-weight: bold;font-size: 20px">
									<th>Parameter</th>
									<th>Safe Range</th>
								</tr>
							</thead>
							<tbody>
							    <tr>
                                <th>Turbidity</th>
                                <td>0-5</td>
                                </tr>
                                <tr>
									<th>pH</th>
									<td>6.5-8.5</td>
								</tr>
                                <tr>
									<th>Disolved Oxygen (mg/L)</th>
									<td>1-6</td>
								</tr>
                                <tr>
                                    <th>Conductivity (S/m)</th>
                                    <td>0.5-3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </section>
                
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
		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
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
	<script src="assets/js/jquery-csv.js"></script>
	
	<script>
	//Code for hiding unwanted items
	$(".select2-focusser").css("visibility","hidden");
	$(".select2-input").css("visibility","hidden");
	</script>
	
	<script>
	    var table = document.getElementById('datatable-default');
		
		var data=readHistoricalData();
		
		var extraRows="";
		for(var i=0;i<data.length;i++){
			extraRows+="<tr><td>"+data[i].timestamp+"</td><td>"+data[i].turbidity+"</td><td>"+data[i].pH+"</td><td>"+data[i].dissolvedOxygen+"</td><td>"+data[i].conductivity+"</td><td>"+data[i].temperature+"</td><td>"+data[i].temperature+"</td></tr>";
		}
		table.getElementsByTagName("tbody")[0].innerHTML+=extraRows;

        var rowLength = table.rows.length;	
        
        for(var i=1; i<rowLength; i+=1){
          var row = table.rows[i];
        
          //your code goes here, looping over every row.
          //cells are accessed as easy"
          var wqi=calcwqi(calcphwqi(row.cells[2].innerHTML),row.cells[6].innerHTML,calcturbwqi(row.cells[1].innerHTML),calctswqi(row.cells[4].innerHTML/2))
          //console.log(wqi)
          row.cells[row.cells.length-1].innerHTML=wqi;
          var color=null;
          if (wqi>0 && wqi<=44){
              color="#f2000d"
          }else if (wqi<=65){
              color="#ff5050"
          }else if (wqi<=79){
              color="#ff9966"
          }else if (wqi<=89){
              color="#cccc00"
          }else if (wqi<=94){
              color="#66ff33"
          }else if (wqi<=100){
              color="#009900"
          }
          
          row.cells[row.cells.length-1].style.color=color;
        
        
          //var cellLength = row.cells.length;
          //for(var y=0; y<cellLength; y+=1){
            //var cell = row.cells[y];
        
            //do something with every cell here
          //}
        }
	</script>

</body>
</html>

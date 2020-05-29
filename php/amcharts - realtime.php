<?php
 function getJSON($valType,$kit) {

        $json_text = file_get_contents("http://naqm.seecs.nust.edu.pk/wqm/retrieve_val.php");

        $data_json=json_decode($json_text,TRUE); //converting json string object to json object
        $resultString='[';
        //print_r($data_json["rows"]);
        for($x=0;$x<count($data_json["rows"]);$x++){
        	if($kit==$data_json["rows"][$x]["kitId"]){
        		$resultString.='{"date":"'.($data_json["rows"][$x]["timestamp"]).'","value":'.($data_json["rows"][$x][$valType]).'},';
        	}
        }

        $resultString.=']';
        return $resultString;
    }

function getamChartsDiv2($valType,$kit){
	
    $labels='{"turbidity":"Turbidity","pH":"pH","dissolvedOxygen":"Dissolved Oxygen", "conductivity":"Conductivity" , "temperature":"Temperature"}';
    $labels=json_decode($labels,TRUE);
    echo '
    <div class="row" style="width:100%">
    <section class="panel" style="width: 100%">
    <header class="panel-heading">
        <h2 class="panel-title">'.$labels[$valType].'</h2>
    </header>
    
    <div id="chartdiv'.$valType.'" style="width: 100%;height: 500px;"></div> </div>
    <noscript><img src="https://www.amcharts.com/wp-content/uploads/2013/12/demo_802_none-1.png" /></noscript>
    
    <script>
                try {
                  // Themes begin
    // Using default theme
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chartdiv'.$valType.'", am4charts.XYChart);
    
    // Add data
    chart.data = ';

    echo getJSON($valType, $kit);

    echo '
    // Set input format for the dates
    chart.dateFormatter.inputDateFormat = "dd.MM.yyyy";
    //dateAxis.groupCount = 500;
    
    // Create axes
    // Create axes
    var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

    
    // Create series
    var series = chart.series.push(new am4charts.LineSeries());
    series.dataFields.valueY = "value";
    series.dataFields.dateX = "date";
    series.tooltipText = "{value}"
    series.strokeWidth = 4;
    
    // Drop-shaped tooltips
    series.tooltip.background.cornerRadius = 20;
    series.tooltip.background.strokeOpacity = 0;
    series.tooltip.pointerOrientation = "vertical";
    series.tooltip.label.minWidth = 50;
    series.tooltip.label.minHeight = 50;
    series.tooltip.label.textAlign = "middle";
    series.tooltip.label.textValign = "middle";
    
    // Make bullets grow on hover
    var bullet = series.bullets.push(new am4charts.CircleBullet());
    bullet.circle.strokeWidth = 2;
    bullet.circle.radius = 0;
   
    
    var bullethover = bullet.states.create("hover");
    bullethover.properties.scale = 1.3;
    
    // Make a panning cursor
    chart.cursor = new am4charts.XYCursor();
    chart.cursor.behavior = "panXY";
    chart.cursor.xAxis = dateAxis;
    chart.cursor.snapToSeries = series;
    
    // Create vertical scrollbar and place it before the value axis
    chart.scrollbarY = new am4core.Scrollbar();
    chart.scrollbarY.parent = chart.leftAxesContainer;
    chart.scrollbarY.toBack();
    
    // Create a horizontal scrollbar with previe and place it underneath the date axis
    chart.scrollbarX = new am4charts.XYChartScrollbar();
    chart.scrollbarX.series.push(series);
    chart.scrollbarX.parent = chart.bottomAxesContainer;
    
    chart.events.on("ready", function () {
      dateAxis.zoom({start:0.79, end:1});
    });            }
    catch( e ) {
      console.log( e ); 
    }
      </script>
      </section>
      </div>';
}

if(isset($_GET["valType"]) && isset($_GET["kit"])){
    getamChartsDiv2($_GET["valType"], $_GET["kit"]);
}

?>
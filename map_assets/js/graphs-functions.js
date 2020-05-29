var API = "http://naqm.seecs.nust.edu.pk/wqm/retrieve_val.php"+nodeID;
$.ajax({
    url:API,
    success:function(data) {
        data=JSON.parse(data);
        if (data.rows==="none"){
            $(".gas").hide();
           $(".graphs").text("No items in database.")
            return;
        }
        var reading_time=new Date(data.timedate);
        var current_time=new Date(data.current_time);
        var diff=current_time-reading_time;
        var minutes=diff/(1000*60);
        if (minutes<10){
            mainGraphs();
            
        }else{
            $(".gas").hide();
            $(".graphs").text("Error in displaying values.")
        }
    }
});

function mainGraphs(){
var ourIndex = 0;
$(document).ready(function() {

    console.log("got 0");
    var dps = []; // dataPoints
    var dps2 = []; // dataPoints
    var dps3 = []; // dataPoints
    var dps4 = []; // dataPoints
    var dps5 = []; // dataPoints
    var dps6 = []; // dataPoints
    console.log("got 1");
    var chart = new CanvasJS.Chart("chartContainer", {
        title: {
            text: ""
        },
        axisY: {
            includeZero: false
        },
        data: [{
            type: "line",
            dataPoints: dps
        }]
    });

    var chart2 = new CanvasJS.Chart("chartContainer2", {
        title: {
            text: ""
        },
        axisY: {
            includeZero: false
        },
        data: [{
            type: "line",
            dataPoints: dps2
        }]
    });

    var chart3 = new CanvasJS.Chart("chartContainer3", {
        title: {
            text: ""
        },
        axisY: {
            includeZero: false
        },
        data: [{
            type: "line",
            dataPoints: dps3
        }]
    });

    var chart4 = new CanvasJS.Chart("chartContainer4", {
        title: {
            text: ""
        },
        axisY: {
            includeZero: false
        },
        data: [{
            type: "line",
            dataPoints: dps4
        }]
    });
    console.log("got 2");
    if (nodeID[0]==='2'){ //if node is of stationary kit
    
        var chart5 = new CanvasJS.Chart("chartContainer5", {
        title: {
            text: ""
        },
        axisY: {
            includeZero: false
        },
        data: [{
            type: "line",
            dataPoints: dps5
        }]
    });

    var chart6 = new CanvasJS.Chart("chartContainer6", {
        title: {
            text: ""
        },
        axisY: {
            includeZero: false
        },
        data: [{
            type: "line",
            dataPoints: dps6
        }]
    });

}

    var xVal1 = 0;
    var yVal1 = 0.6;
    var xVal2 = 0;
    var yVal2 = 2;
    var xVal3 = 0;
    var yVal3 = 0.18;
    var xVal4 = 0;
    var yVal4 = 55;
    var xVal5 = 0;
    var yVal5 = 0.5;
    var xVal6 = 0;
    var yVal6 = 200;
    var updateInterval = 5000;
    var dataLength = 20; // number of dataPoints visible at any point
    var updateChart = function(count) {

        count = count || 1;


        var API = "http://naqm.seecs.nust.edu.pk/wqm/retrieve_val.php"+nodeID;
        $.getJSON(API)
            .done(function(data) {
                yVal1 = parseFloat(data.nh3);
                yVal2 = parseFloat(data.co);
                yVal3 = parseFloat(data.no2);
                yVal4 = parseFloat(data.ch4);
                if (nodeID[0]==='2'){ //if node is of stationary kit
                    yVal5 = parseFloat(data.so2);
                    yVal6 = parseFloat(data.dust);
                }
            });
        dps.push({
            x: xVal1,
            y: yVal1
        });
        dps2.push({
            x: xVal2,
            y: yVal2
        });
        dps3.push({
            x: xVal3,
            y: yVal3
        });
        dps4.push({
            x: xVal4,
            y: yVal4
        });
        dps5.push({
            x: xVal5,
            y: yVal5
        });
        dps6.push({
            x: xVal6,
            y: yVal6
        });

        xVal1++;
        xVal2++;
        xVal3++;
        xVal4++;
        xVal5++;
        xVal6++;

        if (dps.length > dataLength) {
            dps.shift();
        }
        if (dps2.length > dataLength) {
            dps2.shift();
        }
        if (dps3.length > dataLength) {
            dps3.shift();
        }
        if (dps4.length > dataLength) {
            dps4.shift();
        }
        if (dps5.length > dataLength) {
            dps5.shift();
        }
        if (dps6.length > dataLength) {
            dps6.shift();
        }

        chart.render();
        chart2.render();
        chart3.render();
        chart4.render();
        if (nodeID[0]==='2'){ //if node is of stationary kit
            chart5.render();
            chart6.render();
        }
    };

    updateChart(dataLength);
    setInterval(function() { updateChart() }, updateInterval);
});

}
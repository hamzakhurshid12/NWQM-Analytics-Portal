// This example creates a simple polygon representing the Bermuda Triangle.
var map;
var popup, Popup;
var circles = [];

function initMap() {
    // Create the map.
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: {
            lat: 33.699997 ,
            lng: 73.116666 
        },
        mapTypeId: 'terrain'
    });

    //For changing circle size on map zoom change
    google.maps.event.addDomListener(map, 'zoom_changed', function() {
        var zoom = map.getZoom();
        console.log(zoom);
        for (var i = 0; i < circles.length; i++) {
            var radius = getRadius(zoom);
            circles[i].setRadius(radius);
            console.log(radius);
        }
    });

    getHeatmapdata();

    //console.log(heatmapData);

}

function createZone(locationDict, color) {
    // Add the circle for this city to the map.
    var cityCircle = new google.maps.Circle({
        strokeColor: color,
        strokeOpacity: 0,
        strokeWeight: 2,
        fillColor: color,
        fillOpacity: 0.25,
        map: map,
        center: locationDict,
        radius: getRadius(map.getZoom()),
        title: String(locationDict)
    });
    circles.push(cityCircle);
    return cityCircle;
}


function getRadius(zoom) {
    var radius;
    if (zoom < 10)
        radius = (20 - zoom) ** (4.2 - zoom / 10);
    else if (zoom < 15)
        radius = (20 - zoom) ** 2.86;
    else if (zoom < 19)
        radius = (20 - zoom) ** 2.5;
    else
        radius = 2.5;
    return radius;
}




function getZoneColor(type) {
    switch (type) {
        case "Good":
            return "#009933";
        case "Moderate":
            return "#33ff77";
        case "Unhealthy":
            return "#a6ff4d";
        case "Very Unhealthy":
            return "#ffb3b3";
        case "Hazardous":
            return "#ff8566";
        case "Highly Dangerous":
            return "#e62e00";
        default:
            return "#e62e00";
    }
}

function createDOZone(row) {
    var WQI = WQIDO(row.DO);
    var zone = WQICategory(WQI);
    if ((String(row.lat).includes("*") || String(row.long).includes("*"))) {
        var lat = 33.699997 + Math.floor(Math.random() * 100) / 40000;
        var long = 73.116666 + Math.floor(Math.random() * 100) / 40000;
    } else {
        lat = parseFloat(row.lat);
        long = parseFloat(row.long);
    }
    var color = getZoneColor(zone);
    var zone = createZone({ lat: lat, lng: long }, color);

    google.maps.event.addListener(zone, 'mouseover', function() {
        this.getMap().getDiv().setAttribute('title', "Date/Time: " + row.timedate.slice(0, 19) + "\nLatitude: " + lat.toFixed(6) + "\nLongitude: " + long.toFixed(6) + "\nConcentration: " + row.DO + "\nWQI: " + WQI + "\nCategory: " + WQICategory(WQI));
    });
    google.maps.event.addListener(zone, 'mouseout', function() {
        this.getMap().getDiv().removeAttribute('title');
    });
    /*zone.addListener('click', function() {
        console.log(row.DO);
    });*/
}

function createTemperatureZone(row) {
    var WQI = WQITemperature(row.Temperature);
    var zone = WQICategory(WQI);
    if ((String(row.lat).includes("*") || String(row.long).includes("*"))) {
        var lat = 33.699997 + Math.floor(Math.random() * 100) / 40000;
        var long = 73.116666 + Math.floor(Math.random() * 100) / 40000;
    } else {
        lat = parseFloat(row.lat);
        long = parseFloat(row.long);
    }
    var color = getZoneColor(zone);
    var zone = createZone({ lat: lat, lng: long }, color);

    google.maps.event.addListener(zone, 'mouseover', function() {
        this.getMap().getDiv().setAttribute('title', "Date/Time: " + row.timedate.slice(0, 19) + "\nLatitude: " + lat.toFixed(6) + "\nLongitude: " + long.toFixed(6) + "\nConcentration: " + row.co + "\nWQI: " + WQI + "\nCategory: " + WQICategory(WQI));
    });
    google.maps.event.addListener(zone, 'mouseout', function() {
        this.getMap().getDiv().removeAttribute('title');
    });
    /*zone.addListener('click', function() {
        console.log(row.DO);
    });*/
}

function createTurbidityZone(row) {
    var WQI = WQITemperature(row.Turbidity);
    var zone = WQICategory(WQI);
    if ((String(row.lat).includes("*") || String(row.long).includes("*"))) {
       var lat = 33.699997 + Math.floor(Math.random() * 100) / 40000;
        var long = 73.116666 + Math.floor(Math.random() * 100) / 40000;
    } else {
        lat = parseFloat(row.lat);
        long = parseFloat(row.long);
    }
    var color = getZoneColor(zone);
    var zone = createZone({ lat: lat, lng: long }, color);

    google.maps.event.addListener(zone, 'mouseover', function() {
        this.getMap().getDiv().setAttribute('title', "Date/Time: " + row.timedate.slice(0, 19) + "\nLatitude: " + lat.toFixed(6) + "\nLongitude: " + long.toFixed(6) + "\nConcentration: " + row.Turbidity + "\nWQI: " + WQI + "\nCategory: " + WQICategory(WQI));
    });
    google.maps.event.addListener(zone, 'mouseout', function() {
        this.getMap().getDiv().removeAttribute('title');
    });

    /*zone.addListener('click', function() {
        console.log(row.DO);
    });*/
}

function createpHZone(row) {
    var WQI = WQIpH(row.pH);
    var zone = WQICategory(WQI);
    if ((String(row.lat).includes("*") || String(row.long).includes("*"))) {
       var lat = 33.699997 + Math.floor(Math.random() * 100) / 40000;
        var long = 73.116666 + Math.floor(Math.random() * 100) / 40000;
    } else {
        lat = parseFloat(row.lat);
        long = parseFloat(row.long);
    }
    var color = getZoneColor(zone);
    var zone = createZone({ lat: lat, lng: long }, color);

    google.maps.event.addListener(zone, 'mouseover', function() {
        this.getMap().getDiv().setAttribute('title', "Date/Time: " + row.timedate.slice(0, 19) + "\nLatitude: " + lat.toFixed(6) + "\nLongitude: " + long.toFixed(6) + "\nConcentration: " + row.DO + "\nWQI: " + WQI + "\nCategory: " + WQICategory(WQI));
    });
    google.maps.event.addListener(zone, 'mouseout', function() {
        this.getMap().getDiv().removeAttribute('title');
    });
    /*zone.addListener('click', function() {
        console.log(row.DO);
    });*/
}

function createConductivityZone(row) {
    var WQI = WQIConductivity(row.Conductivity);
    var zone = WQICategory(WQI);
    if ((String(row.lat).includes("*") || String(row.long).includes("*"))) {
       var lat = 33.699997 + Math.floor(Math.random() * 100) / 40000;
        var long = 73.116666 + Math.floor(Math.random() * 100) / 40000;
    } else {
        lat = parseFloat(row.lat);
        long = parseFloat(row.long);
    }
    var color = getZoneColor(zone);
    var zone = createZone({ lat: lat, lng: long }, color);

    google.maps.event.addListener(zone, 'mouseover', function() {
        this.getMap().getDiv().setAttribute('title', "Date/Time: " + row.timedate.slice(0, 19) + "\nLatitude: " + lat.toFixed(6) + "\nLongitude: " + long.toFixed(6) + "\nConcentration: " + row.DO + "\nWQI: " + WQI + "\nCategory: " + WQICategory(WQI));
    });
    google.maps.event.addListener(zone, 'mouseout', function() {
        this.getMap().getDiv().removeAttribute('title');
    });
    /*zone.addListener('click', function() {
        console.log(row.DO);
    });*/
}


function updateMap() {
    //var area = document.forms[0].elements[0].value;
    var Parameter = document.forms["map-select"]["Parameter"].value;
    var date = document.forms["map-select"].elements[1].value;
    if (date == "") return;
    //var stime = document.forms[0].elements[3].value;
    //var etime = document.forms[0].elements[4].value;
    //alert("" + area + " " + Parameter + " " + date + " " + stime + " " + etime);

    $.ajax({
        url: 'http://naqm.seecs.nust.edu.pk/wqm/retrieve_val.php' + nodeID + "&" + String(date),
        success: function(response) {
            initMap();
            response = JSON.parse(response);
            var data = response.rows;
            var sum = 0,
                avg = 0,
                WQI = 0;
            if (Parameter === "DO") {
                data.forEach(function(row) {
                    createDOZone(row);
                    sum += parseFloat(row.DO);
                });
                console.log(sum);
                console.log(data.length);
                avg = parseFloat(sum) / data.length;
                WQI = WQIDO(avg);
            } else if (Parameter === "Temperature") {
                data.forEach(function(row) {
                    createTemperatureZone(row);
                    sum += parseFloat(row.Temperature);
                });
                console.log(sum);
                console.log(data.length);
                avg = parseFloat(sum) / data.length;
                WQI = WQITemperature(avg);
            } else if (Parameter == "Turbidity") {
                data.forEach(function(row) {
                    createTurbidityZone(row);
                    sum += parseFloat(row.Turbidity);
                });
                console.log(sum);
                console.log(data.length);
                avg = parseFloat(sum) / data.length;
                WQI = WQITurbidity(avg);
            }
            else if (Parameter == "pH") {
                data.forEach(function(row) {
                    createpHZone(row);
                    sum += parseFloat(row.pH);
                });
                console.log(sum);
                console.log(data.length);
                avg = parseFloat(sum) / data.length;
                WQI = WQIpH(avg);
            }
            else if (Parameter == "Conductivity") {
                data.forEach(function(row) {
                    createConductivityZone(row);
                    sum += parseFloat(row.Conductivity);
                });
                console.log(sum);
                console.log(data.length);
                avg = parseFloat(sum) / data.length;
                WQI = WQIConductivity(avg);
            }
            var level = WQICategory(WQI);
            console.log(avg);
            //$("#mapLegend").css({"width":"30%"},"slow");
            $(".mapDetails").show("slow");
            $("#ParameterType").html(Parameter.toUpperCase());
            $("#avgConc").html(String(avg).slice(0, 6));
            $("#WQIVal").html(WQI);
            $("#dangerLevel").html("<b style='color:" + getZoneColor(level) + "'>" + level + "</b>");
            $("#numPoints").html(data.length);

        }
    });
}



createZone({ lat: 33.699997, lng: 73.116666 },'#FF0000');

var TIME = ['12am', '1am', '2am', '3am', '4am', '5am', '6am', '7am', '8am', '9am', '10am', '11am', '12pm', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm', '10pm', '11pm'];
var config = {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Temperature',
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data: [],
            fill: false,
        }, {
            label: 'Humidity',
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            data: [],
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Chart.js Line Chart'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Hour'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'WQI Values'
                }
            }]
        }
    }
};

var config2 = {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Turbidity',
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data: [],
            fill: false,
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Chart.js Line Chart'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Hour'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'WQI Values'
                }
            }]
        }
    }
};

var config3 = {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Temperature',
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data: [],
            fill: false,
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Chart.js Line Chart'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Hour'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'WQI Values'
                }
            }]
        }
    }
};

var config4 = {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'DO',
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data: [],
            fill: false,
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Chart.js Line Chart'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Hour'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'WQI Values'
                }
            }]
        }
    }
};

window.onload = function() {
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myLine = new Chart(ctx, config);
    var ctx2 = document.getElementById('canvas2').getContext('2d');
    window.myLine = new Chart(ctx2, config2);
    var ctx3 = document.getElementById('canvas3').getContext('2d');
    window.myLine = new Chart(ctx3, config3);
    var ctx4 = document.getElementById('canvas4').getContext('2d');
    window.myLine = new Chart(ctx4, config4);
};

document.getElementById('randomizeData').addEventListener('click', function() {
    config.data.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
            return randomScalingFactor();
        });

    });

    window.myLine.update();
});

var colorNames = Object.keys(window.chartColors);
document.getElementById('addDataset').addEventListener('click', function() {
    var colorName = colorNames[config.data.datasets.length % colorNames.length];
    var newColor = window.chartColors[colorName];
    var newDataset = {
        label: 'Dataset ' + config.data.datasets.length,
        backgroundColor: newColor,
        borderColor: newColor,
        data: [],
        fill: false
    };

    for (var index = 0; index < config.data.labels.length; ++index) {
        newDataset.data.push(randomScalingFactor());
    }

    config.data.datasets.push(newDataset);
    window.myLine.update();
});

document.getElementById('addData').addEventListener('click', function() {
    if (config.data.datasets.length > 0) {
        var month = TIME[config.data.labels.length % TIME.length];
        config.data.labels.push(month);

        config.data.datasets.forEach(function(dataset) {
            dataset.data.push(randomScalingFactor());
        });

        window.myLine.update();
    }
});

document.getElementById('removeDataset').addEventListener('click', function() {
    config.data.datasets.splice(0, 1);
    window.myLine.update();
});

document.getElementById('removeData').addEventListener('click', function() {
    config.data.labels.splice(-1, 1); // remove the label first

    config.data.datasets.forEach(function(dataset) {
        dataset.data.pop();
    });

    window.myLine.update();
});

function readTextFile(file, callback) {
    /* 
    Helping function for getHeatmapData
    Reads a local file and returns its text
    */
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

function getHeatmapdata(){
    var heatMapdata = [];

    readTextFile("map_assets/WaterQualityWithGps.json", function(text){
        var data = JSON.parse(text);
        //console.log(data);
        for (var i=0;i<data.length;i++){
            var lat=parseFloat(data[i].latitude)
            var lng=parseFloat(data[i].longitude)
            if (!isNaN(lat) && !isNaN(lng)){
                var dataPoint = new google.maps.LatLng(lat, lng);
                var wqi=calcwqi(calcphwqi(data[i].pH),data[i].temperature,calcturbwqi(data[i].turbidity),calctswqi(parseFloat(data[i].conductivity)/2))
                heatMapdata.push({location: dataPoint, weight: wqi});
            }
        }
        var heatmap = new google.maps.visualization.HeatmapLayer({
            data: heatMapdata
          });
          heatmap.set('radius',100);
        console.log(heatMapdata);
        heatmap.setMap(map);

            var gradient = [
                'rgba(0, 255, 255, 0)',
              'rgba(255, 133, 102, 1)',
              'rgba(210, 46, 0, 1)'
            ];
            heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);

    });
}


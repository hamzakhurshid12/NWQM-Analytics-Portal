function Linear(WQIhigh, WQIlow, Conchigh, Conclow, Concentration) {
    var linear;
    var Conc = parseFloat(Concentration);
    var a;
    a = ((Conc - Conclow) / (Conchigh - Conclow)) * (WQIhigh - WQIlow) + WQIlow;
    linear = Math.round(a);
    return linear;
}

//line104
function WQITemperature(Concentration) {
    var Conc = parseFloat(Concentration);
    var c;
    var WQI;
    c = (Math.floor(10 * Conc)) / 10;
    if (c >= 0 && c < 4.5) {
        WQI = Linear(50, 0, 4.4, 0, c);
    } else if (c >= 4.5 && c < 9.5) {
        WQI = Linear(100, 51, 9.4, 4.5, c);
    } else if (c >= 9.5 && c < 12.5) {
        WQI = Linear(150, 101, 12.4, 9.5, c);
    } else if (c >= 12.5 && c < 15.5) {
        WQI = Linear(200, 151, 15.4, 12.5, c);
    } else if (c >= 15.5 && c < 30.5) {
        WQI = Linear(300, 201, 30.4, 15.5, c);
    } else if (c >= 30.5 && c < 40.5) {
        WQI = Linear(400, 301, 40.4, 30.5, c);
    } else if (c >= 40.5 && c < 50.5) {
        WQI = Linear(500, 401, 50.4, 40.5, c);
    } else {
        WQI = "Out of Range";
    }
    return WQI;
}

function WQITurbidity(Concentration) {
    var Conc = parseFloat(Concentration);
    var c;
    var WQI;
    c = (Math.floor(10 * Conc)) / 10;
    if (c >= 0 && c < 200) {
        WQI = Linear(50, 0, 200, 0, c);
    } else if (c >= 200 && c <= 400) {
        WQI = Linear(100, 51, 400, 201, c);
    } else if (c >= 400 && c <= 800) {
        WQI = Linear(200, 101, 800, 401, c);
    } else if (c >= 800 && c <= 1200) {
        WQI = Linear(300, 201, 1200, 801, c);
    } else if (c >= 1200 && c <= 1800) {
        WQI = Linear(400, 301, 1800, 1201, c);
    } else if (c >= 1800 && c <= 2500) {
        WQI = Linear(500, 401, 2600, 1801, c);
    } else {
        WQI = "Out of Range";
    }
    return WQI;
}



function WQIDO(Concentration) {
    var Conc = parseFloat(Concentration*1000);
    var c;
    var WQI;
    c = (Math.floor(Conc)) / 1000;
    if (c >= 0 && c < .054) {
        WQI = Linear(50, 0, .053, 0, c);
    } else if (c >= .054 && c < .101) {
        WQI = Linear(100, 51, .100, .054, c);
    } else if (c >= .101 && c < .361) {
        WQI = Linear(150, 101, .360, .101, c);
    } else if (c >= .361 && c < .650) {
        WQI = Linear(200, 151, .649, .361, c);
    } else if (c >= .650 && c < 1.250) {
        WQI = Linear(300, 201, 1.249, .650, c);
    } else if (c >= 1.250 && c < 1.650) {
        WQI = Linear(400, 301, 1.649, 1.250, c);
    } else if (c >= 1.650 && c <= 2.049) {
        WQI = Linear(500, 401, 2.049, 1.650, c);
    } else {
        WQI = "Out of Range";
    }
    return WQI;
}

function WQIpH(Concentration) {
    var Conc = parseFloat(Concentration*1000);
    var c;
    var WQI;
    c = (Math.floor(Conc)) / 1000;
    if (c >= 0 && c < .054) {
        WQI = Linear(50, 0, .053, 0, c);
    } else if (c >= .054 && c < .101) {
        WQI = Linear(100, 51, .100, .054, c);
    } else if (c >= .101 && c < .361) {
        WQI = Linear(150, 101, .360, .101, c);
    } else if (c >= .361 && c < .650) {
        WQI = Linear(200, 151, .649, .361, c);
    } else if (c >= .650 && c < 1.250) {
        WQI = Linear(300, 201, 1.249, .650, c);
    } else if (c >= 1.250 && c < 1.650) {
        WQI = Linear(400, 301, 1.649, 1.250, c);
    } else if (c >= 1.650 && c <= 2.049) {
        WQI = Linear(500, 401, 2.049, 1.650, c);
    } else {
        WQI = "Out of Range";
    }
    return WQI;
}

function WQIConductivity(Concentration) {
    var Conc = parseFloat(Concentration*1000);
    var c;
    var WQI;
    c = (Math.floor(Conc)) / 1000;
    if (c >= 0 && c < .054) {
        WQI = Linear(50, 0, .053, 0, c);
    } else if (c >= .054 && c < .101) {
        WQI = Linear(100, 51, .100, .054, c);
    } else if (c >= .101 && c < .361) {
        WQI = Linear(150, 101, .360, .101, c);
    } else if (c >= .361 && c < .650) {
        WQI = Linear(200, 151, .649, .361, c);
    } else if (c >= .650 && c < 1.250) {
        WQI = Linear(300, 201, 1.249, .650, c);
    } else if (c >= 1.250 && c < 1.650) {
        WQI = Linear(400, 301, 1.649, 1.250, c);
    } else if (c >= 1.650 && c <= 2.049) {
        WQI = Linear(500, 401, 2.049, 1.650, c);
    } else {
        WQI = "Out of Range";
    }
    return WQI;
}


function WQICategory(WQIndex) {
    var WQI = parseFloat(WQIndex)
    var WQICategory;
    if (WQI <= 44) {
        WQICategory = "Good";
    } else if (WQI > 44 && WQI <= 65) {
        WQICategory = "Moderate";
    } else if (WQI > 65 && WQI <= 79) {
        WQICategory = "Unhealthy for Sensitive Groups";
    } else if (WQI > 79 && WQI <= 89) {
        WQICategory = "Unhealthy";
    } else if (WQI > 200 && WQI <= 300) {
        WQICategory = "Very Unhealthy";
    } else if (WQI > 89 && WQI <= 94) {
        WQICategory = "Hazardous";
    } else if (WQI > 94 && WQI <= 100) {
        WQICategory = "Highly Dangerous";
    } else {
        WQICategory = "Out of Range";
    }
    return WQICategory;
}





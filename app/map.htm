<!DOCTYPE html>
<html lang="en">
    <head>
        <base target="_top" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Map tracker by CKD - Leaflet</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
 
        <link rel="stylesheet" href="leaflet/leaflet.css" />
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/gauge.css">
		<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/GaugeMeter.js"></script> -->

		<!-- <script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script> -->
        <script src="leaflet/leaflet.js"></script>
		<script src='https://cdn.plot.ly/plotly-2.27.0.min.js'></script>

        
    </head>
    <body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div id="map" style="width: 100%; height: 100vh;"></div>

					<div class="col-12">
						<div id="vibrationData"></div>
					</div>
				</div>
				<div class="col-md-4" style="background: whitesmoke; position: relative;">
					<div class="row">
					<div class="col-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i> <span id="localTime" class="position-absolute top-0 end-0"></span></h6>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-center"><i class="fa fa-tablet" aria-hidden="true"></i> Devices: <span id="deviceCount" class="position-absolute top-0 end-0"></span></h5>
								<p class="card-text"></p>
							</div>
						</div>
					</div>
				</div>
				
					<nav>
						<div class="col-row mt-5">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-8">
											<label for="devices">Select device</label>
											<select id="devices" name="devices" class="custom-select" onChange="selectChange()">
												<option value="0" selected>----------</option>
											</select>
										</div>
										<div class="col-4 d-flex justify-content-end align-items-end">
											<input type="button" value="Search" class="btn btn-primary mr-2" onClick="getGPSandDrawPolyline()" />
											<input type="button" value="Clear" class="btn btn-secondary" onClick="clearMap()" />
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row mt-3">
							<div class="col-4">
								<div class="card">
									<div class="card-body">
										<span class="card-title text-center">AX : <span id="vibration_ax" class="position-absolute top-0 end-0"></span></span>
										<p class="card-text"></p>
									</div>
								</div>
							</div>

							<div class="col-4">
								<div class="card">
									<div class="card-body">
										<span class="card-title text-center">AY : <span id="vibration_ay" class="position-absolute top-0 end-0"></span></span>
										<p class="card-text"></p>
									</div>
								</div>
							</div>

							<div class="col-4">
								<div class="card">
									<div class="card-body">
										<span class="card-title text-center">AZ : <span id="vibration_az" class="position-absolute top-0 end-0"></span></span>
										<p class="card-text"></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								
								<div class="" id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
								
							</div>
							<div class="col-12 mt-2">
								
								<div class="" id='myDivHumidity'><!-- Plotly chart will be drawn inside this DIV --></div>
								
							</div>
							
						</div>
							

						
						</div>
					</nav>


				</div>
			</div>
		</div>

<!-- <script src="js/main.js"></script> -->
<script
Xsrc="jquery-3.7.1.min.js"
src="http://code.jquery.com/jquery-3.7.1.min.js"
></script>
<script src="js/bootstrap.min.js"></script>
<script src="./js/GaugeMeter.js"></script>
<script>

//Gaugemeter initialization
$(document).ready(function(){
    $("#GaugeMeter").gaugeMeter();
  });
  
var updateInterval = 1000;
var updateIntervalMap = 300000;

const ckd = [10.288455, 105.755692];
const titops = [10.008158, 105.777671];

const vn = [16.362702, 106.270887];
const map = L.map('map').setView(vn, 5);
const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


// Popup element
var popup = L.popup();
map.on('click', onMapClick);

var polyline;

// center of map
var marker = L.marker(ckd).addTo(map);
marker.bindPopup("<b>CKD's here!</b>.").openPopup();
marker.on('click', onMarkerClick);

function onMapClick(e) {
	popup
		.setLatLng(e.latlng)
		.setContent("<div align='center'>You clicked the map at<br>" + e.latlng.toString() + "</div>")
		.openOn(map);
}

function mapDrawPolyline() {
	// create a red polyline from an array of LatLng points
	var latlngs = [
		[10.285826, 105.745310],
		[10.288203, 105.748820],
		[10.289929, 105.751297],
		[10.289858, 105.751956],
		[10.287611, 105.753009],
		[10.288140, 105.754307],
		[10.288493, 105.755418],
		[10.288504, 105.755674],
		[10.288559, 105.756331],
		[10.288550, 105.757710],
		[10.290307, 105.757849]
	];

	polyline = L.polyline(latlngs, {
		color: 'red',
		"weight": 5,
		"opacity": 0.5
	}).addTo(map);
	// zoom the map to the polyline
	map.fitBounds(polyline.getBounds());
}

function clearMap() {
	polyline.remove();
	map.setView(ckd, 13);
}

function onMarkerClick(e) {
	map.setView(e.latlng, 15);
}


////////////////////////////////////////////////
function getMapData() {
	// time is minutes...
	var uID = 1;
	var device = "sensor1";
	var post = "getdev=1";
	$.ajax({
		url: "http://mkgreen.org/iot/rf210/rf210GetPost.php",
		type: "POST",
		data: post,
		cache: false,
		success: function(html) {
			//$("#my_time").html(html);
			parseJson(html);
			chart.render();
		}
	});
	/////////////
	setTimeout(btnOkFunction, 1000);
}
////////////////////////////////////////////////
var deviceID = "";
var autoUpdate = true;

function getGPSandDrawPolyline() {
	// create a red polyline from an array of LatLng points
	var latlngs = [];
	if (deviceID != 0) {
		var post = "gps=1&devid=" + deviceID;
		$.ajax({
			url: "rf210GetPost.php",
			type: "POST",
			data: post,
			cache: false,
			dataType: "json",
			success: function(data) {
				$.each(data, function(key, value) {
					// Add a marker at each coordinate
					var marker = L.marker(value).addTo(map);
					marker.bindPopup("<b>Device location here!</b>").openPopup();
					marker.on('click', onMarkerClick);

					latlngs.push(value);
				});

				if (latlngs.length > 0) {
					polyline = L.polyline(latlngs, {
						color: "red",
						weight: 5,
						opacity: 0.5
					}).addTo(map);
					map.fitBounds(polyline.getBounds());
				}
			},
			error: function(xhr, status, error) {
				console.error('Error loading data: ' + error);
			}
		});

	}
}



function fetchTemperature() {
    if (deviceID != 0) {
        $.ajax({
            url: "rf210-TempHumidity.php",
            type: "POST",
            data: { devid: deviceID },
            dataType: "json",
            success: function(data) {
                // Update the temperature and humidity gauges with the received data
              // Update the temperature display with the received data
				$("#temperature").html(data.temperature);
				$("#humidity").html(data.humidity);

				// Update the value of the Plotly gauge with the received temperature
				Plotly.update('myDiv', { 'value': [data.temperature] });
				Plotly.update('myDivHumidity', { 'value': [data.humidity] });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching temperature: ' + error);
                console.log('Server response:', xhr.responseText); // Log the raw server response
            }
        });
    }
}
// VIBRATION FUNCTION
function fetchVibration() {
    if (deviceID != 0) {
        $.ajax({
            url: "rf210-DeviceVibration.php",
            type: "POST",
            data: { devid: deviceID },
            dataType: "json",
            success: function(data) {
                // Update the temperature and humidity gauges with the received data
              // Update the temperature display with the received data
				$("#vibration_ax").html(data.ax);
				$("#vibration_ay").html(data.ay);
				$("#vibration_az").html(data.az);

				// Update the chart with the fetched data
                chartData[0].y = [data.ax, data.ay, data.az];
                Plotly.newPlot('vibrationData', chartData, layoutVibration);
				
            },
            error: function(xhr, status, error) {
                console.error('Error fetching temperature: ' + error);
                console.log('Server response:', xhr.responseText); // Log the raw server response
            }
        });
    }
}
// Update vibration data 
var chartData = [
	{
	x: ['ax', 'ay', 'az'],
	y: [0, 0, 0],
	type: 'scatter', 
    mode: 'lines'
	}
];

var layoutVibration = {
	title: 'Vibration Data',
	
	xaxis: {
	title: 'Axis'
	},
	yaxis: {
	title: 'Vibration'
	},
};
Plotly.newPlot('vibrationData', chartData, layoutVibration, {responsive: true});

// DISPLAY TEMPERATURE GAUGE
var temperaturePlot = [
	{
		domain: { x: [0, 1], y: [0, 1] },
		value: 0,
		title: { text: "Temperature (°)" }, // Change the title to "Temperature"
		type: "indicator",
		mode: "gauge+number",
		delta: { reference: "100", increasing: { color: "blue" }},
		gauge: {
			axis: { range: [-100, 100], tickcolor: "darkblue" },
			bar: { color: "lightgray" },
			valueformat: "°",
			steps: [
				{ range: [-100, -20], color: "darkblue" },
				{ range: [-20, 0], color: "lightblue" },
				{ range: [0, 20], color: "yellow" },
				{ range: [20, 40], color: "orange" },
				{ range: [40, 100], color: "red" }
			],
			
		}
	}
];
var layout = { autosize: true, margin: { t: 0, b: 0 } };
Plotly.newPlot('myDiv', temperaturePlot, layout);

// DISPLAY HUMIDITY GAUGE
var humidityPlot= [
	{
		domain: { x: [0, 1], y: [0, 1] },
		value: 0,
		title: { text: "Humidity (%)" },
		type: "indicator",
		mode: "gauge+number",
		delta: { reference: 100, increasing: { color: "blue" }},
		gauge: {
			axis: { range: [0, 100], tickcolor: "darkblue" },
			bar: { color: "lightgray" },
			valueformat: ".2f%",
			steps: [
				{ range: [0, 30], color: "red" },
				{ range: [30, 60], color: "yellow" },
				{ range: [60, 100], color: "blue" }
			],
		}
	}
];

Plotly.newPlot('myDivHumidity', humidityPlot, layout);


function getDeviceCount() {
	$.ajax({
		url: 'rf210-DeviceCount.php',
		type: 'GET',
		success: function(data) {
			// Assuming the PHP script returns a plain text number
			var deviceCount = parseInt(data, 10);

			// Display the device count in an HTML element
			// Replace '#deviceCount' with the actual ID of your element
			$('#deviceCount').text(deviceCount);
		},
		error: function(error) {
			console.log('Error:', error);
		}
	});
}



function getDevID() {
	var post = "getdev=1";
	$.ajax({
		url: "rf210GetPost.php",
		type: "POST",
		data: post,
		cache: false,
		dataType: 'json',
		success: function(data) {
			//$("#data").html(data);
			var selectBox = $('#devices');
			$.each(data, function(key, value) {
				selectBox.append('<option value="' + value + '">' + value + '</option>');
			});
		},
		error: function(xhr, status, error) {
			console.error('Lỗi khi tải dữ liệu: ' + error);
		}
	});
}

function selectChange() {
	deviceID = $("#devices").val();
	$("#dev").html(deviceID);
	fetchTemperature(); // Fetch the temperature when a device is selected
	fetchVibration();
}

function checkboxChange() {
	autoUpdate = document.getElementById("checkbox").checked;
	if (autoUpdate) {
        $("#auto").html("TRUE");
        fetchTemperature(); // Fetch the temperature when the checkbox is checked
		fetchVibration();
    } else {
        $("#auto").html("FALSE");
    }
}

function getLocalTime() {
	var d = new Date();
	var options = { weekday: 'long', hour: 'numeric', minute: 'numeric', second: 'numeric' };
	var localTime = d.toLocaleString(undefined, options);
	$("#localTime").html(localTime);
}
/** Start window onload **/
window.onload = function() {
	getLocalTime();
	getDevID();
	getDeviceCount(); // Add this line
}
window.onresize = function() {
  Plotly.relayout('myDiv', layout);
};
setInterval(function() {
	doInterval()
}, updateInterval);
setInterval(function() {
	doIntervalUpdateMap()
}, updateIntervalMap);
var doInterval = function() {
	getLocalTime();
};
var doIntervalUpdateMap = function() {
	if (autoUpdate) {
		getGPSandDrawPolyline();
	}
}        </script>
    </body>
</html>

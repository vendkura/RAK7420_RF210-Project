<?php
// Database configuration
include "mysql.php";


// Create database connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Check if the device ID is set
if (isset($_POST['devid'])) {
    $deviceID = $db->real_escape_string($_POST['devid']);

    // Get the temperature and humidity of the device
    $temperatureAndHumidity = getTemperatureAndHumidity($deviceID, $db);

    // Check if an error occurred
    if (isset($temperatureAndHumidity['error'])) {
        // If an error occurred, return the error message
        echo json_encode(array('error' => $temperatureAndHumidity['error']));
    } else {
        // If no error occurred, return the temperature and humidity
        echo json_encode($temperatureAndHumidity);
    }
} else {
    // If the device ID is not set, return an error message
    echo json_encode(array('error' => 'No device ID provided'));
}

function getTemperatureAndHumidity($deviceID, $db) {
    $dbtable_data = "_rf210_Data";
    $sql_temp = "SELECT `tem`,`hum` FROM `$dbtable_data` WHERE `devid`='$deviceID' ORDER BY `TimeStamp` DESC LIMIT 1";
    // echo  $sql_temp;
    // Execute the query
    $result = $db->query($sql_temp);

    // Check if the query returned a result
    if ($result->num_rows > 0) {
        // Fetch the first row from the result
        $row = $result->fetch_assoc();
        // echo $row['tem'];x   
        // Return the temperature
        return array('temperature' => $row['tem'], 'humidity' => $row['hum']);
    } else {
        // If no result was returned, return null
        return null;
    }
}
?>
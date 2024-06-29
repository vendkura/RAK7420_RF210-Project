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
    $vibrationData = getVibration($deviceID, $db);

    // Check if an error occurred
    if (isset($vibrationData['error'])) {
        // If an error occurred, return the error message
        echo json_encode(array('error' => $vibrationData['error']));
    } else {
        // If no error occurred, return the temperature and humidity
        echo json_encode($vibrationData);
    }
} else {
    // If the device ID is not set, return an error message
    echo json_encode(array('error' => 'No device ID provided'));
}

function getVibration($deviceID, $db) {
    $dbtable_data = "_rf210_Data";
    $sql_vibration = "SELECT `ax`,`ay`,`az` FROM `$dbtable_data` WHERE `devid`='$deviceID' ORDER BY `TimeStamp` DESC LIMIT 1";
    // echo  $sql_temp;
    // Execute the query
    $result = $db->query($sql_vibration);

    // Check if the query returned a result
    if ($result->num_rows > 0) {
        // Fetch the first row from the result
        $row = $result->fetch_assoc();
        // echo $row['tem'];x   
        // Return the temperature
        return array('ax' => $row['ax'], 'ay' => $row['ay'], 'az' => $row['az']);
    } else {
        // If no result was returned, return null
        return null;
    }
}
?>
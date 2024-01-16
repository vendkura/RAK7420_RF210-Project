<?php
// Database configuration
include "mysql.php";

// Create database connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// SQL query to count devices
$query = "SELECT COUNT(*) as deviceCount FROM _rf210_dev";

// Execute the query
$result = $db->query($query);

// Fetch the result
$row = $result->fetch_assoc();

// Output the number of devices
echo $row['deviceCount'];

// Close the connection
$db->close();
?>
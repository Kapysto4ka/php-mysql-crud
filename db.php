<?php
session_start();

// Retrieve database connection details from environment variables
$db_host = getenv('DB_HOST');
$db_user = getenv('MYSQL_USER'); 
$db_password = getenv('MYSQL_PASSWORD');
$db_name = getenv('MYSQL_DATABASE');

// Connect to MySQL database
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die(mysqli_error($conn));

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

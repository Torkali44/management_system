<?php
// config.php - Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "alaa";

$conn = new mysqli($host, $username, $password, $database);
echo "connect successfully";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
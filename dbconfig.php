<?php
$servername = "localhost";
$username = "root";
$password = "2003";
$dbname = "task";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
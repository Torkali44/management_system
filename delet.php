<?php
$conn = new mysqli("localhost", "root", "", "alaa");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM departments WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
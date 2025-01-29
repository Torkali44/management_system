<?php
$conn = new mysqli("localhost", "root", "", "alaa");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["department_name"];
    $location = $_POST["location"];

    $sql = "INSERT INTO departments (id,department_name, location) VALUES ('$id','$name', '$location')";
    if ($conn->query($sql) === TRUE) {
        echo "Department added successfully!";
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Department</title>
</head>
<body>
    <h1>Add New Department</h1>
    <form method="POST" >
        <label>Name:</label>
        <input type="text" name=" department_name" required><br><br>
        <label>Location:</label>
        <input type="text" name="location" required><br><br>
        <button type="submit">Add</button>
    </form>
    <br>
    <a href="index.php">Back to Departments</a>
</body>
</html>
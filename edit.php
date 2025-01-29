<?php
$conn = new mysqli("localhost", "root", "", "alaa");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM departments WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST[" department_name"];
    $location = $_POST["location"];

    $sql = "UPDATE departments SET department_name='$name', location='$location' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
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
    <title>Edit Department</title>
</head>
<body>
    <h1>Edit Department</h1>
    <form method="POST" >
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label>Name:</label>
        <input type="text" name="department_name" value="<?= $row['department_name'] ?>" required><br><br>
        <label>Location:</label>
        <input type="text" name="location" value="<?= $row['location'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
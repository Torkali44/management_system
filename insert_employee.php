<?php 

include "dbcoonfig.php";


if(isset($_POST['submit']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $hire_date = $_POST['hire_date'];
    $salary = $_POST['salary'];
    $department_id = $_POST['department_id'];

    
    $sql = "INSERT INTO employee (first_name, last_name, email, hire_date, salary, department_id) 
            VALUES ('$first_name', '$last_name', '$email', '$hire_date', $salary, $department_id);";

   
    $res = $conn->query($sql);

    if($res === TRUE) {
        header("Location: viewemployee.php"); 
    } else {
        echo "Error: " . $conn->error; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <h2>Add Employee</h2>
    <form action="insert_employee.php" method="post">
    <fieldset>
        <label>First Name:</label>
        <input type="text" name="first_name" required><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Hire Date:</label>
        <input type="date" name="hire_date" required><br>

        <label>Salary:</label>
        <input type="number" name="salary" required><br>

        <label>Department ID:</label>
        <input type="number" name="department_id" required><br>

        <button type="submit" name="submit" >Add Employee</button>
     </fieldset>  
    </form>
    <a href="index.html"><button>Back to Employee</button></a>
</body>
</html>

<?php 
include "dbcoonfig.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
</head>
<body>
    <h2>Employees List</h2>
    <?php
    $sql = "SELECT * FROM employee"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Hire Date</th>
                    <th>Salary</th>
                    <th>Department ID</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['first_name'] . "</td>
                    <td>" . $row['last_name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['hire_date'] . "</td>
                    <td>" . $row['salary'] . "</td>
                    <td>" . $row['department_id'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No employees found.";
    }
    ?>
    <a href="insert_employee.php"><button>Add Another Employee</button></a>

</body>
</html>

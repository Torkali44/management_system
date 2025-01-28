<?php
include "dbconfig.php";

$sql = "SELECT id FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      button {
        width: 120px;
        height: 60px;
        padding: 10px;
        margin: 10px;
        text-align: center;
        border-radius: 5px;
        background: white;
        color: #4E9CAF;
      }
      button:hover {
        color: white;
        background: #4E9CAF;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h2>Create Performance Review</h2>
    <form action="createReview.php" method="POST">
      <fieldset>
        <legend>Review Details</legend>
        
      
        Employee ID:<br>
        <select name="emp" required>
          <option value="">Select Employee</option>
          
          <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                }
            } else {
                echo "<option value=''>No employees available</option>";
            }
          ?>
        </select>
        <br><br>
        
        Review Date:<br>
        <input type="date" name="date" required><br>
        
        Rating:<br>
        <input type="range" min="1" max="5" name="rating" required><br>
        
        Comments:<br>
        <textarea name="comments" cols="100" rows="5" required></textarea>
        <br><br>
        
        <input type="submit" name="submit" value="Submit">
      </fieldset>
    </form>

    <a href="performanceReviews.php"><button>Show all Reviews</button></a>
    <a href="index.html"><button>Go To Main Page</button></a>
  </body>
</html>

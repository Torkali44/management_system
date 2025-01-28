
<?php
include "dbconfig.php";

if (isset($_POST['submit'])) {


  $employee = $_POST['emp'];
  $date = $_POST['date'];
  $rating = $_POST['rating'];
  $comments=$_POST['comments'];


  $sql = "INSERT INTO performance_reviews(employee_id,review_date,rating,comments) VALUES ('$employee','$date','$rating','$comments')";
  $result = $conn->query($sql);
  if ($result == TRUE) {
    echo "New record created successfully.";
    header('Location: performanceReviews.php');
  }else{
    echo "Error:". $sql . "<br>". $conn->error;
  }
  $conn->close();
}

?>
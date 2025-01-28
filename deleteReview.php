​<?php

include "dbconfig.php";

if (isset($_GET['id'])) {
    $rev_id = $_GET['id'];
    $sql = "DELETE FROM performance_reviews WHERE id =$rev_id";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "Record deleted successfully.";
        header('Location: performanceReviews.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

?>
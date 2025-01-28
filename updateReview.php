<?php


include "dbconfig.php";

if (isset($_GET['id'])) {
    $rev_id = $_GET['id'];
    $sql = "SELECT * FROM performance_reviews WHERE id='$rev_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $emp_id = $row['employee_id'];
            $review_date = $row['review_date'];
            $rating = $row['rating'];
            $comments = $row['comments'];
        }
    } else {
        header('Location: performanceReviews.php');
    }
}
?>

<h2>Update Review</h2>
<form action="" method="post">
    <fieldset>
        <legend>Review information:</legend>
        <input type="hidden" name="rev_id" value="<?php echo $id; ?>">
        Employee ID:<br>
        <input type="number" readonly name="emp_id" value="<?php echo $emp_id; ?>"><br>
        Review Date:<br>
        <input type="date" name="review_date" value="<?php echo $review_date; ?>"><br>
        Rating:<br>
        <input type="range" name="rating" min=1 max=5 value="<?php echo $rating; ?>"><br>
        Comments:<br>
        <textarea name="comments" cols="100" rows="5"><?php echo $comments; ?></textarea><br><br>
        <input type="submit" value="Update" name="update">
    </fieldset>
</form>

<?php
if (isset($_POST['update'])) {
    $rev = $_POST['rev_id'];
    $empid = $_POST['emp_id'];
    $date = $_POST['review_date'];
    $rate = $_POST['rating'];
    $com = $_POST['comments'];

    $sql = "UPDATE performance_reviews SET employee_id='$empid', review_date='$date', rating='$rate', comments='$com' WHERE id=$rev";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
        header('Location: performanceReviews.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>



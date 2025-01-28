<?php
include "dbconfig.php";
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        table{
        border: 1px solid;
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        text-align:center;
         }   
        
         table, th, td {
        border: 1px solid;
        }   
        
        
     button{  
            width: 150px;
            height:60px;
            padding: 10px;
            margin:10px;
            text-align: center;
            border-radius: 5px;
            background:white;
            color:#4E9CAF;
        } 
        button:hover
        {
            color:white;
            background:#4E9CAF;
             cursor:pointer;
        }    
    </style>
</head>
<body>

    <div >
        <h2>Reviews Details</h2>
        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Employee ID</th>
                <th>Review Date</th>
                <th>Rating</th>
                <th>Comments</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>

                <?php
                        $sql = "SELECT * FROM performance_reviews";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>

                            <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['employee_id']; ?></td>
                            <td><?php echo $row['review_date']; ?></td>
                            <td><?php echo $row['rating']; ?></td>
                            <td><?php echo $row['comments']; ?></td>
                            <td><a  href="updateReview.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>
                            &nbsp;
                            <a href="deleteReview.php?id=<?php echo $row['id']; ?>"><button>Delete</button></a>
                            </td>
                            </tr>

                <?php       }
                    }
                ?>
                
            </tbody>
        </table>
    </div>
    <a href="create.php"><button>New Review</button></a>
    <a href="index.html"><button>Go to main page</button></a>
</body>
</html>
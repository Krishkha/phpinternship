<?php
    include "connection.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id = $id";
    $executeQuery = $con->query($query);
    $row = $executeQuery->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="custom.js"></script>
</head>
<body>
    <p id="response"></p>
    <h2>Student Registration Form</h2>
    <form action="edit_post.php" method="POST" id="student_update">
        <label>Student Name</label>
        <input type="text" name="student_name" id="student_name" value="<?php echo $row['student_name']; ?>" required />
        <br/><br/>

        <label>Enrollment No</label>
        <input type="number" name="enrollment_no" id="enrollment_no"  value="<?php echo $row['enrollment_no']; ?>" required />
        <br/><br/>

        <label>Mobile No</label>
        <input type="number" name="mobile_no" id="mobile_no" value="<?php echo $row['mobile_no']; ?>" required />
        <br/><br/>

        <label>Email</label>
        <input type="email" name="student_email" id="student_email" value="<?php echo $row['student_email']; ?>" required />
        <br/><br/>

        <label>Password</label>
        <input type="password" name="student_password" id="student_password" value="<?php echo $row['student_password']; ?>" required />
        <br/><br/>
        <input type="hidden" name="id" id="current_student_ids" value="<?php echo $id; ?>" />
        <input type="submit" value="Submit" />
        <?php 
        if(isset($_GET['message']) && !empty($_GET['message'])){
            echo $_GET['message'];
        }
    ?>
    </form>
</body>
</html>
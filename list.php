<?php
    include "connection.php";
    $query = "SELECT * FROM students";
    $result = $con->query($query);

    $records = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $records[] = $row;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing of Items</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="custom.js"></script>
</head>
<body>
<?php 
        if(isset($_GET['message']) && !empty($_GET['message'])){
            echo '<b>' . $_GET['message'] . '</b>';
        }
    ?>
    <p id="response"></p>
    <h2>Student Registrations</h2>
    <table width="100%"  border="1">
        <tr>
            <th>ID</th>
            <th>STUDENT NAME</th>
            <th>ENROLL. No.</th>
            <th>MOBILE NO</th>
            <th>STUDENT EMAIL</th>
            <th>STUDENT PASSWORD</th>
            <th>CREATED DATE</th>
            <th>ACTION</th>
        </tr>
        <?php foreach($records as $key => $value): ?>
        <tr id="record_<?php echo $value['id']; ?>">
            <td> <?php echo $value['id']; ?> </td>
            <td> <?php echo $value['student_name']; ?> </td>
            <td> <?php echo $value['enrollment_no']; ?> </td>
            <td> <?php echo $value['mobile_no']; ?> </td>
            <td> <?php echo $value['student_email']; ?> </td>
            <td> <?php echo $value['student_password']; ?> </td>
            <td> <?php echo $value['created_date']; ?> </td>
            <td> 
                <a href="edit.php?id=<?php echo $value['id']; ?>">Edit</a> | 
                <a href="#" onclick="delete_record(<?php echo $value['id']; ?>);return false;">Delete</a> 
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
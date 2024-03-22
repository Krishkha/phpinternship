<?php
include "connection.php";

$id = $_POST['id'];
$student_name = $_POST['student_name'];
$enrollment_no = $_POST['enrollment_no'];
$mobile_no = $_POST['mobile_no'];
$student_email = $_POST['student_email'];
$student_password = $_POST['student_password'];
$created_date = date('Y-m-d h:i:s');

$query = "UPDATE students SET student_name='$student_name', enrollment_no='$enrollment_no', mobile_no='$mobile_no', student_email='$student_email', student_password='$student_password' WHERE id=$id";

$executeQuery = $con->query($query);

if($executeQuery){
    echo "<b>" . $id . " Updated</b>";
}
<?php
include "connection.php";

$student_name = $_POST['student_name'];
$enrollment_no = $_POST['enrollment_no'];
$mobile_no = $_POST['mobile_no'];
$student_email = $_POST['student_email'];
$student_password = $_POST['student_password'];
$created_date = date('Y-m-d h:i:s');

$query = "INSERT INTO students (student_name, enrollment_no, mobile_no, student_email, student_password) VALUES('$student_name', '$enrollment_no', '$mobile_no', '$student_email', '$student_password')";

$executeQuery = $con->query($query);

if($executeQuery){
    /* header("Location: register.php?message=Your Data Saved Successfully"); */
    echo "Record Inserted Successfully";
}
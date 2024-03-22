<?php

include "connection.php";
$id = $_GET['id'];
$query = "DELETE FROM students WHERE id = $id";
$execute = $con->query($query);

if($execute){
    echo "ID: $id Deleted";
}
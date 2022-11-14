<?php
include "conn.php";

$id = $_GET['d_id'];
$action = $_GET['action'];
$q = "update uregistration set action=$action where id=$id ";
mysqli_query($con,$q);  
header('location:user.php');
?>
<?php 
include 'dbcon.php';

$id = $_GET['idth'];
$deletequery = "delete from newshadule where id = {$id}";

$result = mysqli_query($con,$deletequery);

header ('location:shedule.php');
?>
<
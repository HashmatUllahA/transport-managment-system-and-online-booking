<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "transport";

$con = mysqli_connect ($server,$user,$password,$db);

if($con){
    ?>
    <script>
        alert("connection seccessgull");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("no connection ");
    </script>
    <?php
}
?>
<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'transport');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  adminsignin where user='$username' and pass='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:admin_home.php');
		}else{
			echo "login ksjdaksjkakawsd";
			header('location:admin_sigin.php');
		}

}


?>

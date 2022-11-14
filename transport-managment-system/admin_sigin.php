<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con){
    //echo "connection successfull";
}else{
    echo "no connection";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="admin-page.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<header>
    
    <div class="overallacontiner">
        <div class="container center-div shadow ">
            <div class="heading text-center"><h2> Admin Sign In </h2></div>
            <div class="container row d-flex flex-row justify-content-center mb-5">
                <div class="admin-form shadow p-2 ">
                        <form action="admin_check.php" method="POST">
                            <div class="form-group ">
                                <label class="text-center">Email ID</label>
                                <input type="text" name="user" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="text-center">Password</label>
                                <input type="text" name="pass" value="" class="form-control " autocomplete="off">
                            </div>
                            <input type="submit" class="btn btn-success" value="Sign In" name="submit" >
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</header>

</body>
</html>

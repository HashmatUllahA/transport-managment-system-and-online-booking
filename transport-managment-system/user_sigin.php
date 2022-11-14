<?php  
session_start();
include "links.php"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_sigin.css">
    <title>user sign in </title>
</head>
<body>
    <?php 
    include 'dbcon.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "select * from uregistration where email ='$email' ";
        $query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($query);
        
        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);
            $_SESSION['username']=$email_pass['username'];
            


            $db_pass = $email_pass['password'];

            $pass_decode = password_verify($password, $db_pass);
            
            if($pass_decode){
                //echo "login seccessfull";
                ?>
                <script>
                    location.replace("booking.php");
                </script>
                <?php

            }else{
                echo "password incorrect";
            }
        }else{
                 echo "invalid Email";
            }
        }
    
    
    ?>
    <div class="contenair">
        <div class="btn_contenair">
        <a href="user_signup.php"><input class="btn btn-primary" type="button" value="SIGN UP"></a>
            <a href="user_sigin.php"><input  class="btn btn-primary" type="button" value="SIGN IN"></a>
            <a href="home.php"><input class="btn btn-primary" type="button" value="GO BACK"></a>
        </div>
    </div>
    <div class="main_contenair">
        
            <h3 style="padding-top: 50px; text-align: center;">Customer Panel</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <div class="input-group">
            <p style="text-align: center; font-size: larger; " name="email">Email</p>
            <input class="inp" type="text" palceholder="Email" name="email" readdird>
            <br>
            <p style="text-align: center; font-size: larger;" >Passwored</p>
            <input class="inp" type="text" palceholder="password" name="password" required>
            <input  class="btn btn-info inp mb-10 signbtn " type="submit" value="SIGN IN" name=submit>
        </div>
        </form>
    </div>
</body>
</html>
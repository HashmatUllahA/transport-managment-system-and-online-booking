<?php 
session_start();
//print_r($_SESSION);

?>
<?php 
include "links.php"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_sigup.css">
    <title>user sign up </title>
</head>

<body>
  <?php 
  include 'dbcon.php';
  if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contect = mysqli_real_escape_string($con, $_POST['contect']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "select * from uregistration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
      ?>
                <script>
                  alert("email already exist");
                </script>
                <?php
    }else{
      if($password === $cpassword){
        $insertquery = "insert into uregistration (username, email, contect, password, cpassword) 
        values('$username','$email','$contect','$pass','$cpass')";

        $iquery = mysqli_query($con,$insertquery);
         if($iquery){
                ?>
                <script>
                  alert("inserted seccessfull")
                </script>
                <?php
              }else{
                ?>
                <script>
                  alert("not inserted");
                </script>
                <?php
         }

      }else{
        ?>
                <script>
                  alert("password are matching");
                </script>
                <?php
      }
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
        
            <h3 style="padding-top: 20px; text-align: center;">Create Account</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <div class="input-group">
            <p style="text-align: center; font-size: larger; ">Full Name</p>
            <input class="inp" type="text" palceholder="name" name="username" required <?php echo $_SESSION['username'];?>>
            <br>
            <p style="text-align: center; font-size: larger;" >Email</p>
            <input class="inp" type="text" palceholder="email" name="email" required>
            <p style="text-align: center; font-size: larger;" >Contect</p>
            <input class="inp" type="text" palceholder="password" name="contect" required>
            <p style="text-align: center; font-size: larger;" >Password</p>
            <input class="inp" type="password" palceholder="password" name="password" required>
            <p style="text-align: center; font-size: larger;" >Conform Password</p>
            <input class="inp" type="password" palceholder="password" name="cpassword" required>
            <input  class="btn btn-info inp mb-10 signbtn " type="submit" value="Create Account" name=submit>
        </div>
        </form>
    </div>
</body>
</html>
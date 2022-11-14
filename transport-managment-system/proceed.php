<?php 
session_start();
include "links.php";
include "conn.php";


    if(isset($_POST['submit'])){
        $no=$_POST['no'];
        $selectClass=$_POST['selectClass'];
        

        $chargequery = "insert into bookingseat(no, selectClass)
        values('$no', '$selectClass') ";
        $cquery = mysqli_query($con,$chargequery);

        
            ?>
                <script>
                 // alert("charging are seccessfull insertdet")
                </script>
                
                <?php
               
        }else{
            ?>
                <script>
                  // alert("chargig are not inserted seccufull");
                </script>
                <?php
        }
       
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="passenger-booking4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>booking page</title>
</head>
<body>
<?php
    include 'dbcon.php';
    $insertquery = "select * from bookingseat";

    $result = mysqli_query($con, $insertquery);
    $resultcheck = mysqli_num_rows($result);

    if( $resultcheck > 0){
        while ($row = mysqli_fetch_assoc( $result )){
            
?>
 


    
<div class="contenair_mine ">
        <div class="left-container">
            <div class="time-container">
                <input class="time" type="text" id="currentDate">
            </div>
            <div class="admin">
            <p style="hight:50px;">Hi <?php echo $_SESSION['username'];?> </p>
           
            </div>
        
        <a href="" class="btn btn-dark w-100"><i class="fa fa-clock-o icos"></i>Home</a>
        <a href="passenger-booking.php" class="btn btn-dark w-100"><i class="fa fa-plus icos"></i>New Booking</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-eye icos"></i>View Booking</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-comments-o icos"></i>Feadback</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-sign-out icos"></i>Logout</a>

        </div>

        <div class="right_top_contenair">
            <p><i class="fa fa-bars icos"></i>Online teckiting Reservation For The SANIA EXPRESS SYSTEM </p>
                <div class="lift_second_con">
                    <h1 style="padding-left: 20px;">Passenger's Dashboard</h1>
                <div class="Quick-Tips">
                    <h2>Fill this form</h2>
                    

                </div>
                <form action="" method="POST" >
    <div class="form-group">
      <label for="uname">Full name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <label for="uname">CNIC:</label>
      <input type="text" class="form-control" id="cnic" placeholder="Enter user cnic" name="" required>
      
    </div>
    <div class="form-group">
      <label for="pwd">Mobile Number:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter user Mobile numbder" name="mobile" required>
      
      
    </div>
    <div class="form-group">
    <select class="selct" name="gender" > 
        <option value="select"  require>---select Gender---</optio>
        <option value="male"  >male</option>
        <option value="female" >female </option>

    </select>
      
      
      
    </div>
    <div class="form-group">
      <a href="pay.php"><input class="btn btn-primary align-centerb" type="submit" name="payment" value="Submit"></a>
    </div>
        </form>
            </div>
            
        </div>
        <?php
        }
        ?>
         <?php
        }
        ?>
        
        

    <script>
        var today = new Date();
        var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
        document.getElementById("currentDate").value = date;

        let popup = document.getElementById("popup");

    function opnePopup(){
        popup.classList.add("open-popup");
    }
    function closePopup(){
        popup.classList.remove("open-popup");
    }
    </script>

    <?php 
    if(isset($_POST['payment'])){
        $uname=$_POST['uname'];
        $cnic=$_POST['cnic'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        

        $payquery = "insert into payment(uname, cnic, mobile,gender)
        values('$uname', '$uname', '$mobile', '$gender') ";
        $rzquery = mysqli_query($con,$payquery);

        
            ?>
                <script>
                  //alert("user form succfully submited")
                  location.href = "pay.php";

                </script>
                
                <?php
               
        }else{
            ?>
                <script>
                  alert("the user form are not submited succefully");
                </script>
                <?php
        }
    
    ?>
</body>
</html>
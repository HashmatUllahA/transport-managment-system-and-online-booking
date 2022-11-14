<?php 
;session_start();
include "links.php";
include "conn.php";

    if (isset($_POST['submit-message'])) {
		$comment = $_POST['comment'];
		$responce = $_POST['responce'];

		mysqli_query($con, "INSERT INTO userfeadback (comment, responce) VALUES ('$comment', '$responce')"); 
		 
		header('location: feadback.php');
	}
    $connect = mysqli_connect("localhost", "root","", "transport");
$sql= "SELECT * FROM uregistration INNER JOIN userfeadback ON uregistration.id = userfeadback.id ";
$result = mysqli_query($connect,$sql);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="booking1.css">
    <link rel="stylesheet" href="feadback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>booking page</title>
</head>
<body>
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
        <a href="feadback.php" class="btn btn-dark w-100"><i class="fa fa-comments-o icos"></i>Feadback</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-sign-out icos"></i>Logout</a>

        </div>

        <div class="right_top_contenair">
            <p><i class="fa fa-bars icos"></i>Online teckiting Reservation For The SANIA EXPRESS SYSTEM </p>
                <div class="lift_second_con">
                    <h1 style="padding-left: 20px;">Passenger's Dashboard</h1>
                    <div class="info">
                        <div>
                        <i class="fa fa-info" style="font-size:48px;">info:</i>
                        <p>We always want to hear from you! Replied to within 24-hours.</p>
                        </div>
                    </div>
                <div class="Quick-Tips">
                    <h2>List of all Feedbacks</h2>
                    <input class="btn btn-info btn-feadback" onclick="opnePopup()" type="submit" value="Send new feadback">
                    <div class="popup" id="popup">
                            
                            <div>
                                <button class="close-btn" type="button" onclick="closePopup()">x</button>
                            </div>
                            <h2>Send New Feadback </h2>
                            <div>
                                <p class="text-center color-black" >Type Message :</p>
                                <form action="" method="POST">
                                <input class="col-sm-11 message-box " name="comment" placeholder="type message Her"type="text">
                            </div>
                            <input class="btn btn-info btn-submit " type="submit" name="submit-message" value="Submit">
                        </div>
                        </form>
                </div>
                
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="bg-dark">#</th>
                        <th>Comment</th>
                        <th>Responce</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['comment']; ?></td>
                </tr>
                <?php
            }
        }
        ?>
            
        </div>
        

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
</body>
</html>
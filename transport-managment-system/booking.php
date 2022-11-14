<?php 
;session_start();
include "links.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="booking1.css">
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
                <div class="Quick-Tips">
                    <h2>Quick Tips</h2>
                </div>
                <div class="lift_third_p">
                <p>Use the links at the left.</p>
                <p>You can see list of schedules by clicking on "New Booking". The system will display list of available schedules for you which you can view and make bookings from.</p>
                <p>Before your bookings are saved, you are redirected to make payment.</p>
                <p>After a successful payment, system generates your ticket ID for you which you are required to bring to the station.</p>
                <p>You are allowed to view all your booking history by clicking on "View Bookings".</p>
            </div>
            </div>
            
        </div>
        

    <script>
        var today = new Date();
        var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
        document.getElementById("currentDate").value = date;
    </script>
</body>
</html>
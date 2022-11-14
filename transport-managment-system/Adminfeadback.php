<?php 
include "conn.php";

if (isset($_POST['send'])) {
    $comment = $_POST['comment'];
    $responce = $_POST['responce'];

    mysqli_query($con, "INSERT INTO userfeadback (comment, responce) VALUES ('$comment', '$responce')"); 
     
    header('location: adminfeadback.php');
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'?>
    <link rel="stylesheet" href="admin_home4.css">
    <link rel="stylesheet" href="Adminfeadback1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>admin home page</title>
</head>
<body>
    <div class="contenair_mine ">
        <div class="left-container">
            <div class="time-container">
                <input class="time" type="text" id="currentDate">
            </div>
            <div class="admin">
            <p ><i class="fa fa-bus icos"></i>Admin</p>
            </div>
        
        <a href="" class="btn btn-dark w-100"><i class="fa fa-clock-o icos"></i>Home</a>
        <a href="user.php" class="btn btn-dark w-100"><i class="fa fa-users icos"></i>User</a>
        <a href="shedule.php" class="btn btn-dark w-100"><i class="fa fa-calendar-check-o icos"></i>Shedules</a>
        <a href="" class="btn btn-dark w-100"><i class="fa fa-road icos"></i>Route</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-bus icos"></i>Buses</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-file-pdf-o icos"></i>Report</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-usd icos"></i>Payment</a>
        <a href="Adminfeadback.php" class="btn btn-dark w-100"><i class="fa fa-comments-o icos"></i>Feadback</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-search icos"></i>Search</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-sign-out icos"></i>Logout</a>

        </div>
        <div class="right-container">
            <div class="menu-text">
                <p><button class="menu-btn fa fa-bars icos"></button> Online Tikket Reservation System for the SANIA EXPRESS</p>
            </div>
                <div>
                    <h1>Administrator Dashboard</h1>
                </div>
                <div style="background-color: forestgreen;color:white;" class="col-sm-12 ">
                    <h2>List of all Feedbacks</h2>
                </div>    
                <div class="search">
                <p style="margin-top: 30px;">Search: <input type="text"></p>

                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="bg-dark">#</th>
                        <th>passenger</th>
                        <th>massage</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        $insertquery = "select * from userfeadback";

                        $query = mysqli_query($con, $insertquery);

                        $result = mysqli_fetch_array($query);

                        while($result = mysqli_fetch_array($query)){

                           
                        ?>
                            
                        <tr>
                        <tr>
                        <td><?php echo $result['id']; ?></td>
                        <td><?php echo "hashmat" ?></td>
                        <td><?php echo $result['comment']; ?></td>
                        <td><?php echo $result['responce']; ?></td>
                        <td><input class="btn btn-info btn-Reply" onclick="opnePopup()" name="sendReply" type="submit" value="Reply">
                    </tr>
                    <?php
                }
            ?>
                            
                            <div class="popup" id="popup">
                            
                            <div>
                                <button class="close-btn" type="button" onclick="closePopup()">x</button>
                            </div>
                            <h2>Send New Feadback </h2>
                            <form action="" method="POST">
                            <div>
                                <p class="text-center color-black" >Type Message :</p>
                                <form action="" method="POST">
                                <input class="col-sm-11 message-box " name="responce" placeholder="type message Her"type="text">
                            </div>
                            <a href="admifeadback.php"><input class="btn btn-info btn-send" name="send"  type="submit" value="send"></a>
                        </div>
                        </form></td>
                        </tr>
                        
                    </tbodt>
        </div>


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
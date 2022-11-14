<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'?>
    <link rel="stylesheet" href="admin_home4.css">
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
        <a href="route.php" class="btn btn-dark w-100"><i class="fa fa-road icos"></i>Route</a>
        <a href="buses.php" class="btn btn-dark w-100"><i class="fa fa-bus icos"></i>Buses</a>
        <a href="payment.php" class="btn btn-dark w-100"><i class="fa fa-file-pdf-o icos"></i>Report</a>
        <a href="payment.php" class="btn btn-dark w-100"><i class="fa fa-usd icos"></i>Payment</a>
        <a href="Adminfeadback.php" class="btn btn-dark w-100"><i class="fa fa-comments-o icos"></i>Feadback</a>
        <a href="search.php" class="btn btn-dark w-100"><i class="fa fa-search icos"></i>Search</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-sign-out icos"></i>Logout</a>

        </div>
        <div class="right-container">
            <div class="menu-text">
                <p><button class="menu-btn fa fa-bars icos"></button> Online Tikket Reservation System for the SANIA EXPRESS</p>
            </div>
                <div>
                    <h1>Administrator Dashboard</h1>
                </div>
            <div>
                <h3 style="padding-top: 20px;">Hi, System Administrator</h3>
            </div>
                <div class="right-display">
                    <div class="passengers bg-one">
                        <i class="fa fa-users fa-2x right-icons icos "><span style="color:red;">_</span> Passangers</i>
                        <br>
                        <b class="number">11</b>
                    </div>
                    <div class="passengers bg-two">
                    <i class="fa fa-bus fa-2x right-icons icos"><span style="color:rgb(103, 167, 223) ;">_</span> Sania Express</i>

                    </div>
                    <div class="passengers bg-three">
                    <i class="fa fa-calendar-check-o fa-2x right-icons "><span style="color:rgb(102, 104, 106);">_</span>Shedules</i>

                    </div>
                    <div class="passengers bg-four">
                    <i class="fa fa-usd fa-2x right-icons icos "><span style="color:rgb(40, 38, 155)">_</span>Payment</i>

                    </div>
                </div>
             <div class="second-display"></div>
                <div class="passengers bg-five">
                <i class="fa fa-road fa-2x right-icons icos"><span style="color:rgb(79, 221, 91)">_</span>Route</i>

                </div>
                <div class="passengers last-cont bg-sixe">
                <i class="fa fa-comments-o fa-2x right-icons icos"><span style=" color:rgb(165, 226, 53)">_</span>Feadback</i>

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
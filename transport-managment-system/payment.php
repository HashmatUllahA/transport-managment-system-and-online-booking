<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'?>
    <link rel="stylesheet" href="payment.css">
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
        <a href="report.php" class="btn btn-dark w-100"><i class="fa fa-file-pdf-o icos"></i>Report</a>
        <a href="payment.php" class="btn btn-dark w-100"><i class="fa fa-usd icos"></i>Payment</a>
        <a href="Adminfeadback.php" class="btn btn-dark w-100"><i class="fa fa-comments-o icos"></i>Feadback</a>
        <a href="search.php" class="btn btn-dark w-100"><i class="fa fa-search icos"></i>Search</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-sign-out icos"></i>Logout</a>

        </div>
        <div class="right-container">
            <div class="menu-text">
                <p><button class="menu-btn fa fa-bars icos"></button> Online Tikket Reservation System for the SANIA EXPRESS</p>
            </div>
                <div class="allpayments" style="background-color: forestgreen;color:white;" class="col-sm-12 ">
                    <h2>all payments</h2>
                </div> 
            <div>
                
            </div>
            <table>
                <tr>
                    <th>Route</th>
                    <th>Date</th>
                    <th>First Class</th>
                    <th>Second Class</th>
                    <th>Capacity</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>No Data Avibale in dabel</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <div class="Showentries" style="background-color: forestgreen;color:white;" class="col-sm-12 ">
                    <p>Show 0 to 0 of 0 entries</p>
                    <div class="topnav-right">
                        <button>Previce</button>
                        <button>Next</button>
                        
                    </div>
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
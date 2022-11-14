<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'?>
    <link rel="stylesheet" href="user2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>admin home page</title>
</head>
<style>
    
</style>
<body>
    <div class="contenair_mine ">
        <div class="left-container">
            <div class="time-container">
                <input class="time" type="text" id="currentDate">
            </div>
            <div class="admin">
            <p ><i class="fa fa-bus icos"></i>Admin</p>
            </div>
        
        <a href="admin_home.php" class="btn btn-dark w-100"><i class="fa fa-clock-o icos"></i>Home</a>
        <a href="user.php" class="btn btn-dark w-100"><i class="fa fa-users icos"></i>User</a>
        <a href="shedule.php" class="btn btn-dark w-100"><i class="fa fa-calendar-check-o icos"></i>Shedules</a>
        <a href="" class="btn btn-dark w-100"><i class="fa fa-road icos"></i>Route</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-bus icos"></i>Buses</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-file-pdf-o icos"></i>Report</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-usd icos"></i>Payment</a>
        <a href="home.php" class="btn btn-dark w-100"><i class="fa fa-comments-o icos"></i>Feadback</a>
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
            <div class="registerd_user_text">
                <h3 style="padding-top: 20px;">Registered Users</h3>
                
            </div>
            <div class="search">
                search <input type="text">
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contect</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        
                        <?php
                        include 'dbcon.php';
                        $insertquery = "select * from uregistration";

                        $query = mysqli_query($con, $insertquery);

                        $result = mysqli_fetch_array($query);

                        while($result = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="info"><?php echo $result['id']; ?></td>
                                <td class="success"><?php echo $result['username']; ?></td>
                                <td class="danger"><?php echo $result['email']; ?></td>
                                <td class="warning"><?php echo $result['contect']; ?></td>
                                <td><?php 
                                if($result['action']==1){
                                    echo '<button style="background-color: green;border: none; border-radius: 5px;">
                                    <a href="udisable.php?d_id='. $result['id'].
                                    '&action=0">Enable</a></button>';
                                }else{
                                    echo '<button style="background-color: red;border: none; border-radius: 5px;">
                                    <a href="udisable.php?d_id='. $result['id'].
                                    '&action=1">Disable</a></button>';

                                }
                                ?></td>
                                    
                                
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>

                </table>
        </div>


    </div>
    

 
<script>
  var today = new Date();
  var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
  document.getElementById("currentDate").value = date;
</script>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'?>
    <link rel="stylesheet" href="shedules4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>shedule</title>
</head>
<body>
<?php 
 include 'dbcon.php';
    $ids = $_GET['id'];
    $showquery = "select * from newshadule where id=ids";
    $showdata = mysqli_query($con,$showquery );
    
    $arrdata = mysqli_fetch_array($showdata);

 
 if(isset($_POST['submit'])){
    $busname = $_POST['busname'];
    $route = $_POST['route'];
    $firstclass =  $_POST['firstclass'];
    $secondclass = $_POST['secondclass'];
    $date = $_POST['date'];
    $time = $_POST['time'];
   
    $sql = "INSERT INTO newshadule (busname, route, firstclass, secondclass, date, time) 
    VALUES ('$busname','$route','$firstclass','$secondclass','$date', '$time')";

    $result = mysqli_query($con,$sql);
    if($result){
        echo "data inserted seccefully";
    }else{
        die(mysqli_error($con));
    }

  }
?>
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
        <a href="shedules.php" class="btn btn-dark w-100"><i class="fa fa-calendar-check-o icos"></i>Shedules</a>
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
                
            <div class="All-Dynamic-Schedules">
                <div>
                    <h3 class="txts">All Dynamic Schedules</h3>
                    
                </div>
                
                <div class="shedules-btn">
                    <div class=" two-btns">
                        <input class="btn btn-info two-btn" onclick="opnePopup()" type="submit" value="Add New Shedules">
                        
                    <div class="popup" id="popup">
                    <form action="" method="POST">
                        <div>
                            <h2>Add New Shedule</h2>
                            <button class="close-btn" type="button" onclick="closePopup()">x</button>
                        </div>
                        
                        <label class="text-center">Bus:</label>
                        <label class="lift-text">Route:</label>
                        <div class="form-group ">
                                
                                <input type="text" name="busname" value="<?php echo $result['busname']; ?>">
                                <input type="text" name="route" <?php echo $result['route']; ?> >
                        </div>
                        
                        <label class="first-class">First Class Charge:</label>
                        <label class="second-class">First Class Charge:</label>
                        <div class="form-group ">
                                
                                <input type="text" name="firstclass"  >
                                <input type="text" name="secondclass"  >
                        </div>
                        <label class="text-center">Date:</label>
                        <label class="lift-text">Time:</label>
                        <div class="form-group ">
                                
                                <input type="date" name="date"  >
                                <input type="time" name="time"  >
                        </div>
                        
                        <button class="btn btn-info adddelet-btn" name="submit" type="submit" >add shedule</button>
                        <button class="btn btn-info adddelet-btn" >delete shedule</button>
                    </form>
                    </div>
                        <input class="btn btn-info two-btn" onclick="opnePopup()" type="submit" value="Add Range Shedules">
                        <div class="popup" id="popup">
                        <div>
                            <h2>Add New Shedule</h2>
                            <button class="close-btn" type="button" onclick="closePopup()">x</button>
                        </div>
                        <label class="text-center">Bus:</label>
                        <label class="lift-text">Route:</label>
                        <div class="form-group ">
                                
                                <input type="text"  value="<?php echo $arrdata['busname']; ?>" >
                                <input type="text" value="<?php echo $arrdata['busname']; ?>" >
                        </div>
                        
                        <label class="first-class">First Class Charge:</label>
                        <label class="second-class">First Class Charge:</label>
                        <div class="form-group ">
                                
                                <input type="text"  value="<?php echo $arrdata['firstclass']; ?>" >
                                <input type="text" value="<?php echo $arrdata['secondclass']; ?>" >
                        </div>
                        <label class="text-center">Date:</label>
                        <label class="lift-text">Time:</label>
                        <div class="form-group ">
                                
                                <input type="date"  value="<?php echo $arrdata['date']; ?>" >
                                <input type="time" value="<?php echo $arrdata['time']; ?>" >
                        </div>
                        <button class="btn btn-info adddelet-btn" >add shedule</button>

                        
                        
                    </div>
                    
                    </div>
                    
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#Id</th>
                            <th>BusName</th>
                            <th>Route</th>
                            <th>First class Charge</th>
                            <th>Second class charge</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        include 'dbcon.php';
                        $insertquery = "select * from newshadule";

                        $query = mysqli_query($con, $insertquery);

                        $result = mysqli_fetch_array($query);

                        while($result = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="info"><?php echo $result['id']; ?></td>
                                <td class="success"><?php echo $result['busname']; ?></td>
                                <td class="danger"><?php echo $result['route']; ?></td>
                                <td class="warning"><?php echo $result['firstclass']; ?></td>
                                <td class="warning"><?php echo $result['secondclass']; ?></td>
                                <td class="warning"><?php echo $result['date']; ?></td>
                                <td class="warning"><?php echo $result['time']; ?></td>
                                <td><a href=""><input class="btn-info" type="button" value="Edit" ></a>
                                    <input class="btn-danger" type="button" value="Delete">
                                </td>
                                    
                                
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                
            </div>
                
                
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
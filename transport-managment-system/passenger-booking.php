<?php 
;session_start();

include "links.php";
include "conn.php";
$jointable = "SELECT * FROM bookingseat INNER JOIN newshadule ON bookingseat.id= newshadule.id ";
$joinresut = mysqli_query($con,$jointable);
?>
<?php

    if(isset($_POST['submit'])){
        $no=$_POST['no'];
        $selectClass=$_POST['selectClass'];
        

        $chargequery = "insert into bookingseat(no, selectClass)
        values('$no', '$selectClass') ";
        $cquery = mysqli_query($con,$chargequery);

        
            ?>
                <script>
                  alert("charging are seccessfull insertdet")
                </script>
                
                <?php
               
        }else{
            ?>
                <script>
                  alert("chargig are not inserted seccufull");
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
                    <h2>Book Bus Tickets</h2>
                </div>
                
                <div class="lift_third_p">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Route</th>
                            <th>First Class Seats</th>
                            <th>Second Class Seats</th>
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
                                
                                <td class="danger"><?php echo $result['route']; ?></td>
                                <td class="warning">Seat(s) Available for First Class  <?php echo  $result['firstclass']; ?></td>
                                <td class="warning">Seat(s) Available for Second Class <?php echo $result['secondclass']; ?> </td>
                                <td class="warning"><?php echo $result['date']; ?></td>
                                <td class="warning"><?php echo $result['time']; ?></td>
                                <td><input class="btn btn-info two-btn" onclick="opnePopup()" type="submit" value="BOOK">
                        <div class="popup" id="popup">
                            
                            <div>
                                <h2><?php echo $result['route']; ?></h2>
                                <button class="close-btn" type="button" onclick="closePopup()">x</button>
                            </div>
                            
                            <form action="proceed.php" method="POST">
                            <div class="form-group ">
                                    <p class="text-center">Number of Tickets (If you are the only one, leave as it is) :</p>
                                    <input type="number"  name="no" min="1" max="5" require >
                            </div>
                           
                        
                            <div class="form-group ">
                            <p class="text-center" for="cars">Class:</p>
                            

                                <select class="selct" name="selectClass" > 
                                    <option value="select"  require>---select class---</optio>
                                    <option value="firstclass"  >first class <?php echo $result['firstclass']; ?> </option>
                                    <option value="secondclass" >second class <?php echo $result['secondclass']; ?></option>

                                </select>
                            </div>
                            <a href="update-shadule.php?id=<?php echo $result['id']; ?>"><input type="submit" name="submit" class="btn btn-info proceed-btn" value="proceed"></a>
                            
                            </form>
                            
                            
                            
                            
                        </div></td>    
                                
                            </tr>
                            
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

                
                        
                
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
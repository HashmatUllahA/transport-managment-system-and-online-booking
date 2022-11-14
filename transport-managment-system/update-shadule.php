<?php
include 'links.php'
?>

<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="update-shadule.css">
        <title>update shadule</title>
</head>
<body>
<form action="shedule.php" method="POST">
        <div class="contenair">
                <div>
                <h2 style="text-align: center;">Update Shedule</h2>
                <a href="shedule.php"><button class="close-btn" type="button" onclick="closePopup()">x</button></a>
                </div>
                <?php 
                    include 'dbcon.php';

                    $ids = $_GET['id'];

                    $showquery = "select * from newshadule where id={$ids}";
                    $showdata = mysqli_query($con, $showquery);

                    $arrdata = mysqli_fetch_array($showdata);

                    if(isset($_POST['submit'])){
                        $idupdate = $_GET['id'];
                        $busname = $_POST['busname'];
                        $route = $_POST['route'];
                        $firstclass =  $_POST['firstclass'];
                        $secondclass = $_POST['secondclass'];
                        $date = $_POST['date'];
                        $time = $_POST['time'];

                        $updatequery = "UPDATE newshadule SET `id`='[$id]',busname='[$busname]',
                        `route`='[$route]',firstclass='[$firstclass]',secondclass='[$secondclass]',date='[$date]',time='[$time]' WHERE id = $idupdate ";
                        $result = mysqli_query($con,$updatequery);
                        if($result){
                            echo "data update seccefully";
                        }else{
                            die(mysqli_error($con));
                        }

                    }
                    ?>
                <label style="text-align: center;" class="text-center">Bus:</label>
                <label class="lift-text">Route:</label>
                <div class="form-group ">
                                
                <input type="text" name="busname" value="<?php echo $arrdata['busname']; ?>" >
                <input type="text" name="route" value="<?php echo $arrdata['route']; ?>" >
                </div>
                        
                <label class="first-class">First Class Charge:</label>
                <label class="second-class">second Class Charge:</label>
                <div class="form-group ">
                                
                <input type="text" name="firstclass" value="<?php echo $arrdata['firstclass']; ?>"  >
                <input type="text" name="secondclass" value="<?php echo $arrdata['secondclass']; ?>"  >
                </div>
                <label class="text-center">Date:</label>
                <label class="lift-text">Time:</label>
                <div class="form-group ">
                                
                <input type="date" name="date" value="<?php echo $arrdata['date']; ?>" >
                <input type="time" name="time" value="<?php echo $arrdata['time']; ?>" >
                </div>
                     
                <a href=""><button class="btn btn-info adddelet-btn" name="submit" type="submit" >update shedule</button></a>
                
                    </form>
        </div>
</body>
</html>
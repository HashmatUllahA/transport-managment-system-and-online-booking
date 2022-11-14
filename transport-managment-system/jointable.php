<?php 
include "links.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show data by id</title>
</head>
<body>

    <div class="contenair">
        <form action="" method="POST">
            <input type="text" name="id" placeholder="enter id">
            <button type="text" name="search" value="search" class="btn btn-primary">search</button>
        </form>
        <table class="table">
            
            <?php 
            include "conn.php";
            if(isset($_POST['search']))
            {
                $id = $_POST['id'];
                $query = "SELECT * FROM bookingseat where id='$id'";
                $query_run = mysqli_query($con,$query);

                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <h1><?php echo $row['selectClass']; ?></h1>
                    <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
<?php 
$connect = mysqli_connect("localhost", "root","", "transport");
$sql= "SELECT * FROM uregistration INNER JOIN userfeadback ON uregistration.id = userfeadback.id ";
$result = mysqli_query($connect,$sql);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join table</title>
</head>
<body>
    <table>
        <tr>
            <th>brand name</th>
            <th>product name</th>
        </tr>
        <?php 
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['comment']; ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</body>
</html>
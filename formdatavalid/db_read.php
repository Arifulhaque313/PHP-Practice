<?php

$link = mysqli_connect('localhost','root','','login');
$query = "select * from users";
$result = mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Home/insert</a>
    <a href="db_read.php">Read database</a>
    <a href="update_data.php">Update data</a>
    <br>
    <br>
    <br>

    <?php
    
        while($row=mysqli_fetch_assoc($result)){
            ?>
            <pre>
                <?php 
            print_r($row);
            ?>
            </pre>
            <?php
        }

    
    
    ?>


</body>
</html>
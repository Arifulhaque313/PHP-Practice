<?php


    $link = mysqli_connect("localhost","root","","odabs");

    if(mysqli_connect_error()){
        die("Connection failed");
    }


    $query= "select * from image";
    $result =mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){

        echo  "
            <h1>".$row['username']."<h1>
            <img src='".$row['myimage']."' width='600'>
        
        ";

    }

?>
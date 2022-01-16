<?php   

    $link = mysqli_connect("localhost","root","","odabs");

    if(mysqli_connect_error()){
        die("Connection failed");
    }

    if(isset($_POST['submit_image'])){


       $username = $_POST["username"];
       $filename = $_FILES["myimage"]["name"];
       $tempname = $_FILES["myimage"]["tmp_name"];
       $folder = "image/".$filename;
       move_uploaded_file($tempname,$folder);
       
           $query = "insert into image (username,myimage) values('$username','$folder')";
           $result = mysqli_query($link,$query);

        
    }


?> 





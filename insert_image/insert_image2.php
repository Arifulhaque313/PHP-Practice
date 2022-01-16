<?php   

    $link = mysqli_connect("localhost","root","","odabs");

    if(mysqli_connect_error()){
        die("Connection failed");
    }




$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image VALUES('$imagetmp','$imagename')";

mysqli_query($link,$insert_image);

?> 




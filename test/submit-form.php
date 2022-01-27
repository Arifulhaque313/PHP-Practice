<?php

    $link =mysqli_connect('localhost','root','','rakib');
    if(mysqli_connect_error()){
        die('There are some errors');
    }

    if(isset($_POST['submit'])){


        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mobile=$_POST['mobile'];


        $query = "insert into users(name,email,password,mobile) values('$name','$email','$password','$mobile')";

        mysqli_query($link,$query);

    }

    





?>

<script type="text/javascript"> 
     alert("Inserted")
     window.location.href='readdb.php';
    </script>
<?php

include 'connectdb.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($link,$_POST['name']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    // echo $name;
    // echo $email;
    // echo $password;

    $query = "INSERT INTO users(name,email,password) values('$name','$email','$password')";
    mysqli_query($link,$query);

}




?>


<script>

            alert("Registration succesful");
            window.location.href = "index.php";

</script>
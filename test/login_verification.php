<?php

session_start();

include 'connectdb.php';

if(isset($_POST['submit'])){
   
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    // echo $name;
    // echo $email;
    // echo $password;

    $query = "select * from users where email = '$email'";
    $result=mysqli_query($link,$query);

   
    
    while($row = mysqli_fetch_assoc($result)){
        $db_pass = $row['password'];
        $db_email = $row['email'];

        $_SESSION['name'] = $row['name'];
    
    }

    if($db_email == $email){

        if($db_pass == $password){

            ?>
        <script>

            alert("Registration Successful ");
            window.location.href = "read.php";

        </script>
        <?php
        }

        else{

            
        ?>
        <script>

            alert("Email incorrect ");
            window.location.href = "login.php";

        </script>
        <?php
        

        }

    } 

    else{

        ?>
        <script>

            alert("Email incorrect ");
            window.location.href = "login.php";

        </script>
        <?php
        
    }

    

   
}

echo $db_pass;
echo $db_email;




?>



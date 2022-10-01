<?php

include"connect/db.php";

$query = "select * from users";

$result = mysqli_query($link,$query);


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container m-5">
    <!--Log in & signUp keyasda -->

    <div class="d-flex justify-content-end">
          <a href="index.php"><button class="btn btn-primary m-1">Login</button></a>
          <a href="signup.php"><button class="btn btn-primary m-1">Sign-Up</button></a>
          <a href="read.php"><button class="btn btn-primary m-1">read</button></a>
    </div>


    <?php
    
    while($row=mysqli_fetch_assoc($result)){
       ?>
       <pre> <?php print_r($row);  ?> </pre>

        
        <?php
    }
    
    ?>

    

  </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>

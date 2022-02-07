
<?php

include 'connectdb.php';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


  <style>
    ul li {
      padding 20px;
      margin:5px;
      list-style-type: none;
    }
    ul li a{
      
      text-decoration:none;
      margin-right:20px;
      color:white;
      font-size:18px;
      font-weight:700;
    }
  </style>
    <H1 class="bg-info p-3 container-fluid text-center ">Read database </H1>


    <div class="nabba bg-warning">

          <div class="menuber d-flex align-item-center">
            <ul class="d-flex align-items-center">
              <li><a href="index.php">Home</a></li>
              <li><a href="read.php">Read Data</a></li>
              <li><a href="signup.php">Create account</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>
          </div>

    </div>


    <div class="container my-5 d-flex justify-content-center">

        <div class="div p-3 w-75">
          <table class="table border ">

            <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                </tr>

            </thead>

            <tbody>
                <?php

                  while($row = mysqli_fetch_assoc($result)){

                    ?>

                       <tr>

                       <td> <?php  echo $row['id']; ?> </td>
                        <td> <?php  echo $row['name']; ?> </td>
                        <td> <?php  echo $row['email']; ?> </td>

                       </tr>

                    
                    
                    <?php

                  }

                ?>


            </tbody>

          </table>
        </div>

    </div>



    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
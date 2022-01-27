<?php
    $link =mysqli_connect('localhost','root','','rakib');
    if(mysqli_connect_error()){
        die('There are some errors');
    }


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
    <H1 class="bg-info p-3 container-fluid text-center ">Read From Database</H1>


    <div class="container d-flex justify-content-center">
        <table class="table w-75">
            <thead>
                <tr>
                    <th>Sl no </th>
                    <th>Name </th>
                    <th>Email </th>
                    <th>Mobile </th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result) ){
                        
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];


                        ?>
                        <tr>
                            <td><?php   echo $id;?></td>
                            <td><?php   echo $name;?></td>
                            <td><?php   echo $email;?></td>
                            <td><?php   echo $mobile;?></td>
                        </tr>

                        <?php
                    }
                ?>

            </tbody>
        </table>
    </div>


    <div class="button container d-flex justify-content-center">
        <a href="input-form.php" class="btn btn-success">Sign in</a>
        
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
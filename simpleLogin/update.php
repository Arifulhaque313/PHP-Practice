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
    <!--Log in & signUp key -->

    <div class="d-flex justify-content-end">
          <a href="index.php"><button class="btn btn-primary m-1">Login</button></a>
          
          <a href="signup.php"><button class="btn btn-primary m-1">Sign-Up</button></a>
          <a href="read.php"><button class="btn btn-primary m-1">read</button></a>
    </div>

    <!--Form Start-->
    <div class="row">
      <div class=" col-12 col-md-3 "></div>
      <div class=" col-12 col-md-6">
        <form action="registration.php" method ="post">
            <div class="mb-3">
                <label for="Name" class="form-lebel">Name</label>
                <input type="text" name="name" id="Name" class="form-control">
              </div>

              <div class="mb-3">
                <label for="Email" class="form-lebel">Email</label>
                <input type="email" name="email" class="form-control">
              </div>

          <div class="mb-3">
            <label for="Mobile" class="form-lebel">Mobile</label>
            <input type="text" name="mobile" class="form-control">
          </div>

          <div class="mb-3">
            <label for="password" class="form-lebel">password</label>
            <input type="password" name="password" class="form-control">
          </div>

            <div class="mb-3">
                <select class="form-select" name="" id="">
                    <?php

                        include"connect/db.php";
                        $query = "select * from users";

                        $result = mysqli_query($link,$query);

                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $name=$row['name'];

                        }

                        echo"<option value = '$id'>$id</option>";
                    
                    ?>
                </select>


            </div>


          <button type="submit" class="btn btn-primary">
            Submit
          </button>

        </form>
      </div>
      <div class=" col-12 col-md-6"></div>
    </div>

  </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>
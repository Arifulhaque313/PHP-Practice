<?php include"db_connect.php" ?>
<?php  include"functions.php" ?>


<?php   
if(isset($_POST['submit'])){

    
    $username ="$_POST[username]";
    $email="$_POST[email]";
    $password="$_POST[password]";
    $id="$_POST[id]";

    $query = "update users set username ='$username', email='$email', password='$password' where id = $id";
    mysqli_query($link,$query);

   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home/insert</a>
    <a href="db_read.php">Read database</a>
    <a href="update_data.php">update data</a>
    <br>
    <br>
    <br>
  <form action="update_data.php" method="post">

        
    <input type="text" name ="username" placeholder= "Enter your name "><br>
    <input type="email" name ="email" placeholder= "Enter your email "><br>
    <input type="password" name ="password" placeholder= "Enter your password "> <br>
    
    <select name="id" id="">
        <?php  showid() ;?>
    </select><br>
    
    <input type="submit" name ="submit" value = "update">

   
  </form>

</body>
</html>

<?php 

if(isset($_POST['submit'])){


    $link = mysqli_connect('localhost','root','','login');

    if(mysqli_connect_error()){
        die ("There are some problem");
        
    }

    $query = "insert into users (username,email,password) values('$_POST[username]','$_POST[email]','$_POST[password]') ";
    mysqli_query($link,$query);

}

?>


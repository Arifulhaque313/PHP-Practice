<?php

include "db_connect.php";

function showid(){
        global $link;
        global $id;
            $query = "select * from users";
            $result = mysqli_query($link,$query);
            while($row=mysqli_fetch_assoc($result)){
                $id =$row['id'];
                echo" <option value ='$id'>$id</option>";
            }
        
}


?>
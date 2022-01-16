<?php

    function add($x,$y){
        
        echo "Summation is = ".$x+$y;
    }


    function sub($x,$y){
        echo "Substraction is = ".$x-$y;
    }



    if(isset($_POST['sum'])){
        add($_POST['first'],$_POST['second']);
    }


    if(isset($_POST['sub'])){
        sub($_POST['first'],$_POST['second']);
    }
    

?>

<form action="" method="post">

    <input type="text" name="first" placeholder="first">
    <input type="text" name="second" placeholder="Second"> <br><br>
    <input type="submit" value="summation" name="sum">
    <input type="submit" value="substraction" name="sub">

</form>

<?php



?>
<?php
    
    
    function static_variable(){

        static $num1 = 3;
        $num2 = 6;


        $num1++;
        $num2++;

        echo"static : ". $num1 ."<br>";
        echo"non- static : ". $num2 ."<br>";
    }   


    static_variable();
    static_variable();


    $c=200;
    $$c="abc";

    echo $c . "</br>";

    echo" <h3>Example for __LINE__</h3>" ."</br>";
    echo "You are in line number ".__LINE__."<br>";



?>
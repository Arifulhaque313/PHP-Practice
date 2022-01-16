<?php

    /*
    function add(&$i){
        $i="my name";
    }

    $i2="rifat";
    add($i2);

    echo $i2 ."</br>";


    function a(...$nums){

        $sum=0;

        foreach($nums as $n){
            $sum+=$n;
        }

        return $sum;


    }

   echo a(1,2,3,4,5) . "</br>";

#recursive function


    function recur($number){

        if($number<=5){
            echo $number."<br>";
            recur($number+1);
        }

        

    }

    recur(1);
    
    
#php call by function

    function call($a,$b){
        echo "Summation of ".$a."+".$b."  is = ".$a+$b;
    }


    call(4,6);

    */

    #recursive function Means funcation under function

    function r($a){

        if($a<=10){
            echo"$a"."</br>";
            r($a+1);

        }

       

    }

    r(1);


    

    




?>
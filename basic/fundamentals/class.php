<?php

    class car{
        function movewheels(){
            echo "Wheels are running"."</br>";   
        }

    }


    $bmw = new car();
    $mazda = new car();



    $mazda->movewheels();
    $bmw->movewheels();

    


    /*

    if(method_exists('car', 'movewheels')){
        echo "Yeah it created";
    }

    else{
        echo "not created";
    }
    
    */

?>
<?php


    class Car{
        var $wheels = 4;
        var $door = 2;


        function totalwheels(){
            $this->wheels = 10;
            
        }

    }


    class plane extends car{


        var $door = 20;



    }

    $truck = new plane;

    echo $truck ->door;


   




?>
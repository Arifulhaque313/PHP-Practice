<?php

    class Car {

        var $wheels = 4;
        var $doors = 2;


        function createDoors(){

            $this->doors = 10;

        }


        function __construct(){

            echo $this->doors;

        }
       
      

    }



    $bmw = new Car();

  

    

    $truck = new Car();

    $truc = new Car();

   

   

 
echo "<br>";
?>



<!--Inheritance-->

<?php


    class Book {
        var $page = 200;
        var $weight = 50;


    }


    class paper extends Book{

        

    }


    $test = new paper();

    echo $test->page;





?>
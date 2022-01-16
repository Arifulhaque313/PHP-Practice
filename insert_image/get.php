<?php

    $name = "Ariful";
    $value = "100";
    $expiration = time()+(60*60);


    setcookie($name,$value,$expiration);

?>
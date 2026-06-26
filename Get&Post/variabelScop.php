<?php 

// variabel scop
    $x = 10;

    function tampilX(){
        global $x;
        echo $x;
    }

    tampilX();
?>
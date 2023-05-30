<?php
    // define("name",valus);

    define("NAME","Destiny");
    echo NAME;      // Destiny

    define("name","Aung Aung");
    echo name;      // Aung Aung

    // define("name","Hla Hla");
    // echo name;


    // Constant are global.
    define("greeting","Hello Mello");
    // $name = "Destiny";

    function myTest(){
        echo greeting;
        // echo $name;      // undefined
    }

    myTest();
?>
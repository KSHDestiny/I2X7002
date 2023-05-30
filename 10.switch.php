<?php
    // switch(parameter){       //  ==
    //     case value1:         // condition
    //         statement;
    //         break;
    //     case value2:         // condition
    //         statement;
    //         break;
    //     default:             // else
    //         statement;
    // }

    $fruit = "apple";

    switch($fruit){
        case "orange":
            echo "This is orange.";
            break;
        case "banana":
            echo "This is banana.";
            break;
        default:
            echo "This is other fruit.";
    }


    $num = 25;

    switch($num){
        case 10:
            echo "This is 10.";
            break;
        case 25:
            echo "This is 25.";
            break;
        case "25":
            echo "This is 25 string.";
            break;
        default:
            echo "This is other number.";
    }


    $int= 100;

    switch(true){
        case $int < 50:
            echo "This is less than 50.";
            break;
        case $int == 50:
            echo "This is 50.";
            break;
        default:
            echo "This is greater than 50.";
    }
?>
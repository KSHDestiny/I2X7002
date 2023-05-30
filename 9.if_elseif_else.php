<?php
    // if(condition){
    //     statement
    // }

    $num = 10;
    if($num < 5){
        echo "The value is greater than 5.";
    }

    // if(condtion){
    //     statement
    // }else{
    //     statement
    // }

    $num = 50;
    if($num == 50){
        echo "The value is 50.";
    }else{
        echo "The value is not 50.";
    }
    // echo $num == 50 ? "The value is 50." : "The value is not 50.";  // Ternary Operator

    // if(condtion){
    //     statement
    //  }elseif(condtion){
    //      statement
    //  }else{
    //     statement
    //  }

    $num = 100;
    if($num < 100){
        echo "The value is less than 100.";
    }elseif($num == "100"){
        echo "The value is 100.";
    }else{
        echo "The value is greater than 100.";
    }


    // $fruit = "Apple";
    
    // if($fruit != "Orange"){
    //     echo "The fruit is not orange.";
    // }else{
    //     echo "The fruit is orange.";
    // }
?>
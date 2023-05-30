<?php
    function myLife($name, $money = 0){
        if($money > 5000){
            echo "$name can eat pizza.<br>";
        }elseif($money >= 1000){
            echo "$name can drink Tea.<br>";
        }else{
            echo "$name must go sleep.<br>";
        }
    }

    myLife("Aung Aung", 3000);
    myLife("Hla Hla", 100000);
    myLife("Mya Mya");


    function currency($type, $amount){
        if($type == "USD"){
            return $amount * 2900;
        }elseif($type == "Baht"){
            return $amount * 80;
        }
        
        return "Wroung Currency";
    }

    echo currency("USD", 1000); // 2900000
    echo currency("Baht", 500); // 40000
    echo currency("SD", 2000);  // Wrong Currency
?>
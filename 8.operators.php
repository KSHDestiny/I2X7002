<?php
    // * Arithmetic Operators (+ ,- ,* ,/ ,% ,** )

    $x = 3; $y = 5;
    
    echo $x + $y;     // 8
    echo $y - $x;     // 2
    echo $x * $y;     // 15
    echo $x / $y;     // 0.6
    echo $x % $y;     // 3      // Remainder
    echo $x ** $y;      // 243  // Power
    echo "<br>";
    

    // * Assignment Operator (=, +=, -=, *=, /=, %=)
    $num = 10;
    echo $num;  // 10
    
    $x = 20;
    $x += 30;   // $x = $x + 30
    echo $x;    // 50
    
    $y = 50;
    $y -= 40;   // $y = $y - 40
    echo $y;    // 10
    
    $x = 5;
    $x *= 2;    // $x = $x * 2
    echo $x;    // 10

    $x = 10;
    $x /= 2;    // $x = $x / 2
    echo $x;    // 5
    
    $y = 10;
    $y %= 3;    // $y = $y % 3
    echo $y;    // 1
    echo "<br>";

    // * Increment / Decrement Operators (++ ,-- )

    $x = 10;
    ++$x;
    echo $x;    // 11

    $y = 5;
    --$y;   
    echo $y;    // 4
    echo "<br>";

    $num = 5;
    echo $num--;    // 5
    echo $num;  // 4

    
    // * Comparison Operators ( == , === , != , !== , > , < , >=, <=)
    $x = 10; $y = 20;
    var_dump($x > $y);  // false
    var_dump($x < $y);  // true

    $x = 10; $y = 20;
    var_dump($x >= $y);     // false

    $x = 30; $y = 30;
    var_dump($x <= $y);     // true

    $x = 100; $y = "100";
    var_dump($x == $y);    // true               // value
    var_dump($x === $y);   // false              // value + datatype

    $x= 20; $y = "20";
    var_dump($x != $y);     // false     // value
    var_dump($x !== $y);    // true     // value + datatype


    // * Logical Operator       ( && , || , ! )
    $x = 100;   $y = 50;

    if($x == 100 && $y == "50"){
        echo "correct values";
    }

    if($x == 10 || $y == 30){
        echo "<h1>there is correct answer.</h1>";
    }

    
    // * String Operators     ( .= )
    $txt1 = "I am Destiny. ";
    $txt2 = "He is Aung Aung";
    $txt1 .= $txt2;     // $txt1 = $txt1 . $txt2;
    echo $txt1;     // I am Destiny. He is Aung Aung
    echo $txt2;     // He is Aung Aung


    // * Conditional Assignment Operator    (Ternary Operator)  ?
    //  condition ? true (expression) : false (expression)

    $x = 100; $y = 50;
    echo $x == 50 || $y == 50 ? "Correct Answer" : "Wrong Answer";

    // $int1 = 10; $int2 = 20;
    // $x == 100 && $y === "50"? (function($num1, $num2){echo $num1 + $num2;})($int1, $int2) : (function($num1, $num2){echo $num1 - $num2;})($int1, $int2);
?>
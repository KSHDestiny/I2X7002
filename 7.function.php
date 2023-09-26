<?php
    // statement        // expression

    //  * statement
    // unit of code that performs an action or a sequence of action

    //  * expression
    // combination of variables, operators, functions that produce a single value

    // $value = 10 + 20;

    // $num1 = 20;
    // $num2 = 30;

    // echo 10 + 20;   // 30
    // echo $num1 + $num2;     // 50

    // * function
    // function functionName() {
    //     statement;
    // }
    // functionName();

    // * user defined function
    function writeMsg(){
        echo "This is testing message,";
    }
    writeMsg();

    function testing(){
        echo "Hello Mello";
        echo 10 + 20;
        var_dump(true);
    }
    testing();
    writeMsg();

    // * arguments function
    // ! one argument function
    function myName($name){
        echo $name;     
        echo "<div>My name is $name.</div>";    
    }

    myName("Destiny");  // Destiny  // My name is Destiny.
    myName("Aung Aung");    // Aung Aung  // My name is Aung Aung.

    // ! two argument function
    function sum($x, $y){
        $result = $x + $y;
        echo $result;  
    }

    sum(20, 30);  // 50
    sum(100,200);    // 300

    echo "<br>";

    // ! default argument function
    function sub($a = 50, $b = 10){
        echo $a - $b;
    }

    sub(50, 20);    // 10

    // * scope
    $fruit = "Mango";

    function fruit(){
        $fruit = "Apple";
        echo "Inside " . $fruit;
    }

    fruit();
    echo "Outside " . $fruit;
    echo "<br>";

    // void function (not return value, return NULL)

    // type function
    function test(){
        $result = 20 + 30;
        return $result;
    }

    var_dump(test());       // test() = 50;
    echo "<br>";

    echo 150 - test();   // 100

    // type function (deeper)
    function output($int1, $int2){
        echo "Hello Mello";
        echo "Hi there";
        $add = $int1 + $int2;
        return $add;
    }

    echo output(20,30);   // "Hello Mello"    // "Hi There"   // value = 50(unseen)

    // echo "Hello Mello";
    // echo "Hi there";
    // output() = 300;

    function multiple8($num){
        return $num * 4;
    }

    function multiple2($int){
        return $int * 2;
    }

    echo multiple8(multiple2(10));  // 80
    echo "<br>";


    // function greeting(){
    //     echo "Hello Mello";
    // }
    // greeting();


    // * anonymous function
    $fun = function(){
        echo "Hello";
    };

    $fun();

    // * IIFE ()  // Immediately Invoked function expression
    (function(){
        echo "Hello Mello Aung Aung";
    })();
    echo "<br>";

    (function($num1 = 100, $num2 = 200){
        echo $num1 + $num2;
    })(500,1000);
    echo "<br>";

    // $greeting = function(){
    //     echo "Hello Mello Aung Aung";
    // };
    // $greeting();

    
    // * closure function
    function outside(){
        echo "This is outside";
        function inside(){
            echo "This is inside";
        }
        inside();
    }
    outside();
    echo "<hr>";

    // * recursion

    $loopNum = 0;
    for($i=0; $i<9; $i++){
        $loopNum++;
        echo $loopNum;
    }

    echo "<br>";

    function countDown($oldNum){
        $newNum = $oldNum + 1;
        echo $newNum;
        if($newNum < 9){
            countDown($newNum);
        }
    }
    countDown(0);
?>
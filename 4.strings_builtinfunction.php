<?php
    // function add($num1, $num2){
    //     $result = $num1+$num2;
    //     echo $result;
    //     echo "<br>";
    // }

    // add(10,20); // 30
    // add(50,100);  // 150
    // add(25,50); // 75

    $name = "Destiny";
    // * strlen(string);    // string length
    echo strlen($name); // 7
    echo "<br>";

    // * str_word_count(string)
    echo str_word_count("I am Destiny.");  // 3
    echo "<br>";

    // * strrev(string)
    echo strrev($name); // ynitseD
    echo "<br>";

    // * str_shuffle(string)
    echo str_shuffle($name);    // nsytDei
    echo "<br>";

    // * strpos(string,pos)
    echo strpos("Aung Aung","ung"); // 1
    echo "<br>";

    // * str_replace(find,new,string)
    echo str_replace("Myat","Htet","Kaung Myat");   // Kaung Htet
    echo "<br>";

    // * strtoupper(string);
    echo strtoupper($name);     // DESTINY
    echo "<br>";

    // * strtolower(string)
    echo strtolower($name); // destiny
    echo "<br>";

    // * ucwords(string)
    echo ucwords("aung aung");  // Aung Aung
    echo "<br>";

    // * ucfirst(string)
    echo ucfirst("aung aung");  // Aung aung
    echo "<br>";

    // * strip_tags(html)     // remove html tags
    $sentence = "<h2><i>This is testing</i></h2>";
    echo $sentence;
    echo strip_tags($sentence);
    echo "<br>";

    // * trim()   // remove space (left/right space)
    $str = "     Hello   World        ";
    var_dump($str);     // 26
    echo "<br>";
    var_dump(trim($str));   // 13

    // echo str_replace(" ","",$str);  // HelloWorld
?>
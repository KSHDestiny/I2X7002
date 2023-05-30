<?php
    echo "Hello World"; 

    echo "I am Destiny.";

    echo 25;

    echo "<h1>This is header 1.</h1>";

    // "" vs ''
    $name = "Destiny";
    echo "My name is $name"; // My name is Destiny.

    $array = ["name" => "Destiny","age" => 23];
    echo "<h2>My name is " . $array['name'] . "</h2>";
    echo "<h2>My name is {$array['name']}</h2>";

?>
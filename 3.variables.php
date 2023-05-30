<?php 
    $name = "Destiny";
    echo $name;     // Destiny

    $integer1 = 26.21;
    echo $integer1;     // 26.21

    // $age;
    // var_dump($age);
    $age = 23;
    
    // concat .
    echo "My name is " . $name . " and I am " . $age . " years old.";
    echo "<div>My name is $name and I am $age years old.</div>";   // My name is Destiny and I am 23 years old.

    $int1 = 10;
    $int2 = 20;
    $answer = $int1 + $int2;    // 10 + 20
    echo $answer;   // 30
    echo "<br>";

    $num1 = "100";
    $num2 = 50;
    $num3 = "10Hello";
    echo $num1 + $num2 + $num3; // 160 with warning

    $job = "Designer";
    echo "<h2>$job</h2>";  // Designer

    $job = "Developer";
    echo "<b>$job</b>";  // Developer
?>
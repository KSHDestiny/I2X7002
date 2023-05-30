<?php
    // * array  (An array stores multiple values in one single variable)
    $testingArray = ["Hello Mello", 123, 2.14, true, "Hi there"];
    $array = array("Hello Mello", 123, 2.14, true, ["apple","banana","orange"]);

    var_dump($testingArray);    // array(5)
    echo $testingArray[2];  // 2.14
    var_dump($testingArray[2]); // int(2.14)

    echo $array[0]; // "Hello Mello
    echo $array[4]; // "Hi there"
    var_dump($array[3]);    // bool(true)

    // * indexed array  ( indexed number => value )
    $cars = ["BMW", "Toyota", "KIA", "Volvo"];
    echo $cars[2];  // "KIA"

    $numbers = [];
    var_dump($numbers); // array()

    $numbers[0] = 10;
    var_dump($numbers); // array(1)

    $numbers[1] = 20;
    $numbers[2] = 30;
    $numbers[3] = "40";

    var_dump($numbers);     // array(4)[10,20,30,"40"]
    print_r($numbers);
    echo "<hr><br>";

    $integers = [];
    print_r($integers); // array()

    $integers[0] = 5;
    $integers[1] = 10;
                        // skip indexed 
    $integers[3] = 20;
    
    print_r($integers);

    $integers[] = 40;       // last indexed + 1
    print_r($integers);
    echo "<br>";

    $integers[99] = 100;
    $integers[] = 200;
    var_dump($integers);    // array(6)
    

    // * count()
    echo count($integers);  // 6
    echo count($numbers);   // 4
    echo count($testingArray);  // 5
    echo "<hr>";


    // * associative array ( key => value)
    $mySelf = [
        "name" => "Destiny",
        "age" => 23,
        "job" => "developer"
    ];
    echo $mySelf["name"];   // Destiny
    echo $mySelf["job"];    // developer

    $age = [
        "Peter" => 21,
        "Harry" => 19,
        "Joe" => 26,
        "Clare" => 23
    ];
    echo $age["Joe"];   // 26

    $age["Nicky"] = 24;
    var_dump($age); // array(5)
    echo "<br>";
    echo count($age);   // 5


    $users = [
        "Peter" => [
            "age" => 21,
            "gender" => "male",
            "job" => "designer"
        ],

        "Clare" => [
            "age" => 23,
            "gender" => "female",
            "job" => "developer"
        ]
    ];

    var_dump($users);
    echo $users["Peter"]["job"];    // designer
    echo $users["Clare"]["gender"]; // female
    echo "<hr>";


    // * array in string

    $self = ["Aung Aung", 21, "designer"];
    echo "$self[0] is $self[1] years old. He is a $self[2].";    // Aung Aung is 21 years old. He is a developer.

    $aboutMe = ["name" => "Hla Hla", "job" => "teacher"];
    echo "{$aboutMe['name']} is a {$aboutMe['job']}";   // Hla Hla is a teacher
    echo $aboutMe['name'] .  " is a " . $aboutMe['job'];    // Hla Hla is a teacher

?>
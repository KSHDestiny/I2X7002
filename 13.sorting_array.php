<?php
    // * indexed array

    $fruits = ["Apple","Banana","Orange","Grape","Pineapple","Lime"];

    // ! int, A-Z, a-z
    // sort(array)  // ascending    
    sort($fruits);  // actual change
    print_r($fruits);

    // rsort(array) // descending
    rsort($fruits); 
    print_r($fruits);


    // * associative array

    $user = [
        "name" => "Destiny",
        "age" => 23,
        "job" => "developer"
    ];

    // asort(assoArray) // ascending value
    asort($user);
    print_r($user);
    echo "<br>";

    // arsort(assoArray)    // descending value
    arsort($user);
    print_r($user);
    echo "<br>";

    // ksort(assoArray) // ascending key
    ksort($user);
    print_r($user);
    echo "<br>";

    // krsort(assoArray)    // descending key
    krsort($user);
    print_r($user);
?>
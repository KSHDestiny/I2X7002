<?php
    // * indexed array

    $fruits = ["Apple","Banana","Orange","Grape","Pineapple","Lime"];

    // current($array)      // first indexed number value
    echo current($fruits);  // Apple

    // end($array)  // last indexed number value
    echo end($fruits);  // Lime

    // array_rand($array)     // random indexed number
    echo array_rand($fruits);   // 0 to 5
    echo $fruits[array_rand($fruits)];  // random value

    // in_array(value, array)
    var_dump(in_array("Grape",$fruits));    // bool(true)

    // array_sum($array)
    echo array_sum([10,20,30,40,50,100]);   // 250

    // range(start,end)
    print_r(range(1,10));  // [1,2,...,10]
    echo "<hr>";

    // * associative array

    $user = [
        "name" => "Destiny",
        "age" => 23,
        "job" => "developer"
    ];

    // array_keys(assoArray)    // Show all keys in assoArray
    var_dump(array_keys($user));    // ["name","age","job"]

    // array_values(assoArray) // Show all values in assoArray
    var_dump(array_values($user));  // ["Destiny",23,"developer"]

    // array_key_exists(key, assoArray)
    var_dump(array_key_exists("age",$user));    // bool(true)
    echo "<hr>";
    var_dump($user);
    echo "<hr>";

    // shuffle(assoArray)
    shuffle($user);     // change actually  // remove key
    var_dump($user);

    // * remove / add
    $a = array("red","green","blue");

    // array_pop(array) // remove end
    array_pop($a);  
    print_r($a);    // ["red","green"]

    // array_push(array,value)  // add end
    array_push($a, "black");
    print_r($a);    // ["red","green","black"]

    // array_shift(array)   // remove first
    array_shift($a);
    print_r($a);    // ["green","black"]

    // array_unshift(array,value)   // add first
    array_unshift($a, "pink");
    print_r($a);    // ["pink","green","black"]
?>


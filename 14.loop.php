<?php
    // * while
    // while(condition){        // condition -> statement
    //     statement;
    // }

    $num = 1;

    while($num <= 10){
        echo $num;
        $num++;
    }                       // 12345678910
    echo "<br>";

    // first loop // echo 1   // 1+1 = 2
    // second loop // echo 2 // 2+1=3
    // third loop // echo 3 // 3+1 = 4
    //...
    // final loop // echo 10 // 10+1 = 11

    $num = 10;
    while($num >= 0){
        echo $num;
        $num--;
    }                       // 109876543210
    echo "<br>";


    $num = 5;
    while($num < 100){
        echo $num;
        $num += 5;
    }                       // 5101520253035404550556065707580859095
    echo "<br>";


    // * do while
    // do {                 // first loop -> condition -> statement
    //     statement;
    // }while(condition)

    $num = 100;
    do {
        echo $num;
        $num++;
    }while($num <= 10);       // 100



    // * for
    // for(declare; condition; increment/decrement){
    //     statement;
    // }

    $num = 0;
    for($i = 10; $i > $num; $i--){
        echo $i;        // 10987654321
    }

    $fruits = ["Apple","Banana","Orange","Grape","Pineapple","Lemon","Lime"];
    for($i = count($fruits) - 1; $i >= 0; $i--){
        echo $fruits[$i];           // Lime Lemon Pineapple Grape Orange Banana Apple
    }


    // * foreach
    // foreach(array as parameter){     array[] -> parameter
    //     statement;
    // }

    foreach($fruits as $fruit){
        echo $fruit;        // Apple Banana Orange Grape Pineapple Lemon Lime
        echo "<br>";
    }


    // associative array
    $users = [
        ["name" => "Aung Aung", "age" => 21, "job" => "designer"],
        ["name" => "Hla Hla", "age" => 24, "job" => "teacher"],
        ["name" => "Tun Tun", "age" => 22, "job" => "developer"],
    ];

    foreach($users as $user){
        echo $user['name'] . " is " . $user['age'] . " years old.";
        echo "<br>";
    }


    $user = ["name" => "Aung Aung", "age" => 21, "job" => "designer"];

    foreach($user as $key => $item){
        echo $key . " is " . $item . ".<br>";
    }
    echo "<hr>";


    // * break / continue

    $num = 10;

    for($i = 0; $i < $num; $i++){
        if($i == 5) continue;
        if($i == 8) break;
        echo $i;        // 0123467
    }


    // * skiped index
    $array = [];
    $array[0] = 0;
    $array[2] = 2;
    $array[4] = 4;
    $array[10] = 10;

    var_dump($array);

    foreach($array as $item){
        echo $item . "<br>";
    }
    echo "<hr>";


    // * nested loop

    $storedArray = [];
    for($i = 0; $i <= 3; $i++){
        for($x = 0; $x < 10; $x++){
            if($i == $x) continue;
            $storedArray[] = $i . $x;
        }
    }

    print_r($storedArray);
    echo "<hr>";


    $userInfos = [
        ["name" => "Destiny", "age" => 23, "job" => "developer"],
        ["name" => "Aung Aung", "age" => 21, "job" => "designer"],
        ["name" => "Hla Hla", "age" => 24, "job" => "teacher"],
        ["name" => "Tun Tun", "age" => 22, "job" => "developer"],
    ];

    $userEmails = [
        ["name" => "Hla Hla", "email" => "hlahla@gmail.com"],
        ["name" => "Tun Tun", "email" => "tuntun@gmail.com"],
        ["name" => "Destiny", "email" => "destiny@gmail.com"],
        ["name" => "Aung Aung", "email" => "aungaung@gmail.com"],
    ];

    $users = [];

    for($i = 0; $i < count($userInfos); $i++){
        for($x = 0; $x < count($userEmails); $x++){

            if($userInfos[$i]["name"] == $userEmails[$x]["name"]){
                // $users[] = ["name" => $userInfos[$i]["name"], "age" => $userInfos[$i]["age"], "email" => $userEmails[$x]["email"], "job" => $userInfos[$i]["job"]];
                array_unshift($users,["name" => $userInfos[$i]["name"], "age" => $userInfos[$i]["age"], "email" => $userEmails[$x]["email"], "job" => $userInfos[$i]["job"]]);
            }

        }
    }

    echo "<pre>";
    print_r($users);



    $students = [
        ["name" => "Aung Aung", "age" => 13, "grade" => 7],
        ["name" => "Hla Hla", "age" => 14, "grade" => 8],
        ["name" => "Mya Mya", "age" => 18],
        ["name" => "Tun Tun", "grade" => 9],
    ];

    $finalStudents = [];

    foreach($students as $student){
        if(isset($student["name"]) && isset($student["age"]) && isset($student["grade"])){
            $finalStudents[] = $student;
        }

        // if(!isset($student["name"]) || !isset($student["age"]) || !isset($student["grade"])) continue;
        // $finalStudents[] = $student;
    }

    print_r($finalStudents);
?>
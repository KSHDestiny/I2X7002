<?php
    // header("location: filepath")

    $x = 10;

    $userData = [
        'name' => "Destiny",
        'age' => 23,
        "job" => "developer"
    ];

    if($x == 10){
        header("location: read.php?name={$userData['name']}");
    }

    echo "This is exercise page.";
?>
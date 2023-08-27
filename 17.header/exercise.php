<?php
    // header("location: filepath")

    $userData = [
        'name' => "Destiny",
        'age' => 23,
        "job" => "developer"
    ];

    if(true){
        // header("location: read.php?name={$userData['name']}");

        // header("Context-Type: application/pdf");
        // header("Cache-Control: no-cache");
        header( "refresh:5;url=read.php?name={$userData['name']}" );
        echo "You will be redirected in about 5 secs. If not, click <a href='read.php?name={$userData["name"]}'>here</a>.";

    }



    echo "This is exercise page.";
?>
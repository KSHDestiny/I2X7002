<?php
    //  isset -> value  // exist -> true  
    // empty -> value   // exist -> false

    $assoArray = [
        "name" => "Aung Aung",
        "age" => 23,
        "gender" => "male",
        "phone" => "0912345678",
        "job" => null
    ];

    var_dump(isset($assoArray["job"]));

    var_dump(empty($assoArray["job"]));

    if(isset($assoArray["name"])){
        var_dump(trim($assoArray["name"]));
    }else{
        echo "There is no user name";
    }

    if(isset($assoArray["gender"]) && isset($assoArray["name"])){
        $assoArray["name"] = trim($assoArray["name"]);
        $prefixName = $assoArray["gender"] === "male"? "Mg" : "Ma";
        echo "My name is $prefixName {$assoArray['name']}";
    }else{
        echo "<b>There is no user name and gander.</b>";
    }
?>
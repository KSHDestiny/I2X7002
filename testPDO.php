<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=my_test","root","");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    //     $name = "Tin Sein";
    //     $phone =  "0912121212";

    // if(true){
    //     $statement = $conn->prepare("INSERT INTO users (name,phon') VALUES (:name,:phone)");
    //     $statement->bindParam(":name", $name);
    //     $statement->bindParam(":phone", $phone);
    //     $statement->execute();

    //     die("Successfully created.");
    // }

    // if(true){
    //     $statement = $conn->query("SELECT * FROM users");
    //     $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    //     echo "<pre>";
    //     die(var_dump($rows));
    // }

    // if(true){
    //     $statement = $conn->query("UPDATE users SET name=:name WHERE id=:id");
    //     $statement->execute();

    //     die("Successfully updated.");
    // }

    // if(true){
    //     $statement = $conn->query("DELETE FROM users WHERE id=7");
    //     $statement->execute();

    //     die("Successfully updated.");
    // }
?>
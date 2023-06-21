<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=my_test","root","");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
      } catch(PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    }


        $statement = $conn->query("SELECT * FROM users");
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($rows);

?>
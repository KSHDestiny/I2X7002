<?php
    session_start();

    $userData = [
        "name" => "Destiny",
        "email" => "destiny@gmail.com",
        "password" => "destiny123"
    ];
?>

<?php 
    // whether user fill the form or not
    if(isset($_POST["userEmail"]) && $_POST["userEmail"] != "" && isset($_POST["userPassword"]) && $_POST["userPassword"] != "" ){
        
        // whether email, password are the same
        if($_POST["userEmail"] == $userData["email"] && $_POST["userPassword"] == $userData["password"]){

            // store token for session
            $_SESSION["token"] = $userData["name"] . "_" . rand(0,99999999999999);

            // store token for cookie
            setcookie("cookieToken", $_SESSION["token"], time() + 86400);

            // same -> home.php
            header("Location: ./home.php");
        }else{
            // incorrect -> index.php
            setcookie("incorrect","Wrong user email & password");
            header("Location: ./index.php");
        }

    }else{
        // not fill the form
        setcookie("noData","You need to fill the form");
        header("Location: ./index.php");
    }
?>
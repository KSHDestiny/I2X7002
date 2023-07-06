<?php
    if(empty($_SESSION['token'])){
        if(empty($_COOKIE['token'])){
            header("Location: ./index.php");
        }
    }
?>

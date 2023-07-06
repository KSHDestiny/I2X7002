<?php
    if(isset($_COOKIE['token']) || isset($_SESSION['token'])){
        header("Location: ./dashboard.php");
    }
?>

<?php
    session_start();
    if(isset($_SESSION['userId'])){
        $length = strlen($_SESSION['userId']) - 17;
        $userId = substr($_SESSION['userId'],7,$length);

        echo $userId;
    }
?>
<?php
    session_start();
    $_SESSION["job"] = "developer";

    header("Location: ./index.php");
?>
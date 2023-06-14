<?php
    session_start();
    session_destroy();

    setcookie("cookieToken","",time() - 3600);

    header("Location: ./index.php");
?>
<?php
    session_start();

    // not login -> redirect index.php
    if(empty($_SESSION["token"])){

        // close browser but still have cookie
        if(empty($_COOKIE["cookieToken"])){
            header("Location: index.php");
        }
    }
?>

    <?php 
        require_once("./template/header.php")
    ?>

    <div class="container">
        <h1>This is home page</h1>
    </div>

    <?php 
        require_once("./template/footer.php")
    ?>
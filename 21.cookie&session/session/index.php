<?php     
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is show session page</h1>
    <h3>Cookie value is 
    <?php 
        if(isset($_SESSION["job"])){
            echo $_SESSION['job'];
        }else{
            echo " empty";
        }
    ?>
    </h3>

    <a href="./setsession.php">Set Session</a>
    <a href="./deletesession.php">Delete Session</a>
</body>
</html>
<?php 
    setcookie("name","");
    // delete in cookie     // need to reload or redirect
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is delete cookie page</h1>
    <h3>Cookie value is <?php echo $_COOKIE["name"] ?></h3>

    <a href="./setcookie.php">Set Cookie</a>
    <a href="./showcookie.php">Show Cookie</a>
</body>
</html>
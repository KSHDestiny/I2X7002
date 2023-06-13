<?php   
    // setcookie(key,value,expiretime)
    setcookie('name',"Destiny",time() + 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is set cookie page</h1>
    <h3>Cookie value is <?php echo $_COOKIE["name"] ?></h3>

    <a href="./showcookie.php">Show Cookie</a>
    <a href="./deletecookie.php">Delete Cookie</a>
</body>
</html>
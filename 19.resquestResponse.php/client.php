<?php
    // * Get Method           // <a htef=" ?key=value&key=value"></a>      // Form     // URL
    // * Post Method            // Form

    $userData = [
        "name" => "Kyaw Kyaw",
        "age" => 30,
        "job" => "designer"
    ];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="server.php?name=<?php echo $userData["name"]; ?> & age=<?php echo $userData["age"] ?>">Click Me</a>

    <?php 
        // ! Get (Form)                 // search
        // * method = "get"
        // * action similar href
        // * name similar key
    ?>

    <form action="server.php" method="get">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="userName">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="userPassword">
        </div>
        <input type="submit" value="Send">
    </form>
    <hr>

    <?php
        // ! Post (Form)                // request user data
        // * method = "post"
        // * action similar href
        // * name similar key
    ?>

    <form action="server.php" method="post">
        <div>
            <label for="food">Food</label>
            <input type="text" id="food" name="myFood">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="myPrice">
        </div>
        <input type="submit" value="Send">
    </form>

    <hr>

    <form action="server.php" method="GET">
        <input type="hidden" name="type" value="product">
        <input type="text" name="q" placeholder="Search...">
        <input type="submit" value="Search">
    </form>
</body>
</html>


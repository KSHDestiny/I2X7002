<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #000;
        }
    </style>
</head>
<body>
    <h1 id="testing">Hello Mello</h1>

    <?php setcookie("token", "This is for login") ?>
    
    <?= $_COOKIE["token"]  ?>

    <script>
        let testing =document.querySelector("#testing");
    </script>
</body>

</html>
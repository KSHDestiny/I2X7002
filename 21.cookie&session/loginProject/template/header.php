

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/app.css">
</head>
<body class="bg-custom overflow-hidden ">
    <section class="">
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container">
                <a class="navbar-brand h3 text-primary" href="#">Login Form with Pure PHP</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
                <!-- <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                    <?php 
                        if(isset($_SESSION["token"]) || isset($_COOKIE["cookieToken"])){
                            echo "<a class='nav-link text-primary' href='./logout.php'>Logout</a>";
                        }
                    ?>
                    </li>
                </ul>
                <!-- </div> -->
            </div>
        </nav>
    </section>
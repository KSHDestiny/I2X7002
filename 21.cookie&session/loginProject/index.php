<?php
    session_start();


    // if login, redirect homepage
    if(isset($_SESSION["token"]) || isset($_COOKIE["cookieToken"])){
        header("Location: ./home.php");
    }

?>

    <?php require_once('./template/header.php') ?>

        <div class="vh-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-8 col-md-6 col-lg-5">
                    <div class="bg-light p-5 rounded-3">

                        <form action="./login.php" method="post">
                            <div class="form-group mb-3">
                            <label for="" class="form-label text-primary">Email</label>
                            <input type="text" name="userEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group mb-3">
                            <label for="" class="form-label text-primary">Password</label>
                            <input type="text" name="userPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <?php 
                                // flash message  (no dota)
                                if(isset($_COOKIE["noData"])){
                                    echo "<small class='text-danger'>{$_COOKIE['noData']}!</small>";
                                    setcookie("noData","",time() - 3600);
                                }

                                // flash message    (incorrect)
                                if(isset($_COOKIE["incorrect"])){
                                    echo "<small class='text-danger'>{$_COOKIE['incorrect']}!</small>";
                                    setcookie("incorrect","",time() - 3600);
                                }
                            ?>
                            <button class="btn btn-secondary text-primary w-100 mt-3">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


   <?php require_once('./template/footer.php') ; ?>

<?php 
require_once("./template/header.php");
require_once("./template/login.php");
?>
    
<section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-sm-fluid container-md">
                <a class="navbar-brand text-primary" href="#">CRUD Project with pure PHP</a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="./register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
</section>


<section class="vh-100 row align-items-center g-0">
        <div class="col-8 col-md-6 col-lg-5 mx-auto">
            <div class="card text-primary">
                <div class="card-header text-center h3">
                    Login Form
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="userEmail" class="form-control" value="<?php 
                                if(isset($_COOKIE['oldEmail'])){
                                    echo htmlentities( $_COOKIE['oldEmail']);
                                }
                            ?>" placeholder="Enter your Email...">
                            <p class="text-danger">
                            <?php
                                if(isset($_COOKIE['emptyEmail'])){
                                    echo $_COOKIE['emptyEmail'];
                                    setcookie('emptyEmail',"",time() - 3600);
                                }
                            ?>
                            </p>
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="userPassword" value="" class="form-control" placeholder="Enter your Password...">
                            <p class="text-danger">
                            <?php
                                if(isset($_COOKIE['emptyPassword'])){
                                    echo $_COOKIE['emptyPassword'];
                                    setcookie('emptyPassword',"",time() - 3600);
                                }

                                if(isset($_COOKIE['wrongPassword'])){
                                    echo $_COOKIE['wrongPassword'];
                                    setcookie('wrongPassword',"",time() - 3600);
                                }
                            ?>
                            </p>
                        </div>
                        <input type="submit" name="login" class="btn btn-primary mt-3 w-100" value="Login" />
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once("./template/footer.php") ?>
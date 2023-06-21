<?php
    session_start();
    if(isset($_POST)){
        $_SESSION['test'] = $_POST['test'];
    }

    echo $_SESSION['test'];

?>
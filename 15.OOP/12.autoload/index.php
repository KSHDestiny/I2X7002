<?php
    include('vendor/autoload.php');
    use app\One;
    use app\Two;

    $one = new One;
    $one->getOne();

    $two = new Two;
    $two->getTwo();
?>

<!-- composer dump-autoload -o -->
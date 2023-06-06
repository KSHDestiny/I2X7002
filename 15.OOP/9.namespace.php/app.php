<?php
    include('math.php');
    include('calculate.php');

    use Library\Helper\Calculate\Calculator;

    echo Math\add(10,20);           // 30

    // $calculator1 = new Library\Helper\Calculate\Calculator;
    $calculator2 = new Calculator;
    $calculator3 = new Calculator;

    echo $calculator2->subtract(50,25);   // 25
    echo $calculator2->multiple(100);     // 200

?>
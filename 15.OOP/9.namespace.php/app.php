<?php
    include('math.php');
    include('calculate.php');

    use Library\Helper\Calculate\Calculator;
    use Library\Helper\Math\Calculator as MathCalculator;

    echo Library\Helper\Math\add(10,20);           // 30

    // $calculator1 = new Library\Helper\Calculate\Calculator;
    $calculator1 = new Calculator;
    $calculator2 = new MathCalculator;

    echo $calculator1->subtract(50,25);   // 25
    echo $calculator1->multiple(100);     // 200

    echo $calculator2->division(100,2);     // 50
?>
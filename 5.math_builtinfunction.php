<?php
    // min(arrayInt)
    echo min(0,10,50,2000,-100,-250);   // -250
    echo "<br>";

    // max(arrInt)
    $arr = [0,10,50,2000,-100,-250];
    echo max($arr);     // 2000
    echo "<br>";

    // abs(x)     |x|
    echo abs(-25);      // 25
    echo "<br>";

    // sqrt(x)
    echo sqrt(81);  // 9
    echo "<br>";

    // round(x)     // approximate
    echo round(10.5);  // 11
    echo "<br>";

    // ceil(x)  // upper approximate
    echo ceil(30.000000001);    // 31
    echo "<br>";

    // floor(x)     // lower approximate
    echo floor(5.999);  // 5
    echo "<br>";

    // rand(start, end)
    echo rand(100,200); 
    echo "<br>";

    // pow(base,power)
    echo pow(3,4);  // 81
?>
<?php
    date_default_timezone_set("Asia/Yangon");

    // date(format,timestamp = current_timestamp);          // timestamp => strtotime()
    echo date("d-m-o h:i a");
    echo "<br>";

    echo date("M-d,o H:i",strtotime("6pm 2020-03-15")); // Mar-15,2020 18:00    // d-m-y time   // time y-m-d
    echo "<hr>";


    // date_create() = object & date_format(object, format)

    $currentDate = date_create(date("c"));
    echo date_format($currentDate, "d-m-o h:i a");
    echo "<hr>";

    // date_add(object, interval)       // interval => date_interval_create_from_date_string("string")
    // $currentDate = date_create(date("c", strtotime("3.5.2021")));
    // echo "Production date is " . date_format($currentDate, "d-m-o");     // Production date is 03-05-2021
    // echo "<br>";

    // date_add($currentDate, date_interval_create_from_date_string("3 monthss"));    // actual change
    // $expireDate = date_format($currentDate, "d-m-o");
    // echo "Expire date is " . $expireDate;    // Expire date is 03-08-2021

    // date_sub(object, interval)
    $currentDate = date_create(date("c", strtotime("3.5.2021")));
    echo "Production date is " . date_format($currentDate, "d-m-o");        // Production date is 03-05-2021
    echo "<br>";

    date_sub($currentDate, date_interval_create_from_date_string("2 years"));    // actual change
    $date = date_format($currentDate, "d-m-o");
    echo "Date is " . $date;        // Date is 03-05-2019
?>
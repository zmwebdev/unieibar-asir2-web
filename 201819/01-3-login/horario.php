<?php

// http://php.net/manual/en/function.date.php
$day = date("N");
$hour = date("H");

echo $day . "-" . $hour . "<br>";

if ($day == 1) {
    // monday
    if ($hour == 8) {
        // first hour
        echo "Monday second subject";
    } elseif ($hour == 9) {
        // second hour
        echo "Monday second subject";
    } else {
        // no class
        echo "No class";        
    }
} elseif ($day == 2) {
    // tuesday

} else {
    // no class
    echo "No class";
}
<?php

// http://php.net/manual/en/function.date.php
$day = date("N");
$hour = date("H");

// two dimensional array
// https://www.w3schools.com/php/php_arrays_multi.asp<?php
// https://www.w3schools.com/php/php_arrays.asp
// https://www.w3schools.com/php/php_arrays_multi.asp

// class schedule
$schedule = array(
    1=>array(8=>"A", 9=>"B",10=>"C",11=>"D",12=>"D",13=>"D",14=>"D"),
    2=>array(8=>"A", 9=>"B",10=>"C",11=>"D",12=>"D",13=>"D",14=>"D"),
    3=>array(8=>"A", 9=>"B",10=>"C",11=>"D",12=>"D",13=>"D",14=>"D"),
    4=>array(8=>"A", 9=>"B",10=>"C",11=>"D",12=>"D",13=>"D",14=>"D"),
    5=>array(8=>"A", 9=>"B",10=>"C",11=>"D",12=>"Z",13=>"Z",14=>"Z"),
);

// http://php.net/manual/en/function.date.php
$day = date("N");
$hour = date("H");

echo $day . "-" . $hour . "<br>";

//print_r($schedule);
//echo "monday 8:00  " . $schedule[1][1]; // monday 8:00;

echo $schedule[$day][$hour];

// function to print the all schedule table
// TODO


// error out of range
// tail /var/log/apache2/error.log
// how to check errors? windows?
echo $schedule[$day][20];
<?php

echo "<h3> 1 Dimentsioko array-ak </h3>";

$v = [1,5,6,5,77,88,333,444,66,0];

//$suma = $v[0] + $v[1] + $v[2];
//echo "batura : " . $suma;


// for
$suma = 0;
for ($i = 0; $i < count($v); $i++) {
    //echo "The number is: $x <br>";
    //echo " i:" . $i;
    $suma = $suma + $v[$i];
    //echo "; suma:" . $suma;
    //echo "<br>";
}

echo "batura for: " . $suma . "<br>";

// while
$suma = 0;
$i = 0;
while ($i < count($v)) {
    $suma = $suma + $v[$i];
    $i++;
}

echo "batura while: " . $suma . "<br>";

// foreach

foreach ($v as $x) {
    //echo $x . "<br>";
    $suma = $suma + $x;
}

echo "batura foreach: " . $suma;


/************************

2 dimentsiotako arrayak

*/

echo "<h3> 2 Dimentsioko array-ak </h3>";

$vv = [[1,2,3],[4,5,6]];

// for
$suma = 0;
for ($i=0; $i<count($vv); $i++) {
    for ($j=0; $j<count($vv[0]); $j++) {
        //echo $vv[$i][$j];
        $suma = $suma + $vv[$i][$j];
    }
}

echo "batura for: " . $suma . "<br>";

// while
$suma = 0;
$i=0;
$j=0;
while ($i<count($vv)) {
    $j=0;
    while ($j<count($vv[0])) {
        //echo $vv[$i][$j];
        $suma = $suma + $vv[$i][$j];
        $j++;
    }
    $i++;
}

echo "batura while: " . $suma . "<br>";


// foreach
$suma = 0;
foreach ($vv as $v) {
    foreach($v as $x) {
        $suma = $suma + $x;
    }
}

echo "batura foreach: " . $suma;













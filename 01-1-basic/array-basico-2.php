<?php

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

echo "batura for: " . $suma . "<br><br>";

// while
$suma = 0;
$i = 0;
while ($i < count($v)) {
    $suma = $suma + $v[$i];
    $i++;
}

echo "batura while: " . $suma;

// foreach


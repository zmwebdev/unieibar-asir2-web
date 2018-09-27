<?php

$v = [1,5,6,99,12,11,111];

//echo $suma = $v[0] + $v[1];

// for
$suma = 0;
echo "suma: " . $suma . "<br>";
echo "for....<br>";
for ($i=0; $i < count($v); $i++) {
    $suma = $suma + $v[$i];
    echo "i: " . $i . ";  ";
    echo "v[$i]: " . $v[$i] . "; ";
    echo "suma: " . $suma . "<br>";    
}
echo "...for<br>";

echo "$suma <br><br>";
 
// foreach

$suma = 0;
foreach ($v as $x) {
    echo "x: $x; suma: $suma <br>";
    $suma = $suma + $x;
}
echo "Suma con foreach: $suma <br>";


// Dos dimensiones

$w = 
[
    [688,1,6,66,221],
    [1,-12],
    [-4,0,66,666,4,3]    
];

$suma = 0;
foreach ($w as $v) {
    foreach ($v as $x) {
        $suma = $suma + $x;
    }
}
echo "Suma de array de dos dim: $suma";

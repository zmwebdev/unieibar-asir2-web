<?php

$v = [1,5,6,99,12,11,111];

//echo $suma = $v[0] + $v[1];

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

echo $suma;
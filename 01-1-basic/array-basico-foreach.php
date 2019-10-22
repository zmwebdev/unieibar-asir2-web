<?php

$v = [1,2,3];

foreach ($v as $x) {
    echo $x . "<br>";
    //$suma = $suma + $x;
}

echo "<br>--------------<br>";

$v = ["koxme","Ander","Peru"];

foreach ($v as $x) {
    echo $x . "<br>";
}


echo "<h1>2D array</h1>";

$vv = [[11,12,13],[21,22,23]];

foreach ($vv as $v) {
    foreach ($v as $x) {
        echo $x . "<br>";
    }
    echo $x . "-----------<br>";
}












echo "<br>--------------<br>";

$vv = [["koxme","Ander","Peru"],["Periko","Izar"]];

foreach ($vv as $v) {
    foreach ($v as $x) {
        echo $x . "<br>";
    }
}

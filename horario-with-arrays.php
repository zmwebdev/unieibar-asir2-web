<?php
// two dimensional array
// https://www.w3schools.com/php/php_arrays_multi.asp<?php
// https://www.w3schools.com/php/php_arrays.asp
// https://www.w3schools.com/php/php_arrays_multi.asp

$horario = array(
    array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);
// OR
$horario = [
    ["DB","DB","SIST","SIST","WEB","WEB"],  // lunes 0
    ["WEB","RED","WEB","WEB","SIST","SIST"],  // martes 1
    ["WEB","WEB","SIST","SIST","RED","RED"],  // miercoles 2
    ["WEB","WEB","SIST","SIST","RED","RED"],  // jueves 3
    ["WEB","WEB","SIST","SIST","RED","RED"]  // viernes 4
];

$horario = [
    ["DB","DB","SIST","SIST","WEB"],  // 8-9    
    ["DB","DB","SIST","SIST","WEB"],  // 9-10
    ["WEB","RED","WEB","WEB","SIST"],  // 10-11
    ["WEB","WEB","SIST","SIST","RED"],  // 11-12
    ["WEB","WEB","SIST","SIST","RED"],  // 12-13
    ["WEB","WEB","SIST","SIST","RED"]  // 13-14
];


/*
// OR with Associative Arrays
$horario2 = array(
    "Lunes" => array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    "Martes" => array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    "Miercoles" => array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    "Jueves" => array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    "Viernes" => array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);
*/


// http://php.net/manual/en/function.date.php

$dia = date("N");
$hora = date("G");

//echo $horario[$hora-8][$dia-1] . "<br><br>";

// print horario
echo "<table border='1'>";
foreach ($horario as $dia) {
    echo "<tr>";
    foreach ($dia as $asig) {
        echo "<td>";
        echo $asig . "<br>";
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";

// using for
// print horario
echo "<br><br>";
echo "<table border='1'>";
for ($i=0; $i<count($horario); $i++) {
    echo "<tr>";
    for ($j=0; $j<count($horario[$i]); $j++) {
        echo "<td>";
        echo $horario[$i][$j] . "<br>";
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";


//echo $horario2["Lunes"][0];

// Controlar los horarios de fuera de dia y hora
// Print el horario
// Where can we check PHP errors?


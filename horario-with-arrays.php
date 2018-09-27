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
    ["WEB","WEB","SIST","SIST","RED","RED"],  // lunes 0
    ["WEB","RED","WEB","WEB","SIST","SIST"],  // martes 1
    ["WEB","WEB","SIST","SIST","RED","RED"],  // miercoles 2
    ["WEB","WEB","SIST","SIST","RED","RED"],  // jueves 3
    ["WEB","WEB","SIST","SIST","RED","RED"]  // viernes 4
];


// OR with Associative Arrays
$horario2 = array(
    "Lunes" => array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    "Martes" => array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    "Miercoles" => array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    "Jueves" => array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    "Viernes" => array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);



// http://php.net/manual/en/function.date.php

$dia = date("N");
$hora = date("G");

//echo $horario[$dia-1][$hora-8];

echo $horario2["Lunes"][0];

// Controlar los horarios de fuera de dia y hora
// Print el horario
// Where can we check PHP errors?


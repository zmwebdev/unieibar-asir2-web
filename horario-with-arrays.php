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

// http://php.net/manual/en/function.date.php

$dia = date("N");
$hora = date("G");

//echo "hora : $hora";
// falta por controlar los horarios de fuera de dia y hora
// if ...
// Where can we check PHP errors?

echo $horario[$dia-1][$hora-8];

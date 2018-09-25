<?php

// https://www.w3schools.com/php/php_arrays_multi.asp
$horario = array(
    array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);

$dia = date("N");
$hora = date("G");

//echo "hora : $hora";
// falta por controlar los horarios de fuera de hora
echo $horario[$dia-1][$hora-8];

/*
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
*/
/*
$cars = array("Volvo", "BMW", "Toyota");
//echo count($cars);

for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo '<br>';
}

foreach($cars as $coche) {
    echo $coche;
    echo "<br>";
}
*/

//$cars = array("Volvo", "BMW", "Toyota");
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/*
$cars[0] = "Mercedes"; // $cars = array("Mercedes");
$cars[1] = "BMW";
$cars[2] = "Toyota";
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
*/
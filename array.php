<?php
$empty1 = [];
$empty2 = array();
$names1 = ['Harry', 'Ron', 'Hermione'];
$names2 = array('Harry', 'Ron', 'Hermione');
$status1 = [
    'name' => 'James Potter',
    'status' => 'dead'
];

$status2 = array(
    'name' => 'James Potter',
    'status' => 'dead'
);

//var_dump($status1);

echo "<br>";
echo "[0]: " . $status2[0] . "<br>";
echo "['name']: " . $status1['name'] . "<br>";
//print_r($status1);

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

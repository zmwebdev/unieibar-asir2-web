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

//
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

//
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x_value) {
    echo "Value=" . $x_value;
    echo "<br>";
}

foreach($age as $izena => $izena_value) {
    echo "Key=" . $izena . ", Value=" . $izena_value;
    echo "<br>";
}

//
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
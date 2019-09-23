<?php

// Read from the formulary (login.html)
//
$servername = "localhost:3307";
$username = "root";
$password = "root";
//$password = "";
$db = "web";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// select from user where ....
$query = "SELECT name FROM users";

//echo $query;

$result = $mysqli -> query($query);

//var_dump($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"] . "<br>";
    }
}

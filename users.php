<?php

// Read from the formulary (login.html)
//
$servername = "localhost:3307";
$username = "root";
$password = "root";
//$password = "";
$db = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// select from user where ....
$query = "SELECT name FROM users";
//echo $query;

$result = mysqli_query($conn, $query);

/* numeric array */
//$row = mysqli_fetch_array($result, MYSQLI_NUM);

while($row = mysqli_fetch_array($result)){
    echo $row[0] . "<br>";
}
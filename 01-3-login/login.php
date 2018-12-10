<?php

// Read from the formulary (login.html)
// user / password
$user = $_POST["user"];
$user_password = $_POST["password"];

/*
echo $user . "<br>";
echo $password;
*/
// connect to mysql
// http://php.net/manual/es/mysqli.construct.php
// https://www.w3schools.com/php/php_mysql_connect.asp

$servername = "localhost:3307";
$username = "root";
$password = "root";
//$password = "";
$db = "web";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// select from user where ....
$query = "SELECT name FROM users WHERE name='$user' AND password='$user_password'";

//echo $query;

$result = mysqli_query($conn, $query);

/* numeric array */
$row = mysqli_fetch_array($result, MYSQLI_NUM);
//echo $row[0];

// if ok go to loginok.html
if ($row) {
    echo "Login OK";
} else {
    //echo "Login KO";
    header('Location: '."login.html");
}
// if not ok return to login.html

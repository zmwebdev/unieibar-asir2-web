<?php

// Read from the formulary (login.html)
// user / password
$user = $_POST["user"];
$password = $_POST["password"];

// connect to mysql
// http://php.net/manual/es/mysqli.construct.php
// https://www.w3schools.com/php/php_mysql_connect.asp

$servername = "localhost:3307";
$username = "dbuser";
$password = "dbuser";
$db = "web";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// select from user where ....

// if ok go to loginok.html

// if not ok return to login.html
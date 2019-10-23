<?php

// Read from the formulary (login.html)
// user / password
$user = $_POST["user"];
$user_password = $_POST["password"];
$hash = password_hash($user_password, PASSWORD_DEFAULT);

// connect to mysql
// http://php.net/manual/es/mysqli.construct.php
// https://www.w3schools.com/php/php_mysql_connect.asp

$servername = "localhost:3307";
$username = "koxme";
$password = "pasahitza";
//$password = "";
$db = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// select from user where ....
$query = "SELECT name,pass FROM users WHERE name='$user'";

//echo $query;

$result = mysqli_query($conn, $query);

// https://www.w3schools.com/php/func_mysqli_fetch_array.asp
/* numeric array */
//$row = mysqli_fetch_array($result, MYSQLI_NUM);
//echo $row[0];

// Associative array
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if (password_verify($row["pass"], $hash)) {
    // Success!
    echo "Success!";
}
else {
    // Invalid credentials
    echo "Error!";
}


// if ok go to loginok.html
if ($row) {
    echo "Login OK";
} else {
    //echo "Login KO";
    header('Location: '."login.html");
}
// if not ok return to login.html

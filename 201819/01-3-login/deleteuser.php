<?php

// Read from the formulary (login.html)
//
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


// read from formulary
$user = $_POST["user"];
//echo $user;

// delete user
$query = "DELETE FROM users WHERE name = '$user'";
//echo $query;
$result = mysqli_query($conn, $query);

header('Location: '."users_admin.php");
<?php

$servername = "localhost";
$username = "koxme";
$password = "pasahitza";
$dbname = "asir2_crud";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//
$id = $_POST["id"];
$sql = "DELETE FROM blog WHERE id=$id";

$result = $conn->query($sql);
header("Location: delete_form.php");
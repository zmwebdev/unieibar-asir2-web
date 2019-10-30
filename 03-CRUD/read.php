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
$sql = "SELECT * FROM blog";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br> title: " . $row["title"]. "<br> info:" . $row["info"]. "<br> img: " . $row["img"] . "<br><hr/>";
    }
} else {
    echo "0 results";
}

$conn->close();

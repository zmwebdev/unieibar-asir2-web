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

// select from user where ....
$query = "SELECT name FROM users";
//echo $query;

$result = mysqli_query($conn, $query);

/* numeric array */
while($row = mysqli_fetch_array($result)){
    //echo $row[0] . "<br>";
?>

    <?php echo $row[0] ?>:<br>
    <form action="deleteuser.php" method="POST">
        <input type="hidden" name="user" value="<?php echo $row[0] ?>">
        <input type="submit" value="delete">
    </form> 
    <form action="updateuser.php" method="POST">
        <input type="hidden" name="user" value="<?php  echo$row[0] ?>">
        <input type="submit" value="update">
    </form> 

<?php
}
?>
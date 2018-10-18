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
?>
<html>
<head>
<style>
   /* https://www.w3schools.com/css/tryit.asp?filename=trycss_table_striped */ 
   table {
    border-collapse: collapse;
    width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}   
</style>
</head>
<table border=0>
<?php
while($row = mysqli_fetch_array($result)){
    //echo $row[0] . "<br>";
?>
    <tr>
    <td>
        <?php echo $row[0] ?>:
    </td>
    <td>
        <form action="deleteuser.php" method="POST">
            <input type="hidden" name="user" value="<?php echo $row[0] ?>">
            <input type="submit" value="delete">
        </form>
    </td>
    <td> 
        <form action="updateuser.php" method="POST">
            <input type="hidden" name="user" value="<?php  echo$row[0] ?>">
            <input type="submit" value="update">
        </form> 
    </td>
    </tr>
<?php
}
?>
</table>
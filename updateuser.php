<!DOCTYPE html>
<html>
<body>
<?php
$user = $_POST['user'];
?>
<b><?php echo $user; ?></b>:<br><br>
<form action="updateuser2.php" method="POST">
    <input type="hidden" name="user" value="<?php echo $user;?>">
    Password: <input type="password" name="password"><br>
    <input type="submit" value="update">
</form> 

</body>
</html>

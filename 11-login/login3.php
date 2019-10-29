<?php

//echo "login3.php";

// definir los datos
$user1 = "koxme";
$user1_password = '$2y$10$BInjbHHE4czJLgw0G8W3MOTJDCngHXn4nvyymoSJqsVvcqa7aUXW.$2y$10$0oQAjTeZJA93WT6p.Xqp8ODf5DYtFMFIDxdkk50ZX01FBmErsg6sW
';  // hash("p1")

//$user2 = "peru";
//$user2_password = "p2";


// leer desde el formulario
$user =  $_POST['user'];
$password = $_POST['password'];

if ($user == $user1){
    if (password_verify($password, $user1_password)) {
        echo "OK";
    } else{
        echo "KO";
    }
} else if ($user == $user2){
    if (password_verify($password2, $user2_password2)) {
        echo "OK";
    } else{
        echo "KO";
    }
} else {
    echo "KO";
}

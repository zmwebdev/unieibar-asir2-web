<?php

// definir los datos
$user1 = "koxme";
$user1_password = "p1";  // hash("p1")

$user2 = "peru";
$user2_password = "p2";


// leer desde el formulario
$user =  $_POST['user'];
$password = $_POST['password'];
//

if ($user == $user1){
    if ($password == $user1_password) {
        echo "OK";
    } else{
        echo "KO"
    }
} else if ($user == $user2){
    if ($password == $user2_password) {
        echo "OK";
    } else {
        echo "KO"
    }
} else {
    echo "KO";
}



//
if ($user == $user1 && $password == $user1_password) {
    echo "OK";
} else if ($user == $user2 && $password == $user2_password) {
    echo "OK";
} else {
    echo "KO";
}


//
if (($user == $user1 && $password == $user1_password) || 
    ($user == $user2 && $password == $user2_password)) {
    echo "OK";
} else {
    echo "KO";
}

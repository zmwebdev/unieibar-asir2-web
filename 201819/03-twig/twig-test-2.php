<?php
// carga todas las dependencias (twig, ...)
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);



$error = 0; // 0
$user = "Pedro";

// Render our view

if ($error == 1) {
    echo $twig->render('login.html', ['error' => $error] );
} else {
    echo $twig->render('ongietorri.html', ['user' => $user] );

}



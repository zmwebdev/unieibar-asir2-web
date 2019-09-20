<?php
// carga todas las dependencias (twig, ...)
require_once 'vendor/autoload.php';

// $loader = new Twig_Loader_Filesystem('/');
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

// Create a product list
$products = [
    [
        'name'          => 'Notebook 2',
        'description'   => 'Core i7',
        'value'         =>  800.00,
        'date_register' => '2017-06-22',
    ],
    [
        'name'          => 'Mouse',
        'description'   => 'Razer',
        'value'         =>  125.00,
        'date_register' => '2017-10-25',
    ],
    [
        'name'          => 'Keyboard',
        'description'   => 'Mechanical Keyboard',
        'value'         =>  250.00,
        'date_register' => '2017-06-23',
    ],
];

$name = "Koxme";

$error = 1; // 0

// Render our view
//echo $twig->render('index.html', ['products' => $products] );
//echo $twig->render('simple.html', ['izena' => $name] );
echo $twig->render('login.html', ['error' => $error] );



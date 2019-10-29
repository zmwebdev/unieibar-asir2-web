<?php
require 'simpleclass.php';

$s = new SimpleClass();
$s->displayvar();

$s->var = 'Hello!! <br>';
$s->displayvar();

$s2 = new SimpleClass();
$s2->var = "Kaixo <br>";
$s2->displayvar();

//var_dump($s);
?>
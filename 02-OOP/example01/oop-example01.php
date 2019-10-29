<?php
require 'simpleclass.php';

$s = new SimpleClass();
$s->displayvar();

$s->var = 'Hello!!';
$s->displayvar();

var_dump($s);
?>
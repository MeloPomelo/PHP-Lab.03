<?php

use App\MagicClass;

require 'vendor/autoload.php';

$magic = new MagicClass();

echo "<pre>";
echo $magic->__construct() . "<br/>";
echo $magic->__destruct() . "<br/>";

echo $magic->call() . "<br/>";
echo MagicClass::callStatic() . "<br/>";

echo $magic-> hidden . "<br/>";

isset($magic->a);
unset($magic->a);


echo $magic->__sleep() . "<br/>";
echo $magic->__wakeup() . "<br/>";

echo $magic->__serialize() . "<br/>";
echo $magic->__unserialize() . "<br/>";

echo $magic;


$magic(5);

$a = new MagicClass();
$a-> declared = 5;

$b = var_export($a, true);
eval('$c = ' . $b . ';');

var_dump($magic);
echo "</pre>";
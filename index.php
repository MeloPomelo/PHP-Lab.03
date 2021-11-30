<?php

use App\MagicClass;
use App\Point;
use App\Vector;

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

echo "<pre>";
$T1 = new Point(6,-9);
$V1 = new Vector(2, -3);
$V2 = new Vector(0, 0);
$V3 = new Vector(-6, -4);

echo $V1->get_length() . "<br/>";
echo $V2->get_length() . "<br/>";
echo $V3->get_length() . "<br/>";

var_dump($V1->perpendicular($V2));

$T1->move_point($V1->x, $V1->y);
echo $T1;
echo "</pre>";
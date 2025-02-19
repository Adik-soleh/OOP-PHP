<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1,Sample as Sample1, Dummy as Dummy1, };
use Data\Two\Conflict as Conflict2;
use function Helper\helpme as Help;
use const Helper\APLICATION as App;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$sample = new Sample1();
$dummy = new Dummy1();

Help();
echo App;
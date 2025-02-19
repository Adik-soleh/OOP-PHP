<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpme as Help;
use const Helper\APLICATION as App;

$conflict4 = new Conflict1;
$conflict4 = new Conflict2;

Help();

echo App . PHP_EOL;
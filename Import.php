<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpme;
use const Helper\APLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict; 

helpme();
echo APLICATION . PHP_EOL;
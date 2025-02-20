<?php

require_once "data/AnimalSelter.php";
require_once "data/Animal.php";

$catselger = new Data\CatSelter();
$cat = $catselger->adopt("Luna");

$dogselter = new Data\DogSelter();
$dog = $dogselter->adopt("Dogy");


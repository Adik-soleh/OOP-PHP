<?php


require_once "Data/Animal.php";
use Data\{Cat,Dog, Animal};

$cat = new Cat();
$cat->name = "Moli";
$cat->run();

$dog = new Dog();
$dog->name = "Dogy";
$dog->run();

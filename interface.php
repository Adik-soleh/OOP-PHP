<?php


require_once "Data/Car.php";
use Data\Avanza;

$car = new Avanza ();
$car->drive();
echo $car->getBrand();
echo "Is Maintenance : ", $car->isMaintenance() . PHP_EOL;
echo  "Tire : ",$car->getTire();



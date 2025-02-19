<?php

require_once "data/Person.php";

$adi = new Person();
$adi->name = "adi";
$adi->sayHello("Dewi");

$dewi = new Person();
$dewi->name = "dewi";
$dewi->sayHello(null);
$dewi->info();
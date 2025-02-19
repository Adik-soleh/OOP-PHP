<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Adi";
$manager->sayHello("Dewi");

$vp = new VicePresident();
$vp->name = "Dewi";
$vp->sayHello("Adi");

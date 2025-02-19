<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Adi";
$manager->sayHello("Dewi");

$vp = new VicePresident() ;
$vp->name ="Dewi" ;
$vp->sayHello("ADi");

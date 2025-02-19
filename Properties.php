<?php
require_once "data/Person.php";

$person = new Person();
$person -> name = "Adi";
$person -> address = "Banjar";
$person -> country = "Indo";

var_dump($person);

$person2 = new Person();
$person2 -> name = "Dewi";
$person2 -> address = "Pandeglang";

var_dump($person2);
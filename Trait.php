<?php

require_once "Data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Adi");
$person->hello("Dewi");
$person->name = "Adit";
$person->run();

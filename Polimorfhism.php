<?php

require_once "Data/Programer.php";

$company = new Company();
$company->programer = new Programer("ADi");
var_dump($company);

$company->Programer = new BackendProgramer("ADI");
var_dump($company);

$company->Programer = new FrontEndProgramer("ADI");
var_dump($company);

sayHelloProgramer(new Programer("Eko"));
sayHelloProgramer(new BackendProgramer("Fajar"));
sayHelloProgramer(new FrontEndProgramer("Adi"));
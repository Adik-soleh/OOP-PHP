<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "ADI";
$student1->value = 1000;
$student1->setSample(sample: "XXX");

$student2 = clone $student1;
$student2->id = "2";
$student2->name = "ADAM";
$student2->value = 2000;

var_dump(value: $student1);   
var_dump(value: $student2);

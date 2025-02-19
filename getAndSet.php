<?php

require_once "Data/Category.php";

$category = new Category();
$category->setName(" ");
$category->setExpensive(true);

echo "Category : ", $category->getName() . PHP_EOL;
echo "Expansive : ", $category->isExpensive() . PHP_EOL;
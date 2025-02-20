<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name .PHP_EOL;
MathHelper::$name = "Adi" . PHP_EOL;
echo MathHelper::$name;

$result = MathHelper::sum(2,12,12,12,3,21);
echo "Result : $result " . PHP_EOL;


<?php

$array = [
    "userName" => "Adi21",
    "email" => "Adi@gmail.com",
    "password" => "Soleh123456",
];

$object = (object) $array;

var_dump(value: $object);

echo "UserName : $object->userName" . PHP_EOL;
echo "Email : $object->email" . PHP_EOL;
echo "Password : $object->password" . PHP_EOL;

$array2 = (array) $object;
var_dump(value: $array2);
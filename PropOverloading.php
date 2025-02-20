<?php

class Zero {
    private array $property = [];

    // public string $fristName = "eko";
    public function __get($name)
    {
        echo "Acess Property $name " . PHP_EOL;
        return "CONTOh";
    }

    public function __set($name, $value)
    {
        echo "Set property $name with $value" . PHP_EOL;
    }
}

$zero = new Zero();

$zero->fristName = "Adi" . PHP_EOL;
$zero->lastNAme = "soleh" . PHP_EOL;
$zero->midleName . PHP_EOL;
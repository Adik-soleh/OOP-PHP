<?php

class Person
{
    const AUTHOR = "ADI GANTENG";
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name " . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;  
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
    
}
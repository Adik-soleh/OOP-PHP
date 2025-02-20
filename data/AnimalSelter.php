<?php

namespace Data;

require_once "data/Animal.php";

interface AnimalSelter
{
    function adopt(string $name) : Animal;
}

class CatSelter implements AnimalSelter
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;

        return $cat;
    }

}

class DogSelter implements AnimalSelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;

        return $dog;
    }
}

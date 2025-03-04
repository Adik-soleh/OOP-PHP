<?php

namespace Data\Traits;
trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "GoodBye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function goodBye(?string $name): void {
        echo "Good Bye In Person " . PHP_EOL;
    }
    public function hello(?string $name): void {
        echo "Hello In Person " . PHP_EOL;
    }
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun ;
}

class Person extends ParentPerson
{
    use All;
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }


}
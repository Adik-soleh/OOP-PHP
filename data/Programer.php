<?php

class Programer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgramer extends Programer{}
class FrontEndProgramer extends Programer{}

class Company {
    public Programer $programer;
}

function sayHelloProgramer(Programer $programer)
{
    if($programer instanceof BackendProgramer) {
        echo "Hello Backend Programer $programer->name" . PHP_EOL;
    } else if ($programer instanceof FrontEndProgramer) {
        echo "Hello Frontend Programer $programer->name" . PHP_EOL;
    } else if ($programer instanceof Programer) {
        echo "Hello Programer $programer->name" . PHP_EOL;
    }
}
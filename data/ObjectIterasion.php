<?php

class Data implements IteratorAggregate
{
    var string $frist = "Frist";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    public function getIterator(): Traversable
    {
        $array = [
            "frist" => $this->frist,
            "second" => $this->second,
            "third" => $this->third,
            "fort" => $this->forth,
        ];
        return new ArrayIterator($array);
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value " . PHP_EOL;
}
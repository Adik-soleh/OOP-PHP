<?php

class Data {
    var string $frist = "Frist";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value ". PHP_EOL;
}
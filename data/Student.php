<?php

class Student {
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __tostring()
    {
        return "Student Id: $this->id, nsame: $this->name, value: $this->value";
    }

    public function __debugInfo():array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "authot" => "Adi",
            "version" => "1.0.0"
        ];
    }
}
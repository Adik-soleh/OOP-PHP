<?php

class Produk {
    protected string $bankName;
    private string $name;
    private int $price;

    public function __construct(string $name, int $price, string $bankName) 
    {
        $this->name = $name;
        $this->price = $price;
        $this->bankName = $bankName;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}

class ProdukDummy extends Produk{
    public function infoBank() 
    {
        echo "Your Bank Name $this->bankName";
    }
}
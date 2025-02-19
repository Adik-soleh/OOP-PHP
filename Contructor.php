<?php

class Produk {
    public $judul = "Judul";
    public $penulis = "Penulis";
    public $penerbit = "Penerbit";
    public $harga = 0;

    public function __construct($judul,$penulis,$penerbit,$harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel() {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk("Naruto", "Adi Keren", "DW", 200000);

echo "Komik : " . $produk1->getLabel();
 
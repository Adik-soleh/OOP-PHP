<?php

class Produk {
    public $judul = "Judul";
    public $penulis = "Penulis";
    public $penerbit = "Penerbit";
    public $harga = 0;
    public $jumlahHalaman = 0;
    public $waktuMain = 0;
    public $tipe = "tipe";

    public function __construct($judul,$penulis,$penerbit,$harga, $jumlahHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    public function getLabel() {
        return "$this->penerbit $this->penulis";
    }
    
    public function getAllInfoProduk() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) , {$this->jumlahHalaman} {$this->waktuMain}" ;
        if($this->tipe == "KOMIK") {
            $str .= "{$this->jumlahHalaman} halaman.";
        }else if ($this->tipe == "GAME") {
            $str .= "{$this->waktuMain} jam.";
        }

        return $str;    
    }

}

$produk1 = new Produk("Naruto", "Adi Keren", "DW", 200000,100, 0, "KOMIK");
$produk2 = new Produk("Kota-Kota", "ADIGAMING", "DW", 50000, 0, 50, "GAME");

echo  $produk1->getLabel() . PHP_EOL;
echo  $produk2->getLabel() . PHP_EOL;
echo  $produk2->getAllInfoProduk() . PHP_EOL;
echo  $produk1->getAllInfoProduk() . PHP_EOL;

 
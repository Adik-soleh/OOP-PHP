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
};

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Adi Keren", "DW", 200000);
echo "Komik : " . $produk1->getLabel() . PHP_EOL;

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

 
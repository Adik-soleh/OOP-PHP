<?php

require_once "Data/Produk2.php";

$product = new Produk("Apple", 3000, "MANDIRI");
$productDummy = new ProdukDummy("Anggur", 30000, "BCA");

echo "Buah : ", $product->getName() . PHP_EOL;
echo "Harga: ", $product->getPrice() . PHP_EOL;
echo "BANK Info: ", $productDummy->infoBank() . PHP_EOL;
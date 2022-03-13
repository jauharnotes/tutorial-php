<?php

class Produk {
    public $harga = 200000;
    public function __set($name, $value)
    {
        echo "Maaf property '$name' tidak tersedia dan tidak bisa diisi '$value'" . PHP_EOL;
    }
}

$buyNow = new Produk();
$buyNow->merek = "Logitech";
$buyNow->tipe = "Mouse";
echo $buyNow->harga . PHP_EOL;
<?php

class Produk {
    public $merek = "Swallow" . PHP_EOL;
    public function __get($name)
    {
        return "Maaf property '$name' tidak terdefinisi" . PHP_EOL;
    }
}

$buyProduk = new Produk();
echo $buyProduk->merek;
echo $buyProduk->harga;
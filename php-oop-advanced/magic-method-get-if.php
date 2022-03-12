<?php

class Produk {
    public function __get($name)
    {
        if ($name == "merek") {
            $hasil = "Logitech";
        } else if ($name == "tipe") {
            $hasil = "Mouse";
        } else {
            $hasil = "Maaf property '$name' tidak terdefinisi";
        }
        return $hasil;
    }
}

$buyProduk = new Produk();
echo $buyProduk->merek . PHP_EOL;
echo $buyProduk->tipe . PHP_EOL;
echo $buyProduk->harga . PHP_EOL;
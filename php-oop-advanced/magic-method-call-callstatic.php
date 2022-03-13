<?php

class Produk {
    public function __call($name, $arguments)
    {
        echo "Maaf method $name dengan argument " . implode(", ", $arguments);
        echo " tidak tersedia" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Maaf method static $name dengan argument " . implode(", ", $arguments);
        echo " tidak tersedia" . PHP_EOL;
    }
}

$buyProduk = new Produk();
$buyProduk->tambah(3, 7, 9);

Produk::tambah(3, 7, 9);
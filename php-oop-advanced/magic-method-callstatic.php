<?php

class Produk {
    public static function __callStatic($name, $arguments)
    {
        echo "Maaf method static $name dengan argument " . implode(", ", $arguments);
        echo " tidak tersedia" . PHP_EOL;
    }
}

Produk::tambah(3, 7, 9);
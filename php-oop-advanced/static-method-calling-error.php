<?php

class Produk {
    public function __call($name, $arguments)
    {
        echo "Maaf method $name dengan argument " . implode(", ", $arguments);
        echo " tidak tersedia" . PHP_EOL;
    }
}

Produk::tambah(3, 7, 9);
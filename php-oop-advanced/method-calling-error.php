<?php

class Produk {
    public function tambah($a,$b,$c) {
        echo "Hasil = " . ($a + $b + $c) . PHP_EOL;
    }
    public function __call($name, $arguments)
    {
        echo "Maaf method '$name' dengan argument " . implode(", ", $arguments);
        echo " tidak tersedia" . PHP_EOL; 
    }
}

$buyNow = new Produk();
$buyNow->tambah(3, 6, 8);
$buyNow->setMerek("Xiomi", "Vivo", "Oppo");
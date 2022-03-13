<?php

class Produk {
    public function __set($name, $value)
    {
        $this->$name = strtoupper($value);
    }
}

$buyNow = new Produk();
$buyNow->merek = "Logitech" . PHP_EOL;
$buyNow->harga = 300000 . PHP_EOL;
$buyNow->jenis = "Mouse" . PHP_EOL;

echo $buyNow->merek;
echo $buyNow->harga;
echo $buyNow->jenis;
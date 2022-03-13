<?php

class Produk {
    public $merek;
    public function __set($name, $value)
    {
        $this->$name = strtoupper($value);
    }
}

$buyNow = new Produk();
$buyNow->merek = "Logitech" . PHP_EOL; // skipp process setter
$buyNow->jenis = "Mouse" . PHP_EOL;

echo $buyNow->merek;
echo $buyNow->jenis;
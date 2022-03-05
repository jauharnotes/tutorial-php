<?php

class Produck
{
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis, $merek, $stok)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

$produk1 = new Produck("Laptop", "Apple", 40);
$produk2 = new Produck("Laptop", "Lenovo", 50);

print_r($produk1);
print_r($produk2);
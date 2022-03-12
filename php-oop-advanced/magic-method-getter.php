<?php

class Produk {
    private $merek = "Logitech";
    private $harga = 150000;
    private $tipe = "Mouse";

    public function __get($name)
    {
        if ($name == "merek") {
            $hasil = strtoupper($this->merek) . PHP_EOL;
        } else if ($name == "harga") {
            $hasil = "Rp. " . number_format($this->harga,2,",",".") . PHP_EOL;
        } else if ($name == "tipe") {
            $hasil = "Tipe produk: " . $this->tipe . PHP_EOL;
        } else {
            $hasil = "Maaf property '$name' tidak terdefinisi";
        }
        return $hasil;
    }
}

$beliProduk01 = new Produk();
echo $beliProduk01->merek;
echo $beliProduk01->harga;
echo $beliProduk01->tipe;
echo $beliProduk01->warna;
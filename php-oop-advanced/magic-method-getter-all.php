<?php

class Produk {
    private $merek = "Logitech";
    private $jenis = "Mouse";

    public function __get($name)
    {
        if ($name == "merek" || $name == "jenis") {
            return strtoupper($this->$name) . PHP_EOL;
        } else {
            return "Maaf property '$name' tidak terdefinisi";
        }
    }
}

$buyNow = new Produk();
echo $buyNow->merek;
echo $buyNow->jenis;
echo $buyNow->harga;
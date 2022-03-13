<?php

class Produk {
    private $merek;
    private $harga;

    public function __set($name, $value)
    {
        if ($name == "merek") {
            if (is_string($value)) {
                $this->$name = $value;
            } else {
                echo "Error: merek harus berbentuk string" . PHP_EOL;
            }
        } else if ($name == "harga") {
            if (is_int($value)) {
                $this->$name = $value;
            } else {
                echo "Error: merek harus berbentuk number" . PHP_EOL;
            }
        } else {
            echo "Maaf property '$name' tidak tersedia" . PHP_EOL;
        }
    }
}

$buyNow = new Produk();
$buyNow->merek = "Logitech";
$buyNow->harga = 300000;

// $buyNow = new Produk();
// $buyNow->merek = 300000;
// $buyNow->harga = "mahal";
// $buyNow->tipe = "Mouse";

print_r($buyNow);
<?php

class Produk
{
    public $merek = "Sharp";
    public $stok = 20;

    public function cekStok() {
        return "Sisa stok: " . $this->stok . PHP_EOL;
    }
}

class Televisi extends Produk
{
    public $jenis = "Televisi";

    public function cekStokTelevisi()
    {
        return $this->jenis . " " . $this->merek . ", " . $this->cekStok() . PHP_EOL;
    }

}

class TelevisiLCD extends Televisi
{
    public $tipe = "LCD";

    public function cekStokTelevisiLCD()
    {
        return $this->tipe . " " . $this->cekStokTelevisi() . PHP_EOL;
    }
}

// $produk1 = new Televisi();
// echo $produk1->merek . PHP_EOL;
// echo $produk1->stok . PHP_EOL;
// echo $produk1->cekStokTelevisi();

// $produk1 = new TelevisiLCD();
// echo $produk1->tipe . PHP_EOL;
// echo $produk1->cekStokTelevisiLCD();


class Produk2
{
    public $sku;
    public $stok;
}

class Laptop extends Produk2
{
    public $ukuranLayar;
}

class MesinCuci extends Produk2
{
    public $kapasitas;
}

class Speaker extends Produk2
{
    public $konfigirasi;
}

$produk02 = new Laptop();
$produk03 = new MesinCuci();
$produk04 = new Speaker();

var_dump(is_a($produk02, 'Produk2')); // true
var_dump(is_a($produk02, 'Laptop')); // true
var_dump(is_a($produk03, 'Produk2')); // true
var_dump(is_a($produk03, 'Laptop')); // false
var_dump(is_a($produk04, 'Speaker')); // true
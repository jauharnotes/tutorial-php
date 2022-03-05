<?php

class Produck
{
    public $jenis;
    public $merek;

    public function pesanProduk()
    {
        return $this->jenis . " " . $this->merek . " dipesan..." . PHP_EOL;
    }
}

$produk1 = new Produck();
$produk1->jenis = "Televisi";
$produk1->merek = "Samsung";

$produk2 = new Produck();
$produk2->jenis = "Radio";
$produk2->merek = "Polytron";

print_r($produk1->pesanProduk());
print_r($produk2->pesanProduk());

class Produk2
{
    public $jenis;
    public $merek;
    public $stok;

    function pesanProduk()
    {
        return $this->stok -= 1 . PHP_EOL;
    }

    function borongProduk(int $jumlah= 10)
    {
        if ($jumlah > 10) {
            echo "Minimal borong 10 produk" . PHP_EOL;
        } else {
            echo "Stok berhasil ditambah " . PHP_EOL;
            return $this->stok -= $jumlah . PHP_EOL;
        }
    }

    function cekStok()
    {
        return "Jumlah stok saat ini $this->merek: " . $this->stok . PHP_EOL;
    }

    function tambahStok(int $jumlah = 12) 
    {
        $totalStok = $this->stok + $jumlah;
        if ($totalStok > 100) {
            echo "Maaf, stok sudah penuh. Penambahan stok dibatalkan" . PHP_EOL;
        } else if ($jumlah < 12) {
            echo "Minimal 12 barang untuk penambahan barang" . PHP_EOL;
        } else {
            $this->stok = $totalStok . PHP_EOL;
        }
    }
}

$beliProduk1 = new Produk2();
$beliProduk1->jenis = "Laptop";
$beliProduk1->merek = "Apple";
$beliProduk1->stok = 31;

$beliProduk2 = new Produk2();
$beliProduk2->jenis = "Laptop";
$beliProduk2->merek = "Lenovo";
$beliProduk2->stok = 50;

$beliProduk3 = new Produk2();
$beliProduk3->jenis = "Laptop";
$beliProduk3->merek = "Dell";
$beliProduk3->stok = 60;

var_dump($beliProduk1->pesanProduk());
var_dump($beliProduk2->pesanProduk());
var_dump($beliProduk3->borongProduk(10));

// menambah stok
var_dump($beliProduk1->tambahStok(5));

var_dump($beliProduk1->cekStok());
var_dump($beliProduk2->cekStok());
var_dump($beliProduk3->cekStok());
<?php

abstract class Barang
{
    private $stok = 200;
    abstract public function cekHarga($jumlah);

    public function cekStok() {
        return $this->stok;
    }
}

class Monitor extends Barang
{
    public function cekHarga($jumlah)
    {
        return 30000  * $jumlah . PHP_EOL;
    }
}

class Keyboard extends Barang
{
    public function cekHarga($jumlah)
    {
        return 25000 * $jumlah . PHP_EOL;
    }
}

$product01 = new Monitor();
echo $product01->cekHarga(2);

$product01 = new Keyboard();
echo $product01->cekHarga(3);

echo $product01->cekStok();

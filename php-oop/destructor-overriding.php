<?php

class Produk
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

    public function __destruct()
    {
        unset($this->jenis, $this->merek, $this->stok);
        echo "Property class Produk selesai dihapus..." . PHP_EOL;
    }
}

class Televisi extends Produk
{
    public $ukuranLayar;
    public function __construct($jenis, $merek, $stok, $ukuranLayar)
    {
        $this->ukuranLayar = $ukuranLayar;
        parent::__construct($jenis, $merek, $stok);
    }

    public function __destruct()
    {
        unset($this->ukuranLayar);
        echo "Property class Televisi selesai dihapus..." . PHP_EOL;
        parent::__destruct();
    }
}

$beli = new Televisi("Televisi", "Samsung", 30, 32);
print_r($beli);
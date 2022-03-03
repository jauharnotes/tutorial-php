<?php
/*
class Produk
{
    public function hello()
    {
        return "Ini dari Produk";
    }
}

class Laptop extends Produk
{
    public function hello()
    {
        return "Ini dari Laptop";
    }
}

$beli = new Laptop();
echo $beli->hello();
*/

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
}

class Televisi extends Produk
{
    public $ukuranLayar;
    public function __construct($jenis, $merek, $stok, $ukuranLayar)
    {
        $this->ukuranLayar = $ukuranLayar;
        parent::__construct($jenis, $merek, $stok);
    }
}

$beli = new Televisi("Televisi", "Samsung", 30, 32);
print_r($beli);
<?php

class Produck
{
    private $merek;
    private $stok;
    private $sku;

    private function setMerek($merek)
    {
        if (is_string($merek)) {
            return $this->merek = $merek;
        } else {
            die ("Error: merek harus string" . PHP_EOL);
        }
    }

    private function setStok($stok)
    {
        if (is_int($stok) && ($stok > 0)) {
            return $this->stok = $stok;
        } else {
            die ("Error: stok harus angka bulat" . PHP_EOL);
        }
    }

    private function setSku($sku)
    {
        if (preg_match("/^[A-Z]{3}[0-9]{3}$/", $sku)) {
            return $this->sku = $sku;
        } else {
            die ("Error: sku harus 6 digit (3 huruf dan 3 angka), misal AAA001" . PHP_EOL);
        }
    }

    public function __construct($merek, $stok, $sku)
    {
        $this->setMerek($merek);
        $this->setStok($stok);
        $this->setSku($sku);
    }

    public function getMerek()
    {
        return strtoupper($this->merek);
    }

    public function getStok()
    {
        return $this->stok;
    }

    public function getSku()
    {
        return $this->sku;
    }
}

$produck = new Produck("Aplle", 10, "BBA003");
echo "Stok produk " . $produck->getMerek() . " (" . $produck->getSku() . ")" . " : " . $produck->getStok() . PHP_EOL;

$produck2 = new Produck("Lenovo", 20, "ABA002");
echo "Stok produk " . $produck2->getMerek() . " (" . $produck2->getSku() . ")" . " : " . $produck2->getStok() . PHP_EOL;

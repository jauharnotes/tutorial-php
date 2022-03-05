<?php

class Produks
{
    public $merek;

    public function Beli()
    {
        return "Ini adalah Produk" . PHP_EOL;
    }
}

$produk = new Produks();
var_dump($produk->Beli());
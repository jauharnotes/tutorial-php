<?php

/*
class Produks
{
    private $merek;

    private function hello()
    {
        return "Ini adalah Produk" . PHP_EOL;
    }
}

$produk = new Produks();
var_dump($produk->merek); // error
var_dump($produk->hello()); // error
*/

class Produck
{
    private $merek;

    public function setMerek($merek)
    {
        $this->merek = $merek;
    }

    public function getMerek()
    {
        return $this->merek;
    }
}

$produck = new Produck();
$produck->setMerek("Aplle");
var_dump($produck->getMerek());
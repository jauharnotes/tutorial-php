<?php

class Produck
{
    protected $merek = "Asus";

    protected function hello()
    {
        return "Ini adalah Produck ";
    }
}

class Laptop extends Produck
{
    public function helloLaptop()
    {
        return $this->hello() . $this->merek . PHP_EOL;
    }
}

$produk = new Laptop();
var_dump($produk->helloLaptop());

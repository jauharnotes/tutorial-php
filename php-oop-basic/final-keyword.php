<?php

final class Produks
{
    final public function hello()
    {
        return "Ini dari Produk..." . PHP_EOL;
    }
}

/*
// error
class Laptop extends Produks
{
    public function hello() // error
    {
        return "Ini dari Laptop..." . PHP_EOL;
    }
}

$beliProduk = new Laptop();
var_dump($beliProduk->hello());
*/
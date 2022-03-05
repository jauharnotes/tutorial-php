<?php

class Product
{
    public $hargaUSD = 15000;
    private const KURSUSD = 15000;

    public function hargaIDR(){
        return $this->hargaUSD * self::KURSUSD;
    }
}

Product::$hargaUSD = 14000;
echo Product::$hargaUSD;

// Product::$KURSUSD = 14000;
// echo Produck::$KURSUSD;

// $buy = new Product();
// $buy->hargaUSD = 15;
// $buy->KURSUSD = 14000;
// var_dump($buy->hargaIDR());
<?php

class Product
{
    public static $totalProduct = 50 . PHP_EOL;

    public static function cekProduct()
    {
        return "Total Product ada " . self::$totalProduct . PHP_EOL;
    }
}

class Blender extends Product
{
    
}

// $buyProduct = new Product();
// var_dump($buyProduct->$totalProduct); // error
echo Product::$totalProduct;
echo Blender::$totalProduct;
echo Product::cekProduct();
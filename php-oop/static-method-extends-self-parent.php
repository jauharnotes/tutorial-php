<?php

class Product
{
    private static $totalProduct = 100;

    public static function cekProduct()
    {
        return "Total Product ada " . self::$totalProduct;
    }
}

class Blender extends Product
{
    public function cekBlender()
    {
        return self::cekProduct() . ", termasuk 3 jenis Blender" . PHP_EOL;
    }
}

class HairDryer extends Product
{
    public function cekHairDrayer()
    {
        return parent::cekProduct() . ", termasuk 5 jenis Hair Dryer" . PHP_EOL;
    }
}

class Mixer extends Product
{
    public function cekMixer()
    {
        return Product::cekProduct() . ", termasuk 2 jenis Miker" . PHP_EOL;
    }
}

$product01 = new Blender();
echo $product01->cekBlender();

$product02 = new HairDryer();
echo $product02->cekHairDrayer();

$product03 = new Mixer();
echo $product03->cekMixer();

// static increment
class Product2
{
    private $totalProduct = 0;

    public function __construct()
    {
        $this->totalProduct++;
        echo "class Product2 dibuat, total product = " . $this->totalProduct . PHP_EOL;
    }
}

$productA = new Product2();
$productB = new Product2();
$productC = new Product2();
<?php

class ProductHelper
{
    public static function cekValidSKU($sku){
        return preg_match("/^[A-Z]{3}[1-9]{3}$/", $sku);
    }

    public static function cekValidMerek($merek){
        $semuaMererk=["Apple", "LG", "Sony", "Philips", "Sanken", "Sharp", "Sanken"];
        return in_array($merek, $semuaMererk);
    }
}

if (ProductHelper::cekValidSKU("AAA545")) {
    echo "SKU AAA545 valid" . PHP_EOL;
}

if (ProductHelper::cekValidSKU("AAa545")) {
    echo "SKU AAa545 valid" . PHP_EOL;
}

if (ProductHelper::cekValidMerek("Sharp")) {
    echo "Merek Sharp tersedia" . PHP_EOL;
}

if (ProductHelper::cekValidMerek("Apple")) {
    echo "Merek Apple tersedia" . PHP_EOL;
}

if (ProductHelper::cekValidMerek("Asus")) {
    echo "Merek Asus tersedia" . PHP_EOL;
}
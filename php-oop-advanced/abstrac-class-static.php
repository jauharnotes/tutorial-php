<?php

abstract class Barang
{
    public static $totalProduk = 100;

    public static function cekProduks() {
        return "Total Produk ada " . self::$totalProduk;
    }
}

echo Barang::$totalProduk . PHP_EOL;
echo Barang::cekProduks();
<?php

class Produk {
    public $merek = "Sony";
    public $stok;
    public $tipe = "";
}

$buyProduk = new Produk();
var_dump(isset($buyProduk->merek));
var_dump(isset($buyProduk->stok));
var_dump(isset($buyProduk->tipe));

var_dump(empty($buyProduk->merek));
var_dump(empty($buyProduk->stok));
var_dump(empty($buyProduk->tipe));
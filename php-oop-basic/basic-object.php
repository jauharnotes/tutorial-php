<?php

include_once "basic-class.php";

$televisi = new Product();
$radio = new Product();

// mengisi nilai ke dalam property
$televisi -> sku = "001";
$televisi -> merek = "LG";
$televisi -> harga = 10000000;

$radio -> sku = "002";
$radio -> merek = "Samsung";
$radio -> harga = 100000;

var_dump($televisi);
var_dump($radio); 
print_r($radio);
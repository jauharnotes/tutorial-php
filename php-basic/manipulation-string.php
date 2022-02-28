<?php

// dot operator
$name = "Jauharuddin";

echo "Nama: " . $name . PHP_EOL;
echo "Nilai: " . 100 . "\n";

// konversi type data
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.50";
var_dump($valueFloat);

// mengakses karakter
$book = "sapies";
echo $book[0] . PHP_EOL;
echo $book[1] . PHP_EOL;
echo $book[2] . PHP_EOL;
echo $book[3] . PHP_EOL;
echo $book[4] . PHP_EOL;
echo $book[5] . PHP_EOL;

// variable parsing
$age = 20;
echo "Hello, $name usia saya sekarang $age tahun" . PHP_EOL;

// curly brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;
<?php

// menggunakan single quote
echo 'Nama: ';
echo 'Jauharuddin';

// menggunakan double quote
echo "Nama: ";
echo "Eko\t Kurniawan\t Khannedy\n";
echo "\n";

// Multiline string
// Haredoc
$name = "Jauhar";
echo <<<PARAHGRAF
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quopte" juga $name \n
PARAHGRAF;

// Multiline string
// Nowdoc
echo <<<'PARAHGRAF'
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
PARAHGRAF;
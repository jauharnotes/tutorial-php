<?php

$result = 10 + 10; // positif
var_dump($result);

$nilai1 = 100;
$nilai2 = 3;

var_dump($nilai1 % $nilai2); // modulus

$pangkat = $nilai2 ** 2; // pangkat
var_dump($pangkat);

// operator penugasan aritmatika
$total = 0;
$money = 40000;

$fruit = 1000;
$chicken = 35000;
$orangeJuice = 1000;

$total += $fruit; // $total = $total + $fruit
$total += $chicken;
$total += $orangeJuice;
$money -= $total; // $money = $money - $total

var_dump($total);
var_dump($money);
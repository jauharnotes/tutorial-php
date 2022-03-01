<?php

// menggunakan if else biasa
$gender = "PRIA";

$hi = null;
if ($gender == "PRIA") {
    $hi = "Hi Mas Bro";
} else {
    $hi = "Hi nona";
}

echo $hi . PHP_EOL;

// mengguankan ternary operator
$hi = $gender == "PRIA" ? "Hi Mas Bro" : "Hi nona";

echo $hi . PHP_EOL;
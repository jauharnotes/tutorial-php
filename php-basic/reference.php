<?php

$name = "Johar";
$person = &$name; // reference -> $name
$person = "Juned";

echo $name . PHP_EOL;
echo $person . PHP_EOL;

function increment(int &$value) {
    $value++;
}
$value = 1;
increment($value);
// increment($value);

echo $value . PHP_EOL;

function &getValue() {
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b;
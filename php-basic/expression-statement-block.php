<?php

// contoh expression sederhana
$a = 5; // 5 adalah nilai
$b = $a; // $a adalah expression 

// contoh expression complex
function getValue()
{
    return 100;
}

$valu = getValue();

// contoh statment
$name = "Jauharuddin";
echo $name;

$date = new DateTime();

// contoh block
function runAppA($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End program" . PHP_EOL;
}
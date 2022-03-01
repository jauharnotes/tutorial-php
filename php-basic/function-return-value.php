<?php

// function return value
function add(int $first, int $last) {
    return $first * $last;
}

$result = add(10, 10);
var_dump($result);

function getFinalValue(int $value) {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$result2 = getFinalValue(70);
var_dump($result2);

// return type declarations
function sum2(int $first, int $last): int {
    return $first + $last;
}

echo sum2(20, 20) . PHP_EOL;

function getValue(int $value): string {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

echo getValue(60);
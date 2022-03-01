<?php

use LDAP\Result;

function sayHello($name) {
    echo "Hello $name". PHP_EOL;
}

sayHello("Johar");
sayHello("Juned");

// function parameter default value
function sayHi($name = "Johar") {
    echo "Hello $name" . PHP_EOL;
}

sayHi();
sayHi("Agung");

function Hello($fistName, $lastName = "Khannedy") {
    echo "Hello $fistName $lastName" . PHP_EOL;
}

Hello("Jauhar");

// type declaration
function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(10, 10);
sum("10", "10");
sum("10", 10);
sum(false, false);
sum(false, true);
sum(true, true);
// sum([], []); // error
// sum("ten", "ten"); // error

// variable-length argument list
function sumAll(...$values) {
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    // echo "Total $total" . PHP_EOL;
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);


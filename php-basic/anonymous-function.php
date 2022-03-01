<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Johar");
$sayHello("Agung");

// anonymous function sebagai argument
function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Johar", function(string $name) {
    return strtoupper($name);
});

// mengakses variable di luar closure
$firstName = "Johar";
$lastName = "Uddin";

$sayHelloJohar = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloJohar();

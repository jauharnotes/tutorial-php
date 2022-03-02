<?php

$name = "Johar"; // Global scope

function sayHi() {
    // local scope
    global $name; // global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL; // global keyword option
}

sayHi();
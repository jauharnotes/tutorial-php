<?php

$name = "Johar"; // Global scope

function sayHi() {
    // local scope
    echo $name . PHP_EOL;// error
}

sayHi();
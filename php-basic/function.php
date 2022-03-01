<?php

function sayHi() {
    echo "Hello Function" . PHP_EOL;
}

sayHi();
sayHi();

// lokasi function
$buat = true;

if ($buat) {
    function hi() {
        echo "Hi". PHP_EOL;
    }
}

hi();
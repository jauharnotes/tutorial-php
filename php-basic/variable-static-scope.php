<?php

function counter() {
    static $count = 1;

    echo "Counter: $count" . PHP_EOL;
    $count++;
}

counter();
counter();
counter();
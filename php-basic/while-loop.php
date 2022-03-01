<?php

$counter = 100;
while ($counter <= 10) {
    echo "Hello While Loop: " . $counter . PHP_EOL;
    $counter++;
}

// syntax alternative while loop
while ($counter <= 10) :
    echo "Hello While Lopp: " . $counter . PHP_EOL;
    $counter++;
endwhile;
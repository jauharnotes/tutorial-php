<?php

// perulangan tanpa henti
// for (; ;) {
//     echo "Hello for loop" . PHP_EOL;
// }

// perulangan dengan kondisi
$counter = 1;
for (; $counter <= 10;) {
    echo "Hello For Loop: $counter" . PHP_EOL;
    $counter++;
}

// perulangan dengan init statement
for ($count = 1; $count <= 10;) {
    echo "Hello For Loop: $count" . PHP_EOL;
    $count++;
}

// perulangan dengan post statement
for ($count = 1; $count <= 10; $count++) {
    echo "Hello For Loop: $count" . PHP_EOL;
}

// syntax alternative for loop
for ($count = 1; $count <= 10; $count++) :
    echo "Hello For Loop: $count" . PHP_EOL;
endfor;
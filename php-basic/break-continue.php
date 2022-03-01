<?php

$counter = 1;

// break
while (true) {
    echo "Hello Break: " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

// continue
for ($count = 1; $count <= 20; $count++) {
    if ($count % 2 == 0) {
        continue;
    }
    echo "Hello Continie " .$count . PHP_EOL;
}
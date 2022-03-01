<?php

// menggunakan perulangan for loop
$names = ["Johar", "Agung", "Juned"];

for ($i = 0; $i < count($names); $i++) {
    echo "Hello $names[$i]" . PHP_EOL;
}

// menggunakan for each
foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

// for each dengan key
$person = [
    "first_name" => "Johar",
    "middle_name" => "Uddin",
    "last_name" => "Khannedy"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
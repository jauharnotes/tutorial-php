<?php

$data = [1,2,3,4,5,6,7,8,9,10];

var_dump(array_map(fn($data) => $data * 2, $data)); // Mengubah semua data array dengan callback

rsort($data); // mengurutkan array terbalik
var_dump($data);

sort($data); // mengurutkan array
var_dump($data);

var_dump(array_keys($data)); // Mengambil semua keys milik array
var_dump(array_values($data)); // Mengambil semua values milik array
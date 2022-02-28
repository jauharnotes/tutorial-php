<?php

$first = [
    "first_name" => "Johar"
];

$last = [
    "last_name" => "Uddin"
];

var_dump($first + $last); // Union -> menggabungkan array

$a = [
    "first_name" => "Johar",
    "last_name" => "Uddin"
];

$b = [
    "last_name" => "Uddin",
    "first_name" => "Johar"
];

var_dump($a == $b);
var_dump($a === $b);
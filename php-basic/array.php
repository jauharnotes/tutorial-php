<?php

$value = array(1,2,3,4, 7.5, "Johar");
var_dump($value);

$names = ["Johar", "Agung", "Juned"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Eko";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Johar";
var_dump($names);
var_dump(count($names));
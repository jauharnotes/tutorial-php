<?php

$name = array(
    "id" => 1,
    "name" => "Jauhar",
    "age" => "25",
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
        )
    );
    
var_dump($name);
echo $name["name"];
echo "\n";
echo $name["address"]["city"];

$name2 = [
    "id" => 2,
    "name" => "Juned",
    "age" => "23",
    "address" => [
        "city" => "Depok",
        "country" => "Indonesia"
    ]
];

var_dump($name2);
echo $name2["name"];
echo "\n";
echo $name2["address"]["country"];
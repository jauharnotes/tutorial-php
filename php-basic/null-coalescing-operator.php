<?php

// tanpa null coalescing operator
$data = [];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing' . PHP_EOL;
}

echo $action;

// menggunakan null coalescing operator
$action = $data['action'] ?? 'nothing';

echo $action;
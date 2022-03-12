<?php

echo "Kode ini berada di file: " . __FILE__ . PHP_EOL;
echo "yang berada di dalam folder: " . __DIR__ . PHP_EOL;
echo "Perintah ini berasal dari baris: " . __LINE__ . PHP_EOL;

function belajar_magic_constant() {
    return "Kode ini berada di dalam fungsi: " . __FUNCTION__;
}

echo belajar_magic_constant();
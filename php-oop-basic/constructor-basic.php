<?php

class Produck
{
    public function __construct()
    {
        echo "Constructor dijalankan..." . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Destructor dijalankan..." . PHP_EOL;
    }
}

$produck1 = new Produck();
$produck1 = null;

echo "Program selesai...". PHP_EOL;
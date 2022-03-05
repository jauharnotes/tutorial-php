<?php

abstract class Barang
{
    abstract public function cekHargas();
}

abstract class Monitor extends Barang
{
    abstract public function cekTipe();
}

class MonitorAmoled extends Monitor
{
    public function cekHargas() {
        return 10000000 . PHP_EOL;
    }
    public function cekTipe() {
        return "Moniotor Amoled";
    }
}

$buyProduct01 = new MonitorAmoled();
echo $buyProduct01->cekHargas();
echo $buyProduct01->cekTipe();
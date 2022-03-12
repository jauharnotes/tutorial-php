<?php

trait SmartElectric {
    public $internet = "Telkom Indihome";
    public function cekOS() {
        return "Androit 9.0 (Pie)";
    }
}

class SmartTV {
    use SmartElectric;
}

$buyProduk01 = new SmartTV;
echo $buyProduk01->internet . PHP_EOL;
echo $buyProduk01->cekOS() . PHP_EOL;
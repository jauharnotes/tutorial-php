<?php

trait SmartELectric {
    public function cekOS() {
        return "Android 9.0 (Pie)";
    }
    abstract public function cekProsesor();
}

class SmartTV {
    use SmartElectric;
    public function cekProsesor()
    {
        return "Snapdragon 845";
    }
}

$buyProduk01 = new SmartTV;
echo $buyProduk01->cekOS() . PHP_EOL;
echo $buyProduk01-> cekProsesor();
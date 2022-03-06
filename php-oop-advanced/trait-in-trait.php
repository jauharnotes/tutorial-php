<?php

trait SmartElectric {
    public function cekOS() {
        return "Android 9.0 (Pie)";
    }
}

trait LowWatt {
    use SmartElectric;
    public function efisiensi() {
        return $this->cekOS() . " Konsumsi daya 0.8";
    }
}

class SmartTV {
    use LowWatt;
}

$buyProduct01 = new SmartTV;
echo $buyProduct01->efisiensi();
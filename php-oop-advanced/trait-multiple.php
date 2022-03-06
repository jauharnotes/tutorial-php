<?php

trait SmartElectronic {
    public function cekOS() {
        return "Android 9.0 (Pie)";
    }
}

trait LowWatt {
    public function efisiensi() {
        return "Komsumsi daya 0.8";
    }
}

class SmartSpeaker
{
    use SmartElectronic, LowWatt;
    public function cekInfo() {
        return "Smart Speaker " . $this->cekOS() . " - " . $this->efisiensi();
    }
}

$buyProduct01 = new SmartSpeaker;
echo $buyProduct01->cekInfo();
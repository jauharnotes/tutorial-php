<?php

class Television
{
    public function cekResolusi() {
        return "FULL HD";
    }
}

trait SmartElectronic {
    public function cekOS() {
        return "Android 9.0 (Pie)";
    }
}

class SmartWatch extends Television
{
    use SmartElectronic;
    public function cekInfo()
    {
        return "Smart Watch " . $this->cekResolusi(). " - " . $this->cekOS();
    }
}

$buyProduct01 = new SmartWatch();
echo $buyProduct01->cekInfo();
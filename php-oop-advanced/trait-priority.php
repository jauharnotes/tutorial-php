<?php

class Speaker
{
    public function efisiensi() {
        return "Komsumsi daya 1.0";
    }
}

trait LowWatt {
    public function efisiensi() {
        return "Komsumsi daya 0.9";
    }
}

class SmartSpeaker extends Speaker
{
    use LowWatt;

    public function efisiensi() {
        return "Komsumsi daya 0.5";
    }
}

$buyProduct01 = new SmartSpeaker;
echo $buyProduct01->efisiensi();
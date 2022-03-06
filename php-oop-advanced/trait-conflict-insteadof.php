<?php

trait SmartElectronic {
    public function efisiensi() {
        return "Konsumsi daya 1.1";
    }
}

trait LowWatt {
    public function efisiensi() {
        return "Konsumsi daya 0.8";
    }
}

class SmartWatch {
    use SmartElectronic, LowWatt {
        SmartElectronic::efisiensi insteadof LowWatt;
        LowWatt::efisiensi as efisiensiLow;
    }
}

$buyProduct01 = new SmartWatch;
echo $buyProduct01->efisiensi() . PHP_EOL;
echo $buyProduct01->efisiensiLow();
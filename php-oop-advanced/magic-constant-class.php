<?php

trait HardCover {
    public function cekTrait() {
        $psn = "Pesan ini berasal dari method " . __METHOD__;
        $psn .= " di dalam trait " . __TRAIT__ . PHP_EOL;
        return $psn;
    }
}

class Buku {
    use HardCover;
    public function cekClass() {
        $psn = "Pesan ini berasal dari method " . __METHOD__;
        $psn .= " di dalam class " . __CLASS__;
        return $psn;
    }
}

$buyProduk01 = new Buku();
echo $buyProduk01->cekTrait();
echo $buyProduk01->cekClass();
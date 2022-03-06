<?php

interface ProductExpor {
    public function cekHargaUsd();
    public function cekNegara();
}

interface ProductMakanan {
    public function cekExpired();
}

interface ProductMakananBeku extends ProductMakanan {
    public function cekSuhuMin();
}

class Nugget implements ProductExpor, ProductMakananBeku
{
    public function cekHargaUsd() {
        return 7.5;
    }
    public function cekNegara() {
        return ["Singapura", "Malaysia", "Jepang"];
    }
    public function cekSuhuMin() {
        return -14;
    }
    public function cekExpired() {
        return "April 2024";
    }
}

$buyProduct01 = new Nugget();
echo $buyProduct01->cekHargaUsd() . PHP_EOL;
echo implode(", ", $buyProduct01->cekNegara()) . PHP_EOL;
echo $buyProduct01->cekSuhuMin() . PHP_EOL;
echo $buyProduct01->cekExpired() . PHP_EOL;

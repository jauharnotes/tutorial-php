<?php

interface ProdukEkspor {
    public function cekUsd();
    public function cekNegara();
}

interface ProdukMakanan {
    public function cekExpired();
}

interface ProdukMakananBeku {
    public function cekSuhuMin();
}

class Nugget implements ProdukEkspor, ProdukMakanan, ProdukMakananBeku
{
    public function cekUsd() {
        return 7.8 . PHP_EOL;
    }

    public function cekNegara() {
        return ["Singapura", "Malaysia", "Thailand"];
    }

    public function cekExpired() {
        return "April 2024" . PHP_EOL;
    }
    
    public function cekSuhuMin() {
        return -14 . PHP_EOL;
    }
}

class Buku implements ProdukEkspor
{
    public function cekUsd() {
        return 185 . PHP_EOL;
    }
    public function cekNegara() {
        return ["Singapura", "Malaysia", "Thailand"];
    }
}

$nugget = new Nugget();
echo $nugget->cekUsd();
echo implode(", ", $nugget->cekNegara()) . PHP_EOL;
echo $nugget->cekExpired();
echo $nugget->cekSuhuMin();

$buku01 = new Buku();
echo $buku01->cekUsd() . PHP_EOL;
echo implode(", ", $buku01->cekNegara());
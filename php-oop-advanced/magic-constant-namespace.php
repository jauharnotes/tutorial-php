<?php

namespace Duniailkom;

class Buku {
    public function cekClass() {
        $psn = "Pesan ini berasal dari class " . __CLASS__;
        $psn .= " di dalam namespace " . __NAMESPACE__;
        return $psn;
    }
}

$buyProduk01 = new Buku();
echo $buyProduk01->cekClass();
<?php

class Produk {
    public function __toString()
    {
        return "Ini berasal dari class Produk";
    }
}

$buyProduk01 = new Produk();
echo $buyProduk01;
<?php

class Produk {
    public function __toString()
    {
        return "Ini berasal dari class Produk";
    }
}

class Radio extends Produk {

}

$buyProduk = new Radio();
echo $buyProduk;

<?php

interface ProductExpor {
    public function cekHarga();
    public function cekNegara();
    public const biayaPajak = 0.5;
}

echo ProductExpor::biayaPajak;
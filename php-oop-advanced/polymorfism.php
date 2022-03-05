<?php

abstract class Books
{
    abstract public function cekJudul();
}

class Ekonomi extends Books
{
    public function cekJudul()
    {
        return "Misbiheving";
    }
}

class Bisnis extends Books
{
    public function cekJudul()
    {
        return "Disruption";
    }
}

class Novel extends Books
{
    public function cekJudul()
    {
        return "Harry Potter";
    }
}

$buku01 = new Ekonomi();
$buku02 = new Bisnis();
$buku03 = new Novel();

function showBook($book) {
    return $book->cekJudul() . PHP_EOL;
}

echo showBook($buku01);
echo showBook($buku02);
echo showBook($buku03);
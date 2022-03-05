<?php

// class Product01
// {
//     public $jenis;
//     public $merek;
//     public $stok;

//     public function __construct($jenis, $merek, $stok) {
//         $this->jenis = $jenis;
//         $this->merek = $merek;
//         $this->stok = $stok;
//     }
// }

// $buyNow01 = new Product01("Laptop", "Lenovo", 40);
// print_r($buyNow01);

class Product
{
    public function __construct(
    public $jenis,
    private $merek = "DELL",
    protected $stok = 30)
    {
        echo "Product $this->jenis dibuat" . PHP_EOL;
    }
}

$buyNow = new Product("Laptop", "Apple", 50);
$buyNow02 = new Product("Monitor");
print_r($buyNow);
print_r($buyNow02);
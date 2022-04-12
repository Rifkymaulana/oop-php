<?php

// Jualan Produk
// Komik
// Game
class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    // method adalah function yang ada di dalam kelas
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->tambah = "hahaha";
// var_dump($produk2->tambah);

// $produk3 = new Produk();
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kishimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = 40000;
// // var_dump($produk3);

// $produk4 = new Produk();
// $produk4->judul = "Nobita";
// $produk4->penulis = "Kishimoto";
// $produk4->penerbit = "Sho";
// $produk4->harga = 50000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();
// echo "<br>";
// echo "<br>";

// echo "Komik : $produk4->penulis, $produk4->penerbit";
// echo "<br>";
// echo $produk4->getLabel();
// echo "<br>";
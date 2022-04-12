<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    // method ini akan otomatis dijalankan setiap melakukan instansiasi object
    public function __construct($judul = "naruto", $penulis = "rifky", $penerbit = "gramedia", $harga = 100000)
    {
        $this->judul    = $judul;
        $this->penulis  = $penulis;
        $this->penerbit = $penerbit;
        $this->harga    = $harga;
    }
    
    // method adalah function yang ada di dalam kelas
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000);
$produk2 = new Produk("Nobita", "Kishimoto", "Sho", 69800);

echo "Komik : $produk1->penulis, $produk1->penerbit";
echo "<br>";
echo $produk1->getLabel();
echo "<br><br>";

echo "Komik : $produk2->penulis, $produk2->penerbit";
echo "<br>";
echo $produk2->getLabel();
echo "<br><br>";


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
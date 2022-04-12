<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jumlahHalaman,
           $waktuMain,
           $type;

    // method ini akan otomatis dijalankan setiap melakukan instansiasi object
    public function __construct($judul = "naruto", $penulis = "rifky", $penerbit = "gramedia", $harga = 100000, $jumlahHalaman=0, $waktuMain=0, $type)
    {
        $this->judul            = $judul;
        $this->penulis          = $penulis;
        $this->penerbit         = $penerbit;
        $this->harga            = $harga;
        $this->jumlahHalaman    = $jumlahHalaman;
        $this->waktuMain        = $waktuMain;
        $this->type             = $type;
    }
    
    // method adalah function yang ada di dalam kelas
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
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



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100, 0, "komik");
$produk2 = new Produk("Nobita", "Kishimoto", "Sho", 69800, 0, 50, "game");


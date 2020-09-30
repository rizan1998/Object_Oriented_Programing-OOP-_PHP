<?php
class CetakInforProduk9{
    // untuk mengambil semua data dalam 1 cetak produk maka dibutuhkan sebuah array yang dapat
    // menampung semua instance yang ada sehigga tidak perlu di cetak satu-satu
    // buat property baru
    public $daftarProduk = array();

    // function dibawah untuk set daftar produk baru kedalam array
    public function tambahProduk( ProdukInterface $produkInterface){
        $this->daftarProduk[] = $produkInterface;
    }

    //method cetak ini bisa menampung type data apa saja str, int, object
    // agar yang menampung class produk atau instance dari class produk saja maka tambahkan produk sebelum
    // var produk
    public function cetak(){
        // awalnya
        // $str = "Naruto | Masashi Kishimoto, Shonen Jump (Rp.300000)";
        // akhirya:
        $str = "daftar produk : <br>";

        // lalu untuk menampilkan semuanya gunakan foreach saja
        // p disini adalah object produk
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
            
        }
        return $str;

    }

}

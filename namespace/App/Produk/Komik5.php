<?php
class Komik5 extends ProdukInterface implements InforProduk{
    // jika disini ada contructor maka contructor child dulu yang dijalankan
    // jika tidak ada maka akan naik ke atas yaitu ke parent constructor yang dijalankan
    //  perilaku tersebut juga berlaku pada property dan juga method

    // buat property punya komik sendiri
    public $jmlHalaman;
    public function __construct($judul = "judul"    ,$penulis="penulis",$penerbit="penerbit",$harga="harga",$jmlHalaman = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);  
        $this->jmlHalaman = $jmlHalaman;
      }
    public function getInfoProduk(){
        // this disini adalah yang berkaitan dengan instance instance disini adalah komik jika ingin memanggil
        // method parent dengan nama method yang sama maka pemanggilan dilakukan dengan Abstract atau 
        // memanggil langsung method parentnya karena bukan sebuah instance maka tidak perlu memakai var
        $str = "Komik : {$this->getJudul()} | " . $this->getInfo() ." (Rp.{$this->getHarga()}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
    public function getInfo(){
        // komik : Naruto | masashi kishimoto, shounen jump (Rp. 30000) - 100 halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
   }

}
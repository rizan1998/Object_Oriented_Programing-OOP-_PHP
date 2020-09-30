<?php

class Game5 extends ProdukInterface implements InforProduk {
    public $waktumain;
    public function __construct($judul = "judul"    ,$penulis="penulis",$penerbit="penerbit",$harga="harga",$waktumain = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);  
        $this->waktumain = $waktumain;
    }

    public function getInfoProduk(){
        $str = "Game : {$this->getJudul()} | {$this->getInfo()} (Rp.{$this->getHarga()}) - {$this->waktumain} Jam";
        return $str;
    }
    public function getInfo(){
        // komik : Naruto | masashi kishimoto, shounen jump (Rp. 30000) - 100 halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
   }

}
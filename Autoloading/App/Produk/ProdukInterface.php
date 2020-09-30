<?php
abstract class ProdukInterface{

protected $judul,
       $penulis,
       $penerbit,
       $harga,
       $diskon = 0;

// penamaan contructor menggnuakan lambang garis bawah karena merupaka sebuah magic
// method yang dimiliki php
// construct adalah sebuah method sehingga jika ada parameter yang sama dengan property class
// maka dianggap beda karena parameter disebut sebagai variable lokal
// yang dilakukan construct saat ini adalah menerima parameter yang berfungsi untuk mengisi
// propertry property yang ada dalam kelas
// menimpa property class
// contstructor juga bisa digunakan sebagai inisialisasi nilai default

public function __construct($judul = "judul",$penulis="penulis",$penerbit="penerbit",$harga="harga"){
    // echo "hello world!";
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
}

abstract public function getInfo();

// dibawah adalah contoh setter
public function setJudul($judul){
    // jika menggunakan setter maka bisa melakukan validasi
    // if(!is_string($judul)){
    //     throw new Exeception("judul Harus string");
    // }
    $this->judul = $judul;
}

// dibawah adalah contoh getter
public function getJudul(){
    return $this->judul;
}
public function setHarga($harga){
    $this->harga = $harga;
}
public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
}

public function setPenulis($penulis){
    $this->penulis= $penulis;
}
public function getPenulis(){
    return $this->penulis;
}
public function setPenerbit($penerbit){
    $this->penerbit = $penerbit;
}
public function getPenerbit(){
    return $this->penerbit;
}

public function sayHello(){
    return "hello world!";
}


public function setDiskon($diskon){
    $this->diskon = $diskon;
}
public function getDiskon(){
    return $this->diskon;
}
public function getLabel(){
    // saat menuliskan var dalam fcntion itu artinya variable untuk fucntion itu saja
    //jika ingin mengambil var dari luar maka tambahkan this kalau tidak memakai this
    //itu sama saja membuat variable baru
    return "$this->penulis, $this->penerbit";
}
}
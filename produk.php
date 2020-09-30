<?php

//studikasus jual produk
//jual produk
//game

class Produk{

    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "0";

    // penamaan contructor menggnuakan lambang garis bawah karena merupaka sebuah magic
    // method yang dimiliki php
    public function __construct(){

    }

    public function sayHello(){
        return "hello world!";
    }
    public function getLabel(){
        // saat menuliskan var dalam fcntion itu artinya variable untuk fucntion itu saja
        //jika ingin mengambil var dari luar maka tambahkan this kalau tidak memakai this
        //itu sama saja membuat variable baru
        return "$this->judul, $this->penerbit";
    }
}

// instansiasi object
$produk1 = new Produk();

//penimpahan dari isi property sebelumnya
$produk1->judul = "naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "mobile legends";
// tambah property
$produk2->newProperty = "newProperty";
var_dump($produk2->judul, $produk2->newProperty);

$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "Massahi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$judul = $produk3->judul;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 30000;


echo "komik : $judul,$produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();
echo "<br>";
echo "<hr>";
echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();


//----------------- contructorr ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Constructor</h1>";

class ProdukConst{

    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "0";

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

    public function sayHello(){
        return "hello world!";
    }
    public function getLabel(){
        // saat menuliskan var dalam fcntion itu artinya variable untuk fucntion itu saja
        //jika ingin mengambil var dari luar maka tambahkan this kalau tidak memakai this
        //itu sama saja membuat variable baru
        return "$this->judul, $this->penerbit";
    }
}

// instansiasi object
$produkObject1 = new ProdukObject("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//penimpahan dari isi property sebelumnya
$produkObject1->judul = "naruto000";
// tambah property
$produkObject1->newProperty = "newProperty";
var_dump($produkObject1->judul, $produkObject1->newProperty);
var_dump($produkObject1);




// setelah memakai construct
$produkObject3 = new ProdukObject("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produkObject4 = new ProdukObject("Uncharted","Neil Druckmann","Sony Computer",30000);
$produkObject2 = new ProdukObject("Sagiri");

echo "<br>";
echo $produkObject3->sayHello();
echo "<br>";
echo "<hr>";
echo "Komik : " . $produkObject3->getLabel();
echo "<br>";
echo "Game : " . $produkObject4->getLabel();
echo "<br>";
echo "Komik2 : " . $produkObject2->getLabel();


//----------------- Object type ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Object type</h1>";

class ProdukObject{

    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "0";

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

    public function sayHello(){
        return "hello world!";
    }
    public function getLabel(){
        // saat menuliskan var dalam fcntion itu artinya variable untuk fucntion itu saja
        //jika ingin mengambil var dari luar maka tambahkan this kalau tidak memakai this
        //itu sama saja membuat variable baru
        return "$this->penulis, $this->penerbit";
    }
}

    //  ceritanya class ini hanya untuk menampilkan informasi seputar produknya
    //  dengan memanfaatkan object/intance atau method yang sudah dibuat maka
    // hanya perlu di panggil saja contoh
class CetakInforProduk{

    //method cetak ini bisa menampung type data apa saja str, int, object
    // agar yang menampung class produk atau instance dari class produk saja maka tambahkan produk sebelum
    // var produk
    public function cetak( produk $produk ){
        // awalnya
        // $str = "Naruto | Masashi Kishimoto, Shonen Jump (Rp.300000)";
        // akhirya:
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;

    }

}

// instansiasi object
$produkObject1 = new ProdukObject("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//penimpahan dari isi property sebelumnya
$produkObject1->judul = "naruto000";
// tambah property
$produkObject1->newProperty = "newProperty";
var_dump($produkObject1->judul, $produkObject1->newProperty);
var_dump($produkObject1);




// setelah memakai construct
$produkObject3 = new ProdukObject("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produkObject4 = new ProdukObject("Uncharted","Neil Druckmann","Sony Computer",30000);

// info produk
$infoProduk = new CetakInforProduk();

echo "<br>";
echo $produkObject3->sayHello();
echo "<br>";
echo "<hr>";
echo "Komik : " . $produkObject3->getLabel();
echo "<br>";
echo "Game : " . $produkObject4->getLabel();
echo "<br>";
echo $infoProduk->cetak($produk1);


//----------------- Inheritance ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Inheritance</h1>";

class ProdukInherit{

    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktumain,
           $tipe;

    public function getInfoLengkap(){
        // komik : Naruto | masashi kishimoto, shounen jump (Rp. 30000) - 100 halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if($this->tipe == "komik"){
            $str .= "- {$this->jmlHalaman} Halaman.";
        } else if($this->tipe == "Gambe"){
            $str .= "- {$this->watuMain} Jam.";
        }

        return $str;
    }
    
    // penamaan contructor menggnuakan lambang garis bawah karena merupaka sebuah magic
    // method yang dimiliki php
    // construct adalah sebuah method sehingga jika ada parameter yang sama dengan property class
    // maka dianggap beda karena parameter disebut sebagai variable lokal
    // yang dilakukan construct saat ini adalah menerima parameter yang berfungsi untuk mengisi
    // propertry property yang ada dalam kelas
    // menimpa property class
    // contstructor juga bisa digunakan sebagai inisialisasi nilai default

    public function __construct($tipe = "tipe", $judul = "judul",$penulis="penulis",$penerbit="penerbit",$harga="harga"){
        // echo "hello world!";
        $this->tipe = $tipe;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello(){
        return "hello world!";
    }
    public function getLabel(){
        // saat menuliskan var dalam fcntion itu artinya variable untuk fucntion itu saja
        //jika ingin mengambil var dari luar maka tambahkan this kalau tidak memakai this
        //itu sama saja membuat variable baru
        return "$this->penulis, $this->penerbit";
    }
}

    //  ceritanya class ini hanya untuk menampilkan informasi seputar produknya
    //  dengan memanfaatkan object/intance atau method yang sudah dibuat maka
    // hanya perlu di panggil saja contoh
class CetakInforProduk2{

    //method cetak ini bisa menampung type data apa saja str, int, object
    // agar yang menampung class produk atau instance dari class produk saja maka tambahkan produk sebelum
    // var produk
    public function cetak( produk $produk ){
        // awalnya
        // $str = "Naruto | Masashi Kishimoto, Shonen Jump (Rp.300000)";
        // akhirya:
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;

    }

}

// instansiasi object
$produkInherit1 = new ProdukInherit("komik","Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//penimpahan dari isi property sebelumnya
$produkInherit1->judul = "naruto000";
// tambah property
$produkInherit1->newProperty = "newProperty";
var_dump($produkInherit1->judul, $produkInherit1->newProperty);
var_dump($produkInherit1);




// setelah memakai construct
$produkInherit3 = new ProdukInherit("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produkInherit4 = new ProdukInherit("Uncharted","Neil Druckmann","Sony Computer",30000);

// info produk
$infoProduk = new CetakInforProduk2();

echo "<br>";
echo $produkInherit3->sayHello();
echo "<br>";
echo "<hr>";
echo "Komik : " . $produkInherit3->getLabel();
echo "<br>";
echo "Game : " . $produkInherit4->getLabel();
echo "<br>";
echo $infoProduk->cetak($produk1);
echo "<br>";
echo $produkInherit1->getInfoLengkap();



//----------------- Inheritance 2 ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Inheritance 2</h1>";

class ProdukInheritance{

    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktumain;

    public function getInfoProduk(){
        // komik : Naruto | masashi kishimoto, shounen jump (Rp. 30000) - 100 halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
    
    // penamaan contructor menggnuakan lambang garis bawah karena merupaka sebuah magic
    // method yang dimiliki php
    // construct adalah sebuah method sehingga jika ada parameter yang sama dengan property class
    // maka dianggap beda karena parameter disebut sebagai variable lokal
    // yang dilakukan construct saat ini adalah menerima parameter yang berfungsi untuk mengisi
    // propertry property yang ada dalam kelas
    // menimpa property class
    // contstructor juga bisa digunakan sebagai inisialisasi nilai default

    public function __construct($judul = "judul",$penulis="penulis",$penerbit="penerbit",$harga="harga",$jmlHalaman = 0, $waktumain = 0){
        // echo "hello world!";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktumain = $waktumain;
    }

    public function sayHello(){
        return "hello world!";
    }
    public function getLabel(){
        // saat menuliskan var dalam fcntion itu artinya variable untuk fucntion itu saja
        //jika ingin mengambil var dari luar maka tambahkan this kalau tidak memakai this
        //itu sama saja membuat variable baru
        return "$this->penulis, $this->penerbit";
    }
}

class Komik extends ProdukInheritance{
    // jika disini ada contructor maka contructor child dulu yang dijalankan
    // jika tidak ada maka akan naik ke atas yaitu ke parent constructor yang dijalankan
    //  perilaku tersebut juga berlaku pada property dan juga method

    // buat property punya komik sendiri
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }

}

class Game extends ProdukInheritance{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->waktumain} Jam";
        return $str;
    }

}

    //  ceritanya class ini hanya untuk menampilkan informasi seputar produknya
    //  dengan memanfaatkan object/intance atau method yang sudah dibuat maka
    // hanya perlu di panggil saja contoh
class CetakInforProduk3{

    //method cetak ini bisa menampung type data apa saja str, int, object
    // agar yang menampung class produk atau instance dari class produk saja maka tambahkan produk sebelum
    // var produk
    public function cetak( produk $produk ){
        // awalnya
        // $str = "Naruto | Masashi Kishimoto, Shonen Jump (Rp.300000)";
        // akhirya:
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;

    }

}

// instansiasi object
$produkInheritance1 = new ProdukInheritance("komik","Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//penimpahan dari isi property sebelumnya
$produkInheritance1->judul = "naruto000";
// tambah property
$produkInheritance1->newProperty = "newProperty";
var_dump($produkInheritance1->judul, $produkInheritance1->newProperty);
var_dump($produkInheritance1);




// setelah memakai construct
$produkInheritance3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produkInheritance4 = new Game("Uncharted","Neil Druckmann","Sony Computer",30000, 50);

$komik1 = new Komik("komik","Ero Manga Sensei", "Masashi Kishimoto", "Shonen Jump", 30000);

// info produk
$infoProduk = new CetakInforProduk3();

echo "<br>";
echo $produkInheritance3->sayHello();
echo "<br>";
echo "<hr>";
echo "Komik : " . $produkInheritance3->getInfoProduk();
echo "<br>";
echo "Game : " . $produkInheritance4->getInfoProduk();
echo "<br>";
echo $infoProduk->cetak($produk1);
echo "<br>";

//----------------- overriding oop ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Overriding</h1>";

class ProdukOverriding{

    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktumain;

    public function getInfoProduk(){
        // komik : Naruto | masashi kishimoto, shounen jump (Rp. 30000) - 100 halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
    
    // penamaan contructor menggnuakan lambang garis bawah karena merupaka sebuah magic
    // method yang dimiliki php
    // construct adalah sebuah method sehingga jika ada parameter yang sama dengan property class
    // maka dianggap beda karena parameter disebut sebagai variable lokal
    // yang dilakukan construct saat ini adalah menerima parameter yang berfungsi untuk mengisi
    // propertry property yang ada dalam kelas
    // menimpa property class
    // contstructor juga bisa digunakan sebagai inisialisasi nilai default

    public function __construct($judul = "judul",$penulis="penulis",$penerbit="penerbit",$harga="harga",$jmlHalaman = 0, $waktumain = 0){
        // echo "hello world!";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman  = $jmlHalaman;
        $this->waktumain = $waktumain;
    }

    public function sayHello(){
        return "hello world!";
    }
    public function getLabel(){
        // saat menuliskan var dalam fcntion itu artinya variable untuk fucntion itu saja
        //jika ingin mengambil var dari luar maka tambahkan this kalau tidak memakai this
        //itu sama saja membuat variable baru
        return "$this->penulis, $this->penerbit";
    }
}

class Komik1 extends ProdukOverriding{
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
        // method parent dengan nama method yang sama maka pemanggilan dilakukan dengan overriding atau 
        // memanggil langsung method parentnya karena bukan sebuah instance maka tidak perlu memakai var
        $str = "Komik : {$this->judul} | " . parent::getInfoProduk() ." (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }

}

class Game1 extends ProdukOverriding{
    public $waktumain;
    public function __construct($judul = "judul"    ,$penulis="penulis",$penerbit="penerbit",$harga="harga",$waktumain = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);  
        $this->waktumain = $waktumain;
    }
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->waktumain} Jam";
        return $str;
    }

}

    //  ceritanya class ini hanya untuk menampilkan informasi seputar produknya
    //  dengan memanfaatkan object/intance atau method yang sudah dibuat maka
    // hanya perlu di panggil saja contoh
class CetakInforProduk4{

    //method cetak ini bisa menampung type data apa saja str, int, object
    // agar yang menampung class produk atau instance dari class produk saja maka tambahkan produk sebelum
    // var produk
    public function cetak( produk $produk ){
        // awalnya
        // $str = "Naruto | Masashi Kishimoto, Shonen Jump (Rp.300000)";
        // akhirya:
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;

    }

}

// instansiasi object
$produkOverriding1 = new ProdukOverriding("komik","Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//penimpahan dari isi property sebelumnya
$produkOverriding1->judul = "naruto000";
// tambah property
$produkOverriding1->newProperty = "newProperty";
var_dump($produkOverriding1->judul, $produkOverriding1->newProperty);
var_dump($produkOverriding1);




// setelah memakai construct
$produkOverriding3 = new Komik1("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produkOverriding4 = new Game1("Uncharted","Neil Druckmann","Sony Computer",30000,50);

$komik1 = new Komik("komik","Ero Manga Sensei", "Masashi Kishimoto", "Shonen Jump", 30000);

// info produk
$infoProduk = new CetakInforProduk3();

echo "<br>";
echo $produkOverriding3->sayHello();
echo "<br>";
echo "<hr>";
echo "Komik : " . $produkOverriding3->getInfoProduk();
echo "<br>";
echo "Game : " . $produkOverriding4->getInfoProduk();
echo "<br>";
echo $infoProduk->cetak($produk1);
echo "<br>";

//----------------- Visibility oop ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Visibility</h1>";

class ProdukVisibility{

    public $judul,
           $penulis,
           $penerbit;
    protected $diskon = 0;
    private $harga;

    public function getInfoProduk(){
        // komik : Naruto | masashi kishimoto, shounen jump (Rp. 30000) - 100 halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
  
    
    // penamaan contructor menggnuakan lambang garis bawah karena merupaka sebuah magic
    // method yang dimiliki php
    // construct adalah sebuah method sehingga jika ada parameter yang sama dengan property class
    // maka dianggap beda karena parameter disebut sebagai variable lokal
    // yang dilakukan construct saat ini adalah menerima parameter yang berfungsi untuk mengisi
    // propertry property yang ada dalam kelas
    // menimpa property class
    // contstructor juga bisa digunakan sebagai inisialisasi nilai default

    public function __construct($judul = "judul",$penulis="penulis",$penerbit="penerbit",$harga="harga",$jmlHalaman = 0, $waktumain = 0){
        // echo "hello world!";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman  = $jmlHalaman;
        $this->waktumain = $waktumain;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function sayHello(){
        return "hello world!";
    }
    public function getLabel(){
        // saat menuliskan var dalam fcntion itu artinya variable untuk fucntion itu saja
        //jika ingin mengambil var dari luar maka tambahkan this kalau tidak memakai this
        //itu sama saja membuat variable baru
        return "$this->penulis, $this->penerbit";
    }
}

class Komik2 extends ProdukVisibility{
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
        // method parent dengan nama method yang sama maka pemanggilan dilakukan dengan Visibility atau 
        // memanggil langsung method parentnya karena bukan sebuah instance maka tidak perlu memakai var
        $str = "Komik : {$this->judul} | " . parent::getInfoProduk() ." (Rp.{$this->getHarga()}) - {$this->jmlHalaman} Halaman";
        return $str;
    }

}

class Game2 extends ProdukVisibility{
    public $waktumain;
    public function __construct($judul = "judul"    ,$penulis="penulis",$penerbit="penerbit",$harga="harga",$waktumain = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);  
        $this->waktumain = $waktumain;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    
    
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->getHarga()}) - {$this->waktumain} Jam";
        return $str;
    }

}

    //  ceritanya class ini hanya untuk menampilkan informasi seputar produknya
    //  dengan memanfaatkan object/intance atau method yang sudah dibuat maka
    // hanya perlu di panggil saja contoh
class CetakInforProduk6{

    //method cetak ini bisa menampung type data apa saja str, int, object
    // agar yang menampung class produk atau instance dari class produk saja maka tambahkan produk sebelum
    // var produk
    public function cetak( produk $produk ){
        // awalnya
        // $str = "Naruto | Masashi Kishimoto, Shonen Jump (Rp.300000)";
        // akhirya:
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;

    }

}

// instansiasi object
$produkVisibility1 = new ProdukVisibility("komik","Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//penimpahan dari isi property sebelumnya
$produkVisibility1->judul = "naruto000";
// tambah property
$produkVisibility1->newProperty = "newProperty";
var_dump($produkVisibility1->judul, $produkVisibility1->newProperty);
var_dump($produkVisibility1);




// setelah memakai construct
$produkVisibility3 = new Komik2("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produkVisibility4 = new Game2("Uncharted","Neil Druckmann","Sony Computer",30000,50);

$komik1 = new Komik("komik","Ero Manga Sensei", "Masashi Kishimoto", "Shonen Jump", 30000);
// jika public maka dapat di set seperti dibawah 
$produkVisibility4->setDiskon(50);
// info produk
$infoProduk = new CetakInforProduk3();

echo "<br>";
echo $produkVisibility3->sayHello();
echo "<br>";
echo "<hr>";
echo "Komik : " . $produkVisibility3->getInfoProduk();
echo "<br>";
echo "Game : " . $produkVisibility4->getInfoProduk();
echo "<br>";
echo $infoProduk->cetak($produk1);
echo "<br>";
echo $produkVisibility4->getHarga();


//----------------- Setter_dan_getter oop ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Setter_dan_getter</h1>";

class ProdukSetter_dan_getter{

    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    public function getInfoProduk(){
        // komik : Naruto | masashi kishimoto, shounen jump (Rp. 30000) - 100 halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
  
    
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

class Komik3 extends ProdukSetter_dan_getter{
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
        // method parent dengan nama method yang sama maka pemanggilan dilakukan dengan Setter_dan_getter atau 
        // memanggil langsung method parentnya karena bukan sebuah instance maka tidak perlu memakai var
        $str = "Komik : {$this->getJudul()} | " . parent::getInfoProduk() ." (Rp.{$this->getHarga()}) - {$this->jmlHalaman} Halaman";
        return $str;
    }

}

class Game3 extends ProdukSetter_dan_getter{
    public $waktumain;
    public function __construct($judul = "judul"    ,$penulis="penulis",$penerbit="penerbit",$harga="harga",$waktumain = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);  
        $this->waktumain = $waktumain;
    }

    
    
    public function getInfoProduk(){
        $str = "Game : {$this->getJudul()} | {$this->getLabel()} (Rp.{$this->getHarga()}) - {$this->waktumain} Jam";
        return $str;
    }

}

    //  ceritanya class ini hanya untuk menampilkan informasi seputar produknya
    //  dengan memanfaatkan object/intance atau method yang sudah dibuat maka
    // hanya perlu di panggil saja contoh
class CetakInforProduk7{

    //method cetak ini bisa menampung type data apa saja str, int, object
    // agar yang menampung class produk atau instance dari class produk saja maka tambahkan produk sebelum
    // var produk
    public function cetak( produk $produk ){
        // awalnya
        // $str = "Naruto | Masashi Kishimoto, Shonen Jump (Rp.300000)";
        // akhirya:
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;

    }

}

// instansiasi object
$produkSetter_dan_getter1 = new ProdukSetter_dan_getter("komik","Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//penimpahan dari isi property sebelumnya
// tambah property




// setelah memakai construct
$produkSetter_dan_getter3 = new Komik3("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produkSetter_dan_getter4 = new Game3("Uncharted","Neil Druckmann","Sony Computer",30000,50);

$komik1 = new Komik("komik","Ero Manga Sensei", "Masashi Kishimoto", "Shonen Jump", 30000);
// jika public maka dapat di set seperti dibawah 
$produkSetter_dan_getter4->setDiskon(50);
// info produk
$infoProduk = new CetakInforProduk4();

echo "<br>";
echo $produkSetter_dan_getter3->sayHello();
echo "<br>";
echo "<hr>";
echo "Komik : " . $produkSetter_dan_getter3->getInfoProduk();
echo "<br>";
echo "Game : " . $produkSetter_dan_getter4->getInfoProduk();
echo "<br>";
echo $infoProduk->cetak($produk1);
echo "<br>";
// dibawah adalah contoh setter
$produkSetter_dan_getter4->setJudul("JudulBaru");
// dibawah adalah contoh getter
echo $produkSetter_dan_getter4->getJudul();



//----------------- Abstract oop ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Abstract</h1>";

abstract class ProdukAbstract{

    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    abstract public function getInfoProduk();
    
    public function getInfo(){
         // komik : Naruto | masashi kishimoto, shounen jump (Rp. 30000) - 100 halaman.
         $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
         return $str;
    }
  
    
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

class Komik4 extends ProdukAbstract{
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

}

class Game4 extends ProdukAbstract{
    public $waktumain;
    public function __construct($judul = "judul"    ,$penulis="penulis",$penerbit="penerbit",$harga="harga",$waktumain = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);  
        $this->waktumain = $waktumain;
    }

    
    
    public function getInfoProduk(){
        $str = "Game : {$this->getJudul()} | {$this->getInfo()} (Rp.{$this->getHarga()}) - {$this->waktumain} Jam";
        return $str;
    }

}

    //  ceritanya class ini hanya untuk menampilkan informasi seputar produknya
    //  dengan memanfaatkan object/intance atau method yang sudah dibuat maka
    // hanya perlu di panggil saja contoh
class CetakInforProduk8{
    // untuk mengambil semua data dalam 1 cetak produk maka dibutuhkan sebuah array yang dapat
    // menampung semua instance yang ada sehigga tidak perlu di cetak satu-satu
    // buat property baru
    public $daftarProduk = array();

    // function dibawah untuk set daftar produk baru kedalam array
    public function tambahProduk( ProdukAbstract $produkAbstract){
        $this->daftarProduk[] = $produkAbstract;
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

// instansiasi object
//penimpahan dari isi property sebelumnya
// tambah property




// setelah memakai construct
$produkAbstract3 = new Komik4("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produkAbstract4 = new Game4("Uncharted","Neil Druckmann","Sony Computer",30000,50);

// saatnya cetak peroduk
// pertama buat instance class produk
$cetakproduk = new CetakInforProduk8();

// lalu tambahkan produk
$cetakproduk->tambahProduk($produkAbstract3);
$cetakproduk->tambahProduk($produkAbstract4);

echo $cetakproduk->cetak();


//----------------- Interface oop ---------------------------
echo "<hr>";
echo "<hr>";
echo "<h1>Abstract</h1>";

interface InforProduk{
    public function getInfoProduk();
}

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

    //  ceritanya class ini hanya untuk menampilkan informasi seputar produknya
    //  dengan memanfaatkan object/intance atau method yang sudah dibuat maka
    // hanya perlu di panggil saja contoh
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

// instansiasi object
//penimpahan dari isi property sebelumnya
// tambah property




// setelah memakai construct
$produkInterface3 = new Komik5("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produkInterface4 = new Game5("Uncharted","Neil Druckmann","Sony Computer",30000,50);

// saatnya cetak peroduk
// pertama buat instance class produk
$cetakproduk = new CetakInforProduk9();

// lalu tambahkan produk
$cetakproduk->tambahProduk($produkInterface3);
$cetakproduk->tambahProduk($produkInterface4);

echo $cetakproduk->cetak();


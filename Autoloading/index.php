<?php

require_once "App/init.php";

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
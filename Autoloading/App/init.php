<?php

// require_once 'Produk/InforProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik5.php';
// require_once 'Produk/Game5.php';
// require_once 'Produk/CetakInforProduk9.php';

// bisa lebih simple menggunakan auto load
// menggunakan close ur atau fungsi tanpa nama

spl_autoload_register(function($class){
    require_once 'Produk/' . $class . '.php';
    // jika lebih lengkap seperti dibawah
    //  require_once __DIR__ . 'Produk/' . $class . '.php';
});
<?php

// require_once 'Produk/InforProduk.php';
// require_once 'Produk/ProdukInterface.php';
// require_once 'Produk/Komik5.php';
// require_once 'Produk/Game5.php';
// require_once 'Produk/CetakInforProduk9.php';
// require_once 'Produk/User.php';
// require_once 'Service/User.php';

// bisa lebih simple menggunakan auto load
// menggunakan close ur atau fungsi tanpa nama

spl_autoload_register(function($class){
    // App\Produk\User = ["App", "Produk", "User"];
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Produk/' . $class . '.php';
    // jika lebih lengkap seperti dibawah
    //  require_once __DIR__ . 'Produk/' . $class . '.php';
});

spl_autoload_register(function($class){
    // App\Produk\User = ["App", "Produk", "User"];
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Service/' . $class . '.php';
    // jika lebih lengkap seperti dibawah
    //  require_once __DIR__ . 'Produk/' . $class . '.php';
});
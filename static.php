<?php

class ContohStatic{
    // memakai keyword static
    public static $angka = 1;

    public static function halo(){
        // kalau untuk mengambil sebuah property pada class biasa
        // menggunakan this tapi jika pada static menggunakan 
        // var angka dapat menmakai increment
        return "Halo " . self::$angka++ . " kali";
    }

}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";


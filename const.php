<?php

// biasakan jika membuat sebuah const namanya menggunakan hurup kapital
// agar tidak tertukar dengan var
// dibawah ada sebuah const dengan nama constanta nama dengan value nama rijan
define('NAMA', 'M RIJAN ALPALAH');
echo NAMA; //const tidak menggunaka lambang $/var

echo "<br>";
const UMUR = 22;
echo UMUR;
echo '<hr>';
// const dalam class
class Coba{
    const NAMA = 'M RIJAN ALPALAHU';
}

// pemanggilan nya sama seperti static keryword
echo Coba::NAMA;

// magic constant php
// __LINE__ : FILE DIR FUNCTION CLASS TRAIT METHOD NAMESPACE
echo "<br>";
echo "magic constant php line = " . __LINE__;
// file untuk mengetahui file ini ada dimana
// dir directory file ini ada dimana
// function untuk mengetahui sedang ada di function yg mana
// class sama seperti function
// trait
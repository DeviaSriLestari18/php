<?php

function persegi(){
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Rumus : sisi x sisi <br>";
    $sisi = 5;
    $rumus = $sisi * $sisi;
    echo "Sisi : $sisi <br>";
    echo "Luasnya : $rumus <br>";
}
function persegiPanjang(){
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Rumus : panjang x lebar <br>";
    $panjang = 5;
    $lebar = 4;
    $rumus = $panjang * $lebar ;
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luasnya : $rumus";
} function segitiga(){
    echo "<h3>Menghitung Luas Segitiga</h3>";
    echo "Rumus : alas x tinggi <br>";
    $alas = 6;
    $tinggi = 5;
    $rumus = $alas * $tinggi;
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luasnya : $rumus";
} function lingkaran(){
    echo "<h3>Menghitung Luas Lingkaran</h3>";
    echo "Rumus : konstanta x jari-jari <br>";
    $k = 3.14;
    $jari = 8;
    $rumus = $k * $jari;
    echo "konstanta : $k <br>";
    echo "Jari-Jari: $jari <br>";
    echo "Luasnya : $rumus";
}


persegi();
echo "<hr>";
persegiPanjang();
echo "<hr>";
segitiga();
echo "<hr>";
lingkaran();
?>
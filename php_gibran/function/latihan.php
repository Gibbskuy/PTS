<?php

function luasPersegi(){
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Rumus : sisi x sisi <br>";

    $sisi = 5;
    $hasil = $sisi * $sisi;

    echo "Sisi : $sisi <br>";
    echo "Luasnya : $hasil";

}
function luasPersegiPanjang(){
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Rumus : panjang x lebar <br>";

    $panjang = 5;
    $lebar = 4;
    $hasil = $panjang * $lebar;

    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luasnya : $hasil";

}
function segitiga(){
    echo "<h3>Menghitung Luas Segitiga</h3>";
    echo "Rumus : 1/2 x alas x tinggi <br>";

    $setengah = 0.5;
    $alas = 5;
    $tinggi = 10;
    $hasil = $setengah * $alas * $tinggi;
    
    echo "Setengah : 1/2 <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luasnya : $hasil";

}
function luasLingkaran(){
    echo "<h3>Menghitung Luas Lingkaran</h3>";
    echo "Rumus :  x sisi <br>";

    $lingkaran = 3.14;
    $jari = 5;
    $hasil = $lingkaran * $jari * $jari;

    echo "π : $lingkaran <br>";
    echo "Jari Jari : $jari <br>";
    echo "Luasnya : $hasil";

}


luasPersegi();
echo "<hr>";
luasPersegiPanjang();
echo "<hr>";
segitiga();
echo "<hr>";
luasLingkaran();
?>
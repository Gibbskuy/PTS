<?php
class bangunData {

    public $Bangun = "persegi";
    public $Bangun1 = "Persegi panjang";
    public $Bangun2 = "segitiga";
    public $Bangun3 = "lingkaran";

    public function persegi(){
        $sisi = 5;
        $hasil = $sisi * $sisi;
        echo "<h3>Menghitung Luas Persegi</h3>";
        echo "Sisi = $sisi <br>";
        echo "Rumus = Sisi x Sisi <br>";
        echo "Hasil = $hasil <br>";
        echo "<hr>";
    }
    public function persegiPanjang(){
        $panjang = 8;
        $lebar = 12;
        $hasil = $panjang * $lebar;
        echo "<h3>Menghitung Luas Persegi Panjang</h3>";
        echo "Panjang  = $panjang <br>";
        echo "Lebar = $lebar <br>";
        echo "Rumus = Panjang x Lebar <br>";
        echo "Hasil = $hasil <br>";
        echo "<hr>";
    }
    public function segitiga(){
        $setengah = 0.5;
        $alas = 7;
        $tinggi = 10;
        $hasil = $setengah * $alas *$tinggi;
        echo "<h3>Menghitung Luas Segitiga</h3>";
        echo "Setengah  = $setengah <br>";
        echo "Alas = $alas <br>";
        echo "Tinggi = $tinggi <br>";
        echo "Rumus = Setengah x Alas x Tinggi <br>";
        echo "Hasil = $hasil <br>";
        echo "<hr>";
    }
    public function lingkaran(){
        $lingkaran = 3.14;
        $jari = 4;
        $hasil = $lingkaran * $jari * $jari;
        echo "<h3>Menghitung Luas Lingkaran</h3>";
        echo "Lingkaran  = $lingkaran <br>";
        echo "Jari = $jari <br>";
        echo "Rumus = Lingkaran x Jari x Jari <br>";
        echo "Hasil = $hasil <br>";
        echo "<hr>";
    }

}
$cetak = new bangunData();

echo $cetak->persegi();
echo "<br>";
echo $cetak->persegiPanjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();
?>
<?php
//buat class
class Manusia{

    //buat property / atribut
    public $nama = "Aceng";
    public $nama2 = "Gibran";

    //baut method / function
    public function makan(){
        echo "$this->nama Suka Makan Masakan Kamu";
    }
    public function minum(){
        echo "$this->nama2 Suka Minum Susu Kamu";
    }
}

//buat object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>
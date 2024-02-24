<?php

class manusia{

    public $nama = "Gibran Kece";

    private function tampilkan_nama(){
        echo "Nama Saya Gibran Si Ganteng Kalem <br>";
    }
    public function keluarkan(){
        $this->tampilkan_nama();
    }

}

$cetak = new manusia();
//manggil method
echo $cetak->keluarkan();
//manggil property
echo $cetak->nama;


?>
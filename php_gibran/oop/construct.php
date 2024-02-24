<?php

class contoh{

    public function __construct(){
        echo "Assalamualaikum Ukhti <br>";
    }
    public function perkenalan(){
        echo "Nama Saya Gibran <br>";
    }
    public function __destruct(){
        echo "I Love You <br>";
    }
}

$cetak = new contoh();
echo $cetak->perkenalan();

?>
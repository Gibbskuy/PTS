<pre>
<?php
    $nama          = @$_REQUEST['nama'];
    $jk            = @$_REQUEST['jk'];
    $tanggal_lahir = @$_REQUEST['tanggal_lahir'];
    $olahraga      = @$_REQUEST['olahraga'];
    $kelas         = @$_REQUEST['kelas'];
    $kemampuan     = @$_REQUEST['kemampuan'];
    $uang          = @$_REQUEST['pembayaran'];
    $diskon        =  0;

    if ($olahraga == "Sepak Bola") {
        $harga = 0;
            if ($kelas == "Pemula") {
                $harga += 200000;
            } elseif ($kelas == "Menengah") {
                $harga += 250000;
            } elseif ($kelas == "Lanjutan") {
                $harga += 300000;
            }
        }
     else if ($olahraga == "Bulu Tangkis") {
        $harga = 0;
            if ($kelas == "Pemula") {
                $harga += 150000;
                if ($jenis == "Wanita") {
                    $diskon += $harga * 0.1; 
            }       
        } elseif ($kelas == "Menengah") {
            $harga += 200000;
            if ($jk == "Wanita") {
                $diskon += $harga * 0.1; 
            }
        } elseif ($kelas == "Lanjutan") {
            $harga += 200000;
            if ($jenis == "Wanita") {
                $diskon += $harga * 0.1; 
                }

            }
        }
     else if ($olahraga == "Renang") {
        $harga = 0;
            if ($kelas == "Pemula") {
                $harga += 180000;
            } elseif ($kelas == "Menengah") {
                $harga += 220000;
            } elseif ($kelas == "Lanjuan") {
                $harga += 270000;
            }
        }

    $total = $harga - $diskon;

    if ($total > 500000) {
        $keputusan = "Selamat Anda Mendapatkan Hadiah Gratis";
    } else {
        $keputusan = "Sangat disayangkan totsal harga anda kurangi dari Rp.500000, anda tidak mendapatkan hadiah";
    }
    
    
   
    echo "============ FORMULIR ========== <br>";
    echo "================================ <br>";
    echo "Nama                           = $nama <br>";
    echo "Jenis Kelamin                  = $jk <br>";
    echo "Tanggal Lahir                  = $tanggal_lahir <br>";
    echo "Kategori Olahraga              = $olahraga <br>";
    echo "Pilihan Kelas                  = $kelas <br>";
    echo "Kemampuan Fisik                = $kemampuan <br>";
    echo "Pembayaran                     = $uang <br>";
    echo "Harga                          = $harga <br>";
    echo "Diskon                         = $diskon <br>";
    echo "Total Harga                    = $total <br>";
    echo $keputusan;
?>
</center>
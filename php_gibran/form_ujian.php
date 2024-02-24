<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<center>
  <img src="download (3).png" alt=""  >
    <div class="text mt-3">
        <h3>PENGGAJIHAN</h3>
        <h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
    </div>
</center>


<center>
<div class="card mt-5 ml-5 mr-5 bg-light text-left" style="max-width: 40rem;">
  <div class="card-header bg-info">
  <p class="font-italic"><b>DATA PENAGIHAN</b></p>
  </div>
  <div class="card-body">
  <form method="post" action="">
  <div class="form-">
  <div class="form-group">
    <label for=""><b>No</b></label>
    <input type="number" name="no" class="form-control" placeholder="No">
  </div>
  <div class="form-group">
    <label for=""><b>Nama</b></label>
    <input type="text" name="nama" class="form-control" placeholder="Nama">
  </div>
  <div class="form-group">
      <label for=""><b>Unit Pendidikan</b></label>
      <select id="inputState" class="form-control" name="unit">
        <option selected>TK</option>
        <option selected>SD</option>
        <option selected>SMP</option>
        <option selected>SMK/SMA</option>
        <option selected>Pilih Unit Pendidikan</option>
      </select>
    </div>
    <div class="form-group">
    <label for=""><b>Tanggal Gaji</b></label>
    <input type="date" name="tanggal_gaji" class="form-control" >
  </div>
</div>
<div class="row text-center">
    <div class="form-group col-6">
    <p class="font-italic" style="font-size: 2rem"><b>Gaji</b></p>
    </div>
    <div class="form-group col-6">
    <p class="font-italic" style="font-size: 2rem"><b>Potongan</b></p>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for=""><b>Jabatan</b></label>
      <select id="inputState" class="form-control" name="jabatan">
        <option selected>Kepala Sekolah</option>
        <option selected>Wakasek</option>
        <option selected>Guru</option>
        <option selected>Karyawan</option>
        <option selected>Pilih Jabatan</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for=""><b>BPJS</b></label>
      <input type="number" name="bpjs" class="form-control"placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for=""><b>Lama Kerja</b></label>
      <input type="number" name="lama_kerja" class="form-control"placeholder="Lama Kerja" >
    </div>
    <div class="form-group col-md-6">
      <label for=""><b>Pinjaman</b></label>
      <input type="number" name="pinjaman" class="form-control"placeholder="Pinjaman" >
    </div>
    <div class="form-group col-md-6">
      <label for=""><b>Status Kerja</b></label>
      <select id="inputState" class="form-control" name="status">
        <option selected>Tetap</option>
        <option selected>Kontrak</option>
        <option selected>Pilih Status Kerja</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for=""><b>Tabungan</b></label>
      <input type="number" name="tabungan" class="form-control"placeholder="Tabungan" >
    </div>
    <div class="form-group col-md-6">
    </div>
    <div class="form-group col-md-6">
      <label for=""><b>Lainya</b></label>
      <input type="number" name="lainya" class="form-control"placeholder="Lainya" >
    </div>
  </div>
  <center> 
    <button type="submit" class="btn btn-outline-light bg-success" name="Proses">Proses</button>
  </center>

</form>
</div>
</div>
</center>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<?php

if(isset($_POST['Proses'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $bpjs = $_POST['bpjs'];
    $lama_kerja = $_POST['lama_kerja'];
    $pinjaman = $_POST['pinjaman'];
    $status = $_POST['status'];
    $tabungan = $_POST['tabungan'];
    $lainya = $_POST['lainya'];
    $gaji = 0;
    $bonus = 1000000;


    if ($jabatan == "Kepala Sekolah") {
      $gaji = 5000000;
  } elseif ($jabatan== "Wakasek") {
      $gaji = 4000000;
  } elseif ($jabatan == "Guru") {
      $gaji = 3000000;
  } elseif ($jabatan == "Karyawan") {
      $gaji = 2000000;
  } else {
    echo "Isi Formulir ini ya gesss";
  }
  
  
    if ($status == "Tetap") {
    $bonus = 100000;
  } else {
    $bonus = 0;
  }


  $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainya;


class hasil{

    public function penggajihan($no0,$nama0,$unit0,$tanggal_gaji0,$jabatan0,$gaji0,$bpjs0,$lama_kerja0,$pinjaman0,$status0,$bonus0,$tabungan0,$lainya0,$gaji_bersih0){
?>

<center>
<div class="card text-black bg-info mb-4 mt-5" style="max-width: 40rem;">
  <div class="card-body">
    <p class="font-italic text-light" style="font-size: 2rem"><b>STRUK GAJI</b></p>
    <pre class="text-light"><table>
      <tr>
        <td>No</td>
        <td>:</td>
        <td><?php echo $no0 ?></td>
      </tr>  
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama0 ?></td>
      </tr>
      <tr>
        <td>Unit Pendidikan</td>
        <td>:</td>
        <td><?php echo $unit0 ?></td>
      </tr>
      </tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><?php echo $tanggal_gaji0 ?></td>
      </tr>
      </tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?php echo $jabatan0 ?></td>
      </tr>
      </tr>
        <td>Gaji</td>
        <td>:</td>
        <td><?php echo $gaji0 ?></td>
      </tr>
      <tr>
        <td>Lama Kerja</td>
        <td>:</td>
        <td><?php echo $lama_kerja0 ?></td>
      </tr>
      <tr>
        <td>Status Kerja</td>
        <td>:</td>
        <td><?php echo $status0 ?></td>
      </tr>
      <tr>
        <td>Bonus</td>
        <td>:</td>
        <td><?php echo $bonus0 ?></td>
      </tr>
      <tr>
        <td>BPJS</td>
        <td>:</td>
        <td><?php echo $bpjs0 ?></td>
      </tr>
      <tr>
        <td>Pinjaman</td>
        <td>:</td>
        <td><?php echo $pinjaman0 ?></td>
      </tr>
      <tr>
        <td>Tabungan</td>
        <td>:</td>
        <td><?php echo $tabungan0 ?></td>
      </tr>
      <tr>
        <td>Lainya</td>
        <td>:</td>
        <td><?php echo $lainya0 ?></td>
      </tr>
      <tr>
        <td>Gaji Bersih</td>
        <td>:</td>
        <td><?php echo $gaji_bersih0 ?></td>
      </tr>
    </table></pre>

  </div>
</div>
</center>

<?php
    }

}

$cetak = new hasil();

echo $cetak->penggajihan($no,$nama,$unit,$tanggal_gaji,$jabatan,$gaji,$bpjs,$lama_kerja,$pinjaman,$status,$bonus,$tabungan,$lainya,$gaji_bersih);

}

?>
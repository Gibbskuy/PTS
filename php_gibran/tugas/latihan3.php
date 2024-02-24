<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <center>
    <h2><b>Daftar SMK</b></h2>    
    <form action="" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Masukan Nama Anda"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name='tanggal_lahir'></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
            <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
            <input type="radio" name="jk" value="Perempuan"> Perempuan 
        </td>
        </tr>
        <tr>
            <td>Biaya Register</td>
            <td>:</td>
            <td><input type="number" name='biaya'></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <select name="jurusan">
                <option value="RPL">RPL</option>
                <option value="TKRO">TKRO</option>
                <option value="TBSM">TBSM</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name='simpan' value='Daftar'>
                <input type="submit" name='' value='Reset'></td>
        </tr>
    </table>
    </form>
</center>
</body>
</html>

<?php
if (isset($_POST['simpan'])){
$a = $_POST['nama'];
$b = $_POST['tanggal_lahir'];
$c = $_POST['jk'];
$d = $_POST['biaya'];
$e = $_POST['jurusan'];

if ($e == "RPL") {
    $harga = 2500000;
    } elseif ($e == "TKRO") {
            $harga = 3000000;
    } elseif ($e == "TBSM") {
            $harga = 3500000;
    }

$total = $d + $harga;


echo "<center><br>";
echo "<b>=============> STRUK REGISTER <=============</b><br>";
echo "<tr> <table> <td>Nama</td> <td>:<td> <td>$a<td>  </tr>";
echo "<tr> <td>Tanggal Lahir</td> <td>:<td> <td>$b<td>  </tr>";
echo "<tr> <td>Jenis Kelamin</td> <td>:<td> <td>$c<td>  </tr>";
echo "<tr> <td>Biaya Register</td> <td>:<td> <td>$d<td>  </tr>";
echo "<tr> <td>Jurusan</td> <td>:<td> <td>$e<td>  </tr>";
echo "<tr> <td>Biaya Jurusan</td> <td>:<td> <td>$harga<td>  </tr>";
echo "<tr> <td>Total Pembayaran</td> <td>:<td> <td>$total<td>  </tr></table>";
echo "</center>";

}
?>
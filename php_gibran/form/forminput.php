<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Biodata Diri</title>
</head>
<body>
    <center>
    <h1>Form Biodata Diri</h1>
    <!-- form -->
        <form method = "POST" action="" >
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name='nama'></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name='tanggal_lahir'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name='jk'value='Laki-laki'>Laki-Laki
                        <input type="radio" name='jk'value='Perempuan'>Perempuan
                    </td> 
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name='alamat'></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Ateis">Ateis</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan">
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><input type="text" name='status'></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type="text" name='hobi'></td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td><input type="text" name='cita_cita'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name='simpan' value='Kirim' ></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['simpan'])){ 
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];


    echo "========== BIODATA DIRI =========== <br>";
    echo "================================== <br>";
    echo "Nama    = $nama <br>";
    echo "Tanggal Lahir    = $tanggal <br>";
    echo "Jenis Kelamin    = $jk <br>";
    echo "Alamat    = $alamat <br>";
    echo "Agama    = $agama <br>";
    echo "Pendidikan Terakhir    = $pendidikan <br>";
    echo "Status    = $status <br>";
    echo "Hobi    = $hobi <br>";
    echo "Cita-cita    = $cita_cita <br>";
}
?>
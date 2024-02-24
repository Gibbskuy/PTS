<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Masukan Tanggal Lahir untuk Mengetahui Generasi Anda </h2>
    <form action="generasi_hasil.php" method="POST">
        <table> 
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name='nama' placeholder="Masukan Nama"></td>
        </tr>
        <tr>
            <td>Tahun Lahir</td>
            <td>:</td>
            <td><input type="text" name='tahun' placeholder="Masukan Tahun Lahir Anda"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name='simpan' value='Kirim' ></td>
        </tr>
        </table>
    </form>
</body>
</html>
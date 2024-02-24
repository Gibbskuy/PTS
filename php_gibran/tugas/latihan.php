<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir</title>
</head>
<body>
    <center>
    <h1>Formulir</h1>
    <!-- form -->
        <form  action="hasil.php" method = "REQUEST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name='nama'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jk">
                        <option value="">Pilih</option>
                        <option value="Laki-Llaki">Laki-laki</option>
                        <option value="Wanita">Wanita</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name='tanggal_lahir'></td>
                </tr>
                <tr>
                    <td>Kategori Olahraga</td>
                    <td>:</td>
                    <td>
                    <input type="radio" name="olahraga" value="Sepak Bola">Sepak Bola <br>
                    <input type="radio" name="olahraga" value="Bulu Tangkis">Bulu Tangkis <br>
                    <input type="radio" name="olahraga" value="Renang">Renang <br>
                    </td>     
                </tr>
                <tr>
                    <td>Pilihan Kelas</td>
                    <td>:</td>
                    <td>
                    <input type="checkbox" name="kelas" value="Pemula">Pemula <br>
                    <input type="checkbox" name="kelas" value="Menengah">Menengah <br>
                    <input type="checkbox" name="kelas" value="Lanjutan">Lanjutan <br>
                    </td>     
                </tr>
                <tr>
                    <td>Kemampuan Fisik</td>
                    <td>:</td>
                    <td><textarea name='kemampuan'></textarea></td>
                </tr>
                <tr>
                <td>Pembayaran</td>
                    <td>:</td>
                    <td>
                        <select name="pembayaran">
                        <option value="-">Metode Pembayaran</option>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="Kartu Kredit">Kartu Kredit</option>
                        </select>
                    </td>
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
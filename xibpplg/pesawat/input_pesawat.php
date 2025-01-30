<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bukti_pesawat.php" method="POST">
        <table border="2">
                <tr>
                    <td colspan="2" align="center">PEMESANAN TIKET PESAWAT</td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kode Jurusan</td>
                    <td><select name="kode" id="">
                            <option value="select">-pilih-</option>
                            <option value="JS">-JS-</option>
                            <option value="JB">-JB-</option>
                            <option value="JK">-JK-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pesan</td>
                    <td><input type="text" name="jumlah"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="submit" name="pesan" value="PESAN">
                                                    <input type="reset" name="batal" value="BATAL"></td>
                </tr>
        </table>
    </form>
</body>
</html>
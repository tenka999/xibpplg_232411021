<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output_bioskop.php" method="POST">
        <table border="10">
            <tr>
                <td colspan="4" align="center">BIOSKOP 21</td>
            </tr>
            <tr>
                <td rowspan="7"><img src="http://localhost/xibpplg/picture/beluga.jpg" height="250px" width="250px"></td>
            </tr>
            <tr>
                <td>Kode Film</td>
                <td>:</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td>:</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Jenis Film</td>
                <td>:</td>
                <td>
                    <select name="jenis" id="">
                        <option value="selected">-Pilih-</option>
                        <option value="Action">Action</option>
                        <option value="Horor">Horor</option>
                        <option value="Komedi">komedi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Studio</td>
                <td>:</td>
                <td>
                    <input type="radio" name="studio" value="Studio 1">Studio 1
                    <input type="radio" name="studio" value="Studio 2">Studio 2
                    <input type="radio" name="studio" value="Studio 3">Studio 3
                </td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td>:</td>
                <td><input type="text" name="jumlahbeli"></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" name="beli" value="BELI">
                                <input type="reset" name="batalbeli" value="Batal Beli">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
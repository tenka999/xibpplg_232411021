<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tambah_kue_proses.php" method="POST">
        <table border="1">
            <tr>
                <td colspan="2" align="center">INPUT DATA KUE</td>
            </tr>
            <tr>
                <td>Kode Makanan</td>
                <td><input type="text" name="kode" required placeholder='Masukkan kode kue' ></td>
            </tr>
            <tr>
                <td>Nama Makanan</td>
                <td><input type="text" name="nama" required placeholder='Masukkan nama kue' ></td>
            </tr>
            <tr>
                <td>Rating</td>
                <td><select name="rating" id="">
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option value="3"> 3</option>
                    <option value="4"> 4</option>
                    <option value="5"> 5</option>
            </select></td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td><textarea name="catatan" id="" required placeholder="Masukkan Catatan"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="simpan" value="SIMPAN"><input type="reset" name="batal" value="BATAL"></td>
            </tr>
        </table>
    </form>
</body>
</html>
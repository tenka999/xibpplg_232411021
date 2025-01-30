<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output_pecel.php" method="POST">
        <h2>*Rumah Makan Pecel Lele Lelo*</h2>
        <table border=1>
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat Pembeli</td>
                <td><textarea name="alamat" id=""></textarea></td>
            </tr>
            <tr>
                <td>Paket</td>
                <td><select name="paket" id="">
                    <option value="paket1">paket 1</option>
                    <option value="paket2">paket 2</option>
                    <option value="paket3">paket 3</option>
                </select></td>
            </tr>
            <tr>
                <td>Menu Tambahan</td>
                <td ><input type="checkbox" name='kentang' value="kentang">Kentang Goreng <br>
                <input type="checkbox" name='nasi' value="nasi">Nasi <br>
                <input type="checkbox" name='telur' value="telur">Telur Rebus</td>
            </tr>
            <tr>
                <td colspan='2' align='center' >
                    <input type="submit" value='PROSES' name='submit'>
                    <input type="reset" value='BATAL' name='batal'>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
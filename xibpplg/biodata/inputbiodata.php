<html>
    <head>
        <title>Biodata Siswa</title>
    </head>
<body>
    <form action="tampilbiodata.php" method="POST">
<pre>
    <h3>INPUT BIODATA SISWA</h3>
<hr>
NISN                 <input type="text" name="nisn"><br>
Nama                 <input type="text" name="nama"><br>
Jurusan              <select name="jurusan">
                        <option value="selected">-Pilih-</option>
                        <option value="TJK">TKJ</option>
                        <option value="RPL">RPL</option>
                        <option value="MM">MM</option>
                        </select><br>
Jenis Kelamin        <input type="radio" name="jenis" value="Laki-Laki">Laki-Laki<br>
                     <input type="radio" name="jenis" value="Perempuan">Perempuan<br>
hobby                <input type="checkbox" name="ngoding" value="Ngoding">Ngoding<br>
                     <input type="checkbox" name="desain" value="desain">Desain<br>
alamat               <textarea name="alamat" id=""></textarea>
<input type="submit" name="TAMPIL">  <input type="reset" name="batal" value="BATAL">
</pre>
</form>
</body>
</html>
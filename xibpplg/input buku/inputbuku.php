<html>
<head>
    <title>INPUT BUKU ONLINE</title>
</head>
<body>
<form action="tampilbuku.php" method="POST">
    <pre>
        <h3>      INPUT PEMBELIAN BUKU ONLINE</h3>
        <hr>
        Nama Pembelian      <input type="text" name ="nama"><br>
        Judul Buku          <input type="text" name="judul"><br>
        Jenis Buku          <select name="jenis" id="">
                            <option value="selected">-pilih-</option>
                            <option value="fiksi">fiksi</option>
                            <option value="pelajaran">pelajaran</option>
                            <option value="novel">novel</option>
                            </select><br>
        Pembayaran          <input type="radio" name="pembayaran" id="" value="COD">COD <br>
                            <input type="radio" name="pembayaran" id="" value="transfer">Transfer <br>
        Catatan             <textarea name="catatan" id=""></textarea><br>
        <input type="submit" name="tampil" value="TAMPIL"> <input type="reset" name="batal" value="BATAL">
    </pre>
</form>
</body>
</html>
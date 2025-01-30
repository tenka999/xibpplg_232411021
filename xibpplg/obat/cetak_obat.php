<?php

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

echo "  <pre>
        <h1>CETAK DATA OBAT</h1>
        ========================================
        Kode Obat       : $kode
        Nama Obat       : $nama
        Jenis Obat      : $jenis
        Harga Obat      : $harga
        =========================================
        <a href='inputobat.php'>Input Kembali</a>
        ";

?>
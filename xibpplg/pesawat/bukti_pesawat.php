<?php

$nama=$_POST['nama'];
$kode=$_POST['kode'];
$jumlah=$_POST['jumlah'];

date_default_timezone_set('Asia/Jakarta');
$tgl=date('d/m/y');
$jam=date('H:i:s');

if ($kode=="JB")
{
    $jurusan='Jakarta-Bali';
    $biaya=1500000;
}
else if ($kode=='JS')
{
    $jurusan='Jakarta-Singapore';
    $biaya=1300000;
}
else if ($kode=="JK")
{
    $jurusan='Jakarta-Kuala Lumpur';
    $biaya=1400000;
}
$total=$jumlah*$biaya;

echo    "<pre>
        <h3>BUKTI PEMESANAN PESAWAT</h3>
        <hr width=20% align=left>
        Nama Pemesanan      : $nama<br>
        Kode Jurusan        : $kode<br>
        Jurusan             : $jurusan<br>
        Biaya               : Rp. $biaya<br>
        Jumlah Pesan        : $jumlah<br>
        <hr width=20% align=left>
        Total Biaya         : Rp. $total<br>
        <hr width=20% align=left>
        Tanggal Pesan       : $tgl<br>
        Jam Pesan           : $jam<br>
        </pre>
        ";
?>
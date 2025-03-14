<?php 
include "config/koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$rating = $_POST['rating'];
$catatan = $_POST['catatan'];

$ubah = mysqli_query($koneksi,"UPDATE tbkue SET namakue='$nama',rating='$rating',catatan='$catatan' WHERE kodekue='$kode'");
if ($ubah){
    echo "<script>alert('Data barang berhasil disimpan');
    window.location.href='data_kue.php';</script>";
}else{
    echo "<script>alert('Data barang gagal disimpan');
    window.location.href='data_kue.php';</script>";
}

?>
<?php

$nisn    = $_POST['nisn'];
$nama    = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis   = $_POST['jenis'];
$alamat  = $_POST['alamat'];
$hoby1 = $_POST['ngoding'];
$hoby2 = $_POST['desain'];

if ($hoby1==true){
    $hoby1 = "ngoding";
}else{
    $hoby1 = "";
}
if ($hoby2==true){
    $hoby2 = "desain";
}else{
    $hoby2 = "";
}


echo "<pre>";
echo "<h1>TAMPIL BIODATA SISWA</h1><br>";
echo "=================================<br>";
echo "NISN          : $nisn<br>";
echo "Nama          : $nama<br>";
echo "Jurusan       : $jurusan<br>";
echo "Jenis         : $jenis<br>";
echo "Hoby          : $hoby1 $hoby2 <br>";
echo "Alamat        : $alamat<br>";
echo "=================================<br>";
echo "</pre>";

?>
<a href="inputbiodata.php">Input Lagi Bisa Kali</a>
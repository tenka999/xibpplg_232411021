<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$paket = $_POST['paket'];
$menu = "" ;
$kentang = $_POST['kentang'];
$nasi = $_POST['nasi'];
$telur = $_POST['telur'];
$subtotal = 0;
$total = 0;
$potongan = 0;
$biayakentang = 0;
$biayanasi = 0;
$biayatelur = 0;
$pilihan = '';
date_default_timezone_set('Asia/Jakarta');
$tgl = date('d/m/y');
$waktu = date('H:i:s');

if ($paket == "paket1"){
    $harga = 12000;
    $menu = "Nasi, Ayam Goreng, Teh Botol";
}else if ($paket == "paket2"){
    $harga = 10000;
    $menu = "Nasi, Lele Goreng, Es Teh Manis";
}else if ($paket == "paket3"){
    $harga = 20000;
    $menu = "Nasi, Ayam Goreng,Lele Goreng,Teh Botol";
}

if ($nasi=='nasi'){
    $biayanasi = 2500;
}
if ($kentang=="kentang"){
    $biayakentang = 3000;
}
if ($telur=="telur"){
    $biayatelur = 2000;
}
$biaya = $biayakentang + $biayanasi + $biayatelur;
$subtotal = $harga + $biaya;
if ($subtotal > 15000){
    $potongan = $subtotal * 0.1;
    $total = $subtotal - $potongan;
}
else{
    $total = $subtotal;
}

echo    "<h2>BUKTI PEMBAYARAN PECEL LELE LELO</h2>
    <pre>
    Tanggal Cetak   : $tgl <br>
    Jam Cetak       : $waktu            Nama Pembeli: $nama<br>
    =============================================================== <br>
    Pilihan Paket   : $menu <br>
    Menu Tambahan   : $nasi $telur $kentang<br>
    Harga Paket     : $harga <br>
    Biaya Tambahan  : $biaya <br>
    =============================================================== <br>
    Subtotal        : $subtotal <br>
    Potongan        : $potongan <br>
    =============================================================== <br>
    Total Bayar     : $total <br>
    </pre>
    ";
?>
<a href="input_pecel.php">Input Kembali</a>

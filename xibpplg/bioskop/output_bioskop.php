<?php

$kode       = $_POST['kode'];
$judul      = $_POST['judul'];
$jenis      = $_POST['jenis'];
$studio     = $_POST['studio'];
$harga      = $_POST['harga'];
$jumlahbeli = $_POST['jumlahbeli'];

$total=$harga*$jumlahbeli;
echo "
        <pre>
        <h1> OUTPUT BIOSKOP 21 </h1>
        ================================
        Kode Film       : $kode
        Judul Film      : $judul
        Jenis Film      : $jenis
        Studio          : $studio
        Harga           : $harga
        Jumlah Beli     : $jumlahbeli
        ================================
        Total           : $total
        ==========Terima Kasih==========
        </pre>
        ";
?>
<?php 
include 'koneksi.php'; 
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$harga_perpicis = $_POST['harga_perpicis'];
mysqli_query($koneksi,"insert into barang values('','$nama_barang','$jumlah_barang','$harga_perpicis')");
header("location:query.php");
?>

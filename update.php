<?php 
include 'koneksi.php'; 
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang= $_POST['jumlah_barang'];
$harga_perpicis = $_POST['harga_perpicis'];
mysqli_query($koneksi,"update barang set nama_barang='$nama_barang', jumlah_barang='$jumlah_barang', harga_perpicis='$harga_perpicis' where id='$id'");
header("location:query.php"); 
?>

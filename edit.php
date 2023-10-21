<html><head><title>Edit Data</title></head>
<style>
body
{
background-image: url('bak1.jpg');
background-repeat: no-repeat;
background-size: cover;	    
}
</style> 
<h2>Edit Data Penjualan</h2>
<br/> 
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from barang where id='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="update.php">
<table><tr>	<td>Nama Barang</td>
<td><input type="hidden" name="id" value="<?php echo $d['id']; ?>">
<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>"></td></tr>
<tr><td>Jumlah Barang</td>
<td><input type="text" name="jumlah_barang" value="<?php echo $d['jumlah_barang']; ?>"></td></tr>
<tr><td>Harga Per Picis</td>
<td><input type="text" name="harga_perpicis" value="<?php echo $d['harga_perpicis']; ?>"></td></tr>
<tr><td></td>
<td><br><input type="submit" value="Simpan"></td></tr>		
</table></form>
<?php 
}
?> 
</body></html>

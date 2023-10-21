<html><head><title>Cetak barang</title>
</head><body> <center> <h2>DATA LAPORAN BARANG</h2>
</center><br>
 <?php 
include 'koneksi.php';
?>
<center><table border="1" style="width: 70%">
<tr><th width="2%">NO</th>
<th width="20%">Nama Barang</th>
<th width="5%">Jumlah Barang</th>
<th width="20%">Harga Per Picis</th></tr>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"select * from barang");
while($data = mysqli_fetch_array($sql)){
?>
<tr><td><?php echo $no++; ?></td>
<td><?php echo $data['nama_barang']; ?></td>
<td><?php echo $data['jumlah_barang']; ?></td>
<td><?php echo $data['harga_perpicis']; ?></td></tr>
<?php 
}
?>
</table>
<script>
window.print();
</script> 
</body></html>

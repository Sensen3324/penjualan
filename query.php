<!DOCTYPE html>
<html>
<head>
    <title>Lihat Barang</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        body {
            background-image: url('barang.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>DATA PENJUALAN</h2>
    <a href="forminput.php" class="button">TAMBAH BARANG</a>
<br><br>
    <table>
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga Per PICIS</th>
            <th>OPSI</th>
        </tr>
        
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM barang");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_barang']; ?></td>
            <td><?php echo $d['jumlah_barang']; ?></td>
            <td><?php echo $d['harga_perpicis']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="hal_admin.php" class="button">Halaman Utama</a>
<br><br>
<a href="cetak.php" target="_blank" class="button">Cetak</a>
</body>
</html>

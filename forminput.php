<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
    <style>
        body {
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            margin-top: 50px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <h2>Input Data Penjualan</h2><br>
        <form method="post" action="simpan.php">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" required><br>

            <label for="jumlah_barang">Jumlah Barang:</label>
            <input type="text" id="jumlah_barang" name="jumlah_barang" required><br>

            <label for="harga_perpicis">Harga Per Picis:</label>
            <input type="text" id="harga_perpicis" name="harga_perpicis" required><br>

            <input type="submit" value="Simpan">
        </form>
    </center>
    
</body>
</html>

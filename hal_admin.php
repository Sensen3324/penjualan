<?php
session_start(); // Memulai sesi

// Memeriksa apakah sesi status sudah login
if (!isset($_SESSION['status']) || $_SESSION['status'] !== "sudah_login") {
    // Jika tidak, alihkan ke halaman login
    header("location: login1.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #3498db;
        }

        .menu {
            margin-top: 30px;
        }

        .menu a {
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            margin: 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #2980b9;
        }
    </style>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Yey berhasil! Selamat Datang: <?php echo $_SESSION['username']; ?></h1>
    <div class="menu">
        <a href="forminput.php">Input Data Penjualan</a>
        <a href="query.php">Lihat Data Penjualan</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

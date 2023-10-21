<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "admin";

// Membuat koneksi ke database
$koneksi = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>

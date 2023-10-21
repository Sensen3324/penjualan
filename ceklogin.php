<?php
include("koneksi.php"); // Memasukkan file koneksi.php

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Melakukan query untuk menyimpan data ke dalam database
    $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

    // Menjalankan query dan memeriksa apakah data berhasil disimpan
    if ($conn->query($sql) === TRUE) {
        // Data berhasil disimpan ke database, arahkan pengguna ke halaman admin
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "sudah_login";
        $_SESSION['id_login'] = $conn->insert_id; // Mengambil ID baru setelah insert
        header("location:hal_admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi ke database
    $conn->close();
}
?>

<?php 
session_start(); 

// Periksa apakah sesi ada sebelum menghapusnya
if(isset($_SESSION['username'])) {
    // Hancurkan sesi atau menghilangkan sesi yang ada
    session_destroy(); 
    header("location:index.php?pesan=Anda telah berhasil logout.");
} else {
    // Jika sesi tidak ada,nantinya pengguna di arahkan ke halaman login tanpa pesan
    header("location:index.php");
}
?>


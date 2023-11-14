<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] === null) {
  header('Location: ../index.php');
  exit; 
}
// Sertakan file koneksi.php
include 'koneksi.php';

// Periksa apakah ID siswa telah disediakan dalam URL
if (isset($_GET['id'])) {
    // Ambil ID siswa dari URL
    $siswa_id = $_GET['id'];

    // Buat dan jalankan query untuk menghapus data siswa dari database
    $sql = "DELETE FROM tb_daftarsiswa WHERE id = $siswa_id"; // Ganti 'id' dengan kolom kunci utama Anda

    if ($conn->query($sql) === TRUE) {
        echo header("Location:/ppdb/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID siswa tidak ditemukan.";
}

// Tutup koneksi ke database
$conn->close();
?>

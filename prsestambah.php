<?php
// Sertakan file koneksi.php
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // Tambahkan field lainnya sesuai dengan kebutuhan

    // Buat dan jalankan query untuk menyimpan data ke database
    $sql = "INSERT INTO tb_daftarsiswa (username, password, first_name, last_name, email, phone) VALUES ('$username', '$password', '$first_name', '$last_name', '$email', '$phone')";
    // Tambahkan field lainnya sesuai dengan kebutuhan

    if ($conn->query($sql) === TRUE) {
        echo "Data siswa berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>

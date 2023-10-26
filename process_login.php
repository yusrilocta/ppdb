<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sertakan file koneksi.php
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query SQL untuk memeriksa keberadaan username dan password yang sesuai
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: admin/index.php"); // Redirect ke halaman dashboard atau halaman lain setelah login
    } else {
        // Login gagal
        echo "Username atau password salah.";
    }

    $conn->close();
}
?>

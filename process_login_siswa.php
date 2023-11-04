<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'koneksi.php';

    $nisn = $_POST['nisn'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM calon_siswa WHERE nisn = '$nisn' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];

        header("Location: print.php");
    } else {
        echo "Username atau password salah.";
    }

    $conn->close();
}
?>

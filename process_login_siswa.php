<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'koneksi.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_daftarsiswa WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];

        header("Location: print.php/?id=" . $_SESSION['id']);
    } else {
        echo "Username atau password salah.";
    }

    $conn->close();
}
?>

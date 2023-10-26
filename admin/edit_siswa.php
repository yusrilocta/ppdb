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

    // Buat dan jalankan query untuk mengedit data di database
    $sql = "UPDATE tb_daftarsiswa SET
            username = '$username',
            password = '$password',
            first_name = '$first_name',
            last_name = '$last_name',
            email = '$email',
            phone = '$phone'
            WHERE id = ?"; // Ganti 'id' dengan kolom yang digunakan sebagai kunci utama

    if ($stmt = $conn->prepare($sql)) {
        // Ikat parameter
        $stmt->bind_param("i", $_POST['id']); // Ganti 'id' dengan kolom yang digunakan sebagai kunci utama

        // Eksekusi statement
        if ($stmt->execute()) {
            echo header("Location:/ppdb/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup statement
        $stmt->close();
    }
}

// Tutup koneksi ke database
$conn->close();
?>

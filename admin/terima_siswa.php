<?php
include 'koneksi.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan query SQL untuk mengupdate data
    $sql = "UPDATE calon_siswa SET keterangan = 'diterima' WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id);

        // Eksekusi query
        if ($stmt->execute()) {
            header("Location: index.php");
        } else {
            echo "Terjadi kesalahan saat mengupdate data: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Terjadi kesalahan saat menyiapkan pernyataan SQL: " . $conn->error;
    }
} else {
    echo "ID calon siswa tidak valid.";
}

// Tutup koneksi
$conn->close();
?>
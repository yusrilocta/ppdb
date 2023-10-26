<?php
// Sertakan file koneksi.php
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= $row['username'];
    $password= $row['password'];
    $first_name = $row['first_name'] ;
    $last_name= $row['last_name'] ;
    $email= $row['email'] ;
    $phone= $row['phone'] ;
    $asal_sekolah = $row['asal_sekolah'];
    $tempat_lahir = $row['tempat_lahir'];
    $tanggal_lahir = $row['tanggal_lahir'];
    $jenis_kelamin = $row['jenis_kelamin'];
    $agama = $row['agama'];
    $nisn = $row['nisn'];
    $alamat_siswa = $row['alamat_siswa'];
    $nama_ortu_wali = $row['nama_ortu_wali'];
    $pekerjaan_ortu_wali = $row['pekerjaan_ortu_wali'];
    $alamat_ortu_wali = $row['alamat_ortu_wali'];
    $nis = $row['nis'];

    $sql = "INSERT INTO tb_daftarsiswa (username, password, first_name, last_name, email, phone) VALUES ('$username', '$password', '$first_name', '$last_name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo header("Location:/ppdb/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>

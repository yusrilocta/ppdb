<?php
// Sertakan file koneksi.php
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= $_POST['username'];
    $password= $_POST['password'];
    $first_name = $_POST['first_name'] ;
    $last_name= $_POST['last_name'] ;
    $email= $_POST['email'] ;
    $phone= $_POST['phone'] ;
    $asal_sekolah = $_POST['asal_sekolah'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nisn = $_POST['nisn'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $nama_ortu_wali = $_POST['nama_ortu_wali'];
    $pekerjaan_ortu_wali = $_POST['pekerjaan_ortu_wali'];
    $alamat_ortu_wali = $_POST['alamat_ortu_wali'];
    $nis = $_POST['nis'];

    $sql = "INSERT INTO tb_daftarsiswa (username, password, first_name, last_name, email, phone, asal_sekolah, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, nisn, alamat_siswa, nama_ortu_wali, pekerjaan_ortu_wali, alamat_ortu_wali, nis) 
    VALUES ('$username', '$password', '$first_name', '$last_name', '$email', '$phone', '$asal_sekolah', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$nisn', '$alamat_siswa', '$nama_ortu_wali', '$pekerjaan_ortu_wali', '$alamat_ortu_wali', '$nis')";


    if ($conn->query($sql) === TRUE) {
        echo header("Location:/ppds/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>

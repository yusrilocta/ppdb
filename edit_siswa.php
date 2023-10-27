<?php
// Sertakan file koneksi.php
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "UPDATE tb_daftarsiswa SET
    username = ?,
    password = ?,
    first_name = ?,
    last_name = ?,
    email = ?,
    phone = ?,
    asal_sekolah = ?,
    tempat_lahir = ?,
    tanggal_lahir = ?,
    jenis_kelamin = ?,
    agama = ?,
    nisn = ?,
    alamat_siswa = ?,
    nama_ortu_wali = ?,
    pekerjaan_ortu_wali = ?,
    alamat_ortu_wali = ?,
    nis = ?
    WHERE id = ?";

if ($stmt = $conn->prepare($sql)) {
// Bind parameter
$stmt->bind_param("sssssssssssssssssi", $username, $password, $first_name, $last_name, $email, $phone, $asal_sekolah, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $nisn, $alamat_siswa, $nama_ortu_wali, $pekerjaan_ortu_wali, $alamat_ortu_wali, $nis, $id);

// Setel nilai-nilai parameter
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
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

        // Eksekusi statement
        if ($stmt->execute()) {
            header("Location: print.php/?id=" . $_POST['id']);
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

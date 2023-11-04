<?php
// Sertakan file koneksi.php
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sertakan file koneksi.php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nisn = $_POST['nisn'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik = $_POST['nik'];
    $agama = $_POST['agama'];
    $kebutuhan_khusus = $_POST['kebutuhan_khusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $dusun = $_POST['dusun'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kode_pos = $_POST['kode_pos'];
    $jenis_tinggal = $_POST['jenis_tinggal'];
    $alat_transportasi = $_POST['alat_transportasi'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $hp = $_POST['hp'];
    $penerima_kip = $_POST['penerima_kip'];
    $no_kip = $_POST['no_kip'];
    $jurusan = $_POST['jurusan'];
    $data_ayah_nama = $_POST['nama_ayah'];
    $data_ayah_tahun_lahir = $_POST['tahun_lahir_ayah'];
    $data_ayah_jenjang_pendidikan = $_POST['jenjang_pendidikan_ayah'];
    $data_ayah_pekerjaan = $_POST['pekerjaan_ayah'];
    $data_ayah_penghasilan = $_POST['penghasilan_ayah'];
    $data_ayah_kebutuhan_khusus = $_POST['ayah_kebutuhan_khusus'];
    $data_ibu_nama = $_POST['nama_ibu'];
    $data_ibu_tahun_lahir = $_POST['tahun_lahir_ibu'];
    $data_ibu_jenjang_pendidikan = $_POST['jenjang_pendidikan_ibu'];
    $data_ibu_pekerjaan = $_POST['pekerjaan_ibu'];
    $data_ibu_penghasilan = $_POST['penghasilan_ibu'];
    $data_ibu_kebutuhan_khusus = $_POST['ibu_kebutuhan_khusus'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $jarak_rumah_sekolah = $_POST['jarak_rumah'];
    $waktu_tempuh_sekolah = $_POST['jarak_rumah'];
    $jumlah_saudara_kandung = $_POST['jumlah_saudara'];
    $password = $_POST['password'];

    // Buat pernyataan SQL INSERT yang sesuai
    $sql = "INSERT INTO calon_siswa (nama, jenis_kelamin, nisn, tempat_lahir, tanggal_lahir, nik, agama, kebutuhan_khusus, alamat, rt, rw, dusun, kelurahan, kecamatan, kode_pos, jenis_tinggal, alat_transportasi, asal_sekolah, hp, penerima_kip, no_kip,jurusan, data_ayah_nama, data_ayah_tahun_lahir, data_ayah_jenjang_pendidikan, data_ayah_pekerjaan, data_ayah_penghasilan, data_ayah_kebutuhan_khusus, data_ibu_nama, data_ibu_tahun_lahir, data_ibu_jenjang_pendidikan, data_ibu_pekerjaan, data_ibu_penghasilan, data_ibu_kebutuhan_khusus, berat_badan, tinggi_badan, jarak_rumah_sekolah, waktu_tempuh_sekolah, jumlah_saudara_kandung, password) 
    VALUES ('$nama', '$jenis_kelamin', '$nisn', '$tempat_lahir', '$tanggal_lahir', '$nik', '$agama', '$kebutuhan_khusus', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$kode_pos', '$jenis_tinggal', '$alat_transportasi', '$asal_sekolah', '$hp', '$penerima_kip', '$no_kip','$jurusan', '$data_ayah_nama', '$data_ayah_tahun_lahir', '$data_ayah_jenjang_pendidikan', '$data_ayah_pekerjaan', '$data_ayah_penghasilan', '$data_ayah_kebutuhan_khusus', '$data_ibu_nama', '$data_ibu_tahun_lahir', '$data_ibu_jenjang_pendidikan', '$data_ibu_pekerjaan', '$data_ibu_penghasilan', '$data_ibu_kebutuhan_khusus', '$berat_badan', '$tinggi_badan', '$jarak_rumah_sekolah', '$waktu_tempuh_sekolah', '$jumlah_saudara_kandung','$password')";

    if ($conn->query($sql) === TRUE) {
        echo header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>

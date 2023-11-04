<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] === null) {
    header('Location: ../index.php');
    exit; 
}
                // Ambil data yang telah diupdate dari database
                include 'koneksi.php';

                $siswa_id = $_GET['id']; // Ambil ID siswa dari URL

                $sql = "SELECT * FROM calon_siswa WHERE id = $siswa_id"; // Ganti 'id' dengan kolom kunci utama Anda

                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $nama = $row['nama'];
                    $jenis_kelamin = $row['jenis_kelamin'];
                    $nisn = $row['nisn'];
                    $tempat_lahir = $row['tempat_lahir'];
                    $tanggal_lahir = $row['tanggal_lahir'];
                    $nik = $row['nik'];
                    $agama = $row['agama'];
                    $kebutuhan_khusus = $row['kebutuhan_khusus'];
                    $alamat = $row['alamat'];
                    $rt = $row['rt'];
                    $rw = $row['rw'];
                    $dusun = $row['dusun'];
                    $kelurahan = $row['kelurahan'];
                    $kecamatan = $row['kecamatan'];
                    $kode_pos = $row['kode_pos'];
                    $jenis_tinggal = $row['jenis_tinggal'];
                    $alat_transportasi = $row['alat_transportasi'];
                    $asal_sekolah = $row['asal_sekolah'];
                    $hp = $row['hp'];
                    $penerima_kip = $row['penerima_kip'];
                    $no_kip = $row['no_kip'];
                    $jurusan = $row['jurusan'];
                    $data_ayah_nama = $row['data_ayah_nama'];
                    $data_ayah_tahun_lahir = $row['data_ayah_tahun_lahir'];
                    $data_ayah_jenjang_pendidikan = $row['data_ayah_jenjang_pendidikan'];
                    $data_ayah_pekerjaan = $row['data_ayah_pekerjaan'];
                    $data_ayah_penghasilan = $row['data_ayah_penghasilan'];
                    $data_ayah_kebutuhan_khusus = $row['data_ayah_kebutuhan_khusus'];
                    $data_ibu_nama = $row['data_ibu_nama'];
                    $data_ibu_tahun_lahir = $row['data_ibu_tahun_lahir'];
                    $data_ibu_jenjang_pendidikan = $row['data_ibu_jenjang_pendidikan'];
                    $data_ibu_pekerjaan = $row['data_ibu_pekerjaan'];
                    $data_ibu_penghasilan = $row['data_ibu_penghasilan'];
                    $data_ibu_kebutuhan_khusus = $row['data_ibu_kebutuhan_khusus'];
                    $berat_badan = $row['berat_badan'];
                    $tinggi_badan = $row['tinggi_badan'];
                    $jarak_rumah_sekolah = $row['jarak_rumah_sekolah'];
                    $waktu_tempuh_sekolah = $row['waktu_tempuh_sekolah'];
                    $jumlah_saudara_kandung = $row['jumlah_saudara_kandung'];
                }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <!-- Include Bootstrap CSS -->    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="#">SMK Nurul Hidayah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"> | Administrasi Pendaftaran Peserta Didik Baru</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <form id="editsiswa" method="POST" action="/ppdb/edit_siswa.php">
    <div class="row">
    <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
        
                <div class="col-md-6">
                
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id ?>" required>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $jenis_kelamin ?>" required>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $nisn ?>">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"value="<?php echo $tempat_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="<?php echo $tanggal_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik ?>">
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $agama ?>">
                    </div>
                    <div class="form-group">
                        <label for="kebutuhan_khusus">Kebutuhan Khusus (ya/tidak)</label>
                        <select class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus">
                            <option  value="<?php echo $kebutuhan_khusus ?>"><?php echo $kebutuhan_khusus ?></option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $alamat ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rt">RT</label>
                        <input type="text" class="form-control" id="rt" name="rt"value="<?php echo $rt ?>">
                    </div>
                    <div class="form-group">
                        <label for="rw">RW</label>
                        <input type="text" class="form-control" id="rw" name="rw"value="<?php echo $rw ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dusun">Dusun</label>
                        <input type="text" class="form-control" id="dusun" name="dusun"value="<?php echo $dusun ?>">
                    </div>
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan"value="<?php echo $kelurahan ?>">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $kecamatan ?>">
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos"value="<?php echo $kode_pos ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis_tinggal">Jenis Tinggal</label>
                        <select class="form-control" id="jenis_tinggal" name="jenis_tinggal" value="<?php echo $jenis_tinggal ?>">
                            <option value="Rumah Sendiri">Rumah Sendiri</option>
                            <option value="Kos">Kos</option>
                            <option value="Kontrakan">Kontrakan</option>
                            <option value="Rumah Orang Tua">Rumah Orang Tua</option>
                            <option value="Asrama">Asrama</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alat_transportasi">Alat Transportasi</label>
                        <input type="text" class="form-control" id="alat_transportasi" name="alat_transportasi" value="<?php echo $alat_transportasi ?>">
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah / Sekolah Sebelumnya</label>
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?php echo $asal_sekolah ?>">
                    </div>
                    <div class="form-group">
                        <label for="hp">HP</label>
                        <input type="text" class="form-control" id="hp" name="hp" value="<?php echo $hp ?>">
                    </div>
                    <div class="form-group">
                        <label for="penerima_kip">Penerima KIP</label>
                        <select class="form-control" id="penerima_kip" name="penerima_kip" value="<?php echo $penerima_kip ?>">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_kip">No. KIP</label>
                        <input type="text" class="form-control" id="no_kip" name="no_kip" value="<?php echo $no_kip ?>">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $jurusan ?>">
                    </div>
                </div>
            </div>
            <!-- Field untuk Data Ayah -->
            <div class="alert alert-primary mt-2">
                <strong>Data Ayah</strong>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $data_ayah_nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="tahun_lahir_ayah">Tahun Lahir Ayah</label>
                        <input type="text" class="form-control" id="tahun_lahir_ayah" name="tahun_lahir_ayah" value="<?php echo $data_ayah_tahun_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenjang_pendidikan_ayah">Jenjang Pendidikan Ayah</label>
                        <input type="text" class="form-control" id="jenjang_pendidikan_ayah" name="jenjang_pendidikan_ayah" value="<?php echo $data_ayah_jenjang_pendidikan ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"value="<?php echo $data_ayah_pekerjaan ?>">
                    </div>
                    <div class="form-group">
                        <label for="penghasilan_ayah">Penghasilan Ayah</label>
                        <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" value="<?php echo $data_ayah_pekerjaan ?>">
                    </div>
                    <div class="form-group">
                        <label for="data_ayah_kebutuhan_khusus">Penghasilan Ayah</label>
                        <input type="text" class="form-control" id="data_ayah_kebutuhan_khusus" name="ayah_kebutuhan_khusus" value="<?php echo $data_ibu_kebutuhan_khusus  ?>">
                    </div>
                </div>
            </div>
            <!-- Field untuk Data Ibu -->
            <div class="alert alert-primary mt-2">
                <strong>Data Ibu</strong>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $data_ibu_nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="tahun_lahir_ibu">Tahun Lahir Ibu</label>
                        <input type="text" class="form-control" id="tahun_lahir_ibu" name="tahun_lahir_ibu" value="<?php echo $data_ibu_tahun_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenjang_pendidikan_ibu">Jenjang Pendidikan Ibu</label>
                        <input type="text" class="form-control" id="jenjang_pendidikan_ibu" name="jenjang_pendidikan_ibu" value="<?php echo $data_ibu_jenjang_pendidikan ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo $data_ibu_pekerjaan ?>">
                    </div>
                    <div class="form-group">
                        <label for="penghasilan_ibu">Penghasilan Ibu</label>
                        <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" value="<?php echo $data_ibu_penghasilan ?>">
                    </div>
                    <div class="form-group">
                        <label for="data_ibu_kebutuhan_khusus">Penghasilan Ibu</label>
                        <input type="text" class="form-control" id="data_ibu_kebutuhan_khusus" name="ibu_kebutuhan_khusus" value="<?php echo $data_ibu_kebutuhan_khusus ?>">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary mt-2">
                <strong>Data Lain</strong>
            </div>
            <div class="form-group">
                <label for="berat_badan">Berat Badan</label>
                <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?php echo $berat_badan ?>">
            </div>
            <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan</label>
                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?php echo $tinggi_badan ?>">
            </div>
            <div class="form-group">
                <label for="jarak_rumah">Jarak Rumah ke Sekolah (km)</label>
                <input type="text" class="form-control" id="jarak_rumah" name="jarak_rumah" value="<?php echo $jarak_rumah_sekolah ?>" required>
            </div>
            <div class="form-group">
                <label for="waktu_tempuh">Waktu Tempuh ke Sekolah (menit)</label>
                <input type="text" class="form-control" id="waktu_tempuh" name="waktu_tempuh" value="<?php echo $waktu_tempuh_sekolah ?>" required>
            </div>
            <div class="form-group">
                <label for="jumlah_saudara">Jumlah Saudara Kandung</label>
                <input type="text" class="form-control" id="jumlah_saudara" name="jumlah_saudara" value="<?php echo $jumlah_saudara_kandung ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Masukan Password BARU</label>
                <input type="text" class="form-control" id="password" name="password" value="<?php echo $password ?>">
            </div>
            <div class="mt-4">
            <!-- Tambahkan field lainnya sesuai dengan kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
<!-- Include Bootstrap JS and jQuery -->
<!-- Tambahkan Bootstrap JS dan jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


<?php 
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] === null) {
  header('Location: ../index.php');
  exit; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <!-- Include Bootstrap CSS -->    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php 
$nisn = $_GET['nisn'];
$password = $_GET['password'];
?>
<div class="container">
    <h2>Masukkan Data Berikut Dibawah Ini Dengan Lengkap Dan Benar</h2>

    <form id="tambahSiswaForm" method="post" action="prsestambah.php">
    <div class="row">
    <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
        
                <div class="col-md-6">
                
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
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
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama">
                    </div>
                    <div class="form-group">
                        <label for="kebutuhan_khusus">Kebutuhan Khusus (ya/tidak)</label>
                        <select class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rt">RT</label>
                        <input type="text" class="form-control" id="rt" name="rt">
                    </div>
                    <div class="form-group">
                        <label for="rw">RW</label>
                        <input type="text" class="form-control" id="rw" name="rw">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dusun">Dusun</label>
                        <input type="text" class="form-control" id="dusun" name="dusun">
                    </div>
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                    </div>
                    <div class="form-group">
                        <label for="jenis_tinggal">Jenis Tinggal</label>
                        <select class="form-control" id="jenis_tinggal" name="jenis_tinggal">
                            <option value="Rumah Sendiri">Rumah Sendiri</option>
                            <option value="Kos">Kos</option>
                            <option value="Kontrakan">Kontrakan</option>
                            <option value="Rumah Orang Tua">Rumah Orang Tua</option>
                            <option value="Asrama">Asrama</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alat_transportasi">Alat Transportasi</label>
                        <input type="text" class="form-control" id="alat_transportasi" name="alat_transportasi">
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah / Sekolah Sebelumnya</label>
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                    </div>
                    <div class="form-group">
                        <label for="hp">HP</label>
                        <input type="text" class="form-control" id="hp" name="hp">
                    </div>
                    <div class="form-group">
                        <label for="penerima_kip">Penerima KIP</label>
                        <select class="form-control" id="penerima_kip" name="penerima_kip">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_kip">No. KIP</label>
                        <input type="text" class="form-control" id="no_kip" name="no_kip">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">JURUSAN</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                </div>
            </div>
            <!-- Field untuk Data Ayah -->
            <div class="alert alert-primary">
                <strong>Data Ayah</strong>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                    </div>
                    <div class="form-group">
                        <label for="tahun_lahir_ayah">Tahun Lahir Ayah</label>
                        <input type="text" class="form-control" id="tahun_lahir_ayah" name="tahun_lahir_ayah">
                    </div>
                    <div class="form-group">
                        <label for="jenjang_pendidikan_ayah">Jenjang Pendidikan Ayah</label>
                        <input type="text" class="form-control" id="jenjang_pendidikan_ayah" name="jenjang_pendidikan_ayah">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                    </div>
                    <div class="form-group">
                        <label for="penghasilan_ayah">Penghasilan Ayah</label>
                        <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah">
                    </div>
                    <div class="form-group">
                        <label for="ayah_kebutuhan_khusus">ayah berkebutuhan khusus</label>
                        <input type="text" class="form-control" id="ayah_kebutuhan_khusus" name="ayah_kebutuhan_khusus">
                    </div>
                </div>
            </div>
            <!-- Field untuk Data Ibu -->
            <div class="alert alert-primary">
                <strong>Data Ibu</strong>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                    </div>
                    <div class="form-group">
                        <label for="tahun_lahir_ibu">Tahun Lahir Ibu</label>
                        <input type="text" class="form-control" id="tahun_lahir_ibu" name="tahun_lahir_ibu">
                    </div>
                    <div class="form-group">
                        <label for="jenjang_pendidikan_ibu">Jenjang Pendidikan Ibu</label>
                        <input type="text" class="form-control" id="jenjang_pendidikan_ibu" name="jenjang_pendidikan_ibu">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                    </div>
                    <div class="form-group">
                        <label for="penghasilan_ibu">Penghasilan Ibu</label>
                        <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu">
                    </div>
                    <div class="form-group">
                        <label for="ibu_kebutuhan_khusus">Ibu berkebutuhan khusus</label>
                        <input type="text" class="form-control" id="ibu_kebutuhan_khusus" name="ibu_kebutuhan_khusus">
                    </div>
                </div>
            </div>
            <h3>Data Lain</h3>
            <div class="form-group">
                <label for="berat_badan">Berat Badan</label>
                <input type="text" class="form-control" id="berat_badan" name="berat_badan">
            </div>
            <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan</label>
                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan">
            </div>
            <div class="form-group">
                <label for="jarak_rumah">Jarak Rumah ke Sekolah (km)</label>
                <input type="text" class="form-control" id="jarak_rumah" name="jarak_rumah" required>
            </div>
            <div class="form-group">
                <label for="waktu_tempuh">Waktu Tempuh ke Sekolah (menit)</label>
                <input type="text" class="form-control" id="waktu_tempuh" name="jarak_rumah" required>
            </div>
            <div class="form-group">
                <label for="jumlah_saudara">Jumlah Saudara Kandung</label>
                <input type="text" class="form-control" id="jumlah_saudara" name="jumlah_saudara" required>
            </div>
            <div class="form-group">
                <label for="password">Masukan Password BARU</label>
                <input type="text" class="form-control" id="password" name="password" value="<?php echo $password ?>">
            </div>
        <div class="mt-4">
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </div>
        </div>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery -->
<!-- Tambahkan Bootstrap JS dan jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


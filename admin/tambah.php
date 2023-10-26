<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <!-- Include Bootstrap CSS -->    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h2>Masukkan Data Berikut Dibawah Ini Dengan Lengkap Dan Benar</h2>

    <form id="tambahSiswaForm" method="post" action="prsestambah.php">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" required>
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
            </div>
            <div class="form-group">
                <label for="alamat_siswa">Alamat Siswa</label>
                <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="nama_ortu_wali">Nama Orang Tua/Wali</label>
                <input type="text" class="form-control" id="nama_ortu_wali" name="nama_ortu_wali" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ortu_wali">Pekerjaan Orang Tua/Wali</label>
                <input type="text" class="form-control" id="pekerjaan_ortu_wali" name="pekerjaan_ortu_wali" required>
            </div>
            <div class="form-group">
                <label for="alamat_ortu_wali">Alamat Orang Tua/Wali</label>
                <textarea class="form-control" id="alamat_ortu_wali" name="alamat_ortu_wali" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" required>
            </div>
        <!-- Tambahkan field lainnya sesuai dengan kebutuhan -->
        <div class="mt-4">
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery -->
<!-- Tambahkan Bootstrap JS dan jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


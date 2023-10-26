<?php
                // Ambil data yang telah diupdate dari database
                include 'koneksi.php';

                $siswa_id = $_GET['id']; // Ambil ID siswa dari URL

                $sql = "SELECT * FROM tb_daftarsiswa WHERE id = $siswa_id"; // Ganti 'id' dengan kolom kunci utama Anda

                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
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
                    
                    //tolong masukkan datanya//tolong masukkan datanya
                }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <!-- Include Bootstrap CSS -->    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
        <h2>Edit Data Siswa</h2>
        <form method="POST" action="/ppdb/edit_siswa.php">
            <!-- Field 'id' diperlukan untuk mengidentifikasi data yang akan diubah -->
            <input type="hidden" name="id" value="<?php echo $siswa_id; ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name; ?>" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" required>
            </div>
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?php echo $asal_sekolah; ?>" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-Laki" <?php if ($jenis_kelamin == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ($jenis_kelamin == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $agama; ?>" required>
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $nisn; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat_siswa">Alamat Siswa</label>
                <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3" required><?php echo $alamat_siswa; ?></textarea>
            </div>
            <div class="form-group">
                <label for="nama_ortu_wali">Nama Orang Tua/Wali</label>
                <input type="text" class="form-control" id="nama_ortu_wali" name="nama_ortu_wali" value="<?php echo $nama_ortu_wali; ?>" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ortu_wali">Pekerjaan Orang Tua/Wali</label>
                <input type="text" class="form-control" id="pekerjaan_ortu_wali" name="pekerjaan_ortu_wali" value="<?php echo $pekerjaan_ortu_wali; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat_ortu_wali">Alamat Orang Tua/Wali</label>
                <textarea class="form-control" id="alamat_ortu_wali" name="alamat_ortu_wali" rows="3" required><?php echo $alamat_ortu_wali; ?></textarea>
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $nis; ?>" required>
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


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
        <form id="editSiswaForm" method="post" action="edit_siswa.php">
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


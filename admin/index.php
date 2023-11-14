<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['username']) || $_SESSION['username'] === null) {
  header('Location: ../index.php');
  exit; 
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Data PPDB</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="#">SMK Nurul Huda</a>
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
      <div class="row">
        <div class="col-4">
        <form method="GET" action="index.php">
<div class="row">
<div class="col">
<div class="form-group">
        <select class="form-control" name="keterangan" id="keterangan">
            <option value="semua">Semua Data</option>
            <option value="diterima">Diterima</option>
            <option value="belum diterima">Belum Diterima</option>
        </select>
    
    </div>
</div>
<div class="col">
<button type="submit" class="btn btn-primary">Filter</button>
</div>
    </div>
</form>
        </div>
        <div class="col-2">
        <a class="btn btn-primary" href="tambah.php">Tambah Siswa</a>
        </div>
      </div>
    
    



        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>NIK</th>
                    <th>Asal Sekolah</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
              <?php
$keterangan = isset($_GET['keterangan']) ? $_GET['keterangan'] : "semua";

// Query SQL
$sql = "SELECT * FROM calon_siswa";

if ($keterangan !== "semua") {
    $sql .= " WHERE keterangan = ?";
}

$stmt = $conn->prepare($sql);

if ($stmt) {
    if ($keterangan !== "semua") {
        $stmt->bind_param("s", $keterangan);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    // Tampilkan data siswa sesuai filter
    while ($row = $result->fetch_assoc()) {
        // Tampilkan data siswa
        echo "<tr>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['nisn'] . "</td>";
        echo "<td>" . $row['nik'] . "</td>";
        echo "<td>" . $row['asal_sekolah'] . "</td>";
        echo "<td>" . $row['keterangan'] . "</td>";
        echo "<td>
            <a class='btn btn-warning' href='terima_siswa.php/?id=".$row['id']."'>Accept</a>
            <a class='btn btn-warning' href='edit_data.php/?id=".$row['id']."'>Edit</a>
            <a class='btn btn-danger' href='hapus.php/?id=".$row['id']."'>Hapus</a>
            <a class='btn btn-primary' href='print.php/?id=".$row['id']."'>PRINT</a>
        </td>";
        echo "</tr>";
    }
} else {
    echo "Tidak ada data tersedia.";
}

$conn->close();
?>
            </tbody>
        </table>
    </div>
    <!-- Tambahkan Bootstrap JS dan jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

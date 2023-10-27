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
    <a class="btn btn-primary" href="tambah.php">Tambah Siswa</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Aksi</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                $sql = "SELECT * FROM tb_daftarsiswa";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>
                        <a class='btn btn-warning' href='edit_data.php/?id=".$row['id']."'>Edit</a>
                        <a class='btn btn-danger' href='hapus.php/?id=".$row['id']."'>Hapus</a>
                        <a class='btn btn-primary' href='print.php/?id=".$row['id']."'>PRINT</a>
                        </td>";
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
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<script>
    document.getElementById('downloadPdf').addEventListener('click', function () {
        generatePDF();
    });

    function generatePDF() {
        // Collect data you want to include in the PDF
        var data = {
            'name': 'John Doe',
            'cs_phone': '123-456-7890',
            // ... (other data)
        };

        // Create an HTML template with the data
        var htmlContent = `
<body>
<table align="center" border="0" cellpadding="1" style="width: 700px;"><tbody>
<tr>     <td colspan="3"><div align="center">
<span style="font-family: Verdana; font-size: x-small;"><b>SMK INFORMATIKA SUMEDANG

jln. Anggrek situ no.19 telp.(0261) 202767</b></span>
<hr />
</div>
</td>   </tr>
<tr>     <td colspan="2"><table border="0" cellpadding="1" style="width: 400px;"><tbody>
<tr>         <td width="93"><span style="font-size: x-small;">No</span></td>         <td width="8"><span style="font-size: x-small;">:</span></td>         <td width="200"><span style="font-size: x-small;">005/ smk-if/ yps/ IV/ 2011</span></td>       </tr>
<tr>         <td><span style="font-size: x-small;">Lampiran</span></td>         <td><span style="font-size: x-small;">:</span></td>         <td><span style="font-size: x-small;">-</span></td>       </tr>
<tr>         <td><span style="font-size: x-small;">Perihal</span></td>         <td><span style="font-size: x-small;">:</span></td>         <td><span style="font-size: x-small;">Rapat orangtua siswa</span></td>       </tr>
</tbody></table>
</td>     <td valign="top"><div align="right">
<span style="font-size: x-small;">Sumedang, 03 mei 2011</span></div>
</td>   </tr>
<tr>     <td width="302"></td>     <td width="343"></td>     <td width="339"></td>   </tr>
<tr>     <td><table border="0" style="width: 239px;"><tbody>
<tr>         <td width="74"><span style="font-size: x-small;">kepada yth</span></td>         <td width="11">
</td>         <td width="140"></td>       </tr>
<tr>         <td><span style="font-size: x-small;">orangtua/wali siswa</span></td>         <td></td>         <td>
</td>       </tr>
<tr>         <td><span style="font-size: x-small;">di</span></td>         <td></td>         <td>
</td>       </tr>
<tr>         <td><span style="font-size: x-small;">tempat</span></td>         <td></td>         <td>
</td>       </tr>
</tbody></table>
</td>     <td></td>     <td></td>   </tr>
<tr>     <td></td>     <td></td>     <td></td>   </tr>
<tr>     <td colspan="3" height="270" valign="top"><div align="justify">
<pre><span style="font-size: x-small;">Dengan hormat,
Sehubungan akan diadakannya Praktek kerja industri (Prakerin) siswa kelas XI maka kami selaku pihak sekolah akan membicarakan mengenai
pelaksanaan prakerin yang akan dilaksanakan pada :</span></pre>
<table border="0" style="width: 352px;"><tbody>
<tr>           <td width="80"><span style="font-size: x-small;">hari/tanggal</span></td>           <td width="10"><span style="font-size: x-small;">:</span></td>           <td width="248"><span style="font-size: x-small;">Rabu, 11 mei 2011</span></td>         </tr>
<tr>           <td><span style="font-size: x-small;">waktu</span></td>           <td><span style="font-size: x-small;">:</span></td>           <td><span style="font-size: x-small;">08.00 - selesai</span></td>         </tr>
<tr>           <td><span style="font-size: x-small;">tempat</span></td>           <td><span style="font-size: x-small;">:</span></td>           <td><span style="font-size: x-small;">Aula SMK Informatika Sumedang </span></td>         </tr>
</tbody></table>
<div align="justify">
<span style="font-size: x-small;">

Demikian surat ini kami sampaikan, kami harap ibu/bapa dapat menghadiri rapat ini. sekian dan terima kasih.</span> </div>
</div>
<div align="center">
<span style="font-size: x-small;">Mengetahui</span></div>
</td>   </tr>
<tr>     <td><div align="center">
<span style="font-size: x-small;">Sekertaris,</span></div>
<div align="center">

</div>
<div align="center">
<span style="font-size: x-small;">Ai komala sari </span></div>
</td>     <td></td>     <td valign="top"><div align="center">
<span style="font-size: x-small;">Kepala Sekolah, </span></div>
<div align="center">

</div>
<div align="center">
<span style="font-size: x-small;">E.Sulyati Dra,M.pd.</span></div>
</td>   </tr>
</tbody></table></body>
        `;

        // Create PDF using html2pdf
        html2pdf().from(htmlContent).save();
    }
</script>

  </body>
</html>

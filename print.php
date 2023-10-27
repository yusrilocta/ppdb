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
                }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="/index.php">SMK Nurul Hidayah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"> | Silahkan Print Data Yang Sudah Tersedia</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   <table align="center" border="0" cellpadding="1" style="width: 700px;">
      <tbody>
         <tr>
            <td colspan="3">
               <div align="center">
                  <span style="font-family: Verdana; font-size: x-small;"><b>SMK Nurul Hidayah<br/>
                  jln. Anggrek situ no.19 telp.(0261) 202767</b></span>
                  <hr />
               </div>
            </td>
         </tr>
         <tr>
            <td colspan="2">
               <table border="0" cellpadding="1" style="width: 400px;">
                  <tbody>
                     <tr>
                        <td width="93"><span style="font-size: x-small;">No</span></td>
                        <td width="8"><span style="font-size: x-small;">:</span></td>
                        <td width="200"><span style="font-size: x-small;">_____/________/________/______</span></td>
                     </tr>
                     <tr>
                        <td><span style="font-size: x-small;">Lampiran</span></td>
                        <td><span style="font-size: x-small;">:</span></td>
                        <td><span style="font-size: x-small;">Berkas Lengkap</span></td>
                     </tr>
                     <tr>
                        <td><span style="font-size: x-small;">Perihal</span></td>
                        <td><span style="font-size: x-small;">:</span></td>
                        <td><span style="font-size: x-small;">Pendaftaran Peserta Didik Baru</span></td>
                     </tr>
                  </tbody>
               </table>
            </td>
            <td valign="top">
               <div align="right">
                  <span style="font-size: x-small;">Sumatera Selatan, <?php echo date('dS F Y') ?></span>
               </div>
            </td>
         </tr>
         <tr>
            <td width="302"></td>
            <td width="343"></td>
            <td width="339"></td>
         </tr>
         <tr>
            <td>
            </td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td colspan="3" height="270" valign="top">
               <div align="justify">
                  <pre><span style="font-size: x-small;">Dengan hormat,
Sehubungan dengan penerimaan peserta didik baru, saya dan orangtua saya
yang bertanda tangan dibawah ini mendaftar ke SMK Nurul Hidayah Sebagai Siswa/i baru dengan data :</span></pre>
                  <table border="0" style="width: 352px;">
                     <tbody>
                        <tr>
                           <td width="80"><span style="font-size: x-small;">tempat/tanggal</span></td>
                           <td width="10"><span style="font-size: x-small;">:</span></td>
                           <td width="248"><span style="font-size: x-small;">Sumatera Selatan, <?php echo date('dS F Y') ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Nama</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"> <?php echo $first_name." ".$last_name ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">No Handphone</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $phone ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Asal Sekolah</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $asal_sekolah ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">TTL</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $tempat_lahir."/". $tanggal_lahir ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Jenis Kelamin</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $jenis_kelamin ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Kepercayaan/Agama</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $agama ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">NISN</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-normal;"><?php echo $nisn ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">NIS</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $nis ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Alamat Siswa</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $alamat_siswa ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Nama Orang Tua</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $nama_ortu_wali ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Pekerjaan Wali</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $pekerjaan_ortu_wali ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Alamat Orang Tua</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $alamat_ortu_wali ?></span></td>
                        </tr>
                     </tbody>
                  </table>
                  <div align="justify">
                     <span style="font-size: x-small;">
                     Demikian surat ini kami sampaikan, kami harap ibu/bapa dapat menghadiri rapat ini. sekian dan terima kasih.</span> 
                  </div>
               </div>
               <div align="center">
                  <span style="font-size: x-small;">Mengetahui</span>
               </div>
            </td>
         </tr>
         <tr>
            <td>
               <div align="center">
                  <span style="font-size: x-small;">Calon Siswa,</span>
               </div>
               <div align="center">
               </div>
               <br/>
               <br/>
               <br/>
               <div align="center">
                  <span style="font-size: x-small;"><?php echo $first_name." ".$last_name ?></span>
               </div>
            </td>
            <td></td>
            <td valign="top">
               <div align="center">
                  <span style="font-size: x-small;">Orang Tua Wali, </span>
               </div>
               <br/>
               <br/>
               <br/>
               <div align="center">
               </div>
               <div align="center">
                  <span style="font-size: x-small;"><?php echo $nama_ortu_wali ?></span>
               </div>
            </td>
         </tr>
      </tbody>
   </table>
<br/>
<div class="text-center">
    <button class="btn btn-primary" id="downloadPdf">PRINT DATA</button>
    <a class="btn btn-warning" href="/ppds/edit_data.php/?id=<?php echo $siswa_id ?>">Edit</a>
    </div>
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
   <table align="center" border="0" cellpadding="1" style="width: 700px;">
      <tbody>
         <tr>
            <td colspan="3">
               <div align="center">
                  <span style="font-family: Verdana; font-size: x-small;"><b>SMK Nurul Hidayah<br/>
                  jln. Anggrek situ no.19 telp.(0261) 202767</b></span>
                  <hr />
               </div>
            </td>
         </tr>
         <tr>
            <td colspan="2">
               <table border="0" cellpadding="1" style="width: 400px;">
                  <tbody>
                     <tr>
                        <td width="93"><span style="font-size: x-small;">No</span></td>
                        <td width="8"><span style="font-size: x-small;">:</span></td>
                        <td width="200"><span style="font-size: x-small;">_____/________/________/______</span></td>
                     </tr>
                     <tr>
                        <td><span style="font-size: x-small;">Lampiran</span></td>
                        <td><span style="font-size: x-small;">:</span></td>
                        <td><span style="font-size: x-small;">Berkas Lengkap</span></td>
                     </tr>
                     <tr>
                        <td><span style="font-size: x-small;">Perihal</span></td>
                        <td><span style="font-size: x-small;">:</span></td>
                        <td><span style="font-size: x-small;">Pendaftaran Peserta Didik Baru</span></td>
                     </tr>
                  </tbody>
               </table>
            </td>
            <td valign="top">
               <div align="right">
                  <span style="font-size: x-small;">Sumatera Selatan, <?php echo date('dS F Y') ?></span>
               </div>
            </td>
         </tr>
         <tr>
            <td width="302"></td>
            <td width="343"></td>
            <td width="339"></td>
         </tr>
         <tr>
            <td>
            </td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td colspan="3" height="270" valign="top">
               <div align="justify">
                  <pre><span style="font-size: x-small;">Dengan hormat,
Sehubungan dengan penerimaan peserta didik baru, saya dan orangtua saya
yang bertanda tangan dibawah ini mendaftar ke SMK Nurul Hidayah Sebagai Siswa/i baru dengan data :</span></pre>
                  <table border="0" style="width: 352px;">
                     <tbody>
                        <tr>
                           <td width="80"><span style="font-size: x-small;">tempat/tanggal</span></td>
                           <td width="10"><span style="font-size: x-small;">:</span></td>
                           <td width="248"><span style="font-size: x-small;">Sumatera Selatan, <?php echo date('dS F Y') ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Nama</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"> <?php echo $first_name." ".$last_name ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">No Handphone</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $phone ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Asal Sekolah</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $asal_sekolah ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">TTL</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $tempat_lahir."/". $tanggal_lahir ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Jenis Kelamin</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $jenis_kelamin ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Kepercayaan/Agama</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $agama ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">NISN</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-normal;"><?php echo $nisn ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">NIS</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $nis ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Alamat Siswa</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $alamat_siswa ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Nama Orang Tua</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $nama_ortu_wali ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Pekerjaan Wali</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $pekerjaan_ortu_wali ?></span></td>
                        </tr>
                        <tr>
                           <td><span style="font-size: x-small;">Alamat Orang Tua</span></td>
                           <td><span style="font-size: x-small;">:</span></td>
                           <td><span style="font-size: x-small;"><?php echo $alamat_ortu_wali ?></span></td>
                        </tr>
                     </tbody>
                  </table>
                  <div align="justify">
                     <span style="font-size: x-small;">
                     Demikian surat ini kami sampaikan, kami harap ibu/bapa dapat menghadiri rapat ini. sekian dan terima kasih.</span> 
                  </div>
               </div>
               <div align="center">
                  <span style="font-size: x-small;">Mengetahui</span>
               </div>
            </td>
         </tr>
         <tr>
            <td>
               <div align="center">
                  <span style="font-size: x-small;">Calon Siswa,</span>
               </div>
               <div align="center">
               </div>
               <br/>
               <br/>
               <br/>
               <div align="center">
                  <span style="font-size: x-small;"><?php echo $first_name." ".$last_name ?></span>
               </div>
            </td>
            <td></td>
            <td valign="top">
               <div align="center">
                  <span style="font-size: x-small;">Orang Tua Wali, </span>
               </div>
               <br/>
               <br/>
               <br/>
               <div align="center">
               </div>
               <div align="center">
                  <span style="font-size: x-small;"><?php echo $nama_ortu_wali ?></span>
               </div>
            </td>
         </tr>
      </tbody>
   </table>
</body>
        `;

        // Create PDF using html2pdf
        html2pdf().from(htmlContent).save();
    }
</script>

</body>
</html>


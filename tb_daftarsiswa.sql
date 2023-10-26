-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 11:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftarsiswa`
--

CREATE TABLE `tb_daftarsiswa` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '-',
  `password` varchar(100) NOT NULL,
  `password_reset_key` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT ' ',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL DEFAULT '',
  `asal_sekolah` varchar(50) NOT NULL DEFAULT '',
  `tempat_lahir` varchar(20) NOT NULL DEFAULT '',
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(20) NOT NULL DEFAULT '',
  `agama` varchar(15) NOT NULL DEFAULT '',
  `nisn` varchar(10) NOT NULL DEFAULT '',
  `alamat_siswa` varchar(50) NOT NULL DEFAULT '',
  `nama_ortu_wali` varchar(30) NOT NULL DEFAULT '',
  `pekerjaan_ortu_wali` varchar(20) NOT NULL DEFAULT '',
  `alamat_ortu_wali` varchar(50) NOT NULL DEFAULT '',
  `nis` varchar(10) NOT NULL DEFAULT '',
  `ket` varchar(20) NOT NULL DEFAULT 'Belum diverifikasi',
  `activated` tinyint(1) NOT NULL DEFAULT 1,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_daftarsiswa`
--

INSERT INTO `tb_daftarsiswa` (`id`, `id_role`, `username`, `password`, `password_reset_key`, `first_name`, `last_name`, `email`, `phone`, `asal_sekolah`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `nisn`, `alamat_siswa`, `nama_ortu_wali`, `pekerjaan_ortu_wali`, `alamat_ortu_wali`, `nis`, `ket`, `activated`, `last_login`, `created_at`, `updated_at`) VALUES
(20, 2, 'inukaitakerunomikoto', '$2y$05$qRPM1i1iSwAvmPjkfR2QNu5WuutFei5Y0DY3cCdBfTl4MVMHw1XXG', NULL, ' ', '', 'a.@gi', '', '', '', NULL, '', '', '', '', '', '', '', '', 'Belum diverifikasi', 1, '2023-10-20 14:53:39', '2023-10-20 13:33:44', NULL),
(21, 2, 'inukaitakeru', '$2y$05$BpWppaGB2vx7JCcohlM.2el4D33DQMrGGTK/6ighPBedJhK6Kf0NC', NULL, 'NUNUNU', 'Nino', 'yuyuyu@gmail.com', '09121212121', 'SD 1 aa', '12345', '2023-10-20', 'Laki-Laki', 'Islam', '1', '1', '1', '1', '1', '1', 'Belum diverifikasi', 1, '2023-10-20 14:58:07', '2023-10-20 14:57:11', NULL),
(22, 2, 'Ayuuuuu', '$2y$05$nmh7R75..bLI9muAh4N46.idFtJTxv8XWyremq03XYOv6nbp5xGt2', NULL, 'Ayu', 'oktriana', 'ayu@g.mail', '08586743212', 'SD NEGERI 2 BANTAN', 'OKU Timur', '2003-11-13', 'Laki-Laki', 'Islam', '5778866', 'Bantan Pelita', 'Vsvsvsvvsvs', 'Pengusaha', 'Kkbbvcffg', '3658', 'Belum diverifikasi', 1, NULL, '2023-10-25 09:56:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftarsiswa`
--
ALTER TABLE `tb_daftarsiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftarsiswa`
--
ALTER TABLE `tb_daftarsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

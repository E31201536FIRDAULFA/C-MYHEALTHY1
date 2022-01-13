-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 09:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `ID_POLI` int(5) NOT NULL,
  `GEDUNG` varchar(30) NOT NULL,
  `JENIS_POLI` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`ID_POLI`, `GEDUNG`, `JENIS_POLI`) VALUES
(1, 'POLITEKNIK NEGERI JEMBER', 'POLI UMUM'),
(2, 'POLITEKNIK NEGERI JEMBER', 'POLI GIGI'),
(3, 'POLITEKNIK NEGERI JEMBER', 'KIA / KB');

-- --------------------------------------------------------

--
-- Table structure for table `poli_gigi`
--

CREATE TABLE `poli_gigi` (
  `NO` int(10) NOT NULL,
  `NIK` int(15) NOT NULL,
  `TANGGAL` date NOT NULL,
  `NAMA` text NOT NULL,
  `NAMA_POLI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli_gigi`
--

INSERT INTO `poli_gigi` (`NO`, `NIK`, `TANGGAL`, `NAMA`, `NAMA_POLI`) VALUES
(1, 214797341, '2021-12-24', 'EKA FAHRIKA ', 'POLI GIGI'),
(2, 287161565, '2021-12-24', 'RAHMA RAMADONA', 'POLI GIGI'),
(3, 214526178, '2021-12-24', 'LIUTANTRI HOBIOLA', 'POLI GIGI'),
(4, 621541261, '2021-12-26', 'NI LUH KOMANG ARYA', 'POLI GIGI'),
(5, 275524417, '2021-12-26', 'NI KADEK AYU NOVIANTI', 'POLI GIGI'),
(6, 122716521, '2021-12-26', 'NI LUH ISA DAMAYANTI P.', 'POLI GIGI'),
(7, 2022, '0000-00-00', 'AMIR FAISAL KARIMULLAH', 'POLI GIGI');

-- --------------------------------------------------------

--
-- Table structure for table `poli_kia`
--

CREATE TABLE `poli_kia` (
  `NO` int(10) NOT NULL,
  `NIK` int(15) NOT NULL,
  `TANGGAL` date NOT NULL,
  `NAMA` text NOT NULL,
  `NAMA_POLI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli_kia`
--

INSERT INTO `poli_kia` (`NO`, `NIK`, `TANGGAL`, `NAMA`, `NAMA_POLI`) VALUES
(1, 2147483647, '2021-12-24', 'MAEMUNAH JUMINTEN', 'POLI KIA/KB'),
(2, 2145728918, '2021-12-24', 'DULJANNAH', 'POLI KIA/KB'),
(3, 2145378291, '2021-12-26', 'NI LUH ISA DAMAYANTI', 'POLI KIA/KB'),
(4, 2146728971, '2021-12-26', 'I PUTU DEWA', 'POLI KIA/KB'),
(5, 2146277007, '2021-12-26', 'I KETUT KOMANG', 'POLI KIA/KB'),
(6, 2147483647, '0000-00-00', 'ZENDILLA BASWARA', 'POLI KIA/KB');

-- --------------------------------------------------------

--
-- Table structure for table `poli_umu`
--

CREATE TABLE `poli_umu` (
  `NO` int(10) NOT NULL,
  `NIK` int(50) NOT NULL,
  `TANGGAL` date NOT NULL,
  `NAMA` text NOT NULL,
  `NAMA_POLI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli_umu`
--

INSERT INTO `poli_umu` (`NO`, `NIK`, `TANGGAL`, `NAMA`, `NAMA_POLI`) VALUES
(1, 2147483647, '2021-12-24', 'ANISA ARIQAH', 'POLI UMUM'),
(2, 2141873667, '2021-12-24', 'BEFRIL RENFILIANI', 'POLI UMUM'),
(3, 214568902, '2021-12-24', 'DINDA REGITA PARAMESTI', 'POLI UMUM'),
(4, 2146908732, '2021-12-26', 'NI KADEK AYU NOVIANTI', 'POLI UMUM'),
(5, 2146542147, '2021-12-26', 'I PUTU DEWA', 'POLI UMUM'),
(6, 214678124, '2021-12-26', 'I PUTU DEWAI', 'POLI UMUM'),
(10, 2147483647, '0000-00-00', 'SOFIANA', 'POLI UMUM'),
(11, 2147483647, '2022-01-03', 'SOFIANALAJUBA', 'POLI UMUM'),
(12, 2147483647, '2022-01-03', 'RIDHO ADILLAH W', 'POLI UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id`, `tanggal`, `no_antrian`, `status`, `updated_date`) VALUES
(19, '2022-01-03', 1, '1', '2022-01-03 14:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_gigi`
--

CREATE TABLE `tbl_antrian_gigi` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_antrian_gigi`
--

INSERT INTO `tbl_antrian_gigi` (`id`, `tanggal`, `no_antrian`, `status`, `updated_date`) VALUES
(0, '2022-01-03', 1, 1, '2022-01-03'),
(0, '2022-01-03', 2, 1, '2022-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_umum`
--

CREATE TABLE `tbl_antrian_umum` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_antrian_umum`
--

INSERT INTO `tbl_antrian_umum` (`id`, `tanggal`, `no_antrian`, `status`, `updated_date`) VALUES
(0, '2022-01-03', 1, 1, '2022-01-03'),
(0, '2022-01-03', 2, 1, '2022-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'petugas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `level`) VALUES
('admin', 'admin12', 'petugas'),
('BERFIL RENFILIANI', '12345', 'petugas'),
('firda ulfa unsilah1', '12345', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`ID_POLI`);

--
-- Indexes for table `poli_gigi`
--
ALTER TABLE `poli_gigi`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `poli_kia`
--
ALTER TABLE `poli_kia`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `poli_umu`
--
ALTER TABLE `poli_umu`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poli_gigi`
--
ALTER TABLE `poli_gigi`
  MODIFY `NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `poli_kia`
--
ALTER TABLE `poli_kia`
  MODIFY `NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `poli_umu`
--
ALTER TABLE `poli_umu`
  MODIFY `NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

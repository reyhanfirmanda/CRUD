-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 03:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoribarang`
--

CREATE TABLE `kategoribarang` (
  `KodeKategori` varchar(100) NOT NULL,
  `NamaKategori` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoribarang`
--

INSERT INTO `kategoribarang` (`KodeKategori`, `NamaKategori`, `id`) VALUES
('K002', 'Alat Tulis Kantor', 2),
('K003', 'Makanan', 3),
('K001', 'Perlengkapan Mandi', 0);

--
-- Triggers `kategoribarang`
--
DELIMITER $$
CREATE TRIGGER `deletekategori` AFTER DELETE ON `kategoribarang` FOR EACH ROW BEGIN
	DELETE FROM masterbarang
	WHERE masterbarang.Kategori = old.NamaKategori;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `masterbarang`
--

CREATE TABLE `masterbarang` (
  `id` int(11) NOT NULL,
  `KodeBarang` varchar(100) NOT NULL,
  `NamaBarang` varchar(100) NOT NULL,
  `Kategori` varchar(100) NOT NULL,
  `Satuan` varchar(100) NOT NULL,
  `Jumlah` int(100) NOT NULL,
  `Harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterbarang`
--

INSERT INTO `masterbarang` (`id`, `KodeBarang`, `NamaBarang`, `Kategori`, `Satuan`, `Jumlah`, `Harga`) VALUES
(3, 'B003', 'Roti Mawar', 'Makanan', 'Bungkus', 12, 8500),
(9, 'B002', 'Pena', 'Alat Tulis Kantor', 'Lusin', 2, 20000),
(12, 'B001', 'Sabun', 'Perlengkapan Mandi', 'Botol', 10, 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
  ADD PRIMARY KEY (`NamaKategori`),
  ADD KEY `NamaKategori` (`NamaKategori`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `masterbarang`
--
ALTER TABLE `masterbarang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Kategori` (`Kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masterbarang`
--
ALTER TABLE `masterbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

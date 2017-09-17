-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2017 at 07:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cash_note`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id` int(11) NOT NULL,
  `pengeluaran` int(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengeluaran`
--

INSERT INTO `tb_pengeluaran` (`id`, `pengeluaran`, `keterangan`, `tanggal`) VALUES
(2, 15000, 'Ganti Oli', '2017-09-09'),
(4, 100000, 'update', '0000-00-00'),
(5, 1000, 'ala', '2017-11-12'),
(8, 1222000, 'ala', '2017-11-12'),
(9, 1000, 'ala', '0000-00-00'),
(10, 1000, 'ala', '2017-11-12'),
(11, 1000, 'ala', '2017-11-12'),
(12, 0, '', '0000-00-00'),
(13, 0, '', '0000-00-00'),
(14, 100000, 'update', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2022 at 04:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_ema_table`
--

CREATE TABLE `showroom_ema_table` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `pemilik_mobil` varchar(255) DEFAULT NULL,
  `merk_mobil` varchar(255) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_mobil` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_ema_table`
--

INSERT INTO `showroom_ema_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(7, 'aa', 'a', 'a', '2022-11-23', ' a ', 'mobil2.png', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(5, 'Ema', 'aaa@gmail.com', '$2y$10$4SvNcpl/GJUDspjt6G/W7./Nk2aWfz6F/zJ6FrwaS9a.nLSsuDwW.', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_ema_table`
--
ALTER TABLE `showroom_ema_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_ema_table`
--
ALTER TABLE `showroom_ema_table`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2024 at 10:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpesan`
--

CREATE TABLE `tbpesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nohp` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpesan`
--

INSERT INTO `tbpesan` (`id_pesan`, `nama`, `email`, `nohp`, `pesan`) VALUES
(1, 'shofaa', 'shofaa@gmail.com', '12345678', 'aaaaa'),
(2, 'Hans', 'hans2net@gmail.com', '08457645', 'Espresso 2 sedang'),
(3, 'Naufal', 'naufal22@gmail.com', '08787133', 'Latte 1 kecil'),
(4, 'Althaf', 'althaf02@gmail.com', '08176123', 'Latte 1 jumbo'),
(5, 'Ilmira Hans', 'ilmira_hans11@gmail.com', '08245213', 'Latte 1 kecil'),
(6, 'Hakim', 'hakim@gmail.com', '329467231', 'Meat Box'),
(7, 'Supri', 'supri@gmail.com', '963544543', 'Es Teh'),
(9, 'Kim', 'kim@gmail.com', '6503415', 'Es Coklat'),
(10, 'Hambali', 'hambali@gmail.com', '139478623', 'Puding coklat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpesan`
--
ALTER TABLE `tbpesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpesan`
--
ALTER TABLE `tbpesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 03:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pekerja`
--

CREATE TABLE `info_pekerja` (
  `id` int(3) NOT NULL,
  `nama_pekerja` varchar(50) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_pekerja`
--

INSERT INTO `info_pekerja` (`id`, `nama_pekerja`, `no_kp`, `jantina`, `no_hp`) VALUES
(0, 'ANIQ NAUFAL BIN MUHAMMAD AZRAEI', '020826160169', 'perempuan', '0169542018'),
(0, 'ISHUARIYA A/P PONAN', '030263014125', 'perempuan', '0133118765'),
(0, 'MUHAMMAD ADAM BIN NAZRI', '030478121563', 'perempuan', '01162190340'),
(0, 'AYUUUUU', '030526141258', 'perempuan', '0196552410'),
(0, 'MUHAMMAD ANAS BIN SUHAIMI', '030531100199', 'lelaki', '01162190340'),
(0, 'ANIS ZAHIRA BINTI AZRAF', '080820106424', 'perempuan', '01162190341');

-- --------------------------------------------------------

--
-- Table structure for table `logmasuk`
--

CREATE TABLE `logmasuk` (
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logmasuk`
--

INSERT INTO `logmasuk` (`nama`, `password`) VALUES
('bugs', '2605'),
('bugs', '2605'),
('bugs', '2605'),
('ally', '9088'),
('puuang rose', '2605');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pekerja`
--
ALTER TABLE `info_pekerja`
  ADD PRIMARY KEY (`no_kp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

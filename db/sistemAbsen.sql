-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2023 at 03:50 PM
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
-- Database: `sistemAbsen`
--

-- --------------------------------------------------------

--
-- Table structure for table `ALASAN`
--

CREATE TABLE `ALASAN` (
  `PersonID` int(11) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Izin` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ALASAN`
--

INSERT INTO `ALASAN` (`PersonID`, `Tanggal`, `Izin`) VALUES
(1, '2023-06-20', 'Hadir'),
(2, '2023-06-20', 'Cadangan Piket'),
(3, '2023-06-20', 'Tidak Hadir'),
(4, '2023-06-20', 'Hadir'),
(5, '2023-06-20', 'Tidak Hadir'),
(6, '2023-06-20', 'Tidak Hadir'),
(7, '2023-06-20', 'Tidak Hadir'),
(8, '2023-06-20', 'Tidak Hadir'),
(9, '2023-06-20', 'Tidak Hadir'),;

-- --------------------------------------------------------

--
-- Table structure for table `ANGGOTA`
--

CREATE TABLE `ANGGOTA` (
  `PersonID` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Jabatan` varchar(50) DEFAULT NULL,
  `GroupPiket` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ANGGOTA`
--

INSERT INTO `ANGGOTA` (`PersonID`, `Nama`, `Jabatan`, `GroupPiket`) VALUES
(1, 'Iman', 'Anggota', 'A'),
(2, 'Maulana', 'Anggota', 'B'),
(3, 'Agus', 'Anggota', 'C'),
(4, 'Adon', 'Anggota', 'A'),
(5, 'Adi', 'Anggota', 'B'),
(6, 'Zaki', 'Anggota', 'C'),
(7, 'Yoga', 'Anggota', 'A'),
(8, 'Budi', 'Anggota', 'B'),
(9, 'Yuda', 'Anggota', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `JADWAL`
--

CREATE TABLE `JADWAL` (
  `Tanggal` date NOT NULL,
  `GroupPiket` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `JADWAL`
--

INSERT INTO `JADWAL` (`Tanggal`, `GroupPiket`) VALUES
('2023-06-20', 'A'),
('2023-06-21', 'B'),
('2023-06-22', 'C'),
('2023-06-23', 'A'),
('2023-06-24', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ANGGOTA`
--
ALTER TABLE `ANGGOTA`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indexes for table `JADWAL`
--
ALTER TABLE `JADWAL`
  ADD PRIMARY KEY (`Tanggal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ANGGOTA`
--
ALTER TABLE `ANGGOTA`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

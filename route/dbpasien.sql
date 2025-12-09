-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2025 at 05:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpasien`
--

CREATE TABLE `tbpasien` (
  `idpsn` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpasien`
--

INSERT INTO `tbpasien` (`idpsn`, `nama`, `ttl`) VALUES
(1, 'Ferdin', '2025-12-01'),
(2, 'Jeanif', '2025-12-03'),
(3, 'hendryy', '2025-12-06'),
(4, 'agus wawan', '2025-11-04'),
(5, 'aldo', '2025-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpasien`
--
ALTER TABLE `tbpasien`
  ADD PRIMARY KEY (`idpsn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpasien`
--
ALTER TABLE `tbpasien`
  MODIFY `idpsn` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

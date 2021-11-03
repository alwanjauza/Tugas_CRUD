-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 01:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id` int(11) NOT NULL,
  `nim` char(11) NOT NULL,
  `namamhs` varchar(100) NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id`, `nim`, `namamhs`, `jk`, `alamat`, `kota`, `email`, `foto`) VALUES
(1, '20051214040', 'Aziz Abdul', 'L', 'Nginden', 'Surabaya', 'aziz.20040@mhs.unesa.ac.id', '674-Screenshot (21).png'),
(2, '20051214030', 'Alwan', 'L', 'Ds Ngelang', 'Magetan', 'alwan.20030@mhs.unesa.ac.id', '838-Screenshot (29).png'),
(3, '20051214088', 'Dominic', 'L', 'Takeran', 'Magetan', 'dominic.20088@mhs.unesa.ac.id', '5-Screenshot (15).png'),
(6, '20051214002', 'Srimulyani', 'P', 'Mantingan', 'Ngawi', 'sri.20002@mhs.unesa.ac.id', '57-pexels-brett-sayles-5480781.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

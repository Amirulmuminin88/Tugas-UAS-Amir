-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 07:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discord`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discord`
--

CREATE TABLE `tbl_discord` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(30) NOT NULL,
  `id_discord` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(100) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `game` varchar(50) NOT NULL,
  `genre_game` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_discord`
--

INSERT INTO `tbl_discord` (`ID`, `username`, `password`, `level`, `id_discord`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat_asal`, `alamat_sekarang`, `no_telepon`, `email`, `status`, `game`, `genre_game`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'H1A008053', 'Singgih D. Sasmito', 'Laki-Laki', 'Mojokerto', '2000-01-25', 'Mojokerto', 'Mojokerto', '08512345678', 'singgih@gmail.com', 'mahasiswa', 'Mobile', 'RPG'),
(6, 'fauzan', 'eacaf53cb2b533a68baa765faedf7e59', 'user', '4118021', 'fauzan', 'Laki-Laki', 'jombang', '2019-12-23', 'jombang', 'jombang', '098765432198', 'fauzan@gmail.com', 'pelajar', 'Mobile', 'RPG'),
(8, 'ali', '86318e52f5ed4801abe1d13d509443de', 'user', '4118020', 'ali', 'Laki-Laki', 'jombang', '2020-01-09', 'jombang', 'jombang', '089675432123', 'ali@gmail.com', 'mahasiswa', 'PC', 'Racing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_discord`
--
ALTER TABLE `tbl_discord`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_discord`
--
ALTER TABLE `tbl_discord`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

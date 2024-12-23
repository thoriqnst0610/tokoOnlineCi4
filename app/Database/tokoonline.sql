-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 08:23 AM
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
-- Database: `tokoonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `nama`, `username`, `password`) VALUES
('Admin202412210427273355', 'admin', 'admin', '$2y$10$6Yr3oG27ecdu6hFXyUDOEebqNGPTNOEBbjXX5cqepJXaZyd5VNec2'),
('Admin202412230722449108', 'thoriq', 'thoriq', '$2y$10$b41KLUKWLqzCmJmB0d7ITeF37fVxY.nwcrlHtwdvG6RdE8V8Zr.XO');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriproduk`
--

CREATE TABLE `kategoriproduk` (
  `idKategori` varchar(50) NOT NULL,
  `namaKategori` varchar(100) NOT NULL,
  `jenisKategori` varchar(100) NOT NULL,
  `deskripsiKategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriproduk`
--

INSERT INTO `kategoriproduk` (`idKategori`, `namaKategori`, `jenisKategori`, `deskripsiKategori`) VALUES
('123', 'Pakaian Pria', 'Pakaian', 'Pakaian Pria Murah Meriah Dompet Tipis'),
('321', 'Pakaian Wanita', 'Pakaian', 'Pakaian Wanita Murah Meriah Dompet Tipis'),
('kategori202412210159567526', 'Pakaian Bayi', 'Pakaian', 'Pakaian Bayi Murah Meriah Dompet Tipis'),
('kategori202412230406502947', 'Alat Elektronik', 'ELektronik', 'Produk Elektronik Handphone'),
('kategori202412230407554999', 'Jaket Pria', 'Jaket', 'Jaket Pria terbaik'),
('kategori202412230408422691', 'Jaket Wanita', 'Jaket', 'Jaket Wanita terbaik');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` varchar(50) NOT NULL,
  `namaProduk` varchar(100) NOT NULL,
  `jenisProduk` varchar(100) NOT NULL,
  `hargaProduk` int(35) NOT NULL,
  `tersedia` varchar(100) NOT NULL,
  `gambarProduk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `jenisProduk`, `hargaProduk`, `tersedia`, `gambarProduk`) VALUES
('produk202412230421091607', 'Baju Pria 1', 'Pakaian Pria', 100000, '30 Pcs', '1734927669_6368c85013b03c18233a.jpg'),
('produk202412230421403117', 'Baju Pria 2', 'Pakaian Pria', 300000, '60 Pcs', '1734927700_cc85bfe44aa91bf4196d.jpg'),
('produk202412230422115970', 'Baju Pria 3', 'Pakaian Pria', 350000, '20 Pcs', '1734927731_d44c92f36a5f8ee71279.jpg'),
('produk202412230423051478', 'Baju Wanita 1', 'Pakaian Wanita', 500000, '55 Pcs', '1734927785_ccb1eed76bd9f65111e3.jpg'),
('produk202412230423419830', 'Baju Wanita 2', 'Pakaian Wanita', 100000, '20 Pcs', '1734927821_ad744efa07a5dc776c38.jpg'),
('produk202412230424215530', 'Baju Wanita 3', 'Pakaian Wanita', 350000, '55 Pcs', '1734927861_3660cc0d3e07eac5b525.jpg'),
('produk202412230426041661', 'Elektronik 1', 'Alat Elektronik', 350000, '60 Pcs', '1734927964_3b74e3bb855a159e0f33.jpg'),
('produk202412230426436621', 'ELektronik 2', 'Alat Elektronik', 500000, '55 Pcs', '1734928003_a9643aa64809606cea08.jpg'),
('produk202412230427111739', 'Elektronik 3', 'Alat Elektronik', 500000, '20 Pcs', '1734928031_9985b577866df3efeae3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `idSession` varchar(100) NOT NULL,
  `usernameSession` varchar(100) NOT NULL,
  `kodeSession` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `kategoriproduk`
--
ALTER TABLE `kategoriproduk`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`idSession`),
  ADD UNIQUE KEY `usernameSession` (`usernameSession`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2026 at 10:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `kategori`, `stok`, `harga`, `id_kategori`, `id_supplier`) VALUES
(1, 'Laptop Acer Aspire 5', 'Laptop', 10, 7500000.00, 1, 1),
(2, 'Laptop ASUS VivoBook', 'Laptop', 8, 6800000.00, 1, 2),
(3, 'Laptop Lenovo IdeaPad', 'Laptop', 12, 7200000.00, 1, 3),
(4, 'Laptop HP 14', 'Laptop', 7, 6500000.00, 1, 4),
(5, 'Laptop Dell Inspiron', 'Laptop', 9, 8000000.00, 1, 5),
(6, 'Mouse Logitech M185', 'Mouse', 25, 150000.00, 2, 1),
(7, 'Mouse Logitech M331', 'Mouse', 20, 250000.00, 2, 2),
(8, 'Mouse Rexus Xierra', 'Mouse', 15, 180000.00, 2, 3),
(9, 'Mouse Fantech Crypto', 'Mouse', 18, 220000.00, 2, 4),
(10, 'Mouse Robot M210', 'Mouse', 30, 120000.00, 2, 5),
(11, 'Keyboard Logitech K120', 'Keyboard', 20, 180000.00, 3, 1),
(12, 'Keyboard Logitech K380', 'Keyboard', 15, 450000.00, 3, 2),
(13, 'Keyboard Rexus Legionare', 'Keyboard', 12, 350000.00, 3, 3),
(14, 'Keyboard Fantech MK872', 'Keyboard', 10, 500000.00, 3, 4),
(15, 'Keyboard Robot RK10', 'Keyboard', 18, 200000.00, 3, 5),
(16, 'Monitor LG 24 Inch', 'Monitor', 8, 2200000.00, 4, 1),
(17, 'Monitor Samsung 24 Inch', 'Monitor', 10, 2400000.00, 4, 2),
(18, 'Monitor ASUS 24 Inch', 'Monitor', 7, 2600000.00, 4, 3),
(19, 'Monitor Acer 23.8 Inch', 'Monitor', 9, 2100000.00, 4, 4),
(20, 'Monitor Lenovo 24 Inch', 'Monitor', 6, 2300000.00, 4, 5),
(21, 'Printer Epson L3210', 'Printer', 5, 2500000.00, 5, 1),
(22, 'Printer Canon G2010', 'Printer', 6, 2300000.00, 5, 2),
(23, 'Printer HP Ink Tank', 'Printer', 7, 2200000.00, 5, 3),
(24, 'Printer Brother DCP', 'Printer', 4, 2800000.00, 5, 4),
(25, 'Printer Epson L3250', 'Printer', 8, 2900000.00, 5, 5),
(26, 'Webcam Logitech C270', 'Webcam', 12, 650000.00, 6, 1),
(27, 'Webcam Logitech C920', 'Webcam', 8, 1500000.00, 6, 2),
(28, 'Webcam Rexus Thundervox', 'Webcam', 10, 500000.00, 6, 3),
(29, 'Webcam Fantech Luminous', 'Webcam', 9, 700000.00, 6, 4),
(30, 'Webcam Robot WC01', 'Webcam', 15, 350000.00, 6, 5),
(31, 'Flashdisk Sandisk 32GB', 'Flashdisk', 30, 80000.00, 7, 1),
(32, 'Flashdisk Sandisk 64GB', 'Flashdisk', 25, 120000.00, 7, 2),
(33, 'Flashdisk Kingston 32GB', 'Flashdisk', 20, 85000.00, 7, 3),
(34, 'Flashdisk Kingston 64GB', 'Flashdisk', 18, 130000.00, 7, 4),
(35, 'Flashdisk V-Gen 32GB', 'Flashdisk', 22, 75000.00, 7, 5),
(36, 'Harddisk Seagate 1TB', 'Harddisk', 10, 850000.00, 8, 1),
(37, 'Harddisk WD Blue 1TB', 'Harddisk', 8, 900000.00, 8, 2),
(38, 'Harddisk Toshiba 1TB', 'Harddisk', 7, 880000.00, 8, 3),
(39, 'Harddisk Seagate 2TB', 'Harddisk', 6, 1300000.00, 8, 4),
(40, 'Harddisk WD Blue 2TB', 'Harddisk', 5, 1350000.00, 8, 5),
(41, 'SSD Kingston 240GB', 'SSD', 15, 450000.00, 9, 1),
(42, 'SSD Kingston 480GB', 'SSD', 12, 700000.00, 9, 2),
(43, 'SSD Samsung 500GB', 'SSD', 10, 850000.00, 9, 3),
(44, 'SSD WD Green 480GB', 'SSD', 9, 650000.00, 9, 4),
(45, 'SSD Sandisk 500GB', 'SSD', 11, 800000.00, 9, 5),
(46, 'RAM Kingston 8GB', 'RAM', 20, 400000.00, 10, 1),
(47, 'RAM Kingston 16GB', 'RAM', 15, 750000.00, 10, 2),
(48, 'RAM Corsair 8GB', 'RAM', 12, 450000.00, 10, 3),
(49, 'RAM Corsair 16GB', 'RAM', 10, 850000.00, 10, 4),
(50, 'RAM Team Elite 8GB', 'RAM', 14, 380000.00, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Laptop'),
(2, 'Mouse'),
(3, 'Keyboard'),
(4, 'Monitor'),
(5, 'Printer'),
(6, 'Webcam'),
(7, 'Flashdisk'),
(8, 'Harddisk'),
(9, 'SSD'),
(10, 'RAM');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `telepon`) VALUES
(1, 'PT Maju Jaya', 'Medan', '081234567890'),
(2, 'CV Sumber Rezeki', 'Medan', '081234567891'),
(3, 'PT Nusantara Teknologi', 'Jakarta', '081234567892'),
(4, 'CV Berkah Abadi', 'Binjai', '081234567893'),
(5, 'PT Sejahtera Mandiri', 'Deli Serdang', '081234567894');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `idx_nama_barang` (`nama_barang`),
  ADD KEY `fk_barang_kategori` (`id_kategori`),
  ADD KEY `fk_barang_supplier` (`id_supplier`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `fk_barang_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

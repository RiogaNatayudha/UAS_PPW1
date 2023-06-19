-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 07:32 AM
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
-- Database: `uasweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `email`, `no_telp`, `password`) VALUES
(1, 'Rioga Natayudha', 'rioganatayudha19@gmail.com', '081324124196', '$2y$10$1QPXZh1o65CnVHhkIedQOeiRJt08HAPHDmwybujdJ0MxOi6FGlj6S');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Glove'),
(2, 'Bat'),
(3, 'Ball'),
(4, 'Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_product`, `tgl_order`, `id_customer`) VALUES
(1, 1, '2023-06-19', 1),
(2, 1, '2023-06-19', 1),
(3, 1, '2023-06-19', 1),
(4, 1, '2023-06-19', 1),
(5, 1, '2023-06-19', 1),
(6, 1, '2023-06-19', 1),
(7, 1, '2023-06-19', 1),
(8, 1, '2023-06-19', 1),
(9, 1, '2023-06-19', 1),
(10, 1, '2023-06-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_product` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_kategori`, `nama_product`, `harga`, `file`) VALUES
(1, 1, 'Glove ROX tangan kiri', '102.500', 'g.jpg'),
(2, 1, 'Glove MIXIN tangan kiri', '190.000', 'g1.jpg'),
(3, 1, 'Glove MIZUNO tangan kanan', '357.000', 'g2.jpg'),
(4, 1, 'Glove KIPSTA hitam tangan kanan', '319.000', 'g3.jpeg'),
(5, 1, 'Glove KIPSTA coklat tangan kiri', '700.000', 'g4.jpeg'),
(6, 1, 'Glove ETTO professional tangan kiri', '804.000', 'g5.jpeg'),
(7, 1, 'Glove MIZUNO Franchise tangan kanan', '1.633.000', 'g6.jpeg'),
(8, 1, 'Glove MITT CATCHER DOVEWILL tangan kiri', '609.703', 'g7.jpeg'),
(9, 1, 'Glove MIZUNO power tangan kiri (youth)', '1.040.000', 'g8.jpeg'),
(10, 2, 'Bat Baseball Little league', '2.060.000', 'bat.jpg'),
(11, 2, 'Bat Baseball Sunway lions 28\"', '220.000', 'bat1.jpg'),
(12, 2, 'Bat Baseball Bangqiubang - Abu', '251.790', 'bat2.jpg'),
(13, 2, 'Easton BAHH 260z Baseball Bat', '4.725.000', 'bat3.jpg'),
(14, 2, 'Bat Hidden Sword 84cm - black', '257.000', 'bat4.jpg'),
(15, 2, 'Bat Baseball Aluminium RBZ', '260.000', 'bat5.jpg'),
(16, 3, 'KIPSTA BOLA BASEBALL BA180', '149.000', 'bola.jpg'),
(17, 3, 'Bola Berat Softball 5oz', '155.000', 'bola1.jpg'),
(18, 3, 'Bola Softball soft MIZUNO', '63.700', 'bola2.jpg'),
(19, 3, 'Bola Baseball Grindstone Sports', '110.000', 'bola3.jpg'),
(20, 3, 'Bola Softball MIZUNO 150', '125.000', 'bola4.jpg'),
(21, 3, 'BOLA BASEBALL soft ROX', '55.000', 'bola5.jpg'),
(22, 4, 'Sepatu MIZUNO Baru', '1.660.000', 'f.jpg'),
(23, 4, 'Jersey Baseball NY Yankees', '250.000', 'f1.jpg'),
(24, 4, 'Topi Baseball NY Yankees', '299.000', 'f2.jpg'),
(25, 4, 'Sepatu New Balance Second', '400.000', 'f3.jpg'),
(26, 4, 'Topi New Era Giants - Black', '1.011.000', 'f4.jpg'),
(27, 4, 'Jersey Baseball Indonesia', '299.999', 'f5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

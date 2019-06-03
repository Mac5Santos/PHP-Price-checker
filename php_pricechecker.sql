-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 12:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_pricechecker`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `barcode` text NOT NULL,
  `price` text NOT NULL,
  `name` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `barcode`, `price`, `name`, `picture`) VALUES
(1, '123456789123', 'php 500', 'GTX 10601', 'images/gtx1060.jpg'),
(2, '234567891234', 'php 400', 'GTX 1050', 'images/gtx1050.jpg'),
(3, '345678912345', 'php 600', 'GTX 1070', 'images/gtx1070.jpg'),
(4, '456789123456', 'php 700', 'GTX 1070ti', 'images/gtx1070ti.jpg'),
(5, '567891234567', 'php 800', 'GTX 1080', 'images/gtx1080.jpg'),
(6, '678912345678', 'php 800', 'GTX 1080ti', 'images/gtx1080ti.jpg'),
(7, '789123456789', 'php 900', 'RTX 2060', 'images/rtx2060.jpg'),
(8, '891234567891', 'php 1,000', 'RTX 2070', 'images/rtx2070.jpg'),
(9, '91234567891', 'php 1,100', 'RTX 2080', 'images/rtx2080.jpg'),
(10, '101234567891', 'php 1,200', 'RTX 2080ti', 'images/rtx2080ti.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

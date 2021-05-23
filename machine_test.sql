-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 12:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `machine_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `P_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `sku_code` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_short_description` varchar(100) NOT NULL,
  `product_descriprtion` varchar(200) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `P_id`, `product_name`, `sku_code`, `product_price`, `product_short_description`, `product_descriprtion`, `Status`) VALUES
(1, 89509, 'weqw', 12234566, 213, 'good', '4444', 1),
(2, 91702, 'fgghf', 12234566, 0, 'gfdg', 'fdgfd', 1),
(3, 39204, 'dsfs', 2132123, 0, 'dfsfsd', 'dfd', 1),
(4, 6764, 'sssds', 213213213, 3213, 'sddsf', 'dsf', 1),
(5, 2019, 'sadsa', 3215465, 123456, 'dsfdsf', 'dsfds', 1),
(6, 23148, 'sdfg', 324355, 21324, 'sdfds', 'dsfds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `pd_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`pd_id`, `p_id`, `images`) VALUES
(1, 89509, 'asha11.jpg'),
(2, 91702, '41.jpg'),
(3, 39204, 'audioplayer.jpg'),
(4, 6764, 'ASTRAL-EXPORT-012.png'),
(5, 2019, '42.jpg'),
(6, 23148, '43.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`pd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

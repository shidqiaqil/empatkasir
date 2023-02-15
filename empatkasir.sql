-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 08:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empatkasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_admin`
--

CREATE TABLE `auth_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_admin`
--

INSERT INTO `auth_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `id_product` varchar(50) NOT NULL,
  `ingredient_name` varchar(50) NOT NULL,
  `ingredient_quantity` float NOT NULL,
  `ingredient_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `id_product`, `ingredient_name`, `ingredient_quantity`, `ingredient_unit`) VALUES
(13, 'm01', 'susu', 0.3, 'kg'),
(14, 'm01', 'kopi', 0.3, 'kg'),
(16, 'm02', 'kopi', 0.3, 'kg'),
(17, 'm03', 'susu', 0.2, 'kg'),
(18, 'm03', 'susu', 0.2, 'kg'),
(19, 'm04', 'sirup abc', 0.2, 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(50) NOT NULL,
  `id_inven` varchar(50) NOT NULL,
  `inven_name` varchar(100) NOT NULL,
  `inven_quantity` float NOT NULL,
  `inven_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `id_inven`, `inven_name`, `inven_quantity`, `inven_unit`) VALUES
(1, 'i01', 'susu', 0.2, 'liter'),
(3, 'i02', 'kopi', 3.8, 'kg'),
(4, 'i03', 'gula', 3, 'kg'),
(6, 'i04', 'sirup abc', 0.2, 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `list_transaction`
--

CREATE TABLE `list_transaction` (
  `id_list_transaction` int(11) NOT NULL,
  `id_temp_transaction` int(11) NOT NULL,
  `id_product` varchar(50) NOT NULL,
  `quantity_buy` int(11) NOT NULL,
  `menu_price` float NOT NULL,
  `temp_creation_time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `checkout_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_transaction`
--

INSERT INTO `list_transaction` (`id_list_transaction`, `id_temp_transaction`, `id_product`, `quantity_buy`, `menu_price`, `temp_creation_time_stamp`, `checkout_date`) VALUES
(11, 15, 'm01', 4, 72000, '2023-02-09 02:15:56', '2023-02-09 08:54:28'),
(12, 16, 'm01', 1, 18000, '2023-02-09 02:54:36', '2023-02-09 08:54:40'),
(13, 17, 'm02', 1, 15000, '2023-02-09 02:54:38', '2023-02-09 08:54:40'),
(15, 18, 'm02', 3, 45000, '2023-02-09 02:58:10', '2023-02-09 08:58:19'),
(16, 19, 'm01', 1, 18000, '2023-02-09 02:58:13', '2023-02-09 08:58:19'),
(18, 20, 'm02', 6, 90000, '2023-02-09 02:59:24', '2023-02-09 08:59:33'),
(19, 21, 'm03', 1, 17000, '2023-02-09 02:59:27', '2023-02-09 08:59:33'),
(21, 22, 'm02', 1, 15000, '2023-02-09 02:59:53', '2023-02-09 08:59:55'),
(22, 25, 'm02', 2, 30000, '2023-02-13 21:57:54', '2023-02-14 03:58:07'),
(23, 26, 'm03', 1, 17000, '2023-02-13 21:57:56', '2023-02-14 03:58:07'),
(25, 27, 'm01', 1, 18000, '2023-02-14 01:34:51', '2023-02-14 07:37:54'),
(26, 28, 'm02', 4, 60000, '2023-02-14 01:37:46', '2023-02-14 07:37:54'),
(27, 29, 'm02', 1, 15000, '2023-02-14 21:58:58', '2023-02-15 03:59:01'),
(28, 30, 'm02', 1, 15000, '2023-02-14 22:27:01', '2023-02-15 04:27:04'),
(29, 31, 'm02', 1, 15000, '2023-02-14 22:28:45', '2023-02-15 04:28:47'),
(30, 31, 'm02', 1, 15000, '2023-02-14 22:28:45', '2023-02-15 04:29:06'),
(31, 31, 'm02', 1, 15000, '2023-02-14 22:28:45', '2023-02-15 04:30:02'),
(32, 32, 'm01', 1, 18000, '2023-02-14 22:30:27', '2023-02-15 04:30:43'),
(33, 33, 'm01', 1, 18000, '2023-02-15 00:12:01', '2023-02-15 06:12:03'),
(34, 34, 'm04', 1, 20000, '2023-02-15 00:23:01', '2023-02-15 06:23:07'),
(35, 35, 'm02', 1, 15000, '2023-02-15 00:23:03', '2023-02-15 06:23:07'),
(37, 36, 'm02', 1, 15000, '2023-02-15 00:23:41', '2023-02-15 06:23:48'),
(38, 37, 'm04', 3, 60000, '2023-02-15 00:23:43', '2023-02-15 06:23:48'),
(40, 38, 'm03', 3, 51000, '2023-02-15 01:25:02', '2023-02-15 07:25:13'),
(41, 39, 'm04', 5, 100000, '2023-02-15 01:25:08', '2023-02-15 07:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_product` varchar(50) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_product`, `menu_name`, `menu_price`) VALUES
(3, 'm01', 'kopi susu', 18000),
(5, 'm02', 'v60', 15000),
(6, 'm03', 'coffe latte', 17000),
(8, 'm04', 'soda gembira', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `temp_transaction`
--

CREATE TABLE `temp_transaction` (
  `id_temp_transaction` int(11) NOT NULL,
  `id_product` varchar(50) NOT NULL,
  `quantity_buy` int(11) NOT NULL,
  `menu_price` float NOT NULL,
  `temp_creation_time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_admin`
--
ALTER TABLE `auth_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_transaction`
--
ALTER TABLE `list_transaction`
  ADD PRIMARY KEY (`id_list_transaction`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_transaction`
--
ALTER TABLE `temp_transaction`
  ADD PRIMARY KEY (`id_temp_transaction`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `list_transaction`
--
ALTER TABLE `list_transaction`
  MODIFY `id_list_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `temp_transaction`
--
ALTER TABLE `temp_transaction`
  MODIFY `id_temp_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 04:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `item_id` int(10) NOT NULL,
  `name_of_item` varchar(50) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `quantity` int(3) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `total_purchase` decimal(10,2) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `street_address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postcode` int(4) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`item_id`, `name_of_item`, `item_price`, `quantity`, `payment`, `total_purchase`, `firstname`, `lastname`, `country`, `street_address`, `city`, `postcode`, `phone_number`, `email_address`) VALUES
(51, 'Grey Shorts', '100.00', 2, 'Cash on Delivery', '200.00', 'Khun Aguero', 'Agnes', 'Singapore', '74 Melody Drive', 'Pandan Valley', 232, '2108566458', 'khunaguero@gmail.com'),
(52, 'Apple Airpods Pro', '10000.00', 1, 'Cash on Delivery', '10000.00', 'Guren', 'Ichinose', 'Japan', '17 Takeshita', 'Harajuku', 113, '9125583674', 'gurenichinose@gmail.com'),
(53, 'Sundress Red', '499.23', 3, 'Credit Card/Debit Card', '1497.69', 'Shikimori', 'Micchon', 'Philippines', '95 Malaya', 'Makati City', 244, '9658032647', 'shiki_micchon@gmail.com'),
(54, 'Nendoroid JJK Megumi', '2500.00', 1, 'Credit Card/Debit Card', '2500.00', 'Rin', 'Tobio', 'Philippines', '87 Bonifacio Ave', 'Taguig City', 365, '9181365632', 'rintobio@gmail.com'),
(55, 'White Muji Journal', '800.00', 2, 'Cash on Delivery', '1600.00', 'Andrea', 'Chaz', 'Korea', '06 Hongdae', 'Seoul City', 32, '2748789560', 'chazAndrea@gmail.com'),
(56, 'Todoroki Plushie', '2000.00', 1, 'Credit Card/Debit Card', '2000.00', 'Gea', 'Apeta', 'Philippines', '198, PUROK 6', 'DAGUPAN CITY', 2400, '9458315634', 'apetageavanessa@gmail.com'),
(57, 'Todoroki Plushie', '2000.00', 1, 'Credit Card/Debit Card', '2000.00', 'Gea', 'Apeta', 'Philippines', '198, PUROK 6', 'DAGUPAN CITY', 2400, '9458315634', 'apetageavanessa@gmail.com'),
(58, 'Samsung Galaxy Z', '30000.00', 1, 'Credit Card/Debit Card', '30000.00', 'Gea', 'CUISON', 'Japan', '198, PUROK 6', 'DAGUPAN CITY', 2400, '9458315634', 'apetageavanessa@gmail.com'),
(59, 'Nike Air Force', '4.00', 1, 'Credit Card/Debit Card', '0.00', 'Pauline', 'Cruz', 'Philippines', '198 Purok 6 Lucao', 'DAGUPAN CITY', 2400, '+6394583156', 'paucruz@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

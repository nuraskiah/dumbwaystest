-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 04:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_tb`
--

CREATE TABLE `brand_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_tb`
--

INSERT INTO `brand_tb` (`id`, `name`) VALUES
(1, 'Yamaha'),
(2, 'Vespa'),
(3, 'Kawasaki'),
(4, 'Honda'),
(5, 'Sportster'),
(6, 'Suzuki');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `motorcycle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`id`, `name`, `address`, `phone`, `motorcycle_id`) VALUES
(1, 'Micheal', 'New York', '7025551838', 7),
(2, 'Albert', 'London', '4155551450', 1),
(3, 'Stuart', 'Brisban', '6505556809', 4),
(4, 'Winston', 'Torento', '2035557845', 6),
(5, 'John', 'Hampshair', '6175557555', 5),
(6, 'Tom', 'New York', '4155554312', 6);

-- --------------------------------------------------------

--
-- Table structure for table `motorcycle_tb`
--

CREATE TABLE `motorcycle_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motorcycle_tb`
--

INSERT INTO `motorcycle_tb` (`id`, `name`, `brand_id`, `image`, `color`, `specification`, `stock`) VALUES
(1, 'Yamaha R1M', 1, 'r1m.png', 'silver', 'none', 3),
(2, 'Yamaha RX 100', 1, 'rx100.png', 'yellow', 'u', 1),
(3, 'Honda PCX', 4, 'pcx.png', 'silver', 'pcx', 1),
(4, 'Kawasaki Ninja', 3, 'ninja.png', 'red', 'red', 2),
(5, 'Kawasaki Z1000', 3, 'z1000.png', 'black', 'black', 2),
(6, 'Vespa Scooter', 2, 'scooter.png', 'gray', 'gray', 3),
(7, 'Sportster 48', 5, '48.png', 'red', 'red', 1),
(8, 'Yamaha MT15', 1, 'mt15.png', 'blue', 'blue', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_tb`
--
ALTER TABLE `brand_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motorcycle_id` (`motorcycle_id`);

--
-- Indexes for table `motorcycle_tb`
--
ALTER TABLE `motorcycle_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_tb`
--
ALTER TABLE `brand_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `motorcycle_tb`
--
ALTER TABLE `motorcycle_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD CONSTRAINT `customer_tb_ibfk_1` FOREIGN KEY (`motorcycle_id`) REFERENCES `motorcycle_tb` (`id`);

--
-- Constraints for table `motorcycle_tb`
--
ALTER TABLE `motorcycle_tb`
  ADD CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brand_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

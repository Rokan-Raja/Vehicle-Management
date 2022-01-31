-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 08:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(11) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `vehicle_no` int(11) NOT NULL,
  `vehicle_type` varchar(12) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer`, `vehicle_no`, `vehicle_type`, `phone`) VALUES
(1, 'Raja', 737373, '2wheeler', 7550346317),
(2, 'Ram', 736262, '4wheeler', 7550346317),
(3, 'Rahul', 783261, '3wheeler', 8220868343);

-- --------------------------------------------------------

--
-- Table structure for table `service_bill`
--

CREATE TABLE `service_bill` (
  `id` int(11) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `vehicle_no` int(11) NOT NULL,
  `vehicle_type` varchar(110) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_bill`
--

INSERT INTO `service_bill` (`id`, `customer`, `vehicle_no`, `vehicle_type`, `service_type`, `phone`, `price`, `date`) VALUES
(14, 'raja', 737373, '2wheeler', 'water_wash', 7550346317, 1000, '2022-01-29'),
(15, 'raja', 737373, '2wheeler', 'dent_removal', 7550346317, 475, '2022-01-29'),
(16, 'raja', 737373, '2wheeler', 'tyre_change', 7550346317, 1140, '2022-01-29'),
(17, 'raja', 737373, '2wheeler', 'water_wash', 7550346317, 950, '2022-01-29'),
(18, 'raja', 737373, '2wheeler', 'dent_removal', 7550346317, 475, '2022-01-29'),
(19, 'raja', 737373, '2wheeler', 'tyre_change', 7550346317, 1140, '2022-01-29'),
(20, 'raja', 737373, '2wheeler', 'water_wash', 7550346317, 950, '2022-01-29'),
(21, 'Ram', 736262, '4wheeler', 'tyre_change', 7550346317, 1140, '2022-01-29'),
(22, 'Rahul', 783261, '3wheeler', 'tyre_change', 8220868343, 1200, '2022-01-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_bill`
--
ALTER TABLE `service_bill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_bill`
--
ALTER TABLE `service_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

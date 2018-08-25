-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2018 at 01:21 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundrymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `created_timestamp`, `updated_timestamp`) VALUES
(1, 'admin@gmail.com', '#@12334@#', '2018-08-20 19:43:12', '2018-08-20 19:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `customer_phone` varchar(256) NOT NULL,
  `secondary_phone` varchar(256) NOT NULL,
  `email_id` varchar(256) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `customer_type_id` int(11) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_phone`, `secondary_phone`, `email_id`, `address`, `customer_type_id`, `created_timestamp`, `updated_timestamp`) VALUES
(1, 'aaaaaaaaa', '', '01111111111', 'test1@gmail.co', '                              test1 test1 address                                    ', 1, '2018-08-21 19:47:09', '2018-08-21 19:00:00'),
(2, 'vvvvvvvvb', '', '01111111111', 'test1@gmail.co', '                                                            test1 test1 address                                                                        ', 1, '2018-08-21 19:48:11', '2018-08-21 19:00:51'),
(3, 'test2 test12', '1111111111', '01111111111', 'test1@gmail.co', '                                                            test1 test1 address                                                                        ', 1, '2018-08-21 19:48:21', '2018-08-21 19:06:05'),
(4, 'test1 test1', '1111111111', '01111111111', 'test1@gmail.co', 'test1 test1 address', 1, '2018-08-21 19:06:12', '2018-08-21 19:06:12'),
(5, 'test1 test1', '1111111111', '01111111111', 'test1@gmail.co', 'test1 test1 address', 1, '2018-08-21 19:06:20', '2018-08-21 19:06:20'),
(6, 'aaaaaaaaaa', '', '01111111111', 'test1@gmail.co', '                              test1 test1 address                                    ', 1, '2018-08-21 19:46:34', '2018-08-21 19:46:34'),
(7, 'cccccccc', '', '01111111111', 'test1@gmail.co', '                              test1 test1 address                                    ', 1, '2018-08-21 19:46:42', '2018-08-21 19:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE `customer_type` (
  `customer_type_id` int(11) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`customer_type_id`, `type`) VALUES
(1, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `laundry_id` int(11) NOT NULL,
  `laundry_type_id` int(11) NOT NULL,
  `laundry_item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_cost` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `orde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `laundry_service` varchar(256) NOT NULL,
  `pickup_bag_details` varchar(256) NOT NULL,
  `landmark` varchar(500) NOT NULL,
  `collection_from` varchar(500) NOT NULL,
  `order_date` varchar(256) NOT NULL,
  `deliver_date` varchar(256) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`customer_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer_type`
--
ALTER TABLE `customer_type`
  MODIFY `customer_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

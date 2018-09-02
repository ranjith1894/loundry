-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2018 at 01:32 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laundrymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE IF NOT EXISTS `addons` (
  `addons_id` int(11) NOT NULL AUTO_INCREMENT,
  `addons_name` varchar(255) DEFAULT NULL,
  `addons_price` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`addons_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`addons_id`, `addons_name`, `addons_price`, `status`) VALUES
(1, 'Starch Low', 25, 1),
(2, 'Starch Medium', 25, 1),
(3, 'Starch High', 25, 1),
(4, 'Perfume Wash', 15, 1),
(5, 'Bleaching', 25, 1),
(6, 'Stain Removal', 15, 1),
(7, 'Roll Polishing', 55, 1),
(8, 'Button Fixing', 25, 1),
(9, 'Stitching', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_delivery_address`
--

CREATE TABLE IF NOT EXISTS `customer_delivery_address` (
  `cus_addr_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `customer_address` text NOT NULL,
  `delivery_latitude` decimal(10,6) NOT NULL,
  `delivery_longitude` decimal(10,6) NOT NULL,
  `address_type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cus_addr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_type_id` int(11) NOT NULL DEFAULT '1',
  `phone_number` varchar(500) NOT NULL,
  `secondary_phone` varchar(256) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `email_id` varchar(100) NOT NULL,
  `customer_image` varchar(500) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `device_type` varchar(15) NOT NULL,
  `device_id` varchar(2000) DEFAULT NULL,
  `access_token` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_login_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_type_id`, `phone_number`, `secondary_phone`, `password`, `first_name`, `last_name`, `email_id`, `customer_image`, `address`, `device_type`, `device_id`, `access_token`, `created_date`, `modified_date`, `last_login_date`, `status`) VALUES
(1, 1, '11111', '22', '', 'TEST', NULL, 'test@gmail.com', NULL, '                                                            test                                                                        ', '', NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_subscribe`
--

CREATE TABLE IF NOT EXISTS `customer_subscribe` (
  `customer_subscribe_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `subscribe_id` int(11) NOT NULL,
  `subscribe_day_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customer_subscribe_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE IF NOT EXISTS `customer_type` (
  `customer_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_types` varchar(255) DEFAULT NULL,
  `price_package_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`customer_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`customer_type_id`, `customer_types`, `price_package_id`, `status`) VALUES
(1, 'Normal', 1, 1),
(2, 'Corporate', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE IF NOT EXISTS `driver_details` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `phone_number` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `driver_image` varchar(255) DEFAULT NULL,
  `driver_licence` varchar(255) DEFAULT NULL,
  `driver_resume` varchar(500) DEFAULT NULL,
  `device_type` varchar(55) DEFAULT NULL,
  `device_id` varchar(2000) NOT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_login_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `driver_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pickup_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `scheduled_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delivery_address_id` int(11) NOT NULL,
  `subcribe_status` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `pickup_id` int(11) NOT NULL,
  `payment_method` varchar(15) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `pickup_address` varchar(500) DEFAULT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL,
  `total_amount` decimal(11,2) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  PRIMARY KEY (`order_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders_history`
--

CREATE TABLE IF NOT EXISTS `orders_history` (
  `order_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `order_no` varchar(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delivery_address_id` int(11) NOT NULL,
  `subcribe_status` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `pickup_id` int(11) NOT NULL,
  `payment_method` varchar(15) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL,
  `total_amount` decimal(11,2) NOT NULL,
  `payment_status` varchar(15) DEFAULT NULL,
  `order_status` int(11) NOT NULL,
  PRIMARY KEY (`order_history_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_activity`
--

CREATE TABLE IF NOT EXISTS `order_activity` (
  `order_activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `activity_title` varchar(255) NOT NULL,
  `activity_message` varchar(2000) DEFAULT NULL,
  `activity_type` varchar(15) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`order_activity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_bag`
--

CREATE TABLE IF NOT EXISTS `order_bag` (
  `order_bag_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `pickup_bag_no` varchar(15) DEFAULT NULL,
  `delivery_bag_no` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`order_bag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `order_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(6,2) NOT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `addons_id` varchar(55) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `order_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_status` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`order_status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=513 ;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`order_status_id`, `order_status`, `status`) VALUES
(500, 'New', 1),
(501, 'Accepted', 1),
(502, 'Collected', 1),
(503, 'Collected & In transit to laundry', 1),
(504, 'In progress', 1),
(505, 'Ready for Partial Delivery', 1),
(506, 'Ready for Delivery', 1),
(507, 'Delivered', 1),
(508, 'Delivered & paid', 1),
(509, 'Partialy Delivered', 1),
(510, 'Partialy Delivered & Paid', 1),
(511, 'Missing Items', 1),
(512, 'Quality issues & Recollected', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pickup_method`
--

CREATE TABLE IF NOT EXISTS `pickup_method` (
  `pickup_id` int(11) NOT NULL AUTO_INCREMENT,
  `pickup_name` varchar(255) DEFAULT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pickup_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pickup_method`
--

INSERT INTO `pickup_method` (`pickup_id`, `pickup_name`, `descriptions`, `status`) VALUES
(1, 'Free', 'Delivery with in 2-5 days', 1),
(2, 'Express', 'Rs 100 extra,Delivery with in 1-3 days', 1),
(3, 'Store', 'Delivery with in 2-5 days', 1);

-- --------------------------------------------------------

--
-- Table structure for table `price_package`
--

CREATE TABLE IF NOT EXISTS `price_package` (
  `price_package_id` int(11) NOT NULL AUTO_INCREMENT,
  `price_package_name` varchar(255) NOT NULL,
  `price_package_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`price_package_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `price_package`
--

INSERT INTO `price_package` (`price_package_id`, `price_package_name`, `price_package_status`) VALUES
(1, 'Normal price', 1),
(2, 'Co-operative first', 1),
(4, 'treebo nettoor price', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `created_date`, `modified_date`, `status`) VALUES
(1, 'Shirt / T-Shirts', NULL, '2018-05-19', '2018-05-19', 1),
(2, 'Trouser / jeans', NULL, '2018-05-19', '2018-05-19', 1),
(3, 'Jacket cotton / Safari shirt / Lab Coat', NULL, '2018-05-19', '2018-05-19', 1),
(4, 'Kurta', NULL, '2018-05-19', '2018-05-19', 1),
(5, 'Blazer / Suit 2 pcs/ sherwani', NULL, '2018-05-19', '2018-05-19', 1),
(6, 'Suit 3 pcs ( Full Set)', NULL, '2018-05-19', '2018-05-19', 1),
(7, 'Boiler Suit / Cover all', NULL, '2018-05-19', '2018-05-19', 1),
(8, 'Sherwani', NULL, '2018-05-19', '2018-05-19', 1),
(9, 'Sherwani (Designer)', NULL, '2018-05-19', '2018-05-19', 1),
(10, 'Advocate Gown', NULL, '2018-05-19', '2018-05-19', 1),
(11, 'Sweater - cardigan', NULL, '2018-05-19', '2018-05-19', 1),
(12, 'Shorts - cotton', NULL, '2018-06-30', '2018-06-30', 1),
(13, 'Pyjama', NULL, '2018-06-30', '2018-06-30', 1),
(14, 'Lungi', NULL, '2018-06-30', '2018-06-30', 1),
(15, 'Socks pair / Handkerchief', NULL, '2018-06-30', '2018-06-30', 1),
(16, 'Tie', NULL, '2018-06-30', '2018-06-30', 1),
(17, 'Cap', NULL, '2018-06-30', '2018-06-30', 1),
(18, 'Shoes (pair)', NULL, '2018-06-30', '2018-06-30', 1),
(19, 'Inner Baniyan', NULL, '2018-06-30', '2018-06-30', 1),
(20, 'Undergarment', NULL, '2018-06-30', '2018-06-30', 1),
(21, 'Churidar Cotton Top / Salwar cotton Top', NULL, '2018-06-30', '2018-06-30', 1),
(22, 'Churidar Silk / Designer Top', NULL, '2018-06-30', '2018-06-30', 1),
(23, 'Churidar Full set', NULL, '2018-06-30', '2018-06-30', 1),
(24, 'Shirt/ Top/ Kurta/ Safari top cotton', NULL, '2018-06-30', '2018-06-30', 1),
(25, 'Trouser/Pants/Slacks/Jeans / Pyjama', NULL, '2018-06-30', '2018-06-30', 1),
(26, 'Saree cotton', NULL, '2018-06-30', '2018-06-30', 1),
(27, 'Silk saree ', NULL, '2018-06-30', '2018-06-30', 1),
(28, 'Set Mundu', NULL, '2018-06-30', '2018-06-30', 1),
(29, 'Exclusive / Designer saree', NULL, '2018-06-30', '2018-06-30', 1),
(30, 'Saree & Blouse', NULL, '2018-06-30', '2018-06-30', 1),
(31, 'Blouse / Choli Cotton', NULL, '2018-06-30', '2018-06-30', 1),
(32, 'Shorts cotton', NULL, '2018-06-30', '2018-06-30', 1),
(33, 'Gown / Pardha', NULL, '2018-06-30', '2018-06-30', 1),
(34, 'Nighty', NULL, '2018-06-30', '2018-06-30', 1),
(35, 'Shawl / Stole /Scarf / Dupatta cotton', NULL, '2018-06-30', '2018-06-30', 1),
(36, 'Shawl Exclusive', NULL, '2018-06-30', '2018-06-30', 1),
(37, 'Dress cotton', NULL, '2018-06-30', '2018-06-30', 1),
(38, 'Jacket/ Overcoat cotton / Lab Coat', NULL, '2018-06-30', '2018-06-30', 1),
(39, 'Sweater', NULL, '2018-06-30', '2018-06-30', 1),
(40, 'Blazer/Safari exclusive ', NULL, '2018-06-30', '2018-06-30', 1),
(41, 'Kameez Exclusive', NULL, '2018-06-30', '2018-06-30', 1),
(42, 'Lehnga Exclusive', NULL, '2018-06-30', '2018-06-30', 1),
(43, 'Lehenga Cotton', NULL, '2018-06-30', '2018-06-30', 1),
(45, 'Petti coat / Skirt short', NULL, '2018-06-30', '2018-06-30', 1),
(46, 'Skirt long', NULL, '2018-06-30', '2018-06-30', 1),
(47, 'Stockings / Socks pair', NULL, '2018-06-30', '2018-06-30', 1),
(48, 'Undergarment women', NULL, '2018-06-30', '2018-06-30', 1),
(49, 'Bed Sheet / Cover Single', NULL, '2018-06-30', '2018-06-30', 1),
(50, 'Bed Sheet / Cover Double', NULL, '2018-06-30', '2018-06-30', 1),
(51, 'Blanket single', NULL, '2018-06-30', '2018-06-30', 1),
(52, 'Blanket double', NULL, '2018-06-30', '2018-06-30', 1),
(53, 'Bedspreads/Comforters/Quilt/Duvet- Single', NULL, '2018-06-30', '2018-06-30', 1),
(54, 'Bedspreads/Comforters/Quilt/Duvet - Double', NULL, '2018-06-30', '2018-06-30', 1),
(55, 'Curtain half (Panel of 3 ft)', NULL, '2018-06-30', '2018-06-30', 1),
(56, 'Curtain full (Panel of 3 ft)', NULL, '2018-06-30', '2018-06-30', 1),
(57, 'Curtain Extra Large', NULL, '2018-06-30', '2018-06-30', 1),
(58, 'Cushion cover small', NULL, '2018-06-30', '2018-06-30', 1),
(59, 'Cushion cover big', NULL, '2018-06-30', '2018-06-30', 1),
(60, 'Chair cover', NULL, '2018-06-30', '2018-06-30', 1),
(61, 'Sofa cover per seat', NULL, '2018-06-30', '2018-06-30', 1),
(62, 'Pillow cover cotton', NULL, '2018-06-30', '2018-06-30', 1),
(63, 'Face towel/ hand towel/ napkin', NULL, '2018-06-30', '2018-06-30', 1),
(64, 'Bath Mat / Footmat', NULL, '2018-06-30', '2018-06-30', 1),
(65, 'Bath Towel', NULL, '2018-06-30', '2018-06-30', 1),
(66, 'Bath Robe', NULL, '2018-06-30', '2018-06-30', 1),
(67, 'Table cloth small', NULL, '2018-06-30', '2018-06-30', 1),
(68, 'Table cloth big', NULL, '2018-06-30', '2018-06-30', 1),
(69, 'Carpet per sqft', NULL, '2018-06-30', '2018-06-30', 1),
(70, 'Stuff toy small', NULL, '2018-06-30', '2018-06-30', 1),
(71, 'Stuff toy big', NULL, '2018-06-30', '2018-06-30', 1),
(72, 'Pair of Slipper', NULL, '2018-06-30', '2018-06-30', 1),
(73, 'Car seat cover', NULL, '2018-06-30', '2018-06-30', 1),
(74, 'Sleeping bag', NULL, '2018-06-30', '2018-06-30', 1),
(75, 'Dhoti men', NULL, '2018-06-30', '2018-06-30', 1),
(76, 'Double Bed Sheet ', NULL, '2018-07-04', '2018-07-04', 1),
(77, 'Single Bed Sheet ', NULL, '2018-07-04', '2018-07-04', 1),
(78, 'Pillow Cover ', NULL, '2018-07-04', '2018-07-04', 1),
(79, 'Small Towel', NULL, '2018-07-04', '2018-07-04', 1),
(80, 'Face Towel', NULL, '2018-07-04', '2018-07-04', 1),
(81, 'Hand Towel', NULL, '2018-07-04', '2018-07-04', 1),
(82, 'Table Cloth ', NULL, '2018-07-04', '2018-07-04', 1),
(83, 'Blanket ', NULL, '2018-07-04', '2018-07-04', 1),
(84, 'Due Wet Cover Double', NULL, '2018-07-04', '2018-07-04', 1),
(85, 'Due Wet Cover Single', NULL, '2018-07-04', '2018-07-04', 1),
(86, 'Bed Cover(Single) ', NULL, '2018-07-04', '2018-07-04', 1),
(87, 'Bed Cover(Double) ', NULL, '2018-07-04', '2018-07-04', 1),
(88, 'Curtain (Single) or ', NULL, '2018-07-04', '2018-07-04', 1),
(89, 'Single Nice Bed ', NULL, '2018-07-04', '2018-07-04', 1),
(90, 'Double Nice Bed', NULL, '2018-07-04', '2018-07-04', 1),
(91, 'Frill Mtr', NULL, '2018-07-04', '2018-07-04', 1),
(92, 'Shower Curtain', NULL, '2018-07-04', '2018-07-04', 1),
(93, 'Pillow', NULL, '2018-07-04', '2018-07-04', 1),
(94, 'Due Wet Cover Medium', NULL, '2018-07-04', '2018-07-04', 1),
(95, 'Chef Coat', NULL, '2018-07-04', '2018-07-04', 1),
(96, 'Chef Pant', NULL, '2018-07-04', '2018-07-04', 1),
(97, 'Shirt', NULL, '2018-07-04', '2018-07-04', 1),
(98, 'Pant', NULL, '2018-07-04', '2018-07-04', 1),
(99, 'Apron', NULL, '2018-07-04', '2018-07-04', 1),
(100, 'Boiler Suit (For Sta', NULL, '2018-07-04', '2018-07-04', 1),
(101, 'Over Coat Dry', NULL, '2018-07-04', '2018-07-04', 1),
(102, 'Tie T', NULL, '2018-07-04', '2018-07-04', 1),
(103, 'Scarf', NULL, '2018-07-04', '2018-07-04', 1),
(104, 'Bell Boy Coat', NULL, '2018-07-04', '2018-07-04', 1),
(105, 'Reception Coat ', NULL, '2018-07-04', '2018-07-04', 1),
(106, 'Dinner Sheet ', NULL, '2018-07-04', '2018-07-04', 1),
(107, 'Table Mats', NULL, '2018-07-04', '2018-07-04', 1),
(108, 'T-Shirt', NULL, '2018-07-04', '2018-07-04', 1),
(109, 'Saree with Blouse', NULL, '2018-07-04', '2018-07-04', 1),
(110, 'Napkin', NULL, '2018-07-04', '2018-07-04', 1),
(111, 'Slip Cloth', NULL, '2018-07-04', '2018-07-04', 1),
(112, 'Waiter Cloth', NULL, '2018-07-04', '2018-07-04', 1),
(113, 'Wiping Cloth', NULL, '2018-07-04', '2018-07-04', 1),
(114, 'Jacket', NULL, '2018-07-04', '2018-07-04', 1),
(115, 'Tester', NULL, '2018-07-04', '2018-07-04', 1),
(116, 'White Shirt', NULL, '2018-07-04', '2018-07-04', 1),
(117, 'Shirt/Jubbah/Kurta', NULL, '2018-07-04', '2018-07-04', 1),
(118, 'Pants', NULL, '2018-07-04', '2018-07-04', 1),
(119, 'Vest', NULL, '2018-07-04', '2018-07-04', 1),
(120, 'T-Shirt T', NULL, '2018-07-04', '2018-07-04', 1),
(121, 'Churidar (set)', NULL, '2018-07-04', '2018-07-04', 1),
(122, 'Saree', NULL, '2018-07-04', '2018-07-04', 1),
(123, 'Bath Towel T', NULL, '2018-07-04', '2018-07-04', 1),
(124, 'Jeans', NULL, '2018-07-04', '2018-07-04', 1),
(125, 'Dhoti/Lungi', NULL, '2018-07-04', '2018-07-04', 1),
(126, 'Nighty N', NULL, '2018-07-04', '2018-07-04', 1),
(127, 'Bed Sheet', NULL, '2018-07-04', '2018-07-04', 1),
(128, 'Brief', NULL, '2018-07-04', '2018-07-04', 1),
(129, 'Socks', NULL, '2018-07-04', '2018-07-04', 1),
(130, 'Bermuda', NULL, '2018-07-04', '2018-07-04', 1),
(131, 'Blouse', NULL, '2018-07-04', '2018-07-04', 1),
(132, 'Bra', NULL, '2018-07-04', '2018-07-04', 1),
(133, 'Cap C', NULL, '2018-07-04', '2018-07-04', 1),
(134, 'Blazer', NULL, '2018-07-04', '2018-07-04', 1),
(135, 'Kids', NULL, '2018-07-04', '2018-07-04', 1),
(136, 'Arabian Gown', NULL, '2018-07-04', '2018-07-04', 1),
(137, 'Bath Gown', NULL, '2018-07-04', '2018-07-04', 1),
(138, 'Boiler Suit', NULL, '2018-07-04', '2018-07-04', 1),
(139, 'Curtain Doors', NULL, '2018-07-04', '2018-07-04', 1),
(141, 'TEST1', NULL, '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE IF NOT EXISTS `product_types` (
  `product_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `price_package_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `types_id` int(11) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`product_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`product_type_id`, `price_package_id`, `product_id`, `gender_id`, `types_id`, `product_price`) VALUES
(1, 1, 1, 1, 1, 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(255) DEFAULT NULL,
  `store_latitude` decimal(10,6) NOT NULL,
  `store_longitude` decimal(10,6) NOT NULL,
  `store_contact_person` varchar(255) DEFAULT NULL,
  `store_phone_number` varchar(255) DEFAULT NULL,
  `store_email` varchar(255) DEFAULT NULL,
  `store_billing_price` int(11) NOT NULL,
  `store_price` int(11) NOT NULL,
  `store_address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`store_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `subscribe_id` int(11) NOT NULL AUTO_INCREMENT,
  `subscribe_name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`subscribe_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`subscribe_id`, `subscribe_name`, `created_date`, `modified_date`, `status`) VALUES
(1, 'Weekly', '2018-01-10 18:30:00', '2018-01-10 18:30:00', 1),
(2, 'Monthly', '2018-01-10 18:30:00', '2018-01-10 18:30:00', 1),
(3, 'By week', '2018-01-10 18:30:00', '2018-01-10 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `types_id` int(11) NOT NULL AUTO_INCREMENT,
  `types_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`types_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`types_id`, `types_name`, `status`) VALUES
(1, 'Iron', 1),
(2, 'Wash & Iron', 1),
(3, 'Dryclean', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) NOT NULL,
  `vehicle_name` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(55) NOT NULL,
  `vehicle_number` varchar(255) DEFAULT NULL,
  `Insurance_renewal_date` date DEFAULT NULL,
  `tax_date` date NOT NULL,
  `vehicle_image` varchar(255) DEFAULT NULL,
  `rc_book` varchar(255) DEFAULT NULL,
  `insurance` varchar(500) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(255) DEFAULT NULL,
  `vendor_latitude` decimal(10,6) NOT NULL,
  `vendor_longitude` decimal(10,6) NOT NULL,
  `vendor_contact_person` varchar(255) DEFAULT NULL,
  `vendor_phone_number` varchar(255) DEFAULT NULL,
  `vendor_email` varchar(255) DEFAULT NULL,
  `vendor_billing_price` int(11) NOT NULL,
  `vendor_price` int(11) NOT NULL,
  `vendor_address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

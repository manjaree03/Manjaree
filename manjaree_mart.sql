-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 08:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manjaree_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `item_qty` int(11) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`cart_id`, `item_id`, `item_rate`, `item_qty`, `cust_name`, `reg_date`) VALUES
(7, 2, 36000, 2, 'manjaree', '2021-05-22'),
(8, 4, 4750, 1, 'manjaree', '2021-05-22'),
(21, 1, 16000, 2, 'yt', '2021-05-30'),
(24, 3, 29575, 1, 'sakshi', '2021-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `cat_dname` varchar(30) NOT NULL,
  `image_path` text NOT NULL,
  `cat_type` varchar(1) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `image_path`, `cat_type`, `cat_parent_id`, `reg_date`) VALUES
(1, 'Electronics', 'Electronics', 'Arduino_ftdi_chip-1.jpg', 'P', 0, '2021-05-17'),
(2, 'Furniture', 'Furniture', '4-seater-na-rosewood-sheesham-tf-wddining-d2-true-furniture-original-imafzzyjezrecepg.jpeg', 'P', 0, '2021-05-17'),
(3, 'Jwellery', 'Jwellery', '138-1383862_jewellery-full-hd-png-transparent-png.png', 'P', 0, '2021-05-17'),
(4, 'Mobile', 'Mobile', 'download.jpg', 'S', 1, '2021-05-17'),
(5, 'Shoes', 'Shoes', 'images (1).jpg', 'P', 0, '2021-05-17'),
(6, 'Samsung', 'Samsung Mobile', 'images.jpg', 'S', 4, '2021-05-17'),
(7, 'realme XT', 'realme XT', 'Realme-XT-1.jpg', 'S', 4, '2021-05-17'),
(8, 'nokia', 'nokia', 'gsmarena_002.jpg', 'S', 4, '2021-05-17'),
(9, 'adidas', 'adidas', 'adidas-sports-shoes-500x500.jpg', 'S', 5, '2021-05-17'),
(10, 'Study Table', 'Study Table', 'product-jpeg-500x500.jpg', 'S', 2, '2021-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(30) NOT NULL,
  `cust_email` varchar(30) NOT NULL,
  `cust_mobile` varchar(30) NOT NULL,
  `cust_address` text NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`cust_id`, `cust_name`, `cust_email`, `cust_mobile`, `cust_address`, `user_name`, `user_pass`, `user_type`, `reg_date`) VALUES
(4, 'aashi', 'aashi@gmail.com', '465', 'raipur', 'aashi', 'aashi', '', '0000-00-00'),
(5, 'manjaree', 'manjaree@gmail.com', '9000000000', 'ambikapur\r\ncg', 'manjaree', 'manjaree', '', '0000-00-00'),
(6, 'aditi', 'aditi@gmail.com', '566666666666', 'ambikapur \r\ncG\r\n', 'aditi', 'aditi', '', '0000-00-00'),
(7, 'aashi', 'aashi@gmail.com', '00000009', 'sdf', 'aashi123', 'aashi', 'user', '2021-05-15'),
(8, 'himanshi', 'himanshi@gmail.com', '4512652022', 'mall road \r\nraipur', 'himanshi', 'himanshi', 'user', '2021-05-15'),
(9, 'yt', 'yt', '76', 'yt', 'yt', 'yt', 'user', '2021-05-15'),
(10, 'eeee', 'eeee', '4444', 'eeee', 'eee', 'eee', 'user', '2021-05-15'),
(11, 'uy', 'uy', '8787', 'gfdgfd', 'uy', 'uy', 'user', '2021-05-15'),
(12, 'astha', 'astha', '877766554', 'mg road', 'astha', 'astha', 'user', '2021-05-15'),
(13, '', '', '', '', 'iu', 'iu', 'user', '2021-05-15'),
(14, 'dev', 'dev', '33333', 'dev nagar', 'dev', 'dev', 'user', '2021-05-15'),
(15, 'hg', 'hg', '089', 'hg', 'hg', 'hg', 'user', '2021-05-15'),
(16, 'ko', 'ko', '89', 'ko', 'ko', 'ko', 'user', '2021-05-15'),
(17, 'manjaree agrawal', 'manjareeagrawal@gmail.com', '989898989898', 'ambikapur\r\nCG', 'mm', 'mm', 'admin', '2021-05-15'),
(18, 'koko', 'koko', '8787878', 'koko', 'koko', 'koko', 'user', '2021-05-15'),
(19, 'sakshi', 'sakshi@gmail.com', '8765678', 'mg road', 'sakshi', 'sakshi', 'user', '2021-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE IF NOT EXISTS `item_info` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(30) NOT NULL,
  `item_img` text NOT NULL,
  `item_rate` float NOT NULL,
  `item_discount` float NOT NULL,
  `item_detail` text NOT NULL,
  `item_cat` int(11) NOT NULL,
  `item_date` date NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`item_id`, `item_name`, `item_img`, `item_rate`, `item_discount`, `item_detail`, `item_cat`, `item_date`) VALUES
(1, 'galaxy note 4', 'd28be2279fc4658ffe39bcd2f555a156.jpg', 20000, 20, 'camera 64 mgpx', 4, '2021-05-17'),
(2, 'galaxy note 6', 'wp5320845.jpg', 40000, 10, 'camera 64 mgpx ', 4, '2021-05-17'),
(3, 'galaxy note 5', 'butterfly-flower-ad-1920x1080.jpg', 35000, 15.5, 'camera 64 mgpx, dual sim', 4, '2021-05-17'),
(4, 'Adolph Study Table', '4-seater-na-rosewood-sheesham-tf-wddining-d2-true-furniture-original-imafzzyjezrecepg.jpeg', 5000, 5, 'best quality wood', 2, '2021-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE IF NOT EXISTS `message_info` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_heading` text NOT NULL,
  `msg_detail` text NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `receiver_name` varchar(30) NOT NULL,
  `reg_date` date NOT NULL,
  `msg_status` varchar(10) NOT NULL,
  `reply_ref_id` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`msg_id`, `msg_heading`, `msg_detail`, `sender_name`, `receiver_name`, `reg_date`, `msg_status`, `reply_ref_id`) VALUES
(1, 'product is damage', 'the product i received is damaged and not working please take it for return.', 'sakshi', 'mm', '2021-05-25', 'open', 0),
(2, 'product is damage', 'i want to return it\r\n', 'aashi', 'mm', '2021-05-26', 'open', 0),
(3, 'product is damage nd not working', 'product is damage nd not workingproduct is damage nd not workingproduct is damage nd not working', 'dev', 'mm', '2021-05-26', 'open', 0),
(4, '', '', 'dev', 'mm', '2021-05-26', 'open', 0),
(5, 'Re: product is damage', 'sorry for the inconvinience mam !\r\nwe will sent our person to get back those products and give uh a new piece of that same product.\r\n', 'mm', 'sakshi', '2021-05-26', 'open', 1),
(6, 'Re: Re: product is damage', 'thank u...', 'sakshi', 'mm', '2021-05-26', 'open', 5),
(7, 'Re: Re: Re: product is damage', 'ok', 'mm', 'sakshi', '2021-05-26', 'open', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_heading` text NOT NULL,
  `news_detail` text NOT NULL,
  `reg_date` date NOT NULL,
  `news_status` int(11) NOT NULL COMMENT '0 and 1 for visible',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_heading`, `news_detail`, `reg_date`, `news_status`) VALUES
(1, 'summer sale upto 30% off', 'discount on all electronics', '2021-05-30', 1),
(2, 'flat 40% discount on summer cloth collection', 'cotton fabric good, ', '2021-05-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_start_dt` datetime NOT NULL,
  `offer_end_dt` datetime NOT NULL,
  `cat_type` text NOT NULL,
  `offer_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_start_dt`, `offer_end_dt`, `cat_type`, `offer_discount`, `reg_date`) VALUES
(3, 'summer discount offer', '2021-05-30 00:00:00', '2021-06-06 00:00:00', '1-4-6-7-8', 15, '2021-05-31'),
(7, 'summer dhamaka', '2021-06-02 00:00:00', '2021-06-08 00:00:00', '1-4-6-7-8', 10, '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `item_qty` int(11) NOT NULL,
  `ref_order_id` int(11) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`detail_id`, `item_id`, `item_rate`, `item_qty`, `ref_order_id`) VALUES
(1, 1, 16000, 1, 19),
(2, 3, 29575, 3, 19),
(3, 2, 36000, 1, 19),
(4, 4, 4750, 1, 19),
(5, 4, 4750, 3, 19),
(6, 3, 29575, 2, 19),
(7, 1, 16000, 1, 20),
(8, 1, 16000, 2, 22),
(9, 1, 16000, 1, 24),
(10, 1, 16000, 1, 24),
(11, 4, 4750, 1, 24),
(12, 1, 16000, 1, 28),
(13, 1, 16000, 2, 30),
(14, 4, 4750, 1, 30),
(15, 4, 4750, 2, 31),
(16, 4, 4750, 2, 32),
(17, 1, 16000, 1, 33),
(18, 4, 4750, 2, 33);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(30) NOT NULL,
  `order_date` date NOT NULL,
  `total_amount` int(11) NOT NULL,
  `del_address` text NOT NULL,
  `order_status` varchar(20) NOT NULL COMMENT 'initiate/dispatch/cancel/received',
  `last_update_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `cust_name`, `order_date`, `total_amount`, `del_address`, `order_status`, `last_update_date`) VALUES
(8, 'aashi', '0000-00-00', 124500, '', '', '0000-00-00'),
(9, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(10, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(11, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(12, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(13, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(14, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(15, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(16, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(17, 'aashi', '0000-00-00', 124500, 'ram nagar\r\n ', 'initiate', '0000-00-00'),
(18, 'aashi', '0000-00-00', 124500, 'raipur ', 'initiate', '0000-00-00'),
(19, 'sakshi', '0000-00-00', 218875, 'mg road ', 'initiate', '0000-00-00'),
(20, 'yt', '0000-00-00', 16000, 'navapara\r\nring road\r\nambikapur', 'initiate', '0000-00-00'),
(21, 'yt', '0000-00-00', 16000, 'yt ', 'initiate', '0000-00-00'),
(22, 'aashi', '0000-00-00', 32000, 'shakti nagar \r\nraipur ', 'initiate', '0000-00-00'),
(23, 'aashi', '0000-00-00', 32000, 'raipur ', 'initiate', '0000-00-00'),
(24, 'mm', '0000-00-00', 36750, 'ambikapur\r\nCG ', 'initiate', '0000-00-00'),
(25, 'mm', '0000-00-00', 36750, 'ambikapur\r\nCG ', 'initiate', '0000-00-00'),
(26, 'mm', '0000-00-00', 36750, 'ambikapur\r\nCG ', 'initiate', '0000-00-00'),
(27, 'mm', '0000-00-00', 36750, 'ambikapur\r\nCG ', 'initiate', '0000-00-00'),
(28, 'sakshi', '0000-00-00', 16000, 'near sai college\r\nambikapur', 'initiate', '0000-00-00'),
(29, '$usr', '2021-05-31', 0, '$b', 'initiate', '2021-05-31'),
(30, 'mm', '2021-06-16', 36750, 'ambikapur\r\nCG ', 'initiate', '2021-06-16'),
(31, 'mm', '2021-06-17', 9500, 'ambikapur\r\nCG ', 'initiate', '2021-06-17'),
(32, 'mm', '2021-06-17', 9500, 'ambikapur\r\nCG ', 'initiate', '2021-06-17'),
(33, 'mm', '2021-06-17', 25500, 'ambikapur\r\nCG ', 'initiate', '2021-06-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2017 at 04:19 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(10) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'samsung'),
(2, 'HTC'),
(3, 'apple'),
(4, 'xiaomi'),
(5, 'nokia'),
(6, 'huawei'),
(7, 'google'),
(8, 'microsoft'),
(10, 'sony'),
(11, 'oneplus'),
(13, 'lg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `device_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `year_id` int(10) NOT NULL,
  `os_id` int(10) NOT NULL,
  `port_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `price` int(15) NOT NULL,
  `descr` varchar(6000) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `processor` varchar(80) NOT NULL,
  `internal_memory` varchar(10) NOT NULL,
  `screen` varchar(10) NOT NULL,
  `battery` varchar(15) NOT NULL,
  `cam_back` varchar(10) NOT NULL,
  `cam_front` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `key_words` varchar(30) NOT NULL,
  `date` timestamp NOT NULL,
  `link1` varchar(150) NOT NULL,
  `link2` varchar(150) NOT NULL,
  `link3` varchar(150) NOT NULL,
  `link4` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`device_id`, `brand_id`, `year_id`, `os_id`, `port_id`, `name`, `img1`, `img2`, `price`, `descr`, `ram`, `processor`, `internal_memory`, `screen`, `battery`, `cam_back`, `cam_front`, `weight`, `key_words`, `date`, `link1`, `link2`, `link3`, `link4`) VALUES
(10, 1, 12, 10, 2, 'Note 7', 'samsung-galaxy-note7.jpg', 'NOTE.jpg', 93000, 'This is the latest flagship from samsung.', 'kjhkj', 'hghjvf', 'y544', '', '', '245', '87454', '46', 'note 7', '2017-04-12 14:34:51', 'https://www.daraz.pk/mi-redmi-4a-5.0-2gb-16gb-13mp-4g-gold-6514727.html', '', '', ''),
(11, 1, 11, 7, 2, 'S7 Edge', 'samsung-galaxy-s7-edge-.jpg', 'samsung-galaxy-s7-edge-.jpg', 64545, 'gh', 'sadA', 'jfjf', 'GHGH', 'JFB', 'FY', 'CJF', 'V', 'VH', 'jhlj5', '2017-03-19 12:57:07', '', '', '', ''),
(12, 10, 3, 5, 2, 'Xperia Z5', 'sony-z5-premium-.jpg', 'sony-z5-premium-.jpg', 7458478, '    bhjfj', 'hvh', 'yfmgf', 'h', '', '', 'v', 'v', 'vc', 'jhkuh', '2017-03-25 16:57:25', '', '', '', ''),
(14, 2, 13, 7, 1, 'HTC 10', 'htc-10-r.jpg', 'htc-10-r.jpg', 45454, 'ghkgkh', 'FNGCGN', 'vgjfgn', 'HGHhfng', 'jl', 'h', 'hkg', 'g', 'h', 'kjbmhmn', '2017-03-19 13:00:11', '', '', '', ''),
(15, 3, 10, 3, 3, 'Iphone 6', 'apple-iphone-6-4.jpg', '', 5435, ' vmv', 'hvh', 'hashj', 'vvmv', '', '', 'vm', 'vhv', 'hvh', 'iphone, iphone 6', '2017-03-27 05:37:52', '', '', '', ''),
(16, 13, 13, 10, 2, 'LG V20', 'lg-v20-ofic1.jpg', 'lg-v20-ofic1.jpg', 544, 'crg', 'f45', 'hbmvj', '545', 'geg', 'cfc', 'gjfj', 'cfc', 'fc', 'nhkg', '2017-03-19 15:51:29', '', '', '', ''),
(18, 5, 5, 13, 1, 'Nokia Lumia 640', 'nokia-lumia-640-xl-3g.jpg', 'nokia-lumia-640-xl-3g.jpg', 13000, ' 6bhghg', '55', '5652', '7', '', '', '656', '56', '565', 'nokai lumia', '2017-03-29 06:56:34', 'dasd2e', '2e1e', 'd22ed', '22');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msg_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `detail` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`msg_id`, `name`, `number`, `email`, `subject`, `detail`) VALUES
(3, 'Ali', '542475638', 'masadasif@hotmail.com', 'title', 'Im having trouble understanding your question. You create a textarea on the fly, and if the button is clicked again, its wiped out (removed), and a new one comes up?');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(30) NOT NULL,
  `user_id` int(20) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `products` int(20) NOT NULL,
  `invoice` varchar(40) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `os`
--

CREATE TABLE `os` (
  `os_id` int(10) NOT NULL,
  `os` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `os`
--

INSERT INTO `os` (`os_id`, `os`) VALUES
(3, 'IOS 10'),
(4, 'IOS 11'),
(5, 'Android 4.0 IceCream Sandwich '),
(6, 'Android 4.1 Jelly Bean'),
(7, 'Android 4.4 KitKat'),
(8, 'Android 5.0 Lollipop'),
(9, 'Android 6.0 Marshmallow'),
(10, 'Android 7.0 Nougat'),
(11, 'Android O (Coming Soon)'),
(12, 'Microsoft Windows 8'),
(13, 'Microsoft Windows 10'),
(14, 'Blackberry OS');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `user_id` int(20) NOT NULL,
  `invoice_no` int(20) NOT NULL,
  `device_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `port_id` int(10) NOT NULL,
  `port` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port`
--

INSERT INTO `port` (`port_id`, `port`) VALUES
(1, 'Micro USB 2.0'),
(2, 'USB Type-C'),
(3, 'Apple Lightning Port');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_no` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `phone_no`, `email`, `address`, `city`, `password`, `ip`) VALUES
(28, 'asjdhaskj', 'njasndja', '548768', 'masadasif@gmail.comm', 'House No 837, B-Block Amin Town Faisalabad\r\n836', 'Faisalabad ', 'uPeLK165rBCZZjvrDJnkEGVzowHectOdlb+SkUMZlIw=', '::1'),
(27, 'masadasif', 'Asad Asif', '03064844638', 'masadasif@gmail.com', 'House No 837, B-Block Amin Town Faisalabad\r\n836', 'Faisalabad ', 'y+LdHkw8sbEHcQzcOZzhlt69wUFZEzEIwRSyQ3m5Qk4=', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int(10) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year`) VALUES
(1, 2005),
(2, 2006),
(3, 2007),
(4, 2008),
(5, 2009),
(6, 2010),
(7, 2011),
(8, 2012),
(9, 2013),
(10, 2014),
(11, 2015),
(12, 2016),
(13, 2017),
(14, 2018),
(15, 2019),
(16, 2020),
(17, 2021),
(18, 2022),
(19, 2023),
(20, 2024),
(21, 2025);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`port_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `msg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `os_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `port_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `devices`
--
ALTER TABLE `devices`
  ADD CONSTRAINT `devices_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 07:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_last`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `depName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `depName`) VALUES
(001, 'Sevice'),
(002, 'HR'),
(003, 'Accounting'),
(004, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `emp_name` varchar(30) DEFAULT NULL,
  `emp_lastname` varchar(30) DEFAULT NULL,
  `pos_id` int(3) DEFAULT NULL,
  `emp_telephone` varchar(10) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(128) NOT NULL,
  `emp_img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_lastname`, `pos_id`, `emp_telephone`, `username`, `password`, `emp_img`) VALUES
(65700577, 'ชรัณ', 'เดชศศิโภคิน', 1, '0630001234', 'cha', 'cha123', 'pro_663603c134e72.jpg'),
(65701976, 'ธนกร', 'พันธมาศ ', 4, '0890001234', 'nhong', 'nhong123', 'pro_663605087ece2.jpg'),
(65704591, 'เมฆาวี', 'อนุกูล', 4, '0890001234', 'asd', 'asd13', 'pro_66360735a8f63.jpg'),
(65706286, 'พชร', 'เอมสุวรรณ', 2, '0890001234', 'we', 'we1232', 'pro_66360748c884a.jpg'),
(65709565, 'ปิยวัช', 'ศุภเศรษฐ์ศักดิ์ ', 4, '0890001234', 'fo', 'f123213', 'pro_6636078b4114d.jpg'),
(65709616, 'รัชชานนท์', 'จอกุ้ย', 3, '0890001234', 'pae', 'ba232', 'pro_6636079425ee7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `giftcard`
--

CREATE TABLE `giftcard` (
  `gift_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `gift_name` varchar(30) DEFAULT NULL,
  `gift_img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giftcard`
--

INSERT INTO `giftcard` (`gift_id`, `gift_name`, `gift_img`) VALUES
(001, 'Steam wallet TH', 'giftcard.jpg'),
(002, 'Roblox Gift Card', 'roblox-gift.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_position`
--

CREATE TABLE `job_position` (
  `pos_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `pos_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_position`
--

INSERT INTO `job_position` (`pos_id`, `pos_name`) VALUES
(001, 'ฝ่ายบริการลูกค้า'),
(002, 'ฝ่ายบริหารทรัพยากรบุคคล'),
(003, 'ฝ่ายบัญชี'),
(004, 'ฝ่าย IT');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL COMMENT 'ลำดับที่',
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `orderPrice` float NOT NULL COMMENT 'ราคาสินค้า',
  `orderQty` int(11) NOT NULL COMMENT 'จำนวนที่สั่งซื้อ',
  `Total` float NOT NULL COMMENT 'ราคารวม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderID`, `pro_id`, `orderPrice`, `orderQty`, `Total`) VALUES
(76, 0000000033, 000012, 290, 2, 580),
(77, 0000000033, 000013, 350, 2, 700),
(78, 0000000034, 000001, 250.5, 1, 250.5),
(79, 0000000034, 000002, 500, 2, 1000),
(80, 0000000034, 000013, 350, 1, 350),
(81, 0000000035, 000002, 500, 2, 1000),
(82, 0000000035, 000017, 299, 1, 299),
(83, 0000000036, 000002, 500, 2, 1000),
(84, 0000000036, 000012, 290, 2, 580),
(85, 0000000036, 000017, 299, 3, 897),
(86, 0000000037, 000017, 299, 2, 598),
(87, 0000000037, 000015, 250, 2, 500),
(88, 0000000038, 000001, 400, 1, 400),
(89, 0000000039, 000003, 40, 5, 200),
(90, 0000000040, 000001, 200, 1, 200),
(91, 0000000041, 000001, 200, 1, 200),
(92, 0000000042, 000001, 149, 1, 149),
(93, 0000000043, 000001, 149, 1, 149),
(94, 0000000043, 000002, 149, 1, 149),
(95, 0000000043, 000003, 60, 1, 60),
(96, 0000000045, 000001, 149, 1, 149);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `pro_name` varchar(30) DEFAULT NULL,
  `pro_img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_img`) VALUES
(001, 'Genshin Impact', 'pro_6637904de3095.jpg'),
(002, 'Honkai Star Rail', 'pro_663791368c6c1.webp'),
(003, 'PUBG Mobile', 'pro_6637d95d0aa1f.png'),
(004, 'APEX LEGENDS', 'Apex.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสมาชิก',
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ชื่อ',
  `surname` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'นามสกุล',
  `telephone` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `name`, `surname`, `telephone`, `username`, `password`) VALUES
(023, '', 'หมามะพร้าว', '1113245633', 'dog', 'dog1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `cus_name` varchar(60) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `address` text NOT NULL COMMENT 'ที่อยู่การจัดส่งสินค้า',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `total_price` float NOT NULL COMMENT 'ราคารวมสุทธิ',
  `order_status` varchar(1) NOT NULL COMMENT '0=ยกเลิก, 1=ยังไม่ชำระเงิน,2 =ชำระเงิน',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่สั่งซื้อ',
  `dateMonth` varchar(30) NOT NULL COMMENT 'เดือน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`orderID`, `cus_name`, `address`, `telephone`, `total_price`, `order_status`, `reg_date`, `dateMonth`) VALUES
(0000000033, 'มานิตย์ คงดี', '  79 หมู่ 1 ต.คลองตำหรุ อ.เมือง 20000', ' 03', 1280, '2', '2023-03-31 08:32:59', ''),
(0000000034, 'มานิตย์ คงดี', '  79 หมู่ 1 ต.คลองตำหรุ อ.เมือง จ.ชลบุรี 20000\r\n', ' 038743690', 1600.5, '2', '2023-03-31 08:36:07', ''),
(0000000035, 'นานะ เรียนเก่ง', '  79 หมู่ 1 จ.ชลบุรี', ' 038743690', 1299, '1', '2023-04-21 06:10:50', ''),
(0000000036, 'มานี คงดี', ' 79 หมู่ 1 ต. คลองตำหรุ อ.เมือง จ. ชลบุรี 200000', ' 081724710', 2477, '1', '2024-03-25 13:20:55', ''),
(0000000037, 'มานี คงดี', ' 79 หมู่1 จ.ชลบุรี', ' 081724710', 1098, '1', '2024-04-01 08:30:19', ''),
(0000000038, 'มานี คงดี', ' uijjj', ' 081724710', 400, '1', '2024-04-23 02:39:29', ''),
(0000000039, 'มานี คงดี', ' เมืองนอก', ' 081724710', 200, '1', '2024-04-23 04:47:51', ''),
(0000000040, ' หมามะพร้าว', ' ฟหกฟหกฟหกฟหกฟกดหกดห', ' 111324563', 200, '1', '2024-05-06 14:55:22', '');

-- --------------------------------------------------------

--
-- Table structure for table `top_up`
--

CREATE TABLE `top_up` (
  `top_id` int(6) NOT NULL,
  `top_name` varchar(30) DEFAULT NULL,
  `pro_id` int(6) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `top_pic` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_up`
--

INSERT INTO `top_up` (`top_id`, `top_name`, `pro_id`, `price`, `amount`, `top_pic`) VALUES
(1, 'Genshin Impact', 1, 149, -4, 'pro_6637904de3095.jpg'),
(2, 'Honkai Star rail', 2, 149, -1, 'pro_663791368c6c1.webp'),
(3, 'PUBG Mobile', 3, 60, -1, 'pubgm.png'),
(4, 'APEX LEGENDS', 4, 300, 0, 'Apex.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `giftcard`
--
ALTER TABLE `giftcard`
  ADD PRIMARY KEY (`gift_id`);

--
-- Indexes for table `job_position`
--
ALTER TABLE `job_position`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `top_up`
--
ALTER TABLE `top_up`
  ADD PRIMARY KEY (`top_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65709617;

--
-- AUTO_INCREMENT for table `giftcard`
--
ALTER TABLE `giftcard`
  MODIFY `gift_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_position`
--
ALTER TABLE `job_position`
  MODIFY `pos_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซื้อ', AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `top_up`
--
ALTER TABLE `top_up`
  MODIFY `top_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

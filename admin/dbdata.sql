-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 06:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `depName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `depName`) VALUES
(001, 'แผนกค้าม้า'),
(002, 'แผนกค้าแมว'),
(004, 'แผนกด๋ำด๋อย');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `emp_name` varchar(30) DEFAULT NULL,
  `emp_lastname` varchar(30) DEFAULT NULL,
  `pos_id` int(3) DEFAULT NULL,
  `emp_telephone` varchar(10) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(128) NOT NULL,
  `emp_img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_lastname`, `pos_id`, `emp_telephone`, `username`, `password`, `emp_img`) VALUES
(000001, 'ปุ๊กปิ๊ก', 'กระจอก', 3, '1265794865', 'nhong', 'nhong123', 'pro_65e695a05cbc2.jpg'),
(000002, 'จิมมี่', 'นักบิด', 2, '2458457569', 'bit', 'nhong', 'pro_65e692515226b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_position`
--

CREATE TABLE `job_position` (
  `pos_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `pos_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_position`
--

INSERT INTO `job_position` (`pos_id`, `pos_name`) VALUES
(001, 'นักบิดสมัครเล่น'),
(002, 'นักบิดมืออาชีพ'),
(003, 'นักบิดในตำนาน'),
(004, 'นักบิน');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(89, 0000000039, 000003, 40, 5, 200);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` varchar(6) NOT NULL,
  `pro_name` varchar(30) DEFAULT NULL,
  `type_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `pro_img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `type_id`, `price`, `amount`, `pro_img`) VALUES
('', '', 000, 0, 0, 'pro_65db88775f9e7.png'),
('0001', 'หมาเผา', 003, 400, 19, 'pro_65dd5d387dd10.jpg'),
('0002', 'แมวเผา', 001, 400, 30, 'pro_65d42791aa444.jpg'),
('0003', 'ไดโนเสาร์', 002, 40, -4, 'pro_65dd5b5f733a8.jpg'),
('0004', 'หมา', 004, 700, 50, 'pro_65dd5d69e1c8c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสมาชิก',
  `name` varchar(30) DEFAULT NULL COMMENT 'ชื่อ',
  `surname` varchar(30) DEFAULT NULL COMMENT 'นามสกุล',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `name`, `surname`, `telephone`, `username`, `password`) VALUES
(001, 'มานี', 'คงดี', '0817247100', 'user1', 'user1'),
(002, 'นงเยาว์', 'คงดี', '0815712400', 'yao', '1234'),
(003, 'ปราณี', 'มีบุญ', '0821041833', 'mesa', '1234'),
(004, 'มะลิรัตย์', 'เกิดทอง', '038742190', 'mana', '1234');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(0000000039, 'มานี คงดี', ' เมืองนอก', ' 081724710', 200, '1', '2024-04-23 04:47:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `type_name` varchar(30) NOT NULL COMMENT 'ชื่อประเภทสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(001, 'เครื่องใช้ไฟฟ้า'),
(002, 'เครื่องเขียน'),
(003, 'เครื่องสำอาง'),
(004, 'เครื่องแก้ว'),
(005, 'ชุดนอน');

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
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

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
  MODIFY `emp_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_position`
--
ALTER TABLE `job_position`
  MODIFY `pos_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซื้อ', AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทสินค้า', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 01:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipment_id` int(10) NOT NULL,
  `equipment_name` varchar(55) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่ออุปกรณ์',
  `equipment_detail` varchar(55) CHARACTER SET utf8 NOT NULL COMMENT 'รายละเอียดอุปกรณ์',
  `equipment_img` varchar(55) CHARACTER SET utf8 NOT NULL COMMENT 'รูปอุปกรณ์',
  `equipment_status` varchar(55) CHARACTER SET utf8 NOT NULL COMMENT 'สถานะ',
  `equipment_date` date NOT NULL COMMENT 'วันที่เพิ่มข้อมูล'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `equipment_detail`, `equipment_img`, `equipment_status`, `equipment_date`) VALUES
(1, 'เครื่องปริ้น', 'เครื่องปริ้น', 'img_2020-01-27_19-14-21_thumb.jpg', '1', '2020-01-16'),
(2, 'โต๊ะ', 'โต๊ะ', '522f15c183cb5021aec28ad475266ae7.jpg', '1', '2020-01-09'),
(3, 'เครื่องถ่ายเอกสาร', ' เครื่องถ่ายเอกสาร', '6bdf68ec1f585c3813782643bf776ddd.jpg', '1', '2020-01-09'),
(4, 'โทรศัพท์ แฟกซ์', ' โทรศัพท์ แฟกซ์ สำนักงาน', '39e2266665784a53f87eff7f176a1f07.jpg', '1', '2020-01-10'),
(5, 'คอมพิวเตอร์ ', ' คอมพิวเตอร์  สำนักงาน', 'c71cb820c02853b6c9f3e99cbf78accd.jpg', '1', '2020-01-09'),
(6, 'เก้าอี้', 'เก้าอี้สำนักงาน ', '85c255b959ac953f45b53967931254e9.jpg', '1', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL COMMENT 'รหัสสมาชิก',
  `member_name` varchar(55) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อ',
  `member_lname` varchar(55) CHARACTER SET utf8 NOT NULL COMMENT 'นามสกุล',
  `member_username` varchar(55) CHARACTER SET utf8 NOT NULL COMMENT 'ไอดี',
  `member_password` varchar(55) CHARACTER SET utf8 NOT NULL COMMENT 'พาสเวิส',
  `member_picture` varchar(555) NOT NULL COMMENT 'รูปภาพ',
  `type_id` int(11) NOT NULL COMMENT 'ประเภทสมาชิก',
  `line_token` varchar(555) NOT NULL COMMENT 'token_line'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_lname`, `member_username`, `member_password`, `member_picture`, `type_id`, `line_token`) VALUES
(1, 'สมยส', 'รัตนพากุล', 'admin', '123456', 'img_2020-01-13_11-56-10_thumb.jpg', 1, ''),
(2, 'สมปอง ', 'พากุล', 'szaa', '123456', 'img_2020-01-12_16-49-38_thumb.png', 2, 'CL6kEMQFxNco8otQuqpwUwWHixH0ttt3yexZ4WgNzEQ'),
(3, 'สหัรฐ', 'เชิงกุญ', 'azaa', '123456', 'user5-128x128.jpg', 2, 'JAXBwM82dQxtzFSTywk9KfyYXnCcdfs5qdm4BfqNkA0'),
(4, 'อำนาจ', 'แซ่ลิ้ม', 'bzaa', '123456', 'img_2020-01-28_21-23-51_thumb.png', 3, ''),
(6, 'สมปอง', 'สมหมาย', 'czaa', '123456', 'img_2020-01-12_16-49-49_thumb.jpg', 3, ''),
(7, 'นางสาว ยุพิน ', 'สาวิสิทธิ์', 'dzaa', '123456', 'ab949e3892e14b2ac335ba16dec72972.jpg', 2, 'tRbDR1obOvXem4pTm3ckIDCs1cFGCfXrkWP4YwXWABV');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `repair_id` int(5) NOT NULL COMMENT 'รหัสแจ้งซ่อม',
  `member_id` int(5) NOT NULL COMMENT 'รหัสสมาชิก',
  `equipment_id` int(5) NOT NULL COMMENT 'รหัสอุปกรณ์',
  `repair_detail` varchar(555) CHARACTER SET utf8 NOT NULL COMMENT 'รายละเอียดอุปกรณ์',
  `repair_date` date NOT NULL COMMENT 'วันที่แจ้ง',
  `repair_status` int(5) NOT NULL COMMENT 'สถานะ',
  `office_id` int(5) NOT NULL COMMENT 'รหัสพนักงาน'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`repair_id`, `member_id`, `equipment_id`, `repair_detail`, `repair_date`, `repair_status`, `office_id`) VALUES
(1, 1, 1, 'เครื่องปริ้นไม่ติดครับเกิดจากอะไรยังไม่ทราบ', '2020-01-16', 2, 2),
(2, 6, 2, 'dsadas', '2020-01-24', 2, 3),
(3, 6, 3, ' cxzcsaasasasdas', '2020-02-09', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `repair_status` int(20) NOT NULL COMMENT 'รหัสสถานะ',
  `repair_name` varchar(555) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อสถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`repair_status`, `repair_name`) VALUES
(1, 'กำลังดำเนินการ'),
(2, 'ดำเนินการแล้ว'),
(3, 'ยกเลิก\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(1) NOT NULL,
  `type_name` varchar(555) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'admin'),
(2, 'office'),
(3, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`repair_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`repair_status`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `repair_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'รหัสแจ้งซ่อม', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `repair_status` int(20) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสถานะ', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

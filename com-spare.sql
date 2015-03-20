-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2014 at 03:41 AM
-- Server version: 5.5.25-MariaDB
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `com-spare`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE IF NOT EXISTS `computer` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ซ่อม/ลงวินโดว์',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_computer_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `date`, `type`, `department_id`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-03', 'Windows', 4, 1, 'ติดตั้งวินโดว์', 'สำเร็จ'),
(2, '2014-12-18', 'Windows', 1, 1, 'ลงวินโดว์ใหม่', 'สำเร็จ'),
(3, '2014-12-19', 'Hardware', 1, 1, 'เช็คคอมพิวเตอร์', 'สำเร็จ'),
(4, '2014-12-20', 'Windows', 5, 2, 'ลงวินโดว์พร้อมติดตั้งคอมพิวเตอร์คลินิก DM,HT', 'สำเร็จ'),
(5, '2014-12-21', 'Technic', 12, 3, 'นำฐานข้อมูลเข้าเครื่อง Notebook เพื่อใช้ในการอบรม', 'สำเร็จ'),
(6, '2014-12-17', 'Technic', 7, 3, 'ลบไฟล์รูปภาพ HOSXP จำนวน 3 เครื่อง', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `department_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'แผนก',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`) VALUES
(1, 'OPD'),
(2, 'IPD'),
(3, 'ER'),
(4, 'DENT'),
(5, 'DOCTOR'),
(6, 'PHAR'),
(7, 'CARD'),
(8, 'LR'),
(9, 'LAB'),
(10, 'X-RAY'),
(11, 'IT'),
(12, 'CLAIM'),
(13, 'MANAGE'),
(14, 'CLINIC HT,DM'),
(15, 'CLINIC ARV'),
(16, 'FITNESS'),
(17, 'MEETING ROOM ER'),
(18, 'MEETING ROOM KEANGKHA');

-- --------------------------------------------------------

--
-- Table structure for table `internet`
--

CREATE TABLE IF NOT EXISTS `internet` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ครั้ง',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_internet_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `internet`
--

INSERT INTO `internet` (`id`, `date`, `department_id`, `type`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-18', 11, 'Technic', 1, 'Clear Log File', 'สำเร็จ'),
(2, '2014-12-20', 11, 'Technic', 2, 'ทำการ Clear Log File Internet เนื่องจากไฟล์มีขนาดใหญ่', 'สำเร็จ'),
(3, '2014-12-21', 11, 'Technic', 1, 'Clear Log File Internet', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `lan`
--

CREATE TABLE IF NOT EXISTS `lan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ครั้ง',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_lan_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lan`
--

INSERT INTO `lan` (`id`, `date`, `department_id`, `total`, `howto`, `finish`, `type`) VALUES
(1, '2014-12-18', 17, 1, 'เข้าหัว LAN ใช้กับ WIFI ห้องประชุม ER', 'สำเร็จ', 'เข้าหัว LAN'),
(2, '2014-12-19', 17, 1, 'เข้าหัว LAN ต่อกับ WIFI ชื่อ MEETING_HOSXP', 'สำเร็จ', 'เข้าหัว LAN'),
(3, '2014-12-15', 17, 4, 'ย้ายตึก HT DM', 'สำเร็จ', 'เดินสาย LAN'),
(4, '2014-12-16', 14, 5, 'ติดตั้งสาย LAN', 'สำเร็จ', 'เดินสาย LAN');

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE IF NOT EXISTS `printer` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` enum('เปลี่ยนหมึก Printer','ติดตั้ง Printer','ย้าย Printer','เติมหมึก Printer','แก้ไขปัญหา อื่นๆ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'เปลี่ยนหมึก Printer' COMMENT 'ประเภทที่ปฎิบัติ',
  `ink` enum('HP 1102','HP M1132','Cannon','85A','35A','12A','LQ300','LQ590','TLP 2844','หมึกเติม') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'HP 1102' COMMENT 'หมึก',
  `total` int(11) NOT NULL COMMENT 'จำนวน/หมึก',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_printer_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`id`, `date`, `department_id`, `type`, `ink`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-17', 14, 'ติดตั้ง Printer', 'HP 1102', 3, 'ย้ายมาคลินิก HT,DM', 'สำเร็จ'),
(2, '2014-12-15', 8, 'แก้ไขปัญหา อื่นๆ', 'Cannon', 3, 'ส่งซ่อมเครื่องปริ้น', 'สำเร็จ'),
(3, '2014-12-09', 2, 'แก้ไขปัญหา อื่นๆ', 'TLP 2844', 1, 'แชร์เครื่องปริ้น', 'สำเร็จ'),
(4, '2014-12-20', 6, 'แก้ไขปัญหา อื่นๆ', 'TLP 2844', 3, 'ปริ้นไม่ออก', 'สำเร็จ'),
(5, '2014-12-20', 3, 'เปลี่ยนหมึก Printer', 'HP 1102', 1, 'เปลี่ยนหมึก HP1102', 'สำเร็จ'),
(6, '2014-12-19', 2, 'เติมหมึก Printer', 'Cannon', 1, 'เติมหมึกแทงค์', 'สำเร็จ'),
(7, '2014-12-19', 7, 'เปลี่ยนหมึก Printer', '85A', 1, 'เปลี่ยนหมึก', 'สำเร็จ'),
(8, '2014-12-21', 6, 'แก้ไขปัญหา อื่นๆ', 'TLP 2844', 3, 'ลงไดว์เวอร์ใหม่เนื่องจากไม่สามรถปริ้นสติ๊กเกอร์ยาได้', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ลงโปรแกรม',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_program_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `date`, `department_id`, `type`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-17', 5, 'Install Program', 1, 'ติดตั้งโปรแกรม Plugin ดู OPD CARD', 'สำเร็จ'),
(2, '2014-12-18', 12, 'Install Program', 1, 'ติดตั้งโปรแกรม E-CLAIM ใช้ในการเบิกรายการยา', 'สำเร็จ'),
(3, '2014-12-18', 2, 'Install Program', 1, 'ติดตั้งโปรแกรม DS-Asset', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE IF NOT EXISTS `repair` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `device` enum('Computer','Notebook','Printer','Scanner','UPS') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Computer' COMMENT 'อุปกรณ์',
  `date` date NOT NULL COMMENT 'วันที่ส่งซ่อม',
  `total` int(11) NOT NULL COMMENT 'จำนวน',
  `detail` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `shop` enum('Hytron','JNN','JJ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Hytron' COMMENT 'ร้านที่ส่ง',
  `status` enum('ส่งซ่อม','ซ่อมเสร็จ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ส่งซ่อม' COMMENT 'สถานะการซ่อม',
  PRIMARY KEY (`id`),
  KEY `fk_repair_department_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`id`, `department_id`, `device`, `date`, `total`, `detail`, `shop`, `status`) VALUES
(1, 3, 'UPS', '2014-12-16', 2, 'ส่งไปเปลี่ยนแบต', 'Hytron', 'ส่งซ่อม'),
(2, 7, 'Computer', '2014-12-15', 1, 'ไฟไม่เข้า', 'Hytron', 'ส่งซ่อม'),
(3, 11, 'Printer', '2014-12-02', 1, 'ไม่ดึงกระดาษ', 'Hytron', 'ส่งซ่อม'),
(4, 5, 'Notebook', '2014-12-05', 1, 'เปิดไม่ได้', 'Hytron', 'ส่งซ่อม'),
(5, 11, 'Scanner', '2014-12-08', 1, 'ไฟไม่เข้า', 'Hytron', 'ส่งซ่อม'),
(6, 2, 'Computer', '2014-12-04', 1, 'เปิดไม่ติด', 'Hytron', 'ส่งซ่อม'),
(7, 9, 'Computer', '2014-12-02', 1, 'ไฟไม่เข้าเมนบอร์ด', 'Hytron', 'ส่งซ่อม'),
(8, 8, 'Printer', '2014-12-19', 1, 'หมึกไม่ออก', 'Hytron', 'ส่งซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `report_etc`
--

CREATE TABLE IF NOT EXISTS `report_etc` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ครั้ง',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_report_etc_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `report_etc`
--

INSERT INTO `report_etc` (`id`, `date`, `department_id`, `type`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-17', 17, 'Meeting', 1, 'ประชุม PCT', 'สำเร็จ'),
(2, '2014-12-18', 17, 'Meeting', 1, 'จัดห้องประชุม', 'สำเร็จ'),
(3, '2014-12-19', 11, 'Microsoft Office', 1, 'ทำรายชื่อกีฬาสี รพ.2558', 'สำเร็จ'),
(4, '2014-12-19', 17, 'Meeting', 1, 'จัดห้องประชุมกีฬาสี', 'สำเร็จ'),
(5, '2014-12-22', 1, 'Microsoft Office', 1, 'Copy เอกสารให้พยาบาล OPD', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE IF NOT EXISTS `server` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Server',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ครั้ง',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_server_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`id`, `date`, `name`, `type`, `department_id`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-21', 'HosXP Master', 'Technic', 11, 1, 'เนื่องจากข้อมูลมีขนาดใหญ่จึงได้ทำการ Clear Replicate Log File', 'สำเร็จ'),
(2, '2014-12-17', 'HosXP Master', 'Technic', 11, 1, 'Replicate ข้อมูลไปเครื่อง Slave', 'สำเร็จ'),
(3, '2014-12-17', 'Scan Master', 'Technic', 11, 1, 'Backup Databases', 'สำเร็จ'),
(4, '2014-12-18', 'HosXP Master', 'Technic', 11, 1, 'ตรวจเช็ค Server', 'สำเร็จ'),
(5, '2014-12-19', 'Internet HosXP', 'Technic', 11, 1, 'Restart Server', 'สำเร็จ'),
(6, '2014-12-18', 'Scan Master', 'Technic', 11, 1, 'Backup Database', 'สำเร็จ'),
(7, '2014-12-20', 'Internet Office', 'Technic', 11, 1, 'Clear Log Squid', 'สำเร็จ'),
(8, '2014-12-22', 'HosXP Master', 'Hardware', 11, 1, 'ตรวจเช็ค Server และอุณหภูมิห้องประจำวัน', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `switchh`
--

CREATE TABLE IF NOT EXISTS `switchh` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ครั้ง',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_switchh_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `switchh`
--

INSERT INTO `switchh` (`id`, `date`, `department_id`, `type`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-17', 14, 'Hardware', 1, 'เปิด-ปิด ใหม่', 'สำเร็จ'),
(2, '2014-12-19', 14, 'Software', 1, 'ทำการ Restart Switch เนื่องจากคอมเข้าระบบไม่ได้', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `ups`
--

CREATE TABLE IF NOT EXISTS `ups` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ที่เปลี่ยน',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_ups_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ups`
--

INSERT INTO `ups` (`id`, `date`, `department_id`, `type`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-18', 11, 'เปลี่ยน UPS', 1, 'เปลี่ยน UPS ห้องงานประกันไม่สำรองไฟ', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `role` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user' COMMENT 'ระดับ',
  `pname` enum('นาย','นาง','น.ส.') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'นาย' COMMENT 'คำนำหน้า',
  `countlogin` int(8) DEFAULT NULL COMMENT 'จำนวนที่เข้าสู่ระบบ',
  `lastlogin` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'เข้าสู่ระบบครั้งล่าสุด',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fullname`, `role`, `pname`, `countlogin`, `lastlogin`) VALUES
('admin', 'admin', 'ดนัย สอนไสย', 'admin', 'นาย', 6, '2014-12-29 09:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `viruss`
--

CREATE TABLE IF NOT EXISTS `viruss` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ครั้ง',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_viruss_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `viruss`
--

INSERT INTO `viruss` (`id`, `date`, `department_id`, `type`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-18', 5, 'Detele Virus', 1, 'ลบไวรัสคอมพิวเตอร์เครื่องห้องตรวจโรค 2', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `total` int(11) NOT NULL COMMENT 'จำนวน/อัพเดรท',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_website_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `date`, `department_id`, `type`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-18', 11, 'Website', 1, 'ลงประกาศข้อมูลการรับสมัครพนักงาน 2557', 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `wifi`
--

CREATE TABLE IF NOT EXISTS `wifi` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `date` date NOT NULL COMMENT 'ว/ด/ป',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทที่ปฎิบัติ',
  `total` int(11) NOT NULL COMMENT 'จำนวน/ครั้ง',
  `howto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิธีปฏิบัติ',
  `finish` enum('สำเร็จ','ไม่สำเร็จ','รอดำเนินการ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'สำเร็จ' COMMENT 'ผลการปฏิบัติ',
  PRIMARY KEY (`id`),
  KEY `fk_wifi_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `wifi`
--

INSERT INTO `wifi` (`id`, `date`, `department_id`, `type`, `total`, `howto`, `finish`) VALUES
(1, '2014-12-18', 17, 'Hardware', 1, 'ติดตั้ง WIFI ห้องประชุม ER', 'สำเร็จ'),
(2, '2014-12-19', 17, 'Hardware', 1, 'ติดตั้ง WIFI MEETING รหัสผ่าน hosxphosxp', 'สำเร็จ'),
(3, '2014-12-01', 7, 'Hardware', 1, 'ติดตั้ง WIFI DOCTOR รหัส 2954929549', 'สำเร็จ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `computer`
--
ALTER TABLE `computer`
  ADD CONSTRAINT `fk_computer_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `internet`
--
ALTER TABLE `internet`
  ADD CONSTRAINT `fk_internet_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lan`
--
ALTER TABLE `lan`
  ADD CONSTRAINT `fk_lan_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `printer`
--
ALTER TABLE `printer`
  ADD CONSTRAINT `fk_printer_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `fk_program_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `repair`
--
ALTER TABLE `repair`
  ADD CONSTRAINT `fk_repair_department` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `report_etc`
--
ALTER TABLE `report_etc`
  ADD CONSTRAINT `fk_report_etc_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `server`
--
ALTER TABLE `server`
  ADD CONSTRAINT `fk_server_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `switchh`
--
ALTER TABLE `switchh`
  ADD CONSTRAINT `fk_switchh_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ups`
--
ALTER TABLE `ups`
  ADD CONSTRAINT `fk_ups_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `viruss`
--
ALTER TABLE `viruss`
  ADD CONSTRAINT `fk_viruss_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `website`
--
ALTER TABLE `website`
  ADD CONSTRAINT `fk_website_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wifi`
--
ALTER TABLE `wifi`
  ADD CONSTRAINT `fk_wifi_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

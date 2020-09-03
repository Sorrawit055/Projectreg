-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2020 at 07:06 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `top1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `s_id` int(11) NOT NULL,
  `s_gender` varchar(100) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `s_fname` varchar(100) NOT NULL,
  `s_lname` varchar(100) NOT NULL,
  `s_nickname` varchar(100) NOT NULL,
  `s_bday` date NOT NULL,
  `s_facebook` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `s_repassword` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `address4` varchar(100) NOT NULL,
  `address5` varchar(100) NOT NULL,
  `s_generation` varchar(100) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_position` varchar(100) NOT NULL,
  `status` enum('Admin','User') DEFAULT 'User',
  `s_phone` varchar(10) NOT NULL,
  `fileupload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`s_id`, `s_gender`, `s_title`, `s_fname`, `s_lname`, `s_nickname`, `s_bday`, `s_facebook`, `s_email`, `s_password`, `s_repassword`, `address1`, `address2`, `address3`, `address4`, `address5`, `s_generation`, `s_address`, `s_position`, `status`, `s_phone`, `fileupload`) VALUES
(56, 'ชาย', 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', 'เจมส์', '2020-03-12', '่jamesza_jojo@hotmail.com', '614259055@webmail.npru.ac.th', '12345678', '12345678', '48/4 หมู่2', 'นครปฐม', 'เมืองนครปฐม', 'นครปฐม', '73000', '99', 'tgyt', 'น.ศ', 'User', '0863616258', '1584270164-shop03.png'),
(57, 'ชาย', 'นาย', 'ประยุทธ์', 'จันทร์โอชา', 'ตูบ', '2020-02-28', 'Tuza55', '614259020@webmail.npru.ac.th', '12345678', '12345678', '48/4 หมู่2', 'นครปฐม', 'เมืองนครปฐม', 'นครปฐม', '73000', '1', 'สภา', 'นายกรัฐมนตรี', 'User', '0863616258', '1584353595-01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

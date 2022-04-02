-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2022 at 07:14 AM
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
-- Database: `db_maprssu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fullname` varchar(50) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_tel` varchar(10) DEFAULT NULL,
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_fullname`, `admin_email`, `admin_tel`, `admin_username`, `admin_password`) VALUES
(3, 'palm', 'cream3615336153@gmail.com', '0899937635', '3333', '361533');

-- --------------------------------------------------------

--
-- Table structure for table `tb_place`
--

CREATE TABLE `tb_place` (
  `place_id` int(11) NOT NULL,
  `typeplace_id` int(11) NOT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_detail` text,
  `place_pic` varchar(255) DEFAULT NULL,
  `place_gps` varchar(50) DEFAULT NULL,
  `place_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `place_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_place`
--

INSERT INTO `tb_place` (`place_id`, `typeplace_id`, `place_name`, `place_detail`, `place_pic`, `place_gps`, `place_date`, `place_status`) VALUES
(1, 0, '', '5555555555', '19082021105802_p1.png', 'cc@gmail.comm', '2021-08-19 10:58:02', 0),
(2, 1, 'cream rabbit1', '555555555555111111111', '', 'ลากกระบังง11111', '2021-08-19 11:12:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_typeplace`
--

CREATE TABLE `tb_typeplace` (
  `typeplace_id` int(11) NOT NULL,
  `typeplace_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_typeplace`
--

INSERT INTO `tb_typeplace` (`typeplace_id`, `typeplace_name`) VALUES
(1, 'name lastlast'),
(2, '122333');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_tel` varchar(10) DEFAULT NULL,
  `user_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_fullname`, `user_email`, `user_tel`, `user_date`) VALUES
(1, 'name lastlast', 'cream3615336153@gmail.com', '1089993763', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_walk`
--

CREATE TABLE `tb_walk` (
  `walk_id` int(11) NOT NULL,
  `walk_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_walk`
--

INSERT INTO `tb_walk` (`walk_id`, `walk_name`) VALUES
(1, 'name lastlast123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tb_walkplace`
--

CREATE TABLE `tb_walkplace` (
  `walkplace_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `walk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_walkplace`
--

INSERT INTO `tb_walkplace` (`walkplace_id`, `place_id`, `walk_id`) VALUES
(1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_place`
--
ALTER TABLE `tb_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tb_typeplace`
--
ALTER TABLE `tb_typeplace`
  ADD PRIMARY KEY (`typeplace_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_walk`
--
ALTER TABLE `tb_walk`
  ADD PRIMARY KEY (`walk_id`);

--
-- Indexes for table `tb_walkplace`
--
ALTER TABLE `tb_walkplace`
  ADD PRIMARY KEY (`walkplace_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_place`
--
ALTER TABLE `tb_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_typeplace`
--
ALTER TABLE `tb_typeplace`
  MODIFY `typeplace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_walk`
--
ALTER TABLE `tb_walk`
  MODIFY `walk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_walkplace`
--
ALTER TABLE `tb_walkplace`
  MODIFY `walkplace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

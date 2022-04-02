-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2022 at 08:54 AM
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
-- Table structure for table `tb_img`
--

CREATE TABLE `tb_img` (
  `img_id` int(10) NOT NULL,
  `place_id` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_img`
--

INSERT INTO `tb_img` (`img_id`, `place_id`, `img`) VALUES
(1, '1', '1.jpg'),
(2, '2', '2.jpg'),
(3, '3', '3.jpg'),
(4, '4', '4.jpg'),
(5, '5', '5.jpg'),
(6, '6', '6.jpg'),
(7, '7', '7.jpg'),
(8, '8', '8.jpg'),
(9, '9', '9.jpg'),
(22, '3', '3-1.jpg'),
(23, '3', '3-2.jpg'),
(24, '3', '3-3.jpg'),
(25, '3', '3-4.jpg'),
(26, '3', '3-5.jpg'),
(27, '3', '3-6.jpg'),
(28, '3', '3-7.jpg'),
(29, '3', '3-8.jpg'),
(30, '3', '3-9.jpg'),
(31, '3', '3-10.jpg'),
(32, '4', '4-1.jpg'),
(33, '4', '4-2.jpg'),
(34, '9', '9-1.jpg'),
(35, '9', '9-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_place`
--

CREATE TABLE `tb_place` (
  `place_id` int(10) NOT NULL,
  `place_name` varchar(200) NOT NULL,
  `place_detail` text NOT NULL,
  `place_pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place_gps` varchar(100) NOT NULL,
  `place_date` datetime NOT NULL,
  `place_status` int(11) NOT NULL,
  `typeplace_id` int(10) NOT NULL,
  `place_door` int(11) NOT NULL,
  `place_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_place`
--

INSERT INTO `tb_place` (`place_id`, `place_name`, `place_detail`, `place_pic`, `place_gps`, `place_date`, `place_status`, `typeplace_id`, `place_door`, `place_number`) VALUES
(1, 'โบราณสถาน หลุมหลบภัย เนินพระนาง', 'Africa & Asia', '1.jpg', '13.774209859922788,100.50765284450418', '2021-08-10 14:17:23', 30, 1, 1, 1),
(2, 'อนุสาวรีย์ พระองค์เจ้าสุนันทากุมารีรัตน์', 'Central & South America', '2.jpg', '13.774063745999015,100.50785552394655', '2021-08-10 14:17:23', 30, 1, 1, 2),
(3, 'ตำหนักเอื้อนอาชว์แถมถวัลย์', 'Africa & Asia', '3.jpg', '13.777454521762316,100.50936327325287', '2021-08-10 14:14:47', 30, 1, 2, 1),
(4, 'ตำหนักอาทรทิพยนิวาสน์', 'asian', '4.jpg', '13.777638828032812,100.50900117503608', '2021-11-06 07:17:40', 30, 1, 2, 2),
(5, 'ตำหนักสายสุรธานภดล', 'asian', '5.jpg', '13.774987432437294,100.5080179138143', '2021-11-23 09:26:36', 60, 1, 1, 3),
(6, 'ศาลปราสาทสมเด็จพระนางเจ้าสวนสุนันทากุมารีรัตน์', 'asian', '6.jpg', '13.776692280120338,100.50902230906989', '2021-11-23 09:30:00', 60, 1, 1, 4),
(7, 'ตำหนักจุฑารัตนาภรณ์', 'asian', '7.jpg', '13.777626552347858, 100.50877282195094', '2021-11-23 09:33:36', 60, 1, 2, 3),
(8, 'ตำหนักพิสัยพิมลสัตย์', 'asian', '8.jpg', '13.777188708843832,100.50870955657379', '2021-11-23 11:04:34', 150, 1, 2, 4),
(9, 'ตำหนักอาคารศศิพงษ์ประไพ', 'asian ', '9.jpg', '13.77687902249303, 100.5084260145104', '2021-11-23 11:14:21', 150, 1, 2, 5);

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
(2, '122333'),
(5, 'songkhla'),
(7, 'สวนดอกไม้');

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
(2, 'sun'),
(3, 'chollada'),
(4, 'fuji');

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
-- Indexes for table `tb_img`
--
ALTER TABLE `tb_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tb_place`
--
ALTER TABLE `tb_place`
  ADD PRIMARY KEY (`place_id`),
  ADD KEY `typeplace_id` (`typeplace_id`);

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
-- AUTO_INCREMENT for table `tb_img`
--
ALTER TABLE `tb_img`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_place`
--
ALTER TABLE `tb_place`
  MODIFY `place_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_typeplace`
--
ALTER TABLE `tb_typeplace`
  MODIFY `typeplace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_walk`
--
ALTER TABLE `tb_walk`
  MODIFY `walk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_walkplace`
--
ALTER TABLE `tb_walkplace`
  MODIFY `walkplace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_place`
--
ALTER TABLE `tb_place`
  ADD CONSTRAINT `tb_place_ibfk_1` FOREIGN KEY (`typeplace_id`) REFERENCES `tb_typeplace` (`typeplace_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2025 at 11:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_website`
--
CREATE DATABASE IF NOT EXISTS `db_website` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_website`;

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ST_Firstname` varchar(100) NOT NULL,
  `ST_Lastname` varchar(100) NOT NULL,
  `ST_ID` varchar(100) NOT NULL,
  `ST_Phone` varchar(100) NOT NULL,
  `ST_Email` varchar(100) NOT NULL,
  `ST_Image` varchar(100) NOT NULL,
  `dateCreate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info`   
(`id`, `ST_Firstname`, `ST_Lastname`, `ST_ID`, `ST_Phone`, `ST_Email`, `ST_Image`, `dateCreate`) 
VALUES
(1, 'James', 'Kimura', '65123456', '0891234567', 'james@example.com', 'james_photo.png', NOW()),
(2, 'Aya', 'Tanaka', '65123457', '0987654321', 'aya@example.com', 'aya_photo.jpg', NOW()),
(3, 'Ken', 'Yamada', '65123458', '0812345678', 'ken@example.com', 'ken_photo.png', NOW());


--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

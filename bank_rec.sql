-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2022 at 05:11 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_rec`
--

DROP TABLE IF EXISTS `bank_rec`;
CREATE TABLE IF NOT EXISTS `bank_rec` (
  `name` varchar(20) NOT NULL,
  `acc_num` int NOT NULL,
  `bal` int NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`acc_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bank_rec`
--

INSERT INTO `bank_rec` (`name`, `acc_num`, `bal`, `email`) VALUES
('Amargeet', 32001501, 49952, 'amargeet@email.com'),
('Barkha', 32001502, 38396, 'barkha@email.com'),
('Anand', 32001503, 6740987, 'anand@email.com'),
('Bhumika', 32001504, 768391, 'bhumika@email.com'),
('Ambadas', 32001505, 11209, 'ambadas@email.com'),
('Chandana', 32001506, 356000, 'chandana@email.com'),
('Arun', 32001507, 55936, 'arun@email.com'),
('Chandani', 32001508, 8340, 'chandani@email.com'),
('Deepak', 32001509, 980789, 'deepak@email.com'),
('Chandrika', 32001510, 95000, 'chandrika@email.com'),
('Vignesh', 32001511, 35900, 'vignesh@email.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

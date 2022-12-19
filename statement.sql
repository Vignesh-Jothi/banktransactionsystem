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
-- Table structure for table `statement`
--

DROP TABLE IF EXISTS `statement`;
CREATE TABLE IF NOT EXISTS `statement` (
  `from_cust` varchar(20) DEFAULT NULL,
  `to_cust` varchar(20) DEFAULT NULL,
  `amt` int DEFAULT NULL,
  `res` varchar(40) DEFAULT NULL,
  `paydate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`from_cust`, `to_cust`, `amt`, `res`, `paydate`) VALUES
('Vignesh', 'Barkha', 3000, 'Transaction Sucessfully Completed.', '2022-12-17'),
('Anand', 'Ambadas', 2, 'Transaction Sucessfully Completed.', '2022-12-17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

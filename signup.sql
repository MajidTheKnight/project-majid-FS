-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2025 at 06:15 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `Age` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `role` enum('owner','admin','member') COLLATE utf8mb3_persian_ci NOT NULL DEFAULT 'member',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `password`, `Age`, `Email`, `role`) VALUES
(1, 'majid', 'majid1386mm', '17', 'majidgamermc@gmail.com', 'owner'),
(6, 'puria', 'puria1387', '17', 'puriafootball@gmail.com', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

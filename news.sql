-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2025 at 06:00 PM
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
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `newssave`
--

DROP TABLE IF EXISTS `newssave`;
CREATE TABLE IF NOT EXISTS `newssave` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imageurl` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `text` text COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `newssave`
--

INSERT INTO `newssave` (`id`, `imageurl`, `title`, `text`) VALUES
(8, 'images/microsoft1.png', 'microsoft buys minecraft', 'the famouse microsoft company has bought the new arising game called minecraft by developer Markus Alexej Persson, also known as Notch');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

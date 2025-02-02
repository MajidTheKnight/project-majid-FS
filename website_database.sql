-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2025 at 07:55 AM
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
-- Database: `website_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`Name`, `Email`, `Password`) VALUES
('Alex', 'alex@gmail.com', 'alex_big_dick'),
('JohnyBigDick', 'Johnysins@gmail.com', '12inchdick'),
('JohnyBigDick', 'Johnysins@gmail.com', '12inchdick'),
('Bigbig', 'Johnysins@gmail.com', '12inchdick'),
('Bigbig', 'Johnysins@gmail.com', '12inchdick'),
('sexy_black', 'blackmanisangry@gmail.com', 'blackdickis20inch'),
('', '', ''),
('HelloName', 'HelloName@gmail.com', 'hello22'),
('', '', ''),
('Jack', 'Jackss12@gmail.com', 'jack1254'),
('', '', ''),
('MyNword', 'MyNword@gmail.com', 'MyNwordPassword'),
('MR_FANSERVICE', 'FANSERVICE@GMAIL.COM', 'FANSERVICE'),
('SOS', 'SOS@GMAIL.COM', 'SOSPASSWORD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

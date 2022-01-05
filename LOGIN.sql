-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2022 at 12:47 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LOGIN`
--

-- --------------------------------------------------------

--
-- Table structure for table `CREDENTIALS`
--

CREATE TABLE `CREDENTIALS` (
  `EMAIL` varchar(30) DEFAULT NULL,
  `PASSWD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CREDENTIALS`
--

INSERT INTO `CREDENTIALS` (`EMAIL`, `PASSWD`) VALUES
('', ''),
('pranabkca321@gmail.com', 'PRanab'),
('pranabkca321@gmail.com', 'PRanab'),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `LOGIN`
--

INSERT INTO `LOGIN` (`Email`, `Password`) VALUES
('pranabkca312@gamil.com', 'Pranab'),
('pranabkca312@yahoo.com', 'Pranab'),
('pranabkca312@yahoo.com', 'Pranab'),
('realid@gmail.cm', 'POOPREQ'),
('gtavkoid@gmail.cm', 'GTAV');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

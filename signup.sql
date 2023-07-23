-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Nov 01, 2022 at 04:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `package` varchar(100) NOT NULL,
  `trav_mod` varchar(100) NOT NULL,
  `members` int(100) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`package`, `trav_mod`, `members`, `start_date`) VALUES
('Goa', 'air', 3, '2022-10-20'),
('choose', 'choose', 0, '0000-00-00'),
('Andaman', 'air', 3, '2022-10-29'),
('Andaman', 'air', 3, '2022-10-29'),
('Varanasi', 'train', 5, '2022-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `signup_user`
--

CREATE TABLE `signup_user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_user`
--

INSERT INTO `signup_user` (`username`, `email`, `contact`, `password`) VALUES
('karthik', 'Hello@gmail.com', '9790854866', 'Hello@12345678'),
('karthik', 'Hello@gmail.com', '9790854866', 'Hello@12345678'),
('admin', 'admin@gmail.com', '1122334455', 'admin123456'),
('Mohan ram', 'Mohanram@gmail.com', '1122334455', 'Mohan@12345'),
('Prasnna123', 'prasanna@gmail.com', '1122334455', 'Prasanna@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

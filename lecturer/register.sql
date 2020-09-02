-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 12:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `courses` text NOT NULL,
  `subject` text NOT NULL,
  `subject_code` varchar(25) NOT NULL,
  `section` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`courses`, `subject`, `subject_code`, `section`) VALUES
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 3),
('Information Security', 'Web Security', 'BIS21340', 3),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

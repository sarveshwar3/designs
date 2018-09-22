-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2018 at 04:03 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `rollno` varchar(30) NOT NULL,
  `registernumber` varchar(30) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `sub1` varchar(5) NOT NULL,
  `sub2` varchar(5) NOT NULL,
  `sub3` varchar(5) NOT NULL,
  `sub4` varchar(5) NOT NULL,
  `sub5` varchar(5) NOT NULL,
  `sub6` varchar(5) NOT NULL,
  `gpa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`rollno`, `registernumber`, `batch`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `gpa`) VALUES
('2016PITCS001', '211516104001', '2016', 'O', 'A', 'O', 'O', 'O', 'O', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` varchar(10) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `credits` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `subjectname`, `credits`) VALUES
('sub1', 'maths', 4),
('sub2', 'python', 3),
('sub3', 'physics', 3),
('sub4', 'chemistry', 3),
('sub5', 'english', 4),
('sub6', 'graphics', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

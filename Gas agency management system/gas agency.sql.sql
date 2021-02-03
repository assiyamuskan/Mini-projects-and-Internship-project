-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 07:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gas agency`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get customer` (IN `customer2` INT(15))  NO SQL
SELECT * FROM customer2$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(20) COLLATE latin2_bin NOT NULL,
  `location` varchar(20) COLLATE latin2_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`a_id`, `a_name`, `location`) VALUES
(80, 'suma', 'tumkur'),
(100, 'anu', 'tumkur'),
(300, 'nirmala', 'tumkur'),
(400, 'assiya', 'tumkur'),
(444, 'cit', 'gubbi'),
(500, 'ashu', 'pavagada'),
(501, 'suma', 'tumkur'),
(600, 'anu', 'tumkur');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `subsidy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `c_id`, `amount`, `subsidy`) VALUES
(4, 4000, 700, 1000),
(5, 5000, 7001, 1010),
(6, 5000, 7001, 1010);

-- --------------------------------------------------------

--
-- Table structure for table `complaint1`
--

CREATE TABLE `complaint1` (
  `cp_id` int(11) NOT NULL,
  `comment` varchar(15) COLLATE latin2_bin NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;

--
-- Dumping data for table `complaint1`
--

INSERT INTO `complaint1` (`cp_id`, `comment`, `a_id`) VALUES
(222, 'booking problem', 300),
(333, 'booking problem', 400),
(444, 'wrong address w', 500);

-- --------------------------------------------------------

--
-- Table structure for table `customer2`
--

CREATE TABLE `customer2` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) COLLATE latin2_bin NOT NULL,
  `a_id` int(11) NOT NULL,
  `location` varchar(20) COLLATE latin2_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;

--
-- Dumping data for table `customer2`
--

INSERT INTO `customer2` (`c_id`, `c_name`, `a_id`, `location`) VALUES
(123, 'xyz', 444, 'gubbi'),
(4000, 'sudha', 400, 'gubbi'),
(5000, 'hema', 500, 'koppala'),
(6000, 'aishu', 400, 'gubbi');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(20) COLLATE latin2_bin NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`o_id`, `o_name`, `a_id`) VALUES
(40, 'muskan', 400),
(60, 'ashu', 500),
(80, 'ashu', 300),
(676, 'abc', 444);

--
-- Triggers `owner`
--
DELIMITER $$
CREATE TRIGGER `get_owner` AFTER INSERT ON `owner` FOR EACH ROW INSERT INTO ownerback VALUES(new.o_id,new.o_name)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ownerback`
--

CREATE TABLE `ownerback` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(15) COLLATE latin2_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;

--
-- Dumping data for table `ownerback`
--

INSERT INTO `ownerback` (`o_id`, `o_name`) VALUES
(888, 'niru'),
(99, 'ashu'),
(91, 'ashu'),
(92, 'ashu'),
(96, 'ashu'),
(90, 'xyz'),
(91, 'xyz'),
(10, 'ashu'),
(20, 'shiva'),
(30, 'pavani'),
(40, 'muskan'),
(50, 'obala'),
(60, 'shiva'),
(80, 'ashu'),
(60, 'ashu'),
(676, 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `bkfk2` (`c_id`);

--
-- Indexes for table `complaint1`
--
ALTER TABLE `complaint1`
  ADD PRIMARY KEY (`cp_id`),
  ADD KEY `cpfk` (`a_id`);

--
-- Indexes for table `customer2`
--
ALTER TABLE `customer2`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `cfk1` (`a_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `ofk` (`a_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `bkfk2` FOREIGN KEY (`c_id`) REFERENCES `customer2` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaint1`
--
ALTER TABLE `complaint1`
  ADD CONSTRAINT `cpfk` FOREIGN KEY (`a_id`) REFERENCES `agency` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer2`
--
ALTER TABLE `customer2`
  ADD CONSTRAINT `cfk1` FOREIGN KEY (`a_id`) REFERENCES `agency` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `ofk` FOREIGN KEY (`a_id`) REFERENCES `agency` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

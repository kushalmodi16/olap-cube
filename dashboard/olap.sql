-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 05:46 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olap`
--

-- --------------------------------------------------------

--
-- Table structure for table `facttable`
--

DROP TABLE IF EXISTS `facttable`;
CREATE TABLE IF NOT EXISTS `facttable` (
  `location` varchar(15) NOT NULL,
  `time_month` int(15) NOT NULL,
  `time_year` int(15) NOT NULL,
  `product` varchar(15) NOT NULL,
  `unit` int(15) NOT NULL,
  `amount` int(15) NOT NULL,
  KEY `location` (`location`),
  KEY `time_month` (`time_month`),
  KEY `product` (`product`),
  KEY `time_year` (`time_year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facttable`
--

INSERT INTO `facttable` (`location`, `time_month`, `time_year`, `product`, `unit`, `amount`) VALUES
('NY', 7, 2012, 'Laptop', 3, 3360),
('WA', 12, 2013, 'Laptop', 1, 1120),
('QU', 2, 2012, 'Tablet', 3, 1710),
('ON', 4, 2013, 'Printer', 1, 225),
('WA', 1, 2013, 'Tablet', 2, 1140),
('QU', 7, 2013, 'Laptop', 2, 2240),
('ON', 4, 2012, 'Tablet', 3, 1710),
('NY', 1, 2012, 'Printer', 1, 225),
('QU', 3, 2013, 'Printer', 2, 450),
('WA', 5, 2013, 'Printer', 1, 225),
('WA', 7, 2013, 'Printer', 2, 450),
('CA', 6, 2012, 'Tablet', 1, 570),
('QU', 12, 2012, 'Printer', 2, 450),
('QU', 1, 2012, 'Laptop', 1, 1120),
('NY', 1, 2013, 'Tablet', 2, 1140),
('ON', 2, 2012, 'Tablet', 1, 570),
('WA', 1, 2012, 'Printer', 3, 675),
('QU', 12, 2013, 'Tablet', 1, 570),
('WA', 7, 2012, 'Printer', 3, 675),
('ON', 5, 2013, 'Laptop', 3, 3360),
('QU', 12, 2013, 'Laptop', 3, 3360),
('WA', 4, 2012, 'Printer', 3, 675),
('CA', 8, 2012, 'Laptop', 2, 2240),
('NY', 11, 2013, 'Tablet', 2, 1140),
('WA', 8, 2013, 'Printer', 2, 450);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

DROP TABLE IF EXISTS `month`;
CREATE TABLE IF NOT EXISTS `month` (
  `m_key` int(10) NOT NULL,
  `description` varchar(15) NOT NULL,
  `quarter` varchar(10) NOT NULL,
  PRIMARY KEY (`m_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`m_key`, `description`, `quarter`) VALUES
(1, 'Jan', 'Q1'),
(2, 'Feb', 'Q1'),
(3, 'Mar', 'Q1'),
(4, 'Apr', 'Q2'),
(5, 'May', 'Q2'),
(6, 'Jun', 'Q2'),
(7, 'Jul', 'Q3'),
(8, 'Aug', 'Q3'),
(9, 'Sep', 'Q3'),
(10, 'Oct', 'Q4'),
(11, 'Nov', 'Q4'),
(12, 'Dec', 'Q4');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `p_key` varchar(15) NOT NULL,
  `price` int(5) NOT NULL,
  PRIMARY KEY (`p_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_key`, `price`) VALUES
('Laptop', 1120),
('Printer', 225),
('Tablet', 570);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `s_key` varchar(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  PRIMARY KEY (`s_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_key`, `name`, `country`) VALUES
('CA', 'California', 'USA'),
('NY', 'New York', 'USA'),
('ON', 'Ontario ', 'Canada'),
('QU', 'Quebec', 'Canada'),
('WA', 'Washington', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `time_year` int(4) NOT NULL,
  PRIMARY KEY (`time_year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`time_year`) VALUES
(2012),
(2013);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facttable`
--
ALTER TABLE `facttable`
  ADD CONSTRAINT `facttable_ibfk_1` FOREIGN KEY (`location`) REFERENCES `state` (`s_key`),
  ADD CONSTRAINT `facttable_ibfk_2` FOREIGN KEY (`time_month`) REFERENCES `month` (`m_key`),
  ADD CONSTRAINT `facttable_ibfk_3` FOREIGN KEY (`product`) REFERENCES `product` (`p_key`),
  ADD CONSTRAINT `facttable_ibfk_4` FOREIGN KEY (`time_year`) REFERENCES `year` (`time_year`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

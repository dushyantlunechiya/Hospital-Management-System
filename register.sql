-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 02:07 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytask`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `adhar` bigint(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gndr` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `no` bigint(10) NOT NULL,
  `pcode` int(3) NOT NULL,
  `adrs` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`adhar`, `name`, `gndr`, `dob`, `email`, `no`, `pcode`, `adrs`, `state`, `zip`) VALUES
(23, 'akshat', 'm', '0000-00-00', 'gggg@gmail.com', 9100099988, 91, 'hggfgfhgf', 'Maharashtra', 400018),
(123321, 'akshat', 'm', '2018-06-26', 'a@g.c', 12345678901, 16, 'sdfsf', 'Maharashtra', 0),
(625372, 'dhHSD', 'Femal', '2018-06-06', 'SDds@ga.c', 12345678901, 22, 'dsdS', 'Gujarat', 0),
(23112122, 'jjjj', 'm', '0000-00-00', 'gggg@gmail.com', 9100099988, 91, 'hggfgfhgf', 'Maharashtra', 400018),
(2315455412122, 'jjjj', 'm', '0000-00-00', 'gggg@gmail.com', 9100099988, 91, 'hggfgfhgf', 'Maharashtra', 400018),
(2435342642656, 'dekdey', 'Male', '2018-06-22', 'SDds@ga.c', 12345678901, 91, 'lkfjldskfsdkvvksdnvvv,ms msdvbdskvb dsj', 'Gujarat', 400018),
(2139812039820398, 'knkkk', 'o', '2018-06-30', 'a@g.c', 12345678901, 19, 'wdkasjndksandk', 'Bihar', 0),
(123213123213213123, 'dekdey', 'f', '2018-06-16', 'a@g.c', 12345678901, 22, 'efwefewfw', 'Andhra Pradesh', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `adhar` (`adhar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

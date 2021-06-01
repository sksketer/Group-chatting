-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 02:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live chatting`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sno` int(250) NOT NULL,
  `username` varchar(32) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sno`, `username`, `message`) VALUES
(1, 'sketer', 'Hello, How are you Guys. kiya hal ha'),
(35, 'munda', 'i '),
(36, 'munda', 'am'),
(43, 'sketer', 'This message is deleted.');

-- --------------------------------------------------------

--
-- Table structure for table `userlogins`
--

CREATE TABLE `userlogins` (
  `sno` int(11) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogins`
--

INSERT INTO `userlogins` (`sno`, `ID`, `username`, `email`, `password`, `status`) VALUES
(1, 'LC_sk00000', 'sketer', 'ksamrit121@gmail.com', '7b0bfee9ff0dc93fd7be9472f36c7eaa', 'Inactive'),
(2, 'LC_mun0000', 'munda', 'amit.munda_cs18@gla.ac.in', 'baded928d477a27e85961ca625bb030c', 'Inactive'),
(3, 'LC_kus0000', 'kushagra', 'kushagra.gangwar_cs18@gla.ac.in', '8c9f6ce40e5aa2b423bf216eb4c2b3ae', 'Inactive'),
(4, 'LC_pra0000', 'pranjal', 'pranjal.kela_cs18@gla.ac.in', 'be033f5f7d2fd6a3d1a8fc65f19d7f37', 'Inactive'),
(5, 'LC_sks0000', 'sksketer', 'sketergaming2121@gmail.com', 'cae79a29dd42ccc6e1e5c7269305b87c', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userlogins`
--
ALTER TABLE `userlogins`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `sno` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `userlogins`
--
ALTER TABLE `userlogins`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

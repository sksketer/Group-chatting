-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 04:16 AM
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
(1, 'sketer', 'Hello, How are you Guys.'),
(2, 'munda', 'hello, I am fine'),
(3, 'sketer', 'hello munda'),
(4, 'munda', 'hello sketer'),
(5, 'sketer', 'kiya hall'),
(6, 'munda', 'sab mast ha'),
(7, 'sketer', 'hello munda again'),
(8, 'munda', 'hello amrit'),
(9, 'sketer', '5d41402abc4b2a76b9719d911017c592'),
(10, 'sketer', 'hello'),
(11, 'munda', 'hello'),
(12, 'sketer', 'fft'),
(13, 'munda', 'group'),
(14, 'sketer', 'er'),
(15, 'sketer', 'hello unda'),
(16, 'sketer', 'hello munda');

-- --------------------------------------------------------

--
-- Table structure for table `userlogins`
--

CREATE TABLE `userlogins` (
  `sno` int(11) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogins`
--

INSERT INTO `userlogins` (`sno`, `ID`, `username`, `email`, `password`) VALUES
(1, 'LC00000001', 'sketer', 'ksamrit121@gmail.com', '7b0bfee9ff0dc93fd7be9472f36c7eaa'),
(2, 'LC00000002', 'munda', 'amit.munda_cs18@gla.ac.in', 'baded928d477a27e85961ca625bb030c');

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
  MODIFY `sno` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userlogins`
--
ALTER TABLE `userlogins`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

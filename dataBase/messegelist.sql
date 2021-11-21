-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 10:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messegelist`
--

CREATE TABLE `messegelist` (
  `messegeId` int(11) NOT NULL,
  `sendedMessegeId` int(11) NOT NULL,
  `receivedMessegeId` int(11) NOT NULL,
  `messege` varchar(2000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messegelist`
--

INSERT INTO `messegelist` (`messegeId`, `sendedMessegeId`, `receivedMessegeId`, `messege`, `date`) VALUES
(1, 902513775, 501593198, 'hi Rohan', '2021-11-20 16:04:03'),
(2, 501593198, 902513775, 'hello vishal', '2021-11-20 16:04:14'),
(3, 501593198, 902513775, 'how are you', '2021-11-20 16:04:18'),
(4, 902513775, 501593198, 'i am fine', '2021-11-20 16:04:26'),
(5, 902513775, 332242595, 'hello tushar', '2021-11-21 03:05:23'),
(6, 501593198, 332242595, 'hello', '2021-11-21 04:41:44'),
(7, 332242595, 501593198, 'hi', '2021-11-21 04:42:56'),
(8, 501593198, 902513775, 'Hello', '2021-11-21 08:24:24'),
(9, 501593198, 902513775, 'hi', '2021-11-21 08:51:40'),
(10, 902513775, 501593198, 'hi', '2021-11-21 08:52:33'),
(11, 902513775, 501593198, 'hello', '2021-11-21 08:56:34'),
(12, 902513775, 501593198, 'how are you', '2021-11-21 08:56:41'),
(13, 501593198, 332242595, 'hello', '2021-11-21 09:12:36'),
(14, 501593198, 332242595, 'rohan', '2021-11-21 09:12:45'),
(15, 501593198, 332242595, 'how are you', '2021-11-21 09:18:02'),
(16, 501593198, 332242595, 'hell', '2021-11-21 09:18:59'),
(17, 501593198, 332242595, 'hellow', '2021-11-21 09:30:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messegelist`
--
ALTER TABLE `messegelist`
  ADD PRIMARY KEY (`messegeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messegelist`
--
ALTER TABLE `messegelist`
  MODIFY `messegeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 08:20 AM
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
-- Database: `thitima`
--

-- --------------------------------------------------------

--
-- Table structure for table `thitima`
--

CREATE TABLE `thitima` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `Email` varchar(500) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` int(10) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thitima`
--

INSERT INTO `thitima` (`id`, `name`, `date`, `Email`, `user`, `pass`, `amount`) VALUES
(1, 'สมหญิง ใจดี', '2022-12-02', 'somying@gmail.com', 'somying', 123456, 1),
(2, 'สมหญิง ใจดี', '2022-12-17', 'somying@gmail.com', '66', 66, 0),
(3, 'thtitima111', '2022-12-17', 'somying@gmail.com', 'somying', 123, 0),
(4, 'เฟื่องลัดดา', '2022-12-10', 'som_yiong@gmail.com', 'noon3', 333, 333),
(5, 'F,', '2022-12-10', 'som_yiong@gmail.com', '12', 12, 1500),
(6, '11', '0001-11-11', 'facemo_123@hotmail.com', '1', 1, -150),
(7, 'เฟื่องลัดดา', '2022-12-17', 'som_yiong@gmail.com', 'som_yiong', 111, 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thitima`
--
ALTER TABLE `thitima`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thitima`
--
ALTER TABLE `thitima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

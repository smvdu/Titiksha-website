-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 09:18 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madantitiksha`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `university` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `fname`, `lname`, `email`, `branch`, `university`) VALUES
(1, 'amit', 'yadav', 'amit@gmail.com', '', 'shri mata'),
(2, 'sumit', 'yada', 'sumit@gmail.com', '', 'shri mata vaishno'),
(3, 'madan', 'kdfjdsk', 'makdjk@gmail.com', 'cse', 'kdjfd kjfdk f dk'),
(4, 'kfjdkfd', 'fdklfdj', 'jkhdhiurhe@gmail.com', 'mche', 'skjfk kfjkd ffjekje'),
(5, 'anoop', 'singh', '14nvdkfjd008@gmail.com', 'computer science', 'shri mata vasdkjd d4e dkf euei'),
(7, 'dffjkd', 'dfdfdo', 'kdfjioee@gmail.com', 'kdjfd dkjf', 'kdfj fkjdk fdfjd'),
(9, 'dhjfhd', 'kdf', 'fkjd@gmail.com', 'dkfj kdjf', 'kfjdk fkjd d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 03:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worker`
--

-- --------------------------------------------------------

--
-- Table structure for table `worktb`
--

CREATE TABLE `worktb` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass1` varchar(50) NOT NULL,
  `pass2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worktb`
--

INSERT INTO `worktb` (`id`, `fname`, `lname`, `uname`, `email`, `pass1`, `pass2`) VALUES
(1, 'kato', 'daniel', 'dan', 'dan@gmail.com', '1234', '123'),
(2, 'kato', 'daniel', 'dan', 'dani@gmail.com', '123', '1234'),
(3, 'kato ', 'daniel', 'dany', 'dany@gmail.com', '123', '1234'),
(4, 'kato', 'dany', 'dern', 'dern@gmail.com', '123', '1234'),
(5, 'kato', 'dan', 'kats', 'kats@gmail.com', '123', '1234'),
(6, 'semtamu', 'erisa', 'risha', 'risha@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `worktb`
--
ALTER TABLE `worktb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `worktb`
--
ALTER TABLE `worktb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

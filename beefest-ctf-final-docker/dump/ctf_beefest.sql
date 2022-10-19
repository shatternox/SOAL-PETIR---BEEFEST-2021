-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 03:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctf_beefest`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakeflag`
--

CREATE TABLE `fakeflag` (
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakeflag`
--

INSERT INTO `fakeflag` (`flag`) VALUES
('BeeFest{y4h_1n1_f4k3_fl4g_3h3h3h33333}\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `quotes_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `quotes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quotes_id`, `author`, `quotes`) VALUES
(1, 'Albert Einstein', 'Imagination is more important than knowledge. \r\n'),
(2, 'Karl Marx', 'From each according to his abilities, to each according to his needs.'),
(3, 'Ralph Waldo Emerson', 'A foolish consistency is the hobgoblin of little minds, adored by little statesmen and philosophers and divines.'),
(4, 'Phytagoras', 'As soon as laws are necessary for men, they are no longer fit for freedom.'),
(5, 'Aristotle', 'A friend to all is a friend to none.'),
(6, 'Vladimir Lenin', 'A lie told often enough becomes the truth.'),
(7, 'Thomas Alva Edison', 'I have not failed. I\'ve just found 10,000 ways that won\'t work.'),
(8, 'Plato', 'Love is a serious mental disease.'),
(9, 'Herodotus', 'In peace, sons bury their fathers. In war, fathers bury their sons.'),
(10, 'Alexander the Great', 'There is nothing impossible to him who will try.');

-- --------------------------------------------------------

--
-- Table structure for table `theflag_4353634859234`
--

CREATE TABLE `theflag_4353634859234` (
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theflag_4353634859234`
--

INSERT INTO `theflag_4353634859234` (`flag`) VALUES
('BeeFest{sql1_1s_sc4ry_964612315132}');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'kocheng', 'kocheng123'),
(2, 'admin', 'beefest__galah51235123'),
(3, 'tommylim', '435435tommylimosin1232');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`quotes_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `quotes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

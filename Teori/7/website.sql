-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2021 at 08:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(5) NOT NULL,
  `posted` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `address` varchar(75) NOT NULL,
  `city` varchar(75) NOT NULL,
  `message` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `posted`, `name`, `email`, `address`, `city`, `message`) VALUES
(1, '2021-04-11', 'name', 'email@gmail.com', 'address', 'city', 0x626c6f62),
(4, '2021-04-11', 'name1', 'email1', 'address1', 'city1', 0x6d65737361676531),
(5, '2021-04-11', 'name2', 'email2', 'address2', 'city2', 0x6d65737361676532),
(6, '2021-04-11', 'name3', 'email3', 'address3', 'city3', 0x6d65737361676533),
(7, '2021-04-11', 'name4', 'email4', 'address4', 'city4', 0x6d65737361676534),
(8, '2021-04-11', 'name5', 'email5', 'address5', 'city5', 0x6d65737361676535),
(9, '2021-04-11', 'name6', 'email6', 'address6', 'city6', 0x6d65737361676536),
(10, '2021-04-11', 'name6', 'email6', 'address6', 'city6', 0x6d65737361676536),
(11, '2021-04-11', 'name7', 'email7', 'address7', 'city7', 0x6d65737361676537),
(12, '2021-04-11', 'name8', 'email8', 'address8', 'city8', 0x6d65737361676538),
(13, '2021-04-11', 'name9', 'email9', 'address9', 'city9', 0x6d65737361676539),
(14, '2021-04-11', 'name10', 'email10', 'address10', 'city10', 0x6d6573736167653130);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `username`, `password`) VALUES
(1, '18650045', '12345678'),
(2, 'A18650045', '12345678'),
(3, 'B18650045', '12345678'),
(4, 'C18650045', '12345678'),
(5, 'D18650045', '12345678'),
(6, 'E18650045', '12345678'),
(7, 'F18650045', '12345678'),
(8, 'G18650045', '12345678'),
(9, 'H18650045', '12345678'),
(10, 'I18650045', '12345678'),
(11, 'J18650045', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `homepage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

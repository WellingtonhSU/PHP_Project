-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2016 at 09:06 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `line` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `facebook`, `line`, `tag`) VALUES
('user1', 'test', '0938239282', 'test@test.com', 'TestABC', 'test123', ''),
('user2', 'tester', '0937264918', 'test@test.com', 'TestABCD', 'TestABCD', ''),
('user3', 'Testy', '0938271923', 'test@test.com', 'TestABC', 'testABC', ''),
('user4', 'testq', '123456', 'test', '1234', '1241', '2342'),
('user5', 'apple', '0908123456', 'test@test.com', 'appleFacebook', 'appleLine', 'none'),
('user6', 'apple', '0908123456', 'test@test.com', 'appleFacebook', 'appleLine', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `mylist`
--

CREATE TABLE `mylist` (
  `listID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `contactID` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mylist`
--

INSERT INTO `mylist` (`listID`, `userID`, `contactID`) VALUES
(1, 1, 'user1'),
(2, 1, 'user2'),
(3, 3, 'user3'),
(7, 3, 'user1'),
(8, 3, 'user5'),
(9, 3, 'user6'),
(10, 5, 'user2'),
(11, 5, 'user3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `pri` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `connect_id` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`pri`, `username`, `password`, `connect_id`) VALUES
(1, 'test', '12345', ''),
(3, 'pecu', '12345', ''),
(5, 'admin123', '12345', ''),
(6, 'admin123', '12345', ''),
(7, '', '', ''),
(8, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mylist`
--
ALTER TABLE `mylist`
  ADD PRIMARY KEY (`listID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mylist`
--
ALTER TABLE `mylist`
  MODIFY `listID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `pri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

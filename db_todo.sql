-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 01:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `pass`) VALUES
('Group_7', '12345'),
('Group_7', '12345'),
('admin', '12345'),
('admin', '12345'),
('admin', 'Admin@1'),
('admin', 'Admin@1');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `checked` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` varchar(50) NOT NULL,
  `deadline` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `date_time`, `checked`, `date_created`, `deadline`) VALUES
(36, 'My first note', '2022-05-07 12:29:05', 1, '1', '1652637600'),
(37, '©Group7-GPJ', '2022-05-07 12:29:37', 0, '1', '1652637600'),
(38, 'Buy a pen', '2022-05-07 12:29:43', 0, '1', '1652637600'),
(39, 'Complete PHP manual now deadline - 8May', '2022-05-07 12:30:16', 1, '1', '1652637600'),
(44, 'Presentation of WMN', '2022-05-07 15:25:57', 1, '1', '1652637600'),
(49, 'Give this project just for free as a donation to prathmesh\'s group', '2022-05-10 19:06:26', 0, '1', '1652637600'),
(57, 'Android Submission', '2022-05-15 14:46:22', 0, '1652606182', '1652738400'),
(59, 'WMN Submission', '2022-05-15 15:55:07', 1, '1652610307', '1651874400'),
(60, 'new note', '2022-05-15 16:52:30', 0, '1652613750', '1652652000'),
(61, 'Session Exams', '2022-05-15 16:59:25', 0, '1652614165', '1653429600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

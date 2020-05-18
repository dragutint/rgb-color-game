-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 01:17 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgb-game`
--

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

CREATE TABLE `scoreboard` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`id`, `name`, `score`, `datetime`, `level`) VALUES
(1, 'Milica', 62, '2020-05-18 10:11:41', 0),
(2, 'Nikola', 82, '2020-05-18 10:19:24', 0),
(3, 'Ivan', 88, '2020-05-18 10:19:38', 1),
(4, 'ivan', 69, '2020-05-18 10:37:31', 0),
(5, 'asd', -49, '2020-05-18 10:47:10', 0),
(6, 'asf', 54, '2020-05-18 10:47:35', 0),
(7, 'asfasgas', -36, '2020-05-18 10:51:31', 0),
(8, 'asdasd', 74, '2020-05-18 10:55:02', 0),
(9, 'asd', 63, '2020-05-18 10:58:18', 0),
(10, 'asd', 29, '2020-05-18 11:09:26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scoreboard`
--
ALTER TABLE `scoreboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scoreboard`
--
ALTER TABLE `scoreboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

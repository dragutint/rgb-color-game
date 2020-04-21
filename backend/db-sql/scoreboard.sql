-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 07:23 PM
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
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`id`, `name`, `score`, `datetime`) VALUES
(1, 'IVICA', 82, '2020-04-21 16:49:39'),
(2, 'IVICA', 44, '2020-04-21 16:56:22'),
(3, 'IVICA i marica', 63, '2020-04-21 17:13:34'),
(4, 'IVICA i marica', 69, '2020-04-21 17:16:34'),
(5, 'IVAN ', 66, '2020-04-21 17:19:14'),
(6, 'IVAN ', 61, '2020-04-21 17:20:54');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

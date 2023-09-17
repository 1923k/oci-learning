-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 10:17 PM
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
-- Database: `oracle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `names` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `title`, `names`, `type`, `date`, `email`, `message`) VALUES
(41, 'OCI Intro', '', '', '2023-09-14 10:37:45', 'admin@post', 'OCI Overview'),
(43, 'OCI Networking', '', '', '2023-09-14 10:39:12', 'admin@post', 'OCI Networking Details\r\n                    '),
(44, 'OCI Storage', '', '', '2023-09-14 10:58:05', 'admin@post', 'OCI storage details\r\n                    '),
(45, 'OCI Databases', '', '', '2023-09-14 12:04:41', 'admin@post', 'Details of OCI databases\r\n                    ');

-- --------------------------------------------------------

--
-- Table structure for table `respond_message`
--

CREATE TABLE `respond_message` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `respond_message`
--

INSERT INTO `respond_message` (`id`, `email`, `message`, `date`) VALUES
(2, 'ma@gmail.com', 'Hey thank you for content \n                            ', '2023-09-16 18:32:48'),
(5, 'ma@gmail.com', 'Please read further', '2023-09-16 18:33:25'),
(6, 'ma@gmail.com', 'Work harder           \n                            ', '2023-09-16 18:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contacts` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `user_type`, `email`, `contacts`, `country`, `address`, `password`, `datecreated`, `status`) VALUES
(41, 'Kefuoe Sole', 'Admin', 'so@gmail.com', '23344444', 'Lesotho', 'Berea', '12345', '2023-01-23 21:40:55', 0),
(42, 'Lebohang Mafi', 'Member', 'ma@gmail.com', '4555', 'Lesotho', '36388', '12345', '2023-01-23 21:38:42', 0),
(43, 'Lereko Lereko', 'Member', 'ler@gmail.com', '3455', 'Lesotho', 'Maseru', '12345', '2023-01-23 21:40:47', 0),
(44, 'Puseletso Mafi', 'Member', 'pu@gmail.com', '56784444', 'Lesotho', 'Mokhotlong', '12345', '2023-01-23 21:40:57', 0),
(45, 'Thabo Thabang', 'Member', 'tb@gmail.com', '345555', 'Botswana', 'Gaborone', '12345', '2023-01-23 21:40:58', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respond_message`
--
ALTER TABLE `respond_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `respond_message`
--
ALTER TABLE `respond_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

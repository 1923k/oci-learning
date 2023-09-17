-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 10:43 PM
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(110, 2, 'Student Results Management System', 10000, 1, 'icons8-code-folder-48.png'),
(111, 2, 'Networking Installation System', 10000, 1, 'icons8-computer-networks-48.png'),
(112, 2, 'Thread Tracking Robot', 24000, 1, 'icons8-satellites-48.png'),
(113, 2, 'Ubuntu Os', 120, 2, 'icons8-ubuntu-48.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(10, 2, 'Neo Masiu', 'ma@gmail.com', '123456', 'I am very grateful with your warm services.'),
(11, 2, 'Neo Masiu', 'ma@gmail.com', '123456', 'I am not happy at all'),
(12, 0, 'MS Office 2010', 'msoffice@gmail.com', '23465', 'Trying'),
(13, 0, 'Windows 10', 'wind@gmail.com', '22345', 'Windows'),
(14, 0, 'Linux Redhat Os', 'red@gmail.com', '23456', 'Linux Red Hat'),
(15, 2, 'Neo Masiu', 'ma@gmail.com', '12345', 'Good Services'),
(16, 2, 'Neo Masiu', 'ma@gmail.com', '76885', 'Todays session was very good');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(20, 2, 'Neo Masiu', '1111', 'so@gmail.com', 'Cash on delivery', '36388', ' Networking Installation System (4) ', 40000, '22-Nov-2022', 'completed'),
(23, 2, 'Neo Masiu', '123456', 'ma@gmail.com', 'Cash on delivery', '36388', ',Java Eclipse (1) ,MS Office 2016 (6) ,MS Office 2019 (1) ', 760, '22-Nov-2022', 'completed'),
(24, 2, 'Neo Masiu', '2', 'so@gmail.com', 'Cash on delivery', '36388', ',Agriculture Management System (1) ', 13000, '22-Nov-2022', 'completed'),
(28, 2, 'Kefuoe Sole', '1234', 'so@gmail.com', 'Cash on delivery', 'Berea', ',Student Attendent System (1) ', 5400, '22-Nov-2022', 'completed'),
(29, 2, 'Neo Masiu', '3456', 'ma@gmail.com', 'Cash on delivery', '36388', ',MS Office 2019 (4) ', 400, '23-Nov-2022', 'completed'),
(30, 2, 'Neo Masiu', '234', 'ma@gmail.com', 'Cash on delivery', '36388', ',MS Office 2010 (1) ', 80, '23-Nov-2022', 'pending'),
(31, 2, 'Neo Masiu', '45678', 'ma@gmail.com', 'Cash on delivery', '36388', ',Saloon Management Project (2) ,Student Attendent System (1) ,Cloud Management System (1) ,Networking Installation System (1) ', 50300, '27-Nov-2022', 'pending'),
(32, 2, 'Neo Masiu', '45678', 'ma@gmail.com', 'Cash on delivery', '36388', ',Saloon Management Project (2) ', 16000, '27-Nov-2022', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `type`, `image`) VALUES
(130, 'Windows 10', 100, 'OS', 'icons8-windows-11-48.png'),
(131, 'Windows 11', 120, 'OS', 'icons8-windows-11-48.png'),
(133, 'Ubuntu Os', 200, 'OS', 'icons8-ubuntu-48.png'),
(134, 'Linux Redhat Os', 100, 'OS', 'icons8-red-hat-48.png'),
(135, 'MS Office 2010', 80, 'MS', '1.png'),
(136, 'MS Office 2013', 855, 'MS', '1.png'),
(137, 'MS Office 2016', 100, 'MS', '1.png'),
(139, 'MS Office 2021', 130, 'MS', '1.png'),
(140, 'Chrome', 50, 'Other Software', 'icons8-chrome-48.png'),
(141, 'Microsoft Edge', 50, 'Other Software', 'icons8-microsoft-edge-48.png'),
(142, 'Zoom PCddd', 60, 'Other Software', 'icons8-zoom-48.png'),
(171, 'Cent Os', 20000, 'OS', 'icons8-lesotho-20.png'),
(172, 'Office 2025', 450, 'MS', 'icons8-lesotho-20.png'),
(173, 'Robot Software', 567, 'Other Software', 'icons8-lesotho-20.png'),
(174, 'RAM 4GB', 200, 'Hardware', 'icons8-lesotho-20.png');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

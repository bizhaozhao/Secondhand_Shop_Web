-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2022 at 11:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `goodstable`
--

CREATE TABLE `goodstable` (
  `brand` varchar(32) NOT NULL,
  `material` varchar(32) NOT NULL,
  `size` varchar(16) NOT NULL,
  `price` double(16,2) NOT NULL,
  `imagesrc` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goodstable`
--

INSERT INTO `goodstable` (`brand`, `material`, `size`, `price`, `imagesrc`) VALUES
('AMI', 'Cotton', 'L', 49.99, 'images/good-img-1.jpg'),
('Pur', 'feather', 'M', 249.49, 'images/good-img-2.jpg'),
('Star', 'acrylic', 'XL', 29.99, 'images/good-img-3.jpg'),
('Chanel', 'Leather', 's', 1200.00, 'images/good-img-4.jpg'),
('Ball', 'Woolen', 'M', 37.49, 'images/good-img-5.jpg'),
('Smile', 'Woolen', 'XXL', 39.49, 'images/good-img-6.jpg'),
('Gri', 'Woolen', 'S', 239.49, 'images/good-img-7.jpg'),
('Huffer', 'Jean', '14', 19.49, 'images/good-img-8.jpg'),
('Coolwo', 'Woolen & Leather', 'XL', 539.49, 'images/good-img-9.jpg'),
('Pinng', 'Cotton', '18', 379.49, 'images/good-img-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`username`, `password`, `email`) VALUES
('Irah', '123', 'bzz830@gmail.co'),
('Kenny', '1234', 'kenny@gmail.com'),
('Luna', '12345', 'Luna@gmail.com'),
('Sarah', '123', 'Sarah@Gmail.com'),
('Selina', '123', 'Selina@126.com'),
('Shawn', '123', 'shawn@qq.com'),
('Tina', '456', 'Tina@gmail.com'),
('Wangli', '123', 'wangli@qq.com'),
('Wendy', '678', 'bzz8530@gmail.com'),
('yoyo', '123', 'yoyo@gg.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

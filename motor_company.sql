-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 09:19 AM
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
-- Database: `motor_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `first_name`, `last_name`, `email`, `phone`, `subject`, `reg_date`) VALUES
(1, 'waweru', 'samuel', 'sam@gmail.com', '99999', 'prado', '2021-08-05 15:10:47'),
(2, 'samuel', 'waweru', 'samuelnderitu@gmail.com', '5555', 'filder', '2021-08-06 15:09:46'),
(3, 'samuel', 'tech', 'samuelnderitu495@gmail.com', '0741515192', 'prado', '2022-05-25 10:39:45'),
(4, 'samuel', 'tech', 'samuelnderitu495@gmail.com', '0741515192', 'prado', '2022-05-25 18:47:00'),
(5, 'samuel', 'tech', 'samuelnderitu495@gmail.com', '0741515192', 'prado', '2022-05-25 18:47:43'),
(6, 'samuel', 'tech', 'samuelnderitu495@gmail.com', '0741515192', 'rav 4', '2022-05-30 05:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `date`) VALUES
(1, 'pppppp', '2022-05-23'),
(2, 'pppppp', '2022-05-26'),
(3, 'pppppp', '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `carbooking`
--

CREATE TABLE `carbooking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carbooking`
--

INSERT INTO `carbooking` (`id`, `name`, `vehicle`, `from_date`, `to_date`, `message`, `status`, `timestamp`) VALUES
(1, 'sami waweru', 'rush', '2022-06-01', '2022-05-31', 'uuuuuuuuuuuuuuuuuuuu', 'correct', '2022-05-25 18:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `return_date` date NOT NULL,
  `action` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `vehicle`, `customer_name`, `booking_date`, `return_date`, `action`, `time_stamp`) VALUES
(1, 'rush', 'waweru', '2022-05-04', '2022-05-31', 'ffffff', '2022-05-25 18:17:57'),
(2, 'rush', 'waweru', '2022-05-10', '2022-05-25', 'ffffff', '2022-05-30 06:05:35'),
(3, 'rush', 'waweru', '2022-05-24', '2022-05-17', 'ffffff', '2022-05-30 06:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `card_number` int(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `first_name`, `last_name`, `email`, `phone`, `card_number`, `amount`, `reg_date`) VALUES
(1, 'waweru', 'samuel', 'sam@gmail.com', '77777', 77777, '77777', '2021-08-05 15:14:55'),
(2, 'samuel', 'waweru', 'samuelnderitu@gmail.com', '7777', 66767, '900000', '2021-08-06 15:10:20'),
(3, 'samuel', 'tech', 'samuelnderitu495@gmail.com', '0741515192', 99000, '9000', '2022-05-25 10:40:02'),
(4, 'samuel', 'tech', 'samuelnderitu495@gmail.com', '0741515192', 99000, '9000', '2022-05-25 18:47:34'),
(5, 'samuel', 'tech', 'samuelnderitu495@gmail.com', '0741515192', 99000, '9000', '2022-05-25 18:47:53'),
(6, 'samuel', 'tech', 'samuelnderitu495@gmail.com', '0741515192', 99000, '9000', '2022-05-30 05:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `reg_date`) VALUES
(1, 'samuel', 'sam@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-08-05 15:27:16'),
(2, 'Samul', 'waweru@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-08-05 15:40:59'),
(3, 'samuel', 'sam@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-08-05 15:41:55'),
(4, 'samuel', 'samuelnderitu495@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-08-05 15:42:47'),
(5, 'samuel', 'samuelnderitu495@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-08-05 15:51:30'),
(6, 'samuel', 'waweru@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-08-05 16:03:40'),
(7, 'samuel', 'samuelnderitu495@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-09-26 20:35:02'),
(8, 'samuel', 'magundaturnitin1@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-25 10:39:13'),
(9, 'admin', 'samuelnderitu495@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-25 10:40:39'),
(10, 'admin', 'samuelnderitu495@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-25 12:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `model_year` varchar(255) NOT NULL,
  `time_stamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `title`, `brand`, `price`, `image`, `fuel`, `model_year`, `time_stamp`) VALUES
(1, 'toyota', 'toyota', '500', 'images (9).jpg', 'disel', '2009', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carbooking`
--
ALTER TABLE `carbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

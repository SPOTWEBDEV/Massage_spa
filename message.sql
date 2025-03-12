-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 11:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `services` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pricing_id` int(11) NOT NULL,
  `close_place` varchar(255) NOT NULL,
  `status` enum('pending','completed','declined') NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `appointment_date` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user`, `state`, `address`, `pricing_id`, `close_place`, `status`, `created_at`, `appointment_date`, `amount`, `title`) VALUES
(1, 3, 'enugu', 'mtd gariki', 0, 'kkk', 'pending', '2025-03-09 09:54:39.000000', '2025-03-10', '400', 'Basic Baber');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'repented godswill', 'spotwebdev.com@gmail.com', '07080879957', '', 'i love your group'),
(3, 'thebest firstclass', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'qwertyuiopzxcvbn'),
(4, 'thebest firstclass', 'thebest@gmail.com', '07080879957', '23456789', 'sdfgyhjk'),
(5, 'thebest firstclass', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'wsdfghjkl'),
(6, 'Footwear', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'ertyuiop[poiuyt'),
(7, 'Footwear', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'ertyuiop[poiuyt'),
(8, 'Footwear', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'ertyuiop[poiuyt'),
(9, 'Footwear', 'spotwebdev.com@gmail.com', '3456789', '23456789', 'dfghjkl;'),
(10, 'Footwear', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'sdfghjkl'),
(11, 'Big sweater', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'xfghjkkjhdfghj'),
(12, 'thebest firstclass', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'sdfghjkllgrfergh'),
(13, 'thebest firstclass', 'spotwebdev.com@gmail.com', '3456789', '23456789', 'sdfghjk'),
(14, 'Footwear', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'sdfghjfdsdfg'),
(15, 'thebest firstclass', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'sdvnmvcxcv'),
(16, 'thebest firstclass', 'spotwebdev.com@gmail.com', '07080879957', '23456789', 'sdfghjked');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `write_up` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `write_up`, `date`, `venue`, `image`) VALUES
(5, 'Education empowerment', 'Our mission is to provide quality education to underserved communities, empowering individuals to break the cycle of poverty and achieve their full potential.', '2024-12-09', 'gariki', 'IMG-20241114-WA0105.jpg'),
(6, 'valinetina', 'nvnfnnnnnnnnnnnn', '2025-02-14', 'garriki', '1739185817_resume_craft.png');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `subscribed_at`) VALUES
(1, 'giftchinenyenwa1@gmail.com', '2025-02-13 07:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_plans`
--

CREATE TABLE `pricing_plans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `features` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_plans`
--

INSERT INTO `pricing_plans` (`id`, `title`, `price`, `features`) VALUES
(1, 'Basic Baber', '400', 'pen cutting ,  workdone');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone`, `password`) VALUES
(1, 'micheal', 'spotwebdev.com@gmail.com', '', '$2y$10$y.qJLiYwzHWQCwTcAvb7juMorpKJfkmG01d.hrrzky8qMIs..a5/q'),
(2, 'chizzy', 'giftchinenyenwa1@gmail.com', '', '$2y$10$TuHDZ.VD6AZNJPKlO3cROeVn2rWdPa06FO7qw/OCOTwXLXZdVppFC'),
(3, 'firstclass', 'spotwebdev.com@gmail.com', '', '50c2c77489e2112e9a973e1f3d44e9f8'),
(4, 'repentedkeyz', 'spotwebdev.com@gmail.com', '', 'c24481167c6695923be1511247ed3c08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

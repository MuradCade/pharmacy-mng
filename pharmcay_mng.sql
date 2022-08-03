-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 08:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmcay_mng`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(4) NOT NULL,
  `company_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `company_address` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `zaad` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `edahab` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `company_address`, `email`, `tel`, `mobile`, `zaad`, `edahab`, `logo`) VALUES
(8, 'DAACAD DENTAL CLINIC', 'ku dhajisan bluesky', '', '4526144', '4849514', '435646', '45454', 'tt logo-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(4) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `fullname`, `phone`, `message`) VALUES
(1, 'dfdfb', '3234324234', 'gdfgdfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(4) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_id` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_phone` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `p_payment` decimal(10,0) NOT NULL,
  `payment_status` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `debt` int(255) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `img`, `p_id`, `p_name`, `room_number`, `p_phone`, `date`, `p_payment`, `payment_status`, `location`, `debt`, `total`) VALUES
(79, 'Screenshot (6).png', '676', 'Muumin Aadan Kaahin', 'Select Room', '666666667', '2022-08-02', '100', 'bjjbbjbj', 'ggj', 10, 30);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(4) NOT NULL,
  `room_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `room_desc` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_name`, `room_desc`) VALUES
(1, 'Room 1', 'Room 1 Description'),
(2, 'Room 2', 'Room 2 Description');

-- --------------------------------------------------------

--
-- Table structure for table `trackpayment`
--

CREATE TABLE `trackpayment` (
  `id` int(4) NOT NULL,
  `userid` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trackpayment`
--

INSERT INTO `trackpayment` (`id`, `userid`, `total`, `paid`, `owed`, `date`) VALUES
(27, '406', '20', '5', '15', '2022-09-01'),
(28, '406', '15', '5', '10', '2022-09-01'),
(29, 'pid', '10', '5', '5', '2022-09-01'),
(30, '594', '300', '50', '250', '2022-08-02'),
(31, '594', '250', '20', '230', '2022-08-02'),
(32, '505', '20', '4', '16', '2022-08-02'),
(33, '691', '20', '4', '16', '2022-08-02'),
(34, '694', '20', '4', '16', '2022-08-02'),
(35, '694', '16', '10', '6', '2022-08-02'),
(36, '190', '20', '10', '10', '2022-08-02'),
(37, '190', '10', '10', '0', '2022-08-02'),
(38, 'pid', '230', '20', '210', '2022-08-02'),
(39, 'pid', '210', '20', '190', '2022-08-02'),
(40, 'pid', '190', '20', '170', '2022-08-02'),
(41, 'pid', '170', '20', '150', '2022-08-02'),
(42, '676', '100', '50', '50', '2022-08-02'),
(43, '676', '50', '10', '40', '2022-08-02'),
(44, '676', '40', '10', '30', '2022-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `userid` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `username`, `pwd`, `img`, `fullname`, `email`, `phone`, `role`) VALUES
(1, 489867321, 'admin', 'admin01', 'avatar - Copy.jpg', 'Ahmed Warfa Aadan', 'example@gmail.com', '063456789', 'admin'),
(2, 76856826, 'user', 'user', 'tt logo-01.jpg', 'Your Fullname', 'Your Email', '063', 'reception');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `p_id` (`p_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackpayment`
--
ALTER TABLE `trackpayment`
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
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trackpayment`
--
ALTER TABLE `trackpayment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

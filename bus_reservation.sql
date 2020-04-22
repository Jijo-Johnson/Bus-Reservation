-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 03:09 AM
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
-- Database: `bus_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `permit_no` varchar(255) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `bus_type` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `seats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `permit_no`, `bus_no`, `bus_type`, `reg_no`, `seats`) VALUES
(3, '123', '123', ' Superfast', 'KL152222', '50'),
(4, '', '', '', '', '50'),
(6, '585858', '88888888', ' SuperDeluxe', 'TN15NN 67677', '50'),
(7, '3500000000', '0909111', ' SuperExpress', 'TN1599 009', '50'),
(8, '546', '453', ' Superfast', 'KA15ghhhh3 3453', '50'),
(9, '234234', '234234', ' SuperExpress', 'KL152f 234234', '50'),
(10, '123456', '111', ' Superfast', 'KL1512 1222221', '50');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user`, `feedback`) VALUES
(1, 'qweq', 'asdasdsadadadad asdsa asd asdasd asd'),
(2, 'dsfaafaas', 'dadasdadadadf as aasfdgaf a asfafafafa saf asf asfsaf '),
(3, 'qweq', 'asdasdsadadadad asdsa asd asdasd asd'),
(4, 'dsfaafaas', 'dadasdadadadf as aasfdgaf a asfafafafa saf asf asfsaf '),
(5, 'j', ' qwe');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `email`, `phone`, `location`, `username`, `password`) VALUES
(4, 'manager', 'manager@man.com', ' 8899889988', 'mana', 'manager', 'm'),
(5, 'Q', 'Q', 'Q', 'Q', 'Q', 'Q'),
(6, 'w', 'w@w.w', ' w', 'w', 'w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `route_no` int(50) NOT NULL,
  `route` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `Destination` varchar(40) NOT NULL,
  `starting_time` varchar(255) NOT NULL,
  `destination_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route_no`, `route`, `duration`, `source`, `Destination`, `starting_time`, `destination_time`) VALUES
(19, 12, 'QLN-TVM', '2', 'QLN', 'TVM', '6:00', '8:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `schedule_no` int(11) NOT NULL,
  `bus_no` varchar(50) NOT NULL,
  `route_no` int(11) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `destination_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `schedule_no`, `bus_no`, `route_no`, `starting_time`, `destination_time`) VALUES
(1, '0000-00-00', 1, '122', 45, '0000-00-00', '0000-00-00'),
(2, '0000-00-00', 1, '124', 63, '0000-00-00', '0000-00-00'),
(3, '0000-00-00', 3, '442', 18, '0000-00-00', '0000-00-00'),
(4, '0000-00-00', 33, '352', 66, '0000-00-00', '0000-00-00'),
(5, '0000-00-00', 11, '800', 11, '0000-00-00', '0000-00-00'),
(6, '0000-00-00', 7, '654', 80, '0000-00-00', '0000-00-00'),
(7, '0000-00-00', 1, '122', 45, '0000-00-00', '0000-00-00'),
(8, '2020-03-05', 12, '12', 12, '12', '5');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `seat_no` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `gender`, `address`, `mobile`, `email`, `username`, `password`) VALUES
(5, 'j', 'male', 'jj', '123', 'j@j.j', 'j', 'jj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 07:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `max`
--

CREATE TABLE `max` (
  `temp_entry_time` time NOT NULL,
  `temp_count` int(5) NOT NULL DEFAULT 0,
  `final_entry_time` time NOT NULL,
  `final_count` int(11) NOT NULL DEFAULT 0,
  `final_exit_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `max`
--

INSERT INTO `max` (`temp_entry_time`, `temp_count`, `final_entry_time`, `final_count`, `final_exit_time`) VALUES
('11:00:00', 9, '12:05:00', 11, '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `off_name` varchar(40) NOT NULL,
  `is_in` tinyint(1) NOT NULL,
  `no_of_people` int(5) NOT NULL DEFAULT 0,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`off_name`, `is_in`, `no_of_people`, `id`) VALUES
('Venkatash', 0, 0, 1),
('Ramesh', 0, 0, 2),
('Anand', 0, 0, 3),
('Rajasekar', 0, 0, 4),
('Priya', 0, 0, 5),
('Sakthi\r\n                                ', 0, 0, 6),
('John', 0, 0, 7),
('Murugan', 1, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `name` varchar(30) DEFAULT NULL,
  `entry_time` time DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `whom_to_meet` varchar(30) DEFAULT NULL,
  `exit_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

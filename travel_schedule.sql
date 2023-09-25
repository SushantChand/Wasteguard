-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 12:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caretaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel_schedule`
--

CREATE TABLE `travel_schedule` (
  `day` varchar(255) NOT NULL,
  `starting_location` varchar(255) DEFAULT NULL,
  `departure_time` varchar(255) DEFAULT NULL,
  `ending_location` varchar(255) DEFAULT NULL,
  `arrival_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel_schedule`
--

INSERT INTO `travel_schedule` (`day`, `starting_location`, `departure_time`, `ending_location`, `arrival_time`) VALUES
('sunday', 'kaushaltar', '9', 'balkot', '12'),
('tuesday', 'gwarko', '9', 'satdobato', '12'),
('[sunday]', '[kaushaltar]', '[9am]', '[balkot]', '[12pm]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel_schedule`
--
ALTER TABLE `travel_schedule`
  ADD PRIMARY KEY (`day`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

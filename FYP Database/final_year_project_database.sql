-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 09:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_year_project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers table`
--

CREATE TABLE `buyers table` (
  `Id` int(255) NOT NULL,
  `Buyer Name` varchar(255) NOT NULL,
  `Buyer Email` varchar(255) NOT NULL,
  `Buyer Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm Password` varchar(255) NOT NULL,
  `Buyer Profile Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cameras table`
--

CREATE TABLE `cameras table` (
  `Id` int(255) NOT NULL,
  `Camera Title` varchar(255) NOT NULL,
  `Camera Description` varchar(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headphones table`
--

CREATE TABLE `headphones table` (
  `Id` int(255) NOT NULL,
  `Headphone Title` varchar(255) NOT NULL,
  `Headphone Description` varchar(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptops table`
--

CREATE TABLE `laptops table` (
  `Id` int(255) NOT NULL,
  `Laptop Title` varchar(255) NOT NULL,
  `Laptop Description` varchar(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptop stands table`
--

CREATE TABLE `laptop stands table` (
  `Id` int(255) NOT NULL,
  `Laptop Stand Title` varchar(255) NOT NULL,
  `Laptop Stand Description` varchar(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monitors table`
--

CREATE TABLE `monitors table` (
  `Id` int(255) NOT NULL,
  `Monitor Title` varchar(255) NOT NULL,
  `Monitor Description` varchar(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal computers table`
--

CREATE TABLE `personal computers table` (
  `Id` int(255) NOT NULL,
  `Personal Computer Title` varchar(255) NOT NULL,
  `Personal Computer Description` varchar(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller table`
--

CREATE TABLE `seller table` (
  `Id` int(255) NOT NULL,
  `Seller Name` varchar(255) NOT NULL,
  `Seller Email` varchar(255) NOT NULL,
  `Seller Phone` varchar(255) NOT NULL,
  `Seller Picture` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers table`
--
ALTER TABLE `buyers table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cameras table`
--
ALTER TABLE `cameras table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `headphones table`
--
ALTER TABLE `headphones table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `laptops table`
--
ALTER TABLE `laptops table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `laptop stands table`
--
ALTER TABLE `laptop stands table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `monitors table`
--
ALTER TABLE `monitors table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `personal computers table`
--
ALTER TABLE `personal computers table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `seller table`
--
ALTER TABLE `seller table`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers table`
--
ALTER TABLE `buyers table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cameras table`
--
ALTER TABLE `cameras table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headphones table`
--
ALTER TABLE `headphones table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptops table`
--
ALTER TABLE `laptops table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptop stands table`
--
ALTER TABLE `laptop stands table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitors table`
--
ALTER TABLE `monitors table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal computers table`
--
ALTER TABLE `personal computers table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller table`
--
ALTER TABLE `seller table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

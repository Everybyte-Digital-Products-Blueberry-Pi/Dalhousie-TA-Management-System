-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2020 at 01:36 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhat`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `E_name` varchar(64) NOT NULL,
  `Curr_Dal_stu` varchar(5) DEFAULT NULL,
  `DalId` varchar(10) NOT NULL,
  `IName` varchar(64) NOT NULL,
  `CourseID` varchar(64) NOT NULL,
  `CRN` int(11) NOT NULL,
  `Term` varchar(20) NOT NULL,
  `Year` int(11) NOT NULL,
  `Total_hour` int(11) NOT NULL,
  `IClass_hours` int(11) NOT NULL,
  `Office_hours` int(11) NOT NULL,
  `Grading_hours` int(11) NOT NULL,
  `Other_hours` int(11) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`E_name`, `Curr_Dal_stu`, `DalId`, `IName`, `CourseID`, `CRN`, `Term`, `Year`, `Total_hour`, `IClass_hours`, `Office_hours`, `Grading_hours`, `Other_hours`, `id`, `position`) VALUES
('John Doe', 'Yes', 'B00123456', 'Andrew X', 'CSCI 1800', 1234, 'Fall', 2021, 35, 0, 0, 0, 0, 38, 'MK'),
('John Doe', 'Yes', 'B00123456', 'David Y', 'CSCI 2100', 4561, 'Winter', 2021, 65, 30, 20, 10, 5, 39, 'TA'),
('John Doe', 'Yes', 'B00123456', 'Andrew X', 'CSCI 1800', 1234, 'Fall', 2021, 35, 0, 0, 0, 0, 40, ''),
('John Doe', 'Yes', 'B00123456', 'David Y', 'CSCI 2100', 4561, 'Winter', 2021, 45, 45, 0, 0, 0, 41, 'TA'),
('John Doe', 'Yes', 'B00123456', 'Andrew Z', 'CSCI 3000', 4563, 'Summer', 2022, 45, 0, 0, 0, 0, 42, 'MK'),
('John Doe', 'Yes', 'B00123456', 'David Y', 'CSCI 2100', 4561, 'Winter', 2021, 35, 25, 10, 0, 0, 43, 'TA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

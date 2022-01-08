-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 02:30 PM
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
-- Database: `cse102fall2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse102fall2021`
--

CREATE TABLE `cse102fall2021` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `department` varchar(5) NOT NULL,
  `midone` varchar(5) NOT NULL,
  `midtwo` varchar(5) NOT NULL,
  `final` varchar(5) NOT NULL,
  `class_test` varchar(5) NOT NULL,
  `class_participation` varchar(5) NOT NULL,
  `project` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `letter_grade` varchar(5) NOT NULL,
  `grade_point` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse102fall2021`
--

INSERT INTO `cse102fall2021` (`id`, `student_id`, `student_name`, `cgpa`, `department`, `midone`, `midtwo`, `final`, `class_test`, `class_participation`, `project`, `total`, `letter_grade`, `grade_point`) VALUES
(1, '2021-2-00-000', 'John Smith', '3.69', 'ISLM', '20', '20', '20', '10', '05', '25', '100', 'A+', '4.00'),
(3, '2021-3-00-000', 'Jane Appleseed', '3.90', 'BBA', '19', '19', '19', '09', '04', '24', '94', 'A', '4.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse102fall2021`
--
ALTER TABLE `cse102fall2021`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cse102fall2021`
--
ALTER TABLE `cse102fall2021`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

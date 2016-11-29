-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 04:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `employee_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `salary_grade` varchar(5) NOT NULL,
  `join_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `post_code` int(20) NOT NULL,
  `role` varchar(40) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `profile_picture`, `employee_id`, `first_name`, `last_name`, `gender`, `birthday`, `marital_status`, `nid`, `phone_number`, `email`, `city`, `nationality`, `country`, `dept`, `salary_grade`, `join_date`, `status`, `address1`, `address2`, `post_code`, `role`, `is_delete`) VALUES
(1, 'none', 123, 'tanvir', 'khan', 'male', '2016-11-08', 'married', 1324477534, 99828762, 'tanvir@gamail.com', 'chittagong', 'bangladeshi', 'bangladesh', 'c.s.e', '12228', '2016-11-30', 'active', '', '', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_certification`
--

CREATE TABLE `employee_certification` (
  `id` int(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `passing_year` int(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `skill_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary_sheet`
--

CREATE TABLE `salary_sheet` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_sheet`
--

INSERT INTO `salary_sheet` (`id`, `name`, `salary`) VALUES
(1, 'A', '50000'),
(2, 'B', '30000'),
(3, 'C', '20000'),
(4, 'D', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_certification`
--
ALTER TABLE `employee_certification`
  ADD KEY `id` (`id`);

--
-- Indexes for table `salary_sheet`
--
ALTER TABLE `salary_sheet`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee_certification`
--
ALTER TABLE `employee_certification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary_sheet`
--
ALTER TABLE `salary_sheet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_certification`
--
ALTER TABLE `employee_certification`
  ADD CONSTRAINT `employee_certification_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

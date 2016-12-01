-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 01:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(6) NOT NULL,
  `dept` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept`) VALUES
(1, 'Marketing'),
(2, 'Administration'),
(3, 'Head'),
(4, ''),
(5, 'dsfsfdsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birthday` varchar(100) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `nid` int(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `phone_number` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `post_code` varchar(15) DEFAULT NULL,
  `employee_id` int(255) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `salary` int(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `fb` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `linkedin` varchar(200) DEFAULT NULL,
  `googleplus` varchar(200) DEFAULT NULL,
  `is_delete` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `birthday`, `gender`, `marital_status`, `nationality`, `nid`, `profile_picture`, `phone_number`, `email`, `address1`, `address2`, `country`, `city`, `post_code`, `employee_id`, `join_date`, `role`, `salary`, `dept`, `fb`, `twitter`, `linkedin`, `googleplus`, `is_delete`) VALUES
(1, 'tanvir', 'khan', '2016-11-08', 'male', 'married', 'bangladeshi', 1324477534, 'none', 99828762, 'tanvir@gamail.com', NULL, NULL, 'bangladesh', 'chittagong', NULL, 123, '2016-11-30', NULL, 122288, 'c.s.e', NULL, NULL, NULL, NULL, 1),
(2, 'dsds', 'ewre', '2016-11-01', 'fsfd', 'fdf', 'fdf', 23232, 'dsd', 2343, 'dfdfdf', NULL, NULL, 'fdf', 'dfd', NULL, 121, '2016-11-23', NULL, 3434, 'fdf', NULL, NULL, NULL, NULL, 1),
(3, 'dsds', 'ewre', '2016-11-01', 'fsfd', 'fdf', 'fdf', 23232, 'dsd', 2343, 'dfdfdf', NULL, NULL, 'fdf', 'dfd', NULL, 121, '2016-11-23', NULL, 3434, 'fdf', NULL, NULL, NULL, NULL, 1),
(4, 'sfsf', 'fsfsdfs', NULL, NULL, '', '-1', NULL, '', 0, '', NULL, NULL, '', '', NULL, 0, NULL, NULL, 0, '', NULL, NULL, NULL, NULL, 1),
(5, 'ggg', 'ggg', '2016-11-03', 'gg', 'gg', 'gg', 44444, 'ffff', 444, 'fffff@gmail.com', 'dfdf', 'dfdf', 'dfd', 'fdfdfd', '34343', 3433, '2016-11-02', 'dfdfdf', 4545, 'fsfsf', 'sdfs', 'fsfsf', 'sdf', 'dsf', 1),
(6, 'ggg', 'ggg', '2016-11-03', 'gg', 'gg', 'gg', 44444, 'ffff', 444, 'fffff@gmail.com', 'dfdf', 'dfdf', 'dfd', 'fdfdfd', '34343', 3433, '2016-11-02', 'dfdfdf', 4545, 'fsfsf', 'sdfs', 'fsfsf', 'sdf', 'dsf', 1),
(7, 'ggg', 'ggg', '2016-11-03', 'gg', 'gg', 'gg', 44444, 'ffff', 444, 'fffff@gmail.com', 'dfdf', 'dfdf', 'dfd', 'fdfdfd', '34343', 3433, '2016-11-02', 'dfdfdf', 4545, 'fsfsf', 'sdfs', 'fsfsf', 'sdf', 'dsf', 1),
(8, '', '', '0000-00-00', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '-1', NULL, '', 0, '0000-00-00', NULL, NULL, NULL, '', '', '', '', 1),
(9, 'Tanimi', 'Vai', '0000-00-00', 'Male', 'Married', NULL, 373737373, NULL, NULL, 'tanim@gmail.com', 'sdfdsf', 'sfdsdf', 'Bangladesh', 'Chittagong', '5000', 32323, '2016-11-10', 'Manager', NULL, 'Sales', 'fb.com', 'twitter.com', 'linkedin.com', 'google.com/plus', 1),
(10, 'sdfsd', 'fsdf', '03/13/2011', 'Male', 'Married', NULL, 2147483647, NULL, NULL, 'sidratsamia0@gmail.com', 'sdfdsf', 'sfdsdf', 'Albania', 'Bulqize', '3434', 42344, '2016-11-04', 'Ass. Manager', 123232, 'Sales', 'wrwer', 'rwer', 'werwe', 'wer', 1),
(11, 'fsfdf', 'sdfsdf', '02/03/2010', 'Male', 'Married', 'bd', 2147483647, NULL, 343434, 'sidratsamia0@gmail.com', 'sdfdsf', 'sfdsdf', 'Afghanistan', 'Badakhshan', '5000', 32323, '2016-11-10', 'Manager', 123234, 'Sales', 'sdfdsf', 'sfds', 'sdfsfd', 'fdsdfsf', 1),
(12, 'fsfdf', 'sdfsdf', '02/03/2010', 'Male', 'Married', 'bd', 2147483647, NULL, 343434, 'sidratsamia0@gmail.com', 'sdfdsf', 'sfdsdf', 'Afghanistan', NULL, '5000', 32323, '2016-11-10', 'Manager', 123234, 'Sales', 'sdfdsf', 'sfds', 'sdfsfd', 'fdsdfsf', 1),
(13, 'fsfdf', 'sdfsdf', '02/03/2010', 'Male', 'Married', 'bd', 2147483647, '14804224511416831456.jpg', 343434, 'sidratsamia0@gmail.com', 'sdfdsf', 'sfdsdf', 'Afghanistan', NULL, '5000', 32323, '2016-11-10', 'Manager', 123234, 'Sales', 'sdfdsf', 'sfds', 'sdfsfd', 'fdsdfsf', 1),
(14, 'Shamrat', 'Khan', '07/16/2015', 'Male', 'Unmarried', 'BD', 33333333, '1480574405Chrysanthemum.jpg', 334343, 'ff@gmail.com', 'rwrrwrwer', 'werwrwrw', 'Azerbaijan', 'Daskasan Rayonu', '44343', 444444, '2016-12-07', 'Manager', 123234, 'Sales', 'fb.com/mahmud2sabuj', 'sdfsf', 'sdfsf', 'sdfsf', 1),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, '', '', '', NULL, NULL, '', 0, NULL, 0, '', '', '', '-1', NULL, '', 0, '0000-00-00', NULL, NULL, NULL, '', '', '', '', 1);

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
-- Table structure for table `off_days`
--

CREATE TABLE `off_days` (
  `id` int(6) NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `off_days`
--

INSERT INTO `off_days` (`id`, `date`, `details`) VALUES
(1, '10', 'sjkhfjk jfhsjkfh hfjkshf sjkfhsjkfh sfhskf sjkhfjk jfhsjkfh hfjkshf sjkfhsjkfh sfhskf '),
(2, '06', 'sjkhfjk jfhsjkfh hfjkshf sjkfhsjkfh sfhskf sjkhfjk jfhsjkfh hfjkshf sjkfhsjkfh sfhskf '),
(3, NULL, NULL),
(4, '2016-12-14', 'ddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `salary_sheet`
--

CREATE TABLE `salary_sheet` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_sheet`
--

INSERT INTO `salary_sheet` (`id`, `title`, `amount`) VALUES
(1, 'a', 123234),
(2, 'b', 123232),
(3, 'E', 2222),
(4, 'F', 4444),
(5, 'G', 10000),
(6, 'K', 33333),
(7, 'TTT', 66666),
(8, 'gg', 555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
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
-- Indexes for table `off_days`
--
ALTER TABLE `off_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_sheet`
--
ALTER TABLE `salary_sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `employee_certification`
--
ALTER TABLE `employee_certification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `off_days`
--
ALTER TABLE `off_days`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salary_sheet`
--
ALTER TABLE `salary_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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

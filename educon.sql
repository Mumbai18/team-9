-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 12:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educon`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_academics`
--

CREATE TABLE `stud_academics` (
  `stud_id` int(11) NOT NULL,
  `stud_currentdegree` varchar(40) NOT NULL,
  `stud_college` varchar(40) NOT NULL,
  `stud_currentyear` int(11) NOT NULL,
  `stud_fees` float NOT NULL,
  `stud_otherexpenses` float NOT NULL,
  `stud_govtfund` float NOT NULL,
  `stud_sscmarks` float NOT NULL,
  `stud_hscmarks` float NOT NULL,
  `stud_gradmarks` float NOT NULL,
  `stud_familyincome` float NOT NULL,
  `stud_previousmarks` float NOT NULL,
  `stud_financialrating` float NOT NULL,
  `stud_educationalrating` float NOT NULL,
  `stud_totalamtrequired` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_document`
--

CREATE TABLE `stud_document` (
  `stud_id` int(11) NOT NULL,
  `stud_photo` blob NOT NULL,
  `stud_familyphoto` blob NOT NULL,
  `stud_residencephoto` blob NOT NULL,
  `stud_rationphoto` blob NOT NULL,
  `stud_aadharphoto` blob NOT NULL,
  `stud_electricitybill` blob NOT NULL,
  `stud_parentaadhar` blob NOT NULL,
  `stud_birthcerti` blob NOT NULL,
  `stud_achievements` blob NOT NULL,
  `stud_feestructure` blob NOT NULL,
  `stud_familyincome` blob NOT NULL,
  `stud_previousmarkshet` blob NOT NULL,
  `stud_sscmarksheet` blob NOT NULL,
  `stud_hscmarksheet` blob NOT NULL,
  `stud_gradmarksheet` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_personal_info`
--

CREATE TABLE `stud_personal_info` (
  `stud_id` int(11) NOT NULL,
  `stud_mname` varchar(30) NOT NULL,
  `stud_lname` varchar(30) NOT NULL,
  `stud_address` varchar(100) NOT NULL,
  `stud_city` varchar(20) NOT NULL,
  `stud_state` varchar(40) NOT NULL,
  `stud_pincode` int(11) NOT NULL,
  `stud_gender` varchar(1) NOT NULL,
  `stud_caste` varchar(30) NOT NULL,
  `stud_category` varchar(30) NOT NULL,
  `stud_mothername` varchar(30) NOT NULL,
  `stud_fathername` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_registration`
--

CREATE TABLE `stud_registration` (
  `stud_id` int(11) NOT NULL,
  `stud_fname` varchar(30) NOT NULL,
  `stud_mobile` int(10) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_registration`
--
ALTER TABLE `stud_registration`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_registration`
--
ALTER TABLE `stud_registration`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

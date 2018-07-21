-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2018 at 06:32 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `core_committee`
--

CREATE TABLE `core_committee` (
  `core_id` int(11) NOT NULL,
  `core_fname` varchar(30) NOT NULL,
  `core_lname` varchar(30) NOT NULL,
  `core_email` varchar(40) NOT NULL,
  `core_pwd` varchar(40) NOT NULL,
  `core_mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
  `donor_fname` varchar(30) NOT NULL,
  `donor_lname` varchar(30) NOT NULL,
  `donor_email` varchar(40) NOT NULL,
  `donor_pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor_annual`
--

CREATE TABLE `donor_annual` (
  `donor_id` int(11) NOT NULL,
  `donor_criteria` varchar(50) NOT NULL,
  `donor_donation` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educon_committee`
--

CREATE TABLE `educon_committee` (
  `educon_id` int(11) NOT NULL,
  `educon_fname` varchar(30) NOT NULL,
  `educon_lname` varchar(30) NOT NULL,
  `educon_gender` varchar(1) NOT NULL,
  `educon_city` varchar(30) NOT NULL,
  `educon_state` varchar(40) NOT NULL,
  `educon_email` varchar(40) NOT NULL,
  `educon_pwd` varchar(40) NOT NULL,
  `educon_mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_academics`
--

CREATE TABLE `stud_academics` (
  `stud_id` int(11) NOT NULL,
  `stud_currentdegree` varchar(40) NOT NULL,
  `stud_college` varchar(40) NOT NULL,
  `stud_currentyear` varchar(20) NOT NULL,
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
  `stud_fname` varchar(30) NOT NULL,
  `stud_mname` varchar(30) NOT NULL,
  `stud_lname` varchar(30) NOT NULL,
  `stud_address` varchar(100) NOT NULL,
  `stud_city` varchar(30) NOT NULL,
  `stud_state` varchar(40) NOT NULL,
  `stud_pincode` int(11) NOT NULL,
  `stud_gender` varchar(1) NOT NULL,
  `stud_caste` varchar(30) NOT NULL,
  `stud_category` varchar(30) NOT NULL,
  `stud_dob` date NOT NULL,
  `stud_mothername` varchar(30) NOT NULL,
  `stud_fathername` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `superadmin_id` int(11) NOT NULL,
  `superadmin_email` varchar(40) NOT NULL,
  `superid_pwd` varchar(40) NOT NULL,
  `superadmin_mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `mobile_no`, `type`) VALUES
(1, 'abhijeet@gmail.com', 'abhi', 1234, 0),
(2, 'riya@gmail.com', 'riya', 4567, 0),
(3, 'radhika.karwa@gmail.com', '123', 123, 0),
(4, 'riya.karia@gmail.com', '123', 123, 0),
(5, 'abc@gmail.com', 'abc', 123, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core_committee`
--
ALTER TABLE `core_committee`
  ADD PRIMARY KEY (`core_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `educon_committee`
--
ALTER TABLE `educon_committee`
  ADD PRIMARY KEY (`educon_id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`superadmin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core_committee`
--
ALTER TABLE `core_committee`
  MODIFY `core_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educon_committee`
--
ALTER TABLE `educon_committee`
  MODIFY `educon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `superadmin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

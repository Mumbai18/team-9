-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 06:58 AM
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

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_fname`, `donor_lname`, `donor_email`, `donor_pwd`) VALUES
(1, 'Rakesh', 'Shah', 'rshah@gmail.com', '123'),
(2, 'Priyanka', 'D', 'pri@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `donor_annual`
--

CREATE TABLE `donor_annual` (
  `donor_id` int(11) NOT NULL,
  `donor_criteria` varchar(50) NOT NULL,
  `donor_donation` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_annual`
--

INSERT INTO `donor_annual` (`donor_id`, `donor_criteria`, `donor_donation`) VALUES
(8, 'F', 100000);

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
  `stud_sscmarks` float DEFAULT NULL,
  `stud_hscmarks` float DEFAULT NULL,
  `stud_gradmarks` float DEFAULT NULL,
  `stud_familyincome` float NOT NULL,
  `stud_previousmarks` float NOT NULL,
  `stud_financialrating` float NOT NULL,
  `stud_educationalrating` float NOT NULL,
  `stud_totalamtrequired` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_academics`
--

INSERT INTO `stud_academics` (`stud_id`, `stud_currentdegree`, `stud_college`, `stud_currentyear`, `stud_fees`, `stud_otherexpenses`, `stud_govtfund`, `stud_sscmarks`, `stud_hscmarks`, `stud_gradmarks`, `stud_familyincome`, `stud_previousmarks`, `stud_financialrating`, `stud_educationalrating`, `stud_totalamtrequired`) VALUES
(0, 'Secondary School', 'Vivekanand School', '8th', 20000, 2000, 500, 0, 0, 0, 40000, 65, 3, 3, 21500),
(2, 'HSC', 'RJ College', '12th', 30000, 5000, 5000, 85, NULL, NULL, 30000, 70, 3, 4, 30000),
(3, 'Diploma', 'IGM', '2nd', 70000, 5000, 25000, 70, 55, NULL, 55000, 61, 3, 3, 50000);

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
  `stud_parentaadhar` blob,
  `stud_birthcerti` blob,
  `stud_achievements` blob,
  `stud_feestructure` blob NOT NULL,
  `stud_familyincome` blob NOT NULL,
  `stud_previousmarkshet` blob NOT NULL,
  `stud_sscmarksheet` blob,
  `stud_hscmarksheet` blob,
  `stud_gradmarksheet` blob
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
  `stud_fathername` varchar(30) NOT NULL,
  `stud_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_personal_info`
--

INSERT INTO `stud_personal_info` (`stud_id`, `stud_fname`, `stud_mname`, `stud_lname`, `stud_address`, `stud_city`, `stud_state`, `stud_pincode`, `stud_gender`, `stud_caste`, `stud_category`, `stud_dob`, `stud_mothername`, `stud_fathername`, `stud_status`) VALUES
(1, 'Abhijeet', 'A', 'Salunkhe', 'Golibar road', 'Ghatkopar', 'Maharashtra', 321087, 'M', 'Open', 'Normal', '2016-02-02', 'M', 'F', 0),
(0, 'Mamta', 'M', 'Sharma', 'M M Road', 'Kurla', 'Maharashtra', 231564, 'F', 'NT', 'Handicapped', '2017-06-14', 'Sheela', 'Ramesh', 0),
(0, 'Suresh', 'J', 'Kale', 'Zaveri', 'Mumbai', 'Maharashtra', 234567, 'M', 'OBC', 'Orphan', '2018-07-17', 'K', 'G', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `mobile_no`, `type`) VALUES
(1, 'abhijeet@gmail.com', 'abhi', 1234, 0),
(2, 'riya@gmail.com', 'riya', 4567, 0),
(3, 'radhika.karwa@gmail.com', '123', 123, 0),
(4, 'riya.karia@gmail.com', '123', 123, 0),
(5, 'abc@gmail.com', 'abc', 123, 2),
(7, 'priyankadevasthali@gmail.com', '123', 2147483647, 1),
(8, 'priyankadevasthali@gmail.com', '12345', 1234567890, 2),
(9, 'priyankad@gmail.com', '123', 435261790, 4),
(10, 'yadniki@gmail.com', 'yadniki', 2147483647, 2);

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
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

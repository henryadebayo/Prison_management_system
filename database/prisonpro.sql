-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2020 at 03:13 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prisonpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `Admin_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`Admin_Id`, `Admin_Name`, `Admin_Password`) VALUES
(2, 'admin', 'admin'),
(3, 'newuser', 'newuser123');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
  `to` varchar(17) NOT NULL,
  `Id` varchar(13) NOT NULL,
  `subject` varchar(14) NOT NULL,
  `message` varchar(70) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--


-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE IF NOT EXISTS `capacity` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `number` int(34) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`id`, `number`) VALUES
(1, 500),
(2, 750),
(3, 1000),
(4, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE IF NOT EXISTS `court` (
  `National_id` int(12) NOT NULL,
  `File_number` varchar(14) NOT NULL,
  `Dateoftrial` date NOT NULL,
  `Sentence` varchar(14) NOT NULL,
  `Location` varchar(15) NOT NULL,
  `judge` text NOT NULL,
  PRIMARY KEY (`National_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`National_id`, `File_number`, `Dateoftrial`, `Sentence`, `Location`, `judge`) VALUES
(8756, 'NB-30', '2002-04-03', '5 to 1o Years', 'Sharia Court', 'James'),
(56748, 'NB-15', '2001-01-22', '2 Weeks', 'Federal High Co', 'WAZIRI'),
(567489, 'NB-15', '2001-03-22', 'Bail', 'Federal High Co', 'WAZIRI');

-- --------------------------------------------------------

--
-- Table structure for table `newprison`
--

CREATE TABLE IF NOT EXISTS `newprison` (
  `pno` int(25) NOT NULL AUTO_INCREMENT,
  `pname` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `opendate` varchar(25) NOT NULL,
  `contact` int(25) NOT NULL,
  `capacity` int(25) NOT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23841 ;

--
-- Dumping data for table `newprison`
--

INSERT INTO `newprison` (`pno`, `pname`, `location`, `opendate`, `contact`, `capacity`) VALUES
(7, 'LAMU', 'LAMU', '2015-02-12', 765546353, 500),
(5679, 'Goron Dutse Prison', 'Kano', '2020-11-12', 2147483647, 500),
(23340, 'JNKIM', 'NAIROBI', '2015-02-12', 2147483647, 0),
(23344, 'JNKIM', 'NAIROBI', '2015-02-12', 2147483647, 0),
(23840, 'JNKIM', 'NAIROBI', '2015-02-12', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `National_id` int(11) NOT NULL,
  `Telephone` int(12) NOT NULL,
  `From_prison` varchar(12) NOT NULL,
  `To_prison` varchar(12) NOT NULL,
  `Dateoftransfer` date NOT NULL,
  PRIMARY KEY (`National_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`National_id`, `Telephone`, `From_prison`, `To_prison`, `Dateoftransfer`) VALUES
(674484, 2147483647, 'LANGATA', 'SHIMOLATEWA', '2015-01-20'),
(123, 2147483647, 'LAGOS', 'SOKOTO', '2020-03-27'),
(123456, 2147483647, 'LAGOS', 'SOKOTO', '2020-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `officerdetails`
--

CREATE TABLE IF NOT EXISTS `officerdetails` (
  `id` int(12) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateofbirth` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `telephone` int(25) NOT NULL,
  `education` varchar(25) NOT NULL,
  `experience` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officerdetails`
--

INSERT INTO `officerdetails` (`id`, `fullname`, `address`, `dateofbirth`, `gender`, `telephone`, `education`, `experience`) VALUES
(23333, 'JUSTICE ju', 'KAZAURE', '2019-02-12', 'Male', 2147483647, 'Certificate', '1-2years'),
(23443, 'JUSTICE JAMES', 'KAZAURE', '2019-02-12', 'Male', 2147483647, 'Certificate', '1-2years'),
(234567, 'JUSTICE JAMES', 'KAZAURE', '2019-02-12', 'Male', 2147483647, 'Certificate', '1-2years'),
(23456780, 'JUSTICE JAMES', 'KAZAURE', '2019-02-12', 'Male', 2147483647, 'Certificate', '1-2years'),
(33333333, 'yum', 'rtthjkj', '1989-04-12', 'Female', 99666666, 'PDG', '1-6 months'),
(44444444, 'Emmanuel', 'Lngatta', '2015-02-12', 'Male', 2147483647, 'Certificate', '1-2years'),
(45555555, 'yamiv', 'rongai', '1977-02-12', '', 2147483647, 'Certificate', '5-7yrs');

-- --------------------------------------------------------

--
-- Table structure for table `policestation_tbl`
--

CREATE TABLE IF NOT EXISTS `policestation_tbl` (
  `Station_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Station_Name` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Station_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=898 ;

--
-- Dumping data for table `policestation_tbl`
--

INSERT INTO `policestation_tbl` (`Station_Id`, `Station_Name`, `Address`, `City`, `Email`, `Mobile`, `UserName`, `Password`) VALUES
(897, 'kimaya', 'kimaya', 'nairobi', 'policpol@police.com', 888766, 'warder', 'warder');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL DEFAULT '0',
  `Full_Name` varchar(23) NOT NULL,
  `DOB` date NOT NULL,
  `datein` varchar(12) NOT NULL,
  `dateout` varchar(12) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `County` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Education` varchar(20) NOT NULL,
  `Marital` varchar(20) NOT NULL,
  `Offence` varchar(90) NOT NULL,
  `di` date NOT NULL,
  `cellno` int(15) NOT NULL,
  `healthsta` text NOT NULL,
  `Sentence` varchar(13) NOT NULL,
  `File_num` varchar(12) NOT NULL,
  `prison` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Full_Name`, `DOB`, `datein`, `dateout`, `Address`, `County`, `Gender`, `Education`, `Marital`, `Offence`, `di`, `cellno`, `healthsta`, `Sentence`, `File_num`, `prison`) VALUES
(1111, 'asuker uiw', '2021-01-23', '2009-01-21', '2021-01-23', 'difh', 'Nairobi', 'Male', 'Never', 'Divorced', 'ihedsfi', '0000-00-00', 0, '', '2', 'NBI-223', ''),
(2322, 'SUNDAY JOHN', '2020-12-24', '2020-03-14', '', 'KAZAURE', 'Lagos', 'Male', 'O level', 'Married', 'Robbery', '0000-00-00', 0, '', '', 'NB-15', ''),
(5678, 'ONAIK JOY', '2000-12-24', '', '', 'HADAIJA', 'Kano', 'Female', 'O level', 'Married', 'Robbery', '2020-09-21', 0, 'NB-09', '', '3450', ''),
(6567, 'Thomas Owino Kamau', '0000-00-00', '01/24/2011', '10/12/2016', 'Kiseria', '02', '01', '01', '04', 'i m oan', '0000-00-00', 0, '', '01', '09078766', 'LANGATA'),
(6756, 'SUNDAY James', '2020-12-24', '2020-03-14', '', 'POLY', 'Kano', 'Male', 'Never', 'Divorced', 'Murder', '0000-00-00', 0, '', '', 'NB1-1', ''),
(6887, 'SUNDAY JOHN ty', '2000-12-24', '', '', 'HADAIJA', 'Kano', 'Male', 'Never', 'Divorced', 'Murder', '2000-03-14', 0, 'NB-76', '', '7869', ''),
(8756, 'Susan Daniel', '2020-04-15', '', '', 'GUMEL', 'Kano', 'Female', 'Bachelor Degree', 'Married', 'Murder', '2020-01-03', 0, 'NB-30', '', '3232', ''),
(9087, 'dem ade', '2020-12-24', '', '', 'KANO', 'Kano', 'Male', 'Bachelor Degree', 'Single', 'Theft', '2020-03-14', 0, 'NB-98', '', '7890', ''),
(1234560, 'SUNDAY James', '2000-12-24', '', '', 'KANO', 'Kano', 'Male', 'O level', 'Married', 'Murder', '2020-03-14', 0, 'NB1-1', '', '678', ''),
(9786575, 'Owino Kamau', '0000-00-00', '01/24/2014', '10/12/2016', '', '', '01', '04', '01', 'kill peopl', '0000-00-00', 0, '', '05', '88999777', 'LANGATA'),
(9869625, 'seyfgu', '0000-00-00', '02/23/1234', '01/21/1223', 'RONGAI', '01', '01', '01', '01', 'TEST', '0000-00-00', 0, '', '01', '666', 'LANGATA');

-- --------------------------------------------------------

--
-- Table structure for table `thistable`
--

CREATE TABLE IF NOT EXISTS `thistable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `thistable`
--


-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `National_id` int(16) NOT NULL,
  `File_num` varchar(16) NOT NULL,
  `From_prison` varchar(17) NOT NULL,
  `To_prison` varchar(18) NOT NULL,
  `Dateoftransfer` date NOT NULL,
  PRIMARY KEY (`National_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`National_id`, `File_num`, `From_prison`, `To_prison`, `Dateoftransfer`) VALUES
(1111, 'NBI-223', 'Kano', 'Bauchi', '2001-01-22'),
(2222, 'NB-15', 'SOKOTO', 'OYO', '1970-01-01'),
(6567, 'NBI-223', 'Abuja', 'Kwara', '2001-09-22'),
(8756, 'NB-15', 'Kano', 'Bauchi', '2002-07-12'),
(123456, 'NB-1234', 'LAGOS', 'KANO', '1970-01-01'),
(666544, '', 'LANGATA', 'SHIMOLATEWA', '2010-10-10'),
(966544, '', 'LANGATA', 'KODIAGA', '2010-10-10'),
(980977, 'NBI-89654', 'KODIAGA', 'KODIAGA', '2002-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Station_Name` varchar(20) NOT NULL,
  `VerificationProof` varchar(100) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_Id`, `Name`, `Address`, `City`, `Mobile`, `Email`, `Gender`, `BirthDate`, `UserName`, `Password`, `Station_Name`, `VerificationProof`) VALUES
(1, 'user', 'user', 'nairobi', 988887, 'user@user.com', 'male', '2013-11-04', 'visitor', 'visitor', 'user', 'user'),
(2, 'test', 'test', 'test', 87898888, 'test@gmail.com', 'Male', '2019-12-18', 'test', 'test', 'test', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `id` int(12) NOT NULL COMMENT 'national id',
  `fullname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateofvisit` varchar(25) NOT NULL,
  `timein` varchar(24) NOT NULL,
  `timeout` varchar(23) NOT NULL,
  `relationship` varchar(25) NOT NULL,
  `telephone` int(13) NOT NULL,
  `prisoner` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `fullname`, `address`, `dateofvisit`, `timein`, `timeout`, `relationship`, `telephone`, `prisoner`) VALUES
(0, '', '', '1970-01-01', '12:00am', '12:00am', 'Parent', 0, ''),
(2345, 'samuel', '', '2020-01-12', '12:00am', '3:30pm', 'Lawyer', 2147483647, 'asuker uiw'),
(4141, 'ujunwa simon', 'POLY', '2020-01-07', '2:00pm', '4:00pm', 'Prosecutor', 2147483647, 'Susan Daniel'),
(23456789, 'JUSTICE JAMES', 'HADAIJA', '2020-07-23', '3:30pm', '4:00pm', 'Prosecutor', 2147483647, 'Thomas Owino Kamau'),
(89999089, 'Emmillie', 'Rongai', '2015-02-12', '12:00am', '5:00pm', 'other', 2147483647, 'Qin Yun');

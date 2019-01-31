-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 01:51 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rozeeroti`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`email`, `password`) VALUES
('talha.nisar@ucp.edu.pk', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonno` varchar(255) NOT NULL,
  `issue` varchar(1000) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `phonno`, `issue`, `msg`) VALUES
('talha', 'talha@gmail.com', '+923331234567', 'useraccounts', 'Yes it is'),
('talha', 'talha', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('talha nisar', 'talha.nisar@ucp.edu.pk', '+923336344545', 'useraccounts', 'gdgdfsfsfsfsfsfsfs'),
('', '', '+92Code', 'Get Started', ''),
('43', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('123', '', '+92Code', 'Get Started', ''),
('iryei', 'tqw@gmail.com', '+92302434833', 'Get Started', ''),
('iryei', 'tqw@gmail.com', '+92Code434833', 'Get Started', 'ds'),
('rue', 'tyu@gmail.com', '+913017644545', 'employers', 'fdhfkd'),
('wq', 'tqrer@gmail.com', '+913019876543', 'employers', 'dkshdsk'),
('wq', 'tqw@gmail.com', '+913011234567', 'employers', 'fdf'),
('wq', 'tqw@gmail.com', '+913011234567', 'employers', 'fdf'),
('wq', 'tqw@gmail.com', '+913011234567', 'employers', 'fdf'),
('wq', 'tqw@gmail.com', '+913011234567', 'employers', 'fdf'),
('wq', 'tqw@gmail.com', '+913011234567', 'employers', 'fdf'),
('wq', 'tqw@gmail.com', '+913011234567', 'employers', 'fdf'),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', ''),
('yt', 'yt@gmail.com', '+953021234567', 'employers', 'dkskdjskds'),
('po', 'po@gmail.com', '+923029876543', 'employers', 'qww'),
('re', 're@gmail.com', '+923027654321', 'useraccounts', 'dhfhdkfd'),
('re2', 're2@gmail.com', '+923027654321', 'useraccounts', 'dhfhdkfd'),
('re5', 're5@gmail.com', '+923028765432', 'useraccounts', 'nvmncmv'),
('uy', 'uy@gmail.com', '+923023456789', 'professionals', 'dksjdsk'),
('', '', '+92Code', 'Get Started', ''),
('', '', '+92Code', 'Get Started', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE `jobseekers` (
  `emailapply` varchar(20) NOT NULL,
  `emailjob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`emailapply`, `emailjob`) VALUES
('gvbjhhg', ''),
('dfuhj', ''),
('sdfg', ''),
('sdfg', ''),
('kjsxdf', 'salma@gmail.com'),
('php', 'talha.nisar@ucp.edu.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('salman', 'ramzan'),
('tan', 'mushtaq'),
('salman', 'muhammad'),
('tan@gmail.com', 'qwer'),
('salmana', 'ramzan'),
('tana', 'mushtaq'),
('salman', 'muhammad'),
('pan@gmail.com', 'qwer'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisar@ucp.edu.pk', 'talhanisar'),
('talha.nisa@gmail.com', ''),
('talha.nisa@gmail.com', ''),
('talha.nisa@gmail.com', ''),
('talha.nisa@gmail.com', ''),
('ta@gmail.com', ''),
('', ''),
('', ''),
('uyu@gmail.com', ''),
('t@gmail.com', ''),
('tp@gmail.com', '1234'),
('to@gmail.com', '12345'),
('ti@gmail.com', '123456'),
('th@gmail.com', '1234567'),
('tl@gmail.com', '5432');

-- --------------------------------------------------------

--
-- Table structure for table `personalinformation`
--

CREATE TABLE `personalinformation` (
  `email` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `phonno` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalinformation`
--

INSERT INTO `personalinformation` (`email`, `firstname`, `lastname`, `dateofbirth`, `gender`, `nationality`, `phonno`, `password`) VALUES
('alihassan@gmail.com', 'ali', 'fd', '2009-10-05', 'male', 'pak', '+923336344545', '12345678'),
('salam@ucp.edu.pk', 'salman', 'ramzan', '2020-11-10', 'male', 'pak', '+923027456545', '789'),
('tal@gmail.com', 'sa', 'fd', '2012-02-02', 'male', 'pak', '+933025445332', '543'),
('talha.nisar@ucp.edu.pk', 'talha', 'nisar', '2010-01-02', 'male', 'pak', '+923336344545', '123456'),
('th@gmail.com', 'yt', 're', '2012-04-04', 'female', 'pak', '+943120987653', '1234567'),
('ti@gmail.com', 'tr', 're', '2010-02-02', 'female', 'pak', '+913021234567', '123456'),
('tl@gmail.com', 'iu', 'po', '2012-06-02', 'female', 'usa', '+933029876544', '5432'),
('to@gmail.com', 'wq', 'fd', '2014-03-06', 'male', 'pak', '+913011234567', '12345'),
('tp@gmail.com', 'lk', 'lk', '2010-03-05', 'male', 'pak', '+943101234567', '1234'),
('ty@gmail.com', 'trtri', 'eir', '2011-03-02', 'male', 'pak', '+933109753135', '2345'),
('pan72@gmail.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', '');

-- --------------------------------------------------------

--
-- Table structure for table `postajob`
--

CREATE TABLE `postajob` (
  `jobtitle` varchar(20) NOT NULL,
  `jobdescription` text NOT NULL,
  `skills` varchar(100) NOT NULL,
  `careerlevel` varchar(100) NOT NULL,
  `position` int(11) NOT NULL,
  `joblocation` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `qualification2` varchar(20) NOT NULL,
  `expmin` varchar(20) NOT NULL,
  `expmax` varchar(20) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phonno` varchar(20) NOT NULL,
  `city` varchar(25) NOT NULL,
  `cnic` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postajob`
--

INSERT INTO `postajob` (`jobtitle`, `jobdescription`, `skills`, `careerlevel`, `position`, `joblocation`, `qualification`, `qualification2`, `expmin`, `expmax`, `salary`, `gender`, `name`, `email`, `organization`, `password`, `phonno`, `city`, `cnic`) VALUES
('php', 'fmdld', 'php', 'professional', 3, 'lahore', 'master', 'high', '1', '5', '5,000-6,999', 'male', 'tr', 'ta1@gmail.com', '', '', '', '', ''),
('php', 'fmdld', 'php', 'professional', 3, 'lahore', 'master', 'high', '1', '5', '5,000-6,999', 'male', 'tr', 'ta2@gmail.com', '', '', '', '', ''),
('php', 'fmdld', 'php', 'professional', 3, 'lahore', 'master', 'high', '1', '5', '5,000-6,999', 'male', 'tr', 'ta@gmail.com', 'hanan', '', '+923017654321', 'islamabad', '3110426040149'),
('ios', 'hgggdg', 'php', 'student', 2, 'lahore', 'inter', 'exactly', 'min', 'max', '23,000-24,999', 'male', 'talha', 'talha.nisar@ucp.edu.pk', 'orea', 'talhanisar', '+92Code3336344545', 'lahore', '31104-2604014');

-- --------------------------------------------------------

--
-- Table structure for table `professionalskills`
--

CREATE TABLE `professionalskills` (
  `experience` varchar(50) NOT NULL,
  `desiresalary` varchar(20) NOT NULL,
  `career` varchar(50) NOT NULL,
  `jobtitles` varchar(100) NOT NULL,
  `workcity` varchar(50) NOT NULL,
  `proskills` varchar(11) NOT NULL,
  `workindustory` varchar(11) NOT NULL,
  `email1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professionalskills`
--

INSERT INTO `professionalskills` (`experience`, `desiresalary`, `career`, `jobtitles`, `workcity`, `proskills`, `workindustory`, `email1`) VALUES
('4', '20,000-20,999', 'professional', 'lfkdbdfmnlkdfj', 'vnjcxcfbhgfbh', 'advertismen', 'islamabad', 'oan72@gmail.com'),
('1', '7,000-8,999', 'student', 'php', 'php', 'advertismen', 'islamabad', 'talha.nisar@ucp.edu.pk'),
('3', '20,000-20,999', 'professional', 'php', 'web', 'accounting', 'lahore', 'talha.nisar@ucp.edu.pk'),
('2', '7,000-8,999', 'entrylevel', 'php', 'php', 'advertismen', 'islamabad', 'alihassan@gmail.com'),
('2', '9.000-19,999', 'entrylevel', 'php', 'web', 'advertismen', 'lahore', 'talha.nisar@ucp.edu.pk'),
('Select Experience', 'Select salary', 'Select career lavel', '', '', 'Select Indu', 'Select City', 'talha.nisar@ucp.edu.pk'),
('1', '9.000-19,999', 'entrylevel', 'php', 'hg', 'accounting', 'islamabad', 'talha.nisar@ucp.edu.pk'),
('1', '5,000-6,999', 'student', 'pph', 'gf', 'accounting', 'islamabad', 'talha.nisar@ucp.edu.pk'),
('2', '7,000-8,999', 'entrylevel', 'php', 'php,web,css', 'advertismen', 'islamabad', 'talha.nisar@ucp.edu.pk'),
('<1', '9.000-19,999', 'professional', 'java', 'web development', 'advertismen', 'islamabad', 'tal@gmail.com'),
('1', '5,000-6,999', 'student', 'php', '', 'cloth', 'lahore', 'talha.nisar@ucp.edu.pk'),
('1', '7,000-8,999', 'student', 'phpphp', 'web,mobile,ios', 'advertismen', 'lahore', 'talha.nisar@ucp.edu.pk'),
('2', '20,000-20,999', 'entrylevel', 'php', 'web', 'advertismen', 'islamabad', 'talha.nisar@ucp.edu.pk'),
('1', '5,000-6,999', 'professional', 'php', 'web', 'advertismen', 'islamabad', 'talha.nisar@ucp.edu.pk'),
('1', '20,000-20,999', 'entrylevel', 'php', 'web', 'cloth', 'lahore', 'ty@gmail.com'),
('1', '20,000-20,999', 'entrylevel', 'php', 'web', 'cloth', 'lahore', 'ty@gmail.com'),
('1', '9.000-19,999', 'entrylevel', 'php', 'web', 'accounting', 'islamabad', 'tp@gmail.com'),
('<1', '7,000-8,999', 'Select career lavel', 'php', 'web', 'advertismen', 'lahore', 'to@gmail.com'),
('<1', '7,000-8,999', 'Select career lavel', 'php', 'web', 'advertismen', 'lahore', 'to@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'professional', 'php', 'web', 'arts', 'karachi', 'ti@gmail.com'),
('<1', '7,000-8,999', 'entrylevel', 'php', 'web', 'advertismen', 'islamabad', 'th@gmail.com'),
('<1', '7,000-8,999', 'entrylevel', 'php', 'web', 'advertismen', 'islamabad', 'th@gmail.com'),
('1', '5,000-6,999', 'entrylevel', 'php', 'web', 'arts', 'lahore', 'tl@gmail.com'),
('1', '5,000-6,999', 'entrylevel', 'php', 'web', 'arts', 'lahore', 'tl@gmail.com'),
('1', '5,000-6,999', 'entrylevel', 'php', 'web', 'arts', 'lahore', 'tl@gmail.com'),
('1', '5,000-6,999', 'entrylevel', 'php', 'web', 'arts', 'lahore', 'tl@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `qualfication`
--

CREATE TABLE `qualfication` (
  `BA/BS` varchar(20) NOT NULL,
  `bcgpa` varchar(20) NOT NULL,
  `MA/MS` varchar(20) NOT NULL,
  `mcgpa` varchar(20) NOT NULL,
  `carrerlevel` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualfication`
--

INSERT INTO `qualfication` (`BA/BS`, `bcgpa`, `MA/MS`, `mcgpa`, `carrerlevel`, `email`) VALUES
('BS', '3.0', 'MS', '2.0', 'professional', 'talha@gmail.com'),
('', '', '', '', '', 'talha.nisar@ucp.edu.pk'),
('', '', '', '', '', 'talha.nisar@ucp.edu.pk'),
('', '', '', '', '', 'alihassan@gmail.com'),
('', '', '', '', '', 'talha.nisar@ucp.edu.pk'),
('PK\0\0\0\0\0!\02ï¿½oW', 'ï¿½(ï¿½\0\0\0\0\0\0\0\0\0\0', 'ï¿½ï¿½{ï¿½1ï¿½ï¿½Úš', 'ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½{ï', 'ï¿½(ï¿½\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'talha.nisar@ucp.edu.pk'),
('PK\0\0\0\0\0!\0ß¤ï¿½l', '\0\0\0[Content_Type', 'ï¿½(ï¿½\0\0\0\0\0\0\0\0\0\0', 'ï¿½(ï¿½\0\0\0\0\0\0\0\0\0\0', 'ï¿½(ï¿½\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'talha.nisar@ucp.edu.pk'),
('', '', '', '', '', 'talha.nisar@ucp.edu.pk'),
('PK\0\0\0\0\0!\0ß¤ï¿½l', '\0\0\0[Content_Type', 'ï¿½(ï¿½\0\0\0\0\0\0\0\0\0\0', 'ï¿½(ï¿½\0\0\0\0\0\0\0\0\0\0', 'ï¿½(ï¿½\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tal@gmail.com'),
('', '', '', '', '', 'talha.nisar@ucp.edu.pk'),
('', '', '', '', '', 'talha.nisar@ucp.edu.pk'),
('', '', '', '', '', 'talha.nisar@ucp.edu.pk'),
('', '', '', '', '', 'talha.nisar@ucp.edu.pk'),
('', '', '', '', '', 'ty@gmail.com'),
('', '', '', '', '', 'tp@gmail.com'),
('', '', '', '', '', 'to@gmail.com'),
('', '', '', '', '', 'ti@gmail.com'),
('', '', '', '', '', 'th@gmail.com'),
('', '', '', '', '', 'tl@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personalinformation`
--
ALTER TABLE `personalinformation`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `postajob`
--
ALTER TABLE `postajob`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `professionalskills`
--
ALTER TABLE `professionalskills`
  ADD KEY `email` (`email1`);

--
-- Indexes for table `qualfication`
--
ALTER TABLE `qualfication`
  ADD KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `professionalskills`
--
ALTER TABLE `professionalskills`
  ADD CONSTRAINT `professionalskills_ibfk_1` FOREIGN KEY (`email1`) REFERENCES `personalinformation` (`email`);

--
-- Constraints for table `qualfication`
--
ALTER TABLE `qualfication`
  ADD CONSTRAINT `qualfication_ibfk_1` FOREIGN KEY (`email`) REFERENCES `personalinformation` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

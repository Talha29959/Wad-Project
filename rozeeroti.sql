-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 01:30 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`email`, `password`) VALUES
('uman@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
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
('uman', 'uman@gmail.com', '3101234567+91', 'useraccounts', 'Yes it is');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE IF NOT EXISTS `jobseekers` (
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
('kjsxdf', 'salma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('salman', 'ramzan'),
('uman', 'mushtaq'),
('salman', 'muhammad'),
('uman@gmail.com', 'qwer'),
('salman', 'ramzan'),
('uman', 'mushtaq'),
('salman', 'muhammad'),
('uman@gmail.com', 'qwer');

-- --------------------------------------------------------

--
-- Table structure for table `personalinformation`
--

CREATE TABLE IF NOT EXISTS `personalinformation` (
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
('aksdjf@xdjf.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('asdgf@xgv.gfv', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('dfgd@sdfg.drg', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('dfgef@sdff.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('dlfdfhg@dfgs.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('dmsgbfj@sdfg.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('dsflkgkodsjhn@xdfmgn.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('kjgkdf@xfdgd.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('kldkjfg@dfgd.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('ldkjfgnjk@dhgd.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('salam@ucp.edu.pk', 'salman', 'ramzan', '2020-11-10', 'male', 'pak', '+923027456545', '789'),
('sdflkjgQ@kxjv.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('skaldfjg@dfg.vom', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('skdjfgh@sdfg.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('skdljf@kdsj.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('u@gmail.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('u@gmail.xon', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('uma@gmail.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('uman@asdd.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('uman@ghk.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('uman@gmail.com', 'asgfe', 'sertre', '0000-00-00', 'female', 'uk', '+933021234567', '123'),
('umanmushtaq72@gmail.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('umanmushtaq@gmail.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('usman@gma.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', ''),
('ussman@gmail.com', '', '', '0000-00-00', 'Select Gen', 'pak', '+92Code', '');

-- --------------------------------------------------------

--
-- Table structure for table `postajob`
--

CREATE TABLE IF NOT EXISTS `postajob` (
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
('Database', 'dkfjndfj', 'sdfg', 'entrylevel', 4, 'lahore', 'bachelor', 'high', '2', '4', '20,000-20,999', 'female', 'salma', 'salma@gmail.com', 'skjdvb', 'asf', '+923101234567', 'sargodha', '1234657891234');

-- --------------------------------------------------------

--
-- Table structure for table `professionalskills`
--

CREATE TABLE IF NOT EXISTS `professionalskills` (
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
('4', '20,000-20,999', 'professional', 'lfkdbdfmnlkdfj', 'vnjcxcfbhgfbh', 'advertismen', 'islamabad', 'umanmushtaq72@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `qualfication`
--

CREATE TABLE IF NOT EXISTS `qualfication` (
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
('BS', '3.0', 'MS', '2.0', 'professional', 'umanmushtaq72@gmail.com');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

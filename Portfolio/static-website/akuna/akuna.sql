-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 01:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akuna`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `akuna_admins` (
`a_id` int(11) NOT NULL,
  `a_code` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `akuna_admins` (`a_id`, `a_code`, `first_name`, `last_name`, `email`, `password`, `department`, `date_added`, `date_updated`) VALUES
(1, 'HRADMIN', 'Prokotong', 'Scrokotong', 'prokotong@gmail.com', '8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62', 'Human Resource', '2016-04-01', '0000-00-00'),
(2, 'MDADMIN', 'Colontoy', 'Krokotong', 'colontoy@gmail.com', '8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62', 'Marketing', '2016-04-01', '0000-00-00'),
(3, 'HRSADMIN', 'Superadmin', 'Superadmin', 'hrsuperadmin@akuna.com', '8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62', 'Human Resource', '2016-04-03', '0000-00-00'),
(5, 'HRADMIN', 'Alaking', 'Alak', 'alaking@gmail.com', '8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62', 'Human Resources', '0000-00-00', '0000-00-00'),
(7, 'MDSADMIN', 'mdsuperadmin', 'mdsuperadmin', 'mdsuperadmin@akuna.com', '8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62', 'Marketing', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `akuna_members` (
`m_id` int(11) NOT NULL,
  `m_code` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `date_signed` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `akuna_members` (`m_id`, `m_code`, `first_name`, `last_name`, `gender`, `contact`, `shipping_address`, `permanent_address`, `email`, `password`, `zip_code`, `date_signed`, `date_updated`) VALUES
(2, 'mem-15', 'Chad Nico', 'Lazarra', 'Male', '09193156802', 'R. Magsaysay Sta. Mesa Manila', 'R. Magsaysay  Sta. Mesa Manila', 'shagilazarra@gmail.com', '8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62', '1016', '2016-04-01', '2016-04-03'),
(3, '', 'Zenki', 'Bajula', 'Male', '09193156802', 'Brgy. Balic Balic, Sampaloc Manila', 'Brgy. Balic Balic, Sampaloc Manila', 'zenki@gmail.com', '8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62', '1011', '2016-04-03', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `akuna_admins`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `akuna_members`
 ADD PRIMARY KEY (`m_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `akuna_admins`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `akuna_members`
MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

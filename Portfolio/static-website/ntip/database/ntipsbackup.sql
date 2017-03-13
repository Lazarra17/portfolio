-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2015 at 04:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ntipsamplee`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
`attendance_id` int(11) NOT NULL,
  `emp_id_no` varchar(255) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `week` varchar(255) NOT NULL,
  `in_am` varchar(255) NOT NULL,
  `out_am` varchar(255) NOT NULL,
  `in_pm` varchar(255) NOT NULL,
  `out_pm` varchar(255) NOT NULL,
  `in_overtime` varchar(255) NOT NULL,
  `out_overtime` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `emp_id_no`, `emp_name`, `date`, `week`, `in_am`, `out_am`, `in_pm`, `out_pm`, `in_overtime`, `out_overtime`) VALUES
(121, '2015-10001', 'Anna Dee HR', '2015-07-01', 'WED', '07:59', '12:00', '12:54', '17:00', ' ', ' '),
(122, '2015-10001', 'Anna Dee HR', '2015-07-16', 'THU', '08:00', '12:00', '12:54', '17:00', ' ', ' '),
(123, '2015-10001', 'Anna Dee HR', '2015-07-02', 'THU', '07:59', '12:00', '12:54', '17:00', ' ', ' '),
(124, '2015-10001', 'Anna Dee HR', '2015-07-17', 'FRI', ' ', ' ', ' ', ' ', ' ', ' '),
(125, '2015-10001', 'Anna Dee HR', '2015-07-03', 'FRI', '07:59', '12:00', '12:54', '17:00', ' ', ' '),
(126, '2015-10001', 'Anna Dee HR', '2015-07-18', 'SAT', ' ', ' ', ' ', ' ', ' ', ' '),
(127, '2015-10001', 'Anna Dee HR', '2015-07-04', 'SAT', '07:59', '12:00', '12:54', '17:00', ' ', ' '),
(128, '2015-10001', 'Anna Dee HR', '2015-07-19', 'SUN', 'Rest ', '', '', '', '', ''),
(129, '2015-10001', 'Anna Dee HR', '2015-07-05', 'SUN', 'Rest ', '', '', '', '', ''),
(130, '2015-10001', 'Anna Dee HR', '2015-07-20', 'MON', ' ', ' ', ' ', ' ', ' ', ' '),
(131, '2015-10001', 'Anna Dee HR', '2015-07-06', 'MON', '07:59', '12:00', '12:54', '17:00', ' ', ' '),
(132, '2015-10001', 'Anna Dee HR', '2015-07-21', 'TUE', ' ', ' ', ' ', ' ', ' ', ' '),
(133, '2015-10001', 'Anna Dee HR', '2015-07-07', 'TUE', '07:59', '12:00', '12:54', '17:00', ' ', ' '),
(134, '2015-10001', 'Anna Dee HR', '2015-07-22', 'WED', ' ', ' ', ' ', ' ', ' ', ' '),
(135, '2015-10001', 'Anna Dee HR', '2015-07-08', 'WED', '07:59', '12:00', '12:54', '17:00', ' ', ' '),
(136, '2015-10001', 'Anna Dee HR', '2015-07-23', 'THU', ' ', ' ', ' ', ' ', ' ', ' '),
(137, '2015-10001', 'Anna Dee HR', '2015-07-09', 'THU', '08:00', '12:00', '12:54', '17:00', ' ', ' '),
(138, '2015-10001', 'Anna Dee HR', '2015-07-24', 'FRI', ' ', ' ', ' ', ' ', ' ', ' '),
(139, '2015-10001', 'Anna Dee HR', '2015-07-10', 'FRI', '08:00', '12:00', '12:54', '17:00', ' ', ' '),
(140, '2015-10001', 'Anna Dee HR', '2015-07-25', 'SAT', ' ', ' ', ' ', ' ', ' ', ' '),
(141, '2015-10001', 'Anna Dee HR', '2015-07-11', 'SAT', '08:00', '12:00', '12:54', '17:00', ' ', ' '),
(142, '2015-10001', 'Anna Dee HR', '2015-07-26', 'SUN', 'Rest ', '', '', '', '', ''),
(143, '2015-10001', 'Anna Dee HR', '2015-07-12', 'SUN', 'Rest ', '', '', '', '', ''),
(144, '2015-10001', 'Anna Dee HR', '2015-07-27', 'MON', ' ', ' ', ' ', ' ', ' ', ' '),
(145, '2015-10001', 'Anna Dee HR', '2015-07-13', 'MON', '08:00', '12:00', '12:54', '17:00', ' ', ' '),
(146, '2015-10001', 'Anna Dee HR', '2015-07-28', 'TUE', ' ', ' ', ' ', ' ', ' ', ' '),
(147, '2015-10001', 'Anna Dee HR', '2015-07-14', 'TUE', '08:00', '12:00', '12:54', '17:00', ' ', ' '),
(148, '2015-10001', 'Anna Dee HR', '2015-07-29', 'WED', ' ', ' ', ' ', ' ', ' ', ' '),
(149, '2015-10001', 'Anna Dee HR', '2015-07-15', 'WED', '08:00', '12:00', '12:54', '17:00', ' ', ' '),
(150, '2015-10001', 'Anna Dee HR', '2015-07-30', 'THU', ' ', ' ', ' ', ' ', ' ', ' '),
(151, '2015-10002', 'Chad Lazarra', '2015-07-01', 'WED', '08:00', '12:00', '12:54', '17:00', ' ', ' '),
(152, '2015-10002', 'Chad Lazarra', '2015-07-16', 'THU', ' ', ' ', ' ', ' ', ' ', ' '),
(153, '2015-10002', 'Chad Lazarra', '2015-07-02', 'THU', '07:59', ' ', ' ', ' ', ' ', ' '),
(154, '2015-10002', 'Chad Lazarra', '2015-07-17', 'FRI', ' ', ' ', ' ', ' ', ' ', ' '),
(155, '2015-10002', 'Chad Lazarra', '2015-07-03', 'FRI', '07:59', ' ', ' ', ' ', ' ', ' '),
(156, '2015-10002', 'Chad Lazarra', '2015-07-18', 'SAT', ' ', ' ', ' ', ' ', ' ', ' '),
(157, '2015-10002', 'Chad Lazarra', '2015-07-04', 'SAT', '07:59', ' ', ' ', ' ', ' ', ' '),
(158, '2015-10002', 'Chad Lazarra', '2015-07-19', 'SUN', 'Rest ', '', '', '', '', ''),
(159, '2015-10002', 'Chad Lazarra', '2015-07-05', 'SUN', 'Rest ', '', '', '', '', ''),
(160, '2015-10002', 'Chad Lazarra', '2015-07-20', 'MON', '07:59', ' ', ' ', ' ', ' ', ' '),
(161, '2015-10002', 'Chad Lazarra', '2015-07-06', 'MON', '07:59', ' ', ' ', ' ', ' ', ' '),
(162, '2015-10002', 'Chad Lazarra', '2015-07-21', 'TUE', '07:59', ' ', ' ', ' ', ' ', ' '),
(163, '2015-10002', 'Chad Lazarra', '2015-07-07', 'TUE', ' ', ' ', ' ', ' ', ' ', ' '),
(164, '2015-10002', 'Chad Lazarra', '2015-07-22', 'WED', '07:59', ' ', ' ', ' ', ' ', ' '),
(165, '2015-10002', 'Chad Lazarra', '2015-07-08', 'WED', ' ', ' ', ' ', ' ', ' ', ' '),
(166, '2015-10002', 'Chad Lazarra', '2015-07-23', 'THU', ' ', ' ', ' ', ' ', ' ', ' '),
(167, '2015-10002', 'Chad Lazarra', '2015-07-09', 'THU', ' ', ' ', ' ', ' ', ' ', ' '),
(168, '2015-10002', 'Chad Lazarra', '2015-07-24', 'FRI', ' ', ' ', ' ', ' ', ' ', ' '),
(169, '2015-10002', 'Chad Lazarra', '2015-07-10', 'FRI', ' ', ' ', ' ', ' ', ' ', ' '),
(170, '2015-10002', 'Chad Lazarra', '2015-07-25', 'SAT', ' ', ' ', ' ', ' ', ' ', ' '),
(171, '2015-10002', 'Chad Lazarra', '2015-07-11', 'SAT', ' ', ' ', ' ', ' ', ' ', ' '),
(172, '2015-10002', 'Chad Lazarra', '2015-07-26', 'SUN', 'Rest ', '', '', '', '', ''),
(173, '2015-10002', 'Chad Lazarra', '2015-07-12', 'SUN', 'Rest ', '', '', '', '', ''),
(174, '2015-10002', 'Chad Lazarra', '2015-07-27', 'MON', ' ', ' ', ' ', ' ', ' ', ' '),
(175, '2015-10002', 'Chad Lazarra', '2015-07-13', 'MON', ' ', ' ', ' ', ' ', ' ', ' '),
(176, '2015-10002', 'Chad Lazarra', '2015-07-28', 'TUE', ' ', ' ', ' ', ' ', ' ', ' '),
(177, '2015-10002', 'Chad Lazarra', '2015-07-14', 'TUE', ' ', ' ', ' ', ' ', ' ', ' '),
(178, '2015-10002', 'Chad Lazarra', '2015-07-29', 'WED', ' ', ' ', ' ', ' ', ' ', ' '),
(179, '2015-10002', 'Chad Lazarra', '2015-07-15', 'WED', ' ', ' ', ' ', ' ', ' ', ' '),
(180, '2015-10002', 'Chad Lazarra', '2015-07-30', 'THU', ' ', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE IF NOT EXISTS `audit_trail` (
`at_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `activity` text NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `date_time_in` varchar(25) NOT NULL,
  `date_time_out` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`at_id`, `admin_name`, `department`, `activity`, `ip_address`, `date_time_in`, `date_time_out`) VALUES
(23, 'Chad Lazarra', 'Production', 'Time logged in: 08-12-2015 06:07:34pm+View.+Time logged out: 08-12-2015 06:09:49pm+Time logged out: 08-12-2015 06:13:04pm', '::1', '08-12-2015 06:07:34pm', '08-12-2015 06:13:04pm'),
(24, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-12-2015 06:16:26pm+View.+Approved request leaved+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Searched Employee+Updated an employee account.+Updated an employee account.+Updated an employee account.+Updated an employee account.+Generate all employee attendance report+Time logged out: 08-12-2015 06:53:45pm', '::1', '08-12-2015 06:16:26pm', '08-12-2015 06:53:45pm'),
(25, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-12-2015 06:53:56pm+View.+Time logged out: 08-12-2015 06:58:00pm+Time logged out: 08-12-2015 07:00:50pm+Time logged out: 08-12-2015 07:02:13pm+Time logged out: 08-12-2015 07:11:57pm', '::1', '08-12-2015 06:53:56pm', '08-12-2015 07:11:57pm'),
(26, 'Chad Lazarra', 'Production', 'Time logged in: 08-12-2015 07:12:02pm+View.+Generate sales reports weekly report', '::1', '08-12-2015 07:12:02pm', ''),
(27, 'Chad Lazarra', 'Production', 'Time logged in: 08-13-2015 07:43:26pm+View.+Generate sales report monthly', '::1', '08-13-2015 07:43:26pm', ''),
(28, 'Chad Lazarra', 'Production', 'Time logged in: 08-13-2015 07:45:08pm+View.+Generate sales report monthly+Generate sales report monthly+Generate sales report monthly+Time logged out: 08-13-2015 08:21:16pm', '::1', '08-13-2015 07:45:07pm', '08-13-2015 08:21:16pm'),
(29, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-13-2015 08:21:19pm+View.+Time logged out: 08-13-2015 08:25:56pm', '::1', '08-13-2015 08:21:18pm', '08-13-2015 08:25:56pm'),
(30, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-13-2015 08:26:00pm+View.+Added new admin', '::1', '08-13-2015 08:26:00pm', ''),
(31, 'Sprokotong Colontoy', 'superadmin', 'Time logged in: 08-13-2015 08:40:27pm+View.+Time logged out: 08-13-2015 08:40:33pm+Added new admin', '::1', '08-13-2015 08:40:27pm', '08-13-2015 08:40:33pm'),
(32, 'Raha Genesis Mendoza', 'Production', 'Time logged in: 08-13-2015 09:08:32pm+View.+Time logged out: 08-13-2015 09:12:29pm', '::1', '08-13-2015 09:08:32pm', '08-13-2015 09:12:29pm'),
(33, 'Raymond Mendoza Mariano', 'Human Resources', 'Time logged in: 08-13-2015 09:12:34pm+View.+Time logged out: 08-13-2015 09:15:42pm', '::1', '08-13-2015 09:12:34pm', '08-13-2015 09:15:43pm'),
(34, 'Raha Genesis Mendoza', 'Production', 'Time logged in: 08-13-2015 09:15:55pm+View.+Time logged out: 08-13-2015 09:17:46pm', '::1', '08-13-2015 09:15:55pm', '08-13-2015 09:17:46pm'),
(35, 'Raha Genesis Mendoza', 'Production', 'Time logged in: 08-13-2015 09:17:51pm+View.', '::1', '08-13-2015 09:17:50pm', ''),
(36, 'Raha Genesis Mendoza', 'Production', 'Time logged in: 08-13-2015 09:19:25pm+View.+Time logged out: 08-13-2015 09:28:00pm', '::1', '08-13-2015 09:19:25pm', '08-13-2015 09:28:00pm'),
(37, 'Chad Lazarra', 'Production', 'Time logged in: 08-13-2015 09:28:06pm+View.+Generate sales report monthly+Time logged out: 08-13-2015 10:24:47pm', '::1', '08-13-2015 09:28:06pm', '08-13-2015 10:24:47pm'),
(38, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-13-2015 10:24:53pm+View.+Time logged out: 08-13-2015 10:26:08pm', '::1', '08-13-2015 10:24:53pm', '08-13-2015 10:26:08pm'),
(39, 'Chad Lazarra', 'Production', 'Time logged in: 08-13-2015 10:26:13pm+View.+Time logged out: 08-13-2015 10:26:26pm', '::1', '08-13-2015 10:26:13pm', '08-13-2015 10:26:26pm'),
(40, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-13-2015 10:35:37pm+View.+Updated customer account of Mark Jonald Lazarra at 1439476552+Updated customer account of Mark Jonald Lazarra at 10:37:35pm+Time logged out: 08-13-2015 10:43:54pm', '::1', '08-13-2015 10:35:37pm', '08-13-2015 10:43:54pm'),
(41, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-13-2015 10:44:00pm+View.+Deleted an employee record 10:48:25pm+Deleted an employee record Chad Lazarra at10:49:55pm+Approved request leaved of Anna Dee Osias Lazarra; Employee No: 2015-10001 by Alvin Ellise at 11:04:03pm+Time logged out: 08-13-2015 11:40:22pm', '::1', '08-13-2015 10:44:00pm', '08-13-2015 11:40:22pm'),
(42, 'Sprokotong Colontoy', 'superadmin', 'Time logged in: 08-13-2015 11:40:26pm+View.+Time logged out: 08-13-2015 11:40:28pm', '::1', '08-13-2015 11:40:26pm', '08-13-2015 11:40:29pm'),
(43, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-13-2015 11:40:51pm+View.+Deleted a product record: Product no: 150001, Product Name: Block Ice at 11:43:30pm+Time logged out: 08-13-2015 11:46:15pm', '::1', '08-13-2015 11:40:51pm', '08-13-2015 11:46:15pm'),
(44, 'Chad Lazarra', 'Production', 'Time logged in: 08-13-2015 11:46:26pm+View.+Generate a receipt of order no: 15247702, name: Chad Nico Lazarra at11:55:19pm+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 11:58:45pm+Generate a receipt+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 11:59:12pm+Generate a receipt+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 11:59:31pm+Generate a receipt+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 11:59:40pm+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 12:05:20am+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 12:05:37am+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 12:05:55am+Generate a receipt+Generate a receipt+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 12:06:50am+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 12:07:02am+Deleted an order record: order no: 15247709; customer name: +Deleted an order record: order no: 15247709; customer name: +Deleted an order record: order no: 15247708; customer name: +Deleted an order record: order no: 15247708; customer name: Nico Kamlon+Deleted an order record: order no: 15247708; customer name: Nico Kamlon+Deleted an order record: order no: 15247708; customer name: Nico Kamlon+Searched an order record: lazarra at12:29:46am+Searched an order record: shagilazarra@yahoo.com at12:29:50am+Searched an order record: shagilazarra@yahoo.com at12:30:24am+Searched an order record: shagilazarra@yahoo.com at12:30:38am+Searched an order record: shagilazarra@yahoo.com at12:30:44am+Searched an order record: shagilazarra@yahoo.com at12:30:49am+Searched an order record: shagilazarra@yahoo.com at12:30:53am+Time logged out: 08-14-2015 01:40:31pm', '::1', '08-13-2015 11:46:26pm', '08-14-2015 01:40:31pm'),
(45, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-14-2015 01:40:37pm+View.', '::1', '08-14-2015 01:40:37pm', ''),
(46, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-14-2015 01:55:37pm+View.+Time logged out: 08-14-2015 02:10:06pm', '::1', '08-14-2015 01:55:37pm', '08-14-2015 02:10:06pm'),
(47, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 02:10:10pm+View.+Searched customer lazarra at 02:15:06pm+Searched customer lazarra at 02:15:17pm+Searched customer lazarra at 02:15:42pm+Searched customer lazarra at 02:15:48pm+Searched customer lazarra at 02:15:58pm+Searched customer lazarra at 02:16:01pm+Searched customer lazarra at 02:16:06pm+Searched an order record: asdf at02:21:55pm+Searched an order record: lazarra at02:22:04pm+Searched an order record: chad nico lazarra at02:22:10pm+Generate customer list report at 02:25:26pm+Generate orders list report at02:25:31pm+Generate product list report at 02:25:36pm+Time logged out: 08-14-2015 02:28:08pm', '::1', '08-14-2015 02:10:10pm', '08-14-2015 02:28:08pm'),
(48, 'Chad Lazarra', 'Production', 'Time logged in: 08-14-2015 02:28:13pm+View.+Searched Employee  chad at 02:28:32pm+Searched Employee  chad at 02:28:53pm+Searched Employee  chad at 02:28:59pm+Time logged out: 08-14-2015 02:32:04pm+Searched an order record: chad nico lazarra at02:32:22pm+Searched an order record: chad nico lazarra at02:33:00pm+Searched an order record: chad nico lazarra at02:33:13pm+Searched an order record: chad nico lazarra at02:33:32pm+Searched an order record: chad nico lazarra at02:33:38pm+Generate a receipt of order no: 15247702 for Chad Nico Lazarra at 02:36:46pm+Generate sales reports weekly report at 02:37:17pm', '::1', '08-14-2015 02:28:13pm', '08-14-2015 02:32:04pm'),
(49, 'Raha Genesis Mendoza', 'Production', 'Time logged in: 08-14-2015 02:37:28pm+View.+Generate sales reports weekly report at 02:37:35pm+Time logged out: 08-14-2015 02:55:23pm', '::1', '08-14-2015 02:37:28pm', '08-14-2015 02:55:24pm'),
(50, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 02:55:30pm+View.+Deleted an customer account: Client ID: 3; Customer Name: +Deleted an customer account: Client ID: 4; Customer Name: +Deleted an customer account: Client ID: 3; Customer Name: Mark Jonald Lazarra+Time logged out: 08-14-2015 03:01:30pm', '::1', '08-14-2015 02:55:29pm', '08-14-2015 03:01:30pm'),
(51, 'Sprokotong Colontoy', 'superadmin', 'Time logged in: 08-14-2015 03:01:34pm+View.+Time logged out: 08-14-2015 03:24:13pm', '::1', '08-14-2015 03:01:34pm', '08-14-2015 03:24:13pm'),
(52, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-14-2015 03:24:30pm+View.+Time logged out: 08-14-2015 03:24:41pm', '::1', '08-14-2015 03:24:30pm', '08-14-2015 03:24:41pm'),
(53, 'Alvin Ellise', 'Human Resource', '+Time logged out: 08-14-2015 03:30:41pm', '::1', '08-14-2015 03:24:50pm', '08-14-2015 03:30:41pm'),
(54, 'Jessen Ricafort', 'Marketing', '+View.', '::1', '08-14-2015 03:30:47pm', '08-14-2015 03:36:30pm'),
(55, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 03:36:34pm', '::1', '08-14-2015 03:36:34pm', ''),
(56, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 03:37:11pm+View.', '::1', '08-14-2015 03:37:11pm', '08-14-2015 03:37:29pm'),
(57, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 03:42:08pm+View.', '::1', '08-14-2015 03:42:08pm', ''),
(58, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 03:42:14pm+View.', '::1', '08-14-2015 03:42:14pm', '08-14-2015 03:50:17pm'),
(59, 'Jessen Ricafort', 'Marketing', '', '::1', '08-14-2015 03:50:29pm', ''),
(60, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 03:50:35pm+View.', '::1', '08-14-2015 03:50:35pm', '08-14-2015 03:51:58pm'),
(61, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 03:53:39pm+View.', '::1', '08-14-2015 03:53:39pm', '08-14-2015 03:59:04pm'),
(62, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 03:59:38pm+Updated a product record: Product No: 150001; Product Name: Block Ice at 03:59:48pm', '::1', '08-14-2015 03:59:38pm', ''),
(63, 'Jessen Ricafort', 'Marketing', 'Time logged in: 08-14-2015 04:00:05pm+Updated a product record: Product No: 150001; Product Name: Block Ice at 04:00:32pm', '::1', '08-14-2015 04:00:05pm', '08-14-2015 07:10:37pm'),
(64, 'Chad Lazarra', 'Production', 'Time logged in: 08-14-2015 07:10:42pm', '::1', '08-14-2015 07:10:42pm', '08-14-2015 07:27:45pm'),
(65, 'Alvin Ellise', 'Human Resource', 'Time logged in: 08-14-2015 07:27:50pm+View.+Updated 2015-- employees attendance at 07:28:22pm+Updated 2015-07-01 employees attendance at 07:30:32pm+Updated July 2015 employees attendance at 07:35:31pm', '::1', '08-14-2015 07:27:50pm', '08-14-2015 07:37:25pm'),
(66, 'Chad Lazarra', 'Production', 'Time logged in: 08-14-2015 07:37:31pm+View.+Generate sales report monthly at 07:37:42pm+Generate sales reports weekly report at 07:38:41pm', '::1', '08-14-2015 07:37:31pm', '08-14-2015 07:44:12pm'),
(67, 'Sprokotong Colontoy', 'superadmin', 'Time logged in: 08-14-2015 07:44:17pm+View.', '::1', '08-14-2015 07:44:17pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customer_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(390) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `date_created` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `password`, `fname`, `lname`, `address`, `gender`, `city`, `contact`, `date_created`, `email`, `type`) VALUES
(3, 'nicoyah', '5777b2c683b11b405a7613bba1fea713e35c41b9c736a8d66e5485606da6c1c3', 'Mark Jonald', 'Lazarra', 'Sta. Mesa Manila', 'Male', '', '09091854874', '2015-06-22', 'shagilazarra@yahoo.com', 'Customer'),
(4, 'Ianyah', '23e60e56807eb22110068d2b6862bd4a5c8b7f8d495148160c6e71a522ac5ad5', 'Ian', 'Lazarra', 'Sta. MEsa', '', '', '12121', '2015-06-23', 'ianyah@yahoo.com', 'Customer'),
(5, 'Royss', 'bf56e336bcca59ddc44142ccd70c9168e08c3227e8a7bf41cc7fdb55a182152d', 'Royss', 'Roys', 'Sta. MEsa', 'Male', '', '094874334368', '2015-06-23', 'roys@yahoo.com', 'Customer'),
(16, 'colontoy', 'cog3cSTWpgZsI', 'juan', 'colontoy', 'adffdsf', 'Male', '', '121212', '2015-07-08', 'colontoy@yahoo.com', 'Customer'),
(17, 'larry jone', '24167f88af3dc8cad0197d2235bc2f90b91a5b9f15dc8336899bc623a393d883', 'Larry Joe', 'Magno', '844 Rosarito St., Sampaloc, Manila', 'Male', '', '09056166941', '2015-07-31', 'magnolarryjoe@yahoo.com', 'Customer'),
(18, 'james', '119c9ae6f9ca741bd0a76f87fba0b22cab5413187afb2906aa2875c38e213603', 'james', 'james', 'sta. catalina city', 'Male', '', '09191', '2015-08-06', 'lazarra@yahoo.com', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`emp_id` int(11) NOT NULL,
  `emp_id_no` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(60) NOT NULL,
  `region` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zip_code` varchar(6) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `position` varchar(20) NOT NULL,
  `date_hired` date NOT NULL,
  `salary` varchar(6) NOT NULL,
  `status` varchar(40) NOT NULL,
  `date_added` date NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_id_no`, `username`, `password`, `first_name`, `last_name`, `middle_name`, `gender`, `birthday`, `address`, `region`, `city`, `zip_code`, `contact`, `email`, `department`, `position`, `date_hired`, `salary`, `status`, `date_added`, `type`) VALUES
(32, '2015-10002', 'yahyah', '19513fdc9da4fb72a4a05eb66917548d3c90ff94d5419e1f2363eea89dfee1dd', 'Chad', 'Lazarra', 'Nico', 'Male', '2015-01-01', 'Sta. Mesa', 'Manila', 'Manila', '1016', '09193156802', 'shagilazarra@yahoo.com', 'HR', 'Office Manager', '2015-10-10', '2000', 'Active', '2015-08-12', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
`guest_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `date_created` date NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `fname`, `lname`, `email`, `gender`, `city`, `address`, `contact`, `date_created`, `type`) VALUES
(1, 'Chad Nico', 'Lazarra', 'shagilazarra@yahoo.com', 'Male', 'Manila', 'Sta. Mesa Manila', '09193156802', '2015-08-11', 'Customer'),
(2, 'Nico', 'Kamlon', 'kamlpn@yahoo.com', 'Male', 'Sta. Rosa', 'Sampalok Manila', '09191', '2015-08-12', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `leave_message`
--

CREATE TABLE IF NOT EXISTS `leave_message` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_message`
--

INSERT INTO `leave_message` (`id`, `email`, `date`, `message`) VALUES
(1, 'anadf@yahoo.com', '2015-08-12', 'Your request has been granted.'),
(2, 'anadf@yahoo.com', '2015-08-13', 'Oryt');

-- --------------------------------------------------------

--
-- Table structure for table `leave_report`
--

CREATE TABLE IF NOT EXISTS `leave_report` (
`leave_id` int(11) NOT NULL,
  `emp_id_no` varchar(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `leave_start` date NOT NULL,
  `leave_until` date NOT NULL,
  `reason` text NOT NULL,
  `rank` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_report`
--

INSERT INTO `leave_report` (`leave_id`, `emp_id_no`, `full_name`, `department`, `position`, `email`, `leave_start`, `leave_until`, `reason`, `rank`, `status`, `date_created`) VALUES
(1, '2015-10001', 'Anna Dee Osias Lazarra', 'HR', 'Bookkeeper', 'anadf@yahoo.com', '2015-08-16', '2015-08-22', 'asdfdsfdsf', 'Approved', 'old', '2015-08-12'),
(2, '2015-10001', 'Anna Dee Osias Lazarra', 'HR', 'Bookkeeper', 'anadf@yahoo.com', '2015-08-23', '2015-08-29', 'fasdfdfsdfd', 'Approved', 'old', '2015-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101113 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `email`, `password`, `fname`, `mname`, `lname`, `address`, `gender`, `department`) VALUES
(101112, 'asdfss', 'ss', 'fds', 'sadf', 'sdaf', 'sadf', 'sdaf', 'sadf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `particulars` varchar(50) NOT NULL,
  `items` varchar(3) NOT NULL,
  `unitprice` varchar(10) NOT NULL,
  `price` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contacts` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `shipped_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `methods` varchar(255) NOT NULL,
  `rank` varchar(10) NOT NULL,
  `receipt` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15247710 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `customer_address`, `particulars`, `items`, `unitprice`, `price`, `email`, `contacts`, `order_date`, `shipped_date`, `status`, `methods`, `rank`, `receipt`, `state`) VALUES
(15247700, 'Mark Jonald Lazarra', 'Sta. Mesa Manila', 'Tube Ice', '10', '120', '1200', 'shagilazarra@yahoo.com', '0909', '2015-08-10', '0000-00-00', 'Unverified', 'Cash on Delivery', 'new', 'None', ''),
(15247701, 'Mark Jonald Lazarra', 'Sta. Mesa Manila', 'Tube Ice', '1', '120', '120', 'shagilazarra@yahoo.com', '0909', '2015-08-10', '0000-00-00', 'Unverified', 'Cash on Delivery', 'new', 'None', ''),
(15247702, 'Chad Nico Lazarra', 'Sta. Mesa Manila', 'Block Ice', '2', '100', '200', 'shagilazarra@yahoo.com', '09193156802', '2015-08-11', '2015-08-11', 'Verified', 'Cash on Delivery', 'old', 'Created', 'delivered'),
(15247707, 'Anna Dee Lazarra', 'Sta. Mesa Manila', 'Tube Ice', '2', '120', '240', 'anadf@yahoo.com', '094874334368', '2015-08-12', '0000-00-00', 'Unverified', 'Cash on Delivery', 'new', 'None', ''),
(15247708, 'Nico Kamlon', 'Sampalok Manila', 'Tube Ice', '10', '120', '1200', 'kamlpn@yahoo.com', '09191', '2015-08-12', '0000-00-00', 'Unverified', 'Cash on Delivery', 'new', 'None', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(11) NOT NULL,
  `product_no` varchar(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_picture` varchar(30) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `price` varchar(4) NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_no`, `product_name`, `product_picture`, `unit`, `price`, `date_added`, `date_updated`) VALUES
(1, '150001', 'Block Ice', 'images/block-ice.jpg', 'Block', '100', '0000-00-00', '2015-08-14'),
(2, '150002', 'Tube Ice', 'images/tube-ice.jpg', 'Sack', '120', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE IF NOT EXISTS `receipt` (
`receipt_id` int(11) NOT NULL,
  `OR_no` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `particulars` varchar(200) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `total_amount` varchar(10) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_id`, `OR_no`, `full_name`, `address`, `particulars`, `quantity`, `total_amount`, `tax`, `date_added`) VALUES
(1, '70000', 'Chad Nico Lazarra', 'Sta. Mesa Manila', 'Block Ice', '2', '200', '24', '2015-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `successful_deliveries`
--

CREATE TABLE IF NOT EXISTS `successful_deliveries` (
`sd_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `particulars` varchar(50) NOT NULL,
  `quantity` varchar(3) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_order` date NOT NULL,
  `date_shipped` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `successful_deliveries`
--

INSERT INTO `successful_deliveries` (`sd_id`, `customer_name`, `address`, `particulars`, `quantity`, `total_price`, `email`, `date_order`, `date_shipped`) VALUES
(1, 'Chad Nico Lazarra', 'Sta. Mesa Manila', 'Block Ice', '2', '200', 'shagilazarra@yahoo.com', '2015-08-11', '2015-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
`update_no` int(11) NOT NULL,
  `order_no` varchar(25) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`update_no`, `order_no`, `date`, `description`, `email`) VALUES
(1, '15247702', '08-11-2015 01:45:45pm', 'Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.', 'shagilazarra@yahoo.com'),
(2, '15247702', '08-11-2015 01:59:20pm', 'thank you for shopping with us. your order is now verified!', 'shagilazarra@yahoo.com'),
(3, '15247702', '08-11-2015 02:08:34pm', 'Your order now is going through preparation', 'shagilazarra@yahoo.com'),
(4, '15247702', '08-11-2015 02:08:55pm', 'Your order has been shipped', 'shagilazarra@yahoo.com'),
(5, '15247702', '08-11-2015 02:09:23pm', 'Thank you for buying with us, We hope that you will buy again with us', 'shagilazarra@yahoo.com'),
(6, '15247703', '08-12-2015 11:33:19am', 'Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.', ''),
(7, '15247704', '08-12-2015 11:35:10am', 'Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.', 'anadf@yahoo.com'),
(8, '15247705', '08-12-2015 11:38:01am', 'Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.', 'anadf@yahoo.com'),
(9, '15247706', '08-12-2015 11:39:40am', 'Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.', 'anadf@yahoo.com'),
(10, '15247707', '08-12-2015 06:57:51pm', 'Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.', 'anadf@yahoo.com'),
(11, '15247708', '08-12-2015 06:59:21pm', 'Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.', 'kamlpn@yahoo.com'),
(12, '15247709', '08-12-2015 07:01:42pm', 'Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.', 'roys@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_code` varchar(10) NOT NULL,
  `admin_no` varchar(15) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_joined` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `tries` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_code`, `admin_no`, `admin_name`, `username`, `password`, `department`, `gender`, `address`, `date_joined`, `status`, `tries`) VALUES
(1, '1', 'A15-10001', 'Alvin Ellise', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'Human Resource', '', '', '0000-00-00', 'active', 0),
(2, '2', 'A15-10002', 'Jessen Ricafort', 'marketing', 'e2a530e251d3675034d23f5c5f87f54ec3182a088ba7d13350824794f8e6b76e', 'Marketing', '', '', '0000-00-00', 'active', 0),
(3, '3', 'A15-10003', 'Chad Lazarra', 'delivery', 'b4af39d5b65a14849e885a9d65f0efe4f4e689989689c28c16cfcb3a6e78db5a', 'Production', '', '', '0000-00-00', 'active', 0),
(4, '4', 'A15-10004', 'Sprokotong Colontoy', 'superadmin', '186cf774c97b60a1c106ef718d10970a6a06e06bef89553d9ae65d938a886eae', 'superadmin', '', '', '0000-00-00', 'active', 0),
(5, '11', 'A15-10005', 'Colontoy Colontoy', 'colontoy', '24167f88af3dc8cad0197d2235bc2f90b91a5b9f15dc8336899bc623a393d883', 'Human Resources', 'Male', 'Sta. Mesa Manila', '2015-08-07', 'active', 0),
(6, '11', 'A15-10006', 'Raymond Mendoza Mariano', 'raymond11', '0c7fb88c430897c6307037f3251e855a91b708fe02e83da6c58cc646bffecdfd', 'Human Resources', 'Male', 'Angono Rizal', '2015-08-13', 'active', 0),
(7, '33', 'A15-10007', 'Raha Genesis Mendoza', 'raha12', '59eeb71e712b6ea332f55f92dafd413ece8df6a5d979cd89076e3f489b24b383', 'Production', 'Male', 'Magsaysay blvd.  Sta.  Mesa Manila', '2015-08-13', 'active', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`attendance_id`), ADD UNIQUE KEY `attendance_id` (`attendance_id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
 ADD PRIMARY KEY (`at_id`), ADD UNIQUE KEY `at_id` (`at_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customer_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`emp_id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `emp_id_no` (`emp_id_no`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
 ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `leave_message`
--
ALTER TABLE `leave_message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_report`
--
ALTER TABLE `leave_report`
 ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`), ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`), ADD UNIQUE KEY `product_no` (`product_no`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
 ADD PRIMARY KEY (`receipt_id`), ADD UNIQUE KEY `OR_no` (`OR_no`), ADD UNIQUE KEY `receipt_id` (`receipt_id`);

--
-- Indexes for table `successful_deliveries`
--
ALTER TABLE `successful_deliveries`
 ADD PRIMARY KEY (`sd_id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
 ADD PRIMARY KEY (`update_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leave_message`
--
ALTER TABLE `leave_message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leave_report`
--
ALTER TABLE `leave_report`
MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101113;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15247710;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `successful_deliveries`
--
ALTER TABLE `successful_deliveries`
MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
MODIFY `update_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

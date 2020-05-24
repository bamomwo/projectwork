-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 10:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `assignconfig`
--

CREATE TABLE `assignconfig` (
  `id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `course_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignconfig`
--

INSERT INTO `assignconfig` (`id`, `student_id`, `course_code`) VALUES
(1, 'Fms/0161/16', 'MTH482'),
(2, 'Fms/0015/16', 'MTH482'),
(3, 'Fms/0016/16', 'MTH482'),
(4, 'Fms/0017/16', 'MTH482'),
(5, 'Fms/0021/16', 'MTH482'),
(6, 'Fms/0022/16', 'MTH482'),
(13, 'FAS/2141/16', 'CHM302'),
(14, 'FAS/2201/18', 'CHM302'),
(15, 'FAS/2320/16', 'CHM302'),
(16, 'FAS/2313/16', 'CHM302'),
(17, 'FAS/2314/16', 'CHM302'),
(18, 'FAS/2315/16', 'CHM302'),
(19, 'FAS/2316/16', 'CHM302'),
(20, 'FAS/2317/16', 'CHM302'),
(21, 'FAS/2318/16', 'CHM302'),
(22, 'FAS/2319/16', 'CHM302'),
(23, 'FAS/2010/16', 'CHM302'),
(24, 'FAS/2232/16', 'CHM302'),
(25, 'FAS/2230/16', 'CHM302'),
(26, 'FAS/2013/17', 'CHM302'),
(27, 'FAS/2014/17', 'CHM302'),
(28, 'FAS/2015/17', 'CHM302'),
(29, 'FAS/2016/17', 'CHM302'),
(30, 'FAS/2017/17', 'CHM302'),
(31, 'FAS/2018/17', 'CHM302'),
(32, 'FAS/2018/18', 'CHM302'),
(33, 'FAS/2019/18', 'CHM302'),
(34, 'FAS/2200/18', 'CHM302'),
(35, 'FAS/2209/18', 'CHM302'),
(36, 'FAS/2223/18', 'CHM302'),
(37, 'FAS/2203/18', 'CHM302'),
(38, 'FAS/2204/19', 'CHM302'),
(39, 'FAS/2205/19', 'CHM302'),
(40, 'FAS/2206/19', 'CHM302'),
(41, 'FAS/2207/19', 'CHM302'),
(42, 'FAS/2208/19', 'CHM302'),
(43, 'FAS/2209/19', 'CHM302'),
(44, 'FAS/2200/19', 'CHM302'),
(45, 'FMS/0136/16', 'MTH482'),
(46, 'FMS/0160/16', 'MTH482'),
(47, 'FMS/0240/17', 'MTH482'),
(48, 'FMS/0093/17', 'MTH482'),
(49, 'FMS/0113/16', 'MTH482'),
(50, 'fms/0047/16', 'MTH482'),
(51, 'FMS/0037/16', 'MTH482'),
(52, 'FMS/0151/16', 'MTH482'),
(53, 'FMS/0236/17', 'MTH482'),
(54, 'FMS/0068/17', 'MTH482'),
(55, 'FMS/0203/17', 'MTH482'),
(56, 'FMS/0200/17', 'MTH482'),
(57, 'FMS/0099/16', 'MTH482'),
(58, 'FMS/0054/17', 'MTH482'),
(59, 'FMS/0044/16', 'MTH482'),
(60, 'FMS/0238/17', 'MTH482'),
(61, 'FMS/0062/16', 'MTH482'),
(62, 'FMS/0246/17', 'MTH482'),
(63, 'FMS/0042/16', 'MTH482'),
(64, 'FMS/0145/16', 'MTH482'),
(65, 'FMS/0066/16', 'MTH482'),
(66, 'FMS/0063/16', 'MTH482'),
(67, 'FMS/0097/16', 'MTH482'),
(68, 'FMS/0121/16', 'MTH482'),
(69, 'FMS/0199/17', 'MTH482'),
(70, 'FMS/0102/16', 'MTH482'),
(71, 'FMS/0106/16', 'MTH482'),
(72, 'FMS/0031/16', 'MTH482'),
(73, 'FMS/0069/16', 'MTH482'),
(74, 'FMS/0038/16', 'MTH482'),
(75, 'FMS/0140/16', 'MTH482'),
(76, 'FMS/0048/16', 'MTH482'),
(77, 'FMS/0112/16', 'MTH482'),
(78, 'FMS/0226/17', 'MTH482'),
(79, 'FMS/0173/16', 'MTH482'),
(80, 'FMS/0060/16', 'MTH482'),
(81, 'FMS/0100/16', 'MTH482'),
(82, 'FMS/0117/16', 'MTH482'),
(83, 'FMS/0139/16', 'MTH482'),
(84, 'FMS/0146/16', 'MTH482'),
(85, 'FMS/0174/16', 'MTH482'),
(86, 'FMS/0014/16', 'MTH482'),
(87, 'FMS/0075/16', 'MTH482'),
(88, 'FMS/0152/16', 'MTH482'),
(89, 'FMS/0079/16', 'MTH482'),
(90, 'FMS/0054/16', 'MTH482'),
(91, 'FMS/0064/16', 'MTH482'),
(92, 'FMS/0172/16', 'MTH482'),
(93, 'FMS/0205/17', 'MTH482'),
(94, 'FMS/0192/17', 'MTH482'),
(95, 'FMS/0065/16', 'MTH482'),
(96, 'FMS/0228/17', 'MTH482'),
(97, 'FMS/0051/16', 'MTH482'),
(98, 'FMS/0169/16', 'MTH482'),
(99, 'FMS/0124/16', 'MTH482'),
(100, 'FMS/0167/16', 'MTH482'),
(101, 'FMS/0242/17', 'MTH482'),
(102, 'FMS/0116/16', 'MTH482'),
(103, 'FMS/0207/17', 'MTH482'),
(104, 'FMS/0230/17', 'MTH482'),
(105, 'FMS/0081/16', 'MTH482'),
(106, 'FMS/0190/17', 'MTH482'),
(107, 'FMS/0208/17', 'MTH482'),
(108, 'FMS/0111/16', 'MTH482'),
(109, 'FMS/0241/17', 'MTH482'),
(110, 'FMS/0119/16', 'MTH482'),
(111, 'FMS/0080/17', 'MTH482'),
(112, 'FMS/0085/16', 'MTH482'),
(113, 'FMS/0233/17', 'MTH482'),
(114, 'FMS/2255/15', 'MTH482'),
(115, 'FMS/0107/16', 'MTH482'),
(116, 'FMS/0091/16', 'MTH482'),
(117, 'FMS/2204/15', 'MTH482'),
(118, 'FMS/0130/16', 'MTH482'),
(119, 'FMS/0086/16', 'MTH482'),
(120, 'FMS/0239/17', 'MTH482'),
(121, 'FMS/0040/17', 'MTH482'),
(122, 'FMS/0128/16', 'MTH482'),
(123, 'FMS/0131/16', 'MTH482'),
(124, 'FMS/0033/16', 'MTH482');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`) VALUES
(1, 'introduction to computing', 'csc101'),
(2, 'operations research', 'mth482'),
(3, 'data communication and networking ', 'csc 333'),
(6, 'Organic Chemistry', 'CHM302');

-- --------------------------------------------------------

--
-- Table structure for table `coursesprogrammes`
--

CREATE TABLE `coursesprogrammes` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `level` int(11) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `writtendate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursesprogrammes`
--

INSERT INTO `coursesprogrammes` (`id`, `course_code`, `level`, `programme`, `writtendate`) VALUES
(1, 'mth482', 400, 'Bsc Computer Science', '2020-05-13'),
(2, 'mth482', 400, 'Bsc Mathematics', '2020-05-13'),
(3, 'mth482', 400, 'Bsc Information Technology', '2020-05-13'),
(4, 'csc 333', 300, 'Bsc Computer Science', '2020-05-13'),
(5, 'csc 333', 300, 'Bsc Information Technology', '2020-05-13'),
(6, 'mth482', 400, 'Bsc Computer Science', '2020-05-14'),
(7, 'mth482', 400, 'Bsc Mathematics', '2020-05-14'),
(8, 'mth482', 400, 'Bsc Information Technology', '2020-05-14'),
(9, 'csc 333', 300, 'Bsc Computer Science', '2020-05-14'),
(10, 'csc 333', 300, 'Bsc Information Technology', '2020-05-14'),
(11, 'csc 333', 300, 'Bsc Computer Science', '2020-05-15'),
(12, 'csc 333', 300, 'Bsc Information Technology', '2020-05-15'),
(13, 'mth482', 400, 'Bsc Mathematics', '2020-05-15'),
(14, 'csc101', 100, 'Bsc Computer Science', '2020-05-15'),
(15, 'mth482', 400, 'Bsc Computer Science', '2020-05-16'),
(16, 'mth482', 400, 'Bsc Mathematics', '2020-05-16'),
(17, 'mth482', 400, 'Bsc Information Technology', '2020-05-16'),
(18, 'csc 333', 300, 'Bsc Computer Science', '2020-05-16'),
(19, 'csc 333', 300, 'Bsc Information Technology', '2020-05-16'),
(20, 'csc101', 100, 'Bsc Computer Science', '2020-05-17'),
(21, 'csc101', 100, 'Dip Computer Science', '2020-05-17'),
(22, 'csc101', 100, 'Bsc Mathematics', '2020-05-17'),
(23, 'csc101', 100, 'Bsc Information Technology', '2020-05-17'),
(24, 'mth482', 400, 'Bsc Computer Science', '2020-05-17'),
(25, 'mth482', 400, 'Bsc Mathematics', '2020-05-17'),
(26, 'mth482', 400, 'Bsc Information Technology', '2020-05-17'),
(27, 'mth482', 400, 'Bsc Computer Science', '2020-05-19'),
(28, 'mth482', 400, 'Bsc Mathematics', '2020-05-19'),
(29, 'mth482', 400, 'Bsc Information Technology', '2020-05-19'),
(30, 'CHM302', 300, 'Bsc Biochemistry', '2020-05-20'),
(31, 'mth482', 400, 'Bsc Computer Science', '2020-05-20'),
(32, 'mth482', 400, 'Bsc Mathematics', '2020-05-20'),
(33, 'mth482', 400, 'Bsc Information Technology', '2020-05-20'),
(34, 'CHM302', 300, 'Bsc Biochemistry', '2020-05-22'),
(35, 'CHM302', 300, 'Bsc Biochemistry', '2020-05-23'),
(36, 'mth482', 400, 'Bsc Computer Science', '2020-05-23'),
(37, 'mth482', 400, 'Bsc Mathematics', '2020-05-23'),
(38, 'mth482', 400, 'Bsc Information Technology', '2020-05-23'),
(39, 'mth482', 400, 'Bsc Computer Science', '2020-05-24'),
(40, 'mth482', 400, 'Bsc Mathematics', '2020-05-24'),
(41, 'mth482', 400, 'Bsc Information Technology', '2020-05-24'),
(42, 'CHM302', 300, 'Bsc Biochemistry', '2020-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'computer science'),
(2, 'statistics'),
(3, 'biochemistry'),
(4, 'mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `examhalls`
--

CREATE TABLE `examhalls` (
  `id` int(11) NOT NULL,
  `hallname` varchar(100) NOT NULL,
  `hallcode` varchar(10) NOT NULL,
  `hallrows` int(11) NOT NULL,
  `hallcolumns` int(11) NOT NULL,
  `capacity` int(11) GENERATED ALWAYS AS (`hallrows` * `hallcolumns`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examhalls`
--

INSERT INTO `examhalls` (`id`, `hallname`, `hallcode`, `hallrows`, `hallcolumns`) VALUES
(1, 'New Hall One', 'NH1', 20, 50),
(2, 'New Hall 2', 'NH2', 10, 30);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `faculty_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_code`) VALUES
(1, 'faculty of mathematical sciences', 'fms'),
(2, 'faculty of applied science', 'fas');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'male'),
(2, 'female'),
(3, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `hallscourses`
--

CREATE TABLE `hallscourses` (
  `id` int(11) NOT NULL,
  `hall_code` varchar(10) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `startingtime` varchar(1) NOT NULL,
  `writtendate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hallscourses`
--

INSERT INTO `hallscourses` (`id`, `hall_code`, `course_code`, `startingtime`, `writtendate`) VALUES
(1, 'NH1', 'CSC 333', '0', '2020-07-05'),
(2, 'NH1', 'CSC101', '0', '2020-07-05'),
(3, 'NH1', 'MTH482', '0', '2020-07-05'),
(4, 'NHA3', 'CSC 333', '1', '2020-08-05'),
(5, 'NHA3', 'CSC101', '1', '2020-08-05'),
(6, 'NHA3', 'MTH482', '1', '2020-08-05'),
(7, 'NH2', 'CSC 333', '0', '2020-05-08'),
(8, 'NH2', 'CSC101', '0', '2020-05-08'),
(9, 'NH2', 'MTH482', '0', '2020-05-08'),
(10, 'NHA2', 'CSC101', '0', '2020-05-09'),
(11, 'NHA2', 'MTH482', '0', '2020-05-09'),
(12, 'NH1', 'CSC 333', '1', '2020-05-10'),
(13, 'NH1', 'CSC101', '1', '2020-05-10'),
(14, 'NHA1', 'CSC101', '0', '0000-00-00'),
(16, 'NH2', 'MTH482', '1', '0000-00-00'),
(17, 'NH2', 'MTH482', '1', '2020-05-10'),
(18, 'NHA3', 'CSC101', '1', '0000-00-00'),
(19, 'NGF1', 'CSC 333', '1', '0000-00-00'),
(20, 'NGF1', 'CSC 333', '1', '2020-05-10'),
(21, 'NHA2', 'CSC 333', '1', '2020-05-10'),
(22, 'NGF1', 'CSC 333', '1', '2020-05-10'),
(23, 'NHA3', 'CSC 333', '0', '2020-05-10'),
(24, 'NH1', 'CSC 333', '1', '2020-05-11'),
(25, 'NHA1', 'MTH482', '0', '2020-11-05'),
(26, 'NHA2', 'MTH482', '0', '2020-05-11'),
(27, 'NH1', 'MTH482', '1', '2020-05-12'),
(28, 'NHA1', 'CSC101', '1', '2020-05-12'),
(29, 'NH1', 'CSC 333', '0', '2020-05-12'),
(30, 'NH1', 'MTH482', '1', '2020-05-13'),
(31, 'NH2', 'CSC 333', '0', '2020-05-13'),
(32, 'NH1', 'MTH482', '1', '2020-05-14'),
(33, 'NHA2', 'CSC 333', '0', '2020-05-14'),
(34, 'NH1', 'MTH482', '1', '2020-05-15'),
(35, 'NH1', 'CSC 333', '1', '2020-05-15'),
(36, 'NH1', 'MTH482', '1', '2020-05-16'),
(37, 'NHA1', 'CSC 333', '0', '2020-05-16'),
(38, 'NH1', 'MTH482', '0', '2020-05-17'),
(39, 'NH2', 'CSC101', '1', '2020-05-17'),
(40, 'NH1', 'MTH482', '1', '2020-05-19'),
(41, 'NH1', 'CHM302', '1', '2020-05-20'),
(42, 'NH1', 'MTH482', '1', '2020-05-20'),
(43, 'NH1', 'CHM302', '1', '2020-05-22'),
(44, 'NH1', 'MTH482', '1', '2020-05-22'),
(45, 'NH1', 'CHM302', '1', '2020-05-23'),
(46, 'NH1', 'MTH482', '1', '2020-05-23'),
(47, 'NH1', 'CHM302', '1', '2020-05-24'),
(48, 'NH1', 'MTH482', '1', '2020-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 100),
(2, 200),
(3, 300),
(4, 400);

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `programme_id` int(11) NOT NULL,
  `programme_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`programme_id`, `programme_name`) VALUES
(1, 'Bsc Computer Science'),
(2, 'Dip Computer Science'),
(3, 'Bsc Mathematics'),
(4, 'Bsc Information Technology'),
(5, 'Bsc Biochemistry');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(11) NOT NULL,
  `student_id` varchar(14) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `othername` varchar(10) NOT NULL,
  `level` int(11) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `student_id`, `firstname`, `lastname`, `othername`, `level`, `programme`, `department`) VALUES
(1, 'FMS/0136/16', 'suliah', 'victor', 'bamomwo', 400, 'Bsc Computer Science', 'Computer Science'),
(2, 'FMS/0160/16', 'Daniel', 'Sam ', 'Jones', 400, 'Bsc Computer Science', 'Computer Science'),
(3, 'FMS/0240/17', 'James', 'Yakubu', 'Kumbeni', 400, 'Bsc Computer Science', 'Computer Science'),
(4, 'FMS/0093/17', 'Peter ', 'Palace', '', 400, 'Bsc Computer Science', 'Computer Science'),
(5, 'FMS/0113/16', 'Mumumi', 'Joe ', 'Peter', 400, 'Bsc Computer Science', 'Computer Science'),
(6, 'fms/0047/16', 'Basit', 'Mumuni', '', 400, 'Bsc Computer Science', 'Computer Science'),
(7, 'FMS/0037/16', 'Reginald ', 'Doe', '', 400, 'Bsc Computer Science', 'Computer Science'),
(8, 'FMS/0151/16', 'Andrew', 'Gongong', '', 400, 'Bsc Computer Science', 'Computer Science'),
(9, 'FMS/0236/17', 'Chamtooni', 'Abdul', '', 400, 'Bsc Computer Science', 'Computer Science'),
(10, 'FMS/0068/17', 'Rahim', 'Musah', '', 400, 'Bsc Computer Science', 'Computer Science'),
(11, 'FMS/0203/17', 'Gerald', 'Paul', '', 400, 'Bsc Computer Science', 'Computer Science'),
(12, 'FMS/0200/17', 'Raul', 'KusKus', '', 400, 'Bsc Computer Science', 'Computer Science'),
(13, 'FMS/0099/16', 'Rashida', 'Amina', '', 400, 'Bsc Computer Science', 'Computer Science'),
(14, 'FMS/0054/17', 'Zeliya', 'Ama', '', 400, 'Bsc Computer Science', 'Computer Science'),
(15, 'FMS/0044/16', 'Prince', 'Craft', '', 400, 'Bsc Computer Science', 'Computer Science'),
(16, 'FMS/0238/17', 'Fatawu', 'Abdul', '', 400, 'Bsc Computer Science', 'Computer Science'),
(17, 'FMS/0062/16', 'Kuborigi', 'Fatawu', '', 400, 'Bsc Computer Science', 'Computer Science'),
(18, 'FMS/0246/17', 'John', 'Boscos', '', 400, 'Bsc Computer Science', 'Computer Science'),
(19, 'FMS/0042/16', 'Kolog', 'John', '', 400, 'Bsc Computer Science', 'Computer Science'),
(20, 'FMS/0145/16', 'Musah', 'suliah', '', 400, 'Bsc Computer Science', 'Computer Science'),
(21, 'FMS/0066/16', 'Paul', 'Daniel', '', 400, 'Bsc Computer Science', 'Computer Science'),
(22, 'FMS/0063/16', 'KusKus', 'James', '', 400, 'Bsc Computer Science', 'Computer Science'),
(23, 'FMS/0097/16', 'Amina', 'Peter ', '', 400, 'Bsc Computer Science', 'Computer Science'),
(24, 'FMS/0121/16', 'Ama', 'Mumumi', '', 400, 'Bsc Computer Science', 'Computer Science'),
(25, 'FMS/0199/17', 'Craft', 'Basit', '', 400, 'Bsc Computer Science', 'Computer Science'),
(26, 'FMS/0102/16', 'Abdul', 'Reginald ', '', 400, 'Bsc Computer Science', 'Computer Science'),
(27, 'FMS/0106/16', 'Fatawu', 'Andrew', '', 400, 'Bsc Computer Science', 'Computer Science'),
(28, 'FMS/0031/16', 'Boscos', 'Chamtooni', '', 400, 'Bsc Computer Science', 'Computer Science'),
(29, 'FMS/0069/16', 'John', 'Craft', '', 400, 'Bsc Computer Science', 'Computer Science'),
(30, 'FMS/0038/16', 'Yakubu', 'Raul', '', 400, 'Bsc Computer Science', 'Computer Science'),
(31, 'FMS/0140/16', 'Palace', 'Rashida', '', 400, 'Bsc Computer Science', 'Computer Science'),
(32, 'FMS/0048/16', 'Joe ', 'Zeliya', '', 400, 'Bsc Computer Science', 'Computer Science'),
(33, 'FMS/0112/16', 'Cian', 'Murdo', '', 400, 'Bsc Computer Science', 'Computer Science'),
(34, 'FMS/0226/17', 'Filip', 'Ronnie', '', 400, 'Bsc Computer Science', 'Computer Science'),
(35, 'FMS/0173/16', 'Nico', 'Vincent', '', 400, 'Bsc Computer Science', 'Computer Science'),
(36, 'FMS/0060/16', 'Olly', 'Ali', '', 400, 'Bsc Computer Science', 'Computer Science'),
(37, 'FMS/0100/16', 'Gregor', 'Asher', '', 400, 'Bsc Computer Science', 'Computer Science'),
(38, 'FMS/0117/16', 'Junior', 'Bailey', '', 400, 'Bsc Computer Science', 'Computer Science'),
(39, 'FMS/0139/16', 'Antoni', 'Enzo', '', 400, 'Bsc Computer Science', 'Computer Science'),
(40, 'FMS/0146/16', 'Colton', 'Lennox', '', 400, 'Bsc Computer Science', 'Computer Science'),
(41, 'FMS/0174/16', 'Jenson', 'Niall', '', 400, 'Bsc Computer Science', 'Computer Science'),
(42, 'FMS/0014/16', 'Layton', 'Alistair', '', 400, 'Bsc Computer Science', 'Computer Science'),
(43, 'FMS/0075/16', 'Ross', 'Colby', '', 400, 'Bsc Computer Science', 'Computer Science'),
(44, 'FMS/0152/16', 'Frederick', 'Francis', '', 400, 'Bsc Computer Science', 'Computer Science'),
(45, 'FMS/0079/16', 'Maxwell', 'Julian', '', 400, 'Bsc Computer Science', 'Computer Science'),
(46, 'FMS/0054/16', 'Nicholas', 'Keegan', '', 400, 'Bsc Computer Science', 'Computer Science'),
(47, 'FMS/0064/16', 'Danny', 'Luka', '', 400, 'Bsc Computer Science', 'Computer Science'),
(48, 'FMS/0172/16', 'Declan', 'Odin', '', 400, 'Bsc Computer Science', 'Computer Science'),
(49, 'FMS/0205/17', 'Ibrahim', 'Steven', '', 400, 'Bsc Computer Science', 'Computer Science'),
(50, 'FMS/0192/17', 'Oskar', 'Duncan', '', 400, 'Bsc Computer Science', 'Computer Science'),
(51, 'FMS/0065/16', 'Reggie', 'Kade', '', 400, 'Bsc Computer Science', 'Computer Science'),
(52, 'FMS/0228/17', 'Shay', 'Musa', '', 400, 'Bsc Computer Science', 'Computer Science'),
(53, 'FMS/0051/16', 'Zander', 'Mustafa', '', 400, 'Bsc Computer Science', 'Computer Science'),
(54, 'FMS/0169/16', 'Alasdair', 'Oakley', '', 400, 'Bsc Computer Science', 'Computer Science'),
(55, 'FMS/0124/16', 'Ashton', 'Rex', '', 400, 'Bsc Computer Science', 'Computer Science'),
(56, 'FMS/0167/16', 'Cruz', 'Archer', '', 400, 'Bsc Computer Science', 'Computer Science'),
(57, 'FMS/0242/17', 'Findlay', 'Axel', '', 400, 'Bsc Computer Science', 'Computer Science'),
(58, 'FMS/0116/16', 'Hayden', 'Ayden', '', 400, 'Bsc Computer Science', 'Computer Science'),
(59, 'FMS/0207/17', 'Jace', 'Caiden', '', 400, 'Bsc Computer Science', 'Computer Science'),
(60, 'FMS/0230/17', 'Kerr', 'Craig', '', 400, 'Bsc Information Technology', 'Computer Science'),
(61, 'FMS/0081/16', 'Rio', 'Lauchlan', '', 400, 'Bsc Information Technology', 'Computer Science'),
(62, 'FMS/0190/17', 'Rudi', 'Lennon', '', 400, 'Bsc Information Technology', 'Computer Science'),
(63, 'FMS/0208/17', 'Spencer', 'Lukas', '', 400, 'Bsc Information Technology', 'Computer Science'),
(64, 'FMS/0111/16', 'Taylor', 'Maximilian', '', 400, 'Bsc Information Technology', 'Computer Science'),
(65, 'FMS/0241/17', 'Toby', 'Mylo', '', 400, 'Bsc Information Technology', 'Computer Science'),
(66, 'FMS/0119/16', 'Joel', 'Nikodem', '', 400, 'Bsc Information Technology', 'Computer Science'),
(67, 'FMS/0080/17', 'Keir', 'Rocco', '', 400, 'Bsc Information Technology', 'Computer Science'),
(68, 'FMS/0085/16', 'Paul', 'Rohan', '', 400, 'Bsc Information Technology', 'Computer Science'),
(69, 'FMS/0233/17', 'Bobby', 'Xavier', '', 400, 'Bsc Information Technology', 'Computer Science'),
(70, 'FMS/2255/15', 'Campbell', 'Abel', '', 400, 'Bsc Information Technology', 'Computer Science'),
(71, 'FMS/0107/16', 'Kacper', 'Elias', '', 400, 'Bsc Information Technology', 'Computer Science'),
(72, 'FMS/0091/16', 'Miles', 'Eric', '', 400, 'Bsc Information Technology', 'Computer Science'),
(73, 'FMS/2204/15', 'Otis', 'Franciszek', '', 400, 'Bsc Information Technology', 'Computer Science'),
(74, 'FMS/0130/16', 'Travis', 'Kaleb', '', 400, 'Bsc Information Technology', 'Computer Science'),
(75, 'FMS/0086/16', 'Alan', 'Karson', '', 400, 'Bsc Information Technology', 'Computer Science'),
(76, 'FMS/0239/17', 'Alfred', 'Kody', '', 400, 'Bsc Information Technology', 'Computer Science'),
(77, 'FMS/0040/17', 'Erik', 'Lincoln', '', 400, 'Bsc Information Technology', 'Computer Science'),
(78, 'FMS/0128/16', 'Kevin', 'Phoenix', '', 400, 'Bsc Information Technology', 'Computer Science'),
(79, 'FMS/0131/16', 'Marcel', 'Toby', '', 400, 'Bsc Information Technology', 'Computer Science'),
(80, 'FMS/0033/16', 'Nathaniel', 'Joel', '', 400, 'Bsc Information Technology', 'Computer Science'),
(81, 'FMS/0036/16', 'Quinn', 'Keir', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(82, 'FMS/0161/16', 'Yusuf', 'Paul', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(83, 'FMS/0043/16', 'Billy', 'Bobby', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(84, 'Fms/0001/16', 'Douglas', 'Campbell', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(85, 'Fms/0002/16', 'Eden', 'Kacper', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(86, 'Fms/0003/16', 'Ewan', 'Miles', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(87, 'Fms/0004/16', 'Jakub', 'Otis', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(88, 'Fms/0005/16', 'Jonah', 'Travis', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(89, 'Fms/0006/16', 'Leonardo', 'Alan', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(90, 'Fms/0007/16', 'Mac', 'Jonah', '', 400, 'Bsc Computing with Accounting', 'Computer Science'),
(91, 'FAS/2141/16', 'victor', 'Nathan', 'bamomwo', 300, 'Bsc Biochemistry', 'Biochemistry'),
(92, 'FAS/2201/18', 'Sam ', 'Tommy', 'Jones', 300, 'Bsc Biochemistry', 'Biochemistry'),
(93, 'FAS/2320/16', 'Yakubu', 'Carter', 'Kumbeni', 300, 'Bsc Biochemistry', 'Biochemistry'),
(94, 'FAS/2313/16', 'Palace', 'Blake', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(95, 'FAS/2314/16', 'Joe ', 'Andrew', 'Peter', 300, 'Bsc Biochemistry', 'Biochemistry'),
(96, 'FAS/2315/16', 'Mumuni', 'Luke', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(97, 'FAS/2316/16', 'Doe', 'Jude', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(98, 'FAS/2317/16', 'Gongong', 'Angus', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(99, 'FAS/2318/16', 'Abdul', 'Riley', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(100, 'FAS/2319/16', 'Musah', 'Luca', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(101, 'FAS/2010/16', 'Paul', 'Samuel', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(102, 'FAS/2232/16', 'KusKus', 'Joseph', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(103, 'FAS/2230/16', 'Amina', 'David', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(104, 'FAS/2013/17', 'Ama', 'Isaac', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(105, 'FAS/2014/17', 'Craft', 'Ryan', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(106, 'FAS/2015/17', 'Abdul', 'Hamish', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(107, 'FAS/2016/17', 'Fatawu', 'Sonny', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(108, 'FAS/2017/17', 'Boscos', 'Arlo', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(109, 'FAS/2018/17', 'John', 'Arran', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(110, 'FAS/2018/18', 'suliah', 'Cole', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(111, 'FAS/2019/18', 'Daniel', 'Robert', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(112, 'FAS/2200/18', 'James', 'Blair', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(113, 'FAS/2209/18', 'Peter ', 'Dylan', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(114, 'FAS/2223/18', 'Mumumi', 'Louie', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(115, 'FAS/2203/18', 'Basit', 'Ruaridh', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(116, 'FAS/2204/19', 'Reginald ', 'Connor', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(117, 'FAS/2205/19', 'Andrew', 'Benjamin', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(118, 'FAS/2206/19', 'Chamtooni', 'Kai', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(119, 'FAS/2207/19', 'Craft', 'Michael', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(120, 'FAS/2208/19', 'Raul', 'Jackson', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(121, 'FAS/2209/19', 'Leon', 'Leon', '', 300, 'Bsc Biochemistry', 'Biochemistry'),
(122, 'FAS/2200/19', 'Cooper', 'Cooper', '', 300, 'Bsc Biochemistry', 'Biochemistry');

-- --------------------------------------------------------

--
-- Table structure for table `seatnumbers`
--

CREATE TABLE `seatnumbers` (
  `id` int(11) NOT NULL,
  `columnNo` int(11) NOT NULL,
  `rowNo` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `course_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seatnumbers`
--

INSERT INTO `seatnumbers` (`id`, `columnNo`, `rowNo`, `student_id`, `course_code`) VALUES
(1, 0, 2, 'Fms/0161/16', 'MTH482'),
(2, 0, 5, 'Fms/0015/16', 'MTH482'),
(3, 0, 8, 'Fms/0016/16', 'MTH482'),
(4, 0, 11, 'Fms/0017/16', 'MTH482'),
(5, 0, 14, 'Fms/0021/16', 'MTH482'),
(6, 0, 17, 'Fms/0022/16', 'MTH482'),
(7, 0, 20, 'FMS/0136/16', 'MTH482'),
(8, 0, 23, 'FMS/0160/16', 'MTH482'),
(9, 0, 26, 'FMS/0240/17', 'MTH482'),
(10, 0, 29, 'FMS/0093/17', 'MTH482'),
(11, 0, 32, 'FMS/0113/16', 'MTH482'),
(12, 0, 35, 'fms/0047/16', 'MTH482'),
(13, 0, 38, 'FMS/0037/16', 'MTH482'),
(14, 0, 41, 'FMS/0151/16', 'MTH482'),
(15, 0, 44, 'FMS/0236/17', 'MTH482'),
(16, 0, 47, 'FMS/0068/17', 'MTH482'),
(17, 0, 50, 'FMS/0203/17', 'MTH482'),
(18, 0, 53, 'FMS/0200/17', 'MTH482'),
(19, 0, 56, 'FMS/0099/16', 'MTH482'),
(20, 0, 59, 'FMS/0054/17', 'MTH482'),
(21, 0, 62, 'FMS/0044/16', 'MTH482'),
(22, 0, 65, 'FMS/0238/17', 'MTH482'),
(23, 0, 68, 'FMS/0062/16', 'MTH482'),
(24, 0, 71, 'FMS/0246/17', 'MTH482'),
(25, 0, 74, 'FMS/0042/16', 'MTH482'),
(26, 0, 77, 'FMS/0145/16', 'MTH482'),
(27, 0, 80, 'FMS/0066/16', 'MTH482'),
(28, 0, 83, 'FMS/0063/16', 'MTH482'),
(29, 0, 86, 'FMS/0097/16', 'MTH482'),
(30, 0, 89, 'FMS/0121/16', 'MTH482'),
(31, 0, 92, 'FMS/0199/17', 'MTH482'),
(32, 0, 95, 'FMS/0102/16', 'MTH482'),
(33, 0, 98, 'FMS/0106/16', 'MTH482'),
(34, 0, 101, 'FMS/0031/16', 'MTH482'),
(35, 0, 104, 'FMS/0069/16', 'MTH482'),
(36, 0, 107, 'FMS/0038/16', 'MTH482'),
(37, 0, 110, 'FMS/0140/16', 'MTH482'),
(38, 0, 113, 'FMS/0048/16', 'MTH482'),
(39, 0, 116, 'FMS/0112/16', 'MTH482'),
(40, 0, 119, 'FMS/0226/17', 'MTH482'),
(41, 0, 122, 'FMS/0173/16', 'MTH482'),
(42, 0, 125, 'FMS/0060/16', 'MTH482'),
(43, 0, 128, 'FMS/0100/16', 'MTH482'),
(44, 0, 131, 'FMS/0117/16', 'MTH482'),
(45, 0, 134, 'FMS/0139/16', 'MTH482'),
(46, 0, 137, 'FMS/0146/16', 'MTH482'),
(47, 0, 140, 'FMS/0174/16', 'MTH482'),
(48, 0, 143, 'FMS/0014/16', 'MTH482'),
(49, 0, 146, 'FMS/0075/16', 'MTH482'),
(50, 0, 149, 'FMS/0152/16', 'MTH482'),
(51, 0, 152, 'FMS/0079/16', 'MTH482'),
(52, 0, 155, 'FMS/0054/16', 'MTH482'),
(53, 0, 158, 'FMS/0064/16', 'MTH482'),
(54, 0, 161, 'FMS/0172/16', 'MTH482'),
(55, 0, 164, 'FMS/0205/17', 'MTH482'),
(56, 0, 167, 'FMS/0192/17', 'MTH482'),
(57, 0, 170, 'FMS/0065/16', 'MTH482'),
(58, 0, 173, 'FMS/0228/17', 'MTH482'),
(59, 0, 176, 'FMS/0051/16', 'MTH482'),
(60, 0, 179, 'FMS/0169/16', 'MTH482'),
(61, 0, 182, 'FMS/0124/16', 'MTH482'),
(62, 0, 185, 'FMS/0167/16', 'MTH482'),
(63, 0, 188, 'FMS/0242/17', 'MTH482'),
(64, 0, 191, 'FMS/0116/16', 'MTH482'),
(65, 0, 194, 'FMS/0207/17', 'MTH482'),
(66, 0, 197, 'FMS/0230/17', 'MTH482'),
(67, 0, 200, 'FMS/0081/16', 'MTH482'),
(68, 0, 203, 'FMS/0190/17', 'MTH482'),
(69, 0, 206, 'FMS/0208/17', 'MTH482'),
(70, 0, 209, 'FMS/0111/16', 'MTH482'),
(71, 0, 212, 'FMS/0241/17', 'MTH482'),
(72, 0, 215, 'FMS/0119/16', 'MTH482'),
(73, 0, 218, 'FMS/0080/17', 'MTH482'),
(74, 0, 221, 'FMS/0085/16', 'MTH482'),
(75, 0, 224, 'FMS/0233/17', 'MTH482'),
(76, 0, 227, 'FMS/2255/15', 'MTH482'),
(77, 0, 230, 'FMS/0107/16', 'MTH482'),
(78, 0, 233, 'FMS/0091/16', 'MTH482'),
(79, 0, 236, 'FMS/2204/15', 'MTH482'),
(80, 0, 239, 'FMS/0130/16', 'MTH482'),
(81, 0, 242, 'FMS/0086/16', 'MTH482'),
(82, 0, 245, 'FMS/0239/17', 'MTH482'),
(83, 0, 248, 'FMS/0040/17', 'MTH482'),
(84, 0, 251, 'FMS/0128/16', 'MTH482'),
(85, 0, 254, 'FMS/0131/16', 'MTH482'),
(86, 0, 257, 'FMS/0033/16', 'MTH482');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_firstname` varchar(20) NOT NULL,
  `staff_lastname` varchar(20) NOT NULL,
  `staff_othername` varchar(20) DEFAULT NULL,
  `staff_type` int(11) NOT NULL,
  `staff_gender` int(11) NOT NULL,
  `staff_department` int(11) NOT NULL,
  `staff_faculty` int(11) NOT NULL,
  `staff_dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_firstname`, `staff_lastname`, `staff_othername`, `staff_type`, `staff_gender`, `staff_department`, `staff_faculty`, `staff_dob`) VALUES
(1, 'Peter', 'Agbedenah', NULL, 2, 1, 1, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `staff_type_id` int(11) NOT NULL,
  `staff_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`staff_type_id`, `staff_type_name`) VALUES
(1, 'Exam Officer'),
(2, 'Lecturer'),
(3, 'Teaching Assistant'),
(4, 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_prim_id` int(11) NOT NULL,
  `student_firstname` varchar(20) NOT NULL,
  `student_lastname` varchar(20) NOT NULL,
  `student_other` varchar(20) DEFAULT NULL,
  `student_id` varchar(10) NOT NULL,
  `student_level` int(11) NOT NULL,
  `student_programme` int(11) NOT NULL,
  `student_department` int(11) NOT NULL,
  `student_faculty` int(11) NOT NULL,
  `student_dob` date DEFAULT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `assignconfig`
--
ALTER TABLE `assignconfig`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `coursesprogrammes`
--
ALTER TABLE `coursesprogrammes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `examhalls`
--
ALTER TABLE `examhalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `hallscourses`
--
ALTER TABLE `hallscourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`programme_id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `seatnumbers`
--
ALTER TABLE `seatnumbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_faculty` (`staff_faculty`),
  ADD KEY `staff_department` (`staff_department`),
  ADD KEY `staff_gender` (`staff_gender`),
  ADD KEY `staff_type` (`staff_type`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`staff_type_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_prim_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `student_department` (`student_department`),
  ADD KEY `student_faculty` (`student_faculty`),
  ADD KEY `student_programme` (`student_programme`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignconfig`
--
ALTER TABLE `assignconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1091;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coursesprogrammes`
--
ALTER TABLE `coursesprogrammes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `examhalls`
--
ALTER TABLE `examhalls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hallscourses`
--
ALTER TABLE `hallscourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `programme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `seatnumbers`
--
ALTER TABLE `seatnumbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_type`
--
ALTER TABLE `staff_type`
  MODIFY `staff_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_prim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_department` FOREIGN KEY (`staff_department`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `staff_faculty` FOREIGN KEY (`staff_faculty`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `staff_gender` FOREIGN KEY (`staff_gender`) REFERENCES `gender` (`gender_id`),
  ADD CONSTRAINT `staff_type` FOREIGN KEY (`staff_type`) REFERENCES `staff_type` (`staff_type_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `student_department` FOREIGN KEY (`student_department`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `student_faculty` FOREIGN KEY (`student_faculty`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `student_programme` FOREIGN KEY (`student_programme`) REFERENCES `programme` (`programme_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

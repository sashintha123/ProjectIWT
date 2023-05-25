-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220519.4c1c1fcc18
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 05:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rlec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` int(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `mobile`, `password`) VALUES
(1, 'Saman', 'Kumara', 'saman123@gmail.com', 771685097, 'saman123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `CID` varchar(10) NOT NULL,
  `C_Name` varchar(100) NOT NULL,
  `C_Description` varchar(500) NOT NULL,
  `C_Duration` varchar(10) NOT NULL,
  `C_Fee` int(10) NOT NULL,
  `LID` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `lecturer` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `CID`, `C_Name`, `C_Description`, `C_Duration`, `C_Fee`, `LID`, `image`, `lecturer`, `type`) VALUES
(1, 'C001', 'Data Science', 'This course to help improve data science knowledge', '20h', 40000, 'L002', '../image/C001.jpg', 'MR.Jagath De Soyza', 'pdf'),
(2, 'C002', 'Networking Development', 'This course provides an introduction to computer networks, with a special focus on the Internet architecture and protocols', '30h', 50000, 'L001', '../image/C002.jpg  ', 'MR.Jagath De Soyza', 'pdf'),
(3, 'C003', 'Science and Technology', 'Study of how science, including medicine, and technology are defined and analyzed by the humanities and social sciences', '30h', 30000, 'L004', '../image/C003.jpg ', 'MR.Jagath De Soyza', 'ebook'),
(4, 'C004', 'Software engineering', 'Software engineering is the discipline of designing,creating and maintaining', '40h', 40000, 'L003', '../image/C004.jpg ', 'MR.Jagath De Soyza', 'ebook'),
(5, 'C005', 'Web Development', 'skills and project-based experience needed for entry into web design and development careers', '20h', 10000, 'L005', '../image/C005.jpg', 'MR.Jagath De Soyza', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Feedback` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`Name`, `Email`, `Feedback`) VALUES
('sad', 'dasd', 'dasd'),
('das', 'das', 'das'),
('arc', 'weqewe', 'eqwe'),
('name', 'test@gmail.com', 'dsadasd'),
('name2', 'eqweqwe@gmail.com', 'dasd'),
('J.P Sashintha kaushalya', 'sashi123@gmail.com', 'wert');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `service` varchar(200) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `fname`, `lname`, `email`, `mobile`, `subject`, `service`, `password`) VALUES
(2, 'Damith', 'Asanka', 'damith2562@gmail.com', 718686222, 'Web designing', 'Lecturer', '$2y$10$KhZZLa2sQXRYGyJO2c84OeHeShQddorZbJ1i1R3.GFa.Aj/7JEey.'),
(8, 'vimal', 'perera', 'vimal123@gmail.com', 718685600, 'Web designing', 'Lecturer', '$2y$10$.NqolB.m3b0xfy4ZI/.JruIXa/pWnm1FEi5EneumagYeZnuyNoF5W');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `Course/Resourse Price` text NOT NULL,
  `Student ID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `name`, `email`, `phone`, `Course/Resourse Price`, `Student ID`) VALUES
(1, 'sashintha', 'sashinthakaushalya2562@gmail.com', '0718686610', '$29.99', '1'),
(10, 'sashintha', 'saman123@gmail.com', '0718686619', '$9.99', '1'),
(13, 'sashintha', 'saman123@gmail.com', '0718686610', '$12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `RID` varchar(11) NOT NULL,
  `R_Name` varchar(100) NOT NULL,
  `R_Fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `RID`, `R_Name`, `R_Fee`) VALUES
(1, 'R001', 'Data Science', 1500),
(2, 'R002', 'Web Developing', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `qualification` varchar(400) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `fname`, `lname`, `email`, `mobile`, `subject`, `qualification`, `password`) VALUES
(4, 'saman', 'kaushalya', 'saman223@gmail.com', 718686221, 'science', 'GCE A/L', '$2y$10$ov2wWt5.R4DAahoy3F4XaucjSQjfbODROUHjublYoT/1k8OX83MX2'),
(5, 'lalith', 'perera', 'lalith123@gmail.com', 715686600, 'Science', 'GCE A/L', '$2y$10$BbxQuvenCRLLWlxZbu5g8OCnJ6gBW.ouPp1pjiWJWyMeUaif4WEWW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 08:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `question_peparation`
--

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `ID` int(255) NOT NULL,
  `TITLE` varchar(25) NOT NULL,
  `SEMESTER` int(10) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `DEPARTMENT` varchar(25) NOT NULL,
  `UPLOADED_TIME_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PDF_FILE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diploma_cst`
--

CREATE TABLE `diploma_cst` (
  `ID` int(255) NOT NULL,
  `TITLE` varchar(25) NOT NULL,
  `COURSE` varchar(25) NOT NULL,
  `SEMESTER` int(10) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `UPLOAD_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PDF_FILE` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diploma_cst`
--

INSERT INTO `diploma_cst` (`ID`, `TITLE`, `COURSE`, `SEMESTER`, `YEAR`, `UPLOAD_DATE`, `PDF_FILE`) VALUES
(1, 'Shibu', 'B.Tech', 7, 2021, '2021-09-23 15:36:03', 'MYCV.pdf'),
(2, 'Shibu', 'Madhyamik', 2, 2021, '2021-09-23 15:38:03', 'MY CV.docx.pdf'),
(3, 'Shibu', 'Madhyamik', 2, 2021, '2021-09-23 16:40:25', ''),
(4, 'Shibu', 'Madhyamik', 2, 2021, '2021-09-23 17:34:06', ''),
(5, 'test1', 'Madhyamik', 1, 2021, '2021-09-24 05:47:05', 'MY CV.docx.pdf'),
(6, 'test2', 'HS', 2, 2020, '2021-09-24 05:50:39', 'sem7.pdf'),
(7, 'test3', 'Vocational', 3, 2019, '2021-09-24 05:51:27', 'SHIBU DHARA Resume(1).pdf'),
(8, 'test4', 'Diploma', 3, 2019, '2021-09-24 05:53:50', 'SHIBU DHARA Resume(1).pdf'),
(9, 'test6', 'HS', 3, 2018, '2021-09-24 05:58:40', 'SHIBU DHARA Resume(1).pdf'),
(10, 'test7', 'Madhyamik', 3, 2017, '2021-09-24 05:59:25', 'MY CV.docx.pdf'),
(11, 'test9', 'HS', 2, 2019, '2021-09-24 06:13:20', 'MY CV.docx.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hs`
--

CREATE TABLE `hs` (
  `ID` int(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `DEPARTMENT` varchar(25) NOT NULL,
  `UPLOAD_DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PDF_FILE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `secondary`
--

CREATE TABLE `secondary` (
  `ID` int(255) NOT NULL,
  `SUBJECT` varchar(25) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `UPLOAD_DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PDF_FILE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `diploma_cst`
--
ALTER TABLE `diploma_cst`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hs`
--
ALTER TABLE `hs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `secondary`
--
ALTER TABLE `secondary`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diploma`
--
ALTER TABLE `diploma`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diploma_cst`
--
ALTER TABLE `diploma_cst`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hs`
--
ALTER TABLE `hs`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `secondary`
--
ALTER TABLE `secondary`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

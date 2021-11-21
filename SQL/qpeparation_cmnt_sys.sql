-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 08:08 PM
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
-- Database: `qpeparation_cmnt_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `diploma_cst_comments`
--

CREATE TABLE `diploma_cst_comments` (
  `comment_id` int(255) NOT NULL,
  `parent_comment_id` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_sender_name` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diploma_cst_comments`
--

INSERT INTO `diploma_cst_comments` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(8, 0, 'This is a very nice website, Thank You!', 'Shibu Dhara', '2021-09-24 21:40:36'),
(9, 8, 'You really think so? Actually its needs to work more...', 'Uttam Sarkar', '2021-09-24 22:24:19'),
(10, 0, 'OOps i didnt find my question sheet', 'Sayan Mondal', '2021-09-24 22:35:40'),
(11, 10, 'Tell me which one you want?', 'Nilu Gandu', '2021-09-24 22:38:09'),
(12, 11, 'You can opt for request...', 'Admin', '2021-09-24 22:43:36'),
(13, 11, 'I want the Network..', 'Sayan Mondal', '2021-09-24 22:44:23'),
(14, 0, 'Good Morning friends', 'Shibu Dhara', '2021-09-24 22:44:46'),
(15, 14, 'Good morning', 'Sayan Mondal', '2021-09-24 22:46:39'),
(16, 14, 'Its Afternoon', 'Nilu Gandu', '2021-09-24 22:47:11'),
(17, 14, 'Good Night', 'Uttam Sarkar', '2021-09-24 22:47:41'),
(18, 17, 'Where are you? drunk', 'Shibu Dhara', '2021-09-24 22:49:16'),
(19, 18, 'I\'m sure you drunk', 'Uttam Sarkar', '2021-09-24 22:49:51'),
(20, 0, 'Shibu are you there?', 'Mampi', '2021-09-24 22:51:07'),
(21, 20, 'Why you came?', 'Shibu', '2021-09-24 22:51:52'),
(22, 21, 'i\'m searching you', 'Mampi', '2021-09-24 22:52:27'),
(23, 20, 'I am counting on you', 'Shibu', '2021-09-24 22:54:47'),
(24, 0, 'Hello friends chai pilo', 'Shibu Dhara', '2021-09-24 22:55:39'),
(25, 24, 'Tu pee bsdk', 'Nilu Gandu', '2021-09-24 22:56:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diploma_cst_comments`
--
ALTER TABLE `diploma_cst_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diploma_cst_comments`
--
ALTER TABLE `diploma_cst_comments`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

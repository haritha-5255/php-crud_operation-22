-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 08:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candidates`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_table`
--

CREATE TABLE `candidate_table` (
  `candi_id` int(10) NOT NULL,
  `candi_name` varchar(100) NOT NULL,
  `candi_mail` varchar(200) NOT NULL,
  `candi_mobile` varchar(25) NOT NULL,
  `candi_dob` date NOT NULL,
  `candi_address` varchar(400) NOT NULL,
  `candi_doc` text NOT NULL,
  `candi_status` int(3) NOT NULL DEFAULT 1,
  `candi_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_table`
--

INSERT INTO `candidate_table` (`candi_id`, `candi_name`, `candi_mail`, `candi_mobile`, `candi_dob`, `candi_address`, `candi_doc`, `candi_status`, `candi_date`) VALUES
(2, 'prajith haritha', 'prajithharitha@gmail.com', '9539495255', '0000-00-00', 'naduvath\r\nmalappuram', 'Screenshot (8).png', 1, '0000-00-00 00:00:00'),
(3, 'prajith haritha', 'prajithharitha@gmail.com', '9539495255', '0000-00-00', 'naduvath\r\nmalappuram', 'Screenshot (9).png', 1, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_table`
--
ALTER TABLE `candidate_table`
  ADD PRIMARY KEY (`candi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_table`
--
ALTER TABLE `candidate_table`
  MODIFY `candi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

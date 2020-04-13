-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2020 at 11:06 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `reimbursement`
--

CREATE TABLE `reimbursement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `team_manager` varchar(200) NOT NULL,
  `bill_number` varchar(200) NOT NULL,
  `bill_amount` varchar(50) NOT NULL,
  `bill_date` date NOT NULL,
  `ug_nominee` datetime DEFAULT NULL,
  `facad` datetime DEFAULT NULL,
  `sac_office` datetime DEFAULT NULL,
  `dean` datetime DEFAULT NULL,
  `account_section` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reimbursement`
--

INSERT INTO `reimbursement` (`id`, `name`, `team_manager`, `bill_number`, `bill_amount`, `bill_date`, `ug_nominee`, `facad`, `sac_office`, `dean`, `account_section`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'one', 'one', '1212', '1000', '2020-04-13', '2020-04-13 16:54:52', '2020-04-13 17:03:05', '2020-04-13 17:03:15', '2020-04-13 17:04:35', '2020-04-13 17:07:37', '2020-04-13 16:52:58', '2020-04-13 17:07:37', NULL),
(9, 'two', 'test', '1212l', '1520', '2020-04-13', '2020-04-13 16:55:05', '2020-04-13 17:24:24', NULL, NULL, NULL, '2020-04-13 16:53:15', '2020-04-13 17:24:24', NULL),
(10, 'three', 'teset teste', '1212', '1000', '2020-04-06', NULL, NULL, NULL, NULL, NULL, '2020-04-13 16:53:30', '2020-04-13 16:53:30', NULL),
(11, 'four', 'gajkg', '1212', '1000', '2020-04-13', NULL, NULL, NULL, NULL, NULL, '2020-04-13 16:53:46', '2020-04-13 16:53:46', NULL),
(12, 'five', 'test', '1212l', 'test', '2020-04-06', NULL, NULL, NULL, NULL, NULL, '2020-04-13 16:54:01', '2020-04-13 16:54:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reimbursement`
--
ALTER TABLE `reimbursement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reimbursement`
--
ALTER TABLE `reimbursement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

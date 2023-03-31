-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2022 at 11:23 AM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deveimjh_asiavpnpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admob`
--

CREATE TABLE `admob` (
  `type` int(10) NOT NULL,
  `app_id` text NOT NULL,
  `admob_banner` text NOT NULL,
  `admob_inter` text NOT NULL,
  `admob_native` text NOT NULL,
  `admob_openads` text NOT NULL,
  `active` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admob`
--

INSERT INTO `admob` (`type`, `app_id`, `admob_banner`, `admob_inter`, `admob_native`, `admob_openads`, `active`) VALUES
(1, 'ca-app-pub-3940256099942544~3347511713', 'ca-app-pub-3940256099942544/6300978111', 'ca-app-pub-3940256099942544/1033173712', 'ca-app-pub-3940256099942544/2247696110', 'ca-app-pub-3940256099942544/3419835294', '0');

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `server_id` int(11) NOT NULL,
  `HostName` varchar(100) NOT NULL,
  `Flag` varchar(100) NOT NULL,
  `IP` varchar(15) NOT NULL,
  `ServerStatus` bit(1) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`server_id`, `HostName`, `Flag`, `IP`, `ServerStatus`, `Type`) VALUES
(1, 'Select the Servers', 'f_0', '74.208.108.200', b'1', 1),
(2, 'United States', 'united_states_of_america', '74.208.108.200', b'1', 1),
(3, 'Canada', 'canada', '74.208.16.57', b'1', 1),
(4, 'Australia', 'australia', '34.165.255.134', b'1', 1),
(6, 'Canada', 'canada', '74.208.108.200', b'1', 1),
(7, 'Spain', 'spain', '74.208.108.200', b'1', 1),
(8, 'Singapore', 'singapore', '51.79.254.64', b'1', 1),
(9, 'United Kingdom', 'united_kingdom', '51.195.203.175', b'1', 1),
(10, 'France', 'france', '74.208.108.200', b'1', 1),
(11, 'Etisalat/DU Data/WiFi', 'united_arab_emirates', '34.165.255.134', b'1', 1),
(12, 'Germany', 'germany', '74.208.108.200', b'1', 1),
(13, 'Germany 2', 'germany', '51.195.203.175', b'1', 1),
(14, 'India', 'india', '217.160.194.25', b'1', 1),
(15, 'Germany 4', 'germany', '167.86.97.108', b'1', 1),
(19, 'Portugal', 'portugal', '167.86.97.108', b'1', 1),
(21, 'Israel', 'israel', '34.165.255.134', b'1', 1),
(22, 'Canada', 'canada', '66.175.236.215', b'1', 1),
(24, 'United States', 'united_states_of_america', '34.165.255.134', b'1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_update`
--

CREATE TABLE `tbl_update` (
  `id` int(11) NOT NULL,
  `version` text NOT NULL,
  `version_name` text NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_update`
--

INSERT INTO `tbl_update` (`id`, `version`, `version_name`, `description`, `url`) VALUES
(1, '09', '1.0.9', 'Asia VPN Users please Update Your Apps\r\n', 'https://play.google.com/store/apps/details?id=com.asapps.asiavpn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admob`
--
ALTER TABLE `admob`
  ADD UNIQUE KEY `type` (`type`),
  ADD KEY `admobbanner2` (`admob_native`(1000)),
  ADD KEY `ad_rewarded` (`admob_banner`(1000));

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`server_id`);

--
-- Indexes for table `tbl_update`
--
ALTER TABLE `tbl_update`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `server_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_update`
--
ALTER TABLE `tbl_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 07:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nid` int(20) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `number` int(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `email`, `password`, `username`, `name`, `nid`, `image`, `number`, `address`) VALUES
(4, 'fatin@gmail.com', '$2y$10$YoJ9X5fhWtlVLLZjmfoX1.ou19lDjZJgeMLcqSksKNh19/JRA1vuq', 'admin', 'fatin israq tabib', 111, 'DecodingCricket.jpg', 178234521, 'house:10, block:c, Road:3 , banasree, rampura');

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `request_id` int(100) NOT NULL,
  `target_email` varchar(200) NOT NULL,
  `Sender_name` varchar(100) NOT NULL,
  `Reciver_name` varchar(100) NOT NULL,
  `Sender_email` varchar(100) NOT NULL,
  `Sender_id` int(100) NOT NULL,
  `reciver_id` int(100) NOT NULL,
  `status` int(1) DEFAULT 0,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`request_id`, `target_email`, `Sender_name`, `Reciver_name`, `Sender_email`, `Sender_id`, `reciver_id`, `status`, `msg`) VALUES
(45, 'tabib@gmail.com', 'sabab', 'fatin israq tabib', 'admin@email.com', 2, 6, 0, 'hello vai kemon asen'),
(46, 'admin@fmail.com', 'sabab', 'Fatin Israq', 'admin@email.com', 2, 7, 1, 'hello vai kemon asen'),
(47, 'admin@email.com', 'Fatin Israq', 'sabab', 'admin@fmail.com', 7, 2, 0, 'hello vai kemon asen');

-- --------------------------------------------------------

--
-- Table structure for table `matchplay`
--

CREATE TABLE `matchplay` (
  `ID` int(100) NOT NULL,
  `team1` varchar(100) NOT NULL,
  `team2` varchar(111) NOT NULL,
  `venue` varchar(111) NOT NULL,
  `time` datetime NOT NULL,
  `winer` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matchplay`
--

INSERT INTO `matchplay` (`ID`, `team1`, `team2`, `venue`, `time`, `winer`) VALUES
(1, 'india', 'bangladesh', 'bangladesh', '2023-12-06 23:39:00', 'bangladesh'),
(2, 'afg', 'india', 'afg', '2023-12-23 23:45:00', 'india'),
(4, 'india', 'bangladesh', 'bangladesh', '2023-12-19 22:08:00', ''),
(5, 'afg', 'afg', 'afg', '2023-12-19 22:08:00', ''),
(6, 'afg', 'afg', 'india', '2023-12-19 22:08:00', 'afg'),
(7, 'afg', 'afg', 'india', '2023-12-19 22:11:00', ''),
(8, 'afg', 'afg', 'bangladesh', '2023-12-19 22:25:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `player_info`
--

CREATE TABLE `player_info` (
  `Player_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `NID` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Profile_Photo` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Played_Match` int(11) NOT NULL,
  `Runs` int(11) NOT NULL,
  `Wickets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player_info`
--

INSERT INTO `player_info` (`Player_ID`, `Name`, `Phone_Number`, `NID`, `Address`, `Email`, `Password`, `Profile_Photo`, `Position`, `Played_Match`, `Runs`, `Wickets`) VALUES
(2, 'sabab', 2147483647, 111, 'house:10, block:c, Road:3 , banasree, rampura', 'admin@email.com', '$2y$10$W5uaTTyMLIvByFHvHffIxO8GNqKaKS82iIsA64QVgfVtM1pMoW6.6', 'Cricket_Clipart_PNG_Images,_Icc_Cricket_World_Cup_Cricket_Championship.jpg', 'letf ', 34, 567, 9),
(6, 'fatin israq tabib', 178124567, 333, 'hello', 'tabib@gmail.com', '$2y$10$kPJ1pytmjgt2tug3zb3Fde9r4Bf/zUKTKgku5bFfmvEejC01kzllW', 'Premium_Vector_Abstract_batsman_playing_cricket_from_splash_of_watercolors.jpg', '', 0, 0, 0),
(7, 'Fatin Israq', 178124567, 222, 'house:10, block:c, Road:3 , banasree, rampura', 'admin@fmail.com', '$2y$10$MNulbklcqvEP4.mscwx1heFqgJOoQJJRx3R7d/xJtobFtjxYIkcW2', 'user.jpg', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `playmatch`
--

CREATE TABLE `playmatch` (
  `ID` int(100) NOT NULL,
  `1team` varchar(100) NOT NULL,
  `2team` varchar(111) NOT NULL,
  `venue` varchar(111) NOT NULL,
  `time` datetime NOT NULL,
  `winner` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `ID` int(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `player1` varchar(100) NOT NULL,
  `player2` varchar(100) NOT NULL,
  `player3` varchar(100) NOT NULL,
  `player4` varchar(100) NOT NULL,
  `player5` varchar(100) NOT NULL,
  `player6` varchar(100) NOT NULL,
  `player7` varchar(100) NOT NULL,
  `player8` varchar(100) NOT NULL,
  `player9` varchar(100) NOT NULL,
  `player10` varchar(100) NOT NULL,
  `player11` varchar(100) NOT NULL,
  `ID1` int(100) NOT NULL,
  `ID2` int(111) NOT NULL,
  `ID3` int(111) NOT NULL,
  `ID4` int(111) NOT NULL,
  `ID5` int(111) NOT NULL,
  `ID6` int(111) NOT NULL,
  `ID7` int(111) NOT NULL,
  `ID8` int(111) NOT NULL,
  `ID9` int(111) NOT NULL,
  `ID10` int(111) NOT NULL,
  `ID11` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`ID`, `venue`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`, `ID1`, `ID2`, `ID3`, `ID4`, `ID5`, `ID6`, `ID7`, `ID8`, `ID9`, `ID10`, `ID11`) VALUES
(1, 'bangladesh', 'tabib', 'sabab', 'rahat', 'ejaaz', 'fahim', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'india', 'tabib', 'sabab', 'rahat', 'ejaaz', 'fahim', 'hbnn', 'gbhjb', 'hjii', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'MY', 'sabab', 'fatin', 'tabib', 'ejaaz', '', '', '', '', '', '', '', 2, 6, 7, 9, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `matchplay`
--
ALTER TABLE `matchplay`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `player_info`
--
ALTER TABLE `player_info`
  ADD PRIMARY KEY (`Player_ID`);

--
-- Indexes for table `playmatch`
--
ALTER TABLE `playmatch`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `matchplay`
--
ALTER TABLE `matchplay`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `player_info`
--
ALTER TABLE `player_info`
  MODIFY `Player_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playmatch`
--
ALTER TABLE `playmatch`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

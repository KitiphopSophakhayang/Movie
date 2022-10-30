-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 04:01 PM
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
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `AID` int(13) NOT NULL,
  `Aname` varchar(30) NOT NULL,
  `Alastname` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Atel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`AID`, `Aname`, `Alastname`, `Gender`, `Atel`) VALUES
(1111, 'คริส', 'อีแวนส์', 'ชาย', '0874451266'),
(1112, 'สการ์เลตต์ ', 'โจแฮนส์สัน', 'หญิง', '0998887746'),
(1113, ' มาร์ก ', 'รัฟฟาโล', 'ชาย', '0941123255'),
(1114, 'ทอม ', 'ฮอลแลนด์', 'ชาย', '0855563321'),
(1115, 'คริส', 'เฮมสวอร์ธ', 'ชาย', '0863336558');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MID` int(13) NOT NULL,
  `Mname` varchar(30) NOT NULL,
  `MLastname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MID`, `Mname`, `MLastname`, `Email`, `Tel`) VALUES
(2001, 'พงษ์ทอง ', 'พงษ์สมบัติ', 'pppp555@mail.com', '0812399974'),
(2002, 'บดินทร์​ศักดิ์​ ', 'แสงทับทิม', 'ooiooi12@mail.com', '0995411289'),
(2003, 'ชญานนท์ ', 'แผลงฤทธิ์', 'yoyo@mail.com', '0826321445'),
(2004, 'ทศพร ', 'มุสิพันธ', 'lookoo@mail.com', '0974452115'),
(2005, 'ประกาศิต', 'พงษ์สมบัติ', 'ooiooi999@mail.com', '0941123652');

-- --------------------------------------------------------

--
-- Table structure for table `movieactor`
--

CREATE TABLE `movieactor` (
  `Amount` int(13) NOT NULL,
  `AID` int(11) NOT NULL,
  `MovieID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `MovieID` int(13) NOT NULL,
  `Moviename` varchar(30) NOT NULL,
  `Descriptions` varchar(70) NOT NULL,
  `Time` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`MovieID`, `Moviename`, `Descriptions`, `Time`, `Date`) VALUES
(1001, 'Avengers Endgame', 'เป็นภาพยนตร์อเมริกันแนวซูเปอร์ฮีโร่ ', '3 ชม. 2 นาที', '2018-09-19'),
(1002, 'Black Widow', 'เป็นภาพยนตร์อเมริกันแนวซูเปอร์ฮีโร่ ', '2 ชม. 14 นาที', '2021-09-21'),
(1003, 'Thor 3: Ragnarok', 'เป็นภาพยนตร์อเมริกันแนวซูเปอร์ฮีโร่ ', '2 ชม. 10 นาที', '2022-09-13'),
(1004, 'Spider-Man No Way Home', 'เป็นภาพยนตร์อเมริกันแนวซูเปอร์ฮีโร่ ', '2 ชม. 28 นาที', '2021-09-11'),
(1005, 'Captain America', 'เป็นภาพยนตร์ซูเปอร์ฮีโร่อเมริกัน', '2 ชม. 2 นาที', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `MID` int(11) NOT NULL,
  `MovieID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `movieactor`
--
ALTER TABLE `movieactor`
  ADD KEY `AID` (`AID`),
  ADD KEY `MovieID` (`MovieID`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD KEY `MovieID` (`MovieID`),
  ADD KEY `MID` (`MID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

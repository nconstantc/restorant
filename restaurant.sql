-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 12:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `USERNAME` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`USERNAME`, `Message`, `DATE`) VALUES
('DHD', 'SHDH', '2022-08-02 08:06:25'),
('DHD', 'SHDH', '2022-08-02 08:06:26'),
('DHD', 'SHDH', '2022-08-02 08:06:26'),
('DHD', 'SHDH', '2022-08-02 08:06:26'),
('DHD', 'SHDH', '2022-08-02 08:06:27'),
('DHD', 'SHDH', '2022-08-02 08:06:27'),
('CADFSA', 'SHDH', '2022-08-02 08:06:32'),
('MUKAMANA Emmaculle', 'great JOB', '2022-08-02 08:13:29'),
('NIYONIZERA Diane', 'this site is special one', '2022-08-02 08:14:10'),
('DUSABE peter', 'Amizing bro', '2022-08-02 08:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cid` int(11) NOT NULL,
  `CFname` varchar(200) NOT NULL,
  `CLname` varchar(200) NOT NULL,
  `Clocation` varchar(200) NOT NULL,
  `Ctel` varchar(20) NOT NULL,
  `TIME OF REGISTRATION` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cid`, `CFname`, `CLname`, `Clocation`, `Ctel`, `TIME OF REGISTRATION`) VALUES
(1, 'MANIRAKIZA', 'NYIRAMBARUSHIMANA', 'KIGALi', '2', '2022-08-01 12:36:08'),
(2, 'MANIRAKIZA', 'NYIRAMBARUSHIMANA', 'KIGALi', '127', '2022-08-01 12:36:08'),
(3, 'claude', 'NYIRAMBARUSHIMANA', 'KIGALi', '127', '2022-08-01 12:36:08'),
(4, 'CLAUDETTE', 'NYIRAMBARUSHIMANA', 'KIGALi', '127', '2022-08-01 12:36:08'),
(5, 'CLAUDETTE', 'NYIRAMBARUSHIMANA', 'KIGALi', '127', '2022-08-01 12:36:08'),
(6, 'BORIS', 'NYIRAMBARUSHIMANA', 'KIGALi', '127', '2022-08-01 12:36:08'),
(7, 'PATRIC', 'NYIRAMBARUSHIMANA', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(8, 'MERSA', 'NYIRAMBARUSHIMANA', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(9, 'MERSA', 'MERSA', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(10, 'BENJAMIN', 'BENJAMIN', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(11, 'MURAGIJIMANA', 'MURAGIJIMANA', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(13, 'claude', 'claude', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(14, '', '', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(15, '', '', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(16, 'MUGABO', 'MUGABO', 'KIGALi', '782004043', '2022-08-01 12:36:08'),
(17, '', '', 'KIGALi', '782004043', '2022-08-01 19:13:08'),
(18, 'Happi', 'Happi', 'KIGALi', '782004043', '2022-08-01 19:14:02'),
(19, 'MUHAYIMANA', 'MUHAYIMANA', 'KIGALi', '782004043', '2022-08-01 19:20:56'),
(20, '', '', 'KIGALi', '782004043', '2022-08-01 19:29:53'),
(21, '', '', 'KIGALi', '782004043', '2022-08-01 19:31:09'),
(22, '', '', 'KIGALi', '782004043', '2022-08-01 19:32:16'),
(23, '', '', 'KIGALi', '782004043', '2022-08-01 19:32:42'),
(24, '', '', 'KIGALi', '782004043', '2022-08-01 19:32:43'),
(25, '', '', 'KIGALi', '782004043', '2022-08-01 19:32:44'),
(26, '', '', 'KIGALi', '782004043', '2022-08-01 19:32:44'),
(27, '', '', 'KIGALi', '782004043', '2022-08-01 19:32:44'),
(28, '', '', 'KIGALi', '782004043', '2022-08-01 19:33:05'),
(29, '', '', 'KIGALi', '782004043', '2022-08-01 19:33:06'),
(30, '', '', 'KIGALi', '782004043', '2022-08-01 19:33:06'),
(31, '', '', 'KIGALi', '782004043', '2022-08-01 19:33:06'),
(32, '', '', 'KIGALi', '782004043', '2022-08-01 19:33:06'),
(33, 'MUHAYIMANA', 'MUHAYIMANA', 'KIGALi', '782004043', '2022-08-01 19:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Fid` int(11) NOT NULL,
  `Ftype` varchar(200) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `FTtprice` int(11) NOT NULL,
  `Tno` varchar(200) NOT NULL,
  `FQUANTINTY` int(11) NOT NULL,
  `FTcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Fid`, `Ftype`, `NAME`, `FTtprice`, `Tno`, `FQUANTINTY`, `FTcost`) VALUES
(1, 'Amata', '', 12, '212', 12312, 213),
(2, 'Amata', '', 200, '12', 3, 1234),
(3, 'AGATOGO', '', 600, '3', 3, 1800),
(4, 'IMVANGE', '', 700, '2', 4, 2800),
(5, 'Amata', '', 500, '2', 1, 500),
(6, 'BOILO', '', 1000, '1', 2, 2000),
(7, 'GAKONDO', '', 3000, '5', 2, 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Fid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 01:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lm`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phno` int(10) NOT NULL,
  `email` varchar(78) NOT NULL,
  `message` varchar(200) NOT NULL,
  `view` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phno`, `email`, `message`, `view`, `time`) VALUES
(3, '', 0, '', '', 0, '2021-07-03 09:57:12'),
(4, 'kushvith chinna', 2147483647, 'kushvithchinna900@gmail.com', '111111', 0, '2021-07-03 09:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `fphno` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile no` int(10) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `course` varchar(40) NOT NULL,
  `centre` varchar(10) NOT NULL,
  `social` varchar(20) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `verfication` varchar(25) NOT NULL,
  `follow` varchar(25) NOT NULL,
  `assign` varchar(60) NOT NULL,
  `stat` varchar(25) NOT NULL,
  `rejquery` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id`, `fname`, `sname`, `dob`, `gender`, `lang`, `fathername`, `fphno`, `address`, `city`, `state`, `zip`, `email`, `mobile no`, `qual`, `course`, `centre`, `social`, `comments`, `time`, `verfication`, `follow`, `assign`, `stat`, `rejquery`) VALUES
(3, 'kushvith', 'chinna', '0000-00-00', 'Male', 'english', '', 0, '12 5yfm hv,gk', 'dttj', 'dtjdjd', 560062, 'kushvith@yahoo.com', 0, '', 'electronics', 'GTC', '', '12', '2021-07-02 13:28:36', 'accepted', 'interested', 'kushvithchinna900@gmail.com', '', 'there was a problem with money\n'),
(8, 'kushvith', 'chinna', '0000-00-00', 'Male', 'english', '12', 9, '12 5yfm hv,gk', 'dttj', 'dtjdjd', 560062, 'kyg', 0, '12', 'computer science ', 'NEC', '', '', '2021-07-02 12:12:45', 'accepted', 'interested', 'kushvithchinna90@gmail.com', 'pending', ''),
(9, 'kushvith', 'chinna', '123456', 'Male', 'english', 'as', 12345, '12 5yfm hv,gk', 'dttj', 'dtjdjd', 560062, 'kushvithchinna900@gmail.com', 2147483647, 'asas', 'computer science ', 'NEC', '', '', '2021-07-02 07:28:59', 'accepted', 'interested', 'kushvithchinna@gmail.com', 'pending', ''),
(10, 'kushvith', 'chinna', '123456', 'Male', 'english', 'as', 12345, '12 5yfm hv,gk', 'dttj', 'dtjdjd', 560062, 'kushvithchinna900@gmail.com', 2147483647, 'asas', 'computer science ', 'NEC', 'facebook', '', '2021-07-02 04:47:12', 'pending', '', '', '', ''),
(11, 'kushvith', 'chinna', '', 'Male', 'english', 'as', 5, '12 5yfm hv,gk', 'dttj', 'dtjdjd', 560062, 'kushvithchinna900@gmail.com', 0, 'asas', 'computer science ', 'NEC', 'admin', '', '2021-07-02 05:01:41', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `department` varchar(25) NOT NULL,
  `centre` varchar(25) NOT NULL,
  `user` varchar(24) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `md` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `department`, `centre`, `user`, `time`, `md`) VALUES
(1, 'kushvith', 'a@gmail.com', '1', 'computer', '', 'admin', '2021-06-25 07:48:31', ''),
(16, 'kushvith chinna', 'kushvithchinna900@gmail.com', '1', 'computer science', 'GTC', 'staff', '2021-07-03 07:58:55', 'fcf04c366c0896913df97c8e372c0d02'),
(17, 'kushvith chinna', 'kushvithchinna90@gmail.com', '1', 'computer science', 'NEC', 'staff', '2021-07-02 12:04:02', ''),
(19, 'kushvith chinna', 'kushvithchinna@gmail.com', '1', 'computer science', 'NEC', 'staff', '2021-07-02 06:30:17', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

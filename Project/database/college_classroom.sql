-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 01:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_classroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `am-iii`
--

CREATE TABLE `am-iii` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `am-iii`
--

INSERT INTO `am-iii` (`id`, `name`, `message`, `created_on`) VALUES
(1, 'Irfan Khan', ' fdbgfd', '2020-11-28 00:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `dld`
--

CREATE TABLE `dld` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dld`
--

INSERT INTO `dld` (`id`, `name`, `message`, `created_on`) VALUES
(1, 'Irfan Khan', 'fgnfg', '2020-11-28 00:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `edc-i`
--

CREATE TABLE `edc-i` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edc-i`
--

INSERT INTO `edc-i` (`id`, `name`, `message`, `created_on`) VALUES
(1, 'Irfan Khan', 'cncng', '2020-11-28 00:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `ic`
--

CREATE TABLE `ic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic`
--

INSERT INTO `ic` (`id`, `name`, `message`, `created_on`) VALUES
(1, 'Irfan Khan', 'ncgvngv', '2020-11-28 00:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `pbl`
--

CREATE TABLE `pbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbl`
--

INSERT INTO `pbl` (`id`, `name`, `message`, `created_on`) VALUES
(1, 'Adnan Abidi', 'Hello everyone', '2020-11-28 00:33:23'),
(2, 'Irfan Khan', 'Hello', '2020-11-28 00:34:25'),
(3, 'Teacher', 'Hello students', '2020-11-28 00:38:18'),
(4, 'Adnan Abidi', 'Maam I have a doubt', '2020-11-28 00:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `year` varchar(2) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `division` varchar(1) NOT NULL,
  `roll_no` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `number`, `modified_on`, `year`, `branch`, `division`, `roll_no`) VALUES
(1, 'Adnan Abidi', 'adnan@gmail.com', '12345', '44357756', '2020-11-28 00:33:02', 'SE', 'EXTC', 'A', 1),
(2, 'Irfan Khan', 'irfan@gmail.com', '1234', '4643645345', '2020-11-28 00:34:19', 'SE', 'EXTC', 'A', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `password`, `number`, `modified_on`, `subject`) VALUES
(1, 'Teacher', 'teacher@gmail.com', '123', '352665345', '2020-11-28 00:37:59', 'PBL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `am-iii`
--
ALTER TABLE `am-iii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dld`
--
ALTER TABLE `dld`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edc-i`
--
ALTER TABLE `edc-i`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic`
--
ALTER TABLE `ic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pbl`
--
ALTER TABLE `pbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `am-iii`
--
ALTER TABLE `am-iii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dld`
--
ALTER TABLE `dld`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edc-i`
--
ALTER TABLE `edc-i`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ic`
--
ALTER TABLE `ic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pbl`
--
ALTER TABLE `pbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

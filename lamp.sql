-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 06:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'admin'),
('user1', 'user1', 'user'),
('user2', 'user2', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `lampp`
--

CREATE TABLE `lampp` (
  `fa_living_room` tinyint(1) NOT NULL,
  `fa_bathroom` tinyint(1) NOT NULL,
  `fa_dining_room` tinyint(1) NOT NULL,
  `fa_bedroom` tinyint(1) NOT NULL,
  `fa_kitchen` tinyint(1) NOT NULL,
  `rm_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampp`
--

INSERT INTO `lampp` (`fa_living_room`, `fa_bathroom`, `fa_dining_room`, `fa_bedroom`, `fa_kitchen`, `rm_id`) VALUES
(0, 0, 0, 0, 0, 'AA - 01'),
(0, 0, 0, 0, 0, 'AA - 02'),
(0, 0, 0, 0, 0, 'AA - 03'),
(0, 0, 0, 0, 0, 'AA - 04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_facility`
--

CREATE TABLE `tb_facility` (
  `fa_living_room` tinyint(1) NOT NULL,
  `fa_bathroom` tinyint(1) NOT NULL,
  `fa_dining_room` tinyint(1) NOT NULL,
  `fa_bedroom` tinyint(1) NOT NULL,
  `fa_kitchen` tinyint(1) NOT NULL,
  `id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_facility`
--

INSERT INTO `tb_facility` (`fa_living_room`, `fa_bathroom`, `fa_dining_room`, `fa_bedroom`, `fa_kitchen`, `id`) VALUES
(1, 1, 0, 1, 1, 1),
(1, 0, 0, 0, 0, 2),
(0, 0, 0, 0, 0, 3),
(1, 0, 0, 0, 0, 4),
(1, 1, 1, 1, 1, 5),
(0, 0, 0, 0, 0, 6),
(0, 0, 0, 0, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'admin'),
('user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `lampp`
--
ALTER TABLE `lampp`
  ADD PRIMARY KEY (`rm_id`);

--
-- Indexes for table `tb_facility`
--
ALTER TABLE `tb_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 09:19 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_prj`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `fname` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `account` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`fname`, `lname`, `account`, `pass`, `email`) VALUES
('ar', 'ew1', 'df', '827ccb0eea8a706c4c34a16891f84e', 'qq@gmail.com'),
('ert', 'erte', 'eeeer', 'c20ad4d76fe97759aa27a0c99bff67', 'q@yahoo.com'),
('m', 'nemati', 'm-nemati', '14', 'hggg'),
('m', 'nemati', 'm2-nemati', '1234', 'hggg'),
('m2', 'm-nemati', 'm3-nemati', '123', 'info@yahoo.com'),
('ty', 'ty', 'ty', 'ty', 'ty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`account`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 08:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbi_question`
--

CREATE TABLE `tbi_question` (
  `code` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `answer` enum('A','B','C','D','E') NOT NULL,
  `option_a` varchar(250) NOT NULL,
  `option_b` varchar(250) NOT NULL,
  `option_c` varchar(250) NOT NULL,
  `option_d` varchar(250) NOT NULL,
  `option_e` varchar(250) NOT NULL,
  `book` text NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbi_question`
--

INSERT INTO `tbi_question` (`code`, `question`, `answer`, `option_a`, `option_b`, `option_c`, `option_d`, `option_e`, `book`, `video`) VALUES
('SOAL_1_TBI', 'Pertanyaan 1', 'A', 'Opsi A', 'Opsi B', 'Opsi C', 'Opsi D', 'Opsi E', '1536560431.pdf', '1536560431.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbi_question`
--
ALTER TABLE `tbi_question`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2018 at 12:33 PM
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
-- Table structure for table `e_book`
--

CREATE TABLE `e_book` (
  `code` varchar(50) NOT NULL,
  `class` varchar(250) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `file_name` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_book`
--

INSERT INTO `e_book` (`code`, `class`, `subject`, `publisher`, `description`, `file_name`, `img`) VALUES
('AGAMA_ISLAM_SD_ERLANGGA', 'Sekolah Dasar (SD)', 'Agama Islam', 'Erlangga', 'Pendidikan Agama - Agama Islam Jenjang Pembelajaran Sekolah Dasar (SD) E-Book Erlangga', '1533992985.pdf', '1533992587.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `learning_level`
--

CREATE TABLE `learning_level` (
  `code` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `class` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learning_level`
--

INSERT INTO `learning_level` (`code`, `name`, `class`, `age`, `description`, `img`) VALUES
('1-SD', 'Sekolah Dasar (SD)', 'Kelas 1 - 6', 'Umur 7 - 12 Tahun', 'Sekolah Dasar (SD)', '1533968770.png'),
('2-SMP', 'Sekolah Menengah Pertama (SMP)', 'Kelas 7 - 9', 'Umur 13 - 15 Tahun', 'Sekolah Menengah Pertama (SMP)', '1533968775.png'),
('3-SMA', 'Sekolah Menengah Atas (SMA)', 'Kelas 10 - 12', 'Umur 16 - 18 Tahun', 'Sekolah Menengah Atas (SMA)', '1533968782.png'),
('4-SMK', 'Sekolah Menengah Kejuruan (SMK)', 'Kelas 10 - 12', 'Umur 16 - 18 Tahun', 'Sekolah Menengah Kejuruan (SMK)', '1533968787.png');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `code` varchar(50) NOT NULL,
  `class` varchar(250) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `question` text NOT NULL,
  `answer` enum('A','B','C','D','E') NOT NULL,
  `option_a` varchar(250) DEFAULT NULL,
  `option_b` varchar(250) DEFAULT NULL,
  `option_c` varchar(250) DEFAULT NULL,
  `option_d` varchar(250) DEFAULT NULL,
  `option_e` varchar(250) DEFAULT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`code`, `class`, `subject`, `question`, `answer`, `option_a`, `option_b`, `option_c`, `option_d`, `option_e`, `video`) VALUES
('AGAMA_ISLAM_SD_ERLANGGA_KUIS', 'Sekolah Dasar (SD)', 'Agama Islam', 'Pertanyaan 1', 'A', 'Opsi A', 'Opsi B', 'Opsi C', '', '', '1534005029.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `code` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `class` varchar(250) NOT NULL,
  `category` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `seat` int(10) NOT NULL,
  `rating` enum('1','2','3','4','5') DEFAULT NULL,
  `price` varchar(150) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`code`, `name`, `class`, `category`, `description`, `seat`, `rating`, `price`, `img`) VALUES
('AGAMA_ISLAM_SD', 'Agama Islam', 'Sekolah Dasar (SD)', 'Pendidikan Agama', 'Pendidikan Agama - Agama Islam Jenjang Pembelajaran Sekolah Dasar (SD)', 10, NULL, '50000', '1533970999.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `code` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(150) NOT NULL,
  `status` enum('Admin','Pelajar','Guru') NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `instagram` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`code`, `email`, `password`, `name`, `status`, `phone_number`, `facebook`, `twitter`, `instagram`) VALUES
('1534067468', 'ocky.aditia@gmail.com', 'QcDyeQS0E6qEoYCSSoXDwRutwirqLKORqjOk3WyNds3yTxbNOr9DPjn1QzrpfwsbzhMX6Ou4mvEsFn1cSX0Vbcsi2O+s+RXNW/588VxMOUrNvaHXVYFob6Up1HC+aKVbcvN+t5Zv9YEbPQ7V9HkAd7eXXAO63/TYf972C2hxPno=', 'Ocky Aditia Saputra', 'Pelajar', '+6281288104708', 'https://www.facebook.com/ocky.aditia', 'https://twitter.com/ockyaditia', 'https://www.instagram.com/ockyaditia/'),
('ADMIN', 'admin@guru.com', 'KQ2cwGcWIGA8IoOemDG3Iaj3iVsRHjuqcdIg8CyRAw4OHS3GqDglOQEbyXgp3pqImKOyECh1PlAqFXTm++qiG39RHqpjlgEqoVWjQaN1vzE5P6Hq7yjXEHkcAcdZKaS1f8go+vaiozvWPkd1qLgLFnz00KrYb1vbu/8iAjM0ky4=', 'Admin', 'Admin', '+6281288104708', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `code` varchar(50) NOT NULL,
  `class` varchar(250) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`code`, `class`, `subject`, `publisher`, `description`, `file_name`) VALUES
('AGAMA_ISLAM_SD_ERLANGGA_VIDEO1', 'Sekolah Dasar (SD)', 'Agama Islam', 'Agama Islam Video Materi 1', 'Pendidikan Agama - Agama Islam Jenjang Pembelajaran Sekolah Dasar (SD) Video Materi 1', '1534005029.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_book`
--
ALTER TABLE `e_book`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `learning_level`
--
ALTER TABLE `learning_level`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

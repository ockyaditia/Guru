-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 07:46 AM
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
-- Table structure for table `majesty_package`
--

CREATE TABLE `majesty_package` (
  `code` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `duration` int(50) NOT NULL,
  `package` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majesty_package`
--

INSERT INTO `majesty_package` (`code`, `name`, `subject`, `description`, `detail`, `price`, `duration`, `package`) VALUES
('KEDINASAN_1_PAKET_1', 'Paket 1', 'KEDINASAN_1', 'Deskripsi Paket 1', 'Penjelasan Paket 1', '50000', 6, 5),
('STAN_PAKET_1', 'Paket 1', 'STAN', 'Deskripsi Paket 1', 'Penjelasan Paket 1', '500000', 6, 5),
('STAN_PAKET_2', 'Paket 2', 'STAN', 'Deskripsi Paket 2', 'Penjelasan Paket 2', '1000000', 6, 10),
('STAN_PAKET_3', 'Paket 3', 'STAN', 'Deskripsi Paket 3', 'Penjelasan Paket 3', '1500000', 6, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `majesty_package`
--
ALTER TABLE `majesty_package`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

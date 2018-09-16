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
-- Table structure for table `transactions_majesty`
--

CREATE TABLE `transactions_majesty` (
  `code` int(11) NOT NULL,
  `user_code` varchar(50) NOT NULL,
  `package_code` varchar(50) NOT NULL,
  `payment_code` varchar(50) NOT NULL,
  `bank_name` varchar(150) NOT NULL,
  `account_name` varchar(150) NOT NULL,
  `account_number` varchar(150) NOT NULL,
  `img` text NOT NULL,
  `approval` int(1) NOT NULL DEFAULT '1',
  `timestamp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions_majesty`
--

INSERT INTO `transactions_majesty` (`code`, `user_code`, `package_code`, `payment_code`, `bank_name`, `account_name`, `account_number`, `img`, `approval`, `timestamp`) VALUES
(1, 'ADMIN', 'STAN_PAKET_1', 'BCA1', 'BCA', 'Ocky Aditia Saputra', 'XXXXXXXXXXXXXX', '1537074614.png', 3, '1537074614'),
(2, 'ADMIN', 'KEDINASAN_1_PAKET_1', 'BCA1', 'BCA', 'Ocky Aditia Saputra', 'XXXXXXXXXXXXXX', '1537076712.png', 3, '1537076712');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions_majesty`
--
ALTER TABLE `transactions_majesty`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions_majesty`
--
ALTER TABLE `transactions_majesty`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

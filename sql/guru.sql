-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Agu 2018 pada 10.35
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `code` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about_us`
--

INSERT INTO `about_us` (`code`, `text`) VALUES
('TENTANG_KAMI', '.....');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`code` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`code`, `name`, `date`, `comment`) VALUES
(2, 'Nama 1', '24-08-2018', 'Komentar 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `code` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`code`, `text`) VALUES
('KONTAK_KAMI', '.....');

-- --------------------------------------------------------

--
-- Struktur dari tabel `e_book`
--

CREATE TABLE IF NOT EXISTS `e_book` (
  `code` varchar(50) NOT NULL,
  `class` varchar(250) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `file_name` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `e_book`
--

INSERT INTO `e_book` (`code`, `class`, `subject`, `publisher`, `description`, `file_name`, `img`) VALUES
('AGAMA_ISLAM_SD_ERLANGGA', 'Sekolah Dasar (SD)', 'Agama Islam', 'Erlangga', 'Pendidikan Agama - Agama Islam Jenjang Pembelajaran Sekolah Dasar (SD) E-Book Erlangga', '1533992985.pdf', '1533992587.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `code` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `help`
--

INSERT INTO `help` (`code`, `text`) VALUES
('HELP', '.....');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `code` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`code`, `email`, `phone`, `facebook`, `twitter`, `instagram`) VALUES
('INFO', 'admin@guru.com', 'XXXX XXX XXXX', 'https://', 'https://', 'https://');

-- --------------------------------------------------------

--
-- Struktur dari tabel `learning_level`
--

CREATE TABLE IF NOT EXISTS `learning_level` (
  `code` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `class` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `learning_level`
--

INSERT INTO `learning_level` (`code`, `name`, `class`, `age`, `description`, `img`) VALUES
('1-SD', 'Sekolah Dasar (SD)', 'Kelas 1 - 6', 'Umur 7 - 12 Tahun', 'Sekolah Dasar (SD)', '1533968770.png'),
('2-SMP', 'Sekolah Menengah Pertama (SMP)', 'Kelas 7 - 9', 'Umur 13 - 15 Tahun', 'Sekolah Menengah Pertama (SMP)', '1533968775.png'),
('3-SMA', 'Sekolah Menengah Atas (SMA)', 'Kelas 10 - 12', 'Umur 16 - 18 Tahun', 'Sekolah Menengah Atas (SMA)', '1533968782.png'),
('4-SMK', 'Sekolah Menengah Kejuruan (SMK)', 'Kelas 10 - 12', 'Umur 16 - 18 Tahun', 'Sekolah Menengah Kejuruan (SMK)', '1533968787.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `learning_level_menu`
--

CREATE TABLE IF NOT EXISTS `learning_level_menu` (
  `code` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `learning_level_menu`
--

INSERT INTO `learning_level_menu` (`code`, `name`, `img`) VALUES
('1-UMUM', 'Umum', '1535075649.png'),
('2-STAN', 'STAN', '1535075703.png'),
('3-KEJURUSAN', 'Kejurusan', '1535075738.png'),
('4-UJIAN-PTN', 'Ujian PTN', '1535075761.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `code` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`code`, `name`, `img`) VALUES
('LOGO', 'Guru', '1535074094.ico');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `code` varchar(50) NOT NULL,
  `bank_name` varchar(150) NOT NULL,
  `account_name` varchar(150) NOT NULL,
  `account_number` varchar(150) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`code`, `bank_name`, `account_name`, `account_number`, `img`) VALUES
('BCA1', 'Bank BCA 1', 'Nama Rekening 1', 'Nomor Rekening 1', '1534295354.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
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
-- Dumping data untuk tabel `quiz`
--

INSERT INTO `quiz` (`code`, `class`, `subject`, `question`, `answer`, `option_a`, `option_b`, `option_c`, `option_d`, `option_e`, `video`) VALUES
('AGAMA_ISLAM_SD_ERLANGGA_KUIS_PERTANYAAN_1', 'Sekolah Dasar (SD)', 'Agama Islam', 'Pertanyaan 1', 'A', 'Opsi A', 'Opsi B', 'Opsi C', '', '', '1534005029.mp4'),
('AGAMA_ISLAM_SD_ERLANGGA_KUIS_PERTANYAAN_2', 'Sekolah Dasar (SD)', 'Agama Islam', 'Pertanyaan 2', 'B', 'Opsi A', 'Opsi B', 'Opsi C', 'Opsi D', 'Opsi E', '1534005029.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
`code` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sponsor`
--

INSERT INTO `sponsor` (`code`, `name`, `description`, `img`) VALUES
(2, 'Sponsor 1', 'Deskripsi Sponsor 1', '1535095988.jpg'),
(3, 'Sponsor 2', 'Deskripsi Sponsor 2', '1535096015.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
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
-- Dumping data untuk tabel `subjects`
--

INSERT INTO `subjects` (`code`, `name`, `class`, `category`, `description`, `seat`, `rating`, `price`, `img`) VALUES
('AGAMA_ISLAM_SD', 'Agama Islam', 'Sekolah Dasar (SD)', 'Pendidikan Agama', 'Pendidikan Agama - Agama Islam Jenjang Pembelajaran Sekolah Dasar (SD)', 10, NULL, '50000', '1533970999.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
`code` int(50) NOT NULL,
  `user_code` varchar(50) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `payment_code` varchar(50) NOT NULL,
  `bank_name` varchar(150) NOT NULL,
  `account_name` varchar(150) NOT NULL,
  `account_number` varchar(150) NOT NULL,
  `img` text NOT NULL,
  `approval` int(1) NOT NULL DEFAULT '1',
  `timestamp` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`code`, `user_code`, `subject_code`, `payment_code`, `bank_name`, `account_name`, `account_number`, `img`, `approval`, `timestamp`) VALUES
(1, 'ADMIN', 'AGAMA_ISLAM_SD', 'BCA1', 'BCA', 'Ocky Aditia Saputra', '0123456789', '1534298667.png', 3, '1534298667');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access`
--

CREATE TABLE IF NOT EXISTS `user_access` (
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
-- Dumping data untuk tabel `user_access`
--

INSERT INTO `user_access` (`code`, `email`, `password`, `name`, `status`, `phone_number`, `facebook`, `twitter`, `instagram`) VALUES
('1534067468', 'ocky.aditia@gmail.com', 'QcDyeQS0E6qEoYCSSoXDwRutwirqLKORqjOk3WyNds3yTxbNOr9DPjn1QzrpfwsbzhMX6Ou4mvEsFn1cSX0Vbcsi2O+s+RXNW/588VxMOUrNvaHXVYFob6Up1HC+aKVbcvN+t5Zv9YEbPQ7V9HkAd7eXXAO63/TYf972C2hxPno=', 'Ocky Aditia Saputra', 'Pelajar', '+6281288104708', 'https://www.facebook.com/ocky.aditia', 'https://twitter.com/ockyaditia', 'https://www.instagram.com/ockyaditia/'),
('2062299767126954', 'undefined', '', 'Ocky Aditia', 'Pelajar', '', '', NULL, NULL),
('ADMIN', 'admin@guru.com', 'KQ2cwGcWIGA8IoOemDG3Iaj3iVsRHjuqcdIg8CyRAw4OHS3GqDglOQEbyXgp3pqImKOyECh1PlAqFXTm++qiG39RHqpjlgEqoVWjQaN1vzE5P6Hq7yjXEHkcAcdZKaS1f8go+vaiozvWPkd1qLgLFnz00KrYb1vbu/8iAjM0ky4=', 'Admin', 'Admin', '+6281288104708', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `code` varchar(50) NOT NULL,
  `class` varchar(250) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`code`, `class`, `subject`, `publisher`, `description`, `file_name`) VALUES
('AGAMA_ISLAM_SD_ERLANGGA_VIDEO1', 'Sekolah Dasar (SD)', 'Agama Islam', 'Agama Islam Video Materi 1', 'Pendidikan Agama - Agama Islam Jenjang Pembelajaran Sekolah Dasar (SD) Video Materi 1', '1534005029.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `e_book`
--
ALTER TABLE `e_book`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `learning_level`
--
ALTER TABLE `learning_level`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `learning_level_menu`
--
ALTER TABLE `learning_level_menu`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `code` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
MODIFY `code` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
MODIFY `code` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

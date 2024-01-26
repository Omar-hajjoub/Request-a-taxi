-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 03:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Usernam` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentaires_utilisateurs`
--

CREATE TABLE `commentaires_utilisateurs` (
  `id` int(11) NOT NULL,
  `Usernam_clie` varchar(100) NOT NULL,
  `Usernam_taxi` varchar(100) NOT NULL,
  `commentaires` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maps1`
--

CREATE TABLE `maps1` (
  `id` int(11) NOT NULL,
  `home` varchar(50) NOT NULL,
  `cty` varchar(100) NOT NULL,
  `num_C` varchar(255) NOT NULL,
  `numro` int(13) NOT NULL,
  `prix` int(255) NOT NULL,
  `km` varchar(255) NOT NULL,
  `mint` varchar(255) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maps1`
--

INSERT INTO `maps1` (`id`, `home`, `cty`, `num_C`, `numro`, `prix`, `km`, `mint`, `nom`) VALUES
(10, '6GX3+PGV, El Jadida, Morocco', 'أكادير', '10', 655560301, 0, 'المسافة: 441.88 كم', 'الوقت المقدر: 306.00 دقيقة', 'omar stars');

-- --------------------------------------------------------

--
-- Table structure for table `omar`
--

CREATE TABLE `omar` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firsname` varchar(50) NOT NULL,
  `lasname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reclamtions`
--

CREATE TABLE `reclamtions` (
  `id` int(11) NOT NULL,
  `Usernam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numro` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `probléme` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `firsnam` varchar(50) NOT NULL,
  `lasnim` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numro` int(13) NOT NULL,
  `city` varchar(255) NOT NULL,
  `cartnamber` varchar(255) NOT NULL,
  `chek` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `firsnam`, `lasnim`, `email`, `numro`, `city`, `cartnamber`, `chek`, `image`) VALUES
(40, 'omar ', 'stars', 'omarhajjoub57@gmail.com', 655560301, 'El Jadid', 'mx1245', ' صاحب سيارة ', '');

-- --------------------------------------------------------

--
-- Table structure for table `talab`
--
-- Error reading structure for table online.talab: #1932 - Table &#039;online.talab&#039; doesn&#039;t exist in engine
-- Error reading data for table online.talab: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `online`.`talab`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `taxismall`
--

CREATE TABLE `taxismall` (
  `id` int(11) NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `tel_input` int(13) NOT NULL,
  `city_input` varchar(255) NOT NULL,
  `search_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taxismall`
--

INSERT INTO `taxismall` (`id`, `user_input`, `tel_input`, `city_input`, `search_input`) VALUES
(19, 'omar stars', 655560301, '6GX3+PGV, El Jadida, Morocco', 'صيدلية ملكة');

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numro` int(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Fore_Name` varchar(100) NOT NULL,
  `ACTIVTI` tinyint(1) NOT NULL,
  `SECRTY_CODE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `numro`, `password`, `First_Name`, `Fore_Name`, `ACTIVTI`, `SECRTY_CODE`) VALUES
(34, 'ouissal soual', 'ouissalsoual0606@gmail.com', 0, '0606@OUIOMAR', '', '', 0, ''),
(35, 'ziko', 'omarstarsfre@gmail.com', 0, 'omar', '', '', 0, ''),
(36, 'omar hajjoub', 'omahajjub@gmail.com', 0, '1234', '', '', 0, ''),
(37, 'omar stars', 'omarhajjoub57@gmail.com', 0, 'Oi0606', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `‏tblissues_taxi‏`
--

CREATE TABLE `‏tblissues_taxi‏` (
  `id` int(11) NOT NULL,
  `Usernam_taxi` varchar(100) NOT NULL,
  `Usernam_cli` varchar(100) NOT NULL,
  `commentaires` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaires_utilisateurs`
--
ALTER TABLE `commentaires_utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps1`
--
ALTER TABLE `maps1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `omar`
--
ALTER TABLE `omar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reclamtions`
--
ALTER TABLE `reclamtions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxismall`
--
ALTER TABLE `taxismall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `‏tblissues_taxi‏`
--
ALTER TABLE `‏tblissues_taxi‏`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commentaires_utilisateurs`
--
ALTER TABLE `commentaires_utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maps1`
--
ALTER TABLE `maps1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `omar`
--
ALTER TABLE `omar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reclamtions`
--
ALTER TABLE `reclamtions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `taxismall`
--
ALTER TABLE `taxismall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `‏tblissues_taxi‏`
--
ALTER TABLE `‏tblissues_taxi‏`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

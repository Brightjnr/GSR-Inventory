-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 09:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
create schema gsrproject;
use gsrproject;
-- Database: `gsrproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwordd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `username`, `passwordd`) VALUES
(1, 'admin1', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `edituser`
--

CREATE TABLE `edituser` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `statuss` varchar(255) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `snumber` varchar(255) NOT NULL,
  `extensionn` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `supervisorr` varchar(255) NOT NULL,
  `expirydate` varchar(255) NOT NULL,
  `pdrivedep` varchar(255) NOT NULL,
  `pdrivelevel` varchar(255) NOT NULL,
  `coremail` varchar(255) NOT NULL,
  `homenet` varchar(255) NOT NULL,
  `internetaccess` varchar(255) NOT NULL,
  `accjust` varchar(255) NOT NULL,
  `prontoaccess` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `same` varchar(255) NOT NULL,
  `accre` varchar(255) NOT NULL,
  `accpa` varchar(255) NOT NULL,
  `genled` varchar(255) NOT NULL,
  `fixedass` varchar(255) NOT NULL,
  `purchaselevel` varchar(255) NOT NULL,
  `inventlevel` varchar(255) NOT NULL,
  `mainlevel` varchar(255) NOT NULL,
  `prolevel` varchar(255) NOT NULL,
  `sysadmin` varchar(255) NOT NULL,
  `dbaccess` varchar(255) NOT NULL,
  `dbjus` varchar(255) NOT NULL,
  `dbreq` varchar(255) NOT NULL,
  `usersign` varchar(255) NOT NULL,
  `sitee` varchar(255) NOT NULL,
  `authorizedby` varchar(255) NOT NULL,
  `authsign` varchar(255) NOT NULL,
  `authposition` varchar(255) NOT NULL,
  `authtele` varchar(255) NOT NULL,
  `authsite` varchar(255) NOT NULL,
  `itusername` varchar(255) NOT NULL,
  `proccessedby` varchar(255) NOT NULL,
  `ittdate` varchar(255) NOT NULL,
  `pronusername` varchar(255) NOT NULL,
  `proproccessed` varchar(255) NOT NULL,
  `prontodate` varchar(255) NOT NULL,
  `statuz` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edituser`
--

INSERT INTO `edituser` (`id`, `lname`, `fname`, `statuss`, `ptitle`, `dep`, `snumber`, `extensionn`, `phone`, `supervisorr`, `expirydate`, `pdrivedep`, `pdrivelevel`, `coremail`, `homenet`, `internetaccess`, `accjust`, `prontoaccess`, `role`, `same`, `accre`, `accpa`, `genled`, `fixedass`, `purchaselevel`, `inventlevel`, `mainlevel`, `prolevel`, `sysadmin`, `dbaccess`, `dbjus`, `dbreq`, `usersign`, `sitee`, `authorizedby`, `authsign`, `authposition`, `authtele`, `authsite`, `itusername`, `proccessedby`, `ittdate`, `pronusername`, `proproccessed`, `prontodate`, `statuz`) VALUES
(10, 'Okrah', 'Peter', 'Contractor', 'NSS', 'IT', 'NSS2215', 'Office', 546708194, 'Donald', '2023-04-09', 'P:Finance', 'One', 'External', 'No', 'Yes', '', 'Select option', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Jus', 'dbreq', 'OBJ', 'Wassa', 'Donald', 'P.O', 'Cost', '054670819466', 'Benso', 'eackon', '<br', '', '', '', '', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `finaltable`
--

CREATE TABLE `finaltable` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `statuss` varchar(255) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `snumber` varchar(255) NOT NULL,
  `extensionn` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `supervisorr` varchar(255) NOT NULL,
  `expirydate` varchar(255) NOT NULL,
  `pdrivedep` varchar(255) NOT NULL,
  `pdrivelevel` varchar(255) NOT NULL,
  `coremail` varchar(255) NOT NULL,
  `homenet` varchar(255) NOT NULL,
  `internetaccess` varchar(255) NOT NULL,
  `accjust` varchar(255) NOT NULL,
  `prontoaccess` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `same` varchar(255) NOT NULL,
  `accre` varchar(255) NOT NULL,
  `accpa` varchar(255) NOT NULL,
  `genled` varchar(255) NOT NULL,
  `fixedass` varchar(255) NOT NULL,
  `purchaselevel` varchar(255) NOT NULL,
  `inventlevel` varchar(255) NOT NULL,
  `mainlevel` varchar(255) NOT NULL,
  `prolevel` varchar(255) NOT NULL,
  `sysadmin` varchar(255) NOT NULL,
  `dbaccess` varchar(255) NOT NULL,
  `dbjus` varchar(255) NOT NULL,
  `dbreq` varchar(255) NOT NULL,
  `usersign` varchar(255) NOT NULL,
  `sitee` varchar(255) NOT NULL,
  `authorizedby` varchar(255) NOT NULL,
  `authsign` varchar(255) NOT NULL,
  `authposition` varchar(255) NOT NULL,
  `authtele` varchar(255) NOT NULL,
  `authsite` varchar(255) NOT NULL,
  `itusername` varchar(255) NOT NULL,
  `proccessedby` varchar(255) NOT NULL,
  `ittdate` varchar(255) NOT NULL,
  `pronusername` varchar(255) NOT NULL,
  `proproccessed` varchar(255) NOT NULL,
  `prontodate` varchar(255) NOT NULL,
  `statuz` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finaltable`
--


-- --------------------------------------------------------

--
-- Table structure for table `itstaff`
--

CREATE TABLE `itstaff` (
  `id` int(11) NOT NULL,
  `surnamee` varchar(255) NOT NULL,
  `passwordd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itstaff`
--

INSERT INTO `itstaff` (`id`, `surnamee`, `passwordd`) VALUES
(1, 'Kainyah', '***gsr-1'),
(2, 'Donald', '***gsr-1'),
(3, 'Ackon', '***gsr-1'),
(4, 'Andoh', '***gsr-1'),
(5, 'Addy', '***gsr-1'),
(6, 'Okrah', '***gsr-1'),
(7, 'Annan', '***gsr-1'),
(8, 'Gyekye', '***gsr-1'),
(9, 'Asantewaa', '***gsr-1'),
(10, 'Nkansah', '***gsr-1'),
(11, 'Kwakye', '***gsr-1'),
(12, 'Anti', '***gsr-1');

-- --------------------------------------------------------

--
-- Table structure for table `itsup`
--

CREATE TABLE `itsup` (
  `id` int(11) NOT NULL,
  `surnamee` varchar(255) NOT NULL,
  `passwordd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itsup`
--

INSERT INTO `itsup` (`id`, `surnamee`, `passwordd`) VALUES
(1, 'Kainyah', '***gsr-1'),
(2, 'Donald', '***gsr-1'),
(3, 'Ackon', '***gsr-1'),
(4, 'Andoh', '***gsr-1'),
(5, 'Addy', '***gsr-1'),
(6, 'Okrah', '***gsr-1');

-- --------------------------------------------------------

--
-- Table structure for table `userform`
--

CREATE TABLE `userform` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `statuss` varchar(255) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `snumber` varchar(255) NOT NULL,
  `extensionn` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `supervisorr` varchar(255) NOT NULL,
  `expirydate` varchar(255) NOT NULL,
  `pdrivedep` varchar(255) NOT NULL,
  `pdrivelevel` varchar(255) NOT NULL,
  `coremail` varchar(255) NOT NULL,
  `homenet` varchar(255) NOT NULL,
  `internetaccess` varchar(255) NOT NULL,
  `accjust` varchar(255) NOT NULL,
  `prontoaccess` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `same` varchar(255) NOT NULL,
  `accre` varchar(255) NOT NULL,
  `accpa` varchar(255) NOT NULL,
  `genled` varchar(255) NOT NULL,
  `fixedass` varchar(255) NOT NULL,
  `purchaselevel` varchar(255) NOT NULL,
  `inventlevel` varchar(255) NOT NULL,
  `mainlevel` varchar(255) NOT NULL,
  `prolevel` varchar(255) NOT NULL,
  `sysadmin` varchar(255) NOT NULL,
  `dbaccess` varchar(255) NOT NULL,
  `dbjus` varchar(255) NOT NULL,
  `dbreq` varchar(255) NOT NULL,
  `usersign` varchar(255) NOT NULL,
  `sitee` varchar(255) NOT NULL,
  `authorizedby` varchar(255) NOT NULL,
  `authsign` varchar(255) NOT NULL,
  `authposition` varchar(255) NOT NULL,
  `authtele` varchar(255) NOT NULL,
  `authsite` varchar(255) NOT NULL,
  `itusername` varchar(255) NOT NULL,
  `proccessedby` varchar(255) NOT NULL,
  `ittdate` varchar(255) NOT NULL,
  `pronusername` varchar(255) NOT NULL,
  `proproccessed` varchar(255) NOT NULL,
  `prontodate` varchar(255) NOT NULL,
  `statuz` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userform`
--

INSERT INTO `userform` (`id`, `lname`, `fname`, `statuss`, `ptitle`, `dep`, `snumber`, `extensionn`, `phone`, `supervisorr`, `expirydate`, `pdrivedep`, `pdrivelevel`, `coremail`, `homenet`, `internetaccess`, `accjust`, `prontoaccess`, `role`, `same`, `accre`, `accpa`, `genled`, `fixedass`, `purchaselevel`, `inventlevel`, `mainlevel`, `prolevel`, `sysadmin`, `dbaccess`, `dbjus`, `dbreq`, `usersign`, `sitee`, `authorizedby`, `authsign`, `authposition`, `authtele`, `authsite`, `itusername`, `proccessedby`, `ittdate`, `pronusername`, `proproccessed`, `prontodate`, `statuz`) VALUES
(29, 'Okrah', 'Peter', 'Contractor', 'NSS', 'IT', 'NSS2215', 'Office', 546708194, 'Donald', '2023-04-09', 'P:Finance', 'One', 'External', 'No', 'Yes', '', 'Select option', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Jus', 'dbreq', 'OBJ', 'Wassa', 'Donald', 'P.O', 'Cost analyst', '054670819466', 'Benso', '', '', '', '', '', '', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edituser`
--
ALTER TABLE `edituser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finaltable`
--
ALTER TABLE `finaltable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itsup`
--
ALTER TABLE `itsup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userform`
--
ALTER TABLE `userform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edituser`
--
ALTER TABLE `edituser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `finaltable`
--
ALTER TABLE `finaltable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `itsup`
--
ALTER TABLE `itsup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userform`
--
ALTER TABLE `userform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

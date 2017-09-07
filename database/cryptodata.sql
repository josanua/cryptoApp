-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Aug 2017 la 13:34
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cryptodata`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `Asset Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Symbol` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Buyed Price` int(11) NOT NULL,
  `Buyed Volume` int(11) NOT NULL,
  `Sold Volume` int(11) NOT NULL,
  `Sold Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `portfolio`
--

INSERT INTO `portfolio` (`Asset Name`, `Symbol`, `Buyed Price`, `Buyed Volume`, `Sold Volume`, `Sold Price`) VALUES
('Bitcoin', 'BTC', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
 ADD PRIMARY KEY (`Asset Name`), ADD UNIQUE KEY `Symbol` (`Symbol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

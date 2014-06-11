-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2014 at 02:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `phone`, `content`) VALUES
('ceva@alceva.com', '23123', '434234');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `title` text NOT NULL,
  `content` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `content`, `link`) VALUES
('Get 50% Promo Code!', 'Use the code : FairyTail and get 50% off for any room and duration !', ''),
('Read about our latest offers!', 'Advantageous prices all-across the board for pockets of all sizes !', 'offers.php'),
('Undecided?', 'Read today about what we have to offer ...', 'features.php');

-- --------------------------------------------------------

--
-- Table structure for table `ocupation`
--

CREATE TABLE IF NOT EXISTS `ocupation` (
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocupation`
--

INSERT INTO `ocupation` (`data`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `code` text NOT NULL,
  `effect` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`code`, `effect`) VALUES
('FairyTail', 'get 50% off!'),
('Bleach', 'get one night off');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `nume` text NOT NULL,
  `prenume` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `startday` int(11) NOT NULL,
  `startmonthyear` text NOT NULL,
  `endday` int(11) NOT NULL,
  `endmonthyear` text NOT NULL,
  `room` int(11) NOT NULL,
  `overbook` int(11) NOT NULL,
  `expireoverbook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `password`) VALUES
('admin', '$1$A35.JK/.$HFm1jE/HRENr3UHduor38/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

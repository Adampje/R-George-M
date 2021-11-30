-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2021 at 01:25 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `georgemboutrecht`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userrole` enum('root','admin','customer','moderator','kok','barman','ober','student') NOT NULL,
  `activated` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `userrole`, `activated`) VALUES
(21, 'c@c', '$2y$10$QvCjSznTlS9UYsBQxA1Wm.UJCl1IuPAcSidw/1lft4Pj3Oo47yJNu', 'customer', 1),
(23, 'm@m', '$2y$10$cWeZtxpiPDZNLDVNjWHjyOEnk8K/ZPDPPiS0tC5lAb2o7nM08H.Ry', 'moderator', 1),
(24, 'a@a', '$2y$10$vnLShDvjZiAbCB9/X0T5TujfawvVSYwp7MXlxNoqWl/S1wTgtXquG', 'admin', 1),
(26, 'kok@student.georgemarina.nl', '$2y$10$1QQficYkKMCwCu9FWeFqvu8PaZE/Efbxy3GOQBNOzzwE2ZqNEYpFi', 'kok', 1),
(27, 'barman@student.georgemarina.nl', '$2y$10$Oa0hVolLOF7mUBV4SzMO5eGr/Fo3LX98wgPgXQNLwPFcxFj5nyqcy', 'barman', 1),
(28, 'ober@student.georgemarina.nl', '$2y$10$V6IC6w8qDZw5TP8jVB4Yr.BkvO2Lw9du/GjZ9jAj0rSmHDL3ndhiG', 'ober', 1),
(29, 'r@r', '$2y$10$00H1vC1.kfIVR1LL3pO4...BtkywTTAbUORUJsAU69lPjLQS5gKL2', 'root', 1),
(30, '331509@student.georgemarina.nl', '$2y$10$oEpY1GScgUf6HAbmhlVmcOUyob8MQoQXB97BxsFBEnV23.n4/D9vC', 'student', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reserveren`
--

DROP TABLE IF EXISTS `reserveren`;
CREATE TABLE IF NOT EXISTS `reserveren` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Voornaam` varchar(150) NOT NULL,
  `Achternaam` varchar(150) NOT NULL,
  `personen` int(11) NOT NULL,
  `tafelofbar` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserveren`
--

INSERT INTO `reserveren` (`id`, `Voornaam`, `Achternaam`, `personen`, `tafelofbar`) VALUES
(9, 'Ryan', 'Lamsberg', 6, 'tafel'),
(13, 'Moemin', 'Amhaini', 1, 'tafel'),
(28, 'Taif', 'Rahim', 3, 'tafel'),
(27, 'tesst', 'test', 1, 'tafel');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `rol` varchar(25) NOT NULL,
  `omschrijving` varchar(225) NOT NULL,
  PRIMARY KEY (`rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`rol`, `omschrijving`) VALUES
('begeleider', 'begeleider van de studenten in dienst bij George'),
('docent', 'schoolbegeleider'),
('eigenaar', 'eigenaar van George'),
('klant', 'bezoekers van het restaurant'),
('student', 'studenten van MBO Utrecht');

-- --------------------------------------------------------

--
-- Table structure for table `soliciteren`
--

DROP TABLE IF EXISTS `soliciteren`;
CREATE TABLE IF NOT EXISTS `soliciteren` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `volledigenaam` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `telefoonnummer` int(60) NOT NULL,
  `positie` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soliciteren`
--

INSERT INTO `soliciteren` (`id`, `volledigenaam`, `email`, `telefoonnummer`, `positie`) VALUES
(8, 'barthe jasmijn', 'barthe@gmail.com', 61108348, '2'),
(9, 'test', 'test@testt', 612345678, '5'),
(10, 'test', '123@hotmial.com', 23, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

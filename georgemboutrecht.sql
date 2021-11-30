-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 30 nov 2021 om 12:58
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

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
-- Tabelstructuur voor tabel `begeleidersrooster`
--

DROP TABLE IF EXISTS `begeleidersrooster`;
CREATE TABLE IF NOT EXISTS `begeleidersrooster` (
  `id` int(11) NOT NULL,
  `begeleider` varchar(5) NOT NULL,
  `werkDatum` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_BR_Werkdag_idx` (`werkDatum`),
  KEY `fk_BR_Begeleider_idx` (`begeleider`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `begeleidersrooster`
--

INSERT INTO `begeleidersrooster` (`id`, `begeleider`, `werkDatum`) VALUES
(0, 'M.A', '2021-11-26');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `docentrooster`
--

DROP TABLE IF EXISTS `docentrooster`;
CREATE TABLE IF NOT EXISTS `docentrooster` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Week` int(7) NOT NULL,
  `Datum` date NOT NULL,
  `Tijd` time NOT NULL,
  `lokaal` varchar(4) NOT NULL,
  `Klas` varchar(4) NOT NULL,
  `userrole` enum('root','admin','customer','moderator','kok','barman','ober','student','docent') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `docentrooster`
--

INSERT INTO `docentrooster` (`id`, `Week`, `Datum`, `Tijd`, `lokaal`, `Klas`, `userrole`) VALUES
(1, 1, '2021-11-21', '08:30:00', '3.12', 'CK1A', 'docent'),
(2, 1, '2021-11-21', '09:30:00', '3.27', 'CK1B', 'docent');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerker`
--

DROP TABLE IF EXISTS `medewerker`;
CREATE TABLE IF NOT EXISTS `medewerker` (
  `email` varchar(100) NOT NULL,
  `achternaam` varchar(45) NOT NULL,
  `tussenvoegsel` varchar(10) DEFAULT NULL,
  `voornaam` varchar(45) NOT NULL,
  `mobiel` varchar(10) NOT NULL,
  `afkorting` varchar(5) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `medewerker`
--

INSERT INTO `medewerker` (`email`, `achternaam`, `tussenvoegsel`, `voornaam`, `mobiel`, `afkorting`) VALUES
('326758@docent.georgemarina.nl', 'Bacha', NULL, 'Adam', '0612345678', 'A.B'),
('330180@begeleider.georgemarina.nl', 'Amhaini', NULL, 'Moemin', '0612345678', 'M.A');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userrole` enum('root','admin','customer','moderator','kok','barman','ober','student','begeleider','docent','eigenaar') NOT NULL,
  `activated` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `userrole`, `activated`) VALUES
(21, 'c@c', '$2y$10$QvCjSznTlS9UYsBQxA1Wm.UJCl1IuPAcSidw/1lft4Pj3Oo47yJNu', 'customer', 1),
(23, 'm@m', '$2y$10$cWeZtxpiPDZNLDVNjWHjyOEnk8K/ZPDPPiS0tC5lAb2o7nM08H.Ry', 'moderator', 1),
(24, 'a@a', '$2y$10$vnLShDvjZiAbCB9/X0T5TujfawvVSYwp7MXlxNoqWl/S1wTgtXquG', 'admin', 1),
(26, 'kok@student.georgemarina.nl', '$2y$10$1QQficYkKMCwCu9FWeFqvu8PaZE/Efbxy3GOQBNOzzwE2ZqNEYpFi', 'kok', 1),
(27, 'barman@student.georgemarina.nl', '$2y$10$Oa0hVolLOF7mUBV4SzMO5eGr/Fo3LX98wgPgXQNLwPFcxFj5nyqcy', 'barman', 1),
(28, 'ober@student.georgemarina.nl', '$2y$10$V6IC6w8qDZw5TP8jVB4Yr.BkvO2Lw9du/GjZ9jAj0rSmHDL3ndhiG', 'ober', 1),
(29, 'r@r', '$2y$10$00H1vC1.kfIVR1LL3pO4...BtkywTTAbUORUJsAU69lPjLQS5gKL2', 'root', 1),
(30, '331509@student.georgemarina.nl', '$2y$10$oEpY1GScgUf6HAbmhlVmcOUyob8MQoQXB97BxsFBEnV23.n4/D9vC', 'student', 1),
(33, '330180@begeleider.georgemarina.nl', '$2y$10$ebRI2w5oV4tnW.EwsiLx9uTKIBRmm87IT9l5HOh1pw6cWit1zZ7xe', 'begeleider', 1),
(34, '326758@docent.georgemarina.nl', '$2y$10$TMwo.z3S8NDwWjLrE5R.AeXjRDfQVzvswsjfADQInw9tIODB1hES6', 'docent', 1),
(35, '329918@eigenaar.georgemarina.nl', '$2y$10$l6g6ILIyBjV2ySMeaJzKuuZndxQTnkc9Gzao/JbZ/L8IIrmZnaS4a', 'eigenaar', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveren`
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
-- Gegevens worden geëxporteerd voor tabel `reserveren`
--

INSERT INTO `reserveren` (`id`, `Voornaam`, `Achternaam`, `personen`, `tafelofbar`) VALUES
(9, 'Ryan', 'Lamsberg', 6, 'tafel'),
(13, 'Moemin', 'Amhaini', 1, 'tafel'),
(28, 'Taif', 'Rahim', 3, 'tafel'),
(27, 'tesst', 'test', 1, 'tafel');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `rol` varchar(25) NOT NULL,
  `omschrijving` varchar(225) NOT NULL,
  PRIMARY KEY (`rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `rol`
--

INSERT INTO `rol` (`rol`, `omschrijving`) VALUES
('begeleider', 'begeleider van de studenten in dienst bij George'),
('docent', 'schoolbegeleider'),
('eigenaar', 'eigenaar van George'),
('klant', 'bezoekers van het restaurant'),
('student', 'studenten van MBO Utrecht');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `soliciteren`
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
-- Gegevens worden geëxporteerd voor tabel `soliciteren`
--

INSERT INTO `soliciteren` (`id`, `volledigenaam`, `email`, `telefoonnummer`, `positie`) VALUES
(8, 'barthe jasmijn', 'barthe@gmail.com', 61108348, '2'),
(9, 'test', 'test@testt', 612345678, '5'),
(10, 'test', '123@hotmial.com', 23, '1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `studentnr` int(11) NOT NULL,
  `voornaam` varchar(45) NOT NULL,
  `tussenvoegsel` varchar(25) DEFAULT NULL,
  `achternaam` varchar(45) NOT NULL,
  `mobiel` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `woonplaats` varchar(45) NOT NULL,
  `straat` varchar(60) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `rol` varchar(25) NOT NULL DEFAULT 'student',
  `docent` varchar(5) NOT NULL,
  PRIMARY KEY (`studentnr`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_Student_Rol_idx` (`rol`),
  KEY `fk_Student_Docent_idx` (`docent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `student`
--

INSERT INTO `student` (`studentnr`, `voornaam`, `tussenvoegsel`, `achternaam`, `mobiel`, `email`, `woonplaats`, `straat`, `postcode`, `rol`, `docent`) VALUES
(331509, 'Ryan', NULL, 'Lamsberg', '0612345678', '331509@student.georgemarina.nl', 'Amsterdam', 'straat 147', '0000AA', 'student', 'Taif');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ziekmelden`
--

DROP TABLE IF EXISTS `ziekmelden`;
CREATE TABLE IF NOT EXISTS `ziekmelden` (
  `id` int(10) UNSIGNED NOT NULL,
  `volledigenaam` varchar(300) NOT NULL,
  `leerlingnummer` int(60) NOT NULL,
  `geboortedatum` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

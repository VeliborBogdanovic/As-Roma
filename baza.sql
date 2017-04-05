-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2015 at 01:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `podaci`
--

-- --------------------------------------------------------

--
-- Table structure for table `ankete`
--

CREATE TABLE IF NOT EXISTS `ankete` (
  `id_ankete` int(11) NOT NULL,
  `pitanje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aktivna` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ankete`
--

INSERT INTO `ankete` (`id_ankete`, `pitanje`, `aktivna`) VALUES
(1, 'Da li ce Roma pobediti ?', 0),
(2, 'Roma kida ? ', 0),
(3, 'Da li radi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `igraci`
--

CREATE TABLE IF NOT EXISTS `igraci` (
  `id_igrac` int(10) NOT NULL,
  `ime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `godine` int(10) NOT NULL,
  `pozicija` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `putanja` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `igraci`
--

INSERT INTO `igraci` (`id_igrac`, `ime`, `prezime`, `godine`, `pozicija`, `putanja`) VALUES
(1, 'Ashley', 'Cole', 36, 'odbrana', ''),
(2, 'Miralem', 'Pjanic', 25, 'centar', ''),
(3, 'Daniele', 'De Rossi', 32, 'centar', ''),
(4, 'Francesco', 'Totti', 40, 'napad', ''),
(5, 'Seydou', 'Keita', 35, 'centar', ''),
(6, 'Adem', 'Ljajic', 26, 'napad', ''),
(7, 'Mattia', 'Destro', 24, 'napad', ''),
(8, 'Bogdan', 'Lobont', 27, 'golman', ''),
(9, 'Kostas', 'Manolas', 22, 'odbrana', ''),
(10, 'Marco', 'Boriello', 23, 'napad', '');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(10) NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `adresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `broj` text COLLATE utf8_unicode_ci NOT NULL,
  `uloga` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `user`, `pass`, `adresa`, `email`, `broj`, `uloga`) VALUES
(1, 'user', 'user', 'Sarajevska9', 'user@gmail.com', '065123456', 'user'),
(2, 'admin', 'admin6713', 'Gornjacka49', 'admin@gmail.com', '065456789', 'admin'),
(34, 'Veliborboh', 'gggg', 'Oblakovska', 'veljaslavij@gmai.com', '0654207375', 'user'),
(35, 'Marko', 'marko1234', 'Knezamilosa', 'marko@gmail.com', '065123456', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE IF NOT EXISTS `meni` (
  `id` int(11) NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naziv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `roditelj` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meni`
--

INSERT INTO `meni` (`id`, `href`, `naziv`, `roditelj`) VALUES
(1, 'index.php', 'Pocetna', 0),
(2, 'galerija.php', 'Galerija', 0),
(3, '#', 'Kontakt', 0),
(4, 'oautoru.php', 'O autoru', 3),
(5, 'formular.php', 'Forma', 3),
(10, 'igraci.php', 'Igraci', 0);

-- --------------------------------------------------------

--
-- Table structure for table `odgovori`
--

CREATE TABLE IF NOT EXISTS `odgovori` (
  `id_odgovori` int(20) NOT NULL,
  `id_ankete` int(20) DEFAULT NULL,
  `odgovori` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `odgovori`
--

INSERT INTO `odgovori` (`id_odgovori`, `id_ankete`, `odgovori`) VALUES
(1, 1, 'Ne'),
(2, 1, 'Da'),
(3, 3, 'da'),
(4, 3, 'ne');

-- --------------------------------------------------------

--
-- Table structure for table `rezultat`
--

CREATE TABLE IF NOT EXISTS `rezultat` (
  `id_rezultat` int(11) NOT NULL,
  `id_ankete` int(11) DEFAULT NULL,
  `id_odgovori` int(11) DEFAULT NULL,
  `rezultat` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezultat`
--

INSERT INTO `rezultat` (`id_rezultat`, `id_ankete`, `id_odgovori`, `rezultat`) VALUES
(1, 1, 2, 16),
(2, 1, 1, 10),
(3, 3, 3, 0),
(4, 3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seria`
--

CREATE TABLE IF NOT EXISTS `seria` (
  `id_tim` int(11) NOT NULL,
  `tim` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `odigrano` int(20) NOT NULL,
  `poeni` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seria`
--

INSERT INTO `seria` (`id_tim`, `tim`, `odigrano`, `poeni`) VALUES
(1, 'Juventus', 27, 72),
(2, 'Roma', 26, 58),
(3, 'Napoli', 27, 55),
(4, 'Fiorentina', 27, 45),
(5, 'Inter', 27, 44),
(6, 'Parma', 26, 43),
(7, 'Verona', 27, 40),
(8, 'Lazio', 27, 40),
(9, 'Torino', 27, 36),
(10, 'Milan', 27, 35),
(11, 'Genoa', 27, 34),
(12, 'Sampodoria', 27, 33),
(13, 'Atlanta', 27, 33),
(14, 'Udinese', 27, 32),
(15, 'Cagliari', 27, 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ankete`
--
ALTER TABLE `ankete`
  ADD PRIMARY KEY (`id_ankete`);

--
-- Indexes for table `igraci`
--
ALTER TABLE `igraci`
  ADD PRIMARY KEY (`id_igrac`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meni`
--
ALTER TABLE `meni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odgovori`
--
ALTER TABLE `odgovori`
  ADD PRIMARY KEY (`id_odgovori`);

--
-- Indexes for table `rezultat`
--
ALTER TABLE `rezultat`
  ADD PRIMARY KEY (`id_rezultat`);

--
-- Indexes for table `seria`
--
ALTER TABLE `seria`
  ADD PRIMARY KEY (`id_tim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ankete`
--
ALTER TABLE `ankete`
  MODIFY `id_ankete` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `igraci`
--
ALTER TABLE `igraci`
  MODIFY `id_igrac` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `meni`
--
ALTER TABLE `meni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `odgovori`
--
ALTER TABLE `odgovori`
  MODIFY `id_odgovori` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rezultat`
--
ALTER TABLE `rezultat`
  MODIFY `id_rezultat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seria`
--
ALTER TABLE `seria`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

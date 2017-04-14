-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 14 apr 2017 om 13:00
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `portfolio`
--
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portfolio`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `div_info`
--

CREATE TABLE IF NOT EXISTS `div_info` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `div_id` int(2) NOT NULL,
  `num_txt` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `div_info`
--

INSERT INTO `div_info` (`id`, `div_id`, `num_txt`) VALUES
(2, 0, 1),
(3, 2, 3),
(4, 3, 3),
(5, 1, 1),
(6, 4, 1),
(7, 5, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `div_id` int(3) NOT NULL,
  `text` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `texts`
--

INSERT INTO `texts` (`id`, `div_id`, `text`) VALUES
(1, 0, 'Op deze pagina staan alle projecten die ik gemaakt heb.<br><a class=''klikHierLink'' onClick=''rightNavClick(1);''>Klik hier</a> om al mijn Web Development projecten te zien en <a class=''klikHierLink'' onClick=''rightNavClick(5);''>Klik hier</a> om naar mijn C# projecten te gaan'),
(2, 1, 'Hieronder vind je alle projecten die ik heb gedaan met Web Development.<br/>Wil je de projecten zien die ik met C# heb gedaan<span class=''vraagteken''>?</span> <a class=''klikHierLink'' onClick=''rightNavClick(5);''>Klik hier!</a>'),
(3, 2, 'Voor dit project moest ik een online gameshop maken met 3 categorieën: PC Xbox one en PS4'),
(4, 2, 'Alle games kunnen gesorteerd worden op verschillende criteria. Hier is veel JavaScript voor gebruikt.'),
(5, 2, 'Hier worden alle games getoond, hier wordt een PHP session voor gebruikt.'),
(6, 3, 'Voor deze opdracht heb ik een online muziek speler gemaakt met 3 albums.'),
(7, 3, 'Hier kunnen songs afgespeeld worden, en er kan tussen 3 albums gekozen worden. Hier wordt gebruikt gemaakt van een PHP array en javascript.'),
(8, 4, 'Deze calculator is volledig met javascript gemaakt.'),
(9, 5, 'Hier staan een aantal projecten die ik met C# heb gemaakt. Klik op de afbeeldingen voor meer informatie.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `titles`
--

CREATE TABLE IF NOT EXISTS `titles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titleText` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `titles`
--

INSERT INTO `titles` (`id`, `titleText`) VALUES
(1, 'Projecten'),
(2, 'Web Development'),
(3, 'GameWorld'),
(4, 'RadioGaga'),
(5, 'Calculator'),
(6, 'C#');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

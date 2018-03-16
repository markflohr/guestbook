-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 16 mrt 2018 om 08:53
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mark_flohr_guestbook`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `guestbook`
--

CREATE TABLE `guestbook` (
  `guestbookid` int(3) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `insertion` varchar(10) DEFAULT NULL,
  `lastName` varchar(100) NOT NULL,
  `messageTitle` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `websiteAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `guestbook`
--

INSERT INTO `guestbook` (`guestbookid`, `firstName`, `insertion`, `lastName`, `messageTitle`, `message`, `email`, `websiteAddress`) VALUES
(12, 'Mark', '', 'Flohr', 'title', 'message', 'markemail', 'website'),
(13, 'Mark', '', 'Flohr', 'title', 'message', 'markemail', 'website'),
(14, 'Mark', '', 'Flohr', 'title', 'message', 'markemail', 'website');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`guestbookid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `guestbookid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

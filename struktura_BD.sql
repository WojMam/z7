-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 04 Gru 2016, 22:16
-- Wersja serwera: 5.5.51-38.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `21746911_z7`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logi`
--

CREATE TABLE IF NOT EXISTS `logi` (
  `user` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `logi`
--

INSERT INTO `logi` (`user`, `date`, `status`) VALUES
('user1', '2016-12-04 13:56:21', 'Poprawne'),
('user1', '2016-12-04 13:56:36', 'Nieudane'),
('user1', '2016-12-04 13:58:48', 'Nieudane'),
('user1', '2016-12-04 13:59:35', 'Nieudane'),
('user1', '2016-12-04 14:04:32', 'Nieudane'),
('user2', '2016-12-04 14:05:26', 'Poprawne'),
('user2', '2016-12-04 14:05:36', 'Nieudane'),
('user1', '2016-12-04 14:06:22', 'Nieudane'),
('user1', '2016-12-04 14:07:45', 'Nieudane'),
('user1', '2016-12-04 14:36:48', 'Poprawne'),
('user4', '2016-12-04 14:55:07', 'Nieudane'),
('user4', '2016-12-04 14:55:18', 'Nieudane'),
('user4', '2016-12-04 14:55:23', 'Nieudane'),
('user4', '2016-12-04 14:55:38', 'Nieudane'),
('user4', '2016-12-04 14:55:52', 'Nieudane'),
('user1', '2016-12-04 14:59:07', 'Poprawne'),
('user1', '2016-12-04 15:00:03', 'Poprawne'),
('user1', '2016-12-04 15:35:41', 'Poprawne'),
('user1', '2016-12-04 15:37:21', 'Poprawne'),
('user1', '2016-12-04 15:40:31', 'Poprawne'),
('user1', '2016-12-04 15:43:41', 'Poprawne'),
('user3', '2016-12-04 15:50:19', 'Poprawne'),
('user1', '2016-12-04 15:54:37', 'Poprawne'),
('user1', '2016-12-04 17:19:53', 'Poprawne'),
('user1', '2016-12-04 17:22:44', 'Poprawne'),
('user1', '2016-12-04 18:06:04', 'Poprawne'),
('user1', '2016-12-04 18:16:30', 'Poprawne'),
('user1', '2016-12-04 19:17:31', 'Poprawne'),
('user1', '2016-12-04 19:31:58', 'Poprawne'),
('user1', '2016-12-04 19:32:35', 'Poprawne'),
('user1', '2016-12-04 19:32:41', 'Poprawne'),
('user1', '2016-12-04 19:33:16', 'Poprawne'),
('user1', '2016-12-04 19:37:55', 'Poprawne'),
('user1', '2016-12-04 19:41:28', 'Poprawne'),
('user1', '2016-12-04 19:42:45', 'Poprawne'),
('user1', '2016-12-04 19:44:02', 'Poprawne'),
('user1', '2016-12-04 19:47:56', 'Poprawne'),
('user1', '2016-12-04 19:49:02', 'Poprawne'),
('user1', '2016-12-04 19:49:42', 'Poprawne'),
('user1', '2016-12-04 19:59:26', 'Poprawne'),
('user1', '2016-12-04 20:11:26', 'Poprawne'),
('user2', '2016-12-04 20:16:55', 'Nieudane'),
('user2', '2016-12-04 20:17:01', 'Poprawne'),
('user1', '2016-12-04 20:18:58', 'Poprawne'),
('user1', '2016-12-04 20:24:20', 'Poprawne'),
('user4', '2016-12-04 20:40:00', 'Poprawne'),
('user4', '2016-12-04 20:40:07', 'Nieudane'),
('user4', '2016-12-04 20:40:11', 'Nieudane'),
('user4', '2016-12-04 20:40:18', 'Nieudane'),
('user1', '2016-12-04 20:48:49', 'Poprawne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `fails` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user`, `pass`, `fails`) VALUES
('user1', 'pass1', 0),
('user2', 'pass2', 0),
('user3', 'pass3', 0),
('user4', 'pass4', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

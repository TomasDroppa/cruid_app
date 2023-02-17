-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 17. úno 2023, 17:44
-- Verze serveru: 10.4.25-MariaDB
-- Verze PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `crud_operation`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `cenik`
--

CREATE TABLE `cenik` (
  `id` int(11) NOT NULL,
  `sluzba` varchar(255) NOT NULL,
  `cena` varchar(255) NOT NULL,
  `delka_foceni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `cenik`
--

INSERT INTO `cenik` (`id`, `sluzba`, `cena`, `delka_foceni`) VALUES
(1, 'Svatební focení', 'Cena na vyžádání', 'Celý den'),
(2, 'Miminka-lifestyle', '2 200 Kč', 'Cca 1 - 1,5 hod.'),
(4, 'a', 's', 'g'),
(5, 'asdfsa', 'asdfsd', 'jlkljk'),
(6, 'asdfsa', 'asdfsd', ''),
(7, 'asdfsa', '', 'adsfa'),
(8, 'asdfsa', '', 'adsfa'),
(9, '', 'asdfsd', 'adsfa'),
(13, 'avadafsdag', '100', '10000');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `cenik`
--
ALTER TABLE `cenik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `cenik`
--
ALTER TABLE `cenik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

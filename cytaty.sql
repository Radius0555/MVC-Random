-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Kwi 2019, 07:25
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cytaty`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cytaty`
--

CREATE TABLE `cytaty` (
  `id` int(2) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `artist_info` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `cytaty`
--

INSERT INTO `cytaty` (`id`, `artist`, `artist_info`, `content`) VALUES
(1, 'Mahatma Gandhi', 'Jeden z twórców współczesnej państwowości indyjskiej i propagator pacyfizmu jako środka nacisku politycznego.', 'Najpierw Cię ignorują. Potem śmieją się z ciebie. Później z tobą walczą. Później wygrywasz'),
(2, 'Jonathan Davis', 'Wokalista amerykańskiego zespołu nu-metalowego Korn. Najbardziej znany z utworu Word Up', 'Śmiejecie się ze mnie, bo jestem inny. Ja śmieję się z Was, bo wszyscy jesteście tacy sami..'),
(3, 'Dominick Coniguilaro', 'Biznesmen, coach biznesu', 'Jeśli chcesz osiągnąć to, czego nigdy nie miałeś, musisz robić to, czego nigdy nie robiłeś'),
(4, 'Adolf Harnack', 'Jeden z najwybitniejszych teologów i historyków wczesnochrześcijańskiej doktryny. Historyk dogmatu. Zajmował się m.in. gnostycyzmem i marcjonizmem.', 'Nic bardziej nie wzmacnia człowieka niż okazane mu zaufanie'),
(5, 'Beata Pawlikowska', 'Polska podróżniczka, pisarka, dziennikarka, tłumaczka, fotografka, ilustratorka książek.', 'Pamiętaj, że rozpada się tylko to, co było zbudowane na iluzji albo kłastwie. Rozpada się tylko po to, żeby zmusić Cię do szukania prawdy.'),
(6, 'RS Sharma', 'Wybitny historyk i naukowiec staroÅ¼ytnych i wczesnoÅ›redniowiecznych Indii ', 'KaÅ¼da zmiana jest trudna na poczÄ…tku, burzliwa w trakcie, cudowna na koÅ„cu.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cytaty`
--
ALTER TABLE `cytaty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `cytaty`
--
ALTER TABLE `cytaty`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

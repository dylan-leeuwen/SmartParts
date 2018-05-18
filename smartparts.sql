-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 mei 2018 om 22:41
-- Serverversie: 10.1.22-MariaDB
-- PHP-versie: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartparts`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adminuser`
--

CREATE TABLE `adminuser` (
  `admin_id` int(11) NOT NULL,
  `naam` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `adminuser`
--

INSERT INTO `adminuser` (`admin_id`, `naam`, `username`, `password`, `status`) VALUES
(1, 'Dylan', 'dylan', 'test', 'active');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `buyerstotalpieces` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `straat` varchar(255) NOT NULL,
  `huisnummer` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `plaats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `buyerstotalpieces`, `status`, `straat`, `huisnummer`, `postcode`, `plaats`) VALUES
(1, '1', '3', 'canceld', 'braziliestraat', '56', '2408MD', 'alphen aan den rijn'),
(7, '1', '3', 'paid', 'braziliestraat', '56', '2408MD', 'alphen aan den rijn'),
(8, '1', '3', 'paid', 'braziliestraat', '56', '2408MD', 'alphen aan den rijn'),
(9, '1', '3', 'done', 'braziliestraat', '56', '2408MD', 'alphen aan den rijn'),
(10, '1', '3', 'done', 'braziliestraat', '56', '2408MD', 'alphen aan den rijn'),
(11, '1', '3', 'done', 'braziliestraat', '56', '2408MD', 'alphen aan den rijn');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `product_id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `catogorie` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'active',
  `footer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`product_id`, `naam`, `omschrijving`, `catogorie`, `prijs`, `stock`, `status`, `footer`) VALUES
(200, 'Iphone 5 beeldscherm zwart', 'Iphone 5 scherm voor het repareren van uw kapote beeldscherm', 'iphone5', '19.95', '1', 'active', 'scherm,iphone 5,repair'),
(201, 'Iphone 5 beeldscherm wit', 'Iphone 5 scherm voor het repareren van uw kapote beeldscherm', 'iphone5', '19.95', '1', 'active', 'scherm,iphone 5,repair'),
(202, 'Iphone 5 batterij +A', 'Is uw batterij snel leeg vervang uw batterij dan met deze A+ Batterij', 'iphone5', '11.95', '0', 'active', 'baterij,iphone 5,repair'),
(203, 'Iphone 5 dock connector wit', 'Kan uw iphone slecht of niet opladen grote kans dat uw dock connector stuk is ', 'iphone5', '6.95', '0', 'active', 'dock,iphone 5,repair'),
(204, 'Iphone 5 dock connector zwart', 'Kan uw iphone slecht of niet opladen grote kans dat uw dock connector stuk is ', 'iphone5', '6.95', '0', 'active', 'dock,iphone 5,repair'),
(205, 'Iphone 5 back camera', 'Is uw camera kapot repareer hem dan voor een nieuwe', 'iphone5', '8.95', '0', 'active', 'camera,iphone 5,repair'),
(206, 'Iphone 5 front camera', 'Is uw camera kapot repareer hem dan voor een nieuwe', 'iphone5', '4.95', '0', 'active', 'camera,iphone 5,repair'),
(207, 'Iphone 5 volume/power kabel', 'Is uw volume / power kabel kapot vervang hem dan door deze nieuwe flexkabel', 'iphone5', '5.95', '0', 'active', 'volume,power,iphone 5'),
(208, 'Iphone 5 ear speaker', 'Is uw ear speaker kapot repareer hem dan nu met een gloed nieuwe', 'iphone5', '2.95', '0', 'active', 'volume,speaker,iphone 5'),
(209, 'iphone 5 speaker', 'is uw speaker ruizig of kapot repareer hem dan nu met een gloed nieuwe', 'iphone5', '4.95', '0', 'active', 'volume,speaker,iphone 5'),
(210, 'Iphone 5 home button kabel', 'is uw home button kapot vervang hem dan voor een gloed nieuwe', 'iphone5', '4.95', '0', 'active', 'homebutton,speaker,iphone 5'),
(211, 'Iphone 5 home button zwart', 'Is uw home button gebarsten vervang hem dan voor een gloed nieuwe', 'iphone5', '2.95', '0', 'active', 'homebutton,scherm,iphone 5'),
(212, 'Iphone 5 home button wit', 'Is uw home button gebarsten vervang hem dan voor een gloed nieuwe', 'iphone5', '2.95', '0', 'active', 'homebutton,scherm,iphone 5'),
(213, 'Iphone 5 batterij sticker', 'Heeft u uw iphone batterij vervangen plaats dan meteen een nieuwe sticker zodat de batterij goed vast zit', 'iphone5', '1.95', '0', 'active', 'sticker,batterij,iphone 5'),
(300, 'Iphone 5s beeldscherm zwart', 'Iphone 5s scherm voor het repareren van uw kapote beeldscherm', 'iphone5s', '19.95', '0', 'active', 'scherm,iphone 5s,repair'),
(301, 'Iphone 5s beeldscherm wit', 'Iphone 5s scherm voor het repareren van uw kapote beeldscherm', 'iphone5s', '19.95', '0', 'active', 'scherm,iphone 5s,repair'),
(302, 'Iphone 5s batterij +A', 'Is uw batterij snel leeg vervang uw batterij dan met deze A+ Batterij', 'iphone5s', '11.95', '0', 'active', 'baterij,iphone 5s,repair'),
(303, 'Iphone 5s dock connector wit', 'Kan uw iphone slecht of niet opladen grote kans dat uw dock connector stuk is ', 'iphone5s', '6.95', '0', 'active', 'dock,iphone 5s,repair'),
(304, 'Iphone 5s dock connector zwart', 'Kan uw iphone slecht of niet opladen grote kans dat uw dock connector stuk is ', 'iphone5s', '6.95', '0', 'active', 'dock,iphone 5s,repair'),
(305, 'Iphone 5s back camera', 'Is uw camera kapot repareer hem dan voor een nieuwe', 'iphone5s', '8.95', '0', 'active', 'camera,iphone 5s,repair'),
(306, 'Iphone 5s front camera', 'Is uw camera kapot repareer hem dan voor een nieuwe', 'iphone5s', '4.95', '0', 'active', 'camera,iphone 5s,repair'),
(307, 'Iphone 5s volume/power kabel/flashlight', 'Is uw volume / power kabel of uw flashlight kapot vervang hem dan door deze nieuwe flexkabel', 'iphone5s', '5.95', '0', 'active', 'volume,power,flashlight'),
(308, 'Iphone 5s ear speaker', 'Is uw ear speaker kapot repareer hem dan nu met een gloed nieuwe', 'iphone5s', '2.95', '0', 'active', 'volume,speaker,iphone 5s'),
(309, 'iphone 5s speaker', 'is uw speaker ruizig of kapot repareer hem dan nu met een gloed nieuwe', 'iphone5s', '4.95', '0', 'active', 'volume,speaker,iphone 5s'),
(310, 'Iphone 5s home button kabel', 'is uw home button kapot vervang hem dan voor een gloed nieuwe', 'iphone5s', '4.95', '0', 'active', 'homebutton,speaker,iphone 5s'),
(311, 'Iphone 5s home button zwart', 'Is uw home button gebarsten vervang hem dan voor een gloed nieuwe', 'iphone5s', '11.99', '0', 'active', 'homebutton,scherm,iphone 5s'),
(312, 'Iphone 5s home button wit', 'Is uw home button gebarsten vervang hem dan voor een gloed nieuwe', 'iphone5s', '11.99', '0', 'active', 'homebutton,scherm,iphone 5s'),
(313, 'Iphone 5s batterij sticker', 'Heeft u uw iphone batterij vervangen plaats dan meteen een nieuwe sticker zodat de batterij goed vast zit', 'iphone5s', '11.99', '0', 'active', 'sticker,batterij,iphone 5s');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `straat` varchar(255) NOT NULL,
  `huisnummer` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `plaats` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `voornaam`, `achternaam`, `email`, `straat`, `huisnummer`, `postcode`, `plaats`, `status`) VALUES
(1, 'dylan', 'van leeuwen', 'hammeswagger@gmail.com\r\n', 'braziliestraat', '56', '2408MD', 'alphen aan den rijn', 'banned'),
(2, 'dylan', 'van leeuwen', 'hammeswagger@gmail.com\r\n', 'braziliestraat', '56', '2408MD', 'alphen aan den rijn', 'active');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

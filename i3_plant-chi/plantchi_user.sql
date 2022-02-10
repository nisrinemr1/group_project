-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 28 août 2018 à 14:39
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marchandises`
--

-- --------------------------------------------------------

--
-- Structure of 'user' table
--
CREATE TABLE `plantchi`.`user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Load data into 'user' table
--

INSERT INTO `plantchi`.`user` (`id`, `firstname`, `email`,`password`) VALUES
(1, 'Leila', 'l.myar@interface3.be', 'lmy'),
(2, 'Rajesh', 'r.koo@interface3.be', 'rko'),
(3, 'Angelina', 'a.jolie@interface3.be', 'ajo');

--
-- Index for table `user`
--
ALTER TABLE `plantchi`.`user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `plantchi`.`user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

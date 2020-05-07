-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 06:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_site`
--
CREATE DATABASE IF NOT EXISTS `the_site` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `the_site`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_of_birth` date NOT NULL,
  `photo` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `date_of_birth`, `photo`) VALUES
(1, 'Vlad', 'my.works@bk.ru', '123123', '0000-00-00', ''),
(2, 'Vladdfg', 'sdf@sdf.hmj', 'qwerty', '0000-00-00', ''),
(3, 'Vladdfga', 'sdf@sdf.hmjd', 'qwerty', '0000-00-00', ''),
(4, 'me', 'me@me.me', 'memememe', '0000-00-00', ''),
(5, 'myit', 'myit@myi.kz', 'myit123', '0000-00-00', ''),
(6, 'йцукенгшщ', 'zahira71@inbox.ru', '123456', '0000-00-00', ''),
(7, 'byuf', 'byu@34.vo', 'dc17e4498f0f6db628d491e63c71fc58', '0000-00-00', ''),
(8, 'Admin', 'admin@admin.com', 'c0b33f5528bfad4cebd6cc56c2fd1a5d', '0000-00-00', ''),
(9, 'Test', 'test@t.com', 'e5550d3bac51dbf57728b2e402cfd360', '0000-00-00', ''),
(10, 'Алексей Каримов', 'alekseiprostoaleksei@gmail.com', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', ''),
(11, 'Жека', 'leone.prog@gmail.com', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', ''),
(12, 'Пользователь', 'user@user.kz', 'dc17e4498f0f6db628d491e63c71fc58', '0000-00-00', ''),
(13, 'Иванов Иван', 'zahira71@inbox.ru', 'eec0e45bc13c5b0a3c1e14ded02c50e0', '0000-00-00', ''),
(14, 'Joseph Boushemal', 'profjorient.kz@mail.ru', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

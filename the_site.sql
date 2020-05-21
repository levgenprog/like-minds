-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 06:32 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_of_birth` date NOT NULL,
  `photo` varchar(500) NOT NULL DEFAULT 'images/profile_photos/Napoleon-1.jpg',
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `date_of_birth`, `photo`, `country`, `city`, `gender`) VALUES
(1, 'Vlad', 'my.works@bk.ru', '123123', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(2, 'Vladdfg', 'sdf@sdf.hmj', 'qwerty', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(4, 'me', 'me@me.me', 'memememe', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(5, 'myit', 'myit@myi.kz', 'myit123', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(7, 'byuf', 'byu@34.vo', 'dc17e4498f0f6db628d491e63c71fc58', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(8, 'Admin', 'admin@admin.com', 'c0b33f5528bfad4cebd6cc56c2fd1a5d', '0000-00-00', '1589122651_new photo.jpg', 'Казахстан', 'Алматы', 1),
(9, 'Test', 'test@t.com', 'e5550d3bac51dbf57728b2e402cfd360', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(10, 'Алексей Каримов', 'alekseiprostoaleksei@gmail.com', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(11, 'Жека', 'leone.prog@gmail.com', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(12, 'Пользователь', 'user@user.kz', 'dc17e4498f0f6db628d491e63c71fc58', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(24, 'Yevgeniy Leonov', 'jeka@jeka.jk', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', '1589124261_8800703618235624514_IMG_5291 (2).jpg', 'Казахстан', 'Алматы', 1),
(14, '', 'profjorient.kz@mail.ru', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', '1589123671_2027937_0.jpg', 'Казахстан', 'Алматы', 1),
(15, 'Вася', 'vasia@ya.ru', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', '1589123439_1533617754179947055.jpg', 'Kazakhstan', 'Almaty', 1),
(23, 'Захира', 'zahira71@inbox.ru', '6c70bf3b73a67d7eafc09722896c535b', '0000-00-00', 'Napoleon-1.jpg', 'Казахстан', 'Алматы', 2),
(17, 'admin@admin.com', 'leone.prog@gmail.com', '6c70bf3b73a67d7eafc09722896c535b', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(18, 'vasia@ya.ru', 'my.works@bk.ru', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(22, 'Mister', 'mister@mis.me', 'c2915f09c2ee59e4fbbd10b066497da7', '0000-00-00', 'Napoleon-1.jpg', '', '', 0),
(25, '', 'jon@jom.pom', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', '1589095090_01_Federation92_cabinet_05.jpg', 'Казахстан', 'Алматы', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

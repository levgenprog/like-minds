-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 08:44 PM
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
-- Table structure for table `goal_set`
--

CREATE TABLE `goal_set` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `sphere_id` int(11) UNSIGNED NOT NULL,
  `sub-sphere` varchar(50) NOT NULL,
  `goal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='The users'' goals';

--
-- Dumping data for table `goal_set`
--

INSERT INTO `goal_set` (`id`, `user_id`, `sphere_id`, `sub-sphere`, `goal`) VALUES
(2, 8, 1, 'Качалка', 'Хочу подкачаться чтобы летом телочек клеить!'),
(3, 8, 2, 'Программирование', 'Хочу взламывать банки и раздавать деньги бедным'),
(4, 8, 12, 'Видение жизни', 'Хочу понять чего я на самом деле хочу'),
(5, 28, 2, 'Программирование', 'Программирование - сила!'),
(6, 28, 1, 'Качалка', 'хочу партнера личного'),
(7, 28, 2, '', 'fghh'),
(8, 28, 2, '', 'fghh'),
(9, 28, 2, '', 'fghh');

-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE `priorities` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'id',
  `sphere_id` int(11) UNSIGNED NOT NULL,
  `priority` int(5) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `priorities`
--

INSERT INTO `priorities` (`id`, `sphere_id`, `priority`, `user_id`) VALUES
(4, 1, 3, 8),
(5, 2, 2, 8),
(6, 12, 1, 8),
(7, 2, 2, 28),
(8, 1, 1, 28),
(9, 2, 1, 28),
(10, 2, 1, 28),
(11, 2, 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `spheres`
--

CREATE TABLE `spheres` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Spheres of life';

--
-- Dumping data for table `spheres`
--

INSERT INTO `spheres` (`id`, `name`) VALUES
(5, 'Духовное развитие'),
(12, 'Жизненная стратегия'),
(1, 'Здоровье и спорт'),
(9, 'Карьерный рост'),
(11, 'Качество жизни'),
(6, 'Любовные отношения'),
(2, 'Образование'),
(4, 'Развитие характера'),
(7, 'Родительские отношения'),
(8, 'Социальное развитие'),
(10, 'Финансовое развитие'),
(3, 'Эмоциональное развитие');

-- --------------------------------------------------------

--
-- Table structure for table `subspheres`
--

CREATE TABLE `subspheres` (
  `id` int(11) UNSIGNED NOT NULL,
  `sphere_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='subspheres of life areas';

--
-- Dumping data for table `subspheres`
--

INSERT INTO `subspheres` (`id`, `sphere_id`, `name`) VALUES
(1, 2, 'Программирование'),
(2, 2, 'Менеджмент'),
(3, 2, 'Маркетинг'),
(4, 12, 'Видение жизни'),
(5, 12, 'Долгосрочное планирование'),
(6, 1, 'Качалка');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'id',
  `user_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_of_birth` date NOT NULL,
  `photo` varchar(500) NOT NULL DEFAULT 'images/profile_photos/Napoleon-1.jpg',
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL,
  `sphere_1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sub-sphere_1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `priority_1` int(5) DEFAULT 0,
  `goal_1` text CHARACTER SET utf8 NOT NULL,
  `sphere_2` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sub-sphere_2` varchar(50) CHARACTER SET utf8 NOT NULL,
  `priority_2` int(5) DEFAULT 0,
  `goal_2` text CHARACTER SET utf8 NOT NULL,
  `sphere_3` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sub-sphere_3` varchar(50) CHARACTER SET utf8 NOT NULL,
  `priority_3` int(5) NOT NULL DEFAULT 0,
  `goal_3` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `date_of_birth`, `photo`, `country`, `city`, `gender`, `sphere_1`, `sub-sphere_1`, `priority_1`, `goal_1`, `sphere_2`, `sub-sphere_2`, `priority_2`, `goal_2`, `sphere_3`, `sub-sphere_3`, `priority_3`, `goal_3`) VALUES
(1, 'Vlad', 'my.works@bk.ru', '123123', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(2, 'Vladdfg', 'sdf@sdf.hmj', 'qwerty', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(4, 'me', 'me@me.me', 'memememe', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(5, 'myit', 'myit@myi.kz', 'myit123', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(7, 'byuf', 'byu@34.vo', 'dc17e4498f0f6db628d491e63c71fc58', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(8, 'John Snow', 'admin@admin.com', 'c0b33f5528bfad4cebd6cc56c2fd1a5d', '0000-00-00', '1590497349_new photo.jpg', 'Казахстан', 'Алматы', 1, 'Здоровье и спорт', 'Качалка', 2, 'ryttretutn', '0', '0', 0, '0', '0', '0', 0, '0'),
(9, 'Test', 'test@t.com', 'e5550d3bac51dbf57728b2e402cfd360', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(10, 'Алексей Каримов', 'alekseiprostoaleksei@gmail.com', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(11, 'Жека', 'leone.prog@gmail.com', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(12, 'Пользователь', 'user@user.kz', 'dc17e4498f0f6db628d491e63c71fc58', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(14, '', 'profjorient.kz@mail.ru', 'a6884e55cd22ada3fd0f7aabbb520490', '0000-00-00', '1589123671_2027937_0.jpg', 'Казахстан', 'Алматы', 1, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(15, 'Вася', 'vasia@ya.ru', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', '1589123439_1533617754179947055.jpg', 'Kazakhstan', 'Almaty', 1, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(17, 'admin@admin.com', 'leone.prog@gmail.com', '6c70bf3b73a67d7eafc09722896c535b', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(18, 'vasia@ya.ru', 'my.works@bk.ru', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(22, 'Mister', 'mister@mis.me', 'c2915f09c2ee59e4fbbd10b066497da7', '0000-00-00', 'Napoleon-1.jpg', '', '', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(23, 'Захира', 'zahira71@inbox.ru', '6c70bf3b73a67d7eafc09722896c535b', '0000-00-00', 'Napoleon-1.jpg', 'Казахстан', 'Алматы', 2, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(24, 'Yevgeniy Leonov', 'jeka@jeka.jk', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', '1589124261_8800703618235624514_IMG_5291 (2).jpg', 'Казахстан', 'Алматы', 1, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(25, '', 'jon@jom.pom', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', '1589095090_01_Federation92_cabinet_05.jpg', 'Казахстан', 'Алматы', 1, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(26, 'Стив Возняк', 'Voz@apple.com', 'd06d5d345b8ce88611e46b9981c7e52f', '0000-00-00', '1590125637_woz.png', 'США', 'Кремниевая Долина', 0, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(27, 'Стив Джобс', 'Steve@apple.com', 'd06d5d345b8ce88611e46b9981c7e52f', '0000-00-00', '1590129766_stevejobs.jpg', 'США', 'Кремниевая Долина', 2, '0', '0', 0, '0', '0', '0', 0, '0', '0', '0', 0, '0'),
(28, 'Gay', 'gay@gay.ga', 'fb6812d8b611c7283b73864505a705cb', '0000-00-00', '1590810433_big_02556_e0c84cfa3d44990a3bca2c5e97fd708a.jpg', 'Казахстан', 'Алматы', 0, 'Жизненная стратегия', 'Видение жизни', 1, 'redfs', 'Здоровье и спорт', 'Качалка', 2, 'sdfghj', 'Образование', 'Менеджмент', 1, 'if works');

-- --------------------------------------------------------

--
-- Table structure for table `user_about`
--

CREATE TABLE `user_about` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `sphere_id` int(11) UNSIGNED NOT NULL,
  `priority_id` int(11) UNSIGNED NOT NULL,
  `subsphere_id` int(11) UNSIGNED NOT NULL,
  `goal_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Data for search';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goal_set`
--
ALTER TABLE `goal_set`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sphere_id` (`sphere_id`);

--
-- Indexes for table `priorities`
--
ALTER TABLE `priorities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sphere_id` (`sphere_id`);

--
-- Indexes for table `spheres`
--
ALTER TABLE `spheres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `subspheres`
--
ALTER TABLE `subspheres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sphere_id` (`sphere_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_about`
--
ALTER TABLE `user_about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sphere_id` (`sphere_id`),
  ADD KEY `priority_id` (`priority_id`),
  ADD KEY `goal_id` (`goal_id`),
  ADD KEY `subsphere_id` (`subsphere_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goal_set`
--
ALTER TABLE `goal_set`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `priorities`
--
ALTER TABLE `priorities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `spheres`
--
ALTER TABLE `spheres`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subspheres`
--
ALTER TABLE `subspheres`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_about`
--
ALTER TABLE `user_about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `goal_set`
--
ALTER TABLE `goal_set`
  ADD CONSTRAINT `goal_set_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `goal_set_ibfk_2` FOREIGN KEY (`sphere_id`) REFERENCES `spheres` (`id`);

--
-- Constraints for table `priorities`
--
ALTER TABLE `priorities`
  ADD CONSTRAINT `priorities_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `priorities_ibfk_3` FOREIGN KEY (`sphere_id`) REFERENCES `spheres` (`id`);

--
-- Constraints for table `subspheres`
--
ALTER TABLE `subspheres`
  ADD CONSTRAINT `subspheres_ibfk_1` FOREIGN KEY (`sphere_id`) REFERENCES `spheres` (`id`);

--
-- Constraints for table `user_about`
--
ALTER TABLE `user_about`
  ADD CONSTRAINT `user_about_ibfk_1` FOREIGN KEY (`priority_id`) REFERENCES `priorities` (`id`),
  ADD CONSTRAINT `user_about_ibfk_2` FOREIGN KEY (`sphere_id`) REFERENCES `spheres` (`id`),
  ADD CONSTRAINT `user_about_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_about_ibfk_4` FOREIGN KEY (`goal_id`) REFERENCES `goal_set` (`id`),
  ADD CONSTRAINT `user_about_ibfk_5` FOREIGN KEY (`subsphere_id`) REFERENCES `subspheres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

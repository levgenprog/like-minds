-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 09 2020 г., 16:29
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `the_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `subspheres`
--

CREATE TABLE IF NOT EXISTS `subspheres` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sphere_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sphere_id` (`sphere_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COMMENT='subspheres of life areas';

--
-- Дамп данных таблицы `subspheres`
--

INSERT INTO `subspheres` (`id`, `sphere_id`, `name`) VALUES
(1, 2, 'Программирование'),
(2, 2, 'Менеджмент'),
(3, 2, 'Маркетинг'),
(4, 12, 'Видение жизни'),
(5, 12, 'Долгосрочное планирование'),
(8, 9, 'Стажировка '),
(11, 9, 'Хочу создать компанию'),
(12, 9, 'Разработка своего CV'),
(13, 9, 'Работа своей мечты'),
(14, 11, 'Развитие осознанности '),
(15, 11, 'Оценка своего развития'),
(16, 11, 'Аффирмация '),
(17, 2, 'Поступление в зарубежный университет '),
(18, 5, 'Медитации'),
(19, 5, 'Работа над собой после экстренных ситуаций'),
(20, 5, 'Развитие жизненной энергии'),
(21, 12, 'Профориентация'),
(22, 1, 'Фитнес-развитие'),
(23, 1, 'Занятия дома'),
(24, 6, 'Гармония в длительных отношений '),
(25, 6, 'netflix and chill '),
(26, 6, 'Половое воспитание'),
(27, 8, 'Просвещение о своих правах'),
(28, 8, 'Развитие расовых отношений'),
(29, 8, 'Развития отношений \"Я и общество\"'),
(30, 10, 'Ментальная арифметика'),
(31, 10, 'Планирование бюджета'),
(32, 10, 'Ресурс-менеджмент'),
(33, 3, 'Развитие навыка выступлений на публике'),
(34, 3, 'нетворкинг: построение и поддержание отношений'),
(35, 1, 'План тренировок'),
(36, 3, 'Командная работа'),
(37, 4, 'Управление эмоциями'),
(38, 4, 'Управление собственным развитием'),
(39, 4, 'Рефлексия'),
(40, 7, 'Привязанность'),
(42, 7, 'Развитие ребенка'),
(43, 7, 'Принципы долгосрочных отношений');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `subspheres`
--
ALTER TABLE `subspheres`
  ADD CONSTRAINT `subspheres_ibfk_1` FOREIGN KEY (`sphere_id`) REFERENCES `spheres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

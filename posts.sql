-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2020 г., 19:32
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kickstarter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `goal` varchar(2000) NOT NULL,
  `donated` varchar(2000) NOT NULL,
  `img` varchar(500) NOT NULL,
  `user` varchar(500) NOT NULL,
  `place` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `goal`, `donated`, `img`, `user`, `place`) VALUES
(1, '   Chrono Sword   ', '   Chrono Sword is a souls-like action adventure game with time travel. It has incredible pixel art, contextual combat and an epic story.   ', '   50,000   ', '61', '   1.jpg   ', '   21th Century Ducks   ', '   Seoul,South Korea   '),
(2, ' THE SPECIALISTS - Boardgame ', ' Recruit your dream team and perform heists all over the world! ', ' 11,884 ', '59', ' 2.jpg ', ' Explor8 ', ' Lille, France '),
(3, 'Stolen Realm', 'With a simultaneous team turn system for faster paced combat. Discover lost cities, enchanted forests and dungeons deep.', '10,000', '3,475', '3.jpg', 'James Bullard\r\n', 'Los Angeles, CA');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

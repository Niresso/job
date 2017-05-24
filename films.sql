-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2017 г., 15:18
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `films`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `actors` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `name`, `format`, `year`, `actors`) VALUES
(8, 'Mars', 'VHC', '2013', 'Дженнифер Лоуренс, Крис Пратт, Майкл Шин, Лоренс Фишбёрн, Энди Гарсиа, Винс Фостер, Кара Мишель Уайлдер, Конор Брофи, Джули Серда,'),
(9, 'Пассажиры', 'VHC', '2017', 'Дженнифер Лоуренс, Крис Пратт, Майкл Шин, Лоренс Фишбёрн, Энди Гарсиа, Винс Фостер, Кара Мишель Уайлдер, Конор Брофи, Джули Серда,'),
(10, 'Mars', 'VHC', '2013', 'Дженнифер Лоуренс, Крис Пратт, Майкл Шин, Лоренс Фишбёрн, Энди Гарсиа, Винс Фостер, Кара Мишель Уайлдер, Конор Брофи, Джули Серда,'),
(11, 'Пассажиры', 'VHC', '2017', 'Дженнифер Лоуренс, Крис Пратт, Майкл Шин, Лоренс Фишбёрн, Энди Гарсиа, Винс Фостер, Кара Мишель Уайлдер, Конор Брофи, Джули Серда,');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

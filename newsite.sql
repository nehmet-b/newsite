-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 21 2021 г., 03:29
-- Версия сервера: 10.4.20-MariaDB
-- Версия PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `heading`, `img_path`, `text`) VALUES
(1, 'New Skull Game Released !!!', 'picture.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\n          eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum\r\n          suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan\r\n          lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur\r\n          adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n          magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo\r\n          viverra maecenas accumsan lacus vel facilisis.</p>'),
(2, 'The day of 31 October is Halloween !!!', 'picture.jpg', '<p>The day of 31 October is Halloween in America. Lets scare someone. Give sugars so on.</p>'),
(3, 'Today Samsung shows us new Smartpone', 'picture.jpg', '<p>Today Samsung shows us new Smartpone. Its was Samsung Galaxy S21 with 5 camera.</p>'),
(4, 'This is gamedev Ive benn working.', 'picture.jpg', '<p>This is gamedev Ive benn working. This is gamedev Ive benn working. This is gamedev Ive benn working. This is gamedev Ive benn working. This is gamedev Ive benn working. This is gamedev Ive benn working.</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_surname` varchar(255) NOT NULL,
  `user_password` char(60) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_date` date NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_password`, `user_email`, `user_date`, `user_gender`, `user_phone`) VALUES
(1, 'Nehmet', 'Babayev', '$2y$10$9EvVOHNBRt6lcoxRusHHB.a3k/2gv.xFhxuTF7UvQFNJ2dt/5w1Fa', 'nehmet_b@mail.ru', '1991-01-30', 'Male', '4340608'),
(2, 'Gunay', 'Babayeva', '$2y$10$mGXZcp1WVjA25oLpt.M4FuotGftDuBplbgRKFmx0X/MFlV.G4gvdi', 'gunay_b@mail.ru', '1991-02-01', 'Female', '4340608'),
(3, 'Togrul', 'Babayev', '$2y$10$Sg3epIvsF1kvtSAYkFlDFOD6wsxG5XTcqN7fB9d7Kkks/KNGLe0gS', 'togrul_b@mail.ru', '1990-01-31', 'Male', '4340608'),
(4, 'Cavid', 'Babayev', '$2y$10$6tiPmMNF/frlWe8swQ2UDOZD.56m/es7dDFp/S7.EQWz4Atv4SCFm', 'cavid@mail.ru', '1998-01-28', 'Male', '4340608');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

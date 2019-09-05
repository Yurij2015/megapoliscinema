-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 05 2019 г., 11:32
-- Версия сервера: 5.7.25-log
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `megapoliscinema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `actorname` varchar(100) NOT NULL,
  `actorinfo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `actors`
--

INSERT INTO `actors` (`id`, `actorname`, `actorinfo`) VALUES
(1, 'jkjkj', 'jkjkjk'),
(2, 'Иван Иванов', 'Суперактер 1982 года рождения');

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `idbooking` int(11) NOT NULL,
  `date` date NOT NULL,
  `customers_idcustomer` int(11) NOT NULL,
  `sessions_idsession` int(11) NOT NULL,
  `cashiers_idcashier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `cashiers`
--

CREATE TABLE `cashiers` (
  `idcashier` int(11) NOT NULL,
  `cashiername` varchar(100) NOT NULL,
  `cashierphone` varchar(15) NOT NULL,
  `cashieraddres` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `idcustomer` int(11) NOT NULL,
  `namecustomer` varchar(50) NOT NULL,
  `phonecustomer` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `genrename` varchar(45) NOT NULL,
  `genredescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `genrename`, `genredescription`) VALUES
(1, 'kkk', 'kkkkkkkkkkkkkkkk'),
(2, 'll', 'lllllllllllll');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menuitem` varchar(30) NOT NULL,
  `alias` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `menuitem`, `alias`) VALUES
(1, 'Главная', 'main'),
(2, 'Актеры', 'actors'),
(3, 'Кассиры', 'cashiers'),
(4, 'Жанры', 'genres');

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `idmovie` int(11) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `moviedescription` varchar(250) NOT NULL,
  `duration` int(3) NOT NULL,
  `genres_idgenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `movies_has_actors`
--

CREATE TABLE `movies_has_actors` (
  `movies_idmovie` int(11) NOT NULL,
  `actors_idactor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `idsession` int(11) NOT NULL,
  `sessiondate` date NOT NULL,
  `sessiontime` time NOT NULL,
  `movies_idmovie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`),
  ADD KEY `fk_booking_sessions1_idx` (`sessions_idsession`),
  ADD KEY `fk_booking_customers1_idx` (`customers_idcustomer`),
  ADD KEY `fk_booking_cashiers1_idx` (`cashiers_idcashier`);

--
-- Индексы таблицы `cashiers`
--
ALTER TABLE `cashiers`
  ADD PRIMARY KEY (`idcashier`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`idmovie`),
  ADD KEY `fk_movies_genres_idx` (`genres_idgenre`);

--
-- Индексы таблицы `movies_has_actors`
--
ALTER TABLE `movies_has_actors`
  ADD PRIMARY KEY (`movies_idmovie`,`actors_idactor`),
  ADD KEY `fk_movies_has_actors_actors1_idx` (`actors_idactor`),
  ADD KEY `fk_movies_has_actors_movies1_idx` (`movies_idmovie`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`idsession`),
  ADD KEY `fk_sessions_movies1_idx` (`movies_idmovie`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cashiers`
--
ALTER TABLE `cashiers`
  MODIFY `idcashier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `idmovie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sessions`
--
ALTER TABLE `sessions`
  MODIFY `idsession` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_cashiers1` FOREIGN KEY (`cashiers_idcashier`) REFERENCES `cashiers` (`idcashier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_customers1` FOREIGN KEY (`customers_idcustomer`) REFERENCES `customers` (`idcustomer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_sessions1` FOREIGN KEY (`sessions_idsession`) REFERENCES `sessions` (`idsession`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_movies_genres` FOREIGN KEY (`genres_idgenre`) REFERENCES `genres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `movies_has_actors`
--
ALTER TABLE `movies_has_actors`
  ADD CONSTRAINT `fk_movies_has_actors_actors1` FOREIGN KEY (`actors_idactor`) REFERENCES `actors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movies_has_actors_movies1` FOREIGN KEY (`movies_idmovie`) REFERENCES `movies` (`idmovie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_sessions_movies1` FOREIGN KEY (`movies_idmovie`) REFERENCES `movies` (`idmovie`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

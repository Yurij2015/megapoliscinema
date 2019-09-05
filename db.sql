-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 05 2019 г., 22:56
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
(1, 'Никита Петров', 'jkjkjk'),
(2, 'Иван Иванов', 'Суперактер 1982 года рождения'),
(3, 'Анжелина Джоли', 'hjhjh'),
(4, 'Бред Питт', 'hjhjh'),
(5, 'Олька Иванова', 'Супер актриса дикого театра'),
(6, 'Джон Траволта', 'jkjkj'),
(7, 'Арнольд Шварцпух', 'uiuiu'),
(8, 'Ника Митина', 'hjhjh'),
(9, 'Шарлиз Терон', 'hjhjh'),
(10, 'Эмма Уотсон', 'l;l;l;l');

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customers_idcustomer` int(11) NOT NULL,
  `sessions_idsession` int(11) NOT NULL,
  `cashiers_idcashier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `date`, `customers_idcustomer`, `sessions_idsession`, `cashiers_idcashier`) VALUES
(1, '2019-09-03', 1, 1, 1),
(2, '2019-09-04', 1, 1, 1),
(3, '2019-09-08', 2, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `cashiers`
--

CREATE TABLE `cashiers` (
  `id` int(11) NOT NULL,
  `cashiername` varchar(100) NOT NULL,
  `cashierphone` varchar(15) NOT NULL,
  `cashieraddres` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cashiers`
--

INSERT INTO `cashiers` (`id`, `cashiername`, `cashierphone`, `cashieraddres`) VALUES
(1, 'Ольга Иванова', '8956666', 'ул. Ленина, 22'),
(2, 'Никитюк Юлия', '4899665556', 'ул. Пушкина, 33, кв. 88');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `namecustomer` varchar(50) NOT NULL,
  `phonecustomer` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `namecustomer`, `phonecustomer`) VALUES
(1, 'Иванов Иван', '7896521'),
(2, 'Петров Олег', '89999'),
(3, 'Иванов Олег', '908888'),
(4, 'Елена Зеленская', '9889999');

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
(1, 'Комедия', 'Комедия'),
(2, 'Боевик', 'Боевик'),
(3, 'Мелодрама', 'Грустный фильм'),
(4, 'Ужасы', 'Страшный фильм');

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
(4, 'Жанры', 'genres'),
(5, 'Посетители', 'customers'),
(6, 'Сеансы', 'sessions'),
(7, 'Бронь', 'booking'),
(8, 'Кино', 'movies');

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `moviedescription` varchar(250) NOT NULL,
  `duration` int(3) NOT NULL,
  `genres_idgenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id`, `moviename`, `moviedescription`, `duration`, `genres_idgenre`) VALUES
(1, 'Матрица', 'asdf', 666, 1),
(2, 'Шматрица', '', 550, 2),
(3, 'Бегущий человек', 'Бегущий человек', 99, 1),
(4, 'Терминатор', 'Робот', 99, 2);

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
  `id` int(11) NOT NULL,
  `sessiondate` date NOT NULL,
  `sessiontime` time NOT NULL,
  `movies_idmovie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `sessiondate`, `sessiontime`, `movies_idmovie`) VALUES
(1, '2019-09-04', '16:10:13', 1),
(2, '2019-09-06', '22:22:00', 3);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_sessions1_idx` (`sessions_idsession`),
  ADD KEY `fk_booking_customers1_idx` (`customers_idcustomer`),
  ADD KEY `fk_booking_cashiers1_idx` (`cashiers_idcashier`);

--
-- Индексы таблицы `cashiers`
--
ALTER TABLE `cashiers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sessions_movies1_idx` (`movies_idmovie`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `cashiers`
--
ALTER TABLE `cashiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_cashiers1` FOREIGN KEY (`cashiers_idcashier`) REFERENCES `cashiers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_customers1` FOREIGN KEY (`customers_idcustomer`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_sessions1` FOREIGN KEY (`sessions_idsession`) REFERENCES `sessions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_movies_has_actors_movies1` FOREIGN KEY (`movies_idmovie`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_sessions_movies1` FOREIGN KEY (`movies_idmovie`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

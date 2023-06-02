-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 07 2021 г., 15:39
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kr_zaxarov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cabinets`
--

CREATE TABLE `cabinets` (
  `cabinet_number` varchar(4) NOT NULL,
  `cabinet_status` varchar(50) NOT NULL,
  `cabinet_square` float NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cabinets`
--

INSERT INTO `cabinets` (`cabinet_number`, `cabinet_status`, `cabinet_square`, `manager_id`) VALUES
('101M', 'Отличное', 121, 1),
('102M', 'Отличное', 97, 2),
('103M', 'Отличное', 102, 3),
('104M', 'Хорошое', 87, 4),
('105M', 'Хорошое', 99, 5),
('106M', 'Отличное', 90, 6),
('201M', 'Хорошое', 110, 7),
('202M', 'Удовлетворительное', 115, 8),
('203M', 'Хорошое', 90, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `managers`
--

CREATE TABLE `managers` (
  `manager_id` int(11) NOT NULL,
  `m_surname` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `managers`
--

INSERT INTO `managers` (`manager_id`, `m_surname`, `m_name`) VALUES
(1, 'Соловьева', 'Камилла'),
(2, 'Рудаков', 'Арсений'),
(3, 'Алексеева', 'Ника'),
(4, 'Иванов', 'Андрей'),
(5, 'Григорьева', 'Анна'),
(6, 'Петрова', 'Алёна'),
(7, 'Авдеев', 'Фёдор'),
(8, 'Пикселькина', 'Ольга'),
(9, 'Трофимова', 'Милана');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `order_data` date NOT NULL,
  `order_count` int(11) NOT NULL,
  `order_price` decimal(10,0) NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `order_type`, `order_data`, `order_count`, `order_price`, `manager_id`) VALUES
(1, 'Принтер', '2021-10-10', 1, '15990', 5),
(2, 'Комплект бумаги', '2021-10-10', 2, '890', 3),
(3, 'Офисный стул', '2021-10-12', 1, '2990', 4),
(4, 'Комплект бумаги', '2021-10-12', 3, '1690', 2),
(5, 'Набор санитарии', '2021-10-12', 3, '790', 9),
(6, 'Компьютерная переферия', '2021-10-13', 6, '8090', 8),
(7, 'Телевизор', '2021-10-13', 1, '38990', 8),
(8, 'Стул учебный', '2021-10-13', 9, '16890', 8),
(9, 'Учебные плакаты', '2021-10-14', 2, '2890', 7),
(10, 'Комплект бумаги', '2021-10-17', 2, '590', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `cabinet_number` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `user_role`, `cabinet_number`, `manager_id`) VALUES
(1, 'Захаров Алексей', 'system_user', '$2y$10$60THKxU0Gi0r/jXOT8itO.bu9Po0.LycUlJ0.mglp7ot1EtcjsYYu', 'system_user', NULL, NULL),
(2, 'Соловьева Камилла', 'manager_1', '$2y$10$zgIjuxZfXxpsNiHwCy0QSOYzi5MFcxcNCf4fItLFrAr5tdcm2dgLO', 'manager_user', '101M', 1),
(3, 'Рудаков Арсений', 'manager_2', '$2y$10$WKQyrF7wFX1dSeUmhcyCH.FRuKx97lzWUd0HFLQEtmCO2gOhaXfCS', 'manager_user', '102M', 2),
(4, 'Алексеева Ника', 'manager_3', '$2y$10$5lnJMkChDXWqpqXZoWQDFukbXMVCBjvoFTd5bYKnHfrP/U4U8B.GW', 'manager_user', '103M', 3),
(5, 'Иванов Андрей', 'manager_4', '$2y$10$iyHAGAGf6YCsbqjUV3in3.daYxWaLrb2Ncqk7MIgQDsw4Wk0VY7qK', 'manager_user', '104M', 4),
(6, 'Григорьева Анна', 'manager_5', '$2y$10$msAYAckblacea/z2XSEGAuqzrr4czpaZIPtG0t20WnjNzU2xWz78O', 'manager_user', '105M', 5),
(7, 'Петрова Алёна', 'manager_6', '$2y$10$O3e09Pnn3mucnV0CsI4mGOMHs6B/6qyOUWM.VCOz77EDvRHWVS0PC', 'manager_user', '106M', 6),
(8, 'Авдеев Фёдор', 'manager_7', '$2y$10$V7SUsdkWOwNc24KHt2f4HeNt.H/izIx1YiKgR2tETdrQ8Tpt7ui5m', 'manager_user', '201M', 7),
(9, 'Пикселькина Ольга', 'manager_8', '$2y$10$X7CNj6iH0GDTeL/ZpWtJEOdp7hMMZXpHK59p5qU5VKaaSZtC7kMY6', 'manager_user', '202M', 8),
(10, 'Трофимова Милана', 'manager_9', '$2y$10$WGUYjHz.ecguWIAG4NJU.OHu8hkxq1TLKl9WdDfgQkJMNpU3eaaLO', 'manager_user', '203M', 9),
(11, 'Петров Павел', 'system_user_1', '$2y$10$0VDbNxLzGFDbYMhEkCmYgeI4/By087yPRCV.3U4ekwPrLz3k3orDy', 'system_user', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cabinets`
--
ALTER TABLE `cabinets`
  ADD PRIMARY KEY (`cabinet_number`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Индексы таблицы `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`manager_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `managers`
--
ALTER TABLE `managers`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cabinets`
--
ALTER TABLE `cabinets`
  ADD CONSTRAINT `cabinets_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`manager_id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`manager_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

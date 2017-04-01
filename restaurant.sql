-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 27 2017 г., 16:07
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restaurant`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `ingredient` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ingredients`
--

INSERT INTO `ingredients` (`id`, `ingredient`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'water', NULL, '2017-03-23 14:31:23', '2017-03-23 14:31:23'),
(2, 'patato', NULL, '2017-03-23 14:31:57', '2017-03-23 14:31:57'),
(3, 'onions', NULL, '2017-03-23 14:32:14', '2017-03-23 14:32:14'),
(4, 'carrot', NULL, '2017-03-23 14:32:27', '2017-03-23 14:32:27'),
(5, 'beet', NULL, '2017-03-23 14:32:35', '2017-03-23 14:32:35'),
(6, 'salt', NULL, '2017-03-23 14:32:42', '2017-03-23 14:32:42'),
(7, 'greens', NULL, '2017-03-23 14:32:49', '2017-03-23 14:32:49'),
(8, 'meat', NULL, '2017-03-23 14:33:14', '2017-03-23 14:33:14'),
(9, 'Інгредієнти', NULL, '2017-03-27 09:58:09', '2017-03-27 09:58:09'),
(10, 'Інгредієнти1', NULL, '2017-03-27 10:07:01', '2017-03-27 10:07:01'),
(11, 'Інгредієнти12', NULL, '2017-03-27 10:28:31', '2017-03-27 10:28:31');

-- --------------------------------------------------------

--
-- Структура таблицы `ingredient_menus`
--

CREATE TABLE `ingredient_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `ingredient_menus`
--

INSERT INTO `ingredient_menus` (`id`, `menu_id`, `ingredient_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, '6', '3', NULL, NULL, NULL),
(13, '6', '7', NULL, NULL, NULL),
(14, '6', '8', NULL, NULL, NULL),
(15, '6', '3', NULL, NULL, NULL),
(16, '6', '7', NULL, NULL, NULL),
(17, '6', '8', NULL, NULL, NULL),
(18, '7', '3', NULL, NULL, NULL),
(19, '7', '3', NULL, NULL, NULL),
(20, '4', '5', NULL, NULL, NULL),
(21, '4', '6', NULL, NULL, NULL),
(22, '4', '5', NULL, NULL, NULL),
(23, '4', '6', NULL, NULL, NULL),
(24, '1', '2', NULL, NULL, NULL),
(25, '1', '3', NULL, NULL, NULL),
(26, '1', '10', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_19_145325_create_menu_table', 1),
(4, '2017_03_19_145452_create_menu_ingredients_table', 1),
(5, '2017_03_19_145520_create_ingredients_table', 1),
(6, '2017_03_23_094109_create_orders_table', 2),
(7, '2017_03_23_131356_create_totals_table', 3),
(8, '2017_03_23_145011_create_places_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vberkoz@gmail.com', '$2y$10$o3VKERYIfnFhEPnbgJkzqO5KPr8Om4S0xoWjnQ3u2QbiaDNMQOHaC', '2017-03-27 06:10:27');

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE `places` (
  `id` int(10) UNSIGNED NOT NULL,
  `place` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`, `place`, `created_at`, `updated_at`) VALUES
(13, 1, '2017-03-27 05:32:38', '2017-03-27 05:32:38'),
(14, 1, '2017-03-27 10:13:59', '2017-03-27 10:13:59');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `price`, `image`, `created_at`, `updated_at`) VALUES
(6, 'борш', '10', 'canoe_lake_1600.jpg', '2017-03-27 09:57:05', '2017-03-27 09:57:05'),
(7, 'бульйон', '123', 'algonquin2_1600.jpg', '2017-03-27 10:12:32', '2017-03-27 10:12:32');

-- --------------------------------------------------------

--
-- Структура таблицы `totals`
--

CREATE TABLE `totals` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'vberkoz', 'vberkoz@gmail.com', '$2y$10$Vsg8WF89UKLNUkVtahB6beYDMI5EUlMMSfjuNnW5Gwn9QMV57MLFW', '1', 'P73NvSKpHrMSIXxTa36RVbkBQXASLCP15hveKn8CB3327ABPtNEgYjKDn3LA', '2017-03-27 06:11:29', '2017-03-27 06:11:29'),
(3, 'Waiter', 'waiter@gmail.com', '$2y$10$XOLXO1H7XHEF3l1bJty4hOK6xumcP6SiqCqdtENI33p.EWR5no.9q', '1', 'p54qFbl3oPdgYwwILSoxhSrhAPYeViQXP6OzKcGCGTQxY3ddoF5RDWGBb0UW', '2017-03-27 06:14:59', '2017-03-27 06:14:59'),
(4, 'Cook', 'cook@gmail.com', '$2y$10$UdCtjHfll/j253/ojhu1P.piujQkOgcBTkH/tyKnzJ0pNhPGlNgCK', '1', NULL, '2017-03-27 06:15:28', '2017-03-27 06:15:28');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ingredient_menus`
--
ALTER TABLE `ingredient_menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `totals`
--
ALTER TABLE `totals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `ingredient_menus`
--
ALTER TABLE `ingredient_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `totals`
--
ALTER TABLE `totals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2022 г., 18:35
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kursBase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `on_post` bigint UNSIGNED NOT NULL,
  `from_user` bigint UNSIGNED NOT NULL DEFAULT '0',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `on_post`, `from_user`, `body`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 'Добавление комментария через БД', NULL, NULL),
(7, 10, 3, 'wed', '2022-10-18 09:41:58', '2022-10-18 09:41:58'),
(8, 8, 1, 'Глубоко, очень глубоко...', '2022-10-18 09:49:40', '2022-10-18 09:49:40'),
(9, 8, 1, 'Как найти её?', '2022-10-18 09:52:13', '2022-10-18 09:52:13'),
(10, 11, 1, 'Комментарий 1 Михаил пост 4', '2022-10-18 09:56:11', '2022-10-18 09:56:11'),
(11, 11, 1, 'Комментарий 2 Михаил пост 4', '2022-10-18 10:30:48', '2022-10-18 10:30:48');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_08_04_122228_create_users_table', 1),
(5, '2022_09_04_122229_create_posts_table', 1),
(6, '2022_10_04_122557_create_comments_table', 1),
(7, '2022_10_11_084442_create_subscribes_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `active`, `created_at`, `updated_at`, `author_id`) VALUES
(1, 'Михаил пост 1', 'Равным образом сложившаяся структура организации требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Товарищи! новая модель организационной деятельности влечет за собой процесс внедрения и модернизации форм развития. Не следует, однако забывать, что рамки и место обучения кадров играет важную роль в формировании существенных финансовых и административных условий.', 127, '2022-10-13 06:09:20', '2022-10-13 06:09:20', 1),
(2, 'Михаил пост 2', 'Товарищи! укрепление и развитие структуры влечет за собой процесс внедрения и модернизации форм развития. Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение соответствующий условий активизации. Товарищи! укрепление и развитие структуры представляет собой интересный эксперимент проверки направлений прогрессивного развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании новых предложений. Таким образом постоянный количественный рост и сфера нашей активности в значительной степени обуславливает создание систем массового участия.', 127, '2022-10-13 06:09:37', '2022-10-13 06:09:37', 1),
(3, 'София пост 1', 'Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий. Таким образом постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке направлений прогрессивного развития. Повседневная практика показывает, что начало повседневной работы по формированию позиции требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям.', 127, '2022-10-13 06:10:25', '2022-10-13 06:10:25', 2),
(4, 'София пост 2', 'Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации систем массового участия. Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет выполнять важные задания по разработке существенных финансовых и административных условий. Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития. Таким образом укрепление и развитие структуры требуют определения и уточнения форм развития.', 127, '2022-10-13 06:10:41', '2022-10-13 06:10:41', 2),
(5, 'София пост 3', 'Таким образом реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности требуют от нас анализа форм развития.', 127, '2022-10-13 06:10:57', '2022-10-13 06:10:57', 2),
(6, 'Сергей пост 1', 'Таким образом дальнейшее развитие различных форм деятельности способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям. Идейные соображения высшего порядка, а также укрепление и развитие структуры позволяет выполнять важные задания по разработке систем массового участия. С другой стороны сложившаяся структура организации влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям. Товарищи! реализация намеченных плановых заданий позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Задача организации, в особенности же рамки и место обучения кадров влечет за собой процесс внедрения и модернизации модели развития. Таким образом новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.', 127, '2022-10-13 06:16:05', '2022-10-13 06:16:05', 3),
(7, 'Сергей пост 2', 'Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании форм развития. Значимость этих проблем настолько очевидна, что новая модель организационной деятельности способствует подготовки и реализации направлений прогрессивного развития.', 127, '2022-10-13 06:16:28', '2022-10-13 06:16:28', 3),
(8, 'Михаил пост 3 редактирование', 'Абра кадабра, бдыщ быдыщ', 0, '2022-10-13 06:17:18', '2022-10-18 09:52:34', 1),
(9, 'София пост 4', 'Повседневная практика показывает, что укрепление и развитие структуры позволяет выполнять важные задания по разработке направлений прогрессивного развития. Задача организации, в особенности же начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.', 127, '2022-10-14 03:07:21', '2022-10-14 03:07:21', 2),
(10, 'Сергей пост 3', 'Таким образом постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации дальнейших направлений развития. С другой стороны постоянный количественный рост и сфера нашей активности требуют от нас анализа новых предложений. Идейные соображения высшего порядка, а также консультация с широким активом позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации форм развития. Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке форм развития. С другой стороны начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.', 127, '2022-10-14 03:25:31', '2022-10-14 03:25:31', 3),
(11, 'Михаил пост 4', 'Таким образом консультация с широким активом способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач. Равным образом начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации новых предложений. Равным образом реализация намеченных плановых заданий позволяет оценить значение новых предложений.', 127, '2022-10-18 09:55:39', '2022-10-18 09:55:39', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint UNSIGNED NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subscribes`
--

INSERT INTO `subscribes` (`id`, `author_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2022-10-13 06:16:40', '2022-10-13 06:16:40'),
(4, 1, 2, '2022-10-14 03:07:38', '2022-10-14 03:07:38'),
(5, 2, 1, '2022-10-14 03:36:16', '2022-10-14 03:36:16');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','author','subscriber') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'author',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Михаил', 'mikazolota@mail.ru', '$2y$10$IwWIE2e4mr1uGRWK.jFDFeb259xXlZKuDeYK3HsIEuP/h6zVeg8z6', 'author', 'dD91sEIkikxXFlgjU1KkEojnv2cS1Lf4imQDW0TAzWCgqa59buWZ47DAIDh9', '2022-10-13 06:08:44', '2022-10-13 06:08:44'),
(2, 'София', 'sofiya170799@gmail.com', '$2y$10$O9fEg733dF8LxfMUXU2T6.xHScKM6ixwHE1tthHEJfJATlQNl7iqy', 'author', NULL, '2022-10-13 06:10:11', '2022-10-13 06:10:11'),
(3, 'Сергей', 'test@mail.ru', '$2y$10$IkspPOZIBBnD1LziO.NxBuS1NkRlQb19ooVyuwvVbT2jSgEs8ssBK', 'author', NULL, '2022-10-13 06:15:41', '2022-10-13 06:15:41');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_on_post_foreign` (`on_post`),
  ADD KEY `comments_from_user_foreign` (`from_user`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Индексы таблицы `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribes_author_id_foreign` (`author_id`),
  ADD KEY `subscribes_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_from_user_foreign` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_on_post_foreign` FOREIGN KEY (`on_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `subscribes`
--
ALTER TABLE `subscribes`
  ADD CONSTRAINT `subscribes_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `subscribes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

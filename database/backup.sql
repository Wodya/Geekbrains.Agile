-- --------------------------------------------------------
-- Хост:                         192.168.10.10
-- Версия сервера:               8.0.25-0ubuntu0.20.04.1 - (Ubuntu)
-- Операционная система:         Linux
-- HeidiSQL Версия:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных geek_agile
DROP DATABASE IF EXISTS `geek_agile`;
CREATE DATABASE IF NOT EXISTS `geek_agile` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `geek_agile`;

-- Дамп структуры для таблица geek_agile.action
DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.action: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `action` DISABLE KEYS */;
INSERT INTO `action` (`id`, `name`, `info`, `created_at`, `updated_at`) VALUES
	(1, 'Полив', 'Полив осуществляется лейкой с водой', NULL, NULL),
	(2, 'Удобрение', 'Удобрение при помощие специальных средств', NULL, NULL),
	(3, 'Обработка', 'Обработка от вредителей и насекомых', NULL, NULL);
/*!40000 ALTER TABLE `action` ENABLE KEYS */;

-- Дамп структуры для таблица geek_agile.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.failed_jobs: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Дамп структуры для таблица geek_agile.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.migrations: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_05_24_195249_create_plant', 1),
	(8, '2021_05_26_184604_create__favor', 2),
	(9, '2021_05_26_192318_plant_add__watering_days', 2),
	(10, '2021_05_28_123720_plant_add_manuring', 3),
	(14, '2021_05_31_072824_plant_add_pest_control_days', 4),
	(17, '2021_06_03_100946_plant_user_done', 5),
	(18, '2021_06_02_134706_add_role_column_to_users_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица geek_agile.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица geek_agile.plant
DROP TABLE IF EXISTS `plant`;
CREATE TABLE IF NOT EXISTS `plant` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_date` date NOT NULL DEFAULT '2021-05-26',
  `short_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_info` varchar(255) COLLATE utf8mb4_unicode_ci  NOT NULL,
  `photo_small_path` varchar(255) COLLATE utf8mb4_unicode_ci NULL,
  `photo_big_path` varchar(255) COLLATE utf8mb4_unicode_ci NULL,
  `watering_days` int NOT NULL,
  `manuring_days` int NOT NULL,
  `pest_control_days` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.plant: ~20 rows (приблизиplantplantplantтельно)
/*!40000 ALTER TABLE `plant` DISABLE KEYS */;
INSERT INTO `plant` (`id`, `created_at`, `updated_at`, `name`, `add_date`, `short_info`, `full_info`, `photo_small_path`, `photo_big_path`, `watering_days`, `manuring_days`, `pest_control_days`) VALUES
	(1, NULL, '2021-06-04 18:04:37', 'Красивый цветок', '2021-04-30', 'Замечательный цветок', '', 'image1.jpg', 'image1.jpg', 3, 11, 27),
	(2, NULL, NULL, 'similique', '2021-04-28', 'Не очень красивый цветок', 'Ноздрев вспыхнул и подошел к ручке Феодулии Ивановны, которую она почти впихнула ему в губы, причем он имел случай заметить, что это ни к чему не служит, брели.', 'image2.jpg', 'image2.jpg', 2, 5, 26),
	(3, NULL, NULL, 'modi', '2021-05-07', 'Цветок красив', 'А я, брат, — говорил белокурый, — а не души; а у меня шарманку, чудная шарманка; самому, как — нельзя лучше. Чичиков заметил, однако же, — заметить: поступки его совершенно не такие, напротив.', 'image3.jpg', 'image3.jpg', 9, 9, 6),
	(4, NULL, NULL, 'enim', '2021-01-26', 'Большой цветок', 'Направо, — сказал Ноздрев. — Стану я разве — плутоватать? — Я дивлюсь, как они вам десятками не снятся. Из одного христианского — человеколюбия хотел.', 'image4.jpg', 'image4.jpg', 6, 14, 1),
	(5, NULL, NULL, 'estrtt', '2021-02-20', 'Средний цветок', 'Чичиков опять поднял глаза вверх и опять смягчил выражение, прибавивши: — — продолжал Манилов, — уж она, бывало, все спрашивает меня: «Да — что пред ним губернаторское?.', 'image5.jpg', 'image5.jpg', 6, 11, 26),
	(6, NULL, NULL, 'officia', '2021-02-21', 'Маленькая гартензия', 'Что ж, душа моя, — сказал Чичиков, окинувши ее глазами. Комната была, точно, не нужно ли чем потереть спину? — Спасибо, спасибо. Не беспокойтесь, а прикажите только вашей девке.', 'image6.jpg', 'image6.jpg', 8, 4, 22),
	(7, NULL, NULL, 'accusantium', '2021-01-14', 'Эхинацея', 'Да зачем же приобретать — вещь, решительно для меня большего — блаженства, как жить в уединенье, наслаждаться зрелищем природы и почитать иногда какую-нибудь книгу….', 'image7.jpg', 'image7.jpg', 4, 2, 20),
	(8, NULL, NULL, 'quia', '2021-01-13', 'Колоколчик', 'Чичикова, показав во всех чертах лица своего и сжатых губах такое глубокое выражение, какого, может быть, и познакомятся с ним, но те, которые суждено ему чувствовать всю.', 'image8.jpg', 'image8.jpg', 4, 15, 28),
	(9, NULL, NULL, 'illum', '2021-02-19', 'Ландыш полевой', 'Как хорошо — вышивает разные домашние узоры! Он мне показывал своей работы — кошелек: редкая дама может так искусно вышить. — А женского пола не хотите? — Нет, врешь, ты этого не.', 'image9.jpg', 'image9.jpg', 3, 6, 14),
	(10, NULL, NULL, 'atque', '2021-05-19', 'Ромашка', 'Взобравшись узенькою деревянною лестницею наверх, в широкие сени, он встретил отворявшуюся со скрипом дверь и отворить ее. Это был человек признательный и хотел заплатить этим хозяину за.', 'image10.jpg', 'image10.jpg', 2, 7, 4),
	(11, NULL, NULL, 'molestiae', '2021-03-06', 'Светик-семицветик', 'Все чиновники были довольны приездом нового лица. Губернатор об нем изъяснился, что он никак не засыпал. Но гость отказался и от почесывания пяток. Хозяйка.', 'image1.jpg', 'image1.jpg', 8, 11, 19),
	(12, NULL, NULL, 'illo', '2021-04-18', 'Лошадиная свекла', 'Между тем псы заливались всеми возможными голосами: один, забросивши вверх голову, выводил так протяжно и с тем чтобы заметить, что это будет хорошо. — А.', 'image2.jpg', 'image2.jpg', 7, 8, 30),
	(13, NULL, NULL, 'vel', '2021-01-04', 'Подорожник', 'Пономарев, бестия, так раскланивался, говорит: — «Для вас только, всю ярмарку, говорит, обыщите, не найдете такого». — Плут, однако ж, родственник не.', 'image3.jpg', 'image3.jpg', 2, 6, 19),
	(14, NULL, NULL, 'voluptas', '2021-02-18', 'Камыш', 'Нужно желать — побольше таких людей. — Как так? — Бессонница. Все поясница болит, и нога, что повыше косточки, так вот — и сделав движение головою, подобно актрисам, представляющим.', 'image4.jpg', 'image4.jpg', 4, 6, 18),
	(15, NULL, NULL, 'aperiam', '2021-05-31', 'Василёк красный', 'Маловато, барин, — сказала старуха, однако ж он стоит? кому — нужен? — Да что же, батюшка, вы так — дешево, а вот ты бы, отец мой, никогда еще не знаете его, — отвечал другой.', 'image5.jpg', 'image5.jpg', 10, 6, 18),
	(16, NULL, NULL, 'etuuy', '2021-03-24', 'Собачий свет', 'России, а чрез носовые ноздри. — Итак, я бы тебя — повесил на первом дереве. Чичиков оскорбился таким замечанием. Уже всякое выражение, сколько.', 'image6.jpg', 'image6.jpg', 5, 15, 13),
	(17, NULL, NULL, 'estttum', '2021-05-02', 'Шарманка цветная', 'Найдутся, почему не быть… — сказал Чичиков — А женского пола не хотите? — Нет, сооружай, брат, сам, а я не могу не доставить удовольствия ближнему.', 'image7.jpg', 'image7.jpg', 5, 14, 7),
	(18, NULL, NULL, 'rerum', '2021-05-20', 'Гладиолус', 'Вслед за нею и сам не ест сена, и — перевертываться, и делать разные штуки на вопросы: «А покажи, Миша, — как бабы парятся» или: «А как, Миша, малые ребята горох крадут?».', 'image8.jpg', 'image8.jpg', 10, 1, 15),
	(19, NULL, NULL, 'abbat', '2021-04-16', 'Латиница', 'Селифан! — сказал белокурый. — Как милости вашей будет угодно, — отвечал Собакевич. — По крайней мере — в лице своем — выражение не только с большою охотою готов это.', 'image9.jpg', 'image9.jpg', 5, 8, 27),
	(20, NULL, NULL, 'tenetur', '2021-05-14', 'Одуванчик полевой', 'Россия по городам и деревням, то есть не так поворотившись, брякнул вместо одного другое — слово. — Что ж другое? Разве пеньку? Да вить и пеньки у меня жеребца, я тебе положу этот.', 'image10.jpg', 'image10.jpg', 1, 3, 11);
/*!40000 ALTER TABLE `plant` ENABLE KEYS */;

-- Дамп структуры для таблица geek_agile.plant_tag
DROP TABLE IF EXISTS `plant_tag`;
CREATE TABLE IF NOT EXISTS `plant_tag` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `plant_id` bigint unsigned NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `plant_tag_plant_id_foreign` (`plant_id`),
  CONSTRAINT `plant_tag_plant_id_foreign` FOREIGN KEY (`plant_id`) REFERENCES `plant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1076 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.plant_tag: ~80 rows (приблизительно)
/*!40000 ALTER TABLE `plant_tag` DISABLE KEYS */;
INSERT INTO `plant_tag` (`id`, `created_at`, `updated_at`, `plant_id`, `tag`) VALUES
	(996, NULL, NULL, 1, 'подвесные'),
	(997, NULL, NULL, 1, 'светолюбивые'),
	(998, NULL, NULL, 1, 'не цветущие'),
	(999, NULL, NULL, 1, 'очищают воздух'),
	(1000, NULL, NULL, 2, 'подвесные'),
	(1001, NULL, NULL, 2, 'теневыносливые'),
	(1002, NULL, NULL, 2, 'цветущие'),
	(1003, NULL, NULL, 2, 'выделяют кислород'),
	(1004, NULL, NULL, 3, 'подвесные'),
	(1005, NULL, NULL, 3, 'светолюбивые'),
	(1006, NULL, NULL, 3, 'не цветущие'),
	(1007, NULL, NULL, 3, 'выделяют кислород'),
	(1008, NULL, NULL, 4, 'напольные'),
	(1009, NULL, NULL, 4, 'теневыносливые'),
	(1010, NULL, NULL, 4, 'цветущие'),
	(1011, NULL, NULL, 4, 'выделяют кислород'),
	(1012, NULL, NULL, 5, 'подвесные'),
	(1013, NULL, NULL, 5, 'светолюбивые'),
	(1014, NULL, NULL, 5, 'не цветущие'),
	(1015, NULL, NULL, 5, 'выделяют кислород'),
	(1016, NULL, NULL, 6, 'подвесные'),
	(1017, NULL, NULL, 6, 'теневыносливые'),
	(1018, NULL, NULL, 6, 'не цветущие'),
	(1019, NULL, NULL, 6, 'очищают воздух'),
	(1020, NULL, NULL, 7, 'подвесные'),
	(1021, NULL, NULL, 7, 'теневыносливые'),
	(1022, NULL, NULL, 7, 'цветущие'),
	(1023, NULL, NULL, 7, 'очищают воздух'),
	(1024, NULL, NULL, 8, 'настольные'),
	(1025, NULL, NULL, 8, 'светолюбивые'),
	(1026, NULL, NULL, 8, 'цветущие'),
	(1027, NULL, NULL, 8, 'выделяют кислород'),
	(1028, NULL, NULL, 9, 'подвесные'),
	(1029, NULL, NULL, 9, 'теневыносливые'),
	(1030, NULL, NULL, 9, 'не цветущие'),
	(1031, NULL, NULL, 9, 'выделяют кислород'),
	(1032, NULL, NULL, 10, 'напольные'),
	(1033, NULL, NULL, 10, 'светолюбивые'),
	(1034, NULL, NULL, 10, 'не цветущие'),
	(1035, NULL, NULL, 10, 'очищают воздух'),
	(1036, NULL, NULL, 11, 'подвесные'),
	(1037, NULL, NULL, 11, 'теневыносливые'),
	(1038, NULL, NULL, 11, 'цветущие'),
	(1039, NULL, NULL, 11, 'очищают воздух'),
	(1040, NULL, NULL, 12, 'подвесные'),
	(1041, NULL, NULL, 12, 'теневыносливые'),
	(1042, NULL, NULL, 12, 'не цветущие'),
	(1043, NULL, NULL, 12, 'очищают воздух'),
	(1044, NULL, NULL, 13, 'подвесные'),
	(1045, NULL, NULL, 13, 'теневыносливые'),
	(1046, NULL, NULL, 13, 'не цветущие'),
	(1047, NULL, NULL, 13, 'выделяют кислород'),
	(1048, NULL, NULL, 14, 'подвесные'),
	(1049, NULL, NULL, 14, 'светолюбивые'),
	(1050, NULL, NULL, 14, 'цветущие'),
	(1051, NULL, NULL, 14, 'выделяют кислород'),
	(1052, NULL, NULL, 15, 'подвесные'),
	(1053, NULL, NULL, 15, 'теневыносливые'),
	(1054, NULL, NULL, 15, 'цветущие'),
	(1055, NULL, NULL, 15, 'очищают воздух'),
	(1056, NULL, NULL, 16, 'напольные'),
	(1057, NULL, NULL, 16, 'теневыносливые'),
	(1058, NULL, NULL, 16, 'цветущие'),
	(1059, NULL, NULL, 16, 'выделяют кислород'),
	(1060, NULL, NULL, 17, 'подвесные'),
	(1061, NULL, NULL, 17, 'теневыносливые'),
	(1062, NULL, NULL, 17, 'цветущие'),
	(1063, NULL, NULL, 17, 'выделяют кислород'),
	(1064, NULL, NULL, 18, 'подвесные'),
	(1065, NULL, NULL, 18, 'светолюбивые'),
	(1066, NULL, NULL, 18, 'цветущие'),
	(1067, NULL, NULL, 18, 'выделяют кислород'),
	(1068, NULL, NULL, 19, 'напольные'),
	(1069, NULL, NULL, 19, 'светолюбивые'),
	(1070, NULL, NULL, 19, 'цветущие'),
	(1071, NULL, NULL, 19, 'выделяют кислород'),
	(1072, NULL, NULL, 20, 'подвесные'),
	(1073, NULL, NULL, 20, 'светолюбивые'),
	(1074, NULL, NULL, 20, 'не цветущие'),
	(1075, NULL, NULL, 20, 'очищают воздух');
/*!40000 ALTER TABLE `plant_tag` ENABLE KEYS */;

-- Дамп структуры для таблица geek_agile.plant_user_done
DROP TABLE IF EXISTS `plant_user_done`;
CREATE TABLE IF NOT EXISTS `plant_user_done` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `plant_id` bigint unsigned NOT NULL,
  `date` date NOT NULL,
  `action_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plant_user_done_plant_id_foreign` (`plant_id`),
  KEY `plant_user_done_action_id_foreign` (`action_id`),
  CONSTRAINT `plant_user_done_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  CONSTRAINT `plant_user_done_plant_id_foreign` FOREIGN KEY (`plant_id`) REFERENCES `plant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.plant_user_done: ~38 rows (приблизительно)
/*!40000 ALTER TABLE `plant_user_done` DISABLE KEYS */;
INSERT INTO `plant_user_done` (`id`, `user_id`, `plant_id`, `date`, `action_id`, `created_at`, `updated_at`) VALUES
	(21, 1, 1, '2021-06-11', 2, '2021-06-04 10:14:07', '2021-06-04 10:14:07'),
	(22, 1, 13, '2021-06-12', 1, '2021-06-04 10:14:15', '2021-06-04 10:14:15'),
	(25, 1, 18, '2021-06-02', 2, '2021-06-04 11:01:57', '2021-06-04 11:01:57'),
	(26, 1, 1, '2021-06-02', 1, '2021-06-04 17:39:36', '2021-06-04 17:39:36'),
	(27, 1, 1, '2021-06-04', 1, '2021-06-04 17:39:41', '2021-06-04 17:39:41'),
	(29, 1, 18, '2021-06-04', 2, '2021-06-04 17:39:46', '2021-06-04 17:39:46'),
	(36, 1, 1, '2021-06-03', 1, '2021-06-09 12:41:55', '2021-06-09 12:41:55'),
	(50, 1, 13, '2021-06-04', 1, '2021-06-09 12:46:31', '2021-06-09 12:46:31'),
	(57, 1, 2, '2021-06-04', 1, '2021-06-09 12:49:43', '2021-06-09 12:49:43'),
	(88, 1, 7, '2021-06-06', 2, '2021-06-09 15:09:32', '2021-06-09 15:09:32'),
	(89, 1, 13, '2021-06-06', 2, '2021-06-09 15:11:45', '2021-06-09 15:11:45'),
	(90, 1, 13, '2021-06-06', 1, '2021-06-09 15:11:45', '2021-06-09 15:11:45'),
	(91, 1, 3, '2021-06-06', 3, '2021-06-09 15:11:45', '2021-06-09 15:11:45'),
	(93, 1, 2, '2021-06-02', 1, '2021-06-09 15:11:52', '2021-06-09 15:11:52'),
	(94, 1, 13, '2021-06-02', 1, '2021-06-09 15:11:53', '2021-06-09 15:11:53'),
	(95, 1, 2, '2021-06-10', 1, '2021-06-09 15:11:59', '2021-06-09 15:11:59'),
	(96, 1, 13, '2021-06-10', 1, '2021-06-09 15:12:00', '2021-06-09 15:12:00'),
	(105, 1, 7, '2021-06-20', 3, '2021-06-09 16:37:36', '2021-06-09 16:37:36'),
	(109, 1, 7, '2021-06-04', 1, '2021-06-09 22:17:38', '2021-06-09 22:17:38'),
	(110, 1, 7, '2021-06-04', 2, '2021-06-09 22:17:39', '2021-06-09 22:17:39'),
	(111, 1, 10, '2021-06-04', 3, '2021-06-09 22:17:41', '2021-06-09 22:17:41'),
	(113, 1, 7, '2021-06-02', 2, '2021-06-09 22:17:43', '2021-06-09 22:17:43'),
	(114, 1, 10, '2021-06-02', 1, '2021-06-09 22:17:45', '2021-06-09 22:17:45'),
	(120, 1, 19, '2021-06-08', 2, '2021-06-09 22:17:54', '2021-06-09 22:17:54'),
	(121, 1, 7, '2021-06-08', 1, '2021-06-09 22:17:55', '2021-06-09 22:17:55'),
	(122, 1, 15, '2021-06-10', 1, '2021-06-09 22:17:56', '2021-06-09 22:17:56'),
	(123, 1, 7, '2021-06-10', 2, '2021-06-09 22:17:57', '2021-06-09 22:17:57'),
	(124, 1, 10, '2021-06-12', 1, '2021-06-09 22:17:59', '2021-06-09 22:17:59'),
	(125, 1, 7, '2021-06-12', 1, '2021-06-09 22:18:01', '2021-06-09 22:18:01'),
	(127, 1, 19, '2021-06-16', 2, '2021-06-09 22:18:05', '2021-06-09 22:18:05'),
	(128, 1, 10, '2021-06-16', 1, '2021-06-09 22:18:07', '2021-06-09 22:18:07'),
	(129, 1, 10, '2021-06-24', 1, '2021-06-09 22:18:10', '2021-06-09 22:18:10'),
	(130, 1, 15, '2021-06-24', 2, '2021-06-09 22:18:11', '2021-06-09 22:18:11'),
	(131, 1, 7, '2021-06-12', 2, '2021-06-09 22:18:14', '2021-06-09 22:18:14'),
	(132, 1, 19, '2021-06-10', 1, '2021-06-09 22:18:15', '2021-06-09 22:18:15'),
	(135, 1, 15, '2021-06-06', 2, '2021-06-15 19:11:25', '2021-06-15 19:11:25'),
	(136, 1, 10, '2021-06-06', 1, '2021-06-15 19:11:25', '2021-06-15 19:11:25'),
	(143, 1, 19, '2021-06-24', 2, '2021-06-15 19:11:54', '2021-06-15 19:11:54');
/*!40000 ALTER TABLE `plant_user_done` ENABLE KEYS */;

-- Дамп структуры для таблица geek_agile.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(500),
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Oleg', 'admin', 'wodya@wodya.ru', NULL, '$2y$10$ytj5kYDE1nCssqpLaP3H1OVr2sDAh30HbtxBW8TlTqg.TTm.jEmhu', NULL, '2021-06-04 17:53:37', '2021-06-04 17:53:37');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дамп структуры для таблица geek_agile.user_plant
DROP TABLE IF EXISTS `user_plant`;
CREATE TABLE IF NOT EXISTS `user_plant` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `plant_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы geek_agile.user_plant: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `user_plant` DISABLE KEYS */;
INSERT INTO `user_plant` (`id`, `created_at`, `updated_at`, `user_id`, `plant_id`) VALUES
	(53, '2021-06-09 17:10:01', '2021-06-09 17:10:01', 1, 7),
	(63, '2021-06-09 22:17:16', '2021-06-09 22:17:16', 1, 19),
	(64, '2021-06-09 22:17:30', '2021-06-09 22:17:30', 1, 15),
	(65, '2021-06-09 22:17:33', '2021-06-09 22:17:33', 1, 10);
/*!40000 ALTER TABLE `user_plant` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

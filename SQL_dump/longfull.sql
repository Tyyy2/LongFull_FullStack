-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        10.4.27-MariaDB - mariadb.org binary distribution
-- 伺服器作業系統:                      Win64
-- HeidiSQL 版本:                  12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 傾印  資料表 longfull.contact_informations 結構
CREATE TABLE IF NOT EXISTS `contact_informations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `contact_phone` varchar(255) DEFAULT NULL COMMENT '電話',
  `contact_mail` varchar(255) DEFAULT NULL COMMENT '信箱',
  `contact_content` varchar(255) DEFAULT NULL COMMENT '內文',
  `common_trash` varchar(255) DEFAULT NULL COMMENT '一般垃圾',
  `recycle_trash` varchar(255) DEFAULT NULL COMMENT '資源回收',
  `uncommon_trash` varchar(255) DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  longfull.contact_informations 的資料：~0 rows (近似值)

-- 傾印  資料表 longfull.employees 結構
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employees_img_path` varchar(255) NOT NULL COMMENT '人才招募圖片路徑',
  `employees_title` varchar(255) NOT NULL COMMENT '人才招募圖片標題',
  `employees_content` varchar(255) NOT NULL COMMENT '人才招募圖內容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  longfull.employees 的資料：~2 rows (近似值)
INSERT INTO `employees` (`id`, `created_at`, `updated_at`, `employees_img_path`, `employees_title`, `employees_content`) VALUES
	(1, '2022-12-13 22:03:14', '2022-12-13 22:03:14', 'img/employees/S__3842622.jpg', '誠徵', '沿街回收車助手'),
	(2, '2022-12-13 22:03:35', '2022-12-13 22:03:35', 'img/employees/S__3842624.jpg', '誠徵', '垃圾車司機、機動司機、回收車司機、回收助手');

-- 傾印  資料表 longfull.failed_jobs 結構
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  longfull.failed_jobs 的資料：~0 rows (近似值)

-- 傾印  資料表 longfull.index_news 結構
CREATE TABLE IF NOT EXISTS `index_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `news_title` varchar(255) NOT NULL COMMENT '最新消息標題',
  `news_content` varchar(255) NOT NULL COMMENT '最新消息內文',
  `news_img_path` varchar(255) DEFAULT NULL COMMENT '最新消息圖片路徑',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  longfull.index_news 的資料：~5 rows (近似值)
INSERT INTO `index_news` (`id`, `created_at`, `updated_at`, `news_title`, `news_content`, `news_img_path`) VALUES
	(1, '2022-12-13 21:54:51', '2022-12-13 21:54:51', '最新消息標題', '社會回饋計畫-捐贈區公所公務貨車https://www.mypeoplevol.com/Article/33387', 'img/news/S__61915148.jpg'),
	(2, '2022-12-13 21:50:07', '2022-12-13 21:50:07', '最新消息標題', '國中、小學獎助學金', 'img/news/S__61915149.jpg'),
	(3, '2022-12-13 21:48:40', '2022-12-13 21:48:40', '最新消息標題', '符合台中市環保局節能減碳政策-配置油電車。', 'img/news/S__61915150.jpg'),
	(4, '2022-12-13 21:47:29', '2022-12-13 22:06:25', '人才招募', '司機、助手、行政助理、會計助理', 'img/news/news-two.png'),
	(5, '2022-12-13 21:47:13', '2022-12-13 21:47:13', '分類宣導', '垃圾及資源回收分類宣導', 'img/news/news-one.png');

-- 傾印  資料表 longfull.migrations 結構
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  longfull.migrations 的資料：~12 rows (近似值)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_12_04_181236_create_news_table', 1),
	(6, '2022_12_04_181324_create_employees_table', 1),
	(7, '2022_12_04_181423_create_contact_informations_table', 1),
	(8, '2022_12_04_190733_create_index_news_table', 2),
	(9, '2022_12_06_110922_add_trashs_to_contact_informations_table', 3),
	(10, '2022_12_06_113753_create_contact_informations_table', 4),
	(13, '2022_12_11_164800_create_employees_table', 5),
	(14, '2022_12_11_165140_create_employees_table', 6);

-- 傾印  資料表 longfull.password_resets 結構
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  longfull.password_resets 的資料：~0 rows (近似值)

-- 傾印  資料表 longfull.personal_access_tokens 結構
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  longfull.personal_access_tokens 的資料：~0 rows (近似值)

-- 傾印  資料表 longfull.users 結構
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  longfull.users 的資料：~1 rows (近似值)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$UfzSBVZbAFl4rAOZmhsZSuj2m7Z9BS6L/Pnd1132h52edVfYze4vG', 'mCAciwNJryFZGkE8hqqp8OD2244wYBHxHCiAkPPQJRpEvIXagqsbUEsQutTq', '2022-12-07 10:16:51', '2022-12-07 10:16:51');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

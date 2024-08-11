-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 06, 2024 lúc 04:40 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `news_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('phamgiaan@gmail.com|127.0.0.1', 'i:2;', 1722701354),
('phamgiaan@gmail.com|127.0.0.1:timer', 'i:1722701354;', 1722701354),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:16:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"view post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:9;i:3;i:10;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"create post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:9;i:2;i:10;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:9:\"edit post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:9;i:2;i:10;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"delete post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:9;i:2;i:10;}}i:4;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:9:\"view user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:5;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:11:\"create user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:9:\"edit user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:11:\"delete user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:9:\"view role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:9;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:11:\"create role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:9:\"edit role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:11:\"delete role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:13:\"view category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:15:\"create category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:13:\"edit category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:15:\"delete category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:4:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:6:\"Viewer\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:9;s:1:\"b\";s:15:\"Ban biên tập\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:10;s:1:\"b\";s:10:\"Tác giả\";s:1:\"c\";s:3:\"web\";}}}', 1722915889);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `meta_keyword`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Sức khỏe', 'suc-khoe', '[{\"value\":\"sức khỏe\"}]', 'Sức khỏe con người', 'Sức khỏe con người là số 1', '2024-07-15 09:06:10', '2024-07-15 09:11:05'),
(6, 'Du lịch', 'du-lich', '[{\"value\":\"Travelling\"}]', 'Du lịch mọi miền', 'Du lịch mọi miền Việt Nam', '2024-07-17 08:26:59', '2024-07-17 08:43:03'),
(7, 'Giao Thông', 'giao-thong', '[{\"value\":\"GTĐN\"}]', 'Giao Thông ĐN', 'Giao Thông Đà Nẵng vào chiều ngày 21/07/2024', '2024-07-20 22:01:20', '2024-07-20 22:01:53'),
(8, 'Xã hội', 'xa-hoi', '[{\"value\":\"XaHoi\"}]', 'Xã hội Việt Nam', 'TBT qua đời', '2024-07-28 20:56:07', '2024-07-28 20:56:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_post`
--

CREATE TABLE `category_post` (
  `category_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_post`
--

INSERT INTO `category_post` (`category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(6, 2, NULL, NULL),
(7, 2, NULL, NULL),
(1, 4, NULL, NULL),
(1, 8, NULL, NULL),
(6, 9, NULL, NULL),
(8, 7, NULL, NULL),
(8, 11, NULL, NULL),
(8, 6, NULL, NULL),
(1, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `content`, `created_at`, `updated_at`) VALUES
(2, 7, 14, NULL, 'Okkkkk', '2024-08-08 17:03:43', NULL),
(6, 5, 14, 2, 'Okkk cái gì?', NULL, NULL),
(7, 7, 14, 2, 'bình tĩnh', NULL, NULL),
(8, 5, 14, 6, '.....', NULL, NULL),
(9, 7, 14, NULL, 'edyusda', '2024-08-05 21:50:39', '2024-08-05 21:50:39'),
(10, 7, 14, NULL, 'tess', '2024-08-05 21:51:01', '2024-08-05 21:51:01'),
(11, 7, 4, NULL, 'Ít ảnh quá', '2024-08-05 22:00:57', '2024-08-05 22:00:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2024_07_12_154740_create_loai_table', 3),
(7, '2024_07_13_154712_create_loai_table', 5),
(8, '0001_01_01_000000_create_users_table', 6),
(9, '0001_01_01_000001_create_cache_table', 6),
(10, '0001_01_01_000002_create_jobs_table', 6),
(11, '2024_07_10_162716_create_categories_table', 6),
(14, '2024_07_12_155314_create_tin_table', 7),
(15, '2024_07_17_162712_create_posts_table', 7),
(16, '2024_07_20_145340_create_category_post_table', 8),
(17, '2024_07_28_153139_create_permission_tables', 9),
(18, '2024_07_29_030841_create_permission_table', 10),
(19, '2024_08_05_153152_create_comments_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(9, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view post', 'web', '2024-07-28 20:12:22', '2024-07-28 20:12:22'),
(2, 'create post', 'web', '2024-07-28 20:12:22', '2024-07-28 20:12:22'),
(3, 'edit post', 'web', '2024-07-28 20:12:22', '2024-07-28 20:12:22'),
(4, 'delete post', 'web', '2024-07-28 20:12:22', '2024-07-28 20:12:22'),
(9, 'view user', 'web', '2024-08-01 09:26:43', '2024-08-01 09:26:43'),
(10, 'create user', 'web', '2024-08-01 09:26:43', '2024-08-01 09:26:43'),
(11, 'edit user', 'web', '2024-08-01 09:26:43', '2024-08-01 09:26:43'),
(12, 'delete user', 'web', '2024-08-01 09:26:43', '2024-08-01 09:26:43'),
(13, 'view role', 'web', '2024-08-01 09:58:36', '2024-08-01 09:58:36'),
(14, 'create role', 'web', '2024-08-01 09:58:36', '2024-08-01 09:58:36'),
(15, 'edit role', 'web', '2024-08-01 09:58:36', '2024-08-01 09:58:36'),
(16, 'delete role', 'web', '2024-08-01 09:58:36', '2024-08-01 09:58:36'),
(17, 'view category', 'web', '2024-08-01 09:59:01', '2024-08-01 09:59:01'),
(18, 'create category', 'web', '2024-08-01 09:59:01', '2024-08-01 09:59:01'),
(19, 'edit category', 'web', '2024-08-01 09:59:01', '2024-08-01 09:59:01'),
(20, 'delete category', 'web', '2024-08-01 09:59:01', '2024-08-01 09:59:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_content` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'pending',
  `rank` int NOT NULL DEFAULT '1',
  `meta_keyword` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `short_content`, `content`, `thumbnail`, `status`, `rank`, `meta_keyword`, `meta_title`, `meta_description`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Du lịch', 'du-lich', 'Du lịch mọi miền', '<h1>Hong Kong sẵn s&agrave;ng gi&uacute;p TP HCM ph&aacute;t triển trung t&acirc;m t&agrave;i ch&iacute;nh</h1>\r\n\r\n<p>Trưởng Đặc khu H&agrave;nh ch&iacute;nh Hong Kong n&oacute;i sẵn s&agrave;ng chia sẻ kinh nghiệm với Việt Nam trong việc ph&aacute;t triển TP HCM th&agrave;nh trung t&acirc;m t&agrave;i ch&iacute;nh.</p>\r\n\r\n<article>\r\n<p>Ph&aacute;t biểu tại TP HCM trưa 2/8 trong khu&ocirc;n khổ chuyến thăm Việt Nam, &ocirc;ng L&yacute; Gia Si&ecirc;u, Trưởng Đặc khu H&agrave;nh ch&iacute;nh Hong Kong, cho biết kinh nghiệm của Hong Kong - một trong những trung t&acirc;m t&agrave;i ch&iacute;nh thế giới - c&oacute; thể hỗ trợ TP HCM x&acirc;y dựng trung t&acirc;m t&agrave;i ch&iacute;nh.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/userfiles/image/catetory/syy7671-jpg-1722604586-1722604-4076-6142-1722604938.jpg\" style=\"width: 500px; height: 300px;\" /></p>\r\n\r\n<p>Tại cuộc gặp với Trưởng Đặc khu L&yacute; Gia Si&ecirc;u v&agrave; c&aacute;c doanh nghiệp Hong Kong, Chủ tịch UBND TP HCM Phan Văn M&atilde;i cũng nhắc lại kế hoạch ph&aacute;t triển địa phương th&agrave;nh trung t&acirc;m t&agrave;i ch&iacute;nh khu vực, trong khi Hong Kong l&agrave; trung t&acirc;m t&agrave;i ch&iacute;nh lớn của thế giới.</p>\r\n\r\n<p>&quot;Ch&uacute;ng t&ocirc;i hy vọng hai b&ecirc;n tăng cường hợp t&aacute;c. C&aacute;c doanh nghiệp Hong Kong c&oacute; thể chia sẻ c&aacute;c giải ph&aacute;p, kinh nghiệm thực tiễn trong lộ tr&igrave;nh ph&aacute;t triển hiệu quả của một trung t&acirc;m t&agrave;i ch&iacute;nh khu vực v&agrave; thế giới&quot;, &ocirc;ng M&atilde;i n&oacute;i.</p>\r\n\r\n<p>Hong Kong hiện giữ vị tr&iacute; thứ 4 tr&ecirc;n 133 th&agrave;nh phố được xếp hạng về &quot;Chỉ số Trung t&acirc;m t&agrave;i ch&iacute;nh to&agrave;n cầu (GFCI)&quot; của Z/Yen Partners (Anh) v&agrave; Viện Ph&aacute;t triển Trung Quốc. Trong khi đ&oacute;, TP HCM đứng thứ 108, tăng 12 bậc so với 2023.</p>\r\n\r\n<p>Từ đầu những năm 2000, TP HCM đ&atilde; định hướng ph&aacute;t triển thị trường t&agrave;i ch&iacute;nh, xem đ&acirc;y l&agrave; một trong những lĩnh vực ưu ti&ecirc;n để chuyển dịch cơ cấu kinh tế. Từ đ&oacute;, &yacute; tưởng về x&acirc;y dựng trung t&acirc;m t&agrave;i ch&iacute;nh quốc tế được h&igrave;nh th&agrave;nh.</p>\r\n\r\n<p>Thực tế, việc ph&aacute;t triển trung t&acirc;m t&agrave;i ch&iacute;nh khu vực v&agrave; từng bước th&agrave;nh trung t&acirc;m t&agrave;i ch&iacute;nh quốc tế l&agrave; định hướng quốc gia. Th&aacute;ng 10/2023, Ban chỉ đạo x&acirc;y dựng đề &aacute;n n&agrave;y đ&atilde; được th&agrave;nh lập, do Ph&oacute; thủ tướng L&ecirc; Minh Kh&aacute;i l&agrave;m Trưởng ban.</p>\r\n</article>', '/userfiles/image/catetory/post-landscape-2.jpg', 'public', 1, '[{\"value\":\"tv\"}]', 'Du lịch', 'ădwea', 7, '2024-07-20 23:31:44', '2024-08-02 20:19:31'),
(4, 'Xã hội', 'xa-hoi', 'June go to DaNang because she loves FJVN', '<p><strong>SJC mua lại v&agrave;ng miếng một chữ v&agrave; m&oacute;p m&eacute;o từ tuần sau</strong></p>\r\n\r\n<p>Sau thời gian tạm dừng mua v&agrave;ng miếng một chữ v&agrave; m&oacute;p m&eacute;o, C&ocirc;ng ty SJC sẽ bắt đầu thu mua lại cả hai loại tr&ecirc;n từ tuần sau.</p>\r\n\r\n<article>\r\n<p>C&ocirc;ng ty V&agrave;ng bạc đ&aacute; qu&yacute; S&agrave;i G&ograve;n (SJC) vừa th&ocirc;ng b&aacute;o mua lại v&agrave;ng miếng một chữ v&agrave; m&oacute;p m&eacute;o từ ng&agrave;y 5/8. Quyết định n&agrave;y được đưa ra sau khi Ng&acirc;n h&agrave;ng Nh&agrave; nước cấp hạn mức gia c&ocirc;ng đối với số v&agrave;ng m&agrave; c&ocirc;ng ty đang tồn kho.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/userfiles/image/catetory/post-landscape-3.jpg\" style=\"width: 500px; height: 317px;\" /></p>\r\n</article>', '/userfiles/image/catetory/post-landscape-3.jpg', 'reject', 1, '[{\"value\":\"xa-hoi\"}]', 'Xã hội', 'xhvndcch', 7, '2024-07-21 06:22:46', '2024-08-02 22:29:09'),
(6, 'Tổng Bí thư Tô Lâm', 'tong-bi-thu-to-lam', 'Tổng Bí thư Tô Lâm: Cuộc chiến chống tham nhũng sẽ không ngừng nghỉ', '<p>T&acirc;n Tổng B&iacute; thư T&ocirc; L&acirc;m khẳng định c&ocirc;ng t&aacute;c x&acirc;y dựng, chỉnh đốn Đảng, ph&ograve;ng, chống tham nhũng, ti&ecirc;u cực sẽ được đẩy mạnh theo phương ch&acirc;m kh&ocirc;ng ngừng nghỉ, kh&ocirc;ng c&oacute; v&ugrave;ng cấm.</p>\r\n\r\n<article>\r\n<p>Tại hội nghị s&aacute;ng 3/8, Ban Chấp h&agrave;nh Trung ương Đảng kh&oacute;a 13 bầu Chủ tịch nước T&ocirc; L&acirc;m giữ cương vị Tổng B&iacute; thư nhiệm kỳ 2021-2026.</p>\r\n\r\n<p>Ngay sau khi được bầu, Tổng B&iacute; thư, Chủ tịch nước T&ocirc; L&acirc;m chủ tr&igrave; họp b&aacute;o với sự tham gia của h&agrave;ng trăm ph&oacute;ng vi&ecirc;n trong nước v&agrave; quốc tế. Trong trang phục comple sẫm m&agrave;u, c&agrave; vạt đỏ sậm, Tổng B&iacute; thư tươi cười bước v&agrave;o ph&ograve;ng họp v&agrave; n&oacute;i &quot;xin ch&agrave;o c&aacute;c bạn&quot;.</p>\r\n\r\n<p><em>- Cảm nghĩ của &ocirc;ng thế n&agrave;o khi được bầu l&agrave;m Tổng B&iacute; thư Ban Chấp h&agrave;nh Trung ương Đảng Cộng sản Việt Nam kh&oacute;a 13 với tỷ lệ tuyệt đối 100%?</em></p>\r\n\r\n<p>- Nhận những lời nhắn gửi, b&agrave;y tỏ t&igrave;nh cảm, ch&uacute;c mừng cũng l&agrave; giao nhiệm vụ, t&ocirc;i rất x&uacute;c động v&agrave; ch&acirc;n th&agrave;nh cảm ơn t&igrave;nh cảm của đồng ch&iacute;, đồng b&agrave;o v&agrave; bạn b&egrave; quốc tế. Được Trung ương t&iacute;n nhiệm bầu giữ chức vụ Tổng B&iacute; thư Ban Chấp h&agrave;nh Trung ương Đảng Cộng sản Việt Nam, t&ocirc;i nhận thức m&igrave;nh đang g&aacute;nh v&aacute;c trọng tr&aacute;ch to lớn trước Đảng, trước nh&acirc;n d&acirc;n, trước những th&agrave;nh tựu m&agrave; Đảng ta đạt được trong hơn 94 năm qua cũng như kỳ vọng v&agrave;o sự ph&aacute;t triển mạnh mẽ của đất nước trong thời gian tới.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/userfiles/image/catetory/d16452920b0aae54f71b-3239-1722682778.jpg\" style=\"width: 550px; height: 328px;\" /></p>\r\n\r\n<p>Ch&uacute;ng ta đ&atilde; đi được 2/3 chặng đường thực hiện Nghị quyết Đại hội lần thứ 13, trong bối cảnh t&igrave;nh h&igrave;nh thế giới, khu vực diễn biến nhanh, phức tạp, c&oacute; nhiều kh&oacute; khăn, th&aacute;ch thức. Nhiệm vụ c&ograve;n rất nhiều, rất bộn bề, cần sự nỗ lực cố gắng vượt bậc, đo&agrave;n kết thống nhất, chung sức đồng l&ograve;ng của to&agrave;n Đảng, to&agrave;n d&acirc;n v&agrave; to&agrave;n qu&acirc;n ta để thực hiện thắng lợi c&aacute;c chỉ ti&ecirc;u đ&atilde; đề ra.</p>\r\n\r\n<p>Kh&ocirc;ng c&oacute; g&igrave; bằng sự đo&agrave;n kết, thống nhất v&igrave; đ&oacute; l&agrave; sức mạnh của ch&uacute;ng ta. T&ocirc;i rất vui mừng sự đo&agrave;n kết, thống nhất từ trong Đảng, Bộ Ch&iacute;nh trị, Ban Chấp h&agrave;nh Trung ương đ&atilde; được lan tỏa v&agrave; tiếp tục ph&aacute;t huy. Đ&acirc;y l&agrave; sức mạnh gi&uacute;p đất nước vượt qua nhiều kh&oacute; khăn, thử th&aacute;ch, đạt thắng lợi, mục ti&ecirc;u của Đảng ta đ&atilde; đề ra. Chắc chắn l&agrave; tương lai ph&aacute;t triển đất nước ch&uacute;ng ta sẽ tươi s&aacute;ng theo con đường Đảng ta đ&atilde; vạch ra.</p>\r\n</article>', '/userfiles/image/catetory/post-landscape-5.jpg', 'pending', 1, '[{\"value\":\"gt\"}]', 'Tổng Bí thư', 'Tổng Bí thư Tô Lâm', 3, '2024-07-21 06:52:09', '2024-08-03 08:51:12'),
(7, 'Phe Dân chủ và Cộng hòa ', 'phe-dan-chu-va-cong-', 'Phe Dân chủ và Cộng hòa công kích nhau Phe Dân chủ và Cộng hòa công kích nhau', '<p>Theo Li&ecirc;n đo&agrave;n Billiards &amp; Snooker H&agrave; Nội, Hiệp hội Billiards Thể thao ch&acirc;u &Aacute; (ACBS) &quot;kh&ocirc;ng c&oacute; căn cứ ph&aacute;p l&yacute; v&agrave; bất c&ocirc;ng&quot; khi cấm cơ thủ Việt Nam thi đấu quốc tế s&aacute;u th&aacute;ng.</p>\r\n\r\n<article>\r\n<p>H&ocirc;m nay 31/7, Li&ecirc;n đo&agrave;n Billiards &amp; Snooker H&agrave; Nội gửi l&ecirc;n văn bản l&ecirc;n Sở Văn h&oacute;a Thể thao H&agrave; Nội. Li&ecirc;n đo&agrave;n H&agrave; Nội cho rằng&nbsp;<strong>&quot;kh&ocirc;ng c&oacute; căn cứ ph&aacute;p l&yacute; n&agrave;o theo luật ph&aacute;p Việt Nam hay c&aacute;c quy định hiến chương Olympic cho ph&eacute;p ACBS cấm c&aacute;c cơ thủ Việt Nam dự giải quốc tế thuộc OCA hay SEA Games&quot;</strong>.</p>\r\n\r\n<p>L&yacute; luận Li&ecirc;n đo&agrave;n H&agrave; Nội đưa ra l&agrave; quy định của ACBS chỉ cấm c&aacute;c li&ecirc;n đo&agrave;n th&agrave;nh vi&ecirc;n của họ tổ chức c&aacute;c giải kh&ocirc;ng được cấp ph&eacute;p. C&ograve;n những li&ecirc;n đo&agrave;n kh&ocirc;ng thuộc ACBS sẽ kh&ocirc;ng bị cấm. Li&ecirc;n đo&agrave;n Billiards &amp; Snooker Việt Nam (VBSF) l&agrave; th&agrave;nh vi&ecirc;n của ACBS, nhưng Li&ecirc;n đo&agrave;n Billiards &amp; Snooker H&agrave; Nội lại kh&ocirc;ng phải th&agrave;nh vi&ecirc;n của ACBS. VBSF kh&ocirc;ng tổ chức H&agrave; Nội Open Pool Championship, hay PBA H&agrave; Nội Tour, m&agrave; do Li&ecirc;n đo&agrave;n H&agrave; Nội tiến h&agrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"/userfiles/image/catetory/post-landscape-1.jpg\" style=\"width: 90%; height: 90%;\" /></p>\r\n\r\n<p>H&agrave; Nội Open Pool Championship l&agrave; giải 9 bi do c&ocirc;ng ty Matchroom của Anh phối hợp tổ chức th&aacute;ng 10/2023, được Li&ecirc;n đo&agrave;n Billiards &amp; Snooker H&agrave; Nội đề xuất để Sở Văn h&oacute;a Thể thao H&agrave; Nội cấp ph&eacute;p, nhưng kh&ocirc;ng được ACBS c&ocirc;ng nhận. ACBS đ&atilde; cảnh b&aacute;o VBSF, cho rằng &quot;cơ sở H&agrave; Nội của VBSF&quot; đ&atilde; tổ chức giải n&agrave;y, tr&aacute;i với quy định. Tuy nhi&ecirc;n, Li&ecirc;n đo&agrave;n Billiards &amp; Snooker H&agrave; Nội khẳng định họ kh&ocirc;ng phải th&agrave;nh vi&ecirc;n của VBSF.</p>\r\n\r\n<p>Một căn cứ kh&aacute;c của Li&ecirc;n đo&agrave;n H&agrave; Nội l&agrave; &quot;c&aacute;c quyết định xử phạt tổ chức thể thao theo IOC, OCA hay điều lệ SEA Games, phải được thực hiện tr&ecirc;n từng đội, từng c&aacute; nh&acirc;n theo căn cứ cụ thể&quot;. &quot;Kh&ocirc;ng thể xử phạt tất cả VĐV nếu kh&ocirc;ng c&oacute; căn cứ cụ thể về việc họ vi phạm&quot;, văn bản của Li&ecirc;n đo&agrave;n H&agrave; Nội c&oacute; đoạn.</p>\r\n\r\n<p>PBA Tour l&agrave; giải carom 3 băng đ&atilde; diễn ra tại H&agrave;n Quốc, nhiều chặng trong năm từ 2019, kh&ocirc;ng được Li&ecirc;n đo&agrave;n Billiards Thế giới (UMB) c&ocirc;ng nhận. Tuy nhi&ecirc;n, ACBS kh&ocirc;ng c&oacute; văn bản th&ocirc;ng b&aacute;o hay lệnh trừng phạt n&agrave;o &aacute;p dụng l&ecirc;n Li&ecirc;n đo&agrave;n Billiards H&agrave;n Quốc (KBF), d&ugrave; họ cũng l&agrave; th&agrave;nh vi&ecirc;n của ACBS giống như VBSF. Th&aacute;ng 8/2024, PBA Tour lần đầu diễn ra ngo&agrave;i H&agrave;n Quốc, ở H&agrave; Nội, được Sở Văn h&oacute;a Thể thao H&agrave; Nội cấp ph&eacute;p.</p>\r\n\r\n<p>C&aacute;c giải thuộc World Nineball Tour (WNT) cũng đ&atilde; diễn ra tr&ecirc;n nhiều quốc gia năm 2024, như Anh, Đức, Mỹ, Trung Quốc hay Philippines, nhưng li&ecirc;n đo&agrave;n billiards những nước n&agrave;y kh&ocirc;ng bị trừng phạt. Trong đ&oacute;, Trung Quốc v&agrave; Philippines cũng thuộc ACBS.</p>\r\n\r\n<p>&quot;Điều n&agrave;y cho thấy h&agrave;nh vi của ACBS can thiệp v&agrave;o việc tổ chức PBA H&agrave; Nội Tour m&agrave; họ kh&ocirc;ng c&oacute; quyền hạn&quot;, Li&ecirc;n đo&agrave;n H&agrave; Nội viết th&ecirc;m. &quot;ACBS thậm ch&iacute; c&ograve;n cấm c&aacute;c cơ thủ Việt Nam dự giải quốc tế, l&agrave; kh&ocirc;ng c&oacute; căn cứ ph&aacute;p l&yacute;, kh&ocirc;ng c&ocirc;ng bằng v&agrave; c&oacute; chủ đ&iacute;ch&quot;.</p>\r\n\r\n<p><img alt=\"\" src=\"/userfiles/image/catetory/post-landscape-2.jpg\" style=\"width: 90%; height: 90%;\" /></p>\r\n</article>', '/userfiles/image/catetory/post-landscape-6.jpg', 'public', 1, '[{\"value\":\"xh\"}]', 'Xã hội', 'ềwfesfdsf', 3, '2024-07-28 20:46:33', '2024-08-03 00:01:08'),
(8, 'Conan - Thám tử lừng danh', 'conan-tham-tu-lung-danh', 'hai chính đảng Mỹ những ngày qua chủ yếu', '<p>abcdefghijkl</p>', '/userfiles/image/catetory/post-landscape-8.jpg', 'public', 1, '[{\"value\":\"health\"}]', 'sức khỏe', 'conanhealth', 3, '2024-07-28 20:48:18', '2024-08-03 00:17:53'),
(9, 'Hà Giang', 'ha-giang', 'Hà Giang Tây Bắc', '<p>qqqwertyuiopasdfghjkl</p>', '/userfiles/image/catetory/post-landscape-1.jpg', 'public', 1, '[{\"value\":\"DLVN\"}]', 'Du lịch Việt Nam', 'Du lịch Việt Nam1', 3, '2024-07-30 05:51:50', '2024-08-03 07:56:42'),
(11, 'Sương mù bao phủ nhiều tỉnh miền Tây', 'suong-mu-bao-phu-nhieu-tinh-mien-tay', 'SJC mua lại vàng miếng một chữ', '<h1>Sương m&ugrave; bao phủ nhiều tỉnh miền T&acirc;y</h1>\r\n\r\n<p>Thời tiết nắng n&oacute;ng ban ng&agrave;y, lạnh về đ&ecirc;m khiến nhiều tuyến đường tại Tiền Giang, Bến Tre bị sương m&ugrave; bao phủ d&agrave;y đặc s&aacute;ng sớm 5/8.</p>\r\n\r\n<article>\r\n<p>5h, nhiều người l&aacute;i &ocirc;t&ocirc; qua cầu Rạch Miễu phải bật đ&egrave;n sương m&ugrave; v&igrave; chỉ thấy đường ph&iacute;a trước ở tầm nh&igrave;n kh&ocirc;ng qu&aacute; 10 m. C&aacute;c tuyến đường ch&iacute;nh như quốc lộ 1, quốc lộ 60 cũng bị sương m&ugrave; bao phủ g&acirc;y kh&oacute; khăn cho c&aacute;c phương tiện. &Ocirc;t&ocirc;, xe m&aacute;y đều phải giảm tốc độ để đảm bảo an to&agrave;n.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/userfiles/image/catetory/z5700031003115-d8bdae20b257f3a-3016-1194-1722828923.jpg\" style=\"width: 600px; height: 375px;\" /></p>\r\n</article>\r\n\r\n<article>\r\n<p>Theo ghi nhận, sương m&ugrave; bao phủ nhiều địa b&agrave;n ở c&aacute;c tỉnh Tiền Giang, Bến Tre... Khu vực c&oacute; nhiều vườn c&acirc;y sương c&agrave;ng d&agrave;y đặc hơn, đến hơn 8h s&aacute;ng mới tan hẳn. Nhiều người d&acirc;n th&iacute;ch th&uacute; chụp ảnh, quay phim hiện tượng sương m&ugrave; d&agrave;y đặc đăng tr&ecirc;n mạng x&atilde; hội, so s&aacute;nh như &quot;khung cảnh Đ&agrave; Lạt&quot;.</p>\r\n\r\n<p>&Ocirc;ng V&otilde; Văn Th&ocirc;ng, Gi&aacute;m đốc Trung t&acirc;m Kh&iacute; tượng Thủy văn tỉnh Tiền Giang cho biết hiện tượng sương m&ugrave; thường c&oacute; hai dạng. Sương m&ugrave; b&igrave;nh lưu thường xuất hiện v&agrave;o th&aacute;ng 11 v&agrave; 12 do khối kh&iacute; lạnh tr&agrave;n về. C&ograve;n sương m&ugrave; bức xạ l&agrave; do ch&ecirc;nh lệch nhiệt độ ng&agrave;y v&agrave; đ&ecirc;m g&acirc;y n&ecirc;n.</p>\r\n</article>', '/userfiles/image/catetory/post-landscape-7.jpg', 'pending', 1, '[{\"value\":\"thoitiet\"}]', 'Sương mù bao phủ nhiều tỉnh miền Tây', 'Thời tiết miền Tây', 7, '2024-08-02 11:11:03', '2024-08-04 20:47:25'),
(14, 'Israel có thể xem xét phương án', 'israel-co-the-xem-xet-phuong-an', 'Israel có thể sẽ cân nhắc phương án đánh phủ đầu Iran', '<p>Israel có th&ecirc;̉ sẽ c&acirc;n nhắc phương &aacute;n đánh phủ đ&acirc;̀u Iran n&ecirc;́u phát hi&ecirc;̣n bằng chứng chắc chắn rằng Tehran đang chu&acirc;̉n bị t&acirc;́n c&ocirc;ng Tel Aviv.</p>\r\n\r\n<article>\r\n<p>Thủ tướng Israel Benjamin Netanyahu tối 4/8 triệu tập c&aacute;c l&atilde;nh đạo an ninh dự cuộc họp khẩn, gồm Bộ trưởng Quốc ph&ograve;ng Yoav Gallant, Tham mưu trưởng Lực lượng Ph&ograve;ng vệ Israel (IDF) Herzi Halevi, gi&aacute;m đốc Viện T&igrave;nh b&aacute;o v&agrave; Chiến dịch Đặc biệt Israel (Mossad) David Barnea c&ugrave;ng gi&aacute;m đốc Cơ quan An ninh Israel (Shin Bet) Ronen Bar.</p>\r\n\r\n<p>Cuộc họp diễn ra trong bối cảnh c&oacute; lo ngại rằng Iran c&oacute; thể tấn c&ocirc;ng Israel trong thời gian tới, sau vụ chỉ huy cấp cao Hezbollah Fuad Shuk v&agrave; thủ lĩnh Hamas Ismail Haniyeh bị &aacute;m s&aacute;t. Iran c&aacute;o buộc Israel đứng sau c&aacute;c vụ &aacute;m s&aacute;t n&agrave;y v&agrave; tuy&ecirc;n bố sẽ trả th&ugrave;. Tel Aviv đến nay mới nhận tr&aacute;ch nhiệm tiến h&agrave;nh vụ tập k&iacute;ch hạ s&aacute;t &ocirc;ng Shuk.</p>\r\n\r\n<p>Truyền th&ocirc;ng Israel cho biết trong cuộc họp, c&aacute;c quan chức an ninh nước n&agrave;y đều chưa chắc chắn về phản ứng từ Iran v&agrave; đang thảo luận nhiều phương &aacute;n để t&igrave;m c&aacute;ch đối ph&oacute; tốt nhất hoặc ngăn chặn cuộc tấn c&ocirc;ng c&oacute; thể xảy ra.</p>\r\n\r\n<p>Phương &aacute;n tấn c&ocirc;ng phủ đầu Iran để răn đe cũng đ&atilde; được c&acirc;n nhắc, d&ugrave; c&aacute;c quan chức nhấn mạnh chỉ h&agrave;nh động như vậy nếu họ nhận được th&ocirc;ng tin ch&iacute;nh x&aacute;c rằng chắc chắn Iran sẽ tấn c&ocirc;ng Israel, theo&nbsp;<em>Ynet</em>, tờ b&aacute;o h&agrave;ng đầu Israel.</p>\r\n\r\n<p>Israel từng nhiều lần c&ocirc;ng khai tuy&ecirc;n bố sẽ tung đ&ograve;n đ&aacute;nh phủ đầu c&aacute;c mục ti&ecirc;u quan trọng ở Iran nếu ph&aacute;t hiện nước n&agrave;y đe dọa tới lợi &iacute;ch v&agrave; an ninh của họ. Tuy nhi&ecirc;n, Tel Aviv lu&ocirc;n nhấn mạnh đ&acirc;y l&agrave; &quot;kế s&aacute;ch cuối c&ugrave;ng&quot; trong căng thẳng với Tehran.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/userfiles/image/catetory/WhatsApp-Image-2024-07-20-at-1-3902-2952-1722824014.jpg\" style=\"width: 600px; height: 360px;\" /></p>\r\n\r\n<p>Tel Aviv khẳng định họ cũng cần c&oacute; nguồn tin t&igrave;nh b&aacute;o của ri&ecirc;ng m&igrave;nh về vấn đề n&agrave;y, để đ&aacute;nh gi&aacute; liệu c&oacute; khớp với th&ocirc;ng tin t&igrave;nh b&aacute;o của Mỹ hay kh&ocirc;ng. Ngay cả trong trường hợp hai nguồn tin t&igrave;nh b&aacute;o đều chắc chắn Iran sẽ tấn c&ocirc;ng, ph&iacute;a Israel vẫn c&oacute; thể t&igrave;m c&aacute;ch tr&aacute;nh d&ugrave;ng tới biện ph&aacute;p đ&aacute;nh phủ đầu.</p>\r\n\r\n<p>Giống Israel, Mỹ cũng được cho l&agrave; chưa chắc chắn về khả năng Iran sẽ tấn c&ocirc;ng, v&igrave; họ tin rằng Tehran chưa c&oacute; quyết định cuối c&ugrave;ng v&agrave; cũng chưa ho&agrave;n tất kế hoạch phối hợp h&agrave;nh động với c&aacute;c lực lượng d&acirc;n qu&acirc;n được Tehran hậu thuẫn hở Trung Đ&ocirc;ng.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/userfiles/image/catetory/20240115-iraq-1722502760-17225-8699-7186-1722503184.jpg\" style=\"width: 600px; height: 360px;\" /></p>\r\n</article>', '/userfiles/image/catetory/WhatsApp-Image-2024-07-20-at-1-3902-2952-1722824014.jpg', 'pending', 1, '[{\"value\":\"World\"}]', 'Israel có thể xem xét phương án đánh phủ đầu Iran', 'Israel có thể sẽ cân nhắc phương án đánh phủ đầu Iran nếu phát hiện bằng chứng chắc chắn rằng Tehran đang chuẩn bị tấn công Tel Aviv.', 7, '2024-08-04 21:24:52', '2024-08-04 21:27:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-07-28 20:16:38', '2024-07-28 20:16:38'),
(2, 'Viewer', 'web', '2024-07-31 00:36:17', '2024-08-01 07:57:18'),
(9, 'Ban biên tập', 'web', '2024-08-02 20:05:15', '2024-08-02 20:05:15'),
(10, 'Tác giả', 'web', '2024-08-02 20:48:44', '2024-08-02 20:48:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(1, 2),
(9, 2),
(13, 2),
(1, 9),
(2, 9),
(3, 9),
(4, 9),
(1, 10),
(2, 10),
(3, 10),
(4, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3R1IvZEsy1vToXh2YMN3SncYVfbGHW7UrMembh4b', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidnQ5bjZHNW9BQ1pHNDc3NHZDa1VhOHl4NXk3NlpzZTFESWhSWnBaTCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1NzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Rpbi9pc3JhZWwtY28tdGhlLXhlbS14ZXQtcGh1b25nLWFuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Nzt9', 1722928362),
('DZXYdOiRtU3l2q5w2q8BcHtGmasR8tmHYfMYI1mo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV3cxdFFSTXlzaU56YUU4Y3dVdmM2alF6bVpqdlpMQjcyUGtLNlk4MyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1NzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Rpbi9pc3JhZWwtY28tdGhlLXhlbS14ZXQtcGh1b25nLWFuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722925414);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'User', 'phamthuuyen730@gmail.com', '$2y$12$wOQ.BmVAEkqdPIhzpTUTwudL.LPmMLhso3PSovqfSTxCdCHmQkTZu', '1', '1', '2024-07-16 20:37:59', 'CsSt0xzF6kfWXkqpyol7Rs3OiaOm2fPuqLJNVWQgIDCX7SdHPFLTRjxOvdmn', '2024-07-16 20:37:59', '2024-08-03 08:22:19'),
(4, 'Uyn', 'uyn@email.com', '$2y$12$bnRP/Rz81vehXXUXRSrfTOWQFSFlZ.eYgmupD1LPJBkQ/Gwrgbunq', '2', '1', NULL, NULL, '2024-07-31 00:38:17', '2024-07-31 00:38:17'),
(5, 'Phạm Gia Ân', 'anpg@gmail.com', '$2y$12$Pn5NwiRl7SejL6RPczkh/ex5lU9pWwYC8Dh8xgDPrgHAvvYm1YSYS', '1', '1', NULL, NULL, '2024-07-31 01:57:58', '2024-07-31 01:57:58'),
(7, 'Ân', 'phamgiaan545@gmail.com', '$2y$12$OUHA9X8Wul3labVP2YYIi.r1mAE9pYp.H36NQnT7AVE4Bw5zQ8joO', '2', '1', '2024-08-01 07:40:56', 'hUSNkU0iO0hfmcrXnAo7mHi5SoyZwtDfCXV1hamZZacFjROHim6jQR7OoOKo', '2024-08-01 07:40:56', '2024-08-01 07:40:56'),
(12, 'Gia Ân Phạm', 'uyenpttpd07722@fpt.edu.vn', '$2y$12$/R10.S3PJzuGq.il.zslee7RVZWUW1fCls5xyjyKKRoKx7S52Khsi', '1', '1', NULL, NULL, '2024-08-03 09:40:25', '2024-08-03 09:40:25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_post`
--
ALTER TABLE `category_post`
  ADD KEY `category_post_category_id_foreign` (`category_id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

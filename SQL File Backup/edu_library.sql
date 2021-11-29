-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 07:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `title`, `file`, `notes`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Laboris molestiae ea', 'EDU_LIBRARY_STORE_2021_a7XJnkKWQ5.pdf', NULL, NULL, '2021-08-11 00:51:39', '2021-08-11 00:51:39'),
(4, 'Nulla laborum omnis', 'EDU_LIBRARY_STORE_2021_wHkOQ3UE3G.pdf', NULL, NULL, '2021-08-11 00:52:58', '2021-08-11 00:52:58'),
(5, 'Ut culpa facere numq', 'EDU_LIBRARY_STORE_2021_et79xPvnKY.png', 'Eum culpa magnam fug', NULL, '2021-08-11 01:24:57', '2021-08-11 01:24:57'),
(6, 'Aliquam modi dolore', 'EDU_LIBRARY_STORE_2021_2SlY7yapbQ.docx', 'Cum dolores fugiat v', NULL, '2021-08-11 01:29:49', '2021-08-11 01:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publisher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `writer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `origin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stock` int(21) DEFAULT 0,
  `bn_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `tag_id`, `publisher_id`, `writer_id`, `origin_id`, `department_id`, `stock`, `bn_title`, `title`, `image`, `isbn`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, 1, 1, 1, 6, 99, NULL, 'Inventore beatae qui', NULL, 'Sapiente architecto', 'Aliquip anim ipsum i', 1, '2021-06-28 10:21:04', '2021-08-30 05:10:29'),
(3, 1, NULL, 1, 1, 1, 7, 0, NULL, 'Culpa culpa aut bea', NULL, 'Et officiis rerum do', 'Quos mollitia adipis   52', 1, '2021-08-10 03:47:12', '2021-08-10 03:47:12'),
(4, 1, NULL, 1, 1, 1, 4, 0, NULL, 'Reiciendis labore se', NULL, 'Nostrum aut dolor as', 'Test notification', 1, '2021-08-10 03:57:04', '2021-08-10 03:57:04'),
(5, 1, NULL, 1, 1, 1, 4, 0, NULL, 'Consequatur Et volu', NULL, 'Eligendi eos magna', 'Nisi duis qui itaquettt', 1, '2021-08-10 03:59:08', '2021-08-10 03:59:08'),
(6, 1, NULL, 1, 1, 1, 7, 0, NULL, 'Babe', NULL, 'Rerum id excepteur', 'Veritatis sed id fug', 1, '2021-08-10 04:03:39', '2021-08-10 04:03:39'),
(7, 1, NULL, 1, 1, 1, 2, 0, NULL, 'Qui incidunt qui qu', NULL, 'Consequatur molliti', 'Quae officia culpa', 1, '2021-08-10 04:06:22', '2021-08-10 04:06:22'),
(8, 1, NULL, 1, 1, 1, 2, 0, NULL, 'Qui incidunt qui qu', NULL, 'Consequatur molliti', 'Quae officia culpa', 1, '2021-08-10 04:07:52', '2021-08-10 04:07:52'),
(9, 1, NULL, 1, 1, 1, 6, 0, NULL, 'Ducimus minim asper', NULL, 'Incidunt reprehende', 'Nisi excepteur facil', 1, '2021-08-10 04:07:58', '2021-08-10 04:07:58'),
(10, 1, NULL, 1, 1, 1, 5, 0, NULL, 'Voluptatum eos quas', NULL, 'Quis impedit qui cu', 'Rem aut quos dolore', 1, '2021-08-10 04:08:17', '2021-08-10 04:08:17'),
(11, 1, NULL, 1, 1, 1, 2, 0, NULL, 'Ipsa est dolore nul', NULL, 'Laborum Quia quasi', 'Nobis eiusmod ullamc', 1, '2021-08-10 04:08:28', '2021-08-10 04:08:28'),
(12, 1, NULL, 1, 1, 1, 2, 0, NULL, 'Commodo culpa atque', NULL, 'Laudantium aut in a', 'Voluptatum aut anim', 1, '2021-08-10 04:15:10', '2021-08-10 04:15:10'),
(13, 1, NULL, 1, 1, 1, 2, 0, NULL, 'Amet sed in occaeca', 'EDU_LIBRARY_STORE_63c6300c3e37e255.jpg', 'In magni et commodo', 'Reprehenderit in en', 1, '2021-08-10 04:26:02', '2021-08-19 01:21:19'),
(14, 1, NULL, 1, 1, 1, 3, 0, NULL, 'Sit lorem minus nobi', NULL, 'Assumenda vel quibus', 'Deserunt doloremque', 1, '2021-08-10 05:16:15', '2021-08-10 05:16:15'),
(15, 1, NULL, 1, 1, 1, 6, 0, NULL, 'Voluptatem Minima v', NULL, 'Sunt ea illo commodi', 'Id dolores nostrud e', 1, '2021-08-10 05:17:37', '2021-08-10 05:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `book_issues`
--

CREATE TABLE `book_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `submit_date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=Not returned,1= Returned,2=Returned with Fine',
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Return note / fine note',
  `submit_note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Return note / fine note',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_issues`
--

INSERT INTO `book_issues` (`id`, `book_id`, `user_id`, `student_id`, `start_date`, `end_date`, `submit_date`, `status`, `note`, `submit_note`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2021-06-24', '2021-07-01', '2021-06-30', 1, NULL, NULL, '2021-06-28 14:04:16', '2021-06-28 14:44:19'),
(2, 2, 1, 1, '2021-06-29', '2021-06-30', '2021-07-01', 1, NULL, 'adsf', '2021-06-29 01:02:41', '2021-06-29 01:02:58'),
(3, 2, 1, 1, '2021-06-28', '2021-07-01', NULL, 0, NULL, NULL, '2021-06-29 01:26:10', '2021-06-29 01:26:10'),
(4, 2, 1, 1, '2021-06-24', '2021-06-26', NULL, 0, NULL, NULL, '2021-06-29 01:49:41', '2021-06-29 01:49:41'),
(10, 2, 5, 1, '2021-08-31', '2021-09-07', NULL, 1, NULL, NULL, '2021-08-30 05:10:29', '2021-08-30 05:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `book_requests`
--

CREATE TABLE `book_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Student User id',
  `book_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Books table primary id',
  `amount` int(11) NOT NULL DEFAULT 1 COMMENT 'Book Quantity',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=Not Approved,1=Approved,2=Declained',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_requests`
--

INSERT INTO `book_requests` (`id`, `user_id`, `book_id`, `amount`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 1, 1, NULL, '2021-08-30 03:59:57', '2021-08-30 05:10:29'),
(2, 5, 2, 1, 2, NULL, '2021-08-30 05:11:02', '2021-08-30 05:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `note`, `commentable_type`, `commentable_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Testing Note', 'Book', 2, 5, NULL, NULL),
(2, 'Testing 2 note', 'Book', 3, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bn_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `bn_name`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, NULL, 'CSE', NULL, '2021-06-26 11:05:34', '2021-06-26 11:05:34'),
(2, NULL, 'EEE', NULL, '2021-06-26 11:05:34', '2021-06-26 11:05:34'),
(3, NULL, 'EET', NULL, '2021-06-26 11:05:34', '2021-06-26 11:05:34'),
(4, NULL, 'English', NULL, '2021-06-26 11:05:34', '2021-06-26 11:05:34'),
(5, NULL, 'BBA', NULL, '2021-06-26 11:05:34', '2021-06-26 11:05:34'),
(6, NULL, 'LLB', NULL, '2021-06-26 11:05:34', '2021-06-26 11:05:34'),
(7, NULL, 'Masters', NULL, '2021-06-26 11:05:34', '2021-06-26 11:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reservation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `description`, `reservation`, `deleted_at`, `created_at`, `updated_at`) VALUES
(21, 'TUT TUT', '2021-08-18 00:00:00', '2021-08-18 06:00:00', NULL, NULL, NULL, '2021-08-16 06:05:40', '2021-08-16 06:12:30'),
(22, 'as', '2021-08-16 05:30:00', '2021-08-16 09:00:00', NULL, NULL, NULL, '2021-08-16 06:12:40', '2021-08-16 06:12:40'),
(23, 'TUT TUT', '2021-08-16 11:00:00', '2021-08-16 11:15:00', NULL, NULL, NULL, '2021-08-16 06:13:39', '2021-08-16 06:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fines`
--

CREATE TABLE `fines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_issue_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `student_id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 'Delowar Hossain update', '01835958973', '2021-06-27 12:16:41', '2021-06-27 12:28:56'),
(2, 2, 'Harrison Santana', '+1 (357) 606-3689', '2021-08-10 16:18:39', '2021-08-10 16:18:39'),
(3, 3, 'Colorado Hunter', '+1 (608) 105-2677', '2021-08-10 16:18:48', '2021-08-10 16:18:48'),
(4, 4, 'Wing Tate', '+1 (151) 881-6441', '2021-08-19 07:28:53', '2021-08-19 07:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(55, '2014_10_12_000000_create_users_table', 1),
(56, '2014_10_12_100000_create_password_resets_table', 1),
(57, '2019_08_19_000000_create_failed_jobs_table', 1),
(58, '2021_06_24_200751_create_departments_table', 1),
(59, '2021_06_24_200805_create_students_table', 1),
(60, '2021_06_24_200832_create_publishers_table', 1),
(61, '2021_06_24_200842_create_writers_table', 1),
(62, '2021_06_24_200854_create_origins_table', 1),
(63, '2021_06_24_200904_create_tags_table', 1),
(64, '2021_06_24_200913_create_books_table', 1),
(65, '2021_06_24_200925_create_stocks_table', 1),
(66, '2021_06_24_200942_create_book_issues_table', 1),
(67, '2021_06_24_201022_create_fines_table', 1),
(68, '2021_06_24_202928_foreign_department_id_and_user_id_at_studetns_table', 1),
(69, '2021_06_24_203110_foreign_department_id_and_user_id_tag_id_publisher_id_writer_id_origin_id_department_id_at_books_table', 1),
(70, '2021_06_24_203148_foreign_book_id_and_user_id_at_stocks_table', 1),
(71, '2021_06_24_203221_foreign_book_id_and_user_id_student_id_at_book_issues_table', 1),
(72, '2021_06_24_203310_foreign_book_issue_id_user_id_student_id_book_id_at_fines', 1),
(73, '2021_06_26_170810_create_guardians_table', 2),
(74, '2021_06_26_170946_foreign_student_id_at_table_guardians', 2),
(75, '2021_06_28_172036_create_suppliers_table', 3),
(76, '2021_07_10_232701_create_reviews_table', 4),
(77, '2021_08_05_153240_create_quick_bookings_table', 5),
(78, '2021_08_10_090104_create_notifications_table', 5),
(79, '2021_08_10_224428_create_archives_table', 6),
(80, '2021_08_16_050300_create_events_table', 7),
(81, '2021_08_18_123638_create_comments_table', 8),
(82, '2021_08_19_065546_add_column_image_at_table_books', 9),
(83, '2021_08_19_065617_create_sliders_table', 9),
(85, '2021_08_30_093929_create_book_requests_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('029db1f3-cc5d-4867-a49b-472da8977b27', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 3, '{\"title\":\"Amet sed in occaeca\",\"isbn\":\"In magni et commodo\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"2\",\"origin_id\":\"1\",\"description\":\"Reprehenderit in en\",\"user_id\":1,\"updated_at\":\"2021-08-10T10:26:02.000000Z\",\"created_at\":\"2021-08-10T10:26:02.000000Z\",\"id\":13}', NULL, '2021-08-10 04:26:02', '2021-08-10 04:26:02'),
('142db3f6-b82f-4b11-a846-72ec2ab6080a', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 3, '{\"title\":\"Sit lorem minus nobi\",\"isbn\":\"Assumenda vel quibus\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"3\",\"origin_id\":\"1\",\"description\":\"Deserunt doloremque\",\"user_id\":1,\"updated_at\":\"2021-08-10T11:16:15.000000Z\",\"created_at\":\"2021-08-10T11:16:15.000000Z\",\"id\":14}', NULL, '2021-08-10 05:16:15', '2021-08-10 05:16:15'),
('1cf5c3d0-9e35-4ce2-8658-7db395e4723e', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 5, '{\"title\":\"Amet sed in occaeca\",\"isbn\":\"In magni et commodo\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"2\",\"origin_id\":\"1\",\"description\":\"Reprehenderit in en\",\"user_id\":1,\"updated_at\":\"2021-08-10T10:26:02.000000Z\",\"created_at\":\"2021-08-10T10:26:02.000000Z\",\"id\":13}', '2021-08-10 05:13:32', '2021-08-10 04:26:02', '2021-08-10 05:13:32'),
('2440e40d-25ee-4de1-9a8b-bdc33a050cc5', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 1, '{\"title\":\"Amet sed in occaeca\",\"isbn\":\"In magni et commodo\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"2\",\"origin_id\":\"1\",\"description\":\"Reprehenderit in en\",\"user_id\":1,\"updated_at\":\"2021-08-10T10:26:02.000000Z\",\"created_at\":\"2021-08-10T10:26:02.000000Z\",\"id\":13}', NULL, '2021-08-10 04:26:02', '2021-08-10 04:26:02'),
('34ffdea9-e3c4-4822-8ad9-05c9eaf140fc', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 4, '{\"title\":\"Sit lorem minus nobi\",\"isbn\":\"Assumenda vel quibus\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"3\",\"origin_id\":\"1\",\"description\":\"Deserunt doloremque\",\"user_id\":1,\"updated_at\":\"2021-08-10T11:16:15.000000Z\",\"created_at\":\"2021-08-10T11:16:15.000000Z\",\"id\":14}', NULL, '2021-08-10 05:16:15', '2021-08-10 05:16:15'),
('354599f6-306e-49e3-8ec9-0f62986597a0', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 7, '{\"title\":\"Porro est accusamus\",\"isbn\":\"Beatae mollitia alia\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"4\",\"origin_id\":\"1\",\"description\":\"Corporis do impedit\",\"image\":\"EDU_LIBRARY_STORE_5a6b639e77c56081.jpg\",\"user_id\":1,\"updated_at\":\"2021-08-19T07:09:08.000000Z\",\"created_at\":\"2021-08-19T07:09:08.000000Z\",\"id\":16}', NULL, '2021-08-19 01:09:08', '2021-08-19 01:09:08'),
('4648e9f6-4338-4826-99a9-dd801c4dcb20', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 1, '{\"title\":\"Sit lorem minus nobi\",\"isbn\":\"Assumenda vel quibus\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"3\",\"origin_id\":\"1\",\"description\":\"Deserunt doloremque\",\"user_id\":1,\"updated_at\":\"2021-08-10T11:16:15.000000Z\",\"created_at\":\"2021-08-10T11:16:15.000000Z\",\"id\":14}', NULL, '2021-08-10 05:16:15', '2021-08-10 05:16:15'),
('4b4edd0f-099b-4d00-ab9c-5fa5cf9fd86b', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 6, '{\"title\":\"Porro est accusamus\",\"isbn\":\"Beatae mollitia alia\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"4\",\"origin_id\":\"1\",\"description\":\"Corporis do impedit\",\"image\":\"EDU_LIBRARY_STORE_5a6b639e77c56081.jpg\",\"user_id\":1,\"updated_at\":\"2021-08-19T07:09:08.000000Z\",\"created_at\":\"2021-08-19T07:09:08.000000Z\",\"id\":16}', NULL, '2021-08-19 01:09:08', '2021-08-19 01:09:08'),
('6048d5e3-8e6f-45aa-ae8c-0458fb8d0b4b', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 3, '{\"id\":12,\"title\":\"Commodo culpa atque\",\"description\":\"Voluptatum aut anim\"}', NULL, '2021-08-10 04:15:10', '2021-08-10 04:15:10'),
('6321f488-73c8-44de-a434-891e833d432b', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 5, '{\"title\":\"Sit lorem minus nobi\",\"isbn\":\"Assumenda vel quibus\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"3\",\"origin_id\":\"1\",\"description\":\"Deserunt doloremque\",\"user_id\":1,\"updated_at\":\"2021-08-10T11:16:15.000000Z\",\"created_at\":\"2021-08-10T11:16:15.000000Z\",\"id\":14}', NULL, '2021-08-10 05:16:15', '2021-08-10 05:16:15'),
('6655a03b-ed45-4950-91a8-acdc0b2a1cad', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 5, '{\"title\":\"Voluptatem Minima v\",\"isbn\":\"Sunt ea illo commodi\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"6\",\"origin_id\":\"1\",\"description\":\"Id dolores nostrud e\",\"user_id\":1,\"updated_at\":\"2021-08-10T11:17:37.000000Z\",\"created_at\":\"2021-08-10T11:17:37.000000Z\",\"id\":15}', '2021-08-10 08:34:40', '2021-08-10 05:17:37', '2021-08-10 08:34:40'),
('6a41df57-bfe9-4ae6-8065-40ce487901d9', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 1, '{\"id\":12,\"title\":\"Commodo culpa atque\",\"description\":\"Voluptatum aut anim\"}', NULL, '2021-08-10 04:15:10', '2021-08-10 04:15:10'),
('7477538d-7bb4-4734-8cc3-b20f435749c4', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 2, '{\"id\":12,\"title\":\"Commodo culpa atque\",\"description\":\"Voluptatum aut anim\"}', NULL, '2021-08-10 04:15:10', '2021-08-10 04:15:10'),
('7786b0ec-9e64-416c-93ae-181e0c51cf6f', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 5, '{\"title\":\"Porro est accusamus\",\"isbn\":\"Beatae mollitia alia\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"4\",\"origin_id\":\"1\",\"description\":\"Corporis do impedit\",\"image\":\"EDU_LIBRARY_STORE_5a6b639e77c56081.jpg\",\"user_id\":1,\"updated_at\":\"2021-08-19T07:09:08.000000Z\",\"created_at\":\"2021-08-19T07:09:08.000000Z\",\"id\":16}', NULL, '2021-08-19 01:09:08', '2021-08-19 01:09:08'),
('98b114d0-ece1-4f5a-abdf-69e16755b868', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 2, '{\"title\":\"Amet sed in occaeca\",\"isbn\":\"In magni et commodo\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"2\",\"origin_id\":\"1\",\"description\":\"Reprehenderit in en\",\"user_id\":1,\"updated_at\":\"2021-08-10T10:26:02.000000Z\",\"created_at\":\"2021-08-10T10:26:02.000000Z\",\"id\":13}', NULL, '2021-08-10 04:26:02', '2021-08-10 04:26:02'),
('9dca6cb4-56ff-4b20-8768-67842a183f89', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 4, '{\"id\":12,\"title\":\"Commodo culpa atque\",\"description\":\"Voluptatum aut anim\"}', NULL, '2021-08-10 04:15:10', '2021-08-10 04:15:10'),
('ae57ad37-8b09-491c-8528-eff55232abf5', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 4, '{\"title\":\"Amet sed in occaeca\",\"isbn\":\"In magni et commodo\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"2\",\"origin_id\":\"1\",\"description\":\"Reprehenderit in en\",\"user_id\":1,\"updated_at\":\"2021-08-10T10:26:02.000000Z\",\"created_at\":\"2021-08-10T10:26:02.000000Z\",\"id\":13}', NULL, '2021-08-10 04:26:02', '2021-08-10 04:26:02'),
('d2a2228f-c5c1-4761-a791-c7346f18ba0c', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 5, '{\"id\":12,\"title\":\"Commodo culpa atque\",\"description\":\"Voluptatum aut anim\"}', '2021-08-10 05:14:32', '2021-08-10 04:15:10', '2021-08-10 05:14:32'),
('e9bc06a7-8708-4e8c-9589-d1ae101fe2c2', 'App\\Notifications\\NewBookAddedNotification', 'App\\User', 2, '{\"title\":\"Sit lorem minus nobi\",\"isbn\":\"Assumenda vel quibus\",\"writer_id\":\"1\",\"publisher_id\":\"1\",\"department_id\":\"3\",\"origin_id\":\"1\",\"description\":\"Deserunt doloremque\",\"user_id\":1,\"updated_at\":\"2021-08-10T11:16:15.000000Z\",\"created_at\":\"2021-08-10T11:16:15.000000Z\",\"id\":14}', NULL, '2021-08-10 05:16:15', '2021-08-10 05:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `origins`
--

CREATE TABLE `origins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'native' COMMENT 'Native means bangladeshi, Either Country name should define.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `origins`
--

INSERT INTO `origins` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'bd', '2021-06-27 13:14:06', '2021-06-27 13:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bn_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `bn_name`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, NULL, 'XY', NULL, '2021-06-27 13:13:59', '2021-06-27 13:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `quick_bookings`
--

CREATE TABLE `quick_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `star` int(11) NOT NULL DEFAULT 5,
  `comments` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `book_id`, `user_id`, `student_id`, `star`, `comments`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 1, 3, 'afafdf', 1, '2021-07-10 17:44:10', '2021-07-10 17:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `link`, `description`, `image`, `link2`, `link3`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Cumque sed maiores p', NULL, 'Beatae pariatur Con', 'EDU_LIBRARY_STORE_f66fa34e826a6435.png', NULL, NULL, NULL, '2021-08-19 01:49:34', '2021-08-19 01:49:43'),
(4, 'Et obcaecati volupta', NULL, 'Id deleniti ut autem', 'EDU_LIBRARY_STORE_3dd024597e2e696e.jpg', NULL, NULL, NULL, '2021-08-19 01:54:15', '2021-08-19 01:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `supplier_id` bigint(21) DEFAULT NULL,
  `reference` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 1 COMMENT 'Stock amount',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `user_id`, `book_id`, `supplier_id`, `reference`, `qty`, `date`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '10', 100, '2021-06-28', 'adfaf', '2021-06-28 11:42:23', '2021-08-11 10:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `std_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isEvening` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Evening,2=Regular Student',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `department_id`, `user_id`, `std_id`, `name`, `dob`, `phone`, `email`, `semester`, `address`, `parent`, `isEvening`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '173000522e', 'Ripon Uddin', '1996-04-17', '01829894659', 'rislam252@gmail.com', NULL, NULL, NULL, '1', '2021-06-27 12:16:41', '2021-06-27 12:28:56'),
(2, 1, 6, 'Suscipit quibusdam v', 'Ripon Uddin', '1983-02-18', '+1 (829) 181-1831', 'support@ruarman.com', NULL, NULL, NULL, '1', '2021-08-10 16:18:39', '2021-08-10 16:18:39'),
(3, 1, 7, 'Est at nihil minus s', 'Chelsea Stark', '1979-02-11', '+1 (372) 214-3794', 'kobet@mailinator.com', NULL, NULL, NULL, '0', '2021-08-10 16:18:48', '2021-08-19 07:28:23'),
(4, 6, 8, 'Nihil sed rerum dese', 'Linda Valentine', '2021-10-21', '+1 (772) 269-1005', 'qaciruwosu@mailinator.com', NULL, NULL, NULL, '1', '2021-08-19 07:28:53', '2021-08-19 07:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'ESHOP', '01833245600', 'address', '2021-06-28 11:26:29', '2021-06-28 11:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CSE' COMMENT 'CSE as tag name.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oAuth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=Normally registered,1=Facebook,2=LinkedinId',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT 0 COMMENT '1=Admin,0=Student,2=Lecturer/Alumni',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `facebook_id`, `linkedin_id`, `oAuth`, `avatar`, `email`, `isAdmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, '0', NULL, 'admin@eastdelta.edu.bd', 1, NULL, '$2y$10$3//M.t/CXjL.kisuL4HZPu6pv.G2s6QpXu1oor4eiPI7R9fziJbfi', NULL, '2021-06-26 11:05:33', '2021-06-26 11:05:33'),
(2, 'Maynuddin Hasan', NULL, NULL, '0', NULL, 'mynuddin@eastdelta.edu.bd', 1, NULL, '$2y$10$yX/y1YelQbtthzmbTfPK7On7sWHPOeLm5WaLu6kbW00K.mEdSXZTG', NULL, '2021-06-26 11:05:33', '2021-06-26 11:05:33'),
(3, 'Mir imtiaz', NULL, NULL, '0', NULL, 'mir@eastdelta.edu.bd', 1, NULL, '$2y$10$3VGdZgFNhwiSaL17APaobeT.RHW8qDwSPmQt/w8DPSZe67s0g4Szq', NULL, '2021-06-26 11:05:33', '2021-06-26 11:05:33'),
(4, 'Rayhan Hossain', NULL, NULL, '0', NULL, 'rayhan@eastdelta.edu.bd', 1, NULL, '$2y$10$t02ICecmufrcMtrTNvB6eOSJOviGsrPEbC29/imKTssw/UZFkMFZK', NULL, '2021-06-26 11:05:34', '2021-06-26 11:05:34'),
(5, 'Ripon Uddin', NULL, NULL, '0', NULL, 'rislam252@gmail.com', 0, NULL, '$2y$10$3//M.t/CXjL.kisuL4HZPu6pv.G2s6QpXu1oor4eiPI7R9fziJbfi', NULL, '2021-06-27 12:16:41', '2021-06-27 12:16:41'),
(6, 'Ripon Uddin', NULL, NULL, '0', NULL, 'support@ruarman.com', 0, NULL, '$2y$10$8Fn8eewaxw5xawyhUB/7s.GvY22wAQfZr5hdTxY5KJH9jmR6kHHq.', NULL, '2021-08-10 16:18:39', '2021-08-10 16:18:39'),
(7, 'Chelsea Stark', NULL, NULL, '0', NULL, 'kobet@mailinator.com', 0, NULL, '$2y$10$Hj0zWwO0.BI3ibwGZcg17OckQQV3VAiO31bi3MaW.K44F.5aMdfuG', NULL, '2021-08-10 16:18:48', '2021-08-10 16:18:48'),
(8, 'Linda Valentine', NULL, NULL, '0', 'EDU_LIBRARY_STORE_889e7282a9bdc661.jpg', 'qaciruwosu@mailinator.com', 0, NULL, '$2y$10$5nGM0TFb3hGNqYEStugSZuJi0oKshQAOsnHvsqAGs6wnK7ZVpPU2K', NULL, '2021-08-19 07:28:53', '2021-08-19 07:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bn_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `bn_name`, `name`, `avatar`, `created_at`, `updated_at`) VALUES
(1, NULL, 'A', NULL, '2021-06-27 13:14:03', '2021-06-27 13:14:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_department_id_foreign` (`department_id`),
  ADD KEY `books_user_id_foreign` (`user_id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `books_writer_id_foreign` (`writer_id`),
  ADD KEY `books_origin_id_foreign` (`origin_id`);

--
-- Indexes for table `book_issues`
--
ALTER TABLE `book_issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_issues_book_id_foreign` (`book_id`),
  ADD KEY `book_issues_student_id_foreign` (`student_id`),
  ADD KEY `book_issues_user_id_foreign` (`user_id`);

--
-- Indexes for table `book_requests`
--
ALTER TABLE `book_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_requests_user_id_foreign` (`user_id`),
  ADD KEY `book_requests_book_id_foreign` (`book_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fines`
--
ALTER TABLE `fines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fines_book_issue_id_foreign` (`book_issue_id`),
  ADD KEY `fines_book_id_foreign` (`book_id`),
  ADD KEY `fines_student_id_foreign` (`student_id`),
  ADD KEY `fines_user_id_foreign` (`user_id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guardians_student_id_foreign` (`student_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `origins`
--
ALTER TABLE `origins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_bookings`
--
ALTER TABLE `quick_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_book_id_foreign` (`book_id`),
  ADD KEY `stocks_user_id_foreign` (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_std_id_unique` (`std_id`),
  ADD KEY `students_department_id_foreign` (`department_id`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `book_issues`
--
ALTER TABLE `book_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_requests`
--
ALTER TABLE `book_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fines`
--
ALTER TABLE `fines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `origins`
--
ALTER TABLE `origins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quick_bookings`
--
ALTER TABLE `quick_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_origin_id_foreign` FOREIGN KEY (`origin_id`) REFERENCES `origins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_issues`
--
ALTER TABLE `book_issues`
  ADD CONSTRAINT `book_issues_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_issues_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_issues_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_requests`
--
ALTER TABLE `book_requests`
  ADD CONSTRAINT `book_requests_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fines`
--
ALTER TABLE `fines`
  ADD CONSTRAINT `fines_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fines_book_issue_id_foreign` FOREIGN KEY (`book_issue_id`) REFERENCES `book_issues` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fines_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fines_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guardians`
--
ALTER TABLE `guardians`
  ADD CONSTRAINT `guardians_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stocks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

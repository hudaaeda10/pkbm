-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 05:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `user_id`, `thumbnail`, `title`, `slug`, `body`, `edited_at`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL, 'Nobis quos voluptatibus quaerat iste aut.', 'vel-reiciendis-sunt-molestiae-ut-ea-nemo', 'Accusamus cum culpa rerum itaque sunt nihil. Quo ab eum sit tempora excepturi. Enim corporis facilis non consectetur. Dolorum ipsa rerum architecto modi. Ad libero facilis pariatur distinctio libero vitae nam. Et consectetur sint explicabo quia incidunt. Cupiditate officiis perspiciatis sunt ut nesciunt et velit. Qui velit voluptas neque qui fuga ut. Corporis sint debitis impedit consequatur.', NULL, '2020-10-05 19:07:04', '2020-10-05 19:07:04'),
(3, 1, NULL, NULL, 'Quidem debitis quo cumque esse dolor.', 'sit-dignissimos-aut-ut', 'Autem autem architecto delectus amet praesentium dolorem. Atque earum iure quaerat itaque. Voluptates dolore eaque nulla error et iusto voluptatem. Voluptatem nobis amet quisquam earum sint sunt dignissimos. Deleniti culpa quos eius fuga minima. Quis iste asperiores quam soluta velit quaerat. Ut sed beatae incidunt enim placeat consequatur minus veritatis. Qui sunt soluta qui sit dolores doloremque libero. Quod earum dolorum harum magnam expedita ea. Qui corrupti in tenetur dolorem voluptas. Alias voluptatibus quo eum. Deserunt error quasi dolorem laborum incidunt. Eaque eum quas sed velit similique accusantium ducimus velit.', NULL, '2020-10-05 19:07:04', '2020-10-05 19:27:11'),
(4, 1, NULL, NULL, 'Quam eveniet expedita incidunt porro ea.', 'labore-rerum-est-fuga-qui-repellat-nemo-dolores', 'Et aliquam est beatae quo ut quis consectetur. Amet officiis modi vel repellendus suscipit et. Ipsam ut nisi voluptas. Omnis ut tempora magnam magni eum repudiandae. Consequatur reiciendis perspiciatis magni assumenda. Repudiandae sapiente aut qui eum optio nihil officiis a. Vel nihil consectetur nobis atque. Nihil ullam vero nesciunt. Deleniti est facere quia commodi libero. Deserunt quos aut earum cupiditate. Ut tenetur pariatur ut repudiandae iusto.', NULL, '2020-10-05 19:07:04', '2020-10-05 19:34:00'),
(5, 2, NULL, NULL, 'Eum cumque eos ipsum consequatur.', 'ut-provident-omnis-ratione-deserunt', 'Vero rerum ut voluptatem qui. Ad sint sit labore molestiae. Enim consequatur molestias sint omnis. Aut saepe rerum est natus eveniet repudiandae voluptate ullam. Ipsa enim aperiam ut nihil provident suscipit minima omnis. Laborum magnam et quas et. Dolor sed sint rem harum. Est sit occaecati assumenda molestias. Ut inventore aut laborum pariatur. Provident qui sequi nihil est omnis. Quibusdam vero velit excepturi et tempore ut. Nostrum in amet rem voluptas quasi atque voluptatum. Illum dolor et occaecati aliquam velit minima eum aspernatur.', NULL, '2020-10-05 19:07:04', '2020-10-05 19:07:04'),
(6, 2, NULL, NULL, 'Placeat nulla voluptatem eum eos ratione culpa.', 'ut-porro-sunt-et-et-quia-maiores', 'Dolorem corrupti quia eveniet enim. Accusantium magnam suscipit cumque et ut libero rem. Id quia eius deleniti quos. Qui eos eligendi et nemo provident. Maxime sit non ipsum impedit. Doloribus magnam rerum voluptatibus delectus enim earum magnam fuga. Ut maiores adipisci sed.', NULL, '2020-10-05 19:07:04', '2020-10-05 19:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES
(2, 4),
(3, 3),
(3, 4),
(4, 3),
(5, 4),
(6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pendidikan', 'pendidikan', '2020-10-05 18:57:44', '2020-10-05 18:57:44'),
(2, 'Budaya', 'budaya', '2020-10-05 18:57:44', '2020-10-05 18:57:44');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(65, '2014_10_12_000000_create_users_table', 1),
(66, '2014_10_12_100000_create_password_resets_table', 1),
(67, '2019_08_19_000000_create_failed_jobs_table', 1),
(68, '2020_09_18_032222_create_articles_table', 1),
(69, '2020_09_25_013652_create_categories_table', 1),
(70, '2020_09_25_015232_add_category_id_to_articles_table', 1),
(71, '2020_09_25_063605_create_tags_table', 1),
(72, '2020_09_25_064919_create_article_tag_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'SMK', 'smk', '2020-10-05 18:57:44', '2020-10-05 18:57:44'),
(2, 'Taman Siswa', 'taman-siswa', '2020-10-05 18:57:44', '2020-10-05 18:57:44'),
(3, 'Sejarah', 'sejarah', '2020-10-05 18:57:44', '2020-10-05 18:57:44'),
(4, 'Pariwisata', 'pariwisata', '2020-10-05 18:57:44', '2020-10-05 18:57:44'),
(5, 'Otomotif', 'otomotif', '2020-10-05 18:57:45', '2020-10-05 18:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aeda Stren', 'aeda', 'aeda@gmail.com', NULL, '$2y$10$ULmDMCquEi2joM/WFrSdPeQpRL5IJodKe4nJrEZbJyEFv9wyf3dWq', 'admin', NULL, '2020-10-05 18:57:45', '2020-10-05 18:57:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`article_id`,`tag_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

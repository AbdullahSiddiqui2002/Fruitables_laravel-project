-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 04:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(3, 'Fruit', '2024-03-06 14:37:10', '2024-03-06 14:37:10'),
(4, 'Vegetable', '2024-03-06 14:37:10', '2024-03-06 14:37:10'),
(5, 'Bread', '2024-03-08 17:58:08', '2024-03-08 17:58:08'),
(6, 'Meat', '2024-03-08 18:09:24', '2024-03-08 18:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `cartdetails` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `firstname`, `lastname`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `notes`, `cartdetails`, `created_at`, `updated_at`) VALUES
(2, 'Abdullah', 'Siddiqui', 'R-708, sector 8 north karachi', 'Karachi', 'Pakistan', '678954', '0335 2074636', 'abdullah.siddiqui13122002@gmail.com', NULL, '[{\"id\":8,\"product_id\":26,\"quantity\":5,\"created_at\":\"2024-03-12T18:38:27.000000Z\",\"updated_at\":\"2024-03-13T14:20:30.000000Z\"},{\"id\":7,\"product_id\":25,\"quantity\":5,\"created_at\":\"2024-03-12T13:11:34.000000Z\",\"updated_at\":\"2024-03-12T13:11:34.000000Z\"},{\"id\":4,\"product_id\":27,\"quantity\":14,\"created_at\":\"2024-03-12T10:51:49.000000Z\",\"updated_at\":\"2024-03-13T14:23:17.000000Z\"},{\"id\":2,\"product_id\":26,\"quantity\":2,\"created_at\":\"2024-03-12T10:41:09.000000Z\",\"updated_at\":\"2024-03-12T10:41:09.000000Z\"},{\"id\":1,\"product_id\":6,\"quantity\":2,\"created_at\":\"2024-03-12T10:37:24.000000Z\",\"updated_at\":\"2024-03-12T10:37:24.000000Z\"}]', '2024-03-13 15:34:30', '2024-03-13 15:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kamran Siddiqui', 'kamran@gmail.com', 'Hi', '2024-03-13 13:45:00', '2024-03-13 13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_06_142806_create_category_table', 2),
(6, '2024_03_06_144450_create_products_table', 3),
(7, '2024_03_10_145132_create_reviews_table', 4),
(8, '2024_03_12_102259_create_cart_table', 5),
(9, '2024_03_13_183304_create_contact_table', 6),
(10, '2024_03_13_192424_create_checkout_table', 7),
(11, '2024_03_13_201234_create_checkout_table', 8),
(12, '2024_03_13_202114_create_checkout_table', 9),
(13, '2024_03_13_202514_create_checkout_table', 10),
(14, '2024_03_13_202946_create_checkout_table', 11),
(15, '2024_03_14_015126_create_products_table', 12),
(16, '2024_03_14_015158_create_cart_table', 12),
(17, '2024_03_14_020928_create_products_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Carrot', 'Crunchy, vibrant, rich in beta-carotene.', 90, 4, '1710382592.jpg', '2024-03-13 21:16:32', '2024-03-13 21:16:32'),
(3, 'Banana', 'Creamy, potassium-rich, convenient for snacking.', 80, 3, '1710382627.jpg', '2024-03-13 21:17:07', '2024-03-13 21:17:07'),
(4, 'Baguette', 'Crusty, elongated, classic French bread.', 120, 5, '1710382682.jpg', '2024-03-13 21:18:02', '2024-03-13 21:18:02'),
(5, 'Beetroot', 'Earthy, vibrant, packed with antioxidants.', 100, 4, '1710382721.jpg', '2024-03-13 21:18:41', '2024-03-13 21:18:41'),
(6, 'Chicken', 'Versatile, lean, mild-flavored poultry; high protein.', 600, 6, '1710382770.jpg', '2024-03-13 21:19:30', '2024-03-13 21:19:30'),
(7, 'Whole Wheat', 'Nutty, hearty, rich in fiber and nutrients.', 100, 5, '1710382806.jpg', '2024-03-13 21:20:06', '2024-03-13 21:20:06'),
(8, 'Broccoli', 'Nutrient-packed, versatile, slightly bitter.', 90, 4, '1710382891.jpg', '2024-03-13 21:21:31', '2024-03-13 21:21:31'),
(9, 'Orange', 'Tangy, juicy, packed with vitamin C.', 150, 3, '1710382925.jpg', '2024-03-13 21:22:05', '2024-03-13 21:22:05'),
(10, 'Strawberry', 'Juicy, vibrant, perfect balance of sweet and tart.', 180, 3, '1710382957.jpg', '2024-03-13 21:22:37', '2024-03-13 21:22:37'),
(11, 'Pita', 'Soft, pocketed, ideal for sandwiches and dips.', 200, 5, '1710383036.jpg', '2024-03-13 21:23:56', '2024-03-13 21:23:56'),
(12, 'Beef', 'Rich, flavorful, versatile; source of essential nutrients.', 1000, 6, '1710383071.jpg', '2024-03-13 21:24:31', '2024-03-13 21:24:31'),
(13, 'Tomato', 'Juicy, versatile, rich in lycopene.', 130, 4, '1710383141.jpg', '2024-03-13 21:25:41', '2024-03-13 21:25:41'),
(14, 'Mango', 'Tropical, luscious, aromatic; high in vitamins.', 180, 3, '1710383233.jpg', '2024-03-13 21:27:13', '2024-03-13 21:27:13'),
(15, 'Bell Pepper', 'Crunchy, colorful, packed with vitamin C.', 80, 4, '1710383275.jpg', '2024-03-13 21:27:55', '2024-03-13 21:27:55'),
(16, 'Lamb', 'Tender, distinctive flavor, popular in Mediterranean cuisine.', 1300, 6, '1710383317.jpg', '2024-03-13 21:28:37', '2024-03-13 21:28:37'),
(17, 'Pineapple', 'Sweet, tropical, excellent source of vitamin C.', 200, 3, '1710383358.jpg', '2024-03-13 21:29:18', '2024-03-13 21:29:18'),
(18, 'Cucumber', 'Crisp, hydrating, versatile in salads.', 60, 4, '1710383394.jpg', '2024-03-13 21:29:54', '2024-03-13 21:29:54'),
(19, 'Mutton', 'Rich, flavorful, mature sheep meat; often used in stews.', 1400, 6, '1710383445.jpg', '2024-03-13 21:30:45', '2024-03-13 21:30:45'),
(20, 'Potato', 'Starchy, versatile, rich in potassium.', 70, 4, '1710383486.jpg', '2024-03-13 21:31:26', '2024-03-13 21:31:26'),
(21, 'Grape', 'Juicy, bite-sized, available in various colors.', 110, 3, '1710383541.jpg', '2024-03-13 21:32:21', '2024-03-13 21:32:21'),
(22, 'Eggplant', 'Meaty, versatile, rich in antioxidants.', 90, 4, '1710383602.jpg', '2024-03-13 21:33:22', '2024-03-13 21:33:22'),
(23, 'Naan', 'Soft, fluffy, versatile Indian flatbread.', 70, 5, '1710383637.jpg', '2024-03-13 21:33:57', '2024-03-13 21:33:57'),
(24, 'Watermelon', 'Refreshing, hydrating, summer favorite.', 160, 3, '1710383682.jpg', '2024-03-13 21:34:43', '2024-03-13 21:34:43'),
(25, 'Fish', 'Varied, from flaky white to oily', 900, 6, '1710383740.jpg', '2024-03-13 21:35:40', '2024-03-13 21:35:40'),
(26, 'Kiwi', 'Tart, fuzzy, nutrient-dense with vibrant green flesh.', 80, 3, '1710383779.jpg', '2024-03-13 21:36:19', '2024-03-13 21:36:19'),
(27, 'Cauliflower', 'Mild, versatile, low-carb alternative.', 70, 4, '1710383806.jpg', '2024-03-13 21:36:46', '2024-03-13 21:36:46'),
(30, 'Sourdough', 'Tangy, chewy, naturally leavened artisanal loaf.', 170, 5, '1710384032.jpg', '2024-03-13 21:40:32', '2024-03-13 21:40:32'),
(31, 'Spinach', 'Tender, leafy, iron-rich superfood.', 70, 4, '1710385506.jpg', '2024-03-13 22:05:06', '2024-03-13 22:05:06'),
(32, 'Peach', 'Juicy, fuzzy, delicate sweetness; high in fiber.', 130, 3, '1710385534.jpg', '2024-03-13 22:05:34', '2024-03-13 22:05:34'),
(33, 'Apple', 'Sweet, crunchy, versatile; rich in antioxidants.', 140, 3, '1710385560.jpg', '2024-03-13 22:06:00', '2024-03-13 22:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(3, 'Abdullah Siddiqui', 'abdullah.siddiqui@gmail.com', 'Delicious fruit! Highly recommend. The fruit was fresh and juicy.', '2024-03-12 02:22:19', '2024-03-12 02:22:19'),
(4, 'Kamran Siddiqui', 'kamran@gmail.com', 'Fresh vegetables and great prices. High-quality produce. Love the variety of vegetables available.', '2024-03-12 02:23:17', '2024-03-12 02:23:17'),
(5, 'Abdul Basit', 'basit@gmail.com', 'Best bread I\'ve ever had! The bread was so soft and delicious. Great bakery, will definitely buy again.', '2024-03-12 02:24:30', '2024-03-12 02:24:30'),
(6, 'Bilal Khan', 'bilal@gmail.com', 'Excellent quality meat. Tender and juicy steaks. Impressed with the selection of meats.', '2024-03-12 02:25:11', '2024-03-12 02:25:11'),
(7, 'Faisal', 'faisal@gmail.com', 'Fresh', '2024-03-12 06:10:49', '2024-03-12 06:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2022 at 02:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sender_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `sender_name`, `sender_email`, `sender_avatar`, `score`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'احمدرضا امینی', 'ahmadReza@gmail.com', 'https://cdn.lorem.space/images/face/.cache/500x500/nishanth-avva-SdCaK9YKdwk-unsplash.jpg', '1', 'لپ تاپ خیلی خوبی است اما متاسفانه کیبورد پروانه ای آن ظرف دو سال خراب شد و گارانتی آن که گارانتی آروند بود زیر بار تعویض کیبورد نرفت.', '2022-06-01 17:25:54', '2022-06-02 17:25:54'),
(2, 1, 'سارا جانمهر', 'saraJaan@gmail.com', 'https://cdn.lorem.space/images/face/.cache/500x500/tamara-bellis-eDVQwVMLMgU-unsplash.jpg', '5', 'بعضی ها دارن این لب تابو با لب تاب های دیگه مثل دل ایسوز و.....مقایسه میکنند اصلا نباید مقایسه کرد چون این لب تاب تاچ بار داره طراحی امروزه و خیلی سبک و باریک', '2022-06-02 17:28:28', '2022-06-04 17:28:28'),
(3, 2, 'محمد علی‌نژاد', 'MohammadAli@gmail.com', 'https://cdn.lorem.space/images/face/.cache/500x500/jurica-koletic-7YVZYZeITc8-unsplash.jpg', '5', 'خیلی عالیه باید تو دست گرفت کلی کار سنگین میشه باهاش کرد اینقدر باریکه و سبکها که شیفتش میشی پیشنهاد می کنم.', '2022-06-20 17:31:04', '2022-06-21 17:31:04'),
(4, 3, 'ریحانه کریمی', 'reyhan0011@gmail.com', 'https://cdn.lorem.space/images/face/.cache/500x500/pexels-pixabay-415829.jpg', '1', 'روی کار خط خش داشت کهنه بود و اصلا هم اندازه ایپد مینی نبود جفت نمیشد من که مرجوع کردم', '2022-06-21 17:34:26', '2022-06-09 17:34:26'),
(5, 3, 'فاطمه رصایی', 'fatiRezaei@gmail.com', 'https://cdn.lorem.space/images/face/.cache/500x500/pexels-pixabay-415829.jpg', '5', 'من هديه گرفتم خيلي راضي بودن', '2022-06-01 17:36:07', '2022-06-03 17:36:07');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_06_24_083300_create_products_table', 1),
(3, '2022_06_24_084220_create_comments_table', 1),
(4, '2022_06_24_084456_create_sponsors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isFeatured` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `content`, `image_url`, `price`, `score`, `isFeatured`, `created_at`, `updated_at`) VALUES
(1, 'مک بوک ایر 13 اینچی اپل MacBook Air MGN63 2020', 'ظرفیت حافظه رم: 8 گیگابایت\r\nظرفیت حافظه داخلی: 256 گیگابایت\r\nسازنده پردازنده گرافیکی: Apple\r\nاندازه صفحه نمایش: 13.3 اینچ\r\nطبقه‌بندی: کاربری عمومی ، باریک و سبک\r\nسری پردازنده: M1\r\nنوع حافظه رم: Unified\r\nدقت صفحه نمایش: QHD|2560×1600\r\nصفحه نمایش مات: خیر\r\nصفحه نمایش لمسی: خیر\r\nسیستم عامل: Apple Mac OS\r\nپورت HDMI: ندارد', 'https://itech.ir/wp-content/uploads/2021/01/%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-13-%D8%A7%DB%8C%D9%86%DA%86%DB%8C-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-MacBook-Air-MGN63-2020.jpg', '30,650,000 تومان', '5', 1, '2022-06-01 09:21:41', '2022-06-02 09:22:04'),
(2, 'آیفون ۱3پرو اپل iPhone 13 Pro 256GB NOT ACTIVE', 'اندازه نمایشگر:  6.1 اینچ\r\nرزولوشن: 1170×2532\r\nدوربین‌های اصلی: 12+12+12\r\nدوربین سلفی: 12\r\nپردازنده: A15\r\nحافظه: 256 گیگابایت\r\nرم: 6 گیگابایت', 'https://itech.ir/wp-content/uploads/2021/09/%D8%A2%DB%8C%D9%81%D9%88%D9%86-%DB%B13%D9%BE%D8%B1%D9%88-%D8%A7%D9%BE%D9%84-iPhone-13-Pro-128GB-570x570.jpg', '49,500,000 تومان', '4', 0, '2022-06-16 09:22:17', '2022-06-23 09:22:17'),
(3, 'آیپد مینی iPad mini 8.3 inch 2021 ظرفیت 64 گیگابایت و 4 گیگابایت رم', 'مقدار رم : چهار گیگابایت\r\nحافظه داخلی : 64 گیگابایت\r\nبازه‌ی اندازه صفحه نمایش : بین 8 تا 10 اینچ\r\nشبکه های ارتباطی :بدون سیم‌کارت\r\nرابط‌ها :USB Type-C', 'https://itech.ir/wp-content/uploads/2022/04/%D8%A2%DB%8C%D9%BE%D8%AF-%D9%85%DB%8C%D9%86%DB%8C-iPad-mini-8.jpg', '13,850,000 تومان', '3', 0, '2022-06-22 09:23:54', '2022-06-23 09:23:54'),
(4, 'هدفون بی سیم مدل Beats Fit Pro', 'نوع اتصال :بی‌سیم\r\nقابلیت‌های مقاومتی : مقاومت در برابر رطوبت و عرق\r\nنوع گوشی :دو گوشی', 'https://itech.ir/wp-content/uploads/2022/04/%D9%87%D8%AF%D9%81%D9%88%D9%86-%D8%A8%DB%8C-%D8%B3%DB%8C%D9%85-%D9%85%D8%AF%D9%842-Beats-Fit-Pro-.jpg', '6,100,000 تومان', '5', 1, '2022-06-26 09:25:11', '2022-06-24 09:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `url`, `img`, `created_at`, `updated_at`) VALUES
(1, 'فروشگاه ساز وب از تو', 'https://webazto.ir', 'https://webazto.ir/img/spinner-webAzToLOGO.webp', '2022-06-01 17:44:56', '2022-06-03 17:44:56'),
(2, 'شرکت برنامه نویسی عصر شگرف', 'https://singularity-age.com/', 'https://singularity-age.com/wp-content/uploads/2021/08/cropped-asreshegerf-favicon1-1-192x192.png', '2022-06-06 17:47:45', '2022-06-03 17:47:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

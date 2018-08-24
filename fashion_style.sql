-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2018 at 03:19 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_style`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `bill_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addresses_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `bill_address`, `bill_city`, `bill_zip`, `bill_country`, `ship_address`, `ship_city`, `ship_zip`, `ship_country`, `created_at`, `updated_at`) VALUES
(1, 12, 'Strasse 15', 'Hamburg', '34110', 'Germany', 'Strasse 15', 'Hamburg', '34110', 'Germany', '2018-08-22 08:21:30', '2018-08-22 08:21:30'),
(2, 27, 'London Road 15', 'London', 'LGC5C', 'United Kingdom', 'London Road 15', 'London', 'LGC5C', 'United Kingdom', '2018-08-22 07:17:38', '2018-08-22 07:17:38'),
(3, 24, 'London Road 24', 'London', 'LGC5C', 'United Kingdom', 'London Road 24', 'London', 'LGC5C', 'United Kingdom', '2018-08-22 07:17:38', '2018-08-22 07:17:38'),
(4, 25, 'London Road 25', 'London', 'LGC5C', 'United Kingdom', 'London Road 25', 'London', 'LGC5C', 'United Kingdom', '2018-08-22 07:17:38', '2018-08-22 07:17:38'),
(5, 29, 'Suboticka 45', 'Novi Sad', '21000', 'Serbia', 'Suboticka 45', 'Novi Sad', '21000', 'Serbia', '2018-08-23 06:33:45', '2018-08-23 06:33:45'),
(6, 30, 'London Road 15', 'London', 'LGC5C', 'United Kingdom', 'London Road 15', 'London', 'LGC5C', 'United Kingdom', '2018-08-24 05:13:32', '2018-08-24 05:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
CREATE TABLE IF NOT EXISTS `attributes` (
  `attr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`attr_id`),
  KEY `attributes_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) DEFAULT NULL,
  `percent_off` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coupons_code_unique` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent_off`, `created_at`, `updated_at`) VALUES
(1, 'coupon1', 'fixed', 5, NULL, '2018-08-16 13:22:36', '2018-08-16 13:22:36'),
(2, 'coupon2', 'percent', NULL, 50, '2018-08-16 13:23:04', '2018-08-16 13:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`),
  KEY `customers_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `user_id`, `firstname`, `lastname`, `date_of_birth`, `phone`, `gender`, `subscribed`, `created_at`, `updated_at`) VALUES
(5, 12, 'Milan', 'Masnikosa', '1996-04-28', '+381656651895', 'Male', 1, '2018-08-14 09:37:37', '2018-08-22 10:24:24'),
(11, 24, 'Jason', 'Brown', '1990-05-01', '+314548751', 'Male', 1, '2018-08-17 06:23:34', '2018-08-22 09:09:09'),
(12, 25, 'Steve', 'Murphy', '1980-04-04', '+31 457 2148', 'Male', 0, '2018-08-20 10:09:09', '2018-08-20 10:09:09'),
(13, 27, 'Michael', 'Jordan', '1970-05-05', '+314548751', 'Male', 1, '2018-08-22 07:17:38', '2018-08-22 07:52:06'),
(14, 29, 'Miroslava', 'Jankovic', '1996-05-05', '011444444', 'Female', 0, '2018-08-23 06:33:45', '2018-08-23 06:48:50'),
(15, 30, 'John', 'Doe', '1990-05-05', '+314548751', 'Male', 0, '2018-08-24 05:13:32', '2018-08-24 05:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image1`, `image2`, `image3`, `image4`, `created_at`, `updated_at`) VALUES
(1, 4, 'wallet-1', 'wallet-2', 'wallet-3', 'wallet-4', '2018-08-22 13:45:00', '2018-08-22 13:45:00'),
(2, 3, 'product-31', 'product-32', 'product-33', 'product-34', '2018-08-22 13:45:00', '2018-08-22 13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_08_074304_create_categories_table', 1),
(4, '2018_08_08_080121_create_products_table', 2),
(5, '2018_08_08_081417_create_attributes_table', 3),
(6, '2018_08_08_083819_create_customers_table', 4),
(7, '2018_08_09_084830_edit_customers_table', 5),
(8, '2018_08_09_085828_add_column_to_customers', 6),
(9, '2018_08_13_073600_add_subscriptions_table', 7),
(10, '2018_08_13_081516_rename_subscriptions_table', 8),
(11, '2018_08_15_105753_rename_product_id_column', 9),
(12, '2018_08_16_130442_create_coupons_table', 10),
(13, '2018_08_17_114227_create_orders_table', 11),
(18, '2018_08_20_074328_create_order_product_table', 12),
(19, '2018_08_21_081635_add_tracking_number_to_orders_table', 12),
(21, '2018_08_22_074832_create_addresses_table', 13),
(22, '2018_08_22_091955_remove_columns_from_customers', 14),
(23, '2018_08_22_092554_add_subscribe_field_to_customers', 15),
(26, '2018_08_22_114012_add_image_columns_to_products_table_new', 16),
(27, '2018_08_22_133521_create_images_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address_apt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `discount_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tracking_number` int(10) UNSIGNED NOT NULL,
  `payment_gateway` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'stripe',
  `shipped` tinyint(1) NOT NULL DEFAULT '0',
  `error` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `phone`, `shipping_address`, `shipping_address_apt`, `shipping_city`, `shipping_zip`, `shipping_country`, `discount`, `discount_code`, `subtotal`, `tax`, `total`, `tracking_number`, `payment_gateway`, `shipped`, `error`, `created_at`, `updated_at`) VALUES
(8, 25, '+31 457 2148', 'London Road 15', NULL, 'London', 'London', 'Belgium', 0, NULL, 20, 4, 24, 384507, 'stripe', 0, NULL, '2018-08-21 12:23:50', '2018-08-21 12:23:50'),
(25, 30, '+314548751', 'London Road 15', NULL, 'London', 'London', 'United Kingdom', 0, NULL, 85, 17, 102, 365211, 'stripe', 0, NULL, '2018-08-24 09:41:38', '2018-08-24 09:41:38'),
(24, 29, '011444444', 'Suboticka 45', NULL, 'Novi Sad', 'Novi Sad', 'Serbia', 0, NULL, 20, 4, 24, 398356, 'stripe', 1, NULL, '2018-08-23 06:58:48', '2018-08-23 06:58:48'),
(23, 29, '011444444', 'Suboticka 45', NULL, 'Novi Sad', 'Novi Sad', 'Serbia', 0, NULL, 20, 4, 24, 784248, 'stripe', 0, NULL, '2018-08-23 06:58:14', '2018-08-23 06:58:14'),
(22, 12, '+381656651895', 'Strasse 15', NULL, 'Hamburg', 'Hamburg', 'Germany', 0, NULL, 20, 4, 24, 991579, 'stripe', 0, NULL, '2018-08-23 05:48:58', '2018-08-23 05:48:58'),
(21, 12, '+381656651895', 'Strasse 15', NULL, 'Hamburg', 'Hamburg', 'Germany', 0, NULL, 170, 34, 204, 639833, 'stripe', 0, NULL, '2018-08-22 10:22:13', '2018-08-22 10:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_product_order_id_foreign` (`order_id`),
  KEY `order_product_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 5, 4, 1, '2018-08-21 06:50:29', '2018-08-21 06:50:29'),
(2, 5, 3, 1, '2018-08-21 06:50:29', '2018-08-21 06:50:29'),
(3, 6, 1, 1, '2018-08-21 06:58:47', '2018-08-21 06:58:47'),
(4, 7, 3, 1, '2018-08-21 07:13:19', '2018-08-21 07:13:19'),
(5, 8, 4, 1, '2018-08-21 12:23:50', '2018-08-21 12:23:50'),
(6, 9, 1, 1, '2018-08-21 12:24:52', '2018-08-21 12:24:52'),
(7, 10, 1, 1, '2018-08-21 12:26:28', '2018-08-21 12:26:28'),
(8, 11, 1, 1, '2018-08-21 12:32:22', '2018-08-21 12:32:22'),
(9, 12, 1, 1, '2018-08-21 12:32:52', '2018-08-21 12:32:52'),
(10, 13, 1, 1, '2018-08-21 12:39:11', '2018-08-21 12:39:11'),
(11, 13, 3, 1, '2018-08-21 12:39:11', '2018-08-21 12:39:11'),
(12, 14, 1, 1, '2018-08-21 12:41:20', '2018-08-21 12:41:20'),
(13, 14, 3, 1, '2018-08-21 12:41:20', '2018-08-21 12:41:20'),
(14, 15, 1, 1, '2018-08-21 12:44:00', '2018-08-21 12:44:00'),
(15, 15, 3, 1, '2018-08-21 12:44:00', '2018-08-21 12:44:00'),
(16, 16, 1, 1, '2018-08-21 12:54:10', '2018-08-21 12:54:10'),
(17, 16, 3, 1, '2018-08-21 12:54:10', '2018-08-21 12:54:10'),
(18, 17, 1, 1, '2018-08-21 12:57:43', '2018-08-21 12:57:43'),
(19, 17, 3, 1, '2018-08-21 12:57:43', '2018-08-21 12:57:43'),
(20, 18, 1, 1, '2018-08-21 13:09:34', '2018-08-21 13:09:34'),
(21, 18, 3, 1, '2018-08-21 13:09:34', '2018-08-21 13:09:34'),
(22, 19, 4, 1, '2018-08-22 05:23:13', '2018-08-22 05:23:13'),
(23, 20, 4, 1, '2018-08-22 10:19:33', '2018-08-22 10:19:33'),
(24, 21, 3, 2, '2018-08-22 10:22:13', '2018-08-22 10:22:13'),
(25, 22, 4, 1, '2018-08-23 05:48:58', '2018-08-23 05:48:58'),
(26, 23, 4, 1, '2018-08-23 06:58:14', '2018-08-23 06:58:14'),
(27, 24, 4, 1, '2018-08-23 06:58:48', '2018-08-23 06:58:48'),
(28, 25, 3, 1, '2018-08-24 09:41:38', '2018-08-24 09:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(8) NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `composition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_colors` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_front` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `price`, `size`, `color`, `description`, `composition`, `artist`, `available_size`, `available_colors`, `image_front`, `image_back`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product 1', 50, 'M', 'Blue', '100% organic cotton', 'Composition details', 'Artist details', 'L,M,S,XL', 'Red,Blue,Green', 'product-1', NULL, '2018-08-13 08:55:58', '2018-08-13 08:55:58'),
(2, 2, 'Product 2', 60, 'L', 'Red', 'Product 2 description', 'Composition details (Product 2)', 'Artist details (Product 2)', 'L,S', 'Blue, Red, Black', 'product-2', NULL, '2018-08-13 08:59:15', '2018-08-13 08:59:15'),
(3, 3, 'Product 3', 85, 'XL', 'Grey', 'Product 3 description', 'Composition details (Product 3)', 'Artist details (Product 3)', 'L,S,M,XL', 'Blue, Red, Black,Yellow', 'product-3', NULL, '2018-08-13 10:37:59', '2018-08-13 10:37:59'),
(4, 4, 'Wallet', 20, 'L', 'Brown', 'Wallet description', 'Composition details (Product 4)', 'Artist details (Product 4)', '', 'Blue, Red, Black', 'wallet', 'wallet', '2018-08-15 12:11:03', '2018-08-15 12:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'milan.masnikosa@gmail.com', 'M', '2018-08-13 06:17:07', '2018-08-13 06:17:07'),
(2, 'petar@mail.com', 'M', '2018-08-13 11:18:58', '2018-08-13 11:18:58'),
(3, 'john@mail.com', NULL, '2018-08-13 12:38:36', '2018-08-13 12:38:36'),
(4, 'testSub@mail.com', 'M', '2018-08-14 10:14:11', '2018-08-14 10:14:11'),
(5, 'pera@mail.com', 'M', '2018-08-20 05:04:05', '2018-08-20 05:04:05'),
(6, 'test@test.com', 'M', '2018-08-20 05:09:06', '2018-08-20 05:09:06'),
(13, 'michael@mail.com', NULL, '2018-08-22 07:52:06', '2018-08-22 07:52:06'),
(14, 'mail@mail.com', NULL, '2018-08-22 09:09:09', '2018-08-22 09:09:09'),
(15, 'milan@mail.com', NULL, '2018-08-22 10:24:24', '2018-08-22 10:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(27, 'Michael Jordan', 'michael@mail.com', '$2y$10$MNCoDpR72Aoohlc/PKhIHuqE4slI6xFvHfjDjYLIaxC31ELzkUKYC', 'KoFzZOFzAEp6uIlNprEUu7TzvDYTGeYfnI3YVH2zY5I6i9289opzVg3freAW', '2018-08-22 07:17:38', '2018-08-22 07:17:38'),
(24, 'Jason Brown', 'mail@mail.com', '$2y$10$ThXd/wENTgcPxgtuLpdime8XgxHUc.bK5w3YK40VcQv5aVjKZZqN6', 'PBlhWSjVNN4kpQDDrnx1YYc0PYjnRl9Q8KY6kIhxqDi5rPSi5sIRokewbo6V', '2018-08-17 06:23:34', '2018-08-21 11:45:53'),
(25, 'Steve Murphy', 'steve@steve.com', '$2y$10$UID0IiQnvxa8jdnG1Lomzud9TKn3iB6fkFSy2FEfOg1W5VBxa8MXi', '1Zc8nSp1mSL7uwzItU4dIgaJJJY4r62HlgPQifh2hv3QqZqicmNMNes2suOc', '2018-08-20 10:09:09', '2018-08-20 10:09:09'),
(12, 'Milan Masnikosa', 'milan@mail.com', '$2y$10$MYuuSqRGAAH..AzOFejLs.lvUBed/GyFb0KZGk0qKdvbfL.mVVP.q', 'KJuVH38zN8tmaE8cOaEfXIxZBLIeSXiGbrz6lN6AeCmwRwYX97fmDk7dF8eu', '2018-08-14 09:37:37', '2018-08-14 09:37:37'),
(30, 'John Doe', 'admin@admin.com', '$2y$10$QUsPFwbiqYFnc6rLV1speuyBPstdW8HnPf6R0/QZXGqhI3s2eCJHq', 'afijcBlmsSpNBhTzZ0kIARZDClTotpiCX1ErLvjG4Pjd1RRIMXxIj14FvCbi', '2018-08-24 05:13:32', '2018-08-24 05:13:32'),
(29, 'Miroslava Jankovic', 'miroslava@mail.com', '$2y$10$B9qE1N7Gl0Y/BuhQeNrKF.u3IBhZLAaXNCamGsv2osZRviHWBaHay', 'Yrm954L9NxJY9iMuwIMzb38M4qI20nrFZGqb13O1fZ8LVtNDbU1kzAlDcco5', '2018-08-23 06:33:45', '2018-08-23 06:48:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

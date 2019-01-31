-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 06:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'John Has Join the Team!', '<p>Hello there I am John!... Just running a few checks!</p>', '2019-01-30 10:28:17', '2019-01-30 10:28:17', 1),
(2, 'Everything is fine and dandy so far!', '<p>Nam sit amet sollicitudin magna, ac maximus nisl. Praesent sapien lectus, molestie ut nisl quis, euismod euismod urna. Mauris nec congue libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse eget facilisis ex. Morbi cursus risus non est mollis, in ornare risus porttitor. Nulla volutpat vehicula ligula ut lacinia.</p>', '2019-01-30 10:29:03', '2019-01-30 10:29:03', 1),
(3, 'Morbi cursus risus non est mollis', '<p>Nam sit amet sollicitudin magna, ac maximus nisl. Praesent sapien lectus, molestie ut nisl quis, euismod euismod urna. Mauris nec congue libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse eget facilisis ex. Morbi cursus risus non est mollis, in ornare risus porttitor. Nulla volutpat vehicula ligula ut lacinia.</p>', '2019-01-30 10:30:26', '2019-01-30 10:30:26', 2),
(4, 'I \"Karl Gibson\" Has entered the building!', '<p>Morbi cursus risus non est mollis!</p>', '2019-01-30 10:30:54', '2019-01-30 10:30:54', 2),
(5, 'Bill bill bill bill!', '<p><strong><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut semper placerat nibh, sit amet luctus sem imperdiet eget. Sed venenatis magna et turpis pharetra cursus. Curabitur volutpat fringilla dolor faucibus tincidunt. Duis et finibus arcu. Sed finibus gravida orci ut eleifend. Suspendisse at egestas enim, vel rhoncus purus. Curabitur id lectus dignissim, luctus magna et, imperdiet nulla. Mauris mollis leo sit amet ex tristique egestas. Curabitur feugiat, sapien sed elementum iaculis, turpis diam pulvinar dui, vel accumsan turpis leo in enim. Curabitur interdum, erat quis venenatis pretium, nunc tortor semper dolor, in sodales nisl dolor a enim. Vestibulum pharetra in eros maximus tincidunt. Praesent in nisi sapien. Mauris in erat nisi. Nulla sit amet tellus in enim tincidunt placerat hendrerit vitae nibh. Nulla tristique libero a lectus sagittis viverra. Phasellus laoreet nisi sit amet nibh placerat venenatis.</em></strong></p>', '2019-01-30 10:31:39', '2019-01-30 10:31:39', 3),
(6, 'Account Recovery has issues!', '<p>Future plan to fix!</p>', '2019-01-30 10:32:33', '2019-01-30 10:32:33', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John', 'john@crud.test', '$2y$10$JtGCbdFApo9zNRTZOS94teLInliY.uAnjOJoj/bKb3ktIOqTlEluS', 'NJQJgCVcsN31YGJU1rUvzPsQBP6qg4QaAHnpNPGv6dbZruc0Zfz9oKH0AiIK', '2019-01-30 10:27:41', '2019-01-30 10:27:41'),
(2, 'Karl Gibson', 'gibson@crud.test', '$2y$10$37Z2H26OElCQLNM//vhk6OdXda9e3IqgqwwACUw5AbLRBwDVZbuEC', 'E519iBFkg4h89FLdwlYaMQ9Mnb9icXN6ET7aygpkL0XLjfywu4ozYd6jKGDq', '2019-01-30 10:30:13', '2019-01-30 10:30:13'),
(3, 'Bill Nye', 'nye@crud.test', '$2y$10$uMcyvKmLc5Bkbd3FVBkHweSW8NeM44H8P3HdD2dkpxcWiGVrsfIq2', '8j8WJTTFA5yHuZmCnfD6PMrsU7QLdTBKWlbfn4TOT4o31QIKniJ37JwSUTRK', '2019-01-30 10:31:20', '2019-01-30 10:31:20'),
(4, 'Test', 'testbot@crud.net', '$2y$10$MRaN/WCtpIFXhu4whay1UO.Ict1LrxF0rkQWB3rsn3s4KGkmyXN6a', 'RN50PAiSV9poRsMidUTrZeQ0hX0HnzjUjJ2LBw0KoEguTLNZDRrGNxsPlt91', '2019-01-30 10:32:08', '2019-01-30 10:32:08');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

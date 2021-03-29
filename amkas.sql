-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 12:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amkas`
--

-- --------------------------------------------------------

--
-- Table structure for table `amkas_forms`
--

CREATE TABLE `amkas_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sheltercase_no` bigint(20) UNSIGNED NOT NULL,
  `date_of_dep` date DEFAULT NULL,
  `date_of_arr` date DEFAULT NULL,
  `date_of_reg` date DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `passportno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `originaladdress` text COLLATE utf8mb4_unicode_ci,
  `contact_no` bigint(20) UNSIGNED DEFAULT NULL,
  `Education` text COLLATE utf8mb4_unicode_ci,
  `foreignemployment` text COLLATE utf8mb4_unicode_ci,
  `transitcountry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `durationofstay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci,
  `parentialname` text COLLATE utf8mb4_unicode_ci,
  `natureofjobs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maritialstatus` enum('married','single') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'single',
  `no_of_children` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amkas_forms`
--

INSERT INTO `amkas_forms` (`id`, `sheltercase_no`, `date_of_dep`, `date_of_arr`, `date_of_reg`, `name`, `dob`, `passportno`, `originaladdress`, `contact_no`, `Education`, `foreignemployment`, `transitcountry`, `durationofstay`, `age`, `document`, `parentialname`, `natureofjobs`, `maritialstatus`, `no_of_children`, `created_at`, `updated_at`) VALUES
(2, 72, '1987-04-30', '2021-02-10', '1995-01-31', 'Liberty Cannon', '2016-05-29', 'Enim laboris eum vol', 'Aut molestiae evenie', 94, 'Cillum ratione volup', 'Earum recusandae Ul', 'Ea consectetur in as', 'Est in et irure irur', 60, 'Quia inventore nostr', 'Consequatur Corrupt', 'Ut magna eius velit', 'married', 2, '2021-03-25 04:37:38', '2021-03-25 04:37:38'),
(3, 54, '2021-03-13', '2021-03-06', '2021-03-20', 'Mark Franklin', '2021-03-25', 'Sunt ipsum ut aliqu', 'Suscipit dolor rerum', 25, 'Quam magni aliqua E', 'Corporis nostrud mol', 'Est ipsum a tempor', 'Eaque nostrum ea eli', 14, 'Aute iusto nesciunt', 'Cillum qui ut laboru', 'Sed perferendis eum', 'married', 34, '2021-03-26 00:50:38', '2021-03-26 00:50:38'),
(4, 28, '2021-03-06', '2021-03-06', '2021-03-13', 'Ivana Fernandez', '2021-03-13', 'Est quaerat anim ut', 'Officia explicabo Q', 97, 'Beatae voluptas est', 'Quia eiusmod modi pr', 'Nam atque laborum C', 'Eaque consequuntur n', 37, 'Nesciunt id eos o', 'Nisi sit enim commo', 'Vero esse aspernatu', 'married', 23, '2021-03-26 05:31:42', '2021-03-26 05:31:42'),
(5, 86, '2021-03-13', '2021-03-13', '2021-03-13', 'Hope Knapp', '2021-03-13', 'Et veniam duis aut', 'Molestiae odio facer', 65, 'Quod minim perspicia', 'Non consectetur eos', 'Do et ut aut magni N', 'Reprehenderit volupt', 12, 'Laborum deserunt exc', 'Aut voluptatem neces', 'Vel qui saepe soluta', 'single', 91, '2021-03-26 05:34:58', '2021-03-26 05:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `amkas_metas`
--

CREATE TABLE `amkas_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amkas_form_id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amkas_metas`
--

INSERT INTO `amkas_metas` (`id`, `amkas_form_id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(63, 2, 'maternal_family', 'Similique et pariatu', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(64, 2, 'bread_winner_1', 'Est voluptas est omn', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(65, 2, 'family_occupation_1', 'Sequi rem eum repell', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(66, 2, 'family_married_to', 'Ea vel tenetur neces', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(67, 2, 'bread_winner_2', 'Non aute qui ipsum', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(68, 2, 'family_occupation_2', 'Fugiat saepe ut ex d', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(69, 2, 'job_for_foreignemployment', 'Iusto nesciunt alia', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(70, 2, 'reason_for_foreignemployment', 'Deserunt nemo odit m', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(71, 2, 'choosed_country', 'Voluptates et incidi', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(72, 2, 'sur_for_foreignemployment', 'Minim vel illum ut', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(73, 2, 'medium_broker', '1', '2021-03-25 23:53:04', '2021-03-25 23:54:13'),
(74, 2, 'amount_paid', '21', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(75, 2, 'activities_done', 'Fugit praesentium n', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(76, 2, 'dis_with_family', '0', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(77, 2, 'know_about_fm', '0', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(78, 2, 'pre_depart_orientation', '1', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(79, 2, 'language_training', '0', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(80, 2, 'skill_training', '0', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(81, 2, 'knowledge_about_owndocx', '0', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(82, 2, 'problem_at_origin', 'A totam nemo ea cons', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(83, 2, 'problem_at_transit', 'Nam qui vel aliqua', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(84, 2, 'problem_at_destination', NULL, '2021-03-25 23:53:04', '2021-03-25 23:54:13'),
(85, 2, 'job_desc', 'Fugiat sit odio volu', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(86, 2, 'salary_promised', 'Sunt eum veniam ali', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(87, 2, 'salary_recieved', 'Qui tempore nihil e', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(88, 2, 'timetaken_reach_destination', 'Ex ex ea nostrud lor', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(89, 2, 'medium_of_sendingmoney', 'Lorem consectetur ex', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(90, 2, 'facilities', 'Odio est velit odio', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(91, 2, 'working_hr', 'Aute expedita proide', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(92, 2, 'day_off', '22', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(93, 2, 'medical_checkups', '0', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(94, 2, 'labour_identity', '0', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(95, 2, 'working_visa_permit', '1', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(96, 2, 'wassurvivor_incontactfamily_andhow', 'Cupidatat ipsam aute', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(97, 2, 'howdid_survivorincontact_familyandhowoften', 'Aliqua Accusantium', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(98, 2, 'experience_problems_destination', 'Deleniti saepe odit', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(99, 2, 'process_of_returning', 'Adipisicing lorem no', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(100, 2, 'howsurvivor_felt_landinghomecountry', 'Maiores rerum mollit', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(101, 2, 'know_about_amkashow', 'Sequi nisi incididun', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(102, 2, 'amkas_meet_her', 'Voluptatum et dolore', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(103, 2, 'physical_psychological_condition', 'Tempora nulla aliqui', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(104, 2, 'transportation_service', '0', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(105, 2, 'shelter_support', '0', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(106, 2, 'medical_support', '1', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(107, 2, 'counseling_support', '1', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(108, 2, 'paralegal_support', '1', '2021-03-25 23:53:04', '2021-03-25 23:53:04'),
(109, 2, 'services_skill_training', '0', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(110, 2, 'referral_to_org', '1', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(111, 2, 'date_of_referral', '2021-03-02', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(112, 2, 'name_of_org', 'Joshua Baldwin', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(113, 2, 'address', 'Elit magni neque vo', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(114, 2, 'contact_no', 'Quaerat commodo veli', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(115, 2, 'otherservices_amkas', 'Ab alias nihil et co', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(116, 2, 'change_of_survivor', 'Aliqua Rerum rem pa', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(117, 2, 'period_of_stay', 'Sit sequi qui et aut', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(118, 2, 'where_did_survivor_return', 'Architecto ea nisi d', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(119, 2, 'survivor_opinion', 'Aut neque suscipit a', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(120, 2, 'opinion_toward_goingabroad', 'Enim rerum esse veli', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(121, 2, 'survivor_planning', 'Amet soluta sequi d', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(122, 2, 'how_is_survivor', 'Nulla totam dicta au', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(123, 2, 'case_study_name', 'Addison Solomon', '2021-03-25 23:53:04', '2021-03-26 00:55:07'),
(124, 2, 'case_study_designation', 'Fuga Fugit laborio', '2021-03-25 23:53:04', '2021-03-26 00:55:07');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_03_22_053613_create_amkas_forms_table', 1),
(15, '2021_03_22_070333_create_amkas_metas_table', 1),
(16, '2021_03_24_085134_create_sitesettings_table', 1);

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
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` longtext COLLATE utf8mb4_unicode_ci,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'description', 'dsadadadsada', '2021-03-25 02:14:57', '2021-03-25 23:46:05'),
(2, 'site_icon', 'images/1616736665156504539_2019065994903252_2997688172821952256_n.jpg', '2021-03-25 02:14:57', '2021-03-25 23:46:05'),
(3, 'fav_icon', 'images/16167366658eee55269d4979c3c777dba25c3fa70c.jpg', '2021-03-25 02:14:57', '2021-03-25 23:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1', 'admin@gmail.com', 'admin', NULL, '$2y$10$TdU4eequhwi0JVV5QgJRTO6aaK0h4aiWludFh.mVEUuKzz/k12Z32', NULL, '2021-03-25 02:12:15', '2021-03-25 02:12:15'),
(2, 'sujab', 'shrestha', 'ssujab9@gmail.com', 'admin', NULL, '$2y$10$EbfR/fRTkSv8W179blDKF.A9Ez5lOy1C0jFt1l8IQkTtCACMM1.Gm', NULL, '2021-03-25 02:16:16', '2021-03-25 02:16:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amkas_forms`
--
ALTER TABLE `amkas_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amkas_metas`
--
ALTER TABLE `amkas_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amkas_metas_amkas_form_id_foreign` (`amkas_form_id`);

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
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
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
-- AUTO_INCREMENT for table `amkas_forms`
--
ALTER TABLE `amkas_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `amkas_metas`
--
ALTER TABLE `amkas_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amkas_metas`
--
ALTER TABLE `amkas_metas`
  ADD CONSTRAINT `amkas_metas_amkas_form_id_foreign` FOREIGN KEY (`amkas_form_id`) REFERENCES `amkas_forms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Des 2023 pada 06.07
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_streaming`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(3, '::1', 'vigiapriliansyahvigi29@gmail.com', 6, '2023-12-06 08:58:05', 1),
(4, '::1', 'vigiapriliansyah', NULL, '2023-12-06 09:00:13', 0),
(5, '::1', 'mrmousker73@gmail.com', 7, '2023-12-06 09:00:32', 1),
(6, '::1', 'vigiapriliansyah', NULL, '2023-12-06 10:31:07', 0),
(7, '::1', 'mrmousker73@gmail.com', 7, '2023-12-06 11:23:47', 1),
(8, '::1', 'mrmousker73@gmail.com', 7, '2023-12-06 11:28:56', 1),
(9, '::1', 'apriliansyahvigi@gmail.com', 8, '2023-12-06 12:05:05', 1),
(10, '::1', 'mrmousker73@gmail.com', 7, '2023-12-06 12:06:11', 1),
(11, '::1', 'mrmousker73@gmail.com', 7, '2023-12-06 12:24:37', 1),
(12, '::1', 'mrmousker73@gmail.com', 7, '2023-12-07 00:52:09', 1),
(13, '::1', 'mrmousker73@gmail.com', 7, '2023-12-07 00:55:09', 1),
(14, '::1', 'mrmousker73@gmail.com', 7, '2023-12-07 01:58:02', 1),
(15, '::1', 'mrmousker73@gmail.com', 7, '2023-12-07 06:44:03', 1),
(16, '::1', 'mrmousker73@gmail.com', 7, '2023-12-07 06:45:29', 1),
(17, '::1', 'mrmousker73@gmail.com', 7, '2023-12-08 06:11:44', 1),
(18, '::1', 'mrmousker73@gmail.com', 7, '2023-12-08 07:25:15', 1),
(19, '::1', 'mrmousker73@gmail.com', 7, '2023-12-08 11:04:55', 1),
(20, '::1', 'mrmousker73@gmail.com', 7, '2023-12-08 15:11:05', 1),
(21, '::1', 'mrmousker73@gmail.com', 7, '2023-12-09 07:16:52', 1),
(22, '::1', 'mrmousker73@gmail.com', 7, '2023-12-09 11:47:54', 1),
(23, '::1', 'mrmousker73@gmail.com', 7, '2023-12-09 15:06:22', 1),
(24, '::1', 'mrmousker73@gmail.com', 7, '2023-12-09 15:11:46', 1),
(25, '::1', 'mrmousker73@gmail.com', 7, '2023-12-10 01:05:37', 1),
(26, '::1', 'mrmousker73@gmail.com', 7, '2023-12-10 01:05:40', 1),
(27, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-10 01:07:52', 1),
(28, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-10 09:18:50', 1),
(29, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-10 12:39:38', 1),
(30, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-11 14:06:18', 1),
(31, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-13 02:13:15', 1),
(32, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-13 13:44:35', 1),
(33, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-13 13:48:19', 1),
(34, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-13 14:52:46', 1),
(35, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-14 07:36:45', 1),
(36, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-21 06:57:32', 1),
(37, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-21 06:58:57', 1),
(38, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-21 07:33:57', 1),
(39, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-21 12:11:52', 1),
(40, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-26 10:19:58', 1),
(41, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-28 04:31:13', 1),
(42, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-28 06:57:48', 1),
(43, '::1', 'testing', NULL, '2023-12-28 07:06:21', 0),
(44, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-28 07:06:41', 1),
(45, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-28 07:09:36', 1),
(46, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-28 07:14:30', 1),
(47, '::1', 'kuroaprilian73@gmail.com', 9, '2023-12-30 04:06:07', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'mrmousker73@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'b1befa85f184ff8bcbb5221b2f6a2c78', '2023-12-06 11:23:28'),
(2, 'mrmousker73@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '3893011b307c0dd2e2c7bc1178bad191', '2023-12-06 12:15:03'),
(3, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:46:44'),
(4, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:47:34'),
(5, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:47:43'),
(6, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:49:09'),
(7, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:49:29'),
(8, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:49:43'),
(9, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:49:56'),
(10, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:50:09'),
(11, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:50:36'),
(12, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '', '2023-12-07 00:51:02'),
(13, 'kuroaprilian73@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', ' 8bf8695aa28a595a110df3621592341b', '2023-12-28 07:07:53'),
(14, 'kuroaprilian73@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', ' 8bf8695aa28a595a110df3621592341b', '2023-12-28 07:08:02'),
(15, 'kuroaprilian73@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', ' 8bf8695aa28a595a110df3621592341b', '2023-12-28 07:08:21'),
(16, 'kuroaprilian73@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', ' 8bf8695aa28a595a110df3621592341b', '2023-12-28 07:08:40'),
(17, 'kuroaprilian73@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', ' 8bf8695aa28a595a110df3621592341b', '2023-12-28 07:08:57'),
(18, 'kuroaprilian73@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', '8bf8695aa28a595a110df3621592341b', '2023-12-28 07:09:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_genre`
--

CREATE TABLE `detail_genre` (
  `id_detail` int NOT NULL,
  `id_anime` int UNSIGNED NOT NULL,
  `id_genre` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_genre`
--

INSERT INTO `detail_genre` (`id_detail`, `id_anime`, `id_genre`) VALUES
(4, 34, 1),
(5, 34, 2),
(6, 34, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1701767399, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anime`
--

CREATE TABLE `tbl_anime` (
  `id_anime` int UNSIGNED NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `rating` float(3,2) DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `file_video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `file_gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_anime`
--

INSERT INTO `tbl_anime` (`id_anime`, `judul`, `deskripsi`, `rating`, `tahun`, `file_video`, `file_gambar`, `created_at`, `updated_at`) VALUES
(34, 'naruto', 'ninja', 1.23, 1234, 'naruto_2.mp4', 'Screenshot 2023-12-30 014806.png', '2023-12-30 05:50:37', '2023-12-30 05:50:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `id_genre` int UNSIGNED NOT NULL,
  `genre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_genre`
--

INSERT INTO `tbl_genre` (`id_genre`, `genre`) VALUES
(1, 'comedy'),
(2, 'action'),
(3, 'shounen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'kuroaprilian73@gmail.com', 'admin', '$2y$10$BvCzIodque5gryORoz65ueYxlDS9Hsmz6VzpsuUr01UsIDBOaWOea', NULL, '2023-12-28 07:09:23', NULL, NULL, NULL, NULL, 1, 0, '2023-12-10 01:07:44', '2023-12-28 07:09:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `detail_genre`
--
ALTER TABLE `detail_genre`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `anime` (`id_anime`),
  ADD KEY `genre` (`id_genre`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_anime`
--
ALTER TABLE `tbl_anime`
  ADD PRIMARY KEY (`id_anime`);

--
-- Indeks untuk tabel `tbl_genre`
--
ALTER TABLE `tbl_genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_genre`
--
ALTER TABLE `detail_genre`
  MODIFY `id_detail` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_anime`
--
ALTER TABLE `tbl_anime`
  MODIFY `id_anime` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `id_genre` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_genre`
--
ALTER TABLE `detail_genre`
  ADD CONSTRAINT `anime` FOREIGN KEY (`id_anime`) REFERENCES `tbl_anime` (`id_anime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genre` FOREIGN KEY (`id_genre`) REFERENCES `tbl_genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

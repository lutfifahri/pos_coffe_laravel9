-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2022 pada 14.21
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpesanan`
--

CREATE TABLE `detailpesanan` (
  `id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `namaKategori` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `namaKategori`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', '2022-11-15 05:00:54', '2022-11-15 05:00:54'),
(2, 'Non Coffee', '2022-11-15 05:01:00', '2022-11-15 05:01:00'),
(3, 'Traditional Coffee', '2022-11-15 05:01:10', '2022-11-15 05:01:10'),
(4, 'Snack', '2022-11-15 05:01:19', '2022-11-15 05:01:19'),
(12, 'Makanan Ringan', '2022-12-08 01:31:55', '2022-12-08 01:32:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `kodeMeja` char(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id`, `kodeMeja`, `created_at`, `updated_at`) VALUES
(1, 'A01', '2022-11-15 05:01:46', '2022-11-15 05:01:46'),
(2, 'A02', '2022-11-15 05:01:52', '2022-11-15 05:01:52'),
(3, 'A03', '2022-11-15 05:01:57', '2022-11-15 05:01:57'),
(4, 'B01', '2022-11-15 05:02:07', '2022-11-15 05:02:07'),
(5, 'B02', '2022-11-15 05:02:13', '2022-11-15 05:02:13'),
(6, 'B03', '2022-11-15 05:02:19', '2022-11-15 05:02:19'),
(7, 'C01', '2022-11-15 05:02:26', '2022-11-15 05:02:26'),
(8, 'C02', '2022-11-15 05:02:32', '2022-11-15 05:02:32'),
(9, 'C03', '2022-11-15 05:02:38', '2022-11-15 05:02:38'),
(16, 'C04', '2022-12-08 01:32:17', '2022-12-08 01:32:17'),
(17, 'D01', NULL, NULL),
(18, 'D02', NULL, NULL),
(19, 'D03', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `namaMenu` varchar(105) NOT NULL,
  `status` varchar(45) NOT NULL,
  `harga` int(15) NOT NULL,
  `stok` int(15) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `foto` varchar(145) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `namaMenu`, `status`, `harga`, `stok`, `kategori_id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Coffee Milk', 'Ready', 10000, 18, 1, 'foto-Coffee Milk.jpg', '2022-11-15 05:04:01', NULL),
(2, 'Coffee Latte', 'Waiting List', 14000, 20, 1, 'foto-Coffee Latte.jpg', '2022-11-15 05:04:35', NULL),
(3, 'Kentang Goreng', 'Waiting List', 10000, 12, 4, 'foto-Kentang Goreng.jpg', '2022-11-15 05:05:02', NULL),
(4, 'Es Lemon Tea', 'Ready', 8000, 5, 2, 'foto-Es Lemon Tea.jpg', '2022-11-15 05:05:36', NULL),
(5, 'Coffee Tubruk', 'Waiting List', 7000, 6, 3, 'foto-Coffee Tubruk.jpg', '2022-11-15 05:06:08', '2022-11-21 00:08:38'),
(16, 'Sandwich', 'Waiting List', 10000, 15, 12, 'foto-Sandwich.jpg', '2022-11-26 22:36:42', '2022-12-20 22:35:51'),
(19, 'Jus Jeruk', 'Ready', 7000, 12, 2, 'foto-Jus Jeruk.jpg', '2022-12-20 22:35:04', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metodepembayaran`
--

CREATE TABLE `metodepembayaran` (
  `id` int(11) NOT NULL,
  `metodePembayaran` varchar(145) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `metodepembayaran`
--

INSERT INTO `metodepembayaran` (`id`, `metodePembayaran`, `created_at`, `updated_at`) VALUES
(1, 'Cash', NULL, NULL),
(2, 'Dana', NULL, NULL),
(3, 'Ovo', NULL, NULL),
(4, 'Shopee Pay', NULL, NULL),
(5, 'M-Banking', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `statusPembayaran` enum('Sudah Di Konfirmasi','Belum Di Konfirmasi') NOT NULL DEFAULT 'Belum Di Konfirmasi',
  `metodePembayaran` varchar(40) NOT NULL,
  `buktiPembayaran` varchar(225) DEFAULT NULL,
  `pesanan_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 15, 'token', '27306f5e2fdde7d14a8392b1f5b973ca5677c84e65ae2df93eb9335e8ab922a9', '[\"*\"]', '2022-12-13 22:19:14', NULL, '2022-12-13 21:17:38', '2022-12-13 22:19:14'),
(2, 'App\\Models\\User', 15, 'token', 'e48bec8a7682e9cf43279bb07dd7a24c22042f2f38f983231653c6bf0fee8a6f', '[\"*\"]', '2022-12-13 22:19:20', NULL, '2022-12-13 22:18:46', '2022-12-13 22:19:20'),
(3, 'App\\Models\\User', 19, 'token', 'ed68f02098abab5ec95707ada9847ec8ed0140814442b4519b271717cc305db8', '[\"*\"]', NULL, NULL, '2022-12-20 19:51:06', '2022-12-20 19:51:06'),
(4, 'App\\Models\\User', 19, 'token', '3d1080372e1cbfe2866f034ad6784646e19006a79e17c1d81b4cb7941d8d5899', '[\"*\"]', '2022-12-20 19:55:34', NULL, '2022-12-20 19:54:07', '2022-12-20 19:55:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `kodePesanan` char(4) NOT NULL,
  `waktuPesan` datetime NOT NULL,
  `TotalPesan` varchar(45) NOT NULL,
  `TotalHarga` varchar(45) DEFAULT '10000',
  `users_id` int(11) NOT NULL,
  `meja_id` int(11) NOT NULL,
  `menu_id` int(10) NOT NULL,
  `statusPesanan` enum('Pesanan Sedang Di Proses','Pesanan Siap Di Hidangkan') DEFAULT 'Pesanan Sedang Di Proses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(10) NOT NULL,
  `pesan` text NOT NULL,
  `date` datetime NOT NULL,
  `users_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `pesan`, `date`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Coffee sama makanannya enak banget .. Harganya juga ga mahal kok.. The best cafe .. Terima kasih DigiCoffee', '2022-12-09 15:31:16', 1, NULL, NULL),
(2, 'Tempatnya adem, nyaman, dan ponakan isa lari2 disini. Cofe dan makanannya enak sekali.', '2022-12-09 13:33:45', 2, NULL, NULL),
(18, 'Suka banget coffeenya', '2022-12-14 08:23:14', 3, '2022-12-14 01:23:14', NULL),
(23, 'Mantaps Coffeenya', '2022-12-21 02:22:14', 19, '2022-12-20 19:22:14', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `noHP` int(15) NOT NULL,
  `role` enum('Admin','Kasir','Customer') NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `namaLengkap`, `noHP`, `role`, `alamat`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'alfian@gmail.com', 'alfian', 'alfian', 'Andika Alfian', 123456001, 'Kasir', 'Jalan Mawar no 5', 'foto-alfian.jpg', '2022-11-15 12:13:52', '2022-11-15 12:14:21'),
(2, 'ryanr@gmail.com', 'ryan', 'ryan', 'Ryan Ramadhan', 123456002, 'Admin', 'Jalan Karawang', 'foto-ryan.jpg', '2022-11-15 12:15:23', NULL),
(3, 'ganang@gmail.com', 'ganang', 'ganang', 'M Ganang', 123456003, 'Customer', 'Jalan Depok', '', '2022-11-15 12:15:55', NULL),
(4, 'anggi@gmail.com', 'anggi', 'anggi', 'Anggi Ayuning', 123456004, 'Customer', 'Jalan Jakarta Barat', 'foto-anggi.jpg', '2022-11-15 12:16:59', NULL),
(6, 'mawira@gmail.com', 'mawira', 'mawira', 'Mawira Angga', 123456005, 'Customer', 'Jalan Tangerang no 1', '', '2022-11-15 12:18:40', '2022-11-17 02:05:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','Kasir','Customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `isactive` tinyint(1) NOT NULL DEFAULT 1,
  `no_hp` int(100) DEFAULT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `isactive`, `no_hp`, `alamat`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ryan Ramadhan', 'ryan@gmail.com', NULL, '$2y$10$4H5fG5iN.zNABQXMFc6rUeMnSIVxpP1YfUi/RrzPVivfPohwe62S.', 'Admin', 1, 851234501, 'Jalan Karawang', 'foto-Ryan Ramadhan.jpg', NULL, '2022-11-25 19:32:16', '2022-11-25 23:03:26'),
(2, 'Andika Alfian', 'alfian@gmail.com', NULL, '$2y$10$FbLih6B5MhWxEGKjOOKEx.DP1s7iMawXXIWfP3nBxs8tzfuEX39zi', 'Kasir', 1, 851234502, 'Jalan Surabaya', 'foto-Andika Alfian.jpg', NULL, '2022-11-25 20:12:33', '2022-11-25 23:04:56'),
(3, 'Anggi Ayu', 'anggi@gmail.com', NULL, '$2y$10$wOvz6CfPd0sVYEdz5/ZmIOK2zee4pIz.ZJm7hJNehLQCNWz6V0BqK', 'Customer', 1, 123001003, 'Jalan Tangerang', 'foto-Anggi Ayu.jpg', NULL, '2022-11-25 20:44:12', '2022-12-19 01:19:02'),
(4, 'M Ganang', 'ganang@gmail.com', NULL, '$2y$10$YmgG2x8.uZmLYOYTb749Cu2ciVKVkSfJJRUZ6EST92XyLSFmGDBY.', 'Customer', 1, 123001004, 'Jalan Banten', 'foto-Muhammad Ganang.jpg', NULL, '2022-11-25 20:53:38', '2022-11-25 23:05:33'),
(10, 'Mawira Angga', 'mawira@gmail.com', NULL, '$2y$10$k4UUUwfhmmzP8G04CldJrOTwmE9Uy/Z.JxItbunLfvkH1VK/7MTR6', 'Customer', 1, 123001005, 'Jalan Bandung', '', NULL, '2022-11-25 22:59:11', '2022-11-26 21:04:40'),
(19, 'tes', 'tes@gmail.com', NULL, '$2y$10$32vEqOhZoFflopQH/QRu9e38oi4Ck2FpiA9EqbjmQVnDbiJZgYOny', 'Customer', 1, NULL, NULL, NULL, NULL, '2022-12-20 19:21:20', '2022-12-20 19:21:20'),
(20, 'adun', 'adun@gmail.com', NULL, '$2y$10$7SPbY3F6fsn3yWtU4ic97OZkcq2tzGIYuwjxXxRbI1TiMz5uj9vGa', 'Customer', 1, NULL, NULL, NULL, NULL, '2022-12-20 20:12:32', '2022-12-20 20:12:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailpesanan`
--
ALTER TABLE `detailpesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detailPesanan_pesanan1` (`pesanan_id`),
  ADD KEY `fk_detailPesanan_menu1` (`menu_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_menu_kategori1` (`kategori_id`);

--
-- Indeks untuk tabel `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembayaran_user1` (`users_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kodePesanan_UNIQUE` (`kodePesanan`),
  ADD KEY `fk_pesanan_user1` (`users_id`),
  ADD KEY `fk_pesanan_meja1` (`meja_id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailpesanan`
--
ALTER TABLE `detailpesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `meja`
--
ALTER TABLE `meja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailpesanan`
--
ALTER TABLE `detailpesanan`
  ADD CONSTRAINT `fk_detailPesanan_menu1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detailPesanan_pesanan1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu_kategori1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_meja1` FOREIGN KEY (`meja_id`) REFERENCES `meja` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

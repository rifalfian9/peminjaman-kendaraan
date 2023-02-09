-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2023 pada 23.38
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
-- Database: `technical_test`
--

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
-- Struktur dari tabel `kendaraans`
--

CREATE TABLE `kendaraans` (
  `id_kendaraan` bigint(20) UNSIGNED NOT NULL,
  `nama_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terakhir_servis` date NOT NULL,
  `jadwal_servis` date NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kendaraans`
--

INSERT INTO `kendaraans` (`id_kendaraan`, `nama_kendaraan`, `terakhir_servis`, `jadwal_servis`, `stok`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'PAJERO SPORT LAPANGAN', '2025-11-12', '2028-02-10', '10', 'mobil.jpg', NULL, NULL),
(2, 'TRUK BAK MITSUBISHI', '2018-06-09', '2028-02-10', '10', 'mobil.jpg', NULL, NULL),
(4, 'SUZUKI PICKUP', '2018-05-29', '2028-04-14', '15', 'mobil.jpg', NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_08_171131_create_kendaraans_table', 1),
(6, '2023_02_08_173507_create_sopirs_table', 1),
(7, '2023_02_08_173558_create_peminjamen_table', 1);

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
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` bigint(20) UNSIGNED NOT NULL,
  `tanggal_peminjaman` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_kembali` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kendaraan` bigint(20) UNSIGNED NOT NULL,
  `id_sopir` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tanggal_peminjaman`, `tanggal_kembali`, `status`, `id_kendaraan`, `id_sopir`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '2023-02-08 00:00:00', '2023-02-10 00:00:00', 'Disetujui', 1, 1, 3, NULL, NULL),
(2, '2023-02-09 17:07:19', '2023-02-11 00:00:00', 'Dibatalkan', 1, 2, 4, NULL, NULL),
(14, '2023-02-09 17:06:57', '2023-02-10 16:31:00', 'Disetujui', 1, 1, 1, NULL, NULL),
(15, '2023-02-09 19:12:00', '2023-02-24 19:12:00', 'Diproses', 2, 1, 1, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `sopirs`
--

CREATE TABLE `sopirs` (
  `id_sopir` bigint(20) UNSIGNED NOT NULL,
  `nama_sopir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_sopir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sopirs`
--

INSERT INTO `sopirs` (`id_sopir`, `nama_sopir`, `telepon_sopir`, `created_at`, `updated_at`) VALUES
(1, 'SUKARDI', '089976637278', NULL, NULL),
(2, 'BAMBANG ATMOJO', '086769526426', NULL, NULL),
(100, 'admin', '999', NULL, NULL),
(101, 'Sutiaji Edi Pramono', '089765436342', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `divisi`, `posisi`, `alamat`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', '767e955464233667bfd855686a55b352', NULL, NULL),
(3, 'Bimasena Jaya Hadikusuma', 'Lapangan', 'Teknisi', 'Jalan Raya Kasembon Malang', 'bimasena90@gmail.com', 'f67ea7895fcc6c27ad264fa4ec2a2aaf', NULL, NULL),
(4, 'Hadi Fardi kusuma', 'Lapangan', 'Operator', 'Jalan Raya Kluwih Lumajang', 'hadifar69@gmail.com', '3c5aeb0296104fc38d9191ff0a59643b', NULL, NULL),
(5, 'Rifqi Alfiansyah Kamil', 'Lapangan', 'Teknisi Komputer', 'Jl. Melati', 'rifqialfiansyah10@gmail.com', '$2y$10$PX7k.I1/5SlWZtCRmUVg1eHhV8tnE.JCg/yAC.E9ntsxKmf5fyreu', NULL, NULL),
(6, 'Bambang Sutaman', 'Lapangan', 'Teknisi Listrik', 'Jl. Pegagan Timur', 'bambang98@gmail.com', '$2y$10$AGstQNJXB7JjCG7xXTyKNuf5mtOhfHkhCLBtKTBIpCTz6M6q4Jj6C', NULL, NULL),
(7, 'adminbaik', 'admin', 'admin', 'admin', 'admin123@gmail.com', '$2y$10$JRSNGszrmZA0aMoMLMglCe01cqhNMW9WU0pt/AtQHIJBMoy3Vl8Fa', NULL, NULL),
(8, 'bapaknyagalak', 'Lapangan', 'Teknisi Komputer', 'Jl. Pegagan Timur', 'bapaknyagalak10@gmail.com', '$2y$10$f2V0pXFuxOKUmGJYMGw4rOpK9Pu161ltNWwLq3Hf0c7./h08xm89.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kendaraans`
--
ALTER TABLE `kendaraans`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `peminjaman_id_kendaraan_foreign` (`id_kendaraan`),
  ADD KEY `peminjaman_id_sopir_foreign` (`id_sopir`),
  ADD KEY `peminjaman_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sopirs`
--
ALTER TABLE `sopirs`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kendaraans`
--
ALTER TABLE `kendaraans`
  MODIFY `id_kendaraan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sopirs`
--
ALTER TABLE `sopirs`
  MODIFY `id_sopir` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_id_kendaraan_foreign` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraans` (`id_kendaraan`),
  ADD CONSTRAINT `peminjaman_id_sopir_foreign` FOREIGN KEY (`id_sopir`) REFERENCES `sopirs` (`id_sopir`),
  ADD CONSTRAINT `peminjaman_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

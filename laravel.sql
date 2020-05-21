-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2020 pada 08.24
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

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
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `Id` int(50) NOT NULL,
  `Hari` char(50) NOT NULL,
  `Jam` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`Id`, `Hari`, `Jam`) VALUES
(1, '2020-05-20', '02:36:14'),
(2, '2020-04-20', '15:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_31_055044_create_nomor_table', 2),
(5, '2020_02_01_141855_cretae_soal_table', 3),
(6, '2020_02_06_121454_create_usertest_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomor`
--

CREATE TABLE `nomor` (
  `nomor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nomor`
--

INSERT INTO `nomor` (`nomor`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(3, NULL, NULL),
(4, NULL, NULL),
(5, NULL, NULL),
(6, NULL, NULL),
(7, NULL, NULL),
(8, NULL, NULL),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, NULL, NULL),
(15, NULL, NULL),
(16, NULL, NULL),
(17, NULL, NULL),
(18, NULL, NULL),
(19, NULL, NULL),
(20, NULL, NULL),
(21, NULL, NULL),
(22, NULL, NULL),
(23, NULL, NULL),
(24, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `nomor` int(11) NOT NULL,
  `soal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`nomor`, `soal`, `created_at`, `updated_at`) VALUES
(1, '[{\"pilihan\":\"Seniman\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Artis komersial\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"perancangan\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"penata panggung\",\"keym\":\"C\",\"keyl\":\"B\"}]', '2020-05-19 22:44:20', '2020-05-19 22:44:20'),
(2, '[{\"pilihan\":\"Ahli biologi\",\"keym\":\"C\",\"keyl\":\"D\"},{\"pilihan\":\"Insinyur\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Ilmuwan\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Manajer bank\",\"keym\":\"I\",\"keyl\":\"D\"}]', '2020-05-19 22:47:09', '2020-05-19 22:47:09'),
(3, '[{\"pilihan\":\"Sekretaris perusahaan\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Pegawai pamong praja\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Pegawai tata usaha\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"pegawai auransi\",\"keym\":\"D\",\"keyl\":\"S\"}]', '2020-05-19 22:48:20', '2020-05-19 22:48:20'),
(4, '[{\"pilihan\":\"Petugas pengiriman barang\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Petugas arsip\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Petugas pom\",\"keym\":\"B\",\"keyl\":\"C\"},{\"pilihan\":\"Ojek online\",\"keym\":\"D\",\"keyl\":\"B\"}]', '2020-05-19 22:49:31', '2020-05-19 22:49:31'),
(5, '[{\"pilihan\":\"Pemandu wisata\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Pedagang\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Supir\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Supir Pribadi\",\"keym\":\"D\",\"keyl\":\"I\"}]', '2020-05-19 22:50:51', '2020-05-19 22:50:51'),
(6, '[{\"pilihan\":\"Supir transportasi publik\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Seniman jalanan\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Penjaga Kebun\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Penjaga Kebun Binatang\",\"keym\":\"S\",\"keyl\":\"D\"}]', '2020-05-19 22:52:29', '2020-05-19 22:52:29'),
(7, '[{\"pilihan\":\"Pemipaa\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Pemadam kebakaran\",\"keym\":\"C\",\"keyl\":\"S\"},{\"pilihan\":\"Tata udara\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Security\",\"keym\":\"C\",\"keyl\":\"D\"}]', '2020-05-19 22:53:43', '2020-05-19 22:53:43'),
(8, '[{\"pilihan\":\"Security Pabrik\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Penjaga Sell Penjara\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Security system\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Polisi\",\"keym\":\"S\",\"keyl\":\"B\"}]', '2020-05-19 22:55:12', '2020-05-19 22:55:12'),
(9, '[{\"pilihan\":\"Akuntan\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Manajer\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Kasir\",\"keym\":\"B\",\"keyl\":\"D\"},{\"pilihan\":\"Pelayan\",\"keym\":\"S\",\"keyl\":\"C\"}]', '2020-05-19 22:56:41', '2020-05-19 22:56:41'),
(10, '[{\"pilihan\":\"Ahli statistik\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Auditor\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Guru\",\"keym\":\"C\",\"keyl\":\"B\"},{\"pilihan\":\"Penyapu Jalan\",\"keym\":\"D\",\"keyl\":\"B\"}]', '2020-05-19 22:58:40', '2020-05-19 22:58:40'),
(11, '[{\"pilihan\":\"Dokter\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Ahli bedah\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Perawat\",\"keym\":\"B\",\"keyl\":\"C\"},{\"pilihan\":\"Farmasi\",\"keym\":\"C\",\"keyl\":\"B\"}]', '2020-05-19 23:00:26', '2020-05-19 23:00:26'),
(12, '[{\"pilihan\":\"Fisioterapi\",\"keym\":\"S\",\"keyl\":\"I\"},{\"pilihan\":\"Penjaga Pom\",\"keym\":\"D\",\"keyl\":\"C\"},{\"pilihan\":\"Karyawan Swasta\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Kuli\",\"keym\":\"D\",\"keyl\":\"S\"}]', '2020-05-19 23:01:42', '2020-05-19 23:01:42'),
(13, '[{\"pilihan\":\"Tukang Kayu\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Tukang Batu\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Tukang Tambal Ban\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Pedagang\",\"keym\":\"C\",\"keyl\":\"B\"}]', '2020-05-19 23:02:33', '2020-05-19 23:02:33'),
(14, '[{\"pilihan\":\"Ahli Nuklir\",\"keym\":\"B\",\"keyl\":\"C\"},{\"pilihan\":\"Hacker\",\"keym\":\"S\",\"keyl\":\"I\"},{\"pilihan\":\"Progamer\",\"keym\":\"D\",\"keyl\":\"B\"},{\"pilihan\":\"Tata Busana\",\"keym\":\"C\",\"keyl\":\"I\"}]', '2020-05-19 23:03:38', '2020-05-19 23:03:38'),
(15, '[{\"pilihan\":\"Penjaga Toko\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Penjaga Warnet\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Tukang Roti\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Pengusaha\",\"keym\":\"C\",\"keyl\":\"I\"}]', '2020-05-19 23:04:34', '2020-05-19 23:04:34'),
(16, '[{\"pilihan\":\"Tukang Cat\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Seniman\",\"keym\":\"C\",\"keyl\":\"I\"},{\"pilihan\":\"Animator\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"YouTuber\",\"keym\":\"C\",\"keyl\":\"B\"}]', '2020-05-19 23:06:19', '2020-05-19 23:06:19'),
(17, '[{\"pilihan\":\"Penasihat\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Motivator\",\"keym\":\"C\",\"keyl\":\"D\"},{\"pilihan\":\"Tukang Listrik\",\"keym\":\"S\",\"keyl\":\"B\"},{\"pilihan\":\"Electronika\",\"keym\":\"S\",\"keyl\":\"D\"}]', '2020-05-19 23:07:22', '2020-05-19 23:07:22'),
(18, '[{\"pilihan\":\"Pilot\",\"keym\":\"I\",\"keyl\":\"D\"},{\"pilihan\":\"Pemandu Wisata\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Penyanyi\",\"keym\":\"C\",\"keyl\":\"B\"},{\"pilihan\":\"Desain Interior\",\"keym\":\"B\",\"keyl\":\"D\"}]', '2020-05-19 23:08:43', '2020-05-19 23:08:43'),
(19, '[{\"pilihan\":\"Web Developmen\",\"keym\":\"I\",\"keyl\":\"C\"},{\"pilihan\":\"Politikus\",\"keym\":\"D\",\"keyl\":\"C\"},{\"pilihan\":\"Kameramen\",\"keym\":\"D\",\"keyl\":\"B\"},{\"pilihan\":\"Art Jalanan\",\"keym\":\"S\",\"keyl\":\"B\"}]', '2020-05-19 23:09:44', '2020-05-19 23:09:44'),
(20, '[{\"pilihan\":\"Sales\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Penyiar\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"konselor\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"broker\",\"keym\":\"D\",\"keyl\":\"C\"}]', '2020-05-19 23:13:08', '2020-05-19 23:13:08'),
(21, '[{\"pilihan\":\"Pemain musik\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Komponis\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Guru musik\",\"keym\":\"I\",\"keyl\":\"B\"},{\"pilihan\":\"Penikmat musik\",\"keym\":\"D\",\"keyl\":\"B\"}]', '2020-05-19 23:14:28', '2020-05-19 23:14:28'),
(22, '[{\"pilihan\":\"Ahli Seni\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Pemain Drama\",\"keym\":\"S\",\"keyl\":\"C\"},{\"pilihan\":\"Sutradara\",\"keym\":\"B\",\"keyl\":\"C\"},{\"pilihan\":\"Aktor\",\"keym\":\"I\",\"keyl\":\"B\"}]', '2020-05-19 23:15:33', '2020-05-19 23:15:33'),
(23, '[{\"pilihan\":\"Pembawa Acara\",\"keym\":\"S\",\"keyl\":\"B\"},{\"pilihan\":\"Pembawa Berita\",\"keym\":\"I\",\"keyl\":\"D\"},{\"pilihan\":\"Desainer\",\"keym\":\"S\",\"keyl\":\"B\"},{\"pilihan\":\"Penjahit\",\"keym\":\"D\",\"keyl\":\"C\"}]', '2020-05-19 23:17:24', '2020-05-19 23:17:24'),
(24, '[{\"pilihan\":\"Ahli Agama\",\"keym\":\"S\",\"keyl\":\"D\"},{\"pilihan\":\"Chef\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Band\",\"keym\":\"C\",\"keyl\":\"I\"},{\"pilihan\":\"Gamers\",\"keym\":\"C\",\"keyl\":\"B\"}]', '2020-05-19 23:22:21', '2020-05-19 23:22:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$xuhF4KSmF43d8HdS8LEBU.oZCsvTEc.QmQex/l45gRtLsUSDSUVum', '3n03Y1LqNUk89Bf9m15Vv8Gy5QCQRp4WSqwUNkKIA8E0E5DL56Gg3SuKQKmM', '2020-01-30 21:07:45', '2020-01-30 21:07:45'),
(2, 'disc', 'disc@gmail.com', NULL, 'disc', 'qFz6lLx49ZjAiSeEB5OHW1w0Fti9D2pIqC5APcvXUVK2GPLVBJ', '2020-02-06 20:47:12', '2020-02-06 20:47:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usertest`
--

CREATE TABLE `usertest` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_kel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dm` int(11) NOT NULL,
  `im` int(11) NOT NULL,
  `sm` int(11) NOT NULL,
  `cm` int(11) NOT NULL,
  `bm` int(11) NOT NULL,
  `dl` int(11) NOT NULL,
  `il` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `cl` int(11) NOT NULL,
  `bl` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `usertest`
--

INSERT INTO `usertest` (`id`, `nama`, `usia`, `email`, `j_kel`, `dm`, `im`, `sm`, `cm`, `bm`, `dl`, `il`, `sl`, `cl`, `bl`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 5, 7, 2, 4, 6, 9, 4, 4, 3, 4, '2020-02-06 05:31:04', '2020-02-06 05:31:04'),
(2, 'test', '21', 'izzalutfi45@gmail.com', 'Laki-laki', 5, 6, 3, 4, 6, 3, 6, 7, 3, 5, '2020-02-06 09:13:12', '2020-02-06 09:13:12'),
(3, 'Suhardi', '20', 'izzalutfi045@gmail.com', 'Perempuan', 2, 5, 4, 5, 8, 7, 5, 6, 3, 3, '2020-02-06 10:00:20', '2020-02-06 10:00:20'),
(4, 'Suhardi', '30', 'izzalutfi45@gmail.com', 'Laki-laki', 7, 1, 6, 4, 6, 5, 3, 6, 6, 4, '2020-02-09 16:26:45', '2020-02-09 16:26:45'),
(5, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 6, 5, 1, 6, 3, 3, 5, 5, 8, '2020-02-12 12:47:08', '2020-02-12 12:47:08'),
(6, 'Admin', '22', 'admin@example.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-12 17:01:07', '2020-02-12 17:01:07'),
(7, 'coba', '21', 'izzalutfi455@gmail.com', 'Laki-laki', 5, 3, 6, 3, 7, 6, 9, 3, 3, 3, '2020-02-16 20:14:29', '2020-02-16 20:14:29'),
(8, 'coba', '21', 'izzalutfi455@gmail.com', 'Laki-laki', 5, 3, 6, 3, 7, 6, 9, 3, 3, 3, '2020-02-16 20:16:10', '2020-02-16 20:16:10'),
(9, 'coba', '21', 'izzalutfi455@gmail.com', 'Laki-laki', 5, 3, 6, 3, 7, 6, 9, 3, 3, 3, '2020-02-16 20:18:19', '2020-02-16 20:18:19'),
(10, 'coba', '21', 'izzalutfi455@gmail.com', 'Laki-laki', 5, 3, 6, 3, 7, 6, 9, 3, 3, 3, '2020-02-16 20:18:32', '2020-02-16 20:18:32'),
(11, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:33:20', '2020-02-17 19:33:20'),
(12, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:33:21', '2020-02-17 19:33:21'),
(13, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:37:31', '2020-02-17 19:37:31'),
(14, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:38:03', '2020-02-17 19:38:03'),
(15, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:39:14', '2020-02-17 19:39:14'),
(16, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:41:12', '2020-02-17 19:41:12'),
(17, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:41:35', '2020-02-17 19:41:35'),
(18, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:41:45', '2020-02-17 19:41:45'),
(19, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 19:58:24', '2020-02-17 19:58:24'),
(20, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:01:14', '2020-02-17 20:01:14'),
(21, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:01:38', '2020-02-17 20:01:38'),
(22, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:03:26', '2020-02-17 20:03:26'),
(23, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:03:48', '2020-02-17 20:03:48'),
(24, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:04:43', '2020-02-17 20:04:43'),
(25, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:05:38', '2020-02-17 20:05:38'),
(26, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:07:02', '2020-02-17 20:07:02'),
(27, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:14:50', '2020-02-17 20:14:50'),
(28, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:22:20', '2020-02-17 20:22:20'),
(29, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:27:14', '2020-02-17 20:27:14'),
(30, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 20:59:32', '2020-02-17 20:59:32'),
(31, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:04:30', '2020-02-17 21:04:30'),
(32, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:09:20', '2020-02-17 21:09:20'),
(33, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:15:09', '2020-02-17 21:15:09'),
(34, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:15:53', '2020-02-17 21:15:53'),
(35, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:16:04', '2020-02-17 21:16:04'),
(36, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:16:15', '2020-02-17 21:16:15'),
(37, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:22:36', '2020-02-17 21:22:36'),
(38, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:23:44', '2020-02-17 21:23:44'),
(39, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:24:00', '2020-02-17 21:24:00'),
(40, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:24:25', '2020-02-17 21:24:25'),
(41, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:25:59', '2020-02-17 21:25:59'),
(42, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:26:11', '2020-02-17 21:26:11'),
(43, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:26:19', '2020-02-17 21:26:19'),
(44, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:27:30', '2020-02-17 21:27:30'),
(45, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:27:58', '2020-02-17 21:27:58'),
(46, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:31:00', '2020-02-17 21:31:00'),
(47, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:31:19', '2020-02-17 21:31:19'),
(48, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:31:29', '2020-02-17 21:31:29'),
(49, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:31:36', '2020-02-17 21:31:36'),
(50, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:36:17', '2020-02-17 21:36:17'),
(51, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:36:25', '2020-02-17 21:36:25'),
(52, 'Muhammad Izza Lutfi', '21', 'izzalutfi045@gmail.com', 'Laki-laki', 6, 4, 6, 4, 4, 3, 11, 5, 2, 3, '2020-02-17 21:36:32', '2020-02-17 21:36:32'),
(53, 'Alfando', '18', 'alfando@gmail.com', 'Laki-laki', 5, 0, 6, 4, 9, 8, 3, 5, 3, 5, '2020-05-19 21:11:30', '2020-05-19 21:11:30'),
(54, 'Alfando', '18', 'alfando@gmail.com', 'Laki-laki', 5, 0, 6, 4, 9, 8, 3, 5, 3, 5, '2020-05-19 21:20:06', '2020-05-19 21:20:06'),
(55, 'Alfando', '18', 'alfando@gmail.com', 'Laki-laki', 5, 0, 6, 4, 9, 8, 3, 5, 3, 5, '2020-05-19 21:22:42', '2020-05-19 21:22:42'),
(56, 'Alfando', '18', 'alfando@gmail.com', 'Laki-laki', 4, 0, 6, 5, 9, 8, 3, 5, 3, 5, '2020-05-19 21:24:40', '2020-05-19 21:24:40'),
(57, 'Alfando', '18', 'alfando@gmail.com', 'Laki-laki', 5, 0, 6, 4, 9, 8, 3, 5, 3, 5, '2020-05-19 21:44:57', '2020-05-19 21:44:57'),
(58, 'Alfando', '19', 'alfando@gmail.com', 'Laki-laki', 3, 4, 6, 6, 5, 8, 8, 4, 1, 3, '2020-05-19 22:27:07', '2020-05-19 22:27:07'),
(59, 'Alfando', '19', 'alfando@gmail.com', 'Laki-laki', 5, 3, 11, 3, 2, 3, 7, 3, 5, 6, '2020-05-19 23:25:00', '2020-05-19 23:25:00'),
(60, 'Alfando', '19', 'alfando@gmail.com', 'Laki-laki', 5, 3, 10, 4, 2, 3, 8, 3, 5, 5, '2020-05-19 23:36:57', '2020-05-19 23:36:57'),
(61, 'Alfando', '19', 'alfando@gmail.com', 'Laki-laki', 13, 1, 7, 2, 1, 3, 4, 6, 6, 5, '2020-05-19 23:39:40', '2020-05-19 23:39:40'),
(62, 'Alfando', '19', 'alfando@gmail.com', 'Laki-laki', 9, 0, 9, 3, 3, 3, 4, 4, 6, 7, '2020-05-20 04:35:53', '2020-05-20 04:35:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nomor`
--
ALTER TABLE `nomor`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `usertest`
--
ALTER TABLE `usertest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `usertest`
--
ALTER TABLE `usertest`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

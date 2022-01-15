-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2020 pada 05.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feruri`
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
-- Struktur dari tabel `grade`
--

CREATE TABLE `grade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grade_jabatan`
--

CREATE TABLE `grade_jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_jabatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `grade_jabatan`
--

INSERT INTO `grade_jabatan` (`id`, `grade_jabatan`, `created_at`, `updated_at`) VALUES
(1, 7, NULL, NULL),
(2, 8, NULL, NULL),
(3, 9, NULL, NULL),
(4, 10, NULL, NULL),
(5, 11, NULL, NULL),
(6, 12, NULL, NULL),
(7, 13, NULL, NULL),
(8, 15, NULL, NULL),
(9, 18, NULL, NULL),
(10, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_jabatan` bigint(20) NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `kode_jabatan`, `nama_jabatan`, `created_at`, `updated_at`) VALUES
(2, 82, 'DIREKTUR', NULL, NULL),
(3, 0, 'KA SESPER', NULL, '2020-11-28 08:25:27'),
(4, 74, 'KADIV', NULL, NULL),
(5, 73, 'KADIV (Non Struktural)', NULL, NULL),
(6, 55, 'DEPUTI KEPALA DEPARTEMEN', NULL, NULL),
(7, 63, 'KADEP', NULL, NULL),
(8, 53, 'KADEP (Non Struktural)', NULL, NULL),
(9, 44, 'KASEK', NULL, NULL),
(10, 34, 'KASEK (Non Struktural)', NULL, NULL),
(11, 25, 'SEKRETARIS I', NULL, NULL),
(12, 35, 'SEKRETARIS II', NULL, NULL),
(13, 24, 'KAUN', NULL, NULL),
(14, 23, 'KAUN (Non Struktural)', NULL, NULL),
(15, 22, 'PK. ASISTEN KAUN', NULL, NULL),
(16, 45, 'SEKRETARIS III', NULL, NULL),
(18, 12, 'Asisten Operator Mesin Cetak Logam Non Uang dan Uang Logam Luar Negeri  ', NULL, NULL),
(19, 13, 'Junior Teknisi Mekanikal Mesin Produksi Non Uang 2', NULL, NULL),
(20, 14, 'Operator Mesin Penjilidan Masinal Tingkat I', NULL, NULL),
(21, 15, 'Operator Pembuatan Acuan Cetak Tingkat I', NULL, NULL),
(22, 16, 'Operator Mesin Cetak Offset Pita Cukai Tingkat I', NULL, NULL),
(24, 18, 'Operator Mesin Cetak Meterai Tingkat I', NULL, NULL),
(25, 19, 'Operator Mesin Cetak Dokumen Sekuriti Tingkat I', NULL, NULL),
(26, 20, 'Operator Mesin Cetak Logam Non Uang dan Uang Logam Luar Negeri  Tingkat I', NULL, NULL),
(27, 21, 'Operator Mesin Cetak Offset Pita Cukai Tingkat I', NULL, NULL),
(28, 22, 'Operator Mesin Cetak Paspor dan Buku Tingkat I', NULL, NULL),
(29, 27, 'Operator Mesin Cetak Logam Non Uang dan Uang Logam Luar Negeri  Tingkat I', NULL, NULL),
(30, 28, 'Operator Mesin Cetak Uang Kertas Luar Negeri Tingkat I', NULL, NULL),
(31, 25, 'Kepala Kelompok Penyediaan Penghitungan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Pita Cukai', NULL, NULL),
(32, 26, 'Operator Mesin Potong Produk Pita Cukai', NULL, NULL),
(33, 37, 'Senior Petugas Penyediaan Penghitungan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Pita Cukai', NULL, NULL),
(34, 38, 'Operator Pembuatan Acuan Cetak Tingkat III', NULL, NULL),
(35, 36, 'Operator Pembuatan Acuan Cetak Tingkat IV', NULL, NULL),
(36, 39, 'Operator Mesin Potong Produk Pita Cukai', NULL, NULL),
(37, 40, 'Asistan Operator Mesin Potong Produk Pita Cukai', NULL, NULL),
(38, 41, 'Kepala Unit Cetak Meterai', NULL, NULL),
(39, 42, 'Kepala Unit Khazanah Produksi Awal Pita Cukai', NULL, NULL),
(40, 43, 'Kepala Unit Penjilidan Masinal', NULL, NULL),
(41, 46, 'Pengadministrasi Seksi Khazanah Produksi Awal', NULL, NULL),
(42, 47, 'Asisten Operator Mesin Penjilidan Masinal', NULL, NULL),
(44, 49, 'Senior Petugas Pemroses Akhir Produk Pita Cukai MMEA', NULL, NULL),
(45, 50, 'Petugas Pemroses Akhir Produk Pita Cukai MMEA', NULL, NULL),
(46, 51, 'Kepala Unit Verifikasi Produk Pita Cukai MMEA', NULL, NULL),
(47, 52, 'Kepala Unit Cetak Pita Cukai MMEA', NULL, NULL),
(48, 54, 'Kepala Unit Pengelolaan Hasil Cetak Tidak Sempurna (HCTS) dan MMEA', NULL, NULL),
(49, 55, 'Kepala Departemen Persiapan Cetak dan Pemeliharaan Produk Non Uang ', NULL, NULL),
(50, 56, 'Senior Teknisi Mekanikal Mesin Produksi Non Uang ', NULL, NULL),
(51, 57, 'Senior Petugas Pemroses Akhir Produk Pita Cukai HT', NULL, NULL),
(52, 58, 'Petugas Pemroses Akhir Produk Pita Cukai HT', NULL, NULL),
(53, 59, 'Kepala Unit Cetak Pita Cukai HT', NULL, NULL),
(54, 60, 'Kepala Unit Verifikasi Produk Pita Cukai HT', NULL, NULL),
(55, 61, 'Kepala Unit Pengemasan Pita Cukai HT', NULL, NULL),
(56, 62, 'Kepala Kelompok Pengemasan dan Pengelolaan  Produk Pita Cukai Dalam Proses dan Produk Jadi ', NULL, NULL),
(57, 63, 'Kepala Kelompok Pengelola dan Penyimpan Produk Meterai dan Dokumen Sekuriti Dalam Proses dan Produk Jadi ', NULL, NULL),
(58, 64, 'Senior Petugas Pengelola dan Penyimpan Produk Meterai dan Dokumen Sekuriti Dalam Proses dan Produk Jadi ', NULL, NULL),
(59, 65, 'Asisten Operator Mesin Cetak Uang Kertas Luar Negeri ', NULL, NULL),
(60, 67, 'Senior Petugas Pengemasan dan Pengelolaan  Produk Pita Cukai Dalam Proses dan Produk Jadi ', NULL, NULL),
(61, 68, 'Petugas Pengemasan dan Pengelolaan  Produk Pita Cukai Dalam Proses dan Produk Jadi ', NULL, NULL),
(62, 69, 'Petugas Pengelola dan Penyimpan Produk Paspor dan Buku Dalam Proses dan Produk Jadi ', NULL, NULL),
(63, 70, 'Petugas Pengelola dan Penyimpan Produk Meterai dan Dokumen Sekuriti Dalam Proses dan Produk Jadi ', NULL, NULL),
(64, 71, 'Senior Petugas Khazanah Produk  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(65, 72, 'Petugas Verifikasi dan Finishing Produk  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(66, 73, 'Senior Petugas Pengelola dan Penyimpan Produk Paspor dan Buku Dalam Proses dan Produk Jadi \r\n', NULL, NULL),
(67, 74, 'Kepala Kelompok Khazanah Produk  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(68, 75, 'Kepala Unit Awal Cetak  Logam Non Uang dan Uang Logam Luar Negeri ', NULL, NULL),
(69, 76, 'Kepala Unit Khazanah Produk  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(70, 77, 'Kepala Unit Verifikasi dan Finishing Produk  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(71, 78, 'Operator Pembuatan Acuan Cetak Tingkat III', NULL, NULL),
(72, 79, 'Operator Mesin Penjilidan Masinal Tingkat III', NULL, NULL),
(73, 80, 'Operator Mesin Cetak Meterai Tingkat II', NULL, NULL),
(74, 81, 'Operator Mesin Cetak Dokumen Sekuriti Tingkat III', NULL, NULL),
(75, 82, 'Operator Mesin Cetak Uang Kertas Luar Negeri Tingkat III', NULL, NULL),
(76, 83, 'Operator Mesin Cetak Paspor dan Buku Tingkat III', NULL, NULL),
(77, 84, 'Operator Mesin Cetak Dokumen Sekuriti Tingkat II', NULL, NULL),
(79, 86, 'Operator Mesin Cetak Offset Pita Cukai Tingkat II', NULL, NULL),
(80, 87, 'Operator Mesin Penjilidan Masinal Tingkat II', NULL, NULL),
(81, 88, 'Operator Mesin Cetak Meterai Tingkat II', NULL, NULL),
(82, 89, 'Operator Mesin Cetak Uang Kertas Luar Negeri Tingkat II', NULL, NULL),
(83, 91, 'Operator Pembuatan Acuan Cetak Tingkat IV', NULL, NULL),
(84, 92, 'Operator Mesin Cetak Offset Pita Cukai Tingkat IV', NULL, NULL),
(85, 93, 'Operator Mesin Cetak Paspor dan Buku Tingkat IV', NULL, NULL),
(86, 94, 'Operator Mesin Cetak Meterai Tingkat IV', NULL, NULL),
(87, 95, 'Operator Mesin Cetak Dokumen Sekuriti Tingkat IV', NULL, NULL),
(88, 96, 'Operator Mesin Cetak Uang Kertas Luar Negeri Tingkat IV', NULL, NULL),
(91, 99, 'Senior Petugas Pemroses Akhir Produk Paspor dan Buku', NULL, NULL),
(92, 100, 'Kepala Seksi Cetak Paspor dan Buku', NULL, NULL),
(93, 101, 'Kepala Unit Verifikasi Produk Paspor dan Buku', NULL, NULL),
(94, 102, 'Kepala Unit Khazanah Produksi Awal Paspor dan Buku', NULL, NULL),
(95, 103, 'Kepala Departemen Khazanah dan Verifikasi Produk Non Uang', NULL, NULL),
(96, 104, 'Pembuat Blank Logam Non Uang', NULL, NULL),
(97, 105, 'Teknisi Elektrikal Mesin Produksi Non Uang', NULL, NULL),
(99, 107, 'Senior Petugas Pemroses Akhir Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(100, 108, 'Kepala Unit Cetak Uang Kertas Luar Negeri', NULL, NULL),
(101, 109, 'Petugas Pemroses Akhir Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(103, 111, 'Petugas Penerimaan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(104, 112, 'Kepala Unit Verifikasi Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(106, 114, 'Senior Petugas Penyediaan Penghitungan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(108, 116, 'Kepala Kelompok Penyediaan Penghitungan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(109, 117, 'Operator Mesin Potong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(110, 118, 'Kepala Unit Cetak Dokumen Sekuriti', NULL, NULL),
(112, 120, 'Kepala Unit Khazanah Produksi Awal Meterai dan Dokumen Sekuriti', NULL, NULL),
(113, 121, 'Asisten Operator Mesin Cetak Paspor dan Buku ', NULL, NULL),
(114, 122, 'Kepala Seksi Persiapan Cetak ', NULL, NULL),
(115, 123, 'Kepala Seksi Cetak  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(116, 124, 'Kepala Seksi Pemeliharaan Teknik Produksi Non Uang ', NULL, NULL),
(117, 125, 'Kepala Seksi Khazanah Produksi Awal ', NULL, NULL),
(118, 126, 'Kepala Seksi Khazanah Produksi Akhir', NULL, NULL),
(119, 127, 'Kepala Seksi Khazanah dan  Finishing  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(120, 128, 'Kepala Unit Pembuatan Acuan Cetak', NULL, NULL),
(121, 90, 'DIREKTUR UTAMA', NULL, NULL),
(122, 121, 'Asisten Operator Mesin Cetak Offset Pita Cukai\r\n', NULL, NULL),
(123, 122, 'Kepala Unit Cetak Logam Non Uang dan Uang Logam Luar Negeri \r\n', NULL, NULL),
(124, 123, 'Petugas Pengelola dan Penyimpan Produk Paspor dan Buku Dalam Proses dan Produk Jadi \r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `np` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pensiun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mpp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pensiun` tinyint(1) NOT NULL DEFAULT 0,
  `kode_unit_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja_id` bigint(20) UNSIGNED NOT NULL,
  `id_jabatan` bigint(20) UNSIGNED NOT NULL,
  `level_id` bigint(20) UNSIGNED NOT NULL,
  `id_grade_jabatan` bigint(20) UNSIGNED NOT NULL,
  `pangkat_id` bigint(20) UNSIGNED NOT NULL,
  `grade_pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_jabatan` datetime NOT NULL,
  `masa_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawans`
--

INSERT INTO `karyawans` (`id`, `np`, `full_name`, `tanggal_lahir`, `tanggal_masuk`, `tanggal_pensiun`, `tanggal_mpp`, `status_pensiun`, `kode_unit_kerja`, `unit_kerja_id`, `id_jabatan`, `level_id`, `id_grade_jabatan`, `pangkat_id`, `grade_pangkat`, `tmt_jabatan`, `masa_jabatan`, `created_at`, `updated_at`) VALUES
(1, 8931, 'muhmad wildan', '10/16/2013', '11/19/2020', '11/20/2020', '16-Jul-2069', 0, '', 26, 15, 13, 3, 4, '8', '2016-11-25 00:00:00', '', '2020-11-19 02:46:43', '2020-11-20 01:05:53'),
(2, 4567, 'dedi supriadi', '11/25/1964', '11/10/2020', '25-Nov-2020', '25-Aug-2020', 0, '', 7, 4, 2, 1, 2, '8', '2020-11-24 00:00:00', '', '2020-11-20 05:47:14', '2020-11-25 08:02:18'),
(3, 45637, 'roby izhar ramadhan', '11/25/1964', '12/01/2020', '25-Nov-2020', '25-Aug-2020', 0, '', 21, 16, 3, 5, 3, '88', '2017-11-22 00:00:00', '', '2020-11-20 05:50:54', '2020-11-25 08:07:56'),
(4, 8474, 'irgi', '11/30/1965', '11/24/2020', '30-Nov-2021', '30-Aug-2021', 0, '', 28, 16, 12, 3, 3, '8', '2020-11-13 00:00:00', '', '2020-11-20 07:02:17', '2020-11-29 21:42:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_bagan`
--

CREATE TABLE `kode_bagan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_bagan` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`id`, `nama_level`, `created_at`, `updated_at`) VALUES
(1, 'level', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'kadiv', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Kasek', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Kapok', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Kaun', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'OP  I', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'OP II', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'OP IV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Junior', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Senior', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Asop', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Opm', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Adm', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Petugas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Prsek', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Suseku', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(286, '2014_10_12_000000_create_users_table', 1),
(287, '2014_10_12_100000_create_password_resets_table', 1),
(288, '2019_08_19_000000_create_failed_jobs_table', 1),
(290, '2020_10_07_051252_create_pangkats_table', 1),
(291, '2020_10_07_094140_create_units_table', 1),
(292, '2020_10_11_084641_create_levels_table', 1),
(293, '2020_10_11_114145_create_posisi_table', 1),
(295, '2020_10_21_054508_create_kode_bagan_table', 1),
(296, '2020_10_21_054557_create_status_table', 1),
(297, '2020_10_21_054940_create_nomor_sp_table', 1),
(299, '2020_10_21_144114_create_unit_pkwt_table', 1),
(300, '2020_10_22_182806_create_grade_table', 1),
(301, '2020_10_22_183657_create_sertifikasi_table', 1),
(302, '2020_11_10_181124_create_grade_jabatan_table', 1),
(304, '2020_10_06_155235_create_jabatan_table', 3),
(306, '2020_10_11_142704_create_karyawans_table', 4),
(312, '2020_11_15_201847_create_pensiuns_table', 6),
(314, '2020_11_15_070754_create_karyawans_table', 7),
(316, '2020_10_21_055214_create__karyawan_pkwt_table', 9),
(317, '2020_11_21_084631_create_penugasan_table', 10),
(328, '2020_11_23_120753_create_promosi_karyawan_table', 13),
(331, '2020_11_23_155050_create_penilaian_karyawan_table', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomor_sp`
--

CREATE TABLE `nomor_sp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkats`
--

CREATE TABLE `pangkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pangkats`
--

INSERT INTO `pangkats` (`id`, `nama_pangkat`, `created_at`, `updated_at`) VALUES
(1, 'Staff-1 ', NULL, NULL),
(2, 'Asisten Spv', NULL, NULL),
(3, 'Staff-2 ', NULL, NULL),
(4, 'Supervisor', NULL, NULL),
(5, 'Staff-3', NULL, NULL),
(6, 'Staff-4', NULL, NULL),
(7, 'Manager', NULL, NULL),
(8, 'Asisten Manager ', NULL, NULL),
(11, 'sub Manager', NULL, NULL),
(12, 'senior Manager', NULL, NULL);

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
-- Struktur dari tabel `penilaian_karyawan`
--

CREATE TABLE `penilaian_karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_unitKerja` int(11) NOT NULL,
  `Tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ijin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_ijin` int(11) NOT NULL,
  `sertifikasi_lsp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_kedisiplinan` int(11) DEFAULT 0,
  `keterangan_hukuman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Tidak Hukuman',
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `nilai_kepatuhan` int(11) DEFAULT 0,
  `nilai_sikapKerja` int(11) DEFAULT 0,
  `nilai_inisiatif` int(11) DEFAULT 0,
  `status_promosi` tinyint(1) DEFAULT 0,
  `persentase` int(11) DEFAULT 12,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penilaian_karyawan`
--

INSERT INTO `penilaian_karyawan` (`id`, `id_karyawan`, `nama_karyawan`, `id_unitKerja`, `Tahun`, `nilai`, `status_ijin`, `nilai_ijin`, `sertifikasi_lsp`, `no`, `nilai_kedisiplinan`, `keterangan_hukuman`, `keyword`, `nilai_kepatuhan`, `nilai_sikapKerja`, `nilai_inisiatif`, `status_promosi`, `persentase`, `created_at`, `updated_at`) VALUES
(5, 1, 'muhmad wildan', 26, '2018', 'P1', 'Cuti Dokter', 2, 'OP 1', '2', 100, NULL, '-', 100, 100, 100, 0, 100, '2020-11-27 15:05:29', '2020-11-27 15:05:29'),
(6, 2, 'dedi supriadi', 7, '2018', 'P2', 'Rawat Inap', 4, 'OP 2', '3', 100, NULL, '-', 100, 100, 100, 0, 100, '2020-11-27 15:06:16', '2020-11-27 15:06:16'),
(7, 1, 'muhmad wildan', 26, '2018', 'P3', 'Cuti Dokter', 2, 'OP 2', '2', 100, NULL, '-', 100, 100, 100, 0, 100, '2020-11-27 15:06:56', '2020-11-27 15:06:56'),
(8, 2, 'dedi supriadi', 7, '2018', 'P4', 'Cuti Dokter', 13, 'OP 2', '4', 91, 'Tidak ada Hukuman', 'Ringan', 90, 80, 80, 1, 85, '2020-11-28 04:38:08', '2020-11-29 05:17:22'),
(9, 4, 'irgi', 28, '2018', 'P4', 'Cuti Dokter', 14, 'OP 1', '1', 0, 'tidak taat peraturan', 'Berat', 50, 40, 20, 1, 28, '2020-11-29 05:29:57', '2020-11-29 05:29:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiuns`
--

CREATE TABLE `pensiuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `unit_kerja` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `pangkat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `sisa_masaTugas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pensiuns`
--

INSERT INTO `pensiuns` (`id`, `nama`, `unit_kerja`, `pangkat`, `sisa_masaTugas`, `created_at`, `updated_at`) VALUES
(2, 'PARYONO', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Senior Spv (14)', '11', NULL, NULL),
(3, 'SETYO BUDIONO', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '0', NULL, NULL),
(4, 'AGUS SUWARNO', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '12', NULL, NULL),
(5, 'SUYATNO', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '0', NULL, NULL),
(6, 'HERU SANTOSO', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Senior Spv (14)', '4', NULL, NULL),
(7, 'NUROCHMAN', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '3', NULL, NULL),
(8, 'SUPENO BURHANUDIN', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '7', NULL, NULL),
(9, 'UTOYO RAMELAN', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '0', NULL, NULL),
(10, 'IWAN SETIAWAN', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '12', NULL, NULL),
(11, 'R. ERI SUSANTO', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '8', NULL, NULL),
(12, 'SUGIANTO', 'Unit  Cetak Materai ( – 1.2)', 'Supervisor (13)', '9', NULL, NULL),
(13, 'TATA ASTANTARA', 'Unit  Cetak Materai ( – 1.2)', 'Asisten Spv (12)', '2', NULL, NULL),
(14, 'MUHAMAD', 'Unit  Cetak Materai ( – 1.2)', 'Asisten Spv (12)', '4', NULL, NULL),
(15, 'ACHMAD ZAINI', '\"Unit  Cetak Nomor Lini A ( – 1', ' Asisten Spv (12)', '3', '0000-00-00 00:00:00', NULL),
(16, 'BAMBANG ISMANTO', '\"Unit  Cetak Nomor Lini A ( – 1.2.3)\"', ' Senior Spv (14)', '2', '0000-00-00 00:00:00', NULL),
(17, 'HARIMAWAN', '\"Unit  Cetak Nomor Lini A ( – 1.2.3)\"', ' Asisten Spv (12)', '3', '0000-00-00 00:00:00', NULL),
(18, 'ANANG SURYANA', 'Unit  Cetak Paspor dan Buku ( – 1.2)', 'Senior Staff (11)', '5', NULL, NULL),
(19, 'SUMARDI', 'Unit  Cetak Pita Cukai HT ( – 1. 2)', 'Asisten Spv (12)', '5', NULL, NULL),
(20, 'M. RAIS', 'Unit  Cetak Pita Cukai HT ( – 1. 2)', 'Asisten Spv (12)', '7', NULL, NULL),
(21, 'PARDOMUAN S.', 'Unit  Cetak Pita Cukai HT ( – 1. 2)', 'Asisten Spv (12)', '5', NULL, NULL),
(22, 'MUSLIH', 'Unit  Cetak Pita Cukai MMEA', 'Supervisor (13)', '0', NULL, NULL),
(23, 'AGUS TARMONO', 'Unit  Cetak Rata Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '3', NULL, NULL),
(24, 'ASEP HERMAWAN', 'Unit  Cetak Rata Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '9', NULL, NULL),
(25, 'MULYADI ARIEF', 'Unit  Cetak Rata Lini A ( – 1.2. 3)', 'Senior Staff (11)', '0', NULL, NULL),
(26, 'JONI EKO H.', 'Unit  Cetak Uang Kertas Luar Negeri ( 1.2)', 'Asisten Spv (12)', '10', NULL, NULL),
(27, 'SYAMSIR ALAM', 'Unit  Cetak Uang Kertas Luar Negeri ( 1.2)', 'Asisten Spv (12)', '0', NULL, NULL),
(28, 'IRAWAN', 'Unit  Elektrikal Produksi Uang Logam', 'Asisten Spv (12)', '8', NULL, NULL),
(29, 'EKWAN MURTONO', 'Unit  Gudang Area 2', 'Asisten Spv (12)', '2', NULL, NULL),
(30, 'SOIMAN', 'Unit  HRIS', 'Supervisor (13)', '0', NULL, NULL),
(31, 'ANANG KUSPIANTO', 'Unit  Khazanah Pdks Awl Pita Cukai ( – 1. 2)', 'Asisten Spv (12)', '5', NULL, NULL),
(32, 'EDY SUNARTO', 'Unit  Khazanah Pdks Awl Pita Cukai ( – 1. 2)', 'Asisten Spv (12)', '0', NULL, NULL),
(33, 'MAMAN RAHMAN', 'Unit  Mekanikal Produksi Uang Kertas Lini A', 'Asisten Spv (12)', '9', NULL, NULL),
(34, 'DEDI KUSWANDI', 'Unit  Mekanikal Produksi Uang Logam', 'Supervisor (13)', '8', NULL, NULL),
(35, 'SUDIARTO', 'Unit  Opersl dan Pemeliharaan Pengolahan Air Bersih', 'Supervisor (13)', '2', NULL, NULL),
(36, 'HENDRA SUPRIYATNA', 'Unit  Pembuatan Rol ( – 1.2)', 'Supervisor (13)', '8', NULL, NULL),
(37, 'KUNCORO TEGUH W.', 'Unit  Pembuatan Rol ( – 1.2)', 'Supervisor (13)', '0', NULL, NULL),
(38, 'BADRUN', 'Unit  Pemeliharaan Mknkal dan Elektrikal Gedung', 'Supervisor (13)', '2', NULL, NULL),
(39, 'MARYADI', 'Unit  Pengamanan Fisik ( – 1.2.3)', 'Supervisor (13)', '6', NULL, NULL),
(40, 'SUHAERI', 'Unit  Pengamanan Fisik ( – 1.2.3)', 'Asisten Spv (12)', '9', NULL, NULL),
(41, 'SUHARTO', 'Unit  Pengamanan Fisik ( – 1.2.3)', 'Asisten Spv (12)', '4', NULL, NULL),
(42, 'BAMBANG IRIADI', 'Unit  Pengamanan Personil dan Material', 'Asisten Spv (12)', '11', NULL, NULL),
(43, 'MULYONO K.', 'Unit  Pengelolaan Fasilitas', 'Supervisor (13)', '8', NULL, NULL),
(44, 'M. SAEFUDIN', 'Unit  Pengelolaan Hasil Cetak Tidak Sempurna  ( - 1. 2)', 'Supervisor (13)', '6', NULL, NULL),
(45, 'JIPAR MISWANDI', 'Unit  Pengelolaan Hasil Cetak Tidak Sempurna  ( - 1. 2)', 'Supervisor (13)', '10', NULL, NULL),
(46, 'ACHMAD NAWAWI', 'Unit  Penjilidan Masinal ( – 1.2)', 'Asisten Spv (12)', '1', NULL, NULL),
(47, 'DADANG TAUFIK', 'Unit  Penjilidan Masinal ( – 1.2)', 'Asisten Spv (12)', '0', NULL, NULL),
(48, 'SRI WAHYUNI', 'Unit  Penyelesaian Lembar Kertas Uang (LKU) Parsial Lini A (Shift 1.2.3)', 'Supervisor (13)', '3', NULL, NULL),
(49, 'SRI WILUJENG', 'Unit  Penyelesaian Lembar Kertas Uang (LKU) Parsial Lini A (Shift 1.2.3)', 'Asisten Spv (12)', '0', NULL, NULL),
(50, 'SILVA ZEDTIN', 'Unit  Penyelesaian Lembar Kertas Uang (LKU) Parsial Lini A (Shift 1.2.3)', 'Asisten Spv (12)', '2', NULL, NULL),
(51, 'YADI SUDRAJAT', 'Unit  Penyelesaian Masinal Lini A ( – 1.2.3)', 'Asisten Spv (12)', '3', NULL, NULL),
(52, 'ADRIANTO YUNIADI', 'Unit  Penyortiran Lini A ( – 1.2.3)', 'Supervisor (13)', '10', NULL, NULL),
(53, 'A. GATOT PURWOKO', 'Unit  Penyortiran Lini A ( – 1.2.3)', 'Supervisor (13)', '5', NULL, NULL),
(54, 'TARSANA', 'Unit  Penyortiran Lini A ( – 1.2.3)', 'Asisten Spv (12)', '10', NULL, NULL),
(55, 'AGUS KHAIRI', 'Unit  Verifikasi Lembar Kertas Uang Blanko', 'Asisten Spv (12)', '12', NULL, NULL),
(56, 'SITI YUSTI', 'Unit  Verifikasi Lembar Kertas Uang Masinal', 'Asisten Spv (12)', '0', NULL, NULL),
(57, 'WIJIANTI', 'Unit  Verifikasi Produk Paspor dan Buku ( – 1.2)', 'Asisten Spv (12)', '10', NULL, NULL),
(58, 'DEDIH SUPRIADI', 'Unit  WSRT Cetak Uang Kertas Lini A', 'Asisten Spv (12)', '8', NULL, NULL),
(59, 'TEDY SUPRIANDI', 'Unit Cetak Dokumen Sekuriti', 'Supervisor (13)', '2', NULL, NULL),
(60, 'PONIJO', 'Unit Cetak Dokumen Sekuriti', 'Asisten Spv (12)', '6', NULL, NULL),
(61, 'KUSMAYADI', 'Unit Khazanah Produksi Akhir Produk Meterai dan Dokumen Sekuriti (Shift â€“1.2)', 'Asisten Spv (12)', '12', NULL, NULL),
(62, 'ARIF RUSMAN', 'Unit Khazanah Produksi Awal Meterai dan Dokumen Sekuriti (Shift â€“1.2)', 'Supervisor (13)', '8', NULL, NULL),
(63, 'PURNOMO EDI', 'Unit Khazanah Produksi Awal Meterai dan Dokumen Sekuriti (Shift â€“1.2)', 'Asisten Spv (12)', '5', NULL, NULL),
(64, 'KRISWANTO', 'Unit Khazanah Produksi Awal Meterai dan Dokumen Sekuriti (Shift â€“1.2)', 'Supervisor (13)', '5', NULL, NULL),
(65, 'SENCOKO', 'Unit Khazanah Produksi Awal Meterai dan Dokumen Sekuriti (Shift â€“1.2)', 'Asisten Spv (12)', '2', NULL, NULL),
(66, 'TRI WAHYUDI', 'Unit Khazanah Produksi Awal Meterai dan Dokumen Sekuriti (Shift â€“1.2)', 'Asisten Spv (12)', '8', NULL, NULL),
(67, 'SUWARDOYO DWI P.', 'Unit Korektor', 'Supervisor (13)', '6', NULL, NULL),
(68, 'ADHI WICAKSONO', 'Unit Mekanikal Mesin Produksi Non Uang', 'Supervisor (13)', '12', NULL, NULL),
(69, 'A. YULIANTO', 'Unit Pengelolaan LKUTU dan LKS Lini A dan B', 'Asisten Spv (12)', '11', NULL, NULL),
(70, 'SURYADI', 'Unit Pengemasan dan Penyerahan Lini A', 'Asisten Spv (12)', '1', NULL, NULL),
(71, 'SUKARDI', 'Unit Pengemasan dan Penyerahan Lini A', 'Asisten Spv (12)', '6', NULL, NULL),
(72, 'SADUNI', 'Unit Pengemasan dan Penyerahan Lini A', 'Asisten Spv (12)', '11', NULL, NULL),
(73, 'SUHENDI', 'Unit Pengemasan Pita Cukai HT', 'Asisten Spv (12)', '6', NULL, NULL),
(74, 'SURYA DARMA', 'Unit Penghitungan Penyelesaian Cetak (Shift – 1.2)', 'Asisten Spv (12)', '8', NULL, NULL),
(75, 'HERDIYANTO', 'Unit Penghitungan Penyelesaian Cetak (Shift – 1.2)', 'Asisten Spv (12)', '0', NULL, NULL),
(76, 'SUGENG RIYADI', 'Unit Penyediaan Cetak Nomor dan Finishing Lini A (Shift â€“ 1.2.3)', 'Asisten Spv (12)', '6', NULL, NULL),
(77, 'DJUWANA', 'Unit Penyediaan Cetak Nomor dan Finishing Lini A (Shift â€“ 1.2.3)', 'Asisten Spv (12)', '12', NULL, NULL),
(129, 'SAEFUROHMAN', 'Unit  Cetak Dalam Lini A ( – 1.2. 3)', 'Asisten Spv (12)', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penugasan`
--

CREATE TABLE `penugasan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `np` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontrak_ke` int(11) NOT NULL,
  `id_nomorSp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalSp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_adendum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_jeda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisi`
--

CREATE TABLE `posisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi_karyawan`
--

CREATE TABLE `promosi_karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `id_unitKerja` int(10) UNSIGNED NOT NULL,
  `Tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `status_ijin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_ijin` int(11) NOT NULL,
  `sertifikasi_lsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_kedisiplinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_kepatuhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_sikapKerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_inisiatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `units`
--

INSERT INTO `units` (`id`, `kode_unit`, `unit_kerja`, `created_at`, `updated_at`) VALUES
(2, '33C61', 'Unit Mekanikal Mesin Produksi Non Uang', NULL, NULL),
(3, '33C62', 'Unit Elektrikal Mesin Produksi Non Uang', NULL, NULL),
(4, '33C32', '\"Unit Penjilidan Masinal (Shift – 1', '0000-00-00 00:00:00', NULL),
(6, '33C21', '\"Unit Cetak Pita Cukai HT (Shift – 1', '0000-00-00 00:00:00', NULL),
(7, '33C22', '\"Unit Cetak Pita Cukai MMEA (Shift - 1', '0000-00-00 00:00:00', NULL),
(8, '33C32', '\"Unit Penjilidan Masinal (Shift – 1', '0000-00-00 00:00:00', NULL),
(9, '33C41', '\"Unit Cetak Materai (Shift – 1', '0000-00-00 00:00:00', NULL),
(10, '33C42', 'Unit Cetak Dokumen Sekuriti', NULL, NULL),
(11, '33C52', 'Unit Cetak Logam Non Uang dan Uang Logam Luar Negeri ', NULL, NULL),
(12, '33C53', '\"Unit Cetak Uang Kertas Luar Negeri                    (Shift 1', '0000-00-00 00:00:00', NULL),
(13, '33D21', '\"Unit Khazanah Produksi Awal Pita Cukai (Shift - 1', '0000-00-00 00:00:00', NULL),
(19, '33D20', 'Seksi Khazanah Produksi Awal ', NULL, NULL),
(21, '33D14', 'Unit Verifikasi Produk Pita Cukai MMEA', NULL, NULL),
(23, '33D11', 'Unit Verifikasi Produk Pita Cukai HT              ', NULL, NULL),
(26, '33D31', 'Unit Pengemasan Pita Cukai HT', NULL, NULL),
(27, '33D32', '\"Unit Khazanah Produksi  Akhir Paspor dan Buku (Shift –1', '0000-00-00 00:00:00', NULL),
(28, '33D33', '\"Unit Khazanah Produksi Akhir Meterai dan Dokumen Sekuriti (Shift –1', '0000-00-00 00:00:00', NULL),
(30, '33C53', '\"Unit Cetak Uang Kertas Luar Negeri                    (Shift 1', '0000-00-00 00:00:00', NULL),
(33, '33D12', '\"Unit Verifikasi Produk Paspor dan Buku                (Shift – 1', '0000-00-00 00:00:00', NULL),
(34, '33D13', '\"Unit Verifikasi Produk Meterai dan Dokumen Sekuriti (Shift – 1', '0000-00-00 00:00:00', NULL),
(35, '33D22', '\"Unit Khazanah Produksi  Awal Paspor dan Buku (Shift –1', '0000-00-00 00:00:00', NULL),
(36, '33C31', '\"Unit Cetak Paspor dan Buku (Shift – 1', '0000-00-00 00:00:00', NULL),
(37, '0889999', 'test', '2020-11-12 05:24:17', '2020-11-12 05:24:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_pkwt`
--

CREATE TABLE `unit_pkwt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `np` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `np`, `name`, `email`, `level_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 7674, 'wildan', 'wildanmuhamad961@gmail.com', 1, NULL, '$2y$10$qZL8RUqhT0u1yF5eyAGEz.mHLihqZCB8KRaGNHq92y7CX1twtzilq', '5WcNEhMKhib91KcXYKBwJejdQAd4vubrlW3sr6Engn8MFwwxYmtuGgUZ545D', '2020-11-10 21:45:20', '2020-11-10 21:45:20'),
(2, 6558, 'wildan', 'wildan123@gmail.com', 1, NULL, '$2y$10$5bNWGX91omUnwsbEUI8A4eqqsdomWimYZBsDN6QEfU5zJV/jKsLEy', NULL, '2020-11-13 00:04:25', '2020-11-13 00:04:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_karyawan_pkwt`
--

CREATE TABLE `_karyawan_pkwt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `np` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `id_kodeBagan` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grade_jabatan`
--
ALTER TABLE `grade_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawans_unit_kerja_id_foreign` (`unit_kerja_id`),
  ADD KEY `karyawans_level_id_foreign` (`level_id`);

--
-- Indeks untuk tabel `kode_bagan`
--
ALTER TABLE `kode_bagan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nomor_sp`
--
ALTER TABLE `nomor_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pangkats`
--
ALTER TABLE `pangkats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penilaian_karyawan`
--
ALTER TABLE `penilaian_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pensiuns`
--
ALTER TABLE `pensiuns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `promosi_karyawan`
--
ALTER TABLE `promosi_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unit_pkwt`
--
ALTER TABLE `unit_pkwt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `_karyawan_pkwt`
--
ALTER TABLE `_karyawan_pkwt`
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
-- AUTO_INCREMENT untuk tabel `grade`
--
ALTER TABLE `grade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grade_jabatan`
--
ALTER TABLE `grade_jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kode_bagan`
--
ALTER TABLE `kode_bagan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT untuk tabel `nomor_sp`
--
ALTER TABLE `nomor_sp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pangkats`
--
ALTER TABLE `pangkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penilaian_karyawan`
--
ALTER TABLE `penilaian_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pensiuns`
--
ALTER TABLE `pensiuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT untuk tabel `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `promosi_karyawan`
--
ALTER TABLE `promosi_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `unit_pkwt`
--
ALTER TABLE `unit_pkwt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `_karyawan_pkwt`
--
ALTER TABLE `_karyawan_pkwt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD CONSTRAINT `karyawans_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawans_unit_kerja_id_foreign` FOREIGN KEY (`unit_kerja_id`) REFERENCES `units` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

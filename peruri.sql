-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Des 2021 pada 09.18
-- Versi server: 5.7.24
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peruri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_cuti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_cuti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, 80, '2021-02-18 11:23:15', '2021-02-18 11:23:15'),
(2, 70, '2021-02-18 11:23:49', '2021-02-18 11:23:49'),
(3, 60, '2021-02-18 11:23:56', '2021-02-18 11:23:56'),
(4, 55, '2021-02-18 11:24:02', '2021-02-18 11:24:02'),
(5, 75, '2021-02-18 11:24:09', '2021-02-18 11:24:09'),
(6, 90, '2021-02-18 11:24:16', '2021-02-18 11:24:16'),
(7, 55, '2021-02-18 11:24:31', '2021-02-18 11:24:31'),
(8, 95, '2021-02-18 11:24:41', '2021-02-18 11:24:41'),
(9, 100, '2021-02-18 11:24:47', '2021-02-18 11:24:47'),
(10, 77, '2021-02-18 11:24:53', '2021-02-18 11:25:16'),
(11, 87, '2021-02-18 11:25:26', '2021-02-18 11:25:26'),
(12, 67, '2021-02-18 11:25:35', '2021-02-18 11:25:35'),
(29, 54, NULL, NULL);

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
(1, 0, 'Posisi Jabatan', NULL, NULL),
(2, 82, 'DIREKTUR', NULL, NULL),
(3, 91, 'KA SESPER', NULL, NULL),
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
(17, 0, 'PELAKSANA', NULL, NULL),
(18, 12, 'Asisten Operator Mesin Cetak Logam Non Uang dan Uang Logam Luar Negeri  ', NULL, NULL),
(19, 13, 'Junior Teknisi Mekanikal Mesin Produksi Non Uang 2', NULL, NULL),
(20, 14, 'Operator Mesin Penjilidan Masinal Tingkat I', NULL, NULL),
(21, 15, 'Operator Pembuatan Acuan Cetak Tingkat I', NULL, NULL),
(22, 16, 'Operator Mesin Cetak Offset Pita Cukai Tingkat I', NULL, NULL),
(23, 17, 'Operator Mesin Penjilidan Masinal Tingkat I', NULL, NULL),
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
(43, 48, 'Kepala Unit Penjilidan Masinal', NULL, NULL),
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
(66, 73, 'Senior Petugas Pengelola dan Penyimpan Produk Meterai dan Dokumen Sekuriti Dalam Proses dan Produk Jadi ', NULL, NULL),
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
(78, 85, 'Operator Mesin Cetak Uang Kertas Luar Negeri Tingkat III', NULL, NULL),
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
(89, 97, 'Operator Mesin Cetak Offset Pita Cukai Tingkat IV', NULL, NULL),
(90, 98, 'Operator Mesin Cetak Meterai Tingkat IV', NULL, NULL),
(91, 99, 'Senior Petugas Pemroses Akhir Produk Paspor dan Buku', NULL, NULL),
(92, 100, 'Kepala Seksi Cetak Paspor dan Buku', NULL, NULL),
(93, 101, 'Kepala Unit Verifikasi Produk Paspor dan Buku', NULL, NULL),
(94, 102, 'Kepala Unit Khazanah Produksi Awal Paspor dan Buku', NULL, NULL),
(95, 103, 'Kepala Departemen Khazanah dan Verifikasi Produk Non Uang', NULL, NULL),
(96, 104, 'Pembuat Blank Logam Non Uang', NULL, NULL),
(97, 105, 'Teknisi Elektrikal Mesin Produksi Non Uang', NULL, NULL),
(98, 106, 'Pembuat Blank Logam Non Uang', NULL, NULL),
(99, 107, 'Senior Petugas Pemroses Akhir Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(100, 108, 'Kepala Unit Cetak Uang Kertas Luar Negeri', NULL, NULL),
(101, 109, 'Petugas Pemroses Akhir Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(102, 110, 'Senior Petugas Penyediaan Penghitungan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(103, 111, 'Petugas Penerimaan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(104, 112, 'Kepala Unit Verifikasi Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(105, 113, 'Senior Petugas Pemroses Akhir Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(106, 114, 'Senior Petugas Penyediaan Penghitungan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(107, 115, 'Senior Petugas Pemroses Akhir Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(108, 116, 'Kepala Kelompok Penyediaan Penghitungan dan Pengendalian Bahan Baku dan Bahan Penolong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(109, 117, 'Operator Mesin Potong Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(110, 118, 'Kepala Unit Cetak Dokumen Sekuriti', NULL, NULL),
(111, 119, 'Kepala Unit Verifikasi Produk Meterai dan Dokumen Sekuriti', NULL, NULL),
(112, 120, 'Kepala Unit Khazanah Produksi Awal Meterai dan Dokumen Sekuriti', NULL, NULL),
(113, 121, 'Asisten Operator Mesin Cetak Paspor dan Buku ', NULL, NULL),
(114, 122, 'Kepala Seksi Persiapan Cetak ', NULL, NULL),
(115, 123, 'Kepala Seksi Cetak  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(116, 124, 'Kepala Seksi Pemeliharaan Teknik Produksi Non Uang ', NULL, NULL),
(117, 125, 'Kepala Seksi Khazanah Produksi Awal ', NULL, NULL),
(118, 126, 'Kepala Seksi Khazanah Produksi Akhir', NULL, NULL),
(119, 127, 'Kepala Seksi Khazanah dan  Finishing  Logam Non Uang dan Uang Luar Negeri ', NULL, NULL),
(120, 128, 'Kepala Unit Pembuatan Acuan Cetak', NULL, NULL);

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
  `status_pensiun` tinyint(1) NOT NULL DEFAULT '0',
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
(1, 6606, 'Nurul Azizah', '30-Jun-77', '13-Jan-03', '1-Apr-33', '1-Jul-33', 33, '11', 18, 11, 1, 4, 11, '', '0000-00-00 00:00:00', '', NULL, NULL),
(2, 7674, 'Eka Syahroni Sandy', '29-Jul-92', '18-May-18', '1-May-48', '1-Aug-48', 33, '11', 18, 11, 1, 1, 7, '', '0000-00-00 00:00:00', '', NULL, NULL),
(3, 7657, 'Andri Sucipto', '17-May-92', '18-May-18', '1-Mar-48', '1-Jun-48', 33, '11', 18, 11, 1, 1, 7, '', '0000-00-00 00:00:00', '', NULL, NULL),
(4, 7494, 'Nickholas Karo Karo Purba', '10-Sep-94', '1-Jun-15', '1-Jul-50', '1-Oct-50', 33, '2', 19, 9, 2, 1, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(5, 7501, 'Tutur Adi Pratista', '12-Mar-95', '1-Jun-15', '1-Jan-51', '1-Apr-51', 33, '2', 19, 9, 2, 1, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(6, 7484, 'Rendhy Agam Dharma Sena', '10-Sep-95', '1-Jun-15', '1-Jul-51', '1-Oct-51', 33, '3', 19, 9, 2, 1, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(7, 7488, 'Ridwan Kartogi', '12-Apr-95', '1-Jun-15', '1-Feb-51', '1-May-51', 33, '3', 19, 9, 2, 1, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(8, 6143, 'Mardiyanto', '27-Jul-67', '1-Feb-92', '1-May-23', '1-Aug-23', 33, '4', 20, 6, 2, 2, 12, '', '0000-00-00 00:00:00', '', NULL, NULL),
(9, 7761, 'Wahid Ridlo Safaat', '31-Aug-96', '19-Aug-19', '1-Jun-52', '1-Sep-52', 33, '5', 21, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(10, 7156, 'Achmad Salafudin', '6-Jan-79', '1-Jan-13', '1-Nov-34', '1-Feb-35', 33, '6', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(11, 7157, 'Yulianto', '21-Jul-80', '1-Jan-13', '1-May-36', '1-Aug-36', 33, '6', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(12, 7158, 'Dedy Dwimulato', '14-Jan-83', '1-Jan-13', '1-Nov-38', '1-Feb-39', 33, '6', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(13, 7160, 'Ibnu Yusup Priana', '9-Apr-85', '1-Jan-13', '1-Feb-41', '1-May-41', 33, '6', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(14, 7161, 'Indra', '3-Sep-82', '1-Jan-13', '1-Jul-38', '1-Oct-38', 33, '6', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(15, 7163, 'M.E. Saiful Holiq', '28-Mar-84', '1-Jan-13', '1-Jan-40', '1-Apr-40', 33, '6', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(16, 7404, 'Hendra Lesmana', '23-Sep-83', '1-Mar-15', '1-Jul-39', '1-Oct-39', 33, '6', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(17, 7159, 'Yanto Guniawan', '12-Jan-75', '1-Jan-13', '1-Nov-30', '1-Feb-31', 33, '7', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(18, 7403, 'Sadikin', '28-Apr-82', '1-Mar-15', '1-Feb-38', '1-May-38', 33, '7', 22, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(19, 7165, 'Damas Aliet Enggar Nawarsho', '2-Mar-82', '1-Jan-13', '1-Jan-38', '1-Apr-38', 33, '8', 20, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(20, 7166, 'Solihin', '16-Jul-80', '1-Jan-13', '1-May-36', '1-Aug-36', 33, '8', 20, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(21, 7168, 'Tri Haryanto', '14-Feb-77', '1-Jan-13', '1-Dec-32', '1-Mar-33', 33, '8', 20, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(22, 7169, 'Asep Supriyadi', '24-Jul-86', '1-Jan-13', '1-May-42', '1-Aug-42', 33, '8', 20, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(23, 7170, 'Mohamad Noerhadi', '8-Nov-89', '1-Jan-13', '1-Sep-45', '1-Dec-45', 33, '8', 20, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(24, 7406, 'Ika Supriadi', '5-Apr-79', '1-Mar-15', '1-Feb-35', '1-May-35', 33, '8', 20, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(25, 7407, 'Pringgandana', '15-Nov-88', '1-Mar-15', '1-Sep-44', '1-Dec-44', 33, '8', 20, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(26, 7410, 'Akhyarulloh', '6-Jan-89', '1-Mar-15', '1-Nov-44', '1-Feb-45', 33, '8', 20, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(27, 7167, 'Uum Samiludin', '4-May-82', '1-Jan-13', '1-Mar-38', '1-Jun-38', 33, '9', 24, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(28, 7411, 'Muhammad Syahroni', '10-Aug-81', '1-Mar-15', '1-Jun-37', '1-Sep-37', 33, '9', 24, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(29, 7171, 'Rizki Malik Ibrahim', '16-Aug-84', '1-Jan-13', '1-Jun-40', '1-Sep-40', 33, '10', 25, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(30, 7085, 'Wahyu Dwi Prasetyo', '22-Jan-84', '1-Jan-13', '1-Nov-39', '1-Feb-40', 33, '11', 26, 6, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(31, 6993, 'Aris Prihartono', '12-Mar-86', '1-Dec-10', '1-Jan-42', '1-Apr-42', 33, '6', 22, 6, 2, 5, 9, '', '0000-00-00 00:00:00', '', NULL, NULL),
(32, 7002, 'Wijiyana', '1-Feb-77', '1-Dec-10', '1-Dec-32', '1-Mar-33', 33, '57', 28, 6, 2, 5, 9, '', '0000-00-00 00:00:00', '', NULL, NULL),
(33, 6890, 'Bagus Widodo', '19-Dec-85', '1-Dec-10', '1-Oct-41', '1-Jan-42', 33, '11', 26, 6, 2, 5, 9, '', '0000-00-00 00:00:00', '', NULL, NULL),
(34, 7008, 'Zailani', '18-Feb-75', '1-Dec-10', '1-Dec-30', '1-Mar-31', 33, '12', 30, 6, 3, 5, 9, '', '0000-00-00 00:00:00', '', NULL, NULL),
(35, 5867, 'Sagiman', '29-Nov-66', '1-Feb-91', '1-Sep-22', '1-Dec-22', 33, '13', 31, 4, 3, 2, 12, '', '0000-00-00 00:00:00', '', NULL, NULL),
(36, 5363, 'Anang Kuspianto', '13-Jan-65', '1-Sep-84', '1-Nov-20', '1-Feb-21', 33, '13', 32, 12, 2, 2, 12, '', '0000-00-00 00:00:00', '', NULL, NULL),
(37, 5746, 'Ari Wahyudi', '5-Jan-67', '1-May-90', '1-Nov-22', '1-Feb-23', 33, '13', 32, 12, 2, 2, 12, '', '0000-00-00 00:00:00', '', NULL, NULL),
(41, 7179, 'Budi Purwanto', '27-Oct-83', '1-Jan-13', '1-Aug-39', '1-Nov-39', 33, '13', 33, 10, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(42, 7172, 'Tomy Sahupala', '30-Jan-82', '1-Jan-13', '1-Nov-37', '1-Feb-38', 33, '13', 33, 10, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(43, 7453, 'Ahmad Ghifaary', '16-May-92', '1-Mar-15', '1-Mar-48', '1-Jun-48', 33, '13', 33, 10, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(44, 7454, 'Mulyadi', '9-May-90', '1-Mar-15', '1-Mar-46', '1-Jun-46', 33, '13', 33, 10, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(45, 7456, 'Tri Budiono', '19-Aug-92', '1-Mar-15', '1-Jun-48', '1-Sep-48', 33, '13', 33, 10, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(46, 7178, 'Sadar Aman Jaya Wardana', '9-May-79', '1-Jan-13', '1-Mar-35', '1-Jun-35', 33, '13', 33, 10, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(47, 7189, 'Tukky Febianto', '8-Sep-82', '1-Jan-13', '1-Jul-38', '1-Oct-38', 33, '13', 32, 12, 2, 3, 8, '', '0000-00-00 00:00:00', '', NULL, NULL),
(49, 7032, 'Muhamad Nur Rois', '31-May-83', '1-Dec-10', '1-Mar-39', '1-Jun-39', 33, '13', 33, 10, 2, 5, 9, '', '0000-00-00 00:00:00', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan_pkwt`
--

CREATE TABLE `karyawan_pkwt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `np` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `id_kodeBagan` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontrak_ke` int(11) NOT NULL,
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_10_06_155235_create_jabatan_table', 1),
(4, '2020_10_07_051252_create_pangkats_table', 1),
(5, '2020_10_07_094140_create_units_table', 1),
(6, '2020_10_11_084641_create_levels_table', 1),
(7, '2020_10_21_054557_create_status_table', 1),
(8, '2020_10_21_055214_create_karyawan_pkwt_table', 1),
(9, '2020_10_22_182806_create_grade_table', 1),
(10, '2020_11_10_181124_create_grade_jabatan_table', 1),
(11, '2020_11_15_070754_create_karyawans_table', 1),
(12, '2020_11_15_201847_create_pensiuns_table', 1),
(13, '2020_11_21_084631_create_penugasan_table', 1),
(14, '2020_11_23_120753_create_promosi_karyawan_table', 1),
(15, '2020_11_23_155050_create_penilaian_karyawan_table', 1),
(16, '2020_12_02_102210_create_users_table', 1),
(17, '2021_01_14_164820_create_nilai_nki_table', 1),
(18, '2021_01_14_164842_create_cuti_table', 1),
(19, '2021_01_16_092523_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(4, 'App\\User', 4),
(5, 'App\\User', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_nki`
--

CREATE TABLE `nilai_nki` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaiNki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Supervisor ', NULL, NULL),
(2, 'pangkat', NULL, NULL),
(3, 'Asisten Spv', NULL, NULL),
(4, 'Staff-2 ', NULL, NULL),
(5, 'Asisten Spv', NULL, NULL),
(6, 'Staff-3', NULL, NULL),
(7, 'Staff-4', NULL, NULL),
(8, 'Manager', NULL, NULL),
(9, 'Asisten Manager ', NULL, NULL);

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
  `sertifikasi_lsp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_sertifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_kedisiplinan` int(11) DEFAULT '0',
  `keterangan_hukuman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Tidak Hukuman',
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `nilai_kepatuhan` int(11) DEFAULT '0',
  `nilai_sikapKerja` int(11) DEFAULT '0',
  `nilai_inisiatif` int(11) DEFAULT '0',
  `status_promosi` tinyint(1) DEFAULT '0',
  `persentase` int(11) DEFAULT '12',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(2, 'role-create', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(3, 'role-edit', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(4, 'role-delete', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(5, 'karyawanOrganik-list', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(6, 'karyawanOrganik-create', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(7, 'karyawanOrganik-edit', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(8, 'karyawanOrganik-delete', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(9, 'karyawanPkwt-list', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(10, 'karyawanPkwt-create', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(11, 'karyawanPkwt-edit', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(12, 'karyawanPkwt-delete', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(13, 'cutiDokter-list', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(14, 'cutiDokter-create', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(15, 'cutiDokter-edit', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(16, 'cutiDokter-delete', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(17, 'promosiKaryawan', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(18, 'grafikLevel', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(19, 'grafikJabatan', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(20, 'grafikPangkat', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(21, 'grafikPkwt', 'web', '2021-02-18 10:47:39', '2021-02-18 10:47:39'),
(22, 'data-karyawan', 'web', NULL, NULL),
(23, 'informasiGap', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi_karyawan`
--

CREATE TABLE `promosi_karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `id_unitKerja` int(10) UNSIGNED NOT NULL,
  `sertifikasi_lsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_sertifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_kedisiplinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_kepatuhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_sikapKerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_inisiatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'Kadev', 'web', '2021-03-27 12:25:29', '2021-03-27 12:25:29'),
(5, 'Kaun', 'web', '2021-03-27 12:26:54', '2021-03-27 12:26:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 4),
(21, 4),
(22, 4),
(23, 4),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(9, 5),
(22, 5);

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
(1, 'kode_unit', 'unit', NULL, NULL),
(2, '33C61', 'Unit Mekanikal Mesin Produksi Non Uang', NULL, NULL),
(3, '33C62', 'Unit Elektrikal Mesin Produksi Non Uang', NULL, NULL),
(4, '33C32', '\"Unit Penjilidan Masinal (Shift – 1', '0000-00-00 00:00:00', NULL),
(5, '33C11', '\"Unit Pembuatan Acuan Cetak (Shift – 1', '0000-00-00 00:00:00', NULL),
(6, '33C21', '\"Unit Cetak Pita Cukai HT (Shift – 1', '0000-00-00 00:00:00', NULL),
(7, '33C22', '\"Unit Cetak Pita Cukai MMEA (Shift - 1', '0000-00-00 00:00:00', NULL),
(8, '33C32', '\"Unit Penjilidan Masinal (Shift – 1', '0000-00-00 00:00:00', NULL),
(9, '33C41', '\"Unit Cetak Materai (Shift – 1', '0000-00-00 00:00:00', NULL),
(10, '33C42', 'Unit Cetak Dokumen Sekuriti', NULL, NULL),
(11, '33C52', 'Unit Cetak Logam Non Uang dan Uang Logam Luar Negeri ', NULL, NULL),
(12, '33C53', '\"Unit Cetak Uang Kertas Luar Negeri                    (Shift 1', '0000-00-00 00:00:00', NULL),
(13, '33D21', '\"Unit Khazanah Produksi Awal Pita Cukai (Shift - 1', '0000-00-00 00:00:00', NULL),
(14, '33C21', '\"Unit Cetak Pita Cukai HT (Shift – 1', '0000-00-00 00:00:00', NULL),
(15, '33D21', '\"Unit Khazanah Produksi Awal Pita Cukai (Shift - 1', '0000-00-00 00:00:00', NULL),
(16, '33C41', '\"Unit Cetak Materai (Shift – 1', '0000-00-00 00:00:00', NULL),
(17, '33D21', '\"Unit Khazanah Produksi Awal Pita Cukai (Shift - 1', '0000-00-00 00:00:00', NULL),
(18, '33C32', '\"Unit Penjilidan Masinal (Shift – 1', '0000-00-00 00:00:00', NULL),
(19, '33D20', 'Seksi Khazanah Produksi Awal ', NULL, NULL),
(20, '33C32', '\"Unit Penjilidan Masinal (Shift – 1', '0000-00-00 00:00:00', NULL),
(21, '33D14', 'Unit Verifikasi Produk Pita Cukai MMEA', NULL, NULL),
(22, '33C22', '\"Unit Cetak Pita Cukai MMEA (Shift - 1', '0000-00-00 00:00:00', NULL),
(23, '33D11', 'Unit Verifikasi Produk Pita Cukai HT              ', NULL, NULL),
(24, '33C21', '\"Unit Cetak Pita Cukai HT (Shift – 1', '0000-00-00 00:00:00', NULL),
(25, '33D33', '\"Unit Khazanah Produksi Akhir Meterai dan Dokumen Sekuriti (Shift –1', '0000-00-00 00:00:00', NULL),
(26, '33D31', 'Unit Pengemasan Pita Cukai HT', NULL, NULL),
(27, '33D32', '\"Unit Khazanah Produksi  Akhir Paspor dan Buku (Shift –1', '0000-00-00 00:00:00', NULL),
(28, '33D33', '\"Unit Khazanah Produksi Akhir Meterai dan Dokumen Sekuriti (Shift –1', '0000-00-00 00:00:00', NULL),
(29, '33C32', '\"Unit Penjilidan Masinal (Shift – 1', '0000-00-00 00:00:00', NULL),
(30, '33C53', '\"Unit Cetak Uang Kertas Luar Negeri                    (Shift 1', '0000-00-00 00:00:00', NULL),
(31, '33C21', '\"Unit Cetak Pita Cukai HT (Shift – 1', '0000-00-00 00:00:00', NULL),
(32, '33C21', '\"Unit Cetak Pita Cukai HT (Shift – 1', '0000-00-00 00:00:00', NULL),
(33, '33D12', '\"Unit Verifikasi Produk Paspor dan Buku                (Shift – 1', '0000-00-00 00:00:00', NULL),
(34, '33D13', '\"Unit Verifikasi Produk Meterai dan Dokumen Sekuriti (Shift – 1', '0000-00-00 00:00:00', NULL),
(35, '33D22', '\"Unit Khazanah Produksi  Awal Paspor dan Buku (Shift –1', '0000-00-00 00:00:00', NULL),
(36, '33C31', '\"Unit Cetak Paspor dan Buku (Shift – 1', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `np` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `np`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 0, 'kadev', 'admin@mail.com', NULL, '$2y$10$fo5Qikx01FcDueG/0qPus.XzfyU6kTw92kwHQE8BCYDeh7RQskiy.', NULL, '2021-03-27 12:25:30', '2021-03-27 12:25:30'),
(5, 0, 'wildan', 'wildanmuhamad961@gmail.com', NULL, '$2y$10$f35vaG1rxhOqLxlkn7Sx7.xOJZ7dAD1SmYlBNGvHp5bdhATH/EM9S', NULL, '2021-03-27 12:27:20', '2021-03-27 12:27:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `karyawan_pkwt`
--
ALTER TABLE `karyawan_pkwt`
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
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `nilai_nki`
--
ALTER TABLE `nilai_nki`
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
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `promosi_karyawan`
--
ALTER TABLE `promosi_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `karyawan_pkwt`
--
ALTER TABLE `karyawan_pkwt`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `nilai_nki`
--
ALTER TABLE `nilai_nki`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pangkats`
--
ALTER TABLE `pangkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penilaian_karyawan`
--
ALTER TABLE `penilaian_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pensiuns`
--
ALTER TABLE `pensiuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `promosi_karyawan`
--
ALTER TABLE `promosi_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD CONSTRAINT `karyawans_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawans_unit_kerja_id_foreign` FOREIGN KEY (`unit_kerja_id`) REFERENCES `units` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2020 pada 02.06
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relact`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('9n395977vef7aqs54gcp8c7oefbk27j1', '::1', 1589580795, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538303739353b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('h23gqlsvkv1lbepove437qst20hcoqqm', '::1', 1589581119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538313131393b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('50qnd3vvb9j1h08jkkk3i1ero90so4oq', '::1', 1589583368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538333336383b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('qmg6o9vv2v1olapadlg4s8rl7t9kf02b', '::1', 1589583961, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538333936313b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('8p87mrba080l0a2qtqca46e3rg8ppdiu', '::1', 1589584720, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538343732303b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('1orn8v64ati9j211jmcc3sfa9isjpebh', '::1', 1589585104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538353130343b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('0dl9uapfogtu35q1o7bs3oufbsgjh660', '::1', 1589585531, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538353533313b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('in3h5fibbcb2opqolrqh1kddbcsf920r', '::1', 1589585859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538353835393b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('045jo02b3m355gjlqi203lppvk4ea6jp', '::1', 1589586165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538363136353b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('1rm02al964p3d1jmpp6l2foq5diksok7', '::1', 1589586496, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538363439363b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('em38sj8bes65nlkbs15e7srd35mep8on', '::1', 1589586923, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538363932333b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('3946s35gbaj5idi3d1m1pljtf60ifhtk', '::1', 1589587232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538373233323b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b),
('3ieldleoo012hn7j493vhmcm9bcnnsgh', '::1', 1589587400, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538393538373233323b6e616d617c733a343a2267757275223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2234223b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_user`
--

CREATE TABLE `detail_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nomor_induk` varchar(191) NOT NULL,
  `nama_lengkap` varchar(191) DEFAULT NULL,
  `sekolah_id` int(11) NOT NULL,
  `alamat` varchar(191) DEFAULT NULL,
  `no_hp` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_user`
--

INSERT INTO `detail_user` (`id`, `user_id`, `nomor_induk`, `nama_lengkap`, `sekolah_id`, `alamat`, `no_hp`) VALUES
(1, 2, '1607488', 'Fuuuuuu~', 1, 'asdasdas', '0811'),
(2, 3, '160748888', 'Hello world hehe', 1, 'jalan jalan weh', '123123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `akses` varchar(191) NOT NULL,
  `metode` enum('create','read','update','delete') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `code` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `periode` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `guru_id`, `mapel_id`, `code`, `nama`, `periode`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 'pKuQ7o', 'KOM-1C', 2020, '2020-05-15 22:08:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunci_soal`
--

CREATE TABLE `kunci_soal` (
  `id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `pilihan_soal_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunci_soal`
--

INSERT INTO `kunci_soal` (`id`, `soal_id`, `pilihan_soal_id`, `created_at`, `updated_at`) VALUES
(9, 5, 25, '2020-05-15 23:08:04', '0000-00-00 00:00:00'),
(11, 4, 18, '2020-05-15 23:08:45', '0000-00-00 00:00:00'),
(12, 3, 11, '2020-05-15 23:09:07', '0000-00-00 00:00:00'),
(13, 2, 6, '2020-05-15 23:09:25', '0000-00-00 00:00:00'),
(14, 1, 3, '2020-05-15 23:09:45', '0000-00-00 00:00:00'),
(16, 6, 27, '2020-05-15 23:26:10', '0000-00-00 00:00:00'),
(18, 7, 32, '2020-05-15 23:32:11', '0000-00-00 00:00:00'),
(27, 8, 37, '2020-05-15 23:48:53', '0000-00-00 00:00:00'),
(28, 9, 42, '2020-05-15 23:52:10', '0000-00-00 00:00:00'),
(29, 10, 47, '2020-05-15 23:55:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `url` varchar(191) NOT NULL,
  `element` varchar(191) NOT NULL,
  `action` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_answer`
--

CREATE TABLE `log_answer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `pilihan_soal_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_answer_essay`
--

CREATE TABLE `log_answer_essay` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_on_evaluasi`
--

CREATE TABLE `log_on_evaluasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_on_materi`
--

CREATE TABLE `log_on_materi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `percobaan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_on_materi_detail`
--

CREATE TABLE `log_on_materi_detail` (
  `id` int(11) NOT NULL,
  `log_on_materi_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `percobaan_ke` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_mapel`) VALUES
(1, 'Basis Data'),
(2, 'Pemrograman Dasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `konten` varchar(191) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal_buka` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_tutup_tes` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kunci_tes` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `kode`, `kelas_id`, `judul`, `konten`, `status`, `tanggal_buka`, `tanggal_tutup_tes`, `kunci_tes`, `created_at`, `updated_at`) VALUES
(1, 'C4Gpzl', 1, 'Percabangan', '<p><b>Percabangan</b> merupakan sebuah struktur yang digunakan ketika sebuah program memiliki beberapa pilihan jawaban.</p>', 1, '2020-05-15 22:10:02', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `materi_kode` varchar(191) NOT NULL,
  `skor` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan_soal`
--

CREATE TABLE `pilihan_soal` (
  `id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `pilihan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pilihan_soal`
--

INSERT INTO `pilihan_soal` (`id`, `soal_id`, `pilihan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Percabangan adalah kumpulan pilihan yang harus dilakukan dalam menjalankan bahasa pemrogaman', '2020-05-15 22:13:15', '0000-00-00 00:00:00'),
(2, 1, 'Percabangan dalam pemrograman digunakan untuk memecahkan persoalan dengan melakukan pengulangan yang ditentukan', '2020-05-15 22:13:15', '0000-00-00 00:00:00'),
(3, 1, 'Percabangan dalam pemrograman digunakan untuk memecahkan persoalan yang mengambil keputusan dari sekian kondisi yang ada', '2020-05-15 22:13:15', '0000-00-00 00:00:00'),
(4, 1, 'Percabangan adalah suatu struktur yang berelasi antara satu dengan yang lainnya sehingga membentuk sistem yang dinamakan pemrograman', '2020-05-15 22:13:15', '0000-00-00 00:00:00'),
(5, 1, 'Percabangan adalah urutan untuk menyelesaikan suatu masalah yang ditulis secara berurutan', '2020-05-15 22:13:15', '0000-00-00 00:00:00'),
(6, 2, '1 kondisi ', '2020-05-15 22:15:20', '0000-00-00 00:00:00'),
(7, 2, '2 kondisi ', '2020-05-15 22:15:20', '0000-00-00 00:00:00'),
(8, 2, 'Lebih dari 2 kondisi', '2020-05-15 22:15:20', '0000-00-00 00:00:00'),
(9, 2, 'Percabangan bersarang', '2020-05-15 22:15:20', '0000-00-00 00:00:00'),
(10, 2, 'Perulangan', '2020-05-15 22:15:20', '0000-00-00 00:00:00'),
(11, 3, 'if-else (2 perintah)', '2020-05-15 22:18:39', '0000-00-00 00:00:00'),
(12, 3, 'if (1 perintah)', '2020-05-15 22:18:39', '0000-00-00 00:00:00'),
(13, 3, 'switch-case', '2020-05-15 22:18:39', '0000-00-00 00:00:00'),
(14, 3, 'if - else if', '2020-05-15 22:18:39', '0000-00-00 00:00:00'),
(15, 3, 'if bersarang', '2020-05-15 22:18:39', '0000-00-00 00:00:00'),
(16, 4, '1 kondisi', '2020-05-15 22:20:52', '0000-00-00 00:00:00'),
(17, 4, '2 kondisi ', '2020-05-15 22:20:52', '0000-00-00 00:00:00'),
(18, 4, 'Lebih dari 2 kondisi', '2020-05-15 22:20:52', '0000-00-00 00:00:00'),
(19, 4, 'Percabangan bersarang', '2020-05-15 22:20:52', '0000-00-00 00:00:00'),
(20, 4, 'Perulangan', '2020-05-15 22:20:52', '0000-00-00 00:00:00'),
(21, 5, 'Percabangan tunggal', '2020-05-15 23:08:04', '0000-00-00 00:00:00'),
(22, 5, 'Percabangan tanpa syarat', '2020-05-15 23:00:32', '0000-00-00 00:00:00'),
(23, 5, 'Percabangan bertingkat', '2020-05-15 23:00:32', '0000-00-00 00:00:00'),
(24, 5, 'Percabangan ganda', '2020-05-15 23:00:32', '0000-00-00 00:00:00'),
(25, 5, 'Percabangan bersarang', '2020-05-15 23:00:32', '0000-00-00 00:00:00'),
(26, 6, '80', '2020-05-15 23:25:04', '0000-00-00 00:00:00'),
(27, 6, 'A', '2020-05-15 23:25:04', '0000-00-00 00:00:00'),
(28, 6, ' C', '2020-05-15 23:25:04', '0000-00-00 00:00:00'),
(29, 6, 'Error', '2020-05-15 23:25:04', '0000-00-00 00:00:00'),
(30, 6, 'Tidak terjadi proses aksi pada logika percabangan karena bernilai false semua', '2020-05-15 23:25:04', '0000-00-00 00:00:00'),
(31, 7, 'a < b', '2020-05-15 23:32:11', '0000-00-00 00:00:00'),
(32, 7, 'a > b', '2020-05-15 23:32:11', '0000-00-00 00:00:00'),
(33, 7, 'a = b', '2020-05-15 23:32:11', '0000-00-00 00:00:00'),
(34, 7, 'a ≤ b', '2020-05-15 23:32:11', '0000-00-00 00:00:00'),
(35, 7, 'a ≥ b', '2020-05-15 23:32:11', '0000-00-00 00:00:00'),
(36, 8, 'bbm == 1; <br>cout<<”Anda memilih Premium, silakan membayar Rp.”<<harga; <br>harga = 7650;', '2020-05-15 23:48:16', '0000-00-00 00:00:00'),
(37, 8, 'bbm == 1; <br>cout<<”Anda memilih Pertalite, silakan membayar Rp.”<<harga; <br>harga = 6450;', '2020-05-15 23:48:16', '0000-00-00 00:00:00'),
(38, 8, 'bbm == 2; <br>cout<<”Anda memilih Pertamax Turbo, silakan membayar Rp.”<<harga; <br>harga = 9850;', '2020-05-15 23:48:16', '0000-00-00 00:00:00'),
(39, 8, 'bbm == 2; <br>cout<<”Anda memilih Premium, silakan membayar Rp.”<<harga; <br>harga = 7650;', '2020-05-15 23:48:16', '0000-00-00 00:00:00'),
(40, 8, 'bbm == 3; <br>cout<<”Anda memilih Pertalite, silakan membayar Rp.”<<harga; <br>harga = 6450;', '2020-05-15 23:48:16', '0000-00-00 00:00:00'),
(41, 9, 'if(x < 100)<br>{<br> cout<< x; <br>};', '2020-05-15 23:52:10', '0000-00-00 00:00:00'),
(42, 9, 'if(x > 100)<br>{<br> cout<< x; <br>};', '2020-05-15 23:52:10', '0000-00-00 00:00:00'),
(43, 9, 'if(x < 100)<br>{<br> cout<< “100”; <br>};', '2020-05-15 23:52:10', '0000-00-00 00:00:00'),
(44, 9, 'if(x > 100)<br>{<br> cout<< “100”; <br>};', '2020-05-15 23:52:10', '0000-00-00 00:00:00'),
(45, 9, 'if(100 > x)<br>{<br> cout<< x; <br>};', '2020-05-15 23:52:10', '0000-00-00 00:00:00'),
(46, 10, 'if(membawaPayung == true)<br>{<br> hujan(); <br>};', '2020-05-15 23:55:23', '0000-00-00 00:00:00'),
(47, 10, 'if(hujan == true)<br>{<br> membawaPayung(); <br>};', '2020-05-15 23:55:23', '0000-00-00 00:00:00'),
(48, 10, 'if(membawaPayung == false)<br>{<br> hujan(); <br>};', '2020-05-15 23:55:23', '0000-00-00 00:00:00'),
(49, 10, 'if(hujan == false)<br>{<br> membawaPayung(); <br>};', '2020-05-15 23:55:23', '0000-00-00 00:00:00'),
(50, 10, 'if(hujan == true)<br>{<br> membawaJas(); <br>};', '2020-05-15 23:55:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `kode` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nama`, `kode`) VALUES
(1, 'Guru', 'GR'),
(2, 'Siswa', 'SW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama_sekolah`, `alamat`) VALUES
(1, 'SMKN 1 Cimahi', 'Jl. Mahar Martanegara No.48, Utama, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40521');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `materi_kode` varchar(191) NOT NULL,
  `tipe` enum('pg','esai') NOT NULL,
  `pertanyaan` text NOT NULL,
  `bloom` int(11) DEFAULT NULL,
  `bobot` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `materi_kode`, `tipe`, `pertanyaan`, `bloom`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'C4Gpzl', 'pg', '<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;color:black;mso-themecolor:text1;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Pada\r\npemrograman terdapat berbagai struktur kontrol salah satunya adalah struktur\r\nkontrol percabangan. Berikut ini penjelasan yang paling tepat untuk percabangan\r\ndalam pemrograman adalah ...</span>', NULL, 10, '2020-05-15 23:09:45', '0000-00-00 00:00:00'),
(2, 'C4Gpzl', 'pg', '<span lang=\"IN\" style=\"font-size:12.0pt;font-family:\r\n&quot;Times New Roman&quot;,serif;mso-fareast-font-family:Calibri;color:black;mso-themecolor:\r\ntext1;mso-ansi-language:IN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA;\r\nmso-no-proof:yes\">Jika &lt;kondisi&gt; bernilai benar maka </span><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">perintah</span><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:IN;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\"> dikerjakan, sedangkan jika\r\ntidak, maka </span><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;color:black;mso-themecolor:text1;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">perintah</span><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:IN;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\"> tidak dikerjakan dan proses langsung\r\nkeluar dari percabangan. Pernyataan tersebut dapat </span><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">dilaksanakan </span><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:IN;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">dengan menggunakan percabangan ...</span><br>', NULL, 10, '2020-05-15 23:09:25', '0000-00-00 00:00:00'),
(3, 'C4Gpzl', 'pg', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">\"Jika kondisi\r\nyang diperiksa bernilai benar atau terpenuhi maka perintah pertama yang\r\ndilaksanakan dan jika kondisi yang diperiksa bernilai salah maka perintah yang\r\nkedua yang dilaksanakan.”<o:p></o:p></span></p>\r\n\r\n<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Pernyataan di atas akan\r\ndilaksanakan jika menggunakan ...</span>', NULL, 10, '2020-05-15 23:09:07', '0000-00-00 00:00:00'),
(4, 'C4Gpzl', 'pg', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1\">Jika &lt;kondisi1&gt; dicek nilai\r\nkebenarannya. Jika benar, maka dikerjakan </span><span style=\"font-size:12.0pt;\r\nline-height:150%;font-family:&quot;Times New Roman&quot;,serif;color:black;mso-themecolor:\r\ntext1;mso-ansi-language:EN-US\">perintah</span><span lang=\"IN\" style=\"font-size:\r\n12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;color:black;\r\nmso-themecolor:text1\">1. Jika salah, maka dicek nilai kebenaran\r\n&lt;kondisi2&gt;. Jika &lt;kondisi2&gt; benar, maka dikerjakan </span><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">perintah</span><span lang=\"IN\" style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1\">2. Jika tidak</span><span style=\"font-size:\r\n12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;color:black;\r\nmso-themecolor:text1;mso-ansi-language:EN-US\">,</span><span lang=\"IN\" style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1\"> algoritma akan mengecek ke kondisi\r\nberikutnya dengan cara yang sama dengan yang sebelumnya. Terakhir, jika semua\r\nkondisi bernilai salah, maka </span><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;color:black;mso-themecolor:text1;\r\nmso-ansi-language:EN-US\">perintah</span><span lang=\"IN\" style=\"font-size:12.0pt;\r\nline-height:150%;font-family:&quot;Times New Roman&quot;,serif;color:black;mso-themecolor:\r\ntext1\"> yang dikerjakan adalah </span><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;color:black;mso-themecolor:text1;\r\nmso-ansi-language:EN-US\">Perintah</span><span lang=\"IN\" style=\"font-size:12.0pt;\r\nline-height:150%;font-family:&quot;Times New Roman&quot;,serif;color:black;mso-themecolor:\r\ntext1\">(n+1). </span><span style=\"font-size:12.0pt;line-height:150%;font-family:\r\n&quot;Times New Roman&quot;,serif;color:black;mso-themecolor:text1;mso-ansi-language:\r\nEN-US\">Pernyataan tersebut dapat dilaksanakan dengan percabangan </span><span lang=\"IN\" style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1\">...<o:p></o:p></span></p>', NULL, 10, '2020-05-15 23:08:45', '0000-00-00 00:00:00'),
(5, 'C4Gpzl', 'pg', '<font color=\"#000000\" face=\"Times New Roman, serif\">Percabangan yang terdapat dalam percabangan lain merupakan penjelasan dari …</font><br>', NULL, 10, '2020-05-15 23:08:04', '0000-00-00 00:00:00'),
(6, 'C4Gpzl', 'pg', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Perhatikan algoritma di\r\nbawah!<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\"><img src=\"http://prnt.sc/shnl14\"><br></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><v:shapetype id=\"_x0000_t75\" coordsize=\"21600,21600\" o:spt=\"75\" o:preferrelative=\"t\" path=\"m@4@5l@4@11@9@11@9@5xe\" filled=\"f\" stroked=\"f\">\r\n <v:stroke joinstyle=\"miter\">\r\n <v:formulas>\r\n  <v:f eqn=\"if lineDrawn pixelLineWidth 0\">\r\n  <v:f eqn=\"sum @0 1 0\">\r\n  <v:f eqn=\"sum 0 0 @1\">\r\n  <v:f eqn=\"prod @2 1 2\">\r\n  <v:f eqn=\"prod @3 21600 pixelWidth\">\r\n  <v:f eqn=\"prod @3 21600 pixelHeight\">\r\n  <v:f eqn=\"sum @0 0 1\">\r\n  <v:f eqn=\"prod @6 1 2\">\r\n  <v:f eqn=\"prod @7 21600 pixelWidth\">\r\n  <v:f eqn=\"sum @8 21600 0\">\r\n  <v:f eqn=\"prod @7 21600 pixelHeight\">\r\n  <v:f eqn=\"sum @10 21600 0\">\r\n </v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:formulas>\r\n <v:path o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\">\r\n <o:lock v:ext=\"edit\" aspectratio=\"t\">\r\n</o:lock></v:path></v:stroke></v:shapetype><v:shape id=\"Picture_x0020_44\" o:spid=\"_x0000_i1025\" type=\"#_x0000_t75\" style=\"width:222pt;height:192pt;visibility:visible;mso-wrap-style:square\">\r\n <v:imagedata src=\"file:///C:/Users/FITRIR~1/AppData/Local/Temp/msohtmlclip1/01/clip_image001.png\" o:title=\"\">\r\n</v:imagedata></v:shape><span style=\"font-size:12.0pt;line-height:150%;font-family:\r\n&quot;Times New Roman&quot;,serif;color:black;mso-themecolor:text1;mso-ansi-language:\r\nEN-US\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Program tersebut\r\nmenghasilkan output ...<o:p></o:p></span></p>', NULL, 10, '2020-05-15 23:26:10', '0000-00-00 00:00:00'),
(7, 'C4Gpzl', 'pg', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Perhatikan algoritma\r\ndi bawah ini!<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\"><img src=\"http://prnt.sc/shnonj\"><br></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><v:shapetype id=\"_x0000_t75\" coordsize=\"21600,21600\" o:spt=\"75\" o:preferrelative=\"t\" path=\"m@4@5l@4@11@9@11@9@5xe\" filled=\"f\" stroked=\"f\">\r\n <v:stroke joinstyle=\"miter\">\r\n <v:formulas>\r\n  <v:f eqn=\"if lineDrawn pixelLineWidth 0\">\r\n  <v:f eqn=\"sum @0 1 0\">\r\n  <v:f eqn=\"sum 0 0 @1\">\r\n  <v:f eqn=\"prod @2 1 2\">\r\n  <v:f eqn=\"prod @3 21600 pixelWidth\">\r\n  <v:f eqn=\"prod @3 21600 pixelHeight\">\r\n  <v:f eqn=\"sum @0 0 1\">\r\n  <v:f eqn=\"prod @6 1 2\">\r\n  <v:f eqn=\"prod @7 21600 pixelWidth\">\r\n  <v:f eqn=\"sum @8 21600 0\">\r\n  <v:f eqn=\"prod @7 21600 pixelHeight\">\r\n  <v:f eqn=\"sum @10 21600 0\">\r\n </v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:formulas>\r\n <v:path o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\">\r\n <o:lock v:ext=\"edit\" aspectratio=\"t\">\r\n</o:lock></v:path></v:stroke></v:shapetype><v:shape id=\"Picture_x0020_6\" o:spid=\"_x0000_i1025\" type=\"#_x0000_t75\" style=\"width:199.5pt;height:57.75pt;visibility:visible;mso-wrap-style:square\">\r\n <v:imagedata src=\"file:///C:/Users/FITRIR~1/AppData/Local/Temp/msohtmlclip1/01/clip_image001.png\" o:title=\"\">\r\n</v:imagedata></v:shape><span style=\"font-size:12.0pt;line-height:150%;font-family:\r\n&quot;Times New Roman&quot;,serif;color:black;mso-themecolor:text1;mso-ansi-language:\r\nEN-US\"><o:p></o:p></span></p>\r\n\r\n<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Agar kode di atas dapat\r\ndieksekusi dengan benar maka \"statement 1\" seharusnya diisi dengan\r\n...</span>', NULL, 10, '2020-05-15 23:32:11', '0000-00-00 00:00:00'),
(8, 'C4Gpzl', 'pg', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Perhatikan ketentuan\r\nprogram berikut!<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Menu Bahan Bakar\r\nMinyak (BBM)<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">1. Pertamax\r\nTurbo&nbsp; = Rp. 9850/liter<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">2. Pertalite = Rp.\r\n7650/liter<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">3. Premium = Rp.\r\n6450/liter<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Berdasarkan ketentuan\r\ndi atas maka untuk memenuhi statement 1, statement 2, dan statement 3 yang\r\ntepat pada program percabangan di bawah ini adalah ...<br><img src=\"http://prnt.sc/shnq5v\"><br><o:p></o:p></span></p>', NULL, 10, '2020-05-15 23:48:53', '0000-00-00 00:00:00'),
(9, 'C4Gpzl', 'pg', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Perhatikan pernyataan\r\nberikut!<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:-1.55pt;margin-bottom:.0001pt;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Lucida Console&quot;;\r\ncolor:black;mso-themecolor:text1;background:lightgrey;mso-highlight:lightgrey;\r\nmso-ansi-language:EN-US\">Jika nilai x lebih dari 100, maka cetak nilai x</span><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Lucida Console&quot;;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\"><o:p></o:p></span></p>\r\n\r\n<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Penyusunan kode program\r\npercabangan yang benar berdasarkan pernyataan di atas adalah ...</span>', NULL, 10, '2020-05-15 23:41:16', '0000-00-00 00:00:00'),
(10, 'C4Gpzl', 'pg', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Suatu hari seorang\r\nibu hendak pergi ke pasar. Namun ternyata langit tampak mendung. Ibu memutuskan\r\njika hari ini hujan, maka ibu harus membawa payung ketika akan ke pasar.<o:p></o:p></span></p>\r\n\r\n<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Di bawah ini format sintaks <i>if</i> yang sesuai dengan cerita tersebut\r\nadalah …</span>', NULL, 10, '2020-05-15 23:52:43', '0000-00-00 00:00:00'),
(11, 'C4Gpzl', 'esai', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Alex saat ini bekerja\r\ndi dealer penyewaan mobil dan ingin menulis sebuah program yang memungkinkan\r\npengguna untuk memasukkan suhu tempat yang akan dikunjungi. Kemudian program\r\ntersebut merekomendasikan jenis mobil berdasarkan data. Di bawah ini adalah\r\nringkasan dari struktur program yang Alex cari:<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Suhu lebih besar dari\r\n80°F maka disarankan memakai jenis Convertible.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Suhu lebih besar dari\r\n60°F dan kurang dari 80°F disarankan memakai jenis SUV.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Suhu kurang dari 60°F\r\ndisarankan memakai jenis truk.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\"><o:p>&nbsp;</o:p></span></p>\r\n\r\n<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Namun Alex kesulitan untuk\r\nmenulis program tersebut. Jenis struktur percabangan apakah yang harus Alex\r\ngunakan dalam kodenya? Jelaskan alasannya!</span>', NULL, 20, '2020-05-15 23:57:50', '0000-00-00 00:00:00'),
(13, 'C4Gpzl', 'esai', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Perhatikan potongan\r\nprogram di bawah ini!<o:p></o:p></span></p><img src=\"http://prnt.sc/sho1d0\"><p><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;color:black;mso-themecolor:text1;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Apakah\r\nmenurutmu penggunaan struktur percabangan pada program tersebut sudah efektif\r\ndan efisien? Jelaskan!</span><br></p>', NULL, 20, '2020-05-16 00:00:32', '0000-00-00 00:00:00'),
(14, 'C4Gpzl', 'esai', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Buatlah program untuk\r\nmenentukan sebuah bilangan termasuk kelipatan 4 atau bukan!<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Misalnya:<o:p></o:p></span></p>\r\n\r\n<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Pengguna memasukkan angka 12,\r\nmaka outputnya menyatakan bilangan tersebut adalah kelipatan 4</span>', NULL, 20, '2020-05-16 00:01:03', '0000-00-00 00:00:00'),
(15, 'C4Gpzl', 'esai', '<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;color:black;mso-themecolor:text1;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Buatlah\r\nsebuah program percabangan untuk memutuskan seseorang diperbolehkan menonton\r\nsuatu film dengan syarat orang tersebut berusia 18 tahun atau lebih!</span>', NULL, 20, '2020-05-16 00:01:30', '0000-00-00 00:00:00'),
(16, 'C4Gpzl', 'esai', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Rancanglah algoritma\r\nprogram percabangan sesuai dengan ketentuan di bawah ini!<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Program penentu\r\nmakanan hewan:</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"></p><ol><li><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Herbivora</span></li><li><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Karnivora</span></li><li><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Omnivora</span></li></ol><p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Jika pengguna\r\nmemasukkan angka 1 maka outputnya adalah “Tumbuhan”<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n150%\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:EN-US\">Jika pengguna\r\nmemasukkan angka 2 maka outputnya adalah “Daging”<o:p></o:p></span></p>\r\n\r\n<span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCalibri;color:black;mso-themecolor:text1;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA;mso-no-proof:yes\">Jika pengguna memasukkan angka\r\n2 maka outputnya adalah “Tumbuhan atau Daging”</span>', NULL, 20, '2020-05-16 00:03:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(2, 'fuu', 'fuu@fuu.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'siswa', 'siswa@siswa.com', '202cb962ac59075b964b07152d234b70', 2),
(4, 'guru', 'guru@gmail.com', '77e69c137812518e359196bb2f5e9bb9', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kelas`
--

CREATE TABLE `user_kelas` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indeks untuk tabel `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sekolah_id` (`sekolah_id`);

--
-- Indeks untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_id` (`guru_id`),
  ADD KEY `mapel_id` (`mapel_id`);

--
-- Indeks untuk tabel `kunci_soal`
--
ALTER TABLE `kunci_soal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `soal_id` (`soal_id`) USING BTREE,
  ADD KEY `pilihan_soal_id` (`pilihan_soal_id`);

--
-- Indeks untuk tabel `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `log_answer`
--
ALTER TABLE `log_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `soal_id` (`soal_id`),
  ADD KEY `pilihan_soal_id` (`pilihan_soal_id`);

--
-- Indeks untuk tabel `log_answer_essay`
--
ALTER TABLE `log_answer_essay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_answer_essay_ibfk_1` (`soal_id`),
  ADD KEY `log_answer_essay_ibfk_2` (`user_id`);

--
-- Indeks untuk tabel `log_on_evaluasi`
--
ALTER TABLE `log_on_evaluasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `materi_id` (`materi_id`);

--
-- Indeks untuk tabel `log_on_materi`
--
ALTER TABLE `log_on_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `materi_id` (`materi_id`);

--
-- Indeks untuk tabel `log_on_materi_detail`
--
ALTER TABLE `log_on_materi_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_on_materi_id` (`log_on_materi_id`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `materi_kode` (`materi_kode`);

--
-- Indeks untuk tabel `pilihan_soal`
--
ALTER TABLE `pilihan_soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soal_id` (`soal_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_kode` (`materi_kode`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_kelas`
--
ALTER TABLE `user_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kunci_soal`
--
ALTER TABLE `kunci_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_answer`
--
ALTER TABLE `log_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_answer_essay`
--
ALTER TABLE `log_answer_essay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_on_evaluasi`
--
ALTER TABLE `log_on_evaluasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_on_materi`
--
ALTER TABLE `log_on_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_on_materi_detail`
--
ALTER TABLE `log_on_materi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pilihan_soal`
--
ALTER TABLE `pilihan_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_kelas`
--
ALTER TABLE `user_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `detail_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_user_ibfk_2` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD CONSTRAINT `hak_akses_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`mapel_id`) REFERENCES `mata_pelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kunci_soal`
--
ALTER TABLE `kunci_soal`
  ADD CONSTRAINT `kunci_soal_ibfk_1` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kunci_soal_ibfk_2` FOREIGN KEY (`pilihan_soal_id`) REFERENCES `pilihan_soal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log_activity`
--
ALTER TABLE `log_activity`
  ADD CONSTRAINT `log_activity_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `log_answer`
--
ALTER TABLE `log_answer`
  ADD CONSTRAINT `log_answer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `log_answer_ibfk_2` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`),
  ADD CONSTRAINT `log_answer_ibfk_3` FOREIGN KEY (`pilihan_soal_id`) REFERENCES `pilihan_soal` (`id`);

--
-- Ketidakleluasaan untuk tabel `log_answer_essay`
--
ALTER TABLE `log_answer_essay`
  ADD CONSTRAINT `log_answer_essay_ibfk_1` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `log_answer_essay_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log_on_evaluasi`
--
ALTER TABLE `log_on_evaluasi`
  ADD CONSTRAINT `log_on_evaluasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `log_on_evaluasi_ibfk_2` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`id`);

--
-- Ketidakleluasaan untuk tabel `log_on_materi`
--
ALTER TABLE `log_on_materi`
  ADD CONSTRAINT `log_on_materi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `log_on_materi_ibfk_2` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`id`);

--
-- Ketidakleluasaan untuk tabel `log_on_materi_detail`
--
ALTER TABLE `log_on_materi_detail`
  ADD CONSTRAINT `log_on_materi_detail_ibfk_1` FOREIGN KEY (`log_on_materi_id`) REFERENCES `log_on_materi` (`id`);

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`materi_kode`) REFERENCES `materi` (`kode`);

--
-- Ketidakleluasaan untuk tabel `pilihan_soal`
--
ALTER TABLE `pilihan_soal`
  ADD CONSTRAINT `pilihan_soal_ibfk_1` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`materi_kode`) REFERENCES `materi` (`kode`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_kelas`
--
ALTER TABLE `user_kelas`
  ADD CONSTRAINT `user_kelas_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `user_kelas_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

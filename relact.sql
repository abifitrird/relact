-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2020 at 05:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

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
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('vndaihg8fcmlplrn8398uvtnfli0adc1', '127.0.0.1', 1586175092, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137353039323b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('stfnpfr9u7sq9gcgr03ahsd25pfcs4ee', '127.0.0.1', 1586175708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137353730383b),
('2fq9btnjvh9km3mr008q2jvgsd1p0ccs', '127.0.0.1', 1586176078, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137363037383b),
('jpfkuuaj3n7egu3e4f582inlra8k37qc', '127.0.0.1', 1586176591, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137363539313b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('t7gbuuqe4nvedc51ee0s51pg5vj8ohau', '127.0.0.1', 1586178152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137383135323b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('b61imddfl9bb916nuteqp9itd4lthvd8', '127.0.0.1', 1586178453, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137383435333b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('1mu5557e25t008bj7rfmhijkbbarh61l', '127.0.0.1', 1586178896, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137383839363b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('0e5nlrdl385vogl4d0t4hqm9qt5cc05a', '127.0.0.1', 1586179214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137393231343b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('mg5l46s75h0n8dsav531otncqr786nfl', '127.0.0.1', 1586179717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363137393731373b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('t0ptsuscd29okhn9v7lfno07h45tbklr', '127.0.0.1', 1586180029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138303032393b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('d2nvgi35gq5i72n9qtlb7kt3deqbssiv', '127.0.0.1', 1586183019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138333031393b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('qe0o59cr6d34fvlru8l8t7pj5j7fm21c', '127.0.0.1', 1586184508, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138343530383b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('0hamhi32uv6fkeqec99qodugjs3ihpia', '127.0.0.1', 1586184823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138343832333b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('06h715gq9agvjoqrkrtb60ebr48umh6f', '127.0.0.1', 1586185146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138353134363b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('p075mhtc032ib5tvs70rpvg4ejms1jr7', '127.0.0.1', 1586185809, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138353830393b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('247ritvibmkoojt8bkkf1u75rtge804h', '127.0.0.1', 1586186152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138363135323b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('f22oarrid6s8m7qfqmmvb544rfnpvvua', '127.0.0.1', 1586186487, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138363438373b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('h1av3rjr4ccpi3c2i2h6bac0jvl2kasj', '127.0.0.1', 1586186815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138363831353b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('pplflr4kbb71v3g34m8v918dovbtf9a8', '127.0.0.1', 1586187949, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138373934393b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('eaii4q7hdg42dc1e2u09m2kioo9i1v7o', '127.0.0.1', 1586188252, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138383235323b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('p28g48dmmlcbcpov8head9bh00228pid', '127.0.0.1', 1586188616, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138383631363b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('bski6caojgv6nj7rhh9neh4envemvj4r', '127.0.0.1', 1586189184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138393138343b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('37c0l5ujia6mhnm26v5ouvbktoef95lc', '127.0.0.1', 1586189486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138393438363b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('u16l1lqvht60nd5su0ja5uibta92tm7e', '127.0.0.1', 1586189754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363138393438363b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('l3gnjic3liobnd9tf0n49eic6ljrijdi', '127.0.0.1', 1586226718, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363232363731383b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('18mar5id0nhbmsr2cdqa7i0ohgmj9d8e', '127.0.0.1', 1586228527, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363232383532373b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('rn3retujvava81o121l5bfdvefp66elh', '127.0.0.1', 1586228837, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363232383833373b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('djn5uk1pp55jr5673r9op83t8tod2g7f', '127.0.0.1', 1586235712, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363233353731323b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('6ihg8ro8q2h6s2t340p41fs5rp6qumfh', '127.0.0.1', 1586235732, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363233353731323b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b);

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nomor_induk` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `sekolah_id` int(11) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`id`, `user_id`, `nomor_induk`, `nama_lengkap`, `sekolah_id`, `alamat`, `no_hp`) VALUES
(2, 1, '1607672', 'Fitri Ratna Dewi', 1, 'Peundeuy', '081234567890');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `akses` varchar(255) NOT NULL,
  `metode` enum('create','read','update','delete') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `periode` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `guru_id`, `mapel_id`, `code`, `nama`, `periode`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'VQPZUO', 'KOM-1A', 2016, '2020-03-03 07:10:19', '0000-00-00 00:00:00'),
(2, 1, 1, '1cozNP', 'KOM-1C', 2017, '2020-03-03 07:53:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kunci_soal`
--

CREATE TABLE `kunci_soal` (
  `id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `pilihan_soal_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `element` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_answer`
--

CREATE TABLE `log_answer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `pilihan_soal_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_on_evaluasi`
--

CREATE TABLE `log_on_evaluasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_on_materi`
--

CREATE TABLE `log_on_materi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `percobaan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_on_materi_detail`
--

CREATE TABLE `log_on_materi_detail` (
  `id` int(11) NOT NULL,
  `log_on_materi_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `percobaan_ke` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_mapel`) VALUES
(1, 'Basis Data'),
(2, 'Pemrograman Dasar');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal_buka` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_tutup_tes` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kunci_tes` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `kode`, `kelas_id`, `judul`, `konten`, `status`, `tanggal_buka`, `tanggal_tutup_tes`, `kunci_tes`, `created_at`, `updated_at`) VALUES
(2, 'GRyBjP', 1, 'Percabangan', '<p>Lorem ipsum dolor sit amet <b>Lorem ipsum</b>&nbsp;<i>Dolor sit amet</i></p>', 1, '2020-04-06 15:59:13', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `materi_kode` varchar(255) NOT NULL,
  `skor` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_soal`
--

CREATE TABLE `pilihan_soal` (
  `id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `pilihan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`, `kode`) VALUES
(1, 'Guru', 'GR'),
(2, 'Siswa', 'SW');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama_sekolah`, `alamat`) VALUES
(1, 'SMKN 1 Cimahi', 'Jl. Mahar Martanegara No.48, Utama, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40521');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `materi_kode` varchar(255) NOT NULL,
  `tipe` enum('latihan','evaluasi') NOT NULL,
  `pertanyaan` text NOT NULL,
  `bloom` int(11) DEFAULT NULL,
  `bobot` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'fitrird', 'Abifitrird@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(2, 'coba2', 'FRATNADEWI@GMAIL.COM', '912ec803b2ce49e4a541068d495ab570', 2),
(3, 'fuu', 'hello@akhmad.id', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_kelas`
--

CREATE TABLE `user_kelas` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sekolah_id` (`sekolah_id`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_id` (`guru_id`),
  ADD KEY `mapel_id` (`mapel_id`);

--
-- Indexes for table `kunci_soal`
--
ALTER TABLE `kunci_soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soal_id` (`soal_id`),
  ADD KEY `pilihan_soal_id` (`pilihan_soal_id`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `log_answer`
--
ALTER TABLE `log_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `soal_id` (`soal_id`),
  ADD KEY `pilihan_soal_id` (`pilihan_soal_id`);

--
-- Indexes for table `log_on_evaluasi`
--
ALTER TABLE `log_on_evaluasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `materi_id` (`materi_id`);

--
-- Indexes for table `log_on_materi`
--
ALTER TABLE `log_on_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `materi_id` (`materi_id`);

--
-- Indexes for table `log_on_materi_detail`
--
ALTER TABLE `log_on_materi_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_on_materi_id` (`log_on_materi_id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `materi_kode` (`materi_kode`);

--
-- Indexes for table `pilihan_soal`
--
ALTER TABLE `pilihan_soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soal_id` (`soal_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_kode` (`materi_kode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_kelas`
--
ALTER TABLE `user_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kunci_soal`
--
ALTER TABLE `kunci_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_answer`
--
ALTER TABLE `log_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_on_evaluasi`
--
ALTER TABLE `log_on_evaluasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_on_materi`
--
ALTER TABLE `log_on_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_on_materi_detail`
--
ALTER TABLE `log_on_materi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilihan_soal`
--
ALTER TABLE `pilihan_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_kelas`
--
ALTER TABLE `user_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `detail_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `detail_user_ibfk_2` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolah` (`id`);

--
-- Constraints for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD CONSTRAINT `hak_akses_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`mapel_id`) REFERENCES `mata_pelajaran` (`id`);

--
-- Constraints for table `kunci_soal`
--
ALTER TABLE `kunci_soal`
  ADD CONSTRAINT `kunci_soal_ibfk_1` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`),
  ADD CONSTRAINT `kunci_soal_ibfk_2` FOREIGN KEY (`pilihan_soal_id`) REFERENCES `pilihan_soal` (`id`);

--
-- Constraints for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD CONSTRAINT `log_activity_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `log_answer`
--
ALTER TABLE `log_answer`
  ADD CONSTRAINT `log_answer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `log_answer_ibfk_2` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`),
  ADD CONSTRAINT `log_answer_ibfk_3` FOREIGN KEY (`pilihan_soal_id`) REFERENCES `pilihan_soal` (`id`);

--
-- Constraints for table `log_on_evaluasi`
--
ALTER TABLE `log_on_evaluasi`
  ADD CONSTRAINT `log_on_evaluasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `log_on_evaluasi_ibfk_2` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`id`);

--
-- Constraints for table `log_on_materi`
--
ALTER TABLE `log_on_materi`
  ADD CONSTRAINT `log_on_materi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `log_on_materi_ibfk_2` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`id`);

--
-- Constraints for table `log_on_materi_detail`
--
ALTER TABLE `log_on_materi_detail`
  ADD CONSTRAINT `log_on_materi_detail_ibfk_1` FOREIGN KEY (`log_on_materi_id`) REFERENCES `log_on_materi` (`id`);

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`materi_kode`) REFERENCES `materi` (`kode`);

--
-- Constraints for table `pilihan_soal`
--
ALTER TABLE `pilihan_soal`
  ADD CONSTRAINT `pilihan_soal_ibfk_1` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`);

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`materi_kode`) REFERENCES `materi` (`kode`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_kelas`
--
ALTER TABLE `user_kelas`
  ADD CONSTRAINT `user_kelas_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `user_kelas_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2020 at 07:59 PM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('b6qd978rkggnm7oj8gbh8pv7p78aithc', '127.0.0.1', 1588364450, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383336343435303b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('pmsq1rc00bs1f933cag7lcvcr608sr5a', '127.0.0.1', 1588364456, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383336343435363b),
('rotk75gveai0mkm5hvjkrvgd635n0b13', '127.0.0.1', 1588788105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383738383130353b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('v4dikmuafl0g5q7smua21qumfd2cjq32', '127.0.0.1', 1588788475, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383738383437353b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('65f09l96052jpjrkb1t60o8ricgadtsq', '127.0.0.1', 1588788997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383738383939373b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('lj9pasp88mptrg8i9ibhgeg994fv72lr', '127.0.0.1', 1588789310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383738393331303b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('gr1kbv33586r95cqe33aehjkvbdijq3h', '127.0.0.1', 1588789627, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383738393632373b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('a0ec4eiai27cti5u8l5ido3th77ddja5', '127.0.0.1', 1588789930, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383738393933303b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('l071e6mee5vcgdgksnvi4upoa8jo45cd', '127.0.0.1', 1588790779, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383739303737393b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('pr9h39mpbs3p0tm0f6tlramt4lailqu2', '127.0.0.1', 1588791096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383739313039363b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('knfakvl7vq0i6v7sjmout39cral3eqv9', '127.0.0.1', 1588791654, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383739313635343b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b),
('hg7ge411jpplp136s944eecab6v05gi1', '127.0.0.1', 1588791796, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383739313635343b6e616d617c733a333a22667575223b7374617475737c733a353a226c6f67696e223b726f6c657c733a343a2267757275223b757365725f69647c733a313a2233223b);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_answer_essay`
--

CREATE TABLE `log_answer_essay` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `tipe` enum('pg','esai') NOT NULL,
  `pertanyaan` text NOT NULL,
  `bloom` int(11) DEFAULT NULL,
  `bobot` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `materi_kode`, `tipe`, `pertanyaan`, `bloom`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'GRyBjP', 'pg', 'hello world', NULL, 10, '2020-05-06 18:52:52', '0000-00-00 00:00:00'),
(2, 'GRyBjP', 'esai', 'Hello world hehe', NULL, 1, '2020-05-06 19:00:54', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `log_answer_essay`
--
ALTER TABLE `log_answer_essay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_answer_essay_ibfk_1` (`soal_id`),
  ADD KEY `log_answer_essay_ibfk_2` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `log_answer_essay`
--
ALTER TABLE `log_answer_essay`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `log_answer_essay`
--
ALTER TABLE `log_answer_essay`
  ADD CONSTRAINT `log_answer_essay_ibfk_1` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `log_answer_essay_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

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

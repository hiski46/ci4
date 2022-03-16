-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2022 pada 05.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `module`
--

CREATE TABLE `module` (
  `moduleCode` int(11) NOT NULL,
  `module` varchar(75) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleteAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `module`
--

INSERT INTO `module` (`moduleCode`, `module`, `createAt`, `updateAt`, `deleteAt`) VALUES
(1, 'User', '2022-02-26 02:43:35', NULL, NULL),
(2, 'Role', '2022-02-26 02:55:19', NULL, NULL),
(3, 'Role User', '2022-02-26 02:55:19', NULL, NULL),
(4, 'Role Permission', '2022-02-26 02:55:19', NULL, NULL),
(5, 'User Permission', '2022-02-26 02:55:19', NULL, NULL),
(6, 'Permission', '2022-02-28 11:13:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission`
--

CREATE TABLE `permission` (
  `permissionCode` int(11) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `moduleCode` int(11) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleteAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `permission`
--

INSERT INTO `permission` (`permissionCode`, `permission`, `description`, `moduleCode`, `createAt`, `updateAt`, `deleteAt`) VALUES
(1, 'RU', 'See all of user', 1, '2022-02-26 02:53:01', NULL, NULL),
(2, 'CU', 'Create user', 1, '2022-02-26 02:53:01', NULL, NULL),
(3, 'UU', 'Update user', 1, '2022-02-26 02:54:08', NULL, NULL),
(4, 'DU', 'Delete user', 1, '2022-02-26 02:54:08', NULL, NULL),
(5, 'RR', 'See all of role', 2, '2022-02-26 02:53:01', NULL, NULL),
(6, 'CR', 'Create role', 2, '2022-02-26 02:53:01', NULL, NULL),
(7, 'UR', 'Update role', 2, '2022-02-26 02:54:08', NULL, NULL),
(8, 'DR', 'Delete role', 2, '2022-02-26 02:54:08', NULL, NULL),
(10, 'CRU', 'Create role of user', 3, '2022-02-26 02:53:01', NULL, NULL),
(12, 'DRU', 'Delete role of user', 3, '2022-02-26 02:54:08', NULL, NULL),
(13, 'RDRMPU', 'See detail role module permission user', 4, '2022-02-26 02:53:01', '2022-02-28 10:41:59', NULL),
(14, 'CRP', 'Create role permission', 4, '2022-02-26 02:53:01', NULL, NULL),
(16, 'DRP', 'Delete role permission', 4, '2022-02-26 02:54:08', NULL, NULL),
(18, 'CUP', 'Create user permission', 5, '2022-02-26 02:53:01', NULL, NULL),
(20, 'DUP', 'Delete user permission', 5, '2022-02-26 02:54:08', NULL, NULL),
(21, 'RRP', 'See all role permission', 4, '2022-02-26 02:53:01', NULL, NULL),
(22, 'RMP', 'See module permission', 6, '2022-02-28 11:14:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `roleCode` int(11) NOT NULL,
  `role` varchar(75) NOT NULL,
  `type` enum('Master','Public') NOT NULL DEFAULT 'Public',
  `createAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleteAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`roleCode`, `role`, `type`, `createAt`, `updateAt`, `deleteAt`) VALUES
(1, 'Super Admin', 'Master', '2022-02-26 03:06:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_permission`
--

CREATE TABLE `role_permission` (
  `rpCode` int(11) NOT NULL,
  `permissionCode` int(11) NOT NULL,
  `roleCode` int(11) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleteAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role_permission`
--

INSERT INTO `role_permission` (`rpCode`, `permissionCode`, `roleCode`, `createAt`, `updateAt`, `deleteAt`) VALUES
(1, 1, 1, '2022-02-26 03:22:50', NULL, NULL),
(2, 2, 1, '2022-02-26 03:22:50', NULL, NULL),
(3, 3, 1, '2022-02-26 03:22:50', NULL, NULL),
(4, 4, 1, '2022-02-26 03:22:50', NULL, NULL),
(5, 5, 1, '2022-02-26 03:22:50', NULL, NULL),
(6, 6, 1, '2022-02-26 03:22:50', NULL, NULL),
(7, 7, 1, '2022-02-26 03:22:50', NULL, NULL),
(8, 8, 1, '2022-02-26 03:22:50', NULL, NULL),
(10, 10, 1, '2022-02-26 03:22:50', NULL, NULL),
(12, 12, 1, '2022-02-26 03:22:50', NULL, NULL),
(13, 13, 1, '2022-02-26 03:22:50', NULL, NULL),
(14, 14, 1, '2022-02-26 03:22:50', NULL, NULL),
(16, 16, 1, '2022-02-26 03:22:50', NULL, NULL),
(18, 18, 1, '2022-02-26 03:22:50', NULL, NULL),
(20, 20, 1, '2022-02-26 03:22:50', NULL, NULL),
(22, 21, 1, '2022-02-28 10:55:04', NULL, NULL),
(23, 22, 1, '2022-02-28 10:55:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `ruCode` int(11) NOT NULL,
  `userCode` int(11) NOT NULL,
  `roleCode` int(11) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleteAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`ruCode`, `userCode`, `roleCode`, `createAt`, `updateAt`, `deleteAt`) VALUES
(1, 36, 1, '2022-02-26 03:19:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userCode` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `photo` longtext DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleteAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userCode`, `name`, `photo`, `email`, `password`, `createAt`, `updateAt`, `deleteAt`) VALUES
(36, 'Super Admin', NULL, 'su@mail.com', '202cb962ac59075b964b07152d234b70', '2022-02-26 03:18:28', '2022-02-28 10:20:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_permission`
--

CREATE TABLE `user_permission` (
  `upCode` int(11) NOT NULL,
  `userCode` int(11) NOT NULL,
  `permissionCode` int(11) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleteAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`moduleCode`);

--
-- Indeks untuk tabel `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permissionCode`),
  ADD UNIQUE KEY `permission` (`permission`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleCode`);

--
-- Indeks untuk tabel `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`rpCode`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`ruCode`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userCode`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`upCode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `module`
--
ALTER TABLE `module`
  MODIFY `moduleCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `permission`
--
ALTER TABLE `permission`
  MODIFY `permissionCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `roleCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `role_permission`
--
ALTER TABLE `role_permission`
  MODIFY `rpCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `ruCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `upCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

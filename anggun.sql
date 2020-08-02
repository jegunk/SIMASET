-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2020 pada 06.58
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anggun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_app_login`
--

CREATE TABLE `log_app_login` (
  `id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` char(4) DEFAULT '',
  `username` char(50) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL,
  `useragent` text NOT NULL,
  `ipaddress` varchar(15) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_app_login`
--

INSERT INTO `log_app_login` (`id`, `datetime`, `userid`, `username`, `password`, `useragent`, `ipaddress`, `status`) VALUES
(1, '2020-07-16 02:38:44', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(2, '2020-07-16 02:48:20', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(3, '2020-07-16 05:35:23', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(4, '2020-07-17 14:27:32', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(5, '2020-07-17 15:18:02', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(6, '2020-07-18 12:07:01', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(7, '2020-07-18 12:27:04', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(8, '2020-07-18 12:27:54', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(9, '2020-07-18 12:28:08', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(10, '2020-07-19 02:45:58', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(11, '2020-07-19 02:50:18', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(12, '2020-07-19 03:27:21', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(13, '2020-07-19 03:27:28', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(14, '2020-07-19 03:33:12', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(15, '2020-07-19 03:33:33', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(16, '2020-07-19 03:39:32', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(17, '2020-07-19 03:41:32', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(18, '2020-07-19 03:41:54', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(19, '2020-07-19 03:46:39', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(20, '2020-07-19 03:47:09', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(21, '2020-07-19 03:47:30', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(22, '2020-07-19 03:48:03', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(23, '2020-07-19 03:53:34', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(24, '2020-07-19 03:53:52', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(25, '2020-07-19 03:54:59', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(26, '2020-07-19 12:34:19', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(27, '2020-07-19 12:40:41', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(28, '2020-07-19 14:22:58', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(29, '2020-07-19 14:24:17', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(30, '2020-07-19 14:24:17', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(31, '2020-07-19 14:25:37', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(32, '2020-07-19 14:26:33', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(33, '2020-07-19 14:26:58', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36 OPR/68.0.3618.173', '::1', 'Success Login'),
(34, '2020-07-19 14:29:42', '3', 'mimin', '3236641a8353d9606fdaf90b33abc2bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(35, '2020-07-19 14:30:11', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(36, '2020-07-19 14:49:21', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(37, '2020-07-21 01:57:16', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '127.0.0.1', 'Success Login'),
(38, '2020-07-21 04:51:27', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(39, '2020-07-21 04:53:47', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '::1', 'Success Login'),
(40, '2020-07-24 14:08:17', '2', 'anggun', '9f4bdb1fd496b52330bb16df53ca2ba9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(41, '2020-07-24 14:17:04', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(42, '2020-07-24 14:17:15', '2', 'anggun', '9f4bdb1fd496b52330bb16df53ca2ba9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(43, '2020-07-24 14:17:22', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(44, '2020-07-24 14:19:43', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(45, '2020-07-24 14:21:17', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(46, '2020-07-24 15:45:05', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(47, '2020-07-25 01:01:39', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(48, '2020-07-25 01:13:03', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(49, '2020-07-25 01:28:08', '4', 'kepala', '836b1f7f9b7f9bf98f1f645302defc59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(50, '2020-07-25 01:30:10', '5', 'staff', 'de9bf5643eabf80f4a56fda3bbb84483', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(51, '2020-07-25 03:24:12', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(52, '2020-07-25 03:27:47', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(53, '2020-07-25 03:30:39', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(54, '2020-07-26 13:27:06', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(55, '2020-07-26 13:32:05', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(56, '2020-07-26 13:32:33', '2', 'anggun', '9f4bdb1fd496b52330bb16df53ca2ba9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(57, '2020-07-26 13:33:04', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(58, '2020-07-26 13:47:45', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(59, '2020-07-26 13:47:52', '2', 'anggun', '9f4bdb1fd496b52330bb16df53ca2ba9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(60, '2020-07-26 14:05:44', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(61, '2020-07-27 01:02:08', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(62, '2020-07-27 02:06:55', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(63, '2020-07-28 01:10:56', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login'),
(64, '2020-07-28 01:33:52', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77', '::1', 'Success Login'),
(65, '2020-07-28 04:28:51', '1', 'admin', '202cb962ac59075b964b07152d234b70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', 'Success Login');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_jenis_menu`
--

CREATE TABLE `main_jenis_menu` (
  `id_jenis_menu` int(1) NOT NULL DEFAULT '0',
  `jenis_menu` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `main_jenis_menu`
--

INSERT INTO `main_jenis_menu` (`id_jenis_menu`, `jenis_menu`) VALUES
(0, 'Menu Utama'),
(1, 'Submenu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_menu`
--

CREATE TABLE `main_menu` (
  `id_menu` int(11) NOT NULL,
  `id_jenis_menu` int(11) NOT NULL DEFAULT '0',
  `id_parent_menu` int(11) DEFAULT NULL,
  `judul_menu` char(35) NOT NULL,
  `url` varchar(100) NOT NULL DEFAULT '',
  `posisi` int(11) NOT NULL,
  `id_status_menu` char(1) DEFAULT 'Y' COMMENT 'Y/T'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `main_menu`
--

INSERT INTO `main_menu` (`id_menu`, `id_jenis_menu`, `id_parent_menu`, `judul_menu`, `url`, `posisi`, `id_status_menu`) VALUES
(1, 0, NULL, 'Dashboard', 'beranda', 1, 'Y'),
(5, 0, NULL, 'Setup', '#', 6, 'Y'),
(11, 1, 5, 'Setup User Level', 'setup/userlevel', 4, 'Y'),
(14, 1, 5, 'Setup Menu', 'setup/menu', 6, 'Y'),
(48, 1, 5, 'Setup User', 'setup/user', 7, 'Y'),
(93, 0, NULL, 'Form', '#', 7, 'Y'),
(94, 1, 93, 'Form Pengajuan Pembelian', 'form/Form_Pengajuan', 1, 'Y'),
(95, 1, 93, 'Form Kerusakan', 'form/Form_Rusak', 2, 'Y'),
(96, 1, 93, 'Form Perbaikan', 'form/Form_Perbaikan', 3, 'Y'),
(97, 0, NULL, 'Data', '#', 8, 'Y'),
(98, 1, 97, 'Data Pengajuan Pembelian', 'transaksi/pengajuan', 1, 'Y'),
(99, 1, 97, 'Data Kerusakan', 'transaksi/rusak', 2, 'Y'),
(100, 1, 97, 'Data Perbaikan', 'transaksi/perbaikan', 3, 'Y'),
(101, 0, NULL, 'Master Aset', 'transaksi/aset', 9, 'Y'),
(102, 0, NULL, 'Laporan', '#', 10, 'Y'),
(103, 1, 102, 'Laporan Aset', 'laporan/aset', 1, 'Y'),
(104, 1, 102, 'Laporan Pengajuan Pembelian', 'laporan/pengajuan', 2, 'Y'),
(105, 0, NULL, 'Diagram Chart', 'laporan/chart', 11, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_status_menu`
--

CREATE TABLE `main_status_menu` (
  `id_status_menu` char(1) NOT NULL,
  `status_menu` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `main_status_menu`
--

INSERT INTO `main_status_menu` (`id_status_menu`, `status_menu`) VALUES
('T', 'Tidak Aktif'),
('Y', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_user_application`
--

CREATE TABLE `main_user_application` (
  `id_user` int(11) NOT NULL,
  `username` char(15) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_user` char(35) DEFAULT NULL,
  `kode_dept` varchar(5) NOT NULL,
  `id_userlevel` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `main_user_application`
--

INSERT INTO `main_user_application` (`id_user`, `username`, `password`, `nama_user`, `kode_dept`, `id_userlevel`, `gambar`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', '09096', 0, 'default.jpg'),
(2, 'anggun', '9f4bdb1fd496b52330bb16df53ca2ba9', 'Anggun Friscaleni', '09096', 2, 'anggun.png'),
(7, 'Fitri', '770a375b93df83ba60d15805b3609475', 'Fitri', '09096', 0, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_user_level`
--

CREATE TABLE `main_user_level` (
  `id_userlevel` int(11) NOT NULL,
  `userlevel` char(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `main_user_level`
--

INSERT INTO `main_user_level` (`id_userlevel`, `userlevel`) VALUES
(0, 'ADMINISTRATOR'),
(2, 'KEPALA ADMINISTRASI UMUM'),
(3, 'STAFF ADMINISTRASI UMUM'),
(4, 'STAFF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_user_permission`
--

CREATE TABLE `main_user_permission` (
  `id_permission` int(11) NOT NULL,
  `id_userlevel` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `add` char(1) DEFAULT 'Y' COMMENT 'Y/T',
  `view` char(1) DEFAULT 'Y',
  `edit` char(1) DEFAULT 'Y',
  `delete` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `main_user_permission`
--

INSERT INTO `main_user_permission` (`id_permission`, `id_userlevel`, `id_menu`, `add`, `view`, `edit`, `delete`) VALUES
(1, 0, 1, 'Y', 'Y', 'Y', 'Y'),
(4, 0, 5, 'Y', 'Y', 'Y', 'Y'),
(6, 0, 11, 'Y', 'Y', 'Y', 'Y'),
(132, 0, 14, 'Y', 'Y', 'Y', 'Y'),
(324, 0, 48, 'Y', 'Y', 'Y', 'Y'),
(414, 0, 102, 'Y', 'Y', 'Y', 'Y'),
(415, 0, 93, 'Y', 'Y', 'Y', 'Y'),
(416, 0, 97, 'Y', 'Y', 'Y', 'Y'),
(417, 0, 101, 'Y', 'Y', 'Y', 'Y'),
(418, 0, 95, 'Y', 'Y', 'Y', 'Y'),
(419, 0, 94, 'Y', 'Y', 'Y', 'Y'),
(420, 0, 96, 'Y', 'Y', 'Y', 'Y'),
(421, 0, 99, 'Y', 'Y', 'Y', 'Y'),
(422, 0, 98, 'Y', 'Y', 'Y', 'Y'),
(423, 0, 100, 'Y', 'Y', 'Y', 'Y'),
(424, 0, 103, 'Y', 'Y', 'Y', 'Y'),
(425, 0, 104, 'Y', 'Y', 'Y', 'Y'),
(426, 0, 105, 'Y', 'Y', 'Y', 'Y'),
(463, 2, 1, 'Y', 'Y', 'Y', 'Y'),
(464, 2, 102, 'Y', 'Y', 'Y', 'Y'),
(465, 2, 101, 'T', 'T', 'T', 'T'),
(466, 2, 97, 'T', 'T', 'T', 'T'),
(467, 2, 93, 'T', 'T', 'T', 'T'),
(468, 2, 105, 'T', 'T', 'T', 'T'),
(469, 2, 5, 'Y', 'Y', 'Y', 'Y'),
(470, 2, 11, 'Y', 'Y', 'Y', 'Y'),
(471, 2, 48, 'Y', 'Y', 'Y', 'Y'),
(472, 2, 14, 'Y', 'Y', 'Y', 'Y'),
(473, 2, 96, 'T', 'T', 'T', 'T'),
(474, 2, 95, 'T', 'T', 'T', 'T'),
(475, 2, 94, 'T', 'T', 'T', 'T'),
(476, 2, 98, 'T', 'T', 'T', 'T'),
(477, 2, 100, 'T', 'T', 'T', 'T'),
(478, 2, 99, 'T', 'T', 'T', 'T'),
(479, 2, 103, 'Y', 'Y', 'Y', 'Y'),
(480, 2, 104, 'Y', 'Y', 'Y', 'Y'),
(481, 3, 1, 'T', 'T', 'T', 'T'),
(482, 3, 102, 'T', 'T', 'T', 'T'),
(483, 3, 101, 'Y', 'Y', 'Y', 'Y'),
(484, 3, 97, 'Y', 'Y', 'Y', 'Y'),
(485, 3, 93, 'T', 'T', 'T', 'T'),
(486, 3, 105, 'T', 'T', 'T', 'T'),
(487, 3, 5, 'T', 'T', 'T', 'T'),
(488, 3, 11, 'T', 'T', 'T', 'T'),
(489, 3, 48, 'T', 'T', 'T', 'T'),
(490, 3, 14, 'T', 'T', 'T', 'T'),
(491, 3, 96, 'T', 'T', 'T', 'T'),
(492, 3, 95, 'T', 'T', 'T', 'T'),
(493, 3, 94, 'T', 'T', 'T', 'T'),
(494, 3, 98, 'Y', 'Y', 'Y', 'Y'),
(495, 3, 100, 'Y', 'Y', 'Y', 'Y'),
(496, 3, 99, 'Y', 'Y', 'Y', 'Y'),
(497, 3, 103, 'T', 'T', 'T', 'T'),
(498, 3, 104, 'T', 'T', 'T', 'T'),
(499, 4, 1, 'Y', 'Y', 'Y', 'Y'),
(500, 4, 97, 'Y', 'Y', 'Y', 'Y'),
(501, 4, 99, 'Y', 'Y', 'T', 'T'),
(502, 4, 98, 'Y', 'Y', 'T', 'T'),
(503, 4, 100, 'Y', 'Y', 'T', 'T'),
(504, 4, 105, 'T', 'T', 'T', 'T'),
(505, 4, 93, 'Y', 'Y', 'T', 'T'),
(506, 4, 95, 'Y', 'Y', 'T', 'T'),
(507, 4, 94, 'Y', 'Y', 'T', 'T'),
(508, 4, 96, 'Y', 'Y', 'T', 'T'),
(509, 4, 102, 'T', 'T', 'T', 'T'),
(510, 4, 103, 'T', 'T', 'T', 'T'),
(511, 4, 104, 'T', 'T', 'T', 'T'),
(512, 4, 101, 'T', 'T', 'T', 'T'),
(513, 4, 5, 'T', 'T', 'T', 'T'),
(514, 4, 14, 'T', 'T', 'T', 'T'),
(515, 4, 48, 'T', 'T', 'T', 'T'),
(516, 4, 11, 'T', 'T', 'T', 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_dept`
--

CREATE TABLE `master_dept` (
  `kode_dept` varchar(5) NOT NULL,
  `nama_dept` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_dept`
--

INSERT INTO `master_dept` (`kode_dept`, `nama_dept`) VALUES
('09096', 'Umum'),
('09097', 'Logistik'),
('09098', 'R.Tunggu PS'),
('09099', 'R.Periksa Donor'),
('09100', 'R.Tunggu Aftap'),
('09101', 'R. Aftap'),
('09102', 'R.Aftap'),
('09103', 'Komponen'),
('09104', 'KGD'),
('09105', 'R.Karantina'),
('09106', 'Pasien Service'),
('09107', 'R.Service Donor'),
('09108', 'Lorong Umum'),
('09109', 'R.Tunggu Lt 2'),
('09110', 'R.Kepala'),
('09111', 'R.Keu'),
('09112', 'R. Koordinator'),
('09113', 'P2D2S'),
('09114', 'R.Adm'),
('09115', 'R.Meeting'),
('09116', 'Log.Aftap'),
('09117', 'SC'),
('09118', 'Mushola'),
('09119', 'Receptionist'),
('09120', 'R. Umum'),
('09121', 'ADM'),
('09122', 'R.Dokter Konseling'),
('09123', 'R.Tunggu'),
('09124', 'Lorong Lt.2'),
('09125', 'PS'),
('09126', 'R.Koor'),
('09127', 'R.Konseling'),
('09128', 'R. Pemeriksaan'),
('09129', 'Aftap'),
('09130', 'R.Pemeriksaan'),
('09131', 'Receptionis'),
('09132', 'Pantry l'),
('09133', 'Pantry 2'),
('09134', 'Service Donor'),
('09135', 'R.Tunggu '),
('09136', 'Keu'),
('09137', 'Pemeriksaan Aftap'),
('09138', 'Konseling'),
('09139', 'Resepsionis'),
('09140', 'Log Aftap'),
('09141', 'R.Arsip'),
('09142', 'Pantry Lt. 1'),
('09143', 'Pantry Lt. 2'),
('09144', 'R.Tunggu Pasien'),
('09145', 'R.P2D2S'),
('09146', 'Pantry Lt.1'),
('09147', 'Pantry Lt.2'),
('09148', 'R.Tunggu Donor'),
('09149', 'Depan Toilet Tamu'),
('09150', 'R. Service Donor'),
('09151', 'R.Jas Lab'),
('09152', 'Depan Toilet Lt.1'),
('09153', 'R.Tunggu Tamu'),
('09154', 'Lorong Lt 2'),
('09155', 'Depan Toilet Lt.2'),
('09156', 'Lab'),
('09157', 'Toilet Tamu'),
('09158', 'R.Ganti'),
('09159', 'Toilet Lt 2'),
('09160', 'Toilet Lt 1'),
('09161', 'Karantina'),
('09162', 'Pelulusan Produk'),
('09163', 'Rumah Tangga'),
('09164', 'Keuangan'),
('09165', 'TI'),
('09166', 'Kesekretariatan'),
('09167', 'Pegawaian'),
('09168', 'Marketing'),
('09169', 'Design Grafis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jenis_barang`
--

CREATE TABLE `master_jenis_barang` (
  `kode_jenis_barang` varchar(10) NOT NULL,
  `nama_jenis_barang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_jenis_barang`
--

INSERT INTO `master_jenis_barang` (`kode_jenis_barang`, `nama_jenis_barang`) VALUES
('0906', 'Medis'),
('0908', 'Umum'),
('0909', 'TI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_status_aset`
--

CREATE TABLE `master_status_aset` (
  `kode_status` int(1) NOT NULL,
  `nama_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_status_aset`
--

INSERT INTO `master_status_aset` (`kode_status`, `nama_status`) VALUES
(1, 'BAIK'),
(2, 'RUSAK'),
(3, 'PERBAIKAN'),
(4, 'MUSNAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_sumber_dana`
--

CREATE TABLE `master_sumber_dana` (
  `kode_sumber` varchar(5) NOT NULL,
  `nama_sumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_sumber_dana`
--

INSERT INTO `master_sumber_dana` (`kode_sumber`, `nama_sumber`) VALUES
('001', 'Dana Sendiri'),
('002', 'Sumbangan'),
('003', 'Pinjaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_aset`
--

CREATE TABLE `trans_aset` (
  `kode_aset` varchar(20) NOT NULL,
  `kode_pengajuan` varchar(20) NOT NULL,
  `no_po` varchar(20) DEFAULT NULL,
  `kode_anggaran` varchar(10) NOT NULL,
  `kode_dept` varchar(5) NOT NULL,
  `kode_jenis_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `merk_barang` varchar(20) NOT NULL,
  `tipe_barang` varchar(20) NOT NULL,
  `warna_barang` varchar(10) NOT NULL,
  `qty` varchar(4) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `gambar_qr` varchar(25) DEFAULT NULL,
  `no_urut` int(5) NOT NULL,
  `kode_sumber` varchar(5) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kode_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trans_aset`
--

INSERT INTO `trans_aset` (`kode_aset`, `kode_pengajuan`, `no_po`, `kode_anggaran`, `kode_dept`, `kode_jenis_barang`, `nama_barang`, `merk_barang`, `tipe_barang`, `warna_barang`, `qty`, `gambar`, `gambar_qr`, `no_urut`, `kode_sumber`, `instansi`, `tahun`, `kode_status`) VALUES
('MED-BB-001', 'PK-MED-BB-001', 'PMI/001/001', '900', '09125', '0906', 'Blood Bank', 'Helmer', 'REF HH 13125', 'Kuning', '1', 'default.jpg', 'MED-BB-001.png', 379, '003', 'UDD Kab. Tangerang', 2020, '2'),
('MED-BB-002', 'PK-MED-BB-002', 'PMI/001/001', '900', '09125', '0906', 'Blood Bank', 'Helmer', 'REF HHB 125', '', '1', 'default.jpg', 'MED-BB-002.png', 380, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-BB-003', 'PK-MED-BB-003', 'PMI/001/001', '900', '09162', '0906', 'Blood Bank', 'Helmer', '', '', '1', 'default.jpg', 'MED-BB-003.png', 381, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-BB-004', 'PK-MED-BB-004', 'PMI/001/001', '900', '09162', '0906', 'Blood Bank', 'Helmer', 'REF HHB 125', '', '1', 'default.jpg', 'MED-BB-004.png', 382, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-BB-005', 'PK-MED-BB-005', 'PMI/001/001', '900', '09162', '0906', 'Blood Bank', 'Sanyo', 'MBR 304 GR', '', '1', 'default.jpg', 'MED-BB-005.png', 383, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-BB-006', 'PK-MED-BB-006', 'PMI/001/001', '900', '09117', '0906', 'Blood Bank', 'Sanyo', 'MBR 304 GR', '', '1', 'default.jpg', 'MED-BB-006.png', 384, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-FRE-001', 'PK-MED-FRE-001', 'PMI/001/001', '900', '09125', '0906', 'Freezer', 'Sanyo', 'MDF 236', '', '1', 'default.jpg', 'MED-FRE-001.png', 385, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-FRE-002', 'PK-MED-FRE-002', 'PMI/001/001', '900', '09162', '0906', 'Freezer', 'Sanyo', 'MDF 192', '', '1', 'default.jpg', 'MED-FRE-002.png', 386, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-FRE-003', 'PK-MED-FRE-003', 'PMI/001/001', '900', '09162', '0906', 'Freezer', 'Sanyo', 'MDF 236', '', '1', 'default.jpg', 'MED-FRE-003.png', 387, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-FRE-004', 'PK-MED-FRE-004', 'PMI/001/001', '900', '09129', '0906', 'Freezer', 'Sanyo', '', '', '1', 'default.jpg', 'MED-FRE-004.png', 388, '003', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-001', 'PK-MED-HAN-001', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-001.png', 527, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-002', 'PK-MED-HAN-002', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-002.png', 528, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-003', 'PK-MED-HAN-003', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-003.png', 529, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-004', 'PK-MED-HAN-004', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-004.png', 530, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-005', 'PK-MED-HAN-005', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-005.png', 531, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-006', 'PK-MED-HAN-006', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-006.png', 532, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-007', 'PK-MED-HAN-007', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-007.png', 533, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-008', 'PK-MED-HAN-008', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-008.png', 534, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-009', 'PK-MED-HAN-009', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-009.png', 535, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-010', 'PK-MED-HAN-010', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-010.png', 536, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-011', 'PK-MED-HAN-011', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-011.png', 537, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-012', 'PK-MED-HAN-012', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-012.png', 538, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-013', 'PK-MED-HAN-013', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-013.png', 539, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-014', 'PK-MED-HAN-014', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-014.png', 540, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-015', 'PK-MED-HAN-015', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-015.png', 541, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-016', 'PK-MED-HAN-016', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-016.png', 542, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-017', 'PK-MED-HAN-017', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-017.png', 543, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-018', 'PK-MED-HAN-018', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-018.png', 544, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HAN-019', 'PK-MED-HAN-019', 'PMI/001/001', '900', '09129', '0906', 'Handsealer', '', '', '', '1', 'default.jpg', 'MED-HAN-019.png', 545, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-HB-001', 'PK-MED-HB-001', 'PMI/001/001', '900', '09129', '0906', 'HB Checker', 'Haemocue ', '310 Analyzer', '', '1', 'default.jpg', 'MED-HB -001.png', 440, '003', 'UDD Kab. Tangerang', 2018, '1'),
('MED-HB-002', 'PK-MED-HB-002', 'PMI/001/001', '900', '09129', '0906', 'HB Checker', 'Haemocue ', '310 Analyzer', '', '1', 'default.jpg', 'MED-HB -002.png', 441, '003', 'UDD Kab. Tangerang', 2018, '1'),
('MED-HB-003', 'PK-MED-HB-003', 'PMI/001/001', '900', '09129', '0906', 'HB Checker', 'Haemocue ', '310 Analyzer', '', '1', 'default.jpg', 'MED-HB -003.png', 442, '003', 'UDD Kab. Tangerang', 2018, '1'),
('MED-HB-004', 'PK-MED-HB-004', 'PMI/001/001', '900', '09129', '0906', 'HB Checker', 'Haemocue ', '', '', '1', 'default.jpg', 'MED-HB -004.png', 443, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-001', 'PK-MED-KOM01-001', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-001.png', 546, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-002', 'PK-MED-KOM01-002', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-002.png', 547, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-003', 'PK-MED-KOM01-003', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-003.png', 548, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-004', 'PK-MED-KOM01-004', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-004.png', 549, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-005', 'PK-MED-KOM01-005', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-005.png', 550, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-006', 'PK-MED-KOM01-006', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-006.png', 551, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-007', 'PK-MED-KOM01-007', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-007.png', 552, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-008', 'PK-MED-KOM01-008', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-008.png', 553, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-009', 'PK-MED-KOM01-009', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-009.png', 554, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-010', 'PK-MED-KOM01-010', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-010.png', 555, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-011', 'PK-MED-KOM01-011', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-011.png', 556, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-012', 'PK-MED-KOM01-012', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-012.png', 557, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-013', 'PK-MED-KOM01-013', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-013.png', 558, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-014', 'PK-MED-KOM01-014', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-014.png', 559, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-015', 'PK-MED-KOM01-015', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-015.png', 560, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-016', 'PK-MED-KOM01-016', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-016.png', 561, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-017', 'PK-MED-KOM01-017', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-017.png', 562, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-018', 'PK-MED-KOM01-018', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-018.png', 563, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-019', 'PK-MED-KOM01-019', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-019.png', 564, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-KOM01-020', 'PK-MED-KOM01-020', 'PMI/001/001', '900', '09129', '0906', 'Kom Kapas', '', '', '', '1', 'default.jpg', 'MED-KOM01-020.png', 565, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TAN03-001', 'PK-MED-TAN03-001', 'PMI/001/001', '900', '09129', '0906', 'Tansimeter', 'Nova', 'HBP 9020', '', '1', 'default.jpg', 'MED-TAN03-001.png', 437, '001', 'UDD Kab. Tangerang', 2018, '1'),
('MED-TAS-001', 'PK-MED-TAS-001', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-001.png', 472, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-002', 'PK-MED-TAS-002', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-002.png', 473, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-003', 'PK-MED-TAS-003', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-003.png', 474, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-004', 'PK-MED-TAS-004', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-004.png', 475, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-005', 'PK-MED-TAS-005', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-005.png', 476, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-006', 'PK-MED-TAS-006', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-006.png', 477, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-007', 'PK-MED-TAS-007', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-007.png', 478, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-008', 'PK-MED-TAS-008', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-008.png', 479, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-009', 'PK-MED-TAS-009', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-009.png', 480, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-010', 'PK-MED-TAS-010', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-010.png', 481, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-011', 'PK-MED-TAS-011', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-011.png', 482, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-012', 'PK-MED-TAS-012', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-012.png', 483, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-013', 'PK-MED-TAS-013', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-013.png', 484, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-014', 'PK-MED-TAS-014', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-014.png', 485, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-015', 'PK-MED-TAS-015', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-015.png', 486, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-016', 'PK-MED-TAS-016', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-016.png', 487, '001', 'UDD Kab. Tangerang', 2017, '1'),
('MED-TAS-017', 'PK-MED-TAS-017', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', '', '', '1', 'default.jpg', 'MED-TAS-017.png', 488, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TAS-018', 'PK-MED-TAS-018', 'PMI/001/001', '900', '09129', '0906', 'Tas Aftap', 'Merah', 'Mercuri', '', '1', 'default.jpg', 'MED-TAS-018.png', 489, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-001', 'PK-MED-TEN01-001', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-001.png', 490, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-002', 'PK-MED-TEN01-002', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-002.png', 491, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-003', 'PK-MED-TEN01-003', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-003.png', 492, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-004', 'PK-MED-TEN01-004', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-004.png', 493, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-005', 'PK-MED-TEN01-005', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-005.png', 494, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-006', 'PK-MED-TEN01-006', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-006.png', 495, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-007', 'PK-MED-TEN01-007', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-007.png', 496, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-008', 'PK-MED-TEN01-008', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-008.png', 497, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-009', 'PK-MED-TEN01-009', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-009.png', 498, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-010', 'PK-MED-TEN01-010', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-010.png', 499, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-011', 'PK-MED-TEN01-011', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-011.png', 500, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-012', 'PK-MED-TEN01-012', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-012.png', 501, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-013', 'PK-MED-TEN01-013', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-013.png', 502, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-014', 'PK-MED-TEN01-014', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-014.png', 503, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-015', 'PK-MED-TEN01-015', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-015.png', 504, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-016', 'PK-MED-TEN01-016', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-016.png', 505, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-017', 'PK-MED-TEN01-017', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-017.png', 506, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-018', 'PK-MED-TEN01-018', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-018.png', 507, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-019', 'PK-MED-TEN01-019', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-019.png', 508, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-020', 'PK-MED-TEN01-020', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-020.png', 509, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-021', 'PK-MED-TEN01-021', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-021.png', 510, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-022', 'PK-MED-TEN01-022', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-022.png', 511, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-023', 'PK-MED-TEN01-023', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-023.png', 512, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-024', 'PK-MED-TEN01-024', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-024.png', 513, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-025', 'PK-MED-TEN01-025', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-025.png', 514, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-026', 'PK-MED-TEN01-026', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-026.png', 515, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-027', 'PK-MED-TEN01-027', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-027.png', 516, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-028', 'PK-MED-TEN01-028', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-028.png', 517, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-029', 'PK-MED-TEN01-029', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-029.png', 518, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-030', 'PK-MED-TEN01-030', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-030.png', 519, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-031', 'PK-MED-TEN01-031', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-031.png', 520, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-032', 'PK-MED-TEN01-032', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-032.png', 521, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-033', 'PK-MED-TEN01-033', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', '1', 'default.jpg', 'MED-TEN01-033.png', 522, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-034', 'PK-MED-TEN01-034', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercury', '', '1', 'default.jpg', 'MED-TEN01-034.png', 523, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-035', 'PK-MED-TEN01-035', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter ', 'ABN', 'Mercury', '', '1', 'default.jpg', 'MED-TEN01-035.png', 524, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-036', 'PK-MED-TEN01-036', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter', 'ABN', 'Mercury', '', '1', 'default.jpg', 'MED-TEN01-036.png', 525, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN01-037', 'PK-MED-TEN01-037', 'PMI/001/001', '900', '09129', '0906', 'Tensimeter ', 'ABN', '', '', '1', 'default.jpg', 'MED-TEN01-037.png', 526, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TEN02-001', 'PK-MED-TEN02-001', 'PMI/001/001', '900', '09129', '0906', 'Tensi Meter Digital', 'Omron', 'HBP 9020', '', '1', 'default.jpg', 'MED-TEN02-001.png', 438, '003', 'UDD Kab. Tangerang', 2018, '1'),
('MED-TEN02-002', 'PK-MED-TEN02-002', 'PMI/001/001', '900', '09129', '0906', 'Tensi Meter Digital', 'Omron', '310 Analyzer', '', '1', 'default.jpg', 'MED-TEN02-002.png', 439, '003', 'UDD Kab. Tangerang', 2018, '1'),
('MED-test-1', 'testing1', 'testing1', 'testing1', '09096', '0906', 'testing1', 'testing1', 'testing1', 'testing1', '1', 'default.jpg', 'MED-test-1.png', 567, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TIA-001', 'PK-MED-TIA-001', 'PMI/001/001', '900', '09103', '0906', 'Tiang Infus', '', '', '', '1', 'default.jpg', 'MED-TIA-001.png', 389, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TIA-002', 'PK-MED-TIA-002', 'PMI/001/001', '900', '09103', '0906', 'Tiang Infus', '', '', '', '1', 'default.jpg', 'MED-TIA-002.png', 390, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TIA-003', 'PK-MED-TIA-003', 'PMI/001/001', '900', '09103', '0906', 'Tiang Infus', '', '', '', '1', 'default.jpg', 'MED-TIA-003.png', 391, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TIA-004', 'PK-MED-TIA-004', 'PMI/001/001', '900', '09103', '0906', 'Tiang Infus', '', '', '', '1', 'default.jpg', 'MED-TIA-004.png', 392, '001', 'UDD Kab. Tangerang', 2020, '1'),
('MED-TIA-005', 'PK-MED-TIA-005', 'PMI/001/001', '900', '09097', '0906', 'Tiang Infus', '', '', '', '1', 'default.jpg', 'MED-TIA-005.png', 393, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-ABS-001', 'PK-UM-ABS-001', 'PMI/001/001', '900', '09126', '0908', 'Mesin Absen', 'Solution', 'JJ 1102D', '', '1', 'default.jpg', 'UM-ABS-001.png', 314, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-001', 'PK-UM-AIR-001', 'PMI/001/001', '900', '09097', '0908', 'Air Conditioner', 'Sharp 1 PK', 'R32 ECO', '', '1', 'default.jpg', 'UM-AIR-001.png', 1, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-002', 'PK-UM-AIR-002', 'PMI/001/001', '900', '09097', '0908', 'Air Conditioner', 'Sharp 1 PK', 'R32 ECO', '', '1', 'default.jpg', 'UM-AIR-002.png', 2, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-003', 'PK-UM-AIR-003', 'PMI/001/001', '900', '09097', '0908', 'Air Conditioner', 'Sharp ', '', '', '1', 'default.jpg', 'UM-AIR-003.png', 3, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-004', 'PK-UM-AIR-004', 'PMI/001/001', '900', '09098', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-004.png', 4, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-005', 'PK-UM-AIR-005', 'PMI/001/001', '900', '09099', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-005.png', 5, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-006', 'PK-UM-AIR-006', 'PMI/001/001', '900', '09100', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-006.png', 6, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-007', 'PK-UM-AIR-007', 'PMI/001/001', '900', '09101', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-007.png', 7, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-008', 'PK-UM-AIR-008', 'PMI/001/001', '900', '09102', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-008.png', 8, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-009', 'PK-UM-AIR-009', 'PMI/001/001', '900', '09103', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-009.png', 9, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-010', 'PK-UM-AIR-010', 'PMI/001/001', '900', '09104', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-010.png', 10, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-011', 'PK-UM-AIR-011', 'PMI/001/001', '900', '09105', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-011.png', 11, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-012', 'PK-UM-AIR-012', 'PMI/001/001', '900', '09106', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-012.png', 12, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-013', 'PK-UM-AIR-013', 'PMI/001/001', '900', '09106', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-013.png', 13, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-014', 'PK-UM-AIR-014', 'PMI/001/001', '900', '09107', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-014.png', 14, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-015', 'PK-UM-AIR-015', 'PMI/001/001', '900', '09108', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-015.png', 15, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-016', 'PK-UM-AIR-016', 'PMI/001/001', '900', '09109', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-016.png', 16, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-017', 'PK-UM-AIR-017', 'PMI/001/001', '900', '09110', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-017.png', 17, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-018', 'PK-UM-AIR-018', 'PMI/001/001', '900', '09111', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-018.png', 18, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-019', 'PK-UM-AIR-019', 'PMI/001/001', '900', '09112', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-019.png', 19, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-020', 'PK-UM-AIR-020', 'PMI/001/001', '900', '09113', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-020.png', 20, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-021', 'PK-UM-AIR-021', 'PMI/001/001', '900', '09114', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-021.png', 21, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-022', 'PK-UM-AIR-022', 'PMI/001/001', '900', '09115', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-022.png', 22, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-023', 'PK-UM-AIR-023', 'PMI/001/001', '900', '09106', '0908', 'Air Conditioner', 'Sharp', '1 1/2 PK', '', '1', 'default.jpg', 'UM-AIR-023.png', 23, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-024', 'PK-UM-AIR-024', 'PMI/001/001', '900', '09106', '0908', 'Air Conditioner', 'Sharp', '1 1/2 PK', '', '1', 'default.jpg', 'UM-AIR-024.png', 24, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-025', 'PK-UM-AIR-025', 'PMI/001/001', '900', '09103', '0908', 'Air Conditioner', 'Sharp', '1 PK', '', '1', 'default.jpg', 'UM-AIR-025.png', 25, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-026', 'PK-UM-AIR-026', 'PMI/001/001', '900', '09116', '0908', 'Air Conditioner', 'Panasonic 1 PK', '', '', '1', 'default.jpg', 'UM-AIR-026.png', 26, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-027', 'PK-UM-AIR-027', 'PMI/001/001', '900', '09117', '0908', 'Air Conditioner', 'Panasonic 2PK', 'C5-PC 18 PKP', '', '1', 'default.jpg', 'UM-AIR-027.png', 27, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-028', 'PK-UM-AIR-028', 'PMI/001/001', '900', '09115', '0908', 'Air Conditioner', 'Sharp 1/2 PK', 'AP5SHL', '', '1', 'default.jpg', 'UM-AIR-028.png', 28, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-029', 'PK-UM-AIR-029', 'PMI/001/001', '900', '09115', '0908', 'Air Conditioner', 'Samsung', 'A505TULNXEA', '', '1', 'default.jpg', 'UM-AIR-029.png', 29, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-030', 'PK-UM-AIR-030', 'PMI/001/001', '900', '09118', '0908', 'Air Conditioner', 'Sharp', 'AH-A9 MEY', '', '1', 'default.jpg', 'UM-AIR-030.png', 30, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-031', 'PK-UM-AIR-031', 'PMI/001/001', '900', '09119', '0908', 'Air Conditioner', 'LG 2 PK', 'R410A', '', '1', 'default.jpg', 'UM-AIR-031.png', 31, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-032', 'PK-UM-AIR-032', 'PMI/001/001', '900', '09120', '0908', 'Air Conditioner', 'Samsung 3/4 PK', '', '', '1', 'default.jpg', 'UM-AIR-032.png', 32, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-033', 'PK-UM-AIR-033', 'PMI/001/001', '900', '09121', '0908', 'Air Conditioner', 'Sharp 1/2 PK', 'AH-AP5SHU', '', '1', 'default.jpg', 'UM-AIR-033.png', 33, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-034', 'PK-UM-AIR-034', 'PMI/001/001', '900', '09121', '0908', 'Air Conditioner', 'Sharp 1/2 PK', 'AH-AP5SHU', '', '1', 'default.jpg', 'UM-AIR-034.png', 34, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-AIR-035', 'PK-UM-AIR-035', 'PMI/001/001', '900', '09122', '0908', 'Air Conditioner', 'Panasonic', '', '', '1', 'default.jpg', 'UM-AIR-035.png', 35, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-AIR-036', 'PK-UM-AIR-036', 'PMI/001/001', '900', '09103', '0908', 'Air Conditioner', 'Sharp', '1 1/2 PK', '', '1', 'default.jpg', 'UM-AIR-036.png', 36, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-APA-001', 'PK-UM-APA-001', 'PMI/001/001', '900', '09097', '0908', 'Apar', '', '', '', '1', 'default.jpg', 'UM-APA-001.png', 37, '001', 'UDD Kab. Tangerang', 2016, '1'),
('UM-APA-002', 'PK-UM-APA-002', 'PMI/001/001', '900', '09123', '0908', 'Apar', 'Protect', 'MFH 3.5', '', '1', 'default.jpg', 'UM-APA-002.png', 38, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-APA-003', 'PK-UM-APA-003', 'PMI/001/001', '900', '09124', '0908', 'Apar', 'Firetecht', 'FR 8 L', '', '1', 'default.jpg', 'UM-APA-003.png', 39, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-APA-004', 'PK-UM-APA-004', 'PMI/001/001', '900', '09124', '0908', 'Apar', 'Firetecht', 'FR 8 L', '', '1', 'default.jpg', 'UM-APA-004.png', 40, '001', 'UDD Kab. Tangerang', 2016, '1'),
('UM-APA-005', 'PK-UM-APA-005', 'PMI/001/001', '900', '09124', '0908', 'Apar', 'Protect', 'MZ-3', '', '1', 'default.jpg', 'UM-APA-005.png', 41, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-APA-006', 'PK-UM-APA-006', 'PMI/001/001', '900', '09098', '0908', 'Apar', '', '', '', '1', 'default.jpg', 'UM-APA-006.png', 42, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-APA-007', 'PK-UM-APA-007', 'PMI/001/001', '900', '09119', '0908', 'Apar', 'Pyrosafe', '6Kg Powder', '', '1', 'default.jpg', 'UM-APA-007.png', 43, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-APA-008', 'PK-UM-APA-008', 'PMI/001/001', '900', '09119', '0908', 'Apar', 'Pyrosafe', '6Kg Powder', '', '1', 'default.jpg', 'UM-APA-008.png', 44, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-APA-009', 'PK-UM-APA-009', 'PMI/001/001', '900', '09120', '0908', 'Apar', 'Protect', 'GMP-35P', '', '1', 'default.jpg', 'UM-APA-009.png', 45, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-APA-010', 'PK-UM-APA-010', 'PMI/001/001', '900', '09120', '0908', 'Apar', 'Yamato', '', '', '1', 'default.jpg', 'UM-APA-010.png', 46, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-APA-011', 'PK-UM-APA-011', 'PMI/001/001', '900', '09125', '0908', 'Apar', '', '', '', '1', 'default.jpg', 'UM-APA-011.png', 47, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAK-001', 'PK-UM-BAK-001', 'PMI/001/001', '900', '09129', '0908', 'Bak Instrumen', '', '', '', '1', 'default.jpg', 'UM-BAK-001.png', 448, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAK-002', 'PK-UM-BAK-002', 'PMI/001/001', '900', '09129', '0908', 'Bak Instrumen', '', '', '', '1', 'default.jpg', 'UM-BAK-001.png', 449, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAK-003', 'PK-UM-BAK-003', 'PMI/001/001', '900', '09129', '0908', 'Bak Instrumen', '', '', '', '1', 'default.jpg', 'UM-BAK-001.png', 450, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAN-001', 'PK-UM-BAN-001', 'PMI/001/001', '900', '09129', '0908', 'Bantal Leher Aferesi', '', '', '', '1', 'default.jpg', 'UM-BAN-001.png', 401, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAN-002', 'PK-UM-BAN-002', 'PMI/001/001', '900', '09129', '0908', 'Bantal MU', '', '', '', '1', 'default.jpg', 'UM-BAN-001.png', 402, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAN-003', 'PK-UM-BAN-003', 'PMI/001/001', '900', '09129', '0908', 'Bantal Kaki', '', '', '', '1', 'default.jpg', 'UM-BAN-001.png', 403, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAN-004', 'PK-UM-BAN-004', 'PMI/001/001', '900', '09129', '0908', 'Bantal Tangan', '', '', '', '1', 'default.jpg', 'UM-BAN-001.png', 404, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAN-005', 'PK-UM-BAN-005', 'PMI/001/001', '900', '09129', '0908', 'Bantal ', '', '', '', '1', 'default.jpg', 'UM-BAN-001.png', 418, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BAN-006', 'PK-UM-BAN-006', 'PMI/001/001', '900', '09129', '0908', 'Bantal Kaki ', '', '', '', '1', 'default.jpg', 'UM-BAN-001.png', 421, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BED-001', 'PK-UM-BED-001', 'PMI/001/001', '900', '09129', '0908', 'Bed', '', '', '', '1', 'default.jpg', 'UM-BED-001.png', 405, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BEK-001', 'PK-UM-BEK-001', 'PMI/001/001', '900', '09129', '0908', 'Beker Glass Sedang', '', '', '', '1', 'default.jpg', 'UM-BEK-001.png', 433, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-001', 'PK-UM-BOX-001', 'PMI/001/001', '900', '09157', '0908', 'Box Tissue', 'Kimberly Clark', '', '', '1', 'default.jpg', 'UM-BOX-001.png', 325, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-002', 'PK-UM-BOX-002', 'PMI/001/001', '900', '09158', '0908', 'Box Tissue', 'Kimberly Clark', '', '', '1', 'default.jpg', 'UM-BOX-002.png', 326, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-003', 'PK-UM-BOX-003', 'PMI/001/001', '900', '09159', '0908', 'Box Tissue', 'Kimberly Clark', '', '', '1', 'default.jpg', 'UM-BOX-003.png', 327, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-004', 'PK-UM-BOX-004', 'PMI/001/001', '900', '09160', '0908', 'Box Tissue', 'Kimberly Clark', '', '', '1', 'default.jpg', 'UM-BOX-004.png', 328, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-005', 'PK-UM-BOX-005', 'PMI/001/001', '900', '09160', '0908', 'Box Tissue', 'LIVI', '', '', '1', 'default.jpg', 'UM-BOX-005.png', 329, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-006', 'PK-UM-BOX-006', 'PMI/001/001', '900', '09115', '0908', 'Dispenser Solatip', '', '', '', '1', 'default.jpg', 'UM-BOX-006.png', 337, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-BOX-007', 'PK-UM-BOX-007', 'PMI/001/001', '900', '09115', '0908', 'Papan Presentasi', '', 'JH-120PR', '', '1', 'default.jpg', 'UM-BOX-007.png', 338, '001', 'UDD Kab. Tangerang', 2018, '1'),
('UM-BOX-008', 'PK-UM-BOX-008', 'PMI/001/001', '900', '09115', '0908', 'Portable Speaker + M', 'JK Coustik', '', '', '1', 'default.jpg', 'UM-BOX-008.png', 339, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-009', 'PK-UM-BOX-009', 'PMI/001/001', '900', '09117', '0908', 'Pompa Air Plastik', '', '', '', '1', 'default.jpg', 'UM-BOX-009.png', 340, '001', 'UDD Kab. Tangerang', 2017, '1'),
('UM-BOX-010', 'PK-UM-BOX-010', 'PMI/001/001', '900', '09117', '0908', 'Pompa Air Plastik', '', '', '', '1', 'default.jpg', 'UM-BOX-010.png', 341, '001', 'UDD Kab. Tangerang', 2017, '1'),
('UM-BOX-011', 'PK-UM-BOX-011', 'PMI/001/001', '900', '09117', '0908', 'Pompa Air Plastik', '', 'S433', '', '1', 'default.jpg', 'UM-BOX-011.png', 342, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-BOX-012', 'PK-UM-BOX-012', 'PMI/001/001', '900', '09117', '0908', 'Pompa Air Plastik', 'Ariana', '', '', '1', 'default.jpg', 'UM-BOX-012.png', 343, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-013', 'PK-UM-BOX-013', 'PMI/001/001', '900', '09117', '0908', 'Mesin Tik Electrik', 'Brother', '', '', '1', 'default.jpg', 'UM-BOX-013.png', 344, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-014', 'PK-UM-BOX-014', 'PMI/001/001', '900', '09117', '0908', 'Proyektor', '', '', '', '1', 'default.jpg', 'UM-BOX-014.png', 345, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-015', 'PK-UM-BOX-015', 'PMI/001/001', '900', '09103', '0908', 'Box Adm', '', '', '', '1', 'default.jpg', 'UM-BOX-015.png', 346, '001', 'UDD Kab. Tangerang', 2013, '1'),
('UM-BOX-016', 'PK-UM-BOX-016', 'PMI/001/001', '900', '09125', '0908', 'Trolly ', '', '', '', '1', 'default.jpg', 'UM-BOX-016.png', 347, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-017', 'PK-UM-BOX-017', 'PMI/001/001', '900', '09117', '0908', 'Pelbed', '', 'CE600', '', '1', 'default.jpg', 'UM-BOX-017.png', 348, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-018', 'PK-UM-BOX-018', 'PMI/001/001', '900', '09160', '0908', 'Box Camera', '', 'Kanvas Hitam', '', '1', 'default.jpg', 'UM-BOX-001.png', 332, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-019', 'PK-UM-BOX-019', 'PMI/001/001', '900', '09134', '0908', 'Tas Camera', 'Lowe', '', '', '1', 'default.jpg', 'UM-BOX-002.png', 333, '001', 'UDD Kab. Tangerang', 2012, '1'),
('UM-BOX-020', 'PK-UM-BOX-020', 'PMI/001/001', '900', '09134', '0908', 'Mosque Trap', '', '', '', '1', 'default.jpg', 'UM-BOX-003.png', 334, '001', 'UDD Kab. Tangerang', 2012, '1'),
('UM-BOX-021', 'PK-UM-BOX-021', 'PMI/001/001', '900', '09134', '0908', 'DVD Player APV', '', '', '', '1', 'default.jpg', 'UM-BOX-004.png', 335, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-022', 'PK-UM-BOX-022', 'PMI/001/001', '900', '09097', '0908', 'Tempat Tissue', '', '', '', '1', 'default.jpg', 'UM-BOX-005.png', 336, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BOX-023', 'PK-UM-BOX-023', 'PMI/001/001', '900', '09129', '0908', 'Box Cadangan', '', '', '', '1', 'default.jpg', 'UM-BOX-001.png', 415, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-BRK-001', 'PK-UM-BRK-001', 'PMI/001/001', '900', '09121', '0908', 'Brankas ', 'Doliwa', '', '', '1', 'default.jpg', 'UM-BRK-001.png', 313, '001', 'UDD Kab. Tangerang', 2017, '1'),
('UM-CAM-001', 'PK-UM-CAM-001', 'PMI/001/001', '900', '09160', '0908', 'Camera', 'Canon', 'Box Transparan', '', '1', 'default.jpg', 'UM-CAM-001.png', 331, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-COL-001', 'PK-UM-COL-001', 'PMI/001/001', '900', '09125', '0908', 'Colokan', '', '2 Terminal', '', '1', 'default.jpg', 'UM-COL-001.png', 368, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COL-002', 'PK-UM-COL-002', 'PMI/001/001', '900', '09103', '0908', 'Colokan', '', '3 Terminal', '', '1', 'default.jpg', 'UM-COL-002.png', 369, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COL-003', 'PK-UM-COL-003', 'PMI/001/001', '900', '09125', '0908', 'Colokan', '', '5 Terminal', '', '1', 'default.jpg', 'UM-COL-003.png', 370, '001', 'UDD Kab. Tangerang', 2014, '1'),
('UM-COL-004', 'PK-UM-COL-004', 'PMI/001/001', '900', '09125', '0908', 'Colokan', '', '', '', '1', 'default.jpg', 'UM-COL-004.png', 371, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-CON-001', 'PK-UM-CON-001', 'PMI/001/001', '900', '09121', '0908', 'Container table', '', '', '', '1', 'default.jpg', 'UM-CON-001.png', 373, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-CON-002', 'PK-UM-CON-002', 'PMI/001/001', '900', '09121', '0908', 'Container table', '', '', '', '1', 'default.jpg', 'UM-CON-002.png', 374, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-CON-003', 'PK-UM-CON-003', 'PMI/001/001', '900', '09121', '0908', 'Container table', '', '', '', '1', 'default.jpg', 'UM-CON-003.png', 375, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-CON-004', 'PK-UM-CON-004', 'PMI/001/001', '900', '09136', '0908', 'Container table', '', '', '', '1', 'default.jpg', 'UM-CON-004.png', 376, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-CON-005', 'PK-UM-CON-005', 'PMI/001/001', '900', '09103', '0908', 'Container table', '', '', '', '1', 'default.jpg', 'UM-CON-005.png', 377, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-CON-006', 'PK-UM-CON-006', 'PMI/001/001', '900', '09103', '0908', 'Container table', '', '', '', '1', 'default.jpg', 'UM-CON-006.png', 378, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-CON01-002', 'PK-UM-CON01-002', 'PMI/001/001', '900', '09126', '0908', 'Container Besar', '', '4 Susun', '', '1', 'default.jpg', 'UM-CON01-002.png', 218, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COO-001', 'PK-UM-COO-001', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Sedang', 'Biru', '', '', '1', 'default.jpg', 'UM-COO-001.png', 471, '001', 'UDD Kab. Tangerang', 2017, '1'),
('UM-COO1-001', 'PK-UM-COO1-001', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Kecil', '', '', '', '1', 'default.jpg', 'UM-COO1-001.png', 460, '001', 'UDD Kab. Tangerang', 2013, '1'),
('UM-COO1-002', 'PK-UM-COO1-002', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Kecil', '', '', '', '1', 'default.jpg', 'UM-COO1-002.png', 461, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-COO1-003', 'PK-UM-COO1-003', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Kecil', '', '', '', '1', 'default.jpg', 'UM-COO1-003.png', 462, '002', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COO1-004', 'PK-UM-COO1-004', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Kecil', '', '', '', '1', 'default.jpg', 'UM-COO1-004.png', 463, '002', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COO2-001', 'PK-UM-COO2-001', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Besar', 'Orange', '', '', '1', 'default.jpg', 'UM-COO2-001.png', 464, '002', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COO2-002', 'PK-UM-COO2-002', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Besar', 'Orange', '', '', '1', 'default.jpg', 'UM-COO2-002.png', 465, '001', 'UDD Kab. Tangerang', 2013, '1'),
('UM-COO2-003', 'PK-UM-COO2-003', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Besar', 'Orange', '', '', '1', 'default.jpg', 'UM-COO2-003.png', 466, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COO2-004', 'PK-UM-COO2-004', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Besar', 'Merah', '', '', '1', 'default.jpg', 'UM-COO2-004.png', 467, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COO2-005', 'PK-UM-COO2-005', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Besar', 'Putih', '', '', '1', 'default.jpg', 'UM-COO2-005.png', 468, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COO2-006', 'PK-UM-COO2-006', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Besar', 'Putih', '', '', '1', 'default.jpg', 'UM-COO2-006.png', 469, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-COO2-007', 'PK-UM-COO2-007', 'PMI/001/001', '900', '09129', '0908', 'Cool Box Besar', 'Putih', '', '', '1', 'default.jpg', 'UM-COO2-007.png', 470, '001', 'UDD Kab. Tangerang', 2017, '1'),
('UM-DIS01-001', 'PK-UM-DIS01-001', 'PMI/001/001', '900', '09134', '0908', 'Dispenser ', 'Denpoo', '', '', '1', 'default.jpg', 'UM-DIS01-001.png', 219, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-DIS01-002', 'PK-UM-DIS01-002', 'PMI/001/001', '900', '09142', '0908', 'Dispenser ', 'Polytron', '', '', '1', 'default.jpg', 'UM-DIS01-002.png', 220, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-DIS01-003', 'PK-UM-DIS01-003', 'PMI/001/001', '900', '09098', '0908', 'Dispenser ', 'Polytron', '', '', '1', 'default.jpg', 'UM-DIS01-003.png', 221, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-DIS01-004', 'PK-UM-DIS01-004', 'PMI/001/001', '900', '09143', '0908', 'Dispenser ', 'Miyako', '', '', '1', 'default.jpg', 'UM-DIS01-004.png', 222, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-EMB-001', 'PK-UM-EMB-001', 'PMI/001/001', '900', '09129', '0908', 'Ember ', '', '', '', '1', 'default.jpg', 'UM-EMB-001.png', 414, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-FAX-001', 'PK-UM-FAX-001', 'PMI/001/001', '900', '09160', '0908', 'Fax', 'Panasonic', '', '', '1', 'default.jpg', 'UM-FAX-001.png', 330, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-GUN-001', 'PK-UM-GUN-001', 'PMI/001/001', '900', '09129', '0908', 'Gunting ', '', '', '', '1', 'default.jpg', 'UM-GUN-001.png', 453, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-HAE-001', 'PK-UM-HAE-001', 'PMI/001/001', '900', '09129', '0908', 'Haemoscale', 'Czk IB', '', '', '1', 'default.jpg', 'UM-HAE-001.png', 444, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-HAE-002', 'PK-UM-HAE-002', 'PMI/001/001', '900', '09129', '0908', 'Haemoscale', 'Czk IB', '', '', '1', 'default.jpg', 'UM-HAE-002.png', 445, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-HAE-003', 'PK-UM-HAE-003', 'PMI/001/001', '900', '09129', '0908', 'Haemoscale', 'Czk IB', '', '', '1', 'default.jpg', 'UM-HAE-003.png', 446, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-INT01-001', 'PK-UM-INT01-001', 'PMI/001/001', '900', '09131', '0908', 'Interior receptionis', '', '', '', '1', 'default.jpg', 'UM-INT01-001.png', 96, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-INT01-002', 'PK-UM-INT01-002', 'PMI/001/001', '900', '09107', '0908', 'Interior Service Don', '', 'Meja Cafe 1,meja caf', '', '1', 'default.jpg', 'UM-INT01-002.png', 97, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-INT02-001', 'PK-UM-INT02-001', 'PMI/001/001', '900', '09132', '0908', 'Kitchen Set', '', '', '', '1', 'default.jpg', 'UM-INT02-001.png', 98, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-INT02-002', 'PK-UM-INT02-002', 'PMI/001/001', '900', '09133', '0908', 'Kitchen Set', '', '', '', '1', 'default.jpg', 'UM-INT02-002.png', 99, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-JAM01-001', 'PK-UM-JAM01-001', 'PMI/001/001', '900', '09125', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-001.png', 227, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-002', 'PK-UM-JAM01-002', 'PMI/001/001', '900', '09104', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-002.png', 228, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-003', 'PK-UM-JAM01-003', 'PMI/001/001', '900', '09117', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-003.png', 229, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-004', 'PK-UM-JAM01-004', 'PMI/001/001', '900', '09144', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-004.png', 230, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-005', 'PK-UM-JAM01-005', 'PMI/001/001', '900', '09115', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-005.png', 231, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-006', 'PK-UM-JAM01-006', 'PMI/001/001', '900', '09118', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-006.png', 232, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-007', 'PK-UM-JAM01-007', 'PMI/001/001', '900', '09108', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-007.png', 233, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-008', 'PK-UM-JAM01-008', 'PMI/001/001', '900', '09126', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-008.png', 234, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-009', 'PK-UM-JAM01-009', 'PMI/001/001', '900', '09097', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-009.png', 235, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-JAM01-010', 'PK-UM-JAM01-010', 'PMI/001/001', '900', '09113', '0908', 'Jam Dinding', '', '', '', '1', 'default.jpg', 'UM-JAM01-010.png', 236, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KAB-001', 'PK-UM-KAB-001', 'PMI/001/001', '900', '09110', '0908', 'Kabel ', '', '', '', '1', 'default.jpg', 'UM-KAB-001.png', 268, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KAL-001', 'PK-UM-KAL-001', 'PMI/001/001', '900', '09136', '0908', 'Kalkulator', 'Casio', 'DX1205', '', '1', 'default.jpg', 'UM-KAL-001.png', 315, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KAL-002', 'PK-UM-KAL-002', 'PMI/001/001', '900', '09121', '0908', 'Kalkulator', 'Casio', 'SDC-868L', '', '1', 'default.jpg', 'UM-KAL-002.png', 316, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KAL-003', 'PK-UM-KAL-003', 'PMI/001/001', '900', '09136', '0908', 'Kalkulator', 'Casio', 'JJ 1102D', '', '1', 'default.jpg', 'UM-KAL-003.png', 317, '001', 'UDD Kab. Tangerang', 2013, '1'),
('UM-KAL-004', 'PK-UM-KAL-004', 'PMI/001/001', '900', '09136', '0908', 'Kalkulator', 'Casio', '', '', '1', 'default.jpg', 'UM-KAL-004.png', 318, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KAS-001', 'PK-UM-KAS-001', 'PMI/001/001', '900', '09129', '0908', 'Kasur', '', '', '', '1', 'default.jpg', 'UM-KAS-001.png', 420, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KED-001', 'PK-UM-KED-001', 'PMI/001/001', '900', '09129', '0908', 'Keranjang Darah ', '', '', '', '1', 'default.jpg', 'UM-KED-001.png', 411, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KEP-001', 'PK-UM-KEP-001', 'PMI/001/001', '900', '09129', '0908', 'Keranjang Putih ', '', '', '', '1', 'default.jpg', 'UM-KEP-001.png', 412, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KER-001', 'PK-UM-KER-001', 'PMI/001/001', '900', '09129', '0908', 'Keranjang Merah ', '', '', '', '1', 'default.jpg', 'UM-KER-001.png', 413, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KIP01-001', 'PK-UM-KIP01-001', 'PMI/001/001', '900', '09097', '0908', 'Kipas Gantung', '', '', '', '1', 'default.jpg', 'UM-KIP01-001.png', 237, '002', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KIP01-002', 'PK-UM-KIP01-002', 'PMI/001/001', '900', '09097', '0908', 'Kipas Gantung', '', '', '', '1', 'default.jpg', 'UM-KIP01-002.png', 238, '002', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KLE-001', 'PK-UM-KLE-001', 'PMI/001/001', '900', '09129', '0908', 'Klem ', '', '', '', '1', 'default.jpg', 'UM-KLE-001.png', 451, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KOM-001', 'PK-UM-KOM-001', 'PMI/001/001', '900', '09129', '0908', 'Kom Pinset ', '', '', '', '1', 'default.jpg', 'UM-KOM-001.png', 457, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KOM-002', 'PK-UM-KOM-002', 'PMI/001/001', '900', '09129', '0908', 'Kom Klem ', '', '', '', '1', 'default.jpg', 'UM-KOM-001.png', 458, '001', 'UDD Kab. Tangerang', 2013, '1');
INSERT INTO `trans_aset` (`kode_aset`, `kode_pengajuan`, `no_po`, `kode_anggaran`, `kode_dept`, `kode_jenis_barang`, `nama_barang`, `merk_barang`, `tipe_barang`, `warna_barang`, `qty`, `gambar`, `gambar_qr`, `no_urut`, `kode_sumber`, `instansi`, `tahun`, `kode_status`) VALUES
('UM-KON-001', 'PK-UM-KON-001', 'PMI/001/001', '900', '09129', '0908', 'Kontainer Kecil ', '', '', '', '1', 'default.jpg', 'UM-KON-001.png', 409, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KON-002', 'PK-UM-KON-002', 'PMI/001/001', '900', '09129', '0908', 'Kontainer Besar ', '', '', '', '1', 'default.jpg', 'UM-KON-001.png', 410, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KOT-001', 'PK-UM-KOT-001', 'PMI/001/001', '900', '09129', '0908', 'Kotak HB ', '', '', '', '1', 'default.jpg', 'UM-KOT-001.png', 454, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KOT-002', 'PK-UM-KOT-002', 'PMI/001/001', '900', '09129', '0908', 'Kotak HB ', '', '', '', '1', 'default.jpg', 'UM-KOT-001.png', 455, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KOT-003', 'PK-UM-KOT-003', 'PMI/001/001', '900', '09129', '0908', 'Kotak HB ', '', '', '', '1', 'default.jpg', 'UM-KOT-001.png', 456, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUL-001', 'PK-UM-KUL-001', 'PMI/001/001', '900', '09147', '0908', 'Kulkas', 'LG', '', '', '1', 'default.jpg', 'UM-KUL-001.png', 283, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUL-002', 'PK-UM-KUL-002', 'PMI/001/001', '900', '09097', '0908', 'Kulkas', 'LG', 'Bulat', '', '1', 'default.jpg', 'UM-KUL-002.png', 284, '001', 'UDD Kab. Tangerang', 2018, '1'),
('UM-KUR-001', 'PK-UM-KUR-001', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR-001.png', 416, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-001', 'PK-UM-KUR01-001', 'PMI/001/001', '900', '09131', '0908', 'Kursi Kerja', '', 'Type Cafe', '', '1', 'default.jpg', 'UM-KUR01-001.png', 105, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-002', 'PK-UM-KUR01-002', 'PMI/001/001', '900', '09131', '0908', 'Kursi Kerja', '', 'Type Cafe', '', '1', 'default.jpg', 'UM-KUR01-002.png', 106, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-003', 'PK-UM-KUR01-003', 'PMI/001/001', '900', '09136', '0908', 'Kursi Kerja', 'Donati', '', '', '1', 'default.jpg', 'UM-KUR01-003.png', 107, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-004', 'PK-UM-KUR01-004', 'PMI/001/001', '900', '09136', '0908', 'Kursi Kerja', 'Donati', '', '', '1', 'default.jpg', 'UM-KUR01-004.png', 108, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-005', 'PK-UM-KUR01-005', 'PMI/001/001', '900', '09106', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-005.png', 109, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR01-006', 'PK-UM-KUR01-006', 'PMI/001/001', '900', '09106', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-006.png', 110, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR01-007', 'PK-UM-KUR01-007', 'PMI/001/001', '900', '09106', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-007.png', 111, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR01-008', 'PK-UM-KUR01-008', 'PMI/001/001', '900', '09106', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-008.png', 112, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR01-009', 'PK-UM-KUR01-009', 'PMI/001/001', '900', '09106', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-009.png', 113, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR01-010', 'PK-UM-KUR01-010', 'PMI/001/001', '900', '09097', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-010.png', 114, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-011', 'PK-UM-KUR01-011', 'PMI/001/001', '900', '09097', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-011.png', 115, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-012', 'PK-UM-KUR01-012', 'PMI/001/001', '900', '09097', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-012.png', 116, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-013', 'PK-UM-KUR01-013', 'PMI/001/001', '900', '09104', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-013.png', 117, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-014', 'PK-UM-KUR01-014', 'PMI/001/001', '900', '09104', '0908', 'Kursi Kerja ', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-014.png', 118, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-015', 'PK-UM-KUR01-015', 'PMI/001/001', '900', '09104', '0908', 'Kursi Kerja', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-015.png', 119, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-016', 'PK-UM-KUR01-016', 'PMI/001/001', '900', '09103', '0908', 'Kursi Kerja', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-016.png', 120, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-017', 'PK-UM-KUR01-017', 'PMI/001/001', '900', '09103', '0908', 'Kursi Kerja', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-017.png', 121, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-018', 'PK-UM-KUR01-018', 'PMI/001/001', '900', '09103', '0908', 'Kursi Kerja', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-018.png', 122, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-019', 'PK-UM-KUR01-019', 'PMI/001/001', '900', '09137', '0908', 'Kursi Kerja', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-019.png', 123, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-020', 'PK-UM-KUR01-020', 'PMI/001/001', '900', '09137', '0908', 'Kursi Kerja', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-020.png', 124, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-021', 'PK-UM-KUR01-021', 'PMI/001/001', '900', '09138', '0908', 'Kursi Kerja', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-021.png', 125, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-022', 'PK-UM-KUR01-022', 'PMI/001/001', '900', '09138', '0908', 'Kursi Kerja', 'Wonderfull', '', '', '1', 'default.jpg', 'UM-KUR01-022.png', 126, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-023', 'PK-UM-KUR01-023', 'PMI/001/001', '900', '09113', '0908', 'Kursi Kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-023.png', 127, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-024', 'PK-UM-KUR01-024', 'PMI/001/001', '900', '09110', '0908', 'Kursi kerja', '', '', '', '1', 'default.jpg', 'UM-KUR01-024.png', 128, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-025', 'PK-UM-KUR01-025', 'PMI/001/001', '900', '09117', '0908', 'Kursi kerja', '', '42327', '', '1', 'default.jpg', 'UM-KUR01-025.png', 129, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR01-026', 'PK-UM-KUR01-026', 'PMI/001/001', '900', '09117', '0908', 'Kursi kerja', '', '42328', '', '1', 'default.jpg', 'UM-KUR01-026.png', 130, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR02-001', 'PK-UM-KUR02-001', 'PMI/001/001', '900', '09102', '0908', 'Kursi aftap', 'Informa', 'Type Cafe', '', '1', 'default.jpg', 'UM-KUR02-001.png', 131, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR02-002', 'PK-UM-KUR02-002', 'PMI/001/001', '900', '09102', '0908', 'Kursi aftap', 'Informa', 'Type Cafe', '', '1', 'default.jpg', 'UM-KUR02-002.png', 132, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR02-003', 'PK-UM-KUR02-003', 'PMI/001/001', '900', '09102', '0908', 'Kursi aftap', 'Informa', 'Type Cafe', '', '1', 'default.jpg', 'UM-KUR02-003.png', 133, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR02-004', 'PK-UM-KUR02-004', 'PMI/001/001', '900', '09102', '0908', 'Kursi aftap', 'Informa', 'Type Cafe', '', '1', 'default.jpg', 'UM-KUR02-004.png', 134, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR03-001', 'PK-UM-KUR03-001', 'PMI/001/001', '900', '09102', '0908', 'Kursi Donor', '', 'Donor Chair Coklat', '', '1', 'default.jpg', 'UM-KUR03-001.png', 135, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR03-002', 'PK-UM-KUR03-002', 'PMI/001/001', '900', '09102', '0908', 'Kursi Donor', '', 'Donor Chair Coklat', '', '1', 'default.jpg', 'UM-KUR03-002.png', 136, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR03-003', 'PK-UM-KUR03-003', 'PMI/001/001', '900', '09102', '0908', 'Kursi Donor', '', 'Donor Chair Coklat', '', '1', 'default.jpg', 'UM-KUR03-003.png', 137, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR03-004', 'PK-UM-KUR03-004', 'PMI/001/001', '900', '09102', '0908', 'Kursi Donor', '', 'Donor Chair Coklat', '', '1', 'default.jpg', 'UM-KUR03-004.png', 138, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-001', 'PK-UM-KUR04-001', 'PMI/001/001', '900', '09126', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', '1', 'default.jpg', 'UM-KUR04-001.png', 139, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-002', 'PK-UM-KUR04-002', 'PMI/001/001', '900', '09126', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', '1', 'default.jpg', 'UM-KUR04-002.png', 140, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-003', 'PK-UM-KUR04-003', 'PMI/001/001', '900', '09126', '0908', 'Kursi Khrom', '', '', '', '1', 'default.jpg', 'UM-KUR04-003.png', 141, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-004', 'PK-UM-KUR04-004', 'PMI/001/001', '900', '09126', '0908', 'Kursi Khrom', '', '', '', '1', 'default.jpg', 'UM-KUR04-004.png', 142, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-005', 'PK-UM-KUR04-005', 'PMI/001/001', '900', '09126', '0908', 'Kursi Khrom', '', '', '', '1', 'default.jpg', 'UM-KUR04-005.png', 143, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-006', 'PK-UM-KUR04-006', 'PMI/001/001', '900', '09097', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', '1', 'default.jpg', 'UM-KUR04-006.png', 144, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-007', 'PK-UM-KUR04-007', 'PMI/001/001', '900', '09097', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', '1', 'default.jpg', 'UM-KUR04-007.png', 145, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-008', 'PK-UM-KUR04-008', 'PMI/001/001', '900', '09097', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', '1', 'default.jpg', 'UM-KUR04-008.png', 146, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-009', 'PK-UM-KUR04-009', 'PMI/001/001', '900', '09113', '0908', 'Kursi Khrom', '', '', '', '1', 'default.jpg', 'UM-KUR04-009.png', 147, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-010', 'PK-UM-KUR04-010', 'PMI/001/001', '900', '09113', '0908', 'Kursi Khrom', '', '', '', '1', 'default.jpg', 'UM-KUR04-010.png', 148, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-011', 'PK-UM-KUR04-011', 'PMI/001/001', '900', '09113', '0908', 'Kursi Khrom', '', '', '', '1', 'default.jpg', 'UM-KUR04-011.png', 149, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-012', 'PK-UM-KUR04-012', 'PMI/001/001', '900', '09113', '0908', 'Kursi Khrom', '', '', '', '1', 'default.jpg', 'UM-KUR04-012.png', 150, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR04-013', 'PK-UM-KUR04-013', 'PMI/001/001', '900', '09111', '0908', 'Kursi Khrom', 'Chitose', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-013.png', 151, '001', 'UDD Kab. Tangerang', 2007, '1'),
('UM-KUR04-014', 'PK-UM-KUR04-014', 'PMI/001/001', '900', '09111', '0908', 'Kursi Khrom', '', 'Biru', '', '1', 'default.jpg', 'UM-KUR04-014.png', 152, '001', 'UDD Kab. Tangerang', 2007, '1'),
('UM-KUR04-015', 'PK-UM-KUR04-015', 'PMI/001/001', '900', '09111', '0908', 'Kursi Khrom', '', 'Biru', '', '1', 'default.jpg', 'UM-KUR04-015.png', 153, '001', 'UDD Kab. Tangerang', 2007, '1'),
('UM-KUR04-016', 'PK-UM-KUR04-016', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-016.png', 154, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-017', 'PK-UM-KUR04-017', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-017.png', 155, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-018', 'PK-UM-KUR04-018', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-018.png', 156, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-019', 'PK-UM-KUR04-019', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-019.png', 157, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-020', 'PK-UM-KUR04-020', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-020.png', 158, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-021', 'PK-UM-KUR04-021', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-021.png', 159, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-022', 'PK-UM-KUR04-022', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-022.png', 160, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-023', 'PK-UM-KUR04-023', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-023.png', 161, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-024', 'PK-UM-KUR04-024', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-024.png', 162, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-025', 'PK-UM-KUR04-025', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-025.png', 163, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-026', 'PK-UM-KUR04-026', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-026.png', 164, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-027', 'PK-UM-KUR04-027', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-027.png', 165, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-028', 'PK-UM-KUR04-028', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-028.png', 166, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-029', 'PK-UM-KUR04-029', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-029.png', 167, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-030', 'PK-UM-KUR04-030', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-030.png', 168, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-031', 'PK-UM-KUR04-031', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-031.png', 169, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-032', 'PK-UM-KUR04-032', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-032.png', 170, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-033', 'PK-UM-KUR04-033', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-033.png', 171, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-034', 'PK-UM-KUR04-034', 'PMI/001/001', '900', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', '1', 'default.jpg', 'UM-KUR04-034.png', 172, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-035', 'PK-UM-KUR04-035', 'PMI/001/001', '900', '09139', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', '1', 'default.jpg', 'UM-KUR05-001.png', 173, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR04-036', 'PK-UM-KUR04-036', 'PMI/001/001', '900', '09139', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', '1', 'default.jpg', 'UM-KUR05-002.png', 174, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR05-001', 'PK-UM-KUR05-001', 'PMI/001/001', '900', '09126', '0908', 'Kursi Lipat', '', 'Alas Bulat', '', '1', 'default.jpg', 'UM-KUR05-001.png', 201, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR05-002', 'PK-UM-KUR05-002', 'PMI/001/001', '900', '09126', '0908', 'Kursi Lipat', '', 'Alas Bulat', '', '1', 'default.jpg', 'UM-KUR05-002.png', 202, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR05-003', 'PK-UM-KUR05-003', 'PMI/001/001', '900', '09139', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', '1', 'default.jpg', 'UM-KUR05-003.png', 175, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR05-004', 'PK-UM-KUR05-004', 'PMI/001/001', '900', '09098', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', '1', 'default.jpg', 'UM-KUR05-004.png', 176, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR05-005', 'PK-UM-KUR05-005', 'PMI/001/001', '900', '09098', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', '1', 'default.jpg', 'UM-KUR05-005.png', 177, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR05-006', 'PK-UM-KUR05-006', 'PMI/001/001', '900', '09098', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', '1', 'default.jpg', 'UM-KUR05-006.png', 178, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR05-007', 'PK-UM-KUR05-007', 'PMI/001/001', '900', '09098', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', '1', 'default.jpg', 'UM-KUR05-007.png', 179, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR05-008', 'PK-UM-KUR05-008', 'PMI/001/001', '900', '09100', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', '1', 'default.jpg', 'UM-KUR05-008.png', 180, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-KUR06-001', 'PK-UM-KUR06-001', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', 'Merah', '', '1', 'default.jpg', 'UM-KUR06-001.png', 181, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-002', 'PK-UM-KUR06-002', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-002.png', 182, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-003', 'PK-UM-KUR06-003', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-003.png', 183, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-004', 'PK-UM-KUR06-004', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-004.png', 184, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-005', 'PK-UM-KUR06-005', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-005.png', 185, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-006', 'PK-UM-KUR06-006', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-006.png', 186, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-007', 'PK-UM-KUR06-007', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-007.png', 187, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-008', 'PK-UM-KUR06-008', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-008.png', 188, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-009', 'PK-UM-KUR06-009', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-009.png', 189, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-010', 'PK-UM-KUR06-010', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-010.png', 190, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-011', 'PK-UM-KUR06-011', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-011.png', 191, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-012', 'PK-UM-KUR06-012', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-012.png', 192, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-013', 'PK-UM-KUR06-013', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-013.png', 193, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-014', 'PK-UM-KUR06-014', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-014.png', 194, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-015', 'PK-UM-KUR06-015', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-015.png', 195, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-016', 'PK-UM-KUR06-016', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-016.png', 196, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-017', 'PK-UM-KUR06-017', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-017.png', 197, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-018', 'PK-UM-KUR06-018', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-018.png', 198, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-019', 'PK-UM-KUR06-019', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-019.png', 199, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-KUR06-020', 'PK-UM-KUR06-020', 'PMI/001/001', '900', '09129', '0908', 'Kursi Aftap Mu', '', '', '', '1', 'default.jpg', 'UM-KUR06-016.png', 200, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LEM01-001', 'PK-UM-LEM01-001', 'PMI/001/001', '900', '09097', '0908', 'Lemari Kayu', '', '', '', '1', 'default.jpg', 'UM-LEM01-001.png', 203, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LEM01-002', 'PK-UM-LEM01-002', 'PMI/001/001', '900', '09097', '0908', 'Lemari Kayu', '', '', '', '1', 'default.jpg', 'UM-LEM01-002.png', 204, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LEM01-003', 'PK-UM-LEM01-003', 'PMI/001/001', '900', '09140', '0908', 'Lemari Kayu', '', '', '', '1', 'default.jpg', 'UM-LEM01-003.png', 205, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LEM01-004', 'PK-UM-LEM01-004', 'PMI/001/001', '900', '09118', '0908', 'Lemari Kayu', '', '', '', '1', 'default.jpg', 'UM-LEM01-004.png', 206, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LEM01-005', 'PK-UM-LEM01-005', 'PMI/001/001', '900', '09096', '0908', 'Lemari Besar', '', '', '', '1', 'default.jpg', 'UM-LEM03-001.png', 207, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LEM02-001', 'PK-UM-LEM02-001', 'PMI/001/001', '900', '09136', '0908', 'Lemari Arsip Besar', 'Bangun  Mandiri', '', '', '1', 'default.jpg', 'UM-LEM02-001.png', 208, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LEM02-002', 'PK-UM-LEM02-002', 'PMI/001/001', '900', '09121', '0908', 'Lemari Arsip Besar', 'Bangun  Mandiri', '', '', '1', 'default.jpg', 'UM-LEM02-002.png', 209, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LEM02-003', 'PK-UM-LEM02-003', 'PMI/001/001', '900', '09141', '0908', 'Lemari Arsip Besar', 'Bangun  Mandiri', '', '', '1', 'default.jpg', 'UM-LEM02-003.png', 210, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-LEM03-001', 'PK-UM-LEM03-001', 'PMI/001/001', '900', '09103', '0908', 'Lemari Gantung ', '', '', '', '1', 'default.jpg', 'UM-LEM03-001.png', 211, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-LEM03-002', 'PK-UM-LEM03-002', 'PMI/001/001', '900', '09129', '0908', 'Lemari Gantung ', '', '', '', '1', 'default.jpg', 'UM-LEM03-002.png', 212, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-LEM03-003', 'PK-UM-LEM03-003', 'PMI/001/001', '900', '09104', '0908', 'Lemari Gantung ', '', '', '', '1', 'default.jpg', 'UM-LEM03-003.png', 213, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-LEM03-004', 'PK-UM-LEM03-004', 'PMI/001/001', '900', '09117', '0908', 'Lemari Gantung ', '', 'Terbuka', '', '1', 'default.jpg', 'UM-LEM03-004.png', 214, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-LEM03-005', 'PK-UM-LEM03-005', 'PMI/001/001', '900', '09127', '0908', 'Lemari Gantung ', '', '', '', '1', 'default.jpg', 'UM-LEM03-005.png', 215, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-LEM03-006', 'PK-UM-LEM03-006', 'PMI/001/001', '900', '09125', '0908', 'Lemari Gantung ', '', '', '', '1', 'default.jpg', 'UM-LEM03-006.png', 216, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-LEM04-001', 'PK-UM-LEM04-001', 'PMI/001/001', '900', '09126', '0908', 'Lemari Kecil', '', '4 Susun', '', '1', 'default.jpg', 'UM-LEM04-001.png', 217, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LET01-001', 'PK-UM-LET01-001', 'PMI/001/001', '900', '09136', '0908', 'Letter Tray', '', '', '', '1', 'default.jpg', 'UM-LET01-001.png', 319, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LET01-002', 'PK-UM-LET01-002', 'PMI/001/001', '900', '09125', '0908', 'Letter Tray', '', '', '', '1', 'default.jpg', 'UM-LET01-002.png', 320, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LET01-003', 'PK-UM-LET01-003', 'PMI/001/001', '900', '09125', '0908', 'Letter Tray', '', '', '', '1', 'default.jpg', 'UM-LET01-003.png', 321, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LET01-004', 'PK-UM-LET01-004', 'PMI/001/001', '900', '09125', '0908', 'Letter Tray', '', '', '', '1', 'default.jpg', 'UM-LET01-004.png', 322, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-LET01-005', 'PK-UM-LET01-005', 'PMI/001/001', '900', '09097', '0908', 'Letter Tray', '', '', '', '1', 'default.jpg', 'UM-LET01-005.png', 323, '003', 'UDD Kab. Tangerang', 2015, '1'),
('UM-LET01-006', 'PK-UM-LET01-006', 'PMI/001/001', '900', '09156', '0908', 'Letter Tray', '', '', '', '1', 'default.jpg', 'UM-LET01-006.png', 324, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ-001', 'PK-UM-MEJ-001', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ-001.png', 417, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-001', 'PK-UM-MEJ01-001', 'PMI/001/001', '900', '09097', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-001.png', 48, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ01-002', 'PK-UM-MEJ01-002', 'PMI/001/001', '900', '09097', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-002.png', 49, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-003', 'PK-UM-MEJ01-003', 'PMI/001/001', '900', '09104', '0908', 'Meja Kerja    ', '', '', '', '1', 'default.jpg', 'UM-MEJ01-003.png', 50, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-004', 'PK-UM-MEJ01-004', 'PMI/001/001', '900', '09113', '0908', 'Meja Kerja ', '', '', '', '1', 'default.jpg', 'UM-MEJ01-004.png', 51, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-007', 'PK-UM-MEJ01-007', 'PMI/001/001', '900', '09110', '0908', 'Meja Kerja', 'Kharisma', 'HM 1/2 Biro', '', '1', 'default.jpg', 'UM-MEJ01-007.png', 52, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-008', 'PK-UM-MEJ01-008', 'PMI/001/001', '900', '09126', '0908', 'Meja Kerja', 'Kharisma', '', '', '1', 'default.jpg', 'UM-MEJ01-008.png', 53, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ01-009', 'PK-UM-MEJ01-009', 'PMI/001/001', '900', '09126', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-009.png', 54, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-010', 'PK-UM-MEJ01-010', 'PMI/001/001', '900', '09126', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-010.png', 55, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-011', 'PK-UM-MEJ01-011', 'PMI/001/001', '900', '09126', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-011.png', 56, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-012', 'PK-UM-MEJ01-012', 'PMI/001/001', '900', '09126', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-012.png', 57, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-013', 'PK-UM-MEJ01-013', 'PMI/001/001', '900', '09111', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-013.png', 58, '001', 'UDD Kab. Tangerang', 2007, '1'),
('UM-MEJ01-014', 'PK-UM-MEJ01-014', 'PMI/001/001', '900', '09111', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-014.png', 59, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-015', 'PK-UM-MEJ01-015', 'PMI/001/001', '900', '09111', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-015.png', 60, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-017', 'PK-UM-MEJ01-017', 'PMI/001/001', '900', '09121', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-017.png', 61, '001', 'UDD Kab. Tangerang', 1992, '1'),
('UM-MEJ01-018', 'PK-UM-MEJ01-018', 'PMI/001/001', '900', '09121', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-018.png', 62, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-019', 'PK-UM-MEJ01-019', 'PMI/001/001', '900', '09097', '0908', 'Meja Kerja', 'Husen', 'Biro MC', '', '1', 'default.jpg', 'UM-MEJ01-019.png', 63, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-MEJ01-020', 'PK-UM-MEJ01-020', 'PMI/001/001', '900', '09121', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-020.png', 65, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-021', 'PK-UM-MEJ01-021', 'PMI/001/001', '900', '09121', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-021.png', 66, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ01-022', 'PK-UM-MEJ01-022', 'PMI/001/001', '900', '09121', '0908', 'Meja Kerja', '', '', '', '1', 'default.jpg', 'UM-MEJ01-019.png', 64, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ02-001', 'PK-UM-MEJ02-001', 'PMI/001/001', '900', '09127', '0908', 'Meja Lab', '', '', '', '1', 'default.jpg', 'UM-MEJ02-001.png', 67, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ02-002', 'PK-UM-MEJ02-002', 'PMI/001/001', '900', '09104', '0908', 'Meja lab            ', '', '', '', '1', 'default.jpg', 'UM-MEJ02-002.png', 68, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ02-003', 'PK-UM-MEJ02-003', 'PMI/001/001', '900', '09103', '0908', 'Meja Lab', '', '', '', '1', 'default.jpg', 'UM-MEJ02-003.png', 69, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ02-004', 'PK-UM-MEJ02-004', 'PMI/001/001', '900', '09103', '0908', 'Meja Lab', '', '', '', '1', 'default.jpg', 'UM-MEJ02-004.png', 70, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ02-005', 'PK-UM-MEJ02-005', 'PMI/001/001', '900', '09117', '0908', 'Meja Lab', '', '', '', '1', 'default.jpg', 'UM-MEJ02-005.png', 71, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ02-006', 'PK-UM-MEJ02-006', 'PMI/001/001', '900', '09117', '0908', 'Meja Lab', '', '', '', '1', 'default.jpg', 'UM-MEJ02-006.png', 72, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ02-007', 'PK-UM-MEJ02-007', 'PMI/001/001', '900', '09117', '0908', 'Meja Lab', '', 'Meja Komp,Meja Lab', '', '1', 'default.jpg', 'UM-MEJ02-007.png', 73, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ02-008', 'PK-UM-MEJ02-008', 'PMI/001/001', '900', '09125', '0908', 'Meja Lab', '', 'Meja kerja,Loket 1 &', '', '1', 'default.jpg', 'UM-MEJ02-008.png', 74, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ02-009', 'PK-UM-MEJ02-009', 'PMI/001/001', '900', '09128', '0908', 'Meja Lab', '', '', '', '1', 'default.jpg', 'UM-MEJ02-009.png', 75, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ03-001', 'PK-UM-MEJ03-001', 'PMI/001/001', '900', '09129', '0908', 'Meja Instrumen', '', '', '', '1', 'default.jpg', 'UM-MEJ03-001.png', 76, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ03-002', 'PK-UM-MEJ03-002', 'PMI/001/001', '900', '09129', '0908', 'Meja Instrumen', '', '', '', '1', 'default.jpg', 'UM-MEJ03-002.png', 77, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ03-003', 'PK-UM-MEJ03-003', 'PMI/001/001', '900', '09129', '0908', 'Meja Instrumen', '', '', '', '1', 'default.jpg', 'UM-MEJ03-003.png', 78, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ05-001', 'PK-UM-MEJ05-001', 'PMI/001/001', '900', '09111', '0908', 'Meja Leter L Hitam', '', '', '', '1', 'default.jpg', 'UM-MEJ05-001.png', 79, '002', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ06-001', 'PK-UM-MEJ06-001', 'PMI/001/001', '900', '09115', '0908', 'Meja Meeting (1 Set)', '', '', '', '1', 'default.jpg', 'UM-MEJ06-001.png', 80, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-MEJ07-001', 'PK-UM-MEJ07-001', 'PMI/001/001', '900', '09130', '0908', 'Meja Gantung', '', 'Ambalan', '', '1', 'default.jpg', 'UM-MEJ07-001.png', 81, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ07-002', 'PK-UM-MEJ07-002', 'PMI/001/001', '900', '09130', '0908', 'Meja Gantung', '', 'Ambalan', '', '1', 'default.jpg', 'UM-MEJ07-002.png', 82, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-001', 'PK-UM-MEJ08-001', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', 'Lion Star', 'Merah Muda', '', '1', 'default.jpg', 'UM-MEJ08-001.png', 83, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-002', 'PK-UM-MEJ08-002', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-002.png', 84, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-003', 'PK-UM-MEJ08-003', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-003.png', 85, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-004', 'PK-UM-MEJ08-004', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-004.png', 86, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-005', 'PK-UM-MEJ08-005', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-005.png', 87, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-006', 'PK-UM-MEJ08-006', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-006.png', 88, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-007', 'PK-UM-MEJ08-007', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-007.png', 89, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-008', 'PK-UM-MEJ08-008', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-008.png', 90, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-009', 'PK-UM-MEJ08-009', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-009.png', 91, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-010', 'PK-UM-MEJ08-010', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-010.png', 92, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-011', 'PK-UM-MEJ08-011', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-011.png', 93, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-012', 'PK-UM-MEJ08-012', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-012.png', 94, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MEJ08-013', 'PK-UM-MEJ08-013', 'PMI/001/001', '900', '09129', '0908', 'Meja Aftap MU', '', '', '', '1', 'default.jpg', 'UM-MEJ08-013.png', 95, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-MIC-001', 'PK-UM-MIC-001', 'PMI/001/001', '900', '09125', '0908', 'Microphone', '', '', '', '1', 'default.jpg', 'UM-MIC-001.png', 372, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-PAL01-001', 'PK-UM-PAL01-001', 'PMI/001/001', '900', '09097', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-001.png', 239, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAL01-002', 'PK-UM-PAL01-002', 'PMI/001/001', '900', '09097', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-002.png', 240, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAL01-003', 'PK-UM-PAL01-003', 'PMI/001/001', '900', '09097', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-003.png', 241, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAL01-004', 'PK-UM-PAL01-004', 'PMI/001/001', '900', '09097', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-004.png', 242, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAL01-005', 'PK-UM-PAL01-005', 'PMI/001/001', '900', '09097', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-005.png', 243, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAL01-006', 'PK-UM-PAL01-006', 'PMI/001/001', '900', '09129', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-006.png', 244, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAL01-007', 'PK-UM-PAL01-007', 'PMI/001/001', '900', '09129', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-007.png', 245, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAL01-008', 'PK-UM-PAL01-008', 'PMI/001/001', '900', '09129', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-008.png', 246, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAL01-009', 'PK-UM-PAL01-009', 'PMI/001/001', '900', '09129', '0908', 'Palet Plastik', '', '', '', '1', 'default.jpg', 'UM-PAL01-009.png', 247, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-PAP-001', 'PK-UM-PAP-001', 'PMI/001/001', '900', '09113', '0908', 'Paper Shradder', 'Krisbow', '', '', '1', 'default.jpg', 'UM-PAP-001.png', 226, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-PEL-001', 'PK-UM-PEL-001', 'PMI/001/001', '900', '09129', '0908', 'Pelbed ', '', '', '', '1', 'default.jpg', 'UM-PEL-001.png', 419, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-PIN-001', 'PK-UM-PIN-001', 'PMI/001/001', '900', '09129', '0908', 'Pinset ', '', '', '', '1', 'default.jpg', 'UM-PIN-001.png', 452, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK-001', 'PK-UM-RAK-001', 'PMI/001/001', '900', '09129', '0908', 'Rak Tabung', '', '', '', '1', 'default.jpg', 'UM-RAK-001.png', 459, '001', 'UDD Kab. Tangerang', 2013, '1'),
('UM-RAK01-001', 'PK-UM-RAK01-001', 'PMI/001/001', '900', '09098', '0908', 'Rak Susun', '', '', '', '1', 'default.jpg', 'UM-RAK01-001.png', 100, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK01-002', 'PK-UM-RAK01-002', 'PMI/001/001', '900', '09134', '0908', 'Rak Susun', '', '', '', '1', 'default.jpg', 'UM-RAK01-002.png', 102, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK01-003', 'PK-UM-RAK01-003', 'PMI/001/001', '900', '09121', '0908', 'Rak Susun', '', '', '', '1', 'default.jpg', 'UM-RAK01-003.png', 101, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK02-001', 'PK-UM-RAK02-001', 'PMI/001/001', '900', '09097', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-001.png', 248, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK02-002', 'PK-UM-RAK02-002', 'PMI/001/001', '900', '09097', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-002.png', 249, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK02-003', 'PK-UM-RAK02-003', 'PMI/001/001', '900', '09097', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-003.png', 250, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK02-004', 'PK-UM-RAK02-004', 'PMI/001/001', '900', '09097', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-004.png', 251, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK02-005', 'PK-UM-RAK02-005', 'PMI/001/001', '900', '09129', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-005.png', 252, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK02-006', 'PK-UM-RAK02-006', 'PMI/001/001', '900', '09121', '0908', 'Rak Barang', '', 'Server', '', '1', 'default.jpg', 'UM-RAK02-006.png', 253, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK02-007', 'PK-UM-RAK02-007', 'PMI/001/001', '900', '09121', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-007.png', 254, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK02-008', 'PK-UM-RAK02-008', 'PMI/001/001', '900', '09113', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-008.png', 255, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-RAK02-009', 'PK-UM-RAK02-009', 'PMI/001/001', '900', '09113', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-009.png', 256, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-RAK02-010', 'PK-UM-RAK02-010', 'PMI/001/001', '900', '09113', '0908', 'Rak Barang', '', '', '', '1', 'default.jpg', 'UM-RAK02-010.png', 257, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-RAK03-001', 'PK-UM-RAK03-001', 'PMI/001/001', '900', '09097', '0908', 'Rak File', '', '', '', '1', 'default.jpg', 'UM-RAK03-001.png', 258, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-RAK03-002', 'PK-UM-RAK03-002', 'PMI/001/001', '900', '09097', '0908', 'Rak File', '', '', '', '1', 'default.jpg', 'UM-RAK03-002.png', 259, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-SAM01-001', 'PK-UM-SAM01-001', 'PMI/001/001', '900', '09097', '0908', 'Tempat Sampah ', 'Shinpo', 'Bulat', '', '1', 'default.jpg', 'UM-SAM01-001.png', 285, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-002', 'PK-UM-SAM01-002', 'PMI/001/001', '900', '09144', '0908', 'Tempat Sampah ', 'Lion Star', '', '', '1', 'default.jpg', 'UM-SAM01-002.png', 286, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-003', 'PK-UM-SAM01-003', 'PMI/001/001', '900', '09111', '0908', 'Tempat Sampah', '', 'Keranjang', '', '1', 'default.jpg', 'UM-SAM01-003.png', 287, '002', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-004', 'PK-UM-SAM01-004', 'PMI/001/001', '900', '09148', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-004.png', 288, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-005', 'PK-UM-SAM01-005', 'PMI/001/001', '900', '09149', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-005.png', 289, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-006', 'PK-UM-SAM01-006', 'PMI/001/001', '900', '09150', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-006.png', 290, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-007', 'PK-UM-SAM01-007', 'PMI/001/001', '900', '09129', '0908', 'Tempat Sampah', '', 'Stainles 3 box', '', '1', 'default.jpg', 'UM-SAM01-007.png', 291, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-SAM01-008', 'PK-UM-SAM01-008', 'PMI/001/001', '900', '09129', '0908', 'Tempat Sampah', '', 'Stainles 3 box', '', '1', 'default.jpg', 'UM-SAM01-008.png', 292, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-009', 'PK-UM-SAM01-009', 'PMI/001/001', '900', '09129', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-009.png', 293, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-010', 'PK-UM-SAM01-010', 'PMI/001/001', '900', '09129', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-010.png', 294, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-011', 'PK-UM-SAM01-011', 'PMI/001/001', '900', '09129', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-011.png', 295, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-012', 'PK-UM-SAM01-012', 'PMI/001/001', '900', '09106', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-012.png', 296, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-013', 'PK-UM-SAM01-013', 'PMI/001/001', '900', '09103', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-013.png', 297, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-014', 'PK-UM-SAM01-014', 'PMI/001/001', '900', '09117', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-014.png', 298, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-015', 'PK-UM-SAM01-015', 'PMI/001/001', '900', '09104', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-015.png', 299, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-016', 'PK-UM-SAM01-016', 'PMI/001/001', '900', '09151', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-016.png', 300, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-017', 'PK-UM-SAM01-017', 'PMI/001/001', '900', '09152', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-017.png', 301, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-018', 'PK-UM-SAM01-018', 'PMI/001/001', '900', '09153', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-018.png', 302, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-019', 'PK-UM-SAM01-019', 'PMI/001/001', '900', '09154', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-019.png', 303, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-020', 'PK-UM-SAM01-020', 'PMI/001/001', '900', '09155', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-020.png', 304, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-021', 'PK-UM-SAM01-021', 'PMI/001/001', '900', '09111', '0908', 'Tempat Sampah', '', 'Tertutup', '', '1', 'default.jpg', 'UM-SAM01-021.png', 305, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-022', 'PK-UM-SAM01-022', 'PMI/001/001', '900', '09110', '0908', 'Tempat Sampah', 'Shinpo', '', '', '1', 'default.jpg', 'UM-SAM01-022.png', 306, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-023', 'PK-UM-SAM01-023', 'PMI/001/001', '900', '09121', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-023.png', 307, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-024', 'PK-UM-SAM01-024', 'PMI/001/001', '900', '09126', '0908', 'Tempat Sampah', 'Shinpo', '', '', '1', 'default.jpg', 'UM-SAM01-024.png', 308, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-025', 'PK-UM-SAM01-025', 'PMI/001/001', '900', '09145', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-025.png', 309, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM01-026', 'PK-UM-SAM01-026', 'PMI/001/001', '900', '09145', '0908', 'Tempat Sampah', '', '', '', '1', 'default.jpg', 'UM-SAM01-026.png', 310, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM02-001', 'PK-UM-SAM02-001', 'PMI/001/001', '900', '09145', '0908', 'Tempat Sampah Besar', '', '', '', '1', 'default.jpg', 'UM-SAM02-001.png', 311, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAM02-002', 'PK-UM-SAM02-002', 'PMI/001/001', '900', '09111', '0908', 'Tempat Sampah Besar', '', '', '', '1', 'default.jpg', 'UM-SAM02-002.png', 312, '001', 'UDD Kab. Tangerang', 2007, '1'),
('UM-SAR-001', 'PK-UM-SAR-001', 'PMI/001/001', '900', '09129', '0908', 'Sarung Bantal ', '', '', '', '1', 'default.jpg', 'UM-SAR-001.png', 394, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAR-002', 'PK-UM-SAR-002', 'PMI/001/001', '900', '09129', '0908', 'Sarung Coolbox Biru', '', '', '', '1', 'default.jpg', 'UM-SAR-001.png', 395, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAR-003', 'PK-UM-SAR-003', 'PMI/001/001', '900', '09129', '0908', 'Sarung Cool Box Mera', '', '', '', '1', 'default.jpg', 'UM-SAR-001.png', 396, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAR-004', 'PK-UM-SAR-004', 'PMI/001/001', '900', '09129', '0908', 'Sarung Cool Box Puti', '', '', '', '1', 'default.jpg', 'UM-SAR-001.png', 397, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAR-005', 'PK-UM-SAR-005', 'PMI/001/001', '900', '09129', '0908', 'Sarung Kotak HB', '', '', '', '1', 'default.jpg', 'UM-SAR-001.png', 398, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAR-006', 'PK-UM-SAR-006', 'PMI/001/001', '900', '09129', '0908', 'Sarung Pelbed', '', '', '', '1', 'default.jpg', 'UM-SAR-001.png', 399, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SAR-007', 'PK-UM-SAR-007', 'PMI/001/001', '900', '09129', '0908', 'Sarung Bantal ', '', '', '', '1', 'default.jpg', 'UM-SAR-001.png', 406, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SEL-001', 'PK-UM-SEL-001', 'PMI/001/001', '900', '09129', '0908', 'Selimut Donor ', '', '', '', '1', 'default.jpg', 'UM-SEL-001.png', 407, '001', 'UDD Kab. Tangerang', 2018, '2'),
('UM-SEL-002', 'PK-UM-SEL-002', 'PMI/001/001', '900', '09146', '0908', 'Handphone', 'Xiaomi', '', '', '1', 'default.jpg', 'UM-SEL-001.png', 282, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SEL-003', 'PK-UM-SEL-003', 'PMI/001/001', '900', '09129', '0908', 'Selimut Aferesis', '', '', '', '1', 'default.jpg', 'UM-SEL-001.png', 408, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SOF01-001', 'PK-UM-SOF01-001', 'PMI/001/001', '900', '09135', '0908', '1 Set Sofa ', '', '', '', '1', 'default.jpg', 'UM-SOF01-001.png', 103, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-SOF01-002', 'PK-UM-SOF01-002', 'PMI/001/001', '900', '09110', '0908', '1 Set Sofa ', '', '', '', '1', 'default.jpg', 'UM-SOF01-002.png', 104, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-STB-001', 'PK-UM-STB-001', 'PMI/001/001', '900', '09125', '0908', 'Stabilizer', '', '', '', '1', 'default.jpg', 'UM-STB-001.png', 358, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-002', 'PK-UM-STB-002', 'PMI/001/001', '900', '09125', '0908', 'Stabilizer', '', 'FX500A', '', '1', 'default.jpg', 'UM-STB-002.png', 359, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-003', 'PK-UM-STB-003', 'PMI/001/001', '900', '09103', '0908', 'Stabilizer', 'Bonic', '', '', '1', 'default.jpg', 'UM-STB-003.png', 360, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-004', 'PK-UM-STB-004', 'PMI/001/001', '900', '09125', '0908', 'Stabilizer', 'Bonic', '', '', '1', 'default.jpg', 'UM-STB-004.png', 361, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-005', 'PK-UM-STB-005', 'PMI/001/001', '900', '09161', '0908', 'Stabilizer', 'Augen', 'ST 2000', '', '1', 'default.jpg', 'UM-STB-005.png', 362, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-006', 'PK-UM-STB-006', 'PMI/001/001', '900', '09161', '0908', 'Stabilizer', 'Starvolt', 'ST 2000', '', '1', 'default.jpg', 'UM-STB-006.png', 363, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-007', 'PK-UM-STB-007', 'PMI/001/001', '900', '09161', '0908', 'Stabilizer', 'Starvolt', 'ST 2000', '', '1', 'default.jpg', 'UM-STB-007.png', 364, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-008', 'PK-UM-STB-008', 'PMI/001/001', '900', '09117', '0908', 'Stabilizer', 'Starvolt', '3000V', '', '1', 'default.jpg', 'UM-STB-008.png', 365, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-009', 'PK-UM-STB-009', 'PMI/001/001', '900', '09125', '0908', 'Stabilizer', 'Matsumega', '', '', '1', 'default.jpg', 'UM-STB-009.png', 366, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STB-010', 'PK-UM-STB-010', 'PMI/001/001', '900', '09125', '0908', 'Stabilizer', 'Bonic', '2 Terminal', '', '1', 'default.jpg', 'UM-STB-007.png', 367, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STE-001', 'PK-UM-STE-001', 'PMI/001/001', '900', '09129', '0908', 'Stetoskop', '', '', '', '1', 'default.jpg', 'UM-STE-001.png', 434, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STE-002', 'PK-UM-STE-002', 'PMI/001/001', '900', '09129', '0908', 'Stetoskop', '', '', '', '1', 'default.jpg', 'UM-STE-001.png', 435, '001', 'UDD Kab. Tangerang', 2014, '1'),
('UM-STE-003', 'PK-UM-STE-003', 'PMI/001/001', '900', '09129', '0908', 'Stetoskop', '', 'Air Raksa', '', '1', 'default.jpg', 'UM-STE-001.png', 436, '001', 'UDD Kab. Tangerang', 2018, '1'),
('UM-STE01-001', 'PK-UM-STE01-001', 'PMI/001/001', '900', '09097', '0908', 'Steker T ', 'Broco', '', '', '1', 'default.jpg', 'UM-STE01-001.png', 260, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-STE01-002', 'PK-UM-STE01-002', 'PMI/001/001', '900', '09097', '0908', 'Steker T ', 'Broco', '', '', '1', 'default.jpg', 'UM-STE01-002.png', 261, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-STE01-003', 'PK-UM-STE01-003', 'PMI/001/001', '900', '09097', '0908', 'Steker T ', 'Broco', '', '', '1', 'default.jpg', 'UM-STE01-003.png', 262, '001', 'UDD Kab. Tangerang', 2019, '1');
INSERT INTO `trans_aset` (`kode_aset`, `kode_pengajuan`, `no_po`, `kode_anggaran`, `kode_dept`, `kode_jenis_barang`, `nama_barang`, `merk_barang`, `tipe_barang`, `warna_barang`, `qty`, `gambar`, `gambar_qr`, `no_urut`, `kode_sumber`, `instansi`, `tahun`, `kode_status`) VALUES
('UM-STE01-004', 'PK-UM-STE01-004', 'PMI/001/001', '900', '09097', '0908', 'Steker T ', 'Broco', '', '', '1', 'default.jpg', 'UM-STE01-004.png', 263, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-STE01-005', 'PK-UM-STE01-005', 'PMI/001/001', '900', '09125', '0908', 'Steker T ', 'Broco', '', '', '1', 'default.jpg', 'UM-STE01-005.png', 264, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STE01-006', 'PK-UM-STE01-006', 'PMI/001/001', '900', '09125', '0908', 'Steker T ', 'Broco', '', '', '1', 'default.jpg', 'UM-STE01-006.png', 265, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STE01-007', 'PK-UM-STE01-007', 'PMI/001/001', '900', '09103', '0908', 'Steker T ', 'Broco', '', '', '1', 'default.jpg', 'UM-STE01-007.png', 266, '003', 'UDD Kab. Tangerang', 2020, '1'),
('UM-STE01-008', 'PK-UM-STE01-008', 'PMI/001/001', '900', '09097', '0908', 'Steker T ', 'Broco', '144m 2X1,5', '', '1', 'default.jpg', 'UM-STE01-008.png', 267, '001', 'UDD Kab. Tangerang', 2019, '1'),
('UM-TAS-001', 'PK-UM-TAS-001', 'PMI/001/001', '900', '09129', '0908', 'Tas Sample', '', '', '', '1', 'default.jpg', 'UM-TAS-001.png', 432, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TAS-002', 'PK-UM-TAS-002', 'PMI/001/001', '900', '09129', '0908', 'Tas Bantalan tangan', '', '', '', '1', 'default.jpg', 'UM-TAS-001.png', 400, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TAS-003', 'PK-UM-TAS-003', 'PMI/001/001', '900', '09129', '0908', 'Tas Sample', '', '', '', '1', 'default.jpg', 'UM-TAS-001.png', 430, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TAS-004', 'PK-UM-TAS-004', 'PMI/001/001', '900', '09129', '0908', 'Tas Sample', '', '', '', '1', 'default.jpg', 'UM-TAS-001.png', 431, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-001', 'PK-UM-TEL-001', 'PMI/001/001', '900', '09111', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-001.png', 269, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-002', 'PK-UM-TEL-002', 'PMI/001/001', '900', '09126', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-002.png', 270, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-003', 'PK-UM-TEL-003', 'PMI/001/001', '900', '09145', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-003.png', 271, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-004', 'PK-UM-TEL-004', 'PMI/001/001', '900', '09121', '0908', 'Telephone', 'Panasonic', 'KX-T7730', '', '1', 'default.jpg', 'UM-TEL-004.png', 272, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-005', 'PK-UM-TEL-005', 'PMI/001/001', '900', '09115', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-005.png', 273, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-006', 'PK-UM-TEL-006', 'PMI/001/001', '900', '09097', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-006.png', 274, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-007', 'PK-UM-TEL-007', 'PMI/001/001', '900', '09119', '0908', 'Telephone', 'Panasonic', 'KX-T7730', '', '1', 'default.jpg', 'UM-TEL-007.png', 275, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-008', 'PK-UM-TEL-008', 'PMI/001/001', '900', '09129', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-008.png', 276, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-009', 'PK-UM-TEL-009', 'PMI/001/001', '900', '09125', '0908', 'Telephone', 'Panasonic', 'T91311', '', '1', 'default.jpg', 'UM-TEL-009.png', 277, '001', 'UDD Kab. Tangerang', 2015, '1'),
('UM-TEL-010', 'PK-UM-TEL-010', 'PMI/001/001', '900', '09104', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-010.png', 278, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-011', 'PK-UM-TEL-011', 'PMI/001/001', '900', '09103', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-011.png', 279, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-012', 'PK-UM-TEL-012', 'PMI/001/001', '900', '09117', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-012.png', 280, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL-013', 'PK-UM-TEL-013', 'PMI/001/001', '900', '09125', '0908', 'Telephone', 'Panasonic', '', '', '1', 'default.jpg', 'UM-TEL-013.png', 281, '001', 'UDD Kab. Tangerang', 2018, '1'),
('UM-TEL01-001', 'PK-UM-TEL01-001', 'PMI/001/001', '900', '09115', '0908', 'Televisi LED 32 Inc', 'LG', '', '', '1', 'default.jpg', 'UM-TEL01-001.png', 223, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL01-002', 'PK-UM-TEL01-002', 'PMI/001/001', '900', '09098', '0908', 'Televisi 32 Inc', '', '', '', '1', 'default.jpg', 'UM-TEL01-002.png', 224, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEL01-003', 'PK-UM-TEL01-003', 'PMI/001/001', '900', '09102', '0908', 'Televisi 40 Inc', 'LG', '', '', '1', 'default.jpg', 'UM-TEL01-003.png', 225, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEM-001', 'PK-UM-TEM-001', 'PMI/001/001', '900', '09129', '0908', 'Tempat Timbangan', '', '', '', '1', 'default.jpg', 'UM-TEM-001.png', 426, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEM-002', 'PK-UM-TEM-002', 'PMI/001/001', '900', '09129', '0908', 'Tempat Timbangan', '', '', '', '1', 'default.jpg', 'UM-TEM-001.png', 427, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TEM-003', 'PK-UM-TEM-003', 'PMI/001/001', '900', '09129', '0908', 'Tempat Timbangan', '', '', '', '1', 'default.jpg', 'UM-TEM-001.png', 428, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TIM-001', 'PK-UM-TIM-001', 'PMI/001/001', '900', '09129', '0908', 'Timbangan Badan', '', '', '', '1', 'default.jpg', 'UM-TIM-001.png', 422, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TIM-002', 'PK-UM-TIM-002', 'PMI/001/001', '900', '09129', '0908', 'Timbangan Badan', '', '', '', '1', 'default.jpg', 'UM-TIM-001.png', 423, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TIM-003', 'PK-UM-TIM-003', 'PMI/001/001', '900', '09129', '0908', 'Timbangan Badan', '', '', '', '1', 'default.jpg', 'UM-TIM-001.png', 424, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TIM-004', 'PK-UM-TIM-004', 'PMI/001/001', '900', '09129', '0908', 'Timbangan Badan', '', '', '', '1', 'default.jpg', 'UM-TIM-001.png', 425, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TIM-005', 'PK-UM-TIM-005', 'PMI/001/001', '900', '09129', '0908', 'Timbangan Badan', '', '', '', '1', 'default.jpg', 'UM-TIM-001.png', 429, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TL-01', 'ab99', 'PO02', '1212', '09160', '0908', 'sikat wc', 'dragon', 'a1212', 'biru', '1', 'default.jpg', 'UM-TL-01.png', 566, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-TRO-001', 'PK-UM-TRO-001', 'PMI/001/001', '900', '09129', '0908', 'Tromol Kasa', '', '', '', '1', 'default.jpg', 'UM-TRO-001.png', 447, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-UPS-001', 'PK-UM-UPS-001', 'PMI/001/001', '900', '09103', '0908', 'UPS ', 'Prolink', '', '', '1', 'default.jpg', 'UM-UPS-001.png', 349, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-UPS-002', 'PK-UM-UPS-002', 'PMI/001/001', '900', '09103', '0908', 'UPS ', 'APC', '', '', '1', 'default.jpg', 'UM-UPS-002.png', 350, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-UPS-003', 'PK-UM-UPS-003', 'PMI/001/001', '900', '09117', '0908', 'UPS ', 'Prolink', '', '', '1', 'default.jpg', 'UM-UPS-003.png', 351, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-UPS-004', 'PK-UM-UPS-004', 'PMI/001/001', '900', '09103', '0908', 'UPS ', 'Prolink', 'Smart UPS C2000', '', '1', 'default.jpg', 'UM-UPS-004.png', 352, '001', 'UDD Kab. Tangerang', 2018, '1'),
('UM-UPS-005', 'PK-UM-UPS-005', 'PMI/001/001', '900', '09103', '0908', 'UPS ', 'APC', '5100C ICA', '', '1', 'default.jpg', 'UM-UPS-005.png', 353, '001', 'UDD Kab. Tangerang', 2013, '1'),
('UM-UPS-006', 'PK-UM-UPS-006', 'PMI/001/001', '900', '09103', '0908', 'UPS ', 'SIN', '5100C ICA', '', '1', 'default.jpg', 'UM-UPS-006.png', 354, '001', 'UDD Kab. Tangerang', 2020, '1'),
('UM-UPS-007', 'PK-UM-UPS-007', 'PMI/001/001', '900', '09121', '0908', 'UPS ', 'SIN', '', '', '1', 'default.jpg', 'UM-UPS-007.png', 355, '001', 'UDD Kab. Tangerang', 2013, '1'),
('UM-UPS-009', 'PK-UM-UPS-009', 'PMI/001/001', '900', '09097', '0908', 'UPS ', '', '', '', '1', 'default.jpg', 'UM-UPS-009.png', 357, '001', 'UDD Kab. Tangerang', 2020, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_pengajuan`
--

CREATE TABLE `trans_pengajuan` (
  `kode_pengajuan` varchar(20) NOT NULL,
  `no_po` varchar(20) DEFAULT NULL,
  `kode_anggaran` varchar(10) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `kode_dept` varchar(5) NOT NULL,
  `kode_jenis_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(20) DEFAULT NULL,
  `merk_barang` varchar(20) DEFAULT NULL,
  `tipe_barang` varchar(20) DEFAULT NULL,
  `warna_barang` varchar(10) DEFAULT NULL,
  `qty` int(3) NOT NULL,
  `flag_aset` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trans_pengajuan`
--

INSERT INTO `trans_pengajuan` (`kode_pengajuan`, `no_po`, `kode_anggaran`, `tgl_pengajuan`, `kode_dept`, `kode_jenis_barang`, `nama_barang`, `merk_barang`, `tipe_barang`, `warna_barang`, `qty`, `flag_aset`) VALUES
('ab99', 'PO02', '1212', '2020-07-17', '09160', '0908', 'sikat wc', 'dragon', 'a1212', 'biru', 1, 'Y'),
('PK-MED-BB-001', 'PMI/001/001', '900', '2020-01-01', '09125', '0906', 'Blood Bank', 'Helmer', 'REF HH 13125', '', 1, 'Y'),
('PK-MED-BB-002', 'PMI/001/001', '900', '2020-01-01', '09125', '0906', 'Blood Bank', 'Helmer', 'REF HHB 125', '', 1, 'Y'),
('PK-MED-BB-003', 'PMI/001/001', '900', '2020-01-01', '09162', '0906', 'Blood Bank', 'Helmer', '', '', 1, 'Y'),
('PK-MED-BB-004', 'PMI/001/001', '900', '2020-01-01', '09162', '0906', 'Blood Bank', 'Helmer', 'REF HHB 125', '', 1, 'Y'),
('PK-MED-BB-005', 'PMI/001/001', '900', '2020-01-01', '09162', '0906', 'Blood Bank', 'Sanyo', 'MBR 304 GR', '', 1, 'Y'),
('PK-MED-BB-006', 'PMI/001/001', '900', '2020-01-01', '09117', '0906', 'Blood Bank', 'Sanyo', 'MBR 304 GR', '', 1, 'Y'),
('PK-MED-FRE-001', 'PMI/001/001', '900', '2020-01-01', '09125', '0906', 'Freezer', 'Sanyo', 'MDF 236', '', 1, 'Y'),
('PK-MED-FRE-002', 'PMI/001/001', '900', '2020-01-01', '09162', '0906', 'Freezer', 'Sanyo', 'MDF 192', '', 1, 'Y'),
('PK-MED-FRE-003', 'PMI/001/001', '900', '2020-01-01', '09162', '0906', 'Freezer', 'Sanyo', 'MDF 236', '', 1, 'Y'),
('PK-MED-FRE-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Freezer', 'Sanyo', '', '', 1, 'Y'),
('PK-MED-HAN-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-009', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-010', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-011', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-012', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-013', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-014', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-015', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-016', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-017', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-018', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HAN-019', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Handsealer', '', '', '', 1, 'Y'),
('PK-MED-HB-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'HB Checker', 'Haemocue ', '310 Analyzer', '', 1, 'Y'),
('PK-MED-HB-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'HB Checker', 'Haemocue ', '310 Analyzer', '', 1, 'Y'),
('PK-MED-HB-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'HB Checker', 'Haemocue ', '310 Analyzer', '', 1, 'Y'),
('PK-MED-HB-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'HB Checker', 'Haemocue ', '', '', 1, 'Y'),
('PK-MED-KOM01-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-009', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-010', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-011', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-012', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-013', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-014', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-015', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-016', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-017', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-018', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-019', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-KOM01-020', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Kom Kapas', '', '', '', 1, 'Y'),
('PK-MED-TAN03-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tansimeter', 'Nova', 'HBP 9020', '', 1, 'Y'),
('PK-MED-TAS-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-009', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-010', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-011', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-012', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-013', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-014', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-015', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-016', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-017', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', '', '', 1, 'Y'),
('PK-MED-TAS-018', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tas Aftap', 'Merah', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-009', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-010', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-011', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-012', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-013', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-014', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-015', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-016', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-017', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-018', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-019', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-020', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-021', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-022', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-023', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-024', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-025', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-026', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-027', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-028', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-029', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-030', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-031', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-032', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-033', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercuri', '', 1, 'Y'),
('PK-MED-TEN01-034', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercury', '', 1, 'Y'),
('PK-MED-TEN01-035', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter ', 'ABN', 'Mercury', '', 1, 'Y'),
('PK-MED-TEN01-036', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter', 'ABN', 'Mercury', '', 1, 'Y'),
('PK-MED-TEN01-037', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensimeter ', 'ABN', '', '', 1, 'Y'),
('PK-MED-TEN02-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensi Meter Digital', 'Omron', 'HBP 9020', '', 1, 'Y'),
('PK-MED-TEN02-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0906', 'Tensi Meter Digital', 'Omron', '310 Analyzer', '', 1, 'Y'),
('PK-MED-TIA-001', 'PMI/001/001', '900', '2020-01-01', '09103', '0906', 'Tiang Infus', '', '', '', 1, 'Y'),
('PK-MED-TIA-002', 'PMI/001/001', '900', '2020-01-01', '09103', '0906', 'Tiang Infus', '', '', '', 1, 'Y'),
('PK-MED-TIA-003', 'PMI/001/001', '900', '2020-01-01', '09103', '0906', 'Tiang Infus', '', '', '', 1, 'Y'),
('PK-MED-TIA-004', 'PMI/001/001', '900', '2020-01-01', '09103', '0906', 'Tiang Infus', '', '', '', 1, 'Y'),
('PK-MED-TIA-005', 'PMI/001/001', '900', '2020-01-01', '09097', '0906', 'Tiang Infus', '', '', '', 1, 'Y'),
('PK-UM-ABS-001', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Mesin Absen', 'Solution', 'JJ 1102D', '', 1, 'Y'),
('PK-UM-AIR-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Air Conditioner', 'Sharp 1 PK', 'R32 ECO', '', 1, 'Y'),
('PK-UM-AIR-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Air Conditioner', 'Sharp 1 PK', 'R32 ECO', '', 1, 'Y'),
('PK-UM-AIR-003', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Air Conditioner', 'Sharp ', '', '', 1, 'Y'),
('PK-UM-AIR-004', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-005', 'PMI/001/001', '900', '2020-01-01', '09099', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-006', 'PMI/001/001', '900', '2020-01-01', '09100', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-007', 'PMI/001/001', '900', '2020-01-01', '09101', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-008', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-009', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-010', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-011', 'PMI/001/001', '900', '2020-01-01', '09105', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-012', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-013', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-014', 'PMI/001/001', '900', '2020-01-01', '09107', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-015', 'PMI/001/001', '900', '2020-01-01', '09108', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-016', 'PMI/001/001', '900', '2020-01-01', '09109', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-017', 'PMI/001/001', '900', '2020-01-01', '09110', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-018', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-019', 'PMI/001/001', '900', '2020-01-01', '09112', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-020', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-021', 'PMI/001/001', '900', '2020-01-01', '09114', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-022', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Air Conditioner', 'Midea 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-023', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Air Conditioner', 'Sharp', '1 1/2 PK', '', 1, 'Y'),
('PK-UM-AIR-024', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Air Conditioner', 'Sharp', '1 1/2 PK', '', 1, 'Y'),
('PK-UM-AIR-025', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Air Conditioner', 'Sharp', '1 PK', '', 1, 'Y'),
('PK-UM-AIR-026', 'PMI/001/001', '900', '2020-01-01', '09116', '0908', 'Air Conditioner', 'Panasonic 1 PK', '', '', 1, 'Y'),
('PK-UM-AIR-027', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Air Conditioner', 'Panasonic 2PK', 'C5-PC 18 PKP', '', 1, 'Y'),
('PK-UM-AIR-028', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Air Conditioner', 'Sharp 1/2 PK', 'AP5SHL', '', 1, 'Y'),
('PK-UM-AIR-029', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Air Conditioner', 'Samsung', 'A505TULNXEA', '', 1, 'Y'),
('PK-UM-AIR-030', 'PMI/001/001', '900', '2020-01-01', '09118', '0908', 'Air Conditioner', 'Sharp', 'AH-A9 MEY', '', 1, 'Y'),
('PK-UM-AIR-031', 'PMI/001/001', '900', '2020-01-01', '09119', '0908', 'Air Conditioner', 'LG 2 PK', 'R410A', '', 1, 'Y'),
('PK-UM-AIR-032', 'PMI/001/001', '900', '2020-01-01', '09120', '0908', 'Air Conditioner', 'Samsung 3/4 PK', '', '', 1, 'Y'),
('PK-UM-AIR-033', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Air Conditioner', 'Sharp 1/2 PK', 'AH-AP5SHU', '', 1, 'Y'),
('PK-UM-AIR-034', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Air Conditioner', 'Sharp 1/2 PK', 'AH-AP5SHU', '', 1, 'Y'),
('PK-UM-AIR-035', 'PMI/001/001', '900', '2020-01-01', '09122', '0908', 'Air Conditioner', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-AIR-036', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Air Conditioner', 'Sharp', '1 1/2 PK', '', 1, 'Y'),
('PK-UM-APA-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Apar', '', '', '', 1, 'Y'),
('PK-UM-APA-002', 'PMI/001/001', '900', '2020-01-01', '09123', '0908', 'Apar', 'Protect', 'MFH 3.5', '', 1, 'Y'),
('PK-UM-APA-003', 'PMI/001/001', '900', '2020-01-01', '09124', '0908', 'Apar', 'Firetecht', 'FR 8 L', '', 1, 'Y'),
('PK-UM-APA-004', 'PMI/001/001', '900', '2020-01-01', '09124', '0908', 'Apar', 'Firetecht', 'FR 8 L', '', 1, 'Y'),
('PK-UM-APA-005', 'PMI/001/001', '900', '2020-01-01', '09124', '0908', 'Apar', 'Protect', 'MZ-3', '', 1, 'Y'),
('PK-UM-APA-006', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Apar', '', '', '', 1, 'Y'),
('PK-UM-APA-007', 'PMI/001/001', '900', '2020-01-01', '09119', '0908', 'Apar', 'Pyrosafe', '6Kg Powder', '', 1, 'Y'),
('PK-UM-APA-008', 'PMI/001/001', '900', '2020-01-01', '09119', '0908', 'Apar', 'Pyrosafe', '6Kg Powder', '', 1, 'Y'),
('PK-UM-APA-009', 'PMI/001/001', '900', '2020-01-01', '09120', '0908', 'Apar', 'Protect', 'GMP-35P', '', 1, 'Y'),
('PK-UM-APA-010', 'PMI/001/001', '900', '2020-01-01', '09120', '0908', 'Apar', 'Yamato', '', '', 1, 'Y'),
('PK-UM-APA-011', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Apar', '', '', '', 1, 'Y'),
('PK-UM-BAK-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bak Instrumen', '', '', '', 1, 'Y'),
('PK-UM-BAK-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bak Instrumen', '', '', '', 1, 'Y'),
('PK-UM-BAK-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bak Instrumen', '', '', '', 1, 'Y'),
('PK-UM-BAN-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bantal Leher Aferesi', '', '', '', 1, 'Y'),
('PK-UM-BAN-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bantal MU', '', '', '', 1, 'Y'),
('PK-UM-BAN-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bantal Kaki', '', '', '', 1, 'Y'),
('PK-UM-BAN-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bantal Tangan', '', '', '', 1, 'Y'),
('PK-UM-BAN-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bantal ', '', '', '', 1, 'Y'),
('PK-UM-BAN-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bantal Kaki ', '', '', '', 1, 'Y'),
('PK-UM-BED-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Bed', '', '', '', 1, 'Y'),
('PK-UM-BEK-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Beker Glass Sedang', '', '', '', 1, 'Y'),
('PK-UM-BOX-001', 'PMI/001/001', '900', '2020-01-01', '09157', '0908', 'Box Tissue', 'Kimberly Clark', '', '', 1, 'Y'),
('PK-UM-BOX-002', 'PMI/001/001', '900', '2020-01-01', '09158', '0908', 'Box Tissue', 'Kimberly Clark', '', '', 1, 'Y'),
('PK-UM-BOX-003', 'PMI/001/001', '900', '2020-01-01', '09159', '0908', 'Box Tissue', 'Kimberly Clark', '', '', 1, 'Y'),
('PK-UM-BOX-004', 'PMI/001/001', '900', '2020-01-01', '09160', '0908', 'Box Tissue', 'Kimberly Clark', '', '', 1, 'Y'),
('PK-UM-BOX-005', 'PMI/001/001', '900', '2020-01-01', '09160', '0908', 'Box Tissue', 'LIVI', '', '', 1, 'Y'),
('PK-UM-BOX-006', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Dispenser Solatip', '', '', '', 1, 'Y'),
('PK-UM-BOX-007', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Papan Presentasi', '', 'JH-120PR', '', 1, 'Y'),
('PK-UM-BOX-008', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Portable Speaker + M', 'JK Coustik', '', '', 1, 'Y'),
('PK-UM-BOX-009', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Pompa Air Plastik', '', '', '', 1, 'Y'),
('PK-UM-BOX-010', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Pompa Air Plastik', '', '', '', 1, 'Y'),
('PK-UM-BOX-011', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Pompa Air Plastik', '', 'S433', '', 1, 'Y'),
('PK-UM-BOX-012', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Pompa Air Plastik', 'Ariana', '', '', 1, 'Y'),
('PK-UM-BOX-013', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Mesin Tik Electrik', 'Brother', '', '', 1, 'Y'),
('PK-UM-BOX-014', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Proyektor', '', '', '', 1, 'Y'),
('PK-UM-BOX-015', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Box Adm', '', '', '', 1, 'Y'),
('PK-UM-BOX-016', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Trolly ', '', '', '', 1, 'Y'),
('PK-UM-BOX-017', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Pelbed', '', 'CE600', '', 1, 'Y'),
('PK-UM-BOX-018', 'PMI/001/001', '900', '2020-01-01', '09160', '0908', 'Box Camera', '', 'Kanvas Hitam', '', 1, 'Y'),
('PK-UM-BOX-019', 'PMI/001/001', '900', '2020-01-01', '09134', '0908', 'Tas Camera', 'Lowe', '', '', 1, 'Y'),
('PK-UM-BOX-020', 'PMI/001/001', '900', '2020-01-01', '09134', '0908', 'Mosque Trap', '', '', '', 1, 'Y'),
('PK-UM-BOX-021', 'PMI/001/001', '900', '2020-01-01', '09134', '0908', 'DVD Player APV', '', '', '', 1, 'Y'),
('PK-UM-BOX-022', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Tempat Tissue', '', '', '', 1, 'Y'),
('PK-UM-BOX-023', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Box Cadangan', '', '', '', 1, 'Y'),
('PK-UM-BRK-001', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Brankas ', 'Doliwa', '', '', 1, 'Y'),
('PK-UM-CAM-001', 'PMI/001/001', '900', '2020-01-01', '09160', '0908', 'Camera', 'Canon', 'Box Transparan', '', 1, 'Y'),
('PK-UM-COL-001', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Colokan', '', '2 Terminal', '', 1, 'Y'),
('PK-UM-COL-002', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Colokan', '', '3 Terminal', '', 1, 'Y'),
('PK-UM-COL-003', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Colokan', '', '5 Terminal', '', 1, 'Y'),
('PK-UM-COL-004', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Colokan', '', '', '', 1, 'Y'),
('PK-UM-CON-001', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Container table', '', '', '', 1, 'Y'),
('PK-UM-CON-002', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Container table', '', '', '', 1, 'Y'),
('PK-UM-CON-003', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Container table', '', '', '', 1, 'Y'),
('PK-UM-CON-004', 'PMI/001/001', '900', '2020-01-01', '09136', '0908', 'Container table', '', '', '', 1, 'Y'),
('PK-UM-CON-005', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Container table', '', '', '', 1, 'Y'),
('PK-UM-CON-006', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Container table', '', '', '', 1, 'Y'),
('PK-UM-CON01-002', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Container Besar', '', '4 Susun', '', 1, 'Y'),
('PK-UM-COO-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Sedang', 'Biru', '', '', 1, 'Y'),
('PK-UM-COO1-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Kecil', '', '', '', 1, 'Y'),
('PK-UM-COO1-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Kecil', '', '', '', 1, 'Y'),
('PK-UM-COO1-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Kecil', '', '', '', 1, 'Y'),
('PK-UM-COO1-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Kecil', '', '', '', 1, 'Y'),
('PK-UM-COO2-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Besar', 'Orange', '', '', 1, 'Y'),
('PK-UM-COO2-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Besar', 'Orange', '', '', 1, 'Y'),
('PK-UM-COO2-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Besar', 'Orange', '', '', 1, 'Y'),
('PK-UM-COO2-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Besar', 'Merah', '', '', 1, 'Y'),
('PK-UM-COO2-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Besar', 'Putih', '', '', 1, 'Y'),
('PK-UM-COO2-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Besar', 'Putih', '', '', 1, 'Y'),
('PK-UM-COO2-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Cool Box Besar', 'Putih', '', '', 1, 'Y'),
('PK-UM-DIS01-001', 'PMI/001/001', '900', '2020-01-01', '09134', '0908', 'Dispenser ', 'Denpoo', '', '', 1, 'Y'),
('PK-UM-DIS01-002', 'PMI/001/001', '900', '2020-01-01', '09142', '0908', 'Dispenser ', 'Polytron', '', '', 1, 'Y'),
('PK-UM-DIS01-003', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Dispenser ', 'Polytron', '', '', 1, 'Y'),
('PK-UM-DIS01-004', 'PMI/001/001', '900', '2020-01-01', '09143', '0908', 'Dispenser ', 'Miyako', '', '', 1, 'Y'),
('PK-UM-EMB-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Ember ', '', '', '', 1, 'Y'),
('PK-UM-FAX-001', 'PMI/001/001', '900', '2020-01-01', '09160', '0908', 'Fax', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-GUN-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Gunting ', '', '', '', 1, 'Y'),
('PK-UM-HAE-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Haemoscale', 'Czk IB', '', '', 1, 'Y'),
('PK-UM-HAE-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Haemoscale', 'Czk IB', '', '', 1, 'Y'),
('PK-UM-HAE-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Haemoscale', 'Czk IB', '', '', 1, 'Y'),
('PK-UM-INT01-001', 'PMI/001/001', '900', '2020-01-01', '09131', '0908', 'Interior receptionis', '', '', '', 1, 'Y'),
('PK-UM-INT01-002', 'PMI/001/001', '900', '2020-01-01', '09107', '0908', 'Interior Service Don', '', 'Meja Cafe 1,meja caf', '', 1, 'Y'),
('PK-UM-INT02-001', 'PMI/001/001', '900', '2020-01-01', '09132', '0908', 'Kitchen Set', '', '', '', 1, 'Y'),
('PK-UM-INT02-002', 'PMI/001/001', '900', '2020-01-01', '09133', '0908', 'Kitchen Set', '', '', '', 1, 'Y'),
('PK-UM-JAM01-001', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-002', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-003', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-004', 'PMI/001/001', '900', '2020-01-01', '09144', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-005', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-006', 'PMI/001/001', '900', '2020-01-01', '09118', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-007', 'PMI/001/001', '900', '2020-01-01', '09108', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-008', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-009', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-JAM01-010', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Jam Dinding', '', '', '', 1, 'Y'),
('PK-UM-KAB-001', 'PMI/001/001', '900', '2020-01-01', '09110', '0908', 'Kabel ', '', '', '', 1, 'Y'),
('PK-UM-KAL-001', 'PMI/001/001', '900', '2020-01-01', '09136', '0908', 'Kalkulator', 'Casio', 'DX1205', '', 1, 'Y'),
('PK-UM-KAL-002', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Kalkulator', 'Casio', 'SDC-868L', '', 1, 'Y'),
('PK-UM-KAL-003', 'PMI/001/001', '900', '2020-01-01', '09136', '0908', 'Kalkulator', 'Casio', 'JJ 1102D', '', 1, 'Y'),
('PK-UM-KAL-004', 'PMI/001/001', '900', '2020-01-01', '09136', '0908', 'Kalkulator', 'Casio', '', '', 1, 'Y'),
('PK-UM-KAS-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kasur', '', '', '', 1, 'Y'),
('PK-UM-KED-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Keranjang Darah ', '', '', '', 1, 'Y'),
('PK-UM-KEP-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Keranjang Putih ', '', '', '', 1, 'Y'),
('PK-UM-KER-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Keranjang Merah ', '', '', '', 1, 'Y'),
('PK-UM-KIP01-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kipas Gantung', '', '', '', 1, 'Y'),
('PK-UM-KIP01-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kipas Gantung', '', '', '', 1, 'Y'),
('PK-UM-KLE-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Klem ', '', '', '', 1, 'Y'),
('PK-UM-KOM-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kom Pinset ', '', '', '', 1, 'Y'),
('PK-UM-KOM-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kom Klem ', '', '', '', 1, 'Y'),
('PK-UM-KON-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kontainer Kecil ', '', '', '', 1, 'Y'),
('PK-UM-KON-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kontainer Besar ', '', '', '', 1, 'Y'),
('PK-UM-KOT-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kotak HB ', '', '', '', 1, 'Y'),
('PK-UM-KOT-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kotak HB ', '', '', '', 1, 'Y'),
('PK-UM-KOT-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kotak HB ', '', '', '', 1, 'Y'),
('PK-UM-KUL-001', 'PMI/001/001', '900', '2020-01-01', '09147', '0908', 'Kulkas', 'LG', '', '', 1, 'Y'),
('PK-UM-KUL-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kulkas', 'LG', 'Bulat', '', 1, 'Y'),
('PK-UM-KUR-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR01-001', 'PMI/001/001', '900', '2020-01-01', '09131', '0908', 'Kursi Kerja', '', 'Type Cafe', '', 1, 'Y'),
('PK-UM-KUR01-002', 'PMI/001/001', '900', '2020-01-01', '09131', '0908', 'Kursi Kerja', '', 'Type Cafe', '', 1, 'Y'),
('PK-UM-KUR01-003', 'PMI/001/001', '900', '2020-01-01', '09136', '0908', 'Kursi Kerja', 'Donati', '', '', 1, 'Y'),
('PK-UM-KUR01-004', 'PMI/001/001', '900', '2020-01-01', '09136', '0908', 'Kursi Kerja', 'Donati', '', '', 1, 'Y'),
('PK-UM-KUR01-005', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-006', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-007', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-008', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-009', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-010', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-011', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-012', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-013', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-014', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Kursi Kerja ', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-015', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Kursi Kerja', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-016', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Kursi Kerja', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-017', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Kursi Kerja', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-018', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Kursi Kerja', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-019', 'PMI/001/001', '900', '2020-01-01', '09137', '0908', 'Kursi Kerja', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-020', 'PMI/001/001', '900', '2020-01-01', '09137', '0908', 'Kursi Kerja', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-021', 'PMI/001/001', '900', '2020-01-01', '09138', '0908', 'Kursi Kerja', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-022', 'PMI/001/001', '900', '2020-01-01', '09138', '0908', 'Kursi Kerja', 'Wonderfull', '', '', 1, 'Y'),
('PK-UM-KUR01-023', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Kursi Kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-024', 'PMI/001/001', '900', '2020-01-01', '09110', '0908', 'Kursi kerja', '', '', '', 1, 'Y'),
('PK-UM-KUR01-025', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Kursi kerja', '', '42327', '', 1, 'Y'),
('PK-UM-KUR01-026', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Kursi kerja', '', '42328', '', 1, 'Y'),
('PK-UM-KUR02-001', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Kursi aftap', 'Informa', 'Type Cafe', '', 1, 'Y'),
('PK-UM-KUR02-002', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Kursi aftap', 'Informa', 'Type Cafe', '', 1, 'Y'),
('PK-UM-KUR02-003', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Kursi aftap', 'Informa', 'Type Cafe', '', 1, 'Y'),
('PK-UM-KUR02-004', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Kursi aftap', 'Informa', 'Type Cafe', '', 1, 'Y'),
('PK-UM-KUR03-001', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Kursi Donor', '', 'Donor Chair Coklat', '', 1, 'Y'),
('PK-UM-KUR03-002', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Kursi Donor', '', 'Donor Chair Coklat', '', 1, 'Y'),
('PK-UM-KUR03-003', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Kursi Donor', '', 'Donor Chair Coklat', '', 1, 'Y'),
('PK-UM-KUR03-004', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Kursi Donor', '', 'Donor Chair Coklat', '', 1, 'Y'),
('PK-UM-KUR04-001', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', 1, 'Y'),
('PK-UM-KUR04-002', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', 1, 'Y'),
('PK-UM-KUR04-003', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Kursi Khrom', '', '', '', 1, 'Y'),
('PK-UM-KUR04-004', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Kursi Khrom', '', '', '', 1, 'Y'),
('PK-UM-KUR04-005', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Kursi Khrom', '', '', '', 1, 'Y'),
('PK-UM-KUR04-006', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', 1, 'Y'),
('PK-UM-KUR04-007', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', 1, 'Y'),
('PK-UM-KUR04-008', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Kursi Khrom', 'Informa', 'Hitam', '', 1, 'Y'),
('PK-UM-KUR04-009', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Kursi Khrom', '', '', '', 1, 'Y'),
('PK-UM-KUR04-010', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Kursi Khrom', '', '', '', 1, 'Y'),
('PK-UM-KUR04-011', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Kursi Khrom', '', '', '', 1, 'Y'),
('PK-UM-KUR04-012', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Kursi Khrom', '', '', '', 1, 'Y'),
('PK-UM-KUR04-013', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Kursi Khrom', 'Chitose', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-014', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Kursi Khrom', '', 'Biru', '', 1, 'Y'),
('PK-UM-KUR04-015', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Kursi Khrom', '', 'Biru', '', 1, 'Y'),
('PK-UM-KUR04-016', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-017', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-018', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-019', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-020', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-021', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-022', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-023', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-024', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-025', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-026', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-027', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-028', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-029', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-030', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-031', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-032', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-033', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-034', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Kursi Khrom', 'Indachi', 'Merah', '', 1, 'Y'),
('PK-UM-KUR04-035', 'PMI/001/001', '900', '2020-01-01', '09139', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', 1, 'Y'),
('PK-UM-KUR04-036', 'PMI/001/001', '900', '2020-01-01', '09139', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', 1, 'Y'),
('PK-UM-KUR05-001', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Kursi Lipat', '', 'Alas Bulat', '', 1, 'Y'),
('PK-UM-KUR05-002', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Kursi Lipat', '', 'Alas Bulat', '', 1, 'Y'),
('PK-UM-KUR05-003', 'PMI/001/001', '900', '2020-01-01', '09139', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', 1, 'Y'),
('PK-UM-KUR05-004', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', 1, 'Y'),
('PK-UM-KUR05-005', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', 1, 'Y'),
('PK-UM-KUR05-006', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', 1, 'Y'),
('PK-UM-KUR05-007', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', 1, 'Y'),
('PK-UM-KUR05-008', 'PMI/001/001', '900', '2020-01-01', '09100', '0908', 'Kursi  Stainles', 'Indachi', '4 Seat', '', 1, 'Y'),
('PK-UM-KUR06-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', 'Merah', '', 1, 'Y'),
('PK-UM-KUR06-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-009', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-010', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-011', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-012', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-013', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-014', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-015', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-016', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-017', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-018', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-019', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-KUR06-020', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Kursi Aftap Mu', '', '', '', 1, 'Y'),
('PK-UM-LEM01-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Lemari Kayu', '', '', '', 1, 'Y'),
('PK-UM-LEM01-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Lemari Kayu', '', '', '', 1, 'Y'),
('PK-UM-LEM01-003', 'PMI/001/001', '900', '2020-01-01', '09140', '0908', 'Lemari Kayu', '', '', '', 1, 'Y'),
('PK-UM-LEM01-004', 'PMI/001/001', '900', '2020-01-01', '09118', '0908', 'Lemari Kayu', '', '', '', 1, 'Y'),
('PK-UM-LEM01-005', 'PMI/001/001', '900', '2020-01-01', '09096', '0908', 'Lemari Besar', '', '', '', 1, 'Y'),
('PK-UM-LEM02-001', 'PMI/001/001', '900', '2020-01-01', '09136', '0908', 'Lemari Arsip Besar', 'Bangun  Mandiri', '', '', 1, 'Y'),
('PK-UM-LEM02-002', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Lemari Arsip Besar', 'Bangun  Mandiri', '', '', 1, 'Y'),
('PK-UM-LEM02-003', 'PMI/001/001', '900', '2020-01-01', '09141', '0908', 'Lemari Arsip Besar', 'Bangun  Mandiri', '', '', 1, 'Y'),
('PK-UM-LEM03-001', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Lemari Gantung ', '', '', '', 1, 'Y'),
('PK-UM-LEM03-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Lemari Gantung ', '', '', '', 1, 'Y'),
('PK-UM-LEM03-003', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Lemari Gantung ', '', '', '', 1, 'Y'),
('PK-UM-LEM03-004', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Lemari Gantung ', '', 'Terbuka', '', 1, 'Y'),
('PK-UM-LEM03-005', 'PMI/001/001', '900', '2020-01-01', '09127', '0908', 'Lemari Gantung ', '', '', '', 1, 'Y'),
('PK-UM-LEM03-006', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Lemari Gantung ', '', '', '', 1, 'Y'),
('PK-UM-LEM04-001', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Lemari Kecil', '', '4 Susun', '', 1, 'Y'),
('PK-UM-LET01-001', 'PMI/001/001', '900', '2020-01-01', '09136', '0908', 'Letter Tray', '', '', '', 1, 'Y'),
('PK-UM-LET01-002', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Letter Tray', '', '', '', 1, 'Y'),
('PK-UM-LET01-003', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Letter Tray', '', '', '', 1, 'Y'),
('PK-UM-LET01-004', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Letter Tray', '', '', '', 1, 'Y'),
('PK-UM-LET01-005', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Letter Tray', '', '', '', 1, 'Y'),
('PK-UM-LET01-006', 'PMI/001/001', '900', '2020-01-01', '09156', '0908', 'Letter Tray', '', '', '', 1, 'Y'),
('PK-UM-MEJ-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-003', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Meja Kerja    ', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-004', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Meja Kerja ', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-007', 'PMI/001/001', '900', '2020-01-01', '09110', '0908', 'Meja Kerja', 'Kharisma', 'HM 1/2 Biro', '', 1, 'Y'),
('PK-UM-MEJ01-008', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Meja Kerja', 'Kharisma', '', '', 1, 'Y'),
('PK-UM-MEJ01-009', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-010', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-011', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-012', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-013', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-014', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-015', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-017', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-018', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-019', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Meja Kerja', 'Husen', 'Biro MC', '', 1, 'Y'),
('PK-UM-MEJ01-020', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-021', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ01-022', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Meja Kerja', '', '', '', 1, 'Y'),
('PK-UM-MEJ02-001', 'PMI/001/001', '900', '2020-01-01', '09127', '0908', 'Meja Lab', '', '', '', 1, 'Y'),
('PK-UM-MEJ02-002', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Meja lab            ', '', '', '', 1, 'Y'),
('PK-UM-MEJ02-003', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Meja Lab', '', '', '', 1, 'Y'),
('PK-UM-MEJ02-004', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Meja Lab', '', '', '', 1, 'Y'),
('PK-UM-MEJ02-005', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Meja Lab', '', '', '', 1, 'Y'),
('PK-UM-MEJ02-006', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Meja Lab', '', '', '', 1, 'Y'),
('PK-UM-MEJ02-007', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Meja Lab', '', 'Meja Komp,Meja Lab', '', 1, 'Y'),
('PK-UM-MEJ02-008', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Meja Lab', '', 'Meja kerja,Loket 1 &', '', 1, 'Y'),
('PK-UM-MEJ02-009', 'PMI/001/001', '900', '2020-01-01', '09128', '0908', 'Meja Lab', '', '', '', 1, 'Y'),
('PK-UM-MEJ03-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Instrumen', '', '', '', 1, 'Y'),
('PK-UM-MEJ03-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Instrumen', '', '', '', 1, 'Y'),
('PK-UM-MEJ03-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Instrumen', '', '', '', 1, 'Y'),
('PK-UM-MEJ05-001', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Meja Leter L Hitam', '', '', '', 1, 'Y'),
('PK-UM-MEJ06-001', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Meja Meeting (1 Set)', '', '', '', 1, 'Y'),
('PK-UM-MEJ07-001', 'PMI/001/001', '900', '2020-01-01', '09130', '0908', 'Meja Gantung', '', 'Ambalan', '', 1, 'Y'),
('PK-UM-MEJ07-002', 'PMI/001/001', '900', '2020-01-01', '09130', '0908', 'Meja Gantung', '', 'Ambalan', '', 1, 'Y'),
('PK-UM-MEJ08-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', 'Lion Star', 'Merah Muda', '', 1, 'Y'),
('PK-UM-MEJ08-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-009', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-010', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-011', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-012', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MEJ08-013', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Meja Aftap MU', '', '', '', 1, 'Y'),
('PK-UM-MIC-001', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Microphone', '', '', '', 1, 'Y'),
('PK-UM-PAL01-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Palet Plastik', '', '', '', 1, 'Y'),
('PK-UM-PAL01-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Palet Plastik', '', '', '', 1, 'Y'),
('PK-UM-PAL01-003', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Palet Plastik', '', '', '', 1, 'Y');
INSERT INTO `trans_pengajuan` (`kode_pengajuan`, `no_po`, `kode_anggaran`, `tgl_pengajuan`, `kode_dept`, `kode_jenis_barang`, `nama_barang`, `merk_barang`, `tipe_barang`, `warna_barang`, `qty`, `flag_aset`) VALUES
('PK-UM-PAL01-004', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Palet Plastik', '', '', '', 1, 'Y'),
('PK-UM-PAL01-005', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Palet Plastik', '', '', '', 1, 'Y'),
('PK-UM-PAL01-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Palet Plastik', '', '', '', 1, 'Y'),
('PK-UM-PAL01-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Palet Plastik', '', '', '', 1, 'Y'),
('PK-UM-PAL01-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Palet Plastik', '', '', '', 1, 'Y'),
('PK-UM-PAL01-009', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Palet Plastik', '', '', '', 1, 'Y'),
('PK-UM-PAP-001', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Paper Shradder', 'Krisbow', '', '', 1, 'Y'),
('PK-UM-PEL-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Pelbed ', '', '', '', 1, 'Y'),
('PK-UM-PIN-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Pinset ', '', '', '', 1, 'Y'),
('PK-UM-RAK-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Rak Tabung', '', '', '', 1, 'Y'),
('PK-UM-RAK01-001', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Rak Susun', '', '', '', 1, 'Y'),
('PK-UM-RAK01-002', 'PMI/001/001', '900', '2020-01-01', '09134', '0908', 'Rak Susun', '', '', '', 1, 'Y'),
('PK-UM-RAK01-003', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Rak Susun', '', '', '', 1, 'Y'),
('PK-UM-RAK02-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK02-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK02-003', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK02-004', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK02-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK02-006', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Rak Barang', '', 'Server', '', 1, 'Y'),
('PK-UM-RAK02-007', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK02-008', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK02-009', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK02-010', 'PMI/001/001', '900', '2020-01-01', '09113', '0908', 'Rak Barang', '', '', '', 1, 'Y'),
('PK-UM-RAK03-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Rak File', '', '', '', 1, 'Y'),
('PK-UM-RAK03-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Rak File', '', '', '', 1, 'Y'),
('PK-UM-SAM01-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Tempat Sampah ', 'Shinpo', 'Bulat', '', 1, 'Y'),
('PK-UM-SAM01-002', 'PMI/001/001', '900', '2020-01-01', '09144', '0908', 'Tempat Sampah ', 'Lion Star', '', '', 1, 'Y'),
('PK-UM-SAM01-003', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Tempat Sampah', '', 'Keranjang', '', 1, 'Y'),
('PK-UM-SAM01-004', 'PMI/001/001', '900', '2020-01-01', '09148', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-005', 'PMI/001/001', '900', '2020-01-01', '09149', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-006', 'PMI/001/001', '900', '2020-01-01', '09150', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tempat Sampah', '', 'Stainles 3 box', '', 1, 'Y'),
('PK-UM-SAM01-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tempat Sampah', '', 'Stainles 3 box', '', 1, 'Y'),
('PK-UM-SAM01-009', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-010', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-011', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-012', 'PMI/001/001', '900', '2020-01-01', '09106', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-013', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-014', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-015', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-016', 'PMI/001/001', '900', '2020-01-01', '09151', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-017', 'PMI/001/001', '900', '2020-01-01', '09152', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-018', 'PMI/001/001', '900', '2020-01-01', '09153', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-019', 'PMI/001/001', '900', '2020-01-01', '09154', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-020', 'PMI/001/001', '900', '2020-01-01', '09155', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-021', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Tempat Sampah', '', 'Tertutup', '', 1, 'Y'),
('PK-UM-SAM01-022', 'PMI/001/001', '900', '2020-01-01', '09110', '0908', 'Tempat Sampah', 'Shinpo', '', '', 1, 'Y'),
('PK-UM-SAM01-023', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM01-024', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Tempat Sampah', 'Shinpo', '', '', 1, 'Y'),
('PK-UM-SAM01-025', 'PMI/001/001', '900', '2020-01-01', '09145', '0908', 'Tempat Sampah', '', ' ', '', 1, 'Y'),
('PK-UM-SAM01-026', 'PMI/001/001', '900', '2020-01-01', '09145', '0908', 'Tempat Sampah', '', '', '', 1, 'Y'),
('PK-UM-SAM02-001', 'PMI/001/001', '900', '2020-01-01', '09145', '0908', 'Tempat Sampah Besar', '', '', '', 1, 'Y'),
('PK-UM-SAM02-002', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Tempat Sampah Besar', '', '', '', 1, 'Y'),
('PK-UM-SAR-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Sarung Bantal ', '', '', '', 1, 'Y'),
('PK-UM-SAR-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Sarung Coolbox Biru', '', '', '', 1, 'Y'),
('PK-UM-SAR-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Sarung Cool Box Mera', '', '', '', 1, 'Y'),
('PK-UM-SAR-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Sarung Cool Box Puti', '', '', '', 1, 'Y'),
('PK-UM-SAR-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Sarung Kotak HB', '', '', '', 1, 'Y'),
('PK-UM-SAR-006', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Sarung Pelbed', '', '', '', 1, 'Y'),
('PK-UM-SAR-007', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Sarung Bantal ', '', '', '', 1, 'Y'),
('PK-UM-SEL-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Selimut Donor ', '', '', '', 1, 'Y'),
('PK-UM-SEL-002', 'PMI/001/001', '900', '2020-01-01', '09146', '0908', 'Handphone', 'Xiaomi', '', '', 1, 'Y'),
('PK-UM-SEL-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Selimut Aferesis', '', '', '', 1, 'Y'),
('PK-UM-SOF01-001', 'PMI/001/001', '900', '2020-01-01', '09135', '0908', '1 Set Sofa ', '', '', '', 1, 'Y'),
('PK-UM-SOF01-002', 'PMI/001/001', '900', '2020-01-01', '09110', '0908', '1 Set Sofa ', '', '', '', 1, 'Y'),
('PK-UM-STB-001', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Stabilizer', '', '', '', 1, 'Y'),
('PK-UM-STB-002', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Stabilizer', '', 'FX500A', '', 1, 'Y'),
('PK-UM-STB-003', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Stabilizer', 'Bonic', '', '', 1, 'Y'),
('PK-UM-STB-004', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Stabilizer', 'Bonic', '', '', 1, 'Y'),
('PK-UM-STB-005', 'PMI/001/001', '900', '2020-01-01', '09161', '0908', 'Stabilizer', 'Augen', 'ST 2000', '', 1, 'Y'),
('PK-UM-STB-006', 'PMI/001/001', '900', '2020-01-01', '09161', '0908', 'Stabilizer', 'Starvolt', 'ST 2000', '', 1, 'Y'),
('PK-UM-STB-007', 'PMI/001/001', '900', '2020-01-01', '09161', '0908', 'Stabilizer', 'Starvolt', 'ST 2000', '', 1, 'Y'),
('PK-UM-STB-008', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Stabilizer', 'Starvolt', '3000V', '', 1, 'Y'),
('PK-UM-STB-009', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Stabilizer', 'Matsumega', '', '', 1, 'Y'),
('PK-UM-STB-010', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Stabilizer', 'Bonic', '2 Terminal', '', 1, 'Y'),
('PK-UM-STE-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Stetoskop', '', '', '', 1, 'Y'),
('PK-UM-STE-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Stetoskop', '', '', '', 1, 'Y'),
('PK-UM-STE-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Stetoskop', '', 'Air Raksa', '', 1, 'Y'),
('PK-UM-STE01-001', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Steker T ', 'Broco', '', '', 1, 'Y'),
('PK-UM-STE01-002', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Steker T ', 'Broco', '', '', 1, 'Y'),
('PK-UM-STE01-003', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Steker T ', 'Broco', '', '', 1, 'Y'),
('PK-UM-STE01-004', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Steker T ', 'Broco', '', '', 1, 'Y'),
('PK-UM-STE01-005', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Steker T ', 'Broco', '', '', 1, 'Y'),
('PK-UM-STE01-006', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Steker T ', 'Broco', '', '', 1, 'Y'),
('PK-UM-STE01-007', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Steker T ', 'Broco', '', '', 1, 'Y'),
('PK-UM-STE01-008', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Steker T ', 'Broco', '144m 2X1,5', '', 1, 'Y'),
('PK-UM-TAS-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tas Sample', '', '', '', 1, 'Y'),
('PK-UM-TAS-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tas Bantalan tangan', '', '', '', 1, 'Y'),
('PK-UM-TAS-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tas Sample', '', '', '', 1, 'Y'),
('PK-UM-TAS-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tas Sample', '', '', '', 1, 'Y'),
('PK-UM-TEL-001', 'PMI/001/001', '900', '2020-01-01', '09111', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-002', 'PMI/001/001', '900', '2020-01-01', '09126', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-003', 'PMI/001/001', '900', '2020-01-01', '09145', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-004', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'Telephone', 'Panasonic', 'KX-T7730', '', 1, 'Y'),
('PK-UM-TEL-005', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-006', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-007', 'PMI/001/001', '900', '2020-01-01', '09119', '0908', 'Telephone', 'Panasonic', 'KX-T7730', '', 1, 'Y'),
('PK-UM-TEL-008', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-009', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Telephone', 'Panasonic', 'T91311', '', 1, 'Y'),
('PK-UM-TEL-010', 'PMI/001/001', '900', '2020-01-01', '09104', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-011', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-012', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL-013', 'PMI/001/001', '900', '2020-01-01', '09125', '0908', 'Telephone', 'Panasonic', '', '', 1, 'Y'),
('PK-UM-TEL01-001', 'PMI/001/001', '900', '2020-01-01', '09115', '0908', 'Televisi LED 32 Inc', 'LG', '', '', 1, 'Y'),
('PK-UM-TEL01-002', 'PMI/001/001', '900', '2020-01-01', '09098', '0908', 'Televisi 32 Inc', '', '', '', 1, 'Y'),
('PK-UM-TEL01-003', 'PMI/001/001', '900', '2020-01-01', '09102', '0908', 'Televisi 40 Inc', 'LG', '', '', 1, 'Y'),
('PK-UM-TEM-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tempat Timbangan', '', '', '', 1, 'Y'),
('PK-UM-TEM-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tempat Timbangan', '', '', '', 1, 'Y'),
('PK-UM-TEM-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tempat Timbangan', '', '', '', 1, 'Y'),
('PK-UM-TIM-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Timbangan Badan', '', '', '', 1, 'Y'),
('PK-UM-TIM-002', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Timbangan Badan', '', '', '', 1, 'Y'),
('PK-UM-TIM-003', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Timbangan Badan', '', '', '', 1, 'Y'),
('PK-UM-TIM-004', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Timbangan Badan', '', '', '', 1, 'Y'),
('PK-UM-TIM-005', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Timbangan Badan', '', '', '', 1, 'Y'),
('PK-UM-TRO-001', 'PMI/001/001', '900', '2020-01-01', '09129', '0908', 'Tromol Kasa', '', '', '', 1, 'Y'),
('PK-UM-UPS-001', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'UPS ', 'Prolink', '', '', 1, 'Y'),
('PK-UM-UPS-002', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'UPS ', 'APC', '', '', 1, 'Y'),
('PK-UM-UPS-003', 'PMI/001/001', '900', '2020-01-01', '09117', '0908', 'UPS ', 'Prolink', '', '', 1, 'Y'),
('PK-UM-UPS-004', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'UPS ', 'Prolink', 'Smart UPS C2000', '', 1, 'Y'),
('PK-UM-UPS-005', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'UPS ', 'APC', '5100C ICA', '', 1, 'Y'),
('PK-UM-UPS-006', 'PMI/001/001', '900', '2020-01-01', '09103', '0908', 'UPS ', 'SIN', '5100C ICA', '', 1, 'Y'),
('PK-UM-UPS-007', 'PMI/001/001', '900', '2020-01-01', '09121', '0908', 'UPS ', 'SIN', '', '', 1, 'Y'),
('PK-UM-UPS-008', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'UPS ', '', '', '', 1, 'T'),
('PK-UM-UPS-009', 'PMI/001/001', '900', '2020-01-01', '09097', '0908', 'UPS ', '', '', '', 1, 'Y'),
('TES01', 'TES01', 'TES01', '2020-07-18', '09096', '0906', 'TES01', 'TES01', 'TES01', 'TES01', 1, 'T'),
('TES02', 'TES02', 'TES02', '2020-07-18', '09096', '0906', 'TES02', 'TES02', 'TES03', 'TES02', 1, 'T'),
('test3', 'test3', 'test3', '2020-07-18', '09096', '0906', 'test3', 'test3', 'test3', 'test3', 1, 'T'),
('testing1', 'testing1', 'testing1', '2020-07-19', '09096', '0906', 'testing1', 'testing1', 'testing1', 'testing1', 1, 'Y'),
('testing19', 'testing19', 'testing19', '2020-07-19', '09096', '0908', 'testing19', 'testing19', 'testing19', 'testing19', 1, 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_perbaikan`
--

CREATE TABLE `trans_perbaikan` (
  `kode_perbaikan` varchar(10) NOT NULL,
  `kode_rusak` varchar(10) NOT NULL,
  `tgl_perbaikan` date NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trans_perbaikan`
--

INSERT INTO `trans_perbaikan` (`kode_perbaikan`, `kode_rusak`, `tgl_perbaikan`, `keterangan`) VALUES
('TES01', 'TES02', '2020-07-18', '1'),
('TES02', 'TES01', '2020-07-18', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_rusak`
--

CREATE TABLE `trans_rusak` (
  `kode_rusak` varchar(10) NOT NULL,
  `kode_aset` varchar(20) NOT NULL,
  `tgl_kerusakan` date NOT NULL,
  `qty` int(7) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `kode_anggaran` varchar(10) DEFAULT NULL,
  `flag_perbaikan` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trans_rusak`
--

INSERT INTO `trans_rusak` (`kode_rusak`, `kode_aset`, `tgl_kerusakan`, `qty`, `keterangan`, `kode_anggaran`, `flag_perbaikan`) VALUES
('TES01', 'UM-SAR-005', '2020-07-18', 1, 'Gambar 4.1- Activity Diagram Melihat Data Pengajuan Kerusakan', '', 'Y'),
('TES02', 'UM-SAR-007', '2020-07-18', 1, 'tes02', NULL, 'Y'),
('TES03', 'UM-SEL-001', '2020-07-19', 11, '111', NULL, 'T'),
('tes04', 'MED-BB-001', '2020-07-18', 1, 'terjadi kebiciran pada kantung', NULL, 'T'),
('TES2', 'TES2', '2020-07-18', 1, 'TES2', NULL, 'T'),
('test01', 'test01', '2020-07-18', 1, 'kaki kaan rusak', NULL, 'T'),
('test1', 'test1', '2020-07-18', 1, 'kaki kanan patah', NULL, 'T'),
('testing20', 'test01', '2020-07-19', 1, 'kaki kanan patah', NULL, 'T');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log_app_login`
--
ALTER TABLE `log_app_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `main_jenis_menu`
--
ALTER TABLE `main_jenis_menu`
  ADD PRIMARY KEY (`id_jenis_menu`);

--
-- Indeks untuk tabel `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_jenis_menu` (`id_jenis_menu`),
  ADD KEY `id_status_menu` (`id_status_menu`);

--
-- Indeks untuk tabel `main_status_menu`
--
ALTER TABLE `main_status_menu`
  ADD PRIMARY KEY (`id_status_menu`);

--
-- Indeks untuk tabel `main_user_application`
--
ALTER TABLE `main_user_application`
  ADD PRIMARY KEY (`id_user`,`username`);

--
-- Indeks untuk tabel `main_user_level`
--
ALTER TABLE `main_user_level`
  ADD PRIMARY KEY (`id_userlevel`);

--
-- Indeks untuk tabel `main_user_permission`
--
ALTER TABLE `main_user_permission`
  ADD PRIMARY KEY (`id_permission`),
  ADD KEY `id_userlevel` (`id_userlevel`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indeks untuk tabel `master_dept`
--
ALTER TABLE `master_dept`
  ADD PRIMARY KEY (`kode_dept`);

--
-- Indeks untuk tabel `master_jenis_barang`
--
ALTER TABLE `master_jenis_barang`
  ADD PRIMARY KEY (`kode_jenis_barang`);

--
-- Indeks untuk tabel `master_status_aset`
--
ALTER TABLE `master_status_aset`
  ADD PRIMARY KEY (`kode_status`);

--
-- Indeks untuk tabel `master_sumber_dana`
--
ALTER TABLE `master_sumber_dana`
  ADD PRIMARY KEY (`kode_sumber`);

--
-- Indeks untuk tabel `trans_aset`
--
ALTER TABLE `trans_aset`
  ADD PRIMARY KEY (`kode_aset`),
  ADD KEY `no_urut` (`no_urut`);

--
-- Indeks untuk tabel `trans_pengajuan`
--
ALTER TABLE `trans_pengajuan`
  ADD PRIMARY KEY (`kode_pengajuan`);

--
-- Indeks untuk tabel `trans_perbaikan`
--
ALTER TABLE `trans_perbaikan`
  ADD PRIMARY KEY (`kode_perbaikan`);

--
-- Indeks untuk tabel `trans_rusak`
--
ALTER TABLE `trans_rusak`
  ADD PRIMARY KEY (`kode_rusak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log_app_login`
--
ALTER TABLE `log_app_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `main_user_application`
--
ALTER TABLE `main_user_application`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `main_user_permission`
--
ALTER TABLE `main_user_permission`
  MODIFY `id_permission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;

--
-- AUTO_INCREMENT untuk tabel `trans_aset`
--
ALTER TABLE `trans_aset`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=568;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `main_menu`
--
ALTER TABLE `main_menu`
  ADD CONSTRAINT `id_jenis_menu` FOREIGN KEY (`id_jenis_menu`) REFERENCES `main_jenis_menu` (`id_jenis_menu`),
  ADD CONSTRAINT `id_status_menu` FOREIGN KEY (`id_status_menu`) REFERENCES `main_status_menu` (`id_status_menu`);

--
-- Ketidakleluasaan untuk tabel `main_user_permission`
--
ALTER TABLE `main_user_permission`
  ADD CONSTRAINT `id_menu_permission` FOREIGN KEY (`id_menu`) REFERENCES `main_menu` (`id_menu`),
  ADD CONSTRAINT `id_userlevel_permission` FOREIGN KEY (`id_userlevel`) REFERENCES `main_user_level` (`id_userlevel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

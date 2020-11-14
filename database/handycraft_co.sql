-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 01:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handycraft.co`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto_profil` varbinary(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(255) NOT NULL,
  `alamat_email` varchar(200) NOT NULL,
  `pesan_customer` varchar(500) NOT NULL,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `alamat_email`, `pesan_customer`, `tanggal_masuk`) VALUES
(8, 'doniwirawan166@gmail.com', 'saya ingin bekerjasama 2', '2020-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `gambar_produk` varchar(999) NOT NULL DEFAULT 'img/',
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` varchar(500) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `rating_produk` int(10) NOT NULL DEFAULT 5,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `gambar_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `rating_produk`, `tanggal_masuk`) VALUES
(0, 'produk (8).jpg', 'patung yunani kuno kembar', 'patung ini adalah patung yunani kuno generasi lebih baru', 599, 5, '0000-00-00'),
(1, 'produk (10).jpg', 'Lukisan Jaman Dahulu', 'ini adalah lukisan karya ahmad dahlan', 600, 5, '0000-00-00'),
(2, 'produk (2).jpg', 'Lukisan Abstrak', 'lukisan abstrak ini adalah lukisan karya seorang pelaut terkenal dari bali', 499, 5, '0000-00-00'),
(3, 'produk (3).jpg', 'lukisan bunga karya daendels', 'lukisan bunga ini adalah lukisan yang dibuat di denpasar oleh seorang penjajah dari eropa', 200, 4, '0000-00-00'),
(4, 'produk (4).jpg', 'lukisan pelangi dari belanda', 'lukisan ini adalah lukisan dari seorang maestro dari belanda yang bertugas di indonesia pada jaman penjajahan', 900, 5, '0000-00-00'),
(5, 'produk (5).jpg', 'patung lama dari yunani', 'patung ini adalah patung yang dibuat pada jaman yunani kuno', 700, 5, '0000-00-00'),
(6, 'produk (6).jpg', 'Patung dari jaman yunani kuno', 'patung ini adalah patung hasil karya seniman pada zaman yunani kuno', 801, 5, '0000-00-00'),
(7, 'produk (7).jpg', 'lukisan abstrak ', 'lukisan abstrak ini adalah hasil daripada artist kontemporer', 700, 5, '0000-00-00'),
(15, 'produk (11).jpg', 'Ini adalah produk baru', 'ini adalah produk baru yang kami jual untuk anda', 333, 5, '2020-11-14'),
(16, 'produk (1).jpg', 'test', 'fdsafsa', 1111, 5, '2020-11-14'),
(17, 'produk (3).jpg', 'Bunga yang indah', 'ini adalah lukisan bunga yang indah', 599, 5, '2020-11-14'),
(18, 'produk (7).jpg', 'test', 'fdsafsafsa', 1111, 5, '2020-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'doniwirawan', 'doniwirawan166@gmail.com', NULL, '$2y$10$JboxNL2k8gtigH3XBIzAK.SBhKUnlrkkLb6dILW9./IeI1Y0wMF0W', 'bZkJ82pt8tr861rljK4G8oQgtTtsrSR91JNAUKunFyDPlXUBej9wgLAkEmKn', '2020-11-04 17:29:45', '2020-11-04 17:29:45'),
(2, 'test', 'test@gmail.com', NULL, '$2y$10$nIU3E3UPUdPfZGqLEW7dH.JG/SCLVIAPxdDWHnqTBXgOMN8UdwWsC', NULL, '2020-11-04 18:56:00', '2020-11-04 18:56:00'),
(3, 'test', 'fdsafdsa@gmail.com', NULL, '$2y$10$Gx1XhG7yDaEBA7I2DqYU7uNuLN8mMukZ/SHlbd2CJLVmfuBvv/ErO', NULL, '2020-11-06 17:30:43', '2020-11-06 17:30:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

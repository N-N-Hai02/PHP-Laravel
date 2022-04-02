-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 03:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camera_store_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `MaKH` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenKH` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SoDT` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDK` date NOT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `MaKH`, `TenKH`, `SoDT`, `Email`, `Address`, `NgayDK`, `Image`) VALUES
(1, 'MK01', 'Nguyen Van A', '0123456789', 'A@gmail.com', 'HaNoi', '2022-03-18', 'Public\\Client_images\\1647629965_kute-boy1.jpg'),
(2, 'MK02', 'Nguyen Ngọc Hải', '0123456789', 'HaiMail@gmail.com', 'Thái Bình', '2022-03-20', 'Public\\Client_images\\1647630796_login.png'),
(3, 'MK03', 'Nguyen Van BAC', '099991245', 'BK@gmail.com', 'Tân Châu', '2022-03-20', 'Public\\Client_images\\1647788025_mayanh5.jpg');

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
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `SoHD` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `NgayNhapHD` datetime NOT NULL,
  `MaKH` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ProductID` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalMoney` int(20) NOT NULL,
  `DTOnline` int(20) NOT NULL,
  `DTOffline` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`SoHD`, `NgayNhapHD`, `MaKH`, `ProductID`, `Quantity`, `TotalMoney`, `DTOnline`, `DTOffline`) VALUES
('02', '2022-03-22 00:00:00', 'MK2', '02', 1, 300, 20, 20),
('03', '2022-03-23 00:00:00', 'MK1', '02', 1, 500, 10, 40);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MemberID` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MemberName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JoinDate` date NOT NULL,
  `Starts` int(11) NOT NULL,
  `ImageMembers` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `MemberName`, `Tel`, `Email`, `Address`, `JoinDate`, `Starts`, `ImageMembers`) VALUES
('01', 'Nguyen Van A', '01234456356', 'A@gmail.com', 'Nam ky', '2022-02-04', 0, ''),
('02', 'Nguyen Van B', '01225654546', 'B@gmail.com', 'Ha tinh', '2022-02-04', 0, 'Public\\imageMembers\\1643994708_download.jfif'),
('03', 'ABc', '01234567891', 'ABC@gmail.com', 'Long An', '2022-03-15', 0, 'Public\\imageMembers\\1647324515_vien_1.jpg'),
('ABC123', 'Nguyen Ngoc Hai', '12314665612', 'hai11@gmail.com', 'bình phước', '2022-01-14', 0, ''),
('ABC456', 'BaoBinh', '01222213333', 'binh@gmail.com', 'Thanh Hoa', '2022-01-14', 0, '');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_07_094010_create_members_table', 1),
(8, '2022_01_07_154523_create_registers_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `NgayNhapSP` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ProductName`, `Mota`, `Price`, `NgayNhapSP`, `Quantity`, `Image`) VALUES
(1, 'Camera Ngoài Trời APK20', 'Sản Phẩm Chất Lượng Cao Đam Bảo', 1200000, '2022-03-17', 20, 'Public\\Product_images\\1647541856_camera4.png'),
(2, 'Máy Ảnh MJG630', 'sản phẩm thuận tiện đi du lịch , chụp ảnh , nhỏ gọn', 350000, '2022-03-17', 25, 'Public\\Product_images\\1647543276_mayanh5.jpg'),
(3, 'Máy Chụp AKR2L', 'sản phẩm chụp ảnh chuyên nghiệp hiện đại', 325000, '2022-03-18', 50, 'Public\\Product_images\\1647586730_mayanh3.jpg'),
(5, 'Cameras KD2', 'siêu hình ảnh độ net trong trẻo 100%', 6000000, '2022-03-20', 30, 'Public\\Product_images\\1647790087_camera1.jpg'),
(6, 'Camera đa hướng', 'sản phẩm tốt đẹp net từng chi tiết', 4500000, '2022-03-20', 2, 'Public\\Product_images\\1647797305_camera2.png'),
(7, 'Máy ảnh USA250', 'chất lượng hình ảnh chụp đa dạng , thiết kế chất lượng đẹp', 9000000, '2022-03-20', 55, 'Public\\Product_images\\1647797374_mayanh4.jpg'),
(8, 'Camera ASK20', 'nhiều chiều đa hướng nhìn , rõ nét độ phân giải cao , đa chiều hướng', 3200000, '2022-03-20', 12, 'Public\\Product_images\\1647797458_camera5.jpg'),
(9, 'Camera trần', 'Quang sát công viên , trường học , giám sát 24 h', 2100000, '2022-03-20', 6, 'Public\\Product_images\\1647797522_camera3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(11) NOT NULL,
  `membername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registerdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `membername`, `tel`, `email`, `address`, `registerdate`) VALUES
(1, 'Hai', '123456789', 'hai@gmail.com', 'bình phước', '0000-00-00'),
(2, 'Nguyen Ngoc Hai', '2222299999', 'hai@gmail.com', 'Thanh Hoa', '2022-01-14'),
(3, 'Nguyễn Hải', '12345678911', 'Hai1616@gmail.com', 'Thanh Hoa', '2022-01-14'),
(4, 'Ngọc Hải', '12314665644', 'HaiNgoc@gmail.com', 'Thanh Hóa', '2022-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `MaNV` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenNV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SoDT` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgayThem` date NOT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `MaNV`, `TenNV`, `SoDT`, `Email`, `DiaChi`, `NgayThem`, `Image`) VALUES
(2, 'NV01', 'Nguyễn Ngọc Hải', '01333329999', 'Hai@gmail.com', 'Nghệ An', '2022-03-20', 'Public\\Staff_images\\1647788763_kute-boy1.jpg'),
(3, 'NV02', 'Nguyễn Kim Thư', '0992456111', 'Thư@gmail.com', 'Tân Thanh', '2022-03-20', 'Public\\Staff_images\\1647789951_logo.png');

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
(1, 'Hải Nguyễn', 'NNHai@gmail.com', NULL, '$2y$10$hQqk1QXW1MLsX5gTsnLIduO4TtOzwj4AWaDYkugSlHdJQytYBlf5y', NULL, '2022-03-17 04:10:50', '2022-03-17 04:10:50'),
(4, 'Nhat Khoa', 'NhatKha@gmail.com', NULL, '$2y$10$poL9jPDLf2fvv0MwAkrquun2SaAfkaZdLqOq66m8TCtvK3atcAIMW', NULL, '2022-03-20 10:50:42', '2022-03-20 10:50:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`SoHD`),
  ADD UNIQUE KEY `InvoiceDate` (`MaKH`,`ProductID`) USING BTREE,
  ADD KEY `invoices_productid_foreign` (`ProductID`) USING BTREE;

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`),
  ADD UNIQUE KEY `members_tel_unique` (`Tel`),
  ADD UNIQUE KEY `members_email_unique` (`Email`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

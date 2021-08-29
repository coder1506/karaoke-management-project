-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 10:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custom`
--

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `IdDichVu` bigint(20) UNSIGNED NOT NULL,
  `TenDV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonGia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`IdDichVu`, `TenDV`, `Mota`, `DonGia`, `SoLuong`, `TrangThai`, `created_at`, `updated_at`) VALUES
(2, 'Bánh mì', 'không đường', '10000', 11496, 1, '2021-08-26 15:53:32', '2021-08-27 08:02:01'),
(10, 'Hạt dương', 'Ngon ngon', '23000', 5000, 0, '2021-08-26 15:14:19', '2021-08-27 08:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `IdHoaDon` bigint(20) UNSIGNED NOT NULL,
  `IdDichVu` bigint(20) UNSIGNED NOT NULL,
  `IdKhachHang` bigint(20) UNSIGNED NOT NULL,
  `IdNhanVien` bigint(20) UNSIGNED NOT NULL,
  `IdPhongHat` bigint(20) UNSIGNED NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `NgayTao` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`IdHoaDon`, `IdDichVu`, `IdKhachHang`, `IdNhanVien`, `IdPhongHat`, `SoLuong`, `NgayTao`, `created_at`, `updated_at`) VALUES
(232131, 2, 1, 1, 1, 1, '2021-08-27', '2021-08-27 07:38:44', '2021-08-27 08:30:44'),
(564564, 10, 1, 1, 1, 5000, '2021-08-27', '2021-08-27 08:37:41', '2021-08-27 08:37:41'),
(5436454, 2, 1, 1, 1, 3, '2021-08-27', '2021-08-27 08:18:41', '2021-08-27 08:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `IdKhachHang` bigint(20) UNSIGNED NOT NULL,
  `TenKhachHang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`IdKhachHang`, `TenKhachHang`, `DiaChi`, `SoDT`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Dụ tró', 'Hà Nội', '02122000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IdNhanVien` bigint(20) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`IdNhanVien`, `HoTen`, `Email`, `SoDT`, `Diachi`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Dụ tròn', 'abc@gmail.com', '1231231', 'Thanh Hóa', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhap`
--

CREATE TABLE `nhap` (
  `IdNhap` bigint(20) UNSIGNED NOT NULL,
  `IdDichVu` bigint(20) UNSIGNED NOT NULL,
  `SoLuongNhap` int(11) NOT NULL,
  `NgayNhap` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phonghat`
--

CREATE TABLE `phonghat` (
  `IdPhongHat` bigint(20) UNSIGNED NOT NULL,
  `TenPhongHat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phonghat`
--

INSERT INTO `phonghat` (`IdPhongHat`, `TenPhongHat`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Phòng 203', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`IdDichVu`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`IdHoaDon`),
  ADD KEY `hoadon_iddichvu_foreign` (`IdDichVu`),
  ADD KEY `hoadon_idkhachhang_foreign` (`IdKhachHang`),
  ADD KEY `hoadon_idnhanvien_foreign` (`IdNhanVien`),
  ADD KEY `hoadon_idphonghat_foreign` (`IdPhongHat`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IdKhachHang`),
  ADD UNIQUE KEY `khachhang_sodt_unique` (`SoDT`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`IdNhanVien`),
  ADD UNIQUE KEY `nhanvien_email_unique` (`Email`),
  ADD UNIQUE KEY `nhanvien_sodt_unique` (`SoDT`);

--
-- Indexes for table `nhap`
--
ALTER TABLE `nhap`
  ADD PRIMARY KEY (`IdNhap`),
  ADD KEY `nhap_iddichvu_foreign` (`IdDichVu`);

--
-- Indexes for table `phonghat`
--
ALTER TABLE `phonghat`
  ADD PRIMARY KEY (`IdPhongHat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `IdDichVu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `IdHoaDon` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5436455;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `IdKhachHang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `IdNhanVien` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhap`
--
ALTER TABLE `nhap`
  MODIFY `IdNhap` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phonghat`
--
ALTER TABLE `phonghat`
  MODIFY `IdPhongHat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_iddichvu_foreign` FOREIGN KEY (`IdDichVu`) REFERENCES `dichvu` (`IdDichVu`),
  ADD CONSTRAINT `hoadon_idkhachhang_foreign` FOREIGN KEY (`IdKhachHang`) REFERENCES `khachhang` (`IdKhachHang`),
  ADD CONSTRAINT `hoadon_idnhanvien_foreign` FOREIGN KEY (`IdNhanVien`) REFERENCES `nhanvien` (`IdNhanVien`),
  ADD CONSTRAINT `hoadon_idphonghat_foreign` FOREIGN KEY (`IdPhongHat`) REFERENCES `phonghat` (`IdPhongHat`);

--
-- Constraints for table `nhap`
--
ALTER TABLE `nhap`
  ADD CONSTRAINT `nhap_iddichvu_foreign` FOREIGN KEY (`IdDichVu`) REFERENCES `dichvu` (`IdDichVu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

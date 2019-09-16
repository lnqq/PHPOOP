-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2019 lúc 04:21 PM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgioithieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisampham`
--

CREATE TABLE `loaisampham` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisanpham` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `loaisampham`
--

INSERT INTO `loaisampham` (`id_loaisp`, `tenloaisanpham`) VALUES
(36, 'Do Bo'),
(37, 'Vay'),
(38, 'Do Am'),
(39, 'Vest');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `baohanh` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `id_loaisp`, `img`, `mota`, `baohanh`, `gia`) VALUES
(32, 'Do Bo Kieu', 36, '1.jpg', 'Con Hang', '1 Nam', '100.000 dong'),
(33, 'Vay Ngan', 37, '10.jpg', 'Con Hang', '3 Nam', '500.000 Dong'),
(34, 'Do Tan Thoi', 39, '5.jpg', 'Con Hang', '2 Nam', '1.000.000 Dong'),
(35, 'Vay Nam', 37, '3.jpg', 'Con Hang', '3 Thang', '150.000 Dong'),
(36, 'Quan Shot', 36, '8.jpg', 'Con Hang, Hang Chau Au, Chat Luong Quang Dong Trung Quoc', '1 Thang', '200.000'),
(37, 'Quan Ao Lanh', 38, '7.jpg', 'Con Hang, Chat Nhu Mua He', '3 Thang', '300.000 Dong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwork` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `username`, `passwork`, `email`) VALUES
(1, 'quang', '123', 'quang@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaisampham`
--
ALTER TABLE `loaisampham`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loaisp` (`id_loaisp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaisampham`
--
ALTER TABLE `loaisampham`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisampham` (`id_loaisp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

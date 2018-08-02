-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 02, 2018 lúc 05:15 PM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `nameStudent` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `birthDate` date NOT NULL,
  `emailStudent` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pictureProfile` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `nameStudent`, `birthDate`, `emailStudent`, `phoneNumber`, `pictureProfile`) VALUES
(1, 'Trần Thi C', '1995-01-07', 'nguyenvana@gmail.com', '0123456789', 'ha.png'),
(2, 'Nguyễn Văn B', '1996-06-04', 'nguyenvanb@gmail.com', '0123654789', 'ha.png'),
(5, 'Nguyễn Văn D', '1995-06-19', 'nguyenvand@gmail.com', '0123587456', 'images1675493_google_chrome_logo_930x488.png'),
(7, 'Trần Thị C', '1995-06-06', 'tranthic@gmail.com', '0123548564', 'ha.png'),
(8, 'Trần Thị a', '1995-06-01', 'tranthia@gmail.com', '012548754', 'ha.png'),
(18, 'Trần Văn An', '1995-06-05', 'tranvanan@gmail.com', '012335422256', 'ha.png'),
(20, 'Nguyễn Thị Linh', '1995-06-21', 'nguyenthilinh@gmail.com', '01233654885', 'Grade Grey.jpg'),
(21, 'Nguyễn Văn Nam', '1996-06-15', 'nguyenvanam@gmail.com', '01233586665', 'Grade Grey.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailStudent` (`emailStudent`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

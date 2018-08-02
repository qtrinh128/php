-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 02, 2018 lúc 04:51 PM
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
-- Cơ sở dữ liệu: `blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'LẬP TRÌNH'),
(2, 'VĂN HÓA'),
(3, 'SUY NGẪM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `email`, `username`, `password`, `level`) VALUES
(1, 'qtrinh128@gmail.com', 'qtrinh128', '123123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_post` date NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `img`, `author`, `time_post`, `id_category`) VALUES
(3, 'Viết linh tinh về cuốn sách đang đọc dở - Những người khốn khổ - Victor Hugo', '<div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\">Dạo này tôi đang đọc\r\ncuốn thứ nhất trong ba cuốn NHỮNG NGƯỜI KHỐN KHỔ - VICTOR HUGO.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<br /></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\">Có lẽ khá lâu rồi tôi\r\nmới cầm đọc trên tay 1 cuốn sách dày và nặng như thế - nó dày tới gần 650 trang\r\nvà chất liệu giấy cũng không phải loại mỏng nhẹ.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\">Phần nữa là lâu rồi tôi\r\nkhông đọc thế nên khi mới đọc cảm thấy rất vấp từ và cách hành văn của cuốn\r\nsách,<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\"><br /></span></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\">Mà đã vấp thì khó tập\r\ntrung và nhanh chán đọc lắm, nhưng thật may là tôi không ngay lập tức cất nó\r\nvào hòm sách mà quăng nó lên đầu giường&nbsp;để ngay mai thử đọc lại.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\"><br /></span></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\">Và giờ suy nghĩ lại thì\r\ntôi cảm thấy đó là 1 hành động không thể đúng đắn hơn, nếu như lúc đó tôi cho\r\nnó vào hòm sách thì chẳng biết đến lúc nào tôi mới lôi nó ra để đọc tiếp\r\nvà&nbsp;<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\">đó thực sự sẽ là một\r\nđiều nuối tiếc vô cùng khi đọc cuốn sách này muộn như thế.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"font-family: &quot;times new roman&quot; , serif; font-size: 16pt;\"><br /></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\">Cuốn này 650 trang, hiện tại tôi mới chỉ đọc được 1/6 cuốn sách\r\nvà tất nhiên chẳng thể tóm lược được nội dung, mà thú thật tôi chẳng bao giờ\r\ngiỏi trong việc tóm tắt 1 cái diễn biến câu chuyện nào cả, có chăng chỉ làm cho\r\nnó rắc rối hơn.</span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\"><br /></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\">Nhưng mới chỉ 1/6 cuốn sách thôi đã khiến tôi cảm thấy rất ấn\r\ntượng về nó, giám mục Myriel hay còn được gọi là đức cha Bienvenu và đặc biệt\r\nlà về những diễn giải ý nghĩa trong cuốn sách (ít thôi những rất đáng để ngẫm\r\nnghĩ) hình như nó mang hơi hướng triết học thì phải?. Nhưng đó chỉ là theo sự\r\nhiểu biết nông cạn của tôi mà nói thế, nhưng bỏ qua đi dù sao nó cũng rất hay.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\"><br /></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\">Như phần giới thiệu cuốn sách của nhóm biên dịch có đề cập đây\r\nlà bộ truyện lớn nhất và có giá trị nhất trong sự nghiệp văn chương của VICTOR\r\nHUGO. Ông đã suy nghĩ và viết nó trong ba mươi năm. Vậy nên vừa đọc tôi vừa cảm\r\nthấy có cái gì đó rất vĩ đại, hơi nói quá thì phải nhưng cảm nhận, cảm quan của\r\ncá nhân tôi nó ra vậy.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\"><br /></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\">Xin được trính dẫn một đoạn mà tôi thấy rất hay và đáng để suy\r\nngẫm. Nó nằm ở phần mà tôi đang đọc, phần đầu của câu chuyện.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\"><br /></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\">\"Chúng ta chỉ thích đấu tranh chừng nào đấu tranh còn nguy\r\nhiểm. Và bao giờ cũng vậy, chỉ riêng những chiến sỹ buổi đầu mới có quyền làm\r\nngười thanh toán giờ chót. Ai chưa từng là kẻ buộc tội gay gắt đối phương trong\r\nthời thịnh vượng của nó, thì khi nó sụp đổ, nên làm thinh. Chỉ có kẻ tố cáo sự\r\nthành công mới xứng đáng làm người phán xử hợp pháp sự thất bại.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"background: white; line-height: normal; margin-bottom: .0001pt; margin-bottom: 0in; text-align: justify;\">\r\n<span style=\"color: #1d2129; font-family: &quot;times new roman&quot; , serif; font-size: 16.0pt;\">Ở trên tôi đã sửa một chút đáng nhẽ là \'sự sụp đổ\', tôi sửa\r\nthành \'sự thất bại\'. Tôi cảm thấy nó hợp văn hơn trong câu trích này, riêng\r\nđoạn trích này thôi.<o:p></o:p></span></div>\r\n<div class=\"MsoNormal\" style=\"text-align: justify;\">\r\n<br /></div>\r\n</div>\r\n<div style=\"text-align: left;\">\r\n<br /></div>\r\n<div class=\"text_exposed_show\" style=\"background-color: white; color: #1d2129; display: inline; font-size: 14px;\">\r\n</div>', 'https://lh3.googleusercontent.com/23cZynKjrciIKWU5hUxEwSGOK8CyBRzhuSybANvclokjDsSH0PztxafrC9RTtIUAXtWIY2E8lfsM12XjMLpHx6tgUd2CsvSgxmUjiajdlJsCa23PjBJPA-lHQgnGaW4aziBzBJ8FJm_V0H32B6TYPAxhN1yezklO7gWd64jbkyLroC1kc9sEP5z2TKjvwd7B6LngjDtLTWHc1zbMVlZzGhVsk-5BvgvsxhriF73AL5ZyIrT4e-CDcNyjA3mD8EmkjAEjj_v-Nsit4m9gymsfVewhBCs6C7DNt6SCWfw6th5iJ_MzcOhZf1JhD1SM7qxEIYt8Nn1zfQe5GlCDja6elitWMyQHvCe9JKwjnNoufKitFZz5NPczOsGjdjcp_RS9bYOgHkq8XIfUlM-Kz3cIo2hHMWKRfWfUmhIYgGB-sn_M2758R8vkBW-Zb7i9TRaIH497dLvdcHu6AjgxIkIyRe2bxAFaogLbD2KNdP086evXUZb8eOjfOOvOMRaFWQRgKGjVwbU5WRGRSnFIuY1uPvMUEW_xnyPchHJBRPSTuPi6yaRjtjLMrgf8Z435n21pbnTlt-4I2-AVjtbv_qiPmsVFdf8u9m2_3FOpYKA=w1366-h383-no', 'Trinh Quang', '2018-06-10', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

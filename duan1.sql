-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2024 at 02:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pttt` tinyint(11) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2. Chuyển khoản 3. Thanh toán online',
  `ngaydathang` varchar(10) NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `status` tinyint(4) DEFAULT 0 COMMENT '0. Đơn hàng mới 1.Đang chờ xử lý 2.Đang giao hàng 3.Đã giao hàng',
  `id_user` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `name`, `address`, `tel`, `email`, `pttt`, `ngaydathang`, `total`, `status`, `id_user`) VALUES
(1, 'tranhau58', 'Phú Đôi,Đại Thắng ,Phú Xuyên ,Hà Nội', '0352594158', 'hautranthi752@gmail.com', 1, '05/12/2023', 92, 0, 3),
(21, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '05/12/2023', 124, 1, 1),
(22, 'tranhau58', '', '', 'hautranthi752@gmail.com', 1, '05/12/2023', 1000079, 2, 3),
(43, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '11/12/2023', 0, 3, 1),
(46, 'minhthu', 'Yên Mỹ - Hưng Yên', '0123456', 'minhthu08032002@gmail.com', 1, '11/12/2023', 22, 0, 1),
(47, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '12/12/2023', 122, 0, 1),
(48, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '12/12/2023', 122, 0, 1),
(49, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '12/12/2023', 122, 0, 1),
(50, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '12/12/2023', 122, 0, 1),
(51, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '12/12/2023', 122, 0, 1),
(52, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '12/12/2023', 122, 0, 1),
(53, 'minhthu', '', '', 'minhthu08032002@gmail.com', 1, '12/12/2023', 182, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'san pham dep', 0, 44, '05/12/2023'),
(2, 'đánh giá 5 sao', 0, 1, '05/12/2023'),
(3, 'sản phẩm đẹp', 1, 1, '05/12/2023'),
(4, 'sẽ ghé lại shop thường xuyên', 1, 1, '05/12/2023');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(20) NOT NULL DEFAULT 0,
  `soluong` int(10) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_pro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 1),
(2, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 1),
(3, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 2),
(4, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 2),
(5, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 3),
(6, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 3),
(7, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 4),
(8, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 4),
(9, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 5),
(10, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 5),
(11, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 6),
(12, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 6),
(13, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 7),
(14, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 7),
(15, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 2, 79, 8),
(16, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 8),
(17, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 9),
(18, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 10),
(19, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 11),
(20, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 12),
(21, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 13),
(22, 3, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 14),
(23, 1, 43, '3.jpg', ' KINGDOM - Tập 61 - Tặng Kèm Thẻ Hình Nhân Vật', 41, 2, 41, 15),
(24, 0, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 16),
(25, 1, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 17),
(26, 1, 43, '3.jpg', ' KINGDOM - Tập 61 - Tặng Kèm Thẻ Hình Nhân Vật', 41, 1, 41, 17),
(27, 1, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 1, 13, 18),
(28, 1, 43, '3.jpg', ' KINGDOM - Tập 61 - Tặng Kèm Thẻ Hình Nhân Vật', 41, 1, 41, 18),
(29, 1, 43, '3.jpg', ' KINGDOM - Tập 61 - Tặng Kèm Thẻ Hình Nhân Vật', 41, 2, 41, 19),
(30, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 19),
(31, 1, 43, '3.jpg', ' KINGDOM - Tập 61 - Tặng Kèm Thẻ Hình Nhân Vật', 41, 2, 41, 20),
(32, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 20),
(33, 1, 43, '3.jpg', ' KINGDOM - Tập 61 - Tặng Kèm Thẻ Hình Nhân Vật', 41, 2, 41, 21),
(34, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 21),
(35, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 22),
(36, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 22),
(37, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 23),
(38, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 23),
(39, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 24),
(40, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 24),
(41, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 25),
(42, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 25),
(43, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 26),
(44, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 26),
(45, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 27),
(46, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 27),
(47, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 28),
(48, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 28),
(49, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 29),
(50, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 29),
(51, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 30),
(52, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 30),
(53, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 31),
(54, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 31),
(55, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 32),
(56, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 32),
(57, 3, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 33),
(58, 3, 37, '30.jpg', 'Cây Cam Ngọt Của Tôi', 1000000, 1, 1000000, 33),
(59, 1, 42, '/4.jpg', ' Moriarty The Patriot - Tập 3', 43, 4, 172, 34),
(60, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 36),
(61, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 3, 79, 37),
(62, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 3, 79, 38),
(63, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 3, 79, 39),
(64, 0, 44, '10.jpg', 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', 13, 2, 13, 41),
(65, 1, 41, '2.jpg', 'Thám Tử Lừng Danh Conan - Tập 101', 22, 1, 22, 46),
(66, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 47),
(67, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 47),
(68, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 48),
(69, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 48),
(70, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 49),
(71, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 49),
(72, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 50),
(73, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 50),
(74, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 51),
(75, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 51),
(76, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 52),
(77, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 52),
(78, 1, 45, '11.jpg', 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', 79, 1, 79, 53),
(79, 1, 42, '4.jpg', ' Moriarty The Patriot - Tập 3', 43, 1, 43, 53),
(80, 1, 35, '31.jpg', 'Đắc Nhân Tâm (Tái Bản 2021)', 60, 1, 60, 53);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'minhthu', '12345', 'minhthu08032002@gmail.com', 'Phú Đôi,Đại Thắng ,Phú Xuyên ,Hà Nội', '19001000', 0),
(3, 'tranhau58', '05082004', 'hautranthi752@gmail.com', 'Phú Đôi,Đại Thắng ,Phú Xuyên ,Hà Nội', '12345678', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `name`) VALUES
(1, 'Văn Học'),
(2, 'Truyện ngắn'),
(3, 'Truyện trinh thám'),
(4, 'Kinh tế'),
(5, 'Tâm lý'),
(6, 'Kỹ năng sống'),
(7, 'Sách thiếu nhi'),
(8, 'Sách giáo khoa'),
(9, 'Ngôn tình'),
(10, 'Khoa học');

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `id_the_loai` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`id`, `name`, `img`, `view`, `id_the_loai`, `price`, `mota`) VALUES
(25, 'Bên nhau trọn đời', '9786043494631.jpg', 0, 9, 59.63, 'Bảy năm trước, vì hiểu lầm và cả sự chen chân của Hà Dĩ Mai mà Triệu Mặc Sênh đau lòng rời bỏ Hà Dĩ Thâm, lên máy bay sang Mỹ. Cô cứ nghĩ rằng anh không đau lòng, là anh đuổi cô đi, mà đâu ngờ cuộc chia ly năm ấy đã trở thành tổn thương khó xóa nhòa trong lòng anh.'),
(26, 'Thất tịch không mưa', 'image_195509_1_14864.jpg', 0, 9, 78.00, 'Từ nhỏ cô đã thầm yêu anh, như số kiếp không thể thay đổi Tình yêu trong sáng ấy, như lần đầu được nếm mùi vị của quả khế mới chín. Sau đó cô và anh xa nhau, gặp lại đều cách nhau ba năm. Tình yêu, giống như lần đầu được nếm thử quả khế mới chín. Chua chua, chát chát, nhưng không kìm được, vẫn muốn nếm thêm lần nữa.'),
(27, 'Ghi chép pháp y', 'b_a-tr_c---ph_p-y-600 (1).jpg', 0, 3, 89.00, '“Ghi chép pháp y - Những cái chết bí ẩn” là cuốn sách nằm trong hệ liệt với “Pháp y Tần Minh” - bộ tiểu thuyết nổi đình đám của xứ Trung đã được chuyển thể thành series phim. Cuốn sách tổng hợp những vụ án có thật, được viết bởi bác sĩ pháp y Lưu Hiểu Huy - người có 15 năm kinh nghiệm và từng mổ xẻ hơn 800 tử thi.'),
(28, 'Nhà lãnh đạo không chức danh', '8934974179184 (1).jpg', 0, 4, 84.00, 'Trong cuốn sách Nhà Lãnh Đạo Không Chức Danh, bạn sẽ học được: Làm thế nào để làm việc và tạo ảnh hưởng với mọi người như một siêu sao, bất chấp bạn đang ở vị trí nào Một phương pháp để nhận biết và nắm bắt cơ hội vào những thời điểm thay đổi'),
(29, 'Bí mật tư duy triệu phú', 'image_188995_1_1 (1).jpg', 0, 4, 84.00, 'Cuốn sách dành cho những ai còn loay hoay muốn tìm đường đến sự giàu có và thành công. “Bí mật tự duy triệu phú” mang đến nhiều tư duy mới cho người đọc về cách suy nghĩ của người giàu hay cách suy nghĩ để trở nên giàu có.'),
(30, 'Đứa trẻ hiểu truyện thường không có kẹo ăn', '8935325011818 (1).jpg', 0, 5, 103.60, '“Đứa trẻ hiểu chuyện thường không có kẹo ăn” – Cuốn sách dành cho những thời thơ ấu đầy vết thương. Trên đời này có một điều rất kỳ diệu, đó là bậc phụ huynh nào cũng mong muốn con mình trở nên hoàn hảo theo một hình mẫu giống hệt nhau. Lanh lẹ, khôn khéo, dễ thương, luôn nhìn cha mẹ với gương mặt tươi cười trong sáng'),
(31, 'Một cuốn sách chữa lành', 'bia1_mot-cuon-sach-chua-lanh-_merry-go-round_-1.jpg', 0, 5, 98.00, 'Nếu bạn đang trong trạng thái buồn bã, lo lắng, bồn chồn hay chỉ đơn giản là cảm thấy có những nỗi đau như bóp nghẹt trái tim mà không biết chia sẻ cùng ai, cuốn sách này sẽ đóng vai trò như một người bạn đồng hành, lắng nghe và đưa ra những lời khuyên hữu ích.'),
(32, 'Khéo ăn nói sẽ có được thiên hạ', '8936067605693.jpg', 0, 6, 119.00, 'Cuốn sách Khéo ăn nói sẽ có được thiên hạ của Trác Nhã sẽ giải đáp cho bạn đọc những câu hỏi đó. Cuốn sách với ngôn từ rõ ràng, gần gũi với cuộc sống sẽ mang đến những kĩ năng và phương pháp giao tiếp thực dụng, chắc chắn sẽ giúp ích được cho bạn đọc.'),
(33, 'Lớp học Mật Ngữ', 'lhmnpbm3.jpg', 0, 7, 17.50, 'Tháng Tư là lời nói dối của… lớp Hoàng đạo. Bạn sẽ được một phen cười bò càng với những biến hóa khôn lường từ viên kẹo nhỏ xíu trong tập truyện này.'),
(34, 'Một cuốn sách trầm cảm', '1.jpg', 0, 5, 69.00, '“Ở nơi đây mình không bán nụ cười\r\n\r\nmình chỉ bán nước mắt và buồn hiu\r\n\r\nở nơi đây mình không bán tình yêu\r\n\r\nchỉ có cô liêu và những ngày quạnh quẽ.”'),
(35, 'Đắc Nhân Tâm (Tái Bản 2021)', '31.jpg', 0, 10, 60.20, 'Đắc nhân tâm của Dale Carnegie là quyển sách của mọi thời đại và một hiện tượng đáng kinh ngạc trong ngành xuất bản Hoa Kỳ. '),
(36, ' Lý Thuyết Trò Chơi', '32.jpg', 0, 4, 125.00, 'Đời người giống như trò chơi, mỗi bước đều phải cân nhắc xem đi như thế nào, đi về đâu, phải kết hợp nhiều yếu tố lại chúng ta mới có thể đưa ra được lựa chọn.'),
(37, 'Cây Cam Ngọt Của Tôi', '30.jpg', 0, 3, 1000000.00, '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng sống... một tác phẩm kinh điển của Brazil.” - Booklist\r\n\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.” - The National'),
(40, 'Moriarty The Patriot - Tập 4', '1.jpg', 0, 7, 42.75, 'Moriarty The Patriot - Tập 4\r\n\r\nVào thế kỷ 19, đế chế Anh quốc áp đặt sự thống trị của mình bao trùm khắp thế giới. Tầng lớp quý tộc tự cho mình những đặc ân chưa từng thấy, khiến hố ngăn giai cấp ngày càng bị đào sâu.'),
(41, 'Thám Tử Lừng Danh Conan - Tập 101', '2.jpg', 0, 7, 21.50, 'Thám Tử Lừng Danh Conan - Tập 101\r\n\r\nMật mã Akemi Miyano để lại ẩn chứa gợi ý về vị trí chôn chiếc hộp thời gian ở trường tiểu học!? Conan dẽ cùng nhóm Haibara hợp sức giải mã!!'),
(42, ' Moriarty The Patriot - Tập 3', '4.jpg', 0, 7, 42.90, 'Moriarty The Patriot - Tập 3\r\n\r\nVào thế kỷ 19, đế chế Anh quốc áp đặt sự thống trị của mình bao trùm khắp thế giới. Tầng lớp quý tộc tự cho mình những đặc ân chưa từng thấy, khiến hố ngăn giai cấp ngày càng bị đào sâu.'),
(43, ' KINGDOM - Tập 61 - Tặng Kèm Thẻ Hình Nhân Vật', '3.jpg', 0, 7, 40.50, 'KINGDOM - Tập 61\r\n\r\nThời kỳ Xuân Thu chiến quốc kéo dài suốt 500 năm do toàn cõi Trung Hoa vẫn chưa quy về một mối. Sinh ra trong thời loạn lạc,'),
(44, 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)', '10.jpg', 0, 8, 13.00, 'Mĩ Thuật 1 (Chân Trời Sáng Tạo) (2023)'),
(45, 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)', '11.jpg', 0, 8, 79.00, 'Tiếng Anh 1 - Family And Friends (National Edition) - Student Book (2022)\r\n\r\nFamily and Friends National Edition là SGK Tiếng Anh lớp 1 đã được Bộ GD&ĐT phê duyệt với nhiều điểm mới trong giáo trình:\r\n\r\n- Giúp HS phát triển toàn diện (The Whole Child Approach)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_truyen_theloai` (`id_the_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `lk_truyen_theloai` FOREIGN KEY (`id_the_loai`) REFERENCES `theloai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

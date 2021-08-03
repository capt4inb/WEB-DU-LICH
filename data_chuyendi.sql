-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 03:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_chuyendi`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_thanhvien` int(11) NOT NULL,
  `tai_khoan` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_thanhvien`, `tai_khoan`, `mat_khau`, `hovaten`, `phone`, `address`) VALUES
(2, 'letrieuphu', '123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_sanpham`
--

CREATE TABLE `danhmuc_sanpham` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc_sanpham`
--

INSERT INTO `danhmuc_sanpham` (`id_dm`, `ten_dm`) VALUES
(13, 'Miền Nam'),
(14, 'Miền Trung'),
(15, 'Miền Bắc');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_donhang` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ma_hang` varchar(255) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ngay_thang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` text NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id_donhang`, `id_sp`, `ma_hang`, `id_kh`, `ngay_thang`, `address`, `tinh_trang`) VALUES
(8, 0, '3222', 29, '2021-07-08 10:57:28', '0', 0),
(9, 42, '7704', 30, '2021-07-08 11:05:19', '0', 0),
(10, 42, '2531', 31, '2021-07-08 11:05:31', '0', 0),
(15, 73, '3355', 36, '2021-07-30 12:59:46', '1/8/2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `hovaten` varchar(255) DEFAULT NULL,
  `sodienthoai` int(30) DEFAULT NULL,
  `email` text NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `name`, `phone`, `address`, `note`) VALUES
(29, 'le trieu phu', '0365454067', '16/7', ''),
(30, 'le trieu phu', ' +840365454067', '16/7', ''),
(31, 'le trieu phu', ' +840365454067', '16/7', ''),
(32, 'le trieu phu1', '1234567', '25/7', ''),
(33, 'le trieu phu1', '1234567', '25/7', ''),
(34, 'SoureCode', '0365454067', '16/7', ''),
(35, 'le trieu phu', '0365454067', '16/7', ''),
(36, 'le trieu phu', '0365454067', '1/8/2021', '');

-- --------------------------------------------------------

--
-- Table structure for table `regis_travel`
--

CREATE TABLE `regis_travel` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `hoatdong` text NOT NULL,
  `noiden` text NOT NULL,
  `datekhoihanh` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` text NOT NULL,
  `tinh_trang` varchar(255) NOT NULL,
  `chi_tiet_sp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_dm`, `ten_sp`, `anh_sp`, `tinh_trang`, `chi_tiet_sp`) VALUES
(41, 14, 'Buôn Ma Thuột - Làng Cà Phê', 'langcaphe-bmt.jpg', '', 'buôn ma thuột - làng cà phê'),
(42, 15, 'Hà Nội - Sapa', 'sapa.jpg', '', 'Hà Nội - Sapa - một thị trấn nhỏ cổ kính nằm trong lòng dãy Hoàng Liên Sơn...'),
(43, 14, 'Đà Nẵng - Huế - Động Phong Nha', 'dongphongnha-hue.jpg', '', 'Với nhiều dãy núi hùng vỹ xanh rì và những dòng sông trong vắt thơ mộng...'),
(44, 14, 'Phú Quốc - Ngắm hoàng hôn', 'sunset-phuquoc.jpg', '', 'Phú Quốc, còn được mệnh danh là Đảo Ngọc, là hòn đảo lớn nhất của Việt Nam...'),
(45, 15, 'Đà Nẵng - Bà Nà - Hội An - Huế', 'hoian.jpg', '', 'Hội An là địa điểm tham quan khiến bất cứ ai đến đây đều phải hết lời khen ngợi...'),
(46, 13, 'Cà Mau - Bạc Liêu - Sóc Trăng', 'mui-ca-mau.jpg', '', 'Du khách sẽ được chu du miền Đất Mũi, nơi cuối cùng của tổ quốc..'),
(47, 15, 'TP.HCM - Hà Nội', 'ha-noi.jpg', '', 'Hà Nội chắc chắn là điểm đến mà các bạn không thể bỏ qua khi du lịch Miền Bắc...'),
(48, 15, 'Hà Nội - Vườn quốc gia Ba Vì', 'bavi.jpg', '', 'Du khách sẽ được hòa mình trong không gian thiên nhiên kì vĩ của núi rừng,..'),
(49, 15, 'Mộc Châu - Sơn La', 'mocchau-sonla.jpg', '', 'Khí hậu chính là món quà quý giá nhất mà thiên nhiên đã ban tặng cho Mộc Châu...'),
(50, 15, 'Hồ Ba Bể - Bắc Kạn', 'hobabe-backan.jpg', '', 'Nằm trong vườn quốc gia Ba Bể, hồ Ba Bể được mệnh danh là “thiên hạ đệ nhất hồ”...'),
(51, 15, 'Cát Bà - Hải Phòng', 'catbathaiphong.jpg', '', 'Là một trong các điểm đến hấp dẫn nhất khi đón hàng ngàn lượt du khách tới mỗi năm...'),
(52, 15, 'Ninh Bình', 'ninhbinh.jpg', '', 'Ninh Bình đang dần trở thành điểm du lịch hấp dẫn du khách trong và ngoài nước...'),
(53, 15, 'Tảm Đảo - Vĩnh Phúc', 'tamdao-vinhphuc.jpg', '', 'Nằm ở độ cao 900m so với mực nước biển, không khí mát mẻ và không gian yên tĩnh...'),
(54, 15, 'Thung Nai - Hoà Bình', 'thungnai.jpg', '', 'Thung Nai giống như một hòn đảo nhỏ xinh nằm trong hồ sông Đà...'),
(55, 15, 'Vịnh Hạ Long - Quảng Ninh', 'vinh-ha-long.jpg', '', 'Du khách sẽ được chiêm ngưỡng những hòn đảo tự nhiên nổi trên mặt nước...'),
(56, 14, 'Đảo Bình Ba - Nha Trang', 'dao-binh-ba.jpg', '', 'Đảo Bình Ba hay còn được nhắc đến với cái tên đảo Tôm Hùm...'),
(57, 14, 'Tháp Bà Ponagar', 'thap-ba-ponagar.jpg', '', 'Tọa lạc trên núi Tháp Bà nằm ngay giữa trung tâm thành phố Nha Trang...'),
(58, 14, 'Dốc Lết', 'doc-let.jpg', '', 'Nơi đây sở hữu một bãi biển thoải dài, nước trong xanh, cát trắng mịn...'),
(59, 14, 'Đảo Bình Hưng', 'dao-binh-hung.jpg', '', 'Đào Bình Hưng hay còn được gọi với cái tên hòn Tý, hòn Chút....'),
(60, 14, 'Vịnh Vân Phong', 'vinh-van-phong.jpg', '', 'Vịnh Vân Phong được người dân ví như một nàng công chúa ngủ quên ở nơi này...'),
(61, 14, 'Đảo Khỉ - Nha Trang', 'dao-khi-nha-trang.jpg', '', 'Là điểm đến lý tưởng cho người yêu động vật và thích du lịch khám phá...'),
(62, 14, 'Cù Lao Chàm', 'cu-lao-cham.jpg', '', 'Bảo tàng biển Cù Lao Chàm, Giếng cổ Chăm hay chùa Hải Tạng....'),
(63, 14, 'Eo Gió - Bình Định', 'eo-gio-binh-dinh.jpg', '', 'Được bao bọc bởi những dãy núi hình cánh khiến khung cảnh nơi đây trở nên kỳ vĩ...'),
(64, 14, 'Chùa Thiên Hưng', 'chua-thien-hung.jpg', '', 'Ngôi chùa được xây dựng vào năm 1977, thu hút được đông đảo khách du lịch tới...'),
(65, 13, 'Thành phố Hồ Chí Minh', 'tphcm.jpg', '', 'Với nhiều đô thị sầm uất và những công trình cao đồ sộ....'),
(66, 13, 'Vũng Tàu', 'vung-tau.jpg', '', 'Vũng Tàu không chỉ bình dị, chan hòa mà còn vô vàn những danh lam thắng cảnh...\r\n\r\n\r\n'),
(67, 13, 'Đồng Tháp', 'dong-thap.jpg', '', 'Đồng Tháp là một tỉnh hợp nhất từ tỉnh Sa Đéc và tỉnh Kiến Phong từ năm 1976...'),
(68, 13, 'Châu Đốc - An Giang', 'chau-doc-an-giang.jpg', '', 'An Giang là một tỉnh Tây Nam Bộ, nơi đầu tiên của vùng đồng bằng sông Cửu Long...'),
(69, 13, 'Cần Thơ', 'can-tho.jpg', '', 'Nhắc đến Cần Thơ, người ta sẽ nghĩ ngay đến chợ nổi vào mỗi buổi sáng sớm...'),
(70, 13, 'Kiên Giang', 'kien-giang.jpg', '', 'Kiên Giang nằm tận cùng phía tây nam Việt Nam...'),
(71, 13, 'Đảo Phú Quốc', 'phu-quoc.jpg', '', 'Đảo Phú Quốc là hòn đảo lớn nhất và xinh đẹp nhất của Việt Nam....'),
(72, 13, 'Cà Mau', 'mui-ca-mau.jpg', '', 'Du khách sẽ được chu du miền Đất Mũi, nơi cuối cùng của tổ quốc.....'),
(73, 13, 'Tây Ninh', 'tay-ninh.jpg', '', 'Vùng đất xinh đẹp này là cầu nối giữa Thành phố Hồ Chí Minh và thủ đô Phnôm Pênh...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_thanhvien`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `regis_travel`
--
ALTER TABLE `regis_travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dm` (`id_dm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_thanhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `regis_travel`
--
ALTER TABLE `regis_travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc_sanpham` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

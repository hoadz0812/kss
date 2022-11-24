-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2022 lúc 02:45 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kimsushi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `com`
--

CREATE TABLE `com` (
  `id_mon` int(11) NOT NULL,
  `ten_tieng_anh` varchar(50) NOT NULL,
  `ten_tieng_viet` varchar(50) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `com`
--

INSERT INTO `com` (`id_mon`, `ten_tieng_anh`, `ten_tieng_viet`, `gia`, `hinh_anh`) VALUES
(1, '', '', '', '20211213090316unknow.jpg'),
(8, 'Double Decker', 'Cơm cuộn hai tầng', '165.000đ', '20211214014437doubledecker.jpg'),
(9, 'Kawa Maki', 'Cơm cuộn da cá hồi', '135.000đ', '20211214014509kawamaki.jpg'),
(10, 'Rainbow Maki', 'Cơm cuộn cầu vồng', '165.000đ', '20211214014551rainbowmaki.jpg'),
(11, 'Avocado Maki', 'Cơm cuộn phủ bơ', '135.000đ', '20211214014621Avocadomaki.jpg'),
(12, 'Maguro Avocado Maki', 'Cơm cuộn cá ngừ quả bơ', '145.000đ', '20211214014702maguroavocado.jpg'),
(13, 'Sake Ura Maki', 'Cơm cuộn cá hồi quả bơ', '145.000đ', '20211214014737sakeuramaki.jpg'),
(14, 'Tekka Maki', 'Cơm cuộn cá ngừ', '55.000đ', '20211214014824tekkamaki.jpg'),
(15, 'Sake Maki', 'Cơm cuộn cá hồi', '55.000đ', '20211214015010sakemaki.jpg'),
(16, 'Kappa Maki', 'Cơm cuộn dưa chuột', '45.000đ', '20211214015037kappamaki.jpg'),
(17, 'Futo Maki', 'Cơm cuộn thập cẩm', '135.000đ', '20211214015110futomaki.jpg'),
(18, 'Sake Toro Maki Tem', 'Cơm cuộn bụng cá hồi', '85.000đ', '20211214015143saketoromakitem.jpg'),
(19, 'California Maki', 'Cơm cuộn California', '115.000đ', '20211214015208californiamaki.jpg'),
(20, 'Ebi Ten Maki', 'Cơm cuộn tôm chiên', '125.000đ', '20211214015241ebitenmaki.jpg'),
(21, 'Crunch Maki', 'Cơm cuộn sắc màu', '135.000đ', '20211214015321crunchmaki.jpg'),
(22, 'Unagi Kappa Maki', 'Cơm cuộn phủ lươn', '185.000đ', '20211214015349unagikappamaki.jpg'),
(23, 'Katsu Don', 'Cơm thịt lợn sốt trứng', '115.000đ', '20211214015428katsudon.jpg'),
(24, 'Katsu Cury', 'Cơm cà ri thịt lợn chiên', '125.000đ', '20211214015501katsucurry.jpg'),
(25, 'Tori Cury', 'Cơm cà ri thịt gà', '125.000đ', '20211214015531toricury.jpg'),
(26, 'Oyako Don', 'Cơm thịt gà sốt trứng', '115.000đ', '20211214015602Oyakodon.jpg'),
(27, 'Unazu', 'Cơm lươn Nhật', '325.000đ', '20211214015625unazu.jpg'),
(28, 'Sake Chahan', 'Cơm rang cá hồi', '115.000đ', '20211214021030sakechahan.jpg'),
(29, 'Onigiri Sake', 'Cơm nắm nhân cá hồi', '35.000đ', '20211214021106OnigiriSake.jpg'),
(30, 'Yaki Onigiri', 'Cơm nắm nướng', '55.000đ', '20211214021146YakiOnigiri.jpg'),
(31, 'Gohan', 'Cơm trắng', '20.000đ', '20211214021219gohan.jpg'),
(32, 'Sake Josui', 'Cháo cá hồi', '45.000đ', '20211214021243sakejosui.jpg'),
(33, 'Unagi Hotto', 'Cơm lươn thố đá', '325.000đ', '20211214021318unagihotto.jpg'),
(34, 'Kaisen Don', 'Cơm sushi đặc biệt', '265.000đ', '20211214021402kaisendon.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `do_uong`
--

CREATE TABLE `do_uong` (
  `id_mon` int(11) NOT NULL,
  `ten_tieng_anh` varchar(50) NOT NULL,
  `ten_tieng_viet` varchar(50) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `do_uong`
--

INSERT INTO `do_uong` (`id_mon`, `ten_tieng_anh`, `ten_tieng_viet`, `gia`, `hinh_anh`) VALUES
(1, '', '', '', '20211213131643unknow.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lau_my`
--

CREATE TABLE `lau_my` (
  `id_mon` int(11) NOT NULL,
  `ten_tieng_anh` varchar(50) NOT NULL,
  `ten_tieng_viet` varchar(50) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lau_my`
--

INSERT INTO `lau_my` (`id_mon`, `ten_tieng_anh`, `ten_tieng_viet`, `gia`, `hinh_anh`) VALUES
(1, '', '', '', '20211213093744unknow.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_chien_nuong`
--

CREATE TABLE `mon_chien_nuong` (
  `id_mon` int(11) NOT NULL,
  `ten_tieng_anh` varchar(50) NOT NULL,
  `ten_tieng_viet` varchar(50) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mon_chien_nuong`
--

INSERT INTO `mon_chien_nuong` (`id_mon`, `ten_tieng_anh`, `ten_tieng_viet`, `gia`, `hinh_anh`) VALUES
(1, '', '', '', '20211213091122unknow.jpg'),
(5, 'Tempura Moriawase', 'Tempura tổng hợp chiên', '165.000đ', '20211214021644tempuramoriawase.jpg'),
(6, 'Tori Karaage', 'Gà chiên kiểu Nhật', '85.000đ', '20211214021724torikaraage.jpg'),
(7, 'Tori Teri Yaki', 'Gà nướng sốt Teriyaki', '95.000đ', '20211214021751toriteriyaki.jpg'),
(8, 'Tonkatsu', 'Thăn lợn tẩm bột chiên', '85.000đ', '20211214021821tonkatsu.jpg'),
(9, 'Ebi Tempura', 'Tôm Tempura chiên', '145.000đ', '20211214021843EbiTempura.jpg'),
(10, 'Ika Furai', 'Mực tẩm bột chiên xù', '125.000đ', '20211214021908ikafurai.jpg'),
(11, 'Ebi Furai', 'Tôm tẩm bột chiên xù', '155.000đ', '20211214021931ebifurai.jpg'),
(12, 'Saisumaimo Tempura', 'Tempura khoai lang', '55.000đ', '20211214022146satsumaimotempura.jpg'),
(13, 'Gyoza', 'Há cảo', '95.000đ', '20211214022241Gyoza.jpg'),
(14, 'Shishamo Yaki', 'Cá trứng nướng', '165.000đ', '20211214022350shishamoyaki.jpg'),
(15, 'Sanma Shioyaki', 'Cá thu đao nướng muối', '115.000đ', '20211214022427sanmashioyaki.jpg'),
(16, 'Saba Shioyaki', 'Cá thu mỡ nướng muối', '115.000đ', '20211214022456sabashioyaki.jpg'),
(17, 'Unagi Kapayaki', 'Lươn Nhật nướng', '315.000đ', '20211214022528unagikabayaki.jpg'),
(18, 'Sake Kabuto Yaki', 'Đầu cá hồi nướng muối', '165.000đ', '20211214022557SAKEKABUTOYAKI.png'),
(19, 'Sake Shioyaki', 'Cá hồi nướng muối', '155.000đ', '20211214022644sakeshioyaki.jpg'),
(20, 'Sake Teriyaki', 'Cá hồi sốt Teriyaki', '165.000đ', '20211214022743saketeriyaki.jpg'),
(21, 'Gindara Shioyaki', 'Cá tuyết nướng muối', '295.000đ', '20211214022831gindarashioyaki.jpg'),
(22, 'Gindara Teriyak', 'Cá tuyết sốt Teriyaki', '299.000đ', '20211214022902gindarateriyaki.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id_taikhoan` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `tai_khoan` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id_taikhoan`, `ho_ten`, `tai_khoan`, `mat_khau`) VALUES
(2, 'Trần Hải Nam', 'Admin2', '123'),
(3, 'Lê Thanh Hòa', 'admin', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salad`
--

CREATE TABLE `salad` (
  `id_mon` int(11) NOT NULL,
  `ten_tieng_anh` varchar(50) NOT NULL,
  `ten_tieng_viet` varchar(50) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `salad`
--

INSERT INTO `salad` (`id_mon`, `ten_tieng_anh`, `ten_tieng_viet`, `gia`, `hinh_anh`) VALUES
(1, '', '', '', '20211213081326unknow.jpg'),
(53, 'Tobiko Salad', 'Salad trứng cá chuồn', '95.000đ', '20211213171855kaisousarada.jpg'),
(54, 'Potato Salad', 'Salad khoai tây', '65.000đ', '20211213171947potatosalad.jpg'),
(55, 'Maguro Salad', 'Salad cá ngừ', '95.000đ', '20211213172040magurosalad.jpg'),
(56, 'Tofu Salad', 'Salad đậu phụ', '75.000đ', '20211213172123tofusalad.jpg'),
(57, 'Avocado Salad', 'Salad quả bơ', '95.000đ', '20211213172216avocadosalad.jpg'),
(58, 'Hiyayako', 'Đậu phụ Nhật lạnh', '40.000đ', '20211213172437hiyayako.jpg'),
(59, 'Edamame', 'Đậu nành luộc', '35.000đ', '20211213172525edamame.jpg'),
(60, 'Kimchi', 'Kimchi Hàn Quốc', '40.000đ', '20211213172620kimchi.jpg'),
(61, 'Yaki Ginnan', 'Hạt bạch quả', '65.000đ', '20211213172841yakiginnan.jpg'),
(62, 'Kaiso Tobiko', 'Rong biển tươi', '75.000đ', '20211213172925kaisotobiko.jpg'),
(63, 'Horenso', 'Cải bó xôi luộc', '60.000đ', '20211213173134horenso.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sashimi`
--

CREATE TABLE `sashimi` (
  `id_mon` int(11) NOT NULL,
  `ten_tieng_anh` varchar(50) NOT NULL,
  `ten_tieng_viet` varchar(50) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sashimi`
--

INSERT INTO `sashimi` (`id_mon`, `ten_tieng_anh`, `ten_tieng_viet`, `gia`, `hinh_anh`) VALUES
(1, '', '', '', '20211213024805unknow.jpg'),
(34, 'Sake Sashimi', 'Sashimi cá hồi', '145.000đ', '20211213140835sakessm.jpg'),
(38, 'Maguro Sashimi', 'Sashimi cá ngừ', '145.000đ', '20211213141535magurossm.png'),
(39, 'Tako Sashimi', 'Sashimi bạch tuộc', '175.000đ', '20211213141605takossm.jpg'),
(40, 'Hokkigai Sashimi', 'Sashimi sò đỏ', '285.000đ', '20211213141658hokkigaissm.jpg'),
(41, 'Hotate Sashimi', 'Sashimi sò điệp', '185.000đ', '20211213141732hotatessm.jpg'),
(42, 'Shime Saba Sashimi', 'Sashimi cá Saba', '115.000đ', '20211213141821shimesabassm.jpg'),
(43, 'Ikura Sashimi', 'Sashimi trứng cá hồi', '315.000đ', '20211213141905ikurassm.jpg'),
(44, 'Kajiki Sashimi', 'Sashimi bụng cá kiếm', '215.000đ', '20211213141940kajikissm.jpg'),
(45, 'Uni Sashimi', 'Sashimi trứng cầu gai', '185.000đ', '20211213142009unissm.jpg'),
(46, 'Ama Ebi Sashimi', 'Sashimi tôm ngọt', '145.000đ', '20211213142045amaebissm.jpg'),
(47, 'Ika Sashimi', 'Sashimi mực tươi', '125.000đ', '20211213142128ikassm.jpg'),
(48, 'Mentaiko Sashimi', 'Sashimi trứng cá tuyết', '185.000đ', '20211213142208mentaikossm.jpg'),
(49, 'Sake Toro Sashimi', 'Sashimi bụng cá hồi', '145.000đ', '20211213142243saketorossm.jpg'),
(50, 'Maguro Harami Sashimi', 'Sashimi bụng cá ngừ', '175.000đ', '20211213142342maguroharamissm.jpg'),
(51, 'Nishin Wasabi', 'Sashimi cá trích mù tạt', '185.000đ', '20211213142424nishinssm.jpg'),
(52, 'Komochi Nishin', 'Sashimi cá trích', '165.000đ', '20211213142550komochissm.jpg'),
(53, 'Sanshu Sashimi', 'Sashimi tổng hợp 3 loại', '225.000đ', '20211213142630sanshussm.jpg'),
(54, 'Yonshu Sashimi', 'Sashimi tổng hợp 4 loại', '325.000đ', '20211213142711yonshussm.jpg'),
(55, 'Goshu Sashimi', 'Sashimi tổng hợp 5 loại', '415.000đ', '20211213142744goshussm.jpg'),
(56, 'Sashimi Moriawase', 'Sashimi tổng hợp 7 loại', '625.000đ', '20211213142831moriawasessm.jpg'),
(57, 'Unagi Sushi', 'Sushi lươn Nhật', '145.000đ', '20211213143338unagisushi.jpg'),
(58, 'Sake Sushi', 'Sushi cá hồi', '45.000đ', '20211213143417sakesushi.jpg'),
(59, 'Sake Mayo Sushi', 'Sushi cá hồi nướng Mayo', '48.000đ', '20211213143621sakemayosushi.jpg'),
(60, 'Maguro Sushi', 'Sushi cá ngừ', '45.000đ', '20211213143720magurosushi.jpg'),
(61, 'Tako Sushi', 'Sushi bạch tuộc', '55.000đ', '20211213143818takoshusi.jpg'),
(62, 'Hotate Sushi', 'Sushi sò điệp', '75.000đ', '20211213143924hotatesushi.jpg'),
(63, 'Inari Sushi', 'Sushi đậu ngọt', '65.000đ', '20211213144020inarisushi.jpg'),
(64, 'Ebi Sushi', 'Sushi tôm sú', '48.000đ', '20211213144110ebisushi.jpg'),
(65, 'Shime Saba Sushi', 'Sushi cá Saba', '45.000đ', '20211213144206shimesabasushi.jpg'),
(66, 'Kanikama Sushi', 'Sushi thanh cua', '40.000đ', '20211213144251kanikamasushi.jpg'),
(67, 'Ika Sushi', 'Sushi mực tươi', '45.000đ', '20211213151224ikasushi.jpg'),
(68, 'Ebi Tempura Sushi', 'Sushi tôm chiên', '65.000đ', '20211213151319ebitempurasushi.jpg'),
(69, 'Abogado Sushi', 'Sushi quả bơ', '35.000đ', '20211213154719abogadosushi.jpg'),
(70, 'Tamago Sushi', 'Sushi trứng', '35.000đ', '20211213162945tamagosushi.jpg'),
(71, 'Hokkigai Sushi', 'Sushi sò đỏ', '65.000đ', '20211213163302hokkigaisushi.jpg'),
(73, 'Komochi Nishin Sushi', 'Sushi cá trích', '65.000đ', '20211213163816komochisushi.jpg'),
(74, 'Ikura Gunkan Sushi', 'Sushi trứng cá hồi', '125.000đ', '20211213170346ikuargunkan.jpg'),
(75, 'Tobiko Gunkan', 'Sushi trứng cá chuồn', '48.000đ', '20211213170445tobikogunkan.jpg'),
(76, 'Ebi Gunkan', 'Sushi tôm sú sốt Mayo', '48.000đ', '20211213170555ebigunkan.jpg'),
(77, 'Mentaiko Gunkan', 'Sushi trứng cá tuyết', '85.000đ', '20211213170653mentaikogunkan.jpg'),
(78, 'Maguro Avocado Gunkan', 'Sushi cá ngừ quả bơ', '48.000đ', '20211213170810maguroabokadogunkan.jpg'),
(79, 'Unagi Kappa Temaki', 'Sushi cuộn tay lươn Nhật', '85.000đ', '20211213171026unagikappatemaki.jpg'),
(80, 'Maguro Avocado Temaki', 'Sushi cuộn tay lươn cá ngừ', '55.000đ', '20211213171129maguroavocadotemaki.jpg'),
(81, 'Ikura Temaki', 'Sushi cuộn tay trứng cá hồi', '85.000đ', '20211213171242ikuratemaki.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`id_mon`);

--
-- Chỉ mục cho bảng `do_uong`
--
ALTER TABLE `do_uong`
  ADD PRIMARY KEY (`id_mon`);

--
-- Chỉ mục cho bảng `lau_my`
--
ALTER TABLE `lau_my`
  ADD PRIMARY KEY (`id_mon`);

--
-- Chỉ mục cho bảng `mon_chien_nuong`
--
ALTER TABLE `mon_chien_nuong`
  ADD PRIMARY KEY (`id_mon`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Chỉ mục cho bảng `salad`
--
ALTER TABLE `salad`
  ADD PRIMARY KEY (`id_mon`);

--
-- Chỉ mục cho bảng `sashimi`
--
ALTER TABLE `sashimi`
  ADD PRIMARY KEY (`id_mon`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `com`
--
ALTER TABLE `com`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `do_uong`
--
ALTER TABLE `do_uong`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lau_my`
--
ALTER TABLE `lau_my`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `mon_chien_nuong`
--
ALTER TABLE `mon_chien_nuong`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `salad`
--
ALTER TABLE `salad`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `sashimi`
--
ALTER TABLE `sashimi`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

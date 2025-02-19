-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2025 at 04:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j2school_wcb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `ma` int(11) NOT NULL,
  `tieu_de` varchar(200) NOT NULL,
  `noi_dung` text NOT NULL,
  `anh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`ma`, `tieu_de`, `noi_dung`, `anh`) VALUES
(1, 'waifu 1', 'xinh vãi chưởng', 'https://s4.anilist.co/file/anilistcdn/character/large/b125600-IeguEoI3TgQC.png'),
(2, 'xin chào', 'ahihi đồ ngốc', 'https://i.pinimg.com/736x/92/03/53/9203530515647b8ac423e616fa9f10d8.jpg'),
(3, 'u cà', 'Hôm nay 18/2, các nhà ngoại giao hàng đầu của Nga và Mỹ đang hội đàm tại Riyadh, Ả rập Xê út để tìm cách khôi phục quan hệ ngoại giao, chuẩn bị cho hội nghị thượng đỉnh giữa Tổng thống Nga Vladimir Putin và người đồng cấp Mỹ Donald Trump, đồng thời mở đường cho việc giải quyết xung đột Ukraine.\r\n\r\nPhái đoàn Nga do Ngoại trưởng Sergey Lavrov dẫn đầu. Ngoài ra, các quan chức của phái đoàn Nga còn bao gồm Yury Ushakov, trợ lý chính sách đối ngoại hàng đầu của Tổng thống Putin, và Kirill Dmitriev, Tổng giám đốc điều hành của Quỹ đầu tư trực tiếp Nga (RDIF).\r\n\r\nPhái đoàn Mỹ gồm Ngoại trưởng Marco Rubio, Cố vấn an ninh quốc gia của Tổng thống Trump, Mike Waltz, và Steve Witkoff, đặc phái viên về Trung Đông.\r\n\r\nCả Ukraine và EU đều không có đại diện tham dự hội đàm.\r\n\r\nÔng Kirill Dmitriev, người đứng đầu quỹ đầu tư quốc gia của Nga, đã chia sẻ trước cuộc hội đàm rằng \"việc xây dựng cầu nối đóng vai trò rất quan trọng đối với Mỹ và Nga\".\r\n\r\n\"Mối quan hệ Mỹ - Nga rất quan trọng đối với thế giới\", ông Dmitriev nói, đồng thời nhấn mạnh nhu cầu hợp tác.', 'https://cdnphoto.dantri.com.vn/aaCgydlloTGeOtZaejVRlHYjCjU=/thumb_w/1360/2025/02/18/lavrovngoaitruongnga-1739861422467.jpg'),
(5, 'tsundere 1', 'xinh vãi', 'https://static.deltiasgaming.com/2025/02/Noelle-Silva-3.jpg'),
(6, 'tsun đời đầu', 'nisekoi', 'https://i.pinimg.com/736x/74/22/e2/7422e2345f597e0f540e4b5303963f17.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`ma`),
  ADD UNIQUE KEY `tieu_de` (`tieu_de`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

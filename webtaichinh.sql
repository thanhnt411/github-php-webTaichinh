-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2025 at 06:21 AM
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
-- Database: `webtaichinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `title`) VALUES
(1, 'assets/img/About-box-item1.png', 'Đưa ra những giải pháp hiệu quả và thiết thực'),
(2, 'assets/img/About-box-item2.png', 'Tư vấn tài chính dựa trên mục tiêu của doanh nghiệp'),
(3, 'assets/img/About-box-item3.png', 'Đa dạng loại hình dịch vụ và sản phẩm');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `avatar`, `name`, `position`, `content`, `status`) VALUES
(1, 'assets/img/feedback-avatar-first.png', 'Monty Moni', 'CEO, Soda IT Solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel tincidunt fames lacus, amet, lobortis amet. Integer pulvinar pellentesque suspendisse adipiscing nulla arcu orci nisi, facilisi. Augue diam arcu eleifend ac velit,integer sociis sit amet. Libero bibendum at lorem eros,risus cursus magna egestas.', 1),
(2, 'assets/img/feedback-avatar-second.png', 'Alexander Grey', 'CEO, Soda IT Solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel tincidunt fames lacus, amet, lobortis amet. Integer pulvinar pellentesque suspendisse adipiscing nulla arcu orci nisi, facilisi.', 1),
(3, 'assets/img/feedback-avatar-third.png', 'Monty Moni', 'CEO, Soda IT Solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel tincidunt fames lacus, amet, lobortis amet. Integer pulvinar pellentesque suspendisse adipiscing nulla arcu orci nisi, facilisi. Augue diam arcu eleifend ac velit, integer sociis sit amet.', 1),
(4, 'assets/img/feedback-avatar-first.png', 'Monty Moni', 'CEO, Soda IT Solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel tincidunt fames lacus, amet, lobortis amet. Integer pulvinar pellentesque suspendisse adipiscing nulla arcu orci nisi, facilisi. Augue diam arcu eleifend ac velit,integer sociis sit amet. Libero bibendum at lorem eros,risus cursus magna egestas.', 1),
(5, 'assets/img/feedback-avatar-second.png', 'Alexander Grey', 'CEO, Soda IT Solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel tincidunt fames lacus, amet, lobortis amet. Integer pulvinar pellentesque suspendisse adipiscing nulla arcu orci nisi, facilisi.', 1),
(6, 'assets/img/feedback-avatar-third.png', 'Monty Moni', 'CEO, Soda IT Solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel tincidunt fames lacus, amet, lobortis amet. Integer pulvinar pellentesque suspendisse adipiscing nulla arcu orci nisi, facilisi. Augue diam arcu eleifend ac velit,integer sociis sit amet. Libero bibendum at lorem eros,risus cursus magna egestas.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `introduce`
--

CREATE TABLE `introduce` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `sub_heading` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `introduce`
--

INSERT INTO `introduce` (`id`, `title`, `heading`, `sub_heading`, `content`, `image`, `video`, `video_title`) VALUES
(1, 'Về chúng tôi', ' Công ty Tư vấn quản lý tài Chính SAB', 'Kết sức mạnh, nối thành công', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Volutpat in dignissim lorem id ut ac magna eget lectus.Nunc, metus nunc fringilla viverra risus commodo blandit viverra vel. Euismod risus, ipsum ac aliquam habitant sagittis fermentum massa.', 'assets/img/about-video-background.png', 'assets/video/6858386181962.mp4', 'THE SKY\'S THE LIMIT');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `excerpt`, `content`, `image`, `author`, `published_at`, `status`) VALUES
(1, 'Công văn số 2532/TCT-DNNCN ngày 12/07/2021 của Tổng cục Thuế về...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Egestas id ultricies eu velit. Tincidunt purus odio enim,tempor. Risus molestie lectus massa...', 'assets/img/feature-box-left.png', 'assets/img/feature-box-left.png', NULL, 1),
(2, 'Công văn số 2532/TCT-DNNCN ngày 12/07/2021 của Tổng...', '', 'assets/img/feature-box-right-1.png', '/assets/img/featured-date.png', NULL, 1),
(3, 'Công văn số 2532/TCT-DNNCN ngày 12/07/2021 của Tổng...', '', 'assets/img/feature-box-right-2.png', '/assets/img/featured-date.png', NULL, 1),
(4, 'Công văn số 2532/TCT-DNNCN ngày 12/07/2021 của Tổng...', '', 'assets/img/feature-box-right-3.png', '/assets/img/featured-date.png', NULL, 1),
(5, 'Công văn số 2532/TCT-DNNCN ngày 12/07/2021 của Tổng...', '', 'assets/img/feature-box-right-4.png', '/assets/img/featured-date.png', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `img`) VALUES
(1, 'assets/img/partners-logo-1.png'),
(2, 'assets/img/partners-logo-2.png'),
(3, 'assets/img/partners-logo-3.png'),
(4, 'assets/img/partners-logo-4.png'),
(5, 'assets/img/partners-logo-5.png'),
(6, 'assets/img/partners-logo-6.png'),
(7, 'assets/img/partners-logo-1.png'),
(8, 'assets/img/partners-logo-2.png'),
(9, 'assets/img/partners-logo-3.png'),
(10, 'assets/img/partners-logo-1.png'),
(11, 'assets/img/partners-logo-2.png'),
(12, 'assets/img/partners-logo-3.png'),
(13, 'assets/img/partners-logo-4.png'),
(14, 'assets/img/partners-logo-5.png'),
(15, 'assets/img/partners-logo-6.png'),
(16, 'assets/img/partners-logo-1.png'),
(17, 'assets/img/partners-logo-2.png'),
(18, 'assets/img/partners-logo-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sort_descript` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sort_descript`, `img`, `content`) VALUES
(1, 'Hóa đơn điện tử', 'assets/img/product-background-top.png', 'Là một hình thức lập hóa đơn điện tử. Phương pháp lập hóa đơn điện tử được các đối tác thương mại, chẳng hạn như khách hàng và nhà cung cấp của họ, sử dụng để xuất trình và giám sát các tài liệu...'),
(2, 'Chữ ký điện tử', 'assets/img/product-background-bottom.png', 'Là một chữ ký điện tử. Mục đích để kê khai nộp thuế trực tuyến, kê khai hải quan điện tử, giao dịch ngân hàng điện tử, giao dịch chứng khoán điện tử, cổng thông tin một cửa quốc gia, cơ quan hành chính…');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `short_description`, `content`, `sort_order`, `status`) VALUES
(1, 'assets/img/service-img-1.png', 'KẾ TOÁN - THUẾ', 'Thông tin kế toán rất cần thiết cho nhà quản trị để quản lý tình hình tài chính và đưa ra các quyết định kinh doanh. Để đạt được mục đích này và tiết kiệm chi phí cho Doanh nghiệp, SAB cung cấp DỊCH VỤ KẾ TOÁN với đội ngũ gồm các Kiểm toán viên công chứng (ACCA, CPA), Kế toán trưởng ...', 0, 1),
(2, 'assets/img/service-img-2.png', 'KIỂM SOÁT NỘI BỘ', 'Thông tin kế toán rất cần thiết cho nhà quản trị để quản lý tình hình tài chính và đưa ra các quyết định kinh doanh. Để đạt được mục đích này và tiết kiệm chi phí cho Doanh nghiệp, SAB cung cấp DỊCH VỤ KẾ TOÁN với đội ngũ gồm các Kiểm toán viên công chứng (ACCA, CPA), Kế toán trưởng ...', 0, 1),
(3, 'assets/img/service-img-3.png', 'TƯ VẤN QUẢN LÝ DOANH NGHIỆP', 'Thông tin kế toán rất cần thiết cho nhà quản trị để quản lý tình hình tài chính và đưa ra các quyết định kinh doanh. Để đạt được mục đích này và tiết kiệm chi phí cho Doanh nghiệp, SAB cung cấp DỊCH VỤ KẾ TOÁN với đội ngũ gồm các Kiểm toán viên công chứng (ACCA, CPA), Kế toán trưởng ...', 0, 1),
(4, 'assets/img/service-img-4.png', 'TƯ VẤN LUẬT', 'Thông tin kế toán rất cần thiết cho nhà quản trị để quản lý tình hình tài chính và đưa ra các quyết định kinh doanh. Để đạt được mục đích này và tiết kiệm chi phí cho Doanh nghiệp, SAB cung cấp DỊCH VỤ KẾ TOÁN với đội ngũ gồm các Kiểm toán viên công chứng (ACCA, CPA), Kế toán trưởng ...', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `zalo_link` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `sort_order`, `status`) VALUES
(1, 'Chuyên gia tư vấn các dịch vụ về kế toán, thuế', 'Nec sit non quam ut velit congue tincidunt. Enim orci sem euismod turpis tortor vel, adipiscing in purus.', 'assets/img/business-background-first.png', 0, 1),
(2, 'Chuyên gia tư vấn các dịch vụ về kế toán, thuế', 'Nec sit non quam ut velit congue tincidunt. Enim orci sem euismod turpis tortor vel, adipiscing in purus.', 'assets/img/business-background-second.png', 0, 1),
(3, 'Kết sức mạnh, nối thành công', 'Nec sit non quam ut velit congue tincidunt. Enim orci sem euismod turpis tortor vel, adipiscing in purus.Scelerisque sit mi eget sodales proin mi pellentesque eu.', 'assets/img/business-background-third.png', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `title`, `value`, `sort_order`) VALUES
(1, '250', 'Dự án thành công', 0),
(2, '999+', 'Khách hàng, đối tác', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(11) NOT NULL,
  `training_course` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `descripiton` text DEFAULT NULL,
  `tuition_fee` varchar(255) DEFAULT NULL,
  `study_mode` varchar(50) DEFAULT NULL,
  `class_schedule` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `training_course`, `img`, `descripiton`, `tuition_fee`, `study_mode`, `class_schedule`) VALUES
(1, 'Kế toán thực hành Excel', 'assets/img/training-background.png', 'Kế toán SAB đào tạo bài bản và chuyên nghiệp, đảm bảo sự thành thạo trong nghiệp vụ kế toán cho các nhân viên cung cấp cho đơn vị Khách hàng', '2.699.000đ', 'Online và Offline', '19h00 tối 2, 4, 6 hằng tuần'),
(2, ' Kế toán chuyên sâu', 'assets/img/training-background.png', 'Kế toán SAB đào tạo bài bản và chuyên nghiệp, đảm bảo sự thành thạo trong nghiệp vụ kế toán cho các nhân viên cung cấp cho đơn vị Khách hàng', '2.699.000đ', 'Online và Offline', '19h00 tối 2, 4, 6 hằng tuần'),
(3, 'Kế toán tổng hợp', 'assets/img/training-background.png', 'Kế toán SAB đào tạo bài bản và chuyên nghiệp, đảm bảo sự thành thạo trong nghiệp vụ kế toán cho các nhân viên cung cấp cho đơn vị Khách hàng', '2.699.000đ', 'Online và Offline', '19h00 tối 2, 4, 6 hằng tuần'),
(4, 'Kiểm toán NB/KSNB', 'assets/img/training-background.png', 'Kế toán SAB đào tạo bài bản và chuyên nghiệp, đảm bảo sự thành thạo trong nghiệp vụ kế toán cho các nhân viên cung cấp cho đơn vị Khách hàng', '2.699.000đ', 'Online và Offline', '19h00 tối 2, 4, 6 hằng tuần'),
(5, ' Kế toán thực hành Excel', 'assets/img/training-background.png', 'Kế toán SAB đào tạo bài bản và chuyên nghiệp, đảm bảo sự thành thạo trong nghiệp vụ kế toán cho các nhân viên cung cấp cho đơn vị Khách hàng', '2.699.000đ', 'Online và Offline', '19h00 tối 2, 4, 6 hằng tuần');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `adminName`, `pwd`, `created_at`) VALUES
(1, 'thanhtien', 'thanh123', '2025-09-05 11:04:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `introduce`
--
ALTER TABLE `introduce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

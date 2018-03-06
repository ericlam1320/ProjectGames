-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2018 at 02:10 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `minimum` text NOT NULL,
  `recommended` text NOT NULL,
  `guide` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `genre_id` (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `genre_id`, `title`, `url`, `description`, `content`, `minimum`, `recommended`, `guide`, `image`, `trailer`, `year`, `update_at`) VALUES
(1, 2, 'Call of duty 5', 'call-of-duty-5', '<p>Sau th&agrave;nh c&ocirc;ng qu&aacute; lớn của phi&ecirc;n bản Modern Warfare đầu ti&ecirc;n cũng như sự thắng thế của bối cảnh chiến tranh hiện đại, kh&ocirc;ng ai nghĩ chiến tranh thế giới thứ 2 sẽ l&agrave; yếu tố tạo n&ecirc;n th&agrave;nh c&ocirc;ng cho Call Of Duty: World At War nữa.</p>', '<p>Sau th&agrave;nh c&ocirc;ng qu&aacute; lớn của phi&ecirc;n bản Modern Warfare đầu ti&ecirc;n cũng như sự thắng thế của bối cảnh chiến tranh hiện đại, kh&ocirc;ng ai nghĩ chiến tranh thế giới thứ 2 sẽ l&agrave; yếu tố tạo n&ecirc;n th&agrave;nh c&ocirc;ng cho Call Of Duty: World At War nữa. Tuy nhi&ecirc;n Treyarch đ&atilde; chứng minh rằng m&igrave;nh ho&agrave;n to&agrave;n c&oacute; thể l&agrave;m c&oacute; thể l&agrave;m được những việc tưởng chứng như kh&ocirc;ng thể. D&ugrave; kh&ocirc;ng sở hữu một cốt truyện hấp dẫn như Modern Warfare nhưng World At War cũng trang bị cho m&igrave;nh một d&agrave;n diễn vi&ecirc;n lồng tiếng gồm to&agrave;n những t&ecirc;n tuổi lớn như Kiefer Sutherland v&agrave; Gary Oldman, bối cảnh chiến tranh được chuyển dịch về khu vực Th&aacute;i B&igrave;nh Dương đầy lạ lẫm v&agrave; nhiều bất ngờ cộng với việc đẩy mạnh yếu tố h&agrave;nh động bạo lực l&ecirc;n cao chưa từng thấy trong Call Of Duty. Top 10 tựa game Call of Duty World At War vẫn tạo dựng được một chỗ đứng nhất định trong l&ograve;ng người h&acirc;m mộ, đồng thời khẳng định cho khả năng của h&atilde;ng Treyarch. Nhưng đ&oacute; chưa phải l&agrave; tất cả v&igrave; chế độ chơi mạng mới l&agrave; linh hồn thực sự của tựa game n&agrave;y. Game lần đầu ti&ecirc;n giới thiệu đến người chơi chế độ chơi Zombie v&ocirc; c&ugrave;ng hấp dẫn m&agrave; sau n&agrave;y đ&atilde; được Treyarch &aacute;p dụng th&agrave;nh c&ocirc;ng v&agrave;o c&aacute;c phi&ecirc;n bản Call Of Duty tiếp theo của m&igrave;nh. V&agrave; đ&oacute; l&agrave; phần đầu ti&ecirc;n của bảng xếp hạng top 10 tựa game Call of Duty của ch&uacute;ng t&ocirc;i. N&oacute;i đến đ&acirc;y chắc hẳn nhiều bạn đ&atilde; c&oacute; những suy đo&aacute;n tiếp theo của m&igrave;nh. Vậy theo bạn tựa game Call of Duty sẽ d&agrave;ng được ng&ocirc;i vị qu&aacute;n qu&acirc;n trong bảng xếp hạng n&agrave;y? H&atilde;y cho ch&uacute;ng t&ocirc;i biết những nhận định của bạn trong phần comment b&ecirc;n dưới v&agrave; nhớ tiếp tục theo d&otilde;i phần thứ hai &ndash; cũng l&agrave; phần cuối của bảng xếp hạng n&agrave;y tr&ecirc;n chuy&ecirc;n mục Pc-console của Game4V v&agrave;o ng&agrave;y mai, khi tựa game Call of Duty: Advanced Warfare ch&iacute;nh thức được ra mắt.</p>', 'CPU: Intel Core i3 3225 3.3 GHz or AMD Ryzen 5 1400\r\nCPU SPEED: Info\r\nRAM: 8 GB\r\nOS: Windows 7 64-Bit or later\r\nVIDEO CARD: Nvidia GeForce GTX 660 @ 2 GB / GTX 1050 or ATI Radeon HD 7850 @ 2GB / AMD RX 550\r\nSOUND CARD: Yes\r\nFREE DISK SPACE: 90 GB', 'CPU: Intel Core i3 3225 3.3 GHz or AMD Ryzen 5 1400\r\nCPU SPEED: Info\r\nRAM: 8 GB\r\nOS: Windows 7 64-Bit or later\r\nVIDEO CARD: Nvidia GeForce GTX 660 @ 2 GB / GTX 1050 or ATI Radeon HD 7850 @ 2GB / AMD RX 550\r\nSOUND CARD: Yes\r\nFREE DISK SPACE: 90 GB', 'Cài đặt và chơi', 'call_of_duty.png', 'https://www.youtube.com/watch?v=hpo6L8WRuF4', 2017, '2018-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `game_comments`
--

DROP TABLE IF EXISTS `game_comments`;
CREATE TABLE IF NOT EXISTS `game_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_comments`
--

INSERT INTO `game_comments` (`id`, `game_id`, `name`, `email`, `content`, `update_at`) VALUES
(1, 1, 'Hương', 'Huong@gmail.com', 'Tựa game này rất hay.', '2018-03-01'),
(3, 1, 'Hoa', 'SaoMi@gmail.com', 'Masterpiece!', '2018-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `game_genres`
--

DROP TABLE IF EXISTS `game_genres`;
CREATE TABLE IF NOT EXISTS `game_genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_genres`
--

INSERT INTO `game_genres` (`id`, `name`, `url`, `note`) VALUES
(1, 'Phiêu lưu', 'phieu-luu', ''),
(2, 'Bắn súng', 'ban-sung', '');

-- --------------------------------------------------------

--
-- Table structure for table `game_pictures`
--

DROP TABLE IF EXISTS `game_pictures`;
CREATE TABLE IF NOT EXISTS `game_pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_pictures`
--

INSERT INTO `game_pictures` (`id`, `game_id`, `image`, `note`) VALUES
(3, 1, '1519913736principal-cod-wwii.jpg', 'Không'),
(4, 1, '1519913736sh-overview.jpg', 'Không'),
(8, 1, '1519916348CoD-WWII.png', 'Không');

-- --------------------------------------------------------

--
-- Table structure for table `link_download`
--

DROP TABLE IF EXISTS `link_download`;
CREATE TABLE IF NOT EXISTS `link_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link_download`
--

INSERT INTO `link_download` (`id`, `game_id`, `link`, `note`, `status`) VALUES
(1, 1, 'https://www.fshare.vn', 'Fshare', 'Còn Sống'),
(2, 1, 'www.megalink.vn', 'Mega', 'Còn Sống');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `view` int(11) NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `url`, `description`, `content`, `image`, `view`, `update_at`) VALUES
(2, 'The Blackout Club - Game kinh dị bắt bạn sinh tồn trong thị trấn ma quỷ hứa hẹn sẽ là bom tấn trong năm 2019', 'the-blackout-club---game-kinh-di-bat-ban-sinh-ton-trong-thi-tran-ma-quy-hua-hen-se-la-bom-tan-trong-nam-2019', '<h2>The Blackout Club l&agrave; một tựa game nhập vai h&agrave;nh động kinh dị với khả năng cho ph&eacute;p 4 game thủ c&ugrave;ng thưởng thức trong chế độ Coop</h2>', '<p>Trong The Blackout Club, nh&acirc;n vật ch&iacute;nh l&agrave; v&agrave;i đứa trẻ tuổi teen bất ngờ thức dậy ở một thị trấn kỳ dị, người lấm lem b&ugrave;n đất v&agrave; chẳng nhớ v&igrave; sao m&igrave;nh lại lưu lạc được đến tận đ&acirc;y. Ph&iacute;a dưới l&ograve;ng đất, một con qu&aacute;i vật kinh khủng đang ẩn m&igrave;nh chờ cơ hội tấn c&ocirc;ng, c&ograve;n đ&aacute;m trẻ th&igrave; phải đi t&igrave;m một người bạn bị mất t&iacute;ch tại đ&acirc;y. V&agrave; rồi trong qu&aacute; tr&igrave;nh ho&agrave;n th&agrave;nh nhiệm vụ m&agrave; game đưa ra, người chơi phải tự m&igrave;nh kh&aacute;m ph&aacute; những đường hầm d&agrave;i v&ocirc; tận b&ecirc;n dưới thị trấn to&agrave;n qu&aacute;i vật n&agrave;y, v&agrave; c&ugrave;ng l&uacute;c kh&aacute;m ph&aacute; ra những &acirc;m mưu li&ecirc;n quan tới ch&iacute;nh những người lớn ch&uacute;ng ch&agrave;o hỏi v&agrave; tr&ograve; chuyện h&agrave;ng ng&agrave;y ở nh&agrave;.</p>\r\n\r\n<p><img alt=\"The Blackout Club - Game kinh dị bắt bạn sinh tồn trong thị trấn ma quỷ hứa hẹn sẽ là bom tấn trong năm 2019\" id=\"img_a834d610-1df8-11e8-829c-91192b3366eb\" src=\"https://genknews.genkcdn.vn/thumb_w/640/2018/3/2/eaep9tqfuleik8q7e3fnlm-650-80-15199814456671934710741.png\" /></p>\r\n\r\n<p>Đ&acirc;y l&agrave; một tựa game nhập vai h&agrave;nh động với khả năng cho ph&eacute;p 4 game thủ c&ugrave;ng thưởng thức trong chế độ Coop. V&agrave; kh&ocirc;ng chỉ n&eacute; tr&aacute;nh hoặc chiến đấu với những con qu&aacute;i vật, bạn c&ograve;n phải ghi lại những điều kinh ho&agrave;ng đang xảy ra ở đ&acirc;y, vốn sở hữu một cốt truyện với từng nhiệm vụ phơi b&agrave;y một c&aacute;ch v&ocirc; c&ugrave;ng ấn tượng, khiến bạn lu&ocirc;n ở trong trạng th&aacute;i hoang mang, kh&ocirc;ng biết c&oacute; n&ecirc;n dấn th&acirc;n tiếp hay kh&ocirc;ng.</p>\r\n\r\n<p><img alt=\"The Blackout Club - Game kinh dị bắt bạn sinh tồn trong thị trấn ma quỷ hứa hẹn sẽ là bom tấn trong năm 2019\" id=\"img_a8441850-1df8-11e8-829c-91192b3366eb\" src=\"https://genknews.genkcdn.vn/thumb_w/640/2018/3/2/whihx3fxywwcbucr9dd7nb-650-80-15199814456682131752794.png\" /></p>\r\n\r\n<p>Chế độ chơi đơn l&agrave; thứ giới thiệu người chơi đến với cốt truyện kinh ho&agrave;ng m&agrave; những nh&agrave; l&agrave;m game từng đảm tr&aacute;ch Bioshock huyền thoại tạo ra, với những nh&aacute;nh cốt truyện kh&ocirc;ng tuyến t&iacute;nh một ch&uacute;t n&agrave;o, cho ph&eacute;p người chơi tự kể lại cuộc h&agrave;nh tr&igrave;nh kinh dị của m&igrave;nh trong The Blackout Club kh&ocirc;ng giống với bất kỳ ai kh&aacute;c thưởng thức tựa game.</p>\r\n\r\n<p><img alt=\"The Blackout Club - Game kinh dị bắt bạn sinh tồn trong thị trấn ma quỷ hứa hẹn sẽ là bom tấn trong năm 2019\" id=\"img_a857c760-1df8-11e8-829c-91192b3366eb\" src=\"https://genknews.genkcdn.vn/thumb_w/640/2018/3/2/yyj25yoakehwb9fntxtexz-650-80-1519981445666220816305.png\" /></p>\r\n\r\n<p>Bản th&acirc;n c&aacute;i t&ecirc;n của tựa game cũng h&eacute; lộ nhiều điều. The Blackout Club vừa l&agrave; t&ecirc;n của nh&oacute;m bạn trẻ trong game l&ecirc;n đường t&igrave;m người bạn &quot;h&agrave;ng x&oacute;m&quot;, nhưng cũng m&ocirc; tả bản chất của thị trấn ma &aacute;m kia: Kh&ocirc;ng s&oacute;ng điện thoại, kh&ocirc;ng c&oacute; internet, kh&ocirc;ng c&oacute; bất cứ thứ g&igrave; kết nối với thế giới b&ecirc;n ngo&agrave;i, v&igrave; thế việc tiết lộ những b&iacute; mật động trời b&ecirc;n trong xứ sở n&agrave;y kh&ocirc;ng dễ như việc giơ điện thoại l&ecirc;n livestream tr&ecirc;n YouTube.</p>\r\n\r\n<p><img alt=\"The Blackout Club - Game kinh dị bắt bạn sinh tồn trong thị trấn ma quỷ hứa hẹn sẽ là bom tấn trong năm 2019\" id=\"img_a81f7950-1df8-11e8-829c-91192b3366eb\" src=\"https://genknews.genkcdn.vn/thumb_w/640/2018/3/2/4tr2hwfmmwt7lvfnt8mmbj-650-80-15199814456671672397351.png\" /></p>\r\n\r\n<p>N&oacute;i đến qu&aacute;i vật, The Blackout Club c&oacute; lẽ sẽ kh&ocirc;ng thể c&aacute;c fan của d&ograve;ng game kinh dị phải thất vọng một ch&uacute;t n&agrave;o cả. Từ những con qu&aacute;i t&ecirc;n l&agrave; Lucid, cho đến những kẻ &quot;mộng du&quot; Sleepwalkers. Đ&aacute;ng sợ hơn cả, những con qu&aacute;i vật n&agrave;y đều l&agrave; những người lớn từng rất th&acirc;n quen với nh&oacute;m nh&acirc;n vật ch&iacute;nh. Họ c&oacute; thể l&agrave; thầy gi&aacute;o, cha mẹ hay những người bạn của gia đ&igrave;nh đ&aacute;m nhỏ, bị nhập v&agrave; h&agrave;nh xử kh&ocirc;ng theo &yacute; muốn của m&igrave;nh.</p>\r\n\r\n<p>Kh&ocirc;ng phải cứ muốn hạ gục qu&aacute;i vật l&agrave; dễ d&agrave;ng, v&igrave; để hạ gục ch&uacute;ng, c&aacute;i gi&aacute; m&agrave; người chơi phải trả đ&ocirc;i l&uacute;c l&agrave; rất đắt. Ch&iacute;nh v&igrave; thế cơ chế gameplay h&agrave;nh động b&iacute; mật được l&ecirc;n ng&ocirc;i v&agrave; tạo ra trải nghiệm ho&agrave;n hảo nhất cho những người thưởng thức. Dự kiến, The Blackout Club sẽ ch&iacute;nh thức ra mắt v&agrave;o qu&yacute; 1 năm 2019 tới đ&acirc;y.</p>', '1520008519whihx3fxywwcbucr9dd7nb-650-80-15199814456682131752794.png', 0, '2018-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `birthdate`, `gender`, `address`, `email`, `phone`, `role`, `image`, `remember_token`) VALUES
(1, 'admin', '$2y$10$bfpFbWtk5MElXEuDPXPdB.9z/EgieJ66LKjQXNFnUqVQ6t6xAqc4a', 'Admin', '2018-03-03', 'Nữ', 'TP.HCM', 'admin@gmail.com', '0909985858', 'admin', '1520059614user4.png', 'ugvYWWaRKOuMYdZEJIBEkT1G2iIstsB8qjylWz49pA5sZ8EAG9PpiWk0eLmb'),
(2, 'khoa', '$2y$10$0ro1M.eyg1kq8EpJjWnJ6up/16V.8155CQG8Zz3Z2b45dyRvsG7YK', 'Vương Anh Khoa', '2018-03-03', 'Nam', 'Trần Hưng Đạo Quận 5', 'khoa@gmail.com', '09090909909', 'superadmin', '1520085803user3.png', '5I9S3QAV8JEISTujF2eKakyBbgZfe5sAw5UbZWONhOdBOQ3SGSbMsNsJsUBR');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `game_genres` (`id`);

--
-- Constraints for table `game_comments`
--
ALTER TABLE `game_comments`
  ADD CONSTRAINT `game_comments_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

--
-- Constraints for table `game_pictures`
--
ALTER TABLE `game_pictures`
  ADD CONSTRAINT `game_pictures_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

--
-- Constraints for table `link_download`
--
ALTER TABLE `link_download`
  ADD CONSTRAINT `link_download_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

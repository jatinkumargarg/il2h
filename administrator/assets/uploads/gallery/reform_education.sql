-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2019 at 01:41 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reform_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `uploaded_by` int(11) NOT NULL,
  `upload_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `image_name`, `uploaded_by`, `upload_time`) VALUES
(1, 'bullet___Copy.png', 1, '2019-11-01 18:27:40'),
(2, 'bullet.png', 1, '2019-11-01 18:27:40'),
(3, 'graphic___Copy.png', 1, '2019-11-01 18:27:40'),
(4, 'paperclip1.png', 1, '2019-11-01 18:27:40'),
(5, 'pattern1.png', 1, '2019-11-01 18:27:40'),
(6, 'bullet___Copy1.png', 1, '2019-11-01 18:27:44'),
(7, 'bullet1.png', 1, '2019-11-01 18:27:44'),
(8, 'graphic___Copy1.png', 1, '2019-11-01 18:27:44'),
(9, 'paperclip2.png', 1, '2019-11-01 18:27:44'),
(10, 'pattern2.png', 1, '2019-11-01 18:27:44'),
(11, 'graphic.png', 1, '2019-11-02 10:19:29'),
(12, 'graphic___Copy2.png', 1, '2019-11-02 13:06:40'),
(13, 'bullet2.png', 1, '2019-11-02 13:06:40'),
(14, 'paperclip3.png', 1, '2019-11-02 13:06:40'),
(15, 'pattern3.png', 1, '2019-11-02 13:06:40'),
(16, 'bullet___Copy2.png', 1, '2019-11-02 13:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_type` enum('live_link','page') NOT NULL,
  `menu_link` text CHARACTER SET utf8 NOT NULL,
  `order_number` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 => enable, 2=> Disable',
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `menu_name`, `parent_id`, `menu_type`, `menu_link`, `order_number`, `status`, `created_time`) VALUES
(1, 'Homepage', 0, 'page', '7', 0, 1, '2019-11-02 17:58:25'),
(2, 'BLog', 1, 'page', '8', 0, 1, '2019-11-02 17:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `post_type` enum('blog','newsletter','static_page') NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_slug` varchar(255) DEFAULT NULL,
  `post_content` blob NOT NULL,
  `post_image` varchar(150) DEFAULT NULL,
  `post_status` tinyint(4) NOT NULL COMMENT '1= enable,2 = disable,3 = deleted',
  `created_by` int(11) NOT NULL,
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_comments` int(11) NOT NULL DEFAULT '0',
  `total_likes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `post_type`, `post_title`, `post_slug`, `post_content`, `post_image`, `post_status`, `created_by`, `created_time`, `modified_time`, `total_comments`, `total_likes`) VALUES
(1, 'static_page', 'This is page', 'rewrwerwrwe', 0x266c743b702667743b7277657265777277657277266c743b2f702667743b0d0a, NULL, 1, 1, '2019-11-01 12:49:47', '2019-11-01 12:49:47', 0, 0),
(2, 'static_page', 'This is page', 'rewrwerwrwe', 0x266c743b702667743b26616d703b6c743b7026616d703b67743b727765726577727765727726616d703b6c743b2f7026616d703b67743b266c743b2f702667743b0d0a, 'graphic4.png', 1, 1, '2019-11-01 12:50:43', '2019-11-01 12:50:43', 0, 0),
(3, 'static_page', '332', '1332131', 0x266c743b702667743b3233313331333231266c743b2f702667743b0d0a, NULL, 1, 1, '2019-11-01 13:05:03', '2019-11-01 13:05:03', 0, 0),
(4, 'static_page', '42342', '4234', 0x266c743b702667743b26616d703b6c743b7026616d703b67743b26616d703b6c743b7026616d703b67743b32333433323426616d703b6c743b2f7026616d703b67743b26616d703b6c743b2f7026616d703b67743b266c743b2f702667743b0d0a, NULL, 1, 1, '2019-11-01 13:07:31', '2019-11-01 08:43:06', 0, 0),
(5, 'blog', '12', '32131231', 0x266c743b702667743b333231266c743b2f702667743b0d0a, NULL, 1, 1, '2019-11-01 13:14:05', '2019-11-01 13:14:05', 0, 0),
(6, 'newsletter', 'ewqeq', 'eqwqe', 0x266c743b702667743b716571776571266c743b2f702667743b0d0a, NULL, 1, 1, '2019-11-01 13:24:54', '2019-11-01 13:24:54', 0, 0),
(7, 'static_page', 'Homepage', 'homepage 1 ', 0x266c743b702667743b72776572266c743b2f702667743b0d0a, NULL, 1, 1, '2019-11-02 17:54:10', '2019-11-02 17:54:10', 0, 0),
(8, 'static_page', 'Blog', 'blog', 0x266c743b702667743b777165266c743b2f702667743b0d0a, NULL, 1, 1, '2019-11-02 17:54:35', '2019-11-02 17:54:35', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) NOT NULL,
  `role` enum('Admin') DEFAULT NULL,
  `user_session` varchar(255) DEFAULT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime NOT NULL,
  `status` enum('enable','disable') NOT NULL DEFAULT 'enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `password`, `twitter_link`, `facebook_link`, `google_link`, `role`, `user_session`, `created_time`, `modified_time`, `status`) VALUES
(1, 'SakshemIt', 'happy.sharma@sakshemit.com', 'a467a25a0e6d74e0c9b53a0f5f88c65c', NULL, NULL, '', 'Admin', '', '2019-10-30 17:25:27', '0000-00-00 00:00:00', 'enable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2015 at 07:07 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslevel`
--

CREATE TABLE IF NOT EXISTS `accesslevel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accesslevel`
--

INSERT INTO `accesslevel` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'Operator'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `logintype`
--

CREATE TABLE IF NOT EXISTS `logintype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintype`
--

INSERT INTO `logintype` (`id`, `name`) VALUES
(1, 'Facebook'),
(2, 'Twitter'),
(3, 'Email'),
(4, 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `linktype` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `keyword`, `url`, `linktype`, `parent`, `isactive`, `order`, `icon`) VALUES
(1, 'Users', '', '', 'site/viewusers', 1, 0, 1, 1, 'icon-user'),
(2, 'Banner', '', '', 'site/viewbanner', 1, 0, 1, 2, 'icon-dashboard'),
(3, 'Articles', '', '', 'site/viewarticles', 1, 0, 1, 3, 'icon-dashboard'),
(4, 'Dashboard', '', '', 'site/index', 1, 0, 1, 0, 'icon-dashboard'),
(5, 'Modules', '', '', 'site/viewmodules', 1, 0, 1, 4, 'icon-dashboard'),
(6, 'Media', '', '', 'site/viewmedia', 1, 0, 1, 5, 'icon-dashboard'),
(7, 'Age Groups', '', '', 'site/viewagegroups', 1, 0, 1, 6, 'icon-dashboard'),
(8, 'Sports', '', '', 'site/viewsports', 1, 0, 1, 6, 'icon-dashboard'),
(9, 'Sports Gallery Item', '', '', 'site/createsportsgalleryselect', 1, 0, 1, 6, 'icon-dashboard'),
(10, 'School', '', '', 'site/viewschool', 1, 0, 1, 6, 'icon-dashboard'),
(11, 'Team Students', '', '', 'site/viewteamstudents', 1, 0, 1, 6, 'icon-dashboard'),
(12, 'Round', '', '', 'site/viewround', 1, 0, 1, 6, 'icon-dashboard'),
(13, 'Match', '', '', 'site/viewmatch', 1, 0, 1, 6, 'icon-dashboard'),
(14, 'Match Played', '', '', 'site/viewmatchplayed', 1, 0, 1, 6, 'icon-dashboard'),
(15, 'Medal', '', '', 'site/viewmedal', 1, 0, 1, 6, 'icon-dashboard'),
(16, 'Medal Won', '', '', 'site/viewmedalwon', 1, 0, 1, 6, 'icon-dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `menuaccess`
--

CREATE TABLE IF NOT EXISTS `menuaccess` (
  `menu` int(11) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuaccess`
--

INSERT INTO `menuaccess` (`menu`, `access`) VALUES
(1, 1),
(4, 1),
(2, 1),
(3, 1),
(5, 1),
(6, 1),
(7, 1),
(7, 3),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sfa_agegroups`
--

CREATE TABLE IF NOT EXISTS `sfa_agegroups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `json` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_articles`
--

CREATE TABLE IF NOT EXISTS `sfa_articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `json` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_articles`
--

INSERT INTO `sfa_articles` (`id`, `name`, `text`, `status`, `image`, `json`) VALUES
(1, 'ARti', 'asdjgk', 1, '', 'awadgg');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_banner`
--

CREATE TABLE IF NOT EXISTS `sfa_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_banner`
--

INSERT INTO `sfa_banner` (`id`, `name`, `status`) VALUES
(1, 'Sports banner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sfa_bannerslides`
--

CREATE TABLE IF NOT EXISTS `sfa_bannerslides` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_bannerslides`
--

INSERT INTO `sfa_bannerslides` (`id`, `order`, `icon`, `title`, `link`, `image`, `banner`) VALUES
(1, 1, '', 'Sport Banner Slide', 'http://ddsfdf.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sfa_match`
--

CREATE TABLE IF NOT EXISTS `sfa_match` (
  `id` int(11) NOT NULL,
  `sports` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `agegroup` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `resulttimestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `matchresult` text NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_matchplayed`
--

CREATE TABLE IF NOT EXISTS `sfa_matchplayed` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `match` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `reason` text NOT NULL,
  `round` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_medal`
--

CREATE TABLE IF NOT EXISTS `sfa_medal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_medalwon`
--

CREATE TABLE IF NOT EXISTS `sfa_medalwon` (
  `id` int(11) NOT NULL,
  `medal` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sports` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `agegroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_media`
--

CREATE TABLE IF NOT EXISTS `sfa_media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `json` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_media`
--

INSERT INTO `sfa_media` (`id`, `name`, `icon`, `status`, `order`, `json`) VALUES
(1, 'media', '', 1, 1, 'gh');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_mediaitem`
--

CREATE TABLE IF NOT EXISTS `sfa_mediaitem` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `json` varchar(255) NOT NULL,
  `media` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_mediaitem`
--

INSERT INTO `sfa_mediaitem` (`id`, `title`, `thumbnail`, `type`, `link`, `order`, `json`, `media`) VALUES
(1, 'media item', '1', 0, 'sd', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sfa_modules`
--

CREATE TABLE IF NOT EXISTS `sfa_modules` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `text` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_round`
--

CREATE TABLE IF NOT EXISTS `sfa_round` (
  `id` int(11) NOT NULL,
  `sports` int(11) NOT NULL,
  `sportcategory` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `agegroup` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `root` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_school`
--

CREATE TABLE IF NOT EXISTS `sfa_school` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `biography` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_school`
--

INSERT INTO `sfa_school` (`id`, `name`, `email`, `contact`, `image`, `address`, `location`, `biography`) VALUES
(1, 'Ryan', 'ryan@email.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_sports`
--

CREATE TABLE IF NOT EXISTS `sfa_sports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `eligibility` text NOT NULL,
  `rules` text NOT NULL,
  `json` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sports`
--

INSERT INTO `sfa_sports` (`id`, `name`, `status`, `order`, `icon`, `about`, `eligibility`, `rules`, `json`) VALUES
(1, 'Carrom', 1, 1, '', 'dsgh', 'dgh', 'd', '');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_sportscategory`
--

CREATE TABLE IF NOT EXISTS `sfa_sportscategory` (
  `id` int(11) NOT NULL,
  `sports` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `json` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sportscategory`
--

INSERT INTO `sfa_sportscategory` (`id`, `sports`, `title`, `order`, `status`, `type`, `json`) VALUES
(1, 1, 'Singles', 1, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_sportsgalleryitem`
--

CREATE TABLE IF NOT EXISTS `sfa_sportsgalleryitem` (
  `id` int(11) NOT NULL,
  `sports` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sportsgalleryitem`
--

INSERT INTO `sfa_sportsgalleryitem` (`id`, `sports`, `sportscategory`, `year`, `type`, `order`, `status`, `image`, `title`) VALUES
(1, 1, 1, '0', 1, 0, 1, 'download.jpg', ''),
(2, 1, 1, '1', 0, 0, 1, 'download1.jpg', ''),
(3, 1, 1, '2', 1, 0, 1, 'download2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_student`
--

CREATE TABLE IF NOT EXISTS `sfa_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `school` int(11) NOT NULL,
  `address` text NOT NULL,
  `content` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_student`
--

INSERT INTO `sfa_student` (`id`, `name`, `school`, `address`, `content`, `email`, `image`, `location`) VALUES
(1, 'AAkash', 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_team`
--

CREATE TABLE IF NOT EXISTS `sfa_team` (
  `id` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `agegroup` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_team`
--

INSERT INTO `sfa_team` (`id`, `sportscategory`, `agegroup`, `year`, `title`) VALUES
(1, 1, 0, 0, 'Foot Ball');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_teamstudents`
--

CREATE TABLE IF NOT EXISTS `sfa_teamstudents` (
  `id` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  `student` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_teamstudents`
--

INSERT INTO `sfa_teamstudents` (`id`, `team`, `student`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sfa_year`
--

CREATE TABLE IF NOT EXISTS `sfa_year` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_year`
--

INSERT INTO `sfa_year` (`id`, `name`, `status`, `order`) VALUES
(1, '2014', 1, 0),
(2, '2015', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'Enable'),
(2, 'Disable');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `accesslevel` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `socialid` varchar(255) NOT NULL,
  `logintype` int(11) NOT NULL,
  `json` text NOT NULL,
  `dob` date NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modificationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`, `dob`, `facebook`, `twitter`, `creationdate`, `modificationdate`) VALUES
(1, 'asdfgh', 'e99a18c428cb38d5f260853678922e03', 'dsa@jdfha.djf', 1, '2015-08-01 07:26:57', 1, '', '', '', 1, '', '0000-00-00', '', '', '2015-08-01 07:26:57', '2015-08-01 07:26:57'),
(4, 'pratik', '0cb2b62754dfd12b6ed0161d4b447df7', 'pratik@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, 'pratik', '1', 1, '', '0000-00-00', '', '', '2015-07-31 13:00:41', '2015-07-31 13:00:41'),
(5, 'wohlig123', 'wohlig123', 'wohlig1@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '2015-07-31 13:00:41', '2015-07-31 13:00:41'),
(6, 'wohlig1', 'a63526467438df9566c508027d9cb06b', 'wohlig2@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '2015-07-31 13:00:41', '2015-07-31 13:00:41'),
(7, 'Avinash', '7b0a80efe0d324e937bbfc7716fb15d3', 'avinash@wohlig.com', 1, '2014-10-17 06:22:29', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '2015-07-31 13:00:41', '2015-07-31 13:00:41'),
(8, 'wohlig', 'a63526467438df9566c508027d9cb06b', 'wohlig@wohlig.com', 1, '0000-00-00 00:00:00', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '2015-07-31 13:00:41', '2015-07-31 13:00:41'),
(9, 'avinash', 'a208e5837519309129fa466b0c68396b', 'a@email.com', 2, '2014-12-03 11:06:19', 3, '', '', '123', 1, 'demojson', '0000-00-00', '', '', '2015-07-31 13:00:41', '2015-07-31 13:00:41'),
(13, 'aaa', 'a208e5837519309129fa466b0c68396b', 'aaa3@email.com', 3, '2014-12-04 06:55:42', 3, NULL, '', '1', 2, 'userjson', '0000-00-00', '', '', '2015-07-31 13:00:41', '2015-07-31 13:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL,
  `onuser` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `onuser`, `status`, `description`, `timestamp`) VALUES
(1, 1, 1, 'User Address Edited', '2014-05-12 06:50:21'),
(2, 1, 1, 'User Details Edited', '2014-05-12 06:51:43'),
(3, 1, 1, 'User Details Edited', '2014-05-12 06:51:53'),
(4, 4, 1, 'User Created', '2014-05-12 06:52:44'),
(5, 4, 1, 'User Address Edited', '2014-05-12 12:31:48'),
(6, 23, 2, 'User Created', '2014-10-07 06:46:55'),
(7, 24, 2, 'User Created', '2014-10-07 06:48:25'),
(8, 25, 2, 'User Created', '2014-10-07 06:49:04'),
(9, 26, 2, 'User Created', '2014-10-07 06:49:16'),
(10, 27, 2, 'User Created', '2014-10-07 06:52:18'),
(11, 28, 2, 'User Created', '2014-10-07 06:52:45'),
(12, 29, 2, 'User Created', '2014-10-07 06:53:10'),
(13, 30, 2, 'User Created', '2014-10-07 06:53:33'),
(14, 31, 2, 'User Created', '2014-10-07 06:55:03'),
(15, 32, 2, 'User Created', '2014-10-07 06:55:33'),
(16, 33, 2, 'User Created', '2014-10-07 06:59:32'),
(17, 34, 2, 'User Created', '2014-10-07 07:01:18'),
(18, 35, 2, 'User Created', '2014-10-07 07:01:50'),
(19, 34, 2, 'User Details Edited', '2014-10-07 07:04:34'),
(20, 18, 2, 'User Details Edited', '2014-10-07 07:05:11'),
(21, 18, 2, 'User Details Edited', '2014-10-07 07:05:45'),
(22, 18, 2, 'User Details Edited', '2014-10-07 07:06:03'),
(23, 7, 6, 'User Created', '2014-10-17 06:22:29'),
(24, 7, 6, 'User Details Edited', '2014-10-17 06:32:22'),
(25, 7, 6, 'User Details Edited', '2014-10-17 06:32:37'),
(26, 8, 6, 'User Created', '2014-11-15 12:05:52'),
(27, 9, 6, 'User Created', '2014-12-02 10:46:36'),
(28, 9, 6, 'User Details Edited', '2014-12-02 10:47:34'),
(29, 4, 6, 'User Details Edited', '2014-12-03 10:34:49'),
(30, 4, 6, 'User Details Edited', '2014-12-03 10:36:34'),
(31, 4, 6, 'User Details Edited', '2014-12-03 10:36:49'),
(32, 8, 6, 'User Details Edited', '2014-12-03 10:47:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslevel`
--
ALTER TABLE `accesslevel`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `logintype`
--
ALTER TABLE `logintype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_agegroups`
--
ALTER TABLE `sfa_agegroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_articles`
--
ALTER TABLE `sfa_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_banner`
--
ALTER TABLE `sfa_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_bannerslides`
--
ALTER TABLE `sfa_bannerslides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_match`
--
ALTER TABLE `sfa_match`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_matchplayed`
--
ALTER TABLE `sfa_matchplayed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_medal`
--
ALTER TABLE `sfa_medal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_medalwon`
--
ALTER TABLE `sfa_medalwon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_media`
--
ALTER TABLE `sfa_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_mediaitem`
--
ALTER TABLE `sfa_mediaitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_modules`
--
ALTER TABLE `sfa_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_round`
--
ALTER TABLE `sfa_round`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_school`
--
ALTER TABLE `sfa_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_sports`
--
ALTER TABLE `sfa_sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_sportscategory`
--
ALTER TABLE `sfa_sportscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_sportsgalleryitem`
--
ALTER TABLE `sfa_sportsgalleryitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_student`
--
ALTER TABLE `sfa_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_team`
--
ALTER TABLE `sfa_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_teamstudents`
--
ALTER TABLE `sfa_teamstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_year`
--
ALTER TABLE `sfa_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslevel`
--
ALTER TABLE `accesslevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sfa_agegroups`
--
ALTER TABLE `sfa_agegroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_articles`
--
ALTER TABLE `sfa_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_banner`
--
ALTER TABLE `sfa_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_bannerslides`
--
ALTER TABLE `sfa_bannerslides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_match`
--
ALTER TABLE `sfa_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_matchplayed`
--
ALTER TABLE `sfa_matchplayed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_medal`
--
ALTER TABLE `sfa_medal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_medalwon`
--
ALTER TABLE `sfa_medalwon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_media`
--
ALTER TABLE `sfa_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_mediaitem`
--
ALTER TABLE `sfa_mediaitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_modules`
--
ALTER TABLE `sfa_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_round`
--
ALTER TABLE `sfa_round`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_school`
--
ALTER TABLE `sfa_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_sports`
--
ALTER TABLE `sfa_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_sportscategory`
--
ALTER TABLE `sfa_sportscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_sportsgalleryitem`
--
ALTER TABLE `sfa_sportsgalleryitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sfa_student`
--
ALTER TABLE `sfa_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_team`
--
ALTER TABLE `sfa_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_teamstudents`
--
ALTER TABLE `sfa_teamstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_year`
--
ALTER TABLE `sfa_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2015 at 06:46 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `timestamp`) VALUES
(1, 'poojawohlig@sjd.dfd', '2015-10-02 07:06:56'),
(2, 'poojawodfhlig@sjd.dfd', '2015-10-02 07:07:01'),
(3, 'poojawodfhlig@sjd.dfd', '2015-10-02 07:07:40'),
(4, 'poojawodfhlig@sjd.dfd', '2015-10-02 07:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `registrationsports`
--

CREATE TABLE IF NOT EXISTS `registrationsports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationsports`
--

INSERT INTO `registrationsports` (`id`, `name`) VALUES
(1, 'Table Tennis'),
(2, 'Tennis'),
(3, 'Badminton'),
(4, 'Squash'),
(5, 'Aquatic'),
(6, 'Basket ball'),
(7, 'Volyball'),
(8, 'Handball');

-- --------------------------------------------------------

--
-- Table structure for table `schoolregistration`
--

CREATE TABLE IF NOT EXISTS `schoolregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `establishdate` date NOT NULL,
  `contactperson` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolregistration`
--

INSERT INTO `schoolregistration` (`id`, `name`, `address`, `establishdate`, `contactperson`, `type`, `email`, `mobile`, `landline`, `timestamp`) VALUES
(1, 'dfghj', 'dfgh', '0000-00-00', 'tyhuij', 1, 'drftgh@ghj.sda', 'fghj', 'fgh', '2015-08-29 10:44:41'),
(2, 'dfghj', 'dfgh', '0000-00-00', 'tyhuij', 1, 'drftgh@ghj.sda', 'fghj', 'fgh', '2015-08-29 10:46:47'),
(3, 's,jdbvkjsdb', 'bjkwbgjwebjb', '2015-08-29', 'wkjhrjk', 1, '', '', '', '2015-08-29 10:58:48'),
(4, 'xdck', 'df', '2015-08-29', 'gfnyt', 2, 'ghf@rthg.jk', '65584', '565', '2015-08-29 11:24:25'),
(5, '', '', '0000-00-00', '', 0, '', '', '', '2015-08-29 11:29:35'),
(6, '', '', '0000-00-00', '', 0, '', '', '', '2015-08-29 11:29:36'),
(7, '', '', '0000-00-00', '', 0, '', '', '', '2015-08-29 11:29:36'),
(8, '', '', '2015-08-29', '', 0, '', '', '', '2015-08-29 11:29:42'),
(9, '', '', '0000-00-00', '', 0, '', '', '', '2015-08-29 11:29:48'),
(10, '', '', '0000-00-00', '', 0, '', '', '', '2015-08-29 11:30:00'),
(11, '', '', '0000-00-00', '', 0, '', '', '', '2015-08-29 11:30:14'),
(12, '', '', '2015-08-29', '', 0, '', '', '', '2015-08-29 11:31:54'),
(13, '', '', '2015-08-29', '', 0, '', '', '', '2015-08-29 11:35:41'),
(14, '', '', '2015-08-29', '', 0, '', '', '', '2015-08-29 12:34:08'),
(15, '', '', '2015-08-29', '', 0, '', '', '', '2015-08-29 12:34:08'),
(16, '', '', '0000-00-00', '', 0, '', '', '', '2015-08-29 12:34:10'),
(17, '', '', '0000-00-00', '', 0, '', '', '', '2015-08-29 12:34:46'),
(18, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:05:47'),
(19, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:05:49'),
(20, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:05:50'),
(21, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:05:50'),
(22, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:05:51'),
(23, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:05:51'),
(24, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:05:56'),
(25, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:27'),
(26, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:28'),
(27, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:29'),
(28, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:33'),
(29, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:33'),
(30, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:33'),
(31, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:34'),
(32, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:38'),
(33, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:38'),
(34, 'Named', 'Jsks', '2015-09-04', 'Nsjss', 1, 'Mahesh@wohlig.com', '8786622179', '8383932892', '2015-09-04 11:06:39'),
(35, 'dcfvgh', 'sdfg', '2015-09-04', '54647475', 2, 'hgdasf@sgd.dfs', '3456', '5454353354', '2015-09-04 11:12:02'),
(36, 'dcfvgh', 'sdfg', '2015-09-04', '54647475', 2, 'hgdasf@sgd.dfs', '3456', '5454353354', '2015-09-04 11:12:04'),
(37, 'dcfvgh', 'sdfg', '2015-09-04', '54647475', 2, 'hgdasf@sgd.dfs', '3456', '5454353354', '2015-09-04 11:12:07'),
(38, 'dcfvgh', 'sdfg', '2015-09-04', '54647475', 2, 'hgdasf@sgd.dfs', '3456', '5454353354', '2015-09-04 11:12:13'),
(39, 'dcfvgh', 'sdfg', '2015-09-04', '54647475', 2, 'hgdasf@sgd.dfs', '3456', '5454353354', '2015-09-04 11:12:13'),
(40, 'dcfvgh', 'sdfg', '2015-09-04', '54647475', 2, 'hgdasf@sgd.dfs', '3456', '5454353354', '2015-09-04 11:12:14'),
(41, 'fghj', 'fghj', '2015-09-04', '', 0, '', '454354', '4531', '2015-09-04 11:32:46'),
(42, 'fcgvhbjn', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:34:19'),
(43, 'wethj', 'retrhj', '2015-09-04', '', 0, '', '787878', '783587356', '2015-09-04 11:42:02'),
(44, 'dfghj', '', '0000-00-00', '', 0, '', '', '', '2015-09-04 11:44:34'),
(45, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:49:04'),
(46, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:49:27'),
(47, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:49:33'),
(48, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:49:42'),
(49, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:49:53'),
(50, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:51:32'),
(51, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:55:30'),
(52, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 11:55:50'),
(53, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:06:37'),
(54, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:16:57'),
(55, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:17:24'),
(56, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:17:44'),
(57, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:18:12'),
(58, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:18:45'),
(59, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:19:16'),
(60, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:20:37'),
(61, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:29:43'),
(62, 'sdfgh', '', '0000-00-00', '', 0, '', '', '', '2015-09-04 12:32:18'),
(63, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:48:31'),
(64, '', '', '2015-09-04', '', 0, '', '', '', '2015-09-04 12:48:56'),
(65, '', '', '1981-09-10', '', 0, '', '', '', '2015-09-10 06:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `schoolregistrationsports`
--

CREATE TABLE IF NOT EXISTS `schoolregistrationsports` (
  `id` int(11) NOT NULL,
  `schoolregistration` int(11) NOT NULL,
  `registrationsports` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolregistrationsports`
--

INSERT INTO `schoolregistrationsports` (`id`, `schoolregistration`, `registrationsports`) VALUES
(1, 1, 8),
(2, 1, 6),
(3, 1, 1),
(4, 2, 8),
(5, 2, 6),
(6, 2, 1),
(7, 3, 1),
(8, 3, 2),
(9, 3, 7),
(10, 4, 2),
(11, 4, 8),
(12, 4, 6),
(13, 25, 1),
(14, 25, 2),
(15, 26, 1),
(16, 26, 2),
(17, 27, 1),
(18, 27, 2),
(19, 28, 1),
(20, 28, 2),
(21, 29, 1),
(22, 29, 2),
(23, 30, 1),
(24, 30, 2),
(25, 31, 1),
(26, 31, 2),
(27, 32, 1),
(28, 32, 2),
(29, 33, 1),
(30, 33, 2),
(31, 34, 1),
(32, 34, 2),
(33, 35, 2),
(34, 36, 2),
(35, 37, 2),
(36, 38, 2),
(37, 39, 2),
(38, 40, 2),
(39, 41, 3),
(40, 43, 6),
(41, 43, 2),
(42, 45, 2),
(43, 46, 6),
(44, 49, 6),
(45, 63, 6),
(46, 65, 1),
(47, 65, 6),
(48, 65, 3),
(49, 65, 8);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_agegroups`
--

INSERT INTO `sfa_agegroups` (`id`, `name`, `status`, `order`, `json`) VALUES
(1, '10-12yrs', 1, 0, ''),
(2, 'U-17', 1, 0, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_banner`
--

INSERT INTO `sfa_banner` (`id`, `name`, `status`, `order`) VALUES
(1, 'Table Tennis', 1, 0),
(2, 'Tennis', 1, 0),
(3, 'Badminton', 1, 0),
(4, 'Squash', 1, 0),
(5, 'Aquatics', 1, 0),
(6, 'Basket Ball', 1, 0),
(7, 'Volley Ball', 1, 0),
(8, 'Hand Ball', 1, 0);

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
  `banner` int(11) NOT NULL,
  `description` text NOT NULL,
  `startdate` varchar(50) NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_bannerslides`
--

INSERT INTO `sfa_bannerslides` (`id`, `order`, `icon`, `title`, `link`, `image`, `banner`, `description`, `startdate`, `enddate`) VALUES
(1, 1, 'tabletennis1.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', '', 'sfa1.jpg', 1, '', '', '0000-00-00'),
(2, 1, 'tennis1.png', 'SPORTS FOR ALL 2015, MUMBAI', 'DY Patil Sports Stadium, Nerul', 'sfa2.jpg', 2, '', '24th- 31st December', '0000-00-00'),
(3, 1, 'batminton2.png', 'REGISTER YOUR SCHOOL NOW', 'School Registrations Closed', 'sfa3.jpg', 3, 'only member schools will be permitted to participate at SFA Events.', '15th October 2015', '0000-00-00'),
(4, 1, 'sqaush1.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', '', 'sfa1.jpg', 4, '', '', '0000-00-00'),
(5, 1, 'aquatics1.png', 'SPORTS FOR ALL 2015, MUMBAI', 'DY Patil Sports Stadium, Nerul', 'sfa2.jpg', 5, '', '24th- 31st December', '0000-00-00'),
(6, 1, 'basketball1.png', 'REGISTER YOUR SCHOOL NOW', 'School Registrations Closed', 'sfa3.jpg', 6, 'only member schools will be permitted to participate at SFA Events.', '15th October 2015', '0000-00-00'),
(7, 1, 'volleyball1.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', '', 'sfa1.jpg', 7, '', '', '0000-00-00'),
(8, 1, 'handball1.png', 'SPORTS FOR ALL 2015, MUMBAI', 'DY Patil Sports Stadium, Nerul', 'sfa2.jpg', 8, '', '24th- 31st December', '0000-00-00');

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

--
-- Dumping data for table `sfa_match`
--

INSERT INTO `sfa_match` (`id`, `sports`, `sportscategory`, `agegroup`, `timestamp`, `status`, `resulttimestamp`, `matchresult`, `name`) VALUES
(0, 1, 1, 1, '2015-11-09 13:03:15', 1, '0000-00-00 00:00:00', '', 'sdhgcvges');

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

--
-- Dumping data for table `sfa_matchplayed`
--

INSERT INTO `sfa_matchplayed` (`id`, `type`, `order`, `team`, `student`, `match`, `result`, `reason`, `round`) VALUES
(0, 0, 78, 1, 1, 0, 0, '', 0);

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

--
-- Dumping data for table `sfa_medal`
--

INSERT INTO `sfa_medal` (`id`, `name`, `order`, `image`) VALUES
(0, 'dbfgzrdj', 4, '');

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

--
-- Dumping data for table `sfa_medalwon`
--

INSERT INTO `sfa_medalwon` (`id`, `medal`, `timestamp`, `sports`, `sportscategory`, `year`, `agegroup`) VALUES
(0, 0, '2015-11-09 13:04:07', 1, 1, 1, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_media`
--

INSERT INTO `sfa_media` (`id`, `name`, `icon`, `status`, `order`, `json`) VALUES
(0, '', '', 1, 0, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `sfa_round`
--

INSERT INTO `sfa_round` (`id`, `sports`, `sportcategory`, `year`, `agegroup`, `level`, `root`) VALUES
(0, 1, 1, 1, 1, '', 0);

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
  `biography` text NOT NULL,
  `authority` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_school`
--

INSERT INTO `sfa_school` (`id`, `name`, `email`, `contact`, `image`, `address`, `location`, `biography`, `authority`) VALUES
(1, 'abc', 'abc@gmail.com', '7979877', 'abc.png', 'airloi', 'airoli', 'aaaaaaaa', ''),
(2, 'xyz', 'xyz@gmail.com', '3215', 'xyz.png', 'vashi', 'mumbai', 'bbbbbbbbb', ''),
(7, 'hjgrkyxrh', 'djfh@djhj.dhgf', '87978', 'hjgvhdz.jpg', 'airoli', 'navimumbai', 'deajryweytry', 'authrrrrrrrrrrr');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sports`
--

INSERT INTO `sfa_sports` (`id`, `name`, `status`, `order`, `icon`, `about`, `eligibility`, `rules`, `json`) VALUES
(1, 'carrom', 1, 0, '', '', '', '', ''),
(2, 'chess', 1, 0, '', '', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sportscategory`
--

INSERT INTO `sfa_sportscategory` (`id`, `sports`, `title`, `order`, `status`, `type`, `json`) VALUES
(1, 1, 'Singles', 0, 1, 0, ''),
(2, 2, 'double', 0, 1, 0, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `location` varchar(255) NOT NULL,
  `sports` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `agegroup` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `isparticipant` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `emergencycontact` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_student`
--

INSERT INTO `sfa_student` (`id`, `name`, `school`, `address`, `content`, `email`, `image`, `location`, `sports`, `sportscategory`, `agegroup`, `gender`, `isparticipant`, `age`, `phone`, `emergencycontact`) VALUES
(1, 'jyoti', 1, 'fcdjgvsajg', 'cgvhbj', 'abc@ymail.com', 'abc.jpg', 'kalyan', 1, 1, 1, 1, 1, 22, '98787', 'seema 68797'),
(2, 'hdhesgd', 2, 'gvh', 'sdhfbjah', 'dfga@sdnfj.dfd', 'fahdsg.jpg', 'pune', 1, 2, 2, 2, 1, 24, '787878', 'riya 8797879868789');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_team`
--

INSERT INTO `sfa_team` (`id`, `sportscategory`, `agegroup`, `year`, `title`) VALUES
(1, 1, 1, 2, 'try this'),
(2, 1, 1, 1, 'zvgr'),
(3, 1, 1, 1, 'szdxcgvhbj');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_teamstudents`
--

CREATE TABLE IF NOT EXISTS `sfa_teamstudents` (
  `id` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  `student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_year`
--

INSERT INTO `sfa_year` (`id`, `name`, `status`, `order`) VALUES
(1, '2014', 1, 0),
(2, '2015', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `name`, `image`, `description`, `status`, `order`) VALUES
(1, 'Nike', '1.png', '1Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was', 1, 1),
(2, 'Nike', '1.png', '2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was', 1, 1),
(3, 'Nike', '1.png', '3Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was', 1, 1);

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
  `street` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`, `dob`, `street`, `address`, `city`, `state`, `country`, `pincode`, `facebook`, `google`, `twitter`) VALUES
(1, 'wohlig', 'a63526467438df9566c508027d9cb06b', 'wohlig@wohlig.com', 1, '0000-00-00 00:00:00', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(4, 'pratik', '0cb2b62754dfd12b6ed0161d4b447df7', 'pratik@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, 'pratik', '1', 1, '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(5, 'wohlig123', 'wohlig123', 'wohlig1@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(6, 'wohlig1', 'a63526467438df9566c508027d9cb06b', 'wohlig2@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(7, 'Avinash', '7b0a80efe0d324e937bbfc7716fb15d3', 'avinash@wohlig.com', 1, '2014-10-17 06:22:29', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(9, 'avinash', 'a208e5837519309129fa466b0c68396b', 'a@email.com', 2, '2014-12-03 11:06:19', 3, '', '', '123', 1, 'demojson', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(13, 'aaa', 'a208e5837519309129fa466b0c68396b', 'aaa3@email.com', 3, '2014-12-04 06:55:42', 3, NULL, '', '1', 2, 'userjson', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(14, 'Rohan Patil', 'aeae5b2f900e84d784a0f0111e650835', 'rohan@gmail.com', 1, '2015-01-04 10:20:37', 2, '', '', '1', 1, 'demojson', '2015-01-15', 'kacheri street', 'yashodatt apt', 'karjat', 'Maharashtra', 'India', '410201', 'rohan09@fb.com', 'rohan@google.com', '#rohand'),
(15, 'avinash', 'a208e5837519309129fa466b0c68396b', 'avinash@avinash.com', 1, '2015-02-03 17:19:36', 1, '', '', '1', 1, '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"metatitle"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"metadesc"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"metakey"}]', '2015-02-04', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(17, 'chin', 'f3abbf3960a3c7683c1a14eb176d1a28', 'chi@chi.com', 2, '2015-03-23 11:43:08', NULL, NULL, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationsports`
--
ALTER TABLE `registrationsports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolregistration`
--
ALTER TABLE `schoolregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolregistrationsports`
--
ALTER TABLE `schoolregistrationsports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_agegroups`
--
ALTER TABLE `sfa_agegroups`
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
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registrationsports`
--
ALTER TABLE `registrationsports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `schoolregistration`
--
ALTER TABLE `schoolregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `schoolregistrationsports`
--
ALTER TABLE `schoolregistrationsports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `sfa_agegroups`
--
ALTER TABLE `sfa_agegroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sfa_banner`
--
ALTER TABLE `sfa_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sfa_bannerslides`
--
ALTER TABLE `sfa_bannerslides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sfa_school`
--
ALTER TABLE `sfa_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sfa_sports`
--
ALTER TABLE `sfa_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sfa_sportscategory`
--
ALTER TABLE `sfa_sportscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sfa_student`
--
ALTER TABLE `sfa_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sfa_team`
--
ALTER TABLE `sfa_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

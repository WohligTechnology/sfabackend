-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2016 at 05:47 AM
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
-- Table structure for table `enquiries`
--

CREATE TABLE IF NOT EXISTS `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `mobile`, `person`, `timestamp`) VALUES
(1, 'trial', 'trial@t.com', '123', 'Student', '2015-11-18 14:29:32'),
(2, 'trial2@gmail.com', 'try@gmail.com', 'undefined', 'Student', '2015-11-18 14:33:01'),
(3, 'Last Thing', 'done@done.com', 'undefined', 'Student', '2015-11-18 14:52:32'),
(4, 'w', '9@1.com', '8', 'School Authority', '2015-11-18 14:55:54'),
(5, 'g', 's@s.com', '8', 'Parent', '2015-11-18 14:56:32'),
(6, 'Sudan', 'sudan@ting.in', '9840488224', 'Coach', '2015-11-18 15:06:53'),
(7, 'Sudharshan', 'sudan@ting.in', '9840488224', 'School Authority', '2015-11-18 15:30:42'),
(8, 'kshitij kapoor', 'rituk_kapoor@rediffmail.com', '9821836836', 'Student', '2015-11-18 19:41:26'),
(9, 'rishabh jain', 'jainbantichess1@gmail.com', '09826289207', 'Coach', '2015-11-18 21:37:25'),
(10, 'sonu siwach', 'sonusiwach333@gmail.com', '9541124333', 'Coach', '2015-11-18 22:19:13'),
(11, 'sumit vaishya', 'sumitvaishya@email.com', '7089943363', 'Student', '2015-11-19 01:43:22'),
(12, 'Alok Dubey', 'nehad4796@gmail.com', '7350780603', 'Student', '2015-11-19 04:00:56'),
(13, 'test', 'test@gmail.com', '7878787878', 'Student', '2015-11-19 06:39:10'),
(14, 'Rohit karmakar', 'Rohit007.karmakar@gmail.com', '9009789809', 'Student', '2015-11-19 06:39:17'),
(15, 'Mohd Tanzeem Haider', 'mtanzeemhaider@gmail.com', '8826188343', 'Student', '2015-11-19 07:49:37'),
(16, 'Shivam Gupta', 'shivam12345@hotmail.com', '7208578497', 'Student', '2015-11-19 12:32:18'),
(17, 'Hello', 'hi@helloo', '9876543210', 'Student', '2015-11-19 12:56:12'),
(18, 'Amit Shah', 'amitshah32@gmail.com', '7045684366', 'Coach', '2015-11-19 13:03:17'),
(19, 'trial', 'for@dwords.com', '09876543212', 'Student', '2015-11-19 13:04:09'),
(20, 'sunil shah', 'sunilshah21@gmail.com', '7045684366', 'Student', '2015-11-19 13:05:16'),
(21, 'rameshshah', 'rameshshah11@gmail.com', '7045684365', 'Parent', '2015-11-19 13:13:51'),
(22, 'mukeshmarya', 'mukii123@gmail.com', '7045684366', 'Student', '2015-11-19 13:15:17'),
(23, 'Dj Bagga', 'bagga@auro.in', '987654323456', 'Student', '2015-11-19 13:16:18'),
(24, 'shairali kalemundase', 'shairalik131@gmail.com', '9743431526', 'Student', '2015-11-20 03:33:30'),
(25, 'laxman yadav', 'ly9702552427@outlook.com', '9702552427', 'Student', '2015-11-20 03:47:57'),
(26, 'satyam', 'msatyam718@gmail.com', '9575168057', 'Student', '2015-11-20 03:58:22'),
(27, 'satyam', 'msatyam718@gmail.com', '9575168057', 'Student', '2015-11-20 03:58:24'),
(28, 'amit girnale', 'gamit619@gmail.com', '7678034472', 'Student', '2015-11-20 04:07:11'),
(29, 'Suhani', 'Rags07shukla@gmail.com', '9769082841', 'Student', '2015-11-20 05:49:17'),
(30, 'Rahul Chauhan', 'rahulchauhanrockon2@gmail.com', '9537313989', 'Student', '2015-11-20 05:59:01'),
(31, 'Ui', 'kkbno@jhufch33', 'undefined', 'Student', '2015-11-20 06:45:08'),
(32, 'Ui', 'kkbno@jhufch33', 'undefined', 'Student', '2015-11-20 06:45:08'),
(33, 'akshay balu dakave', 'akshaybalaudakave15@gmail.com', '8097666045', 'Student', '2015-11-20 07:04:29'),
(34, 'suresh bafna', 'sureshlalita1960@gmail.com', '919879469125', 'Parent', '2015-11-20 07:23:14'),
(35, 'Ahire Ajay Bhika', 'ahireajay7@gmail.com', '9096946229', 'Student', '2015-11-20 07:34:54'),
(36, 'Ahire Ajay Bhika', 'ahireajay7@gmail.com', '9096946229', 'Student', '2015-11-20 07:34:57'),
(37, 'sonu', 'ssav57@gmail.com', '9768252891', 'Student', '2015-11-20 07:41:42'),
(38, 'akbar', 'khanakbar728@gmail.com', '7709347639', 'Student', '2015-11-20 07:55:17'),
(39, 'mohammad akbar khan', 'khanakbar728@gmail.com', '7709347639', 'Student', '2015-11-20 07:56:56'),
(40, 'Vruta Bhavsar', 'vruta09@gmail.com', '9619110591', 'Student', '2015-11-20 10:32:20'),
(41, 'CHRISTOPHER FERNANDES', 'chris.cameron_enterprise@hotmail.com', '9324317504', 'Parent', '2015-11-20 11:59:58'),
(42, 'shubhansu', 'shubhanshus12@gmail.com', '7506197607', 'Student', '2015-11-20 16:52:10'),
(43, 'Kunal Nandlal jain', 'kunalnjain1008@gmail.com', '8421129960', 'Student', '2015-11-20 18:54:39'),
(44, 'Rahul mehta', 'rm.mehta31@yahoo.com', '9820247668', 'Student', '2015-11-20 19:19:04'),
(45, 'vedant', 'vedantdaven22@gmail.com', '9408740227', 'Student', '2015-11-20 19:54:34'),
(46, 'Pratik Prakasha Tambe', 'Pratiktambe2@gmail.com', '9821430948', 'Student', '2015-11-20 20:06:09'),
(47, 'dhivit bhandary', 'dhivith.bhandary@gmail.com', '28523989', 'Student', '2015-11-20 21:10:39'),
(48, 'arham doshi', 'arhdo@rediffmail.com', '7383797513', 'Student', '2015-11-21 00:59:05'),
(49, 'Ankush', 'ramnanirenu14@yahoo.com', '9930749111', 'Student', '2015-11-21 01:11:39'),
(50, 'krishma shukla', 'birjukrishmashukla@gmail.com', '09920084811', 'Parent', '2015-11-21 01:23:09'),
(51, 'saudager m.d saif', 'saifshaikh@gmail.com', '8149379874', 'Student', '2015-11-21 03:04:07'),
(52, 'Akash katheriya', 'Akashkatheriya@027gmail.com', '9174104224', 'Student', '2015-11-21 03:18:02'),
(53, 'Kaptan Goyal', 'Kaptan.goyal20@gmail.com', '9425727652', 'Student', '2015-11-21 03:24:03'),
(54, 'Mohd Ahmed', 'mohdahmed1270@Gmail.com', '9990264501', 'Student', '2015-11-21 03:38:56'),
(55, 'dhruvendra singh yadav', 'dhruvnd007@gmail.com', '9785929970', 'Student', '2015-11-21 03:46:20'),
(56, 'bharathraj', 'bharathrajkmogaveera454@gmail.com', '9663859454', 'Student', '2015-11-21 04:02:08'),
(57, 'Shrimann Jakhmola', 'djakhmola@redifffmail.com', '9039099189', 'Student', '2015-11-21 15:18:43'),
(58, 'Aerbin Rashan Surin', 'surinaeri@gmail.com', '9334453271', 'Coach', '2015-11-21 16:20:58'),
(59, 'sanjay gupta', 'sanjayg158@gmail.com', '8879750544', 'Student', '2015-11-21 18:57:40'),
(60, 'sanjay gupta', 'sanjayg158@gmail.com', '8879750544', 'Student', '2015-11-21 18:57:40'),
(61, 'nikhil ambekar', 'nikhilambekar21@gmail.com', '7678094121', 'Student', '2015-11-21 19:06:55'),
(62, 'pooja kanwar', 'Narpat4@hotmail.com', '9930961280', 'Student', '2015-11-21 19:40:02'),
(63, 'Aman Choudhary', 'caman14298@gmail.com', '9981609178', 'Parent', '2015-11-21 20:04:48'),
(64, 'Aman Choudhary', 'caman14298@gmail.com', '9981609178', 'Parent', '2015-11-21 20:04:48'),
(65, 'siddharth yadav', 'siddharthyadav145@gmail.com', '8108657797', 'Parent', '2015-11-21 22:16:19'),
(66, 'lokesh pareek', 'pareek12351@gmail.com', '8229926747', 'Student', '2015-11-22 01:55:10'),
(67, 'Vansh Sharma', 'radhikaprakashsharma@hotmail.com', '9820506734', 'Student', '2015-11-22 03:15:36'),
(68, 'RAVINDER SINGH SHEKHAWAT', 'ravsa.shekhawat@gmail.com', '7793033249', 'Student', '2015-11-22 03:41:33'),
(69, 'PRAVEEN KUMAR SHARMA', 'pk.sharmarishu@gmail.com', '8817288814', 'Student', '2015-11-22 04:18:18'),
(70, 'Rajveer Singh', 'rajveersingh8864@gmail.com', '8864944322', 'Student', '2015-11-22 05:24:05'),
(71, 'bilal mugal', 'bilalmugal7774@gmail.con', '8349230334', 'Student', '2015-11-22 06:36:11'),
(72, 'nandu katole', 'nk.@mail.com', '8959739420', 'Student', '2015-11-22 08:44:06'),
(73, 'AMOGH APURV  DESAI', 'sujay6606@gmail.com', '9898438439', 'Parent', '2015-11-22 09:03:46'),
(74, 'neha ramdas wagh', 'nehawagh14@gamil.com', '9029375841', 'Student', '2015-11-22 09:43:38'),
(75, 'Jameer', 'saadcomputersich@gmail.com', '9623450751', 'Parent', '2015-11-22 15:34:40'),
(76, 'mohd sufian', 'sufiancop@gmail.com', '7668641903', 'Student', '2015-11-22 16:30:17'),
(77, 'Atul Singh', 'athleteatul.singh17@gmail.com', '8460557256', 'Student', '2015-11-22 19:37:34'),
(78, 'Himmat Singh', 'himmatsinghchouhan781@gmail.com', '9694874432', 'Student', '2015-11-22 19:52:44'),
(79, 'Bhawani Partap Singh', 'bshekhawat493@gmail.com', '09166149009', 'Student', '2015-11-23 00:31:03'),
(80, 'Sujata', 'saksjaat@gmail.com', '9717885351', 'Parent', '2015-11-23 01:42:25'),
(81, 'Neel Kamal Neelesh', 'neeleshnk@gmail.com', '9723204298', 'Student', '2015-11-23 02:21:39'),
(82, 'Neelkamal Neelesh', 'neeleshnk92@gmail.com', '9723204298', 'Student', '2015-11-23 02:24:22'),
(83, 'KUNAL KISHOR PATIL', 'kpatil_kishoraarti@yahoo.co.in', '9867258660', 'Student', '2015-11-23 02:34:10'),
(84, 'Shahid khan', 'sahidkhan76@yahoo.com', '7621810677', 'Parent', '2015-11-23 03:39:48'),
(85, 'Shahid khan', 'sahidkhan76@yahoo.com', '7621810677', 'Parent', '2015-11-23 03:39:48'),
(86, 'Shahid khan', 'sahidkhan76@yahoo.com', '7621810677', 'Parent', '2015-11-23 03:39:48'),
(87, 'Shahid khan', 'sahidkhan76@yahoo.com', '7621810677', 'Parent', '2015-11-23 03:39:48'),
(88, 'Shahid khan', 'sahidkhan76@yahoo.com', '7621810677', 'Parent', '2015-11-23 03:39:48'),
(89, 'Shahid khan', 'sahidkhan76@yahoo.com', '7621810677', 'Parent', '2015-11-23 03:39:48'),
(90, 'Shahid khan', 'sahidkhan76@yahoo.com', '7621810677', 'Parent', '2015-11-23 03:39:49'),
(91, 'Shahid khan', 'sahidkhan76@yahoo.com', '7621810677', 'Student', '2015-11-23 03:40:42'),
(92, 'devang rameshubhai kanaiya', 'devangkanaiya99254@gmail.com', '8866504006', 'Student', '2015-11-23 04:23:26'),
(93, 'jinal', 'jinaljinu1410@gmail.com', '7383563214', 'Student', '2015-11-23 05:51:33'),
(94, 'Mohammad S Hirani', 'mohammadhirani13@gmail.com', '7738901301', 'Student', '2015-11-23 05:55:57'),
(95, 'Prachi Kulkarni', 'profprachikulkarni@gmail.com', '', 'Parent', '2015-11-23 06:31:05'),
(96, 'Ronak Kotian', 'ronakkotian22@yahoo.com', '9819931688', 'Student', '2015-11-23 06:34:57'),
(97, 'ashok namdev waghmare', 'ashokwaghmare50@gmail.com', '9619731527', 'Student', '2015-11-23 06:35:24'),
(98, 'shubham singh rajpoot', 'rshubham137@gimal.com', '9165703094', 'Student', '2015-11-23 06:55:06'),
(99, 'Mankrit Singh', 'rulerofthefield@gmail.com', '8097034279', 'Student', '2015-11-23 11:34:04'),
(100, 'Shrivatsa poddar', 'psco47@hotmail.com', 'undefined', 'Student', '2015-11-23 14:12:24'),
(101, 'Abdul Rahman', 'Aahilqureshi32111@gmaul.com', '9166114313', 'Student', '2015-11-23 18:35:06'),
(102, 'Swanand Phulsundar', 'swanand167@gmail.com', '9702301057', 'Student', '2015-11-23 19:08:42'),
(103, 'umar sohail khan', 'khanumarsohail2000@gmail.com', 'undefined', 'Student', '2015-11-23 20:13:26'),
(104, 'Prashant sharma', 'sharma.prashant1112@gmail.com', '7891341939', 'Student', '2015-11-24 01:40:43'),
(105, 'Sreedevi Menon', 'smenon928@gmail.com', '8108518465', 'Student', '2015-11-24 02:31:48'),
(106, 'ramesh', 'rrameshramola@gmail.com', '7847996033', 'Student', '2015-11-24 03:27:34'),
(107, 'manish keshari', 'manish00.mg@gmail.com', '7039565831', 'Student', '2015-11-24 03:38:10'),
(108, 'lalitha', 'lalitha2804@gmail.com', 'undefined', 'Parent', '2015-11-24 04:15:54'),
(109, 'shailendra Kumar sharma', 'sksharma35@gmail.com', '9805884913', 'Parent', '2015-11-24 06:08:12'),
(110, 'Rajput govind', 'govind22222rajput@gmail.com', '8469867330', 'Student', '2015-11-24 06:20:52'),
(111, 'Ravi Khavse', 'ravikhavse@gmail.com', '8878089233', 'Student', '2015-11-24 06:22:29'),
(112, 'sandip ghosal', 'sandipghosal.2000@gmail.com', '9825803201', 'Student', '2015-11-24 06:23:06'),
(113, 'HEMANG VIJAY KAMERKAR', 'gtaankita@gmail.com', '9757110184', 'Parent', '2015-11-24 06:34:11'),
(114, 'Omkar Singh', 'nishansingh1974@gmail.com', '9167658111', 'Student', '2015-11-24 20:32:52'),
(115, 'Bharat Saroopa', 'bharatschool@gmail.com', '9821653464', 'School Authority', '2015-11-24 23:22:37'),
(116, 'ABHISHEK SINGH', 'as374590@gmail.com', '9221296294', 'Student', '2015-11-25 04:41:02'),
(117, 'ABHISHEK SINGH', 'as374590@gmail.com', '9221296294', 'Student', '2015-11-25 04:51:17'),
(118, 'vikas vaman narkar', 'vikasnarkar191@gmail.com', 'undefined', 'Student', '2015-11-25 04:57:14'),
(119, 'Om Upadhyay', 'aviupdhyay_99@yahoo.com', '7666120600', 'Student', '2015-11-25 05:39:48'),
(120, 'shivamnamdev', 'abshindwar@gmail.com', '8463808797', 'Student', '2015-11-25 06:19:59'),
(121, 'Ashish singh', 'ashishs2337@gmail.com', '8452942003', 'Student', '2015-11-25 06:20:22'),
(122, 'meet', 'meet.m.joshi99@gmail.com', '9867377015', 'Student', '2015-11-25 06:45:33'),
(123, 'delnaz', 'delnazb@yahoo.com', '9820215265', 'Parent', '2015-11-25 06:52:55'),
(124, 'delnaz', 'delnazb@yahoo.com', '9820215265', 'Parent', '2015-11-25 06:52:55'),
(125, 'SAURABH DUBEY', 'MESSILEON922@GMAIL.COM', '9833562906', 'Student', '2015-11-25 06:53:00'),
(126, 'omkaro', 'ogh24895@gmail.com', 'undefined', 'Student', '2015-11-25 07:30:15'),
(127, 'diwakar chamoli', 'diwakarc5@gmail.com', '7878768795', 'Student', '2015-11-25 08:06:37'),
(128, 'Sunil yadav', 'sunilyadav786@gmail.com', '8354983461', 'Student', '2015-11-25 08:16:44'),
(129, 'shivam D Rai', 'raidiwakar3@gmail', 'undefined', 'Student', '2015-11-25 08:23:37'),
(130, 'Dhaval', 'dhaval456shah2002@yahoo.com', '9324961024', 'Parent', '2015-11-25 08:45:05'),
(131, 'vikas tripathi', 'tripathivikas833@gmail.com', '8828199486', 'Student', '2015-11-25 08:48:08'),
(132, 'Arshad Zalmai', 'irshad.zalmai@yahoo.com', '00918440823881', 'Student', '2015-11-25 08:55:28'),
(133, 'Oshinpriya', 'oshinpriya.sejel@gmail.com', '8655729492', 'Student', '2015-11-25 09:03:05'),
(134, 'Aakash Goyal', 'tashi_ax11@hotmail.com', 'undefined', 'Student', '2015-11-25 10:59:46'),
(135, 'Lalgi Nishad', 'lalginishad42@gmal.com', '7666736612', 'Student', '2015-11-25 16:18:21'),
(136, 'ranjeet', 'rs311996@gmail.com', '8652416567', 'Student', '2015-11-25 19:27:45'),
(137, 'Rajesh', 'rrbsrrbs@yahoo.in', '9754451962', 'Student', '2015-11-26 03:41:59'),
(138, 'vishal kakaskar', 'vishalkalaskar3@gmail.com', '7208353299', 'Student', '2015-11-26 03:57:08'),
(139, 'Rambabu rai', 'Rambaburai42@gmail.com', '', 'Student', '2015-11-26 04:26:34'),
(140, 'Aarush Arun Pillai', 'profarun@gmail.com', '9819110096', 'Student', '2015-11-26 04:54:24'),
(141, 'surendra mourya', 'surendramourya1996@gmail.com', '9819165696', 'Student', '2015-11-26 05:32:56'),
(142, 'Jerry patel', 'jerrypatel331@gmail.com', '8347059146', 'Parent', '2015-11-26 06:07:26'),
(143, 'G. Gandhi Dhanush', 'gandhidhrsn@gmail.com', '', 'Parent', '2015-11-26 07:42:53'),
(144, 'Bhanushali Nayan Valji', 'nayanbhanu19@gmail.com', '7666977028', 'Student', '2015-11-26 08:01:59'),
(145, 'Vandit Thakkar', 'vandit999@gmail.com', ' 918460866373', 'Student', '2015-11-26 09:21:50'),
(146, 'manish kumar pareek', 'mpareek742@gmail.com', '9694110315', 'Student', '2015-11-26 09:32:32'),
(147, 'shrishail mane', 'shrishailmane95@gmail.com', '8451216825', 'Student', '2015-11-26 10:31:31'),
(148, 'shankar choudhary', 'schoudhary563@gmail.com', '9928413708', 'Student', '2015-11-26 10:48:02'),
(149, 'Yoshid Anand', 'yoshida@gmail.com', '9769434111', 'Student', '2015-11-26 10:55:54'),
(150, 'Mohit Jain', 'jainmohit713@gmail.com', '7045211099', 'Student', '2015-11-26 16:49:16');

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
(6, 'Gallery of Student/School', '', '', 'site/viewmedia', 1, 0, 1, 5, 'icon-dashboard'),
(7, 'Age Groups', '', '', 'site/viewagegroups', 1, 0, 1, 6, 'icon-dashboard'),
(8, 'Sports', '', '', 'site/viewsports', 1, 0, 1, 6, 'icon-dashboard'),
(9, 'Sports Gallery Item', '', '', 'site/createsportsgalleryselect', 1, 0, 1, 6, 'icon-dashboard'),
(10, 'School', '', '', 'site/viewschool', 1, 0, 1, 6, 'icon-dashboard'),
(11, 'Team Students', '', '', 'site/viewteamstudents', 1, 0, 1, 6, 'icon-dashboard'),
(12, 'Round', '', '', 'site/viewround', 1, 0, 1, 6, 'icon-dashboard'),
(13, 'Schedules', '', '', 'site/viewmatch', 1, 0, 1, 6, 'icon-dashboard'),
(14, 'Match Played', '', '', 'site/viewmatchplayed', 1, 0, 1, 6, 'icon-dashboard'),
(15, 'Medal', '', '', 'site/viewmedal', 1, 0, 1, 6, 'icon-dashboard'),
(16, 'Medal Won', '', '', 'site/viewmedalwon', 1, 0, 1, 6, 'icon-dashboard'),
(17, 'Newsletter', '', '', 'site/viewnewsletter', 1, 0, 1, 7, 'icon-dashboard'),
(18, 'School enquiries', '', '', 'site/viewschoolregistration', 1, 0, 1, 10, 'icon-dashboard'),
(19, 'Enquiries', '', '', 'site/viewenquiries', 1, 0, 1, 11, 'icon-dashboard'),
(20, 'Team', '', '', 'site/viewteam1', 1, 0, 1, 12, 'icon-dashboard'),
(21, 'Students', '', '', 'site/viewstudent1', 1, 0, 1, 13, 'icon-dashboard');

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
(3, 0),
(5, 0),
(6, 1),
(7, 1),
(7, 3),
(8, 1),
(9, 0),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 0),
(15, 0),
(16, 0),
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
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `timestamp`) VALUES
(1, 'poojawohlig@sjd.dfd', '2015-10-02 07:06:56'),
(2, 'poojawodfhlig@sjd.dfd', '2015-10-02 07:07:01'),
(3, 'poojawodfhlig@sjd.dfd', '2015-10-02 07:07:40'),
(4, 'poojawodfhlig@sjd.dfd', '2015-10-02 07:07:49'),
(5, 'poojawodfhlig@sjd.dfd', '2015-10-02 07:11:42'),
(6, 'waesrd@sjd.dfd', '2015-10-02 07:11:48'),
(7, ' email', '2015-10-02 07:25:47'),
(8, 'undefined', '2015-10-02 07:39:10'),
(9, 'chintan@wohlig.com', '2015-10-02 07:39:17'),
(10, 'chintan@wohlig.com', '2015-10-02 07:39:22'),
(11, 'chintan@wohlig.com', '2015-10-02 07:40:09'),
(12, 'chintan@wohlig.com', '2015-10-02 08:35:53'),
(13, 'amitverma951994@gmail.com', '2015-10-02 08:36:49'),
(14, 'amitverma@gmail.com', '2015-10-02 11:49:37'),
(15, 'lkhhjklx;,fmndxl', '2015-10-02 11:57:43'),
(16, 'hgvbkj', '2015-10-02 11:59:04'),
(17, 'ASDCVB', '2015-10-02 11:59:28'),
(18, 'sdvlkhjl;sd', '2015-10-02 11:59:57'),
(19, 'dfghjkdssdfgh', '2015-10-02 12:00:12'),
(20, 'sdfgh', '2015-10-02 12:00:51'),
(21, 'amitverma951994@gmail.com', '2015-10-02 12:01:54'),
(22, 'sdgyu', '2015-10-02 12:02:43'),
(23, 'asdfgh', '2015-10-02 12:11:39'),
(24, 'asdfhm', '2015-10-03 07:05:42'),
(25, 'manan@ting.in', '2015-10-03 11:16:17'),
(26, 'Alkasodhani4@gmail.com', '2015-10-04 09:47:12'),
(27, 'rishikesh@sfanow.in', '2015-10-04 14:32:32'),
(28, 'jigar.shah@infiniteit.biz', '2015-10-05 03:24:37'),
(29, 'jigar.shah@infiniteit.biz', '2015-10-05 03:25:03'),
(30, 'manivaran@gmail.com', '2015-10-06 10:23:24'),
(31, 'Vidhi13@gmail.com', '2015-10-07 18:27:16'),
(32, 'floors_world@yahoo.co. in', '2015-10-09 05:55:27'),
(33, 'smchari@rediffmail.com', '2015-10-09 07:42:22'),
(34, 'info@zorbindia.in', '2015-10-13 06:02:44'),
(35, 'aadil@ting.in', '2015-10-13 07:29:20'),
(36, 'vimalmishraji248@gmail.com', '2015-10-16 14:24:39'),
(37, 'undefined', '2015-10-17 15:20:05'),
(38, 'undefined', '2015-10-17 15:20:08'),
(39, 'undefined', '2015-10-18 05:04:21'),
(40, 'undefined', '2015-10-19 11:26:45'),
(41, 'divyakharnare@rocketmail.com', '2015-10-20 14:48:36'),
(42, 'dfghjk', '2015-10-23 10:46:33'),
(43, 'GSDFGH', '2015-10-23 10:46:42'),
(44, 'AM', '2015-10-23 10:47:11'),
(45, 'kkdlonline@gmail.com', '2015-10-24 05:32:13'),
(46, 'shvenkat@gmail.com', '2015-10-27 06:07:43'),
(47, 'shvenkat@gmail.com', '2015-10-27 06:44:53'),
(48, 'chintan', '2015-10-27 13:53:46'),
(49, 'undefined', '2015-10-27 14:03:52'),
(50, 'undefined', '2015-10-27 14:05:46'),
(51, 'undefined', '2015-10-27 14:16:48'),
(52, 'undefined', '2015-10-27 14:27:45'),
(53, 'demo@demo.com', '2015-10-27 14:32:25'),
(54, 'mahesh.s@dypisworli.in', '2015-10-27 15:43:21'),
(55, 'alkasodhani4@gmail.com', '2015-11-01 17:18:16'),
(56, 'chirag.9966@gmail.com', '2015-11-02 11:56:24'),
(57, 'aadityaverma19@gmail.com', '2015-11-05 07:41:09'),
(58, 'sports@adfactorspr.com', '2015-11-06 07:26:37'),
(59, 'amit.qe@gmail', '2015-11-07 06:13:47'),
(60, 'amir.verm@gmail', '2015-11-07 06:14:05'),
(61, 'pranjaltiwari126@gmail.com', '2015-11-18 18:24:00'),
(62, 'prasadparab.209@gmail.com', '2015-11-19 07:48:20'),
(63, 'chrisferns789@gmail.com', '2015-11-19 09:03:23'),
(64, 'jasjdoshi@gmail.com', '2015-11-19 10:44:00'),
(65, 'a@gm', '2015-11-20 19:04:17'),
(66, 'rekha300479@gmail.com', '2015-11-21 02:55:13'),
(67, 'shaju.i@gmail.com', '2015-11-22 06:32:25'),
(68, 'gade.pravin@gmail.com', '2015-11-25 16:17:06'),
(69, 'abs@vsnl.net', '2015-11-26 11:38:17'),
(70, 'abs@vsnl.net', '2015-11-26 11:42:53'),
(71, 'dennis@taraporewala.com', '2015-11-26 14:12:32'),
(72, 'jamalsurve007@gmail.com', '2015-11-26 15:46:27'),
(73, 'gerasanjeev@hotmail.com', '2015-11-29 09:06:40'),
(74, 'janardan.degvekar@parker.com', '2015-11-30 11:42:07'),
(75, 'ankitkedia671@gmail.com', '2015-11-30 13:42:15'),
(76, 'amanshaikh1225@yahoo.in', '2015-11-30 16:54:45'),
(77, 'vishalyadavgcc@gmail.com', '2015-11-30 18:42:38'),
(78, 'preetibhoslephaltan@gmail.com', '2015-12-03 16:57:56'),
(79, 'ravidoshi99@gmail.com', '2015-12-04 09:05:51'),
(80, 'siva@absco.in', '2015-12-06 12:21:21'),
(81, 'jiten_patel@hotmail.com', '2015-12-08 06:53:47'),
(82, 'jainp@bharatpetroleum.in', '2015-12-08 16:15:30'),
(83, 'abs@vsnl.net', '2015-12-11 05:30:51'),
(84, 'vidhyrao@hotmail.com', '2015-12-11 09:46:11'),
(85, 'vidhyrao@hotmail.com', '2015-12-11 09:55:53'),
(86, 'vidhyrao@hotmail.com', '2015-12-11 09:55:53'),
(87, 'kochharkaran328@gmail.com', '2015-12-12 08:41:09'),
(88, 'vfhg@gmail.com', '2015-12-12 15:15:11'),
(89, 'shriramd67@gmail.com', '2015-12-13 06:25:21'),
(90, 'krishnatennis1994@gmail.com', '2015-12-13 15:54:45'),
(91, 'dilshadpatel@gmail.com', '2015-12-13 16:06:15'),
(92, 'mukesh.v.sharma@kotak.com', '2015-12-14 05:58:53'),
(93, 'mukesh.v.sharma@kotak.com', '2015-12-14 05:58:53'),
(94, 'rekha300479@gmail.com', '2015-12-14 06:57:01'),
(95, 'merietta_p@yahoo.com', '2015-12-14 07:04:27'),
(96, 'chhajerarham@gmail.com', '2015-12-14 10:59:43'),
(97, 'uchilp3@gmail.com', '2015-12-14 11:14:19'),
(98, 'sansurekha@gmail.com', '2015-12-15 02:02:26'),
(99, 'salilnike@gmail.com', '2015-12-15 03:36:36'),
(100, 'shraman@gmail.com', '2015-12-15 05:33:55'),
(101, 'a.savla@yahoo.com', '2015-12-15 11:24:59'),
(102, 'info@sfanow.in', '2015-12-16 12:40:43'),
(103, 'info@sfanow.in', '2015-12-16 14:59:01'),
(104, 'info@sfanow.in', '2015-12-16 14:59:01'),
(105, 'parag_doshi@yahoo.com', '2015-12-17 05:23:04'),
(106, 'nehal_16@hotmail.com', '2015-12-17 15:56:06'),
(107, 'ashwatg17@gmail.com', '2015-12-17 17:24:50'),
(108, 'bakkalviveknarayan@gmail.com', '2015-12-17 18:00:32'),
(109, 'santanu.chari@emergingmedia.com', '2015-12-18 05:15:52'),
(110, 'ronaksaroj45@gmail.com', '2015-12-18 08:59:17'),
(111, 'likhithtravels@ymail.com', '2015-12-18 10:58:59'),
(112, 'jasbirgyani2003@gmail.com', '2015-12-18 17:32:12'),
(113, 'armakhecha@gmail.com', '2015-12-19 01:56:31'),
(114, 'manojkap_2000@hotmail.com', '2015-12-19 05:36:15'),
(115, 'raajmita@gmail.com', '2015-12-20 08:06:38'),
(116, 'info@sfanow.in', '2015-12-20 09:03:33'),
(117, 'sango_kar@yahoo.co.in', '2015-12-20 14:13:05'),
(118, 'khannakarishma@yahoo.com', '2015-12-21 07:57:08'),
(119, 'raajmita@gmail.com', '2015-12-21 10:01:09'),
(120, 'info@sfanow.in', '2015-12-21 15:26:40'),
(121, 'sdfgbvn@gmail.com', '2015-12-22 06:27:32'),
(122, 'prashant.kuvlekar@LNTebg.com', '2015-12-22 08:55:47'),
(123, 'sulakshanap18@gmail', '2015-12-22 12:11:56'),
(124, 'bhavana.nishantkotak@gmail.com', '2015-12-22 16:50:47'),
(125, 'swanandkhanolkar@hotmail.com', '2015-12-22 17:06:22'),
(126, 'prashantkori31@gmail.com', '2015-12-23 12:51:23'),
(127, 'mba26970@rediffmail.com', '2015-12-23 13:46:28'),
(128, 'tanvidongre15@gmail.com', '2015-12-23 14:03:26'),
(129, 'tanvidongre15@gmail.com', '2015-12-23 14:07:24'),
(130, 'doshikevin99@gmail.com', '2015-12-23 14:09:52'),
(131, 'tanvidongare15@gmail.com', '2015-12-23 14:11:59'),
(132, 'vikrant.vohra@sapphirefoods.in', '2015-12-23 14:46:00'),
(133, 'shabadsingh510@gmail.com', '2015-12-24 06:27:52'),
(134, 'sagarsule@gmail.in', '2015-12-24 11:43:24'),
(135, 'hemantchemistrysir@gmail.com', '2015-12-24 17:05:24'),
(136, 'adnewsdesk@gmail.com', '2015-12-24 17:09:32'),
(137, 'poorandeepa1998@yahoo.com', '2015-12-25 02:03:51'),
(138, 'rajensanghavi@hotmail.com', '2015-12-25 09:14:09'),
(139, 'rekha300479@gmail.com', '2015-12-25 10:10:39'),
(140, '', '2015-12-25 10:11:25'),
(141, 'nehalchawan@gamil.com', '2015-12-25 12:16:34'),
(142, 'nehalchawan@gamil.com', '2015-12-25 12:16:36'),
(143, 'purshottammarkad@gmail.com', '2015-12-25 14:55:18'),
(144, 'sakship1702@gmail.com', '2015-12-25 16:17:32'),
(145, 'sakship1702@gmail.com', '2015-12-25 16:18:23'),
(146, 'atuladighe@gmail.com', '2015-12-25 18:12:48'),
(147, 'uchilp3@gmail.com', '2015-12-25 23:44:38'),
(148, 'vikramshelar9@gmail.com', '2015-12-26 02:24:37'),
(149, 'bjpatel763@gmail.com', '2015-12-26 03:48:12'),
(150, 'soumenphoto3d@gmail.com', '2015-12-26 04:37:10'),
(151, 'soumenphoto3d@gmail.com', '2015-12-26 04:37:10'),
(152, 'kn_bhat@hotmail.com', '2015-12-26 08:41:28'),
(153, 'prakash_paunikar49@yahoo.co.in', '2015-12-26 14:07:08'),
(154, 'Rakhikkaira@gmail.com', '2015-12-26 17:05:17'),
(155, 'Meenal_arekar@yahoo.com', '2015-12-27 02:40:18'),
(156, 'binoymk@gmail.com', '2015-12-27 08:02:52'),
(157, 'purshottammarkad@gmail.com', '2015-12-27 09:48:39'),
(158, 'sanjoykumar.dutta@gmail.com', '2015-12-27 14:07:34'),
(159, 'armangohil@gmail.com', '2015-12-27 17:18:32'),
(160, 'bababhosale09@gmail.com', '2015-12-28 04:58:11'),
(161, 'darshmishra3010@gmail.com', '2015-12-28 16:19:10'),
(162, 'sameer9dfpcl@gmail.com', '2015-12-30 16:05:14'),
(163, 'shail_judo@yahoo.in', '2015-12-31 09:59:55'),
(164, 'bababhosale09@gmail.com', '2016-01-02 05:25:14'),
(165, 'imtiyaz.thakkarply786@gmail.com', '2016-01-02 14:32:42'),
(166, 'niketa.lobo@gmail.com', '2016-01-03 12:11:46'),
(167, 'tejasmore791@gmai.com', '2016-01-03 13:28:07'),
(168, 'kakarox@live.com', '2016-01-03 13:42:03'),
(169, 'hardasani06@gmail.com', '2016-01-03 15:34:21'),
(170, 'tejasmore791@gmail.com', '2016-01-03 17:06:49'),
(171, 'drsurabhijain@yahoo.com', '2016-01-03 17:19:37'),
(172, 'tushargpt100@gmail.com', '2016-01-03 17:44:37'),
(173, 'mangeshb777@yahoo.co.in', '2016-01-04 03:28:01'),
(174, 'utpalmundra@gmail.com', '2016-01-04 04:23:40'),
(175, 'maratheanuvrat11@gmail.com', '2016-01-04 06:27:07'),
(176, 'shivani@sfepl.com', '2016-01-04 06:41:25'),
(177, 'sanjaym@globusmail.com', '2016-01-04 07:57:34'),
(178, 'vibhas.sen@gmail.com', '2016-01-04 08:16:12'),
(179, 'sahilparekh89@gmail.com', '2016-01-04 09:16:56'),
(180, 'beastatharva10@gmail.com', '2016-01-04 09:20:21'),
(181, 'manan@ting.in', '2016-01-04 11:23:46'),
(182, 'patel.jiten@gmail.com', '2016-01-04 11:45:00'),
(183, 'harshajwani10@gmail.com', '2016-01-04 12:25:00'),
(184, 'manojkpandey_4@rediffmail.com', '2016-01-04 14:16:03'),
(185, 'chhajerarham@gmail.com', '2016-01-04 15:00:20'),
(186, 'pkedar_jo@yahoo.com', '2016-01-04 15:33:35'),
(187, 'warangeadvait@gmail.com', '2016-01-04 16:00:12'),
(188, 'gopalkrishnajoshi@yahoo.com', '2016-01-04 16:17:57'),
(189, 'kajal_p_2002@yahoo.com', '2016-01-04 16:25:47'),
(190, 'spyralshirts@gmail.com', '2016-01-04 17:22:21'),
(191, 'ra.vip@live.com', '2016-01-04 17:27:41'),
(192, 'bane768@gmail.com', '2016-01-04 17:43:55'),
(193, 'bean@andromeda.in', '2016-01-04 17:47:18'),
(194, 'sharvinishetty@gmai.com', '2016-01-04 17:49:20'),
(195, 'amit@qlab.in', '2016-01-04 18:30:20'),
(196, 'abs@vsnl.net', '2016-01-05 02:10:09'),
(197, 'thakkeranup24@gmail.com', '2016-01-05 06:15:07'),
(198, 'thakkeranup24@gmail.com', '2016-01-05 06:15:16'),
(199, 'thakkeranup24@gmail.com', '2016-01-05 06:15:34'),
(200, 'thakkeranup24@gmail.com', '2016-01-05 06:15:35'),
(201, 'thakkeranup24@gmail.com', '2016-01-05 06:15:35'),
(202, 'ninadkolte@gmail.com', '2016-01-05 06:38:27'),
(203, 'ninadkolte@gmail.com', '2016-01-05 06:38:28'),
(204, 'ninadkolte@gmail.com', '2016-01-05 06:38:28'),
(205, 'ninadkolte@gmail.com', '2016-01-05 06:38:28'),
(206, 'ninadkolte@gmail.com', '2016-01-05 06:38:28'),
(207, 'ninadkolte@gmail.com', '2016-01-05 06:38:28'),
(208, 'ninadkolte@gmail.com', '2016-01-05 06:38:28'),
(209, 'ninadkolte@gmail.com', '2016-01-05 06:38:28'),
(210, 'ashishms@gmail.com', '2016-01-05 07:09:13'),
(211, 'houseqamar@gmail.com', '2016-01-05 07:48:03'),
(212, 'anjalipereira@hotmail.com', '2016-01-05 09:31:21'),
(213, 'raj12singh@yahoo.co.in', '2016-01-05 10:03:46'),
(214, 'surtideepak5@gmail.com', '2016-01-05 13:56:01'),
(215, 'mukesh.v.sharma@kotak.com', '2016-01-05 16:08:21'),
(216, 'mukesh.v.sharma@kotak.com', '2016-01-05 16:08:21'),
(217, 'harshajwani10@gmail.com', '2016-01-05 16:12:18'),
(218, 'odcargomovers@yahoo.co.in', '2016-01-05 17:36:28'),
(219, 'odcargomovers@yahoo.co.in', '2016-01-05 17:42:11'),
(220, 'jankidevi99@yahoo.co.in', '2016-01-05 17:43:56'),
(221, 'aditya.vardhan6317av@gmail.com', '2016-01-05 18:48:17'),
(222, 'rm.mehta31@yahoo.com', '2016-01-06 05:18:01'),
(223, 'kaustubhkawale@yahoo.com', '2016-01-06 06:00:22'),
(224, 'akshatashinde2152@gmail.com', '2016-01-06 06:05:42'),
(225, 'anmolarungupta0311@gmail.com', '2016-01-06 10:07:34'),
(226, 'odcargomovers@yahoo.co.in', '2016-01-06 10:16:00'),
(227, 'preetibhoslephaltan@gmail.com', '2016-01-06 10:31:42'),
(228, 'rhiaan23@gmail.com', '2016-01-06 10:45:57'),
(229, 'rhiaan23@gmail.com', '2016-01-06 10:54:37'),
(230, 'piyushjuthani@gmail.com', '2016-01-06 11:45:18'),
(231, 'darshmuishra3010@gmail.com', '2016-01-06 13:06:44'),
(232, 'rushabhtraders@gmail.com', '2016-01-07 05:43:50'),
(233, 'pritamparab1981@gmail.com', '2016-01-07 07:32:08'),
(234, 'nikitaupase@gmail.com', '2016-01-07 08:18:27'),
(235, 'tusharr33@gmail.com', '2016-01-07 09:53:51'),
(236, 'arunneeta@gmail.com', '2016-01-07 15:30:22'),
(237, 'rohans625@gmail.com', '2016-01-07 15:36:22'),
(238, 'meenalarekar06@gmail.com', '2016-01-07 15:48:36'),
(239, 'khannakarishma@yahoo.com', '2016-01-07 16:33:29'),
(240, 'vilaspp@bharatpetroleum.in', '2016-01-07 16:51:37'),
(241, 'tutuabhay@gmail.com', '2016-01-07 18:03:27'),
(242, 'sujatalikhan111@gmail.com', '2016-01-07 19:10:37'),
(243, 'nehankapadia@gmail.com', '2016-01-08 03:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `registrationsports`
--

CREATE TABLE IF NOT EXISTS `registrationsports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationsports`
--

INSERT INTO `registrationsports` (`id`, `name`) VALUES
(1, 'Table Tennis'),
(2, 'Tennis'),
(3, 'Badminton'),
(4, 'Squash'),
(5, 'Swimming'),
(6, 'Basket ball'),
(7, 'Volleyball'),
(8, 'Handball'),
(9, 'Judo');

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
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;

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
(65, '', '', '1981-09-10', '', 0, '', '', '', '2015-09-10 06:03:16'),
(66, '', '', '2015-09-24', '', 3, '', '', '', '2015-09-24 13:01:43'),
(67, '', '', '2015-09-24', '', 3, '', '', '', '2015-09-24 13:01:43'),
(68, '', '', '2015-10-01', '', 1, '', '', '', '2015-10-01 04:44:23'),
(69, '', '', '2015-10-01', '', 0, '', '', '', '2015-10-01 04:44:46'),
(70, '', '', '2015-10-03', '', 2, '', '', '', '2015-10-03 04:55:18'),
(71, 'Mumbai Pradesh Arya Vidya Sabha, Gurukul Educational Institutions', 'Mumbai Pradesh Arya Vidya Sabha, Gurukul Educational Institutions, Tilak Rd. Ghatkopar East Mumbai 400077', '0000-00-00', 'Shri Mahesh Gandhi', 3, 'gurukul.acdcl@gmail.com', '9820086816', '9820089216', '2015-11-07 13:46:48'),
(72, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 09:17:00'),
(73, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 11:28:15'),
(74, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 11:28:34'),
(75, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 11:28:46'),
(76, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 11:30:00'),
(77, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 11:31:51'),
(78, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 11:33:40'),
(79, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 12:23:03'),
(80, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 12:23:23'),
(81, '', '', '2015-11-18', '', 0, '', '', '', '2015-11-18 12:24:03'),
(82, 'RP WAGH school and junior college', 'PAR NAKA VASAI WEST THANE 401201', '2004-11-01', '9527656847', 1, 'achi.madhav143@gmail.com', '9527656847', '', '2015-11-19 08:12:06'),
(83, 'D.Y.Patil School', 'Worli Adarsh nagar', '2015-11-20', '9821430948', 1, 'Pratiktambe2@gmail.com', '9821430948/8898635488', '', '2015-11-20 20:15:39'),
(84, 'public english jr college', 'vakola aram society santacruz (E)', '2015-11-26', '7039565831', 1, 'manish00.mg@gmail.com', '7039565831', '', '2015-11-24 03:46:23'),
(85, 'Kendriya vidyalaya', 'IIT Powai', '2015-11-30', '', 1, '', '', '', '2015-11-30 11:37:00'),
(86, 'Podar Internatoinal School-CBSE, Powai.', 'Podar Internatoinal School-CBSE, Powai. Hiranandani Knowldge Park, Opp. Dr. L.H. Hiranandani Hospital,Powai. Mumbai -400076.', '2014-06-02', 'Mr. Kunal , Ms. Poonam,', 2, 'kunalr90@gmail.com', '8082225691', '', '2015-12-03 05:26:28'),
(87, '', '', '0000-00-00', '', 1, '', '', '', '2015-12-03 05:26:39'),
(88, 'J.b vacha high school', 'Parsi colony , dadar', '2015-12-09', '', 3, 'Priyatosh 24@gmail.com', '9820234357', '', '2015-12-09 17:20:09'),
(89, 'J.b vacha high school', 'Parsi colony , dadar', '2015-12-09', '', 3, 'Priyatosh 24@gmail.com', '9820234357', '', '2015-12-09 17:20:10'),
(90, 'J.b vacha high school', 'Parsi colony , dadar', '2015-12-09', '', 3, 'Priyatosh 24@gmail.com', '9820234357', '', '2015-12-09 17:20:10'),
(91, 'J.b vacha high school', 'Parsi colony , dadar', '2015-12-09', '', 3, 'Priyatosh 24@gmail.com', '9820234357', '', '2015-12-09 17:20:10'),
(92, 'J.b vacha high school', 'Parsi colony , dadar', '2015-12-09', '', 3, 'Priyatosh 24@gmail.com', '9820234357', '', '2015-12-09 17:20:10'),
(93, 'J.b vacha high school', 'Parsi colony , dadar', '2015-12-09', '', 3, 'Priyatosh 24@gmail.com', '9820234357', '', '2015-12-09 17:20:10'),
(94, 'J.b vacha high school', 'Parsi colony , dadar', '2015-12-09', '', 3, 'Priyatosh 24@gmail.com', '9820234357', '', '2015-12-09 17:20:10'),
(95, 'J.b vacha high school', 'Parsi colony , dadar', '2015-12-09', '', 3, 'Priyatosh 24@gmail.com', '9820234357', '', '2015-12-09 17:20:10'),
(96, '', '', '2015-12-13', '', 0, '', '', '', '2015-12-13 05:48:23'),
(97, 'J.D.T HIGH SCHOOL', 'kurar village', '2015-12-15', '9702909927', 0, '', '9867081427', '', '2015-12-15 05:56:05'),
(98, 'NORTH POINT SCHOOL', 'Sect-6, Plot No - 22/23, Koparkhairne, Navi Mumbai', '2015-12-18', '', 1, '', '', '', '2015-12-18 13:55:58'),
(99, 'Gopi birla memorial school', 'Walkeshwar mumbai', '2015-12-19', '', 0, '', '', '', '2015-12-19 16:53:48'),
(100, '', '', '2015-12-21', '', 0, '', '', '', '2015-12-21 08:17:41'),
(101, '', '', '2015-12-21', '', 0, '', '', '', '2015-12-21 08:17:41'),
(102, 'North Point school', 'koperkhairne, Navi mumbai', '2015-12-21', '', 0, '', '9594511531', '', '2015-12-21 09:00:26'),
(103, '', '', '2015-12-21', '', 0, '', '', '', '2015-12-21 10:07:41'),
(104, 'Atomic energy central school', 'Boisar', '2015-12-25', '', 1, '', '', '', '2015-12-22 03:34:58'),
(105, 'swadhyay bhavan', 'matunga', '2015-12-23', 'suresh jamdade', 0, 'jsuresh922@gmail.com', '8108486412', '', '2015-12-23 01:41:24'),
(106, 'Our Lady of salvation', 'Dadar wast', '2015-12-27', '9820692220', 1, '', '9820692220', '959483011', '2015-12-23 07:58:02'),
(107, 'Balbharti Jr.clg', 'Kandivli wesr', '2015-12-23', 'Akshay Sayta', 0, '', '9619717250', '', '2015-12-23 08:54:03'),
(108, 'Balbharti Jr.clg', 'Kandivli west', '2015-12-22', 'Akshay Sayta', 2, 'Snirali40@gmail.com', '9619717250', '', '2015-12-23 08:58:55'),
(109, 'vikrnt', '', '2015-12-23', '', 0, '', '9987761238', '', '2015-12-23 14:46:49'),
(110, '', '', '2015-12-23', '', 0, '', '', '', '2015-12-23 15:21:41'),
(111, 'Balbharati collage', 'Swami vivekanand marg kandivali west Mumbai 400-067', '2015-12-24', '8692096993', 0, 'bparmar095@gmail.com', '8692096993', '9867697767', '2015-12-24 16:41:12'),
(112, '', '', '2015-12-25', 'Krisha sanghavi', 0, '', '8976600003', '', '2015-12-25 09:14:23'),
(113, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:16'),
(114, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:19'),
(115, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:19'),
(116, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:19'),
(117, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:20'),
(118, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:20'),
(119, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:20'),
(120, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:20'),
(121, 'ramsheth thakur public school, kharghar', 'plot no.11, sector 19, kharghar,navi mumbai-410210', '2015-12-26', 'santosh kumar gupta', 0, 'santi61069@yahoo.co.in', '09819706699', '', '2015-12-26 04:07:20'),
(122, 'dav thane west', 'tulsidham', '2015-12-26', 'milind raut', 1, '', '9702820879', '', '2015-12-26 18:10:38'),
(123, 'dav thane', 'tulsidham', '0000-00-00', 'milind raut', 1, '', '9702820879', '', '2015-12-26 18:11:49'),
(124, '', '', '2015-12-27', '', 0, '', '', '', '2015-12-27 04:53:42'),
(125, 'Himanshu ramji', 'Ryan international school (Sanpada)', '2003-05-05', 'Sunita ram', 0, 'Ramjihemu@ gmail.com', '8454962482', '-', '2015-12-27 07:58:27'),
(126, 'DAV Nerul', '', '2015-12-27', 'Hamraaz', 0, '', '9920120048', '', '2015-12-27 09:02:19'),
(127, 'ramsheth thakur pubic school', '', '2015-12-27', '', 1, 'kushalsc@yahoo.com', '9869194240', '', '2015-12-27 12:12:40'),
(128, '', '', '2015-12-27', '', 0, '', '', '', '2015-12-27 13:48:19'),
(129, 'smt sulochanadevi singhania school', 'jekegram thane (w)', '2015-12-27', '', 0, '', '', '', '2015-12-27 15:27:54'),
(130, 'smt.sulochanadevi singhania school', 'jekegram thane(w)', '0000-00-00', '', 0, '', '', '', '2015-12-27 15:29:15'),
(131, 'P g Garodia', 'Garodia Ghatkopar east', '2015-12-27', 'Soumya Bhanushali', 1, 'montyhealing@gmail.com', '9022527011', '21027881', '2015-12-27 19:32:52'),
(132, '', '', '2015-12-29', '', 0, '', '', '', '2015-12-29 17:20:05'),
(133, '', '', '2003-03-23', '', 0, '', '', '', '2016-01-03 13:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `schoolregistrationsports`
--

CREATE TABLE IF NOT EXISTS `schoolregistrationsports` (
  `id` int(11) NOT NULL,
  `schoolregistration` int(11) NOT NULL,
  `registrationsports` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

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
(49, 65, 8),
(50, 68, 6),
(51, 68, 3),
(52, 70, 1),
(53, 70, 2),
(54, 71, 1),
(55, 71, 2),
(56, 71, 3),
(57, 71, 7),
(58, 71, 8),
(59, 71, 6),
(60, 71, 4),
(61, 82, 5),
(62, 83, 5),
(63, 84, 3),
(64, 85, 7),
(65, 86, 1),
(66, 86, 2),
(67, 86, 3),
(68, 86, 4),
(69, 86, 5),
(70, 88, 7),
(71, 89, 7),
(72, 90, 7),
(73, 91, 7),
(74, 92, 7),
(75, 93, 7),
(76, 94, 7),
(77, 95, 7),
(78, 96, 9),
(79, 97, 3),
(80, 98, 3),
(81, 99, 8),
(82, 100, 3),
(83, 101, 3),
(84, 102, 3),
(85, 103, 3),
(86, 104, 3),
(87, 105, 7),
(88, 105, 6),
(89, 106, 5),
(90, 107, 3),
(91, 110, 2),
(92, 111, 3),
(93, 111, 6),
(94, 112, 1),
(95, 113, 1),
(96, 113, 5),
(97, 114, 1),
(98, 114, 5),
(99, 115, 1),
(100, 115, 5),
(101, 116, 1),
(102, 116, 5),
(103, 117, 1),
(104, 117, 5),
(105, 118, 1),
(106, 118, 5),
(107, 119, 1),
(108, 119, 5),
(109, 120, 1),
(110, 120, 5),
(111, 121, 1),
(112, 121, 5),
(113, 122, 5),
(114, 125, 1),
(115, 126, 1),
(116, 127, 1),
(117, 128, 3),
(118, 131, 1),
(119, 133, 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_banner`
--

INSERT INTO `sfa_banner` (`id`, `name`, `status`, `order`) VALUES
(1, 'Table Tennis', 1, 1),
(2, 'Tennis', 1, 2),
(3, 'Badminton', 1, 3),
(4, 'Squash', 1, 4),
(5, 'Swimming', 1, 5),
(6, 'BasketBall', 1, 6),
(7, 'VolleyBall', 1, 7),
(8, 'HandBall', 1, 8),
(9, 'Judo', 1, 9);

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
(1, 1, 'tabletennis11.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', '', 'Thank-You-Mumbai.png', 1, '                                                                    ', '', '0000-00-00'),
(2, 1, 'tennis11.png', 'SPORTS FOR ALL 2015, MUMBAI', '', 'Top-Moment.png', 2, '                                                                    ', '24th- 31st December', '0000-00-00'),
(3, 1, 'batminton21.png', 'REGISTER YOUR SCHOOL NOW', '', 'WINNER.png', 3, 'only member schools will be permitted to participate at SFA Events.', '15th October 2015', '0000-00-00'),
(4, 1, 'sqaush1.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', '', 'champions.png', 4, '                                                                    ', '', '0000-00-00'),
(5, 1, 'aquatics1.png', 'SPORTS FOR ALL 2015, MUMBAI', '', 'Thank-You-Mumbai1.png', 5, '                                                                    ', '24th- 31st December', '0000-00-00'),
(6, 1, 'basketball1.png', 'REGISTER YOUR SCHOOL NOW', '', 'Top-Moment1.png', 6, 'only member schools will be permitted to participate at SFA Events.', '15th October 2015', '0000-00-00'),
(7, 1, 'volleyball1.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', '', 'WINNER1.png', 7, '                                                                    ', '', '0000-00-00'),
(8, 1, 'handball1.png', 'SPORTS FOR ALL 2015, MUMBAI', '', 'Thank-You-Mumbai2.png', 8, '                                                                    ', '24th- 31st December', '0000-00-00'),
(9, 1, 'judo.png', 'REGISTER YOUR SCHOOL NOW', '', 'champions1.png', 9, 'only member schools will be permitted to participate at SFA Events.                                         ', '15th October 2015', '0000-00-00');

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
  `name` varchar(255) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `matchdate` date NOT NULL,
  `round` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_match`
--

INSERT INTO `sfa_match` (`id`, `sports`, `sportscategory`, `agegroup`, `timestamp`, `status`, `resulttimestamp`, `matchresult`, `name`, `starttime`, `endtime`, `gender`, `matchdate`, `round`) VALUES
(1, 6, 1, 8, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', 'court-01', '00:09:00', '00:00:00', 1, '2015-12-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sfa_matchplayed`
--

CREATE TABLE IF NOT EXISTS `sfa_matchplayed` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `team` int(11) DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
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
  `json` varchar(255) NOT NULL,
  `school` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `sfa_mediastudents`
--

CREATE TABLE IF NOT EXISTS `sfa_mediastudents` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `mediaitem` int(11) NOT NULL,
  `status` int(11) NOT NULL
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_round`
--

INSERT INTO `sfa_round` (`id`, `sports`, `sportcategory`, `year`, `agegroup`, `level`, `root`) VALUES
(1, 0, 1, 0, 0, 'round -01', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_school`
--

INSERT INTO `sfa_school` (`id`, `name`, `email`, `contact`, `image`, `address`, `location`, `biography`, `authority`) VALUES
(1, 'Jamnabai Narsee School', 'principal@jns.ac.in', '022-26146262/022-26187575', '', 'Narsee Monjee Marg, N.S. Road No.7 , J.V.P.D Scheme , Vile Parle ( W ) , Mumbai-400049. Maharashtra , India', 'Vile Parle', '', 'Zeenat Bhojabhoy/Rekha Nair'),
(2, 'Bhaktivedanta Swami Mission School', 'bhaktivedantaschool_mumbai@yahoo.com', '26330999/26330996', '', 'Off Sundervan lane , Shastri Nagar , Andheri ( W ) , Mumbai-400053', 'Andheri', '', 'Sudhir Chettiar'),
(3, 'Guru Gobind Singh English High School', 'gurugobindsingh.ehs@gmail.com', '2225740759', '', 'Group No.6 , Tagore Nagar, Vikhroli ( E ) , Mumbai 400073', 'Vikhroli', '', 'Dinesh Hatim'),
(4, 'Hansraj Morarji Public School ', 'vtawasarmol@gmail.com', '022-26232467', '', 'Hansraj Campus , Munshi Nagar , D.N. Road, Near. Bhavanas College Andheri ( W ) Mumbai-58', 'Andheri', '', 'Vijay Awasarmol'),
(5, 'Mary Immaculate Girls Highschool', '', '28931311', '', 'Mary Immaculate Girls High School Mount Poinsur Borivali ( W ) Mumbai-400103', 'Borivali', '', 'Mr. Ganesh Chwan'),
(6, 'Jamnabai Narsee International School', '', '', '', '', '', '', ''),
(7, 'Utpal Shanghvi School', 'info@usgschool.org', '022-26204298', '', 'East-West Road No 3. JVPD Scheme, Juhu, Mumbai-400049', 'Juhu', '', 'Mr.Prabhakar Singh'),
(10, 'St. Xaviers High School (Airoli)', '', '', '', '', 'Airoli', '', ''),
(11, 'Childrens Academy ', 'contactmalad@children-academy.org', '28835014/28835387', '', 'Bachani Nagar , Malad ( East ) Mumbai-97', 'Malad', '', 'Aliyan Dabre'),
(12, 'Dnyan Pushpa Vidya Niketan ', 'dpvn.education@gmail.com/dpvn.saraheducation@gmail.com', '255771152/27571045', '', 'Dnyan Pushpa Vidya Niketan & Jr.College Sector-4 . C.B.D . Belapur- Navi Mumbai', 'C.B.D Belapur', '', 'Mr. Jeetendra Musale'),
(13, 'D.Y.Patil International School', 'www.dypisworli.in', '022-24217999', '', 'Adarsh Nagar , Mumbai-400030', 'Worli', '', 'Mahesh Shinde'),
(14, 'Vibgyor School', '', '', '', '', '', '', ''),
(15, 'JBCN International School (Parel)', 'pehead.parel@jbcnschool.edu.in', '022-24102553/24102152', '', 'Yogi Tower ( Citi Tower Building ) , Dr . S.S Rao Road , Opp Ashok Tower , Behind ITC Hotel, Parel, Mumbai - 400012', 'Parel', '', 'Mr. Prasad Rodrigues'),
(16, 'P.G.Garodia School (ICSE)', 'school@pggarodia.org', '02225063157/25061133', '', '153, Garodia Nagar , 90 Feet Rd, Ghatkopar ( East ) Mumbai - 4000077', 'Ghatkopar', '', 'R.R Mishra Vinod Patil'),
(17, 'Fatima High School', 'surjeet@marcosquay.com', '', '', 'Farima High School , Near Vidyavihar Station . Pin Code Mumbai-86', 'Vidyavihar', '', 'Surjeet Shetty'),
(18, 'Bal-Bharatis M.J.Pancholia High School', 'bhavisha.desai@balbharti.edu', '28633713', '', 'Swami Vivekanand Road Kandivali ( W ) Mumbai -400067', 'Kandivali', '', 'Ms.Bhavisha Desai'),
(19, 'Ryan International School (Kandivali)', 'ris.kandivali@ryangroup.org', '28706063', '', '90 Ft Road, Asha Nagar, Thakur Complex Kandivali ( E ) 400101', 'Kandivali', '', 'Girjashankar'),
(20, 'Swadhyay Bhavan School', 'jsuresh922@gmail.com', '24096982', '', 'A / R.F Ahmed Kidwai Road Matunga . 19', 'Matunga', '', 'Suresh Jamdade'),
(21, 'Lilavatibai Podar Senior Secondary School-ISC', 'lphscse@gmail.com', '02267111111', '', 'Tower Building, Saraswati Road Santacruz ( West ) Mumbai 400054', 'Santaruz', '', 'Mr. Mecky Lobo'),
(22, 'Bal Bharati Public School ', 'bbpskhrnm@yahoo.com', '2227741641', '', 'Plot No-5 Sec-4 , Khargar Navi Mumbai', 'Khargar', '', 'Mr. Yatin S.A'),
(23, 'Ryan International School (Nerul)', 'ris.nerul@ryangroup.com', '27719687', '', 'Ryan International School Plot No 1 A Sector 19 A Near Uran Phata Nerul ( E )', 'Nerul', '', 'Mr. Rahul Sakhare'),
(24, 'Bunts Sanghas S.M.Shetty High School & Junior College', 'school@smshettyinstitute.in', '61327373', '', 'CTS No 8 & 10 Jal Vayu Vihar Hiranandani Kopari Powai', 'Powai', '', 'Mr. Nagalkar Sanjay'),
(25, 'Dhirubhai Ambani International School', '', '', '', '', '', '', ''),
(26, 'S.V.K.M.C.N.M. School', 'cnmschool@gmail.com', '2242333000', '', 'Dadabhai Road , Vile Parle West Mumbai 56', 'Vile Parle', '', 'Mriturijay Singh'),
(27, 'Parle Tilak Vidyalaya English Medium School', 'ptvengmed-school@rediffmail.com', '26169027/26118735', '', 'Hanuman Road, Vile Parle East , Mumbai 400057', 'Vile Parle', '', 'Jitendra Y . Patil Paresh V. Ipte '),
(28, 'Kapol Vidyanidhi International School', 'kapolvp1@yahoo.co.in', '28616071/28613915', '', 'Kapol Vidhyanidhi International School (ICSE), Mahavir Nagar, Near Kamla Vihar, Kandivali (w ), Mumbai - 400067', 'Kandivali', '', 'Nilambari Mandlik'),
(29, 'Gundecha Education Academy', 'info@gundechaedu.org', '66776768/66401716', '', 'Valley Of Flowers, Thakur Village, Kandivali (East), Mumbai - 400101', 'Kandivali', '', 'Parag Kamble'),
(30, 'JBCN International School (Oshiwara)', 'info.osh@jbcnschool.edu.in/pe.osh@jbcnschool.edu.in', '02226302441/5100', '', 'Harrow Avenue, Off. Andheri Link Road, Behind Tarapore Towers, Oshiwara, Andheri West, Mumbai - 400058', 'Andheri', '', 'Ganesh Varma'),
(31, 'Gopi Birla Memorial School', 'birlagopi@gmail.com', '022-23696872', '', '68, Walkeshwar Road, Mumbai - 400006', 'Walkeshwar', '', 'Mr. Shivadhar Yadav'),
(32, 'Father Agnel Multipurpose School', 'ravinairangels@gmail.com', '', '', 'Sector 9.A. Vashi, Navi Mumbai - 400703', '', '', 'Ravindran Nair'),
(33, 'North Point School  (ICSE )', 'northpointschool@rediffmail.com', '02227545475/1415/1416', '', 'Sect-6, Plot No - 22/23, Koparkhairne, Navi Mumbai', 'Koparkhairne', '', 'Prakash Mokal'),
(34, 'JBCN International School (Borivali)', 'info@jbcnschool.edu.in', '28917930', '', 'Plot CTS No. 96, Remison Towers, Baburao Ranade Marg, Opp. Linion Bank Staff Quarters, Borivali West, Mumbai - 400103', 'Borivali', '', 'Mr. Vaibhav Patwardhan'),
(35, 'Sir.J.J.Fort Boys High School', 'sirj.jfortboyshighschool@gmail.com', '22626155', '', '209 Dr. D.N. Road, Mumbai - 400001', 'Fort', '', 'Arvind Kumar Rai'),
(36, 'Balmohan Vidyamandir', 'balmohan@vsnl.com', '24449654', '', 'Senapati Bapat Marg, Shivaji Park Dadar, Mumbai', 'Dadar', '', 'Ravindra Sonawane'),
(37, 'Mohammadi Urdu High School', 'muhs.school@gmail.com', '022-25962896', '', 'Haji Ayyub Khan Khududud Khan Marg, Sonapur, Bhandup (w ), Mumbai - 78', 'Bhandup', '', 'Farooqui Jamshed'),
(38, 'K.E.S. Little Angels School', 'keslas_23@hotmail.com', '02143-255389', '', 'Near Engineering College, Pen, Beside Mumbai - Goa Highway, Pen-Raigad.', 'Pen Raigad', '', 'Mrs Darshana N. Mhatre'),
(39, 'Pauls Convent High School', '', '24168534', '', 'Dr. Ambedkar Road, Dadar, Mumbai - 14', 'Dadar', '', 'Radhika Mdhankal'),
(40, 'Young Ladies High School', 'Younglhs@rediffmail.com', '22072883', '', 'Young Ladies High School 33, Murzban Road, Fort, Mumbai - 400001', 'Fort', '', 'Mrs. Beatrice D?Souza'),
(41, 'The New Era School', 'newera_school@rediffmail.com', '23806623', '', '17, N.S. Patkar Marg, Mumbai - 400007', 'Grant Road', '', 'Rizwan Bashir Shah'),
(42, 'Springfield high school ', 'rizvispringschool@gmail.com', '26050623', '', 'Rizvi Education Complex, Off. Carter Road, Bandar (w )', 'Bandra', '', 'Umesh Poojari'),
(43, 'J.D.Bharda High School ', '', '', '', '', '', '', ''),
(44, 'Madh Uccha Prathamik Marathi School', '', '', '', 'Madh Goan, Near Ice Factory, Madh Road, Malad (w ), Mumbai - 400061', 'Malad', '', 'Mrs. Swati Vilas Pujapure'),
(45, 'New Horizon Public School', '', '2227461567', '', 'Khanda Colony, Sector 13', 'Panvel', '', 'Prashant R. Mahalle'),
(46, 'S.E.S. English Medium School', '', '', '', '', '', '', ''),
(47, 'Don Bosco School (Nerul)', 'donbosconerul@gmail.com', '2227712031', '', 'Sector 42A, Nerul, Seawood West, Opp - ?D? Mart, Navi Mumbai', 'Nerul', '', 'Shilesh Jadhav'),
(48, 'Kendriya Vidyalaya (Bhandup)', 'kvbhandup78@gmail.com', '25783004', '', 'Kendriya Vidhyalaya, Bhandup, NCN Colony, Kanjur Marg (w), Mumbai - 400078', 'Kanjur Marg', '', 'Sandhya R. Singh'),
(49, 'Ramsheth Thakur Public School', 'rtpsfrontoffice@gmail.com', '0222-7744410', '', 'Plot No. 11 & 1A Sector - 19, Kharghar', 'Kharghar', '', 'Mr. Mandar Mumbaikar'),
(51, 'Antonio Dsouza High School', 'jolly8431@gmail.com', '', '', 'Gloria Church Compound, Sant Savita Marg, Byculla (E ) - 400027', 'Byculla', '', 'Jolly Dias'),
(52, 'ICL High School ', 'iccschoolvashi@yahoo.co.in', '27665453', '', 'Sector 15/16, Vashi, Navi Mumbai', 'Vashi', '', 'Mrs Sunanda Akev'),
(53, 'ICLES Monami High School', 'monami25@gmail.com', '27833928', '', 'Sector 21, Turbhe Complex, Turbhe, Navi Mumbai', 'Turbhe', '', 'Mrs. Anita B. Kudale'),
(54, 'Ajmera Global School', 'info@ags.org.in', '28332674', '', 'Yogi Nagar, Eksar Road, Borivali (w), Mumbai - 400092', 'Borivali', '', 'Ms. Pushpalata Ajit'),
(55, 'Gurukul Educational Institution', 'gurukul.acdcl@gmail.com', '022-25016239/25016425', '', 'Tilak Road, Ghatkopar', '', '', 'Mrs. Daizy'),
(56, 'Podar International School (IB & CIE)', 'tapas0088@gmail.com', '022-26487321', '', 'Rampee Emerald Building, Near Shamrao Vitthal Bank, S.V. Road, Khar (w ), Mumbai -400052', 'Khar', '', 'Tapas Banerjee'),
(57, 'Smt.Sulochanadevi Singhania School', '', '', '', '', '', '', ''),
(58, 'Smt. R.S.B Arya Vidya Mandir (JUHU)', '', '66933700', '', '287 Arya Vidya Mandir Marg, JVPD Scheme, Mumbai -400049', 'Juhu', '', 'Mrs. Smitha Sulakhe/Mr. Yadav/Mr. Desmond'),
(59, 'Umedbhai Patel English School', 'upes76@yahoo.co.in', '28723883', '', 'Sunder Nagar, S.V Road , Malad (W), Mumbai 400064.', 'Malad', '', 'Rahul Modi'),
(60, 'Bombay Cambridge School', '', '28210309/28341482', '', 'Chakala Off Sahar Road, Andheri (E). Mumbai', 'Andheri', '', 'R.K Singh'),
(61, 'St.Joseph''s High School', 'josephhighschool@gmail.com', '26184277', '', 'Juhu Church, Juhu, Mumbai - 400049', 'Juhu', '', 'Vijay Pereira'),
(62, 'The G.M.E.S High School', 'ramanchary@yahoo.in', '022-26114044', '', '5-C Tilak Vidyalaya Road, Vile Parle (W). Mumbai', 'Vile Parle', '', 'Raman Chary'),
(63, 'Divine Child High School', 'divinechildandheri@rediffmail.com', '022-28367411', '', 'Sir M.V Road, Andheri (E), Mumbai - 400093', 'Andheri', '', 'Amar Gaikwad'),
(64, 'Peoples Education Society English Medium School', '', '9619872240', '', 'Mith Bandar Road, Kopari Thane (E)', 'Thane', '', 'Satish G Jadhav'),
(65, 'Jyotsna Dhirajlal Talakchand High School', 'jdthighschooleng05@yahoo.com', '022-28400028/022-28410952', '', 'Kurar Village Off Western Express Highway, Malad (E), Mumbai - 400097', 'Malad', '', 'Vibha Mishra'),
(66, 'Bharat English High School', '', '022-25321662', '', 'Bharat Bhavan, Kopari Colony, Thane (E)', 'Thane', '', 'Desale Raghunath Gopal'),
(67, 'North Mumbai Welfare Societys High School', '', '022-25150444', '', 'Rifle Range,Ghatkopar (W),Mumbai - 400086', 'Ghatkopar', '', 'Vikrant Rajbhar'),
(68, 'Kajupada B.M.C U.P Hindi School no', '', '', '', 'Sakinaka Pipeline, Kamani Kajupada, Mumbai 400072.', 'Sakinaka', '', 'Sanjay Kamble'),
(69, 'DAV Public School,Nerul', 'sonyzacharias@hotmail.com', '022-27714017', '', 'Plot no.34, Sec-48,Nerul', 'Nerul', '', 'Sony Zacharias'),
(70, 'Aditya Birla World Academy', 'aleckalj@adityabirlaworldacademy.com', '022-23528400', '', 'Vastu Shilp Annexe, Gamadia colony, JD Road Tardeo, Mumbai, Maharashtra 400007', 'Tardeo', '', 'Marcellus John'),
(71, 'Rafinagar Municipal Hindi School', 'marutigorad201282@gmail.com', '9224966339', '', 'Rafinagar, Near Jatari English School,Shivajinagar,Govandi.', 'Govandi', '', 'Maruti B Gorad'),
(72, 'Shivaji Nagar Municipal Urdu School No.4', 'mahendradhoke_1970@gmail.com', '9224559870', '', 'Marathi BMC School No 2\nNew Building,Near Ambedkar Maidan,\nShivaji Nagar,Govandi, Mumbai - 400043', 'Govandi', '', 'Mahendra Dhoke'),
(73, 'K.K Marg Municipal Hindi School No.1', '', '9967358574', '', 'K.K Marg, Near Jacob Circle, Mahalaxmi, Mumbai 400011.', 'Mahalaxmi', '', 'Nitin Yelave'),
(74, 'Sanjay Nagar B.M.C Hindi School', 'pskurane@gmail.com', '9096420809', '', 'Baingan Wadi,Govandi, Mumbai 400043', 'Govandi', '', 'Pradnyavant Kurane'),
(75, 'KK Marg Hindi  School 2', '', '', '', '', '', '', ''),
(76, 'Vakola Hindi School', '', '', '', '', '', '', ''),
(77, 'Pant Nagar Hindi School 1', '', '', '', '', '', '', ''),
(78, 'Pant Nagar Hindi School 2', '', '', '', '', '', '', ''),
(79, 'Pali Jimbai MPS School', '', '', '', '', '', '', ''),
(81, 'Taremarg Hindi School', '', '', '', '', '', '', ''),
(82, 'S.L. Tamil', '', '', '', '', '', '', ''),
(83, 'S.L Marathi', '', '', '', '', '', '', ''),
(84, 'S.L Hindi', '', '', '', '', '', '', ''),
(85, 'Marol Marathi School', '', '', '', '', '', '', ''),
(86, 'Vakola Marathi School', '', '', '', '', '', '', ''),
(87, 'Dr Radha Krishna Hindi School', '', '', '', '', '', '', ''),
(88, 'Amolakh Amichand Bhimji Vividhalakshi Vidyalaya', '', '', '', '', '', '', ''),
(89, 'Saraswati Secondary School', '', '', '', '', '', '', ''),
(90, 'Jogeshwari Gufa Hindi School', '', '', '', '', '', '', ''),
(91, 'Oshiwara Hindi School - 1', '', '', '', '', '', '', ''),
(92, 'Oshiwara Marathi School', '', '', '', '', '', '', ''),
(93, 'Oshiwara Hindi School - 2', '', '', '', '', '', '', ''),
(94, 'KHD Nagar MPS', '', '', '', '', '', '', ''),
(95, 'Santacruz East Hindi', '', '', '', '', '', '', ''),
(96, 'Narealvadi Hndi School', '', '', '', '', '', '', ''),
(97, 'Parichimbay Hindi School', '', '', '', '', '', '', ''),
(99, 'St Anthonys Girls High School', '', '', '', '', '', '', ''),
(100, 'Campion School', '', '', '', '', '', '', ''),
(101, 'Apeejay School Nerul Navi Mumbai', '', '', '', '', '', '', ''),
(102, 'L R + S M Vissanji Academy', '', '', '', '', '', '', ''),
(103, 'Our Lady Of Salvation School', '', '', '', '', '', '', ''),
(104, 'I.E.S Digambar Patkar Vidyalaya ', '', '', '', '', '', '', ''),
(105, 'National English School', '', '', '', '', '', '', ''),
(108, 'Santacruz West Municipal School', 'thssw2015@gmail.com', '022-26489839', '', 'Santacruz West, AkbarAli Road, Sanpeth Market, Tanklane,Mumbai 400054', '', '', 'Deepak Vartak'),
(110, 'Queen Marys High School', '', '', '', '', '', '', ''),
(111, 'Ryan International School (Sanpada)', '', '', '', '', '', '', ''),
(112, 'Pant Nagar Hindi School 3', '', '', '', '', '', '', ''),
(113, 'The Dadar Parsee Youth Assembly High School', '', '', '', '', '', '', ''),
(114, 'J V Scheme Hindi School (Mulund)', '', '', '', '', '', '', ''),
(115, 'R P Wagh School', '', '', '', '', '', '', ''),
(116, 'St.Peters School', '', '', '', '', '', '', ''),
(117, 'Ryan International School (Goregaon)', '', '', '', '', '', '', ''),
(118, 'D.A.V Public School (Airoli)', '', '', '', '', '', '', ''),
(119, 'Holy Cross Convent School (Mira Road)', 'hcssmiraroad@gmail.com', '281111964', '', 'Sheetal Nagar,Mira road (E),Thane-401107', 'Thane', '', 'Shailesh Deshpande'),
(120, 'R.B.K School (Thane)', 'mathew@rbkschool.org', '9011255184/28119825', '', 'Behind Kanakia Police Station,Beverly Park,\nMira road (E). Thane - 401107', 'Thane', '', 'Shailesh Deshpande'),
(121, 'Santhome Public School', '', '9969599535', '', 'Near Shalom Residency,Mira Road', 'Mira road', '', 'Allen'),
(122, 'Chakala Municipal Hindi School', 'swati.madan@gmail.com', '9769944482', '', 'Tarun Bharat Society,Chakala, Andheri(E), Mumbai-400099', 'Andheri', '', 'Swati Madan Manjrekar'),
(123, 'Dr. Sarvepalli Radhakrishnan Vidyalaya (Borivali)', 'dsrv_b@bcgschools.org', '28020326', '', 'Geetanjali Complex 2,Saibaba Nagar,\nOff S.V Road, Borivali (W). Mumbai - 400092', 'Borivali', '', 'Sachin Parab'),
(124, 'Panna English High School', 'charupehs@gmail.com', '7506252520/9890944859', '', 'Hendrapada,Kulgaon,Badlapur- 421503', 'Badlapur', '', 'Vikram Betkar'),
(125, 'Little Angels High School', '', '24071037/24044304', '', 'Plot no 6, Shastri Lane,Sion, Mumbai - 400022', 'Sion', '', 'Priyanka Malkar'),
(126, 'Vibgyor School (Airoli)', '', '', '', '', '', '', ''),
(127, 'Kendriya Vidyalaya (IIT Powai)', 'kviitmumbai@gmail.com', '25725061', '', 'Powai,', 'Powai', '', 'S.K Wale'),
(128, 'Swami Vivekanand High School', '', '', '', '', '', '', ''),
(129, 'Ryan International School (Jogeshwari)', '', '', '', '', '', '', ''),
(130, 'Seven Square Academy', '', '', '', '', '', '', ''),
(131, 'Bhavan''s A.H Wadia School', '', '', '', '', '', '', ''),
(132, 'Dr. Sarvepalli Radhakrishnan Vidyalaya (Malad)', '', '', '', '', '', '', ''),
(133, 'Manjunath Vidyalaya', '', '', '', '', '', '', ''),
(134, 'St.John The Baptist High School', '', '', '', '', '', '', ''),
(135, 'St. John High School Dombivali', '', '', '', '', '', '', ''),
(136, 'Navjeevan Vidyamandir', '', '', '', '', '', '', ''),
(137, 'Sheth M.A High School', '', '', '', '', '', '', ''),
(138, 'Jankidevi Public School (Andheri)', '', '', '', '', '', '', ''),
(139, 'Convent High School (Prabhadevi)', '', '', '', '', '', '', ''),
(140, 'Pawar Public School', '', '', '', '', '', '', ''),
(141, 'Gokuldham School', '', '', '', '', '', '', ''),
(142, 'A.K Joshi English Medium High School', '', '', '', '', '', '', ''),
(143, 'Greenlawns High School', '', '', '', '', '', '', ''),
(144, 'St.Blaise High School', '', '', '', '', '', '', ''),
(145, 'Shreeram High School', '', '', '', '', '', '', ''),
(146, 'St.Sebastian Goan High School', '', '', '', '', '', '', ''),
(147, 'Lakshadham School', '', '', '', '', '', '', ''),
(148, 'Delhi Public School (Nerul)', '', '', '', '', '', '', ''),
(149, 'Bai Kabi Bai English School', '', '', '', '', '', '', ''),
(150, 'St. Annes High School', '', '', '', '', '', '', ''),
(151, 'Michale High School', '', '', '', '', '', '', ''),
(152, 'Guru Nanak High School (Kalyan)', '', '', '', '', '', '', ''),
(153, 'St.Joseph High School (Malad)', '', '', '', '', '', '', ''),
(154, 'M.H High School Thane', '', '', '', '', '', '', ''),
(155, 'The Alexandra Girls English Institution', '', '', '', '', '', '', ''),
(156, 'Shishuvan High School', '', '', '', '', '', '', ''),
(157, 'St.Marys School', '', '', '', '', '', '', ''),
(158, 'Holy Name High School', '', '', '', '', '', '', ''),
(159, 'Tridha International School', '', '', '', '', '', '', ''),
(160, 'Ramniwas Bajaj High School', '', '', '', '', '', '', ''),
(161, 'Dnyaneshwari Vidyalaya', '', '', '', '', '', '', ''),
(162, 'Shishuranjan School', '', '', '', '', '', '', ''),
(163, 'Royal International School', '', '', '', '', '', '', ''),
(164, 'Hindi High School (Kalyan)', '', '', '', '', '', '', ''),
(165, 'St.Gregorious High School', '', '', '', '', '', '', ''),
(166, 'Sister Nivedita High School', '', '', '', '', '', '', ''),
(167, 'J B Vachha School For Parsi Girls', '', '', '', '', '', '', ''),
(168, 'J.J Academy (Mulund)', '', '', '', '', '', '', ''),
(169, 'Kendriya Vidyalaya (INS Hamla)', '', '', '', '', '', '', ''),
(170, 'Podar Internatiaonal School (Nerul)', '', '', '', '', 'Nerul', '', ''),
(171, 'Euro School (Airoli)', '', '', '', '', 'Airoli', '', ''),
(172, 'Billabong High School (Thane)', '', '', '', '', '', '', ''),
(173, 'D.A.V Public School (Panvel)', '', '', '', '', 'Panvel', '', ''),
(174, 'Sri Maa Bal Niketan School (Thane)', '', '', '', '', 'Thane', '', ''),
(175, 'Rajhans Vidyalaya', '', '', '', '', 'Andheri', '', ''),
(176, 'Smt. Taramai Vartak Memorial Academy', '', '', '', '', 'Virar', '', ''),
(177, 'Vidya Niketan (Dombivali)', '', '', '', '', 'Dombivali', '', ''),
(178, 'Hiranandani Foundation School', '', '', '', '', 'Thane', '', ''),
(179, 'Goldcrest High School (Vashi)', '', '', '', '', 'Vashi', '', ''),
(180, 'St.Mary''s High School (Vashi)', '', '', '', '', 'Vashi', '', ''),
(181, 'St.Mary''s High School (Koparkhairane)', '', '', '', '', 'Koparkhairane', '', ''),
(182, 'Reliance Foundation School (Koparkhairane)', '', '', '', '', 'Koparkhairane', '', ''),
(183, 'Harmony High School (Kharghar)', '', '', '', '', 'Kharghar', '', ''),
(184, 'Kendriya Vidyalaya (Uran)', '', '', '', '', '', '', ''),
(185, 'Podar International School (Seawoods)', '', '', '', '', 'Seawoods', '', ''),
(186, 'SBOA High School (Nerul)', '', '', '', '', '', '', ''),
(187, 'Avalon Heights School', '', '', '', '', '', '', ''),
(188, 'Omkar International School', '', '', '', '', '', '', ''),
(189, 'Universal High School', '', '', '', '', '', '', ''),
(190, 'Apeejay School (Kharghar)', '', '', '', '', '', '', ''),
(191, 'Thane Public School', '', '', '', '', '', '', ''),
(192, 'Bharati Vidyapeeth High School', '', '', '', '', '', '', ''),
(193, 'St.Lawrence School (Vashi)', '', '', '', '', 'Vashi', '', ''),
(194, 'Navy Children School', '', '', '', '', '', '', ''),
(195, 'St.Mary''s High School J.N.P Uran', '', '', '', '', '', '', ''),
(196, 'Auxilium Convent High School', '', '', '', '', '', '', ''),
(197, 'Sadhu Vaswani High School', '', '', '', '', '', '', ''),
(198, 'Presentation Convent School', '', '', '', '', 'Nerul', '', ''),
(199, 'Vasant Vihar High School', '', '', '', '', '', '', ''),
(200, 'Nalanda Public School', '', '', '', '', 'Mulund', '', ''),
(201, 'D.Y Patil International School (Nerul)', '', '', '', '', '', '', ''),
(202, 'Podar International School (Powai)', '', '', '', '', '', '', ''),
(203, 'D.A.V Public School (Thane)', '', '', '', '', '', '', ''),
(204, 'A.K Joshi English Medium School', '', '', '', '', '', '', ''),
(205, 'Lexicon Global School', '', '', '', '', '', '', ''),
(206, 'Dr.Bedekar Vidyamandir', '', '', '', '', 'Thane', '', ''),
(207, 'Sahakar Vidya Prasarak Mandal', '', '', '', '', '', '', ''),
(208, 'I.E.S Modern English School', '', '', '', '', '', '', ''),
(209, 'I.E.S Orion School', '', '', '', '', '', '', ''),
(210, 'I.E.S Manik Vidyamandir', '', '', '', '', '', '', ''),
(211, 'Dr. Babasaheb Ambedkar School', '', '', '', '', '', '', ''),
(212, 'Sane Guruji Vidyalaya', '', '', '', '', 'Dadar', '', ''),
(213, 'Victoria High School', '', '', '', '', '', '', ''),
(214, 'Dr. Antonio Dasilva High School', '', '', '', '', 'Dadar', '', ''),
(215, 'Don Bosco High School (Matunga)', '', '', '', '', 'Matunga', '', ''),
(216, 'Bombay Scottish School', '', '', '', '', 'Mahim', '', ''),
(217, 'Changu Kana Thakur School', '', '', '', '', '', '', ''),
(218, 'Atomic Energy School', '', '', '', '', '', '', ''),
(219, 'Shreerang Vidyalaya English School', '', '', '', '', 'Thane', '', ''),
(220, 'St. Joseph High School (Panvel)', '', '', '', '', '', '', ''),
(221, 'J.H Ambani High School', '', '', '', '', '', '', ''),
(222, 'Kendriya Vidyalaya (Panvel)', '', '', '', '', '', '', ''),
(223, 'St.Catherine Of Seina School', '', '', '', '', '', '', ''),
(224, 'Kherwadi Mumbai Public School', '', '', '', '', '', '', ''),
(225, 'Swami Vivekanand Ramchandra Nagar School', '', '', '', '', 'Dombivali', '', ''),
(226, 'Sterling School', '', '', '', '', 'Nerul', '', ''),
(227, 'R.B.K International School', '', '', '', '', 'Chembur', '', ''),
(228, 'Shri Madhavrao Bhagwat High School', '', '', '', '', '', '', ''),
(229, 'R.V Nehrukar Vidyalaya', '', '', '', '', 'Dombivali', '', ''),
(230, 'Oberoi International School', '', '', '', '', '', '', ''),
(231, 'C.P. Goenka International School', '', '', '', '', '', '', ''),
(232, 'Tilak Nagar Vidya Mandir', '', '', '', '', '', '', ''),
(233, 'Fazlani L''Academie Globale', '', '', '', '', '', '', ''),
(234, 'The Orchids International School', '', '', '', '', '', '', ''),
(235, 'Diamond Jubilee High School', '', '', '', '', '', '', ''),
(236, 'Pal Rajendra English High School', '', '', '', '', '', '', ''),
(237, 'A.V.K English High School', '', '', '', '', '', '', ''),
(238, 'G D Somani Memorial School', '', '', '', '', 'Cuffe Parade', '', ''),
(239, 'Shri Gauridutt Mittal Vidyalaya', '', '', '', '', 'Sion', '', ''),
(240, 'KGT International School', '', '', '', '', 'Lower Parel', '', ''),
(241, 'Sett R.J.J Primary School', '', '', '', '', '', '', ''),
(242, 'Sir J.J Girls High School', '', '', '', '', '', '', ''),
(243, 'Chembur Karnatak High School', '', '', '', '', '', '', ''),
(244, 'GDS The Day School', '', '', '', '', '', '', ''),
(245, 'Chinmaya Vidyalaya', '', '', '', '', 'Tarapur', '', ''),
(246, 'Tilak Public School', '', '', '', '', 'Nerul', '', ''),
(247, 'Shree Chandulal Nanavati Vinay Vidyalaya', '', '', '', '', '', '', ''),
(248, 'Model English School (Dombivali)', '', '', '', '', 'Dombivali', '', ''),
(249, 'St. Joseph High School (Dombivali)', '', '', '', '', 'Dombivali', '', ''),
(250, 'St. Theresa Convent School', '', '', '', '', 'Dombivali', '', ''),
(251, 'Holy Angels School', '', '', '', '', 'Dombivali', '', ''),
(252, 'CMS English School', '', '', '', '', '', '', ''),
(253, 'R N Podar School', '', '', '', '', 'Kalina', '', ''),
(254, 'Cathedral and John Connon School', '', '', '', '', 'Malabar Hill', '', ''),
(255, 'Chandrakant Patkar Vidyalaya', '', '', '', '', 'Dombivali', '', ''),
(256, 'New Cambridge English School', '', '', '', '', 'Dombivali', '', ''),
(257, 'Blossom CBSE School', '', '', '', '', 'Dombivali', '', ''),
(258, 'Arya Gurukul', '', '', '', '', 'Kalyan', '', ''),
(259, 'Cambridge School (Kandivali)', '', '', '', '', 'Kandivali', '', ''),
(260, 'St.Francis D'' Assisi High School', '', '', '', '', 'Borivali', '', ''),
(261, 'Vile Parle Mahila Sangh Orion School', '', '', '', '', '', '', ''),
(262, 'N.L Dalmia High School', '', '', '', '', 'Mira Road', '', ''),
(263, 'Colaba Municipal Upper Primary English School', '', '', '', '', 'Colaba', '', ''),
(264, 'St. Xavier''s Boys Academy', '', '022 2201 4358', '', '1st Cross Ln, 40 A New Marine Lines, Marine Lines, Mumbai, Maharashtra 400020', 'Fort', '', ''),
(265, 'Don Bosco High School (Dombivali)', '', '', '', '', 'Dombivali', '', ''),
(266, 'Thakur Public School (Kandivali)', '', '', '', '', 'Kandivali', '', ''),
(267, 'Matushri Kashiben Vrajlal Valia International Vidyalaya', '', '', '', '', 'Borivali', '', ''),
(268, 'Don Bosco School ( Borivali )', '', '', '', '', '', '', ''),
(269, 'SAS Billabong High School', '', '', '', '', '', '', ''),
(270, 'Saraswati Vidyalaya ( Chembur )', '', '', '', '', '', '', ''),
(271, 'Bhagubai Chungu Thakur Vidyalay', '', '', '', '', '', '', ''),
(272, 'Shri Sanatan Dharam High School', '', '', '', '', '', '', ''),
(273, 'Sau Laxmibai English High School', '', '', '', '', 'Mulund', '', ''),
(274, 'New Horizon School (Thane)', '', '', '', '', 'Thane', '', ''),
(275, 'S.I.E.S High School', '', '', '', '', 'Matunga', '', ''),
(276, 'Lodha World School (Thane)', '', '', '', '', 'Thane', '', ''),
(277, 'New Horizon School (Airoli)', '', '', '', '', '', '', ''),
(278, 'Shri Bansidhar Aggarwal Model School', '', '', '', '', '', '', ''),
(279, 'A.V.M Academy', '', '', '', '', '', '', ''),
(280, 'I.E.S Patkar Vidyalaya (Dombivali)', '', '', '', '', '', '', ''),
(281, 'Ryan International School (Kharghar)', '', '', '', '', '', '', ''),
(282, 'Dr. Pillai Global Academy', '', '', '', '', '', '', ''),
(283, 'St.Mary''s Convent (Mulund)', '', '', '', '', 'Mulund', '', ''),
(284, 'St.Xaviers High School (Vileparle)', '', '', '', '', 'Vile Parle', '', ''),
(285, 'D.A.V Public School (Kharghar)', '', '', '', '', 'Kharghar', '', ''),
(286, 'Shree Mavli Mandal High School', '', '', '', '', 'Thane', '', ''),
(287, 'JAE English School', '', '', '', '', '', '', ''),
(288, 'K.C Gandhi High School', '', '', '', '', 'Kalyan', '', ''),
(289, 'GVM High School', '', '', '', '', '', '', ''),
(290, 'JMF Trust''s Jana Gana Mana CBSE School', '', '', '', '', 'Dombivali', '', ''),
(291, 'Barretto High School', '', '', '', '', 'Kalbadevi', '', ''),
(292, 'Shri Vailankanni English School', '', '', '', '', 'Dombivali', '', ''),
(293, 'Sacred Heart School', '', '', '', '', '', '', ''),
(294, 'Ryan International School (Chembur)', '', '', '', '', '', '', ''),
(295, 'S.S High School', '', '', '', '', '', '', ''),
(296, 'Jindal School', '', '', '', '', '', '', ''),
(297, 'St. Augustine High School', '', '', '', '', 'Nerul', '', ''),
(298, 'St.Soldier School', '', '', '', '', '', '', ''),
(299, 'Lokpuram Public School', '', '', '', '', 'Thane', '', ''),
(300, 'City International School', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_sportcategorystudent`
--

CREATE TABLE IF NOT EXISTS `sfa_sportcategorystudent` (
  `id` int(11) NOT NULL,
  `sport` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `student` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sportcategorystudent`
--

INSERT INTO `sfa_sportcategorystudent` (`id`, `sport`, `sportscategory`, `student`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sports`
--

INSERT INTO `sfa_sports` (`id`, `name`, `status`, `order`, `icon`, `about`, `eligibility`, `rules`, `json`) VALUES
(1, 'badminton', 1, 0, '', '', '', '', ''),
(2, 'squash', 1, 0, '', '', '', '', ''),
(3, 'swimming', 1, 0, '', '', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sportscategory`
--

INSERT INTO `sfa_sportscategory` (`id`, `sports`, `title`, `order`, `status`, `type`, `json`) VALUES
(1, 1, 'single', 0, 1, 0, ''),
(2, 2, 'double', 0, 1, 0, ''),
(3, 3, 'freestyle', 0, 1, 0, '');

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

-- --------------------------------------------------------

--
-- Table structure for table `sfa_student`
--

CREATE TABLE IF NOT EXISTS `sfa_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `school` int(11) NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `location` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sports` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `agegroup` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `isparticipant` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `emergencycontact` text CHARACTER SET utf8 NOT NULL,
  `dob` date NOT NULL,
  `isverified` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_student`
--

INSERT INTO `sfa_student` (`id`, `name`, `school`, `address`, `content`, `email`, `image`, `location`, `sports`, `sportscategory`, `agegroup`, `gender`, `isparticipant`, `age`, `phone`, `emergencycontact`, `dob`, `isverified`) VALUES
(1, 'Mehta Krish Sandeep', 13, '', '', 'krishmehta324@gmail.com,skmehta7@gmail.com', 'abc.jpeg', '', 1, 1, 0, 1, 1, 14, '8845454447 / 24222552', '', '2001-10-16', 1),
(2, 'Patil Aniket Sandeep', 12, '', '', 'abc324@gmail.com,skmehta7@gmail.com', 'xyz.png', '', 2, 2, 0, 1, 1, 13, '77323534447 / 24222552', '', '2002-10-16', 0),
(3, 'Mehta Pooja', 11, '', '', 'xyz324@gmail.com,skmehta7@gmail.com', 'ashdjs.jpg', '', 3, 3, 0, 2, 1, 25, '0225434447 / 24222552', '', '1990-11-17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sfa_studentagegroup`
--

CREATE TABLE IF NOT EXISTS `sfa_studentagegroup` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `agegroup` int(11) NOT NULL,
  `sport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_studentsport`
--

CREATE TABLE IF NOT EXISTS `sfa_studentsport` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `sport` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_studentsport`
--

INSERT INTO `sfa_studentsport` (`id`, `student`, `sport`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sfa_team`
--

CREATE TABLE IF NOT EXISTS `sfa_team` (
  `id` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `agegroup` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sport` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfa_teamstudents`
--

CREATE TABLE IF NOT EXISTS `sfa_teamstudents` (
  `id` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  `student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`, `dob`, `street`, `address`, `city`, `state`, `country`, `pincode`, `facebook`, `google`, `twitter`) VALUES
(1, 'wohlig', 'a63526467438df9566c508027d9cb06b', 'wohlig@wohlig.com', 1, '0000-00-00 00:00:00', 1, NULL, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(18, 'Ting', '00969a27cdfdb737db8e6f68310eda2a', 'ting@ting.in', 1, '2015-11-18 14:22:19', 1, '', '', '', 1, '', '0000-00-00', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sfa_mediastudents`
--
ALTER TABLE `sfa_mediastudents`
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
-- Indexes for table `sfa_sportcategorystudent`
--
ALTER TABLE `sfa_sportcategorystudent`
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
-- Indexes for table `sfa_studentagegroup`
--
ALTER TABLE `sfa_studentagegroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sfa_studentsport`
--
ALTER TABLE `sfa_studentsport`
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
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `registrationsports`
--
ALTER TABLE `registrationsports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `schoolregistration`
--
ALTER TABLE `schoolregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `schoolregistrationsports`
--
ALTER TABLE `schoolregistrationsports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `sfa_agegroups`
--
ALTER TABLE `sfa_agegroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_banner`
--
ALTER TABLE `sfa_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sfa_bannerslides`
--
ALTER TABLE `sfa_bannerslides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sfa_match`
--
ALTER TABLE `sfa_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_matchplayed`
--
ALTER TABLE `sfa_matchplayed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_mediastudents`
--
ALTER TABLE `sfa_mediastudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_round`
--
ALTER TABLE `sfa_round`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_school`
--
ALTER TABLE `sfa_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT for table `sfa_sportcategorystudent`
--
ALTER TABLE `sfa_sportcategorystudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sfa_sports`
--
ALTER TABLE `sfa_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sfa_sportscategory`
--
ALTER TABLE `sfa_sportscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sfa_student`
--
ALTER TABLE `sfa_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sfa_studentagegroup`
--
ALTER TABLE `sfa_studentagegroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_studentsport`
--
ALTER TABLE `sfa_studentsport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sfa_team`
--
ALTER TABLE `sfa_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_teamstudents`
--
ALTER TABLE `sfa_teamstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_year`
--
ALTER TABLE `sfa_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2016 at 07:43 AM
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
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female');

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
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

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
(120, 'info@sfanow.in', '2015-12-21 15:26:40');

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
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

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
(104, 'Atomic energy central school', 'Boisar', '2015-12-25', '', 1, '', '', '', '2015-12-22 03:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `schoolregistrationsports`
--

CREATE TABLE IF NOT EXISTS `schoolregistrationsports` (
  `id` int(11) NOT NULL,
  `schoolregistration` int(11) NOT NULL,
  `registrationsports` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

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
(86, 104, 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_agegroups`
--

INSERT INTO `sfa_agegroups` (`id`, `name`, `status`, `order`, `json`) VALUES
(1, 'U-14', 1, 0, ''),
(2, 'U-11', 1, 0, ''),
(3, 'U-16', 1, 0, '');

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
(1, 1, 'tabletennis11.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', 'tabletennis', 'rohit_sfa.jpg', 1, '                                                                    ', '', '0000-00-00'),
(2, 1, 'tennis11.png', 'SPORTS FOR ALL 2015, MUMBAI', 'tennis', 'b11.jpg', 2, '                                                                    ', '24th- 31st December', '0000-00-00'),
(3, 1, 'batminton21.png', 'REGISTER YOUR SCHOOL NOW', 'badminton', 'SFA-Web-Banners-a1.jpg', 3, 'only member schools will be permitted to participate at SFA Events.', '15th October 2015', '0000-00-00'),
(4, 1, 'sqaush1.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', 'squash', 'SFA-Web-Banners.jpg-1_.jpg', 4, '                                                                    ', '', '0000-00-00'),
(5, 1, 'aquatics1.png', 'SPORTS FOR ALL 2015, MUMBAI', 'swimming', 'rohit_sfa3.jpg', 5, '                                                                    ', '24th- 31st December', '0000-00-00'),
(6, 1, 'basketball1.png', 'REGISTER YOUR SCHOOL NOW', 'basketball', 'b12.jpg', 6, 'only member schools will be permitted to participate at SFA Events.', '15th October 2015', '0000-00-00'),
(7, 1, 'volleyball1.png', 'A NEW WAY OF PLAYING INTER-SCHOOL SPORTS', 'volleyball', 'SFA-Web-Banners-a.jpg', 7, '                                                                    ', '', '0000-00-00'),
(8, 1, 'handball1.png', 'SPORTS FOR ALL 2015, MUMBAI', 'handball', 'SFA-Web-Banners-1_1.jpg', 8, '                                                                    ', '24th- 31st December', '0000-00-00'),
(9, 1, 'judo.png', 'REGISTER YOUR SCHOOL NOW', 'judo', 'rohit_sfa4.jpg', 9, 'only member schools will be permitted to participate at SFA Events.                                         ', '15th October 2015', '0000-00-00');

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
  `endtime` time NOT NULL,
  `gender` int(11) NOT NULL,
  `matchdate` date NOT NULL,
  `round` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_match`
--

INSERT INTO `sfa_match` (`id`, `sports`, `sportscategory`, `agegroup`, `timestamp`, `status`, `resulttimestamp`, `matchresult`, `name`, `starttime`, `endtime`, `gender`, `matchdate`, `round`) VALUES
(1, 1, 1, 1, '2015-12-22 09:38:24', 1, '0000-00-00 00:00:00', '', 'Court 1', '21:00:00', '20:00:00', 1, '2015-12-24', 1),
(4, 1, 2, 3, '2016-01-30 11:57:10', 1, '0000-00-00 00:00:00', 'jnhbgvfc', 'Art1', '13:00:00', '14:00:00', 2, '2016-01-31', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_matchplayed`
--

INSERT INTO `sfa_matchplayed` (`id`, `type`, `order`, `team`, `student`, `match`, `result`, `reason`, `round`) VALUES
(1, 0, 1, 0, 1, 1, 1, '16', 1),
(2, 0, 2, 0, 2, 1, 0, '15', 1),
(3, 0, 0, 0, 3, 2, 0, '', 1),
(4, 0, 3, 0, 4, 2, 1, '16', 1),
(5, 0, 0, 0, 1, 3, 0, '', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_round`
--

INSERT INTO `sfa_round` (`id`, `sports`, `sportcategory`, `year`, `agegroup`, `level`, `root`) VALUES
(1, 0, 1, 0, 0, 'Round 1', 0),
(2, 0, 1, 0, 0, 'Round 2', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=294 DEFAULT CHARSET=latin1;

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
(293, 'Sacred Heart School', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sfa_sportcategorystudent`
--

CREATE TABLE IF NOT EXISTS `sfa_sportcategorystudent` (
  `id` int(11) NOT NULL,
  `sport` int(11) NOT NULL,
  `sportscategory` int(11) NOT NULL,
  `student` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=645 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_sportcategorystudent`
--

INSERT INTO `sfa_sportcategorystudent` (`id`, `sport`, `sportscategory`, `student`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, 1, 3),
(4, 1, 1, 4),
(5, 1, 1, 5),
(6, 1, 1, 6),
(7, 1, 1, 7),
(8, 1, 1, 8),
(9, 1, 1, 9),
(10, 1, 1, 10),
(11, 1, 1, 11),
(12, 1, 1, 12),
(13, 1, 1, 13),
(14, 1, 1, 14),
(15, 1, 1, 15),
(16, 1, 1, 16),
(17, 1, 1, 17),
(18, 1, 1, 18),
(19, 1, 1, 19),
(20, 1, 1, 20),
(21, 1, 1, 21),
(22, 1, 1, 22),
(23, 1, 1, 23),
(24, 1, 1, 24),
(25, 1, 1, 25),
(26, 1, 1, 26),
(27, 1, 1, 27),
(28, 1, 1, 28),
(29, 1, 1, 29),
(30, 1, 1, 30),
(31, 1, 1, 31),
(32, 1, 1, 32),
(33, 1, 1, 33),
(34, 1, 1, 34),
(35, 1, 1, 35),
(36, 1, 1, 36),
(37, 1, 1, 37),
(38, 1, 1, 38),
(39, 1, 1, 39),
(40, 1, 1, 40),
(41, 1, 1, 41),
(42, 1, 1, 42),
(43, 1, 1, 43),
(44, 1, 1, 44),
(45, 1, 1, 45),
(46, 1, 1, 46),
(47, 1, 1, 47),
(48, 1, 1, 48),
(49, 1, 1, 49),
(50, 1, 1, 50),
(51, 1, 1, 51),
(52, 1, 1, 52),
(53, 1, 1, 53),
(54, 1, 1, 54),
(55, 1, 1, 55),
(56, 1, 1, 56),
(57, 1, 1, 57),
(58, 1, 1, 58),
(59, 1, 1, 59),
(60, 1, 1, 60),
(61, 1, 1, 61),
(62, 1, 1, 62),
(63, 1, 1, 63),
(64, 1, 1, 64),
(65, 1, 1, 65),
(66, 1, 1, 66),
(67, 1, 1, 67),
(68, 1, 1, 68),
(69, 1, 1, 69),
(70, 1, 1, 70),
(71, 1, 1, 71),
(72, 1, 1, 72),
(73, 1, 1, 73),
(74, 1, 1, 74),
(75, 1, 1, 75),
(76, 1, 1, 76),
(77, 1, 1, 77),
(78, 1, 1, 78),
(79, 1, 1, 79),
(80, 1, 1, 80),
(81, 1, 1, 81),
(82, 1, 1, 82),
(83, 1, 1, 83),
(84, 1, 1, 84),
(85, 1, 1, 85),
(86, 1, 1, 86),
(87, 1, 1, 87),
(88, 1, 1, 88),
(89, 1, 1, 89),
(90, 1, 1, 90),
(91, 1, 1, 91),
(92, 1, 1, 92),
(93, 1, 1, 93),
(94, 1, 1, 94),
(95, 1, 1, 95),
(96, 1, 1, 96),
(97, 1, 1, 97),
(98, 1, 1, 98),
(99, 1, 1, 99),
(100, 1, 1, 100),
(101, 1, 1, 101),
(102, 1, 1, 102),
(103, 1, 1, 103),
(104, 1, 1, 104),
(105, 1, 1, 105),
(106, 1, 1, 106),
(107, 1, 1, 107),
(108, 1, 1, 108),
(109, 1, 1, 109),
(110, 1, 1, 110),
(111, 1, 1, 111),
(112, 1, 1, 112),
(113, 1, 1, 113),
(114, 1, 1, 114),
(115, 1, 1, 115),
(116, 1, 1, 116),
(117, 1, 1, 117),
(118, 1, 1, 118),
(119, 1, 1, 119),
(120, 1, 1, 120),
(121, 1, 1, 121),
(122, 1, 1, 122),
(123, 1, 1, 123),
(124, 1, 1, 124),
(125, 1, 1, 125),
(126, 1, 1, 126),
(127, 1, 1, 127),
(128, 1, 1, 128),
(129, 1, 1, 129),
(130, 1, 1, 130),
(131, 1, 1, 131),
(132, 1, 1, 132),
(133, 1, 1, 133),
(134, 1, 1, 134),
(135, 1, 1, 135),
(136, 1, 1, 136),
(137, 1, 1, 137),
(138, 1, 1, 138),
(139, 1, 1, 139),
(140, 1, 1, 140),
(141, 1, 1, 141),
(142, 1, 1, 142),
(143, 1, 1, 143),
(144, 1, 1, 144),
(145, 1, 1, 145),
(146, 1, 1, 146),
(147, 1, 1, 111),
(148, 1, 1, 147),
(149, 1, 1, 115),
(150, 1, 1, 148),
(151, 1, 1, 149),
(152, 1, 1, 150),
(153, 1, 1, 151),
(154, 1, 1, 152),
(155, 1, 1, 153),
(156, 1, 1, 110),
(157, 1, 1, 154),
(158, 1, 1, 155),
(159, 1, 1, 156),
(160, 1, 1, 157),
(161, 1, 1, 158),
(162, 1, 1, 159),
(163, 1, 1, 160),
(164, 1, 1, 161),
(165, 1, 1, 162),
(166, 1, 1, 163),
(167, 1, 1, 164),
(168, 1, 1, 165),
(169, 1, 1, 166),
(170, 1, 1, 167),
(171, 1, 1, 168),
(172, 1, 1, 169),
(173, 1, 1, 170),
(174, 1, 1, 171),
(175, 1, 1, 172),
(176, 1, 1, 173),
(177, 1, 1, 174),
(178, 1, 1, 175),
(179, 1, 1, 176),
(180, 1, 1, 177),
(181, 1, 1, 178),
(182, 1, 1, 179),
(183, 1, 2, 166),
(184, 1, 2, 164),
(185, 1, 2, 165),
(186, 1, 1, 180),
(187, 1, 1, 181),
(188, 1, 1, 182),
(189, 1, 1, 183),
(190, 1, 1, 184),
(191, 1, 1, 185),
(192, 1, 1, 186),
(193, 1, 1, 187),
(194, 1, 1, 188),
(195, 1, 1, 189),
(196, 1, 1, 190),
(197, 1, 1, 191),
(198, 1, 1, 192),
(199, 1, 1, 193),
(200, 1, 1, 194),
(201, 1, 1, 195),
(202, 1, 1, 196),
(203, 1, 1, 197),
(204, 1, 2, 184),
(205, 1, 2, 191),
(206, 1, 2, 192),
(207, 1, 2, 188),
(208, 1, 2, 193),
(209, 1, 1, 198),
(210, 1, 2, 194),
(211, 1, 2, 195),
(212, 1, 1, 199),
(213, 1, 2, 189),
(214, 1, 1, 200),
(215, 1, 1, 201),
(216, 1, 1, 202),
(217, 1, 1, 203),
(218, 1, 1, 204),
(219, 1, 1, 205),
(220, 1, 1, 206),
(221, 1, 1, 207),
(222, 1, 1, 208),
(223, 1, 1, 209),
(224, 1, 1, 210),
(225, 1, 1, 211),
(226, 1, 1, 212),
(227, 1, 1, 213),
(228, 1, 1, 214),
(229, 1, 1, 215),
(230, 1, 1, 216),
(231, 1, 1, 217),
(232, 1, 1, 218),
(233, 1, 1, 219),
(234, 1, 1, 220),
(235, 1, 1, 221),
(236, 1, 1, 222),
(237, 1, 1, 223),
(238, 1, 1, 224),
(239, 1, 1, 225),
(240, 1, 1, 226),
(241, 1, 1, 227),
(242, 1, 1, 228),
(243, 1, 1, 229),
(244, 1, 1, 230),
(245, 1, 1, 231),
(246, 1, 1, 232),
(247, 1, 1, 233),
(248, 1, 1, 234),
(249, 1, 1, 235),
(250, 1, 1, 236),
(251, 1, 1, 237),
(252, 1, 1, 238),
(253, 1, 1, 239),
(254, 1, 1, 240),
(255, 1, 1, 241),
(256, 1, 1, 242),
(257, 1, 1, 243),
(258, 1, 1, 244),
(259, 1, 1, 245),
(260, 1, 1, 246),
(261, 1, 1, 247),
(262, 1, 1, 248),
(263, 1, 1, 249),
(264, 1, 1, 250),
(265, 1, 1, 251),
(266, 1, 1, 252),
(267, 1, 1, 253),
(268, 1, 1, 254),
(269, 1, 1, 255),
(270, 1, 1, 256),
(271, 1, 1, 257),
(272, 1, 1, 258),
(273, 1, 1, 259),
(274, 1, 1, 260),
(275, 1, 1, 261),
(276, 1, 1, 262),
(277, 1, 1, 263),
(278, 1, 1, 264),
(279, 1, 1, 265),
(280, 1, 1, 266),
(281, 1, 1, 267),
(282, 1, 1, 268),
(283, 1, 1, 269),
(284, 1, 1, 270),
(285, 1, 1, 271),
(286, 1, 1, 272),
(287, 1, 1, 273),
(288, 1, 1, 274),
(289, 1, 1, 275),
(290, 1, 1, 276),
(291, 1, 1, 277),
(292, 1, 1, 272),
(293, 1, 1, 273),
(294, 1, 1, 274),
(295, 1, 1, 276),
(296, 1, 1, 275),
(297, 1, 1, 278),
(298, 1, 1, 279),
(299, 1, 1, 277),
(300, 1, 1, 280),
(301, 1, 1, 281),
(302, 1, 1, 282),
(303, 1, 1, 283),
(304, 1, 1, 284),
(305, 1, 1, 285),
(306, 1, 1, 286),
(307, 1, 1, 287),
(308, 1, 1, 288),
(309, 1, 1, 289),
(310, 1, 1, 290),
(311, 1, 1, 291),
(312, 1, 1, 292),
(313, 1, 1, 293),
(314, 1, 1, 294),
(315, 1, 1, 295),
(316, 1, 1, 296),
(317, 1, 1, 297),
(318, 1, 1, 298),
(319, 1, 1, 299),
(320, 1, 1, 300),
(321, 1, 1, 301),
(322, 1, 1, 302),
(323, 1, 1, 303),
(324, 1, 1, 304),
(325, 1, 1, 305),
(326, 1, 1, 306),
(327, 1, 1, 307),
(328, 1, 1, 308),
(329, 1, 1, 309),
(330, 1, 1, 310),
(331, 1, 1, 311),
(332, 1, 1, 312),
(333, 1, 1, 313),
(334, 1, 1, 314),
(335, 1, 1, 315),
(336, 1, 1, 316),
(337, 1, 1, 317),
(338, 1, 1, 318),
(339, 1, 1, 319),
(340, 1, 1, 320),
(341, 1, 1, 321),
(342, 1, 1, 322),
(343, 1, 1, 323),
(344, 1, 1, 324),
(345, 1, 1, 325),
(346, 1, 1, 326),
(347, 1, 1, 327),
(348, 1, 1, 328),
(349, 1, 1, 329),
(350, 1, 1, 330),
(351, 1, 1, 331),
(352, 1, 1, 332),
(353, 1, 1, 333),
(354, 1, 1, 334),
(355, 1, 1, 335),
(356, 1, 1, 336),
(357, 1, 1, 337),
(358, 1, 1, 338),
(359, 1, 1, 339),
(360, 1, 1, 340),
(361, 1, 1, 341),
(362, 1, 1, 342),
(363, 1, 1, 343),
(364, 1, 1, 344),
(365, 1, 1, 345),
(366, 1, 1, 346),
(367, 1, 1, 347),
(368, 1, 1, 348),
(369, 1, 1, 349),
(370, 1, 1, 350),
(371, 1, 1, 351),
(372, 1, 1, 352),
(373, 1, 1, 353),
(374, 1, 1, 354),
(375, 1, 1, 355),
(376, 1, 1, 356),
(377, 1, 1, 357),
(378, 1, 1, 358),
(379, 1, 1, 359),
(380, 1, 1, 360),
(381, 1, 1, 361),
(382, 1, 1, 362),
(383, 1, 1, 363),
(384, 1, 1, 364),
(385, 1, 1, 365),
(386, 1, 1, 366),
(387, 1, 1, 367),
(388, 1, 1, 368),
(389, 1, 1, 369),
(390, 1, 1, 370),
(391, 1, 1, 371),
(392, 1, 1, 372),
(393, 1, 1, 373),
(394, 1, 1, 374),
(395, 1, 1, 375),
(396, 1, 1, 376),
(397, 1, 1, 377),
(398, 1, 1, 378),
(399, 1, 1, 379),
(400, 1, 1, 380),
(401, 1, 1, 381),
(402, 1, 1, 382),
(403, 1, 1, 383),
(404, 1, 1, 384),
(405, 1, 1, 385),
(406, 1, 1, 386),
(407, 1, 1, 387),
(408, 1, 1, 388),
(409, 1, 1, 389),
(410, 1, 1, 390),
(411, 1, 1, 391),
(412, 1, 1, 392),
(413, 1, 1, 393),
(414, 1, 1, 394),
(415, 1, 1, 395),
(416, 1, 1, 396),
(417, 1, 1, 397),
(418, 1, 1, 398),
(419, 1, 1, 399),
(420, 1, 1, 400),
(421, 1, 1, 401),
(422, 1, 1, 402),
(423, 1, 1, 403),
(424, 1, 1, 404),
(425, 1, 1, 405),
(426, 1, 1, 406),
(427, 1, 1, 407),
(428, 1, 1, 408),
(429, 1, 1, 409),
(430, 1, 1, 410),
(431, 1, 1, 411),
(432, 1, 1, 412),
(433, 1, 1, 413),
(434, 1, 1, 414),
(435, 1, 1, 415),
(436, 1, 1, 416),
(437, 1, 1, 417),
(438, 1, 1, 418),
(439, 1, 1, 419),
(440, 1, 1, 420),
(441, 1, 1, 421),
(442, 1, 1, 422),
(443, 1, 1, 423),
(444, 1, 1, 424),
(445, 1, 1, 425),
(446, 1, 1, 426),
(447, 1, 1, 427),
(448, 1, 1, 428),
(449, 1, 1, 429),
(450, 1, 1, 430),
(451, 1, 1, 431),
(452, 1, 1, 432),
(453, 1, 1, 433),
(454, 1, 1, 434),
(455, 1, 1, 435),
(456, 1, 1, 436),
(457, 1, 1, 437),
(458, 1, 1, 438),
(459, 1, 1, 439),
(460, 1, 1, 440),
(461, 1, 1, 441),
(462, 1, 1, 442),
(463, 1, 1, 443),
(464, 1, 1, 444),
(465, 1, 1, 445),
(466, 1, 1, 446),
(467, 1, 1, 447),
(468, 1, 1, 448),
(469, 1, 1, 449),
(470, 1, 1, 450),
(471, 1, 1, 451),
(472, 1, 1, 452),
(473, 1, 1, 453),
(474, 1, 1, 454),
(475, 1, 1, 455),
(476, 1, 1, 456),
(477, 1, 1, 457),
(478, 1, 1, 458),
(479, 1, 1, 459),
(480, 1, 1, 460),
(481, 1, 1, 461),
(482, 1, 1, 462),
(483, 1, 1, 463),
(484, 1, 1, 464),
(485, 1, 1, 465),
(486, 1, 1, 466),
(487, 1, 1, 467),
(488, 1, 1, 468),
(489, 1, 1, 469),
(490, 1, 1, 449),
(491, 1, 1, 470),
(492, 1, 1, 471),
(493, 1, 1, 472),
(494, 1, 1, 473),
(495, 1, 1, 474),
(496, 1, 1, 475),
(497, 1, 1, 476),
(498, 1, 1, 477),
(499, 1, 1, 478),
(500, 1, 1, 479),
(501, 1, 1, 480),
(502, 1, 1, 481),
(503, 1, 1, 482),
(504, 1, 1, 483),
(505, 1, 1, 484),
(506, 1, 1, 485),
(507, 1, 1, 486),
(508, 1, 1, 487),
(509, 1, 1, 488),
(510, 1, 1, 489),
(511, 1, 1, 490),
(512, 1, 1, 491),
(513, 1, 1, 492),
(514, 1, 1, 493),
(515, 1, 1, 494),
(516, 1, 1, 495),
(517, 1, 1, 496),
(518, 1, 1, 497),
(519, 1, 1, 498),
(520, 1, 1, 499),
(521, 1, 1, 500),
(522, 1, 1, 501),
(523, 1, 1, 502),
(524, 1, 1, 503),
(525, 1, 1, 504),
(526, 1, 1, 505),
(527, 1, 1, 506),
(528, 1, 1, 507),
(529, 1, 1, 508),
(530, 1, 1, 509),
(531, 1, 1, 510),
(532, 1, 1, 511),
(533, 1, 1, 512),
(534, 1, 1, 513),
(535, 1, 1, 514),
(536, 1, 1, 515),
(537, 1, 1, 516),
(538, 1, 1, 517),
(539, 1, 1, 518),
(540, 1, 1, 519),
(541, 1, 1, 520),
(542, 1, 1, 521),
(543, 1, 1, 522),
(544, 1, 1, 523),
(545, 1, 1, 524),
(546, 1, 1, 525),
(547, 1, 1, 526),
(548, 1, 1, 527),
(549, 1, 1, 528),
(550, 1, 1, 529),
(551, 1, 1, 530),
(552, 1, 1, 531),
(553, 1, 1, 532),
(554, 1, 1, 533),
(555, 1, 1, 534),
(556, 1, 1, 535),
(557, 1, 1, 536),
(558, 1, 1, 537),
(559, 1, 1, 538),
(560, 1, 1, 539),
(561, 1, 1, 540),
(562, 1, 1, 541),
(563, 1, 1, 542),
(564, 1, 1, 543),
(565, 1, 1, 544),
(566, 1, 1, 545),
(567, 1, 1, 546),
(568, 1, 1, 547),
(569, 1, 1, 548),
(570, 1, 1, 549),
(571, 1, 1, 550),
(572, 1, 1, 551),
(573, 1, 1, 552),
(574, 1, 1, 553),
(575, 1, 1, 554),
(576, 1, 1, 555),
(577, 1, 1, 556),
(578, 1, 1, 557),
(579, 1, 1, 558),
(580, 1, 1, 559),
(581, 1, 1, 560),
(582, 1, 1, 561),
(583, 1, 1, 562),
(584, 1, 1, 563),
(585, 1, 1, 564),
(586, 1, 1, 565),
(587, 1, 1, 566),
(588, 1, 1, 567),
(589, 1, 1, 568),
(590, 1, 1, 569),
(591, 1, 1, 570),
(592, 1, 1, 571),
(593, 1, 1, 572),
(594, 1, 1, 573),
(595, 1, 1, 574),
(596, 1, 1, 575),
(597, 1, 1, 576),
(598, 1, 1, 577),
(599, 1, 1, 578),
(600, 1, 1, 579),
(601, 1, 1, 580),
(602, 1, 1, 581),
(603, 1, 1, 582),
(604, 1, 1, 583),
(605, 1, 1, 584),
(606, 1, 1, 585),
(607, 1, 1, 586),
(608, 1, 1, 587),
(609, 1, 1, 588),
(610, 1, 1, 589),
(611, 1, 1, 590),
(612, 1, 1, 591),
(613, 1, 1, 592),
(614, 1, 1, 593),
(615, 1, 1, 594),
(616, 1, 1, 595),
(617, 1, 1, 596),
(618, 1, 1, 597),
(619, 1, 1, 598),
(620, 1, 1, 599),
(621, 1, 1, 600),
(622, 1, 1, 601),
(623, 1, 1, 602),
(624, 1, 1, 603),
(625, 1, 1, 604),
(626, 1, 1, 605),
(627, 1, 1, 606),
(628, 1, 1, 607),
(629, 1, 1, 608),
(630, 1, 1, 609),
(631, 1, 1, 610),
(632, 1, 1, 611),
(633, 1, 1, 612),
(634, 1, 1, 613),
(635, 1, 1, 614),
(636, 1, 1, 615),
(637, 1, 1, 616),
(638, 1, 1, 617),
(639, 1, 1, 618),
(640, 1, 1, 619),
(641, 1, 1, 620),
(642, 1, 1, 621),
(643, 1, 1, 622),
(644, 1, 1, 623);

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
(1, 'basketball', 1, 0, '', '', '', '', '');

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
(1, 1, 'single', 0, 1, 0, ''),
(2, 1, 'double', 0, 1, 0, '');

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
  `dob` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=624 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_student`
--

INSERT INTO `sfa_student` (`id`, `name`, `school`, `address`, `content`, `email`, `image`, `location`, `sports`, `sportscategory`, `agegroup`, `gender`, `isparticipant`, `age`, `phone`, `emergencycontact`, `dob`) VALUES
(1, 'Parekh Lekh Shouk', 1, '19, Shraddhanjali,North Avenue Road,Santacruz (West),Mumbai-400054', '', '', '', 'Santacruz', 1, 1, 1, 1, 1, 12, '9821073890', '9821073890', '2003-09-15'),
(2, 'Soneji Hemang Piyush', 1, 'Andheri ( W ) Mum 53', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 12, '022-26146262', '022-26187575', '2003-04-11'),
(3, 'Rai Achintya Devinder', 1, 'Juhu Mumbai 49', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 12, '022-26146262', '022-26187575', '2003-05-04'),
(4, 'Bandi Rishank Shailesh', 1, 'B1/ 12, Gangavihar, Poddar Street, Santacruz ( West ), Mumbai-400054', '', '', '', 'Santacruz', 1, 1, 1, 1, 1, 12, '9833056501', '9833056501', '2003-04-17'),
(5, 'Gupta Ansh Gautam', 1, 'A/34 , Queens Park, Juhu Tara Road, Santacruz ( West ), Mumbai-400049', '', '', '', 'Santacruz', 1, 1, 1, 1, 1, 12, '9820600071', '9820600071', '2003-08-15'),
(6, 'Kanthimathithan Kartik K', 1, '1103, Casuri-A, Oshiwara New Link Road, Andheri ( West ), Mumbai-400053', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 12, '9820243615', '9820243615', '2003-03-18'),
(7, 'Jain Akshat Mahendra', 1, 'B/23, Saith Apt, Bamanpuri Road, Andheri ( East ), Mumbai-400059', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 12, '9869748290', '9869748290', '2003-06-25'),
(8, 'Ahuja Manit Nitin', 1, '601, Shivkutir, Mahada Road, Andheri ( West ) Mumbai-4000153', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 11, '9920697168', '9920697168', '2004-03-19'),
(9, 'Bakshi Udipt Deepak', 1, 'G-158, Tarapore Gardens, Off New Link Road, Mumbai-400053', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 11, '9820278782', '9820278782', '2004-05-19'),
(10, 'Kamat Ahan Neemish', 1, 'C-63, Tarapore Gardens, Andheri ( West ), Mumbai-400053', '', '', '', 'Santacruz', 1, 1, 1, 1, 1, 12, '9820025963/022-26302236', '9820025963/022-26302236', '2003-09-22'),
(11, 'Sheth Mav Poorav', 1, '57, Prem-Sagar-8, rsee Monjee Road, Juhu Scheme, Vile Parle ( West ), Mumbai-400056', '', '', '', 'Vile Parle', 1, 1, 1, 1, 1, 12, '981965675/022-26135614', '981965675/022-26135614', '2003-02-16'),
(12, 'Singh Varun Yashwant', 1, '202, Oceanic, New Link Road, Andheri ( West ), Mumbai', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 12, '9821461197/022-26304948', '9821461197/022-26304948', '2003-02-21'),
(13, 'Sanghvi Karan Manish', 1, 'Santacruz ( West ) Mumbai 400054', '', '', '', 'Santacruz', 1, 1, 1, 1, 1, 14, '9820083332', '9820083332', '2001-07-18'),
(14, 'Dhanda Karan Rajneesh', 1, 'Andheri ( West ), Mumbai-400061', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 14, '9920796965', '9920796965', '2001-03-28'),
(15, 'Sanghvi Siddharth Udaey', 1, 'Juhu, Mumbai-400049', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 14, '9167555240', '9167555240', '2001-03-23'),
(16, 'Raimalani Kush Ram', 1, 'Andheri 400053', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 13, '022-26146262', '022-26187575', '2002-02-11'),
(17, 'Gohil Arman Ranjeet', 1, 'Juhu Mumbai 49', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 13, '022-26146262', '022-26187575', '2002-07-03'),
(18, 'Shah Atharva Ashish', 1, 'Juhu Mumbai 56', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 14, '9867617533', '9867617533', '2001-03-27'),
(19, 'Vijan Agambir Kamaljeet', 1, 'Juhu Mumbai 56', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 14, '022-26146262', '022-26187575', '2001-03-08'),
(20, 'Gandhi Abhishek Singh', 1, 'Juhu Mumbai 56', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 13, '022-26146262', '022-26187575', '2001-12-29'),
(21, 'Broker Dhruv Udayan', 1, 'Juhu Mumbai 56', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 14, '9619704441', '9619704441', '2001-01-21'),
(22, 'Dedhia Samwit Aatish', 1, 'Juhu Mumbai 400049', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 13, '022-26146262', '022-26187575', '2002-11-08'),
(23, 'Singhvi Aryaman Manoj', 1, 'Juhu Mumbai 400049', '', '', '', 'Juhu', 1, 1, 1, 1, 1, 14, '9821922519', '9821922519', '2001-02-15'),
(24, 'Toprani Vatsala Jak', 1, '312 Sheff Field Towers, Second Cross Lane, Lokhandwala, Andheri ( W ) Mumbai 53', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 14, '9819566857/26397332', '9819566857/26397332', '2001-10-08'),
(25, 'Mehra Simran Pankaj', 1, 'E 903, Royal Classic, Next To Citi Mall, Andheri ( W ), Mumbai-53', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 14, '9821514621/26353566', '9821514621/26353566', '2001-02-16'),
(26, 'Mehta Karishni Mallgya', 1, 'Plot No 5, Sayayadai, JVPD Scheme, NS Road No 9 , Mumbai-49', '', '', '', 'Juhu', 1, 1, 1, 2, 1, 14, '9869432622/26205882', '9869432622/26205882', '2001-05-25'),
(27, 'Singh Avantika Shailesh', 1, '501 West Wind One Beach House Compound, Gandhi Gram Road, Juhu, Mumbai-49', '', '', '', 'Juhu', 1, 1, 1, 2, 1, 14, '9820811447', '9820811447', '2001-07-20'),
(28, 'Chande Prisha Jatin', 1, '1802 La Sorisa, Ln Road, Opp Ruia College, Matunga ( E ), Mumbai-19', '', '', '', 'Matunga', 1, 1, 1, 2, 1, 14, '9820408626/022-24161761', '9820408626/022-24161761', '2001-01-14'),
(29, 'Jain Kinjal Sachit', 1, '17 Empire House, SV Road, Irla, Vileparle ( W ) , Mumbai-56', '', '', '', 'Vileparle', 1, 1, 1, 2, 1, 14, '9819076320/022-26716001', '9819076320/022-26716001', '2001-03-31'),
(30, 'Baf Aya Mehul', 1, '703 Prince Avenue, SV Road, Vileparle ( W ), Mumbai-56', '', '', '', 'Vileparle', 1, 1, 1, 2, 1, 13, '9930723466/26171539', '9930723466/26171539', '2002-02-13'),
(31, 'Soneji Harshika Piyush', 1, 'A Wing 501, Royal Classic Link Road, Andheri ( W ) , Mumbai-53', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 14, '9819187574/022-26392574', '9819187574/022-26392574', '2001-10-11'),
(32, 'Thakkar Aayesha Paresh', 1, '601 Dewani Mahal, Gulmohar Rd No 1, Vile Parle ( W ) , Mumbai-49', '', '', '', 'Vileparle', 1, 1, 1, 2, 1, 14, '9820815475/022-26202747', '9820815475/022-26202747', '2001-04-24'),
(33, 'Sand Ruhani Dushyant', 1, '201-202 Mangal Gut , Plot No.63 Gulmohar Rd 1 Mumbai-49', '', '', '', 'Juhu', 1, 1, 1, 2, 1, 11, '9820955589/26200964', '9820955589/26200964', '2004-10-15'),
(34, 'Gupta Alaikaa', 1, 'Sushila Saran, Manshubhai Rd Malad ( E ) Mumbai-97', '', '', '', 'Malad', 1, 1, 1, 2, 1, 11, '9920013456/28899810/814', '9920013456/28899810/814', '2004-03-01'),
(35, 'Gupte Anshul', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(36, 'Gupte Arv', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(37, 'Doshi Pratham', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(38, 'Gupta Aditya', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(39, 'Ayer Venkatesh', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(40, 'Sharma Amit', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(41, 'Swarup Dhruv', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(42, 'Sharma Shree Ant', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(43, 'tasia Yash', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(44, 'Rajdeo Medhansh', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(45, 'Hoshang Chakravarty', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(46, 'Arora Parv', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(47, 'Sahay Siddharth', 2, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(48, 'Gandhi Kirtam', 2, '', '', '', '', '', 1, 1, 1, 2, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(49, 'Sood Sanchita', 2, '', '', '', '', '', 1, 1, 1, 2, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(50, 'Mehta Yashvi', 2, '', '', '', '', '', 1, 1, 1, 2, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(51, 'Malhotra Dimple', 2, '', '', '', '', '', 1, 1, 1, 2, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(52, 'Shriyan Sarah', 2, '', '', '', '', '', 1, 1, 1, 2, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(53, 'Ahuja Anya', 2, '', '', '', '', '', 1, 1, 1, 2, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(54, 'Kahol Venushee', 2, '', '', '', '', '', 1, 1, 1, 2, 1, 0, '8108221128', '8108221128', '2015-12-22'),
(55, 'Jacom Angelica Dilip', 5, 'A/301 Shri dharmendar i.c coldny borivali(w0 mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 11, '7045684365', '', '2004-11-06'),
(56, 'Maithias Bean Catherine', 5, 'B/303 rainbow apis i.c colony borivali (w) mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 11, '7045684365', '', '2004-02-01'),
(57, 'Raut Harshali Bhuvanesh', 5, '101 pushpa girija dahisar (w) mumbai-400068', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 11, '7045684365', '', '2004-02-05'),
(58, 'Pinto Ayesha Ashein', 5, '8/701 holy cross tower, borivil (w) mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 11, '7045684365', '', '2004-03-08'),
(59, 'Costa Fio christopher', 5, 'holy cross towr borivali (w) mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 11, '7045684365', '', '2004-02-15'),
(60, 'Ferndes Elisha Luciiano', 5, '105, das darshan, holy cross RD, Boaivali (w) mumbai- 400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 10, '7045684365', '', '2005-01-12'),
(61, 'Castelino Andrea Gracy', 5, 'B/504 EL-Plaza, I.C colony,  Borivali (w) mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 11, '7045684365', '', '2004-05-08'),
(62, 'Mazarello Ann Janik', 5, 'B/204 sand apis, Borivali (w) mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 11, '7045684365', '', '2004-07-26'),
(63, 'Mathias Valencia Lancy', 5, 'B/201 Silver Bells, I.c Colony, Borivali (w) mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 10, '7045684365', '', '2005-01-27'),
(64, 'Dsouza Anisha Vijay', 5, '603, Ekta vivek I.c colony, Borivali (w) mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 10, '7045684365', '', '2005-03-10'),
(65, 'Chavan Sejal Nilsh', 5, '2/, suryadarshan, I.c colony, Borivali mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 10, '7045684365', '', '2005-10-31'),
(66, 'Mendonca Arlene Cruz', 5, 'B/403 Royal Springfield , vagaon Brivali (W) mumbai-400103', '', '', '', 'Borivali', 1, 1, 2, 2, 1, 10, '7045684365', '', '2005-02-21'),
(67, 'Rodericks Shale', 5, '', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 0, '7045684365', '', '2015-12-22'),
(68, 'Gonsalves Dewlyn Domnica', 5, '703, Failry Apts, Holy Croos Road, Borivali (w), Mumbai-100103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 10, '7045684365', '', '2004-12-26'),
(69, 'Dantis Shai John', 5, 'B/2, Link View, I.C. Colony, Borivali (w), Mumbai-400103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 11, '7045684365', '', '2004-08-10'),
(70, 'Gonsalves Aleta', 5, '101, Gaur Kripa, Holy Cross Road, 1C Colony, Borivali (w) Mumbai-103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 12, '7045684365', '', '2003-01-10'),
(71, 'Malvankar Tanisha Samir', 5, '4, gorai Pragat CHS, Plot-60, Gorai-11, Borivali(w), Mumbai-400092', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 14, '7045684365', '', '2001-03-29'),
(72, 'Mascarenhas Auria Alvaro', 5, 'A/502, Dipti Blossom, Vrishi complex, 1C colony, Borivali (w), Mumbai-103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 13, '7045684365', '', '2002-06-03'),
(73, 'Panchal Sonia sunil', 5, 'A/1002, Club Belife, Eksar Roar, Borivali (w), Mumbai-92', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 14, '7045684365', '', '2001-12-02'),
(74, 'Pichardo Althea Marion', 5, 'J/14, Stone Castle, CHS, Vall gar, Borivali(w), Mumbai-103', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 14, '7045684365', '', '2001-05-09'),
(75, 'Pancerkar Dyutira resh', 5, 'Jaiaram Heights, Kandar Pada, Dahisar (w), Mumbai-103', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 14, '7045684365', '', '2001-02-25'),
(76, 'Rodrigues Melanie Marian', 5, 'B/15, Hill Abode, Marian Colony, Borivali (w), Mumbai-400103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 13, '7045684365', '', '2002-10-06'),
(77, 'Lobo Twyla Franky', 5, 'B-12, Hill abode CHS, Marian Colony Borivali(w), Mumbai-400103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 13, '7045684365', '', '2002-12-02'),
(78, 'Jalvi Megha', 5, 'A/2, Jai Bhavani Apts, Govind gar Sodawala Lane, borivali (w), Mumbai-92', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 13, '7045684365', '', '2002-06-26'),
(79, 'Pinto Bethany Joceph', 5, 'A/401, Rosemar Apts, CHSC, Holy Cross, 1C Colony, Borivali (w), Mumbai-103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 11, '7045684365', '', '2004-06-28'),
(80, 'Chugh Kareen Inderbir', 5, 'C Chawl, RM-2, CIC Colony, Borivali(w), Mumbai-103', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 14, '7045684365', '', '2001-06-23'),
(81, 'Luthria Esha Harish', 5, 'A/401, Ramkrupa Bldg, next to Gokul Hotel, Borivali(w), Mumbai-92', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 13, '7045684365', '', '2002-01-24'),
(82, 'dar Priya And', 5, '', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 13, '7045684365', '', '2002-05-20'),
(83, 'Dsouza Joan John', 5, 'A/102, Blue Diamond, vagaon, Borivali (w), Mumbai-103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 12, '7045684365', '', '2003-09-19'),
(84, 'Dsouza Enrica', 5, 'A-6/16, Flat No.34, Jolly Jeevan, C.H.S.L, Jeevan Dima gar, Borivali(W), Mumbai-103', '', '', '', 'Borivali', 1, 1, 1, 2, 1, 13, '7045684365', '', '2002-09-30'),
(85, 'Barboza Kaylynn Sacha', 5, 'B/303, Aster, 1C Colony, Borivali(w), Mumbai-103', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 15, '7045684365', '', '2000-02-16'),
(86, 'Silvalobo Dielle Maria', 5, '402, Dom Maria, 1C Colony, Borivali(w), Mumbai-400103', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 15, '7045684365', '', '2000-09-08'),
(87, 'Shettigar vya Prakash', 5, 'B/403, Rupel Heights, 1C Colony, Borivali(w), Mumbai-400103', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 15, '7045684365', '', '2000-07-12'),
(88, 'Yadav Priti Lochai', 5, 'Ganesh Welfare Society, Room No.20, Dahisar (w), Mumbai-68', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 15, '7045684365', '', '2000-11-30'),
(89, 'Fichardo Althea Marion', 5, 'J/41, Stone Castle CHS, Vallabh gar, Borivali (w), Mumbai-103', '', '', '', 'Borivali', 1, 1, 3, 2, 1, 14, '7045684365', '', '2001-05-09'),
(90, 'Shah Abhishek Hiren', 16, '1102, Adith, Sudha Park, Ghatkopar (East), Mumbai-400077', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9819521294 / 9769447171 / 25065852', '9819521294 / 25065852', '2000-02-11'),
(91, 'Dedhia Tanish Raju', 16, 'A-1202, Sudha Park,Ghatkopar East', '', '', '', '', 1, 1, 3, 1, 1, 15, '8879141428 / 25082755', '9930015301 / 21020610', '2000-05-16'),
(92, 'Doshi Niket Tejas', 16, 'C/104, New Chandroday, Bhanushali Lane, Ghatkopar (East), Mumbai-400077', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9029046475 / 25014776', '9821312458 / 25014776', '2000-10-02'),
(93, 'Oza Ajinkya Nimish', 16, 'B/6 Vipul Apartment, 90 Feet Road, 173/174 Garodia gar, Ghatkopar ( E ), Mumbai - 77', '', 'veedhi49@gmail.com,nimishoza74@gmail.com', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '7738186668 / 9323963003 / 022-25063003', '9323963003 / 9867787551 / 022-25063003', '2000-05-03'),
(94, 'Shah Dharmil Parimal', 16, 'C-201 Kailash Tower, R. N. rkar Marg, Ghatkopar ( E ), Mumbai - 400075', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9833683353 / 9820045624 / 02225016350', '9833683353 / 02225016350', '2000-02-02'),
(95, 'Thakkar Anup Pravin', 16, '6/64 Om Chet, Garodia gar, Ghatkopar (East), Mumbai - 400077', '', 'thakkeranup24@gmail.com', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9819015143 / 25065590', '9819015143 / 25065590', '2000-05-04'),
(96, 'Gala Smeet Tejas', 16, '401 Khimji Bhuvan, Khimji Lane, Off M. G. Road, Ghatkopar (East), Mumbai 400077', '', 'smeettejasgala@gmail.com', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9930015301 / 9833282354', '9920534154 / 9987735533', '2000-03-06'),
(97, 'Shah Pakshal Hitesh', 16, 'A/501, Govardhan Dham, 121, Garodia gar, Ghatkopar (East), Mumbai - 77', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9321093030 / 25063030', '9892415577 / 25063030', '2000-09-29'),
(98, 'Mehta Rachit Samir', 16, '22/198, Garodia Palace, Garodia NGR, Ghatkopar ( E ), Mumbai-77', '', '', '', 'Ghatkopar', 1, 1, 2, 1, 1, 9, '9820470030 / 25063707', '9820470030 / 25063707', '2006-08-01'),
(99, 'Gajra Het Prakash', 16, '401, 4th Flr, C-Wing, New Chandrodaya Building, Tilak Road, Ghatkopar ( E ), Mumbai-400077', '', '', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9820329209 / 25014974', '9820329209 / 25014974', '2004-09-10'),
(100, 'Gosar Parth Shreepal', 16, '204, Gayatri Dham, 77, M.G. Road, Ghatkopar, Mumbai- 400077', '', '', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9324522001 / 9867987933', '9867987933 / 9324522001 / 25013953', '2004-05-28'),
(101, 'Kamani Parth Vipul', 16, '1002, Himgiri, Neelkanth Vihar, Vidyavihar ( E ), Mumbai - 400077', '', '', '', 'Ghatkopar', 1, 1, 2, 1, 1, 10, '9920325804 / 9820081918', '9820081918 / 9820081318', '2005-07-14'),
(102, 'Thakrar Dhyay Jaydeep', 16, '13-14 Mahavir Kunj, 26 Garodia gar, Ghatkopar (East), Mumbai - 400077', '', 'reejpd@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9969056588 / 25064488', '9969056588 / 25064488', '2004-11-15'),
(103, 'Parekh Anmol Mehul', 16, '604-Adith, Sudha Park, V.B. Lane Extn., Ghatkopar (East), Mumbai-400077', '', 'mehullparekh@outlook.com,solmparekh@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 10, '9324057611 / 9869064734 / 022-25062292', '9324057611 / 9869064734 / 022-25062292', '2005-06-27'),
(104, 'Vora Varun Pratik', 16, '403, v Sangam, Near Vikrant Circle, Opp Anjali Hotel, 60th ft Road, Sun-Shine Street, Ghatkopar (East), Mumbai-400077', '', 'sneha_vora1730@yahoo.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9819801192 / 9819311192', '9819311192 / 02225065105', '2004-06-17'),
(105, 'Niravethu Ansh Biju', 16, '1/158 Shanti, UBI Lane, Garodia gar, Ghatkopar ( E ), Mumbai-400077', '', 'biju.j.kuruvilla@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 9, '9819360185 / 9819499876', '9819360185', '2006-01-30'),
(106, 'Magar Arv Aniruddha', 16, '9/99, Anubhav Dham, Garodia gar, Ghatkopar ( E ), Mumbai-400077', '', 'drsupriyaawarmagar@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 9, '9820235482 / 25065217 / 25062429', '9820235482 / 25065217 / 25062429', '2006-08-29'),
(107, 'Bhanushali Harshil Deepak', 16, '602, Indraprasth C.H.S.L, Neelkanth valley, 7th Rajawadi road, Ghatkopar (East), Mumbai-400077', '', 'deepakb1013@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 10, '9820221449 / 9920221449 / 21028501', '9820221449 / 9920221449 / 21028501', '2005-04-17'),
(108, 'Timbadia Devam Kaushal', 16, '102-103, Om Shyam Apt, Plot no-172, 90 ft Rd, Ghatkopar (East), Mumbai-400077', '', 'dhara.82@hotmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9987655338 / 25060499', '9820100774 / 9867309609 / 9987655338 / 25060499', '2004-05-15'),
(109, 'Upadhyay Mav Alpesh', 16, '404/4th floor, vsangam bldg, 60 feet Rd, Near Vikrant Circle, Ghatkopar (East), Mumbai-400077', '', 'dralpesh@hotmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 10, '9820177993 / 8097877993 / 022-25062969', '8097877993 / 022-25062969', '2005-06-14'),
(110, 'Doshi Neeti Kinjal', 16, '9, Mahavir Darshan, Sanghani Estate, LBS Road, Ghatkopar (West), Mumbai-400086', '', '', '', 'Ghatkopar', 1, 1, 1, 2, 1, 10, '9869370057', '9323426646', '2005-02-04'),
(111, 'Doshi Prachi Hiren', 16, 'Flat No. 2, Punit Apt., Joshi Lane, Tilak Rd., Ghatkopar ( E ), Mumbai-400077', '', '', '', 'Ghatkopar', 1, 1, 1, 2, 1, 10, '9022769983', '9324020954', '2005-05-19'),
(112, 'Desai Anya Nilesh', 16, '', '', 'vinitavir01@gmail.com', '', '', 1, 1, 2, 2, 1, 11, '9820544659', '9820544659', '2004-02-24'),
(113, 'Pawar Aadya Mangesh', 16, '1203, vdurga Apts., Opp Lakme Compd., Govandi Rly stn Rd., Deor, Mumbai-400088', '', 'mangesh7375@gmail.com', '', 'Deor', 1, 1, 2, 2, 1, 11, '9820534427', '9820534427 / 9320534427', '2004-01-07'),
(114, 'Mehta Yashi Abhay', 16, '1105, Sambhavth bldg, B-wing, Sudha Park, Ghatkopar ( E ), Mumbai - 400077', '', 'mehtadhwani168@gmail.com', '', 'Ghatkopar', 1, 1, 2, 2, 1, 11, '9821551795 / 25064069', '9820352887 / 25064069', '2004-01-17'),
(115, 'Agrawal Leesha Kaushik', 16, '51 Sindhuwadi, M G Road, Ghatkopar (East), Mumbai-400077', '', 'pallaviagrawal77@gmail.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 11, '9820089417 / 9821174167', '9820089417 / 9821174167', '2004-04-20'),
(116, 'Bhatia ndita Prashant', 16, '4/701 Orchard Residency, Near RCITY Mall, LBS Road, Ghatkopar (West), Mumbai 400086', '', 'bhatia-prashant@hotmail.com', '', 'Ghatkopar', 1, 1, 2, 2, 1, 10, '9820606973 / 9920081202 / 25173650', '9820606973 / 25173650', '2005-04-27'),
(117, 'Shah Heer Niraj', 16, '601/212 Shivam Bldg, R. N. rkar Road, Ghatkopar (East), Mumbai - 400075', '', 'niraj@chemtrade.in', '', 'Ghatkopar', 1, 1, 2, 2, 1, 11, '9870188797', '9870188797', '2004-04-27'),
(118, 'Tejasvi Sriram', 16, '4/150, Nishant Bhavan, Garodia gar, Ghatkopar (East), Mumbai 400077', '', 'psri2000@yahoo.com', '', 'Ghatkopar', 1, 1, 2, 2, 1, 10, '9323952880 / 9920377366 / 25063810 / 25063562', '9323952880 / 9920377366 / 25063810 / 25063562', '2005-02-08'),
(119, 'Gala Pearl Sandeep', 16, '501, taan Mahadev Krupa, near Vikrant Circle, Ghatkopar (East), Mumbai-77', '', 'jimmygala71@gmail.com', '', 'Ghatkopar', 1, 1, 2, 2, 1, 11, '9820879333 / 9820719937 / 25068449', '9820879333 / 9820719937 / 25068449', '2004-09-15'),
(120, 'Daftary Masvi Chandresh', 16, 'A/207 Prabhu Apt., Rajawadi, Ghatkopar, Mumbai-400077', '', 'masvidaftary@gmail.com,cdaftary@gmail.com', '', 'Ghatkopar', 1, 1, 2, 2, 1, 11, '9820042751 / 9819342071 / 21022160', '9819342071 / 21022160', '2004-12-04'),
(121, 'Mehta Khushii Bhavesh', 16, 'B/7 Neelkanth Sagar, 90 ft Rd., Garodia gar, Ghatkopar (East), Mumbai-400077', '', 'kymehta@gmail.com', '', 'Ghatkopar', 1, 1, 2, 2, 1, 11, '9969119511 / 25062220', '9969119511 / 9821480074 / 25062220', '2004-01-22'),
(122, 'Jamble Saanika Sunil', 16, 'F/4, Shivai CHS, Chheda gar, Chembur, Mumbai - 400089', '', 'jamble.sangitha@gmail.com', '', 'Chembur', 1, 1, 2, 2, 1, 9, '9833758960 / 25251943', '9833758960 / 9702682342 / 25251943', '2006-05-25'),
(123, 'Paranjape Ishan Nitin', 16, 'B-11/12, Satkar Society, thpai gar, Ghatkopar (East), Mumbai-400077', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9820150082 / 9930326080 / 022-25061698', '9820150082 / 022-25061698', '2002-05-03'),
(124, 'Madhani Ishan Mahesh', 16, 'C-9 Mahavir Jyot, V. B. Lane, Opp. Odeon Building, Ghatkopar (East), Mumbai-400077', '', 'maheshmadhani@hotmail.com,ishanmadhani@gmail.com', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9821132255 / 022-21026433', '9821132255 / 022-21026433', '2002-10-04'),
(125, 'Desai Veer Jignesh', 16, 'B-505/506, Plot no. 121, Garodia gar, Ghatkopar ( E ), Mumbai-400077', '', 'desaiboskey80@gmail.com,desaijignesh75@gmail.com', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '9820176635 / 9323451708 / 25065255', '9820176635 / 25065255', '2003-04-06'),
(126, 'Varun Viswath', 16, '1, Ambika 353 B/11 Vallabh Baug Lane, Ghatkopar ( E ), Mumbai - 400077', '', 'kanlhiiyer@rediffmail.com', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '9920249686 / 25065607', '9920249686 / 9819971058 / 25065607', '2003-03-29'),
(127, 'Bhayani Dharam Shrenik', 16, 'A/10, 3rd Floor, Jalaram gar, Ghatkopar (East), M.G Road, Opp. To Haveli, Mumbai-400077', '', 'shrenik_b@hotmail.com', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '9819688120 / 9833247149 / 21025107 / 21025145', '9833247149 / 21025107', '2003-06-15'),
(128, 'Mehta Rahil Bhaven', 16, '1074/75 Clover Regency, M.G. Road, Ghatkopar (East), Mumbai - 400077', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9022061954 / 32991436', '9322227793 / 32991436', '2002-03-31'),
(129, 'Ved Vansh Jay', 16, '3, Gheewala Bldg, Ghatkopar (East), Near Bhatiawadi, Mumbai-400077', '', 'vanshved21@gmail.com', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9892590999 / 25086123', '8655710071 / 9699993377 / 25086123 / 21023980', '2002-11-21'),
(130, 'Ravishankar Aditya', 16, '84/203 Prabha, Garodia gar, Ghatkopar ( E ), Mumbai-77', '', 'adi24bb@gmail.com', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9322350766 / 25065020', '9322350766 / 25065020', '2002-12-22'),
(131, 'Bhanushali Aryan Prakash', 16, 'B/21, Kailash Park, Chirag gar, L.B.S. Marg, Ghatkopar (West), Mumbai-400086', '', 'prk.bhanushali@gmail.com', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9833982251 / 9769045498 / 25165951', '9833982251 / 9820199498 / 25165951', '2002-08-28'),
(132, 'Neema Prateek Sachin', 16, 'B-17, Kalyan Sagar, Garodia gar, Ghatkopar (East), Mumbai-400077', '', 'neemasachin@gmail.com', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '9833224447 / 02225061947', '9867957532 / 02225061947', '2003-02-19'),
(133, 'Kikavat Hardik Pankaj', 16, '1201/D, Kukreja Palace, Vallabh Baug Lane, Ghatkopar ( E ), Mumbai-400077', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 14, '9769110415 / 9769110301 / 25062918', '9769110301 / 25062918', '2001-07-20'),
(134, 'Heet Shah', 16, '', '', '', '', '', 1, 1, 1, 1, 1, 0, '7045684365', '', '2015-12-22'),
(135, 'Magar Aditya Aniruddha', 16, '99/9 Anubhav Dham, Garodia gar, Ghatkopar ( E ), Mumbai-400077', '', 'drsupriyaawarmagar@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9870327460 / 25065217', '9820235482 / 25065217', '2004-06-11'),
(136, 'Shah Krish Mayur', 16, '403, Tadmor Skyline Oasis, Vidhyavihar (West), Mumbai-400086', '', 'binitashah@gmail.com,mayurshah@gmail.com', '', 'Vidyavihar', 1, 1, 2, 1, 1, 11, '920921859', '9820146018 / 25151991', '2004-03-28'),
(137, 'Gala Jiy Chirag', 16, '604/B wing, Vikas App., Opp. Bank of Baroda, Rajawadi, Ghatkopar ( E ), Mumbai-400077', '', 'chiraggala77@yahoo.com,bijalgala80@yahoo.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9920305099', '9819794847', '2004-10-22'),
(138, 'Agrawal Eishaan Neeraj', 16, '1153 Devang building, 90 Feet Road, Garodia gar, Ghatkopar ( E ), Mumbai-400077', '', 'eshaagrawal234@gmail.com,drmonicaagrawal@rediffmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9820116760 / 25061277', '9820116760 / 25061266', '2004-09-02'),
(139, 'Kunder Arv Hemanda', 16, 'Flat no. 302, Triumph CHS, Pestom Sagar Road No. 2, Chembur, Mumbai-400089', '', 'aru.kunder13@gmail.com,hkkunder@yahoo.com', '', 'Chembur', 1, 1, 2, 1, 1, 10, '9833353075 / 25250405', '9819998214', '2005-08-17'),
(140, 'Shah Kavish Paresh', 16, '182/B-14, Sri Nilayam, Opp. Union Bank of India, Garodia gar, Ghatkopar (East), Mumbai-400077', '', 'kavita.kps333@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9769987228 / 9820587228 / 022-25065671', '9769987228 / 022-25065671', '2004-09-08'),
(141, 'Mehta Dev Viren', 16, '30/31, 1, Mahavir Vihar, Near Nilkanth Tower, Garodia gar, Ghatkopar ( E ), Mumbai-400077', '', 'krishmehta01@yahoo.co.in', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9819196052 / 9820551061 / 25064016', '9819196052 / 9820551061 / 25064016', '2004-07-09'),
(142, 'Bhanushali Sayam Prakash', 16, 'B/21, Kailash Park, Chirag gar, L.B.S. Marg, Ghatkopar (West), Mumbai-400086', '', 'prk.bhanushali@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9833982251 / 9769045498 / 25165951', '9833982251 / 9820199498 / 25165951', '2004-11-20'),
(143, 'Badani Sarthak Mihir', 16, 'A/1101 Sam Bhavth Tower, Sudha Park, Ghatkopar ( E ), Mumbai-400077', '', 'badani.mihir@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9969277777 / 25067777', '9869450505 / 25060707', '2004-02-11'),
(144, 'Shah Shubh Nilesh', 16, 'B/402 Skiffle Bldg No. 143, Above Bank of Baroda, VLB Exn., Ghatkopar (East), Mumbai-400077', '', 'medhavinilesh@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9920141831 / 25062949', '9920141831 / 9820141831 / 25062949', '2004-12-16'),
(145, 'Oza Visharad Nimish', 16, 'B/6 Vipul Apt., 90 Feet Road, 173-Garodia gar, Ghatkopar ( E ), Mumbai-400077', '', 'veedhi49@yahoo.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '7738186668 / 9323963003 / 022-25063003', '7738186668 / 022-25063003', '2004-10-02'),
(146, 'Zaveri Harshvardhan Chetan', 16, '102 F Kukreja Palace, V. B. Lane, Ghatkopar ( E ), Mumbai - 400077', '', 'czaveri@gmail.com,zaveripurvi10@gmail.com', '', 'Ghatkopar', 1, 1, 2, 1, 1, 11, '9819068877 / 25060281', '9820780605 / 25060281', '2004-01-10'),
(147, 'Dhirawani Pragati Kalpesh', 16, '702, Sneh Parag, Plot no-10/11, Pestone Sagar, Road no.-4, Chembur, Mumbai-400089', '', 'kalpeshdhirawani@yahoo.co.in', '', 'Chembur', 1, 1, 1, 2, 1, 13, '9869010803 / 25252521', '9869010803 / 9869484310 / 25252521', '2002-11-29'),
(148, 'Mehta Palak Mehul', 16, 'A-7/25, Mahavir Kiran, Valla baug Lane Ext., Garodia gar, Ghatkopar ( E ), Mumbai-400077', '', 'sej7sep@gmail.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 13, '9892515925', '9892371445', '2002-03-29'),
(149, 'Gala Dhruvi Deepesh', 16, '7, Lathi Villa, Jetha Bhai Lane, Opp. Patel Chk., Ghatkopar (East), Mumbai-400077', '', '', '', 'Ghatkopar', 1, 1, 1, 2, 1, 12, '9324899707 / 9773225588 / 022-25011515', '9324899707 / 022-25011515', '2003-10-02'),
(150, 'Satra Hriti Ritesh', 16, '13, Jaikunwar Niwas, Jivdaya Lane,  Ghatkopar ( W ), Mumbai-400086', '', 'jigsatra17@gmail.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 13, '9004121717', '9833661051', '2002-02-25'),
(151, 'Mangtani Muskan Santosh', 16, '(201294) Shival gar, Pantgal, Ghatkopar (East), Mumbai-400075', '', '', '', 'Ghatkopar', 1, 1, 1, 2, 1, 13, '9321067716 / 02221020786', '9869708826 / 21020786', '2002-03-26'),
(152, 'Dishha Prasad', 16, '3B/14 Kalpataru Aura, L.B.S Marg, Ghatkopar (West), Mumbai-400086', '', 'dishhaprasad@gmail.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 12, '9004426352 / 02225171113', '9821513591 / 9930170376 / 02225171113', '2003-09-21'),
(153, 'Shah Devisi Sunil', 16, '(601,602) 6th floor, Nuttan Mahadev, Vikrant Circle, Ghatkopar ( E ), Mumbai-400077', '', 'devisishah96@yahoo.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 12, '8425084089', '9619452881', '2003-05-26'),
(154, 'Samyukta Rao', 16, '', '', '', '', '', 1, 1, 1, 2, 1, 0, '', '', '2015-12-22'),
(155, 'Kani Devika Sanjay', 16, '401,402 New Kailash Mansion, Derasar Lane, Ghatkopar ( E ), Mumbai-77', '', 'sanjaykani@hotmail.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 14, '9869530921', '9869530921', '2001-05-18'),
(156, 'Aurora Soumya Nitin', 16, 'B-13 Mahavir Park, Garodia gar, Ghatkopar ( East )', '', 'soumyaaroura@gmail.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 14, '9810196097/8097020180/25065740', '9820196097/9820397450', '2001-01-01'),
(157, 'Rajawat Saachi Manoj', 16, '140 A3 , Asha Building , Garodia gar, Ghatkopar ( E ) , Mumbai-77', '', '', '', 'Ghatkopar', 1, 1, 1, 2, 1, 14, '9320854754/9322289392', '9320854754/9322289392', '2001-08-07'),
(158, 'Visaria Utsavi Jiten', 16, 'A-401 Kiran Niketan , Tilak Rd, Ghatkopar ( E ) , Mumbai - 77', '', 'utsavivisaria@yahoo.in', '', 'Ghatkopar', 1, 1, 1, 2, 1, 14, '9324306578/9324024418', '9324306578/9324024418', '2001-02-03'),
(159, 'Karani Krisha Deepak', 16, '303, Sara Residency, Jethabhai Lane, Ghatkopar-E , Mumbai-400077', '', 'krishakarani@yahoo.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 14, '9987255665/25013781', '9821352578/9867786867', '2001-03-04'),
(160, 'Suvar Akansha Ratkar', 16, '404 Sangeeta Apartments , Chaava Compound Near Diamond Garden Chembur - Mumbai - 400071', '', 'akanksha.suvar2001@gmail.com', '', 'Chembur', 1, 1, 1, 2, 1, 14, '9870406863/9322198646', '9870406863/9322198646', '2001-08-29'),
(161, 'Shah Jhanvi Ashish', 16, '215, 601 Darshan 90 Feet Road, Ghatkopar - East , Mumbai - 4000077', '', 'onlyjanu@gmail.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 14, '9819526350/25014377', '9820056350/9920056350/25014377', '2001-12-18'),
(162, 'Parekh Khushi Sanir', 16, 'A / 201, Snit Apts ; Ogadhbhai Lane , Ghatkopar ( E ) , Mumbai-77', '', 'khushiparekh09@yahoo.in', '', 'Ghatkopar', 1, 1, 1, 2, 1, 14, '9324060085/21020085', '9820053715', '2001-07-07'),
(163, 'Malavia Mahek Dharmen', 16, '7 / 701 Arvind , Ramban Lane , Tilak Road , Ghatkopar ( E ) , Mumbai 400077', '', 'mahek.malavia@yahoo.com', '', 'Ghatkopar', 1, 1, 1, 2, 1, 14, '9619084608', '9833016610/9819306410', '2001-02-09'),
(164, 'Pereira Terry Ranear', 17, 'K-23, Mahinndra Park L.B.S Marg, Ghat-( W ), Mum-86', '', '', '', 'Ghatkopar', 1, 2, 3, 1, 1, 13, '9892424611/25105063', '9892424611/25105063', '2002-12-02'),
(165, 'Lad Kedar Jaganth', 17, 'A2/ 202 Neelyog Appartment Pantgar, Ghatkopar ( E ) , Mumbai-75', '', '', '', 'Ghatkopar', 1, 2, 3, 1, 1, 13, '9969667004/9428332717', '9969667004/9428332717', '2002-04-07'),
(166, 'Sadhya Jai Harish', 17, 'F-74, Mahindra Park , L.B.S Marg, Ghat-( W ) , Mum-86', '', '', '', 'Ghatkopar', 1, 2, 3, 1, 1, 13, '9892424611/25105063', '9892424611/25105063', '2002-09-17'),
(167, 'Michael Bonny', 17, '20/ 587 Hamsika Darshan Pantgar, Mumbai', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9819535051', '9819535051', '2002-05-28'),
(168, 'Waghmare Rohit Sandeep', 17, '185/5158 Irshad building B Wing Pantgar Ghatkopar ( E )', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '9870311800', '9870311800', '2003-05-21'),
(169, 'Oza Shasang Rajesh', 17, '3/ B 1 Girijihar, Jivdayalane, Ghatkopar ( W )', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9920698287', '9920698287', '2002-05-06'),
(170, 'Ferndes Calvin Milton', 17, '6/98, Rita Buthello House, Near Hanuman Mandir,Kirol, Vidyavihar ( W ), Mumbai-400086', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9892126765', '9892126765', '2002-11-22'),
(171, 'Pawaskar Sarthak Rajan', 17, 'Kirol Village Vidya Vihar ( West ) Clara Mansion Chawl Room No 16', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 11, '9619910230', '9619910230', '2004-08-09'),
(172, 'Peirera Merric Michel', 17, 'Parashth Darsha / 301 Vidyavhar ( W )', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 11, '9820251451', '9820251451', '2004-04-09'),
(173, 'Mahida Viy Dhiraj', 17, 'A-216 Ambika gar Soc , Khailai, Vidyavihar ( W ) , Mumbai-86', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '8655042338/8655042338', '8655042338/8655042338', '2003-04-07'),
(174, 'Singh Manjit Paramjit', 17, 'B/3 Devprasan Apt, Himalaya Society Aslafha Village, Ghatkopar ( W ) Mum-84', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '8108329877/8767556265', '8108329877/8767556265', '2002-04-14'),
(175, 'Poredi Raj Abhay', 17, 'BN 63, RN 1887 , Near Ap Bazar, Ghatkopar Pantgar ( E ) Mumbai-75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9867411487', '9867411487', '2002-02-03'),
(176, 'More Yash Uddhav', 17, 'C/o Sawant Wadi Chawl, 1st Floor, R.No. 3 Kirol Village, Vidyavihar ( W ) , Mumbai-86', '', '', '', 'Vidyavihar', 1, 1, 3, 1, 1, 14, '9821360790/9870547745', '9821360790/9870547745', '2001-03-18'),
(177, 'D', 17, 'Rita Rodrigues ( H ) , Near Fatima Printing Press Vidyavihar ( W ) , Mumbai-86', '', '', '', 'Vidyavihar', 1, 1, 3, 1, 1, 15, '9833518032', '9833518032', '2000-05-08'),
(178, 'Banji Welvin Wilson', 17, 'Thor Hsg Society, Ramgar ( B ) Ghatkopar ( W ) Mumbai-86', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '', '', '2001-01-20'),
(179, 'Hedge Soham Shyam', 17, 'B-318 Rajhans Chs Ltd. 1st Floor Best gar, Ghatkopar ( E ) Mumbai-400075', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9619917220', '9619917220', '2001-02-24'),
(180, 'Renkutla Pradip Dhanu', 17, 'B/202, Mahavir Empress, Cama Lane, Ghatkopar ( W ), Mum-86', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9867117686/9969463717', '9867117686/9969463717', '2000-11-13'),
(181, 'Jain Hitesh Vimal', 17, '103, Kalpataru Aura Bldg-F, Phase II L.B.S Marg , CTB-168 AETC, Ghatkopar ( W )', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9322491032', '9322491032', '2001-05-27'),
(182, 'Maru Vatsal Pankaj', 17, '50/1492, 2nd Floor, Dnyandeep Chs Ltd Pantgar, Ghatkopar ( E ) Mum-75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9869188217/9819799655/2981874', '9869188217/9819799655/2981874', '2001-07-18'),
(183, 'Indore Rushikesh Sakharam', 17, 'C/704 Gangawadi Chs, L.B.S Marg Ghatkopar ( W ) Mumbai-86', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '7718965430', '7718965430', '2001-08-24'),
(184, 'Jethva Palak resh', 17, 'A/2, Trimurti Bldg, Elchiwadi, Ghatkopar ( W ), Mum-86', '', '', '', 'Ghatkopar', 1, 2, 3, 2, 1, 14, '9004105757', '9004105757', '2001-05-04'),
(185, 'Salvi Aarya', 17, '', '', '', '', '', 1, 1, 1, 2, 1, 11, '', '', '2004-01-06'),
(186, 'Shetty Simran Santosh', 17, 'B-Grenville Park, Opp. Ghatkopar Police Station L.B.S Marg Ghatkopar ( W )', '', '', '', 'Ghatkopar', 1, 1, 1, 2, 1, 12, '9323931366', '9323931366', '2003-06-03'),
(187, 'Aayushi Singh Abhimanyu', 17, 'Kirol Village Rodraikuess Bldg, R.No 2 Vidyavihar ( W ) Mum- 86', '', '', '', 'Vidyavihar', 1, 1, 1, 2, 1, 12, '9821408051', '9821408051', '2003-09-08'),
(188, 'Ansari Shifa Meheboob', 17, 'Munir Band Chawl, R.No 2, Kurla Qureshi gar, Mumbai-70', '', '', '', 'Kurla', 1, 2, 3, 2, 1, 0, '8879599121', '8879599121', '2015-01-19'),
(189, 'Doshi Pankti Ketan', 17, '402, Prakash, 196, R.B Mehta Rd, Ghatkopar ( E ) Mum-77', '', '', '', 'Ghatkopar', 1, 2, 3, 2, 1, 14, '9322734220/21021460', '9322734220/21021460', '2001-11-11'),
(190, 'Shetty Saasha Shashikant', 17, '20, Seagull Angelore-Society Pestom Sagar, Rd-4 Chembur-89', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 12, '9870767015/25253268', '9870767015/25253268', '2003-05-17'),
(191, 'Jadhav Tejal Arun', 17, 'R.No 5, Geregere Mansion Kirol Village, Vidyavihar ( W ) Mum-86', '', '', '', 'Vidyavihar', 1, 2, 3, 2, 1, 14, '9619582213/9702506146', '9619582213/9702506146', '2001-11-01'),
(192, 'Shah Saachi Parag', 17, '601, Nootan Mahadev, Vikrant Circle, Ghatkopar ( E ) Mum-77', '', '', '', 'Ghatkopar', 1, 2, 3, 2, 1, 14, '9769735808', '9769735808', '2001-07-09'),
(193, 'Mehta Dhanvi Ketan', 17, 'A/10 , Mahavir Chhaya, Vallabh Baug Lane, Ghatkopar ( E ) Mum-77', '', '', '', 'Ghatkopar', 1, 2, 3, 2, 1, 14, '9833670630/25060132', '9833670630/25060132', '2001-06-08'),
(194, 'Mange Hasti Mahendra', 17, '03, Kasturi Park, New Maneklal Ghatkopar ( W ) Mum-86', '', '', '', 'Ghatkopar', 1, 2, 3, 2, 1, 14, '9967413540/25162081', '9967413540/25162081', '2001-01-11'),
(195, 'Chhadwa Dhrashti Deepak', 17, '6/A, Sap Apt, Gopal Bhuvan , L.B.S . Marg , Ghatkopar ( W ) M-86', '', '', '', 'Ghatkopar', 1, 2, 3, 2, 1, 14, '8879400424/25140587', '8879400424/25140587', '2001-01-03'),
(196, 'Mer mrata Viyak', 17, 'Vikas Apt, B Wing . 2nd Floor Behind Pant gar Police Station , Ghatkopar ( East ) Mumbai-75', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 15, '9821094611/9870204598', '9821094611/9870204598', '2000-08-10'),
(197, 'Kirar Amita Ashok', 17, '10th Floor, Bld No.152, idu Colony, Pant gar, Ghatkopar- ( East ) Mumbai-75', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 15, '9322778830/9324545519', '9322778830/9324545519', '2000-06-08'),
(198, 'Poojari Nithit Ramesh', 17, '95/A/503, Taragagan Society, Tilak gar, Chembur, Mumbai-400089', '', '', '', 'Chembur', 1, 1, 3, 2, 1, 14, '9869983299', '9869983299', '2000-12-23'),
(199, 'Gathani Labdhi Bhavesh', 17, '12 Prachi , 4th Floor, thpai gar, Opp. CCD, Ghatkopar - ( East ), Mumbai-400077', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 15, '9820800961/8097566184/25061744', '9820800961/8097566184/25061744', '2000-07-26'),
(200, 'Gala Hetavi Sanjay', 20, '308-B, Riddhi Siddhi Apt., 54/57, R.A. Kidwai Road, Matunga', '', '', '', 'Matunga', 1, 1, 1, 2, 1, 13, '9833952324', '9833952324', '2002-03-25'),
(201, 'Shah Trisha Sandeep', 20, '323, D. rayan Niwas, 3rd Floor, Above Lions Clinic Dr. B.A. Road, Matunga', '', '', '', 'Matunga', 1, 1, 1, 2, 1, 12, '9820019942', '9820019942', '2002-12-30'),
(202, 'Mehta Disha Sameer', 20, '53/1, Shakti Bhavan Laxmibai Kelkar Rd., Jain Society Sion (w), Mumbai - 22', '', '', '', 'Matunga', 1, 1, 1, 2, 1, 11, '9930460063/9869749149', '9930460063/9869749149', '2004-01-27'),
(203, 'Mehta Drashti Sameer', 20, '53/1, Shakti Bhavan Laxmibai Kelkar Rd., Jain Society Sion (w), Mumbai - 22', '', '', '', 'Matunga', 1, 1, 1, 2, 1, 11, '9930460063/9869749149', '9930460063/9869749149', '2004-01-27'),
(204, 'Mani Vritee Deepesh', 20, '10/97, Alnkar Bld, Behind Don Bosco School, Matunga - 19', '', '', '', 'Matunga', 1, 1, 1, 2, 1, 11, '9821796608/9821240890', '9821796608/9821240890', '2004-10-03'),
(205, 'Vora Labdhi Ashish', 20, '13/3,4,5, L.R. Bldg, Laxmi rayan Lane, Matunga (C.R.), Matunga - 19', '', '', '', 'Matunga', 1, 1, 1, 2, 1, 11, '9869984242/9322847214', '9869984242/9322847214', '2004-06-13'),
(206, 'Sarvaiya Krish Dinesh', 20, '8/B-163 Seva Samiti gar Sion (e)', '', '', '', 'Sion', 1, 1, 1, 2, 1, 11, '9022026990', '9022026990', '2004-04-07'),
(207, 'Karani Hasti Ketan', 20, '230/7, Layjawala Hos Opp. G.T.B Station, Sion (e)', '', '', '', 'Sion', 1, 1, 1, 2, 1, 12, '9821548195', '9821548195', '2003-05-09'),
(208, 'Gandhi Srushti Subodh', 20, '11/172, Mayur Co-op Hsg. Soc., Sion Koliwada, Sardar gar No. 4,  Mumbai - 37', '', '', '', 'Sion', 1, 1, 1, 2, 1, 12, '9870285768', '9870285768', '2003-12-16'),
(209, 'gada Priyal Paresh', 20, 'b-201-204, Palm House, 16, Mogal Lane,Matunga (w), Mumbai - 19', '', '', '', 'Matunga', 1, 1, 1, 2, 1, 12, '9320854760', '9320854760', '2003-05-13'),
(210, 'Jain Rai Bipin', 20, '201/202, Dev Krupa Bldg, G.K. Road, igaon, Dadar (E), Mumbai - 14', '', '', '', 'Dadar', 1, 1, 1, 2, 1, 11, '9819663505/9773014280', '9819663505/9773014280', '2004-03-10'),
(211, 'Khandar Krish Mehul', 20, '703, Vashi CHS, 543, Laxmi rayan Lane Matunga C.R., Mumbai - 19', '', '', '', 'Matunga', 1, 1, 1, 1, 1, 12, '9870729129/9987029129', '9870729129/9987029129', '2003-09-20'),
(212, 'Shah Devam Jayendra', 20, '520/A, Uday Darshan, 3rd Floor, R.P. Masani Road, Matunga', '', '', '', 'Matunga', 1, 1, 1, 1, 1, 12, '9320574687', '9320574687', '2003-11-07'),
(213, 'Shah Soham Dharmeet', 20, '199, A. Ant Nivas, 2nd Floor, Flat No. 5, Gujarat Soc. Sion (w)', '', '', '', 'Sion', 1, 1, 1, 1, 1, 12, '9619484648', '9619484648', '2003-11-03'),
(214, 'Shah Devam Saurabh', 20, 'Shanti Sadan, Near Old SIES College Sion (w)', '', '', '', 'Sion', 1, 1, 1, 1, 1, 12, '9820704154', '9820704154', '2003-05-25'),
(215, 'Jain Darsh Deepak', 20, '265 B vin Asha Bldg D.S.P. Rd opp Ranjit Studio, Dadar (e), Mumbai - 14', '', '', '', 'Dadar', 1, 1, 1, 1, 1, 12, '9322841004', '9322841004', '2003-06-22'),
(216, 'Maniar Vatsal Jinesh', 20, 'c/402 Fmgee greens, Behind Dosti Estates , Wadala (e)', '', '', '', 'Wadala', 1, 1, 1, 1, 1, 12, '9892540062', '9892540062', '2003-07-25'),
(217, 'GOHIL kul Kiran', 20, 'Kumbhar wada, 3r wadi, Nr. Ram Mandir, 90 Feet Rd., Sion, Mumbai - 17', '', '', '', 'Sion', 1, 1, 1, 1, 1, 11, '9892654663', '9892654663', '2004-04-09'),
(218, 'Shah Shrey Chandrakant', 20, '4, Parvati Niwas, Indian Gymkha Bhaudaji, X-Rd., Plot - 62, Matunga - 19', '', '', '', 'Matunga', 1, 1, 1, 1, 1, 10, '9022558668/24013652', '9022558668/24013652', '2005-05-31'),
(219, 'Kubadia Dhwanil Rakesh', 20, '601, Vaibhav Bldg, Near Brahman Seva Mandal Opp. Axis Bank, D.S. Road, Dadar', '', '', '', 'Dadar', 1, 1, 1, 1, 1, 13, '9920902909', '9920902909', '2002-02-07'),
(220, 'Jain Jaim Nilesh', 20, 'E/5 Room - 10, Shabu gar, Mahim (e)', '', '', '', 'Mahim', 1, 1, 1, 1, 1, 12, '9757476383', '9757476383', '2003-02-01'),
(221, 'Jain Samkit Sandeep', 20, '12, Ad Bhuvan, 1st Floor, St. Xavier Street, Parel Boiwada', '', '', '', 'Parel', 1, 1, 1, 1, 1, 13, '9867767750', '9867767750', '2002-09-22'),
(222, 'Joshi Ruchi Nilesh', 26, '2, Old Manubhuvan, Bhagat Singh Road, Vile Parle (West), Mumbai - 400056', '', '', '', 'Vile Parle', 1, 1, 1, 2, 1, 12, '9320812379/8080424284', '9320812379/8080424284', '2003-12-20'),
(223, 'Chawda Dipika Prav', 26, '502 Sakalp Mistry Complex, J.B. gar, Andheri (E ), Mumbai - 400059', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 12, '9820404466/28234212', '9820404466/28234212', '2003-08-15'),
(224, 'Parikh Taman Sanjay', 26, 'C-1607, Oberoi Splendor, Jogeshwari Vikoli Link Road, Jogeshwari (E ), Mumbai - 400060', '', '', '', 'Jogeshwari', 1, 1, 1, 2, 1, 12, '9820530200/28302516', '9820530200/28302516', '2003-06-25'),
(225, 'Dumre Riddhi Pramod', 26, '601-Sankalp Mistry Complex, J.B. gar, Andheri (E ), Mumbai - 400059', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 12, '9769567450/28205252', '9769567450/28205252', '2003-08-05'),
(226, 'Ghetla ndini Praveen', 26, 'Bun-2 Birla Lane Birlahouse, Juhu', '', '', '', 'Juhu', 1, 1, 1, 2, 1, 12, '9930055073/9820263869', '9930055073/9820263869', '2003-05-16'),
(227, 'Bhayani Roma Vijay', 26, '302, Labhsrushthi, Vallabhabhai Patel Road, Vile Parle ( West), Mumbai - 400056', '', '', '', 'Vile Parle', 1, 1, 1, 2, 1, 11, '9821749249/0226101662', '9821749249/0226101662', '2004-03-11'),
(228, 'Dani Aarya Alpesh', 26, '12, Gokul Apartment Dada Bhai Road, Vile Parle west, Mumbai', '', '', '', 'Vile Parle', 1, 1, 1, 2, 1, 11, '9867452251/26713757', '9867452251/26713757', '2004-01-28'),
(229, 'Bhoir Salvee Indravadan', 26, 'A-19, Arunkamal Society Indulkar Road, Vile Parle East, Mumbai - 400057', '', '', '', 'Vile Parle', 1, 1, 1, 2, 1, 11, '9820609085', '9820609085', '2004-04-04'),
(230, 'yampalli Shivani Chaitanya', 26, 'A-302, Ashok Guruprasad, Hanuman Road, Vile Parle (East), Mumbai - 400057', '', '', '', 'Vile Parle', 1, 1, 1, 2, 1, 11, '983396404/26144084', '983396404/26144084', '2004-01-26'),
(231, 'Berani Anya Amit', 26, '42/1, An Purnima Bld, J.B. gar, Andheri (E ), Mumbai - 400059', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 11, '9820636856/28323167', '9820636856/28323167', '2004-07-27'),
(232, 'Raje Nessra mdev', 26, '302, miella 34 Dadabhai Rd., Vile Parle (w ), Mumbai - 400056', '', '', '', 'Vile Parle', 1, 1, 1, 2, 1, 12, '9819254127/022-26706962', '9819254127/022-26706962', '2003-09-10'),
(233, 'Suryavanshi Dila And', 26, 'B-34/ Orchid Towers, Lokhandwala, Yamu gar, Andheri (w ), Mumbai - 53', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 11, '9867233427/9820255581', '9867233427/9820255581', '2004-09-10'),
(234, 'Chaturvedi Vedant Ganjeev', 26, '259/6, Amrit Kunj, Nea Tolani College, Shre Punjab, Andheri East', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9892599780', '9892599780', '2002-03-17'),
(235, 'Shah Mahir Devang', 26, '24, Maruti Baug, vin Thakkar Road, Vile Parle (East)', '', '', '', 'Vile Parle', 1, 1, 1, 1, 1, 13, '9821139205/26122366', '9821139205/26122366', '2002-03-26'),
(236, 'Chamadia Utkarsh Umesh', 26, 'Andheri (E ), J.B. gar - 400059, Dipti Corals, 103', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 12, '9819933729', '9819933729', '2003-11-15'),
(237, 'Jain Dhruvil Dilip', 26, '202, Amul Apartments, Shraddhand Road, Vile Parle (East )', '', '', '', 'Vile Parle', 1, 1, 1, 1, 1, 13, '9833840691/26145230', '9833840691/26145230', '2002-02-08'),
(238, 'Jain Krish Sanjay', 26, '1101, Kalash Society, Poddar Road, Santacruz (West)', '', '', '', 'Santacruz', 1, 1, 1, 1, 1, 13, '9769900065', '9769900065', '2002-08-05'),
(239, 'Chauhan Yash Biren', 26, '65/8, Datta Smruti, J.B. gar, Andheri (East), Mumbai - 400059', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9819893001/28354876', '9819893001/28354876', '2002-03-06'),
(240, 'Ramparia Hardik Bhavesh', 26, '8, United Tents, Vile Parle (East), Sahar Road, Mumbai - 400056', '', '', '', 'Vile Parle', 1, 1, 1, 1, 1, 13, '9869261002', '9869261002', '2002-05-19'),
(241, 'Yermal Vibhav Ganesh', 26, 'A/202, Universal Paradise, Vile Parle (East), Mumbai - 400057', '', '', '', 'Vile Parle', 1, 1, 1, 1, 1, 13, '9930700128/26125128', '9930700128/26125128', '2002-03-20'),
(242, 'Chauhan Aditya Ajay', 26, '303, Rajhans Apt., riman Road, Vile Parle (East), Mumbai', '', '', '', 'Vile Parle', 1, 1, 1, 1, 1, 13, '9820457534/26105455', '9820457534/26105455', '2002-02-25'),
(243, 'Khunt Gopal Jitendra', 26, '302, Aarambhi Building, Dadabhai Road, Vile Parle (West ), Mumbai - 400056', '', '', '', 'Vile Parle', 1, 1, 1, 1, 1, 13, '26715650', '26715650', '2002-05-07'),
(244, 'Gaiwala Jayant Sandip', 26, '901, Neumec Heights, Shraddhand Road, Vile Parle (E ), Mumbai - 400057', '', '', '', 'Vile Parle', 1, 1, 3, 1, 1, 14, '9819347425', '9819347425', '2001-10-25'),
(245, 'Parekh Shaurya Suraj', 26, 'A-3/161, Snehdhara Soc., Dadabhai Rd. No. 3, Vile Parle (W ), Mumbai - 56', '', '', '', 'Vile Parle', 1, 1, 3, 1, 1, 14, '9833150378/26716330', '9833150378/26716330', '2001-01-26'),
(246, 'Suraj Jerome Linin', 26, 'A-402, Rajesh Park, Santacruz (E ), Vakolia, Mumbai - 400055', '', '', '', 'Santacruz', 1, 1, 3, 1, 1, 14, '842203163', '842203163', '2001-06-10'),
(247, 'Mistry Vatsal Chetan', 26, 'D-2/310, Viman Darshan, Sahar Road, Andheri (E ), Mumbai - 400069', '', '', '', 'Andheri', 1, 1, 3, 1, 1, 14, '9892719065/26843438', '9892719065/26843438', '2001-01-07'),
(248, 'Shah Jay Bharat', 26, '303, Vardhaman Apt., Hanuman Road, Vile Parle (E )', '', '', '', 'Vile Parle', 1, 1, 3, 1, 1, 5, '9819311160/26166362', '9819311160/26166362', '2010-09-26'),
(249, 'Parekh Jevin Manish', 26, 'A-4, Nirmal Milan, Nehru Road, Vile Parle (E ), Mumbai - 400057', '', '', '', 'Vile Parle', 1, 1, 3, 1, 1, 14, '9867584356/26114629', '9867584356/26114629', '2001-11-20'),
(250, 'Shah Viraj Neerav', 26, '102, Everest Terraces, Tejpal Road, Vile Parle (East)', '', '', '', 'Vile Parle', 1, 1, 3, 1, 1, 14, '9821010905/02226103742', '9821010905/02226103742', '2001-11-03'),
(251, 'Chokshi Ishan Rajiv', 26, '62, Utsav, Podar Road, Santacruz (West)', '', '', '', 'Santacruz', 1, 1, 3, 1, 1, 14, '9821162220', '9821162220', '2001-07-16'),
(252, 'Modi Shubham Kamlesh', 26, '9/10, Venu Bldg, Azad Road, Vile Parle (E )', '', '', '', 'Vile Parle', 1, 1, 3, 1, 1, 14, '9224119870/26186208', '9224119870/26186208', '2001-10-27'),
(253, 'Shah Chaitya Bhavesh', 26, 'B/35, 6th Floor, Jeevan Sudha, Juhu Lane, Andheri (W )', '', '', '', 'Andheri', 1, 1, 3, 1, 1, 14, '9820355488', '9820355488', '2001-09-04'),
(254, 'Shah Jenil Viral', 26, 'Parsi Panchayat Road, Andheri (E ), Mumbai - 400069', '', '', '', 'Andheri', 1, 1, 3, 1, 1, 14, '9820212812/9773695695', '9820212812/9773695695', '2001-12-19'),
(255, 'Bhagwe Aayush Ajit', 26, 'B-502 Viyak, S.V. Road, Vile Parle (West)', '', '', '', 'Vile Parle', 1, 1, 3, 1, 1, 14, '9920036697', '9920036697', '2001-01-10'),
(256, 'Vishal Shah', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 16, '-', '-', '1999-11-24'),
(257, 'Prav Dixit', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 16, '-', '-', '1999-10-08'),
(258, 'Aarish Mansuri', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 15, '-', '-', '2000-05-29'),
(259, 'Mav Damani', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 16, '-', '-', '1999-10-06'),
(260, 'Megh Sowani', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 16, '-', '-', '1999-10-06'),
(261, 'Karan B Shah', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 16, '-', '-', '1999-07-13'),
(262, 'Revant Singal', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 15, '-', '-', '2000-11-04'),
(263, 'Samkit Shah', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 15, '-', '-', '2000-06-23'),
(264, 'Harsh Sanghavi', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 16, '-', '-', '1999-09-07'),
(265, 'Aashay Shah', 31, '-', '', '', '', '', 1, 1, 3, 1, 1, 15, '-', '-', '2000-04-14');
INSERT INTO `sfa_student` (`id`, `name`, `school`, `address`, `content`, `email`, `image`, `location`, `sports`, `sportscategory`, `agegroup`, `gender`, `isparticipant`, `age`, `phone`, `emergencycontact`, `dob`) VALUES
(266, 'Niyoshi Jain', 31, '-', '', '', '', '', 1, 1, 3, 2, 1, 15, '-', '-', '2000-04-05'),
(267, 'Stuti Shetty', 31, '-', '', '', '', '', 1, 1, 3, 2, 1, 15, '-', '-', '2000-08-03'),
(268, 'Kashish Patwa', 31, '-', '', '', '', '', 1, 1, 3, 2, 1, 15, '-', '-', '2000-10-19'),
(269, 'Snehal Chaurasia', 31, '-', '', '', '', '', 1, 1, 3, 2, 1, 15, '-', '-', '2000-08-16'),
(270, 'Pooja Shah', 31, '-', '', '', '', '', 1, 1, 3, 2, 1, 15, '-', '-', '2000-10-24'),
(271, 'Maaya Shah', 31, '-', '', '', '', '', 1, 1, 3, 2, 1, 15, '-', '-', '2000-10-23'),
(272, 'Aash Shrishrimal', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 14, '-', '-', '2001-05-31'),
(273, 'Gayatri Shinde', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 14, '-', '-', '2001-09-29'),
(274, 'Dixita Shah', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 14, '-', '-', '2001-05-20'),
(275, 'Preskha Shah', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 14, '-', '-', '2001-01-15'),
(276, 'Tanya Modi', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 14, '-', '-', '2001-05-18'),
(277, 'Hritika mehta', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 14, '-', '-', '2001-01-10'),
(278, 'Drishti Doshi', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 14, '-', '-', '2001-06-24'),
(279, 'Smriti Choudhary', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 14, '-', '-', '2001-01-01'),
(280, 'Prisha Shah', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 13, '-', '-', '2002-08-12'),
(281, 'Unti Shah', 31, '-', '', '', '', '', 1, 1, 1, 2, 1, 13, '-', '-', '2002-08-31'),
(282, 'Madix Ragas Nitin', 32, 'J3 RHS sector 6 vashi near nm sq', '', '', '', 'vashi', 1, 1, 1, 1, 1, 11, '9320304001', '27820890', '2004-05-13'),
(283, 'Kale Parth Ashok', 32, '302, Sai pooja, plot no-34, near relience fresh,sec-10, vashi, vi mumbai 400703', '', '', '', 'vashi', 1, 1, 1, 1, 1, 11, '9967437491', '9224105285', '2004-02-19'),
(284, 'Shetty Tanish Arun', 32, 'Sap CHS,plot no. 1,Flat no-15 Sec-4, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 1, 1, 1, 10, '9324724999', '27823151', '2005-05-18'),
(285, 'Kathayat Jay Balvant', 32, '10/703, Fam CHSL,plot no. 19, sec no 11, koparkhane 400709', '', '', '', 'koparkhane', 1, 1, 2, 1, 1, 10, '9820418152', '-', '2005-04-04'),
(286, 'Pawar Vedant Sanjay', 32, 'Bul bull sec, plotno. 50, sec 9, vashi', '', '', '', 'vashi', 1, 1, 1, 1, 1, 11, '9821685795', '-', '2004-10-07'),
(287, 'Mongal As Salim', 32, 'A-14, Mahagajan, plot no.19, sector 9-A, vashi 400703', '', '', '', 'vashi', 1, 1, 2, 1, 1, 10, '9321914484', '-', '2005-05-06'),
(288, 'Khot Akash Vikas', 32, 'B-19,New Gulmohar, Plot np.16, Sec 16 A, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 1, 1, 1, 13, '9322371777', '27669786', '2002-07-18'),
(289, 'Mhatre Aditya Pramod', 32, 'B-9 padmalaya CHs, SEC-16 A, vashi', '', '', '', 'vashi', 1, 1, 1, 1, 1, 13, '9819301849', '27662105', '2002-03-13'),
(290, 'Awate Hrishikesh Anil', 32, 'Rajashatanu CHS, A-301, sector 16, Vashi, vi Mumbai', '', '', '', 'vashi', 1, 1, 1, 1, 1, 13, '9967417329', '27665077', '2002-06-07'),
(291, 'Samar Tanmay Ganpat', 32, 'G-21, Grain Merchant CHS Sector- 17, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 1, 1, 1, 13, '9892299349', '27651073', '2002-01-08'),
(292, 'Kadam Adithya Dattatray', 32, 'C-44/n-4, Amart\\jyothi, M.G Complex, Sec- 14, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 1, 1, 1, 13, '7588638240', '-', '2002-05-18'),
(293, 'Shetty abhishek Sunil', 32, 'Mahajan, Sec-A, vi mumbai', '', '', '', 'vashi', 1, 1, 1, 1, 1, 13, '9594516285', '-', '2002-07-05'),
(294, 'Dias Stefan Charles', 32, 'Ganesh tower, B-1304, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 1, 1, 1, 12, '9892303305', '2227882066', '2003-05-14'),
(295, 'Somy Dominic', 32, 'Urja CHS, B- 36, Sec- 10 A, Vashi, vi Mumbai', '', '', '', 'vashi', 1, 1, 1, 1, 1, 12, '9892303305', '2227882066', '2003-05-14'),
(296, 'Deepak Darsha', 32, 'A-1 Amit Sagar Sec- 10 A, vashi, vi mumbai-703', '', '', '', 'vashi', 1, 1, 3, 2, 1, 14, '9967091520', '-', '2001-09-20'),
(297, 'Waghmode Bhavika Sanjay', 32, 'A-7 Plot no-39, Simandhar CHs, sec- 14, vashi, vi mumbai- 703', '', '', '', 'vashi', 1, 1, 3, 2, 1, 14, '9665753284', '-', '2001-07-31'),
(298, 'Gawde Aditi Vijaykumar', 32, 'landa/304 Plot no-25, sec- 15, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 3, 2, 1, 14, '9819272615', '-', '2001-09-28'),
(299, 'Surve Ishita Arun', 32, 'A- 4 Amit Sagar sec- 10 A, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 3, 2, 1, 14, '9819252261', '-', '2001-03-28'),
(300, 'Patankar Aabha Subodh', 32, 'F.2/ C-1, Rainbow Hs.Society, Sec- 10, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 1, 2, 1, 13, '9920533449', '27668617', '2002-11-16'),
(301, 'Vaity Vaibhavi Viy', 32, '', '', '', '', '', 1, 1, 1, 2, 1, 12, '9967336133', '8097046815', '2003-05-02'),
(302, 'Yadav Jhanvi Hemant', 32, 'Prem Sagar, E:37, 1:3, sec-29, Vashi,vi mumbai', '', '', '', 'vashi', 1, 1, 3, 2, 1, 16, '9324002530', '-', '1999-07-28'),
(303, 'Chatterzee Bipasha Biplob', 32, 'A-702, ShriKrish CHS, Sec-14, Palhu beach, road sanpada, vi mumbai', '', '', '', '', 1, 1, 1, 2, 1, 13, '9833466200', '-', '2002-07-27'),
(304, 'Singh Rishika Ravish', 32, '4-801, Sea Breeze, CHS,Sec-16 Nerul, vi mumbai', '', '', '', 'nerul', 1, 1, 1, 2, 1, 13, '9820559646', '27727597', '2002-12-21'),
(305, 'Raut Aniket Santosh', 32, 'Juhu gar CHS, A/18, Sec- 15, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 3, 1, 1, 14, '9223394330', '27656932', '2001-08-02'),
(306, 'Maurya Rohit Rajesh', 32, 'Juhu gar, BLD. No. 49, B/8, Sec- 9, vashi, vimumbai', '', '', '', 'vashi', 1, 1, 3, 1, 1, 14, '9892987499', '-', '2001-07-26'),
(307, 'Shetty Aditya Sunil', 32, 'Mahagajan Apt, sec- 9 A, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 3, 1, 1, 16, '9594516285', '-', '1999-12-01'),
(308, 'Ferndes Jordan Darius', 32, 'Plot no. 18, Sec- 15, Koper Kharirne ui Mumbai, 400709', '', '', '', '', 1, 1, 3, 1, 1, 15, '9892224490', '-', '2000-11-01'),
(309, 'Kottur Srinivas Vijaykumar', 32, 'Beside vashi fire brigadge, sec-16', '', '', '', 'vashi', 1, 1, 1, 1, 1, 14, '9987102369', '-', '2001-02-14'),
(310, 'Thale Ameya Sushil', 32, 'A-601, Staff Quarters, Fr. AgnelComplex, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 3, 1, 1, 15, '9869396998', '-', '2000-05-29'),
(311, 'Monteiro Ashley Aisiah', 32, 'Mahagajan Apt, sec- 9 A, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 3, 1, 1, 15, '9769932392', '-', '2000-01-10'),
(312, 'Mithani Amin Salim', 32, 'F-1/1/6, Sec-6, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 3, 1, 1, 16, '9819119626', '-', '1999-12-06'),
(313, 'Sheva Vedant', 32, 'A-10 Sinhagad CHS, Sec-6, Vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 3, 1, 1, 16, '9699225944', '-', '1999-08-25'),
(314, 'Israni Bhunika Dhiraj', 32, 'Sec-17, Plot- 61 Janki Apt, Flat- 702, 7th floor, A-wing next to maharashtra bank vashi', '', '', '', 'vashi', 1, 1, 2, 2, 1, 11, '9819154491', '-', '2004-05-07'),
(315, 'Shaikh Sarah Mumtaz', 32, 'Kulsam villa, 206, near balaji garden, Koparkhairane, vi mumbai', '', '', '', '', 1, 1, 2, 2, 1, 11, '9969697758', '', '2004-07-12'),
(316, 'Shetty Twisha Arun', 32, 'Sap CHS,plot no.10, flat no.15, Sec- 4, vashi,vi mumbai', '', '', '', 'vashi', 1, 1, 2, 2, 1, 10, '9324724999', '27823151', '2005-05-18'),
(317, 'Ajmani Muskaan Ricky', 32, 'C-3/N-3, New Alkamand CHS, M>Gcomplax, Sec-14, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 2, 2, 1, 11, '8458819321', '-', '2004-11-07'),
(318, 'Pereira Rianne Rold', 32, '704 AB, Ram Laxman Tower, Sec- 18, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 2, 2, 1, 11, '9820465025', '40134089', '2004-07-24'),
(319, 'Shah Neetya Chirag', 32, '1-10 Telec, Sec- 17, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 2, 2, 1, 11, '9619067815', '27894431', '2004-01-17'),
(320, 'Shelke Srushti Sandeep', 32, 'A-22, Rh-2, Sec-6, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 2, 2, 1, 11, '9820354998', '27820517', '2004-01-13'),
(321, 'Chavan Tanisha Umesh', 32, 'F-2/4, Sec-6, vashi, vi mumbai', '', '', '', 'vashi', 1, 1, 2, 2, 1, 11, '9930820606', '27822273', '2004-05-20'),
(322, 'Sailesh Jadhav', 47, 'B-303,bhoomika avenue,,plotno.42,sec-50(old),nerul', '', '', '', '', 1, 1, 3, 1, 1, 15, '9987997633', '', '2000-10-13'),
(323, 'resh Balamurugan', 47, '203,Moreshwar heights,sec-34,plot no. 9A,kamothe,vi mumbai.', '', '', '', '', 1, 1, 3, 1, 1, 15, '9920631493', '', '2000-06-15'),
(324, 'Laksh Anil Sah', 47, 'A-203,Jimmy park-II,sec-19A,nerul,vi mumbai.', '', '', '', '', 1, 1, 3, 1, 1, 15, '9892432765', '', '2000-06-28'),
(325, 'Rohit Ravindra Nikam', 47, 'A-102,Sai sadan,sec-40,plot no.21,nerul,vi mmumbai.', '', '', '', '', 1, 1, 3, 1, 1, 15, '9819125102', '', '2000-06-24'),
(326, 'Aditya Vardhan', 47, 'A-13,bol bess. Complex,S--13,nerul.', '', '', '', '', 1, 1, 3, 1, 1, 15, '8097714497', '', '2000-03-17'),
(327, 'Aakash Subramanuam', 47, '401, sadguru pride,sec-42A,plot no.6,nerul.', '', '', '', '', 1, 1, 3, 1, 1, 15, '900408038', '', '2000-02-15'),
(328, 'Aayush Singh', 47, '701,vaishvi towers,sec-44,nerul,vi mumbai.', '', '', '', '', 1, 1, 3, 1, 1, 15, '9869761018', '', '2000-11-06'),
(329, 'Melto Michael Suares', 47, 'B-304, Radha shyam,sec-42,plot no.6,nerul,vi mumbai.', '', '', '', '', 1, 1, 3, 1, 1, 15, '', '', '2000-09-20'),
(330, 'Patel Laksh Pankaj', 49, '1-1702, Empire Estate, Sec -20, Kharghar, vi Mumbai', '', '', '', 'Kharghar', 1, 1, 3, 1, 1, 15, '9920755502', '9920755502', '2000-05-03'),
(331, 'Sharma Deepanshu Sanjeev', 49, 'D-135, Raghuth Vihar Sec  - 14, Kharghar, vi Mumbai', '', '', '', 'Kharghar', 1, 1, 3, 1, 1, 15, '9920396344', '9920396344', '2000-01-21'),
(332, 'Singh Aditya Akhilesh', 49, 'Moharch Luxuria, Sec -18, Kharghar, vi Mumbai', '', '', '', 'Kharghar', 1, 1, 3, 1, 1, 16, '9594901134', '9594901134', '1999-12-21'),
(333, 'Badekar Chaitanya Purnd', 49, 'F6-4, 14, Priyadarshani Chs., Spagetti, Kharghar, Sec -15, vi Mumbai', '', '', '', 'Kharghar', 1, 1, 3, 1, 1, 14, '9969314204', '9969314204', '2000-12-23'),
(334, 'Patil Siddhant Rajendra', 49, '401/A Wing, Suyog Apt., Sec - 3, Kharghar, vi Mumbai', '', '', '', 'Kharghar', 1, 1, 3, 1, 1, 15, '9325391524', '9325391524', '2000-04-02'),
(335, 'Thuluva Bhuvan Chandra', 49, 'D-131, Raghuth Vihar, Sec - 14, Kharghar, vi Mumbai - 410210', '', '', '', 'Kharghar', 1, 1, 3, 1, 1, 14, '9987036614/9987589110', '9987036614/9987589110', '2001-02-28'),
(336, 'Borude Aditya Harshad', 49, 'A-304, Neel Sidhi Orte, Opp. Little World Mall, Sec - 8, Kharghar, vi Mumbai - 410210', '', 'adityaborude@gmail.com,harsha1301@gmail.com', '', 'Kharghar', 1, 1, 3, 1, 1, 15, '8879000546/9833049663/9820603636', '8879000546/9833049663/9820603636', '2000-05-31'),
(337, 'Grewal Manish Suraj', 49, 'Jalvau Vihar, Kharghar, Sec - 20', '', '', '', 'Kharghar', 1, 1, 3, 1, 1, 15, '9769508643', '9769508643', '2000-08-29'),
(338, 'Mishra Avanish Ramkumar', 49, 'A-19-14, Sector 15, Kharghar, vi Mumbai', '', '', '', 'Kharghar', 1, 1, 3, 1, 1, 13, '9619165417', '9619165417', '2002-07-06'),
(339, 'Shaikh Saad Shahid', 51, 'hazi kasam chawl no13 r.no.14 mumbai', '', '', '', '', 1, 1, 3, 1, 1, 15, '9967673067', '', '2000-12-16'),
(340, 'Khan Ibaad Shahzad', 51, '90/b 18/33 SOFIYA ZUBAIR ROAD MUMBAI', '', '', '', '', 1, 1, 3, 1, 1, 14, '9004433780', '', '2000-12-28'),
(341, 'Khan Abubaker Anwar', 51, 'Haji kasam bldg Room no.13 @nd floor nwar tahoora', '', '', '', '', 1, 1, 3, 1, 1, 16, '9867309842', '', '1999-10-12'),
(342, 'Khan Shoeb Sharif', 51, 'J.J road, Vasil khan marg tambawala bldg Mumbai', '', '', '', '', 1, 1, 3, 1, 1, 15, '9664064973', '', '2000-08-14'),
(343, 'Farooqui Afraz Jalaluddin', 51, '23/12,yusuf bldg,3rd peer zhan street ,grada,mumbai', '', '', '', '', 1, 1, 3, 1, 1, 14, '76661567231', '9004302497', '2001-11-28'),
(344, 'Khan ved Jibrail', 51, 'J.J Mumbai -09,near gpada 2nd floor', '', '', '', '', 1, 1, 3, 1, 1, 14, '8080791441', '', '2001-11-26'),
(345, 'Kshivsagar Kshitij', 51, 'B.I.T chawl,sith mothi sha lane road', '', '', '', '', 1, 1, 3, 1, 1, 13, '8652107109', '8108901208', '2002-12-07'),
(346, 'Shaikh Jaseem Mohd.', 51, '96Dimtimkar rd. gpada haji bldg. r.no 66', '', '', '', '', 1, 1, 3, 1, 1, 14, '9320712261', '', '2001-09-27'),
(347, 'Shaikh Ayan Safi', 51, '1/98 B.I.T chawl,I.R  road near J.J hospital mumbai', '', '', '', '', 1, 1, 3, 1, 1, 15, '9987720721', '9224563994', '2000-11-17'),
(348, 'Shaikh Ayub Sabir', 51, 'A/6 Khatija bldg 1st floor surti mohalla gpada', '', '', '', '', 1, 1, 3, 1, 1, 15, '9321964207', '', '2000-05-14'),
(349, 'Singh Sumeet Satyajeet', 51, 'Regi Pacis compound 1st floor Rno ^ A love lane', '', '', '', '', 1, 1, 3, 1, 1, 13, '8805081112', '', '2001-12-27'),
(350, 'Shamsi Md Hammad hayat', 51, 'Gulmohar Terrace, JJ two tanks near gpada', '', '', '', '', 1, 1, 3, 1, 1, 14, '98205355675', '', '2001-10-09'),
(351, 'Siddhu Chirag Sudesh', 55, 'R.N 18/19 Ramabai Colony, Ambedkar gar, Ghatkopar  E, Mumbai 400084', '', '', '', 'Ghatkopar E', 1, 1, 3, 1, 1, 15, '8097916344', '8097916344', '2000-11-27'),
(352, 'Killedar Harshad  Pandurang', 55, '14, Bdu Chawl, Mohili Village, Sakika, Mumbai 400072', '', '', '', 'Sakika', 1, 1, 3, 1, 1, 14, '7715090987', '7715090987', '2001-10-11'),
(353, 'Gupta Aniket Ramakant', 55, 'Savitribai Phule gar Sai Chhaya Soc Bldg 1, R. No 202, Pant gar, Ghatkopar E, Mumbai 400075', '', '', '', 'Ghatkopar E', 1, 1, 3, 1, 1, 14, '8419980045', '8419980045', '2001-07-12'),
(354, 'Gautam Kapil Ajay', 55, 'Ramabai Colony, Jai Prabhat gar, Galli No. 3, Ghatkopar E, Mumbai 400075', '', '', '', 'Ghatkopar E', 1, 1, 3, 1, 1, 13, '9619392081', '9619392081', '2002-11-10'),
(355, 'Waghralkar Varun Mangesh', 55, 'Bldg No. 51, R. No 4722, Pant gar, Ghatkopar E, Mumbai 400075', '', '', '', 'Ghatkopar E', 1, 1, 3, 1, 1, 13, '9702379399', '9702379399', '2002-04-09'),
(356, 'Singh Akash Awadesh Kumar', 55, 'R. No. 172/76, 90 Feet Road, Guruk gar Pant gar, Ghatkopar E, Mumbai 400075', '', '', '', 'Ghatkopar E', 1, 1, 1, 1, 1, 14, '9821144863', '9821144863', '2001-03-02'),
(357, 'Upadhyay Pravin Sugriv', 55, 'Chawl No. 8, Room No. 919, Durga Mata Chawl, Kamraj gar, Ghatkopar E, Mumbai 400077', '', '', '', 'Ghatkopar E', 1, 1, 1, 1, 1, 14, '9821433805', '9821433805', '2001-02-08'),
(358, 'Tripathi Amar Umeshth', 55, '90 Feet Road, Gali No. 5, Guruk gar, Pant gar, Ghatkopar  East, Mumbai 400075', '', '', '', 'Ghatkopar E', 1, 1, 1, 1, 1, 14, '8691835980', '8691835980', '2001-08-27'),
(359, 'Giri Saurabh Sunil', 55, 'Ramabai Colony, D.B. Pawar Chowk, Ghatkopar E, Mumbai 400075', '', '', '', 'Ghatkopar E', 1, 1, 1, 1, 1, 13, '8097187493', '8097187493', '2002-04-18'),
(360, 'Kharat Karan Sanjay', 55, 'Devi Krupa Bldg Room No. 305, Gauri Shankar Wadi, Ghatkopar E, Mumbai 400075', '', '', '', 'Ghatkopar E', 1, 1, 1, 1, 1, 14, '9619865352', '9619865352', '2001-03-09'),
(361, 'Prajapati Hemant Chhotelal', 55, 'Yamu Cold Drink House, 90 Feet Road, Vallabh Society, Pant gar, Ghatkopar E', '', '', '', 'Ghatkopar E', 1, 1, 1, 1, 1, 14, '', '', '2001-11-07'),
(362, 'Kamble Dhiraj Sanjay', 55, 'Jai Ambe Co Op So Varsha gar,  Park Site, Vikhroli W, Mumbai 400079', '', '', '', 'Vikhroli W', 1, 1, 1, 1, 1, 14, '9768271811', '9768271811', '2001-12-16'),
(363, 'Kho Darshan Hitesh', 55, '303, Talasheila ilkanth Kingdom, Vidya Vihar (W), Mumbai', '', '', '', 'Vidyavihar W', 1, 1, 1, 1, 1, 12, '9324123313', '9324123313', '2003-04-29'),
(364, 'Deshmukhe Omkar Prakash', 55, 'A/304, Alpa Park, Chirag gar, Ghatkopar W, Mumbai 400086', '', '', '', 'Ghatkopar W', 1, 1, 1, 1, 1, 14, '9920109050', '9920109050', '2001-06-07'),
(365, 'Motivarus Pruthavi Mmukesh', 55, 'R/1, Bldg No. 2, Durga Parmeshwar Sai Baba Marg, Pant gar, Ghatkopar E', '', '', '', 'Ghatkopar E', 1, 1, 1, 1, 1, 12, '9930011965', '9930011965', '2003-02-20'),
(366, 'Parmar Pratham Suresh', 55, 'R/14, Chawl No. 1, Jay Ram Baba Chawl, Safedh Pool Kurla Andheri Road, Mumbai 400072', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 12, '9594286959', '9594286959', '2003-08-30'),
(367, 'Mary inish Bharat', 55, 'Room No. 6, Amiz, Zamir Niwas, N.S.S. Road, Alfa Village', '', '', '', 'Alfa Village', 1, 1, 1, 1, 1, 13, '9324731117', '9324731117', '2002-12-03'),
(368, 'Vyas Adarsh Uday', 55, '185/3186 Trishul Co-op Shivaji Technical School Mumbai Pantgar, Ghatkopar (e )', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '8767289332', '20123300', '2000-07-24'),
(369, 'Joshi Sarthak Deepak', 55, '403, Nootan Mahadev, Kripa 90ft Road, Behind, Vikrant Circle, Ghatkopar (e )', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9223388540', '9221999894', '2001-05-17'),
(370, 'Khan Yash Ashok', 55, '26, Sidhubaug A Tilak Road, Ghatkopar (e )', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9831592275', '8879074742', '2001-11-10'),
(371, 'Rathod Mav Bhikubhai', 55, 'Katodipada Khandoba Tekdi Nr. Saibaba Mandir Golibar Rd., Ghatkopar (w )', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '', '', '2001-01-16'),
(372, 'Singh Kaushal Mahipal', 55, 'Room No. 5, Chawl No. 3, Guruk gar, Pantgar, Ghatkopar (e )', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9768267045', '9768267045', '2000-05-08'),
(373, 'Sahani Deepak Ram', 55, 'Old Reti Bunder, Pestom Sagar Behind Printing Press Chembur, Mumbai - 89', '', '', '', 'Chembur', 1, 1, 3, 1, 1, 15, '9833321499', '9833321499', '2000-08-25'),
(374, 'Varma Abhishek Rammurat', 55, 'B-Wing 704 /Indira gar Khalai Village, Vidyavihar (w ), Mumbai - 86', '', '', '', 'Vidyavihar', 1, 1, 3, 1, 1, 14, '7738532211', '7738532211', '2001-09-11'),
(375, 'Neelaydakshi Andvel', 55, 'Room 38, Bldg. 330, Transist Camp, idu Colony, Pantgar, Ghatkopar (e )', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 15, '9920362001', '9920362001', '2000-11-27'),
(376, 'Kejriwal Siddhika Gopal', 55, 'Room No. 13, Plot No. 23, Shree raya, Rifle Range, Ghatkopar (w )', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 15, '9322733932', '9322733932', '2000-10-22'),
(377, 'Utekar Deepali Sanjiv', 55, 'Saibaba gar, 90ft Road, Behind Trikal Bldg 309, Pantgar, Ghatkopar (e )', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 12, '8976337971', '8976337971', '2003-12-02'),
(378, 'Doshi Falak Nikhil', 55, '139/2, Bindu, Opp. Garodia School, Garodia gar, Ghatkopar (e ), Mumbai', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 13, '9892825001', '022-25061456', '2002-11-19'),
(379, 'Parekh Niyati Manish', 55, '124/3490, Pantgar, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 13, '9892542608', '9967778285', '2002-01-10'),
(380, 'Parekh Henny Viral', 55, '3 I -94, Cadle Kalpataru Aura, Opp. R City Mall, LBS Marg, Ghatkopar (w ), Mumbai - 86', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 14, '9322285059', '022-25008098', '2001-05-29'),
(381, 'Sarade Sneha Nitin', 55, '1/10, Jawahar Road, Near Police Lane, Near Station, Ghatkopar (e ), Mumbai - 77', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 11, '9870960235', '8108980594', '2004-06-10'),
(382, 'Utekar Shreya Santosh', 55, '410, 4th floor Shiv Prasad Co-op Housing Society, Laxmi gar, Pantgar, Ghatkopar (e ), M - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 11, '9664904906', '9870415746', '2004-06-12'),
(383, 'Chaurasiya Aarti Ramchandar', 55, '306/A3, New Star Chs. Near Indian Oil gar, tvar Parikh Compound, Govandi (e ), Mumbai - 76', '', '', '', 'Govandi', 1, 1, 3, 2, 1, 11, '9820695219', '9820769226', '2004-07-04'),
(384, 'Mahadik Daksha Gopal', 55, 'Room No. 12, Sajjangad Housing Society, Ramgar (b), Amrut gar, Ghatkopar (e )', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 12, '8652105681', '8652105681', '2003-08-14'),
(385, 'Panigrahy Padamini Prafulla', 55, 'Room No. 1/308, Priyarshini Society, Garodia gar, Ghatkopar (e )', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 14, '7045063356', '7045063356', '2001-09-19'),
(386, 'Jadhav Sakshi Arun', 55, 'Hayyad Mohammad Chawl 9/3, Parsiwadi, Ghatkopar (w )', '', '', '', 'Ghatkopar', 1, 1, 3, 2, 1, 14, '', '', '2001-02-21'),
(387, 'Gangar Deep Jayesh', 55, 'Bldg 38/1112 Rajni C.H.S', '', '', '', '', 1, 1, 2, 1, 1, 11, '9833184535/8454851976', '9833184535/8454851976', '2004-04-17'),
(388, 'Vyas yag Uday', 55, 'B/185/5186, B-Wing trishul Chs Pantgar Ankush Hawde Marg Ghatkopar ( E )', '', '', '', '', 1, 1, 2, 1, 1, 10, '9773377177/9773077177', '9773377177/9773077177', '2005-02-04'),
(389, 'Joshi Rakshit Haresh', 55, '8 Laxmi Bhuvar , 2nd Floor Oghudbhai Lane M.G Road Ghatkopar ( E ) Mumbai-400077', '', '', '', '', 1, 1, 2, 1, 1, 11, '9821478404/9833667300', '9821478404/9833667300', '2004-12-09'),
(390, 'Chavan Vrushabh Vilas', 55, '3-604 Omkar Hsg Soc Gourishankarwadi-2 Pantgar, Ghatkopar ( E ) Mumbai-75', '', '', '', '', 1, 1, 2, 1, 1, 11, '9870471639', '9870471639', '2004-06-26'),
(391, 'Prajapati Mahesh Chhotalal', 55, 'Vamu Cold Drink House, 90 Feet Road Pantgar Vallabh Society , Ghatkopar ( E ) Mum-75', '', '', '', '', 1, 1, 2, 1, 1, 11, '9768855935', '9768855935', '2004-04-30'),
(392, 'Yadav Surendra Arjun', 55, 'Opp Bldg No 150 Vallabh Baugh Lane Pantgar Ghatkopar ( E ) Mumbai -75', '', '', '', '', 1, 1, 2, 1, 1, 11, '7666140841', '7666140841', '2004-04-15'),
(393, 'Vishkarma Ravi Sugreev', 55, 'Near Siddhiviyak Mandir Jalprabhat gar Gali No-4 R.No 7 Ramabai gar Pantgar, Ghatkopar ( E ) Mumbai 75', '', '', '', '', 1, 1, 2, 1, 1, 11, '9029639477', '9029639477', '2004-04-15'),
(394, 'Vishwakarma Saurabh Rambahadur', 55, '90 Feed Road , Vallabh Society Behind Babu Garage, Pantgar Ghatkopar ( E ) Mumbai-75', '', '', '', '', 1, 1, 2, 1, 1, 11, '9833107641', '9833107641', '2004-09-01'),
(395, 'Gupta Aman Ashok', 55, 'Netaji Subhash gar, R.T.O Office Ghatkopar ( E ) Mumbai-77', '', '', '', '', 1, 1, 2, 1, 1, 11, '9769577673', '9769577673', '2004-09-07'),
(396, 'Kho Veer Vipul', 55, 'B 11/12, Dev Buvan, Comalane Ghatkopar ( W )', '', '', '', '', 1, 1, 2, 1, 1, 11, '9320510101', '9320510101', '2004-10-04'),
(397, 'Patil Minir Mahesh', 55, '1935- A Datta Mandir Priyadarshani Soc Ghatkopar ( W )', '', '', '', '', 1, 1, 2, 1, 1, 10, '8411830838', '8411830838', '2005-05-19'),
(398, 'Bharadwaj kul', 56, 'B 1201  Lake Castle, Hirandani Garden, Powai, Mumbai - 76', '', 'kul426@gmail.com,poomjhingan@gmail.com', '', 'Powai', 1, 1, 3, 1, 1, 16, '7506052971/7506053745/25703507', '7506052971/7506053745/25703507', '1999-05-19'),
(399, 'Joshi Arpeet Sachinn', 56, '1203 Torino, Hirandani Gardens, Powai, Mumbai - 76', '', 'arpeet1999@gmail.com,srj2901@gmail.com', '', 'Powai', 1, 1, 3, 1, 1, 16, '9819667153/022-25701865', '9819667153/022-25701865', '1999-10-19'),
(400, 'Golchha Sidhannt Sanjay', 56, '73, Dr. Ambedkar Road, Lilian Heights, Flat No. 702, Khar (w )', '', 'siddhugolchha@gmail.com,silverline_distribution@yahoo.com', '', 'Khar', 1, 1, 3, 1, 1, 16, '9769436752/022-26058639', '9769436752/022-26058639', '1999-04-13'),
(401, 'Ladak Amaan Sajid', 56, '203 Manish Sea Craft, Shirley Rajan Road, opp. Railway Colony Next to Sunrise Restorent', '', 'amaanladak.35@gmail.com,sajidladak@hotmail.com', '', 'Bandra', 1, 1, 3, 1, 1, 14, '9619674199/26007867', '9930770099/26007867', '2001-01-08'),
(402, 'Crawford Jack', 56, 'App 101 Orchard Palace, Dr. Pefer Dias Rd. Bandra West', '', 'jackcraw500@gmail.com,lian.1470@samsung.com', '', 'Bandra', 1, 1, 3, 1, 1, 15, '', '', '2000-12-22'),
(403, 'Daga Shalibhadra Sanjay', 56, '2C/113, Kalpataru Estate, Near Majar Bus Depot, Jogeshwari Vikhroli Link Rd, Andheri (e ), Mumbai - 400093', '', 'shalibhadra8@gmail.com,sanjaydaga9@gmail.com', '', 'Andheri', 1, 1, 3, 1, 1, 15, '9930202805/022-28245716', '9930202805/022-28245716', '2000-01-30'),
(404, 'Kunder Khamarushk Raviraj', 56, 'D-51, Flat 487, MIG Chs, Bandra (e )', '', 'selma.kunder@yahoo.com', '', 'Bandra', 1, 1, 3, 1, 1, 16, '9820464100/26424603', '9820464100/26424603', '1999-07-12'),
(405, 'Gandhi Rahul Kamlesh', 56, '501, A Wing Haripreet Bldg. Santacruz (w ), Mumbai 400054', '', 'rahulgandhi248@gmail.com,moganndhi', '', 'Santacruz', 1, 1, 3, 1, 1, 16, '9769471089/022-26484825', '9769471089/022-26484825', '1999-07-13'),
(406, 'Gangwani Rithik', 56, 'A 501, And Ashram Khar West, Bandra', '', 'rithikg14@gmail.com,rajesh.gangwani@jwt.com', '', 'Bandra', 1, 1, 3, 1, 1, 16, '9741936683', '9741936683', '1999-03-14'),
(407, 'Chaudhari Arush Sanjeev', 56, '20 B, Sunset Heights, 59 Pali Hill , Bandra (w ), Mumbai - 400060', '', 'arush792@gmail.com,sanjeev.choudhari@gmail.com', '', 'Bandra', 1, 1, 3, 1, 1, 16, '9820544960/26487331', '9820544960/26487331', '1999-07-20'),
(408, 'Jain Hardik Meghraj', 56, '401/402 Sheela Niwas, Near Suncity Theatre, Opp. Post Office Vile Parle E, Mumbai 57', '', 'hardikjain1798@gmail.com,bhavijains@yahoo.co.in', '', 'Vile Parle', 1, 1, 3, 1, 1, 16, '9820585652/022-2610288', '9820585652/022-2610288', '1999-09-17'),
(409, 'Chanchtani Hitesh Jai', 56, '11/12, Cresent Apt. Pali Hill Road, Bandra, Mumbai - 400050', '', '', '', 'Bandra', 1, 1, 3, 1, 1, 16, '9821633528', '9821633528', '1999-05-29'),
(410, 'Tripathi Isha Shashant', 56, '407, Atlantis, Raheja Acropolis -I, Opp. Dattaguru Society, Deor, Mumbai - 88', '', 'ishakathale2@gmail.com,gauri.sharma.tripathi@gmail.com', '', 'Deor', 1, 1, 3, 2, 1, 14, '9930009807', '9930009807', '2001-10-22'),
(411, 'Bhatia Sloka Dilip', 56, '1103, Solitaire Orchard Avenue, Hiradani Gardens, Powai, Mumbai 76', '', 'shloka0501@gmail.com', '', 'Powai', 1, 1, 3, 2, 1, 14, '9920102055/25797325', '9920102055/25797325', '2001-03-05'),
(412, 'Jain Tanisha Manoj', 56, '22/32 Sahil HIG Colony, K.C. Marg, Opp. Lilavati Hosp. Bandra Reclamation, Bandra (w ), Mumbai 50', '', 'tanishajanu@gmai.com,manoj.jain39@gmail.com', '', 'Bandra', 1, 1, 3, 2, 1, 14, '8108087888', '9820587888/26400552', '2001-02-17'),
(413, 'Soni Malvika Manish', 56, 'B 1002, Ariisto Sapphire, 2nd Hasbad Lane, Santacruz (w ), Mumbai - 54', '', 'malvikasoni81@gmail.com,rashmisoni06@gmail.com', '', 'Santacruz', 1, 1, 3, 2, 1, 14, '9769627766', '9769657766', '2001-08-03'),
(414, 'Pai Mitali Shridhar', 56, '52, Bhaskar Parshuram Niketan, Sakharam Keer Marg, Shivaji Park, Mumbai -16', '', 'mitalipai@rocketmail.com,shraddhapai@rocketmail.com', '', 'Dadar', 1, 1, 3, 2, 1, 15, '9619720167/24381649', '9619720167/24381649', '2000-10-05'),
(415, 'Desai Divishada Subodh', 56, 'Flat No 8, 4th Floor, Pali Hill, Palimala Road, Hill Range Apartment, Bandra (w ), Mumbai - 50', '', 'divi@subodhdesai.com', '', 'Bandra', 1, 1, 3, 2, 1, 15, '9820622220', '9820622220', '2000-12-06'),
(416, 'Pai Ria gendra', 56, 'B 603, Mahindra Eminenie, S.V.Road, Goregaon (w )', '', 'riapai@hotmail.com,priyaria@yahoo.com', '', 'Goregaon', 1, 1, 3, 2, 1, 16, '9619552022', '9619552387', '1999-11-24'),
(417, 'DSouza Rytzl Louis', 56, 'D 702, Raheja Nest, Powai', '', 'rytzl@yahoo.com', '', 'Powai', 1, 1, 3, 2, 1, 16, '9820326111', '9820018596', '1999-11-02'),
(418, 'Aswani Meher Anju', 56, 'B 2105, Oberoi Springs Opp. Infinity 1, Off Link Road, Andheri (w )', '', 'mehraswani1@gmail.com,aswanyanju@gmail.com', '', 'Andheri', 1, 1, 3, 2, 1, 14, '7506739759', '9920243336', '2001-08-09'),
(419, 'Rodrigues Rhea Deborah', 56, '', '', 'rhearedngues1@gmail.com,mum.debsr47@gmail.com', '', '', 1, 1, 3, 2, 1, 15, '9819558324', '9819558324', '2000-04-18'),
(420, 'Kuckian Priyanka Saiparkash', 56, 'D 914, Maple Leaf, Raheja Vihar, Andheri (e ), Mumbai - 72', '', '', '', '', 1, 1, 3, 2, 1, 13, '9821830455', '9821830455', '2002-05-12'),
(421, 'Vernekar Trusha Neelesh', 56, 'C 302, Anmol Chs. Excel Estate, Opp. Patel Auto, S.V.Road, Goregaon (w ), Mumbai - 400104', '', '', '', 'Goregaon', 1, 1, 3, 2, 1, 0, '9870220389', '022-28710437', '2015-12-22'),
(422, 'Pereira Tay', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 9, '', '', '2006-05-14'),
(423, 'Chelliah Harish', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 7, '', '', '2007-12-30'),
(424, 'Vaze ndan', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 0, '', '', '2015-12-22'),
(425, 'Jimmy Joshua', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 8, '', '', '2007-11-13'),
(426, 'Bohra Nihal', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 8, '', '', '2007-08-21'),
(427, 'Parmar Jayam', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 7, '', '', '2008-09-13'),
(428, 'Patil Neel', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 7, '', '', '2008-03-15'),
(429, 'Verma Abhed', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 0, '', '', '2015-12-22'),
(430, 'Gopal Ayush', 57, '', '', '', '', '', 1, 1, 2, 1, 1, 0, '', '', '2015-12-22'),
(431, 'Karvat Krish', 57, '-', '', '', '', '', 1, 1, 2, 2, 1, 9, '9987539781', '-', '2006-09-17'),
(432, 'Kalambe Sanskruti', 57, '-', '', '', '', '', 1, 1, 2, 2, 1, 9, '9987539781', '-', '2006-12-12'),
(433, 'Thakkar mita', 57, '-', '', '', '', '', 1, 1, 2, 2, 1, 8, '9987539781', '-', '2007-09-17'),
(434, 'Thakkar Tia', 57, '-', '', '', '', '', 1, 1, 2, 2, 1, 7, '9987539781', '-', '2008-09-04'),
(435, 'Vashi Meera', 57, '-', '', '', '', '', 1, 1, 2, 2, 1, 0, '9987539781', '-', '2015-12-22'),
(436, 'Gursale Gaurang Mahesh', 60, '26,Manorama Sadan, 3rd Floor, Dr.Charat Singh Cloany, Andheri Kurla Road, Andheri (E ), Mumbai - 400 093', '', 'mahesh_gursale@rediffmail.com', '', 'Andheri', 1, 1, 1, 1, 1, 12, '9821489458/9821318522', '28212673', '2003-11-05'),
(437, 'Borade Shubh Mahendra', 60, '314, Ramth Pathak Compound, Sahar Road, Koaldongri, Andheri (E ), Mumbai - 400 069', '', 'borade_mahendra@yahoo.co.in', '', 'Andheri', 1, 1, 1, 1, 1, 12, '9820070835/9820880835', '26834641', '2002-12-27'),
(438, 'Bhadra Abhijit Bablu', 60, '416/B, Appli Ekta Society, Marol ka, Andheri (E ),', '', 'bhadra14@gmail.com', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9967801747', '9967801747', '2002-09-20'),
(439, 'Shaikh Zakir Shamim', 60, '10-4-15, Rock View Apt., Marol Maroshi Road, Andheri (E )', '', 'termitor222220@gmail.com', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9833792126/9833090172', '9833792126/9833090172', '2002-03-05'),
(440, 'gori Divyash Mansukh', 60, '502, Darshan View, Hardevibai Society, Ashoka road, Jogeshwari (E ), Mumbai - 400 060', '', 'divyashgori6@gmail.com/gorimansukh@gmail.com', '', 'Jogeshwari', 1, 1, 1, 1, 1, 13, '9820025278', '28240456', '2002-09-22'),
(441, 'Patel Samit Ambalal', 60, 'Kalpita Encleve Chs, S.N.Marg, E-1, BLDE Room no -202, Andheri (E ), Mumbai - 400 069', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9892424374', '9892424374', '2002-06-02'),
(442, 'Meet Jainik Jayesh', 60, 'Room No 4, Mata Prasad Chawl, Koldongri, Sahar Road, Andheri (E ), Mumbai - 400 069', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 13, '8097840731/9833324529', '8097840731/9833324529', '2002-06-27'),
(443, 'Sutar Prathamesh thuram', 60, 'Room No. 7, Shri Niwas Chawl, J.B. gar, Andheri ( E), Mumbai - 400 059', '', 'prathameshsutar321@gmail.com, ndsutar1971@gmail.com', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9221610080/9869188139', '9221610080/9869188139', '2002-07-16'),
(444, 'Jain Kaushik Mukesh', 60, 'Room No. 02, Sri Ram Cottage, Technical Area, Marol Pipe Line, Andheri (E ), Mumbai - 400 059', '', 'kaushikjain1213@gmail.com', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9833359935/9969424059', '9833359935/9969424059', '2002-08-05'),
(445, 'Deora Rishikesh Pravin', 60, 'A/10, Amarchawl, Sahar Road, Koldongari, Andheri ( E), Mumbai - 400 069', '', 'rishikeshd089@gmail.com, pravindeora077@gmail.com', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9594423371', '8652277944', '2002-09-10'),
(446, 'Pamecha Mayank Omprakash', 60, 'Milton Novelty Hanuman Road, Vile Parle (E ), near Shri Leela Hotal Mumbai - 57', '', '', '', 'Vile Parle', 1, 1, 1, 1, 1, 13, '9619825258/9664053392', '26826877', '2002-10-03'),
(447, 'Varadkar Om Ulhas', 60, 'D-11, Sai Vikas co.op Hsg Soc., N.S.Phadke Road, Andheri (E ), Mumbai - 400 069', '', '', '', 'Andheri', 1, 1, 1, 1, 1, 13, '9821211957', '9821211957', '2002-10-08'),
(448, 'Bhadra Abhishek bablu', 60, 'B-410, Aapli Ekta Society, vpada, Sahar Road, Near Marol ka, Andheri (E ), Mumbai - 400 059', '', 'abhishakbhadra2000@gmail.com', '', 'Andheri', 1, 1, 3, 1, 1, 15, '9004382901/9967801747', '9004382901/9967801747', '2000-09-16'),
(449, 'Patel Punit Pragji', 60, 'Saraswati Niwas 2, Sahar Road, Chakala, Andheri (E ), Mumbai - 400 099', '', 'punitpatel22@gmail.com', '', 'Andheri', 1, 1, 3, 1, 1, 15, '9930722682/9769857010', '9930722682/9769857010', '2000-04-17'),
(450, 'Jashni Karan Sunil', 60, 'Plot No 161, Flat No2, Silver Hills Society, CHS, Sher-E-Punjab Colony, Andheri (E ), Mumbai - 400 093', '', 'rjkaranjashni@gamil.com, suniljashni21@gmail.com', '', 'Andheri', 1, 1, 3, 1, 1, 15, '9820584940', '40054659', '2000-11-15'),
(451, 'Arora Rahul Sanjiv', 60, 'B/2, Devadiga, Flat No. 510, C Wing, Om gar, Andheri (E ), Mumbai - 400 099', '', 'rarora686@gmail.com', '', 'Andheri', 1, 1, 3, 1, 1, 14, '9870633675', '9867864309', '2001-04-17'),
(452, 'Bhasin Sumeet Singh', 60, 'Plot No 235/8, Aangan, Opp. Gymkhan, Sher e punjab Society, Andheri (E ), Mumbai - 400 093', '', 'sumeetbhain85@yahoo.in, trvebhaain@yahoo.com', '', 'Andheri', 1, 1, 3, 1, 1, 14, '8097764620/9820093162', '28380318', '2001-02-06'),
(453, 'Shah Ronit Jignesh', 60, 'E-1, Aditya apt., Old gradas Rd, Andheri (E ), Mumbai - 400 069', '', 'ronit.shah2k@yahoo.in, rokshah655@yahoo.com', '', 'Andheri', 1, 1, 3, 1, 1, 15, '9833682835', '26824365', '2000-06-12'),
(454, 'Shukla Tejas Mukesh', 60, 'D-203/204, Silver Garden, J.B. gar, Mahavir Marg, Andheri ( E), Mumabai - 400 059', '', '', '', 'Andheri', 1, 1, 3, 1, 1, 14, '7738177831/9167338932', '7738177831/9167338932', '2001-10-19'),
(455, 'Dharawat Dhruv Manoj', 60, 'B/204, Misty Apts. Parshay panchath Road, Service rd, Andheri ( E), Mumbai -69', '', 'madharawrat@gmail.com', '', 'Andheri', 1, 1, 3, 1, 1, 14, '9820067571', '26837571', '2001-07-31'),
(456, 'Singh Nishant Ramprakash', 60, 'Suvar kalash Build, Flat No 2, B-Wing, Chakal, Andheri (E ), Mumbai - 400 099', '', '', '', 'Andheri', 1, 1, 3, 1, 1, 14, '7045198481', '7045198481', '2001-05-30'),
(457, 'Hadawale Rishikesh Shashikant', 60, 'A/4, Jai vidyadani, Om gar, Andheri (E ), Mumbai - 400 099', '', 'shashi@gmail.in', '', 'Andheri', 1, 1, 3, 1, 1, 15, '9867652000/9867662000/ 9702392000', '9867652000/9867662000', '2000-11-16'),
(458, 'Ishaque Ali Amir Salman', 60, '205, A Wing, Dipti Green, J.B.gar, Nr. Bombay Cmbridge School, Chakala, Andheri (E ), Mumbai - 400 099', '', 'ishaqueali92@gmail.com', '', 'Andheri', 1, 1, 3, 1, 1, 14, '9867508014/9819882705', '9867508014/9819882705', '2001-07-06'),
(459, 'Ansari Labeeb Mohammed', 60, 'A/603, Marol Hillview Chs., Marol, Military Road, Andheri (E ), Mumbai - 400 059', '', 'itakharansari54@yahoo.com', '', 'Andheri', 1, 1, 3, 1, 1, 14, '9323580332/9619112711', '9323580332/9619112711', '2001-05-17'),
(460, 'Parmar Maitri Rohit', 60, '503, Vastu Shilp, Pump House, Raj Mata Jijabai Road, Andheri (E ), Mumbai - 400 069', '', 'maitriparmar@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9987354935/9892773653', '9223538136', '2002-01-31'),
(461, 'Mistry Disha Brijesh', 60, 'Plot 19, Flat 401, Shanti Sadan Chs, Tarun Baharat Society, Chakala, Andheri (E ), Mumbai 400 099', '', 'brij2k@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '7715856191', '28375069', '2002-03-16'),
(462, 'Chowdhary Janhavi Sharad', 60, '201, Andheri Hawa Mahal chs, Dr. Charat Singh Colony, Chakala, Andheri (E ), Mumbai - 400 093', '', 'chowdharysharad@yahoo.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9870457751', '28202955', '2002-09-02'),
(463, 'Negi Priyanka Mor', 60, 'Dheeraj Dharshan, C-504, Jogeshwari ( W), Mumbai - 400 049', '', 'negipriyanka1025@gmail.com', '', 'Jogeshwari', 1, 1, 1, 2, 1, 13, '9320698878', '28215054', '2002-04-07'),
(464, 'Rajgor Helee Umesh', 60, '601, Priyadarshani Park, J.N. gar, Andheri ( E), Mum- 59', '', 'helee.rajgor@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9820415541', '9820151512', '2002-02-16'),
(465, 'Pradhan Ayushi Radhakrish', 60, 'A-102, Sai And Chs, Mahakali Caves Road, Andheri (E ), Mum - 93', '', 'ayushipradhan24@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9819167934', '9.89E+09', '2002-07-24'),
(466, 'Singh Chetanshi Sanjay', 60, 'Room No 3, Om sai apt. tarun baharat society, Chakal, Andheri (E ) Mum- 99', '', 'chetanshisingh10@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9892376094', '7045127315', '2002-05-10'),
(467, 'Mahnot Keertika Dharmesh', 60, '5/2, Kondivita Chs, Dehind Mukund gar, Andheri, Kurla road, Andheri (E ), Mum-59', '', 'pritimahnot@yahoo.in', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9820414121', '28217523', '2002-09-03'),
(468, 'Singha Chitranga', 60, 'D-5, Aman Park Chakala, Andheri (E ), Mumbai 99', '', 'scattabigal@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9167435377', '9167435377', '2002-04-12'),
(469, 'Ali Zahra Touheed', 60, '9/5/7 Bhawani gar', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 13, '8286654123', '8286654123', '2002-12-03'),
(470, 'Pereira Danica Assumption', 63, 'R-214, Bldg. - 1, Ap Ghar, Andheri - E', '', 'estherpereira72@yahoo.in', '', 'Andheri', 1, 1, 2, 2, 1, 11, '9821280262', '9821280262', '2004-01-31'),
(471, 'Moreiro Chrisann Clement', 63, '203, New Hill -View, Marol, Military Road', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 11, '9870224058', '9870224058', '2004-05-07'),
(472, 'Chavan Shrijti Suryaakant', 63, '12, D-2, Marol Police Camp, Maril', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 10, '8424030233', '8424030233', '2005-09-17'),
(473, 'Lobo Venicia Cyprian', 63, '4-Verein Gonsalves House, Chakala, Andheri - E', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 11, '9892984460', '9892984460', '2004-10-25'),
(474, 'Ferndes Verushka Ruben', 63, '302, Vaastu Labh, Pump -House, Andheri -E', '', 'rubenffrns1@gmail.com,venitiaf@gmail.com', '', 'Andheri', 1, 1, 2, 2, 1, 10, '9930263668', '9930263668', '2005-10-12'),
(475, 'D', 63, 'B-101, Cystal Encalve, Marol, Andheri - E', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 10, '9820138375', '9820138375', '2005-02-15'),
(476, 'Kant Allegra Daniel', 63, 'R. No.  - 5, Symbol Villa, Sahar Gaon, Andheri -e', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 9, '9987257982', '9987257982', '2006-01-19'),
(477, 'Travas Tiya Rozario', 63, 'B-3, 402, Trans Residency, M.I.D.C Central R.d, Andheri', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 10, '9833008500', '9833008500', '2005-11-03'),
(478, 'Devali Aditi Ajay', 63, 'Paijl Patel, Chawl, R.No. - 11, Chakala, Nr. Calico Andheri - E', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 10, '9820757830', '9820757830', '2005-11-11'),
(479, 'Thekkayil  Shreya Heelesh', 63, 'D-Wing, 403, Customs Colony,  A  C.H.S., Military Rd., Mumbai -', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 10, '9892694290', '9892694290', '2005-07-29'),
(480, 'Tatkare Ishwari Sandeep', 63, '07, Laxmi Nivas, Mumbai Pipeline, Andheri (e ), Mumbai - 48', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 115, '9819326047', '9819326047', '1900-01-07'),
(481, 'Mahajan Sakshi', 63, '', '', '', '', 'Andheri', 1, 1, 2, 2, 1, 11, '9867260571', '9867260571', '2004-01-10'),
(482, 'Dedhia Urvi Pacharia', 63, 'B-11, Janta Colony, Bamanpuri Village, Andheri (e ), M - 59', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9869438369', '9869438369', '2001-12-29'),
(483, 'Chonkar Lakshita Parikshit', 63, '07, Siddhi Viyak Building, Sahar Road, Andheri (e ), M - 69', '', 'lakshitachonkar24@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9699670770/9768601470', '9699670770/9768601470', '2002-05-11'),
(484, 'Chougule Sania Angelica', 63, '7, Ashish Plot No. 22, Tarun Bharat Soc., Andheri  (e ), M - 99', '', 'sania.chougule13@gmail.com,charmaine.chougule12@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 12, '9819419455', '9819419455', '2003-08-01'),
(485, 'Lobo Kyra Kim', 63, '101, Delux Building, Shivaji gar, Railway Mens Ap Ghar, Andheri -E', '', 'kyralobo@gmail.com,shelllobo@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 12, '9820242843/9167975197', '9820242843/9167975197', '2003-02-13'),
(486, 'Sutar Sakshi Pramod', 63, 'Room No. 603, Mahakali Road, Ram Baug Corporation Soc., Andheri -E', '', 'aditipromodsutar@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '7506009357', '7506009357', '2002-07-16'),
(487, 'Pachange Subhada Shamrao', 63, 'Malad (e ), Kurar Village, Saket Building, 405 -B, Mumbai -97', '', 'shubhadasham@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 12, '9892617799', '9892617799', '2003-04-14'),
(488, 'D', 63, '002, Domnic Appart, Near St. John High School', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 12, '9820599686', '9820599686', '2003-07-28'),
(489, 'Pinto Vio Joseph', 63, 'Kasam Chawl, Kabir gar, Sahar Road, Andheri (e ), M - 99', '', 'princeviv2@gmail.com', '', 'Andheri', 1, 1, 1, 2, 1, 13, '9869172331', '9869172331', '2002-11-14'),
(490, 'Velangkanni Lavanya', 63, '08/2, New Airport Colony, Vile Parle (e ), Mumbai - 99', '', '', '', 'Vile Parle', 1, 1, 1, 2, 1, 13, '9769083335', '9769083335', '2002-04-14'),
(491, 'Tawade Vaibhavi Jitendra', 63, '', '', '', '', 'Andheri', 1, 1, 1, 2, 1, 0, '', '', '2015-12-22'),
(492, 'Ferndis Rinisha Pascal', 63, 'C-11/2, New Airport Colony, Hanuman Road, Vile Parle (E )', '', '', '', 'Vile Parle', 1, 1, 3, 2, 1, 15, '9773299541/7208077908', '9773299541/7208077908', '2000-11-27'),
(493, 'Brammane Ritchelle Thomas', 63, '2/7/14, Blue Moon Society, Bhawani gar, Marol, Maroshi Rd., Andheri (e ), Mumbai -59', '', 'dt_brahmane@licindia.com', '', 'Andheri', 1, 1, 3, 2, 1, 14, '9833471608', '9833471608', '2001-11-07'),
(494, 'Borade Shraddha Ravindra', 63, 'A/503, Mahakali Road, Ramboug, Andheri (e ), Mumbai - 93', '', '', '', 'Andheri', 1, 1, 3, 2, 1, 14, '9869476652', '9869476652', '2001-09-07'),
(495, 'Kamath Karan NM. Kamath', 69, 'E 14/10 Sai Mahal Chs Nerul Sector 48', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9987086314', '9987086314', '2003-04-18'),
(496, 'Jha Abhishek Dharmendra', 69, 'Sukhsagar Chs., C- 13, Room No. 11, Sec - 48, Nerul (W ), vi Mumbai -', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9004717880', '9768623667', '2003-08-09'),
(497, 'Vishwakarma Mav Ramashankar', 69, 'Anpur Chs E-8/Room No. 9, Sec 48, Nerul vi Mumbai 706', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9322529073', '7738303456', '2003-06-07'),
(498, 'Thomas Melvin', 69, 'E -8/14, Anpur, Sec 48, Nerul vi Mumbai', '', 'manjani4@yahoo.co.in', '', 'Nerul', 1, 1, 1, 1, 1, 14, '9757397462', '022-27724281', '2001-12-21'),
(499, 'Bhosale Parth Dattaram', 69, 'A/204 Sukhakarta ll, Chs. Ltd. Sec 42, Plot 30, Nerul, vi Mumbai - 706', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9869501624', '9969950386', '2002-12-23'),
(500, 'Kumar Siddharth M.Kumar', 69, 'R. No. 603, Neelkanth Resi Sec 46A, Nerul', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9594966566', '9769682837', '2003-11-21'),
(501, 'ir Parthip Sreenivasan', 69, 'Angel Home, 201, 2nd Floor, Plot No 32, Sec 50, Nerul vi Mumbai', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9820055853', '9619681858', '2003-03-07'),
(502, 'Prasad Yashraj Kameshwar', 69, 'E4/14, Geetanjali Chs. Ltd., Sec 46, Seawoods, Nerul, vi Mumbai', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9987086314', '9987086314', '2003-04-18'),
(503, 'Ghadge Hrutvik Sunil', 69, 'D-31/13, Ashtagandha Soc. , Sec 48, Nerul', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 13, '8108034664/8652704902/9969012403', '8108034664/8652704902/9969012403', '2002-12-08'),
(504, 'Sudeep Siddharth K. Sudep', 69, 'Olive Complex Chs, Flat No. 204 A, Sec 42, Plot No. 44, Seawoods, Nerul', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9004441235', '27724268', '2003-02-13'),
(505, 'Sahave Samit Trushit', 69, 'B 102, Paras Villa, Plot No. 46, Sec 80, Nerul, vi Mumbai', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9320553312', '277714118', '2003-01-12'),
(506, 'Vishwakarma Yash Subedar', 69, 'Anpur Co-op Soc., Nerul Sec 48, Room No. 9, vi Mumbai', '', '', '', 'Nerul', 1, 1, 1, 1, 1, 12, '9619964354', '9819240264', '2003-02-10'),
(507, 'Verma Jaya Sanjay', 69, 'Flat No. 1304, Shanti Vaibhav Chs. Plot No. 11A, Sector 42A, Seawoods, Nerul vi Mumbai', '', 'sanjayverma@gmail.com,ranjusvarma@gmail.com', '', 'Nerul', 1, 1, 1, 2, 1, 12, '9594062211', '9594062211', '2003-08-21'),
(508, 'Sharma Gauri Subhash', 69, 'E-7/11 Nisarg Chs., Sec 48A, Nerul, vi Mumbai', '', 'subhashds76@gmail.com', '', 'Nerul', 1, 1, 1, 2, 1, 13, '9920836693', '7738599014', '2002-10-16'),
(509, 'Chavan Mali Dilip', 69, 'Sai Prasad Soc., D8/03, Sector 48, Seawoods, Nerul, vi Mumbai', '', '', '', 'Nerul', 1, 1, 1, 2, 1, 12, '9320298813', '9322298813', '2003-01-17'),
(510, 'Singh Snshika Rakesh', 69, '203, Shell Om Sadguru Sector 50 Plot No. 122, Nerul vi Mumbai', '', 'rakeshsingh097@gmail.com', '', 'Nerul', 1, 1, 1, 2, 1, 12, '9320302999', '7666718123', '2003-04-20'),
(511, 'Kanyal Megha Bhupal Singh', 69, 'D-39/9, Priyadarshani Chs. Sec 48, Nerul', '', 'bhupeshkanyal007@yahoo.co.in', '', 'Nerul', 1, 1, 1, 2, 1, 12, '9167002275', '9833776220', '2003-11-06'),
(512, 'Mahajan Saee Yatin', 69, '203, Radhamit Chs. Plot No. 33, Sec 18, Nerul, vi Mumbai 706', '', 'saeegy@gmail.com,gauree.mahajan.23@gmail.com', '', 'Nerul', 1, 1, 1, 2, 1, 13, '9967546508', '7738009919', '2002-08-30'),
(513, 'Pathak Vaibhavi Hemant', 69, 'Sec 48, Anpur Chs., E1/9, Nerul, vi Mumbai', '', 'vallaripathak12@gmail.com', '', 'Nerul', 1, 1, 1, 2, 1, 12, '9594118585', '9967448143', '2003-03-15'),
(514, 'ir Priya Unnikrishn', 69, 'B-402, Tirupati Society Sec 44, Near Petrol Pump, Seawoods, vi Mumbai', '', 'shree.menon@yahoo.com/sreejaayappath@gmail.com', '', 'Nerul', 1, 1, 1, 2, 1, 12, '8425907347', '9619893543', '2003-04-01'),
(515, 'Sawant Swarangi Sachin', 69, '403, Sheetal Dhara, Plot No. 29, Sector 44-A, Nerul vi Mumbai - 706', '', 'sachin_5138@yahoo.com', '', 'Nerul', 1, 1, 1, 2, 1, 13, '9819568138', '9820526949', '2002-08-17'),
(516, 'Badhan Tanishka Kailas', 69, 'E 8/0:3, Anpur, Chs. Sec 48, Seawoods, Nerul', '', '', '', 'Nerul', 1, 1, 1, 2, 1, 12, '9967428308', '9967428308', '2003-02-14'),
(517, 'Mankani Khushboo Deepak', 69, 'Swati Park R No. 1, Killa Belapur, vi Mumbai', '', 'mankanikhushboo@gmail.com,chanmankani25@gmail.com', '', 'Belapur', 1, 1, 1, 2, 1, 13, '9867694211', '8451903418/09', '2002-03-10'),
(518, 'Doshi Jeet', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 15, '', '', '2000-08-15'),
(519, 'Kaydi Fahad  Habib', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 14, '', '', '2001-02-12'),
(520, 'Mehta Kevin', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 14, '', '', '2001-05-25'),
(521, 'Vyas Siddh Sameer', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 14, '', '', '2001-12-20'),
(522, 'Lapasiya Harsh', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 14, '', '', '2001-12-04'),
(523, 'Mehta Viy', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 15, '', '', '2000-11-13'),
(524, 'Thakkar Meet', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 14, '', '', '2001-01-13'),
(525, 'Jain Shlok', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 15, '', '', '2000-12-20'),
(526, 'Vora Chintan Jayesh', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 14, '', '', '2001-01-24'),
(527, 'Pagariya  kavish', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 15, '', '', '2000-12-22'),
(528, 'Chheda Vivek', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 0, '', '', '2015-12-22'),
(529, 'Shah Shlok', 88, '', '', '', '', '', 1, 1, 3, 1, 1, 0, '', '', '2015-12-22'),
(530, 'Barreto Melisa Remedios', 99, '5/6 Twinkle Star, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '7738326265/25203339', '7738326265/25203339', '2004-09-23'),
(531, 'Agarwal Rhea Chandrakant', 99, 'Sankara Colony, P. Lokhande Marg, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9930441008', '9930441008', '2004-06-27'),
(532, 'Dukhande Oshin Milind', 99, 'Chempazhanti Chs, PL. Lokhande Marg, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9967418452', '9967418452', '2004-10-23'),
(533, 'D', 99, '32 Ebenzer, 13th rd, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9867480039', '9867480039', '2004-07-15'),
(534, 'Pandey Sanja Sanjay', 99, '16, Ganga, Srinigar Chs, P.L Lokhande Marg, Chembur, Mumbai-71', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9870340008', '9870340008', '2004-06-18'),
(535, 'Gaikwad Dnyanda Shivand', 99, '32, Saraswati baug, Chembur ka, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9029006181', '9029006181', '2004-05-29'),
(536, 'Kochara Ashraya Aswini', 99, 'Shankaram Residency, Chembur Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '7666042425', '7666042425', '2004-06-11'),
(537, 'Patil Swara Dattatraya', 99, 'Shri Samarth gar, Sion Trombay Road, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9768730308', '9768730308', '2004-06-24'),
(538, 'Kathpalia Annushree Yogesh', 99, '23/B Collectors Colony, RC Marg, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9820395775', '9820395775', '2004-07-03'),
(539, 'Colaso Sherul John', 99, 'Subhash gar, ndaneeh, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9619063335', '9619063335', '2004-07-07'),
(540, 'Pandey Srishti Sandeep', 99, '14/C, 802, Subhash gar, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '', '', '2004-10-22'),
(541, 'Philip Alyo Ann', 99, '14, Prasan, Chheda gar Chembur, Mumbai-89', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 11, '9869503862', '9869503862', '2004-10-14'),
(542, 'Bahal Nishtha Santosh', 99, '901, Lucky House, 13th , Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 2, 2, 1, 13, '25217963', '25217963', '2001-12-28'),
(543, 'Pinto Leanne Prakash', 99, '22, Apurva Chembur ka Next To Fire Brigade Mumbai-400071', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 14, '9867573040/25220409', '9867573040/25220409', '2001-05-01'),
(544, 'Phal Yashvi Vishal', 99, 'B-1/2 Suman gar V.N Purav Marg Chembur Mumbai-400071', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 14, '9821115908/25229237', '9821115908/25229237', '2001-05-08'),
(545, 'Bahal Ish Santosh', 99, '901, Lucky House, 13th rd, Chembur, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 13, '9821074844/25217963', '9821074844/25217963', '2001-12-28'),
(546, 'Mishra Shreya Shardaprasad', 99, '34/3, Saraswati Baug, Chembur ka, Mumbai-400071', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 13, '9322640411', '9322640411', '2001-12-24'),
(547, 'Manjrekar Ameya Devendra', 99, 'G.J Kinny Chawl Near Marathoma Ch Govandi Mumbai-400088', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 14, '9769162133/8286580755', '9769162133/8286580755', '2001-07-11'),
(548, 'Shirke Sanja Sandeep', 99, 'Perpetual Resort S.T Anthony Rd, Chembur Mumbai-400071', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 14, '8976635532', '8976635532', '2001-12-21'),
(549, 'Pinto Suzanne Prakash', 99, '22, Apurva Chembur ka Next To Fire Brigade Mumbai-400071', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 13, '9867573040/25220409', '9867573040/25220409', '2002-11-02'),
(550, 'Howal Anushka Sandeep', 99, '10/2, Nimkar Soc, Ashok gar, Ng Acharya Marg, Govandi-400088', '', '', '', 'Govandi', 1, 1, 1, 2, 1, 14, '9869369939/9167690022', '9869369939/9167690022', '2001-03-29');
INSERT INTO `sfa_student` (`id`, `name`, `school`, `address`, `content`, `email`, `image`, `location`, `sports`, `sportscategory`, `agegroup`, `gender`, `isparticipant`, `age`, `phone`, `emergencycontact`, `dob`) VALUES
(551, 'Joseph Christine', 99, 'Not Mentioned', '', '', '', 'Govandi', 1, 1, 1, 2, 1, 0, '', '', '2015-12-22'),
(552, 'Swamithan Nishita', 99, '11, Basaant Uttam Co-Op Hsg St.Anthony', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 13, '9819670276/25215266', '9819670276/25215266', '2002-11-14'),
(553, 'Rodrigues Joanne Hanh', 99, 'A-504 Shivam Vaastu Bldg 76 Tilak gar Chembur Mumbai-71', '', '', '', 'Chembur', 1, 1, 1, 2, 1, 13, '9819564002/26363110', '9819564002/26363110', '2002-04-12'),
(554, 'Khan Imran Mobin', 112, 'Gautam gar, Nityand gar, Opp. Tel Exchang Room No. 11 , Galli No. 1, Ghatkopar (w ), Mumbai - 86', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '8422006493', '8422006493', '2003-06-27'),
(555, 'Mahato Ranjan Chandrakant', 112, 'Aman Committee, Nityand gar, L.B.S. Marg, Sherkhan Compound, Ghatkopar (w ), Mumbai - 86', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9323094880', '9323094880', '2002-10-21'),
(556, 'Jaiswar Raj Subhash', 112, 'Near Shankar Mandir,  Sanjay Gandhi gar, Galli No. 1, Room No. 4, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '9619608876', '9619608876', '2002-01-12'),
(557, 'Pal Mahendra Ramlal', 112, 'Sanjay Ghandhi gar, Galli No . 2, Ghatkopar (e ), Mumbai -75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '8898689201', '8898689201', '2003-01-20'),
(558, 'Ansari Rajjab Md. Mustafa', 112, 'Sai Chhaya Building No. 2, Room No. 403, Pantgar, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 14, '8652440520', '8652440520', '2001-09-20'),
(559, 'Singh Ashish Deoraj', 112, 'Laxmi gar Jamata Colony Galli No. 3, Pantgar, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '8898788673', '8898788673', '2002-06-18'),
(560, 'Khan Shebo Khalique', 112, 'Savitri Bai Phule gar, Sai -Chhaya Building No. 2, Room No. 508, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 13, '8887343297', '8887343297', '2002-01-13'),
(561, 'Shaikh Gulum Husen Pir Mohamad', 112, 'Opp. Telephone Exchange Gautam gar, Nityand gar, Ghatkopar (e , Mumabi - 86', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 12, '9594359226', '9594359226', '2003-11-15'),
(562, 'Zha Awadesh Kamlesh', 112, 'Room No. 3, Deopooja Society, Laxmi gar, Near Shiv Mandir, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 11, '9594313604', '9594313604', '2004-08-20'),
(563, 'Sharma Vikas Sanjay', 112, 'Room No. 243, Ramabai Colony, Galli No. 4, Jalprabhat gar, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 10, '9702865917', '9702865917', '2005-04-10'),
(564, 'Ram Pradeep Jaswant', 112, 'Sanjay Ghandhi gar, Galli No . 1, Ghatkopar (e ), Mumbai -75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 11, '7738905154', '7738905154', '2004-10-07'),
(565, 'Gupta Upendra Laxman', 112, 'Jal Prabhat gar, Ramabai Colony, Galli No . 4, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 1, 1, 1, 10, '9920332075', '9920332075', '2005-05-20'),
(566, 'Harijan Dileepkumar Jaswant', 112, 'Sanjay Gandhi gar, Galli No 1, Pantgar, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '7738905154', '7738905154', '2001-04-02'),
(567, 'Singh Anuj Deoraj', 112, 'Laxmi gar Jamata Colony Galli No. 3, Pantgar, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 16, '8898788673', '8898788673', '1999-04-15'),
(568, 'Gupta Rambali Laxman', 112, 'Jal Prabhat gar, Ramabai Colony, Galli No . 4, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9920332075', '9920332075', '2001-02-10'),
(569, 'Ghavri Rohan Rakesh', 112, 'Sanjay Gandhi gar, Room No. 4,  Galli No 1, Pantgar, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 13, '9197233560', '9197233560', '2001-12-27'),
(570, 'Soni Ritik Rajesh', 112, 'Sai Baba gar, Behind Building No.1, Pantgar, Ghatkopar (e ), M - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 16, '9987680239', '9987680239', '1999-08-25'),
(571, 'Shahu Hemant Rajesh', 112, 'Savitri Bai Phule gar, Room No. 174, Galli No. 1, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '', '', '2001-05-21'),
(572, 'Kaujiya Suraj Chotelal', 112, 'Ambedkar gar, Zopadpatti Acharya Dharm, Shivaji Marg, Ghatkopar (e ), M -75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9833982241', '9833982241', '2001-09-17'),
(573, 'Dhobi Shubham Gokavan', 112, 'Room No.2, th Pai gar, Pragati Chawl, 90Feet Rd., Pantgar, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 15, '9892233138', '9892233138', '2000-08-15'),
(574, 'Hasmi Tausit seem', 112, 'Ramabai Ambedkar gar, Santa Colony, Galli No. 4, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9987977767', '9987977767', '2001-07-12'),
(575, 'Pardeshi Saurabha Deep', 112, 'Opp. Everest Garden, Laxmi gar, Andheri Link Road, Jagmata Colony, Room No. 14/25, Ghatkopar (e ), Mumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '982544776/8097506165', '982544776/8097506165', '2001-12-01'),
(576, 'Gupta Rohan Raju', 112, 'Savitri Bai Phule gar, Near Pantgar, Police Station, Galli No. 3, Ghatkopar (e ), Mumbai -75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '8879346607', '8879346607', '2001-10-13'),
(577, 'Jaiswal Suraj Shobhatha', 112, 'Shashtri gar, Galli No .1, Pantgar, Ghatkopar (e ), Muumbai - 75', '', '', '', 'Ghatkopar', 1, 1, 3, 1, 1, 14, '9594838271', '9594838271', '2001-01-14'),
(578, 'Ichha Jain', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 15, '', '', '2000-10-29'),
(579, 'Sadashya Bisht', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 3, '', '', '2012-12-08'),
(580, 'Sadaf Khidir', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 15, '', '', '2000-08-16'),
(581, 'Muskan Malhotra', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 0, '', '', '2015-12-22'),
(582, 'Aastha Trehan', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 15, '', '', '2000-11-10'),
(583, 'Vaishvi Shetty', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 14, '', '', '2001-08-14'),
(584, 'Sa Fatima', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 14, '', '', '2001-08-01'),
(585, 'Muskan Dangi', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 0, '', '', '2015-12-22'),
(586, 'Khyati Singh', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 0, '', '', '2015-12-22'),
(587, 'Anya Goyal', 190, '', '', '', '', '', 1, 1, 3, 2, 1, 0, '', '', '2015-12-22'),
(588, 'idu Krisal Ganesh', 196, 'I-38, gagangiribud, 2ndfloor, room no. 203, Sion, Pritiksha gar, Mumbai-400022', '', 'sganeshidu@gmail.com', '', 'partiksha , gar', 1, 1, 1, 2, 1, 11, '9224387930, 9820782190', '9820782190', '2004-06-17'),
(589, 'Dcruz Alicia Agnello', 196, '1/22 Tata Power Housing Colony, Dharavi, Receving station, Matunga, Mumbai-400019', '', 'heal980@gmail.com', '', 'dharavi', 1, 1, 1, 2, 1, 11, '9089600043, 9224015671', '24010086', '2004-10-29'),
(590, 'Priyadarshini Sandilyan', 196, 'Building No. 56, Room No. 578, Sector 2,C.G.S Colony, Antophill, Kane gar, Mumbai 400037', '', '', '', 'kane gar', 1, 1, 1, 2, 1, 11, '9821674998, 9921884998', '9821674998', '2004-10-04'),
(591, 'Mengade Rima Gurud', 196, '214/4, Futni Building, Rafi Ahmed Kidawai Marg, Wadala, Mumbai-400031', '', '', '', 'rafi ahmed kidwai marg', 1, 1, 1, 2, 1, 11, '9867935867, 9819940832', '8108034841', '2004-02-12'),
(592, 'Bidwadkar Riddhi Ravindra', 196, '6/605, Sunder Tower, T.J Road Sewree, Mumbai-400013', '', '', '', 'Sewree', 1, 1, 1, 2, 1, 11, '99887081747', '24130527', '2004-04-24'),
(593, 'Kadam RadhikaAtmaram', 196, '1/25, Hirjibaug C.H.S, Jakedia Bunder Road, sivyree, Mumbai-400015', '', 'kdm.10oct@gmail.com', '', 'sivyree', 1, 1, 1, 2, 1, 12, '9594248508, 9869429317', '24126673', '2003-05-31'),
(594, 'Shetty Dhannisha Pushparaj', 196, 'Plot No:210/2nd floor, Room No.15, R.A.K Road, Wadala west,Next to Rialway Station Mumbai-400031', '', '', '', 'R.A.K  road', 1, 1, 1, 2, 1, 11, '9619959438, 9869049936', '24126824', '2004-10-20'),
(595, 'Serrao Shania Mallet', 196, 'House No. 863 Wadala Village, uhino Jagruti Mandal Wadala west, Mumbai- 400031', '', 'malletserrao@yahoo.com', '', 'uhino jagruti mandal', 1, 1, 1, 2, 1, 11, '9769455874, 8451868125', '9768107088', '2004-05-19'),
(596, 'Khan Sa Ayub', 196, 'RBI Officers QTRS, Flat No. 09, Flank Road, Sion east, Mumbai-400022', '', 'susk2007@yahoo.com', '', 'flank road', 1, 1, 1, 2, 1, 12, '9769339805, 8108381285', '9867233423, 8898309726', '2003-08-28'),
(597, 'Jaadge Deepashree Dinesh', 196, 'Room No. 201, Sai Shradha C.H.S, Sewri x road, Wadala West, Mumbai-400031', '', '', '', 'sewri x road', 1, 1, 1, 2, 1, 12, '9769497752, 9969164988', '9969164988', '2003-12-09'),
(598, 'Singh Ktitika Sohan', 196, '24, 2nd Floor, Siddharth gar, Co.op Housing Society, M.M.G.S Marg, Opp Telephone Exchange, Dadar East, Mumbai 400014', '', 'mabundey@gmail.com', '', 'M.M.G.S marg', 1, 1, 1, 2, 1, 11, '9322294871', '9322294871', '2004-02-15'),
(599, 'Mehta Mahek Bhupesh', 196, '2/24, Mantri Corner CHSL, Gokhale Road, Near Sayanti Road (Sigl) Mumbai-400025', '', 'seemabmehta109@gmail.com', '', 'ghokale road', 1, 1, 1, 2, 1, 11, '9819585280', '24308778', '2004-04-12'),
(600, 'Talekar Keshar Sandeep', 196, 'NewBDD, 4/37, Dahiwalkar Buwa Marg, igoan, Dadar, Mumbai-400031', '', 'keshar2302@gmail.com', '', 'dhaiwalkar buwa marg', 1, 1, 3, 2, 1, 13, '9821214608, 9821214609', '8080360003, 9820585930', '2002-03-23'),
(601, 'Rai Apar Shivkumar', 196, 'Muncipal BLDG, 404/2, Room No. 5/6, Katrak Road, Wadala,Opp Vittha Temple, Mumbai-400031', '', '', '', 'katrak road', 1, 1, 3, 2, 1, 15, '7715856891', '24112447', '2000-04-06'),
(602, 'Jain Mansi Prashant', 196, '13 LR BLDG, Laxmi rayan Lane, 5Th Floor, Matunga, Mumbai-400019', '', '', '', 'laxmi rayan road', 1, 1, 3, 2, 1, 14, '9892532897, 9867328473', '2402284', '2001-08-12'),
(603, 'DSouza Tania Basil', 196, 'House No. 844, Sewri Cross Road,Gajan Seva Mandal, Wadala Village, Mumbai-400031', '', 'Rosa.dsouza@pidilite.co.in', '', 'seva mandal', 1, 1, 3, 2, 1, 15, '9819231534', '9619537870', '2000-02-12'),
(604, 'Ferndes Noella Fustace', 196, 'Abhiv gar, Ganesh Mandir Marg, Room No.2/10, Wadala, Mumbai-400031', '', 'eustace20us@yahoo.com', '', 'ganesh mandir marg', 1, 1, 3, 2, 1, 10, '9769790196', '24136275', '2004-12-25'),
(605, 'Koushalya Anth', 196, 'GTB Hospital, Servent(QUA), Jeribai Wadia Road, BLDG A Room No. 9 2nf floor Sewri Mumbai-400015', '', '', '', 'sewri', 1, 1, 3, 2, 1, 13, '9224214518', '8655073700', '2002-09-03'),
(606, 'Sakpal Shreya Suryakant', 196, 'R.No.-201, BLDG No-6 B-wing, Sindhudurg CHS Ltd, Pratiksha gar Sion (E) Mumbai-400022', '', 'ssuryalla@rediffmil.com', '', 'pratiksha gar', 1, 1, 3, 2, 1, 11, '9820997585, 9819630994', '9867930836, 9819630994', '2004-05-09'),
(607, 'Panchal Archa Pradeep', 196, '407, Sonder Tower Co.Op HSG Soc. Ltd, T.J Road, Sewree West, Mumbai-400015', '', 'snehapanchal22@yahoo.com', '', 'sewree', 1, 1, 3, 2, 1, 12, '9869075980, 9757050875', '24128347', '2003-04-06'),
(608, 'Ferndes Gratel Celestine', 196, 'Wadala Sewree Cross Rd, Bhaskar Chawl, Opp K.K Apt Mumbai-400031', '', '', '', 'sewree', 1, 1, 3, 2, 1, 12, '9769507457, 9920091903', '9619352269', '2003-09-05'),
(609, 'Ferndes Cimone Celestine', 196, 'Wadala Sewree Cross Rd, Bhaskar Chawl, Opp K.K Apt Mumbai-400031', '', '', '', 'sewree', 1, 1, 3, 2, 1, 12, '9769507457, 9920091903', '9619352269', '2003-09-05'),
(610, 'Ferdes Tricia Marisse', 196, '504, Dosti Venus, M.T.V Road, Wadala (E), Sikh Bunglow, Mumbai- 400037', '', '', '', 'M.T.V road', 1, 1, 3, 2, 1, 15, '9820110820, 9820525184', '9820110820', '2000-06-21'),
(611, 'Bhullar Gurnoor Kaur Deshpal Singh', 196, '35, Parel Tank Road, Opp K.K. Towers, Sikh Bunglow Mumbai-400033', '', 'gurnoor15bhullar@gmail.com', '', 'parel tank road', 1, 1, 3, 2, 1, 14, '8108801313', '24101469', '2001-01-15'),
(612, 'Adkar Shravani Sahadeo', 196, '32/635, New mb.Pt Colony, dkarni Park, Wadala east, Mumbai-400037', '', 'siarajadkar@gmail.com', '', 'dkarni park', 1, 1, 2, 2, 1, 10, '8108161875, 9004683094', '9594928970', '2005-08-07'),
(613, 'Singh Siddhi Shriom', 196, '8/466, Mehta BuildingOpp.Don bosco Scool, Kings Circle , Matunga, Mumbai-400019', '', '', '', 'kings circle', 1, 1, 2, 2, 1, 9, '9702975926, 9702555416', '24073040', '2006-06-10'),
(614, 'Khan Afza Sujata Ali', 196, 'Room No. 501, 5th Floor, C-Wing Hill View Co-op Society Near Sector 2, New Mhada BLDG,SMD  Road Antophill, Mumbai-400037', '', 'sujatalikhan111@gmail.com', '', 'SMD road antop hill', 1, 1, 2, 2, 1, 9, '9664566079, 8097836785', '8380022992', '2006-01-17'),
(615, 'Kulkarni Vidhi Parag', 196, 'Room No. 31/32 3rd Floor Kanti Bhuvan, MR Cara Bank, G.S Lane Parel, Mumbai-400031', '', '', '', 'kanti bhavan', 1, 1, 2, 2, 1, 10, '9920866647', '24110832', '2005-02-16'),
(616, 'Jadhav Nisarga Vikas', 196, 'Bhawani Mata C.H.S, B-2, 4/405,N.M. Joshi Marg, Elphinstone Road, Mumbai-400013', '', 'jsrusuti@rediffmail.com', '', 'N.M. joshi marg', 1, 1, 2, 2, 1, 10, '9819141445, 8898139898', '9967247769', '2005-12-20'),
(617, 'Parab Kshitija Vikas', 196, 'E/10, Best Staff Quatters, Near Ambedkar College Tilak Road, Wadala, Mumbai-400031', '', 'vikasparab@gmail.com', '', 'tilak road', 1, 1, 2, 2, 1, 10, '9967036285, 9702036285', '24115763', '2005-05-11'),
(618, 'Kasambai Nimisha Vijay', 196, '895, bhai, Bunglow, <ilan Chawl, Sewri Cross Road, Auxilium School, Mumbai-400031', '', '', '', 'Milan chawl', 1, 1, 2, 2, 1, 10, '9167743429', '', '2005-04-25'),
(619, 'lawade Rutuja Hamant', 196, 'Flat No.703, BLDG No.13, Shree siddhiviyak krupa,Pritiksha gar, Sion, Mumbai-400022', '', 'hplawade@gmail.com', '', 'pritiksha gar', 1, 1, 2, 2, 1, 9, '9769105672', '9819779653', '2006-02-22'),
(620, 'Dalyi Arya Shrikant', 196, 'BLDG No.2, R.No.88, Kohinoor Mills chawl, Mahatma jyotiba Fuel Road, igoan, Dadar east, Mumbai-400014', '', 'tony1803@gmail.com', '', 'kohinoor mills chawl', 1, 1, 2, 2, 1, 9, '9867202449, 9867271645', '24180041', '2006-01-10'),
(621, 'Charan Lavanga Uttam', 196, 'Abhyudaya gar, Room. No. 2297, BLDG No. 33, 1st floor , Kalachowaki, Mumbai-400033', '', 'anitauttam43@gmail.com', '', 'abhyudaya gar', 1, 1, 2, 2, 1, 10, '8689847111, 9224997111', '9819775357, 8108475248', '2005-07-27'),
(622, 'Shah Shifa Lallan', 196, 'Room No.5, Building No.13, Kidwai gar Colony, R.A. Kidwai Road, Wadala, Mumbai-400031', '', '', '', 'R.A. kidwai road', 1, 1, 2, 2, 1, 10, '9892237213, 8286447263', '9892237213', '2005-05-13'),
(623, 'Jain Harshi Jitendra', 196, 'Maratha Samaj Graha, Parmar Guruji Marg, D Block, 1st Floor, Parel, Mumbai-400012', '', '', '', 'parmar guruji marg', 1, 1, 2, 2, 1, 9, '9833142810, 9224788063', '24109293', '2006-07-24');

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
) ENGINE=InnoDB AUTO_INCREMENT=645 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfa_studentsport`
--

INSERT INTO `sfa_studentsport` (`id`, `student`, `sport`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 39, 1),
(40, 40, 1),
(41, 41, 1),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(46, 46, 1),
(47, 47, 1),
(48, 48, 1),
(49, 49, 1),
(50, 50, 1),
(51, 51, 1),
(52, 52, 1),
(53, 53, 1),
(54, 54, 1),
(55, 55, 1),
(56, 56, 1),
(57, 57, 1),
(58, 58, 1),
(59, 59, 1),
(60, 60, 1),
(61, 61, 1),
(62, 62, 1),
(63, 63, 1),
(64, 64, 1),
(65, 65, 1),
(66, 66, 1),
(67, 67, 1),
(68, 68, 1),
(69, 69, 1),
(70, 70, 1),
(71, 71, 1),
(72, 72, 1),
(73, 73, 1),
(74, 74, 1),
(75, 75, 1),
(76, 76, 1),
(77, 77, 1),
(78, 78, 1),
(79, 79, 1),
(80, 80, 1),
(81, 81, 1),
(82, 82, 1),
(83, 83, 1),
(84, 84, 1),
(85, 85, 1),
(86, 86, 1),
(87, 87, 1),
(88, 88, 1),
(89, 89, 1),
(90, 90, 1),
(91, 91, 1),
(92, 92, 1),
(93, 93, 1),
(94, 94, 1),
(95, 95, 1),
(96, 96, 1),
(97, 97, 1),
(98, 98, 1),
(99, 99, 1),
(100, 100, 1),
(101, 101, 1),
(102, 102, 1),
(103, 103, 1),
(104, 104, 1),
(105, 105, 1),
(106, 106, 1),
(107, 107, 1),
(108, 108, 1),
(109, 109, 1),
(110, 110, 1),
(111, 111, 1),
(112, 112, 1),
(113, 113, 1),
(114, 114, 1),
(115, 115, 1),
(116, 116, 1),
(117, 117, 1),
(118, 118, 1),
(119, 119, 1),
(120, 120, 1),
(121, 121, 1),
(122, 122, 1),
(123, 123, 1),
(124, 124, 1),
(125, 125, 1),
(126, 126, 1),
(127, 127, 1),
(128, 128, 1),
(129, 129, 1),
(130, 130, 1),
(131, 131, 1),
(132, 132, 1),
(133, 133, 1),
(134, 134, 1),
(135, 135, 1),
(136, 136, 1),
(137, 137, 1),
(138, 138, 1),
(139, 139, 1),
(140, 140, 1),
(141, 141, 1),
(142, 142, 1),
(143, 143, 1),
(144, 144, 1),
(145, 145, 1),
(146, 146, 1),
(147, 111, 1),
(148, 147, 1),
(149, 115, 1),
(150, 148, 1),
(151, 149, 1),
(152, 150, 1),
(153, 151, 1),
(154, 152, 1),
(155, 153, 1),
(156, 110, 1),
(157, 154, 1),
(158, 155, 1),
(159, 156, 1),
(160, 157, 1),
(161, 158, 1),
(162, 159, 1),
(163, 160, 1),
(164, 161, 1),
(165, 162, 1),
(166, 163, 1),
(167, 164, 1),
(168, 165, 1),
(169, 166, 1),
(170, 167, 1),
(171, 168, 1),
(172, 169, 1),
(173, 170, 1),
(174, 171, 1),
(175, 172, 1),
(176, 173, 1),
(177, 174, 1),
(178, 175, 1),
(179, 176, 1),
(180, 177, 1),
(181, 178, 1),
(182, 179, 1),
(183, 166, 1),
(184, 164, 1),
(185, 165, 1),
(186, 180, 1),
(187, 181, 1),
(188, 182, 1),
(189, 183, 1),
(190, 184, 1),
(191, 185, 1),
(192, 186, 1),
(193, 187, 1),
(194, 188, 1),
(195, 189, 1),
(196, 190, 1),
(197, 191, 1),
(198, 192, 1),
(199, 193, 1),
(200, 194, 1),
(201, 195, 1),
(202, 196, 1),
(203, 197, 1),
(204, 184, 1),
(205, 191, 1),
(206, 192, 1),
(207, 188, 1),
(208, 193, 1),
(209, 198, 1),
(210, 194, 1),
(211, 195, 1),
(212, 199, 1),
(213, 189, 1),
(214, 200, 1),
(215, 201, 1),
(216, 202, 1),
(217, 203, 1),
(218, 204, 1),
(219, 205, 1),
(220, 206, 1),
(221, 207, 1),
(222, 208, 1),
(223, 209, 1),
(224, 210, 1),
(225, 211, 1),
(226, 212, 1),
(227, 213, 1),
(228, 214, 1),
(229, 215, 1),
(230, 216, 1),
(231, 217, 1),
(232, 218, 1),
(233, 219, 1),
(234, 220, 1),
(235, 221, 1),
(236, 222, 1),
(237, 223, 1),
(238, 224, 1),
(239, 225, 1),
(240, 226, 1),
(241, 227, 1),
(242, 228, 1),
(243, 229, 1),
(244, 230, 1),
(245, 231, 1),
(246, 232, 1),
(247, 233, 1),
(248, 234, 1),
(249, 235, 1),
(250, 236, 1),
(251, 237, 1),
(252, 238, 1),
(253, 239, 1),
(254, 240, 1),
(255, 241, 1),
(256, 242, 1),
(257, 243, 1),
(258, 244, 1),
(259, 245, 1),
(260, 246, 1),
(261, 247, 1),
(262, 248, 1),
(263, 249, 1),
(264, 250, 1),
(265, 251, 1),
(266, 252, 1),
(267, 253, 1),
(268, 254, 1),
(269, 255, 1),
(270, 256, 1),
(271, 257, 1),
(272, 258, 1),
(273, 259, 1),
(274, 260, 1),
(275, 261, 1),
(276, 262, 1),
(277, 263, 1),
(278, 264, 1),
(279, 265, 1),
(280, 266, 1),
(281, 267, 1),
(282, 268, 1),
(283, 269, 1),
(284, 270, 1),
(285, 271, 1),
(286, 272, 1),
(287, 273, 1),
(288, 274, 1),
(289, 275, 1),
(290, 276, 1),
(291, 277, 1),
(292, 272, 1),
(293, 273, 1),
(294, 274, 1),
(295, 276, 1),
(296, 275, 1),
(297, 278, 1),
(298, 279, 1),
(299, 277, 1),
(300, 280, 1),
(301, 281, 1),
(302, 282, 1),
(303, 283, 1),
(304, 284, 1),
(305, 285, 1),
(306, 286, 1),
(307, 287, 1),
(308, 288, 1),
(309, 289, 1),
(310, 290, 1),
(311, 291, 1),
(312, 292, 1),
(313, 293, 1),
(314, 294, 1),
(315, 295, 1),
(316, 296, 1),
(317, 297, 1),
(318, 298, 1),
(319, 299, 1),
(320, 300, 1),
(321, 301, 1),
(322, 302, 1),
(323, 303, 1),
(324, 304, 1),
(325, 305, 1),
(326, 306, 1),
(327, 307, 1),
(328, 308, 1),
(329, 309, 1),
(330, 310, 1),
(331, 311, 1),
(332, 312, 1),
(333, 313, 1),
(334, 314, 1),
(335, 315, 1),
(336, 316, 1),
(337, 317, 1),
(338, 318, 1),
(339, 319, 1),
(340, 320, 1),
(341, 321, 1),
(342, 322, 1),
(343, 323, 1),
(344, 324, 1),
(345, 325, 1),
(346, 326, 1),
(347, 327, 1),
(348, 328, 1),
(349, 329, 1),
(350, 330, 1),
(351, 331, 1),
(352, 332, 1),
(353, 333, 1),
(354, 334, 1),
(355, 335, 1),
(356, 336, 1),
(357, 337, 1),
(358, 338, 1),
(359, 339, 1),
(360, 340, 1),
(361, 341, 1),
(362, 342, 1),
(363, 343, 1),
(364, 344, 1),
(365, 345, 1),
(366, 346, 1),
(367, 347, 1),
(368, 348, 1),
(369, 349, 1),
(370, 350, 1),
(371, 351, 1),
(372, 352, 1),
(373, 353, 1),
(374, 354, 1),
(375, 355, 1),
(376, 356, 1),
(377, 357, 1),
(378, 358, 1),
(379, 359, 1),
(380, 360, 1),
(381, 361, 1),
(382, 362, 1),
(383, 363, 1),
(384, 364, 1),
(385, 365, 1),
(386, 366, 1),
(387, 367, 1),
(388, 368, 1),
(389, 369, 1),
(390, 370, 1),
(391, 371, 1),
(392, 372, 1),
(393, 373, 1),
(394, 374, 1),
(395, 375, 1),
(396, 376, 1),
(397, 377, 1),
(398, 378, 1),
(399, 379, 1),
(400, 380, 1),
(401, 381, 1),
(402, 382, 1),
(403, 383, 1),
(404, 384, 1),
(405, 385, 1),
(406, 386, 1),
(407, 387, 1),
(408, 388, 1),
(409, 389, 1),
(410, 390, 1),
(411, 391, 1),
(412, 392, 1),
(413, 393, 1),
(414, 394, 1),
(415, 395, 1),
(416, 396, 1),
(417, 397, 1),
(418, 398, 1),
(419, 399, 1),
(420, 400, 1),
(421, 401, 1),
(422, 402, 1),
(423, 403, 1),
(424, 404, 1),
(425, 405, 1),
(426, 406, 1),
(427, 407, 1),
(428, 408, 1),
(429, 409, 1),
(430, 410, 1),
(431, 411, 1),
(432, 412, 1),
(433, 413, 1),
(434, 414, 1),
(435, 415, 1),
(436, 416, 1),
(437, 417, 1),
(438, 418, 1),
(439, 419, 1),
(440, 420, 1),
(441, 421, 1),
(442, 422, 1),
(443, 423, 1),
(444, 424, 1),
(445, 425, 1),
(446, 426, 1),
(447, 427, 1),
(448, 428, 1),
(449, 429, 1),
(450, 430, 1),
(451, 431, 1),
(452, 432, 1),
(453, 433, 1),
(454, 434, 1),
(455, 435, 1),
(456, 436, 1),
(457, 437, 1),
(458, 438, 1),
(459, 439, 1),
(460, 440, 1),
(461, 441, 1),
(462, 442, 1),
(463, 443, 1),
(464, 444, 1),
(465, 445, 1),
(466, 446, 1),
(467, 447, 1),
(468, 448, 1),
(469, 449, 1),
(470, 450, 1),
(471, 451, 1),
(472, 452, 1),
(473, 453, 1),
(474, 454, 1),
(475, 455, 1),
(476, 456, 1),
(477, 457, 1),
(478, 458, 1),
(479, 459, 1),
(480, 460, 1),
(481, 461, 1),
(482, 462, 1),
(483, 463, 1),
(484, 464, 1),
(485, 465, 1),
(486, 466, 1),
(487, 467, 1),
(488, 468, 1),
(489, 469, 1),
(490, 449, 1),
(491, 470, 1),
(492, 471, 1),
(493, 472, 1),
(494, 473, 1),
(495, 474, 1),
(496, 475, 1),
(497, 476, 1),
(498, 477, 1),
(499, 478, 1),
(500, 479, 1),
(501, 480, 1),
(502, 481, 1),
(503, 482, 1),
(504, 483, 1),
(505, 484, 1),
(506, 485, 1),
(507, 486, 1),
(508, 487, 1),
(509, 488, 1),
(510, 489, 1),
(511, 490, 1),
(512, 491, 1),
(513, 492, 1),
(514, 493, 1),
(515, 494, 1),
(516, 495, 1),
(517, 496, 1),
(518, 497, 1),
(519, 498, 1),
(520, 499, 1),
(521, 500, 1),
(522, 501, 1),
(523, 502, 1),
(524, 503, 1),
(525, 504, 1),
(526, 505, 1),
(527, 506, 1),
(528, 507, 1),
(529, 508, 1),
(530, 509, 1),
(531, 510, 1),
(532, 511, 1),
(533, 512, 1),
(534, 513, 1),
(535, 514, 1),
(536, 515, 1),
(537, 516, 1),
(538, 517, 1),
(539, 518, 1),
(540, 519, 1),
(541, 520, 1),
(542, 521, 1),
(543, 522, 1),
(544, 523, 1),
(545, 524, 1),
(546, 525, 1),
(547, 526, 1),
(548, 527, 1),
(549, 528, 1),
(550, 529, 1),
(551, 530, 1),
(552, 531, 1),
(553, 532, 1),
(554, 533, 1),
(555, 534, 1),
(556, 535, 1),
(557, 536, 1),
(558, 537, 1),
(559, 538, 1),
(560, 539, 1),
(561, 540, 1),
(562, 541, 1),
(563, 542, 1),
(564, 543, 1),
(565, 544, 1),
(566, 545, 1),
(567, 546, 1),
(568, 547, 1),
(569, 548, 1),
(570, 549, 1),
(571, 550, 1),
(572, 551, 1),
(573, 552, 1),
(574, 553, 1),
(575, 554, 1),
(576, 555, 1),
(577, 556, 1),
(578, 557, 1),
(579, 558, 1),
(580, 559, 1),
(581, 560, 1),
(582, 561, 1),
(583, 562, 1),
(584, 563, 1),
(585, 564, 1),
(586, 565, 1),
(587, 566, 1),
(588, 567, 1),
(589, 568, 1),
(590, 569, 1),
(591, 570, 1),
(592, 571, 1),
(593, 572, 1),
(594, 573, 1),
(595, 574, 1),
(596, 575, 1),
(597, 576, 1),
(598, 577, 1),
(599, 578, 1),
(600, 579, 1),
(601, 580, 1),
(602, 581, 1),
(603, 582, 1),
(604, 583, 1),
(605, 584, 1),
(606, 585, 1),
(607, 586, 1),
(608, 587, 1),
(609, 588, 1),
(610, 589, 1),
(611, 590, 1),
(612, 591, 1),
(613, 592, 1),
(614, 593, 1),
(615, 594, 1),
(616, 595, 1),
(617, 596, 1),
(618, 597, 1),
(619, 598, 1),
(620, 599, 1),
(621, 600, 1),
(622, 601, 1),
(623, 602, 1),
(624, 603, 1),
(625, 604, 1),
(626, 605, 1),
(627, 606, 1),
(628, 607, 1),
(629, 608, 1),
(630, 609, 1),
(631, 610, 1),
(632, 611, 1),
(633, 612, 1),
(634, 613, 1),
(635, 614, 1),
(636, 615, 1),
(637, 616, 1),
(638, 617, 1),
(639, 618, 1),
(640, 619, 1),
(641, 620, 1),
(642, 621, 1),
(643, 622, 1),
(644, 623, 1);

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
-- Indexes for table `gender`
--
ALTER TABLE `gender`
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
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `registrationsports`
--
ALTER TABLE `registrationsports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `schoolregistration`
--
ALTER TABLE `schoolregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `schoolregistrationsports`
--
ALTER TABLE `schoolregistrationsports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `sfa_agegroups`
--
ALTER TABLE `sfa_agegroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sfa_matchplayed`
--
ALTER TABLE `sfa_matchplayed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sfa_mediastudents`
--
ALTER TABLE `sfa_mediastudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_round`
--
ALTER TABLE `sfa_round`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sfa_school`
--
ALTER TABLE `sfa_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=294;
--
-- AUTO_INCREMENT for table `sfa_sportcategorystudent`
--
ALTER TABLE `sfa_sportcategorystudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=645;
--
-- AUTO_INCREMENT for table `sfa_sports`
--
ALTER TABLE `sfa_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sfa_sportscategory`
--
ALTER TABLE `sfa_sportscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sfa_student`
--
ALTER TABLE `sfa_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=624;
--
-- AUTO_INCREMENT for table `sfa_studentagegroup`
--
ALTER TABLE `sfa_studentagegroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sfa_studentsport`
--
ALTER TABLE `sfa_studentsport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=645;
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

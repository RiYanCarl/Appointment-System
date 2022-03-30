-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 10:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `stakeholders`
--

CREATE TABLE `stakeholders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact_No` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `office` varchar(20) NOT NULL,
  `purpose_of_appoint` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `validity_of_QR` date NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stakeholders`
--

INSERT INTO `stakeholders` (`id`, `first_name`, `last_name`, `category`, `address`, `contact_No`, `email`, `time`, `office`, `purpose_of_appoint`, `status`, `date`, `validity_of_QR`, `added_at`) VALUES
(1, 'Abbie', 'Bollon', 'Professor', 'Angono', '03918725618', 'abollon0@disqus.com', 'Morning: 8am - 9am', 'Registrar', 'consult', 'Approved', '2022-03-30', '2022-03-30', '0000-00-00 00:00:00'),
(2, 'Hilton', 'Lovel', 'Parent', 'Antipolo', '09227020561', 'hlovel1@utexas.edu', 'Afternoon: 4pm-4:30p', 'Registrar', 'consult', 'Pending', '2022-03-29', '0000-00-00', '0000-00-00 00:00:00'),
(3, 'Maudie', 'Tampin', '[Professor]', 'Binangonan', '1388560615', 'mtampin2@mayoclinic.', 'Morning', 'Registrar', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(4, 'Karon', 'Swadden', '[Professor]', 'Cainta', '4385821690', 'kswadden3@prweb.com', 'Morning', 'Registrar', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(5, 'Savina', 'Grewes', '[Professor]', 'Cainta', '4121939328', 'sgrewes4@zdnet.com', 'Morning', 'Registrar', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(6, 'Amandie', 'Kick', '[Professor]', 'Cardona', '8932584400', 'akick5@home.pl', 'Morning', 'Registrar', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(7, 'Alvira', 'Day', '[Professor]', 'Cardona', '702862401', 'aday6@facebook.com', 'Morning', 'Faculty', 'consult', 'Approved', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(8, 'Caryl', 'Treadaway', '[Professor]', 'Morong', '7570291417', 'ctreadaway7@cbslocal', 'Morning', 'Faculty', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(9, 'Lindsey', 'Kennefick', '[Professor]', 'Morong', '5323839899', 'lkennefick8@jiathis.', 'Morning', 'Faculty', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(10, 'Jimmy', 'Gregorowicz', '[Professor]', 'Pililla', '5677321044', 'jgregorowicz9@4share', 'Morning', 'Faculty', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(11, 'Briana', 'Dohmann', '[Professor]', 'Pililla', '80871879', 'bdohmanna@usnews.com', 'Afternoon', 'Casher', 'consult', 'Approved', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(12, 'Nadean', 'Hearnaman', '[Professor]', 'Rodriguez', '7748599335', 'nhearnamanb@home.pl', 'Afternoon', 'Casher', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(13, 'Emmett', 'Cumes', '[Professor]', 'Tanay', '7944079969', 'ecumesc@pcworld.com', 'Afternoon', 'OSDS', 'consult', 'Approved', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(14, 'Kesley', 'Lowless', '[Professor]', 'Tanay', '9930386602', 'klowlessd@google.de', 'Afternoon', 'OSDS', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(15, 'Golda', 'Kochel', '[Professor]', 'Tanay', '8355091310', 'gkochele@list-manage', 'Afternoon', 'OSDS', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(16, 'Aridatha', 'Clabburn', '[Professor]', 'Angono', '1346515859', 'aclabburnf@is.gd', 'Afternoon', 'Clinic', 'consult', 'Approved', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(17, 'Alika', 'Rhoades', '[Professor]', 'Antipolo', '3467417469', 'arhoadesg@pinterest.', 'Afternoon', 'Clinic', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(18, 'Kameko', 'Beavers', '[Professor]', 'Binangonan', '6995272439', 'kbeaversh@irs.gov', 'Afternoon', 'Clinic', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(19, 'Jasen', 'Dikles', '[Professor]', 'Cainta', '2110914432', 'jdiklesi@reference.c', 'Afternoon', 'Clinic', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(20, 'Trista', 'Assender', '[Professor]', 'Angono', '5114657399', 'tassenderj@elpais.co', 'Afternoon', 'Clinic', 'consult', 'Pending', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(21, 'Rian Carl N.', 'Clemente', '[Professor]', 'Morong', '09456797126', 'rian.carl@gmail.com', 'Afternoon: 1pm - 2pm', 'gymnasium', 'Research Consultation', 'Approved', '0000-00-00', '0000-00-00', '2022-03-11 20:28:06'),
(22, 'q', 'q', 'Student', 'Angono', '09999999999', 'qd@asdsa.com', 'Afternoon: 3pm - 4:p', 'gymnasium', 'hubby', 'Pending', '0000-00-00', '0000-00-00', '2022-03-11 22:09:13'),
(23, 'ewqre', 'werwe', 'Alumni', 'Cardona', '01232131321', 'werewr@sadfas.com', 'Morning: 10am - 11am', 'gymnasium', 'asdas', 'Pending', '0000-00-00', '0000-00-00', '2022-03-12 03:40:48'),
(24, 'asdasqw', 'qweqw', 'Professor', 'Binangonan', '09456756565', 'asdasd@asdas.com', 'Afternoon: 1pm - 2pm', 'Library', 'asdas', 'Approved', '0000-00-00', '0000-00-00', '2022-03-12 03:41:42'),
(25, 'asdas', 'asdas', 'Professor', 'Antipolo', '01322131231', 'asdas@asdas.caom', 'Morning: 8am - 9am', 'Library', 'asdas', 'Pending', '0000-00-00', '0000-00-00', '2022-03-12 03:42:10'),
(26, 'habibbi', 'bubu', 'Student', 'Binangonan', '02131213211', 'habibbi@bubu.com', 'Morning: 10am - 11am', 'Registrar', 'getting some documents', 'Pending', '0000-00-00', '0000-00-00', '2022-03-15 01:57:12'),
(27, 'alie ', 'perez', 'Student', 'Morong', '01234567899', 'alie@perez.com', 'Morning: 9am - 10am', 'Faculty', 'Grade', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 00:07:49'),
(28, 'alie ', 'perez', 'Student', 'Morong', '01234567899', 'alie@perez.com', 'Morning: 9am - 10am', 'Faculty', 'Grade', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 00:08:22'),
(29, 'alie ', 'perez', 'Student', 'Morong', '01234567899', 'alie@perez.com', 'Morning: 9am - 10am', 'Faculty', 'Grade', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 00:08:27'),
(30, 'samjun', 'Imperial', 'Professor', 'Cardona', '09876543211', 'samjun@imperial.com', 'Morning: 9am - 10am', 'Casher', 'Going to pay', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 00:25:03'),
(31, 'jerico', 'Repollosa', 'Alumni', 'Cainta', '04567891233', 'Jerco@repollosa.com', 'Morning: 9am - 10am', 'Registrar', 'Request Document', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 00:26:57'),
(32, 'Aniel ', 'Erjzxyrr', 'Student', 'Morong', '03216549877', 'Aniel@Erjzxyrr.com', 'Afternoon: 3pm - 4:p', 'Faculty ', 'Health Check', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 15:53:16'),
(33, 'Aniel ', 'Erjzxyrr', 'Student', 'Morong', '03216549877', 'Aniel@Erjzxyrr.com', 'Afternoon: 3pm - 4:p', 'Clinic', 'Health Check', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 15:54:01'),
(34, 'Rian Carl N.', 'Clemente', 'Alumni', 'Antipolo', '06549873111', 'rian@carl.com', 'Morning: 10am - 11am', 'Library', 'Return Books', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 16:01:17'),
(35, 'Jon Brixter', 'Fermante', 'Alumni', 'Tanay', '09876543212', 'Jon@Bricter.Com', 'Afternoon: 2pm - 3:p', 'Clinic', 'Check up', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 17:38:00'),
(36, 'Kim Troy', 'Rivera', 'Student', 'Angono', '09638527411', 'Kim@troy.com', 'Afternoon: 2pm-3:pm', 'Registrar', 'Grade follow up', 'Pending', '0000-00-00', '0000-00-00', '2022-03-16 17:42:21'),
(37, 'Carlo', 'Clemente', 'Non-Teaching Staff', 'Antipolo', '09741258963', 'Carlo@gmail.com', 'Afternoon: 1pm - 2pm', 'Casher', 'pay ', 'Pending', '2022-03-31', '0000-00-00', '2022-03-16 18:37:14'),
(38, 'Rain', 'Water', 'Student', 'Angono', '09638527413', 'Rain@gmail.com', 'Morning: 8am - 9am', 'Faculty', 'First', 'Pending', '2022-04-01', '0000-00-00', '2022-03-16 20:19:44'),
(39, 'Rain ', 'Fire', 'Alumni', 'Antipolo', '09876543216', 'Fire@gmail.com', 'Morning: 9am - 10am', 'Registrar', 'docs', 'Pending', '2022-04-02', '0000-00-00', '2022-03-16 20:22:23'),
(40, 'Rain', 'Earth', 'Professor', 'Binangonan', '09368257144', 'Earth@gmail.com', 'Afternoon: 1pm - 2pm', 'Casher', 'pay', 'Pending', '2022-03-17', '0000-00-00', '2022-03-16 20:34:40'),
(41, 'Air', 'Storm', 'Non-Teaching Staff', 'Binangonan', '09465132789', 'Storm@gmail.com', 'Afternoon: 2pm - 3:p', 'OSDS', 'form', 'Pending', '2022-04-04', '0000-00-00', '2022-03-16 20:39:06'),
(42, 'Tom', 'Jerry', 'Non-Teaching personn', 'Cainta', '09731684259', 'tom@jerry.com', 'Afternoon: 1pm - 2pm', 'Clinic', 'health', 'Pending', '2022-04-05', '0000-00-00', '2022-03-16 20:45:43'),
(43, 'Harry', 'Potter', 'Non-Teaching personn', 'Pililla', '09784512366', 'Potter@gamil.com', 'Afternoon: 2pm - 3:p', 'Library', 'books', 'Pending', '2022-04-06', '0000-00-00', '2022-03-16 20:48:26'),
(44, 'Ben', 'Ten', 'Non-Teaching personn', 'Rodriguez', '09321876548', 'Ten@gmail.com', 'Afternoon: 3pm - 4pm', 'gymnasium', 'Ball', 'Pending', '2022-04-07', '0000-00-00', '2022-03-16 20:51:31'),
(45, 'Naruto', 'Uzumaki', 'Parent', 'Tanay', '09357864211', 'Naruto@gmail.com', 'Afternoon: 4pm - 4:3', 'Library', 'Return books', 'Pending', '2022-04-08', '0000-00-00', '2022-03-16 20:54:17'),
(46, 'Boruto', 'Uzumaki', 'Non-Teaching personnel', 'Taytay', '09837164521', 'Boruto@gmai.com', 'Afternoon: 4pm - 5pm', 'OSDS', 'forms', 'Pending', '2022-04-09', '0000-00-00', '2022-03-16 20:58:15'),
(47, 'Bay', 'Max', 'Non-Teaching personnel', 'Cardona', '09456781238', 'Bay@max.com', 'Afternoon: 2pm - 3pm', 'OSDS', 'application form', 'Pending', '2022-03-24', '0000-00-00', '2022-03-16 21:05:50'),
(48, 'blue', 'light', 'Parent', 'Cainta', '09654321879', 'blue@light.com', 'Afternoon: 2pm - 3pm', 'Clinic', 'eyes check', 'Pending', '2022-03-31', '0000-00-00', '2022-03-22 19:22:25'),
(49, 'blue', 'light', 'Non-Teaching personnel', 'Pililla', '09546872133', 'blue@light.com', 'Afternoon: 3pm - 4pm', 'OSDS', 'papers', 'Pending', '2022-03-24', '0000-00-00', '2022-03-22 19:24:59'),
(50, 'green', 'light', 'Alumni', 'Binangonan', '09873524166', 'green@light.com', 'Afternoon: 1pm - 2pm', 'Casher', 'pay', 'Pending', '2022-03-23', '0000-00-00', '2022-03-22 19:49:36'),
(51, 'red ', 'light', 'Professor', 'Binangonan', '09456112387', 'red@light.com', 'Afternoon: 3pm - 4pm', 'Casher', 'pay', 'Pending', '2022-03-31', '0000-00-00', '2022-03-22 19:52:39'),
(52, 'jose', 'Rizal', 'Student', 'Morong', '09663215487', 'jose@Rizal.com', 'Morning: 9am - 10am', 'Registrar', 'docs', 'Pending', '2022-04-01', '0000-00-00', '2022-03-22 20:00:50'),
(53, 'juan', 'mang', 'Alumni', 'Morong', '09851742366', 'juan@mang.com', 'Afternoon: 3pm - 4pm', 'Library', 'research', 'Pending', '2022-04-03', '0000-00-00', '2022-03-22 20:04:20'),
(54, 'juan', 'mang', 'Alumni', 'Morong', '09851742366', 'juan@mang.com', 'Afternoon: 3pm - 4pm', 'Library', 'research', 'Pending', '2022-04-03', '0000-00-00', '2022-03-22 20:04:49'),
(55, 'coco', 'martin', 'Professor', 'Cainta', '09556847123', 'coco@martin.com', 'Morning: 8am - 9am', 'Faculty', 'grade', 'Pending', '2022-04-06', '0000-00-00', '2022-03-22 20:09:44'),
(56, 'pat', 'pat', 'Student', 'Angono', '09668527416', 'pat@pat.com', 'Afternoon: 1pm - 2pm', 'OSDS', 'forms', 'Pending', '2022-04-07', '0000-00-00', '2022-03-22 20:13:10'),
(57, 'Eman', 'sanjuan', 'Student', 'Antipolo', '09887542136', 'eman@sanjuan.com', 'Afternoon: 1pm - 2pm', 'gymnasium', 'return', 'Pending', '2022-03-23', '0000-00-00', '2022-03-22 20:15:59'),
(58, 'Rian Carl', 'Clemente', 'Alumni', 'Morong', '09456797126', 'riancarl.nc@gmail.com', 'Morning: 10am - 11am', 'Registrar', 'Request TOR', 'Pending', '2022-04-21', '2022-03-23', '2022-03-22 20:40:46'),
(59, 'rain', ' carl', 'Professor', 'Rodriguez', '09132465789', 'rain@carl.com', 'Morning: 9am - 10am', 'Clinic', 'health ', 'Pending', '2022-03-26', '0000-00-00', '2022-03-23 00:04:52'),
(60, 'rain', 'carl', 'Non-Teaching personnel', 'Cainta', '09465123798', 'rain@carl.com', 'Morning: 9am - 10am', 'Library', 'borrow books', 'Pending', '2022-04-21', '0000-00-00', '2022-03-23 01:12:01'),
(61, 'franz', 'marie', 'Alumni', 'Binangonan', '09321465987', 'franz@marie.com', 'Morning: 9am - 10am', 'Faculty ', 'pilay', 'Pending', '2022-04-21', '2022-03-29', '2022-03-23 01:13:31'),
(62, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2022-03-23 02:27:37'),
(63, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2022-03-23 02:27:56'),
(64, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2022-03-23 02:29:06'),
(65, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2022-03-23 02:34:11'),
(66, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2022-03-23 02:34:35'),
(67, 'rain', 'asd', 'Alumni', 'Morong', '09213456798', 'asd@asd.com', 'Morning: 10am - 11am', 'Casher', 'sdf', 'Pending', '2022-04-09', '0000-00-00', '2022-03-23 02:36:28'),
(68, 'Mark Ardle arago', 'Arago', 'Non-Teaching personnel', 'Tanay', '09789465132', 'ardle@aragoardlle.com', 'Morning: 9am - 10am', 'Registrar', 'sdf', 'Approved', '2022-04-06', '0000-00-00', '2022-03-23 02:37:14'),
(69, '1 empty', 'empty ', 'Student', 'Antipolo', '09132654879', 'one@empty.com', 'Afternoon: 2pm - 3pm', 'Library', 'books', 'Approved', '2022-03-22', '2022-03-30', '2022-03-24 21:36:02'),
(70, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2022-03-24 21:36:20'),
(71, 'eman', 'clemente', 'Alumni', 'Cardona', '09465781231', 'eman@clemente.com', 'Morning: 8am - 9am', 'Faculty ', 'return', 'Pending', '2022-03-31', '2022-03-31', '2022-03-24 21:42:32'),
(72, 'carl', 'games', 'Professor', 'Cainta', '09213465798', 'riancarl.nc@gmail.com', 'Morning: 10am - 11am', 'Casher', 'asdasd', 'DONE', '2022-04-23', '2022-04-05', '2022-03-25 19:45:26'),
(73, 'david', 'ilustre', 'Student', 'Binangonan', '09123546887', 'david@ilustre.com', 'Morning: 8am - 9am', 'gymnasium', 'tools', 'Pending', '2022-03-26', '0000-00-00', '2022-03-26 08:46:05'),
(74, 'rian', 'carl', 'Parent', 'Binangonan', '09654128987', 'asdasd@asdas.com', 'Morning: 8am - 9am', 'gymnasium', 'dance', 'Pending', '2022-03-28', '0000-00-00', '2022-03-28 21:44:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stakeholders`
--
ALTER TABLE `stakeholders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office` (`office`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stakeholders`
--
ALTER TABLE `stakeholders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

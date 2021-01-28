-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 08:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(225) NOT NULL,
  `admin_password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_password`) VALUES
(3, 'Mr.Adam Blake', '58ecfdc7967e35bac8738978c0070a2c');

-- --------------------------------------------------------

--
-- Table structure for table `anouncements`
--

CREATE TABLE `anouncements` (
  `ano_id` int(11) NOT NULL,
  `ano_title` varchar(255) NOT NULL,
  `ano_details` varchar(255) NOT NULL,
  `ano_date` date NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `ano_archive` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anouncements`
--

INSERT INTO `anouncements` (`ano_id`, `ano_title`, `ano_details`, `ano_date`, `admin_id`, `staff_id`, `ano_archive`) VALUES
(10, 'Holiday', 'Nepal Banda', '2019-04-22', NULL, 13, 1),
(11, 'Welcome programme', 'Nami college Garden', '2019-04-12', NULL, 13, 1),
(12, 'Holiday', 'Saturday', '2019-04-13', 3, NULL, 1),
(13, 'Welcome programme', 'Nami college Garden', '2019-04-30', 3, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignment_id` int(11) NOT NULL,
  `assignment_name` varchar(255) NOT NULL,
  `assignment_file` varchar(255) NOT NULL,
  `module_id` int(11) NOT NULL,
  `details` varchar(225) NOT NULL,
  `issue_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `approve` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignment_id`, `assignment_name`, `assignment_file`, `module_id`, `details`, `issue_date`, `due_date`, `approve`) VALUES
(14, 'Term I: Assignment', 'files/assignment/Enrollment confirmation UoN.pdf', 54, 'PL/SQL', '2019-04-15', '2019-04-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `student_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `week1` int(3) DEFAULT NULL,
  `week2` int(3) DEFAULT NULL,
  `week3` int(3) DEFAULT NULL,
  `week4` int(3) DEFAULT NULL,
  `week5` int(3) DEFAULT NULL,
  `week6` int(3) DEFAULT NULL,
  `week7` int(3) DEFAULT NULL,
  `week8` int(3) DEFAULT NULL,
  `week9` int(3) DEFAULT NULL,
  `week10` int(3) DEFAULT NULL,
  `week11` int(3) DEFAULT NULL,
  `week12` int(3) DEFAULT NULL,
  `totalDays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`student_id`, `module_id`, `week1`, `week2`, `week3`, `week4`, `week5`, `week6`, `week7`, `week8`, `week9`, `week10`, `week11`, `week12`, `totalDays`) VALUES
(40, 50, 1, 2, 4, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(40, 54, 1, 2, 4, 5, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(40, 55, 1, 1, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 50, 3, 3, 3, 3, 4, 4, 4, 4, NULL, NULL, NULL, NULL, NULL),
(43, 54, 3, 3, 3, 3, 0, 0, 0, 0, 4, 5, 5, NULL, NULL),
(43, 55, 1, 2, 4, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `concerns`
--

CREATE TABLE `concerns` (
  `conc_id` int(11) NOT NULL,
  `conc_title` varchar(255) NOT NULL,
  `conc_details` text NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concerns`
--

INSERT INTO `concerns` (`conc_id`, `conc_title`, `conc_details`, `student_id`, `staff_id`, `admin_id`) VALUES
(2, 'Assessment improvement', 'abcscsbcshsvv', 40, NULL, 3),
(3, 'Assessment improvement', 'ha xja xjhshcsjhcjs hchs', 43, 13, NULL),
(4, 'Low Attendence !', 'asdfb', 40, 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `faq_ques` varchar(255) NOT NULL,
  `faq_ans` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_ques`, `faq_ans`) VALUES
(2, 'What is the procedure to join your college?', 'Please contact our customer care or visit our website for more information.'),
(4, 'Why I can\'t  login to my woodland account?', 'Please contact to your student service. and if not send mail to service.'),
(5, 'How to login into student\'s site?', 'You can use your email and password provided by university.'),
(6, 'How to acess woodland for free ?', 'No you can\'t access it for free. You should have to be student of Woodland University College.'),
(7, 'Hello how are you?', 'I am fine , whatt about you?'),
(8, 'jhgalla kata gako?', 'kati gako xain'),
(9, 'siddhantttt', NULL),
(10, 'siddhantttt', NULL),
(11, 'dfghj', NULL),
(12, 'dsfgfg', NULL),
(13, 'adsfghhmjk', NULL),
(14, 'dfgrhtyj', NULL),
(15, 'dfgrhtyjswefrdgthfyjg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(11) NOT NULL,
  `grades` varchar(255) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `assignment_id` int(11) DEFAULT NULL,
  `grade_file` varchar(255) NOT NULL,
  `submit_status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grades`, `module_id`, `student_id`, `assignment_id`, `grade_file`, `submit_status`) VALUES
(1, 'A', 54, 43, 14, 'files/assignment/index.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_detail`
--

CREATE TABLE `login_detail` (
  `login_id` int(11) NOT NULL,
  `login_email` varchar(255) NOT NULL,
  `login_password` varchar(65) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `l_archive` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_detail`
--

INSERT INTO `login_detail` (`login_id`, `login_email`, `login_password`, `user_type`, `user_id`, `l_archive`) VALUES
(1, 'sangita.satyal@gmail.com', 'Sangita', 'STAFF', 13, 1),
(2, 'admin@admin.com', 'admin', 'ADMIN', 3, 1),
(14, 'shivani@gmail.com', 'Shivani', 'STUDENT', 42, 1),
(16, 'rameshkunwarmnr@gmail.com', 'Ramesh', 'STUDENT', 43, 1),
(18, 'zxcsdvfbgn', 'sadsfgfgnm', 'STAFF', 17, 1),
(19, 'sADSFDGFHGH', 'adsgdbfngmhj', 'STAFF', 18, 1),
(21, 'ASDFFGH', 'sadfghgh', 'STAFF', 20, 1),
(22, 'asdfgh', 'sadfb', 'STUDENT', 48, 1),
(24, 'pdp.kht@gmail.com', 'Pradeep', 'STUDENT', 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_level` varchar(255) NOT NULL,
  `exam_structure` varchar(255) NOT NULL,
  `merits_point` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `m_archive` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `module_level`, `exam_structure`, `merits_point`, `staff_id`, `m_archive`) VALUES
(50, ' Database I', '1', 'TCA/Assessment', '80', 13, 1),
(52, 'Modern Network', '1', 'TCA', '39', 15, 1),
(54, 'Software Engineering', '1', 'TCA/Assessment', '80', 13, 1),
(55, 'Databse II', '2', 'TCA', '87', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_activites`
--

CREATE TABLE `module_activites` (
  `mda_id` int(11) NOT NULL,
  `mda_title` varchar(255) NOT NULL,
  `mda_desc` varchar(255) NOT NULL,
  `mda_file` varchar(255) NOT NULL,
  `module_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_activites`
--

INSERT INTO `module_activites` (`mda_id`, `mda_title`, `mda_desc`, `mda_file`, `module_id`) VALUES
(2, 'Week1', 'LAb Ex1', 'files/demoReport.docx', 54),
(3, 'www', 'www', 'files/person.php', 54),
(4, 'Week1', 'Lab Exercise wee1', 'files/Adolf Hitler meinkampf.pdf', 55),
(5, 'Week2', 'Tutorial', 'files/Enrollment confirmation UoN.pdf', 55),
(6, 'Week3', 'week3 lap exercise', 'files/18413696 Activity 3 Online tutorial.docx', 55);

-- --------------------------------------------------------

--
-- Table structure for table `module_discussion`
--

CREATE TABLE `module_discussion` (
  `md_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `md_ques` varchar(255) NOT NULL,
  `md_ans` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_discussion`
--

INSERT INTO `module_discussion` (`md_id`, `student_id`, `module_id`, `md_ques`, `md_ans`) VALUES
(1, 43, 54, 'qweqeqeqeqeqertyusdsasdfghjhgf', 'asdfgrhtyufgfhjkkl'),
(6, 43, 54, '131324245', '1111111111111111111111111111111111111111'),
(10, 43, 55, 'sadrfrtyui', '12121212113131'),
(11, 43, 55, 'zzzzzzzzzzzzzzzzzz', NULL),
(14, 42, 54, 'qwertyui', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_leaders`
--

CREATE TABLE `module_leaders` (
  `staff_id` int(11) NOT NULL,
  `staff_firstname` varchar(255) NOT NULL,
  `staff_surname` varchar(255) NOT NULL,
  `staff_dob` date NOT NULL,
  `staff_address` varchar(255) NOT NULL,
  `staff_contact` varchar(15) NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `staff_gender` char(1) NOT NULL,
  `hire_date` date NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `staff_photo` varchar(255) NOT NULL,
  `staff_password` varchar(10) NOT NULL,
  `leader_archive` int(1) NOT NULL DEFAULT '1',
  `staff_type` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_leaders`
--

INSERT INTO `module_leaders` (`staff_id`, `staff_firstname`, `staff_surname`, `staff_dob`, `staff_address`, `staff_contact`, `staff_email`, `staff_gender`, `hire_date`, `qualification`, `staff_photo`, `staff_password`, `leader_archive`, `staff_type`) VALUES
(13, 'Sangita ', 'Satyal', '1990-02-13', 'Bhaktapur', '', 'sangita.satyal@gmail.com', '1', '2016-06-22', 'MSc (Information System)', 'sangitamam.jpg', 'Sangita ', 1, 0),
(14, 'Ganesh ', 'Khatri', '1990-12-19', 'Kanchanpur', '9865234175', 'ganesh,khatri@gmail.com', '1', '2015-05-18', 'MIT', 'ganeshsir.jpg', 'Ganesh ', 1, 0),
(15, 'Kumar', 'Lamichhane', '1987-06-18', 'Kathmandu,Mulpani', '9845692312', 'kumar.lam12@gmail.com', '1', '2017-07-27', 'MSc', 'kumar sir.jpg', 'Kumar', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_firstname` varchar(255) NOT NULL,
  `student_surname` varchar(255) NOT NULL,
  `student_dob` date NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_contact` varchar(15) NOT NULL,
  `student_gender` char(1) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `student_photo` varchar(255) NOT NULL,
  `modules` varchar(255) NOT NULL,
  `s_archive` int(1) NOT NULL DEFAULT '1',
  `student_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_firstname`, `student_surname`, `student_dob`, `student_address`, `student_contact`, `student_gender`, `student_email`, `level`, `student_photo`, `modules`, `s_archive`, `student_password`) VALUES
(40, 'Suman', 'Chaulagain', '1999-08-19', 'Kathmandu,Nepal', '+977-9865412396', '1', 'suman.cha@gmail.com', '2', '56140477_837034103307204_560160011385307136_n.jpg', '50,54', 1, NULL),
(42, 'Shivani', 'Purwar', '2000-10-07', 'Dhangadi,Kailali', '9845631245', '1', 'shivani@gmail.com', '1', 'BeautyPlus_20170621091634_fast.jpg', '50,52,54,55', 1, NULL),
(43, 'Mark', 'Williams', '1999-04-15', 'Northampton,Uk', '9865941543', '1', 'rameshkunwarmnr@gmail.com', '1', 'qqqq.jpg', '50,52,54,55', 1, NULL),
(56, 'Pradeep', 'Khatri', '0000-00-00', 'Pokhara,Nepal', '9865234175', '1', 'pdp.kht@gmail.com', '1', '', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(11) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `class_no` int(11) NOT NULL,
  `session_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `module_id`, `date`, `time`, `class_no`, `session_type`) VALUES
(3, 55, '2019-04-27', '12:00:00', 101, 'Lecture'),
(4, 54, '2019-04-29', '15:15:00', 102, 'Tutorial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `anouncements`
--
ALTER TABLE `anouncements`
  ADD PRIMARY KEY (`ano_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`student_id`,`module_id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `concerns`
--
ALTER TABLE `concerns`
  ADD PRIMARY KEY (`conc_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `assignment_id` (`assignment_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `login_detail`
--
ALTER TABLE `login_detail`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `module_staff` (`staff_id`);

--
-- Indexes for table `module_activites`
--
ALTER TABLE `module_activites`
  ADD PRIMARY KEY (`mda_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `module_discussion`
--
ALTER TABLE `module_discussion`
  ADD PRIMARY KEY (`md_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `module_leaders`
--
ALTER TABLE `module_leaders`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`),
  ADD KEY `module_id` (`module_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `anouncements`
--
ALTER TABLE `anouncements`
  MODIFY `ano_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `concerns`
--
ALTER TABLE `concerns`
  MODIFY `conc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_detail`
--
ALTER TABLE `login_detail`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `module_activites`
--
ALTER TABLE `module_activites`
  MODIFY `mda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `module_discussion`
--
ALTER TABLE `module_discussion`
  MODIFY `md_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `module_leaders`
--
ALTER TABLE `module_leaders`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anouncements`
--
ALTER TABLE `anouncements`
  ADD CONSTRAINT `anouncements_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anouncements_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `module_leaders` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendences`
--
ALTER TABLE `attendences`
  ADD CONSTRAINT `attendences_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendences_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `concerns`
--
ALTER TABLE `concerns`
  ADD CONSTRAINT `concerns_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `concerns_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `module_leaders` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `concerns_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `assignments` (`assignment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `module_staff` FOREIGN KEY (`staff_id`) REFERENCES `module_leaders` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `module_activites`
--
ALTER TABLE `module_activites`
  ADD CONSTRAINT `module_activites_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `module_discussion`
--
ALTER TABLE `module_discussion`
  ADD CONSTRAINT `module_discussion_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `module_discussion_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

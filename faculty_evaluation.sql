-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2016 at 05:01 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `status` enum('for-printing','active','inactive') NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `code`, `status`, `createdOn`) VALUES
(6, 'dCU8ZYc0eO6rCN2', 'inactive', '2016-10-24 00:34:15'),
(7, 'GaoMd0OPN1BdDEM', 'for-printing', '2016-10-24 00:34:15'),
(8, 'S5n4sP9r7Yfmm89', 'for-printing', '2016-10-24 00:34:15'),
(9, 'dvUO8XR7Mu2HMHs', 'for-printing', '2016-10-24 00:34:15'),
(10, 'zPwq1U7KLs9fIEp', 'for-printing', '2016-10-24 00:34:15'),
(11, 'TS6RydjtinSQnBC', 'for-printing', '2016-10-24 19:32:33'),
(12, 'VeJS5WLlQWhNP5v', 'for-printing', '2016-10-24 19:32:33'),
(13, 'WW8NnDio5YZIMK3', 'for-printing', '2016-10-24 19:32:33'),
(14, 'L8Aq1PqE2tns6ps', 'for-printing', '2016-10-24 19:32:33'),
(15, 'WRpTTMPdGFAGy6r', 'for-printing', '2016-10-24 19:32:33'),
(16, 'kDWBJtMBr6iiEzE', 'for-printing', '2016-10-24 23:00:49'),
(17, 'kZc0GCY0hUoOcsX', 'for-printing', '2016-10-24 23:00:49'),
(18, 'ZhNdsp12Cg59rhx', 'for-printing', '2016-10-24 23:00:49'),
(19, 'leQvwHayxt4Vska', 'for-printing', '2016-10-24 23:00:49'),
(20, 'LKSsjT8kNUZ83ra', 'for-printing', '2016-10-24 23:01:34'),
(21, 'tMDDdWB2FnJoWCr', 'for-printing', '2016-10-24 23:01:34'),
(22, 'C7Zyw3JUfKlNBFW', 'for-printing', '2016-10-24 23:01:34'),
(23, 'ffH1jQWmb4Nbkyn', 'for-printing', '2016-10-24 23:01:34'),
(24, 'oFETv7pJ2OiSw7r', 'for-printing', '2016-10-24 23:04:23'),
(25, 'gAdnrRctVo3uYvr', 'for-printing', '2016-10-24 23:04:23'),
(26, '9RUsXddQWaJYxFq', 'for-printing', '2016-10-24 23:04:23'),
(27, '25nvLeDXYWoQBF2', 'for-printing', '2016-10-24 23:04:23'),
(28, 'GNla98adun0V6Am', 'for-printing', '2016-10-24 23:04:23'),
(29, 'gm8l6gySXXRlYmn', 'for-printing', '2016-10-24 23:06:47'),
(30, 'T1unKYasu7YFeML', 'for-printing', '2016-10-24 23:06:47'),
(31, 'levwSUVeHicgJa7', 'for-printing', '2016-10-24 23:06:47'),
(32, 'bkQTmSlE4eN0DFv', 'for-printing', '2016-10-24 23:06:47'),
(33, 'G0bNwwcUx9VuRHv', 'for-printing', '2016-10-24 23:06:47'),
(34, 'e8OA9Y61XFsU5Ie', 'for-printing', '2016-10-24 23:06:48'),
(35, '2r7WF4Fv0Td0Nw0', 'for-printing', '2016-10-24 23:06:48'),
(36, 'ikfOq9cScDJ9SsP', 'for-printing', '2016-10-24 23:06:48'),
(37, '9988mnIE8kRNwgO', 'for-printing', '2016-10-24 23:06:48'),
(38, 'g86NTzMF1mTHuIt', 'for-printing', '2016-10-24 23:06:48'),
(39, 'SkqNfveZKGniC7h', 'for-printing', '2016-10-24 23:06:48'),
(40, 'M2b4T4eFCmiiWyj', 'for-printing', '2016-10-24 23:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`) VALUES
(1, 'asdfsadfsdfsdfsf', 'ashdkjhkj'),
(2, 'sfdkhsdlfl', 'lkjl'),
(3, 'sadfkhslfhdksjhdfkj', 'hkhfskjhdfkshkdfhkhfk');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `type` enum('Faculty','Student') NOT NULL,
  `date` date NOT NULL,
  `evaluatedBy` varchar(50) NOT NULL,
  `profScore` int(11) NOT NULL,
  `instrucScore` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id`, `facultyId`, `type`, `date`, `evaluatedBy`, `profScore`, `instrucScore`, `comment`) VALUES
(2, 2, 'Student', '2016-10-23', 'dCU8ZYc0eO6rCN2', 30, 23, 'test co'),
(4, 11, 'Faculty', '2016-10-29', '', 43, 66, 'test\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `firstName`, `middleName`, `lastName`) VALUES
(2, 'test fa', 'test', 'test'),
(3, 'adfsfsfssdf', 'asdlfh', 'kjshdfkh'),
(4, 'sdfskjfk', 'lkfqlkjf', 'lkjfl'),
(5, 'asdfsdfsadf', 'af', 'qeqwr'),
(6, 'asldkflkj', 'ljljflkj', 'ljfasljkflaj'),
(7, 'sldfklakj', 'lkj', 'ljljldfj'),
(8, 'knlj', 'ljljljl', 'j;l'),
(9, 'diamodn', 'm', 'platitas'),
(10, 'testetet', 'test', 'ttetestt'),
(11, 'fadf', 'dsfa', 'sdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_course`
--

CREATE TABLE `faculty_course` (
  `faculty_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_course`
--

INSERT INTO `faculty_course` (`faculty_id`, `course_id`) VALUES
(11, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_section`
--

CREATE TABLE `faculty_section` (
  `faculty_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_section`
--

INSERT INTO `faculty_section` (`faculty_id`, `section_id`) VALUES
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_semester`
--

CREATE TABLE `faculty_semester` (
  `faculty_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_semester`
--

INSERT INTO `faculty_semester` (`faculty_id`, `semester`) VALUES
(11, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subjects`
--

CREATE TABLE `faculty_subjects` (
  `faculty_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_subjects`
--

INSERT INTO `faculty_subjects` (`faculty_id`, `subject_id`) VALUES
(11, 2),
(11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `instructional_answer`
--

CREATE TABLE `instructional_answer` (
  `id` int(11) NOT NULL,
  `evaluation_id` int(11) NOT NULL,
  `choice_1` int(11) NOT NULL DEFAULT '0',
  `choice_2` int(11) NOT NULL DEFAULT '0',
  `choice_3` int(11) NOT NULL DEFAULT '0',
  `choice_4` int(11) NOT NULL DEFAULT '0',
  `choice_5` int(11) NOT NULL DEFAULT '0',
  `choice_6` int(11) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructional_answer`
--

INSERT INTO `instructional_answer` (`id`, `evaluation_id`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `choice_5`, `choice_6`, `num`) VALUES
(16, 2, 0, 1, 0, 0, 0, 0, 1),
(17, 2, 0, 0, 0, 0, 0, 0, 2),
(18, 2, 0, 0, 2, 0, 0, 0, 3),
(19, 2, 0, 1, 0, 0, 0, 0, 4),
(20, 2, 0, 0, 0, 0, 0, 5, 5),
(21, 2, 0, 0, 0, 0, 0, 5, 6),
(22, 2, 0, 0, 0, 0, 0, 0, 7),
(23, 2, 0, 0, 0, 0, 0, 0, 8),
(24, 2, 0, 0, 0, 0, 0, 0, 9),
(25, 2, 0, 0, 0, 0, 0, 0, 10),
(26, 2, 0, 1, 0, 0, 0, 0, 11),
(27, 2, 0, 1, 0, 0, 0, 0, 12),
(28, 2, 0, 0, 0, 0, 0, 5, 13),
(29, 2, 0, 0, 2, 0, 0, 0, 14),
(30, 2, 0, 0, 0, 0, 0, 0, 15),
(31, 3, 0, 0, 0, 0, 0, 5, 1),
(32, 3, 0, 0, 0, 0, 0, 5, 2),
(33, 3, 0, 0, 0, 0, 0, 5, 3),
(34, 4, 0, 0, 0, 0, 0, 5, 1),
(35, 4, 0, 0, 0, 0, 4, 0, 2),
(36, 4, 0, 0, 0, 0, 4, 0, 3),
(37, 4, 0, 0, 0, 0, 0, 5, 4),
(38, 4, 0, 0, 0, 0, 0, 5, 5),
(39, 4, 0, 0, 0, 0, 4, 0, 6),
(40, 4, 0, 0, 0, 0, 0, 5, 7),
(41, 4, 0, 0, 0, 0, 4, 0, 8),
(42, 4, 0, 0, 0, 0, 4, 0, 9),
(43, 4, 0, 0, 0, 0, 0, 5, 10),
(44, 4, 0, 0, 0, 0, 0, 5, 11),
(45, 4, 0, 0, 0, 0, 4, 0, 12),
(46, 4, 0, 0, 0, 3, 0, 0, 13),
(47, 4, 0, 0, 0, 0, 4, 0, 14),
(48, 4, 0, 0, 0, 0, 0, 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `professional_answer`
--

CREATE TABLE `professional_answer` (
  `id` int(11) NOT NULL,
  `evaluation_id` int(11) NOT NULL,
  `choice_1` int(11) NOT NULL DEFAULT '0',
  `choice_2` int(11) NOT NULL DEFAULT '0',
  `choice_3` int(11) NOT NULL DEFAULT '0',
  `choice_4` int(11) NOT NULL DEFAULT '0',
  `choice_5` int(11) NOT NULL DEFAULT '0',
  `choice_6` int(11) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_answer`
--

INSERT INTO `professional_answer` (`id`, `evaluation_id`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `choice_5`, `choice_6`, `num`) VALUES
(16, 2, 0, 0, 0, 0, 0, 0, 1),
(17, 2, 0, 0, 0, 0, 0, 5, 2),
(18, 2, 0, 1, 0, 0, 0, 0, 3),
(19, 2, 0, 1, 0, 0, 0, 0, 4),
(20, 2, 0, 1, 0, 0, 0, 0, 5),
(21, 2, 0, 1, 0, 0, 0, 0, 6),
(22, 2, 0, 0, 0, 0, 0, 0, 7),
(23, 2, 0, 1, 0, 0, 0, 0, 8),
(24, 2, 0, 1, 0, 0, 0, 0, 9),
(25, 2, 0, 0, 0, 0, 0, 5, 10),
(26, 2, 0, 0, 0, 0, 0, 5, 11),
(27, 2, 0, 0, 0, 0, 4, 0, 12),
(28, 2, 0, 0, 0, 0, 0, 5, 13),
(29, 2, 0, 0, 0, 0, 0, 0, 14),
(30, 2, 0, 0, 0, 0, 0, 0, 15),
(31, 3, 0, 0, 0, 0, 4, 0, 1),
(32, 3, 0, 0, 0, 3, 0, 0, 2),
(33, 3, 0, 0, 0, 0, 4, 0, 3),
(34, 3, 0, 0, 0, 3, 0, 0, 4),
(35, 3, 0, 1, 0, 0, 0, 0, 5),
(36, 3, 0, 0, 0, 0, 0, 5, 6),
(37, 3, 0, 0, 0, 0, 0, 5, 7),
(38, 3, 0, 0, 2, 0, 0, 0, 8),
(39, 3, 0, 0, 0, 3, 0, 0, 9),
(40, 3, 0, 1, 0, 0, 0, 0, 10),
(41, 3, 0, 0, 0, 0, 4, 0, 11),
(42, 3, 0, 0, 0, 3, 0, 0, 12),
(43, 3, 0, 0, 0, 0, 0, 5, 13),
(44, 3, 0, 0, 0, 0, 4, 0, 14),
(45, 3, 0, 0, 0, 3, 0, 0, 15),
(46, 4, 0, 0, 0, 0, 0, 5, 1),
(47, 4, 0, 0, 0, 0, 0, 5, 2),
(48, 4, 0, 0, 0, 0, 0, 5, 3),
(49, 4, 0, 0, 0, 0, 0, 0, 4),
(50, 4, 0, 0, 0, 0, 0, 0, 5),
(51, 4, 0, 1, 0, 0, 0, 0, 6),
(52, 4, 0, 1, 0, 0, 0, 0, 7),
(53, 4, 0, 1, 0, 0, 0, 0, 8),
(54, 4, 0, 0, 2, 0, 0, 0, 9),
(55, 4, 0, 0, 0, 3, 0, 0, 10),
(56, 4, 0, 0, 0, 0, 4, 0, 11),
(57, 4, 0, 0, 0, 0, 4, 0, 12),
(58, 4, 0, 0, 0, 0, 0, 5, 13),
(59, 4, 0, 0, 0, 3, 0, 0, 14),
(60, 4, 0, 0, 0, 0, 4, 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `from_time` varchar(50) NOT NULL,
  `to_time` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `days`, `subject_id`, `section_id`, `from_time`, `to_time`, `faculty_id`) VALUES
(2, 38, 3, 1, '11', '22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `description`) VALUES
(1, 'dsds', 'saasf');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `description`) VALUES
(2, 'test subject', 'test subject'),
(3, 'af', 'dsf');

-- --------------------------------------------------------

--
-- Table structure for table `temp_codes`
--

CREATE TABLE `temp_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_codes`
--

INSERT INTO `temp_codes` (`id`, `code`) VALUES
(6, 'dCU8ZYc0eO6rCN2'),
(7, 'GaoMd0OPN1BdDEM'),
(8, 'S5n4sP9r7Yfmm89'),
(9, 'dvUO8XR7Mu2HMHs'),
(10, 'zPwq1U7KLs9fIEp'),
(11, 'TS6RydjtinSQnBC'),
(12, 'VeJS5WLlQWhNP5v'),
(13, 'WW8NnDio5YZIMK3'),
(14, 'L8Aq1PqE2tns6ps'),
(15, 'WRpTTMPdGFAGy6r'),
(16, 'kDWBJtMBr6iiEzE'),
(17, 'kZc0GCY0hUoOcsX'),
(18, 'ZhNdsp12Cg59rhx'),
(19, 'leQvwHayxt4Vska'),
(20, 'LKSsjT8kNUZ83ra'),
(21, 'tMDDdWB2FnJoWCr'),
(22, 'C7Zyw3JUfKlNBFW'),
(23, 'ffH1jQWmb4Nbkyn'),
(24, 'oFETv7pJ2OiSw7r'),
(25, 'gAdnrRctVo3uYvr'),
(26, '9RUsXddQWaJYxFq'),
(27, '25nvLeDXYWoQBF2'),
(28, 'GNla98adun0V6Am'),
(29, 'gm8l6gySXXRlYmn'),
(30, 'T1unKYasu7YFeML'),
(31, 'levwSUVeHicgJa7'),
(32, 'bkQTmSlE4eN0DFv'),
(33, 'G0bNwwcUx9VuRHv'),
(34, 'e8OA9Y61XFsU5Ie'),
(35, '2r7WF4Fv0Td0Nw0'),
(36, 'ikfOq9cScDJ9SsP'),
(37, '9988mnIE8kRNwgO'),
(38, 'g86NTzMF1mTHuIt'),
(39, 'SkqNfveZKGniC7h'),
(40, 'M2b4T4eFCmiiWyj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `accessLevel` varchar(30) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `lname`, `password`, `accessLevel`, `faculty_id`) VALUES
(13, 'testuser', 'test na', 'test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'faculty', 0),
(14, 'dorimon', 'diamond', 'diamond', 'YvOk3Dkyvd/pK8DG3UK6WfkPm62nHiIezEPzMdA9nUiAp+Bthin7M9N4F+7WdGEkdWxVxmML5k9JnPcHfAYHLA==', 'admin', 0),
(15, 'staff1', 'staf', 'staf', 'S93a/bmoEARENiFqM039VU7jcTvb5R3ZooeFEerqF6l1QPFFbmLhDb+pBiRO1bHBK0pMUccXoWE11mf1CnY/ng==', 'staff', 0),
(16, 'faculty', 'faculyt', 'faculty', '1o4jpBDURsenH4OI4zHKD4kD6tHigoOMtd8WIEo+FFQ1dnhnRiZqZSdWYN5IUSGGFS/+kF4o3jeUTmGYIChwFg==', 'faculty', 11),
(17, 'staff2', 'staff', 'staf', 'NXZmGr2CphPCMiFKjUvG6ODDZGAHiJtwyMvs+muwyMSnAq+salKed0W43oWRk8YNgrdUxyH5mJTJj8POosA+Ug==', 'faculty', 9),
(18, 'admin', 'admin', 'admin', '1Buvq5e8BQUuuS+UZFabA3oKmEM8Q0WU7rSlV1z9qNAr88cHYpPhLJ4biO8QS02aGiv8IvJNMDVyTTIgxzlcAg==', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructional_answer`
--
ALTER TABLE `instructional_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_answer`
--
ALTER TABLE `professional_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_codes`
--
ALTER TABLE `temp_codes`
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
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `instructional_answer`
--
ALTER TABLE `instructional_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `professional_answer`
--
ALTER TABLE `professional_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `temp_codes`
--
ALTER TABLE `temp_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

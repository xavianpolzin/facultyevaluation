-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 12:38 PM
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
(7, 'GaoMd0OPN1BdDEM', 'inactive', '2016-10-24 00:34:15'),
(8, 'S5n4sP9r7Yfmm89', 'active', '2016-10-24 00:34:15'),
(9, 'dvUO8XR7Mu2HMHs', 'active', '2016-10-24 00:34:15'),
(10, 'zPwq1U7KLs9fIEp', 'active', '2016-10-24 00:34:15'),
(11, 'TS6RydjtinSQnBC', 'active', '2016-10-24 19:32:33'),
(12, 'VeJS5WLlQWhNP5v', 'active', '2016-10-24 19:32:33'),
(13, 'WW8NnDio5YZIMK3', 'active', '2016-10-24 19:32:33'),
(14, 'L8Aq1PqE2tns6ps', 'active', '2016-10-24 19:32:33'),
(15, 'WRpTTMPdGFAGy6r', 'active', '2016-10-24 19:32:33'),
(16, 'kDWBJtMBr6iiEzE', 'active', '2016-10-24 23:00:49'),
(17, 'kZc0GCY0hUoOcsX', 'active', '2016-10-24 23:00:49'),
(18, 'ZhNdsp12Cg59rhx', 'active', '2016-10-24 23:00:49'),
(19, 'leQvwHayxt4Vska', 'active', '2016-10-24 23:00:49'),
(20, 'LKSsjT8kNUZ83ra', 'active', '2016-10-24 23:01:34'),
(21, 'tMDDdWB2FnJoWCr', 'active', '2016-10-24 23:01:34'),
(22, 'C7Zyw3JUfKlNBFW', 'active', '2016-10-24 23:01:34'),
(23, 'ffH1jQWmb4Nbkyn', 'active', '2016-10-24 23:01:34'),
(24, 'oFETv7pJ2OiSw7r', 'active', '2016-10-24 23:04:23'),
(25, 'gAdnrRctVo3uYvr', 'active', '2016-10-24 23:04:23'),
(26, '9RUsXddQWaJYxFq', 'active', '2016-10-24 23:04:23'),
(27, '25nvLeDXYWoQBF2', 'active', '2016-10-24 23:04:23'),
(28, 'GNla98adun0V6Am', 'active', '2016-10-24 23:04:23'),
(29, 'gm8l6gySXXRlYmn', 'active', '2016-10-24 23:06:47'),
(30, 'T1unKYasu7YFeML', 'inactive', '2016-10-24 23:06:47'),
(31, 'levwSUVeHicgJa7', 'active', '2016-10-24 23:06:47'),
(32, 'bkQTmSlE4eN0DFv', 'active', '2016-10-24 23:06:47'),
(33, 'G0bNwwcUx9VuRHv', 'active', '2016-10-24 23:06:47'),
(34, 'e8OA9Y61XFsU5Ie', 'active', '2016-10-24 23:06:48'),
(35, '2r7WF4Fv0Td0Nw0', 'active', '2016-10-24 23:06:48'),
(36, 'ikfOq9cScDJ9SsP', 'active', '2016-10-24 23:06:48'),
(37, '9988mnIE8kRNwgO', 'active', '2016-10-24 23:06:48'),
(38, 'g86NTzMF1mTHuIt', 'active', '2016-10-24 23:06:48'),
(39, 'SkqNfveZKGniC7h', 'active', '2016-10-24 23:06:48'),
(40, 'M2b4T4eFCmiiWyj', 'active', '2016-10-24 23:06:48'),
(41, 'zquCEQJaj2vIcBx', 'active', '2016-10-29 13:26:28'),
(42, '3znju13Q0yVGZAj', 'active', '2016-10-29 13:26:28'),
(43, 'yav0g7ix5LTnhF6', 'active', '2016-10-29 13:37:17'),
(44, 'mieSZz1tFD5hw2l', 'active', '2016-10-29 13:37:17'),
(45, 'ANqFbcHmvN7m5Jd', 'active', '2016-10-29 13:37:17'),
(46, 'BF295fKOP5zYjmx', 'active', '2016-10-29 13:44:36'),
(47, '0Jq8CmKt3ncF8T0', 'active', '2016-10-29 13:49:59'),
(48, 'bKgVonWfna5qMH3', 'active', '2016-10-29 13:50:26'),
(49, 'XDCSbsa8LV7750R', 'active', '2016-10-29 13:56:39'),
(50, 'l0psZa9sfFw6Lcd', 'active', '2016-11-03 21:27:14'),
(51, 'oZOGI2R4URojTmQ', 'active', '2016-11-03 21:27:14'),
(52, 'Tot27rsvK1aOssG', 'active', '2016-11-03 21:27:14'),
(53, 'dtSzobzUXZD0i6A', 'active', '2016-11-03 21:27:14'),
(54, 'eeoEM9aFKmcQGuk', 'active', '2016-11-03 21:27:14'),
(55, 'vKwmgpoIn6wBp7G', 'active', '2016-11-03 21:27:14'),
(56, 'z3qF8Toh84gGT3z', 'active', '2016-11-03 21:27:14'),
(57, 'HSkLiZemT5FQHMu', 'active', '2016-11-03 21:27:14'),
(58, 'hmeJszVZDGQTK9I', 'active', '2016-11-03 21:27:15'),
(59, 'DwquWEPpbcLe79o', 'active', '2016-11-03 21:27:15'),
(60, 'dT8i5NowRnERcq4', 'active', '2016-11-03 21:27:15'),
(61, 'nRuyDRZiWVIMKma', 'active', '2016-11-03 21:27:15'),
(62, '0c8V27cU6uMVUcj', 'active', '2016-11-03 21:27:15'),
(63, 'bvWUTN9ipFNpsJO', 'active', '2016-11-03 21:27:15'),
(64, 'E5vVYwS6rkBOiDw', 'active', '2016-11-03 21:27:15'),
(65, 'IMjtj9HaHRe9QHs', 'active', '2016-11-03 21:27:15'),
(66, '4MnLrvFsFoA94uy', 'active', '2016-11-03 21:27:15'),
(67, 't9CpsFtb1R4dWpB', 'active', '2016-11-03 21:27:15'),
(68, '0JdbPR0018GIgZr', 'active', '2016-11-03 21:27:15'),
(69, '5PzyERwUgpSIyOD', 'active', '2016-11-03 21:27:15'),
(70, 'bUy19NGJfbaGOdI', 'active', '2016-11-03 21:27:15'),
(71, '8PfbTqU5uDVHMFz', 'active', '2016-11-03 21:27:15'),
(72, '5cSmi5Ej1Rh6ZQY', 'active', '2016-11-03 21:27:15'),
(73, 'ifu5nQjwNHQfjFk', 'active', '2016-11-03 21:27:15'),
(74, 'g5WZX2AiUSS1ePn', 'active', '2016-11-03 21:27:15'),
(75, 'STU9OBEX7gJR7Ob', 'active', '2016-11-03 21:27:15'),
(76, 'XMjyIWEH17cEOTT', 'active', '2016-11-03 21:27:15'),
(77, 'JfuQ4uCifzuIUWQ', 'active', '2016-11-03 21:27:15'),
(78, 'z6V3oXouiKtnUJ1', 'active', '2016-11-03 21:27:16'),
(79, 'OAW4aNHEsygMju9', 'active', '2016-11-03 21:27:16'),
(80, 'L0UYmhf3AzDpPPX', 'active', '2016-11-03 21:27:16'),
(81, 'W7HqEUAdhlgKPMt', 'active', '2016-11-03 21:27:16'),
(82, 'Wlx8UaAfDh0PHfJ', 'active', '2016-11-03 21:27:16'),
(83, 'LOQl0y7UW2fHNfj', 'active', '2016-11-03 21:27:16'),
(84, 'n6MTb2Clt40EdFA', 'active', '2016-11-03 21:27:16'),
(85, 'YSdPYIlahFPVE7J', 'active', '2016-11-03 21:27:16'),
(86, 'J47XjEC6i6nTvg9', 'active', '2016-11-03 21:27:16'),
(87, '6GzujatQI33M5yX', 'active', '2016-11-03 21:27:16'),
(88, '0l64yT1JEMuAUMZ', 'active', '2016-11-03 21:27:16'),
(89, 'OHPrDS8LppfxFGs', 'active', '2016-11-03 21:27:16'),
(90, 'tbnTTkB4NQWU5JJ', 'active', '2016-11-03 21:27:16'),
(91, 'pZydL9egACFFqoc', 'active', '2016-11-03 21:27:16'),
(92, 'qsXqRG0QYwnz0ZW', 'active', '2016-11-03 21:27:16'),
(93, 'Z2GFrbR7yekrL7V', 'active', '2016-11-03 21:27:16'),
(94, '0yyBok1ODmtLHBd', 'active', '2016-11-03 21:27:16'),
(95, 'IZxc1mRlFP5kxQ5', 'active', '2016-11-03 21:27:16'),
(96, 'HBRZACbBKoJG8Rz', 'active', '2016-11-03 21:27:16'),
(97, 'nyZsNTcooUxFjUG', 'active', '2016-11-03 21:27:16'),
(98, 'Qwsn7M17QZxKBzV', 'active', '2016-11-03 21:27:16'),
(99, 'xYw6yHo5EvIYWIz', 'active', '2016-11-03 21:27:16'),
(100, 'dOCmiICVC6wEEgt', 'active', '2016-11-03 21:27:16'),
(101, 'txESI9j0t33ojQE', 'active', '2016-11-03 21:27:16'),
(102, 'P54m6IfLuWFVd4a', 'active', '2016-11-03 21:27:16'),
(103, 'bIx89Pg5TavAaB3', 'active', '2016-11-03 21:27:16'),
(104, 'Tgic4U4H2cH71Mu', 'active', '2016-11-03 21:27:17'),
(105, 'DkLwKpWS5b8ehfk', 'active', '2016-11-03 21:27:17'),
(106, 'U3cNYKjOwCzEnwB', 'active', '2016-11-03 21:27:17'),
(107, 'XjCW20LNvn3b0jC', 'active', '2016-11-03 21:27:17'),
(108, 'CtZCTUqbNxKfcOd', 'active', '2016-11-03 21:27:17'),
(109, 'TDaV9XEREht8ohi', 'active', '2016-11-03 21:27:17'),
(110, 'xql2HP3P6rGtByn', 'active', '2016-11-03 21:27:17'),
(111, '3b361JvapBVGNFM', 'active', '2016-11-03 21:27:17'),
(112, 'FEmazxlPbkhOh6G', 'active', '2016-11-03 21:27:17'),
(113, '09GDCgH3vn8Ix5K', 'active', '2016-11-03 21:27:17'),
(114, 'ncXaU6qyZD3fIWQ', 'active', '2016-11-03 21:27:17'),
(115, 'VA12i1bBPM0Fu8J', 'active', '2016-11-03 21:27:17'),
(116, '0rzmVRqZVIpayQk', 'active', '2016-11-03 21:27:17'),
(117, 'o7Zrkr6cHW4Lq3d', 'active', '2016-11-03 21:27:17'),
(118, 'dd2sWF2b41gDe7J', 'active', '2016-11-03 21:27:17'),
(119, 'kbNFneidIsieI4i', 'active', '2016-11-03 21:27:17'),
(120, 'mVfPPZ60ByLeJgO', 'active', '2016-11-03 21:27:17'),
(121, 'SH1gQCUgJc7F7Yx', 'active', '2016-11-03 21:27:17'),
(122, 'WameKhnO9Z6WjlW', 'active', '2016-11-03 21:27:17'),
(123, 'vII6OorHwFQUtu3', 'active', '2016-11-03 21:27:17'),
(124, 'TWbOLBnP8U3ORkT', 'active', '2016-11-03 21:27:17'),
(125, 'tvAoaci1sZuwg1F', 'active', '2016-11-03 21:27:17'),
(126, 'hYFiZjwo0glgW3D', 'active', '2016-11-03 21:27:17'),
(127, '9RiqMfkkST8mznZ', 'active', '2016-11-03 21:27:17'),
(128, 'ESj1YMWWT6RQ2uE', 'active', '2016-11-03 21:27:18'),
(129, 'kVHhZxV36tBz7CO', 'active', '2016-11-03 21:27:18'),
(130, 'lzd57EuvoX5dG3C', 'active', '2016-11-03 21:27:18'),
(131, 'v9KZzvvwOhyVKUs', 'active', '2016-11-03 21:27:18'),
(132, 'xWhXw7CpDpCVcBd', 'active', '2016-11-03 21:27:18'),
(133, 'gjZKQyaPuyAar0r', 'active', '2016-11-03 21:27:18'),
(134, 'b20GClVPd5nqOw6', 'active', '2016-11-03 21:27:18'),
(135, '6oC3bRVwu4Fq8x4', 'active', '2016-11-03 21:27:18'),
(136, 'HTOBBDLtUM94xNK', 'active', '2016-11-03 21:27:18'),
(137, 'EYR5KBwHVknMg2c', 'active', '2016-11-03 21:27:18'),
(138, 'ISFxVEuSGLdURaj', 'active', '2016-11-03 21:27:18'),
(139, 'aV2l97xpgGYkN9i', 'active', '2016-11-03 21:27:18'),
(140, 'qGPoCrWsIUX1n4l', 'active', '2016-11-03 21:27:18'),
(141, 'DPelZ1hIwqcTHsk', 'active', '2016-11-03 21:27:18'),
(142, 'IqmDMSKF6fXsrk8', 'active', '2016-11-03 21:27:18'),
(143, 'qJ2XinNGAec4qCJ', 'active', '2016-11-03 21:27:18'),
(144, 'mUJDU2CWTY4M4Xl', 'active', '2016-11-03 21:27:18'),
(145, 'EI7WazpI9TTtGgo', 'active', '2016-11-03 21:27:18'),
(146, 'iq3q3VgIN2Sq4Sn', 'active', '2016-11-03 21:27:18'),
(147, 'OSqLQjCirwUlF4d', 'active', '2016-11-03 21:27:18'),
(148, '9QfuADr5Io80LZQ', 'active', '2016-11-03 21:27:18'),
(149, 'uqbx9uUCNosewp1', 'active', '2016-11-03 21:27:18'),
(150, 'T4RU3P7F3H1Io4K', 'active', '2016-11-03 21:27:22'),
(151, 'mqYCfgYTjSYb0yl', 'active', '2016-11-03 21:27:22'),
(152, 'Mx6JAYoKUBpye5c', 'active', '2016-11-03 21:27:22'),
(153, 'q0lwIpq4BsbznY7', 'active', '2016-11-03 21:27:22'),
(154, 'z26NzwQUybSX61Q', 'active', '2016-11-03 21:27:22'),
(155, 'B4jzlHYxXjlo3AB', 'active', '2016-11-03 21:27:22'),
(156, 'YwW1Izg0Tr2ExxJ', 'active', '2016-11-03 21:27:22'),
(157, '6RmnjUoY8ya6SEt', 'active', '2016-11-03 21:27:22'),
(158, 'NXzVrDvjS8QpttL', 'active', '2016-11-03 21:27:22'),
(159, '9K5EVsPU0PFN6wo', 'active', '2016-11-03 21:27:22'),
(160, 'NBxsGEwmbZmWwa7', 'active', '2016-11-03 21:27:22'),
(161, 'Wy46c2E4nJi62yD', 'active', '2016-11-03 21:27:22'),
(162, 'irmgwV0oMtzozMs', 'active', '2016-11-03 21:27:22'),
(163, 'BompXigs07zKY1v', 'active', '2016-11-03 21:27:22'),
(164, '5JrDTSzKnu58HZh', 'active', '2016-11-03 21:27:22'),
(165, 'VUfxLaLrgnQnurc', 'active', '2016-11-03 21:27:22'),
(166, 'IKE5lxrVZJ6JiZi', 'active', '2016-11-03 21:27:22'),
(167, 'pYisFVgGbIKJrLN', 'active', '2016-11-03 21:27:22'),
(168, 'OtadwvXBNdTF2yL', 'active', '2016-11-03 21:27:23'),
(169, '0f0BPfOysd59wRx', 'active', '2016-11-03 21:27:23'),
(170, 'NjO3guroIBeAH4e', 'active', '2016-11-03 21:27:23'),
(171, 'cnUPKvXvnlwDRUh', 'active', '2016-11-03 21:27:23'),
(172, 'q6cIeoe3IUbqctV', 'active', '2016-11-03 21:27:23'),
(173, 'ShL8OghPAPYvThx', 'active', '2016-11-03 21:27:23'),
(174, 'm3Ie651YIGdxbBG', 'active', '2016-11-03 21:27:23'),
(175, 'vEhs5T2leZtrzJ6', 'active', '2016-11-03 21:27:23'),
(176, 'yMDaA7NWlyInKQ1', 'active', '2016-11-03 21:27:23'),
(177, '9Jcb0XQVTw83O3c', 'active', '2016-11-03 21:27:23'),
(178, 'YcURd4oFqqwpFl4', 'active', '2016-11-03 21:27:23'),
(179, '1dtRDAZLM2ELZot', 'active', '2016-11-03 21:27:23'),
(180, 'rhLDm1yaIu4nmUX', 'active', '2016-11-03 21:27:23'),
(181, 'pFp0pA87TUgfF9q', 'active', '2016-11-03 21:27:23'),
(182, 'StmHBstAGGJPk96', 'active', '2016-11-03 21:27:23'),
(183, 'KlJ6zzfjXnQh7y6', 'active', '2016-11-03 21:27:23'),
(184, 'urzYhv1FCHFxW5j', 'active', '2016-11-03 21:27:23'),
(185, 'cx1Q7diSR8Q4724', 'active', '2016-11-03 21:27:23'),
(186, 'sSInY1Gnacbk2Pb', 'active', '2016-11-03 21:27:23'),
(187, 'c6Te4XDjKXBdjlW', 'active', '2016-11-03 21:27:23'),
(188, 'MpAJzTamw6SeYjc', 'active', '2016-11-03 21:27:23'),
(189, 'aFALkUsfEqdUuNH', 'active', '2016-11-03 21:27:23'),
(190, 'LgDSwsn2farap83', 'active', '2016-11-03 21:27:23'),
(191, 'YrF57kc1MlU5ASd', 'active', '2016-11-03 21:27:23'),
(192, '1Gmx8YVbtm6Ts6o', 'active', '2016-11-03 21:27:24'),
(193, 'OXDHBda93QebET1', 'active', '2016-11-03 21:27:24'),
(194, 'NlxeA0MuYwfpmTq', 'active', '2016-11-03 21:27:24'),
(195, 'ncD17Pa0PoopX6G', 'active', '2016-11-03 21:27:24'),
(196, 'IWQAwIkh4VHTDox', 'active', '2016-11-03 21:27:24'),
(197, 'LDwp8u8aikw99Ax', 'active', '2016-11-03 21:27:24'),
(198, 'ttjiEQUW2COVDtv', 'active', '2016-11-03 21:27:24'),
(199, 'G8zXFRzPxKbxAuO', 'active', '2016-11-03 21:27:24'),
(200, 'mWbsNxXrCImHevk', 'active', '2016-11-03 21:27:24'),
(201, 'YMeLcYEYdgPTm5W', 'active', '2016-11-03 21:27:24'),
(202, 'eQmtLJgg3TBdlY3', 'active', '2016-11-03 21:27:24'),
(203, 'zwUS17ygUCTFJSv', 'active', '2016-11-03 21:27:24'),
(204, 'oF2ClZDA5rLPErb', 'active', '2016-11-03 21:27:24'),
(205, 'k3Pm0OJfm2eXF1O', 'active', '2016-11-03 21:27:24'),
(206, 'E5ZkCjUisqCIKMc', 'active', '2016-11-03 21:27:24'),
(207, 'ANxiV9IhJ3AYJgV', 'active', '2016-11-03 21:27:24'),
(208, 'kzNGp7Z4KB2kvSr', 'active', '2016-11-03 21:27:24'),
(209, 'tHFdTe8zvXRKZgA', 'active', '2016-11-03 21:27:24'),
(210, 'rAyLmK4hPFs0Yv3', 'active', '2016-11-03 21:27:24'),
(211, 't8nUxhxkd34pz29', 'active', '2016-11-03 21:27:24'),
(212, '9fKDzpUM6Y7YBJP', 'active', '2016-11-03 21:27:24'),
(213, 'VJMusWX19J9fY50', 'active', '2016-11-03 21:27:25'),
(214, '83dk6AJpF2sI7PP', 'active', '2016-11-03 21:27:25'),
(215, 'whywHV7CuyUHPSX', 'active', '2016-11-03 21:27:25'),
(216, 'i9A1G7aRV5v7A4x', 'active', '2016-11-03 21:27:25'),
(217, 'SI0g6BRtq13CJTM', 'active', '2016-11-03 21:27:25'),
(218, 'kMioxV4RQtU091b', 'active', '2016-11-03 21:27:25'),
(219, 'rmlndjJNoZXEqkj', 'active', '2016-11-03 21:27:25'),
(220, 'XnThIZ8ogEP46Sd', 'active', '2016-11-03 21:27:25'),
(221, 'cpTuWqXyGcND7B8', 'active', '2016-11-03 21:27:25'),
(222, '4ukaDiSUIUvSvC6', 'active', '2016-11-03 21:27:25'),
(223, 'TBWiObzlh5ruKuL', 'active', '2016-11-03 21:27:25'),
(224, 'uaxM54jT7egg3ky', 'active', '2016-11-03 21:27:25'),
(225, 'TLesGymNcyUhpDs', 'active', '2016-11-03 21:27:25'),
(226, 'HFYU3yQ75Grd2WV', 'active', '2016-11-03 21:27:25'),
(227, 'REYUDPDfvdf4S9x', 'active', '2016-11-03 21:27:25'),
(228, 'lN2qOer6nBxOU05', 'active', '2016-11-03 21:27:25'),
(229, 'EccFNAengG7wdjn', 'active', '2016-11-03 21:27:25'),
(230, 'guZXGn8MXhdbiEa', 'active', '2016-11-03 21:27:25'),
(231, 'AI6IvLtcrcb31b7', 'active', '2016-11-03 21:27:25'),
(232, 'brDjHFdt88RPIGE', 'active', '2016-11-03 21:27:25'),
(233, 'nsmoEIOz14fbX6D', 'active', '2016-11-03 21:27:25'),
(234, 'qpwJYDfoElm99Qb', 'active', '2016-11-03 21:27:25'),
(235, 'gbZYFqdYb61w91p', 'active', '2016-11-03 21:27:25'),
(236, 'LyVPT7XtirZvTdT', 'active', '2016-11-03 21:27:26'),
(237, 'p14uBED5R7WswqW', 'active', '2016-11-03 21:27:26'),
(238, 'yUTiPyiIXWRefzv', 'active', '2016-11-03 21:27:26'),
(239, 'qYdS2yHRIgDCYIO', 'active', '2016-11-03 21:27:26'),
(240, 'VVu5lmdPyZt0vWK', 'active', '2016-11-03 21:27:26'),
(241, 'JKi00QzTKxIpf1q', 'active', '2016-11-03 21:27:26'),
(242, 'jSNNvIciP3D1Vkb', 'active', '2016-11-03 21:27:26'),
(243, 'c71rXqj3i5w0WUZ', 'active', '2016-11-03 21:27:26'),
(244, 'nd55b2nZZpqU4oX', 'active', '2016-11-03 21:27:26'),
(245, 'vbx6QvzgUnQkROB', 'active', '2016-11-03 21:27:26'),
(246, 'xRjcBGEFUEWpNvX', 'active', '2016-11-03 21:27:26'),
(247, '8OhyBsxbFUtWKRn', 'active', '2016-11-03 21:27:26'),
(248, 'VrOXQ4AYm7MIWdx', 'active', '2016-11-03 21:27:26'),
(249, 'GT5XjY8Mv8KV6Dm', 'active', '2016-11-03 21:27:26'),
(250, 'f1WCrt21yALJDUt', 'active', '2016-11-03 21:27:31'),
(251, 'yP0QYBW4G9tDUjX', 'active', '2016-11-03 21:27:31'),
(252, 'op29KHOOxK61RqW', 'active', '2016-11-03 21:27:31'),
(253, 'PnXqYKwNTHIPzMK', 'active', '2016-11-03 21:27:31'),
(254, 'HPKIMgmyfuMZNYu', 'active', '2016-11-03 21:27:31'),
(255, 'nx34hmseHpd6r7e', 'active', '2016-11-03 21:27:31'),
(256, 'DGypHg7JDF6REG6', 'active', '2016-11-03 21:27:31'),
(257, '5MHPHut8dqW4qC9', 'active', '2016-11-03 21:27:31'),
(258, 'F4FgnKmEzer67AP', 'active', '2016-11-03 21:27:31'),
(259, 'apAHWI6njEivP80', 'active', '2016-11-03 21:27:31'),
(260, 'zLvn8S5Y6Y2zG4P', 'active', '2016-11-03 21:27:31'),
(261, 'NAz1ykDX5d4CtKb', 'active', '2016-11-03 21:27:32'),
(262, 'SvRjthpYbPgwZ0c', 'active', '2016-11-03 21:27:32'),
(263, 'mYgruMeom22WuJP', 'active', '2016-11-03 21:27:32'),
(264, 'H0yJ22ri1RG3MIy', 'active', '2016-11-03 21:27:32'),
(265, 'bnFD4fHC0kqd3oS', 'active', '2016-11-03 21:27:32'),
(266, '3rLxqoxPswqwr0C', 'active', '2016-11-03 21:27:32'),
(267, 'rOGcSVqjoVB7sxu', 'active', '2016-11-03 21:27:32'),
(268, '49Z6NDxXfs7AOf3', 'active', '2016-11-03 21:27:32'),
(269, 'hyM3R16Q9baCez3', 'active', '2016-11-03 21:27:32'),
(270, 'f37GKbSPkD0LCWL', 'active', '2016-11-03 21:27:32'),
(271, 'CApph73rQEcPGIG', 'active', '2016-11-03 21:27:32'),
(272, 'aAu12bA9jcyFruQ', 'active', '2016-11-03 21:27:32'),
(273, 'XR1S5yoXERSfDcj', 'active', '2016-11-03 21:27:32'),
(274, 'vVy2qcv4SCMi7cL', 'active', '2016-11-03 21:27:32'),
(275, 'p1ReUU3vKVK5Ibu', 'active', '2016-11-03 21:27:32'),
(276, 'uGftIgrYy22BwOQ', 'active', '2016-11-03 21:27:32'),
(277, 'I8xYuqNImzkdWPV', 'active', '2016-11-03 21:27:33'),
(278, '04Cd4S9UrziLa9o', 'active', '2016-11-03 21:27:33'),
(279, 'acbM1js3r5aGXyB', 'active', '2016-11-03 21:27:33'),
(280, 'UWz6I6WU8iGzNhx', 'active', '2016-11-03 21:27:33'),
(281, 'ZBaodNc5HFSELHt', 'active', '2016-11-03 21:27:33'),
(282, 'UsiKnJ8ldAGdtt8', 'active', '2016-11-03 21:27:33'),
(283, 'iDDzBURXAesdtPv', 'active', '2016-11-03 21:27:33'),
(284, 'BCEuzAgSI8GUuem', 'active', '2016-11-03 21:27:33'),
(285, 'tDj2G2QirnG53AQ', 'active', '2016-11-03 21:27:33'),
(286, 'PNKpWy2K1ioGnu8', 'active', '2016-11-03 21:27:33'),
(287, 'zGflmPQdoDhZnvN', 'active', '2016-11-03 21:27:33'),
(288, 'rdAyw25N0e3Cgwn', 'active', '2016-11-03 21:27:33'),
(289, 'JU3TXuRetruxErk', 'active', '2016-11-03 21:27:33'),
(290, 'r7tjxihFjottgkY', 'active', '2016-11-03 21:27:33'),
(291, 'hWPItInol2dOEL6', 'active', '2016-11-03 21:27:33'),
(292, 'huUfC5jrfvFD9tI', 'active', '2016-11-03 21:27:33'),
(293, 'Z6n7XP86Z1Vvmiv', 'active', '2016-11-03 21:27:33'),
(294, 'yysyEqMBy8lVUR6', 'active', '2016-11-03 21:27:34'),
(295, '52uCKjkQatkaE57', 'active', '2016-11-03 21:27:34'),
(296, 'RXfqkH8ErSVv2Lh', 'active', '2016-11-03 21:27:34'),
(297, 'KqLN25KtgZLPJWk', 'active', '2016-11-03 21:27:34'),
(298, '0oXjHdMifDlkcGj', 'active', '2016-11-03 21:27:34'),
(299, 'f2CPuKbiryCV64k', 'active', '2016-11-03 21:27:34'),
(300, 'hTZ9u13FZW5SjqW', 'active', '2016-11-03 21:27:34'),
(301, 'pe6PTeJQGg8NoXy', 'active', '2016-11-03 21:27:34'),
(302, 'VsTGVcR3Hvsn859', 'active', '2016-11-03 21:27:34'),
(303, 'h54yyrY5wqmyCqf', 'active', '2016-11-03 21:27:34'),
(304, 'piGHw44yjNrG9Cb', 'active', '2016-11-03 21:27:34'),
(305, 'mzGYOg8b2BWTbYG', 'active', '2016-11-03 21:27:34'),
(306, 'KI23qFqPErPcTay', 'active', '2016-11-03 21:27:34'),
(307, 'UVXTOD27bVciuQ5', 'active', '2016-11-03 21:27:34'),
(308, 'WJZRFGfxOPsfeIG', 'active', '2016-11-03 21:27:34'),
(309, 'J6w6e1g4LZYn8Pc', 'active', '2016-11-03 21:27:34'),
(310, 'UeIGpFm6zBt2luJ', 'active', '2016-11-03 21:27:34'),
(311, 'Gt3jO8xBMiSBG2S', 'active', '2016-11-03 21:27:35'),
(312, 'LMDEeS0YryCsflR', 'active', '2016-11-03 21:27:35'),
(313, 'mJWSKJcRhInkloL', 'active', '2016-11-03 21:27:35'),
(314, 'Jmcjh2b5zIq2gqk', 'active', '2016-11-03 21:27:35'),
(315, 'YHOiCrWcwSK0uDT', 'active', '2016-11-03 21:27:35'),
(316, '0RLC5dY3JNXyi7p', 'active', '2016-11-03 21:27:35'),
(317, 'VH3B82yT2BKRntM', 'active', '2016-11-03 21:27:35'),
(318, 'x9zOkPAraUokbr8', 'active', '2016-11-03 21:27:36'),
(319, 'LJqgbzyhE4V9Ux4', 'active', '2016-11-03 21:27:36'),
(320, 'Go89n4GtNvaxwCd', 'active', '2016-11-03 21:27:36'),
(321, 'QONGX5Xv8wToSgz', 'active', '2016-11-03 21:27:36'),
(322, 'JoSp1afEkiqL2Tk', 'active', '2016-11-03 21:27:36'),
(323, '9mO94xy7SoYOzHC', 'active', '2016-11-03 21:27:36'),
(324, 'yrXo3AFwsAMeKy9', 'active', '2016-11-03 21:27:36'),
(325, 'JFG1cCFYGliOcjM', 'active', '2016-11-03 21:27:36'),
(326, 'cwnkIX3232sYfqj', 'active', '2016-11-03 21:27:36'),
(327, 'XRtblfuG4fEkRVA', 'active', '2016-11-03 21:27:36'),
(328, 'Kh4ZHPLSUnB6GdM', 'active', '2016-11-03 21:27:36'),
(329, 'yfu5SFiJken72uQ', 'active', '2016-11-03 21:27:36'),
(330, 'RKdbreXHUhnmtxW', 'active', '2016-11-03 21:27:36'),
(331, 'V27EpoDf0Bk6L2s', 'active', '2016-11-03 21:27:36'),
(332, 'Vywgi7q6ePvV6er', 'active', '2016-11-03 21:27:36'),
(333, 'Vo1Ay0aAk4En0yh', 'active', '2016-11-03 21:27:36'),
(334, 'REq8zZM4aoQlJVn', 'active', '2016-11-03 21:27:37'),
(335, 'tnoXTxMF8OmZbaz', 'active', '2016-11-03 21:27:37'),
(336, 'RiUC9BXmk8HRLRb', 'active', '2016-11-03 21:27:37'),
(337, '1j3snOzu2T0Z4Ra', 'active', '2016-11-03 21:27:37'),
(338, 'cexC2tXKteL6sXZ', 'active', '2016-11-03 21:27:37'),
(339, 'TTIdjGxvlerINiO', 'active', '2016-11-03 21:27:37'),
(340, 'sJe3ZRIZkjb0ChB', 'active', '2016-11-03 21:27:37'),
(341, 'VUdnUWuq3Ybv0dU', 'active', '2016-11-03 21:27:37'),
(342, 'a81HBf3XKCcFF7E', 'active', '2016-11-03 21:27:37'),
(343, '3ad8jnanSZHHK2m', 'active', '2016-11-03 21:27:37'),
(344, 'ASu4pWxPao0WNlo', 'active', '2016-11-03 21:27:37'),
(345, 'wcLeku5A8PCwsnC', 'active', '2016-11-03 21:27:38'),
(346, 'PVDTw6BBB3fWpF2', 'active', '2016-11-03 21:27:38'),
(347, 'v3qKTddddSItNX6', 'active', '2016-11-03 21:27:38'),
(348, 'DJEo40ObORZsqFi', 'active', '2016-11-03 21:27:38'),
(349, 'oPtw2jXD2yIpMIj', 'active', '2016-11-03 21:27:38'),
(350, 'UUN3vvyBjv0Cclo', 'active', '2016-11-03 21:27:39'),
(351, 'hpyJjo8oj4tD1wE', 'active', '2016-11-03 21:27:39'),
(352, 'fXaRnejgq0qaOmB', 'active', '2016-11-03 21:27:39'),
(353, 'k9DNbp9wSZYJkl9', 'active', '2016-11-03 21:27:40'),
(354, 'fGns3Sb8F4pHUJR', 'active', '2016-11-03 21:27:40'),
(355, 'e173VrMS8xCEX0k', 'active', '2016-11-03 21:27:40'),
(356, 'AnspfAo7cWGjlSv', 'active', '2016-11-03 21:27:40'),
(357, 'cKVrG8GnOjMB2zq', 'active', '2016-11-03 21:27:40'),
(358, 'sF2JRYsu5kHmxi2', 'active', '2016-11-03 21:27:40'),
(359, 'BqQupbAOVAydOsk', 'active', '2016-11-03 21:27:40'),
(360, 'NfxwHH84Ms7YRvs', 'active', '2016-11-03 21:27:40'),
(361, 'Ip9IEDfrHTYslV0', 'active', '2016-11-03 21:27:41'),
(362, 'ug8Bb4fmJHhbsfp', 'active', '2016-11-03 21:27:41'),
(363, 'c1uqlMEqmFuFmRJ', 'active', '2016-11-03 21:27:41'),
(364, 'K6N7RS5hIaK14GG', 'active', '2016-11-03 21:27:41'),
(365, '7OPNmxk6y4x1Xcn', 'active', '2016-11-03 21:27:41'),
(366, 'G7ZeGbnzmErH1yV', 'active', '2016-11-03 21:27:41'),
(367, 'esa2vzx2JlhljaE', 'active', '2016-11-03 21:27:41'),
(368, 'lgAABJEMszy8S2D', 'active', '2016-11-03 21:27:41'),
(369, 'axDcEnHf7k0kTR9', 'active', '2016-11-03 21:27:41'),
(370, 'VDKQ6tJ57BBrFzY', 'active', '2016-11-03 21:27:41'),
(371, 'oh4YFmnZlZM6Er1', 'active', '2016-11-03 21:27:41'),
(372, 'dh2BuByvbeY0VYI', 'active', '2016-11-03 21:27:41'),
(373, 'nwfXK4QimL0zSeR', 'active', '2016-11-03 21:27:41'),
(374, 'JHWtYAXeZXy5e3G', 'active', '2016-11-03 21:27:41'),
(375, '4lhvD9DvAngNudz', 'active', '2016-11-03 21:27:41'),
(376, 'ZArf9MaBJxxrg6T', 'active', '2016-11-03 21:27:42'),
(377, 'cV5rcd6JJreYigg', 'active', '2016-11-03 21:27:42'),
(378, '9uvhZmImwIqesC0', 'active', '2016-11-03 21:27:42'),
(379, 'pHErp9bvn1Yb6Af', 'active', '2016-11-03 21:27:42'),
(380, 'Cm7q2EoK8H4iI67', 'active', '2016-11-03 21:27:42'),
(381, '6oJV4PnYD7wVjU8', 'active', '2016-11-03 21:27:42'),
(382, '6wcgI0QaISrNX02', 'active', '2016-11-03 21:27:42'),
(383, 'IbDXEzp0LSzO5VB', 'active', '2016-11-03 21:27:42'),
(384, 'BeZ7sFIpmzuOJtb', 'active', '2016-11-03 21:27:42'),
(385, '2hDdmifGiHL5Yzo', 'active', '2016-11-03 21:27:42'),
(386, 'VgZvcpmdHj8IHrc', 'active', '2016-11-03 21:27:42'),
(387, '7u3Ljany8pMcTl8', 'active', '2016-11-03 21:27:42'),
(388, 'BoLjeeGSn1kidv6', 'active', '2016-11-03 21:27:42'),
(389, 'JN6EMqyE9HhJtXr', 'active', '2016-11-03 21:27:42'),
(390, 'y6x6iKod0fEOiAo', 'active', '2016-11-03 21:27:42'),
(391, 'cXnxThRpxv8QroA', 'active', '2016-11-03 21:27:42'),
(392, 'HwwFhasGVEokDET', 'active', '2016-11-03 21:27:42'),
(393, 'IEZWNEsz7ZsXFXW', 'active', '2016-11-03 21:27:42'),
(394, 'tknpnUJHyCK8Www', 'active', '2016-11-03 21:27:42'),
(395, '7QS7R77OBbGZQF4', 'active', '2016-11-03 21:27:43'),
(396, '5Djh2EY33C1mX1N', 'active', '2016-11-03 21:27:43'),
(397, 'nW1CmiikP4Cajn1', 'active', '2016-11-03 21:27:43'),
(398, 'xlZaNvwfAsm0mHp', 'active', '2016-11-03 21:27:43'),
(399, 'lflYOV1Fp4MO0QP', 'active', '2016-11-03 21:27:43'),
(400, 'zyDVtx0ItYXIWCz', 'active', '2016-11-03 21:27:43'),
(401, 'k90Nk1rDZOAa5PG', 'active', '2016-11-03 21:27:43'),
(402, '8MTpxCSoRoDHfLV', 'active', '2016-11-03 21:27:43'),
(403, 'AfUMJNb3UPHHATI', 'active', '2016-11-03 21:27:43'),
(404, 'lQzsBBxltrAWLvW', 'active', '2016-11-03 21:27:43'),
(405, 'nAA4gHqhn5e0OKm', 'active', '2016-11-03 21:27:43'),
(406, 'jU3z2ejH090McHX', 'active', '2016-11-03 21:27:43'),
(407, '7OzaHBHf1XI1Sl4', 'active', '2016-11-03 21:27:43'),
(408, 'OvsKozuLlMs4v6Q', 'active', '2016-11-03 21:27:43'),
(409, 'BlL3smUBMig5Ycv', 'active', '2016-11-03 21:27:43'),
(410, 'P4ys9d9xRQDCBam', 'active', '2016-11-03 21:27:43'),
(411, 'qbc80xwdT0I9sM6', 'active', '2016-11-03 21:27:44'),
(412, '0SZV4TgV1Ub6qlc', 'active', '2016-11-03 21:27:44'),
(413, 'U63hgwCnrrskZNL', 'active', '2016-11-03 21:27:44'),
(414, '6Ou6CnTdVae8LHl', 'active', '2016-11-03 21:27:44'),
(415, 'V7lNUd15L2hRbSK', 'active', '2016-11-03 21:27:44'),
(416, 'rRomjPgGPURvBMc', 'active', '2016-11-03 21:27:44'),
(417, 'zDUUcVkWYj5NQpG', 'active', '2016-11-03 21:27:44'),
(418, '3PKnBf7g28XbmiW', 'active', '2016-11-03 21:27:44'),
(419, 'DaqtMX7MjiMpdtQ', 'active', '2016-11-03 21:27:44'),
(420, 'F5MwQcPqKOfRZwk', 'active', '2016-11-03 21:27:44'),
(421, 'jwVizLslD7gJZk8', 'active', '2016-11-03 21:27:44'),
(422, 'Z2XGlksTbKWbzNz', 'active', '2016-11-03 21:27:44'),
(423, 'CAvil7hi2rtlzIW', 'active', '2016-11-03 21:27:44'),
(424, 'eVWryra6oveVxCV', 'active', '2016-11-03 21:27:44'),
(425, '9iQGpythXW32xfg', 'active', '2016-11-03 21:27:44'),
(426, 'KgMwpNSafrOgKdu', 'active', '2016-11-03 21:27:44'),
(427, 'i1PyFYiI8knDO45', 'active', '2016-11-03 21:27:45'),
(428, 'fBh3Z7Hbwyp3a6V', 'active', '2016-11-03 21:27:45'),
(429, 'lhmceizjAUKmWIO', 'active', '2016-11-03 21:27:45'),
(430, 'PkrbU3IhtUOn6VO', 'active', '2016-11-03 21:27:45'),
(431, 'vWMjdRFL7ACuB47', 'active', '2016-11-03 21:27:45'),
(432, '85xfdFQeZilor1R', 'active', '2016-11-03 21:27:45'),
(433, 'tBW0Dd77J7eUM9C', 'active', '2016-11-03 21:27:45'),
(434, 'kOe5f0RqLjl6ntA', 'active', '2016-11-03 21:27:45'),
(435, '1ZxWn0t05qFSu8e', 'active', '2016-11-03 21:27:45'),
(436, '43isONCtgPidZWs', 'active', '2016-11-03 21:27:45'),
(437, 'K9LQhUSQawCqbAH', 'active', '2016-11-03 21:27:46'),
(438, 'hdAlLRf3TAd1do9', 'active', '2016-11-03 21:27:46'),
(439, 'vMHEnlHJKDSminU', 'active', '2016-11-03 21:27:46'),
(440, 'yk77rGHMRvU7TqO', 'active', '2016-11-03 21:27:46'),
(441, 'zMHJsA4Trf3GgjK', 'active', '2016-11-03 21:27:46'),
(442, 'Wt3Ef86I2oPauw0', 'active', '2016-11-03 21:27:46'),
(443, 'Zqn7uYXNL5snArb', 'active', '2016-11-03 21:27:46'),
(444, 'NrninvSdToksG9t', 'active', '2016-11-03 21:27:46'),
(445, 'c4m2HLPzlgugM9V', 'active', '2016-11-03 21:27:46'),
(446, 'wFUNcYPR3N3OfVc', 'active', '2016-11-03 21:27:46'),
(447, 'P98Oy8C2NlMsmMR', 'active', '2016-11-03 21:27:46'),
(448, '2eBblaqUfbabwu6', 'active', '2016-11-03 21:27:46'),
(449, 'cCf3MM3m1sPC6UY', 'active', '2016-11-03 21:27:46'),
(450, '07Bg2NnTyUFTeuq', 'active', '2016-11-03 21:31:22'),
(451, 'Pr6eDBG0whB5rWu', 'active', '2016-11-03 21:31:22'),
(452, 'sJaf6orxUm5nDmX', 'active', '2016-11-03 21:31:22'),
(453, 'kY3xrlyN3qUMd4r', 'active', '2016-11-03 21:31:22'),
(454, 'zzxsjSmJFEPUayZ', 'active', '2016-11-03 21:31:22'),
(455, 'FMpEaFrgFS3ubkB', 'active', '2016-11-03 21:31:22'),
(456, 'Q4P1aDY1vySRJP9', 'active', '2016-11-03 21:31:22'),
(457, 'CkN3KxNjoZAwKoS', 'active', '2016-11-03 21:31:22'),
(458, 'GgCHsYVtVNhgZZv', 'active', '2016-11-03 21:31:22'),
(459, '0yzlmI7Mg8yuS6k', 'active', '2016-11-03 21:31:22'),
(460, 'vOhJJQKwTxEJFky', 'active', '2016-11-04 07:05:59'),
(461, 'j77eG2xt16SfLtO', 'active', '2016-11-04 07:05:59'),
(462, 'YYSMa7ZAYFLObDL', 'active', '2016-11-04 07:05:59'),
(463, 'NOggXTOyTywOTBf', 'active', '2016-11-04 07:05:59'),
(464, 'rsk5YtjYUSxjKnh', 'active', '2016-11-04 07:05:59'),
(465, 'w8ckduyamYBLN48', 'active', '2016-11-04 07:05:59'),
(466, 'ySYlXhNzCT8VzBL', 'active', '2016-11-04 07:05:59'),
(467, 'X9Si3CXxyVdH8u6', 'active', '2016-11-04 07:05:59'),
(468, 'P8VJvsLmlUxcTwL', 'active', '2016-11-04 07:05:59'),
(469, 'LNnTvNzuVow8uca', 'active', '2016-11-04 07:05:59'),
(470, 'YoVyUOZYYNicmKs', 'active', '2016-11-04 07:10:14'),
(471, 'tJlHQh9mojHe5yp', 'active', '2016-11-04 07:10:14'),
(472, 'EwnPX2u94KB1Hyd', 'active', '2016-11-04 07:10:14'),
(473, 'EH11xmzSzBA2Cqa', 'active', '2016-11-04 07:10:14'),
(474, 'Tk3OotxIAoVH8gy', 'active', '2016-11-04 07:10:14'),
(475, '7UTk06AksJGgT8A', 'active', '2016-11-04 07:10:43'),
(476, '3BtEydgfBqJte4X', 'active', '2016-11-04 07:10:43'),
(477, 'K02FAWr8JNj7rl3', 'active', '2016-11-04 07:10:43'),
(478, 'wW2KnjC4mfkduy6', 'active', '2016-11-04 07:10:43'),
(479, 'YijDc7Ptem450K9', 'active', '2016-11-04 07:10:43'),
(480, 'RUmZ7Z179mjDeJS', 'active', '2016-11-04 07:13:29'),
(481, 'EPxeL4DeuBJNxKp', 'active', '2016-11-04 07:13:29'),
(482, 'NaDU4QqqjM2HaQC', 'active', '2016-11-04 07:13:29'),
(483, 'E3371F3YtrKy6Kg', 'active', '2016-11-04 07:13:29'),
(484, 'GciaMxfmpeD5D24', 'active', '2016-11-04 07:13:29'),
(485, 'r2tJukH5behS7RK', 'active', '2016-11-04 07:14:05'),
(486, 'xN3jL2mdgMxYKWg', 'active', '2016-11-04 07:14:05'),
(487, 'NeSp1Ci6oyslmRb', 'active', '2016-11-04 07:14:05'),
(488, 'cC9B13oIGekievz', 'active', '2016-11-04 07:14:05'),
(489, 'SbtAo7ZPIMpgFfV', 'active', '2016-11-04 07:14:05'),
(490, '4GSFKa7BUTCIgoj', 'inactive', '2016-11-04 07:14:33'),
(491, 'JiwTal6bvxpZD0o', 'active', '2016-11-04 07:14:33'),
(492, 'GqEnsPd9Mvzru7f', 'active', '2016-11-04 07:14:33'),
(493, 'bfpDJ8OjT53bw9v', 'active', '2016-11-04 07:14:33'),
(494, 'B2VaqjpmW3WUVfp', 'active', '2016-11-04 07:14:33'),
(495, 'zg8tz6a1ZgRNOBu', 'active', '2016-11-04 07:14:33'),
(496, 'ZkEhSUBVd9EmxQO', 'active', '2016-11-04 07:14:33'),
(497, 'NkudmcxNRcPj5Xu', 'active', '2016-11-04 07:14:33'),
(498, 'IO0wahPLw1vA0zJ', 'active', '2016-11-04 07:14:33'),
(499, 'QJqAq45fJSAe7Ou', 'active', '2016-11-04 07:14:33'),
(500, 'x0xj6HBu5Yku8Op', 'active', '2016-11-04 07:31:35'),
(501, 'NMr5LCcYmXT7qOE', 'active', '2016-11-04 07:31:35'),
(502, 'WLwAsLO7b9axiOd', 'active', '2016-11-04 11:58:47'),
(503, 'yYPP2PLdBtDLTCK', 'active', '2016-11-04 11:58:54'),
(504, 'w3GrbmjWxgTR82H', 'active', '2016-11-04 11:58:54');

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
(3, 'sadfkhslfhdksjhdfkj', 'hkhfskjhdfkshkdfhkhfk'),
(4, 'adfad', 'fadsfdaf');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `type` enum('Faculty','Student','Academic') NOT NULL,
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
(4, 11, 'Faculty', '2016-10-29', '', 43, 66, 'test\r\n'),
(5, 11, 'Student', '2016-10-29', 'GaoMd0OPN1BdDEM', 75, 75, 'testetett'),
(6, 20, 'Faculty', '2016-10-31', '', 67, 61, 'testet'),
(8, 19, 'Faculty', '2016-10-31', '', 5, 0, 'est'),
(9, 4, 'Student', '2016-11-04', 'T1unKYasu7YFeML', 17, 18, 'gegsge'),
(10, 4, 'Student', '2016-11-04', '4GSFKa7BUTCIgoj', 15, 14, 'etsete'),
(11, 9, 'Faculty', '2016-11-04', '', 14, 16, ''),
(12, 2, 'Academic', '2016-11-04', 'academic-32', 14, 16, ''),
(13, 3, 'Academic', '2016-11-04', 'academic-32', 17, 15, ''),
(14, 2, 'Faculty', '2016-11-04', '', 15, 15, ''),
(15, 2, 'Academic', '2016-11-04', 'academic-34', 14, 21, ''),
(16, 3, 'Faculty', '2016-11-04', '', 19, 22, '');

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
(11, 'fadf', 'dsfa', 'sdfdfd'),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, 'fadsffadsf', '', ''),
(17, 'fadsffadsf', '', ''),
(18, 'fadsffadfadf', '', ''),
(19, 'adsf', 'asf', 'sdf'),
(20, 'faculty123ssss', 'facultysss', 'faculty');

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
(11, 2),
(19, 1),
(19, 2),
(20, 3),
(20, 1);

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
(11, 1),
(19, 1),
(20, 1);

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
(11, 2),
(19, 1),
(20, 2);

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
(11, 3),
(19, 3),
(20, 3),
(20, 2);

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
(48, 4, 0, 0, 0, 0, 0, 5, 15),
(49, 5, 0, 0, 0, 0, 0, 5, 1),
(50, 5, 0, 0, 0, 0, 0, 5, 2),
(51, 5, 0, 0, 0, 0, 0, 5, 3),
(52, 5, 0, 0, 0, 0, 0, 5, 4),
(53, 5, 0, 0, 0, 0, 0, 5, 5),
(54, 5, 0, 0, 0, 0, 0, 5, 6),
(55, 5, 0, 0, 0, 0, 0, 5, 7),
(56, 5, 0, 0, 0, 0, 0, 5, 8),
(57, 5, 0, 0, 0, 0, 0, 5, 9),
(58, 5, 0, 0, 0, 0, 0, 5, 10),
(59, 5, 0, 0, 0, 0, 0, 5, 11),
(60, 5, 0, 0, 0, 0, 0, 5, 12),
(61, 5, 0, 0, 0, 0, 0, 5, 13),
(62, 5, 0, 0, 0, 0, 0, 5, 14),
(63, 5, 0, 0, 0, 0, 0, 5, 15),
(64, 6, 0, 0, 0, 3, 0, 0, 1),
(65, 6, 0, 0, 0, 0, 4, 0, 2),
(66, 6, 0, 0, 0, 0, 4, 0, 3),
(67, 6, 0, 0, 0, 0, 4, 0, 4),
(68, 6, 0, 0, 0, 0, 4, 0, 5),
(69, 6, 0, 0, 0, 3, 0, 0, 6),
(70, 6, 0, 0, 0, 0, 4, 0, 7),
(71, 6, 0, 0, 0, 0, 0, 5, 8),
(72, 6, 0, 0, 0, 0, 0, 5, 9),
(73, 6, 0, 0, 0, 0, 4, 0, 10),
(74, 6, 0, 0, 0, 0, 4, 0, 11),
(75, 6, 0, 0, 0, 0, 0, 5, 12),
(76, 6, 0, 0, 0, 0, 4, 0, 13),
(77, 6, 0, 0, 0, 0, 4, 0, 14),
(78, 6, 0, 0, 0, 0, 4, 0, 15),
(79, 7, 0, 0, 0, 0, 0, 5, 1),
(80, 7, 0, 0, 0, 0, 4, 0, 2),
(81, 7, 0, 0, 0, 0, 0, 5, 3),
(82, 7, 0, 0, 0, 0, 0, 0, 4),
(83, 7, 0, 0, 0, 0, 4, 0, 5),
(84, 7, 0, 0, 0, 0, 4, 0, 6),
(85, 7, 0, 0, 0, 0, 4, 0, 7),
(86, 7, 0, 0, 0, 0, 0, 5, 8),
(87, 7, 0, 0, 0, 0, 4, 0, 9),
(88, 7, 0, 0, 0, 0, 0, 5, 10),
(89, 7, 0, 0, 0, 0, 0, 5, 11),
(90, 7, 0, 0, 0, 0, 4, 0, 12),
(91, 7, 0, 0, 0, 0, 0, 5, 13),
(92, 7, 0, 0, 0, 0, 4, 0, 14),
(93, 7, 0, 0, 0, 0, 4, 0, 15),
(94, 8, 0, 0, 0, 0, 0, 0, 1),
(95, 8, 0, 0, 0, 0, 0, 0, 2),
(96, 8, 0, 0, 0, 0, 0, 0, 3),
(97, 8, 0, 0, 0, 0, 0, 0, 4),
(98, 8, 0, 0, 0, 0, 0, 0, 5),
(99, 8, 0, 0, 0, 0, 0, 0, 6),
(100, 8, 0, 0, 0, 0, 0, 0, 7),
(101, 8, 0, 0, 0, 0, 0, 0, 8),
(102, 8, 0, 0, 0, 0, 0, 0, 9),
(103, 8, 0, 0, 0, 0, 0, 0, 10),
(104, 8, 0, 0, 0, 0, 0, 0, 11),
(105, 8, 0, 0, 0, 0, 0, 0, 12),
(106, 8, 0, 0, 0, 0, 0, 0, 13),
(107, 8, 0, 0, 0, 0, 0, 0, 14),
(108, 8, 0, 0, 0, 0, 0, 0, 15),
(109, 9, 0, 0, 0, 0, 0, 0, 1),
(110, 9, 0, 1, 0, 0, 0, 0, 2),
(111, 9, 0, 1, 0, 0, 0, 0, 3),
(112, 9, 0, 1, 0, 0, 0, 0, 4),
(113, 9, 0, 1, 0, 0, 0, 0, 5),
(114, 9, 0, 1, 0, 0, 0, 0, 6),
(115, 9, 0, 1, 0, 0, 0, 0, 7),
(116, 9, 0, 0, 0, 0, 0, 5, 8),
(117, 9, 0, 1, 0, 0, 0, 0, 9),
(118, 9, 0, 1, 0, 0, 0, 0, 10),
(119, 9, 0, 1, 0, 0, 0, 0, 11),
(120, 9, 0, 1, 0, 0, 0, 0, 12),
(121, 9, 0, 1, 0, 0, 0, 0, 13),
(122, 9, 0, 1, 0, 0, 0, 0, 14),
(123, 9, 0, 1, 0, 0, 0, 0, 15),
(124, 10, 0, 0, 0, 0, 0, 0, 1),
(125, 10, 0, 1, 0, 0, 0, 0, 2),
(126, 10, 0, 1, 0, 0, 0, 0, 3),
(127, 10, 0, 1, 0, 0, 0, 0, 4),
(128, 10, 0, 1, 0, 0, 0, 0, 5),
(129, 10, 0, 1, 0, 0, 0, 0, 6),
(130, 10, 0, 1, 0, 0, 0, 0, 7),
(131, 10, 0, 1, 0, 0, 0, 0, 8),
(132, 10, 0, 1, 0, 0, 0, 0, 9),
(133, 10, 0, 1, 0, 0, 0, 0, 10),
(134, 10, 0, 1, 0, 0, 0, 0, 11),
(135, 10, 0, 1, 0, 0, 0, 0, 12),
(136, 10, 0, 1, 0, 0, 0, 0, 13),
(137, 10, 0, 1, 0, 0, 0, 0, 14),
(138, 10, 0, 1, 0, 0, 0, 0, 15),
(139, 11, 0, 0, 2, 0, 0, 0, 1),
(140, 11, 0, 1, 0, 0, 0, 0, 2),
(141, 11, 0, 1, 0, 0, 0, 0, 3),
(142, 11, 0, 1, 0, 0, 0, 0, 4),
(143, 11, 0, 1, 0, 0, 0, 0, 5),
(144, 11, 0, 1, 0, 0, 0, 0, 6),
(145, 11, 0, 1, 0, 0, 0, 0, 7),
(146, 11, 0, 1, 0, 0, 0, 0, 8),
(147, 11, 0, 1, 0, 0, 0, 0, 9),
(148, 11, 0, 1, 0, 0, 0, 0, 10),
(149, 11, 0, 1, 0, 0, 0, 0, 11),
(150, 11, 0, 1, 0, 0, 0, 0, 12),
(151, 11, 0, 1, 0, 0, 0, 0, 13),
(152, 11, 0, 1, 0, 0, 0, 0, 14),
(153, 11, 0, 1, 0, 0, 0, 0, 15),
(154, 12, 0, 0, 0, 0, 0, 0, 1),
(155, 12, 0, 1, 0, 0, 0, 0, 2),
(156, 12, 0, 1, 0, 0, 0, 0, 3),
(157, 12, 0, 1, 0, 0, 0, 0, 4),
(158, 12, 0, 1, 0, 0, 0, 0, 5),
(159, 12, 0, 1, 0, 0, 0, 0, 6),
(160, 12, 0, 1, 0, 0, 0, 0, 7),
(161, 12, 0, 1, 0, 0, 0, 0, 8),
(162, 12, 0, 1, 0, 0, 0, 0, 9),
(163, 12, 0, 1, 0, 0, 0, 0, 10),
(164, 12, 0, 1, 0, 0, 0, 0, 11),
(165, 12, 0, 1, 0, 0, 0, 0, 12),
(166, 12, 0, 1, 0, 0, 0, 0, 13),
(167, 12, 0, 1, 0, 0, 0, 0, 14),
(168, 12, 0, 0, 0, 3, 0, 0, 15),
(169, 13, 0, 1, 0, 0, 0, 0, 1),
(170, 13, 0, 1, 0, 0, 0, 0, 2),
(171, 13, 0, 1, 0, 0, 0, 0, 3),
(172, 13, 0, 1, 0, 0, 0, 0, 4),
(173, 13, 0, 1, 0, 0, 0, 0, 5),
(174, 13, 0, 1, 0, 0, 0, 0, 6),
(175, 13, 0, 1, 0, 0, 0, 0, 7),
(176, 13, 0, 1, 0, 0, 0, 0, 8),
(177, 13, 0, 1, 0, 0, 0, 0, 9),
(178, 13, 0, 1, 0, 0, 0, 0, 10),
(179, 13, 0, 1, 0, 0, 0, 0, 11),
(180, 13, 0, 1, 0, 0, 0, 0, 12),
(181, 13, 0, 1, 0, 0, 0, 0, 13),
(182, 13, 0, 1, 0, 0, 0, 0, 14),
(183, 13, 0, 1, 0, 0, 0, 0, 15),
(184, 14, 0, 1, 0, 0, 0, 0, 1),
(185, 14, 0, 1, 0, 0, 0, 0, 2),
(186, 14, 0, 1, 0, 0, 0, 0, 3),
(187, 14, 0, 1, 0, 0, 0, 0, 4),
(188, 14, 0, 1, 0, 0, 0, 0, 5),
(189, 14, 0, 1, 0, 0, 0, 0, 6),
(190, 14, 0, 1, 0, 0, 0, 0, 7),
(191, 14, 0, 1, 0, 0, 0, 0, 8),
(192, 14, 0, 1, 0, 0, 0, 0, 9),
(193, 14, 0, 1, 0, 0, 0, 0, 10),
(194, 14, 0, 1, 0, 0, 0, 0, 11),
(195, 14, 0, 1, 0, 0, 0, 0, 12),
(196, 14, 0, 1, 0, 0, 0, 0, 13),
(197, 14, 0, 1, 0, 0, 0, 0, 14),
(198, 14, 0, 1, 0, 0, 0, 0, 15),
(199, 15, 0, 0, 0, 3, 0, 0, 1),
(200, 15, 0, 1, 0, 0, 0, 0, 2),
(201, 15, 0, 1, 0, 0, 0, 0, 3),
(202, 15, 0, 1, 0, 0, 0, 0, 4),
(203, 15, 0, 1, 0, 0, 0, 0, 5),
(204, 15, 0, 1, 0, 0, 0, 0, 6),
(205, 15, 0, 1, 0, 0, 0, 0, 7),
(206, 15, 0, 1, 0, 0, 0, 0, 8),
(207, 15, 0, 1, 0, 0, 0, 0, 9),
(208, 15, 0, 1, 0, 0, 0, 0, 10),
(209, 15, 0, 1, 0, 0, 0, 0, 11),
(210, 15, 0, 1, 0, 0, 0, 0, 12),
(211, 15, 0, 1, 0, 0, 0, 0, 13),
(212, 15, 0, 1, 0, 0, 0, 0, 14),
(213, 15, 0, 0, 0, 0, 0, 5, 15),
(214, 16, 0, 0, 0, 0, 4, 0, 1),
(215, 16, 0, 1, 0, 0, 0, 0, 2),
(216, 16, 0, 1, 0, 0, 0, 0, 3),
(217, 16, 0, 1, 0, 0, 0, 0, 4),
(218, 16, 0, 1, 0, 0, 0, 0, 5),
(219, 16, 0, 1, 0, 0, 0, 0, 6),
(220, 16, 0, 1, 0, 0, 0, 0, 7),
(221, 16, 0, 1, 0, 0, 0, 0, 8),
(222, 16, 0, 1, 0, 0, 0, 0, 9),
(223, 16, 0, 1, 0, 0, 0, 0, 10),
(224, 16, 0, 1, 0, 0, 0, 0, 11),
(225, 16, 0, 1, 0, 0, 0, 0, 12),
(226, 16, 0, 1, 0, 0, 0, 0, 13),
(227, 16, 0, 1, 0, 0, 0, 0, 14),
(228, 16, 0, 0, 0, 0, 0, 5, 15);

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
(60, 4, 0, 0, 0, 0, 4, 0, 15),
(61, 5, 0, 0, 0, 0, 0, 5, 1),
(62, 5, 0, 0, 0, 0, 0, 5, 2),
(63, 5, 0, 0, 0, 0, 0, 5, 3),
(64, 5, 0, 0, 0, 0, 0, 5, 4),
(65, 5, 0, 0, 0, 0, 0, 5, 5),
(66, 5, 0, 0, 0, 0, 0, 5, 6),
(67, 5, 0, 0, 0, 0, 0, 5, 7),
(68, 5, 0, 0, 0, 0, 0, 5, 8),
(69, 5, 0, 0, 0, 0, 0, 5, 9),
(70, 5, 0, 0, 0, 0, 0, 5, 10),
(71, 5, 0, 0, 0, 0, 0, 5, 11),
(72, 5, 0, 0, 0, 0, 0, 5, 12),
(73, 5, 0, 0, 0, 0, 0, 5, 13),
(74, 5, 0, 0, 0, 0, 0, 5, 14),
(75, 5, 0, 0, 0, 0, 0, 5, 15),
(76, 6, 0, 0, 0, 0, 0, 5, 1),
(77, 6, 0, 0, 0, 0, 0, 5, 2),
(78, 6, 0, 0, 0, 0, 0, 5, 3),
(79, 6, 0, 0, 0, 0, 0, 5, 4),
(80, 6, 0, 0, 0, 0, 0, 5, 5),
(81, 6, 0, 0, 0, 0, 0, 5, 6),
(82, 6, 0, 0, 0, 0, 0, 5, 7),
(83, 6, 0, 0, 0, 0, 0, 5, 8),
(84, 6, 0, 0, 0, 0, 4, 0, 9),
(85, 6, 0, 0, 0, 0, 4, 0, 10),
(86, 6, 0, 0, 0, 0, 0, 5, 11),
(87, 6, 0, 0, 0, 0, 0, 5, 12),
(88, 6, 0, 0, 0, 0, 4, 0, 13),
(89, 6, 0, 0, 0, 3, 0, 0, 14),
(90, 6, 0, 0, 2, 0, 0, 0, 15),
(91, 7, 0, 0, 0, 0, 0, 5, 1),
(92, 7, 0, 0, 0, 0, 0, 5, 2),
(93, 7, 0, 0, 0, 0, 0, 0, 3),
(94, 7, 0, 0, 0, 0, 0, 0, 4),
(95, 7, 0, 0, 0, 0, 0, 0, 5),
(96, 7, 0, 0, 0, 0, 0, 0, 6),
(97, 7, 0, 0, 0, 3, 0, 0, 7),
(98, 7, 0, 0, 0, 0, 0, 0, 8),
(99, 7, 0, 0, 0, 0, 0, 0, 9),
(100, 7, 0, 0, 0, 0, 0, 0, 10),
(101, 7, 0, 0, 0, 0, 0, 0, 11),
(102, 7, 0, 0, 2, 0, 0, 0, 12),
(103, 7, 0, 0, 0, 3, 0, 0, 13),
(104, 7, 0, 0, 0, 0, 0, 0, 14),
(105, 7, 0, 0, 0, 0, 0, 0, 15),
(106, 8, 0, 0, 0, 0, 0, 5, 1),
(107, 8, 0, 0, 0, 0, 0, 0, 2),
(108, 8, 0, 0, 0, 0, 0, 0, 3),
(109, 8, 0, 0, 0, 0, 0, 0, 4),
(110, 8, 0, 0, 0, 0, 0, 0, 5),
(111, 8, 0, 0, 0, 0, 0, 0, 6),
(112, 8, 0, 0, 0, 0, 0, 0, 7),
(113, 8, 0, 0, 0, 0, 0, 0, 8),
(114, 8, 0, 0, 0, 0, 0, 0, 9),
(115, 8, 0, 0, 0, 0, 0, 0, 10),
(116, 8, 0, 0, 0, 0, 0, 0, 11),
(117, 8, 0, 0, 0, 0, 0, 0, 12),
(118, 8, 0, 0, 0, 0, 0, 0, 13),
(119, 8, 0, 0, 0, 0, 0, 0, 14),
(120, 8, 0, 0, 0, 0, 0, 0, 15),
(121, 9, 0, 0, 0, 0, 0, 0, 1),
(122, 9, 0, 1, 0, 0, 0, 0, 2),
(123, 9, 0, 1, 0, 0, 0, 0, 3),
(124, 9, 0, 1, 0, 0, 0, 0, 4),
(125, 9, 0, 1, 0, 0, 0, 0, 5),
(126, 9, 0, 1, 0, 0, 0, 0, 6),
(127, 9, 0, 1, 0, 0, 0, 0, 7),
(128, 9, 0, 1, 0, 0, 0, 0, 8),
(129, 9, 0, 1, 0, 0, 0, 0, 9),
(130, 9, 0, 1, 0, 0, 0, 0, 10),
(131, 9, 0, 1, 0, 0, 0, 0, 11),
(132, 9, 0, 1, 0, 0, 0, 0, 12),
(133, 9, 0, 0, 0, 0, 4, 0, 13),
(134, 9, 0, 1, 0, 0, 0, 0, 14),
(135, 9, 0, 1, 0, 0, 0, 0, 15),
(136, 10, 0, 1, 0, 0, 0, 0, 1),
(137, 10, 0, 1, 0, 0, 0, 0, 2),
(138, 10, 0, 1, 0, 0, 0, 0, 3),
(139, 10, 0, 1, 0, 0, 0, 0, 4),
(140, 10, 0, 1, 0, 0, 0, 0, 5),
(141, 10, 0, 1, 0, 0, 0, 0, 6),
(142, 10, 0, 1, 0, 0, 0, 0, 7),
(143, 10, 0, 1, 0, 0, 0, 0, 8),
(144, 10, 0, 1, 0, 0, 0, 0, 9),
(145, 10, 0, 1, 0, 0, 0, 0, 10),
(146, 10, 0, 1, 0, 0, 0, 0, 11),
(147, 10, 0, 1, 0, 0, 0, 0, 12),
(148, 10, 0, 1, 0, 0, 0, 0, 13),
(149, 10, 0, 1, 0, 0, 0, 0, 14),
(150, 10, 0, 1, 0, 0, 0, 0, 15),
(151, 11, 0, 0, 0, 0, 0, 0, 1),
(152, 11, 0, 1, 0, 0, 0, 0, 2),
(153, 11, 0, 1, 0, 0, 0, 0, 3),
(154, 11, 0, 1, 0, 0, 0, 0, 4),
(155, 11, 0, 1, 0, 0, 0, 0, 5),
(156, 11, 0, 1, 0, 0, 0, 0, 6),
(157, 11, 0, 1, 0, 0, 0, 0, 7),
(158, 11, 0, 1, 0, 0, 0, 0, 8),
(159, 11, 0, 1, 0, 0, 0, 0, 9),
(160, 11, 0, 1, 0, 0, 0, 0, 10),
(161, 11, 0, 1, 0, 0, 0, 0, 11),
(162, 11, 0, 1, 0, 0, 0, 0, 12),
(163, 11, 0, 1, 0, 0, 0, 0, 13),
(164, 11, 0, 1, 0, 0, 0, 0, 14),
(165, 11, 0, 1, 0, 0, 0, 0, 15),
(166, 12, 0, 0, 0, 0, 0, 0, 1),
(167, 12, 0, 1, 0, 0, 0, 0, 2),
(168, 12, 0, 1, 0, 0, 0, 0, 3),
(169, 12, 0, 1, 0, 0, 0, 0, 4),
(170, 12, 0, 1, 0, 0, 0, 0, 5),
(171, 12, 0, 1, 0, 0, 0, 0, 6),
(172, 12, 0, 1, 0, 0, 0, 0, 7),
(173, 12, 0, 1, 0, 0, 0, 0, 8),
(174, 12, 0, 1, 0, 0, 0, 0, 9),
(175, 12, 0, 1, 0, 0, 0, 0, 10),
(176, 12, 0, 1, 0, 0, 0, 0, 11),
(177, 12, 0, 1, 0, 0, 0, 0, 12),
(178, 12, 0, 1, 0, 0, 0, 0, 13),
(179, 12, 0, 1, 0, 0, 0, 0, 14),
(180, 12, 0, 1, 0, 0, 0, 0, 15),
(181, 13, 0, 1, 0, 0, 0, 0, 1),
(182, 13, 0, 1, 0, 0, 0, 0, 2),
(183, 13, 0, 1, 0, 0, 0, 0, 3),
(184, 13, 0, 1, 0, 0, 0, 0, 4),
(185, 13, 0, 1, 0, 0, 0, 0, 5),
(186, 13, 0, 1, 0, 0, 0, 0, 6),
(187, 13, 0, 1, 0, 0, 0, 0, 7),
(188, 13, 0, 1, 0, 0, 0, 0, 8),
(189, 13, 0, 1, 0, 0, 0, 0, 9),
(190, 13, 0, 1, 0, 0, 0, 0, 10),
(191, 13, 0, 1, 0, 0, 0, 0, 11),
(192, 13, 0, 1, 0, 0, 0, 0, 12),
(193, 13, 0, 1, 0, 0, 0, 0, 13),
(194, 13, 0, 0, 0, 3, 0, 0, 14),
(195, 13, 0, 1, 0, 0, 0, 0, 15),
(196, 14, 0, 1, 0, 0, 0, 0, 1),
(197, 14, 0, 1, 0, 0, 0, 0, 2),
(198, 14, 0, 1, 0, 0, 0, 0, 3),
(199, 14, 0, 1, 0, 0, 0, 0, 4),
(200, 14, 0, 1, 0, 0, 0, 0, 5),
(201, 14, 0, 1, 0, 0, 0, 0, 6),
(202, 14, 0, 1, 0, 0, 0, 0, 7),
(203, 14, 0, 1, 0, 0, 0, 0, 8),
(204, 14, 0, 1, 0, 0, 0, 0, 9),
(205, 14, 0, 1, 0, 0, 0, 0, 10),
(206, 14, 0, 1, 0, 0, 0, 0, 11),
(207, 14, 0, 1, 0, 0, 0, 0, 12),
(208, 14, 0, 1, 0, 0, 0, 0, 13),
(209, 14, 0, 1, 0, 0, 0, 0, 14),
(210, 14, 0, 1, 0, 0, 0, 0, 15),
(211, 15, 0, 1, 0, 0, 0, 0, 1),
(212, 15, 0, 1, 0, 0, 0, 0, 2),
(213, 15, 0, 1, 0, 0, 0, 0, 3),
(214, 15, 0, 1, 0, 0, 0, 0, 4),
(215, 15, 0, 1, 0, 0, 0, 0, 5),
(216, 15, 0, 1, 0, 0, 0, 0, 6),
(217, 15, 0, 1, 0, 0, 0, 0, 7),
(218, 15, 0, 1, 0, 0, 0, 0, 8),
(219, 15, 0, 1, 0, 0, 0, 0, 9),
(220, 15, 0, 1, 0, 0, 0, 0, 10),
(221, 15, 0, 1, 0, 0, 0, 0, 11),
(222, 15, 0, 1, 0, 0, 0, 0, 12),
(223, 15, 0, 1, 0, 0, 0, 0, 13),
(224, 15, 0, 1, 0, 0, 0, 0, 14),
(225, 15, 0, 0, 0, 0, 0, 0, 15),
(226, 16, 0, 0, 0, 0, 0, 5, 1),
(227, 16, 0, 1, 0, 0, 0, 0, 2),
(228, 16, 0, 1, 0, 0, 0, 0, 3),
(229, 16, 0, 1, 0, 0, 0, 0, 4),
(230, 16, 0, 1, 0, 0, 0, 0, 5),
(231, 16, 0, 1, 0, 0, 0, 0, 6),
(232, 16, 0, 1, 0, 0, 0, 0, 7),
(233, 16, 0, 1, 0, 0, 0, 0, 8),
(234, 16, 0, 1, 0, 0, 0, 0, 9),
(235, 16, 0, 1, 0, 0, 0, 0, 10),
(236, 16, 0, 1, 0, 0, 0, 0, 11),
(237, 16, 0, 1, 0, 0, 0, 0, 12),
(238, 16, 0, 1, 0, 0, 0, 0, 13),
(239, 16, 0, 1, 0, 0, 0, 0, 14),
(240, 16, 0, 1, 0, 0, 0, 0, 15);

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
(40, 'M2b4T4eFCmiiWyj'),
(41, 'zquCEQJaj2vIcBx'),
(42, '3znju13Q0yVGZAj'),
(43, 'yav0g7ix5LTnhF6'),
(44, 'mieSZz1tFD5hw2l'),
(45, 'ANqFbcHmvN7m5Jd'),
(46, 'BF295fKOP5zYjmx'),
(47, '0Jq8CmKt3ncF8T0'),
(48, 'bKgVonWfna5qMH3'),
(49, 'XDCSbsa8LV7750R'),
(50, 'l0psZa9sfFw6Lcd'),
(51, 'oZOGI2R4URojTmQ'),
(52, 'Tot27rsvK1aOssG'),
(53, 'dtSzobzUXZD0i6A'),
(54, 'eeoEM9aFKmcQGuk'),
(55, 'vKwmgpoIn6wBp7G'),
(56, 'z3qF8Toh84gGT3z'),
(57, 'HSkLiZemT5FQHMu'),
(58, 'hmeJszVZDGQTK9I'),
(59, 'DwquWEPpbcLe79o'),
(60, 'dT8i5NowRnERcq4'),
(61, 'nRuyDRZiWVIMKma'),
(62, '0c8V27cU6uMVUcj'),
(63, 'bvWUTN9ipFNpsJO'),
(64, 'E5vVYwS6rkBOiDw'),
(65, 'IMjtj9HaHRe9QHs'),
(66, '4MnLrvFsFoA94uy'),
(67, 't9CpsFtb1R4dWpB'),
(68, '0JdbPR0018GIgZr'),
(69, '5PzyERwUgpSIyOD'),
(70, 'bUy19NGJfbaGOdI'),
(71, '8PfbTqU5uDVHMFz'),
(72, '5cSmi5Ej1Rh6ZQY'),
(73, 'ifu5nQjwNHQfjFk'),
(74, 'g5WZX2AiUSS1ePn'),
(75, 'STU9OBEX7gJR7Ob'),
(76, 'XMjyIWEH17cEOTT'),
(77, 'JfuQ4uCifzuIUWQ'),
(78, 'z6V3oXouiKtnUJ1'),
(79, 'OAW4aNHEsygMju9'),
(80, 'L0UYmhf3AzDpPPX'),
(81, 'W7HqEUAdhlgKPMt'),
(82, 'Wlx8UaAfDh0PHfJ'),
(83, 'LOQl0y7UW2fHNfj'),
(84, 'n6MTb2Clt40EdFA'),
(85, 'YSdPYIlahFPVE7J'),
(86, 'J47XjEC6i6nTvg9'),
(87, '6GzujatQI33M5yX'),
(88, '0l64yT1JEMuAUMZ'),
(89, 'OHPrDS8LppfxFGs'),
(90, 'tbnTTkB4NQWU5JJ'),
(91, 'pZydL9egACFFqoc'),
(92, 'qsXqRG0QYwnz0ZW'),
(93, 'Z2GFrbR7yekrL7V'),
(94, '0yyBok1ODmtLHBd'),
(95, 'IZxc1mRlFP5kxQ5'),
(96, 'HBRZACbBKoJG8Rz'),
(97, 'nyZsNTcooUxFjUG'),
(98, 'Qwsn7M17QZxKBzV'),
(99, 'xYw6yHo5EvIYWIz'),
(100, 'dOCmiICVC6wEEgt'),
(101, 'txESI9j0t33ojQE'),
(102, 'P54m6IfLuWFVd4a'),
(103, 'bIx89Pg5TavAaB3'),
(104, 'Tgic4U4H2cH71Mu'),
(105, 'DkLwKpWS5b8ehfk'),
(106, 'U3cNYKjOwCzEnwB'),
(107, 'XjCW20LNvn3b0jC'),
(108, 'CtZCTUqbNxKfcOd'),
(109, 'TDaV9XEREht8ohi'),
(110, 'xql2HP3P6rGtByn'),
(111, '3b361JvapBVGNFM'),
(112, 'FEmazxlPbkhOh6G'),
(113, '09GDCgH3vn8Ix5K'),
(114, 'ncXaU6qyZD3fIWQ'),
(115, 'VA12i1bBPM0Fu8J'),
(116, '0rzmVRqZVIpayQk'),
(117, 'o7Zrkr6cHW4Lq3d'),
(118, 'dd2sWF2b41gDe7J'),
(119, 'kbNFneidIsieI4i'),
(120, 'mVfPPZ60ByLeJgO'),
(121, 'SH1gQCUgJc7F7Yx'),
(122, 'WameKhnO9Z6WjlW'),
(123, 'vII6OorHwFQUtu3'),
(124, 'TWbOLBnP8U3ORkT'),
(125, 'tvAoaci1sZuwg1F'),
(126, 'hYFiZjwo0glgW3D'),
(127, '9RiqMfkkST8mznZ'),
(128, 'ESj1YMWWT6RQ2uE'),
(129, 'kVHhZxV36tBz7CO'),
(130, 'lzd57EuvoX5dG3C'),
(131, 'v9KZzvvwOhyVKUs'),
(132, 'xWhXw7CpDpCVcBd'),
(133, 'gjZKQyaPuyAar0r'),
(134, 'b20GClVPd5nqOw6'),
(135, '6oC3bRVwu4Fq8x4'),
(136, 'HTOBBDLtUM94xNK'),
(137, 'EYR5KBwHVknMg2c'),
(138, 'ISFxVEuSGLdURaj'),
(139, 'aV2l97xpgGYkN9i'),
(140, 'qGPoCrWsIUX1n4l'),
(141, 'DPelZ1hIwqcTHsk'),
(142, 'IqmDMSKF6fXsrk8'),
(143, 'qJ2XinNGAec4qCJ'),
(144, 'mUJDU2CWTY4M4Xl'),
(145, 'EI7WazpI9TTtGgo'),
(146, 'iq3q3VgIN2Sq4Sn'),
(147, 'OSqLQjCirwUlF4d'),
(148, '9QfuADr5Io80LZQ'),
(149, 'uqbx9uUCNosewp1'),
(150, 'T4RU3P7F3H1Io4K'),
(151, 'mqYCfgYTjSYb0yl'),
(152, 'Mx6JAYoKUBpye5c'),
(153, 'q0lwIpq4BsbznY7'),
(154, 'z26NzwQUybSX61Q'),
(155, 'B4jzlHYxXjlo3AB'),
(156, 'YwW1Izg0Tr2ExxJ'),
(157, '6RmnjUoY8ya6SEt'),
(158, 'NXzVrDvjS8QpttL'),
(159, '9K5EVsPU0PFN6wo'),
(160, 'NBxsGEwmbZmWwa7'),
(161, 'Wy46c2E4nJi62yD'),
(162, 'irmgwV0oMtzozMs'),
(163, 'BompXigs07zKY1v'),
(164, '5JrDTSzKnu58HZh'),
(165, 'VUfxLaLrgnQnurc'),
(166, 'IKE5lxrVZJ6JiZi'),
(167, 'pYisFVgGbIKJrLN'),
(168, 'OtadwvXBNdTF2yL'),
(169, '0f0BPfOysd59wRx'),
(170, 'NjO3guroIBeAH4e'),
(171, 'cnUPKvXvnlwDRUh'),
(172, 'q6cIeoe3IUbqctV'),
(173, 'ShL8OghPAPYvThx'),
(174, 'm3Ie651YIGdxbBG'),
(175, 'vEhs5T2leZtrzJ6'),
(176, 'yMDaA7NWlyInKQ1'),
(177, '9Jcb0XQVTw83O3c'),
(178, 'YcURd4oFqqwpFl4'),
(179, '1dtRDAZLM2ELZot'),
(180, 'rhLDm1yaIu4nmUX'),
(181, 'pFp0pA87TUgfF9q'),
(182, 'StmHBstAGGJPk96'),
(183, 'KlJ6zzfjXnQh7y6'),
(184, 'urzYhv1FCHFxW5j'),
(185, 'cx1Q7diSR8Q4724'),
(186, 'sSInY1Gnacbk2Pb'),
(187, 'c6Te4XDjKXBdjlW'),
(188, 'MpAJzTamw6SeYjc'),
(189, 'aFALkUsfEqdUuNH'),
(190, 'LgDSwsn2farap83'),
(191, 'YrF57kc1MlU5ASd'),
(192, '1Gmx8YVbtm6Ts6o'),
(193, 'OXDHBda93QebET1'),
(194, 'NlxeA0MuYwfpmTq'),
(195, 'ncD17Pa0PoopX6G'),
(196, 'IWQAwIkh4VHTDox'),
(197, 'LDwp8u8aikw99Ax'),
(198, 'ttjiEQUW2COVDtv'),
(199, 'G8zXFRzPxKbxAuO'),
(200, 'mWbsNxXrCImHevk'),
(201, 'YMeLcYEYdgPTm5W'),
(202, 'eQmtLJgg3TBdlY3'),
(203, 'zwUS17ygUCTFJSv'),
(204, 'oF2ClZDA5rLPErb'),
(205, 'k3Pm0OJfm2eXF1O'),
(206, 'E5ZkCjUisqCIKMc'),
(207, 'ANxiV9IhJ3AYJgV'),
(208, 'kzNGp7Z4KB2kvSr'),
(209, 'tHFdTe8zvXRKZgA'),
(210, 'rAyLmK4hPFs0Yv3'),
(211, 't8nUxhxkd34pz29'),
(212, '9fKDzpUM6Y7YBJP'),
(213, 'VJMusWX19J9fY50'),
(214, '83dk6AJpF2sI7PP'),
(215, 'whywHV7CuyUHPSX'),
(216, 'i9A1G7aRV5v7A4x'),
(217, 'SI0g6BRtq13CJTM'),
(218, 'kMioxV4RQtU091b'),
(219, 'rmlndjJNoZXEqkj'),
(220, 'XnThIZ8ogEP46Sd'),
(221, 'cpTuWqXyGcND7B8'),
(222, '4ukaDiSUIUvSvC6'),
(223, 'TBWiObzlh5ruKuL'),
(224, 'uaxM54jT7egg3ky'),
(225, 'TLesGymNcyUhpDs'),
(226, 'HFYU3yQ75Grd2WV'),
(227, 'REYUDPDfvdf4S9x'),
(228, 'lN2qOer6nBxOU05'),
(229, 'EccFNAengG7wdjn'),
(230, 'guZXGn8MXhdbiEa'),
(231, 'AI6IvLtcrcb31b7'),
(232, 'brDjHFdt88RPIGE'),
(233, 'nsmoEIOz14fbX6D'),
(234, 'qpwJYDfoElm99Qb'),
(235, 'gbZYFqdYb61w91p'),
(236, 'LyVPT7XtirZvTdT'),
(237, 'p14uBED5R7WswqW'),
(238, 'yUTiPyiIXWRefzv'),
(239, 'qYdS2yHRIgDCYIO'),
(240, 'VVu5lmdPyZt0vWK'),
(241, 'JKi00QzTKxIpf1q'),
(242, 'jSNNvIciP3D1Vkb'),
(243, 'c71rXqj3i5w0WUZ'),
(244, 'nd55b2nZZpqU4oX'),
(245, 'vbx6QvzgUnQkROB'),
(246, 'xRjcBGEFUEWpNvX'),
(247, '8OhyBsxbFUtWKRn'),
(248, 'VrOXQ4AYm7MIWdx'),
(249, 'GT5XjY8Mv8KV6Dm'),
(250, 'f1WCrt21yALJDUt'),
(251, 'yP0QYBW4G9tDUjX'),
(252, 'op29KHOOxK61RqW'),
(253, 'PnXqYKwNTHIPzMK'),
(254, 'HPKIMgmyfuMZNYu'),
(255, 'nx34hmseHpd6r7e'),
(256, 'DGypHg7JDF6REG6'),
(257, '5MHPHut8dqW4qC9'),
(258, 'F4FgnKmEzer67AP'),
(259, 'apAHWI6njEivP80'),
(260, 'zLvn8S5Y6Y2zG4P'),
(261, 'NAz1ykDX5d4CtKb'),
(262, 'SvRjthpYbPgwZ0c'),
(263, 'mYgruMeom22WuJP'),
(264, 'H0yJ22ri1RG3MIy'),
(265, 'bnFD4fHC0kqd3oS'),
(266, '3rLxqoxPswqwr0C'),
(267, 'rOGcSVqjoVB7sxu'),
(268, '49Z6NDxXfs7AOf3'),
(269, 'hyM3R16Q9baCez3'),
(270, 'f37GKbSPkD0LCWL'),
(271, 'CApph73rQEcPGIG'),
(272, 'aAu12bA9jcyFruQ'),
(273, 'XR1S5yoXERSfDcj'),
(274, 'vVy2qcv4SCMi7cL'),
(275, 'p1ReUU3vKVK5Ibu'),
(276, 'uGftIgrYy22BwOQ'),
(277, 'I8xYuqNImzkdWPV'),
(278, '04Cd4S9UrziLa9o'),
(279, 'acbM1js3r5aGXyB'),
(280, 'UWz6I6WU8iGzNhx'),
(281, 'ZBaodNc5HFSELHt'),
(282, 'UsiKnJ8ldAGdtt8'),
(283, 'iDDzBURXAesdtPv'),
(284, 'BCEuzAgSI8GUuem'),
(285, 'tDj2G2QirnG53AQ'),
(286, 'PNKpWy2K1ioGnu8'),
(287, 'zGflmPQdoDhZnvN'),
(288, 'rdAyw25N0e3Cgwn'),
(289, 'JU3TXuRetruxErk'),
(290, 'r7tjxihFjottgkY'),
(291, 'hWPItInol2dOEL6'),
(292, 'huUfC5jrfvFD9tI'),
(293, 'Z6n7XP86Z1Vvmiv'),
(294, 'yysyEqMBy8lVUR6'),
(295, '52uCKjkQatkaE57'),
(296, 'RXfqkH8ErSVv2Lh'),
(297, 'KqLN25KtgZLPJWk'),
(298, '0oXjHdMifDlkcGj'),
(299, 'f2CPuKbiryCV64k'),
(300, 'hTZ9u13FZW5SjqW'),
(301, 'pe6PTeJQGg8NoXy'),
(302, 'VsTGVcR3Hvsn859'),
(303, 'h54yyrY5wqmyCqf'),
(304, 'piGHw44yjNrG9Cb'),
(305, 'mzGYOg8b2BWTbYG'),
(306, 'KI23qFqPErPcTay'),
(307, 'UVXTOD27bVciuQ5'),
(308, 'WJZRFGfxOPsfeIG'),
(309, 'J6w6e1g4LZYn8Pc'),
(310, 'UeIGpFm6zBt2luJ'),
(311, 'Gt3jO8xBMiSBG2S'),
(312, 'LMDEeS0YryCsflR'),
(313, 'mJWSKJcRhInkloL'),
(314, 'Jmcjh2b5zIq2gqk'),
(315, 'YHOiCrWcwSK0uDT'),
(316, '0RLC5dY3JNXyi7p'),
(317, 'VH3B82yT2BKRntM'),
(318, 'x9zOkPAraUokbr8'),
(319, 'LJqgbzyhE4V9Ux4'),
(320, 'Go89n4GtNvaxwCd'),
(321, 'QONGX5Xv8wToSgz'),
(322, 'JoSp1afEkiqL2Tk'),
(323, '9mO94xy7SoYOzHC'),
(324, 'yrXo3AFwsAMeKy9'),
(325, 'JFG1cCFYGliOcjM'),
(326, 'cwnkIX3232sYfqj'),
(327, 'XRtblfuG4fEkRVA'),
(328, 'Kh4ZHPLSUnB6GdM'),
(329, 'yfu5SFiJken72uQ'),
(330, 'RKdbreXHUhnmtxW'),
(331, 'V27EpoDf0Bk6L2s'),
(332, 'Vywgi7q6ePvV6er'),
(333, 'Vo1Ay0aAk4En0yh'),
(334, 'REq8zZM4aoQlJVn'),
(335, 'tnoXTxMF8OmZbaz'),
(336, 'RiUC9BXmk8HRLRb'),
(337, '1j3snOzu2T0Z4Ra'),
(338, 'cexC2tXKteL6sXZ'),
(339, 'TTIdjGxvlerINiO'),
(340, 'sJe3ZRIZkjb0ChB'),
(341, 'VUdnUWuq3Ybv0dU'),
(342, 'a81HBf3XKCcFF7E'),
(343, '3ad8jnanSZHHK2m'),
(344, 'ASu4pWxPao0WNlo'),
(345, 'wcLeku5A8PCwsnC'),
(346, 'PVDTw6BBB3fWpF2'),
(347, 'v3qKTddddSItNX6'),
(348, 'DJEo40ObORZsqFi'),
(349, 'oPtw2jXD2yIpMIj'),
(350, 'UUN3vvyBjv0Cclo'),
(351, 'hpyJjo8oj4tD1wE'),
(352, 'fXaRnejgq0qaOmB'),
(353, 'k9DNbp9wSZYJkl9'),
(354, 'fGns3Sb8F4pHUJR'),
(355, 'e173VrMS8xCEX0k'),
(356, 'AnspfAo7cWGjlSv'),
(357, 'cKVrG8GnOjMB2zq'),
(358, 'sF2JRYsu5kHmxi2'),
(359, 'BqQupbAOVAydOsk'),
(360, 'NfxwHH84Ms7YRvs'),
(361, 'Ip9IEDfrHTYslV0'),
(362, 'ug8Bb4fmJHhbsfp'),
(363, 'c1uqlMEqmFuFmRJ'),
(364, 'K6N7RS5hIaK14GG'),
(365, '7OPNmxk6y4x1Xcn'),
(366, 'G7ZeGbnzmErH1yV'),
(367, 'esa2vzx2JlhljaE'),
(368, 'lgAABJEMszy8S2D'),
(369, 'axDcEnHf7k0kTR9'),
(370, 'VDKQ6tJ57BBrFzY'),
(371, 'oh4YFmnZlZM6Er1'),
(372, 'dh2BuByvbeY0VYI'),
(373, 'nwfXK4QimL0zSeR'),
(374, 'JHWtYAXeZXy5e3G'),
(375, '4lhvD9DvAngNudz'),
(376, 'ZArf9MaBJxxrg6T'),
(377, 'cV5rcd6JJreYigg'),
(378, '9uvhZmImwIqesC0'),
(379, 'pHErp9bvn1Yb6Af'),
(380, 'Cm7q2EoK8H4iI67'),
(381, '6oJV4PnYD7wVjU8'),
(382, '6wcgI0QaISrNX02'),
(383, 'IbDXEzp0LSzO5VB'),
(384, 'BeZ7sFIpmzuOJtb'),
(385, '2hDdmifGiHL5Yzo'),
(386, 'VgZvcpmdHj8IHrc'),
(387, '7u3Ljany8pMcTl8'),
(388, 'BoLjeeGSn1kidv6'),
(389, 'JN6EMqyE9HhJtXr'),
(390, 'y6x6iKod0fEOiAo'),
(391, 'cXnxThRpxv8QroA'),
(392, 'HwwFhasGVEokDET'),
(393, 'IEZWNEsz7ZsXFXW'),
(394, 'tknpnUJHyCK8Www'),
(395, '7QS7R77OBbGZQF4'),
(396, '5Djh2EY33C1mX1N'),
(397, 'nW1CmiikP4Cajn1'),
(398, 'xlZaNvwfAsm0mHp'),
(399, 'lflYOV1Fp4MO0QP'),
(400, 'zyDVtx0ItYXIWCz'),
(401, 'k90Nk1rDZOAa5PG'),
(402, '8MTpxCSoRoDHfLV'),
(403, 'AfUMJNb3UPHHATI'),
(404, 'lQzsBBxltrAWLvW'),
(405, 'nAA4gHqhn5e0OKm'),
(406, 'jU3z2ejH090McHX'),
(407, '7OzaHBHf1XI1Sl4'),
(408, 'OvsKozuLlMs4v6Q'),
(409, 'BlL3smUBMig5Ycv'),
(410, 'P4ys9d9xRQDCBam'),
(411, 'qbc80xwdT0I9sM6'),
(412, '0SZV4TgV1Ub6qlc'),
(413, 'U63hgwCnrrskZNL'),
(414, '6Ou6CnTdVae8LHl'),
(415, 'V7lNUd15L2hRbSK'),
(416, 'rRomjPgGPURvBMc'),
(417, 'zDUUcVkWYj5NQpG'),
(418, '3PKnBf7g28XbmiW'),
(419, 'DaqtMX7MjiMpdtQ'),
(420, 'F5MwQcPqKOfRZwk'),
(421, 'jwVizLslD7gJZk8'),
(422, 'Z2XGlksTbKWbzNz'),
(423, 'CAvil7hi2rtlzIW'),
(424, 'eVWryra6oveVxCV'),
(425, '9iQGpythXW32xfg'),
(426, 'KgMwpNSafrOgKdu'),
(427, 'i1PyFYiI8knDO45'),
(428, 'fBh3Z7Hbwyp3a6V'),
(429, 'lhmceizjAUKmWIO'),
(430, 'PkrbU3IhtUOn6VO'),
(431, 'vWMjdRFL7ACuB47'),
(432, '85xfdFQeZilor1R'),
(433, 'tBW0Dd77J7eUM9C'),
(434, 'kOe5f0RqLjl6ntA'),
(435, '1ZxWn0t05qFSu8e'),
(436, '43isONCtgPidZWs'),
(437, 'K9LQhUSQawCqbAH'),
(438, 'hdAlLRf3TAd1do9'),
(439, 'vMHEnlHJKDSminU'),
(440, 'yk77rGHMRvU7TqO'),
(441, 'zMHJsA4Trf3GgjK'),
(442, 'Wt3Ef86I2oPauw0'),
(443, 'Zqn7uYXNL5snArb'),
(444, 'NrninvSdToksG9t'),
(445, 'c4m2HLPzlgugM9V'),
(446, 'wFUNcYPR3N3OfVc'),
(447, 'P98Oy8C2NlMsmMR'),
(448, '2eBblaqUfbabwu6'),
(449, 'cCf3MM3m1sPC6UY');

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
(15, 'staff1', 'staf', 'staf', 'S93a/bmoEARENiFqM039VU7jcTvb5R3ZooeFEerqF6l1QPFFbmLhDb+pBiRO1bHBK0pMUccXoWE11mf1CnY/ng==', 'faculty', 0),
(16, 'faculty', 'faculyt', 'faculty', '1o4jpBDURsenH4OI4zHKD4kD6tHigoOMtd8WIEo+FFQ1dnhnRiZqZSdWYN5IUSGGFS/+kF4o3jeUTmGYIChwFg==', 'faculty', 19),
(18, 'admin', 'admin', 'admin', '1Buvq5e8BQUuuS+UZFabA3oKmEM8Q0WU7rSlV1z9qNAr88cHYpPhLJ4biO8QS02aGiv8IvJNMDVyTTIgxzlcAg==', 'admin', 0),
(19, 'dorimon5', 'diamond', 'diamond', 'y/Y00qyTgyoEQahMXwPUor8QE9yvlkj8Mwc1IdbFh1N4W5rLTWumcJysHiOCvRcPuhIy8X5sj9NZthkskthIlA==', 'faculty', 20),
(30, 'fdkjfadklj', 'kdfjlkj', 'fkdjklfaj', 'WOliBCDozgxeY69q2Z9wxtUQYxQcJ6aT9pY8pCj9FIwI1LWbL3dfwjN47+E7/IePTh31BXPtLOMkyORWNQUoGQ==', 'faculty', 10),
(31, 'test', 'test', 'test', 'Svo6httHB9NSPjkldiY7Jot2XcpcmsNNLUZqE8kZRGAp5XaYAl0k3ur1psCa49rseeD3CG0d7fF1dOQ5pJV2sg==', 'faculty', 9),
(32, 'academic', 'academic', 'academic', 'V1YfgyKjv2Rqy+dHlC+o+YZq7ouqB31a5Nnz6p+j4qCX20Q7PGtVvdTc+4ew9F1XCP9LmvgVGpLCf3lxht6Gog==', 'academic', 0),
(33, 'my', 'my', 'my', 'tGg5ofAKUsoqndjrjUCajrtPRoTeEl3snR9DCR73RP5L4+Idi5kj7RcA8qjtlJTH2F0nWR8gm0h9by/SxG+2kA==', 'faculty', 2),
(34, 'my1', 'my', 'my', 'sWPM6lJVH88s4Lx4q2qwrbGI64OoyS1Wd/8XqobsO+MJkW1MsGS0Sg9xot4ErOQueH8Qp08YKviRqM+PtQCUnQ==', 'academic', 0),
(35, 'fac', 'fac', 'fa', 'uMC8EakTc9YDJnKWT/3muJDP3+9Ryj08l2DCv+ryHX3g1OG4z6WatvZwPVEpk9LjNkKNeLWJIgmjBgIukcCv7g==', 'faculty', 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `instructional_answer`
--
ALTER TABLE `instructional_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
--
-- AUTO_INCREMENT for table `professional_answer`
--
ALTER TABLE `professional_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=450;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

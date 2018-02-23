-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2018 at 07:29 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_research3014`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(8) UNSIGNED NOT NULL,
  `user_fname` varchar(40) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(300) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_attempts` int(2) NOT NULL,
  `user_lastlog` datetime DEFAULT NULL,
  `user_level` int(2) DEFAULT NULL,
  `user_ip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_attempts`, `user_lastlog`, `user_level`, `user_ip`) VALUES
(1, 'Natalie', 'nmastracci', 'password', 'natalie@gmail.com', '2018-02-23 18:35:03', 3, '2018-02-23 11:52:42', NULL, '::1'),
(2, 'Teresa', 'tmastracci', 'password', 'teresa@gmail.com', '2018-02-22 15:08:19', 0, '2018-02-22 10:08:19', 3, '::1'),
(3, 'Tara', 'tmmastracci', 'password', 'tara@gmail.com', '2018-02-22 00:09:30', 0, '2018-02-21 19:09:30', 3, '::1'),
(4, 'Christina', 'cmastracci', 'password', 'christina@gmail.com', '2018-02-21 23:08:52', 0, NULL, 3, NULL),
(5, 'nat', 'mas', 'password', 'nat@gmail.com', '2018-02-21 23:38:57', 0, NULL, 3, NULL),
(6, 'nat', 'mas', 'password', 'nat@gmail.com', '2018-02-21 23:39:17', 0, NULL, 3, NULL),
(7, 'n', 'm', 'changeme', 'nm@gmail.com', '2018-02-23 17:51:22', 0, '2018-02-23 12:51:22', 3, '::1'),
(8, 'nam', 'nam', '', 'nam@fake.com', '2018-02-23 16:54:36', 0, NULL, 3, NULL),
(9, 'nam2', 'nam2', '', 'nam2@fake.com', '2018-02-23 17:30:28', 1, NULL, 3, NULL),
(10, 'nam2', 'nam2', '', 'nam2@fake.com', '2018-02-23 16:57:23', 0, NULL, 3, NULL),
(11, 'nam2', 'nam2', 'happilybreakingafar', 'nam2@fake.com', '2018-02-23 16:58:30', 0, NULL, 3, NULL),
(12, 'nam3', 'nam33', 'password', 'nam3@gmail.com', '2018-02-23 17:29:55', 0, '2018-02-23 12:26:19', 3, '::1'),
(14, 'natalie', 'newnat', '$2y$10$zmxbLIWOaqkgJtrNoRr43.VIdO3IDKBs8QqAtQyVFnT', 'nat@gmail.com', '2018-02-23 18:33:47', 3, NULL, 3, NULL),
(15, 'nmastracci', 'nmastracci', '$2y$10$Lm./kypXwHQ9aw2v1sUAPuBTgG226u0StZlzjeBGpI5', 'nat@gmail.com', '2018-02-23 18:36:01', 0, NULL, 3, NULL),
(16, 'someone', 'someone', '$2y$10$N/ffSvy6U1Lr8jNvQxP.Qu/FOqdTS2SdBiCewctCYni', 'someone@gmail.com', '2018-02-23 18:53:24', 1, NULL, 3, NULL),
(17, 'n', 'n', '$2y$10$MF9VpDmoirpCTQN/H67ZJ.fMdK1gay4S8AgOitQeWZP', 'n@ni.com', '2018-02-23 18:57:48', 2, NULL, 3, NULL),
(18, 't', 't', '$2y$10$1m0zXuH6.YOI55dA0i4S8.61vzsC9BpVacqjCZnUiOx', 'tara@gmail.com', '2018-02-23 18:57:54', 1, NULL, 3, NULL),
(19, 'c', 'c', 'password', 'c@gmsail.com', '2018-02-23 19:03:02', 2, '2018-02-23 14:02:29', 3, '::1'),
(20, 'ta', 'ta', '$2y$10$SUbryeyeSRJIpghWXQv1K.4uIU/EKsPY8tbjy7nJcrNfLJZx7Aq0y', 'ta@gmail.com', '2018-02-23 19:05:36', 0, '2018-02-23 14:05:36', 2, '::1'),
(21, 'namastra', 'namastra', '$2y$10$Tfro1Vy5QyjHXjmYVMNVXO1c24ufsbAwnhWN/LyekB53/DGL1KgvW', 'namastra@syr.edu', '2018-02-23 19:10:10', 0, '2018-02-23 14:10:10', 3, '::1'),
(22, 'Justin', 'justin', '$2y$10$tCab845b.qfKEO4s0A4tjuClfQO3GSoOu1NmJzvvav1em8nONXkCi', 'jbrunner@fanshaweonline.ca', '2018-02-23 19:21:38', 0, '2018-02-23 14:21:38', 2, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

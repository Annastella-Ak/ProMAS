-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2014 at 08:30 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `promas`
--
CREATE DATABASE IF NOT EXISTS `promas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `promas`;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `announcement_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `space_id` int(11) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`announcement_id`),
  UNIQUE KEY `announcement_id_UNIQUE` (`announcement_id`),
  KEY `project_id_2_idx` (`project_id`),
  KEY `space_id_2_idx` (`space_id`),
  KEY `creator_id_idx` (`creator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `shortform` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`college_id`),
  UNIQUE KEY `idcolleges_UNIQUE` (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `shortform` varchar(20) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `course_id_UNIQUE` (`course_id`),
  KEY `separtment_id_idx` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `shortform` varchar(10) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `department_id_UNIQUE` (`department_id`),
  KEY `college_id_idx` (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `resources` int(11) DEFAULT NULL,
  PRIMARY KEY (`event_id`),
  UNIQUE KEY `event_id_UNIQUE` (`event_id`),
  KEY `project_id_3_idx` (`project_id`),
  KEY `creator_id_2_idx` (`creator_id`),
  KEY `resource_id_idx` (`resources`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `group_id` (`group_id`),
  UNIQUE KEY `number_3` (`number`),
  UNIQUE KEY `project_id` (`project_id`),
  KEY `project_id_idx` (`project_id`),
  KEY `number` (`number`),
  KEY `number_2` (`number`),
  KEY `number_4` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `project_id`, `number`) VALUES
(1, NULL, 1),
(2, NULL, 2),
(3, NULL, 3),
(4, NULL, 4),
(5, NULL, 5),
(6, NULL, 6),
(7, NULL, 7),
(8, NULL, 8),
(9, NULL, 9),
(10, NULL, 10),
(11, NULL, 11),
(12, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `non_student_users`
--

CREATE TABLE IF NOT EXISTS `non_student_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `office_location` varchar(45) DEFAULT NULL,
  `title` varchar(10) DEFAULT NULL,
  `acc_status` int(1) NOT NULL DEFAULT '1',
  `type` varchar(14) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `reg_status` int(1) NOT NULL DEFAULT '0',
  `hashed_token` varchar(100) DEFAULT NULL,
  `token_expire` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  KEY `department_id_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `non_student_users`
--

INSERT INTO `non_student_users` (`user_id`, `first_name`, `last_name`, `username`, `password`, `email`, `phone_no`, `office_location`, `title`, `acc_status`, `type`, `department_id`, `reg_status`, `hashed_token`, `token_expire`) VALUES
(1, 'super_user', 'super_user', 'super@promas.com', '1b3231655cebb7a1f783eddf27d254ca', 'super@promas.com', NULL, NULL, NULL, 1, 'super', NULL, 1, '3924735f2dfaa07e49e6aa5179fb16d47553ce9f2f8e6f997f6c002e18f31626', '2014-04-11 19:59:59'),
(2, 'coordinator', 'coordinator', 'coord@promas.com', '332de775a36bbfcb140e1caa06299a8a', 'coord@promas.com', NULL, NULL, NULL, 0, 'coordinator', NULL, 1, '', NULL),
(3, 'administrator', 'administrator', 'admin@promas.com', '21232f297a57a5a743894a0e4a801fc3', 'admin@promas.com', NULL, NULL, NULL, 0, 'administrator', NULL, 1, '', NULL),
(4, 'supervisor', 'supervisor', 'spvs@promas.com', '841a5aca26a56ed5433ca02b99d776d7', 'spvs@promas.com', '24242', '', 'Prof', 1, 'supervisor', NULL, 1, '', NULL),
(5, 'devid', 'devid', 'devid@promas.com', '8c265dc4382bd9bc7eab5ee768585c65', '', NULL, NULL, NULL, 1, 'coordinator', NULL, 0, '', NULL),
(6, 'tesha', 'tesha', 'tesha@promas.com', '59a575b030d7360e1f89b2899d6ef59e', 'tesha@promas.com', '22222222', 'Mabibo', 'Mr', 1, 'administrator', NULL, 0, '', NULL),
(7, 'ella', 'ella', 'ella@promas.com', 'ec5e1e94c042dda33822701a45eb5e30', 'ella@promas.com', NULL, NULL, NULL, 1, 'supervisor', NULL, 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_space`
--

CREATE TABLE IF NOT EXISTS `project_space` (
  `space_id` int(11) NOT NULL AUTO_INCREMENT,
  `academic_year` varchar(15) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `coordinator_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`space_id`),
  UNIQUE KEY `space_id_UNIQUE` (`space_id`),
  KEY `coordinator_id_idx` (`coordinator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `resource_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`resource_id`),
  UNIQUE KEY `resource_id_UNIQUE` (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `space_course`
--

CREATE TABLE IF NOT EXISTS `space_course` (
  `space_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `space_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`space_course_id`),
  KEY `space_id` (`space_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `reg_status` int(1) NOT NULL DEFAULT '0',
  `acc_status` int(1) NOT NULL DEFAULT '1',
  `hashed_token` varchar(100) DEFAULT NULL,
  `token_expire` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_id_UNIQUE` (`student_id`),
  KEY `project_id_1_idx` (`project_id`),
  KEY `course_id_1_idx` (`course_id`),
  KEY `group_id_1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `registration_no`, `password`, `email`, `phone_no`, `project_id`, `course_id`, `group_id`, `reg_status`, `acc_status`, `hashed_token`, `token_expire`) VALUES
(73, 'Devid', 'Felix', '2011-04-00001', '263bce650e68ab4e23f28263760b9fa5', 'devid@promas.com', NULL, NULL, NULL, 1, 1, 1, '3f4406c0896042851f549a188bad421bbb5464343106b87a83ced1f56b6b2f4d', '0000-00-00 00:00:00'),
(75, 'Given', 'Minja', '2011-04-00002', 'f7a36bc80e39a0b0f23d4888a3ebeddf', 'given@promas.com', NULL, NULL, NULL, 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_projects`
--

CREATE TABLE IF NOT EXISTS `student_projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `space_id` int(11) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`project_id`),
  UNIQUE KEY `project_id_UNIQUE` (`project_id`),
  KEY `space_id_idx` (`space_id`),
  KEY `supervisor_id_idx` (`supervisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `creator_id` FOREIGN KEY (`creator_id`) REFERENCES `non_student_users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `project_id_2` FOREIGN KEY (`project_id`) REFERENCES `student_projects` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `space_id_2` FOREIGN KEY (`space_id`) REFERENCES `project_space` (`space_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `separtment_id` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `college_id` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `creator_id_2` FOREIGN KEY (`creator_id`) REFERENCES `non_student_users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `project_id_3` FOREIGN KEY (`project_id`) REFERENCES `student_projects` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `resource_id` FOREIGN KEY (`resources`) REFERENCES `resources` (`resource_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `project_id` FOREIGN KEY (`project_id`) REFERENCES `student_projects` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `non_student_users`
--
ALTER TABLE `non_student_users`
  ADD CONSTRAINT `department_id` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_space`
--
ALTER TABLE `project_space`
  ADD CONSTRAINT `coordinator_id` FOREIGN KEY (`coordinator_id`) REFERENCES `non_student_users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `space_course`
--
ALTER TABLE `space_course`
  ADD CONSTRAINT `space_course_ibfk_1` FOREIGN KEY (`space_id`) REFERENCES `project_space` (`space_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `space_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `course_id_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `group_id` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_id_1` FOREIGN KEY (`project_id`) REFERENCES `student_projects` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_projects`
--
ALTER TABLE `student_projects`
  ADD CONSTRAINT `space_id` FOREIGN KEY (`space_id`) REFERENCES `project_space` (`space_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supervisor_id` FOREIGN KEY (`supervisor_id`) REFERENCES `non_student_users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

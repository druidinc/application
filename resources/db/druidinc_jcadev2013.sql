-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2013 at 03:52 AM
-- Server version: 5.5.30
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `druidinc_jcadev2013`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `user_id`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin'),
(2, 2, 'j.doe', 'Jca2013!!'),
(3, 3, 'j.smith', 'Jca2013!!'),
(4, 4, 'gibsoncenia', 'Jca2013!!');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `added` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `removed_by` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `added`, `updated`, `removed`, `added_by`, `updated_by`, `removed_by`, `active`) VALUES
(1, 'Corporate Services', '<p>Corporate Services</p>', '2013-04-15 07:57:49', NULL, NULL, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_subcategory`
--

DROP TABLE IF EXISTS `category_subcategory`;
CREATE TABLE IF NOT EXISTS `category_subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category_subcategory`
--

INSERT INTO `category_subcategory` (`id`, `category_id`, `subcategory_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `address` text,
  `email` text NOT NULL,
  `phone` text,
  `company` text,
  `added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstname`, `lastname`, `address`, `email`, `phone`, `company`, `added`) VALUES
(1, 'Torreon', 'Gibson ', NULL, 'wajamo2x@yahoo.com', NULL, NULL, '2013-04-12 10:43:34'),
(2, 'Egee Boy', 'Gutierrez', NULL, 'email@email.com', NULL, NULL, '2013-04-12 10:48:22'),
(3, 'Gibson', 'TOrreon', NULL, 'wajamo2x@yahoo.com', NULL, NULL, '2013-04-15 11:11:58'),
(4, 'Egee Boy', 'Gutierrez', 'Address', 'egeeboygutierrez91@gmail.com', '1234567', 'Company', '2013-04-18 08:07:23'),
(5, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '123456', 'Company', '2013-04-18 08:10:16'),
(6, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '12345', 'Company', '2013-04-18 08:12:13'),
(7, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '234234', 'Comapn', '2013-04-18 08:14:10'),
(8, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '234234', 'Comapn', '2013-04-18 08:14:38'),
(9, 'Gibson', 'Torreon', NULL, 'wajamo2x@yahoo.com', NULL, NULL, '2013-04-21 02:43:50'),
(10, 'Daniel', 'Padilla', NULL, 'wajamo2x@yahoo.com', NULL, NULL, '2013-04-21 03:16:08'),
(11, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '1234567', 'Test com', '2013-04-22 08:25:42'),
(12, 'Janette', 'Clasen', NULL, 'jcabs2007@gmail.com', NULL, NULL, '2013-04-23 10:02:20'),
(13, 'Boyet', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '1352324', 'Sample Company', '2013-04-28 04:21:44'),
(14, 'Egee Boyet', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '765432', 'Company', '2013-04-28 04:24:47'),
(15, 'Egee Boyet', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '543', 'Company', '2013-04-28 04:25:28'),
(16, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '56432', 'cmopany', '2013-04-28 04:26:46'),
(17, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '56432', 'cmopany', '2013-04-28 04:29:44'),
(18, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '3454', 'r', '2013-04-28 04:30:59'),
(19, 'Egee Boyet', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '8765432', 'This si compay', '2013-04-28 04:35:59'),
(20, 'Egee Boyet', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '8765432', 'This si compay', '2013-04-28 04:41:09'),
(21, 'Egee Boyet', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druid-innovations.com', '67543', 'THis is company', '2013-04-28 04:42:05'),
(22, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druidinc.com', '87654321', 'Company', '2013-04-28 04:44:57'),
(23, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druidinc.com', '67543', 'aesg', '2013-04-28 04:49:31'),
(24, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druidinc.com', '65432', 'jhytgdf', '2013-04-28 04:59:58'),
(25, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druidinc.com', '7654', '5643', '2013-04-28 05:19:11'),
(26, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druidinc.com', '6754', 'fgh fh ', '2013-04-28 05:20:16'),
(27, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@druidinc.com', '56432', 'rthgf', '2013-04-28 05:33:00'),
(28, 'Egee Boy', 'Gutierrez', '250-C Daclan Compound, Tres de Abril Street, Punta Princesa', 'e.gutierrez@yahoo.com', '435345', 'sfsdf', '2013-04-28 05:40:58'),
(29, 'Deo', 'Jhon', NULL, 'wajamo2x@yahoo.com', NULL, NULL, '2013-05-02 08:44:38'),
(30, 'Doe', 'jhone', NULL, 'wajamo2x@yahoo.com', NULL, NULL, '2013-05-02 08:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `client_chat`
--

DROP TABLE IF EXISTS `client_chat`;
CREATE TABLE IF NOT EXISTS `client_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_user_session_id` int(11) NOT NULL,
  `message_from` int(11) NOT NULL,
  `message_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `from_type` int(11) NOT NULL,
  `added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client_user_session_id` (`client_user_session_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `client_chat`
--

INSERT INTO `client_chat` (`id`, `client_user_session_id`, `message_from`, `message_to`, `message`, `from_type`, `added`) VALUES
(1, 1, 1, 3, 'hey hi\n', 1, '2013-04-12 10:43:52'),
(2, 2, 2, 3, 'this is it', 1, '2013-04-12 10:48:32'),
(3, 2, 3, 2, 'hi how may i help you today?', 2, '2013-04-12 10:48:46'),
(4, 2, 2, 3, 'how can i help you?', 1, '2013-04-12 10:49:00'),
(5, 2, 2, 3, 'chat is nice...', 1, '2013-04-12 10:49:47'),
(6, 3, 3, 4, 'dsfsdfsdf\n', 1, '2013-04-15 11:12:05'),
(7, 3, 4, 3, 'dsfsdfsdf', 2, '2013-04-15 11:12:25'),
(8, 3, 4, 3, 'dsfsdfsdf', 2, '2013-04-15 11:12:37'),
(9, 3, 4, 3, 'dsfsdfsdf', 2, '2013-04-15 11:12:38'),
(10, 3, 4, 3, 'dsfsdfsdf', 2, '2013-04-15 11:12:38'),
(11, 3, 4, 3, 'dsfsdfsdfdsfsdf', 2, '2013-04-15 11:12:39'),
(12, 3, 4, 3, 'dsfsdfsdfdsfsdf', 2, '2013-04-15 11:12:39'),
(13, 3, 4, 3, 'dsfsdfsdfdsfsdf', 2, '2013-04-15 11:12:40'),
(14, 3, 3, 4, 'sdfdsf', 1, '2013-04-15 11:12:45'),
(15, 3, 3, 4, 'sdfdsf', 1, '2013-04-15 11:12:45'),
(16, 3, 3, 4, 'sdfdsf', 1, '2013-04-15 11:12:45'),
(17, 3, 4, 3, 'dsfdsf', 2, '2013-04-15 11:12:53'),
(18, 3, 3, 4, 'Who u THis is enquiry', 1, '2013-04-15 11:13:06'),
(19, 3, 4, 3, 'my name is gibson admin', 2, '2013-04-15 11:13:20'),
(20, 4, 9, 4, 'hey this is testing\n', 1, '2013-04-21 02:44:01'),
(21, 4, 4, 9, 'ahh okie this is reply', 2, '2013-04-21 02:44:35'),
(22, 4, 9, 4, 'can you give me your name please\n', 1, '2013-04-21 02:45:01'),
(23, 4, 4, 9, 'My name is Jhoncee', 2, '2013-04-21 02:45:18'),
(24, 4, 4, 9, 'what would you like to ask anyway \n', 2, '2013-04-21 02:46:23'),
(25, 4, 9, 4, 'I want to fuck your ass', 1, '2013-04-21 02:46:37'),
(26, 4, 4, 9, 'ohh.....that''s fucking bulshit', 2, '2013-04-21 02:46:59'),
(27, 4, 9, 4, 'yeah I know but I really want to kick your ass ', 1, '2013-04-21 02:47:35'),
(28, 4, 4, 9, 'I would like to fuck your ass too........', 2, '2013-04-21 02:47:56'),
(29, 4, 9, 4, 'hey', 1, '2013-04-21 02:48:11'),
(30, 5, 10, 4, 'what would you like to ask\n', 1, '2013-04-21 03:16:23'),
(31, 6, 12, 4, 'TESTING', 1, '2013-04-23 10:02:33'),
(32, 6, 12, 4, 'testing only... dili mam macenter ang page ani... please check, daplin kaayo', 1, '2013-04-23 10:06:51'),
(33, 7, 29, 4, 'hey\n', 1, '2013-05-02 08:45:07'),
(34, 8, 30, 4, 'ghgh\n', 1, '2013-05-02 08:52:03'),
(35, 8, 30, 4, '\n4544412', 1, '2013-05-02 08:54:16'),
(36, 8, 30, 4, '656565', 1, '2013-05-02 08:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `client_email_message`
--

DROP TABLE IF EXISTS `client_email_message`;
CREATE TABLE IF NOT EXISTS `client_email_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_subject_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `client_email_message`
--

INSERT INTO `client_email_message` (`id`, `client_subject_id`, `message`, `added`) VALUES
(1, 4, 'My Messge', '2013-04-18 08:07:23'),
(2, 5, 'Another message', '2013-04-18 08:10:16'),
(3, 6, 'test', '2013-04-18 08:12:13'),
(4, 7, 'one last message', '2013-04-18 08:14:10'),
(5, 8, 'one last message', '2013-04-18 08:14:38'),
(6, 11, 'This is my message', '2013-04-22 08:25:42'),
(7, 13, 'This is a sample message', '2013-04-28 04:21:44'),
(8, 14, 'This is a sample message.', '2013-04-28 04:24:47'),
(9, 15, 'This is a sample message', '2013-04-28 04:25:28'),
(10, 16, 'this is a sample message', '2013-04-28 04:26:46'),
(11, 17, 'this is a sample message', '2013-04-28 04:29:44'),
(12, 18, 'tsdfsdfds', '2013-04-28 04:30:59'),
(13, 19, 'This is a sample message', '2013-04-28 04:35:59'),
(14, 20, 'This is a sample message', '2013-04-28 04:41:09'),
(15, 21, 'This is the sample message i cretaed,', '2013-04-28 04:42:05'),
(16, 22, 'Sample message', '2013-04-28 04:44:57'),
(17, 23, 'gh dsgdsfg sdgf s', '2013-04-28 04:49:31'),
(18, 24, 'hjgfdsas dfghjhg ', '2013-04-28 04:59:58'),
(19, 25, 'hgf dg dg d', '2013-04-28 05:19:11'),
(20, 26, 'fh fgh ', '2013-04-28 05:20:16'),
(21, 27, ' vgeg gfg dfs', '2013-04-28 05:33:00'),
(22, 28, 'My Message using contacts', '2013-04-28 05:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `client_subject`
--

DROP TABLE IF EXISTS `client_subject`;
CREATE TABLE IF NOT EXISTS `client_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `inquiry_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `client_subject`
--

INSERT INTO `client_subject` (`id`, `subject`, `client_id`, `inquiry_type_id`) VALUES
(1, 'Enquiry', 1, 1),
(2, 'Test Chat', 2, 1),
(3, 'hehehee', 3, 1),
(4, 'Sage Products Inquiry', 4, 2),
(5, 'Sage Products Inquiry', 5, 2),
(6, 'Sage Products Inquiry', 6, 2),
(7, 'Sage Products Inquiry', 7, 2),
(8, 'Sage Products Inquiry', 8, 2),
(9, 'Testing', 9, 1),
(10, 'I don''t know', 10, 1),
(11, 'JCA User Inquiry', 11, 2),
(12, 'TESTING', 12, 1),
(13, 'Sage Products Inquiry', 13, 2),
(14, 'Sage Products Inquiry', 14, 2),
(15, 'Sage Products Inquiry', 15, 2),
(16, 'Sage Products Inquiry', 16, 2),
(17, 'Sage Products Inquiry', 17, 2),
(18, 'Sage Products Inquiry', 18, 2),
(19, 'Sage Products Inquiry', 19, 2),
(20, 'Sage Products Inquiry', 20, 2),
(21, 'Sage Products Inquiry', 21, 2),
(22, 'Sage Products Inquiry', 22, 2),
(23, 'Sage Products Inquiry', 23, 2),
(24, 'Sage Products Inquiry', 24, 2),
(25, 'Sage Products Inquiry', 25, 2),
(26, 'Sage Products Inquiry', 26, 2),
(27, 'Sage Products Inquiry', 27, 2),
(28, 'JCA User Inquiry', 28, 2),
(29, 'hey ', 29, 1),
(30, 'sldkfjdslf', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_user_session`
--

DROP TABLE IF EXISTS `client_user_session`;
CREATE TABLE IF NOT EXISTS `client_user_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `added` datetime NOT NULL,
  `removed` datetime DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `open` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `client_subject_id` (`client_subject_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `client_user_session`
--

INSERT INTO `client_user_session` (`id`, `client_subject_id`, `user_id`, `added`, `removed`, `active`, `open`) VALUES
(1, 1, 3, '2013-04-12 10:43:34', NULL, 1, 1),
(2, 2, 3, '2013-04-12 10:48:22', NULL, 0, 1),
(3, 3, 4, '2013-04-15 11:11:58', NULL, 0, 0),
(4, 9, 4, '2013-04-21 02:43:50', NULL, 0, 1),
(5, 10, 4, '2013-04-21 03:16:08', NULL, 0, 0),
(6, 12, 4, '2013-04-23 10:02:20', NULL, 1, 0),
(7, 29, 4, '2013-05-02 08:44:38', NULL, 0, 0),
(8, 30, 4, '2013-05-02 08:51:53', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_type`
--

DROP TABLE IF EXISTS `inquiry_type`;
CREATE TABLE IF NOT EXISTS `inquiry_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `inquiry_type`
--

INSERT INTO `inquiry_type` (`id`, `value`) VALUES
(1, 'Chat'),
(2, 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `jca_clients`
--

DROP TABLE IF EXISTS `jca_clients`;
CREATE TABLE IF NOT EXISTS `jca_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` text NOT NULL,
  `address` text NOT NULL,
  `contact_person` text,
  `position` text,
  `contact_number` text,
  `added` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `removed_by` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `jca_clients`
--

INSERT INTO `jca_clients` (`id`, `company_name`, `address`, `contact_person`, `position`, `contact_number`, `added`, `updated`, `removed`, `added_by`, `updated_by`, `removed_by`, `active`) VALUES
(1, 'MSK OXY TEC, INC', 'Balamban, Cebu', 'Ms. Maria Villa Regalado', 'President', '(63920) 2919612', '2013-04-23 08:23:39', NULL, NULL, 1, NULL, NULL, 1),
(2, 'ANIMANSYS, INC.', 'Lapu-Lapu City', 'Jose Benjamin Alvarez', 'President', '(63915) 2070515', '2013-04-23 08:24:08', NULL, NULL, 1, NULL, NULL, 1),
(3, 'CUSTOMER BENEFITS,INC.', 'Keppel Bldg., Cebu City', 'Fairlyne Labadan', 'Comptroller-Asia', '(6332) 32323877', '2013-04-23 08:24:27', NULL, NULL, 1, NULL, NULL, 1),
(4, 'DELMI ELECTRICAL SERVICES', 'Balamban, Cebu', 'Glen Reprton', 'General Manager', '(63917) 6320772', '2013-04-23 08:24:51', NULL, NULL, 1, NULL, NULL, 1),
(5, 'DAVID PRODGER & ASSOCIATES', 'Balamban, Cebu', 'Maricel Prodger', 'President', '(63917) 9365912', '2013-04-23 08:25:50', NULL, NULL, 1, NULL, NULL, 1),
(6, 'VILLA DE ECO CULTURE GARDEN', 'Lapu-Lapu City', 'Joseph Song', 'President', '(63906) 7285847', '2013-04-23 08:26:09', NULL, NULL, 1, NULL, NULL, 1),
(7, 'FARMACIA JAGOBIAO', 'Mandaue City', 'Albenson Aparta', 'President', '(63922) 8796736', '2013-04-23 08:26:52', NULL, NULL, 1, NULL, NULL, 1),
(8, 'CEBU EVERCAT, INC', 'Mepz 1, LapuLapu City', 'Celia Candole', 'President', '(63928) 4583818', '2013-04-23 08:27:21', NULL, NULL, 1, NULL, NULL, 1),
(9, '888TECH EXCHANGE,INC.', 'LapuLapu City', 'Renz Nograles', 'President', '(63922) 8661709', '2013-04-23 08:27:47', NULL, NULL, 1, NULL, NULL, 1),
(10, 'DURACAST, INC.', 'Talisay City, Cebu', 'Nalla Thomas', 'President', '(63922) 8819176', '2013-04-23 08:28:09', NULL, NULL, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_default`
--

DROP TABLE IF EXISTS `page_default`;
CREATE TABLE IF NOT EXISTS `page_default` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `page_default`
--

INSERT INTO `page_default` (`id`, `name`, `text`, `content`) VALUES
(1, 'home', 'Home', '{"content":[{"mission":"<p>Quality is our top priority<\\/p>","vision":"<p>Connecting to the world by providing excellent product and services<\\/p>"}]}'),
(2, 'about_us', 'About Us', '{"content":[{"content":"<p>JCABS strives to be the preeminent consulting, software implementer and service provider nationwide. We offer a variety &nbsp;of &nbsp;independent &nbsp;solutions &nbsp;to &nbsp;assist &nbsp;you &nbsp;achieve &nbsp;your &nbsp;business &nbsp;goals. Whether the objective is to correct past weaknesses or actualize future visions, we work to make you more effective and better prepared, thus laying a solid foundation for your business and growing your revenue. We achieve this through time-tested methodologies, sound technology, and excellence of thought based upon industry standards and years of real-world experience.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>JCABS is an independent business consulting company, providing business registration to (SEC, DTI, Mayors Permit and BIR), business process, bookkeeping, tax consultation, VISA processing and system solutions. We customize our offerings to fit our clients'' needs, thus providing a cost- effective solution with a personal touch. At JCABS, we believe that, in order to build a strong consulting service, we must possess expertise. Along with it, we must demonstrate the ability to analyze complex problems and collaborate with clients to foster a mutually beneficial relationship. Ultimately, we become a skilled and trusted advisor to our clients.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>JCABS consultants possess experience in a variety of industries and sectors. This ranges from manufacturing, trading\\/retailing, distribution, real estate and financial services.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>JCABS prides itself on its ability to deliver quality service in a timely manner. Our staff is experienced and possesses a wide range of technical expertise. Our consultants receive regular training in courses ranging from security methodologies to certifications or product- specific courses. This constant training coupled with the ability to think outside the box allows JCABS to remain a dynamic company. &nbsp;We are committed to providing our clients with optimal solutions. Listed below are several factors that differentiate JCABS from its competitors.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p><strong>Ou<\\/strong><strong>r Philosophy of Business Partnerships<\\/strong><\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>JCABS believes in the importance of establishing and fostering a relationship with its clients. We strive to implement solutions that will enable clients to succeed and maintain their competitive edge. Outsourcing is a common trend for businesses that require services outside of their core competency. In situations such as this, we welcome the opportunity to establish a business partnership.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p><strong>J<\\/strong><strong>C<\\/strong><strong>A<\\/strong><strong>BS Knowledge-base<\\/strong><\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>JCABS &nbsp;believes that providing &nbsp;effective &nbsp;solutions and education is important to the success of a company. &nbsp;As your skilled and trusted advisor, we welcome the collaboration of ideas.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We implement this commitment through user-training sessions and documentation.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>JCABS is also a strong believer in educating the community and participates in seminars for a broad spectrum of industries along with participating in mentorship programs with global training companies. We conduct workshops as well as individual training sessions tailored to address your individual or company needs.<\\/p>"}]}'),
(3, 'contact_us', 'Contact Us', '{"content":[{"company_name":"JCA Bookkeeping Services","address":"2\\/F, Unit 01, ESC Building, Kinalumsan St. Gun-ob (Infront of Petron Gas Station) Cebu - Lapu-Lapu City","email":"jcabookkeeping@yahoo.com","contacts":["(032) 3401730","+63-922-841-1949","+63-932-880-4892","+63-906-571-1364","+63-918-481-0292"]}]}');

-- --------------------------------------------------------

--
-- Table structure for table `page_generated`
--

DROP TABLE IF EXISTS `page_generated`;
CREATE TABLE IF NOT EXISTS `page_generated` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `content` text NOT NULL,
  `added` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `removed_by` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sage_implementations`
--

DROP TABLE IF EXISTS `sage_implementations`;
CREATE TABLE IF NOT EXISTS `sage_implementations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` int(11) DEFAULT '1',
  `location` text,
  `added` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `removed_by` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `sage_implementations`
--

INSERT INTO `sage_implementations` (`id`, `name`, `type`, `location`, `added`, `updated`, `removed`, `added_by`, `updated_by`, `removed_by`, `active`) VALUES
(1, 'Cafe de France ', 1, 'Lapulapu City', '2013-04-23 08:37:00', '2013-04-23 08:37:00', NULL, 1, 1, NULL, 1),
(2, 'Magellan’s Landing ', 2, 'Lapulapu City', '2013-04-23 08:38:00', NULL, NULL, 1, NULL, NULL, 1),
(3, 'Cebu Country Club ', 3, 'Cebu City', '2013-04-23 08:38:00', NULL, NULL, 1, NULL, NULL, 1),
(4, 'Malitbog Properties, Inc. ', 4, 'Basak, Lapulapu City', '2013-04-23 08:38:00', NULL, NULL, 1, NULL, NULL, 1),
(5, 'Choi City Seafood Restaurant - Banilad Town Center', 1, '', '2013-04-23 08:39:00', NULL, NULL, 1, NULL, NULL, 1),
(6, 'MEPZA Mixed Gases Corporation ', 5, 'Lapulapu City', '2013-04-23 08:40:00', NULL, NULL, 1, NULL, NULL, 1),
(7, 'Alcoy Agro-Industrial Corp. ', 2, 'Mabolo, Cebu City', '2013-04-23 08:40:00', NULL, NULL, 1, NULL, NULL, 1),
(8, 'Kinvara Corporation ', 6, 'Mandaue City', '2013-04-23 08:40:00', NULL, NULL, 1, NULL, NULL, 1),
(9, 'Jabon Enterprises ', 7, 'Marigondon, Lapulapu City', '2013-04-23 08:41:00', NULL, NULL, 1, NULL, NULL, 1),
(10, 'Gigaworkz Technologies ', 8, '', '2013-04-23 08:42:00', NULL, NULL, 1, NULL, NULL, 1),
(11, 'Mactan Medicaland Dental Services ', 9, 'Lapulapu City', '2013-04-23 08:42:00', NULL, NULL, 1, NULL, NULL, 1),
(12, 'Jelma Philippines, Inc.', 10, 'Mandaue City', '2013-04-23 08:42:00', NULL, NULL, 1, NULL, NULL, 1),
(13, 'Farmacia Caro ', 11, 'Bacolod City', '2013-04-23 08:43:00', NULL, NULL, 1, NULL, NULL, 1),
(14, 'Baire Med Trading ', 2, 'Iloiolo City', '2013-04-23 08:43:00', NULL, NULL, 1, NULL, NULL, 1),
(15, 'Delmi Electrical Services ', 12, 'Balamban, Cebu', '2013-04-23 08:43:00', NULL, NULL, 1, NULL, NULL, 1),
(16, 'Animansys, Inc ', 13, 'Cebu City', '2013-04-23 08:44:00', NULL, NULL, 1, NULL, NULL, 1),
(17, 'Mandaue Christian School', 14, 'Mandaue City', '2013-04-23 08:44:00', NULL, NULL, 1, NULL, NULL, 1),
(18, 'Customer Benefit Services, Inc ', 15, 'Cebu City', '2013-04-23 08:44:00', '2013-04-23 08:44:00', NULL, 1, 1, NULL, 1),
(19, 'Medallion Shipping Corporation ', 2, 'Cebu City', '2013-04-23 08:45:00', NULL, NULL, 1, NULL, NULL, 1),
(20, 'Coral Point Properties, Inc.', 2, 'Lapulapu City', '2013-04-23 08:45:00', NULL, NULL, 1, NULL, NULL, 1),
(21, 'Mactan Rock Industries, Inc.', 2, '', '2013-04-23 08:45:00', NULL, NULL, 1, NULL, NULL, 1),
(22, 'Harold Manufacturing', 2, '', '2013-04-23 08:45:00', NULL, NULL, 1, NULL, NULL, 1),
(23, 'Harolds Hotel', 2, '', '2013-04-23 08:45:00', NULL, NULL, 1, NULL, NULL, 1),
(24, 'Hotel Stella', 2, '', '2013-04-23 08:45:00', NULL, NULL, 1, NULL, NULL, 1),
(25, 'J Centre Mall', 2, '', '2013-04-23 08:46:00', NULL, NULL, 1, NULL, NULL, 1),
(26, 'Helpmate Incorporated', 2, '', '2013-04-23 08:46:00', NULL, NULL, 1, NULL, NULL, 1),
(27, 'PCM Express System ', 16, '', '2013-04-23 08:46:00', NULL, NULL, 1, NULL, NULL, 1),
(28, 'Kunstof UPVC Windows and Doors Corp', 2, '', '2013-04-23 08:46:00', NULL, NULL, 1, NULL, NULL, 1),
(29, 'Solar Systems Philippines', 2, '', '2013-04-23 08:46:00', NULL, NULL, 1, NULL, NULL, 1),
(30, 'Sunfresh Systems, Inc.', 2, '', '2013-04-23 08:46:00', NULL, NULL, 1, NULL, NULL, 1),
(31, 'Do it Marketing Phils., Inc.', 2, '', '2013-04-23 08:46:00', NULL, NULL, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sage_implementations_type`
--

DROP TABLE IF EXISTS `sage_implementations_type`;
CREATE TABLE IF NOT EXISTS `sage_implementations_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sage_implementations_type`
--

INSERT INTO `sage_implementations_type` (`id`, `name`) VALUES
(1, 'RESTAURANT'),
(2, 'OTHER'),
(3, 'GOLF COURSE'),
(4, 'MOOON CAFE'),
(5, 'INDUSTRIAL GASES'),
(6, 'MANUFACTURING AND DISTRIBUTION'),
(7, 'HARDWARE'),
(8, 'DISTRIBUTION AND INTERNET CAFE'),
(9, 'LABORATORY SERVICES'),
(10, 'WHITE FLOWER'),
(11, 'PHARMACY'),
(12, 'SERVICES'),
(13, 'CONSULTANCY'),
(14, 'SCHOOL'),
(15, 'CALL CENTER'),
(16, 'FORWARDING');

-- --------------------------------------------------------

--
-- Table structure for table `sage_products`
--

DROP TABLE IF EXISTS `sage_products`;
CREATE TABLE IF NOT EXISTS `sage_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `price` text NOT NULL,
  `brief_description` text NOT NULL,
  `description` text NOT NULL,
  `added` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `removed_by` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sage_products`
--

INSERT INTO `sage_products` (`id`, `name`, `image`, `price`, `brief_description`, `description`, `added`, `updated`, `removed`, `added_by`, `updated_by`, `removed_by`, `active`) VALUES
(1, 'Test Prod 1', 'sage_Test Prod 1_20130418075437_Chrysanthemum.jpg', '100', 'Test Brief Desc Prod 1', '<p>Test Desc Prod 1</p>', '2013-04-18 07:54:37', NULL, '2013-04-23 08:30:55', 1, NULL, 1, 0),
(2, 'Sage 50 Complete', 'sage_Sage 50 Complete_20130425091122_sage_50_complete.jpg', '48000', 'Easily Organize and Manage Your Business', '<p>Sage 50 Complete Accounting delivers the efficiency your business requires whether you''re after rapid expansion, steady growth, or maintaining stability. This comprehensive solution lets you easily manage customer contacts and sales, customize inventory and vendor management, automate purchasing and shipping, track jobs and projects, and more!</p>\r\n<ul>\r\n<li>Cinch the deal with a new customer by guaranteeing next day delivery - you know exactly what inventory is available</li>\r\n<li>Successfully launch a new product - you can easily identify and market to your most loyal and profitable customers</li>\r\n<li>Accurately determine the best course of action for reducing costs - you can create custom reports and "what if" scenarios using real-time data from Sage 50</li>\r\n<li>Become more efficient and productive while managing your business with customer, vendor, and inventory management centers, and screen-level security with multi-user options</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Sage 50 Complete Accounting Features:<br /></strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Accounting tools to get the job done</strong></p>\r\n<p>Sage 50 Complete Accounting is easy-to-use and comes with screen-level security and automatic accounting checks that give you confidence in the integrity of your information. Plus, it''s installed on computers that you control locally.</p>\r\n<ul>\r\n<li>Invoice customers by mail or email</li>\r\n<li>Monitor cash flow to meet current and upcoming obligations</li>\r\n<li>Pay bills online<sup>1</sup></li>\r\n<li>Powerful inventory and job management</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Maintain accountability with audit trail reporting</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Manage depreciation for up to 200 fixed assets</strong><br />Manage information on up to 200 fixed assets with Sage 50 Fixed Asssets<sup>2</sup>. Calculate and post periodic depreciation entries for each asset, choose from a complement of operational and tax-oriented reports and worksheets, and streamline fixed asset tax reporting.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Control job revenue and expense at the phase and cost code level</strong><br />Get greater insight and control on all your jobs or projects throughout each stage by tracking them to the phase and cost code level. Know what you are spending, how long it is taking, and estimate profits at each step along the way.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Business Status Center</strong></p>\r\n<ul>\r\n<li>A high-level view of your key business metrics</li>\r\n<li>Customize and sort the data to suit your needs</li>\r\n<li>Graph data, print it, create a PDF, or email it</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Vendor Management Center</strong></p>\r\n<ul>\r\n<li>View current orders</li>\r\n<li>Look up vendors by any contact information</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Customer Management Center</strong></p>\r\n<ul>\r\n<li>Access customer information, invoices, receipts, time tickets, and more</li>\r\n<li>Rank customers by gross profit</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Inventory and Services Management Center</strong></p>\r\n<ul>\r\n<li>Plan purchases</li>\r\n<li>Expand service offerings</li>\r\n<li>Customize and sort item and service data to suit your needs</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><a name="completebcare"></a></p>\r\n<p><strong>Improved Decision Making</strong></p>\r\n<p>Create customized reports for budgeting, cash flow management, and benchmarking, and use the insights found within your data to steer your small business wisely.</p>\r\n<ul>\r\n<li>Sage 50 Business Intelligence<sup>3</sup>&nbsp;custom reporting and analysis integrated with Sage 50 Complete Accounting using the familiar interface of Microsoft Excel and real-time Sage 50 data.</li>\r\n<li>More than 100 customizable reports and financial statements to help you make more informed decisions.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style="text-align: right;">Recognized partner of SAGESOFT SOLUTIONS, INC.</p>\r\n<p><strong>1 User&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Php. 25,000.00<br /></strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>3 Users&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Php. 36,000.00</strong></p>', '2013-04-18 07:56:35', '2013-05-02 06:08:51', NULL, 1, 1, NULL, 1),
(3, 'Sage 50 Premium', 'sage_Sage 50 Premium_20130425092217_sage_50_premium.png', '75000', 'Achieve More Every Day', '<p>f you manage multiple companies and budgets or need better insight into your numbers for strategic planning, then Sage 50 Premium Accounting 2013 is for you. It includes advanced features such as filtering on financial statements, progress billing, serialized inventory, employee compensation tracking, and much more. With Sage 50 Premium Accounting, you will:</p>\r\n<ul>\r\n<li>Gain control over inventory, job costs, and estimates and invoicing</li>\r\n<li>Know where your business stands with customized views of your most important business metrics</li>\r\n<li>Become more efficient and productive while managing your strategic growth</li>\r\n<li>Control budgets and departments</li>\r\n<li>Get insight with custom reporting</li>\r\n<li>Meet inventory and project needs</li>\r\n<li>Consolidate financials</li>\r\n<li>Get screen-level security with multi-user options</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong><br />Sage 50 Premium Accounting Features</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Save Time with Your Accounting System by Improving Efficiency</strong></p>\r\n<ul>\r\n<li><strong>Exclusive Premium Feature</strong>: Compare multiple budgets across four years</li>\r\n<li>Invoice customers by mail or email</li>\r\n<li>Automate purchase orders</li>\r\n<li>Pay bills electronically<sup>1</sup>&nbsp;or print paper checks</li>\r\n<li>Focus on key business metrics with at-a-glance dashboards</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Control and Secure Business Data</strong></p>\r\n<ul>\r\n<li><strong>Exclusive Premium Feature</strong>: Easily archive and restore company data</li>\r\n<li>Control user access at screen and module levels</li>\r\n<li>Check for common accounting errors with the Internal Accounting Review<sup>2</sup></li>\r\n<li>Use audit trails to track user activity and help deter fraud</li>\r\n<li>Enhanced security for prior period data</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Organize and Manage Your Business</strong></p>\r\n<ul>\r\n<li><strong>Exclusive Premium Feature</strong>: Use serialized inventory to track warranty claims and recalls</li>\r\n<li><strong>Exclusive Premium Feature</strong>: Enter and track job change orders</li>\r\n<li>Set email alerts to let you know what requires attention</li>\r\n<li>Run forecasting and benchmarking reports for long-range planning</li>\r\n<li>Get business insight and analysis with Crystal Reports&reg; 2008</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Easy Access to Your Business Information</strong><br /><strong>Business Status Center</strong></p>\r\n<ul>\r\n<li>Get a high-level view of your key business metrics</li>\r\n<li>Customize and sort the data to suit your needs</li>\r\n<li>Quickly drill down to transactions and contact details</li>\r\n<li>Graph data, print it, create a PDF or email it</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Vendor Management Center</strong></p>\r\n<ul>\r\n<li>View current orders</li>\r\n<li>Look up vendors by any contact information</li>\r\n<li>Customize and sort vendor data to suit your needs</li>\r\n<li>Quickly drill down to transactions and vendor details</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Customer Management Center</strong></p>\r\n<ul>\r\n<li>Access customer information, invoices, receipts, time tickets and more</li>\r\n<li>Rank customers by gross profit</li>\r\n<li>Customize and sort customer data to suit your needs</li>\r\n<li>Quickly drill down to transactions and customer details</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Inventory and Services Management Center</strong></p>\r\n<ul>\r\n<li>Track inventory</li>\r\n<li>Plan purchases</li>\r\n<li>Expand service offerings</li>\r\n<li>Customize and sort item and service data to suit your needs</li>\r\n<li>Quickly drill down to transactions and item/service details</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Business Data At-a-Glance</strong></p>\r\n<ul>\r\n<li>Sage 50 Business Intelligence<sup>3</sup>&nbsp;custom reporting and analysis integrated with Sage 50 Premium Accounting using the familiar interface of Microsoft Excel and real-time Sage 50 data.</li>\r\n<li>More than 125 customizable reports and financial statements to help you make more informed decisions</li>\r\n<li>Crystal Reports&reg; 2008</li>\r\n<li>Export most information to Excel<sup>4</sup>&nbsp;for further analysis</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Advanced Budgeting</strong></p>\r\n<ul>\r\n<li>Maintain multiple budgets with up to four years of data</li>\r\n<li>Compare budgets across years and against actual results</li>\r\n</ul>\r\n<p><a name="premiumbcare"></a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Cash Flow Management</strong></p>\r\n<ul>\r\n<li>Analyze and forecast payments and receipts</li>\r\n<li>Monitor cash to meet current and upcoming obligations</li>\r\n</ul>\r\n<p><img src="http://mseedsystems.com/assets/uploads/images/compare2(2).jpg" alt="" width="585" height="1200" /></p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: right;">Recognized partner of SAGESOFT SOLUTIONS, INC.</p>\r\n<p><strong>1 User&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp; Php. 31,000.00<br /></strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>3 Users&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp; Php. 53,000.00</strong></p>', '2013-04-25 09:22:17', '2013-05-02 06:09:08', NULL, 1, 1, NULL, 1),
(4, 'Sage 50 Quantum ', 'sage_Sage 50 Quantum _20130425092440_sage_quantum.png', '265500', 'Achieve More Every Day', '<p>Sage 50 Quantum Accounting 2013 is the perfect combination of affordability and functionality for your business.</p>\r\n<ul>\r\n<li>Reduce your total cost of ownership without sacrificing ERP functionality</li>\r\n<li>Don''t pay for functionality you don''t need or use</li>\r\n<li>Get industry-specific functionality for construction, distribution, manufacturing, or nonprofit</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Sage 50 Quantum Accounting helps you manage all aspects of your business, including accounting, customers, inventory, services, jobs and employees&mdash;all in one centralized system. Plus, we wrap Sage 50 Quantum in Sage Business Care, an auto-renewing service plan that provides unlimited access to support, automatically delivered upgrades, online training, and more.</p>\r\n<p><img src="http://mseedsystems.com/assets/uploads/images/compare2.jpg" alt="" width="585" height="1200" /></p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: right;">Recognized partner of SAGESOFT SOLUTIONS, INC.</p>\r\n<p>&nbsp;<strong>5 Users&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp; Php . 160,000.00</strong></p>', '2013-04-25 09:24:40', '2013-05-02 06:09:22', NULL, 1, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `added` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `removed_by` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `image`, `description`, `added`, `updated`, `removed`, `added_by`, `updated_by`, `removed_by`, `active`) VALUES
(1, 'Business Registration', '1_Business Registration_20130415075854_1_Business Registration_company-registration.png', '<ol>\r\n<li>\r\n<p class="Default"><strong>Securities And Exchange Commission (SEC)</strong></p>\r\n<ul>\r\n<li>\r\n<p class="Default"><strong>Corporate Name Reservation:</strong></p>\r\n<ol>\r\n<li>Company Name must be unique.</li>\r\n<li>Company Name must not include restricted words.</li>\r\n</ol></li>\r\n<li>\r\n<p class="Default"><strong>Shareholder or Director:</strong></p>\r\n<ol>\r\n<li>Minimum of five (5) Incorporators and maximum of fifteen (15).</li>\r\n<li>For Domestic Corporation, maximum of forty percent (40%) ownership of a foreign shareholder.</li>\r\n<li>Export Enterprise or more than forty percent (40%) ownership as foreign owned business where a business entity exports goods or services and sources of income from abroad exceeding sixty percent (60%) of its gross sales.</li>\r\n<li>Company name not include restricted words</li>\r\n</ol></li>\r\n<li>\r\n<p class="Default"><strong>Secretary:</strong></p>\r\n<ol>\r\n<li>A corporation must appoint a Corporate Secretary&nbsp; to ensure compliance with ongoing&nbsp; legal documents, yearly General Information Sheet in SEC and other related requirements).</li>\r\n<li>The Corporate Secretary must be available anytime to sign board resolution and other documents.</li>\r\n<li>The Corporate Secretary can be the shareholder or appointed third party individual or company.</li>\r\n</ol></li>\r\n<li>\r\n<p class="Default"><strong>Paid up Capital</strong></p>\r\n<ol>\r\n<li>At least 25% of Capital must be paid and subscribe.</li>\r\n</ol></li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p class="Default"><strong>Department of Trade and Industry (DTI)</strong></p>\r\n<ul>\r\n<li>\r\n<p class="Default"><strong>For Sole Propriertorship Registration of Business Name.</strong></p>\r\n<p class="Default">The formation of Sole Proprietorship&nbsp; is very easy and simple and name reservation certificate can be done in just one day.</p>\r\n</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p class="Default"><strong>Mayor&rsquo;s Permit</strong></p>\r\n</li>\r\n<li>\r\n<p class="Default"><strong>Bureau of Internal Revenue (BIR)</strong></p>\r\n</li>\r\n<li>\r\n<p class="Default"><strong>Other Local Government Unit (LGU) Registration</strong></p>\r\n<ul>\r\n<li><strong>Registration in Social Security System</strong></li>\r\n<li><strong>Registration in Philippine Health Insurance Group</strong></li>\r\n<li><strong>Registration in Home Development Mutula Fund</strong></li>\r\n<li><strong>Maritime Endoresment</strong></li>\r\n<li><strong>DOLE Endorsement</strong></li>\r\n<li><strong>PEZA Endoresment</strong></li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<p class="Default"><strong>To register</strong></p>\r\n<ol>\r\n<li>Download the Business Registration Form <a href="downloadBusinessRegistrationForm" target="_blank">here</a></li>\r\n<li>Fill in the form</li>\r\n<li>Email the form to <a href="mailto:jcabookkeeping@yahoo.com?Subject=Business%20Registration">jcabookkeeping@yahoo.com</a></li>\r\n</ol>', '2013-04-15 07:58:54', '2013-04-16 09:05:51', NULL, 1, NULL, NULL, 1),
(2, 'Peachtree (Sage 50)', '1_Peachtree (Sage 50)_20130502045608_SAGE 2014 NEW LOGO.jpg', '<ul>\r\n<li><a href="sageProducts">Products</a></li>\r\n<li><a href="sageImplementations">Implementations / Clients</a></li>\r\n</ul>', '2013-04-18 07:57:40', '2013-05-02 04:56:08', NULL, 1, NULL, NULL, 1),
(3, 'Visas & Work Permit', '1_Visas & Work Permit_20130423081606_1_Visas & Work Permit_VISA-WorkPermit.jpg', '<ul>\r\n<li>9g Work Visa</li>\r\n<li>AEP</li>\r\n<li>SVEG</li>\r\n<li>Quota Visa</li>\r\n<li>Investors Resident Visa</li>\r\n<li>Marriage Visa</li>\r\n</ul>', '2013-04-23 08:16:06', NULL, NULL, 1, NULL, NULL, 1),
(4, 'Taxes', '1_Taxes_20130423081727_1_Taxes_tax-relief-service.jpg', '<ul>\r\n<li>BIR Taxes</li>\r\n<li>Property Taxes</li>\r\n</ul>', '2013-04-23 08:17:27', NULL, NULL, 1, NULL, NULL, 1),
(5, 'Outsourced Services', '1_Outsourced Services_20130502074547_Logo invasion-jcabs copy.jpg', '<ul>\r\n<li>Internal Recording</li>\r\n<li>Payroll Services</li>\r\n<li>Others</li>\r\n</ul>', '2013-04-23 08:19:04', '2013-05-02 07:45:47', NULL, 1, NULL, NULL, 1),
(6, 'Virtual Offices', '1_Virtual Offices_20130423082137_8_Virtual Offices_20130423042040_1_Virtual Offices_vr1.jpg', '<p>Starting the business and need the business address without spending too much on the monthly rent? Or you want to test the business before signing a lease for an office space? Price start at P1,500.00 per month.</p>\r\n<p>We offer you the following services:</p>\r\n<ol>\r\n<li>An established company since 2007.</li>\r\n<li>A location very accessible at the heart of Lapu-Lapu City</li>\r\n<li>A spectacular saving on monthly rent.</li>\r\n<li>Courier and postage handling</li>\r\n<li>Business address for calling card and or business registration</li>\r\n<li>Message receiving and forwarding</li>\r\n<li>Use of phone and fax</li>\r\n<li>Permanent office table and file cabinet</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p><strong>Facilities and Services:</strong></p>\r\n<ul>\r\n<li>Receptionist to welcome your clients</li>\r\n<li>Office support services managed by capable officers</li>\r\n<li>Hi-speed internet (WIFI) access</li>\r\n<li>Conference room</li>\r\n<li>Free Parking</li>\r\n</ul>', '2013-04-23 08:21:37', NULL, NULL, 1, NULL, NULL, 1),
(7, 'Recognized partner of SAGESOFT SOLUTIONS, INC.', '1_Recognized partner of SAGESOFT SOLUTIONS, INC._20130502082019_Sage_ACCPAC_Software_with_swirls_copy.png', '<p>There is no data found</p>', '2013-05-02 07:36:18', '2013-05-02 08:20:19', NULL, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user_id',
  `name` text,
  `address` text,
  `contact` text,
  `email` text,
  `image` text,
  `user_type_id` int(11) NOT NULL,
  `added` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `removed_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `contact`, `email`, `image`, `user_type_id`, `added`, `updated`, `removed`, `added_by`, `updated_by`, `removed_by`) VALUES
(1, 'admin', NULL, NULL, NULL, NULL, 1, '2013-04-13 00:00:00', NULL, NULL, 1, NULL, NULL),
(2, 'Doe, John G.', NULL, NULL, NULL, 'user_20130412082956_Koala.jpg', 2, '2013-04-12 08:29:56', NULL, NULL, 1, NULL, NULL),
(3, 'Smith, John G.', NULL, NULL, NULL, '', 2, '2013-04-12 10:37:33', NULL, NULL, 1, NULL, NULL),
(4, 'Torreon, Gibson ', NULL, NULL, NULL, '', 2, '2013-04-15 11:10:56', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_login_status_id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `browser_type` text NOT NULL,
  `added` datetime NOT NULL,
  `removed` datetime DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `ancestor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_login_status_id` (`user_login_status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_id`, `user_login_status_id`, `ip_address`, `browser_type`, `added`, `removed`, `active`, `ancestor_id`) VALUES
(1, 1, 1, '', '', '2013-04-12 08:25:30', NULL, 1, NULL),
(2, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-12 10:38:17', '2013-04-13 02:24:09', 0, 1),
(3, 3, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-12 10:40:35', '2013-04-13 01:26:50', 0, NULL),
(4, 3, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-13 01:26:50', NULL, 1, 3),
(5, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-13 02:09:29', '2013-04-13 02:24:09', 0, NULL),
(6, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-13 02:24:09', NULL, 1, 1),
(7, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-14 08:50:56', NULL, 1, NULL),
(8, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 06:50:15', '2013-04-15 11:06:56', 0, NULL),
(9, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:06:07', '2013-04-15 11:06:56', 0, NULL),
(10, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:06:56', '2013-04-15 11:11:14', 0, 1),
(11, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:10:04', '2013-04-15 11:11:14', 0, NULL),
(12, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:11:14', '2013-05-02 07:01:40', 0, 1),
(13, 4, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:11:24', '2013-04-16 06:32:39', 0, NULL),
(14, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-16 09:05:11', '2013-05-02 07:01:40', 0, NULL),
(15, 4, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-16 06:32:37', '2013-04-16 06:32:39', 0, NULL),
(16, 4, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-16 06:32:39', NULL, 1, 13),
(17, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-17 01:40:18', '2013-05-02 07:01:40', 0, NULL),
(18, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-18 07:52:27', '2013-05-02 07:01:40', 0, NULL),
(19, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-18 10:18:18', '2013-05-02 07:01:40', 0, NULL),
(20, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-19 09:27:46', NULL, 1, NULL),
(21, 4, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-21 02:43:14', NULL, 1, NULL),
(22, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-22 06:22:22', '2013-05-02 07:01:40', 0, NULL),
(23, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-23 08:12:37', '2013-05-02 07:01:40', 0, NULL),
(24, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-23 08:44:03', '2013-04-23 08:45:42', 0, NULL),
(25, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-23 08:45:42', NULL, 1, 1),
(26, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-25 09:10:32', '2013-05-02 07:01:40', 0, NULL),
(27, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; XBLWP7; ZuneWP7)', '2013-04-25 10:40:11', NULL, 1, NULL),
(28, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-28 03:03:07', '2013-05-02 07:01:40', 0, NULL),
(29, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-05-01 10:40:16', NULL, 1, NULL),
(30, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-02 04:55:03', '2013-05-02 07:01:40', 0, NULL),
(31, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-02 07:01:40', NULL, 1, 1),
(32, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-02 07:18:48', NULL, 1, NULL),
(33, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-02 08:49:37', NULL, 1, NULL),
(34, 1, 1, 'jca.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-04 02:21:48', '2013-05-04 02:27:51', 0, NULL),
(35, 1, 2, 'jca.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-04 02:27:51', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login_status`
--

DROP TABLE IF EXISTS `user_login_status`;
CREATE TABLE IF NOT EXISTS `user_login_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_login_status`
--

INSERT INTO `user_login_status` (`id`, `name`) VALUES
(1, 'logged in'),
(2, 'logged out');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

DROP TABLE IF EXISTS `user_online`;
CREATE TABLE IF NOT EXISTS `user_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_online_status_id` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_online_status_id` (`user_online_status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`id`, `user_id`, `user_online_status_id`) VALUES
(1, 2, 2),
(2, 3, 2),
(3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_online_history`
--

DROP TABLE IF EXISTS `user_online_history`;
CREATE TABLE IF NOT EXISTS `user_online_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_online_status_id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `browser_type` text NOT NULL,
  `added` datetime NOT NULL,
  `removed` datetime DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `ancestor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_online_status_id` (`user_online_status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `user_online_history`
--

INSERT INTO `user_online_history` (`id`, `user_id`, `user_online_status_id`, `ip_address`, `browser_type`, `added`, `removed`, `active`, `ancestor_id`) VALUES
(1, 1, 1, '', '', '2013-04-12 08:25:30', NULL, 1, NULL),
(2, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-12 10:38:17', '2013-04-13 02:24:09', 0, 1),
(3, 3, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-12 10:40:35', '2013-04-13 01:26:50', 0, NULL),
(4, 3, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-13 01:26:50', NULL, 1, 3),
(5, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-13 02:09:29', '2013-04-13 02:24:09', 0, NULL),
(6, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-13 02:24:09', NULL, 1, 1),
(7, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-14 08:50:56', NULL, 1, NULL),
(8, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 06:50:15', '2013-04-15 11:06:56', 0, NULL),
(9, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:06:07', '2013-04-15 11:06:56', 0, NULL),
(10, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:06:56', '2013-04-15 11:11:14', 0, 1),
(11, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:10:04', '2013-04-15 11:11:14', 0, NULL),
(12, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:11:14', '2013-05-02 07:01:40', 0, 1),
(13, 4, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-15 11:11:24', '2013-04-16 06:32:39', 0, NULL),
(14, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-16 09:05:11', '2013-05-02 07:01:40', 0, NULL),
(15, 4, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-16 06:32:37', '2013-04-16 06:32:39', 0, NULL),
(16, 4, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-16 06:32:39', NULL, 1, 13),
(17, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-17 01:40:18', '2013-05-02 07:01:40', 0, NULL),
(18, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-18 07:52:27', '2013-05-02 07:01:40', 0, NULL),
(19, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-18 10:18:18', '2013-05-02 07:01:40', 0, NULL),
(20, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-19 09:27:46', NULL, 1, NULL),
(21, 4, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-21 02:43:14', NULL, 1, NULL),
(22, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-22 06:22:22', '2013-05-02 07:01:40', 0, NULL),
(23, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-23 08:12:37', '2013-05-02 07:01:40', 0, NULL),
(24, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-23 08:44:03', '2013-04-23 08:45:42', 0, NULL),
(25, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-04-23 08:45:42', NULL, 1, 1),
(26, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-25 09:10:32', '2013-05-02 07:01:40', 0, NULL),
(27, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; XBLWP7; ZuneWP7)', '2013-04-25 10:40:11', NULL, 1, NULL),
(28, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-04-28 03:03:07', '2013-05-02 07:01:40', 0, NULL),
(29, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', '2013-05-01 10:40:16', NULL, 1, NULL),
(30, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-02 04:55:03', '2013-05-02 07:01:40', 0, NULL),
(31, 1, 2, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-02 07:01:40', NULL, 1, 1),
(32, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-02 07:18:48', NULL, 1, NULL),
(33, 1, 1, 'jca-dev.druidinc.com', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-02 08:49:37', NULL, 1, NULL),
(34, 1, 1, 'jca.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-04 02:21:48', '2013-05-04 02:27:51', 0, NULL),
(35, 1, 2, 'jca.druidinc.com', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', '2013-05-04 02:27:51', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_online_status`
--

DROP TABLE IF EXISTS `user_online_status`;
CREATE TABLE IF NOT EXISTS `user_online_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_online_status`
--

INSERT INTO `user_online_status` (`id`, `name`) VALUES
(1, 'Online'),
(2, 'Offline'),
(3, 'Away'),
(4, 'Busy'),
(5, 'In A Conversation'),
(6, 'Idle');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'representative');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD CONSTRAINT `admin_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `client_chat`
--
ALTER TABLE `client_chat`
  ADD CONSTRAINT `client_chat_ibfk_1` FOREIGN KEY (`client_user_session_id`) REFERENCES `client_user_session` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_subject`
--
ALTER TABLE `client_subject`
  ADD CONSTRAINT `client_subject_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_user_session`
--
ALTER TABLE `client_user_session`
  ADD CONSTRAINT `client_user_session_ibfk_1` FOREIGN KEY (`client_subject_id`) REFERENCES `client_subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `client_user_session_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_11` FOREIGN KEY (`user_login_status_id`) REFERENCES `user_login_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_login_ibfk_12` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_online`
--
ALTER TABLE `user_online`
  ADD CONSTRAINT `user_online_ibfk_5` FOREIGN KEY (`user_online_status_id`) REFERENCES `user_online_status` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_online_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_online_history`
--
ALTER TABLE `user_online_history`
  ADD CONSTRAINT `user_online_history_ibfk_5` FOREIGN KEY (`user_online_status_id`) REFERENCES `user_online_status` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_online_history_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

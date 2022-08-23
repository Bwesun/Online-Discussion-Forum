-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 19, 2018 at 01:56 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- This Database was Design by MATUR INNOCENT JOSHUA
-- 
-- 
-- Database: `project`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`username`, `password`) VALUES 
('admin', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `announ`
-- 

CREATE TABLE `announ` (
  `id` int(4) NOT NULL auto_increment,
  `subject` varchar(30) NOT NULL,
  `announ` varchar(900) NOT NULL,
  `datetime` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `announ`
-- 

INSERT INTO `announ` (`id`, `subject`, `announ`, `datetime`) VALUES 
(1, 'ND2 PROJECT SUPERVISORS', 'This is to inform the ND2 2016 students of the Department that their various supervisors have been assigned to them. They are expected to go to the Departmental notice board to check their corresponding supervisors.', '2017-12-06 18:23:06'),
(2, 'IT DEFENCE', 'This is to inform the ND2 students who just completed their IT that their Defence is coming up as follows:\r\nDate: 30th Sep, 2017 to 2nd October, 2017.\r\nTime: 9AM Prompt', '2007-12-17 08:15:55');

-- --------------------------------------------------------

-- 
-- Table structure for table `forum_answer`
-- 

CREATE TABLE `forum_answer` (
  `question_id` int(4) NOT NULL default '0',
  `a_id` int(4) NOT NULL default '0',
  `a_name` varchar(65) NOT NULL default '',
  `a_email` varchar(65) NOT NULL,
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL,
  KEY `a_id` (`a_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `forum_answer`
-- 

INSERT INTO `forum_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES 
(1, 1, 'Innocent Matur', 'maturinnocent@gmail.com', 'Ask them why', '12/06/17 11:22:30'),
(1, 2, 'Asher victor', 'asher@gmail.com', 'I don''t think that all girls are stupid. Maybe some of them. But, please, do not generalize!', '13/06/17 19:27:46'),
(1, 3, 'Asher victor', 'asher@gmail.com', 'I don''t think that all girls are stupid. Maybe some of them. But, please, do not generalize!', '13/06/17 19:28:18'),
(1, 4, 'Innocent Matur', 'maturinnocent@gmail.com', 'Ask them why', '13/06/17 19:30:23'),
(3, 1, 'Stephen Bukar', 'stephen@gmail.com', 'IDE is an acronym that stands for Integrated Development Environment.', '16/06/17 15:37:31'),
(5, 1, 'Guba Matur', 'joshua@gmail.com', 'This is because it is the period at which changes begin to manifest in the girls', '21/06/17 20:06:55'),
(4, 1, 'MAtur Innocent', 'maturinnocent@gmail.com', 'Because their skin has the ability to duplicate texture of a particular object. Examples are: Prey, Predators, objects they are on, etc.', '25/06/17 16:46:33'),
(5, 2, 'Matur innocent', 'maturinnocent@gmail.com', 'This is because it is the period at which changes begin to manifest in the girls. This is because it is the period at which changes begin to manifest in the girls. This is because it is the period at which changes begin to manifest in the girls', '05/08/17 14:04:07'),
(4, 2, 'Matur Innocent', 'maturinnocent@gmail.com', 'Well... Ask the psychologists for a better answer.... Yishshshshshs....', '26/08/17 19:17:11'),
(6, 1, 'Matur innocent', 'maturinnocent@gmail.com', 'answer', '26/01/18 11:10:58'),
(7, 1, 'matur innocent', 'maturinnocent@gmail.com', 'Answer to be added.....', '07/02/18 09:46:08'),
(10, 1, 'Matur innocent', 'maturinnocent@gmail.com', 'Answer', '09/02/18 14:27:22'),
(6, 2, 'austin bitrus', 'austin@gmail.com', 'answer to the discussion', '14/02/18 14:10:51'),
(6, 3, 'ibrahim mikiya', 'ibrahim@gmail.com', 'answer of another person', '14/02/18 14:12:17'),
(12, 1, 'Matur innocent', 'maturinnocent@gmail.com', 'answer', '21/02/18 13:38:43'),
(13, 2, 'Stepen Bukar', 'stephen@gmail.com', 'Answer to be added or posted', '05/03/18 11:31:42'),
(13, 1, 'Stepen Bukar', 'stephen@gmail.com', 'Answer to be added or posted', '05/03/18 11:31:07'),
(12, 2, 'my name', 'maturinnocent@gmail.com', 'my answer', '22/02/18 14:08:26');

-- --------------------------------------------------------

-- 
-- Table structure for table `forum_question`
-- 

CREATE TABLE `forum_question` (
  `id` int(4) NOT NULL auto_increment,
  `topic` varchar(255) NOT NULL default '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL default '',
  `email` varchar(65) NOT NULL,
  `datetime` varchar(25) NOT NULL default '',
  `view` int(4) NOT NULL default '0',
  `reply` int(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `forum_question`
-- 

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES 
(7, 'Project Defence', 'All students who are to defend their project should be ready for their project defence on monday 5th March, 2017.', 'Matur Innocent', 'maturinnocent@gmail.com', '26/01/18 11:12:43', 16, 1),
(11, 'Project Defence coming up', 'Project defence is coming up. Get Ready!!!', 'Aliyu Stanley', 'aliyustanley@gmail.com', '21/02/18 12:26:25', 9, 0),
(12, 'Request for assignment''s Question', 'What was the assignment that was sent to the mails of students', 'name', 'ene@gmail.com', '21/02/18 01:15:39', 10, 2),
(13, 'Concept of Online forum', 'Please does anybpdy has an idea on an online forum? If yes, please share.', 'Umar Kabiru', 'umarkabir@gmail.com', '02/03/18 09:03:38', 3, 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `general_answer`
-- 

CREATE TABLE `general_answer` (
  `question_id` int(4) NOT NULL default '0',
  `a_id` int(4) NOT NULL default '0',
  `a_name` varchar(65) NOT NULL default '',
  `a_email` varchar(65) NOT NULL default '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL default '',
  KEY `a_id` (`a_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `general_answer`
-- 

INSERT INTO `general_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES 
(1, 1, 'namw', 'email@gmail.com', 'answr', '13/05/17 16:53:35'),
(1, 2, 'name', 'email@gmail.com', 'answer', '13/05/17 16:53:49'),
(2, 1, '', '', 'tr{border:1px solid red;\r\n	text-decoration:none;\r\n	border-color:#09eab8;\r\n	background-color:orange;\r\n	padding-top:15px;\r\n	padding-left:40px;\r\n	padding-bottom:15px;\r\n	padding-right:40px;\r\n	text-decoration:none;}\r\n	\r\ntable{border: 2px solid white;}', '20/05/17 08:17:54'),
(3, 1, 'Matur innocent', 'maturinnocent@gmail.com', 'Morphology is bla.. bla... blaaaa....', '21/06/17 20:02:05');

-- --------------------------------------------------------

-- 
-- Table structure for table `general_question`
-- 

CREATE TABLE `general_question` (
  `id` int(4) NOT NULL auto_increment,
  `topic` varchar(255) NOT NULL default '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL default '',
  `email` varchar(65) NOT NULL,
  `datetime` varchar(25) NOT NULL default '',
  `view` int(4) NOT NULL default '0',
  `reply` int(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `general_question`
-- 

INSERT INTO `general_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES 
(1, 'WHY MEN ARE GREATER THAN WOMEN', 'i dont know', 'name`', 'ene@gmail.com', '13/05/17 04:53:19', 15, 2),
(3, 'What is morphology', 'I really want to know the concise meaning of morphology.', 'Michael Ajala', 'michaelaja@gmail.com', '21/06/17 08:00:35', 12, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `loginstaffs`
-- 

CREATE TABLE `loginstaffs` (
  `id` int(4) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

-- 
-- Dumping data for table `loginstaffs`
-- 

INSERT INTO `loginstaffs` (`id`, `username`, `password`, `name`, `email`) VALUES 
(1, 'yakasai', '28897', 'Yakasai Ahmed', 'magaji82@gmail.com'),
(34, 'jemuel', '37754', 'Jemuel T. Bahago', 'jemuel@gmail.com'),
(35, 'agballa', '93168', 'Agballa O.', 'agballa@gmail.com'),
(36, 'martin', '29923', 'Martin Luther', 'martinluther@gmail.com'),
(37, 'amos', '33796', 'Amos John', 'amosjohn@yahoomail.com'),
(38, 'elkanah', '54940', 'Elkanah Ezekiel', 'ekaezekiel@hotmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `staff_answer`
-- 

CREATE TABLE `staff_answer` (
  `question_id` int(4) NOT NULL default '0',
  `a_id` int(4) NOT NULL default '0',
  `a_name` varchar(65) NOT NULL default '',
  `a_email` varchar(65) NOT NULL default '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL default '',
  KEY `a_id` (`a_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `staff_answer`
-- 

INSERT INTO `staff_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES 
(33, 1, 'Martin', 'manicure@gmail.com', 'What time and date is the bouquet?', '11/05/17 14:00:01'),
(1, 1, 'Martin', 'martinb@yahoo.com', 'Because they are the head of the family/hustlers.', '11/05/17 14:07:12'),
(1, 2, 'Name', 'email@gmail.com', 'answer', '13/05/17 07:05:32'),
(2, 1, 'Matur innocent', 'maturinnocent@gmail.com', 'This is because of the ray or beam of light projected by the monitor of the computer which affects the eye lens. Due to that, eye glasses where prescribed for them to wear in order to reduce lots of risk.', '13/05/17 07:09:44'),
(2, 2, 'name', 'email@gmail.com', 'answer\r\n', '13/05/17 07:10:01');

-- --------------------------------------------------------

-- 
-- Table structure for table `staff_question`
-- 

CREATE TABLE `staff_question` (
  `id` int(4) NOT NULL auto_increment,
  `topic` varchar(255) NOT NULL default '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL default '',
  `email` varchar(65) NOT NULL,
  `datetime` varchar(25) NOT NULL default '',
  `view` int(4) NOT NULL default '0',
  `reply` int(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `staff_question`
-- 

INSERT INTO `staff_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES 
(3, 'I want to know the differences between an ALGORITHM and PSEUDO-CODE', '', 'Martin Luther', 'matinluther@gmail.com', '25/05/17 08:56:52', 24, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `studrecord`
-- 

CREATE TABLE `studrecord` (
  `id` int(4) NOT NULL auto_increment,
  `surname` varchar(55) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `email` varchar(555) NOT NULL,
  `phone` varchar(55) default NULL,
  `regnum` varchar(55) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `regnum` (`regnum`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`,`phone`,`regnum`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- 
-- Dumping data for table `studrecord`
-- 

INSERT INTO `studrecord` (`id`, `surname`, `firstname`, `email`, `phone`, `regnum`, `username`, `password`) VALUES 
(25, 'Matur', 'Innocent', 'maturinnocent@gmail.com', '08144529253', 'NDCS/2015/240', 'innocent', 'innocent'),
(26, 'Bitrus', 'Keffas', 'keffasbit@gmail.com', '09034354659', 'NDCS/2015/251', 'keffas', '38035'),
(27, 'Aliyu', 'Hassan', 'aliyuhas@gmail.com', '08122442244', 'NDCS/2015/260', 'hassan', '06570');

-- --------------------------------------------------------

-- 
-- Table structure for table `suggest`
-- 

CREATE TABLE `suggest` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `regnum` varchar(30) NOT NULL,
  `email` varchar(65) NOT NULL,
  `suggest` longtext NOT NULL,
  `datetime` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `suggest`
-- 

INSERT INTO `suggest` (`id`, `name`, `regnum`, `email`, `suggest`, `datetime`) VALUES 
(1, 'Ibrahim James', 'NDCS/2015/201', 'james@gmail.com', 'I suggest that the department should try and implement the wireless network technology in the institute for the students to make use of it.', '21/06/17 07:50:08'),
(2, 'John Jatau', 'NDCS/2015/299', 'john@gmail.com', 'Online discussion forum should be developed for the department', '21/06/17 07:52:26'),
(3, 'Ruth Ibrahim', 'NDCS/2015/301', 'ruth@gmail.com', 'The department should implement the computerized computation of student''s result', '21/06/17 07:52:55'),
(4, 'Mature John', 'NDCS/2015/231', 'mature@gmail.com', 'I suggest that the institute should try and implement the computer based exam system.', '21/06/17 07:52:58'),
(5, 'Matur Innocent', 'NDCS/2015/240', 'maturinnocent@gmail.com', 'The department should get a portable compiler for the COBOL Programming Language...', '02/08/17 06:03:04'),
(6, 'Chigozie Onome', 'NDCS/2017/240', 'chigoziee@gmail.com', 'My own suggestion is basically on the wireless network of the E-library... More bandwidth should be added; for faster uplink and down link. Thanks', '09/08/17 09:15:48'),
(11, 'Mukhtar Sanisu', 'NDCS/2015/230', 'muktar22@gmail.com', 'The school should implemnet this project work of online discussion forum', '05/03/18 11:34:57');

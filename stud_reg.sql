-- phpMyAdmin SQL Dump
-- version 2.7.0-pl1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2023 at 07:24 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.1
--
-- Database: `student_details` 
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_personal`
--

CREATE TABLE `stud_personal` (
  `stu_name` varchar(255) collate latin1_general_ci NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_email` varchar(255) collate latin1_general_ci NOT NULL,
  `stu_gender` varchar(255) collate latin1_general_ci NOT NULL,
  `stu_roll` varchar(255) collate latin1_general_ci NOT NULL,
  `stu_dept` varchar(255) collate latin1_general_ci NOT NULL,
  `stu_batch` year(4) NOT NULL,
  `stu_academic` year(4) NOT NULL,
  `semester` varchar(255) collate latin1_general_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_name` varchar(255) collate latin1_general_ci NOT NULL,
  `event_desc` varchar(255) collate latin1_general_ci NOT NULL,
  `proof` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `stud_personal`
--

INSERT INTO `stud_personal` VALUES ('archana', '2023-09-15', 'archana@gmail.com', 'female', '20', 'bca', 2021, 2023, '', '0000-00-00', '', '', '');
INSERT INTO `stud_personal` VALUES ('amir', '2023-09-14', 'amir@gmail.com', 'female', '21suca23', 'bca', 2024, 2025, '', '0000-00-00', '', '', '');
INSERT INTO `stud_personal` VALUES ('archana', '2023-09-23', 'a@gmail.com', 'female', '2999', 'bca', 2023, 2023, '', '0000-00-00', '', '', '');
INSERT INTO `stud_personal` VALUES ('archana', '2023-09-23', 'a@gmail.com', 'female', '200', 'bca', 2023, 2023, '', '0000-00-00', '', '', '');
INSERT INTO `stud_personal` VALUES ('archana', '2023-09-23', 'a@gmail.com', 'female', '201', 'bca', 2023, 2023, '', '0000-00-00', '', '', '');
INSERT INTO `stud_personal` VALUES ('archana', '2023-09-23', 'a@gmail.com', 'female', '2056', 'bca', 2023, 2023, '', '0000-00-00', '', '', '');
INSERT INTO `stud_personal` VALUES ('aaa', '2023-09-14', 'aaa@gmail.com', 'female', '21suca21', 'bca', 2024, 2025, 'sem6', '2023-09-21', 'aaaaa', 'aaaaa', 'aaaaaaaaaaaaaaaaaaaa');

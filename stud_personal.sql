-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 10:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_personal`
--

CREATE TABLE `stud_personal` (
  `stu_name` varchar(255) NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_gender` varchar(255) NOT NULL,
  `stu_roll` varchar(255) NOT NULL,
  `stu_dept` varchar(255) NOT NULL,
  `stu_batch` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `stud_personal`
--

INSERT INTO `stud_personal` (`stu_name`, `stu_dob`, `stu_email`, `stu_gender`, `stu_roll`, `stu_dept`, `stu_batch`) VALUES
('Abirami', '2003-11-05', 'abi@gmail.com', 'female', '21suca22', 'it', '2022'),
('Harini Murugan', '2004-05-24', 'harini@gmail.com', 'female', '21suca33', 'bca', '2022'),
('archana', '2003-08-31', 'archana@gmail.com', 'female', '21suca27', 'bca', '2022'),
('Vinodhini', '2003-12-05', 'vino@gmail.com', 'female', '21suca52', 'it', '2022'),
('amirthayeeni', '2003-11-05', '21suca23@gmail.com', 'female', '21suca23', 'bca', '2022'),
('solaipriya', '2003-09-10', 'priya@gmail.com', 'female', '21suca48', 'bca', '2022'),
('Sandhiya', '2004-12-19', 'sandhiya@gmail.com', 'female', '21suca46', 'it', '2022'),
('Bhavatharani', '2002-08-29', 'bhava@gmail.com', 'female', '21suca28', 'bca', '2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_personal`
--
ALTER TABLE `stud_personal`
  ADD PRIMARY KEY (`stu_roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

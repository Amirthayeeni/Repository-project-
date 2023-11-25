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
-- Table structure for table `event_registeration`
--

CREATE TABLE `event_registeration` (
  `stu_roll` varchar(255) NOT NULL,
  `academic_year` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_desc` varchar(255) NOT NULL,
  `event_proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_registeration`
--

INSERT INTO `event_registeration` (`stu_roll`, `academic_year`, `semester`, `event_date`, `event_name`, `event_desc`, `event_proof`) VALUES
('21suca27', 2023, 'sem5', '2023-10-14', 'club activities', 'conduct by  department (1 price)', 'clubactivities.txt'),
('21suca27', 2024, 'sem6', '2024-11-28', 'sport Activities', ' conduct by college (1 prize)\r\n                        ', '21suca27(Sport).txt'),
('21suca23', 2024, 'sem5', '2024-10-24', 'Intercollege meet', 'organise by xxx college', '21suca23(intercollegemeet).txt'),
('21suca52', 2022, 'sem2', '2022-10-18', 'Club participate', 'Rotract club            ', 'Rotract(21suca52).docx'),
('21suca52', 2022, 'sem2', '2022-10-18', 'Sport Activities', 'organise by college (1 prize)           ', 'sports.docx'),
('21suca33', 2022, 'sem4', '2022-11-22', 'Sport Activities', 'organise by department (1 prize)           ', 'sports.docx');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

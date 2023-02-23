-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 11:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_doctor`
--

CREATE TABLE `all_doctor` (
  `Doctor_Id` varchar(20) NOT NULL DEFAULT '',
  `Firstname` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_doctor`
--

INSERT INTO `all_doctor` (`Doctor_Id`, `Firstname`, `Password`) VALUES
('user_Id', 'Adjei_Patrick', '$2y$10$ywYlMYZAnfbcVTR8HqZSw.g'),
('user_Id', 'Adjei_Patrick', '$2y$10$Sn2gI5sqQzW8upaEL7Wfuey'),
('user_Id', 'Adjei_', '$2y$10$FHct2YSbsGwxLOIKY6VovOu'),
('user_Id', 'Manu_Peter', '$2y$10$5leTXZKhAMex0eYzIdt9Tez'),
('D785456', 'Manu_Dav', '$2y$10$Fo9tWs2lKNH16B/Pr4gYdOR');

-- --------------------------------------------------------

--
-- Table structure for table `all_nurses`
--

CREATE TABLE `all_nurses` (
  `Nurse_Id` varchar(30) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_Id` varchar(20) NOT NULL,
  `Firstname` varchar(30) DEFAULT NULL,
  `Lastname` varchar(30) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Room_office` int(11) DEFAULT NULL,
  `Specialization_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_Id`, `Firstname`, `Lastname`, `Gender`, `Room_office`, `Specialization_Id`) VALUES
('D123789', 'Aryee-Boi', 'Jeannette', 'F', 581, 202327),
('D129456', 'Dekor', 'Conrad', 'M', 145, 202335),
('D456123', 'Adjei', 'Patrick', 'M', 457, 222729),
('D456789', 'Ati', 'Emmanuel', 'M', 360, 202531),
('D512496', 'Marfo', 'Albert', 'M', 144, 202523),
('D781256', 'Andor', 'Matilda', 'F', 201, 222533),
('D783156', 'Delsol_Gyan', 'Desrie', 'F', 562, 222727),
('D789123', 'Duah', 'Amoako', 'F', 216, 202329),
('D789456', 'Manu', 'Peter', 'M', 167, 202731),
('D899456', 'Osei-Yeboah', 'Christina', 'F', 541, 202923),
('D899001', 'Daniel', 'Dankwa', NULL, 122, NULL),
('D899001', 'Daniel', 'Dankwa', NULL, 122, NULL),
('D899001', 'Daniel', 'Dankwa', NULL, 122, NULL),
('D899001', 'Daniel', 'Dankwa', NULL, 122, NULL),
('D557001', 'Edwin', 'Awariyah', NULL, 203, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `Fname` varchar(30) DEFAULT NULL,
  `Lname` varchar(30) DEFAULT NULL,
  `Nurse_Id` varchar(20) NOT NULL,
  `Tel_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`Fname`, `Lname`, `Nurse_Id`, `Tel_number`) VALUES
('Naana Akyaa', 'Asante', 'N560-01', 505236589),
('Lesline', 'Nyankson', 'N560-11', 267236589),
('Francis', 'Boateng-Agyenim', 'N560-21', 507236661),
('Felix', 'Nyante', 'N560-31', 201325874),
('Perpetual', 'Ofori-Ampofo', 'N560-33', 20154784),
('Monica', 'Afra Nkrumah', 'N560-51', 502771331);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_nurses`
--
ALTER TABLE `all_nurses`
  ADD UNIQUE KEY `Nurse_Id` (`Nurse_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

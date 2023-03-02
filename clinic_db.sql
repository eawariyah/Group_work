-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 12:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
('D785456', 'Manu_Dav', '$2y$10$Fo9tWs2lKNH16B/Pr4gYdOR'),
('12345', 'Micheal', '$2y$10$rLEsc30WcM6D43bHDWej5OV');

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
-- Table structure for table `doctors_appointments`
--

CREATE TABLE `doctors_appointments` (
  `assigneeID` int(11) NOT NULL,
  `doctorID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `description` varchar(255) NOT NULL,
  `appointment_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emplyee_id` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `emp_pass` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `emp_role` varchar(1) NOT NULL,
  `Specialization` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emplyee_id`, `FirstName`, `LastName`, `Email`, `emp_pass`, `PhoneNumber`, `Gender`, `emp_role`, `Specialization`) VALUES
(11, 'Ernestina', 'Torto', 'ernest.torto@clinic.com', '$2y$10$30Stq58GfvbtAJqHdnR4LeoPfRVyb91RRs4O6HiMuCB65.3obYsd.', '1234567', 'female', 'd', 'Immunology'),
(12, 'Dorcas', 'Torto', 'dorcas.adjei@clinic.com', '$2y$10$Ubo.aDMXYN7Hds3HaZt7f.AS4lhKHToU8hhw0w93Gz8yW1ONY8Z7S', '23456789098755', 'female', 'a', NULL),
(13, 'Dorcas', 'Torto', 'dorcas.adjei@clinic.com', '$2y$10$coli8TDswx7L6OKHlimFguVkYpfp0Vt0ihakPogwoM6B6Ixgt2zKC', '23456789098755', 'female', 'a', NULL),
(14, 'Ernestina', 'Adjei', 'ernestina.adjei@clinic.com', '$2y$10$lZABX38CLz7xGCVpVdrWGOk3Er.94e.7ac8BDP9FLG4mNIm8LaA5a', '23456789098755', 'female', 'a', 'none'),
(21, 'Dorcas', 'Jean', 'dorcas.jean@clinix.com', '$2y$10$XW/FUw8JYWSU7wc51WuuI.vzR91E43FbHtUCmYvwrexB5SUBC2wPq', '123456789876', 'female', 'n', 'none'),
(22, 'Ernestina', 'Jean', 'tina.jean@clinic.com', '$2y$10$29DMpC9FV/uSlKTU4PlRY.P49QHKV0ou41wKHS8adwS0jER/Oymv.', '23454323456', 'female', 'n', 'none'),
(23, 'Averch', 'Jean', 'averch.jean@clinic.com', '$2y$10$s1jrd.Uzd66VGK4sQY.8LuqKNLN2wypyAMYBBYZpZKu/vTr74y/qq', '1234567', 'male', 'n', 'none'),
(24, 'Edwin', 'Awariyah', 'edwin.awariyah@clinic.com', '$2y$10$bUqZ6XfpcCoFSe6cdBH9Aud6keyMa/dZQ7joG3NsShiPtXM13.R5O', '2345678987654', 'male', 'a', 'none'),
(25, 'Nice', 'Cailie', 'nice.cailie@clinic.com', '$2y$10$Q5xrf0C8yN6L5YI9RvxF4eJjcyzByVJAbhwsu7jquYs4pIbbOXpxi', '1234567', 'female', 'n', 'none'),
(26, 'Ella', 'Addy', 'ella.addy@clinic.com', '$2y$10$/G8HHT/Uy2cdt6jDCKouWuxChs1xaSIEt182GdNlkZU.adcbolkbi', '23456789134', 'female', 'n', 'none');

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

-- --------------------------------------------------------

--
-- Table structure for table `nurses_tasks`
--

CREATE TABLE `nurses_tasks` (
  `assigneeID` int(11) NOT NULL,
  `nursesID` int(11) NOT NULL,
  `task_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `description` varchar(255) NOT NULL,
  `task_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Patient_Id` int(11) NOT NULL,
  `Firstname` varchar(30) DEFAULT NULL,
  `Lastname` varchar(30) DEFAULT NULL,
  `Gender` varchar(6) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Height` decimal(10,0) DEFAULT NULL,
  `Patient_weight` decimal(10,0) NOT NULL,
  `Ethnicity` varchar(50) DEFAULT NULL,
  `BloodGroup` char(3) NOT NULL,
  `MedicalHistory` varchar(10000) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_pass`, `user_role`, `user_status`) VALUES
(1, 'davesam', '$2y$10$wSKcAzj.BTJPWWvk2WHt1eZAhbN5u3VGhZVEQffmFp4SExJ1xQ3K.', 1, 1),
(3, 'samdave', '$2y$10$7J4TB.GEoy3vNkAVAqVYs.wgPKu1zsdaQ1.vivCID8LkR0eNgpSqS', 2, 1),
(4, 'olduser', '$2y$10$3JIDyaax5TsiYLdKfRJQIO.c6waaraufi7knuJvUlptcKNKurQLpS', 2, 2),
(9, 'ernestt@gmail.com', '$2y$10$zYjHSNeNDBQOidCFpDomXeIFM6ltfyVkHOuZodEKnMjq0CPPcITcS', 1, 1),
(10, 'doc@clinc.com', '$2y$10$g8N7QCEveShWnfb74wG9KuHjW1Yn2bLkEGEHw7L50tqBPgJMu4iW6', 2, 1),
(11, 'nurse@clinc.com', '$2y$10$2CuLin.7rfDqwuJe9.L8muArEs4TdLlyevgKi6bsIe8mm1xEkO6vm', 3, 1),
(13, 'qwergh@asww.com', '$2y$10$vUGzaBTYR/74P9b8eQ.bmOePPy8TpmUF3gcYJ7zdzbuCoh99emjAy', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_nurses`
--
ALTER TABLE `all_nurses`
  ADD UNIQUE KEY `Nurse_Id` (`Nurse_Id`);

--
-- Indexes for table `doctors_appointments`
--
ALTER TABLE `doctors_appointments`
  ADD PRIMARY KEY (`appointment_date`,`start_time`,`end_time`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emplyee_id`);

--
-- Indexes for table `nurses_tasks`
--
ALTER TABLE `nurses_tasks`
  ADD PRIMARY KEY (`start_time`,`end_time`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Patient_Id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emplyee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Patient_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1035;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

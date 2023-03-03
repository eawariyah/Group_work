-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 09:27 AM
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
-- Table structure for table `doctors_appointments`
--

CREATE TABLE `doctors_appointments` (
  `assignee_id` varchar(11) DEFAULT NULL,
  `doctor_id` varchar(11) DEFAULT NULL,
  `patient_id` varchar(11) DEFAULT NULL,
  `appointment_date` date NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `appointment_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_appointments`
--

INSERT INTO `doctors_appointments` (`assignee_id`, `doctor_id`, `patient_id`, `appointment_date`, `start_time`, `end_time`, `description`, `appointment_status`) VALUES
('NR5', 'DR6', '', '0000-00-00', 0, 0, '', 'N'),
('25', '26', '1037', '2023-03-01', 2, 3, 'Follow up on lungs assessment', 'N'),
('22', '26', '1037', '2023-03-01', 3, 4, 'Diagnosis Review', 'N'),
('N1', 'D1', 'P1', '2023-03-01', 8, 9, 'Task A', 'N'),
('N2', 'D1', 'B78', '2023-03-01', 9, 10, 'Follow up consulation', 'N'),
('N3', 'D1', 'B78', '2023-03-01', 10, 11, 'Re-examination of Lungs', 'N'),
('21', '26', '1037', '2023-03-01', 11, 12, 'Undisclosed', 'N'),
('NR5', 'DR6', '61162024', '2023-03-04', 8, 8, 'Lorem ipsum dolerum. This is a dummy appointment', 'N'),
('NR5', '`11`', '77788', '2023-03-05', 8, 8, 'Random appointment', 'N'),
('NR5', '`12`', '61162024', '2023-03-09', 8, 8, 'Lorem ipsum dolerum. This is a dummy appointment 2', 'N'),
('21', '26', '1037', '2023-04-01', 2, 3, 'Undisclosed', 'N'),
('21', '25', '1039', '2023-04-01', 3, 4, 'Follow up', 'N'),
('N2', 'D1', 'P2', '2023-04-01', 9, 10, 'Task B', 'N'),
('N2', 'D1', 'B78', '2023-05-01', 9, 10, 'Follow up consulation', 'N'),
('N1', 'D2', 'P3', '2023-05-01', 10, 11, 'Task A', 'N'),
('N3', 'D1', 'B78', '2023-05-01', 11, 12, 'Examination of Lungs', 'N');

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
(11, 'Ernestina', 'Torto', 'ernest.torto@clinic.com', '$2y$10$30Stq58GfvbtAJqHdnR4LeoPfRVyb91RRs4O6HiMuCB65.3obYsd.', '1234567', 'male', 'd', 'none'),
(12, 'Dorcas', 'Torto', 'dorcas.adjei@clinic.com', '$2y$10$Ubo.aDMXYN7Hds3HaZt7f.AS4lhKHToU8hhw0w93Gz8yW1ONY8Z7S', '23456789098755', 'female', 'a', NULL),
(13, 'Dorcas', 'Torto', 'dorcas.adjei@clinic.com', '$2y$10$coli8TDswx7L6OKHlimFguVkYpfp0Vt0ihakPogwoM6B6Ixgt2zKC', '23456789098755', 'female', 'a', NULL),
(14, 'Ernestina', 'Adjei', 'ernestina.adjei@clinic.com', '$2y$10$lZABX38CLz7xGCVpVdrWGOk3Er.94e.7ac8BDP9FLG4mNIm8LaA5a', '23456789098755', 'female', 'a', 'none'),
(21, 'Dorcas', 'Jean', 'dorcas.jean@clinix.com', '$2y$10$XW/FUw8JYWSU7wc51WuuI.vzR91E43FbHtUCmYvwrexB5SUBC2wPq', '123456789876', 'female', 'n', 'none'),
(22, 'Ernestina', 'Jean', 'tina.jean@clinic.com', '$2y$10$29DMpC9FV/uSlKTU4PlRY.P49QHKV0ou41wKHS8adwS0jER/Oymv.', '23454323456', 'female', 'n', 'none'),
(23, 'Averch', 'Jean', 'averch.jean@clinic.com', '$2y$10$s1jrd.Uzd66VGK4sQY.8LuqKNLN2wypyAMYBBYZpZKu/vTr74y/qq', '1234567', 'male', 'n', 'none'),
(24, 'Edwin', 'Awariyah', 'edwin.awariyah@clinic.com', '$2y$10$bUqZ6XfpcCoFSe6cdBH9Aud6keyMa/dZQ7joG3NsShiPtXM13.R5O', '2345678987654', 'male', 'a', 'none'),
(25, 'Nice', 'Cailie', 'nice.cailie@clinic.com', '$2y$10$Q5xrf0C8yN6L5YI9RvxF4eJjcyzByVJAbhwsu7jquYs4pIbbOXpxi', '1234567', 'female', 'n', 'none'),
(26, 'Ella', 'Addy', 'ella.addy@clinic.com', '$2y$10$/G8HHT/Uy2cdt6jDCKouWuxChs1xaSIEt182GdNlkZU.adcbolkbi', '23456789134', 'female', 'd', 'Dermatology'),
(29, 'Patience', 'Ado', '', '$2y$10$RB5KmNEYh5uQd7F3GywqFelPAOgbZdDDS.zyOjL9gLJhZgF8SkgzK', '', '', '', ''),
(31, 'Averch', 'Adjei', 'averch.adjei@clinic.com', '$2y$10$GEVqKccGOxQiBYaQdkFa3eLBIATbiEEKnj0FMoVoR2nXPrLVmUWZG', '23456789134', 'male', 'd', 'Dermatology');

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
  `assignee_id` varchar(11) DEFAULT NULL,
  `nurses_id` varchar(11) DEFAULT NULL,
  `task_date` date NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `task_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses_tasks`
--

INSERT INTO `nurses_tasks` (`assignee_id`, `nurses_id`, `task_date`, `start_time`, `end_time`, `description`, `task_status`) VALUES
('11', '25', '2023-03-01', 1, 2, 'Wash beddings in WARD G', 'N'),
('11', '25', '2023-03-01', 2, 3, 'Complete monthly survey', 'N'),
('31', '25', '2023-03-01', 3, 4, 'Organize Discharge of Patient 1038', 'N'),
('D3', 'N7', '2023-03-01', 10, 11, 'Washing Linen of Ward F', 'N'),
('B456', 'N7', '2023-03-03', 9, 10, 'Washing Linen of Ward C', 'N'),
('D2', 'N7', '2023-03-03', 10, 11, 'IV Check at Ward T', 'N'),
('D2', 'N7', '2023-03-03', 12, 13, 'Oversee Blood Drive at Ward G', 'N'),
('D44', '`34`', '2023-03-04', 8, 9, 'Test2', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Patient_Id` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Height` varchar(4) NOT NULL,
  `Patient_weight` varchar(5) NOT NULL,
  `Ethnicity` varchar(50) NOT NULL,
  `BloodGroup` varchar(3) NOT NULL,
  `MedicalHistory` varchar(10000) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Patient_Id`, `Firstname`, `Lastname`, `Gender`, `DOB`, `Height`, `Patient_weight`, `Ethnicity`, `BloodGroup`, `MedicalHistory`, `Email`, `PhoneNumber`) VALUES
(1037, 'Ernest', 'Adjei', 'male', '1990-12-03', '23.4', '123.4', 'Asian', 'O', 'Cough,cold,headache,AIDS,COVID', 'averch.jean@gmail.com', '2147483647'),
(1038, 'Ernest', 'Jean', 'male', '1990-12-03', '23.4', '123.4', 'Asian', 'O', 'Cough,cold,headache,AIDS,COVID', 'averch.jean@gmail.com', '123456765432'),
(1039, 'Dougg', 'Adjei', 'male', '0000-00-00', '23.4', '123.4', 'Asian', 'O', 'Cough,cold,headache,AIDS,COVID', 'averch.jean@gmail.com', '123456765432'),
(1043, 'Ernestina', 'Cailie', 'male', '.12/03/1990.', '23.4', '123.4', 'Asian', 'AB', 'Cough,cold,headache,AIDS,COVID', 'averch.jean@gmail.com', '123456765432');

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
  ADD PRIMARY KEY (`task_date`,`start_time`,`end_time`);

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
  MODIFY `emplyee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Patient_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1044;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

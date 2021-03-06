-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 04:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_type` varchar(45) CHARACTER SET utf8 NOT NULL,
  `username` varchar(45) CHARACTER SET utf8 NOT NULL,
  `password` varchar(45) CHARACTER SET utf8 NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `user_id`, `account_type`, `username`, `password`, `created_date`, `updated_date`) VALUES
(1, 1, 'Admin', 'user', 'pass', '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(2, 4, 'Student', 'jose', 'jose12345', '0000-00-00 00:00:00', '2018-04-30 14:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE `student_subject` (
  `student_subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `status` varchar(45) CHARACTER SET utf8 NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`student_subject_id`, `user_id`, `subject_id`, `status`, `created_date`, `updated_date`) VALUES
(1, 4, 1, 'Enrolled', '2018-05-06 00:00:00', '2018-05-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `subject_description` varchar(45) CHARACTER SET utf8 NOT NULL,
  `subject_unit` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_description`, `subject_unit`, `created_date`, `updated_date`) VALUES
(1, 'MATH', 'Basic logical mathematics', 3, '2018-05-01 00:00:00', '2018-05-01 00:00:00'),
(2, 'SCIENCE', 'Science and Technology Fundamentals', 3, '2018-05-01 00:00:00', '2018-05-01 00:00:00'),
(3, 'PROG 1', 'Computer Programming Fundamentals I', 3, '2018-05-01 00:00:00', '2018-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `middle_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(45) CHARACTER SET utf8 NOT NULL,
  `contact_number` varchar(45) CHARACTER SET utf8 NOT NULL,
  `home_address` varchar(45) CHARACTER SET utf8 NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `age`, `gender`, `contact_number`, `home_address`, `created_date`, `updated_date`) VALUES
(1, 'Christian', 'Lerry', 'Antido', 23, 'Male', '09296487564', 'Lower Fairview Baguio City', '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(2, 'Kamille', 'Kaye', 'David', 23, 'Female', '09287653454', 'Middle Fairview Baguio City', '2018-04-29 13:47:43', '2018-04-29 13:47:43'),
(3, 'Arianne', 'Thea', 'Espejo', 21, 'Female', '09286475634', 'Pacdal Proper Baguio City', '2018-04-29 13:49:01', '2018-04-29 14:15:24'),
(4, 'Jose', 'Abad', 'Santos', 45, 'Male', '09286476341', 'Camp John Hay Baguio City', '2018-04-30 14:55:43', '2018-05-01 07:01:08'),
(5, 'Reika', 'Lee', 'Eslao', 21, 'Female', '09286376231', 'Irisan Baguio City', '2018-05-04 16:42:41', '2018-05-04 16:42:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `account_id` (`account_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`student_subject_id`),
  ADD UNIQUE KEY `student_subject_id` (`student_subject_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_id` (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `student_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD CONSTRAINT `student_subject_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `student_subject_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

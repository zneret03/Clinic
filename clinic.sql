-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2020 at 04:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `alcohol`
--

CREATE TABLE `alcohol` (
  `liquor_id` bigint(20) NOT NULL,
  `liquor_choices` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointments_credentials`
--

CREATE TABLE `appointments_credentials` (
  `app_cred_id` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `customerAddress` varchar(100) DEFAULT NULL,
  `phoneNo` bigint(20) DEFAULT NULL,
  `Email` varchar(20) NOT NULL,
  `Notes` text DEFAULT NULL,
  `Age` int(3) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `doctor_id` varchar(50) DEFAULT NULL,
  `app_time` bigint(20) DEFAULT NULL,
  `payments_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments_credentials`
--

INSERT INTO `appointments_credentials` (`app_cred_id`, `firstname`, `middlename`, `lastname`, `customerAddress`, `phoneNo`, `Email`, `Notes`, `Age`, `gender`, `doctor_id`, `app_time`, `payments_id`) VALUES
('14207816122020', 'Ian', 'Adorable', 'Drilon', 'Bolong Este', 9302435859, 'Ian@yahoo.com', 'Pain', 20, 'Male', '21409260602020', 59, 74);

-- --------------------------------------------------------

--
-- Table structure for table `Appointments_time`
--

CREATE TABLE `Appointments_time` (
  `app_time` bigint(20) NOT NULL,
  `total_appointments` int(11) DEFAULT NULL,
  `appointments_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Appointments_time`
--

INSERT INTO `Appointments_time` (`app_time`, `total_appointments`, `appointments_time`) VALUES
(59, NULL, '2020-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `cigarette`
--

CREATE TABLE `cigarette` (
  `cigarette_id` bigint(20) NOT NULL,
  `cigarette_choices` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `diseases_id` bigint(20) NOT NULL,
  `diabetes` varchar(5) DEFAULT NULL,
  `hypertension` varchar(5) DEFAULT NULL,
  `cancer` varchar(5) DEFAULT NULL,
  `stroke` varchar(5) DEFAULT NULL,
  `heart_trouble` varchar(5) DEFAULT NULL,
  `arthritis` varchar(5) DEFAULT NULL,
  `convulsion` varchar(5) DEFAULT NULL,
  `bleading_tendency` varchar(5) DEFAULT NULL,
  `vinereal_disease` varchar(5) DEFAULT NULL,
  `hereditary_defects` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` varchar(50) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `abbreviation` varchar(50) DEFAULT NULL,
  `doc_address` varchar(100) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `fname`, `mname`, `lname`, `abbreviation`, `doc_address`, `age`, `gender`) VALUES
('10140282612020', 'Dr. Ian', 'Adorable', 'Drilon', 'Dentist', 'Brgy. Bolong Ester Santa Barbara Iloilo', 21, 'Male'),
('21409260602020', 'Ph. Shannie Marie', '', 'Paunon', 'Doctor', 'Dueñas', 20, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drugs_id` bigint(20) NOT NULL,
  `drugs_choices` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exposure`
--

CREATE TABLE `exposure` (
  `exposure_id` bigint(20) NOT NULL,
  `exposure_choices` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `father_medical_history`
--

CREATE TABLE `father_medical_history` (
  `father_medical_id` bigint(20) NOT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_age` int(3) DEFAULT NULL,
  `diseases` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_logout`
--

CREATE TABLE `login_logout` (
  `check_id` bigint(20) NOT NULL,
  `user_code` varchar(50) NOT NULL,
  `login_time` varchar(15) DEFAULT NULL,
  `logout_time` varchar(15) DEFAULT NULL,
  `statusColor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_logout`
--

INSERT INTO `login_logout` (`check_id`, `user_code`, `login_time`, `logout_time`, `statusColor`) VALUES
(74, '5505794652020', '02:04:21 PM', '02:06:49 PM', '#CC0000'),
(75, '5505794652020', '02:13:44 PM', '02:18:52 PM', '#CC0000'),
(76, '5505794652020', '10:11:58 AM', NULL, '#42B72A'),
(77, '5505794652020', '10:12:19 AM', NULL, '#42B72A'),
(78, '5505794652020', '10:13:25 AM', NULL, '#42B72A'),
(79, '5505794652020', '10:14:44 AM', NULL, '#42B72A'),
(80, '5505794652020', '10:16:02 AM', NULL, '#42B72A'),
(81, '5505794652020', '10:16:06 AM', NULL, '#42B72A'),
(82, '5505794652020', '10:18:15 AM', '10:25:57 AM', '#CC0000');

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

CREATE TABLE `marital_status` (
  `marital_id` bigint(20) NOT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `medical_id` bigint(20) NOT NULL,
  `problem` text DEFAULT NULL,
  `problem_severe` text DEFAULT NULL,
  `problem_long` text DEFAULT NULL,
  `problem_occur` text DEFAULT NULL,
  `problem_started` text DEFAULT NULL,
  `symptoms` text DEFAULT NULL,
  `prev_hospital` varchar(70) DEFAULT NULL,
  `illness` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `medications_id` bigint(20) NOT NULL,
  `medication_name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_code` varchar(20) NOT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `medicine_brand` varchar(50) DEFAULT NULL,
  `unit` double DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL,
  `other_name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_code`, `medicine_name`, `medicine_brand`, `unit`, `quantity`, `other_name`, `description`) VALUES
('19531368312020', 'Paracetamol', 'Panadol', 5, 10, 'APAP', 'medication used to treat pain and fever');

-- --------------------------------------------------------

--
-- Table structure for table `mother_medical_history`
--

CREATE TABLE `mother_medical_history` (
  `mother_medical_id` bigint(20) NOT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_age` int(3) DEFAULT NULL,
  `diseases` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parents_medical_history`
--

CREATE TABLE `parents_medical_history` (
  `parents_medical_id` bigint(20) NOT NULL,
  `father_medical_id` bigint(20) DEFAULT NULL,
  `mother_medical_id` bigint(20) DEFAULT NULL,
  `sibling_medical_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `password_reset_id` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reset_selector` text NOT NULL,
  `reset_token` text NOT NULL,
  `reset_expires` varchar(50) DEFAULT NULL,
  `user_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`password_reset_id`, `email`, `reset_selector`, `reset_token`, `reset_expires`, `user_code`) VALUES
(14, 'Ian@yahoo.com', '41ea6938b9b889d8', 'http://localhost/Clinic/php-app/build/app/includes/reset_password.php?selector=41ea6938b9b889d8&validator=347066400087f6dde769aa295984251d27580a1d74a57a3404fab36e312c5225', '1582884823', '5505794652020'),
(15, 'DrilonIan@yahoo.com', 'd5066caf90a6c8ed', 'http://localhost/Clinic/php-app/build/app/includes/reset_password.php?selector=d5066caf90a6c8ed&validator=04d0ab7ba30a6c73f8aa72a2f089a51d672e3a94921abce708f1d9231291d86b', '1582884921', '12900376472020');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patientid` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `age` int(3) NOT NULL,
  `medical_id` bigint(20) DEFAULT NULL,
  `marital_id` bigint(20) DEFAULT NULL,
  `liquor_id` bigint(20) DEFAULT NULL,
  `cigarette_id` bigint(20) DEFAULT NULL,
  `drugs_id` bigint(20) DEFAULT NULL,
  `exposure_id` bigint(20) DEFAULT NULL,
  `parents_medical_id` bigint(20) DEFAULT NULL,
  `diseases_id` bigint(20) DEFAULT NULL,
  `medications_id` bigint(20) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payments_id` bigint(20) NOT NULL,
  `bill` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payments_id`, `bill`) VALUES
(74, '650Php');

-- --------------------------------------------------------

--
-- Table structure for table `scheduller`
--

CREATE TABLE `scheduller` (
  `sheduller_id` varchar(50) NOT NULL,
  `title` varchar(70) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `start_event` datetime DEFAULT NULL,
  `end_event` datetime DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheduller`
--

INSERT INTO `scheduller` (`sheduller_id`, `title`, `color`, `start_event`, `end_event`, `date_created`, `date_updated`) VALUES
('14268234412020', 'Coding session', '#FE5B48', '2020-04-13 00:00:00', '2020-04-14 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sibling_medical_history`
--

CREATE TABLE `sibling_medical_history` (
  `sibling_medical_id` bigint(20) NOT NULL,
  `sibling_name` varchar(100) DEFAULT NULL,
  `sibling_age` int(3) DEFAULT NULL,
  `diseases` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_code` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `usertype` varchar(10) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_code`, `user_email`, `username`, `fname`, `mname`, `lname`, `pwd`, `usertype`, `date_created`, `date_updated`) VALUES
('5505794652020', 'admin@yahoo.com', 'admin', 'admin', 'admin', 'admin', 'administrator', 'Admin', '2020-01-15 11:27:25', '2020-04-13 10:24:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alcohol`
--
ALTER TABLE `alcohol`
  ADD PRIMARY KEY (`liquor_id`);

--
-- Indexes for table `appointments_credentials`
--
ALTER TABLE `appointments_credentials`
  ADD PRIMARY KEY (`app_cred_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `app_time` (`app_time`),
  ADD KEY `payments_id` (`payments_id`);

--
-- Indexes for table `Appointments_time`
--
ALTER TABLE `Appointments_time`
  ADD PRIMARY KEY (`app_time`);

--
-- Indexes for table `cigarette`
--
ALTER TABLE `cigarette`
  ADD PRIMARY KEY (`cigarette_id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`diseases_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drugs_id`);

--
-- Indexes for table `exposure`
--
ALTER TABLE `exposure`
  ADD PRIMARY KEY (`exposure_id`);

--
-- Indexes for table `father_medical_history`
--
ALTER TABLE `father_medical_history`
  ADD PRIMARY KEY (`father_medical_id`);

--
-- Indexes for table `login_logout`
--
ALTER TABLE `login_logout`
  ADD PRIMARY KEY (`check_id`),
  ADD KEY `user_code` (`user_code`);

--
-- Indexes for table `marital_status`
--
ALTER TABLE `marital_status`
  ADD PRIMARY KEY (`marital_id`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`medical_id`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`medications_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_code`);

--
-- Indexes for table `mother_medical_history`
--
ALTER TABLE `mother_medical_history`
  ADD PRIMARY KEY (`mother_medical_id`);

--
-- Indexes for table `parents_medical_history`
--
ALTER TABLE `parents_medical_history`
  ADD PRIMARY KEY (`parents_medical_id`),
  ADD KEY `father_medical_id` (`father_medical_id`),
  ADD KEY `mother_medical_id` (`mother_medical_id`),
  ADD KEY `sibling_medical_id` (`sibling_medical_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`password_reset_id`),
  ADD KEY `user_code` (`user_code`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patientid`),
  ADD KEY `medical_id` (`medical_id`),
  ADD KEY `marital_id` (`marital_id`),
  ADD KEY `liquor_id` (`liquor_id`),
  ADD KEY `cigarette_id` (`cigarette_id`),
  ADD KEY `drugs_id` (`drugs_id`),
  ADD KEY `exposure_id` (`exposure_id`),
  ADD KEY `parents_medical_id` (`parents_medical_id`),
  ADD KEY `diseases_id` (`diseases_id`),
  ADD KEY `medications_id` (`medications_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `scheduller`
--
ALTER TABLE `scheduller`
  ADD PRIMARY KEY (`sheduller_id`);

--
-- Indexes for table `sibling_medical_history`
--
ALTER TABLE `sibling_medical_history`
  ADD PRIMARY KEY (`sibling_medical_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_code`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alcohol`
--
ALTER TABLE `alcohol`
  MODIFY `liquor_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Appointments_time`
--
ALTER TABLE `Appointments_time`
  MODIFY `app_time` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `cigarette`
--
ALTER TABLE `cigarette`
  MODIFY `cigarette_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `diseases_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `drugs_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exposure`
--
ALTER TABLE `exposure`
  MODIFY `exposure_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `father_medical_history`
--
ALTER TABLE `father_medical_history`
  MODIFY `father_medical_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_logout`
--
ALTER TABLE `login_logout`
  MODIFY `check_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `marital_status`
--
ALTER TABLE `marital_status`
  MODIFY `marital_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `medications_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mother_medical_history`
--
ALTER TABLE `mother_medical_history`
  MODIFY `mother_medical_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents_medical_history`
--
ALTER TABLE `parents_medical_history`
  MODIFY `parents_medical_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `password_reset_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payments_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `sibling_medical_history`
--
ALTER TABLE `sibling_medical_history`
  MODIFY `sibling_medical_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments_credentials`
--
ALTER TABLE `appointments_credentials`
  ADD CONSTRAINT `appointments_credentials_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_credentials_ibfk_2` FOREIGN KEY (`app_time`) REFERENCES `Appointments_time` (`app_time`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_credentials_ibfk_3` FOREIGN KEY (`payments_id`) REFERENCES `payments` (`payments_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_logout`
--
ALTER TABLE `login_logout`
  ADD CONSTRAINT `login_logout_ibfk_1` FOREIGN KEY (`user_code`) REFERENCES `users` (`user_code`);

--
-- Constraints for table `parents_medical_history`
--
ALTER TABLE `parents_medical_history`
  ADD CONSTRAINT `parents_medical_history_ibfk_1` FOREIGN KEY (`father_medical_id`) REFERENCES `father_medical_history` (`father_medical_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parents_medical_history_ibfk_2` FOREIGN KEY (`mother_medical_id`) REFERENCES `mother_medical_history` (`mother_medical_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parents_medical_history_ibfk_3` FOREIGN KEY (`sibling_medical_id`) REFERENCES `sibling_medical_history` (`sibling_medical_id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`medical_id`) REFERENCES `medical_history` (`medical_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`marital_id`) REFERENCES `marital_status` (`marital_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_3` FOREIGN KEY (`liquor_id`) REFERENCES `alcohol` (`liquor_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_4` FOREIGN KEY (`cigarette_id`) REFERENCES `cigarette` (`cigarette_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_5` FOREIGN KEY (`drugs_id`) REFERENCES `drugs` (`drugs_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_6` FOREIGN KEY (`exposure_id`) REFERENCES `exposure` (`exposure_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_7` FOREIGN KEY (`parents_medical_id`) REFERENCES `parents_medical_history` (`parents_medical_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_8` FOREIGN KEY (`diseases_id`) REFERENCES `diseases` (`diseases_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_ibfk_9` FOREIGN KEY (`medications_id`) REFERENCES `medications` (`medications_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

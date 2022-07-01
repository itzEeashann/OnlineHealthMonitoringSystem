-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2022 at 07:33 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elderlyhealthmonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_nurse`
--

DROP TABLE IF EXISTS `doctor_nurse`;
CREATE TABLE IF NOT EXISTS `doctor_nurse` (
  `id` int NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_nurse`
--

INSERT INTO `doctor_nurse` (`id`, `password`) VALUES
(12345, '12345'),
(89757, '789'),
(10101234, '123');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_nurse_profile`
--

DROP TABLE IF EXISTS `doctor_nurse_profile`;
CREATE TABLE IF NOT EXISTS `doctor_nurse_profile` (
  `id` int NOT NULL,
  `doctor_nurse_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hospital_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_number` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_nurse_profile`
--

INSERT INTO `doctor_nurse_profile` (`id`, `doctor_nurse_name`, `gender`, `hospital_name`, `contact_number`) VALUES
(12345, 'Ali ALi', 'male', 'hospital', '0123456789'),
(89757, 'Faye Ong', 'female', 'Sunway Medical Centre', '01111932345'),
(10101234, 'Amy', 'female', 'Kuala Lumpur General Hospital', '0112323233');

-- --------------------------------------------------------

--
-- Table structure for table `health_status`
--

DROP TABLE IF EXISTS `health_status`;
CREATE TABLE IF NOT EXISTS `health_status` (
  `ic` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `patient_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `weight` int NOT NULL,
  `height` int NOT NULL,
  `bmi` decimal(5,2) NOT NULL,
  `blood_pressure` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `blood_sugar` int NOT NULL,
  `cholesterol_level` int NOT NULL,
  `heart_rate` int NOT NULL,
  `activities_of_daily_life` int NOT NULL,
  `falling` int NOT NULL,
  `incontinence` int NOT NULL,
  `cognitive` int NOT NULL,
  `date_updated` date NOT NULL,
  PRIMARY KEY (`ic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_status`
--

INSERT INTO `health_status` (`ic`, `patient_name`, `weight`, `height`, `bmi`, `blood_pressure`, `blood_sugar`, `cholesterol_level`, `heart_rate`, `activities_of_daily_life`, `falling`, `incontinence`, `cognitive`, `date_updated`) VALUES
('020221011106', 'Inez Qun', 50, 160, '19.50', '120/90', 10, 10, 80, 1, 3, 1, 5, '2022-04-07'),
('121245789636', 'test', 1, 1, '1.00', '1', 1, 1, 1, 1, 1, 1, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `ic` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ic`, `password`) VALUES
('020221011106', '12345'),
('121245789636', '111');

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile`
--

DROP TABLE IF EXISTS `patient_profile`;
CREATE TABLE IF NOT EXISTS `patient_profile` (
  `ic` varchar(50) NOT NULL,
  `patient_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  PRIMARY KEY (`ic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient_profile`
--

INSERT INTO `patient_profile` (`ic`, `patient_name`, `gender`, `address`, `country`, `state`, `city`, `postcode`, `contact_number`) VALUES
('020221011106', 'Inez Qun', 'female', '14, Jalan Gemilang', 'Malaysia', 'Johor', 'Batu Pahat', '83000', '0187692376'),
('121245789636', 'test', 'male', 'asd', 'asdasd', 'QQQQ', 'qwet', '12547', '0121457896');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_nurse_profile`
--
ALTER TABLE `doctor_nurse_profile`
  ADD CONSTRAINT `FK_id` FOREIGN KEY (`id`) REFERENCES `doctor_nurse` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `health_status`
--
ALTER TABLE `health_status`
  ADD CONSTRAINT `FK_ic` FOREIGN KEY (`ic`) REFERENCES `patient` (`ic`);

--
-- Constraints for table `patient_profile`
--
ALTER TABLE `patient_profile`
  ADD CONSTRAINT `FK_icprofile` FOREIGN KEY (`ic`) REFERENCES `patient` (`ic`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

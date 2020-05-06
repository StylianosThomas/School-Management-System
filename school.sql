-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2019 at 06:34 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Faculty_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Faculty_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Faculty_Surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Faculty_Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Faculty_ID`),
  UNIQUE KEY `Faculty_Email` (`Faculty_Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Faculty_ID`, `Faculty_Name`, `Faculty_Surname`, `Faculty_Email`) VALUES
(1, 'TestFacultyName', 'TestFacultySurname', 'testfacultyemail@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `Student_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Student_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Student_Surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Student_Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Student_ID`),
  UNIQUE KEY `Student_Email` (`Student_Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `students` (`Student_ID`, `Student_Name`, `Student_Surname`, `Student_Email`) VALUES
(1, 'TestStudentName', 'TestStudentSurname', 'teststudentemail@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `Course_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Course_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`Course_ID`),
  UNIQUE KEY `Course_ID` (`Course_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_ID`, `Course_Name`, `Description`, `Price`) VALUES
(1, 'Mathematics', 'Course Description', 500),
(2, 'Statistics', 'Course Description', 800),
(3, 'Physics', 'Course Description', 600),
(4, 'Composition', 'Course Description', 500),
(5, 'Management', 'Course Description', 800),
(6, 'Ethics', 'Course Description', 500),
(7, 'History', 'Course Description', 500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2017 at 11:00 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `patient_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_data`
--

CREATE TABLE `patient_data` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(3) NOT NULL,
  `gender` text NOT NULL,
  `phone_number` text NOT NULL,
  `add_info` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`first_name`, `last_name`, `date_of_birth`, `age`, `gender`, `phone_number`, `add_info`) VALUES
('Priyesh', 'Bumb', '2017-02-09', 0, 'Male', '123456', 'abc'),
('Priyesh', 'Bumb', '2017-02-09', 0, 'Male', '9165554546', 'abc'),
('Priyesh', 'Bumb', '2009-06-10', 0, 'Male', '9165554546', 'random'),
('Arpit', 'Shri', '2000-02-09', 0, 'Male', '9877788888', 'abc'),
('apu', 'cha', '2017-02-10', 0, 'Female', '8666988887', ''),
('apu', 'cha', '2017-02-10', 0, 'Female', '8666988885', ''),
('Damien', 'Joseph', '1980-06-11', 0, 'Male', '9876543244', 'new'),
('Damien', 'Joseph', '1980-06-11', 0, 'Male', '9876543244', 'new'),
('Damien', 'Joseph', '1980-06-11', 0, 'Male', '9876543244', 'new'),
('Damien', 'Jphn', '2008-02-06', 0, 'Male', '7777774646', 'change'),
('Damien', 'Jphn', '2008-02-06', 0, 'Male', '7777774646', 'change'),
('Damien', 'Jphn', '2008-02-06', 0, 'Male', '7777774646', 'change'),
('damien', 'ads', '2010-02-10', 7, 'Female', '7333444455', ''),
('t', 'Bumb', '2007-06-13', 0, 'Male', '7777777777', ''),
('tr', 'Bumb', '2007-06-13', 0, 'Male', '7777777777', ''),
('tr', 'Bumb', '2007-06-13', 0, 'Male', '7777777777', ''),
('tr', 'Bumb', '2007-06-13', 0, 'Male', '7777777777', ''),
('tr', 'Bumbf', '2007-06-13', 0, 'Male', '7777777777', ''),
('tr', 'Bumbf', '2007-06-13', 0, 'Male', '7777777777', ''),
('tr', 'Bumbf', '2006-02-08', 0, 'Male', '7777777777', ''),
('Damien', 'B', '2011-06-08', 6, 'Male', '9554455555', ''),
('a', 'b', '1996-02-23', 0, 'Male', '7788667766', ''),
('f', 'h', '2017-02-10', -5, 'Male', '9876554443', ''),
('b', 'q', '2017-02-03', 555, 'Male', '8888888888', ''),
('t', 'j', '2007-06-13', 10, 'Male', '8888877888', ''),
('b', 'k', '2005-06-15', 12, 'Male', '9999999999', ''),
('b', 'k', '2005-06-15', 12, 'Male', '9999999999', ''),
('b', 'k', '2005-06-15', 12, 'Male', '9999999999', ''),
('', '', '0000-00-00', 0, '', '', ''),
('This', 'is', '2017-02-09', 0, 'Male', '9999990000', '');

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 02:02 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `user_id` varchar(20) NOT NULL,
  `car_no` varchar(20) NOT NULL,
  `chasis_no` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` varchar(4) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`user_id`, `car_no`, `chasis_no`, `model`, `year`, `id`, `brand`) VALUES
('2', 'AH154IKJ', '1273397hjfh849u408509i09irk', 'Toyota Corolla', '', 1, ''),
('3', 'AJ123OKN', 'sfytw612t8yw7yuwhk', 'Toyota Camry', '', 2, ''),
('3', 'LX345ABJ', '3323291dji9erjf0320idk022920o', 'Lexus x550', '', 3, ''),
('2', 'JB234ABC', '276t6g8y8uei0o-0os908', 'Audi A8', '', 4, ''),
('2', 'AJ123OKN45', '3323291dji9erjf0320idk022920o', 'Lexus x550', '2004', 6, 'LEXUS'),
('2', 'GL564UA', 'y77848h4hhrhrrur8444', 'Solara', '2015', 7, 'Toyota'),
('4', 'AL 123 ABC', 'dv76ghdhjb8h89uwe8wjdkml', 'Roadster', '2017', 8, 'Aston Martin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `car_id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `address`, `car_id`, `password`, `username`) VALUES
(2, 'Abdulwahid', 'Ajoge', '08162106120', 'bugsabdul@yahoo.com', 'Olukole Street', 0, '82027888c5bb8fc395411cb6804a066c', 'abdul'),
(3, 'Sabiha', 'Ajoge', '08162949904', '', 'Banana Island Lagos', 0, 'ee937e067ebcc8c6ce63929fcd56279b', 'sabi'),
(4, 'Ajoge', 'Isiaka', '09011111900', '', 'No 11 Giring Villa Abatoir', 0, '0483929c682ff0fa91e95c9ba2fd26bd', 'duds');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

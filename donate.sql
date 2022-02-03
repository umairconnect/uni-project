-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 07:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate_save`
--

CREATE TABLE `donate_save` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  `type` text NOT NULL,
  `location` text NOT NULL,
  `checkboxes` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate_save`
--

INSERT INTO `donate_save` (`id`, `name`, `email`, `phone`, `description`, `status`, `type`, `location`, `checkboxes`, `image`) VALUES
(61, 'dfdfd', '', 'fdfdfd', 'dffdf', '', 'requested', 'dfdfd', 'Basic needs Medicine gear cloth and', ''),
(62, 'umair umer', '', '0333-5137544', 'posting', '', 'requested', 'Islamabad', '', ''),
(63, 'umair umer', '', '3335137544', 'sdfsd', '', 'requested', 'sdf', '', ''),
(64, 'umair umer', '', '3335137544', 'sdf', '', 'requested', 'public_html', '', ''),
(65, 'new', '', '333 5137544', 'sdf', '', 'requested', 'sdf', '', 'Capture.PNG'),
(66, 'umair umer', '', '3335137544', 'sdf', '', 'requested', 'sdf', '', 'Capture.PNG'),
(67, 'umair umer', '', '0333-5137544', 'swdf', '', 'requested', 'umair', '', 'Capture.PNG'),
(68, 'umair umer', '', '333 5137544', '', '', 'requested', 'sdfs', '', 'flag_usa.png'),
(69, 'umair umer', '', '3335137544', 'scheduled blog post', '', 'requested', 'sdf', '', 'flag_brazil.png'),
(70, 'umair umer', '', '3335137544', 'dasfs', '', 'requested', 'sdf', '', ''),
(71, 'umair umer', '', '44', 'blog', '', 'requested', 'sdfsdf', '', ''),
(72, 'umair umer', '', '324', 'yes', '', 'requested', 'conversorproducts.com', '', ''),
(73, 'umair umer', '', '324', 'scheduled post', '', 'requested', 'sdfsd', '', ''),
(74, 'umair umer', '', '324', 'scheduled post', '', 'requested', 'sdfsd', '', ''),
(75, 'umair umer', '', '0333-5137544', 'sdfs', '', 'requested', 'conversorproducts.com', 'Patient monitor Heart blood pressure sugar monitors,Ventilator Portable Hospital or house use ventilator', 'flag_brazil.png');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `descreption` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`, `descreption`) VALUES
(14, 'VID-20211029-WA0081.mp4', 'videos/VID-20211029-WA0081.mp4', 'fdfdfdfdfd'),
(15, 'VID-20211029-WA0081.mp4', 'videos/VID-20211029-WA0081.mp4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate_save`
--
ALTER TABLE `donate_save`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate_save`
--
ALTER TABLE `donate_save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

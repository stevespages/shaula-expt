-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2018 at 05:35 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaula`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) UNSIGNED NOT NULL,
  `place_from` varchar(200) CHARACTER SET latin1 NOT NULL,
  `place_to` varchar(200) CHARACTER SET latin1 NOT NULL,
  `on_board` varchar(200) CHARACTER SET latin1 NOT NULL,
  `depart_date` date NOT NULL,
  `depart_time` time NOT NULL,
  `arrive_date` date NOT NULL,
  `arrive_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `image_1` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_2` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_3` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_4` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_5` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_description_1` text CHARACTER SET latin1 NOT NULL,
  `image_description_2` text CHARACTER SET latin1 NOT NULL,
  `image_description_3` text CHARACTER SET latin1 NOT NULL,
  `image_description_4` text CHARACTER SET latin1 NOT NULL,
  `image_description_5` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `place_from`, `place_to`, `on_board`, `depart_date`, `depart_time`, `arrive_date`, `arrive_time`, `distance`, `description`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_description_1`, `image_description_2`, `image_description_3`, `image_description_4`, `image_description_5`) VALUES
(94, 's', 'b', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, '', '', '', '', '', '', '', '', '', '', ''),
(95, 'a', 's', 'd', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 5, 'flapjack', 'g', 'h', 'i', 'j', 'k', 'l', 'z', 'x', 'c', 'v'),
(96, 'q', 'w', 'e', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 8, 'f', '', '', '', '', '', 'l', 'z', 'x', 'C', 'v'),
(97, 'm', 'n', 'b', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 7, 'v', '', '', '', '', '', 'c', 'x', 'z', 'l', 'k'),
(99, 'l', 'k', 'j', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 3, 'h', '20161207_230837.jpg', '20161221_130554.jpg', '20161221_130559.jpg', '20161221_130611.jpg', '20161221_130617.jpg', 'g', 'f', 'd', 's', 'a'),
(105, 'Chester', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, '', '', '', '', '', '', '', '', '', '', ''),
(107, 'falmouth', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 600, '', '', '', '', '', '', '', '', '', '', ''),
(110, 'XXX', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

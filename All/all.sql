-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 12:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `first_name` varchar(900) DEFAULT NULL,
  `last_name` varchar(900) DEFAULT NULL,
  `email` varchar(900) DEFAULT NULL,
  `password` varchar(900) DEFAULT NULL,
  `image` varchar(900) DEFAULT NULL,
  `video` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `email`, `password`, `image`, `video`) VALUES
(18, 'eeerrr', 'erererer', 'errerere', 'ererer', NULL, NULL),
(20, 'eeerrr', 'erererer', 'errerere', 'wrwer', NULL, NULL),
(21, 'sdgdh', 'hdhs', 'sfhfd', 'fhdf', NULL, NULL),
(22, 'sdgdh', 'hdhs', 'sfhfd', '12121212', NULL, NULL),
(23, '1121', '12123', '123123', '1231', NULL, NULL),
(25, '1121', '12123', '123123', '1111111111', NULL, NULL),
(33, 'aaaaaa', 'aaaaa', 'sushantk6158@gmail.com', 'aaaaaaaaa', '03ccf7a9293e4053a2a21906aa4e819f.jpg', NULL),
(40, 'ssssssa', 'ssssssa', 'sushantk6158@gmail.com', 'sssssssssssa', 'logo1.png', NULL),
(41, 'sasasas', 'sasasas', 'sushantk6158@gmail.com', 'sasasasas', 'talentB_logo.jpg', NULL),
(42, 'eeeeeee', 'eeeeee', 'kumbharsushant6158@gmail.com', 'eeeeeeeeeeeee', 'redbytes.jpg-01-01-2018-1514802004.jpeg', 'vid-20131222-wa0001.mp4'),
(44, 'wwwww1', 'wwwwww1', 'kumbharsushant6158@gmail.com', 'wwwwwwwww11', 'redbytes.jpg-01-01-2018-1514802004.jpeg', 'vid-20131227-wa0001.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

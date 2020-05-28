-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 06:25 PM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `textz` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` varchar(255) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `reply_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `textz`, `photo`, `date`, `comment`, `comment_id`, `reply`, `reply_id`, `reply_time`, `comment_date`, `cat`, `user_id`) VALUES
(1, 'hello', '', 'Black_White_BV4594_001_6872_540x.jpg', '2019-09-16 20:24:53', NULL, NULL, NULL, NULL, '2019-09-16 20:24:53', '2019-09-16 20:24:53', 'cat', NULL),
(2, 'hello', 'we ', '', '2019-09-16 20:26:51', NULL, NULL, NULL, NULL, '2019-09-16 20:26:51', '2019-09-16 20:26:51', 'cat', NULL),
(3, 'hello', 'we ', '', '2019-09-16 20:27:40', NULL, NULL, NULL, NULL, '2019-09-16 20:27:40', '2019-09-16 20:27:40', 'cat', NULL),
(4, 'hello', 'henyune', 'Nike_Air_Force_1_Low_CMFT_Equality_White_Black_AQ2118_100_9605_720x-1-600x600.jpg', '2019-09-16 20:43:31', NULL, NULL, NULL, NULL, '2019-09-16 20:43:31', '2019-09-16 20:43:31', 'cat', NULL),
(5, '', '', '', '2019-09-16 20:46:30', NULL, NULL, NULL, NULL, '2019-09-16 20:46:30', '2019-09-16 20:46:30', '', NULL),
(6, 'hello', 'hello', 'Black_White_BV4594_001_6872_540x.jpg', '2019-09-16 21:06:46', NULL, NULL, NULL, NULL, '2019-09-16 21:06:46', '2019-09-16 21:06:46', 'cat', NULL),
(7, 'hello', 'yeah we are getting some whre', 'Moncler_The_Bubble_Sneaker_White_Blue_Red__0736_540x.jpg', '2019-09-16 21:15:39', NULL, NULL, NULL, NULL, '2019-09-16 21:15:39', '2019-09-16 21:15:39', 'cat', NULL),
(8, 'new test', 'alot things on my mind that i cant type finish cause i am just making things up to fill this spaces which seems impossible to do for now although we have made progress', 'wristwatchonhand.jpeg', '2019-10-26 19:26:02', NULL, NULL, NULL, NULL, '2019-10-26 19:26:02', '2019-10-26 19:26:02', 'Graphic_design', NULL),
(9, 'new test', 'alot things on my mind that i cant type finish cause i am just making things up to fill this spaces which seems impossible to do for now although we have made progress', 'wristwatchonhand.jpeg', '2019-10-26 19:26:42', NULL, NULL, NULL, NULL, '2019-10-26 19:26:42', '2019-10-26 19:26:42', 'Graphic_design', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `commentor` varchar(255) DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `postid` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `email`, `commentor`, `comment`, `postid`) VALUES
(1, 'igwezehycient86@gmail.com', 'emerald', 'nice watch', 9),
(2, 'igwezehycient86@gmail.com', 'emerald', 'nice watch', 9),
(3, 'igwezehycient86@gmail.com', 'hycient', 'testing my comment section', 9),
(4, 'fizzydiamonds@gmail.com', 'fizzy', 'nice bro!', 8),
(5, 'igwezehycient86@gmail.com', 'chris', 'bravo ', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

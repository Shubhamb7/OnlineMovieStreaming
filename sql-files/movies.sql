-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 01:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `rdate` varchar(5) NOT NULL,
  `runtime` varchar(4) NOT NULL,
  `decription` varchar(100) NOT NULL,
  `viewers` int(10) DEFAULT '1',
  `imgpath` varchar(50) NOT NULL,
  `videopath` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `name`, `genre`, `rdate`, `runtime`, `decription`, `viewers`, `imgpath`, `videopath`) VALUES
(1, 'rampage', 'fiction', '2017', '120', 'animals', 8, 'rampage.jpg', 'RAMPAGE Trailer.mp4'),
(2, 'black panther', 'fiction', '2017', '140', 'super hero movie', 13, 'black panther.jpg', 'Black Panther.mp4'),
(3, 'spiderman homecoming', 'fiction', '2018', '110', 'super hero movie', 5, 'spider-man-homecoming.jpg', 'Spider-Man Homecoming.mp4'),
(4, 'jumanji', 'adventure', '2017', '130', '4 kids stuck in video game', 11, 'jumanji2017.jpg', 'JUMANJI 17.mp4'),
(5, 'the conjuring', 'horror', '2013', '120', 'ghost house', 1, 'Conjuring.jpg', 'The Conjuring.mp4'),
(6, 'the conjuring 2', 'horror', '2015', '115', 'cursed family', 1, 'conjuring2.jpg', 'The Conjuring 2.mp4'),
(7, 'infinity wars ', 'fiction', '2018', '123', 'collaboration of all marvel characters', 3, 'infinity war.jpg', 'Avengers Infinity War.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

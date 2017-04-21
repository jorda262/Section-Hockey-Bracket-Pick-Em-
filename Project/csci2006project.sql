-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2017 at 10:27 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `csci2006project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ex_bracket`
--

CREATE TABLE `ex_bracket` (
  `bracket_id` int(11) NOT NULL,
  `bracket_division` varchar(32) NOT NULL,
  `g1_winner` int(11) NOT NULL,
  `g2_winner` int(11) NOT NULL,
  `g3_winner` int(11) NOT NULL,
  `g4_winner` int(11) NOT NULL,
  `g5_winner` int(11) NOT NULL,
  `g6_winner` int(11) NOT NULL,
  `g7_winner` int(11) NOT NULL,
  `bracket_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ex_teams`
--

CREATE TABLE `ex_teams` (
  `team_id` int(11) NOT NULL,
  `team_division` varchar(32) NOT NULL,
  `team_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ex_teams`
--

INSERT INTO `ex_teams` (`team_id`, `team_division`, `team_name`) VALUES
(1, 'Section 1AA', 'Lakeville North'),
(2, 'Section 1AA', 'Lakeville South'),
(3, 'Section 1AA', 'Farmington'),
(4, 'Section 1AA', 'Rochester Century'),
(5, 'Section 1AA', 'Owatonna'),
(6, 'Section 1AA', 'Rochester JM'),
(7, 'Section 1AA', 'Rochester Mayo'),
(8, 'Section 1AA', 'Dodge County'),
(9, 'Section 2AA', 'Eden Prairie'),
(10, 'Section 2AA', 'Holy Family'),
(11, 'Section 2AA', 'Minnetonka'),
(12, 'Section 2AA', 'Prior Lake'),
(13, 'Section 2AA', 'Chaska'),
(14, 'Section 2AA', 'Chanhassan'),
(15, 'Section 2AA', 'Shakopee'),
(16, 'Section 2AA', 'Apple Valley'),
(17, 'Section 3AA', 'St. Thomas Academy'),
(18, 'Section 3AA', 'Burnsville'),
(19, 'Section 3AA', 'Eastview'),
(20, 'Section 3AA', 'Eagan'),
(21, 'Section 3AA', 'Rosemount'),
(22, 'Section 3AA', 'Bloomington Jefferson'),
(23, 'Section 3AA', 'Park Cottage Grove'),
(24, 'Section 3AA', 'East Ridge'),
(25, 'Section 4AA', 'Stillwater'),
(26, 'Section 4AA', 'Hill Murray'),
(27, 'Section 4AA', 'White Bear Lake'),
(28, 'Section 4AA', 'Mounds View'),
(29, 'Section 4AA', 'Woodbury'),
(30, 'Section 4AA', 'Tartan'),
(31, 'Section 4AA', 'Roseville'),
(32, 'Section 4AA', 'North St. Paul'),
(33, 'Section 5AA', 'Centennial'),
(34, 'Section 5AA', 'Maple Grove'),
(35, 'Section 5AA', 'Blaine'),
(36, 'Section 5AA', 'Champlin Park'),
(37, 'Section 5AA', 'Anoka'),
(38, 'Section 5AA', 'Coon Rapids'),
(39, 'Section 5AA', 'Spring Lake Park'),
(40, 'Section 5AA', 'Osseo'),
(41, 'Section 6AA', 'Edina'),
(42, 'Section 6AA', 'Cretin Derham Hall'),
(43, 'Section 6AA', 'Wayzata'),
(44, 'Section 6AA', 'Benilde St. Margaret'),
(45, 'Section 6AA', 'St. Louis Park'),
(46, 'Section 6AA', 'Armstrong Cooper'),
(47, 'Section 6AA', 'Academy of Holy Angels'),
(48, 'Section 6AA', 'Hopkins'),
(49, 'Section 7AA', 'Elk River'),
(50, 'Section 7AA', 'Duluth East'),
(51, 'Section 7AA', 'Cloquet'),
(52, 'Section 7AA', 'Grand Rapids'),
(53, 'Section 7AA', 'Andover'),
(54, 'Section 7AA', 'Duluth Marshall'),
(55, 'Section 7AA', 'St. Francis'),
(56, 'Section 7AA', 'Forest Lake'),
(57, 'Section 8AA', 'Moorhead'),
(58, 'Section 8AA', 'St. Michael Albertville'),
(59, 'Section 8AA', 'Roseau'),
(60, 'Section 8AA', 'Brainerd'),
(61, 'Section 8AA', 'Bemiji'),
(62, 'Section 8AA', 'Buffalo'),
(63, 'Section 8AA', 'St. Cloud'),
(64, 'Section 8AA', 'Rogers');

-- --------------------------------------------------------

--
-- Table structure for table `section1`
--

CREATE TABLE `section1` (
  `username` varchar(100) DEFAULT NULL,
  `game1` varchar(100) DEFAULT NULL,
  `game2` varchar(100) DEFAULT NULL,
  `game3` varchar(100) DEFAULT NULL,
  `game4` varchar(100) DEFAULT NULL,
  `game5` varchar(100) DEFAULT NULL,
  `game6` varchar(100) DEFAULT NULL,
  `game7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section2`
--

CREATE TABLE `section2` (
  `username` varchar(100) DEFAULT NULL,
  `game1` varchar(100) DEFAULT NULL,
  `game2` varchar(100) DEFAULT NULL,
  `game3` varchar(100) DEFAULT NULL,
  `game4` varchar(100) DEFAULT NULL,
  `game5` varchar(100) DEFAULT NULL,
  `game6` varchar(100) DEFAULT NULL,
  `game7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section3`
--

CREATE TABLE `section3` (
  `username` varchar(100) DEFAULT NULL,
  `game1` varchar(100) DEFAULT NULL,
  `game2` varchar(100) DEFAULT NULL,
  `game3` varchar(100) DEFAULT NULL,
  `game4` varchar(100) DEFAULT NULL,
  `game5` varchar(100) DEFAULT NULL,
  `game6` varchar(100) DEFAULT NULL,
  `game7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section4`
--

CREATE TABLE `section4` (
  `username` varchar(100) DEFAULT NULL,
  `game1` varchar(100) DEFAULT NULL,
  `game2` varchar(100) DEFAULT NULL,
  `game3` varchar(100) DEFAULT NULL,
  `game4` varchar(100) DEFAULT NULL,
  `game5` varchar(100) DEFAULT NULL,
  `game6` varchar(100) DEFAULT NULL,
  `game7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section5`
--

CREATE TABLE `section5` (
  `username` varchar(100) DEFAULT NULL,
  `game1` varchar(100) DEFAULT NULL,
  `game2` varchar(100) DEFAULT NULL,
  `game3` varchar(100) DEFAULT NULL,
  `game4` varchar(100) DEFAULT NULL,
  `game5` varchar(100) DEFAULT NULL,
  `game6` varchar(100) DEFAULT NULL,
  `game7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section6`
--

CREATE TABLE `section6` (
  `username` varchar(100) DEFAULT NULL,
  `game1` varchar(100) DEFAULT NULL,
  `game2` varchar(100) DEFAULT NULL,
  `game3` varchar(100) DEFAULT NULL,
  `game4` varchar(100) DEFAULT NULL,
  `game5` varchar(100) DEFAULT NULL,
  `game6` varchar(100) DEFAULT NULL,
  `game7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section7`
--

CREATE TABLE `section7` (
  `username` varchar(100) DEFAULT NULL,
  `game1` varchar(100) DEFAULT NULL,
  `game2` varchar(100) DEFAULT NULL,
  `game3` varchar(100) DEFAULT NULL,
  `game4` varchar(100) DEFAULT NULL,
  `game5` varchar(100) DEFAULT NULL,
  `game6` varchar(100) DEFAULT NULL,
  `game7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section8`
--

CREATE TABLE `section8` (
  `username` varchar(100) DEFAULT NULL,
  `game1` varchar(100) DEFAULT NULL,
  `game2` varchar(100) DEFAULT NULL,
  `game3` varchar(100) DEFAULT NULL,
  `game4` varchar(100) DEFAULT NULL,
  `game5` varchar(100) DEFAULT NULL,
  `game6` varchar(100) DEFAULT NULL,
  `game7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `favoriteteam` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstname`, `lastname`, `email`, `password`, `favoriteteam`) VALUES
('baani', 'Zak', 'Baani', 'zak@century.edu', 'java', 'Bemiji'),
('jorda262', 'Taylor', 'Jordan', 'jorda262@century.edu', '1234', 'Centennial'),
('mike', 'Mike', 'Albrecht', 'mike@magic.com', 'magic', 'Maple Grove'),
('PAIN', 'Christopher', 'Payne', 'maxp74442@gmail.com', '1111', 'Anoka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ex_bracket`
--
ALTER TABLE `ex_bracket`
  ADD PRIMARY KEY (`bracket_division`,`bracket_user`),
  ADD UNIQUE KEY `bracket_id` (`bracket_id`);

--
-- Indexes for table `ex_teams`
--
ALTER TABLE `ex_teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `section1`
--
ALTER TABLE `section1`
  ADD KEY `username` (`username`);

--
-- Indexes for table `section2`
--
ALTER TABLE `section2`
  ADD KEY `username` (`username`);

--
-- Indexes for table `section3`
--
ALTER TABLE `section3`
  ADD KEY `username` (`username`);

--
-- Indexes for table `section4`
--
ALTER TABLE `section4`
  ADD KEY `username` (`username`);

--
-- Indexes for table `section5`
--
ALTER TABLE `section5`
  ADD KEY `username` (`username`);

--
-- Indexes for table `section6`
--
ALTER TABLE `section6`
  ADD KEY `username` (`username`);

--
-- Indexes for table `section7`
--
ALTER TABLE `section7`
  ADD KEY `username` (`username`);

--
-- Indexes for table `section8`
--
ALTER TABLE `section8`
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ex_bracket`
--
ALTER TABLE `ex_bracket`
  MODIFY `bracket_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ex_teams`
--
ALTER TABLE `ex_teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `section1`
--
ALTER TABLE `section1`
  ADD CONSTRAINT `section1_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `section2`
--
ALTER TABLE `section2`
  ADD CONSTRAINT `section2_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `section3`
--
ALTER TABLE `section3`
  ADD CONSTRAINT `section3_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `section4`
--
ALTER TABLE `section4`
  ADD CONSTRAINT `section4_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `section5`
--
ALTER TABLE `section5`
  ADD CONSTRAINT `section5_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `section6`
--
ALTER TABLE `section6`
  ADD CONSTRAINT `section6_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `section7`
--
ALTER TABLE `section7`
  ADD CONSTRAINT `section7_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `section8`
--
ALTER TABLE `section8`
  ADD CONSTRAINT `section8_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
